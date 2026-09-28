const nodemailer = require('nodemailer');
const querystring = require('querystring');

async function parseBody(req) {
  if (req.body && typeof req.body === 'object' && Object.keys(req.body).length > 0) {
    return req.body;
  }
  if (typeof req.body === 'string' && req.body.trim().length > 0) {
    try {
      return JSON.parse(req.body);
    } catch (_) {
      return querystring.parse(req.body);
    }
  }
  return new Promise((resolve) => {
    let raw = '';
    req.on('data', chunk => { raw += chunk; });
    req.on('end', () => {
      if (!raw || !raw.trim()) return resolve({});
      try {
        resolve(JSON.parse(raw));
      } catch (_) {
        resolve(querystring.parse(raw));
      }
    });
    req.on('error', () => resolve({}));
  });
}

module.exports = async (req, res) => {
  // Allow CORS
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Accept');

  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  if (req.method !== 'POST') {
    return res.redirect(302, '/thank-you/');
  }

  const body = (await parseBody(req)) || {};
  console.log('[NovaMedex Lead] Received submission:', JSON.stringify(body));

  // 1. Anti-spam Honeypot Check
  if (body._hp_company) {
    const redirectTo = body.redirect_to || '/thank-you/';
    if (req.headers['content-type']?.includes('json') || body.is_ajax === '1' || req.headers['accept']?.includes('application/json')) {
      return res.status(200).json({ success: true, redirect: redirectTo });
    }
    return res.redirect(302, redirectTo);
  }

  // 2. Extract Fields
  const fullName = body.full_name || body.name || 'Not provided';
  const email = body.email || 'Not provided';
  const phone = body.phone || 'Not provided';
  const practiceName = body.practice_name || 'Not specified';
  const serviceInterest = body.service_interest || body.service || 'Medical Billing';
  const practiceVolume = body.monthly_collections || body.practice_type || body.practice_volume || '';
  const preferredDateTime = body.preferred_datetime || '';
  const message = body.message || body.notes || '';
  const formType = body.form_type || 'Website Lead / Consultation Request';
  const pageUrl = body.page_url || req.headers.referer || 'https://novamedex.vercel.app';
  const redirectTo = body.redirect_to || '/thank-you/';
  const clientIp = req.headers['x-forwarded-for'] || req.socket?.remoteAddress || 'Unknown IP';
  const timestamp = new Date().toLocaleString('en-US', { timeZone: 'America/New_York' }) + ' EST';

  // 3. Build HTML Email
  const subject = `🌟 New NovaMedex Practice Lead: ${fullName} [${formType}]`;

  const htmlBody = `
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: "Segoe UI", Arial, sans-serif; background-color: #F8FAFC; margin: 0; padding: 20px; color: #1E293B; }
    .container { max-width: 640px; margin: 0 auto; background: #FFFFFF; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #E2E8F0; }
    .header { background: linear-gradient(135deg, #0A1F44 0%, #071530 100%); padding: 28px; text-align: center; color: #FFFFFF; }
    .header h1 { margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.5px; }
    .header h1 span { color: #00B4D8; }
    .badge { display: inline-block; background: #00B4D8; color: #FFFFFF; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; margin-top: 10px; }
    .content { padding: 32px 28px; }
    .lead-title { font-size: 18px; font-weight: 700; color: #0A1F44; margin-bottom: 20px; border-bottom: 2px solid #E2E8F0; padding-bottom: 10px; }
    .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
    .info-table td { padding: 12px 14px; border-bottom: 1px solid #F1F5F9; font-size: 14px; }
    .info-table td.label { width: 35%; font-weight: 600; color: #64748B; background: #F8FAFC; }
    .info-table td.value { color: #0A1F44; font-weight: 600; }
    .message-box { background: #F8FAFC; border-left: 4px solid #00B4D8; padding: 16px; border-radius: 0 8px 8px 0; font-size: 14px; line-height: 1.6; margin-top: 10px; }
    .footer { background: #071530; color: #94A3B8; text-align: center; padding: 20px; font-size: 12px; }
    .footer a { color: #00B4D8; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>NOVA<span>MEDEX</span></h1>
      <div class="badge">${formType}</div>
    </div>
    <div class="content">
      <div class="lead-title">New Healthcare Practice Inquiry</div>
      <table class="info-table">
        <tr>
          <td class="label">Full Name:</td>
          <td class="value"><strong>${fullName}</strong></td>
        </tr>
        <tr>
          <td class="label">Email Address:</td>
          <td class="value"><a href="mailto:${email}" style="color:#00B4D8;">${email}</a></td>
        </tr>
        <tr>
          <td class="label">Phone Number:</td>
          <td class="value"><a href="tel:${phone}" style="color:#0A1F44;">${phone}</a></td>
        </tr>
        <tr>
          <td class="label">Practice Name:</td>
          <td class="value">${practiceName}</td>
        </tr>
        <tr>
          <td class="label">Service Interest:</td>
          <td class="value"><span style="color:#00C9A7; font-weight:700;">${serviceInterest}</span></td>
        </tr>
        ${practiceVolume ? `<tr><td class="label">Practice Volume / Type:</td><td class="value">${practiceVolume}</td></tr>` : ''}
        ${preferredDateTime ? `<tr><td class="label">Preferred Demo Time:</td><td class="value">${preferredDateTime}</td></tr>` : ''}
        <tr>
          <td class="label">Received At:</td>
          <td class="value">${timestamp}</td>
        </tr>
        <tr>
          <td class="label">Source Page:</td>
          <td class="value"><span style="font-size:12px; color:#64748B;">${pageUrl}</span></td>
        </tr>
        <tr>
          <td class="label">Visitor IP:</td>
          <td class="value"><span style="font-size:12px; color:#64748B;">${clientIp}</span></td>
        </tr>
      </table>
      ${message ? `
      <div style="font-weight:600; font-size:13px; color:#64748B; margin-top:16px;">Practice Notes / Inquiry Message:</div>
      <div class="message-box">${message.replace(/\n/g, '<br>')}</div>
      ` : ''}
    </div>
    <div class="footer">
      Automated lead notification from <a href="https://novamedex.vercel.app">NovaMedex</a>. Reply directly to this email to contact the provider.
    </div>
  </div>
</body>
</html>
  `;

  // 4. Send via SMTP
  try {
    const transporter = nodemailer.createTransport({
      host: 'novamedex.co',
      port: 465,
      secure: true,
      auth: {
        user: 'sales@novamedex.co',
        pass: '^EPQn53-Kk1l9KL~'
      },
      connectionTimeout: 10000,
      greetingTimeout: 10000,
      socketTimeout: 15000
    });

    const info = await transporter.sendMail({
      from: '"NovaMedex Website Lead" <sales@novamedex.co>',
      to: 'sales@novamedex.co',
      replyTo: (email && email !== 'Not provided') ? email : 'sales@novamedex.co',
      subject: subject,
      html: htmlBody
    });

    console.log(`[Vercel Serverless] Mail successfully delivered for ${fullName} (${email}) - MessageId: ${info.messageId}`);

    if (req.headers['content-type']?.includes('json') || body.is_ajax === '1' || req.headers['accept']?.includes('application/json')) {
      return res.status(200).json({ success: true, redirect: redirectTo, messageId: info.messageId });
    }
    return res.redirect(302, redirectTo);

  } catch (error) {
    console.error('[Vercel Serverless] SMTP send error:', error);
    // Return or redirect gracefully
    if (req.headers['content-type']?.includes('json') || body.is_ajax === '1' || req.headers['accept']?.includes('application/json')) {
      return res.status(200).json({ success: false, redirect: redirectTo, error: error.message });
    }
    return res.redirect(302, redirectTo);
  }
};
