<?php
/**
 * NovaMedex - Lead Form Submission & SMTP Mailer
 * Pure Core PHP Implementation (Zero external dependencies)
 * Outgoing Server: novamedex.co (Port 465 SSL)
 * Recipient: sales@novamedex.co
 */

// Error reporting - disable displaying errors directly in production to prevent leaking sensitive info
error_reporting(E_ALL);
ini_set('display_errors', '0');

// Configuration
define('SMTP_HOST', 'ssl://novamedex.co');
define('SMTP_PORT', 465);
define('SMTP_USER', 'sales@novamedex.co');
define('SMTP_PASS', '^EPQn53-Kk1l9KL~');
define('MAIL_TO', 'sales@novamedex.co');
define('MAIL_FROM', 'sales@novamedex.co');
define('MAIL_FROM_NAME', 'NovaMedex Website Lead');

/**
 * Pure Core PHP SMTP Client
 */
class CoreSmtpMailer {
    private $socket;
    private $host;
    private $port;
    private $user;
    private $pass;
    private $timeout;
    private $debugLog = [];

    public function __construct($host, $port, $user, $pass, $timeout = 15) {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
        $this->timeout = $timeout;
    }

    private function log($msg) {
        $this->debugLog[] = $msg;
    }

    public function getLogs() {
        return $this->debugLog;
    }

    private function getResponse() {
        $response = '';
        while ($line = fgets($this->socket, 512)) {
            $response .= $line;
            if (substr($line, 3, 1) === ' ') {
                break;
            }
        }
        $this->log("SERVER: " . trim($response));
        return $response;
    }

    private function sendCommand($cmd, $expectedCode = 250) {
        $this->log("CLIENT: " . (strpos($cmd, 'AUTH') !== false || strlen($cmd) > 30 ? '[COMMAND]' : trim($cmd)));
        fputs($this->socket, $cmd . "\r\n");
        $response = $this->getResponse();
        $code = substr($response, 0, 3);
        if ($expectedCode && (int)$code !== (int)$expectedCode) {
            throw new Exception("SMTP Error: Expected $expectedCode but received $code: $response");
        }
        return $response;
    }

    public function send($to, $fromEmail, $fromName, $replyTo, $subject, $htmlBody, $textBody = '') {
        $errno = 0;
        $errstr = '';

        // 1. Connect via SSL socket
        $this->socket = @fsockopen($this->host, $this->port, $errno, $errstr, $this->timeout);
        if (!$this->socket) {
            throw new Exception("Failed to connect to SMTP host {$this->host}: ($errno) $errstr");
        }

        $connectResponse = $this->getResponse();
        if (substr($connectResponse, 0, 3) !== '220') {
            fclose($this->socket);
            throw new Exception("Unexpected SMTP connect banner: $connectResponse");
        }

        try {
            // 2. Handshake
            $this->sendCommand("EHLO novamedex.co", 250);

            // 3. Authenticate
            $this->sendCommand("AUTH LOGIN", 334);
            $this->sendCommand(base64_encode($this->user), 334);
            $this->sendCommand(base64_encode($this->pass), 235);

            // 4. Envelope
            $this->sendCommand("MAIL FROM: <{$fromEmail}>", 250);
            $this->sendCommand("RCPT TO: <{$to}>", 250);

            // 5. Data block
            $this->sendCommand("DATA", 354);

            $boundary = "----=_Part_" . md5(uniqid(time(), true));
            $cleanSubject = preg_replace('/[\r\n]+/', ' ', $subject);

            // Headers
            $headers = [];
            $headers[] = "Date: " . date('r');
            $headers[] = "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$fromEmail}>";
            $headers[] = "To: <{$to}>";
            if (!empty($replyTo)) {
                $headers[] = "Reply-To: <{$replyTo}>";
            }
            $headers[] = "Subject: =?UTF-8?B?" . base64_encode($cleanSubject) . "?=";
            $headers[] = "Message-ID: <" . md5(uniqid(time(), true)) . "@novamedex.co>";
            $headers[] = "X-Mailer: NovaMedex Core PHP Mailer";
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-Type: multipart/alternative; boundary=\"{$boundary}\"";

            // Body
            $payload = implode("\r\n", $headers) . "\r\n\r\n";

            // Plain text part
            if (!empty($textBody)) {
                $payload .= "--{$boundary}\r\n";
                $payload .= "Content-Type: text/plain; charset=UTF-8\r\n";
                $payload .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
                $payload .= $textBody . "\r\n\r\n";
            }

            // HTML part
            $payload .= "--{$boundary}\r\n";
            $payload .= "Content-Type: text/html; charset=UTF-8\r\n";
            $payload .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
            $payload .= $htmlBody . "\r\n\r\n";
            $payload .= "--{$boundary}--\r\n";

            // End data indicator
            $payload .= "\r\n.";

            $this->sendCommand($payload, 250);

            // 6. Quit cleanly
            fputs($this->socket, "QUIT\r\n");
            $this->getResponse();
            fclose($this->socket);
            return true;

        } catch (Exception $e) {
            if ($this->socket) {
                @fputs($this->socket, "QUIT\r\n");
                @fclose($this->socket);
            }
            throw $e;
        }
    }
}

