<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include('includes/head.php');?>
</head>
<body>

  
  <?php include('includes/header.php');?>

  <!-- MOBILE DRAWER -->
  <div class="nm-drawer-overlay"></div>
  <div class="nm-drawer">
    <div class="nm-drawer-header">
      <img src="assets/images/logo.png" alt="NovaMedex Logo" style="max-height:40px;">
      <button class="nm-drawer-close" aria-label="Close Mobile Menu"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="nm-drawer-links">
      <span class="nm-drawer-section-title">Services</span>
      <a href="services/medical-billing/" class="nm-drawer-link">Medical Billing Services</a>
      <a href="services/medical-billing-audit/" class="nm-drawer-link">Medical Billing Audit</a>
      <a href="services/medical-coding/" class="nm-drawer-link">Medical Coding Services</a>
      <a href="services/revenue-cycle-management/" class="nm-drawer-link">Healthcare RCM</a>
      <a href="services/provider-credentialing/" class="nm-drawer-link">Provider Credentialing</a>
      <a href="services/clearinghouse/" class="nm-drawer-link">Clearinghouse Services</a>

      <span class="nm-drawer-section-title">Specialties & Solutions</span>
      <a href="specialties/index/" class="nm-drawer-link">All 75+ Specialties</a>
      <a href="solutions/medical-billing-software/" class="nm-drawer-link">Medical Billing Software</a>
      <a href="solutions/electronic-health-records-ehr/" class="nm-drawer-link">Free EHR & PMS</a>

      <span class="nm-drawer-section-title">Company</span>
      <a href="pricing/" class="nm-drawer-link">Pricing Plans (2.49%)</a>
      <a href="about/" class="nm-drawer-link">About NovaMedex</a>
      <a href="testimonials/" class="nm-drawer-link">Client Reviews</a>
      <a href="near-me/index/" class="nm-drawer-link">Near Me / Locations</a>
      <a href="contact/" class="nm-drawer-link">Contact Us</a>

      <div style="margin-top: 24px;">
        <a href="tel:+13467043180" class="nm-btn nm-btn-primary nm-btn-full">
          <i class="fa-solid fa-phone"></i> +1(346) 704-3180
        </a>
      </div>
    </div>
  </div>
  

  <main class="nm-main">
    
    <section class="nm-hero-inner">
      <div class="nm-container">
        <div class="nm-breadcrumb">
          <a href="index/">Home</a>
          <span class="nm-breadcrumb-separator"><i class="fa-solid fa-chevron-right"></i></span>
          <span>Pricing</span>
        </div>
        <div class="nm-hero-inner-grid">
          <div class="nm-hero-inner-content">
            <span class="nm-section-tag">TRANSPARENT PRICING</span>
            <h1>Medical Billing Pricing Plans</h1>
            <p class="nm-hero-inner-lead">
              Our transparent, performance-based pricing starts at just <strong>2.49% of monthly collections</strong>. No setup fees, no software licensing charges, and no long-term restrictive contracts. We only succeed when you get paid.
            </p>
            <div style="display:flex; gap:14px; flex-wrap:wrap; margin-top:20px;">
              <span class="nm-pill"><i class="fa-solid fa-circle-check" style="color:var(--color-emerald);"></i> 2.49% Base Rate</span>
              <span class="nm-pill"><i class="fa-solid fa-circle-check" style="color:var(--color-emerald);"></i> Free Cloud EHR &amp; PMS</span>
              <span class="nm-pill"><i class="fa-solid fa-circle-check" style="color:var(--color-emerald);"></i> Zero Setup Fee</span>
            </div>
          </div>
          <div class="nm-hero-inner-media">
            <div class="nm-card-form" id="pricing-unlock">
              <h3 style="margin-bottom:14px; font-size:1.25rem;">Unlock Custom Practice Pricing</h3>
              <p style="font-size:0.88rem; color:var(--color-text-muted); margin-bottom:18px;">Drop your details to receive an instant fee breakdown based on your specialty and monthly collections volume.</p>
              <form class="nm-form" action="send-mail.php" method="POST">
                <input type="hidden" name="form_type" value="Custom Practice Pricing Unlock">
                <input type="hidden" name="redirect_to" value="thank-you/">
                <input type="text" name="_hp_company" style="display:none !important;" tabindex="-1" autocomplete="off">
                <div class="nm-form-group">
                  <select name="practice_volume" class="nm-select" required>
                    <option value="" disabled selected>Select Practice Type *</option>
                    <option value="Solo Physician">Solo Physician</option>
                    <option value="Group Medical Practice">Group Medical Practice</option>
                    <option value="Specialty Clinic">Specialty Clinic</option>
                    <option value="Diagnostic / Laboratory">Diagnostic / Laboratory</option>
                    <option value="Hospital / Ambulatory Center">Hospital / Ambulatory Center</option>
                  </select>
                </div>
                <div class="nm-form-group">
                  <input type="text" name="practice_name" class="nm-input" placeholder="Practice Name *" required>
                </div>
                <div class="nm-form-group">
                  <input type="number" name="monthly_collections" class="nm-input" placeholder="Monthly Collections ($USD) *" required>
                </div>
                <div class="row nm-form-row-6" style="display:flex; flex-wrap:wrap; margin-left:-8px; margin-right:-8px;">
                  <div class="col-12 col-md-6 nm-form-col-6" style="flex:0 0 50%; max-width:50%; width:50%; padding:0 8px; box-sizing:border-box;">
                    <div class="nm-form-group" style="margin-bottom:0;">
                      <input type="email" name="email" class="nm-input" placeholder="Work Email *" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 nm-form-col-6" style="flex:0 0 50%; max-width:50%; width:50%; padding:0 8px; box-sizing:border-box;">
                    <div class="nm-form-group" style="margin-bottom:0;">
                      <input type="tel" name="phone" class="nm-input" placeholder="Phone Number *" required>
                    </div>
                  </div>
                </div>
                <button type="submit" class="nm-btn nm-btn-primary nm-btn-full" style="margin-top:14px;">
                  Unlock Pricing Details Now <i class="fa-solid fa-unlock"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  <!-- Trust Accreditation Badges -->
  <div class="nm-container">
    <div class="nm-trust-badges-wrap">
      
      <!-- 1. Google Reviews -->
      <div class="nm-trust-card">
        <div class="nm-trust-card-icon">
          <svg viewBox="0 0 40 40" width="40" height="40">
            <path fill="#4285F4" d="M39.6 20.45c0-1.42-.13-2.78-.37-4.09H20.4v7.74h10.8c-.47 2.49-1.89 4.6-4.02 6.01v4.97h6.5c3.8-3.5 6-8.66 6-14.63z"/>
            <path fill="#34A853" d="M20.4 40c5.4 0 9.93-1.79 13.24-4.85l-6.5-4.97c-1.8 1.21-4.11 1.93-6.74 1.93-5.18 0-9.57-3.5-11.13-8.21H2.49v5.13C5.81 35.6 12.56 40 20.4 40z"/>
            <path fill="#FBBC05" d="M9.27 23.9c-.4-1.21-.63-2.5-.63-3.9s.23-2.69.63-3.9V10.97H2.49C1.15 13.64.4 16.73.4 20s.75 6.36 2.09 9.03l6.78-5.13z"/>
            <path fill="#EA4335" d="M20.4 7.92c2.94 0 5.58 1.01 7.66 3l5.74-5.74C30.31 1.95 25.79 0 20.4 0 12.56 0 5.81 4.4 2.49 10.97l6.78 5.13c1.56-4.71 5.95-8.18 11.13-8.18z"/>
          </svg>
        </div>
        <div class="nm-trust-card-info">
          <span class="nm-trust-card-title">Google Reviews</span>
          <div class="nm-trust-card-rating">
            <span>4.9</span>
            <span class="nm-trust-stars">★★★★★</span>
            <span class="nm-trust-card-count">(340+)</span>
          </div>
          <span class="nm-trust-card-verified"><i class="fa-solid fa-circle-check"></i> Verified Providers</span>
        </div>
      </div>

      <!-- 2. Trustpilot -->
      <div class="nm-trust-card">
        <div class="nm-trust-card-icon">
          <svg viewBox="0 0 40 40" width="40" height="40">
            <rect width="40" height="40" rx="8" fill="#00B67A"/>
            <path fill="#FFFFFF" d="M20 6.5l3.9 11.9H36l-10.1 7.3 3.9 11.9-9.8-7.3-9.8 7.3 3.9-11.9-10.1-7.3h12.1z"/>
            <path fill="#005128" d="M23.9 18.4l-3.9-11.9v23.8l9.8 7.3-3.9-11.9z"/>
          </svg>
        </div>
        <div class="nm-trust-card-info">
          <span class="nm-trust-card-title">Trustpilot</span>
          <div class="nm-trust-card-rating">
            <span>4.8</span>
            <span class="nm-trust-stars trustpilot">★★★★★</span>
            <span class="nm-trust-card-count">(200+)</span>
          </div>
          <span class="nm-trust-card-verified"><i class="fa-solid fa-circle-check"></i> Excellent Score</span>
        </div>
      </div>

      <!-- 3. BBB Accredited -->
      <div class="nm-trust-card">
        <div class="nm-trust-card-icon">
          <svg viewBox="0 0 40 40" width="40" height="40">
            <rect width="40" height="40" rx="8" fill="#005A9C"/>
            <text x="20" y="24" fill="#FFFFFF" font-family="'Plus Jakarta Sans', sans-serif" font-size="13" font-weight="900" text-anchor="middle">BBB</text>
            <rect x="7" y="27" width="26" height="7" rx="3" fill="#F59E0B"/>
            <text x="20" y="32.5" fill="#0A1F44" font-family="'Plus Jakarta Sans', sans-serif" font-size="6.2" font-weight="900" text-anchor="middle">ACCREDITED</text>
          </svg>
        </div>
        <div class="nm-trust-card-info">
          <span class="nm-trust-card-title">BBB Accredited</span>
          <div class="nm-trust-card-rating">
            <span>Grade A+</span>
            <span class="nm-trust-card-count">Highest Reliability</span>
          </div>
          <span class="nm-trust-card-verified"><i class="fa-solid fa-shield-halved"></i> 100% Accredited</span>
        </div>
      </div>

      <!-- 4. ONC HIT Certified -->
      <div class="nm-trust-card">
        <div class="nm-trust-card-icon">
          <svg viewBox="0 0 40 40" width="40" height="40">
            <rect width="40" height="40" rx="8" fill="#0F2D6B"/>
            <circle cx="20" cy="18" r="11" fill="none" stroke="#00C9A7" stroke-width="2.5"/>
            <path fill="none" stroke="#00C9A7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M16 18l3 3 6-6"/>
            <text x="20" y="35" fill="#E2E8F0" font-family="'Plus Jakarta Sans', sans-serif" font-size="7" font-weight="800" text-anchor="middle">ONC HIT</text>
          </svg>
        </div>
        <div class="nm-trust-card-info">
          <span class="nm-trust-card-title">ONC Certified</span>
          <div class="nm-trust-card-rating">
            <span>Health IT</span>
            <span class="nm-trust-card-count">2015 Edition</span>
          </div>
          <span class="nm-trust-card-verified"><i class="fa-solid fa-lock"></i> HIPAA &amp; EDI Compliant</span>
        </div>
      </div>

    </div>
  </div>
  

    <!-- 3 Tier Pricing Cards Section -->
    <section class="nm-section nm-section-white">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">FLEXIBLE MODELS</span>
          <h2 class="nm-section-title">Designed for Practices of Every Scale</h2>
          <p class="nm-section-desc">Choose between turnkey full-cycle RCM or customized standalone medical billing and coding support.</p>
        </div>

        <div class="nm-grid-3">
          <div class="nm-pricing-tier-card">
            <h3 style="font-size:1.35rem; color:var(--color-primary);">Starter Practice</h3>
            <p style="font-size:0.88rem; color:var(--color-text-muted); margin-bottom:12px;">Solo practitioners &amp; new clinics</p>
            <div class="nm-tier-price">3.49%<span> / mo</span></div>
            <p style="font-size:0.85rem; color:#64748B;">Of collected revenue</p>
            <ul class="nm-check-list" style="text-align:left; margin:24px 0;">
              <li><i class="fa-solid fa-check text-emerald"></i> Dedicated Medical Biller</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Clean Claim Scrubbing</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Standard Denial Management</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Free Cloud EHR &amp; PMS</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Monthly Financial Reports</li>
            </ul>
            <a href="contact/" class="nm-btn nm-btn-secondary nm-btn-full">Choose Starter</a>
          </div>

          <div class="nm-pricing-tier-card featured">
            <div class="nm-tier-badge">Most Popular</div>
            <h3 style="font-size:1.35rem; color:var(--color-primary);">Full RCM Managed</h3>
            <p style="font-size:0.88rem; color:var(--color-text-muted); margin-bottom:12px;">High-volume clinics &amp; specialties</p>
            <div class="nm-tier-price" style="color:var(--color-cyan);">2.49%<span> / mo</span></div>
            <p style="font-size:0.85rem; color:#64748B;">For collections over $50k/mo</p>
            <ul class="nm-check-list" style="text-align:left; margin:24px 0;">
              <li><i class="fa-solid fa-check text-emerald"></i> Everything in Starter +</li>
              <li><i class="fa-solid fa-check text-emerald"></i> AAPC Certified Coding Support</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Prior Authorization Tracking</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Aggressive AR Appeals &amp; Follow-up</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Real-Time BI Performance Dashboard</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Dedicated Senior Account Manager</li>
            </ul>
            <a href="contact/" class="nm-btn nm-btn-primary nm-btn-full">Select Full RCM</a>
          </div>

          <div class="nm-pricing-tier-card">
            <h3 style="font-size:1.35rem; color:var(--color-primary);">Enterprise &amp; Hospitals</h3>
            <p style="font-size:0.88rem; color:var(--color-text-muted); margin-bottom:12px;">Multi-location networks &amp; surgery centers</p>
            <div class="nm-tier-price">Custom</div>
            <p style="font-size:0.85rem; color:#64748B;">Volume-based discounted tier</p>
            <ul class="nm-check-list" style="text-align:left; margin:24px 0;">
              <li><i class="fa-solid fa-check text-emerald"></i> Custom SLA Agreements</li>
              <li><i class="fa-solid fa-check text-emerald"></i> UB-04 &amp; CMS-1500 Combined</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Hospital &amp; Facility Credentialing</li>
              <li><i class="fa-solid fa-check text-emerald"></i> On-Demand Specialty Coders</li>
              <li><i class="fa-solid fa-check text-emerald"></i> Dedicated Executive Account Director</li>
            </ul>
            <a href="contact/" class="nm-btn nm-btn-secondary nm-btn-full">Contact Enterprise</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Interactive Calculator Section -->
    <section class="nm-section nm-section-alt">
      <div class="nm-container">
        <div class="nm-grid-2" style="align-items:center;">
          <div>
            <span class="nm-section-tag">CALCULATE YOUR SAVINGS</span>
            <h2 class="nm-section-title">See How Much You Save With NovaMedex</h2>
            <p class="nm-section-desc">In-house billing departments spend 8-12% of collections on salaries, benefits, software licenses, clearinghouse fees, and training. NovaMedex replaces that overhead with an all-inclusive 2.49% fee.</p>
            <ul class="nm-check-list">
              <li><i class="fa-solid fa-circle-check"></i> Zero staff turnover disruption or recruitment costs</li>
              <li><i class="fa-solid fa-circle-check"></i> Free billing and electronic health records software</li>
              <li><i class="fa-solid fa-circle-check"></i> 98% first-pass claim acceptance eliminates aged rework</li>
            </ul>
          </div>
          <div>
            <div class="nm-calc-box">
              <h3 style="font-size:1.3rem; margin-bottom:16px;">Practice Savings Estimator</h3>
              <div class="nm-calc-range-wrap">
                <div class="nm-calc-output">
                  <span style="font-size:0.95rem; color:var(--color-text-muted);">Estimated Monthly Collections:</span>
                  <span class="nm-calc-val" id="calcDisplay">$100,000</span>
                </div>
                <input type="range" class="nm-calc-slider" id="calcSlider" min="20000" max="500000" step="5000" value="100000" oninput="
                  const val = parseInt(this.value);
                  document.getElementById('calcDisplay').innerText = '$' + val.toLocaleString();
                  document.getElementById('inhouseCost').innerText = '$' + Math.round(val * 0.09).toLocaleString();
                  document.getElementById('novaCost').innerText = '$' + Math.round(val * 0.0249).toLocaleString();
                  document.getElementById('savingsCost').innerText = '$' + Math.round(val * (0.09 - 0.0249)).toLocaleString();
                ">
              </div>

              <div style="background:#F8FAFC; padding:18px; border-radius:var(--radius-sm); margin-bottom:16px;">
                <div style="display:flex; justify-content:space-between; margin-bottom:8px; font-size:0.92rem;">
                  <span>Estimated In-House Cost (~9%):</span>
                  <strong id="inhouseCost" style="color:#EF4444;">$9,000 / mo</strong>
                </div>
                <div style="display:flex; justify-content:space-between; margin-bottom:8px; font-size:0.92rem;">
                  <span>NovaMedex Fee (2.49%):</span>
                  <strong id="novaCost" style="color:var(--color-cyan);">$2,490 / mo</strong>
                </div>
                <div style="display:flex; justify-content:space-between; padding-top:8px; border-top:1px dashed var(--color-border); font-size:1.05rem;">
                  <strong>Your Estimated Monthly Savings:</strong>
                  <strong id="savingsCost" style="color:var(--color-emerald);">$6,510 / mo</strong>
                </div>
              </div>

              <a href="contact/" class="nm-btn nm-btn-primary nm-btn-full">Claim Your Free Practice Audit</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  <?php include('includes/footer.php');?>
</body>
</html>
