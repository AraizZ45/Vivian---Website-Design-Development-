<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


?>
 
  <!-- SECTION L: Footer (Updated with Official Logo) -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand-col">
          <a href="#hero" class="brand-logo footer-logo" aria-label="Concierge Medical - Return to top">
            <div class="footer-logo-wrap">
              <img 
                src="https://plum-leopard-647601.hostingersite.com/concierge/wp-content/uploads/2026/10/Screenshot-2026-10-23ddd-012609.png" 
                alt="Concierge Medical - Primary Care &amp; Wellness" 
                class="footer-logo-img"
                loading="lazy"
              >
            </div>
          </a>
          <p class="footer-slogan">&ldquo;Exceptional Care. Your Place or Ours.&rdquo;</p>
          <p class="footer-tagline">Providing elevated, personalized medical attention with adaptable delivery options throughout Laurel and neighboring Maryland regions.</p>
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
            <li><a href="#services">Mobile Concierge Medicine</a></li>
            <li><a href="#services">Medical Weight Management</a></li>
            <li><a href="#services">IV Hydration &amp; Infusions</a></li>
            <li><a href="#services">Telehealth Video Consultations</a></li>
            <li><a href="#services">Occupational Health &amp; DOT</a></li>
            <li><a href="#services">CPR &amp; Clinical Certifications</a></li>
          </ul>
        </div>

        <div class="footer-location-col">
          <h4 class="footer-col-title">Practice Region</h4>
          <p class="footer-info-text">Serving Laurel, Maryland &amp; Surrounding Communities.</p>
          <p class="footer-info-text">Office visits by confirmed appointment.<br>Mobile visits &amp; telehealth scheduled per clinical evaluation.</p>
          <a href="#contact" class="btn btn-secondary btn-small footer-btn">Make an Inquiry</a>
        </div>
      </div>

      <!--<div class="footer-disclaimers">-->
      <!--  <p class="disclaimer-text">-->
      <!--    <strong>Medical Information Disclaimer:</strong> The content on this website is for general educational and informational purposes only and does not establish a formal physician-patient relationship or constitute personalized clinical diagnosis, advice, or treatment plans. Consult directly with a licensed medical professional for individual health guidance.-->
      <!--  </p>-->
      <!--  <p class="disclaimer-text">-->
      <!--    <strong>Emergency Protocol:</strong> If you are experiencing an acute medical emergency, chest pressure, severe shortness of breath, loss of consciousness, or other life-threatening medical circumstances, dial 911 immediately or proceed to the nearest emergency hospital.-->
      <!--  </p>-->
      <!--</div>-->

      <div class="footer-bottom">
        <p class="copyright-text">&copy; <span id="current-year"></span> Concierge Medical. All rights reserved.</p>
        <p class="footer-meta">Laurel, Maryland Concierge Healthcare Experience</p>
      </div>
    </div>
  </footer>



<?php wp_footer(); ?>
