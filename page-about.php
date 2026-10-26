<?php
/*
Template Name: About Us Template
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Concierge Medical | Primary Care &amp; Wellness</title>
  <meta name="description" content="Learn about Concierge Medical in Laurel, Maryland. Discover our patient-centered mission, vision, core values, and dedicated approach to in-office, mobile, and virtual healthcare.">
  <meta name="robots" content="index, follow">

  <!-- Open Graph & Twitter Cards -->
  <meta property="og:title" content="About Us | Concierge Medical | Primary Care &amp; Wellness">
  <meta property="og:description" content="Exceptional Care. Your Place or Ours. Discover our practice philosophy, core values, and patient-centered healthcare delivery.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/about.html">
  <meta property="og:image" content="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=80">
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
    <!-- SECTION A: Page Hero -->
    <section class="hero-section about-hero-section" id="about-hero" aria-labelledby="about-hero-title">
      <div class="hero-ambient-glow" aria-hidden="true"></div>
      <div class="container hero-container">
        <div class="hero-content">
          <div class="hero-stagger" style="--stagger: 1;">
            <div class="eyebrow-pill">
              <span class="eyebrow-dot" aria-hidden="true"></span>
              <span class="eyebrow-text">ABOUT CONCIERGE MEDICAL</span>
            </div>
          </div>

          <h1 id="about-hero-title" class="hero-headline hero-stagger" style="--stagger: 2;">
            Personalized Care. <br>
            <span class="hero-italic-emphasis">Centered Around You.</span>
          </h1>

          <p class="hero-subheading hero-stagger" style="--stagger: 3;">
            A modern healthcare practice founded on genuine clinical relationships and exceptional convenience.
          </p>

          <p class="hero-body hero-stagger" style="--stagger: 4;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>

          <div class="hero-cta-group hero-stagger" style="--stagger: 5;">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-secondary btn-interactive">
              <span>Read Our Story</span>
            </a>
          </div>

          <div class="hero-footer-meta hero-stagger" style="--stagger: 6;">
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              <span>Patient-Centered Philosophy</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Laurel, Maryland Community</span>
            </div>
          </div>
        </div>

        <div class="hero-visual hero-stagger" style="--stagger: 3;">
          <div class="visual-composition">
            <div class="gold-frame-accent" aria-hidden="true"></div>
            <div class="hero-image-wrapper">
              <img 
                src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1100&q=85" 
                alt="Healthcare professional reviewing health records and consulting in a warm, welcoming clinical setting" 
                class="hero-img"
                width="620"
                height="740"
                loading="eager"
              >
            </div>

            <!-- Floating Badge 1 -->
            <div class="floating-badge badge-top" aria-hidden="true">
              <div class="badge-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Our Standard</span>
                <span class="badge-main">Compassionate Care</span>
              </div>
            </div>

            <!-- Floating Badge 2 -->
            <div class="floating-badge badge-bottom" aria-hidden="true">
              <div class="badge-icon-box gold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Dedicated To</span>
                <span class="badge-main">Primary &amp; Preventive Health</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION B: Our Story -->
    <section class="section story-section" id="our-story" aria-labelledby="story-title">
      <div class="container">
        <div class="story-grid">
          <div class="story-visual reveal-on-scroll">
            <div class="visual-layered-stack">
              <div class="image-accent-border" aria-hidden="true"></div>
              <div class="image-frame">
                <img 
                  src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=900&q=80" 
                  alt="Doctor having a thoughtful, personalized discussion with a patient in an unhurried consultation suite" 
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
                <span class="badge-tag">Our Foundation</span>
                <span class="badge-title">Built Around Patients</span>
              </div>
            </div>
          </div>

          <div class="story-content reveal-on-scroll" style="--delay: 150ms;">
            <span class="section-eyebrow">OUR STORY</span>
            <h2 id="story-title" class="section-heading">Healthcare That Fits Your Life.</h2>
            <div class="divider-gold" aria-hidden="true"></div>

            <p class="lead-text">
              Your health deserves personal attention, thoughtful guidance, and care that works with your life. Concierge Medical brings together professional medical services and convenient care options to help you navigate your health with confidence.
            </p>
            <p class="body-text">
              Traditional clinical environments often feel rushed and inflexible. We provide a refreshing alternative: modern medical practice anchored in proactive communication, clinical rigor, and adaptable care settings. Whether you visit us at our clinic, request a mobile visit to your residence, or initiate a telehealth appointment, our clinical team focuses on thorough evaluations and sustainable wellness plans.
            </p>

            <div class="story-quote-card">
              <p class="story-quote-text">&ldquo;Exceptional Care. Your Place or Ours.&rdquo;</p>
              <span class="story-quote-caption">The Guiding Principle of Concierge Medical</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION C: Our Mission and Vision -->
    <section class="section mission-vision-section" id="mission-vision" aria-labelledby="mission-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">PURPOSE &amp; ASPIRATION</span>
          <h2 id="mission-title" class="section-heading">Guiding Our Clinical Practice</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="mission-vision-grid">
          <!-- Mission Block -->
          <article class="mv-card mission-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="mv-glow" aria-hidden="true"></div>
            <div class="mv-header">
              <div class="mv-icon-box" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
              </div>
              <span class="mv-tag">OUR MISSION</span>
            </div>
            <h3 class="mv-title">Our Mission</h3>
            <p class="mv-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.
            </p>
            <p class="mv-body">
              Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.
            </p>
            <ul class="mv-list">
              <li>Lorem ipsum dolor sit amet consectetur adipiscing elit</li>
              <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
              <li>Ut enim ad minim veniam quis nostrud exercitation</li>
            </ul>
          </article>

          <!-- Vision Block -->
          <article class="mv-card vision-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="mv-glow" aria-hidden="true"></div>
            <div class="mv-header">
              <div class="mv-icon-box" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
              </div>
              <span class="mv-tag">OUR VISION</span>
            </div>
            <h3 class="mv-title">Our Vision</h3>
            <p class="mv-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <p class="mv-body">
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est.
            </p>
            <ul class="mv-list">
              <li>Duis aute irure dolor in reprehenderit in voluptate</li>
              <li>Excepteur sint occaecat cupidatat non proident sunt</li>
              <li>Culpa qui officia deserunt mollit anim id est laborum</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION D: Our Core Values -->
    <section class="section values-section" id="core-values" aria-labelledby="values-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">WHAT WE STAND FOR</span>
          <h2 id="values-title" class="section-heading">Our Core Values</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Six foundational pillars that define our patient interactions, clinical decisions, and healthcare delivery.
          </p>
        </div>

        <div class="values-grid">
          <!-- Value 1: Compassion -->
          <div class="value-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
            </div>
            <span class="value-number">01</span>
            <h3 class="value-heading">Compassion</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida dolor sit amet lacus accumsan.
            </p>
          </div>

          <!-- Value 2: Personalized Care -->
          <div class="value-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            </div>
            <span class="value-number">02</span>
            <h3 class="value-heading">Personalized Care</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            </p>
          </div>

          <!-- Value 3: Accessibility -->
          <div class="value-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
            </div>
            <span class="value-number">03</span>
            <h3 class="value-heading">Accessibility</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
            </p>
          </div>

          <!-- Value 4: Trust and Integrity -->
          <div class="value-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <span class="value-number">04</span>
            <h3 class="value-heading">Trust and Integrity</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet.
            </p>
          </div>

          <!-- Value 5: Continuity of Care -->
          <div class="value-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <span class="value-number">05</span>
            <h3 class="value-heading">Continuity of Care</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
            </p>
          </div>

          <!-- Value 6: Preventive Wellness -->
          <div class="value-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="value-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
            </div>
            <span class="value-number">06</span>
            <h3 class="value-heading">Preventive Wellness</h3>
            <p class="value-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Sed porttitor lectus nibh.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION E: Our Approach to Care -->
    <section class="section approach-section" id="our-approach" aria-labelledby="approach-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">FLEXIBLE CARE MODELS</span>
          <h2 id="approach-title" class="section-heading">Our Approach to Care</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="approach-grid">
          <!-- Feature 1: In-Office Care -->
          <article class="approach-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="approach-media">
              <img 
                src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80" 
                alt="A tranquil, modern medical office consultation room in Laurel, Maryland" 
                class="approach-img"
                width="400"
                height="280"
                loading="lazy"
              >
              <span class="approach-badge">IN-OFFICE</span>
            </div>
            <div class="approach-body">
              <div class="approach-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
              </div>
              <h3 class="approach-card-title">In-Office Care</h3>
              <p class="approach-card-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
              </p>
              <ul class="approach-list">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Vestibulum ac diam sit amet</li>
              </ul>
            </div>
          </article>

          <!-- Feature 2: Mobile Concierge Care -->
          <article class="approach-card approach-featured reveal-on-scroll" style="--delay: 200ms;">
            <div class="approach-media">
              <img 
                src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=800&q=80" 
                alt="A healthcare practitioner providing compassionate mobile care in a comfortable home environment" 
                class="approach-img"
                width="400"
                height="280"
                loading="lazy"
              >
              <span class="approach-badge mobile-badge">MOBILE CONCIERGE</span>
            </div>
            <div class="approach-body">
              <div class="approach-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              </div>
              <h3 class="approach-card-title">Mobile Concierge Care</h3>
              <p class="approach-card-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed.
              </p>
              <ul class="approach-list">
                <li>Sed porttitor lectus nibh</li>
                <li>Curabitur aliquet quam id dui</li>
                <li>Praesent sapien massa convallis</li>
              </ul>
            </div>
          </article>

          <!-- Feature 3: Virtual Consultations -->
          <article class="approach-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="approach-media">
              <img 
                src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=800&q=80" 
                alt="Medical practitioner conducting a secure virtual telehealth video visit" 
                class="approach-img"
                width="400"
                height="280"
                loading="lazy"
              >
              <span class="approach-badge">TELEHEALTH</span>
            </div>
            <div class="approach-body">
              <div class="approach-icon" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
              </div>
              <h3 class="approach-card-title">Virtual Consultations</h3>
              <p class="approach-card-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
              </p>
              <ul class="approach-list">
                <li>Mauris blandit aliquet elit</li>
                <li>Pellentesque in ipsum id orci</li>
                <li>Proin eget tortor risus sed</li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION F: Why Choose Concierge Medical -->
    <section class="section differentiators-section" id="why-choose-about" aria-labelledby="why-about-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">THE CONCIERGE ADVANTAGE</span>
          <h2 id="why-about-title" class="section-heading">Why Choose Concierge Medical</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="diff-grid">
          <div class="diff-card reveal-on-scroll" style="--delay: 50ms;">
            <div class="diff-number">01</div>
            <h3 class="diff-heading">Individualized Focus</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 100ms;">
            <div class="diff-number">02</div>
            <h3 class="diff-heading">Care Flexibility</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 150ms;">
            <div class="diff-number">03</div>
            <h3 class="diff-heading">Transparent Guidance</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 200ms;">
            <div class="diff-number">04</div>
            <h3 class="diff-heading">Care Relationship</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 250ms;">
            <div class="diff-number">05</div>
            <h3 class="diff-heading">Proactive Health</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.
            </p>
          </div>

          <div class="diff-card reveal-on-scroll" style="--delay: 300ms;">
            <div class="diff-number">06</div>
            <h3 class="diff-heading">Tailored Planning</h3>
            <p class="diff-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION G: Closing Call to Action -->
    <section class="cta-banner" aria-labelledby="about-cta-title">
      <div class="cta-ambient-circle" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-inner reveal-on-scroll">
          <span class="cta-eyebrow">CONNECT WITH OUR PRACTICE</span>
          <h2 id="about-cta-title" class="cta-headline">Your Health. Your Convenience. Your Choice.</h2>
          <p class="cta-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          </p>
          <div class="cta-actions">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-gold btn-interactive" data-booking-trigger>
              <span>Book an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-outline-white btn-interactive">
              <span>Explore Our Services</span>
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