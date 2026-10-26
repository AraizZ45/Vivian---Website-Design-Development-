<?php
/*
 * Template Name: Primary Care Page
 */

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primary Care &amp; Preventive Health | Concierge Medical</title>
  <meta name="description" content="Personalized primary care and proactive preventive health services in Laurel, MD. Annual physicals, acute illness treatment, and chronic disease management.">
  <meta name="robots" content="index, follow">

  <!-- Open Graph & Twitter Cards -->
  <meta property="og:title" content="Primary Care &amp; Preventive Health | Concierge Medical">
  <meta property="og:description" content="Proactive Care for a Healthier You. Annual examinations, chronic illness management, and personalized preventive care in Laurel, MD.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/primary-care.html">
  <meta property="og:image" content="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=1200&q=80">
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

<?php get_header('home'); ?>

  <main id="main-content">
    <!-- SECTION A: Hero Section -->
    <section class="hero-section primary-care-hero-section" id="primary-care-hero" aria-labelledby="primary-hero-title">
      <div class="hero-ambient-glow" aria-hidden="true"></div>
      <div class="container hero-container">
        <div class="hero-content">
          <div class="hero-stagger" style="--stagger: 1;">
            <div class="eyebrow-pill">
              <span class="eyebrow-dot" aria-hidden="true"></span>
              <span class="eyebrow-text">PRIMARY CARE &amp; PREVENTIVE HEALTH</span>
            </div>
          </div>

          <h1 id="primary-hero-title" class="hero-headline hero-stagger" style="--stagger: 2;">
            Proactive Care <br>
            <span class="hero-italic-emphasis">for a Healthier You.</span>
          </h1>

          <p class="hero-subheading hero-stagger" style="--stagger: 3;">
            Comprehensive medical evaluations, chronic illness management, and proactive wellness guidance tailored to your life.
          </p>

          <p class="hero-body hero-stagger" style="--stagger: 4;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
          </p>

          <div class="hero-cta-group hero-stagger" style="--stagger: 5;">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
              <span>Request an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-secondary btn-interactive">
              <span>Explore Our Services</span>
            </a>
          </div>

          <div class="hero-footer-meta hero-stagger" style="--stagger: 6;">
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              <span>Routine &amp; Preventive Screenings</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              <span>Dedicated Clinical Focus</span>
            </div>
          </div>
        </div>

        <div class="hero-visual hero-stagger" style="--stagger: 3;">
          <div class="visual-composition">
            <div class="gold-frame-accent" aria-hidden="true"></div>
            <div class="hero-image-wrapper">
              <img 
                src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=1100&q=85" 
                alt="Licensed healthcare provider consulting attentively with an adult patient in a serene, modern clinical suite" 
                class="hero-img"
                width="620"
                height="740"
                loading="eager"
              >
            </div>

            <div class="floating-badge badge-top" aria-hidden="true">
              <div class="badge-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Care Model</span>
                <span class="badge-main">Personal Attention</span>
              </div>
            </div>

            <div class="floating-badge badge-bottom" aria-hidden="true">
              <div class="badge-icon-box gold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Visit Format</span>
                <span class="badge-main">Unhurried Consultations</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION B: Introduction Section -->
    <section class="section primary-intro-section" id="primary-intro" aria-labelledby="intro-heading">
      <div class="container">
        <div class="story-grid">
          <div class="story-visual reveal-on-scroll">
            <div class="visual-layered-stack">
              <div class="image-accent-border" aria-hidden="true"></div>
              <div class="image-frame">
                <img 
                  src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=900&q=80" 
                  alt="Doctor reviewing detailed diagnostic health information in a calm consultation setting" 
                  class="philosophy-img"
                  width="500"
                  height="620"
                  loading="lazy"
                >
              </div>
              <div class="experience-badge" aria-hidden="true">
                <div class="badge-icon-leaf">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34"/></svg>
                </div>
                <span class="badge-tag">Clinical Standard</span>
                <span class="badge-title">Comprehensive Primary Care</span>
              </div>
            </div>
          </div>

          <div class="story-content reveal-on-scroll" style="--delay: 150ms;">
            <span class="section-eyebrow">OUR PHILOSOPHY</span>
            <h2 id="intro-heading" class="section-heading">Your Health Deserves Personal Attention.</h2>
            <div class="divider-gold" aria-hidden="true"></div>

            <p class="lead-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <p class="body-text">
              Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
            </p>
            <p class="body-text">
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.
            </p>

            <div class="story-quote-card">
              <p class="story-quote-text">&ldquo;Healthcare built around thoughtful conversations and proactive wellness.&rdquo;</p>
              <span class="story-quote-caption">Concierge Medical Clinical Commitment</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION C: Primary Care Services -->
    <section class="section services-grid-section" id="primary-services" aria-labelledby="services-grid-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">CLINICAL SCOPE</span>
          <h2 id="services-grid-title" class="section-heading">Comprehensive Primary Care.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Explore routine, acute, and chronic medical management designed to support your ongoing health.
          </p>
        </div>

        <div class="primary-services-grid">
          
          <!-- 1. Routine & Annual Physical Examinations -->
          <article class="service-feature-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="feature-card-header">
              <div class="feature-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <span class="feature-number">01</span>
            </div>
            <h3 class="feature-title">Routine &amp; Annual Physical Examinations</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <ul class="feature-bullets">
              <li>Comprehensive full-body physical assessments</li>
              <li>Baseline vital sign analysis &amp; biometric scoring</li>
              <li>Personalized health goal evaluations</li>
            </ul>
          </article>

          <!-- 2. Acute Illness Assessment & Treatment -->
          <article class="service-feature-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="feature-card-header">
              <div class="feature-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
              </div>
              <span class="feature-number">02</span>
            </div>
            <h3 class="feature-title">Acute Illness Assessment &amp; Treatment</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
            </p>
            <ul class="feature-bullets">
              <li>Prompt evaluation of respiratory &amp; sinus infections</li>
              <li>Treatment of minor ailments &amp; seasonal symptoms</li>
              <li>Same-day inquiry review for urgent scheduling</li>
            </ul>
          </article>

          <!-- 3. Chronic Condition Management (Highlighted Featured Card) -->
          <article class="service-feature-card card-highlighted reveal-on-scroll" style="--delay: 150ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="highlight-badge">CHRONIC CARE FOCUS</div>
            <div class="feature-card-header">
              <div class="feature-icon gold-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              </div>
              <span class="feature-number">03</span>
            </div>
            <h3 class="feature-title">Chronic Condition Management</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
            </p>
            <div class="chronic-tags-wrap">
              <span class="chronic-pill">Diabetes Management</span>
              <span class="chronic-pill">Hypertension Control</span>
              <span class="chronic-pill">Cholesterol Optimization</span>
            </div>
            <ul class="feature-bullets">
              <li>Individualized metabolic tracking protocols</li>
              <li>Medication optimization and lifestyle support</li>
              <li>Regular diagnostic monitoring and check-ins</li>
            </ul>
          </article>

          <!-- 4. Medication Management -->
          <article class="service-feature-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="feature-card-header">
              <div class="feature-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
              </div>
              <span class="feature-number">04</span>
            </div>
            <h3 class="feature-title">Medication Management</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui.
            </p>
            <ul class="feature-bullets">
              <li>Comprehensive prescription reconciliation</li>
              <li>Interaction screening &amp; safety reviews</li>
              <li>Timely maintenance refills and dosage adjustments</li>
            </ul>
          </article>

          <!-- 5. Laboratory Testing & Referrals -->
          <article class="service-feature-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="feature-card-header">
              <div class="feature-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
              </div>
              <span class="feature-number">05</span>
            </div>
            <h3 class="feature-title">Laboratory Testing &amp; Referrals</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat.
            </p>
            <ul class="feature-bullets">
              <li>Routine and specialized diagnostic blood panels</li>
              <li>Metabolic, lipid, and endocrine testing orders</li>
              <li>Care coordination with regional medical specialists</li>
            </ul>
          </article>

          <!-- 6. Follow-Up Care & Patient Education -->
          <article class="service-feature-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="card-glass-glow" aria-hidden="true"></div>
            <div class="feature-card-header">
              <div class="feature-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
              </div>
              <span class="feature-number">06</span>
            </div>
            <h3 class="feature-title">Follow-Up Care &amp; Patient Education</h3>
            <p class="feature-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa.
            </p>
            <ul class="feature-bullets">
              <li>Dedicated reviews of diagnostic lab results</li>
              <li>Actionable, clear guidance without clinical jargon</li>
              <li>Continuous partnership across every life stage</li>
            </ul>
          </article>

        </div>
      </div>
    </section>

    <!-- SECTION D: Preventive Health Section -->
    <section class="section preventive-section" id="preventive-health" aria-labelledby="preventive-heading">
      <div class="container">
        <div class="preventive-split-grid">
          
          <div class="preventive-media-col reveal-on-scroll">
            <div class="visual-layered-stack">
              <div class="image-accent-border" aria-hidden="true"></div>
              <div class="image-frame">
                <img 
                  src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=900&q=80" 
                  alt="Healthcare professional discussing individualized preventive wellness strategies with patient" 
                  class="philosophy-img"
                  width="500"
                  height="620"
                  loading="lazy"
                >
              </div>
              <div class="experience-badge" aria-hidden="true">
                <span class="badge-tag">Proactive Strategy</span>
                <span class="badge-title">Preventive Wellness</span>
              </div>
            </div>
          </div>

          <div class="preventive-content-col reveal-on-scroll" style="--delay: 150ms;">
            <span class="section-eyebrow">PREVENTION FIRST</span>
            <h2 id="preventive-heading" class="section-heading">Prevention Starts With Knowing Your Health.</h2>
            <div class="divider-gold" aria-hidden="true"></div>

            <p class="lead-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <div class="preventive-pillars-list">
              <!-- Pillar 1 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Routine Wellness Examinations</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
              </div>

              <!-- Pillar 2 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Preventive Screenings</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ante dapibus diam.</p>
                </div>
              </div>

              <!-- Pillar 3 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Health Risk Assessments</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget.</p>
                </div>
              </div>

              <!-- Pillar 4 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Immunization Reviews</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna.</p>
                </div>
              </div>

              <!-- Pillar 5 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Lifestyle Counseling</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci.</p>
                </div>
              </div>

              <!-- Pillar 6 -->
              <div class="preventive-pillar-item">
                <div class="pillar-bullet" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <h3 class="pillar-title">Individualized Wellness Planning</h3>
                  <p class="pillar-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.</p>
                </div>
              </div>
            </div>

            <div class="preventive-action-wrap">
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
                <span>Schedule a Wellness Exam</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- SECTION E: Our Approach to Personalized Care -->
    <section class="section approach-principles-section" id="care-principles" aria-labelledby="principles-heading">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">FOUR PRACTICE PILLARS</span>
          <h2 id="principles-heading" class="section-heading">Care Built Around Your Needs.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            A healthcare model anchored in relationship quality, clear communication, and personalized clinical attention.
          </p>
        </div>

        <div class="principles-grid">
          <!-- 1. Individualized Attention -->
          <article class="principle-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="principle-num">01</div>
            <div class="principle-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            </div>
            <h3 class="principle-title">Individualized Attention</h3>
            <p class="principle-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Appointments feature deliberate buffers.
            </p>
          </article>

          <!-- 2. Clear Communication -->
          <article class="principle-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="principle-num">02</div>
            <div class="principle-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <h3 class="principle-title">Clear Communication</h3>
            <p class="principle-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed. Medical guidance delivered transparently without jargon.
            </p>
          </article>

          <!-- 3. Continuity of Care -->
          <article class="principle-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="principle-num">03</div>
            <div class="principle-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <h3 class="principle-title">Continuity of Care</h3>
            <p class="principle-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Partner with clinicians who understand your health journey over time.
            </p>
          </article>

          <!-- 4. Preventive Wellness -->
          <article class="principle-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="principle-num">04</div>
            <div class="principle-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
            </div>
            <h3 class="principle-title">Preventive Wellness</h3>
            <p class="principle-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Identifying potential health risks before acute symptoms emerge.
            </p>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION F: Flexible Care Options -->
    <section class="section care-options-section" id="care-options" aria-labelledby="options-heading">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">FLEXIBLE CARE ENVIRONMENTS</span>
          <h2 id="options-heading" class="section-heading">Care That Fits Your Life.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Choose the delivery environment that best accommodates your personal schedule and clinical needs.
          </p>
        </div>

        <div class="care-options-grid">
          <!-- In-Office Care -->
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. A welcoming, boutique medical suite in Laurel, MD for focused diagnostic physicals and private consultations.
              </p>
              <ul class="option-bullets">
                <li>Boutique clinical suite in Laurel, MD</li>
                <li>Comprehensive on-site diagnostic equipment</li>
                <li>Unhurried, private medical consultations</li>
              </ul>
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link">
                <span>Inquire About Office Visits</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </article>

          <!-- Mobile Concierge Care -->
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
              <span class="option-badge mobile-badge">MOBILE CONCIERGE</span>
            </div>
            <div class="option-content">
              <div class="option-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              </div>
              <h3 class="option-title">Mobile Concierge Care</h3>
              <p class="option-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Home or workplace consultations where available and clinically appropriate, eliminating travel obstacles.
              </p>
              <ul class="option-bullets">
                <li>Visits directly to your home or office</li>
                <li>Zero transit, traffic, or clinic waiting</li>
                <li>Compassionate bedside medical attention</li>
              </ul>
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link">
                <span>Inquire About Mobile Care</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </article>

          <!-- Virtual Consultations -->
          <article class="care-option-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="option-media">
              <img 
                src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=800&q=80" 
                alt="Doctor conducting a secure, encrypted high-definition telehealth visit with a patient" 
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Remote medical consultations, chronic disease check-ins, and follow-up reviews from your digital device.
              </p>
              <ul class="option-bullets">
                <li>Secure, HIPAA-compliant digital video link</li>
                <li>Prompt follow-up reviews and lab discussions</li>
                <li>Immediate access without traveling</li>
              </ul>
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="service-link">
                <span>Inquire About Telehealth</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </article>
        </div>

        <div class="clinical-note-box reveal-on-scroll" style="margin-top: var(--space-2xl);">
          <div class="note-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          </div>
          <p><strong>Clinical Delivery Notice:</strong> In-office, mobile, and virtual service availability depends upon specific clinical symptoms, treatment scope, and licensed provider evaluation.</p>
        </div>
      </div>
    </section>

    <!-- SECTION G: Patient Journey -->
    <section class="section journey-section" id="patient-journey" aria-labelledby="journey-heading">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">A CLEAR PATHWAY</span>
          <h2 id="journey-heading" class="section-heading">Getting Started Is Simple.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            A seamless three-step onboarding process to initiate personalized primary and preventive healthcare.
          </p>
        </div>

        <div class="journey-timeline">
          <!-- Step 1 -->
          <div class="journey-step reveal-on-scroll" style="--delay: 50ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">1</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step One</span>
              <h3 class="step-title">Request an Appointment</h3>
              <p class="step-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Submit your scheduling request online or connect with our practice team.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <!-- Step 2 -->
          <div class="journey-step reveal-on-scroll" style="--delay: 150ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">2</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step Two</span>
              <h3 class="step-title">Discuss Your Needs</h3>
              <p class="step-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Discuss health goals, preferred visit settings, and complete intake details.</p>
            </div>
          </div>

          <div class="journey-connector" aria-hidden="true"></div>

          <!-- Step 3 -->
          <div class="journey-step reveal-on-scroll" style="--delay: 250ms;">
            <div class="step-badge-wrap">
              <div class="step-badge">3</div>
            </div>
            <div class="step-card">
              <span class="step-tag">Step Three</span>
              <h3 class="step-title">Plan Your Care</h3>
              <p class="step-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confirm your appointment and partner with your clinician for proactive care.</p>
            </div>
          </div>
        </div>

        <div class="journey-footnote text-center reveal-on-scroll">
          <p><em>Note: Appointments are confirmed following clinical review and scheduling confirmation by our practice team.</em></p>
        </div>
      </div>
    </section>

    <!-- SECTION H: Frequently Asked Questions (Accessible Accordion) -->
    <section class="section faq-section" id="primary-faq" aria-labelledby="faq-heading">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">HELPFUL GUIDANCE</span>
          <h2 id="faq-heading" class="section-heading">Frequently Asked Questions.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Common questions regarding primary care scope, preventive examinations, and visit formats.
          </p>
        </div>

        <div class="faq-accordion-wrap reveal-on-scroll">
          
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q1" aria-expanded="false" aria-controls="faq-pc-a1">
              <span class="faq-q-text">What is included in primary care?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a1" role="region" aria-labelledby="faq-pc-q1" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Primary care encompasses routine physical examinations, preventive screenings, acute illness evaluations, chronic disease management (such as hypertension and diabetes), medication reviews, and coordinated diagnostic lab orders.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q2" aria-expanded="false" aria-controls="faq-pc-a2">
              <span class="faq-q-text">Why are preventive health visits important?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a2" role="region" aria-labelledby="faq-pc-q2" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Annual wellness visits allow clinicians to evaluate baseline health markers, review immunization history, and identify emerging risk factors early before they manifest as chronic conditions.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q3" aria-expanded="false" aria-controls="faq-pc-a3">
              <span class="faq-q-text">Can chronic conditions be managed through primary care?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a3" role="region" aria-labelledby="faq-pc-q3" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Yes, our clinical team works closely with patients to monitor and manage conditions such as diabetes, hypertension, and high cholesterol through ongoing check-ins, medication optimization, and lifestyle counseling.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q4" aria-expanded="false" aria-controls="faq-pc-a4">
              <span class="faq-q-text">Are follow-up consultations available?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a4" role="region" aria-labelledby="faq-pc-q4" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Follow-up appointments are routinely scheduled to review laboratory results, assess treatment effectiveness, adjust prescriptions, and ensure continuous continuity of care.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q5" aria-expanded="false" aria-controls="faq-pc-a5">
              <span class="faq-q-text">Can I request a home visit or virtual consultation?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a5" role="region" aria-labelledby="faq-pc-q5" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Depending on the clinical nature of your concern, eligible home visits and secure telehealth consultations are available across Laurel and surrounding Maryland communities.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-pc-q6" aria-expanded="false" aria-controls="faq-pc-a6">
              <span class="faq-q-text">How do I request an appointment?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-pc-a6" role="region" aria-labelledby="faq-pc-q6" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. You can submit an online appointment inquiry via our contact form or get in touch with our intake team directly to plan your visit and choose your preferred care setting.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- SECTION I: Final Call to Action -->
    <section class="cta-banner" aria-labelledby="primary-cta-title">
      <div class="cta-ambient-circle" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-inner reveal-on-scroll">
          <span class="cta-eyebrow">YOUR HEALTHCARE PARTNER</span>
          <h2 id="primary-cta-title" class="cta-headline">Take a Proactive Step Toward Your Health.</h2>
          <p class="cta-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          </p>
          <div class="cta-actions">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-gold btn-interactive" data-booking-trigger>
              <span>Request an Appointment</span>
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
<?php get_footer('home'); ?>

  <script src="script.js"></script>
 <?php wp_footer(); ?>
</body>
</html>