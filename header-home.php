 <!-- SECTION A: Announcement Strip -->
  <div class="announcement-strip" role="region" aria-label="Announcement">
    <div class="container announcement-content">
      <span class="announcement-badge">Personalized Care</span>
      <p class="announcement-text">Welcoming new primary care and wellness inquiries across Laurel and surrounding Maryland communities.</p>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="announcement-link">Inquire Today <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>

  <!-- SECTION B: Header and Navigation -->
  <header class="site-header" id="header" data-header>
    <div class="container header-container">
      <a href="<?php echo esc_url( home_url() ); ?>" class="brand-logo" aria-label="Concierge Medical Home">
         <img 
         style="width: 110px"
          src="https://plum-leopard-647601.hostingersite.com/concierge/wp-content/uploads/2026/10/Screenshot-2026-10-23ddd-012609.png" 
          alt="Concierge Medical - Primary Care &amp; Wellness" 
          class="brand-logo-img"
          loading="eager"
        >
      </a>

      <nav class="primary-nav" id="primary-navigation" aria-label="Primary Navigation">
        <ul class="nav-list">
          <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="nav-link">Home</a></li>
          <li><a href="<?php echo esc_url( home_url('/about/') ); ?>" class="nav-link">About</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/') ); ?>" class="nav-link">Services</a></li>
          <li><a href="<?php echo esc_url( home_url('/primary-care/') ); ?>" class="nav-link">Our Approach</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary btn-header" data-booking-trigger>Book an Appointment</a>
        <button class="mobile-toggle" aria-expanded="false" aria-controls="primary-navigation" aria-label="Toggle navigation menu" data-nav-toggle>
          <span class="bar bar-1"></span>
          <span class="bar bar-2"></span>
          <span class="bar bar-3"></span>
        </button>
      </div>
    </div>
  </header>