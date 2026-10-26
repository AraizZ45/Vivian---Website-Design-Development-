
  <!-- SECTION L: Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand-col">
          <div class="brand-logo footer-logo">
             <img 
                src="https://plum-leopard-647601.hostingersite.com/concierge/wp-content/uploads/2026/10/Screenshot-2026-10-23-0d12609.png"
                style="width: 200px"
                alt="Concierge Medical - Primary Care &amp; Wellness" 
                class="footer-logo-img"
                loading="lazy"
              >
          </div>
          <p class="footer-slogan">&ldquo;Exceptional Care. Your Place or Ours.&rdquo;</p>
          <p class="footer-tagline">Providing elevated, patient-centered medical attention with flexible delivery models across Laurel and neighboring Maryland regions.</p>
        </div>

        <div class="footer-nav-col">
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a></li>
            <li><a href="<?php echo esc_url( home_url('/services/') ); ?>">Services</a></li>
            <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact Us</a></li>
            <li><a href="<?php echo esc_url( home_url('/primary-care/') ); ?>">Primary Care and Preventive Care</a></li>
            <li><a href="#journey">How It Works</a></li>
            <li><a href="#contact">Contact &amp; Inquiries</a></li>
          </ul>
        </div>

        <div class="footer-services-col">
          <h4 class="footer-col-title">Service Disciplines</h4>
          <ul class="footer-links">
            <li><a href="#services">Primary &amp; Preventive Health</a></li>
            <li><a href="#services">Mobile Concierge Care</a></li>
            <li><a href="#services">Medical Weight Management</a></li>
            <li><a href="#services">IV Hydration &amp; Infusions</a></li>
            <li><a href="#services">Telehealth Visits</a></li>
            <li><a href="#services">Occupational Health &amp; DOT</a></li>
            <li><a href="#services">CPR &amp; Clinical Training</a></li>
          </ul>
        </div>

        <div class="footer-location-col">
          <h4 class="footer-col-title">Practice Region</h4>
          <p class="footer-info-text">Serving Laurel, Maryland &amp; Surrounding Communities.</p>
          <p class="footer-info-text">Office visits by appointment.<br>Mobile &amp; virtual consults scheduled per clinical appropriateness.</p>
          <a href="#contact" class="btn btn-secondary btn-small footer-btn">Make an Inquiry</a>
        </div>
      </div>

      <!--<div class="footer-disclaimers">-->
      <!--  <p class="disclaimer-text">-->
      <!--    <strong>Medical Advice Disclaimer:</strong> Information presented on this website is provided solely for general educational purposes and does not constitute individualized medical advice, clinical diagnosis, or a physician-patient relationship. Always consult directly with a qualified healthcare provider regarding specific medical concerns or conditions.-->
      <!--  </p>-->
      <!--  <p class="disclaimer-text">-->
      <!--    <strong>Emergency Protocol:</strong> If you are experiencing an acute medical emergency, severe chest pain, shortness of breath, sudden neurological changes, or another life-threatening condition, immediately dial 911 (within the United States) or proceed to the closest hospital emergency facility.-->
      <!--  </p>-->
      <!--</div>-->

      <div class="footer-bottom">
        <p class="copyright-text">&copy; <span id="current-year"></span> Concierge Medical. All rights reserved.</p>
        <!--<p class="footer-meta">Laurel, Maryland Concierge Healthcare Experience</p>-->
      </div>
    </div>
  </footer>
  
  <?php wp_footer(); ?>