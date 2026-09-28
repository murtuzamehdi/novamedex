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
          <span>Schedule a Demo</span>
        </div>
        <div class="nm-hero-inner-grid">
          <div>
            <span class="nm-section-tag">INTERACTIVE DEMO</span>
            <h1>See NovaMedex in Action</h1>
            <p class="nm-hero-inner-lead">
              Experience firsthand how our integrated billing engine, cloud EHR, and automated claim scrubber streamline provider workflows and recover revenue.
            </p>
            <ul class="nm-check-list" style="margin:24px 0;">
              <li><i class="fa-solid fa-circle-check"></i> Live tour of real-time KPI and financial reporting dashboards</li>
              <li><i class="fa-solid fa-circle-check"></i> Demonstration of automated patient eligibility verification</li>
              <li><i class="fa-solid fa-circle-check"></i> Specialty-specific EHR chart templates and e-prescribing tools</li>
              <li><i class="fa-solid fa-circle-check"></i> Custom ROI analysis tailored specifically to your practice volume</li>
            </ul>
          </div>
          <div class="nm-card-form">
            <h3 style="font-size:1.35rem; margin-bottom:6px; color:var(--color-primary);">Book Your 1-on-1 Walkthrough</h3>
            <p style="font-size:0.88rem; color:var(--color-text-muted); margin-bottom:20px;">Select your preferred time with a senior NovaMedex solution specialist.</p>
            <form class="nm-form">
              <div class="nm-form-group">
                <label class="nm-label">Full Name *</label>
                <input type="text" class="nm-input" placeholder="Your Name" required>
              </div>
              <div class="nm-hero-form-row">
                <div class="nm-form-group">
                  <label class="nm-label">Work Email *</label>
                  <input type="email" class="nm-input" placeholder="doctor@practice.com" required>
                </div>
                <div class="nm-form-group">
                  <label class="nm-label">Phone *</label>
                  <input type="tel" class="nm-input" placeholder="(555) 000-0000" required>
                </div>
              </div>
              <div class="nm-form-group">
                <label class="nm-label">Specialty *</label>
                <input type="text" class="nm-input" placeholder="e.g. Cardiology, Urgent Care, Internal Med" required>
              </div>
              <div class="nm-form-group">
                <label class="nm-label">Preferred Demo Date/Time *</label>
                <input type="datetime-local" class="nm-input" required>
              </div>
              <button type="submit" class="nm-btn nm-btn-primary nm-btn-full nm-btn-lg">
                Confirm Demo Appointment <i class="fa-solid fa-calendar-check"></i>
              </button>
            </form>
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
  
    
    
  <?php include('includes/footer.php');?>
</body>
</html>
