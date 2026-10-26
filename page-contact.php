<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Concierge Medical | Primary Care &amp; Wellness</title>
  <meta name="description" content="Connect with Concierge Medical in Laurel, Maryland. Inquire about in-office, mobile concierge, and telehealth appointments.">
  <meta name="robots" content="index, follow">

  <!-- Open Graph & Twitter Cards -->
  <meta property="og:title" content="Contact Us | Concierge Medical | Primary Care &amp; Wellness">
  <meta property="og:description" content="We're Here to Help You Feel Your Best. Reach out for appointment inquiries across Laurel, MD and surrounding communities.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/contact.html">
  <meta property="og:image" content="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1200&q=80">
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
    <!-- SECTION A: Contact Hero -->
    <section class="hero-section contact-hero-section" id="contact-hero" aria-labelledby="contact-hero-title">
      <div class="hero-ambient-glow" aria-hidden="true"></div>
      <div class="container hero-container">
        <div class="hero-content">
          <div class="hero-stagger" style="--stagger: 1;">
            <div class="eyebrow-pill">
              <span class="eyebrow-dot" aria-hidden="true"></span>
              <span class="eyebrow-text">GET IN TOUCH</span>
            </div>
          </div>

          <h1 id="contact-hero-title" class="hero-headline hero-stagger" style="--stagger: 2;">
            We're Here to Help <br>
            <span class="hero-italic-emphasis">You Feel Your Best.</span>
          </h1>

          <p class="hero-subheading hero-stagger" style="--stagger: 3;">
            Personalized healthcare begins with a simple conversation. Connect with our dedicated practice team today.
          </p>

          <p class="hero-body hero-stagger" style="--stagger: 4;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
          </p>

          <!-- <div class="hero-cta-group hero-stagger" style="--stagger: 5;">
            <a href="#contact-form-section" class="btn btn-primary btn-interactive" data-booking-trigger>
              <span>Request an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="services.html" class="btn btn-secondary btn-interactive">
              <span>Explore Our Services</span>
            </a>
          </div> -->

          <div class="hero-footer-meta hero-stagger" style="--stagger: 6;">
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Prompt Inquiries</span>
            </div>
            <span class="meta-divider" aria-hidden="true">&bull;</span>
            <div class="meta-item">
              <svg class="meta-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Laurel, MD &amp; Region</span>
            </div>
          </div>
        </div>

        <div class="hero-visual hero-stagger" style="--stagger: 3;">
          <div class="visual-composition">
            <div class="gold-frame-accent" aria-hidden="true"></div>
            <div class="hero-image-wrapper">
              <img 
                src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1100&q=85" 
                alt="Healthcare coordinator welcoming patients in a calm, modern medical reception area" 
                class="hero-img"
                width="620"
                height="740"
                loading="eager"
              >
            </div>

            <div class="floating-badge badge-top" aria-hidden="true">
              <div class="badge-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Care Access</span>
                <span class="badge-main">Flexible Scheduling</span>
              </div>
            </div>

            <div class="floating-badge badge-bottom" aria-hidden="true">
              <div class="badge-icon-box gold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
              </div>
              <div class="badge-text">
                <span class="badge-sub">Primary Clinic</span>
                <span class="badge-main">Laurel Medical Suite</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION B & C: Contact Information & Appointment Inquiry Form -->
    <section class="section contact-section" id="contact-form-section" aria-labelledby="contact-heading">
      <div class="container">
        <div class="contact-grid">
          
          <!-- Column B: Contact Information -->
          <div class="contact-info-col reveal-on-scroll">
            <span class="section-eyebrow">DIRECT INQUIRIES</span>
            <h2 id="contact-heading" class="section-heading">Connect With Concierge Medical.</h2>
            <div class="divider-gold" aria-hidden="true"></div>
            
            <p class="contact-lead">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
            </p>

            <div class="contact-details-list">
              <!-- Phone -->
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Telephone</h3>
                  <p class="contact-value" id="phone-display">[Phone Number Verified Upon Registration]</p>
                  <span class="contact-subtext">Direct practice lines will be provided upon appointment scheduling.</span>
                </div>
              </div>

              <!-- Email -->
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

              <!-- Office Location -->
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Clinical Office Location</h3>
                  <p class="contact-value">Laurel, Maryland</p>
                  <span class="contact-subtext">Exact suite address confirmed upon finalized appointment booking.</span>
                </div>
              </div>

              <!-- Service Area -->
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Mobile Service Region</h3>
                  <p class="contact-value">Laurel &amp; Surrounding Maryland Communities</p>
                  <span class="contact-subtext">Mobile visits scheduled per clinical intake and geographic eligibility.</span>
                </div>
              </div>

              <!-- Business Hours -->
              <div class="contact-item">
                <div class="contact-icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="contact-item-text">
                  <h3 class="contact-label">Consultation Hours</h3>
                  <p class="contact-value">By Confirmed Appointment</p>
                  <span class="contact-subtext">Structured visit buffers to guarantee unhurried medical care.</span>
                </div>
              </div>
            </div>

            <!-- Emergency Warning Box -->
            <div class="contact-emergency-warning">
              <div class="warning-icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </div>
              <p><strong>Emergency Notice:</strong> If you are experiencing a medical emergency, severe chest pain, sudden numbness, or shortness of breath, call 911 immediately. This contact form is not monitored for emergent medical triage.</p>
            </div>
          </div>

          <!-- Column C: Contact & Appointment Inquiry Form -->
          <div class="contact-form-col reveal-on-scroll" style="--delay: 150ms;">
            <div class="form-card">
              <div class="form-header">
                <span class="form-eyebrow">APPOINTMENT INQUIRY</span>
                <h3 class="form-heading">How Can We Help You?</h3>
                <p class="form-subtext">Please share your contact details. <em>Do not enter symptoms, diagnoses, medical records, or confidential health information.</em></p>
              </div>

              <div class="form-phi-warning">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span><strong>Privacy Reminder:</strong> Please use this form strictly for scheduling inquiries. Clinical questions will be evaluated during your confidential provider consultation.</span>
              </div>

              <!-- Accessible Contact Form -->
              <form id="contact-page-form" class="inquiry-form" novalidate>
                <!-- Full Name -->
                <div class="form-group">
                  <label for="contactFullName">Full Name <span class="required" aria-hidden="true">*</span></label>
                  <input type="text" id="contactFullName" name="fullName" class="form-control" placeholder="First and last name" required autocomplete="name">
                  <span class="field-error" id="nameError" role="alert">Please enter your full name.</span>
                </div>

                <!-- Email & Phone (Row) -->
                <div class="form-row">
                  <div class="form-group">
                    <label for="contactEmail">Email Address <span class="required" aria-hidden="true">*</span></label>
                    <input type="email" id="contactEmail" name="emailAddress" class="form-control" placeholder="name@example.com" required autocomplete="email">
                    <span class="field-error" id="emailError" role="alert">Please enter a valid email address.</span>
                  </div>

                  <div class="form-group">
                    <label for="contactPhone">Phone Number <span class="optional-label">(Optional)</span></label>
                    <input type="tel" id="contactPhone" name="phoneNumber" class="form-control" placeholder="(301) 555-0123" autocomplete="tel">
                    <span class="field-error" id="phoneError" role="alert">Please enter a valid telephone number.</span>
                  </div>
                </div>

                <!-- Inquiry Type & Preferred Care Setting (Row) -->
                <div class="form-row">
                  <div class="form-group">
                    <label for="contactInquiryType">Inquiry Type <span class="required" aria-hidden="true">*</span></label>
                    <select id="contactInquiryType" name="inquiryType" class="form-control" required>
                      <option value="" disabled selected>Select an inquiry category</option>
                      <option value="general">General Inquiry</option>
                      <option value="primary-care">Primary Care &amp; Prevention</option>
                      <option value="mobile-concierge">Mobile Concierge Care</option>
                      <option value="weight-management">Medical Weight Management</option>
                      <option value="iv-hydration">IV Hydration &amp; Wellness</option>
                      <option value="telehealth">Telehealth Consultation</option>
                      <option value="occupational">Occupational Health &amp; DOT</option>
                      <option value="cpr-training">CPR &amp; Healthcare Training</option>
                      <option value="other">Other Inquiry</option>
                    </select>
                    <span class="field-error" id="inquiryTypeError" role="alert">Please select an inquiry type.</span>
                  </div>

                  <div class="form-group">
                    <label for="contactCareSetting">Preferred Care Setting <span class="required" aria-hidden="true">*</span></label>
                    <select id="contactCareSetting" name="careSetting" class="form-control" required>
                      <option value="" disabled selected>Select preferred setting</option>
                      <option value="office">In-Office (Laurel Clinic)</option>
                      <option value="home">At Home / Workplace (Mobile)</option>
                      <option value="virtual">Virtual Consultation (Telehealth)</option>
                      <option value="undecided">Not Sure Yet</option>
                    </select>
                    <span class="field-error" id="careSettingError" role="alert">Please select a preferred setting.</span>
                  </div>
                </div>

                <!-- Preferred Contact Method -->
                <div class="form-group">
                  <label id="contactMethodLabel">Preferred Contact Method <span class="required" aria-hidden="true">*</span></label>
                  <div class="contact-method-options" role="radiogroup" aria-labelledby="contactMethodLabel">
                    <label class="radio-card">
                      <input type="radio" name="preferredContactMethod" value="email" checked>
                      <span class="radio-custom" aria-hidden="true"></span>
                      <span class="radio-text">Email</span>
                    </label>
                    <label class="radio-card">
                      <input type="radio" name="preferredContactMethod" value="phone">
                      <span class="radio-custom" aria-hidden="true"></span>
                      <span class="radio-text">Phone</span>
                    </label>
                  </div>
                </div>

                <!-- Message Field -->
                <div class="form-group">
                  <label for="contactMessage">Message or Scheduling Questions <span class="required" aria-hidden="true">*</span></label>
                  <textarea id="contactMessage" name="message" class="form-control text-area" rows="4" placeholder="Please provide general scheduling questions or best times for contact. (No confidential medical symptoms or diagnoses)" required></textarea>
                  <span class="field-error" id="messageError" role="alert">Please enter your message or question.</span>
                </div>

                <!-- Privacy & Consent Checkbox -->
                <div class="form-group-checkbox">
                  <input type="checkbox" id="contactConsent" name="privacyConsent" required>
                  <label for="contactConsent" class="checkbox-label">
                    I consent to Concierge Medical contacting me regarding this scheduling inquiry. I understand this form is for scheduling inquiries, not clinical triage or emergency communication.
                  </label>
                  <span class="field-error" id="consentError" role="alert">Please confirm this consent before submitting.</span>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block btn-interactive">
                  <span>Send Appointment Inquiry</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>

                <div id="contactFormFeedback" class="form-feedback" aria-live="polite"></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

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
                <li>Comprehensive on-site diagnostic physicals</li>
                <li>Unhurried, private medical consultations</li>
              </ul>
              <a href="<?php echo esc_url( home_url('/primary-care/') ); ?>" class="service-link">
                <span>Explore In-Office Care</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
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
              <h3 class="option-title">Mobile Concierge Care</h3>
              <p class="option-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec.
              </p>
              <ul class="option-bullets">
                <li>Visits directly to your home or office</li>
                <li>Zero transit, traffic, or clinic waiting</li>
                <li>Comfortable, personalized bedside attention</li>
              </ul>
              <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="service-link">
                <span>Explore Mobile Visits</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
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
              <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="service-link">
                <span>Explore Telehealth Visits</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION E: Location and Service Area Showcase -->
    <!-- <section class="section service-area-section" id="service-area" aria-labelledby="area-heading">
      <div class="container">
        <div class="service-area-card reveal-on-scroll">
          <div class="service-area-text">
            <span class="section-eyebrow">REGIONAL REACH</span>
            <h2 id="area-heading" class="section-heading">Proudly Serving Laurel, Maryland.</h2>
            <div class="divider-gold" aria-hidden="true"></div>
            <p class="lead-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
            </p>
            <p class="body-text">
              Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
            </p>
            <div class="regional-highlights">
              <div class="region-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Laurel, MD City Center</span>
              </div>
              <div class="region-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Prince George's County</span>
              </div>
              <div class="region-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Howard County</span>
              </div>
              <div class="region-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Anne Arundel County</span>
              </div>
            </div>
          </div>

          <div class="service-area-visual">
            <div class="location-display-box">
              <div class="map-graphic-layer" aria-hidden="true">
                <div class="radar-circle circle-1"></div>
                <div class="radar-circle circle-2"></div>
                <div class="radar-circle circle-3"></div>
                <div class="center-pin">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
                </div>
              </div>
              <div class="location-badge-card">
                <h3 class="location-badge-title">Concierge Medical Core Service Area</h3>
                <p class="location-badge-desc">Laurel, Maryland and adjacent communities</p>
                <small class="location-badge-sub">Office consultations &amp; eligible home visits confirmed upon scheduling intake.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- SECTION F: Frequently Asked Questions (Accessible Accordion) -->
    <section class="section faq-section" id="faq" aria-labelledby="faq-title">
      <div class="container">
        <div class="section-header text-center reveal-on-scroll">
          <span class="section-eyebrow">HELPFUL GUIDANCE</span>
          <h2 id="faq-title" class="section-heading">A Few Helpful Answers.</h2>
          <div class="divider-gold center" aria-hidden="true"></div>
          <p class="section-subtitle">
            Find answers to common inquiries regarding scheduling, visit formats, and clinical policies.
          </p>
        </div>

        <div class="faq-accordion-wrap reveal-on-scroll">
          
          <!-- FAQ Item 1 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-q1" aria-expanded="false" aria-controls="faq-a1">
              <span class="faq-q-text">How do I request an appointment?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a1" role="region" aria-labelledby="faq-q1" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. You can use our online appointment inquiry form above or contact practice staff directly to discuss preferred visit settings and clinical scheduling.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-q2" aria-expanded="false" aria-controls="faq-a2">
              <span class="faq-q-text">What types of care are available?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a2" role="region" aria-labelledby="faq-q2" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Concierge Medical provides primary care, annual health examinations, chronic condition management, medical weight health, IV hydration therapies, occupational screenings, and telehealth consultations.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-q3" aria-expanded="false" aria-controls="faq-a3">
              <span class="faq-q-text">Can I request a home visit?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a3" role="region" aria-labelledby="faq-q3" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mobile visits to private residences and corporate offices are available across Laurel and surrounding Maryland communities based upon clinical appropriateness and confirmed practitioner scheduling.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-q4" aria-expanded="false" aria-controls="faq-a4">
              <span class="faq-q-text">Are virtual consultations available?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a4" role="region" aria-labelledby="faq-q4" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Yes, encrypted, high-definition telehealth visits can be arranged for non-emergency acute symptoms, follow-up consults, and routine medication evaluations from your phone, tablet, or computer.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="faq-item">
            <button class="faq-question" id="faq-q5" aria-expanded="false" aria-controls="faq-a5">
              <span class="faq-q-text">How can businesses inquire about occupational health or training?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a5" role="region" aria-labelledby="faq-q5" hidden>
              <div class="faq-answer-inner">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Employers and organizations may submit an inquiry selecting &ldquo;Occupational Health&rdquo; or &ldquo;CPR &amp; Healthcare Training&rdquo; to coordinate customized group classes or workplace employee screenings.
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 6 -->
          <div class="faq-item faq-item-emergency">
            <button class="faq-question" id="faq-q6" aria-expanded="false" aria-controls="faq-a6">
              <span class="faq-q-text">What should I do in a medical emergency?</span>
              <span class="faq-toggle-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-a6" role="region" aria-labelledby="faq-q6" hidden>
              <div class="faq-answer-inner">
                <p>
                  <strong>If you are experiencing a medical emergency, call 911 immediately</strong> or go directly to the nearest hospital emergency department. Concierge Medical is an outpatient practice and this contact form is not monitored for acute or life-threatening medical emergencies.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- SECTION G: Final Call to Action -->
    <section class="cta-banner" aria-labelledby="contact-cta-title">
      <div class="cta-ambient-circle" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-inner reveal-on-scroll">
          <span class="cta-eyebrow">YOUR HEALTHCARE PARTNER</span>
          <h2 id="contact-cta-title" class="cta-headline">Your Health. Your Convenience. Your Choice.</h2>
          <p class="cta-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          </p>
          <div class="cta-actions">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-gold btn-interactive" data-booking-trigger>
              <span>Request an Appointment</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn btn-outline-white btn-interactive">
              <span>Explore Our Services</span>
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