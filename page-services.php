
<?php
/*
 * Template Name: Services Page
 */

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Concierge Medical | Primary Care &amp; Wellness</title>
  <meta name="description" content="Explore comprehensive primary care, mobile concierge medicine, IV hydration, medical weight health, telehealth, and occupational screenings in Laurel, Maryland.">
  <meta name="robots" content="index, follow">

  <!-- Open Graph & Twitter Cards -->
  <meta property="og:title" content="Our Services | Concierge Medical | Primary Care &amp; Wellness">
  <meta property="og:description" content="Personalized Care for Every Stage of Life. In-office visits, mobile concierge care, and telehealth in Laurel, MD.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/services.html">
  <meta property="og:image" content="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=1200&q=80">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300..700;1,9..40,300..700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link">Skip to main content</a>
  <!-- SECTION: Announcement Strip (Matches Approved Homepage) -->
  <?php get_header('home'); ?>

  <main id="main-content">
    <!-- SECTION A: Services Hero -->
    <section class="hero-section services-hero-section" id="services-hero" aria-labelledby="services-hero-title">
      <div class="hero-ambient-glow" aria-hidden="true"></div>
      <div class="container hero-container">
        <div class="hero-content">
          <div class="hero-stagger" style="--stagger: 1;">
            <div class="eyebrow-pill">
              <span class="eyebrow-dot" aria-hidden="true"></span>
              <span class="eyebrow-text">OUR SERVICES</span>
            </div>
          </div>

          <h1 id="services-hero-title" class="hero-headline hero-stagger" style="--stagger: 2;">
            Personalized Care <br>
            <span class="hero-italic-emphasis">for Every Stage of Life.</span>
          </h1>

          <p class="hero-subheading hero-stagger" style="--stagger: 3;">
            Comprehensive clinical medicine and wellness therapies tailored to your lifestyle and health goals.
          </p>

          <p class="hero-body hero-stagger" style="--stagger: 4;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>

          <div class="hero-cta-group hero-stagger" style="--stagger: 5;">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn btn-secondary btn-interactive">
              <span>Explore Our Services</span>
            </a>
          </div>

          <div class="hero-footer-meta hero-stagger" style="--stagger: 6;">
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              <span>7 Specialized Disciplines</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
              <span>In-Office, Mobile &amp; Virtual</span>
            </div>
          </div>
        </div>

        <div class="hero-visual hero-stagger" style="--stagger: 3;">
          <div class="visual-composition">
            <div class="gold-frame-accent" aria-hidden="true"></div>
            <div class="hero-image-wrapper">
              <img 
                src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=1100&q=85" 
                alt="Compassionate doctor and patient having a detailed diagnostic consultation in a bright, modern medical setting" 
                class="hero-img"
                width="620"
                height="740"
                loading="eager"
              >
            </div>

            <div class="floating-badge badge-top" aria-hidden="true">
              <div class="badge-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Full Spectrum</span>
                <span class="badge-main">Comprehensive Care</span>
              </div>
            </div>

            <div class="floating-badge badge-bottom" aria-hidden="true">
              <div class="badge-icon-box gold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Delivery Model</span>
                <span class="badge-main">Your Place or Ours</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION B: Services Overview & Quick Navigation -->
    <section class="section services-overview-section" id="services-overview" aria-labelledby="overview-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">CLINICAL DISCIPLINES</span>
          <h2 id="overview-title" class="section-heading">Comprehensive Care. Designed Around You.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
        </div>

        <!-- Sticky Quick Category Selector -->
        <nav class="services-nav-bar reveal-on-scroll" aria-label="Service Category Quick Links">
          <ul class="services-nav-list">
            <li><a href="#primary-care" class="service-nav-pill active"><span class="pill-dot"></span>Primary Care</a></li>
            <li><a href="#mobile-care" class="service-nav-pill"><span class="pill-dot"></span>Mobile Concierge</a></li>
            <li><a href="#weight-management" class="service-nav-pill"><span class="pill-dot"></span>Weight Management</a></li>
            <li><a href="#iv-hydration" class="service-nav-pill"><span class="pill-dot"></span>IV Hydration</a></li>
            <li><a href="#telehealth" class="service-nav-pill"><span class="pill-dot"></span>Telehealth</a></li>
            <li><a href="#occupational-health" class="service-nav-pill"><span class="pill-dot"></span>Occupational &amp; DOT</a></li>
            <li><a href="#healthcare-training" class="service-nav-pill"><span class="pill-dot"></span>CPR &amp; Training</a></li>
          </ul>
        </nav>
      </div>
    </section>

    <!-- SECTION C: Individual Service Sections -->
    <div class="service-detail-container" id="services-detail">

      <!-- SERVICE 1: Primary Care & Preventive Health -->
      <section class="section service-section service-split" id="primary-care" aria-labelledby="primary-care-title">
        <div class="container">
          <div class="service-split-grid">
            <div class="service-split-text reveal-on-scroll">
              <div class="service-num-badge">01</div>
              <span class="section-eyebrow">FOUNDATIONAL HEALTHCARE</span>
              <h2 id="primary-care-title" class="section-heading">Primary Care &amp; Preventive Health</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
              </p>
              <p class="body-text">
                Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>Routine &amp; Annual Physical Examinations:</strong> Comprehensive biometric, cardiovascular, and preventive health screenings.</li>
                  <li><strong>Acute Illness Assessment &amp; Treatment:</strong> Prompt evaluation of respiratory symptoms, infections, and common conditions.</li>
                  <li><strong>Chronic Condition Management:</strong> Dedicated protocols for hypertension, diabetes, cholesterol, and asthma.</li>
                  <li><strong>Preventive Screenings &amp; Labs:</strong> Routine diagnostic lab panels, medication reconciliation, and specialty referrals.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Primary Care</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>

            <div class="service-split-media reveal-on-scroll" style="--delay: 150ms;">
              <div class="visual-layered-stack">
                <div class="image-accent-border" aria-hidden="true"></div>
                <div class="image-frame">
                  <img 
                    src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=900&q=80" 
                    alt="Doctor conducting an unhurried, attentive primary care physical examination" 
                    class="philosophy-img"
                    width="500"
                    height="620"
                    loading="lazy"
                  >
                </div>
                <div class="experience-badge" aria-hidden="true">
                  <span class="badge-tag">Service 01</span>
                  <span class="badge-title">Primary Care</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICE 2: Mobile Concierge Care -->
      <section class="section service-section service-split service-split-reverse" id="mobile-care" aria-labelledby="mobile-care-title">
        <div class="container">
          <div class="service-split-grid">
            <div class="service-split-text reveal-on-scroll">
              <div class="service-num-badge">02</div>
              <span class="section-eyebrow">AT YOUR PLACE</span>
              <h2 id="mobile-care-title" class="section-heading">Mobile Concierge Care</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
              </p>
              <p class="body-text">
                Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>Home &amp; Workplace Consultations:</strong> Direct licensed practitioner visits at your residence or executive office.</li>
                  <li><strong>Chronic Disease Follow-up:</strong> Routine clinical checkups, vital sign tracking, and treatment plan evaluations on-site.</li>
                  <li><strong>Post-Hospitalization Checkups:</strong> Transition assistance, wound evaluation, and post-discharge continuity.</li>
                  <li><strong>Mobility-Limited Patient Support:</strong> Focused, compassionate medical attention for individuals unable to travel.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Mobile Care</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>

            <div class="service-split-media reveal-on-scroll" style="--delay: 150ms;">
              <div class="visual-layered-stack">
                <div class="image-accent-border" aria-hidden="true"></div>
                <div class="image-frame">
                  <img 
                    src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=900&q=80" 
                    alt="Healthcare practitioner delivering compassionate mobile medical care in a home setting" 
                    class="philosophy-img"
                    width="500"
                    height="620"
                    loading="lazy"
                  >
                </div>
                <div class="experience-badge" aria-hidden="true">
                  <span class="badge-tag">Service 02</span>
                  <span class="badge-title">Mobile Care</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICE 3: Medical Weight Management -->
      <section class="section service-section service-split" id="weight-management" aria-labelledby="weight-title">
        <div class="container">
          <div class="service-split-grid">
            <div class="service-split-text reveal-on-scroll">
              <div class="service-num-badge">03</div>
              <span class="section-eyebrow">METABOLIC WELLNESS</span>
              <h2 id="weight-title" class="section-heading">Medical Weight Management</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa.
              </p>
              <p class="body-text">
                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>Individualized Metabolic Evaluations:</strong> Thorough lab diagnostics, baseline metabolic scoring, and health history.</li>
                  <li><strong>Nutritional &amp; Lifestyle Counseling:</strong> Sustainable eating strategies, habit reinforcement, and activity counseling.</li>
                  <li><strong>GLP-1 Medication Management:</strong> Medical evaluation and prescription therapies when clinically appropriate.</li>
                  <li><strong>Ongoing Monitoring &amp; Calibration:</strong> Regular body composition tracking, dosage titration, and side-effect support.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Weight Management</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>

            <div class="service-split-media reveal-on-scroll" style="--delay: 150ms;">
              <div class="visual-layered-stack">
                <div class="image-accent-border" aria-hidden="true"></div>
                <div class="image-frame">
                  <img 
                    src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=900&q=80" 
                    alt="Doctor discussing personalized metabolic and nutritional health plan with patient" 
                    class="philosophy-img"
                    width="500"
                    height="620"
                    loading="lazy"
                  >
                </div>
                <div class="experience-badge" aria-hidden="true">
                  <span class="badge-tag">Service 03</span>
                  <span class="badge-title">Weight Health</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICE 4: IV Hydration & Wellness Therapy -->
      <section class="section service-section service-split service-split-reverse" id="iv-hydration" aria-labelledby="iv-title">
        <div class="container">
          <div class="service-split-grid">
            <div class="service-split-text reveal-on-scroll">
              <div class="service-num-badge">04</div>
              <span class="section-eyebrow">MICRONUTRIENT RECOVERY</span>
              <h2 id="iv-title" class="section-heading">IV Hydration &amp; Wellness Therapy</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta.
              </p>
              <p class="body-text">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>Clinical Hydration Assessments:</strong> Pre-infusion health screenings, electrolyte review, and vital check.</li>
                  <li><strong>Customized Wellness Blends:</strong> Targeted vitamin C, B-complex, minerals, and antioxidant infusions.</li>
                  <li><strong>Dual Setting Options:</strong> Office-based clinical administration or mobile visits where available and appropriate.</li>
                  <li><strong>Licensed Oversight:</strong> Administered strictly under licensed healthcare clinical safety guidelines.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About IV Therapy</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>

            <div class="service-split-media reveal-on-scroll" style="--delay: 150ms;">
              <div class="visual-layered-stack">
                <div class="image-accent-border" aria-hidden="true"></div>
                <div class="image-frame">
                  <img 
                    src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=900&q=80" 
                    alt="Medical provider preparing a sterile intravenous wellness infusion" 
                    class="philosophy-img"
                    width="500"
                    height="620"
                    loading="lazy"
                  >
                </div>
                <div class="experience-badge" aria-hidden="true">
                  <span class="badge-tag">Service 04</span>
                  <span class="badge-title">IV Hydration</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICE 5: Telehealth -->
      <section class="section service-section service-split" id="telehealth" aria-labelledby="telehealth-title">
        <div class="container">
          <div class="service-split-grid">
            <div class="service-split-text reveal-on-scroll">
              <div class="service-num-badge">05</div>
              <span class="section-eyebrow">VIRTUAL ACCESS</span>
              <h2 id="telehealth-title" class="section-heading">Telehealth Consultations</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat.
              </p>
              <p class="body-text">
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>Virtual Medical Consultations:</strong> Encrypted video visits for non-emergency symptom evaluations.</li>
                  <li><strong>Chronic Disease Check-ins:</strong> Blood pressure reviews, diabetes logs, and treatment progress consults.</li>
                  <li><strong>Medication Reviews &amp; Refills:</strong> Prescription adjustments and maintenance renewals when appropriate.</li>
                  <li><strong>Preventive Health Counseling:</strong> Wellness guidance and lab review from any computer or mobile device.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Telehealth</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>

            <div class="service-split-media reveal-on-scroll" style="--delay: 150ms;">
              <div class="visual-layered-stack">
                <div class="image-accent-border" aria-hidden="true"></div>
                <div class="image-frame">
                  <img 
                    src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80" 
                    alt="Doctor conducting a secure, high-definition telehealth consultation on a tablet device" 
                    class="philosophy-img"
                    width="500"
                    height="620"
                    loading="lazy"
                  >
                </div>
                <div class="experience-badge" aria-hidden="true">
                  <span class="badge-tag">Service 05</span>
                  <span class="badge-title">Telehealth</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- DUAL INSTITUTIONAL SERVICES: Services 6 & 7 in Balanced Grid -->
      <section class="section service-section institutional-section" id="occupational-health" aria-labelledby="occupational-title">
        <div class="container">
          <div class="institutional-grid">

            <!-- SERVICE 6: Occupational Health & DOT -->
            <article class="inst-card reveal-on-scroll">
              <div class="inst-header">
                <div class="service-num-badge inline-num">06</div>
                <div class="inst-icon-box" aria-hidden="true">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
                </div>
              </div>
              <span class="section-eyebrow">WORKFORCE WELLNESS</span>
              <h2 id="occupational-title" class="inst-title">Occupational Health &amp; DOT Physicals</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.
              </p>
              <p class="body-text">
                Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>DOT Commercial Driver Physicals:</strong> Federal compliance examinations where certified credentials apply.</li>
                  <li><strong>Pre-Employment Screenings:</strong> Fit-for-duty medical clearances and physical stamina reviews.</li>
                  <li><strong>Return-to-Work Evaluations:</strong> Post-injury assessment and corporate employee clearance.</li>
                  <li><strong>Workplace Wellness Screenings:</strong> On-site corporate biometric checks and preventive programs.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Occupational Health</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </article>

            <!-- SERVICE 7: CPR & Healthcare Training -->
            <article class="inst-card reveal-on-scroll" id="healthcare-training" style="--delay: 150ms;">
              <div class="inst-header">
                <div class="service-num-badge inline-num">07</div>
                <div class="inst-icon-box" aria-hidden="true">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 4-2.5 4-2.5"/></svg>
                </div>
              </div>
              <span class="section-eyebrow">LIFE-SUPPORT EDUCATION</span>
              <h2 class="inst-title">CPR &amp; Healthcare Training</h2>
              <div class="divider-gold" aria-hidden="true"></div>
              <p class="lead-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit.
              </p>
              <p class="body-text">
                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum.
              </p>
              <div class="service-scope-box">
                <h3 class="scope-heading">Key Service Inclusions:</h3>
                <ul class="service-scope-list">
                  <li><strong>CPR, AED &amp; First Aid Courses:</strong> AHA-aligned certifications for individuals, schools, and civic groups.</li>
                  <li><strong>Basic Life Support (BLS):</strong> Healthcare provider clinical certifications and periodic renewals.</li>
                  <li><strong>Advanced Cardiac Life Support (ACLS):</strong> Specialized resuscitation training where authorized.</li>
                  <li><strong>Corporate &amp; Group On-Site Classes:</strong> Customized workplace safety instruction for Maryland organizations.</li>
                </ul>
              </div>
              <div class="service-action-wrap">
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                  <span>Inquire About Group Training</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </article>

          </div>

          <!-- Credentialing Notice -->
          <div class="clinical-note-box reveal-on-scroll">
            <div class="note-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </div>
            <p><strong>Clinical &amp; Credentialing Notice:</strong> Specific clinical and educational modalities—including DOT physical examinations, intravenous wellness infusions, and authorized BLS/ACLS training courses—are scheduled subject to verified provider credentials, clinical intake eligibility, and regulatory compliance.</p>
          </div>
        </div>
      </section>

    </div>

    <!-- SECTION D: Care Options Section -->
    <section class="section care-options-section" id="care-options" aria-labelledby="options-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">FLEXIBLE CARE ENVIRONMENTS</span>
          <h2 id="options-title" class="section-heading">Care That Fits Your Life.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="care-options-grid">
          <!-- Option 1: In-Office Care -->
          <article class="care-option-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="option-media">
              <img 
                src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80" 
                alt="Welcoming, peaceful clinical office consultation room in Laurel, MD" 
                class="option-img"
                width="400"
                height="260"
                loading="lazy"
              >
              <span class="option-badge">IN-OFFICE</span>
            </div>
            <div class="option-content">
              <div class="option-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
              </div>
              <h3 class="option-title">In-Office Care</h3>
              <p class="option-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.
              </p>
              <ul class="option-bullets">
                <li>Boutique clinical suite in Laurel, MD</li>
                <li>Comprehensive on-site diagnostic equipment</li>
                <li>Unhurried, private medical consultations</li>
              </ul>
            </div>
          </article>

          <!-- Option 2: Mobile Care -->
          <article class="care-option-card option-featured reveal-on-scroll" style="--delay: 150ms;">
            <div class="option-media">
              <img 
                src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=800&q=80" 
                alt="Attentive bedside consultation delivered in a patient's home" 
                class="option-img"
                width="400"
                height="260"
                loading="lazy"
              >
              <span class="option-badge mobile-badge">MOBILE VISITS</span>
            </div>
            <div class="option-content">
              <div class="option-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              </div>
              <h3 class="option-title">Mobile Care</h3>
              <p class="option-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec.
              </p>
              <ul class="option-bullets">
                <li>Visits directly to your home or office</li>
                <li>Zero transit, traffic, or clinic waiting</li>
                <li>Comfortable, personalized bedside attention</li>
              </ul>
            </div>
          </article>

          <!-- Option 3: Virtual Consultations -->
          <article class="care-option-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="option-media">
              <img 
                src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=800&q=80" 
                alt="Encrypted high-definition telehealth visit conducted on a computer" 
                class="option-img"
                width="400"
                height="260"
                loading="lazy"
              >
              <span class="option-badge">TELEHEALTH</span>
            </div>
            <div class="option-content">
              <div class="option-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
              </div>
              <h3 class="option-title">Virtual Consultations</h3>
              <p class="option-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
              </p>
              <ul class="option-bullets">
                <li>Secure, HIPAA-compliant digital video link</li>
                <li>Prompt follow-up reviews and lab discussions</li>
                <li>Immediate access without traveling</li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION E: Why Choose Concierge Medical? -->
    <section class="section differentiators-section" id="why-choose-services" aria-labelledby="why-services-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">THE CONCIERGE ADVANTAGE</span>
          <h2 id="why-services-title" class="section-heading">A More Personal Approach to Healthcare.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="diff-grid">
          <div class="diff-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="diff-number">01</div>
            <h3 class="diff-heading">Personalized Attention</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="diff-number">02</div>
            <h3 class="diff-heading">Convenient Care Options</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="diff-number">03</div>
            <h3 class="diff-heading">Compassionate Communication</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="diff-number">04</div>
            <h3 class="diff-heading">Continuity of Care</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="diff-number">05</div>
            <h3 class="diff-heading">Preventive Wellness</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="diff-number">06</div>
            <h3 class="diff-heading">Individualized Treatment Planning</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION F: Appointment CTA -->
    <section class="cta-banner" aria-labelledby="services-cta-title">
      <div class="cta-ambient-circle" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-inner reveal-on-scroll">
          <span class="cta-eyebrow">BEGIN YOUR CARE JOURNEY</span>
          <h2 id="services-cta-title" class="cta-headline">Your Health. Your Convenience. Your Choice.</h2>
          <p class="cta-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          </p>
          <div class="cta-actions">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-gold btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-outline-white btn-interactive">
              <span>Contact Us</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer("home"); ?>


  <script src="script.js"></script>
  
     
<?php wp_footer(); ?>
</body>
</html>