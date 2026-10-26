<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
 ?>


  <!-- SECTION A: Announcement Strip -->
  <aside class="announcement-strip" aria-label="Notice of Care Availability">
    <div class="container announcement-content">
      <div class="announcement-pill">
        <span class="pulse-dot" aria-hidden="true"></span>
        <span class="announcement-badge">Now Welcoming New Patients</span>
      </div>
      <p class="announcement-text">Personalized primary care and wellness appointments across Laurel and surrounding Maryland communities.</p>
      <a href="#contact" class="announcement-link">
        <span>Inquire for Scheduling</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </aside>

  <!-- SECTION B: Header and Navigation (Updated with Official Logo) -->
  <header class="site-header" id="header" data-header>
    <div class="container header-container">
      <a href="#hero" class="brand-logo" aria-label="Concierge Medical - Primary Care &amp; Wellness - Return to top">
        <img 
          src="https://plum-leopard-647601.hostingersite.com/concierge/wp-content/uploads/2026/10/Screenshot-2026-10-23ddd-012609.png" 
          alt="Concierge Medical - Primary Care &amp; Wellness" 
          class="brand-logo-img"
          loading="eager"
        >
      </a>

      <nav class="primary-nav" id="primary-navigation" aria-label="Main Navigation">
        <ul class="nav-list">
          <li><a href="#hero" class="nav-link active">Home</a></li>
          <li><a href="#philosophy" class="nav-link">About</a></li>
          <li><a href="#services" class="nav-link">Services</a></li>
          <li><a href="#care-settings" class="nav-link">Our Approach</a></li>
          <li><a href="#why-choose" class="nav-link">Why Choose Us</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="#contact" class="btn btn-primary btn-header" data-booking-trigger>
          <span>Book an Appointment</span>
        </a>
        <button class="mobile-toggle" aria-expanded="false" aria-controls="primary-navigation" aria-label="Toggle navigation menu" data-nav-toggle>
          <span class="bar bar-1"></span>
          <span class="bar bar-2"></span>
          <span class="bar bar-3"></span>
        </button>
      </div>
    </div>
  </header>

  
