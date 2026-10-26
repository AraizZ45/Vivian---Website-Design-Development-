<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concierge Medical | Primary Care &amp; Wellness | Laurel, Maryland</title>
  <meta name="description" content="Personalized, compassionate primary care, mobile concierge medicine, and modern wellness therapies in Laurel, MD and surrounding communities. Exceptional care at our office, your home, or virtually.">
  <meta name="robots" content="index, follow">

  <!-- Open Graph & Twitter Cards -->
  <meta property="og:title" content="Concierge Medical | Primary Care &amp; Wellness">
  <meta property="og:description" content="Exceptional Care. Your Place or Ours. Primary care, mobile medical visits, and wellness infusions in Laurel, MD.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=1200&q=80">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300..700;1,9..40,300..700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/demo-one.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link">Skip to main content</a>
<?php get_header(); ?>
<main id="main-content">
    <!-- SECTION C: Hero Section -->
    <section class="hero-section" id="hero" aria-labelledby="hero-title">
      <div class="hero-ambient-glow" aria-hidden="true"></div>
      <div class="container hero-container">
        <div class="hero-content">
          <div class="hero-stagger" style="--stagger: 1;">
            <div class="eyebrow-pill">
              <span class="eyebrow-dot" aria-hidden="true"></span>
              <span class="eyebrow-text">Personalized Care. Designed Around You.</span>
            </div>
          </div>

          <h1 id="hero-title" class="hero-headline hero-stagger" style="--stagger: 2;">
            Exceptional Care. <br>
            <span class="hero-italic-emphasis">Your Place or Ours.</span>
          </h1>

          <p class="hero-subheading hero-stagger" style="--stagger: 3;">
            Personalized Healthcare Designed Around You.
          </p>

          <p class="hero-body hero-stagger" style="--stagger: 4;">
            At Concierge Medical, we believe quality healthcare should be convenient, accessible, and tailored to your needs. Whether you visit our welcoming medical office, receive care at home, or connect with a provider virtually, we are committed to compassionate, professional, patient-centered healthcare.
          </p>
          
          <div class="hero-cta-group hero-stagger" style="--stagger: 5;">
            <a href="#contact" class="btn btn-primary btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="#services" class="btn btn-secondary btn-interactive">
              <span>Explore Our Services</span>
            </a>
          </div>

          <div class="hero-footer-meta hero-stagger" style="--stagger: 6;">
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
              <span>Office Visits</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span>Mobile Care</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
              <span>Virtual Consultations</span>
            </div>
          </div>
        </div>

        <div class="hero-visual hero-stagger" style="--stagger: 3;">
          <div class="visual-composition">
            <div class="gold-frame-accent" aria-hidden="true"></div>
            <div class="hero-image-wrapper">
              <img 
                src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=1100&q=85" 
                alt="A licensed physician in an unhurried, reassuring consultation with an adult patient in a warm, boutique medical suite" 
                class="hero-img"
                width="620"
                height="740"
                loading="eager"
              >
            </div>
            
            <!-- Floating Clinical Badge 1 -->
            <div class="floating-badge badge-top" aria-hidden="true">
              <div class="badge-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Care Standards</span>
                <span class="badge-main">Patient-Centered</span>
              </div>
            </div>

            <!-- Floating Clinical Badge 2 -->
            <div class="floating-badge badge-bottom" aria-hidden="true">
              <div class="badge-icon-box gold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Serving Laurel, MD</span>
                <span class="badge-main">In-Office &amp; Mobile</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION D: Trust and Convenience Bar -->
    <section class="trust-bar" aria-label="Practice Pillars">
      <div class="container">
        <ul class="trust-grid">
          <li class="trust-item reveal-on-scroll">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Personalized Medical Care</h3>
              <p class="trust-desc">Care plans tailored directly to your distinct health goals.</p>
            </div>
          </li>
          <li class="trust-item reveal-on-scroll" style="--delay: 100ms;">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Office, Home &amp; Virtual Options</h3>
              <p class="trust-desc">Flexible care settings chosen for clinical convenience.</p>
            </div>
          </li>
          <li class="trust-item reveal-on-scroll" style="--delay: 200ms;">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Patient-Centered Approach</h3>
              <p class="trust-desc">Unrushed dialogues that honor your time and comfort.</p>
            </div>
          </li>
          <li class="trust-item reveal-on-scroll" style="--delay: 300ms;">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Convenient Appointments</h3>
              <p class="trust-desc">Straightforward inquiry options to arrange your care.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- SECTION E: Introduction and Practice Philosophy -->
    <section class="section philosophy-section" id="philosophy" aria-labelledby="philosophy-title">
      <div class="container philosophy-container">
        <div class="philosophy-visual reveal-on-scroll">
          <div class="visual-layered-stack">
            <div class="image-accent-border" aria-hidden="true"></div>
            <div class="image-frame">
              <img 
                src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=900&q=80" 
                alt="Compassionate healthcare practitioner in a calm, modern medical environment reviewing care records" 
                class="philosophy-img"
                width="500"
                height="620"
                loading="lazy"
              >
            </div>
            <div class="experience-badge" aria-hidden="true">
              <div class="badge-icon-leaf">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg>
              </div>
              <span class="badge-tag">Practicing Excellence</span>
              <span class="badge-title">Primary Care &amp; Wellness</span>
            </div>
          </div>
        </div>

        <div class="philosophy-text reveal-on-scroll" style="--delay: 150ms;">
          <div class="section-badge-wrap">
            <span class="section-eyebrow">Practice Philosophy</span>
          </div>
          <h2 id="philosophy-title" class="section-heading">Healthcare That Fits Your Life.</h2>
          <div class="divider-gold" aria-hidden="true"></div>
          
          <p class="lead-text">
            Your health deserves personal attention, thoughtful guidance, and care that works with your life. Concierge Medical brings together professional medical services and convenient care options to help you navigate your health with confidence.
          </p>
          <p class="body-text">
            Traditional healthcare often involves long waits, brief consultations, and rigid administrative hurdles. We founded Concierge Medical to provide an unhurried, attentive sanctuary. By harmonizing office appointments, mobile home visits, and secure virtual consults, we honor your personal schedule while upholding strict standards of evidence-based clinical medicine.
          </p>

          <div class="philosophy-highlights">
            <div class="highlight-item">
              <div class="highlight-bullet" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong class="highlight-title">Attentive, Unhurried Consultations:</strong>
                <p class="highlight-sub">Careful medical dialogue ensuring your health concerns, family history, and symptoms are fully explored.</p>
              </div>
            </div>
            <div class="highlight-item">
              <div class="highlight-bullet" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong class="highlight-title">Adaptable Delivery Settings:</strong>
                <p class="highlight-sub">Seamless coordination across in-office treatments, at-home visits, and encrypted telemedicine encounters.</p>
              </div>
            </div>
          </div>

          <div class="philosophy-cta-row">
            <a href="#services" class="btn btn-secondary">
              <span>View Service Disciplines</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION F: Featured Services -->
    <section class="section services-section" id="services" aria-labelledby="services-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">Comprehensive Offerings</span>
          <h2 id="services-title" class="section-heading">Personalized Care. Comprehensive Services.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Explore medical, preventive, wellness, and professional healthcare services designed around your needs.
          </p>
        </div>

        <div class="services-grid">
          <!-- Service 1: Primary Care -->
          <article class="service-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </span>
              <span class="service-number">01</span>
            </div>
            <h3 class="service-title">Primary Care &amp; Preventive Health</h3>
            <p class="service-description">
              Foundational healthcare covering routine and annual physical examinations, preventive screenings, acute illness evaluations, and proactive chronic condition and medication management.
            </p>
            <ul class="service-bullets">
              <li>Comprehensive annual physicals &amp; screenings</li>
              <li>Biometric evaluations &amp; diagnostic labs</li>
              <li>Ongoing hypertension &amp; diabetes management</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Primary Care and Preventive Health">
              <span>Inquire About Care</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 2: Mobile Concierge Care (Featured Banner Card) -->
          <article class="service-card featured-service reveal-on-scroll" style="--delay: 100ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-badge-pill">Mobile Specialty</div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              </span>
              <span class="service-number">02</span>
            </div>
            <h3 class="service-title">Mobile Concierge Care</h3>
            <p class="service-description">
              Direct clinical visits delivered to your private residence or workplace. Tailored for busy executives, families, and individuals seeking medical attention without traveling.
            </p>
            <ul class="service-bullets">
              <li>Home visits and corporate office consultations</li>
              <li>Comprehensive medication reconciliation</li>
              <li>Support for patients with mobility limitations</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Mobile Concierge Care">
              <span>Inquire About Mobile Care</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 3: Medical Weight Management -->
          <article class="service-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
              </span>
              <span class="service-number">03</span>
            </div>
            <h3 class="service-title">Medical Weight Management</h3>
            <p class="service-description">
              Clinical, physician-guided metabolic assessments, nutritional guidance, and modern evidence-based medication protocols when clinically indicated.
            </p>
            <ul class="service-bullets">
              <li>Individual metabolic assessments</li>
              <li>Nutrition and lifestyle counseling</li>
              <li>Medication evaluation &amp; ongoing monitoring</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Medical Weight Management">
              <span>Inquire About Weight Health</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 4: IV Hydration & Wellness -->
          <article class="service-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
              </span>
              <span class="service-number">04</span>
            </div>
            <h3 class="service-title">IV Hydration &amp; Wellness</h3>
            <p class="service-description">
              Medically directed micronutrient and hydration infusions designed to support immune function, recovery, and energy under careful licensed clinical oversight.
            </p>
            <ul class="service-bullets">
              <li>Individualized hydration evaluation</li>
              <li>Electrolyte and vitamin micronutrient infusions</li>
              <li>Office and mobile administration when appropriate</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about IV Hydration and Wellness">
              <span>Inquire About IV Therapy</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 5: Telehealth -->
          <article class="service-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
              </span>
              <span class="service-number">05</span>
            </div>
            <h3 class="service-title">Telehealth Consultations</h3>
            <p class="service-description">
              Secure, HIPAA-compliant virtual medical visits for prompt symptom assessments, chronic condition check-ins, lab result discussions, and medication reviews.
            </p>
            <ul class="service-bullets">
              <li>High-definition encrypted video visits</li>
              <li>Follow-up care and routine medication reviews</li>
              <li>Prompt preventive counseling from your device</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Telehealth Consultations">
              <span>Inquire About Telehealth</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 6: Occupational Health & DOT Physicals -->
          <article class="service-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
              </span>
              <span class="service-number">06</span>
            </div>
            <h3 class="service-title">Occupational Health &amp; DOT Physicals</h3>
            <p class="service-description">
              Workplace health assessments, pre-employment screenings, and DOT commercial driver physicals conducted according to regulatory and corporate standards upon credential verification.
            </p>
            <ul class="service-bullets">
              <li>DOT commercial driver medical evaluations</li>
              <li>Pre-employment and return-to-duty exams</li>
              <li>Workplace physicals &amp; employee screenings</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Occupational Health and DOT Physicals">
              <span>Inquire About Occupational Exams</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 7: CPR & Healthcare Training -->
          <article class="service-card service-card-wide reveal-on-scroll" style="--delay: 350ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 4-2.5 4-2.5"/></svg>
              </span>
              <span class="service-number">07</span>
            </div>
            <div class="wide-service-content">
              <h3 class="service-title">CPR &amp; Healthcare Training</h3>
              <p class="service-description">
                Authorized emergency life-support courses for medical personnel, corporate workplaces, schools, and community groups. Inquire for scheduling CPR, AED, First Aid, BLS, and ACLS training pending credentialed instructor availability.
              </p>
              <ul class="service-bullets inline-bullets">
                <li>AHA-aligned CPR &amp; AED certifications</li>
                <li>Basic Life Support (BLS) &amp; ACLS clinical courses</li>
                <li>On-site group instruction for regional organizations</li>
              </ul>
            </div>
            <div class="wide-service-action">
              <a href="#contact" class="service-link" aria-label="Inquire about CPR and Healthcare Training">
                <span>Inquire About Group Training</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </article>
        </div>

        <div class="clinical-note-box reveal-on-scroll">
          <div class="note-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          </div>
          <p><strong>Clinical Notice:</strong> Certain specialized modalities, including DOT physicals, IV hydration infusions, and BLS/ACLS courses, are scheduled subject to verified provider credentials, clinical intake criteria, and jurisdictional regulatory confirmation.</p>
        </div>
      </div>
    </section>

    <!-- SECTION G: Mobile and Virtual Care Feature (Interactive Setting Showcase) -->
    <section class="section care-settings-section" id="care-settings" aria-labelledby="settings-title">
      <div class="container">
        <div class="care-settings-layout">
          <div class="care-text-col reveal-on-scroll">
            <span class="section-eyebrow">Three Care Delivery Models</span>
            <h2 id="settings-title" class="section-heading">Care That Comes to You.</h2>
            <div class="divider-gold" aria-hidden="true"></div>
            
            <p class="lead-text">
              From convenient office visits to eligible home-based and virtual consultations, we aim to make accessing appropriate care simpler and more personal.
            </p>
            <p class="body-text">
              Health concerns should never be complicated by congested traffic or waiting rooms. With our multimodal delivery model, you choose the setting that best balances your schedule and medical appropriateness.
            </p>

            <!-- Interactive Setting Selectors -->
            <div class="setting-selector-group" role="tablist" aria-label="Care Setting Options">
              <button class="setting-tab active" role="tab" aria-selected="true" aria-controls="panel-office" id="tab-office" data-target="office">
                <span class="tab-indicator" aria-hidden="true"></span>
                <span class="tab-title">In-Office Care</span>
                <span class="tab-sub">Laurel Clinic</span>
              </button>

              <button class="setting-tab" role="tab" aria-selected="false" aria-controls="panel-mobile" id="tab-mobile" data-target="mobile">
                <span class="tab-indicator" aria-hidden="true"></span>
                <span class="tab-title">Mobile Concierge</span>
                <span class="tab-sub">Home &amp; Workplace</span>
              </button>

              <button class="setting-tab" role="tab" aria-selected="false" aria-controls="panel-virtual" id="tab-virtual" data-target="virtual">
                <span class="tab-indicator" aria-hidden="true"></span>
                <span class="tab-title">Virtual Consultations</span>
                <span class="tab-sub">Telehealth Video</span>
              </button>
            </div>

            <div class="care-cta-container">
              <a href="#contact" class="btn btn-primary" data-booking-trigger>
                <span>Book an Appointment</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
              <span class="caption-note">Availability is determined by clinical appropriateness and confirmed service offerings.</span>
            </div>
          </div>

          <div class="care-display-col reveal-on-scroll" style="--delay: 150ms;">
            <!-- Panel 1: Office -->
            <div class="setting-panel active" role="tabpanel" id="panel-office" aria-labelledby="tab-office" data-panel="office">
              <div class="panel-media">
                <img 
                  src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=900&q=80" 
                  alt="Modern, calm, boutique medical consultation suite in Laurel, Maryland" 
                  class="panel-img"
                  width="560"
                  height="400"
                  loading="lazy"
                >
                <div class="media-overlay-tag">Laurel Medical Suite</div>
              </div>
              <div class="panel-details">
                <h3 class="panel-heading">In-Office Consultation</h3>
                <p class="panel-description">
                  A calm, private medical office setting designed for focused diagnostic evaluations, comprehensive wellness physicals, lab testing, and in-person consultations with minimal waiting.
                </p>
                <ul class="panel-features">
                  <li>Serene, private consultation rooms</li>
                  <li>Dedicated diagnostic physical assessments</li>
                  <li>Complete privacy and undivided practitioner time</li>
                </ul>
              </div>
            </div>

            <!-- Panel 2: Mobile -->
            <div class="setting-panel" role="tabpanel" id="panel-mobile" aria-labelledby="tab-mobile" data-panel="mobile" hidden>
              <div class="panel-media">
                <img 
                  src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=900&q=80" 
                  alt="Licensed medical practitioner providing attentive bedside care during a personalized home visit" 
                  class="panel-img"
                  width="560"
                  height="400"
                  loading="lazy"
                >
                <div class="media-overlay-tag">At Your Residence</div>
              </div>
              <div class="panel-details">
                <h3 class="panel-heading">Mobile Concierge Care</h3>
                <p class="panel-description">
                  Compassionate, licensed care brought directly to your home or office. Ideal for individuals with busy work obligations, limited mobility, or those recovering after procedures.
                </p>
                <ul class="panel-features">
                  <li>Eliminates driving, traffic, and waiting rooms</li>
                  <li>In-home vital signs and medication reviews</li>
                  <li>Mobile IV hydration therapies where appropriate</li>
                </ul>
              </div>
            </div>

            <!-- Panel 3: Virtual -->
            <div class="setting-panel" role="tabpanel" id="panel-virtual" aria-labelledby="tab-virtual" data-panel="virtual" hidden>
              <div class="panel-media">
                <img 
                  src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80" 
                  alt="Doctor conducting a secure, encrypted high-definition telehealth visit with a patient" 
                  class="panel-img"
                  width="560"
                  height="400"
                  loading="lazy"
                >
                <div class="media-overlay-tag">Encrypted Telehealth</div>
              </div>
              <div class="panel-details">
                <h3 class="panel-heading">Virtual Video Consultations</h3>
                <p class="panel-description">
                  Fast, encrypted virtual consultations from the convenience of your computer, tablet, or smartphone for non-emergency acute concerns, prescription renewals, and lifestyle reviews.
                </p>
                <ul class="panel-features">
                  <li>Secure, HIPAA-compliant video link</li>
                  <li>Follow-up reviews and lab result consultations</li>
                  <li>Rapid scheduling between daily commitments</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION H: Why Choose Concierge Medical? -->
    <section class="section differentiators-section" id="why-choose" aria-labelledby="why-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">The Concierge Advantage</span>
          <h2 id="why-title" class="section-heading">More Personal. More Convenient. More Connected.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            A healthcare model built to prioritize relationship quality, clinical excellence, and respectful service delivery.
          </p>
        </div>

        <div class="diff-grid">
          <div class="diff-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="diff-number">01</div>
            <h3 class="diff-heading">Individualized Attention</h3>
            <p class="diff-body">Appointments are scheduled with deliberate buffers so you never feel rushed. Your health history is evaluated with careful, personalized detail.</p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="diff-number">02</div>
            <h3 class="diff-heading">Convenient Care Options</h3>
            <p class="diff-body">Whether visiting our welcoming clinic or requesting a mobile visit, our model minimizes transit stress and eliminates crowded waiting areas.</p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="diff-number">03</div>
            <h3 class="diff-heading">Compassionate Communication</h3>
            <p class="diff-body">Direct, transparent dialogue without clinical jargon. We ensure you leave every appointment with clear, actionable answers and reassurance.</p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="diff-number">04</div>
            <h3 class="diff-heading">Continuity of Care</h3>
            <p class="diff-body">Partner with dedicated clinicians who understand your medical history over time, avoiding fragmented advice and repetitive questionnaires.</p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="diff-number">05</div>
            <h3 class="diff-heading">Preventive Health Focus</h3>
            <p class="diff-body">Proactive screenings, wellness assessments, and sustainable lifestyle counseling designed to identify risk factors before chronic conditions develop.</p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="diff-number">06</div>
            <h3 class="diff-heading">Patient-Centered Planning</h3>
            <p class="diff-body">Care recommendations are formulated collaboratively with your distinct daily routine, professional demands, and health values in mind.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION I: Patient Journey / How It Works -->
    <section class="section journey-section" id="journey" aria-labelledby="journey-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">A Clear Pathway</span>
          <h2 id="journey-title" class="section-heading">Getting Started Is Simple.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">A straightforward three-step process to initiate personalized medical care.</p>
        </div>

        <div class="journey-timeline">
          <div class="journey-step reveal-on-scroll" style="--delay: 50ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">1</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step One</span>
              <h3 class="step-title">Choose Your Care</h3>
              <p class="step-body">Explore our comprehensive primary care, mobile visits, or wellness services to identify what best supports your current health goals.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <div class="journey-step reveal-on-scroll" style="--delay: 150ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">2</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step Two</span>
              <h3 class="step-title">Contact Our Team</h3>
              <p class="step-body">Use the appointment inquiry form or direct outreach to discuss your specific needs and determine the most appropriate care setting.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <div class="journey-step reveal-on-scroll" style="--delay: 250ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">3</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step Three</span>
              <h3 class="step-title">Plan Your Visit</h3>
              <p class="step-body">Confirm your appointment logistics, complete intake documentation, and receive dedicated, one-on-one medical attention.</p>
            </div>
          </div>
        </div>

        <div class="journey-footnote text-center reveal-on-scroll">
          <p><em>Note: Official appointment bookings are confirmed following clinical review and scheduling confirmation by our practice team.</em></p>
        </div>
      </div>
    </section>

    <!-- SECTION J: Call-to-Action Banner -->
    <section class="cta-banner" aria-labelledby="cta-title">
      <div class="cta-ambient-circle" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-inner reveal-on-scroll">
          <span class="cta-eyebrow">Elevate Your Healthcare Experience</span>
          <h2 id="cta-title" class="cta-headline">Your Health. Your Convenience. Your Choice.</h2>
          <p class="cta-text">
            Take the next step toward personalized healthcare designed around your life. Reach out today to discuss clinical offerings and availability.
          </p>
          <div class="cta-actions">
            <a href="#contact" class="btn btn-gold btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </a>
            <a href="#contact" class="btn btn-outline-white btn-interactive">
              <span>Contact Our Practice</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION K: Contact and Location Preview -->
    <section class="section contact-section" id="contact" aria-labelledby="contact-title">
      <div class="container">
        <div class="contact-grid">
          <div class="contact-info-col reveal-on-scroll">
            <span class="section-eyebrow">Connect With Us</span>
            <h2 id="contact-title" class="section-heading">Appointment Inquiries &amp; Information</h2>
            <div class="divider-gold" aria-hidden="true"></div>
            
            <p class="contact-lead">
              Serving Laurel, Maryland, and surrounding communities. We welcome questions regarding practice enrollment, mobile appointments, and wellness services.
            </p>

            <div class="contact-details-list">
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Service Area &amp; Location</h3>
                  <p class="contact-value">Laurel, Maryland &amp; Surrounding Communities</p>
                  <span class="contact-subtext">Clinical suite address provided upon confirmed appointment scheduling.</span>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Direct Telephone</h3>
                  <p class="contact-value" id="phone-display">[Phone Verified Upon Practice Scheduling]</p>
                  <span class="contact-subtext">Direct patient line is provided during intake processing.</span>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Electronic Inquiries</h3>
                  <p class="contact-value" id="email-display">[inquiries@conciergemedical-example.com]</p>
                  <span class="contact-subtext">Please submit the form for scheduling inquiries.</span>
                </div>
              </div>
            </div>

            <div class="contact-emergency-warning">
              <div class="warning-icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </div>
              <p><strong>Emergency Notice:</strong> If you are experiencing a medical emergency, acute chest pain, or life-threatening symptoms, dial 911 immediately or proceed to the nearest emergency room.</p>
            </div>
          </div>

          <div class="contact-form-col reveal-on-scroll" style="--delay: 150ms;">
            <div class="form-card">
              <div class="form-header">
                <h3 class="form-heading">Request an Appointment Inquiry</h3>
                <p class="form-subtext">Submit your details to discuss availability. <em>Do not include private health records, medications, or sensitive medical symptoms.</em></p>
              </div>

              <form id="appointment-inquiry-form" class="inquiry-form" novalidate>
                <div class="form-group">
                  <label for="fullName">Full Name <span class="required" aria-hidden="true">*</span></label>
                  <input type="text" id="fullName" name="fullName" class="form-control" placeholder="First and last name" required autocomplete="name">
                  <span class="field-error" id="nameError" role="alert">Please enter your full name.</span>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="emailAddress">Email Address <span class="required" aria-hidden="true">*</span></label>
                    <input type="email" id="emailAddress" name="emailAddress" class="form-control" placeholder="name@example.com" required autocomplete="email">
                    <span class="field-error" id="emailError" role="alert">Please enter a valid email address.</span>
                  </div>

                  <div class="form-group">
                    <label for="phoneNumber">Phone Number <span class="required" aria-hidden="true">*</span></label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="(301) 555-0123" required autocomplete="tel">
                    <span class="field-error" id="phoneError" role="alert">Please enter a valid telephone number.</span>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="serviceInterest">Service of Interest <span class="required" aria-hidden="true">*</span></label>
                    <select id="serviceInterest" name="serviceInterest" class="form-control" required>
                      <option value="" disabled selected>Select service category</option>
                      <option value="primary-care">Primary Care &amp; Preventive Health</option>
                      <option value="mobile-concierge">Mobile Concierge Care</option>
                      <option value="weight-management">Medical Weight Management</option>
                      <option value="iv-hydration">IV Hydration &amp; Wellness</option>
                      <option value="telehealth">Telehealth Video Consultation</option>
                      <option value="occupational">Occupational Health &amp; DOT Physicals</option>
                      <option value="cpr-training">CPR &amp; Healthcare Training</option>
                    </select>
                    <span class="field-error" id="serviceError" role="alert">Please select an area of service interest.</span>
                  </div>

                  <div class="form-group">
                    <label for="preferredSetting">Preferred Care Setting <span class="required" aria-hidden="true">*</span></label>
                    <select id="preferredSetting" name="preferredSetting" class="form-control" required>
                      <option value="" disabled selected>Select preferred setting</option>
                      <option value="office">In-Office (Laurel Clinic)</option>
                      <option value="home">Mobile / Home Visit</option>
                      <option value="workplace">Mobile / Workplace Consultation</option>
                      <option value="virtual">Virtual / Telehealth Consultation</option>
                    </select>
                    <span class="field-error" id="settingError" role="alert">Please select a preferred care setting.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="generalNote">General Availability or Questions (Optional)</label>
                  <textarea id="generalNote" name="generalNote" class="form-control text-area" rows="3" placeholder="Preferred days of the week or general scheduling questions. (No symptoms or protected health details)"></textarea>
                </div>

                <div class="form-group-checkbox">
                  <input type="checkbox" id="privacyConsent" name="privacyConsent" required>
                  <label for="privacyConsent" class="checkbox-label">
                    I acknowledge this is an inquiry for practice scheduling, not a formal physician-patient relationship or acute emergency triage.
                  </label>
                  <span class="field-error" id="consentError" role="alert">Please acknowledge this statement before submitting.</span>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-interactive">
                  <span>Submit Appointment Inquiry</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>

                <div id="formFeedback" class="form-feedback" aria-live="polite"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer() ?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/demo-one.js"></script>

<?php wp_footer(); ?>
  

</body>
</html>