<?php
/*
Template Name: Custom Home Template
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concierge Medical | Primary Care &amp; Wellness | Laurel, Maryland</title>
  <meta name="description" content="Personalized, compassionate primary care, mobile concierge medicine, and wellness services in Laurel, MD and surrounding communities. Exceptional care at our office, your home, or virtually.">
  <meta name="robots" content="index, follow">
  
  <!-- Canonical & Social Metadata Placeholders -->
  <link rel="canonical" href="https://example.com/">
  <meta property="og:title" content="Concierge Medical | Primary Care &amp; Wellness">
  <meta property="og:description" content="Exceptional Care. Your Place or Ours. Personalized medical care delivered in-office, at home, or virtually in Laurel, MD.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=1200&q=80">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Google Fonts Preconnect & Stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400..700;1,9..40,400..700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link">Skip to main content</a>

 <?php get_header('home'); ?>

  <main id="main-content">
    <!-- SECTION C: Hero Section -->
    <section class="hero-section" id="hero" aria-labelledby="hero-title">
      <div class="container hero-container">
        <div class="hero-content">
          <div class="eyebrow-wrapper">
            <span class="eyebrow">Personalized Care. Designed Around You.</span>
          </div>
          <h1 id="hero-title" class="hero-headline">Exceptional Care. <br><em>Your Place or Ours.</em></h1>
          <p class="hero-subheading">Personalized Healthcare Designed Around You.</p>
          <p class="hero-body">
            At Concierge Medical, we believe quality healthcare should be convenient, accessible, and tailored to your needs. Whether you visit our welcoming medical office, receive care at home, or connect with a provider virtually, we are committed to compassionate, professional, patient-centered healthcare.
          </p>
          
          <div class="hero-cta-group">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary" data-booking-trigger>Book an Appointment</a>
            <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn btn-secondary">Explore Our Services</a>
          </div>

          <div class="hero-microcopy">
            <svg class="micro-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Office visits &bull; Mobile care &bull; Virtual consultations</span>
          </div>
        </div>

        <div class="hero-visual">
          <div class="hero-image-wrapper">
            <img 
              src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=1100&q=85" 
              alt="A compassionate medical practitioner engaged in an attentive, one-on-one consultation with a patient in an open, welcoming clinical space." 
              class="hero-img"
              width="600"
              height="720"
              loading="eager"
            >
            <div class="hero-accent-card" aria-hidden="true">
              <span class="accent-number">Laurel, MD</span>
              <span class="accent-label">Serving Laurel &amp; Surrounding Communities</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION D: Trust and Convenience Bar -->
    <section class="trust-bar" aria-label="Practice Pillars">
      <div class="container">
        <ul class="trust-grid">
          <li class="trust-item">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Personalized Medical Care</h3>
              <p class="trust-desc">Care plans tailored directly to your health goals.</p>
            </div>
          </li>
          <li class="trust-item">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Office, Home &amp; Virtual Options</h3>
              <p class="trust-desc">Flexible care settings chosen for clinical convenience.</p>
            </div>
          </li>
          <li class="trust-item">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Patient-Centered Approach</h3>
              <p class="trust-desc">Unrushed dialogues that honor your time and comfort.</p>
            </div>
          </li>
          <li class="trust-item">
            <div class="trust-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
            </div>
            <div class="trust-text">
              <h3 class="trust-title">Convenient Appointments</h3>
              <p class="trust-desc">Straightforward inquiry options to plan your visit.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- SECTION E: Introduction and Practice Philosophy -->
    <section class="section philosophy-section" id="philosophy" aria-labelledby="philosophy-title">
      <div class="container philosophy-container">
        <div class="philosophy-visual reveal">
          <div class="image-frame">
            <img 
              src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=1000&q=80" 
              alt="Medical professional reviewing clinical records in a serene, modern consultation room" 
              class="philosophy-img"
              width="500"
              height="620"
              loading="lazy"
            >
          </div>
          <div class="experience-badge">
            <span class="badge-tag">Dedicated Focus</span>
            <span class="badge-title">Primary Care &amp; Wellness</span>
          </div>
        </div>

        <div class="philosophy-text reveal">
          <span class="section-eyebrow">Practice Philosophy</span>
          <h2 id="philosophy-title" class="section-heading">Healthcare That Fits Your Life.</h2>
          <div class="divider-gold"></div>
          <p class="lead-text">
            Your health deserves personal attention, thoughtful guidance, and care that works with your life. Concierge Medical brings together professional medical services and convenient care options to help you navigate your health with confidence.
          </p>
          <p class="body-text">
            Traditional clinical environments often feel rushed and inflexible. We provide a refreshing alternative: modern medical practice anchored in proactive communication, clinical rigor, and adaptable care settings. Whether you visit us at our clinic, request a mobile visit to your residence, or initiate a telehealth appointment, our clinical team focuses on thorough evaluations and sustainable wellness plans.
          </p>
          <div class="philosophy-highlights">
            <div class="highlight-item">
              <div class="check-icon" aria-hidden="true">&check;</div>
              <div>
                <strong>Attentive Clinical Listening:</strong> Unhurried visits ensure your concerns and symptoms are comprehensively understood.
              </div>
            </div>
            <div class="highlight-item">
              <div class="check-icon" aria-hidden="true">&check;</div>
              <div>
                <strong>Flexible Delivery Models:</strong> Receive appropriate care in the office, at your workplace, or from home.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION F: Featured Services -->
    <section class="section services-section" id="services" aria-labelledby="services-title">
      <div class="container">
        <div class="section-header text-center reveal">
          <span class="section-eyebrow">Comprehensive Offerings</span>
          <h2 id="services-title" class="section-heading">Personalized Care. Comprehensive Services.</h2>
          <div class="divider-gold center"></div>
          <p class="section-subtitle">
            Explore medical, preventive, wellness, and professional healthcare services designed around your needs.
          </p>
        </div>

        <div class="services-grid">
          <!-- Service 1: Primary Care -->
          <article class="service-card reveal">
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
              <li>Comprehensive wellness physicals</li>
              <li>Routine lab screenings &amp; analysis</li>
              <li>Chronic disease management</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link" aria-label="Inquire about Primary Care and Preventive Health">
              <span>Inquire About Care</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 2: Mobile Concierge Care -->
          <article class="service-card featured-service reveal">
            <div class="service-tag">Mobile Specialty</div>
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              </span>
              <span class="service-number">02</span>
            </div>
            <h3 class="service-title">Mobile Concierge Care</h3>
            <p class="service-description">
              Quality clinical visits delivered directly to your home or office. Ideal for busy professionals, individuals with mobility challenges, and post-acute follow-up care.
            </p>
            <ul class="service-bullets">
              <li>Home visits and workplace consultations</li>
              <li>Medication reviews &amp; continuity checkups</li>
              <li>Mobility-assisted clinical support</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Mobile Concierge Care">
              <span>Inquire About Mobile Care</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 3: Medical Weight Management -->
          <article class="service-card reveal">
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
              </span>
              <span class="service-number">03</span>
            </div>
            <h3 class="service-title">Medical Weight Management</h3>
            <p class="service-description">
              Evidence-based weight health plans with individualized metabolic assessments, lifestyle and nutritional guidance, and medical therapies when clinically appropriate.
            </p>
            <ul class="service-bullets">
              <li>Individual metabolic assessments</li>
              <li>Nutritional and lifestyle counseling</li>
              <li>Medication evaluation &amp; ongoing monitoring</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link" aria-label="Inquire about Medical Weight Management">
              <span>Inquire About Weight Health</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 4: IV Hydration & Wellness -->
          <article class="service-card reveal">
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
              </span>
              <span class="service-number">04</span>
            </div>
            <h3 class="service-title">IV Hydration &amp; Wellness</h3>
            <p class="service-description">
              Medically supervised hydration and micronutrient infusions designed to support recovery and overall vitality. Administered in-office or via mobile visit where clinically appropriate.
            </p>
            <ul class="service-bullets">
              <li>Individual clinical assessments</li>
              <li>Targeted electrolyte &amp; vitamin blends</li>
              <li>Administered by licensed professionals</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about IV Hydration and Wellness">
              <span>Inquire About IV Therapy</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 5: Telehealth -->
          <article class="service-card reveal">
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
              </span>
              <span class="service-number">05</span>
            </div>
            <h3 class="service-title">Telehealth Consultations</h3>
            <p class="service-description">
              Secure, convenient virtual visits for routine consultations, symptom evaluation, medication adjustments, and preventive health follow-ups from the comfort of your home.
            </p>
            <ul class="service-bullets">
              <li>High-definition encrypted video visits</li>
              <li>Prescription refills &amp; condition check-ins</li>
              <li>Flexible scheduling for busy routines</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link" aria-label="Inquire about Telehealth Consultations">
              <span>Inquire About Telehealth</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 6: Occupational Health & DOT Physicals -->
          <article class="service-card reveal">
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
              </span>
              <span class="service-number">06</span>
            </div>
            <h3 class="service-title">Occupational Health &amp; DOT Physicals</h3>
            <p class="service-description">
              Pre-employment screenings, commercial driver DOT medical evaluations, and workplace physicals performed according to federal and organizational standards upon credential verification.
            </p>
            <ul class="service-bullets">
              <li>Commercial driver physicals (DOT)</li>
              <li>Pre-employment medical clearance</li>
              <li>Workplace health screenings</li>
            </ul>
            <a href="#contact" class="service-link" aria-label="Inquire about Occupational Health and DOT Physicals">
              <span>Inquire About Occupational Health</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>

          <!-- Service 7: CPR & Healthcare Training -->
          <article class="service-card service-card-wide reveal">
            <div class="service-header">
              <span class="service-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 4-2.5 4-2.5"/></svg>
              </span>
              <span class="service-number">07</span>
            </div>
            <h3 class="service-title">CPR &amp; Healthcare Training</h3>
            <p class="service-description">
              Authorized life-support and emergency response education for clinical teams, corporate workplaces, and community groups. Inquiries available for CPR, AED, First Aid, BLS, and ACLS courses pending credentialed schedules.
            </p>
            <ul class="service-bullets inline-bullets">
              <li>AHA-aligned CPR &amp; AED certifications</li>
              <li>BLS &amp; ACLS clinical courses</li>
              <li>On-site group training for local businesses</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link" aria-label="Inquire about CPR and Healthcare Training">
              <span>Inquire About Group Training</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </article>
        </div>

        <div class="clinical-note-box reveal">
          <p><strong>Clinical Notice:</strong> Certain specialized modalities, including DOT physicals, IV therapies, and authorized BLS/ACLS courses, are scheduled subject to verified provider credentials, clinical intake criteria, and jurisdictional regulatory approval.</p>
        </div>
      </div>
    </section>

    <!-- SECTION G: Mobile and Virtual Care Feature -->
    <section class="section care-settings-section" id="care-settings" aria-labelledby="settings-title">
      <div class="container">
        <div class="care-settings-layout">
          <div class="care-text-col reveal">
            <span class="section-eyebrow">Three Dynamic Settings</span>
            <h2 id="settings-title" class="section-heading">Care That Comes to You.</h2>
            <div class="divider-gold"></div>
            <p class="lead-text">
              From convenient office visits to eligible home-based and virtual consultations, we aim to make accessing appropriate care simpler and more personal.
            </p>
            <p class="body-text">
              Modern life rarely adheres to rigid scheduling. By removing the obstacles of travel and prolonged clinic wait times, we allow you to focus entirely on health restoration and preventive wellness.
            </p>
            <div class="care-cta-container">
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary" data-booking-trigger>Book an Appointment</a>
              <span class="caption-note">Availability depends on clinical appropriateness and confirmed service schedules.</span>
            </div>
          </div>

          <div class="care-cards-col">
            <div class="care-mode-card reveal">
              <div class="mode-icon" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
              </div>
              <div class="mode-content">
                <h3 class="mode-title">In-Office Care</h3>
                <p class="mode-desc">A calm, boutique clinic setting in Laurel, MD designed for relaxed, private consultations, diagnostic procedures, and preventive physicals.</p>
              </div>
            </div>

            <div class="care-mode-card reveal">
              <div class="mode-icon" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div class="mode-content">
                <h3 class="mode-title">Mobile Care</h3>
                <p class="mode-desc">Licensed providers visit your home or workplace for routine checkups, IV therapies, and evaluations when traveling to a clinic is inconvenient.</p>
              </div>
            </div>

            <div class="care-mode-card reveal">
              <div class="mode-icon" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 10l5-3v10l-5-3v-4z"/><rect x="2" y="6" width="13" height="12" rx="2"/></svg>
              </div>
              <div class="mode-content">
                <h3 class="mode-title">Virtual Consultations</h3>
                <p class="mode-desc">Encrypted, high-definition telehealth visits for prompt care assessments, chronic disease check-ins, lab results discussions, and preventive advice.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION H: Why Choose Concierge Medical? -->
    <section class="section differentiators-section" id="why-choose" aria-labelledby="why-title">
      <div class="container">
        <div class="section-header text-center reveal">
          <span class="section-eyebrow">The Concierge Distinction</span>
          <h2 id="why-title" class="section-heading">More Personal. More Convenient. More Connected.</h2>
          <div class="divider-gold center"></div>
          <p class="section-subtitle">
            A healthcare model built to prioritize relationship quality, clinical excellence, and respectful service delivery.
          </p>
        </div>

        <div class="diff-grid">
          <div class="diff-card reveal">
            <div class="diff-number">01</div>
            <h3 class="diff-heading">Individualized Attention</h3>
            <p class="diff-body">Appointments are scheduled with deliberate buffers so you never feel rushed. Your health history is evaluated with careful detail.</p>
          </div>

          <div class="diff-card reveal">
            <div class="diff-number">02</div>
            <h3 class="diff-heading">Convenient Care Options</h3>
            <p class="diff-body">Whether visiting the clinic or scheduling an at-home appointment, our structure reduces logistical friction and waiting room delays.</p>
          </div>

          <div class="diff-card reveal">
            <div class="diff-number">03</div>
            <h3 class="diff-heading">Compassionate Communication</h3>
            <p class="diff-body">Direct, empathetic dialogue without clinical jargon. We ensure you leave every visit with actionable clarity and reassurance.</p>
          </div>

          <div class="diff-card reveal">
            <div class="diff-number">04</div>
            <h3 class="diff-heading">Continuity of Care</h3>
            <p class="diff-body">Partner with clinicians who track your health journey across visits, minimizing repetitive intake questions and fragmented guidance.</p>
          </div>

          <div class="diff-card reveal">
            <div class="diff-number">05</div>
            <h3 class="diff-heading">Preventive Wellness Focus</h3>
            <p class="diff-body">Proactive screening and proactive habit formation designed to maintain your vitality and mitigate risks before acute conditions arise.</p>
          </div>

          <div class="diff-card reveal">
            <div class="diff-number">06</div>
            <h3 class="diff-heading">Patient-Centered Planning</h3>
            <p class="diff-body">Care plans are formulated collaboratively with your personal lifestyle, profession, and distinct clinical circumstances in mind.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION I: Patient Journey / How It Works -->
    <section class="section journey-section" id="journey" aria-labelledby="journey-title">
      <div class="container">
        <div class="section-header text-center reveal">
          <span class="section-eyebrow">A Clear Pathway</span>
          <h2 id="journey-title" class="section-heading">Getting Started Is Simple.</h2>
          <div class="divider-gold center"></div>
          <p class="section-subtitle">A straightforward process to initiate personalized care tailored to your circumstances.</p>
        </div>

        <div class="journey-timeline">
          <div class="journey-step reveal">
            <div class="step-badge">1</div>
            <div class="step-card">
              <span class="step-tag">Step One</span>
              <h3 class="step-title">Choose Your Care</h3>
              <p class="step-body">Explore the available services and identify the type of care you need—whether primary medicine, wellness therapies, or corporate screenings.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <div class="journey-step reveal">
            <div class="step-badge">2</div>
            <div class="step-card">
              <span class="step-tag">Step Two</span>
              <h3 class="step-title">Contact Our Team</h3>
              <p class="step-body">Use the appointment inquiry option to discuss your needs and discover whether an in-office, mobile, or virtual consultation is best suited.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <div class="journey-step reveal">
            <div class="step-badge">3</div>
            <div class="step-card">
              <span class="step-tag">Step Three</span>
              <h3 class="step-title">Plan Your Visit</h3>
              <p class="step-body">Confirm the appropriate service, appointment details, and next steps with the practice team before your scheduled time.</p>
            </div>
          </div>
        </div>

        <div class="journey-footnote text-center reveal">
          <p>Please note: Appointments are confirmed directly by practice staff following an intake review.</p>
        </div>
      </div>
    </section>

    <!-- SECTION J: Call-to-Action Banner -->
    <section class="cta-banner" aria-labelledby="cta-title">
      <div class="container">
        <div class="cta-inner reveal">
          <div class="cta-decoration-circle" aria-hidden="true"></div>
          <span class="cta-eyebrow">Connect With Us</span>
          <h2 id="cta-title" class="cta-headline">Your Health. Your Convenience. Your Choice.</h2>
          <p class="cta-text">
            Take the next step toward personalized healthcare designed around your life. Reach out today to discuss clinical offerings and availability.
          </p>
          <div class="cta-actions">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-gold" data-booking-trigger>Book an Appointment</a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-outline-white">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION K: Contact and Location Preview -->
    <section class="section contact-section" id="contact" aria-labelledby="contact-title">
      <div class="container">
        <div class="contact-grid">
          <div class="contact-info-col reveal">
            <span class="section-eyebrow">Direct Inquiries</span>
            <h2 id="contact-title" class="section-heading">Connect With Concierge Medical</h2>
            <div class="divider-gold"></div>
            <p class="contact-lead">
              Serving Laurel, Maryland, and surrounding communities. We welcome inquiries regarding primary care enrollment, mobile care coverage, and appointment requests.
            </p>

            <div class="contact-details-list">
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <h3 class="contact-label">Service Area &amp; Practice Location</h3>
                  <p class="contact-value">Laurel, Maryland and surrounding communities</p>
                  <small class="contact-subtext">Clinical office address provided upon confirmed appointment booking.</small>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                  <h3 class="contact-label">Phone Communication</h3>
                  <p class="contact-value" id="phone-display">[Phone Number Verified Upon Registration]</p>
                  <small class="contact-subtext">Direct practice phone lines will be published upon regulatory onboarding.</small>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                </div>
                <div>
                  <h3 class="contact-label">Inquiry Ingestion</h3>
                  <p class="contact-value" id="email-display">[inquiries@conciergemedical-example.com]</p>
                  <small class="contact-subtext">Please use the form to request an appointment inquiry callback.</small>
                </div>
              </div>
            </div>

            <div class="contact-notice">
              <strong>Emergency Guidance:</strong> If you are experiencing a medical emergency, do not submit an inquiry. Dial 911 or visit your nearest emergency department immediately.
            </div>
          </div>

          <div class="contact-form-col reveal">
            <div class="form-card">
              <div class="form-header">
                <h3 class="form-heading">Request an Appointment Inquiry</h3>
                <p class="form-subtext">Please enter standard contact details. <em>Do not enter private health information, medical history, or symptoms.</em></p>
              </div>

              <!-- Demonstration Form -->
              <form id="appointment-inquiry-form" class="inquiry-form" novalidate>
                <div class="form-group">
                  <label for="fullName">Full Name <span class="required" aria-hidden="true">*</span></label>
                  <input type="text" id="fullName" name="fullName" class="form-control" placeholder="Jane Doe" required autocomplete="name">
                  <span class="field-error" id="nameError" role="alert">Please provide your full name.</span>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="emailAddress">Email Address <span class="required" aria-hidden="true">*</span></label>
                    <input type="email" id="emailAddress" name="emailAddress" class="form-control" placeholder="jane@example.com" required autocomplete="email">
                    <span class="field-error" id="emailError" role="alert">Please enter a valid email address.</span>
                  </div>

                  <div class="form-group">
                    <label for="phoneNumber">Phone Number <span class="required" aria-hidden="true">*</span></label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="(301) 555-0123" required autocomplete="tel">
                    <span class="field-error" id="phoneError" role="alert">Please provide a valid phone number.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="serviceInterest">Primary Service of Interest <span class="required" aria-hidden="true">*</span></label>
                  <select id="serviceInterest" name="serviceInterest" class="form-control" required>
                    <option value="" disabled selected>Select a service category</option>
                    <option value="primary-care">Primary Care &amp; Preventive Health</option>
                    <option value="mobile-concierge">Mobile Concierge Care</option>
                    <option value="weight-management">Medical Weight Management</option>
                    <option value="iv-hydration">IV Hydration &amp; Wellness</option>
                    <option value="telehealth">Telehealth Consultation</option>
                    <option value="occupational">Occupational Health &amp; DOT</option>
                    <option value="cpr-training">CPR &amp; Healthcare Training</option>
                  </select>
                  <span class="field-error" id="serviceError" role="alert">Please select an area of service interest.</span>
                </div>

                <div class="form-group">
                  <label for="preferredSetting">Preferred Care Setting <span class="required" aria-hidden="true">*</span></label>
                  <select id="preferredSetting" name="preferredSetting" class="form-control" required>
                    <option value="" disabled selected>Select preferred care setting</option>
                    <option value="office">In-Office (Laurel, MD)</option>
                    <option value="home">Mobile / Home Visit</option>
                    <option value="workplace">Mobile / Workplace Consultation</option>
                    <option value="virtual">Virtual / Telehealth</option>
                  </select>
                  <span class="field-error" id="settingError" role="alert">Please choose a preferred setting.</span>
                </div>

                <div class="form-group">
                  <label for="generalNote">General Scheduling Notes (Optional)</label>
                  <textarea id="generalNote" name="generalNote" class="form-control text-area" rows="3" placeholder="e.g. Best times of week for contact. (Do not provide personal medical details.)"></textarea>
                </div>

                <div class="form-group-checkbox">
                  <input type="checkbox" id="privacyConsent" name="privacyConsent" required>
                  <label for="privacyConsent" class="checkbox-label">
                    I understand this is an appointment inquiry for general scheduling, not a clinical consultation or guaranteed appointment.
                  </label>
                  <span class="field-error" id="consentError" role="alert">Please confirm this acknowledgment before submitting.</span>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit Appointment Inquiry</button>

                <div id="formFeedback" class="form-feedback" aria-live="polite"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer("home"); ?>

  <script src="script.js"></script>
</body>
</html>