// =============================================================================
// MAIN REQUEST HANDLER
// =============================================================================

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /");
    exit;
}

// 1. Anti-spam Honeypot Check
// Bots tend to fill out invisible inputs like '_hp_company'
if (!empty($_POST['_hp_company'])) {
    // Silently redirect bot to thank-you without dispatching email
    header("Location: thank-you/");
    exit;
}

// If submitted via JSON or fetch payload where $_POST is not automatically populated:
if (empty($_POST)) {
    $rawInput = file_get_contents('php://input');
    if (!empty($rawInput)) {
        $decoded = json_decode($rawInput, true);
        if (is_array($decoded)) {
            $_POST = $decoded;
        } else {
            parse_str($rawInput, $parsed);
            if (is_array($parsed)) {
                $_POST = $parsed;
            }
        }
    }
}

// 2. Extract and Sanitize Input Fields
function cleanInput($data) {
    if (is_array($data)) {
        return array_map('cleanInput', $data);
    }
    return htmlspecialchars(trim((string)$data), ENT_QUOTES, 'UTF-8');
}

$fullName        = cleanInput($_POST['full_name'] ?? $_POST['name'] ?? '');
$email           = cleanInput($_POST['email'] ?? '');
$phone           = cleanInput($_POST['phone'] ?? '');
$practiceName    = cleanInput($_POST['practice_name'] ?? 'Not specified');
$serviceInterest = cleanInput($_POST['service_interest'] ?? $_POST['service'] ?? 'Medical Billing Consultation');
$practiceVolume  = cleanInput($_POST['practice_volume'] ?? $_POST['practice_type'] ?? '');
$message         = cleanInput($_POST['message'] ?? $_POST['notes'] ?? '');
$formType        = cleanInput($_POST['form_type'] ?? 'General Consultation Request');
$pageUrl         = cleanInput($_POST['page_url'] ?? $_SERVER['HTTP_REFERER'] ?? 'Website Direct');
$clientIp        = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
$timestamp       = date('F j, Y, g:i a T');

// Determine redirection destination
// If submitted from a subdirectory (e.g., /services/ or /specialties/), calculate relative redirect path
$redirectParam = $_POST['redirect_to'] ?? '';
$redirectUrl = !empty($redirectParam) ? $redirectParam : 'thank-you/';

// 3. Basic Validation
if (empty($fullName) && empty($email) && empty($phone)) {
    // Empty submission, return to referrer or home
    header("Location: " . $pageUrl);
    exit;
}

// 4. Construct Branded HTML Email
$subject = "🌟 New NovaMedex Practice Lead: " . ($fullName ?: $email) . " [{$formType}]";

