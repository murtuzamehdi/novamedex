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

    <!-- 3. HERO SECTION (2-COLUMN DESKTOP SIDE-BY-SIDE) -->
    <section class="nm-hero-home">
      <div class="nm-container">
        <div class="nm-hero-grid">
          
          <!-- Hero Left Column: Headline, Description & Quick Form -->
          <div class="nm-hero-content">
            <span class="nm-section-tag">USA #1 RATED MEDICAL BILLING FIRM</span>
            <h1>Medical Billing Services</h1>
            <div class="nm-hero-subtitle">The Medical Billing Service Provider for USA Healthcare</div>
            <p class="nm-hero-text">
              NovaMedex is the USA's top medical billing firm – deploying the best practices in medical billing and coding for physicians looking to outsource billing and coding to an expert 3rd party billing agency. Our certified medical coders and billers help healthcare organizations recover Aged Receivables and resolve insurance Claim Denials, as well.
            </p>

            <!-- Quick Consultation Form Card -->
            <div class="nm-hero-form-card">
              <form class="nm-form">
                <div class="nm-hero-form-row">
                  <div class="nm-form-group" style="margin-bottom:0;">
                    <input type="text" class="nm-input" placeholder="Name *" required>
                  </div>
                  <div class="nm-form-group" style="margin-bottom:0;">
                    <input type="email" class="nm-input" placeholder="Email *" required>
                  </div>
                  <div class="nm-form-group" style="margin-bottom:0;">
                    <input type="tel" class="nm-input" placeholder="Phone *" required>
                  </div>
                </div>
                <button type="submit" class="nm-btn nm-btn-primary nm-btn-full">
                  Book a Free Consultation
                </button>
              </form>
            </div>

            <!-- Provider Satisfaction Callout -->
            <div style="display:inline-flex; align-items:center; gap:8px; margin-top:16px; padding:6px 16px; background:#FFFFFF; border:1px solid #E2E8F0; border-radius:30px; font-size:0.85rem; color:#0A1F44; box-shadow:var(--shadow-sm);">
              <span style="color:#F59E0B; display:inline-flex; gap:2px;"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
              <span><strong>4.9 / 5</strong> Provider Satisfaction</span>
            </div>

          </div>

          <!-- Hero Right Column: Doctor Banner & Floating Innovation Badges -->
          <div class="nm-hero-visual">
            <div class="nm-hero-banner-wrap">
              <img src="assets/images/doctor-hero.jpg" alt="NovaMedex Physician Specialist">
              <div class="nm-hero-banner-overlay"></div>
              <div class="nm-hero-banner-badge">
                <div class="nm-banner-badge-icon"><i class="fa-solid fa-user-doctor"></i></div>
                <div class="nm-banner-badge-text">
                  <strong>Dedicated Practice Specialists</strong>
                  <span>Certified Medical Billers &amp; Coders across 75+ Specialties</span>
                </div>
              </div>
            </div>

            <!-- Floating Feature Pills -->
            <div class="nm-floating-pills">
              <div class="nm-pill"><i class="fa-solid fa-lightbulb" style="color:#00B4D8;"></i> Clinical Innovation</div>
              <div class="nm-pill"><i class="fa-solid fa-clock-rotate-left" style="color:#10B981;"></i> 24/7 Support</div>
              <div class="nm-pill"><i class="fa-solid fa-cloud" style="color:#00C9A7;"></i> Cloud Based PMS &amp; EHR</div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. STATS SECTION -->
    <section class="nm-section-sm nm-section-white">
      <div class="nm-container">
        <div class="nm-grid-3">
          <div class="nm-stat-card">
            <div class="nm-stat-number" data-counter="1500" data-suffix="+">1,500+</div>
            <div class="nm-stat-title">Satisfied Providers</div>
            <p class="nm-stat-desc">Healthcare practices across the United States relying on NovaMedex for flawless revenue cycle performance.</p>
          </div>
          <div class="nm-stat-card">
            <div class="nm-stat-number" data-counter="75" data-suffix="+">75+</div>
            <div class="nm-stat-title">Specialties Served</div>
            <p class="nm-stat-desc">Specialty-certified billers and AAPC coders fluent with specific modifier and clinical documentation rules.</p>
          </div>
          <div class="nm-stat-card">
            <div class="nm-stat-number" data-counter="1200" data-suffix="+">1,200+</div>
            <div class="nm-stat-title">Billing &amp; Coding Experts</div>
            <p class="nm-stat-desc">Dedicated back-office professionals managing claim generation, scrubbing, submission, and denial follow-up.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. OVERVIEW OF SERVICES SECTION -->
    <section class="nm-section nm-section-alt">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">WHAT WE DO</span>
          <h2 class="nm-section-title">Overview of Medical Billing Services in the USA</h2>
          <p class="nm-section-desc">
            Medical Billing Services provide organized solutions to assist with billing for healthcare providers by transforming clinical data into billable insurance claims. Through electronic medical billing and structuring clinical billing processes, healthcare providers are able to accurately capture diagnoses, procedures, and charges and submit them to payers.
          </p>
        </div>

        <div class="nm-grid-4">
          
          <!-- Card 1: Medical Billing Consultation -->
          <div class="nm-card-service">
            <div class="nm-service-icon"><i class="fa-solid fa-stethoscope"></i></div>
            <h3>Medical Billing Consultation</h3>
            <p>Expert patient billers offer the most complete medical billing services that entail handling check-in/out, claims, payments, and denials for healthcare providers.</p>
            <a href="services/medical-billing/" class="nm-link-learn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <!-- Card 2: Medical Coding -->
          <div class="nm-card-service">
            <div class="nm-service-icon"><i class="fa-solid fa-code"></i></div>
            <h3>Medical Coding</h3>
            <p>Clinical coding officers translate patient services into ICD-10 and CPT codes and generate a clean "super-bill" for the biller to submit to the insurance payer.</p>
            <a href="services/medical-coding/" class="nm-link-learn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <!-- Card 3: Provider Credentialing -->
          <div class="nm-card-service">
            <div class="nm-service-icon"><i class="fa-solid fa-id-card-clip"></i></div>
            <h3>Provider Credentialing</h3>
            <p>Provider enrollment services by our credentialing specialists help healthcare providers join the network of desirable payors with maximum privileges.</p>
            <a href="services/provider-credentialing/" class="nm-link-learn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <!-- Card 4: Healthcare RCM -->
          <div class="nm-card-service">
            <div class="nm-service-icon"><i class="fa-solid fa-chart-line"></i></div>
            <h3>Healthcare RCM</h3>
            <p>Revenue cycle management services are specialty-specific, which means a physician's bespoke demands are met by a dedicated medical biller.</p>
            <a href="services/revenue-cycle-management/" class="nm-link-learn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </section>

    <!-- 6. CLAIMS PROCESSING DARK SECTION -->
    <section class="nm-section nm-section-dark">
      <div class="nm-container">
        <div class="nm-grid-2" style="align-items:center;">
          <div>
            <span class="nm-section-tag" style="background:rgba(0,180,216,0.2); color:#38BDF8;">MAXIMUM PRACTICE REIMBURSEMENTS</span>
            <h2 class="nm-section-title" style="color:#FFFFFF;">Medical Claims Billing Service. We Boost Healthcare Income with Quick, Uncut Reimbursements!</h2>
            <p>
              The billing firm that does medical claims processing. With certified medical billers and coders, healthcare revenue cycle management is simplified. From patient scheduling to final payment reconciliation, NovaMedex ensures every single dollar earned is collected.
            </p>
            <ul style="margin:24px 0; display:flex; flex-direction:column; gap:14px;">
              <li style="display:flex; align-items:center; gap:12px; font-size:1.05rem;">
                <i class="fa-solid fa-circle-check" style="color:#00C9A7; font-size:1.25rem;"></i>
                <span><strong>Electronic billing service</strong> files claims instantly within 24 hours.</span>
              </li>
              <li style="display:flex; align-items:center; gap:12px; font-size:1.05rem;">
                <i class="fa-solid fa-circle-check" style="color:#00C9A7; font-size:1.25rem;"></i>
                <span><strong>Denied claims</strong> are appealed, corrected, and reprocessed successfully.</span>
              </li>
              <li style="display:flex; align-items:center; gap:12px; font-size:1.05rem;">
                <i class="fa-solid fa-circle-check" style="color:#00C9A7; font-size:1.25rem;"></i>
                <span><strong>98% First-Pass Clean Claims Rate</strong> backed by advanced scrubbing rules.</span>
              </li>
            </ul>
            <div style="margin-top:28px;">
              <a href="services/medical-billing/" class="nm-btn nm-btn-primary nm-btn-lg">
                Explore Claims Services
              </a>
            </div>
          </div>
          <div>
            <img src="assets/images/claims-dashboard.svg" alt="NovaMedex Claims Processing Analytics Dashboard" style="border-radius:18px; box-shadow:var(--shadow-dark); width:100%;">
          </div>
        </div>
      </div>
    </section>

    <!-- 7. COMPARISON SECTION (WITH VS WITHOUT NOVAMEDEX) -->
    <section class="nm-section nm-section-white">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">PROVEN IMPACT</span>
          <h2 class="nm-section-title">Why Practices Choose NovaMedex Over In-House Billing</h2>
          <p class="nm-section-desc">
            Compare the operational reality of managing clinical billing internally versus partnering with NovaMedex's dedicated billing consultants.
          </p>
        </div>

        <div class="nm-comparison-grid">
          
          <!-- Without NovaMedex -->
          <div class="nm-comparison-card negative">
            <h3 style="color:#EF4444; font-size:1.35rem; margin-bottom:18px; display:flex; align-items:center; gap:10px;">
              <i class="fa-solid fa-circle-xmark"></i> Without NovaMedex
            </h3>
            <ul class="nm-comparison-list">
              <li><i class="fa-solid fa-circle-xmark fa-times-circle"></i> High initial and recurring software licensing fees ($10,000+/year).</li>
              <li><i class="fa-solid fa-circle-xmark fa-times-circle"></i> Staff turnover, vacation delays, and endless training expenses.</li>
              <li><i class="fa-solid fa-circle-xmark fa-times-circle"></i> Frequent claim rejections and unworked aged A/R balances over 90 days.</li>
              <li><i class="fa-solid fa-circle-xmark fa-times-circle"></i> Slow reimbursements averaging 45 to 65 days from submission.</li>
              <li><i class="fa-solid fa-circle-xmark fa-times-circle"></i> Doctors waste clinical hours chasing insurance payer adjustments.</li>
            </ul>
          </div>

          <!-- With NovaMedex -->
          <div class="nm-comparison-card positive">
            <h3 style="color:#10B981; font-size:1.35rem; margin-bottom:18px; display:flex; align-items:center; gap:10px;">
              <i class="fa-solid fa-circle-check"></i> With NovaMedex
            </h3>
            <ul class="nm-comparison-list">
              <li><i class="fa-solid fa-circle-check fa-check-circle"></i> Complete Free EHR &amp; Practice Management Software included.</li>
              <li><i class="fa-solid fa-circle-check fa-check-circle"></i> Dedicated team of certified billers and AAPC coders assigned to your practice.</li>
              <li><i class="fa-solid fa-circle-check fa-check-circle"></i> 98% first-pass clean claim rate with proactive denial resolution.</li>
              <li><i class="fa-solid fa-circle-check fa-check-circle"></i> Rapid reimbursements deposited within an average of 14 to 21 days.</li>
              <li><i class="fa-solid fa-circle-check fa-check-circle"></i> Documented revenue increase of 10% to 25% within the first 90 days.</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- 8. SAVINGS & 2.49% PRICING CALLOUT -->
    <section class="nm-section nm-section-alt">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">UNMATCHED VALUE</span>
          <h2 class="nm-section-title">Experience Our Medical Billing Services for as Low as 2.49%</h2>
          <p class="nm-section-desc">
            No setup fees. No hidden costs. Pay strictly a small percentage of what you actually collect.
          </p>
        </div>

        <div class="nm-grid-2" style="align-items:center;">
          <div>
            <div style="background:#FFFFFF; border-radius:18px; padding:36px; box-shadow:var(--shadow-md); border:1px solid #E2E8F0;">
              <div class="nm-pricing-hero-badge"><i class="fa-solid fa-tag"></i> Starting at 2.49% Collections</div>
              <h3 style="font-size:1.6rem; margin-bottom:12px;">Full-Service Revenue Cycle Management</h3>
              <p style="color:var(--color-text-muted); margin-bottom:20px;">
                Includes clinical claim scrubbing, primary &amp; secondary insurance submission, patient invoicing, aggressive denial appeals, and free EHR/PMS software.
              </p>
              <ul style="display:flex; flex-direction:column; gap:10px; margin-bottom:28px;">
                <li style="display:flex; align-items:center; gap:8px; font-weight:600; color:#0A1F44;">
                  <i class="fa-solid fa-check" style="color:#10B981;"></i> Zero Implementation or Transition Fees
                </li>
                <li style="display:flex; align-items:center; gap:8px; font-weight:600; color:#0A1F44;">
                  <i class="fa-solid fa-check" style="color:#10B981;"></i> Free EHR &amp; Practice Management Software
                </li>
                <li style="display:flex; align-items:center; gap:8px; font-weight:600; color:#0A1F44;">
                  <i class="fa-solid fa-check" style="color:#10B981;"></i> Dedicated US Account Manager
                </li>
              </ul>
              <a href="pricing/" class="nm-btn nm-btn-primary nm-btn-full nm-btn-lg">
                <i class="fa-solid fa-lock-open"></i> Unlock 2.49% Pricing Plans
              </a>
            </div>
          </div>
          <div>
            <img src="assets/images/ehr-platform.svg" alt="NovaMedex Free EHR and PMS Platform" style="width:100%; border-radius:18px; box-shadow:var(--shadow-md);">
          </div>
        </div>
      </div>
    </section>

    <!-- 9. 4 TRUST BADGES BANNER -->
    <section class="nm-container">
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
    </section>

    <!-- 10. CLIENT TESTIMONIALS -->
    <section class="nm-section nm-section-white">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">VERIFIED REVIEWS</span>
          <h2 class="nm-section-title">See What Healthcare Providers Say About Us 💜</h2>
          <p class="nm-section-desc">
            Hear directly from clinic owners and medical directors who have transformed their cash flow with NovaMedex.
          </p>
        </div>

        <div class="nm-grid-3">
          
          <div class="nm-card-service">
            <div style="color:#F59E0B; margin-bottom:12px;">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p style="font-style:italic;">
              "NovaMedex has made my job as a practice owner much easier. Our clean claim rate jumped to 98% within two months, and collections are faster than ever."
            </p>
            <div style="margin-top:auto; pt:12px; border-top:1px solid #E2E8F0; padding-top:12px;">
              <strong style="display:block; color:#0A1F44;">Dr. Julia Will***</strong>
              <span style="font-size:0.85rem; color:#64748B;">Cardiology Practice Director</span>
            </div>
          </div>

          <div class="nm-card-service">
            <div style="color:#F59E0B; margin-bottom:12px;">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p style="font-style:italic;">
              "Transitioning to NovaMedex was seamless. Their billing specialists recovered over $140,000 in aged insurance receivables that our previous biller had abandoned."
            </p>
            <div style="margin-top:auto; pt:12px; border-top:1px solid #E2E8F0; padding-top:12px;">
              <strong style="display:block; color:#0A1F44;">Dr. Gennaya Matt***</strong>
              <span style="font-size:0.85rem; color:#64748B;">Orthopedic Surgeon &amp; Partner</span>
            </div>
          </div>

          <div class="nm-card-service">
            <div style="color:#F59E0B; margin-bottom:12px;">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p style="font-style:italic;">
              "The free EHR and PMS software integration alone saved us thousands each month. Their 24/7 dedicated support team is unmatched in responsiveness."
            </p>
            <div style="margin-top:auto; pt:12px; border-top:1px solid #E2E8F0; padding-top:12px;">
              <strong style="display:block; color:#0A1F44;">Mark S., Practice Administrator</strong>
              <span style="font-size:0.85rem; color:#64748B;">Multi-Specialty Clinic</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 11. FAQ ACCORDION SECTION -->
    <section class="nm-section nm-section-alt">
      <div class="nm-container">
        <div class="nm-section-header">
          <span class="nm-section-tag">COMMON QUESTIONS</span>
          <h2 class="nm-section-title">Frequently Asked Questions</h2>
          <p class="nm-section-desc">Got questions about outsourcing your medical billing? We've got clear answers.</p>
        </div>

        <div class="nm-accordion">
          
          <div class="nm-accordion-item active">
            <button class="nm-accordion-header">
              <span>What is NovaMedex's first-pass clean claim rate?</span>
              <i class="fa-solid fa-chevron-down nm-accordion-icon"></i>
            </button>
            <div class="nm-accordion-body">
              NovaMedex maintains an industry-leading 98% first-pass clean claim acceptance rate across all major commercial and government payers, including Medicare, Medicaid, Blue Cross Blue Shield, Aetna, UnitedHealthcare, and Cigna.
            </div>
          </div>

          <div class="nm-accordion-item">
            <button class="nm-accordion-header">
              <span>How much does NovaMedex medical billing service cost?</span>
              <i class="fa-solid fa-chevron-down nm-accordion-icon"></i>
            </button>
            <div class="nm-accordion-body">
              Our full-service medical billing plans start as low as 2.49% of actual collections. There are zero upfront setup fees, no software licensing charges, and no hidden cancellation penalties.
            </div>
          </div>

          <div class="nm-accordion-item">
            <button class="nm-accordion-header">
              <span>Do we have to change our current EHR or Practice Management Software?</span>
              <i class="fa-solid fa-chevron-down nm-accordion-icon"></i>
            </button>
            <div class="nm-accordion-body">
              No. NovaMedex seamlessly interfaces with all leading EHR and PMS systems, including Epic, Cerner, eClinicalWorks, Kareo, NextGen, Athenahealth, and AdvancedMD. Alternatively, you can use our certified Cloud EHR &amp; PMS completely free of charge.
            </div>
          </div>

          <div class="nm-accordion-item">
            <button class="nm-accordion-header">
              <span>How fast does NovaMedex submit claims once received?</span>
              <i class="fa-solid fa-chevron-down nm-accordion-icon"></i>
            </button>
            <div class="nm-accordion-body">
              All clinical charges received are scrubbed, coded, and electronically submitted within 24 to 48 hours of service documentation, expediting your average reimbursement turnaround to 14–21 days.
            </div>
          </div>

          <div class="nm-accordion-item">
            <button class="nm-accordion-header">
              <span>How does NovaMedex handle denied or rejected claims?</span>
              <i class="fa-solid fa-chevron-down nm-accordion-icon"></i>
            </button>
            <div class="nm-accordion-body">
              Our dedicated denial management specialists inspect every rejected claim immediately, identify root cause coding or documentation errors, append proper modifiers, and re-submit appeals within 48 hours.
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php include('includes/footer.php');?>
</body>
</html>