$htmlBody = '
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>' . htmlspecialchars($subject) . '</title>
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
      <div class="badge">' . htmlspecialchars($formType) . '</div>
    </div>
    <div class="content">
      <div class="lead-title">New Healthcare Practice Inquiry</div>
      <table class="info-table">
        <tr>
          <td class="label">Full Name:</td>
          <td class="value"><strong>' . ($fullName ?: 'Not provided') . '</strong></td>
        </tr>
        <tr>
          <td class="label">Email Address:</td>
          <td class="value"><a href="mailto:' . htmlspecialchars($email) . '" style="color:#00B4D8;">' . ($email ?: 'Not provided') . '</a></td>
        </tr>
        <tr>
          <td class="label">Phone Number:</td>
          <td class="value"><a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '" style="color:#0A1F44;">' . ($phone ?: 'Not provided') . '</a></td>
        </tr>
        <tr>
          <td class="label">Practice Name:</td>
          <td class="value">' . ($practiceName ?: 'Not specified') . '</td>
        </tr>
        <tr>
          <td class="label">Service Interest:</td>
          <td class="value"><span style="color:#00C9A7; font-weight:700;">' . ($serviceInterest ?: 'Medical Billing') . '</span></td>
        </tr>';

if (!empty($practiceVolume)) {
    $htmlBody .= '
        <tr>
          <td class="label">Practice Type / Volume:</td>
          <td class="value">' . $practiceVolume . '</td>
        </tr>';
}

$htmlBody .= '
        <tr>
          <td class="label">Received At:</td>
          <td class="value">' . $timestamp . '</td>
        </tr>
        <tr>
          <td class="label">Source Page:</td>
          <td class="value"><span style="font-size:12px; color:#64748B;">' . $pageUrl . '</span></td>
        </tr>
        <tr>
          <td class="label">Visitor IP:</td>
          <td class="value"><span style="font-size:12px; color:#64748B;">' . $clientIp . '</span></td>
        </tr>
      </table>';

if (!empty($message)) {
    $htmlBody .= '
      <div style="font-weight:600; font-size:13px; color:#64748B; margin-top:16px;">Practice Notes / Inquiry Message:</div>
      <div class="message-box">' . nl2br($message) . '</div>';
}

$htmlBody .= '
    </div>
    <div class="footer">
      This is an automated practice inquiry notification sent from the <a href="https://novamedex.vercel.app">NovaMedex Website</a>.<br>
      Reply directly to this email to reach the prospective provider.
    </div>
  </div>
</body>
</html>';

// Plain text alternative
$textBody = "=== NEW NOVAMEDEX PRACTICE INQUIRY ===\n\n";
$textBody .= "Form Type: $formType\n";
$textBody .= "Name: $fullName\n";
$textBody .= "Email: $email\n";
$textBody .= "Phone: $phone\n";
$textBody .= "Practice Name: $practiceName\n";
$textBody .= "Service Interest: $serviceInterest\n";
if (!empty($practiceVolume)) $textBody .= "Practice Type: $practiceVolume\n";
if (!empty($message)) $textBody .= "\nMessage:\n$message\n\n";
$textBody .= "Timestamp: $timestamp\n";
$textBody .= "Page: $pageUrl\n";
$textBody .= "IP: $clientIp\n";

// 5. Send via Secure SMTP
$mailSuccess = false;
$errorMessage = '';

try {
    $mailer = new CoreSmtpMailer(SMTP_HOST, SMTP_PORT, SMTP_USER, SMTP_PASS, 15);
    $mailSuccess = $mailer->send(
        MAIL_TO,
        MAIL_FROM,
        MAIL_FROM_NAME,
        $email ?: MAIL_FROM,
        $subject,
        $htmlBody,
        $textBody
    );
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    // Also try standard mail() fallback if server has local MTA
    $headers = "From: " . MAIL_FROM_NAME . " <" . MAIL_FROM . ">\r\n";
    if (!empty($email)) $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $mailSuccess = @mail(MAIL_TO, $subject, $htmlBody, $headers);
}

// 6. Handle Response (JSON for AJAX or Redirect for regular form submit)
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (isset($_POST['is_ajax']) && $_POST['is_ajax'] === '1')
    || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

if ($isAjax) {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode([
        'success'  => $mailSuccess,
        'redirect' => $redirectUrl,
        'error'    => $mailSuccess ? null : $errorMessage
    ]);
    exit;
} else {
    // Native HTTP redirect to Thank You page
    header("Location: " . $redirectUrl, true, 302);
    exit;
}
