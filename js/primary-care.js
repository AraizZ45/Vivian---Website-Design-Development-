/**
 * CONCIERGE MEDICAL - Client-Side Architecture
 * Shared across index.html, about.html, services.html, contact.html, and primary-care.html
 */

(function () {
  'use strict';

  /* ==========================================================================
     Configuration Registry
     ========================================================================== */
  const PracticeConfig = {
    bookingUrl: null, // Set external portal URL here if applicable
    verifiedPhone: null,
    verifiedEmail: null
  };

  /* ==========================================================================
     DOM Selection Cache
     ========================================================================== */
  const header = document.querySelector('[data-header]');
  const navToggle = document.querySelector('[data-nav-toggle]');
  const primaryNav = document.getElementById('primary-navigation');
  const navLinks = document.querySelectorAll('.nav-link');
  const bookingTriggers = document.querySelectorAll('[data-booking-trigger]');
  const currentYearSpan = document.getElementById('current-year');
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  const faqQuestions = document.querySelectorAll('.faq-question');
  const contactPageForm = document.getElementById('contact-page-form');
  const contactFormFeedback = document.getElementById('contactFormFeedback');
  const homeInquiryForm = document.getElementById('appointment-inquiry-form');
  const homeFormFeedback = document.getElementById('formFeedback');

  /* ==========================================================================
     1. Date & Dynamic Details
     ========================================================================== */
  function populateDynamicDetails() {
    if (currentYearSpan) {
      currentYearSpan.textContent = new Date().getFullYear();
    }

    if (PracticeConfig.verifiedPhone) {
      const phoneDisplays = document.querySelectorAll('#phone-display');
      phoneDisplays.forEach(el => {
        el.innerHTML = `<a href="tel:${PracticeConfig.verifiedPhone.replace(/[^0-9+]/g, '')}" class="text-link">${PracticeConfig.verifiedPhone}</a>`;
      });
    }

    if (PracticeConfig.verifiedEmail) {
      const emailDisplays = document.querySelectorAll('#email-display');
      emailDisplays.forEach(el => {
        el.innerHTML = `<a href="mailto:${PracticeConfig.verifiedEmail}" class="text-link">${PracticeConfig.verifiedEmail}</a>`;
      });
    }
  }

  /* ==========================================================================
     2. Accessible Mobile Navigation
     ========================================================================== */
  function setupMobileNavigation() {
    if (!navToggle || !primaryNav) return;

    function openMenu() {
      navToggle.setAttribute('aria-expanded', 'true');
      primaryNav.classList.add('nav-open');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      navToggle.setAttribute('aria-expanded', 'false');
      primaryNav.classList.remove('nav-open');
      document.body.style.overflow = '';
    }

    navToggle.addEventListener('click', function () {
      const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
      if (isExpanded) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (primaryNav.classList.contains('nav-open')) {
          closeMenu();
        }
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && primaryNav.classList.contains('nav-open')) {
        closeMenu();
        navToggle.focus();
      }
    });
  }

  /* ==========================================================================
     3. Scroll-Aware Header Transitions
     ========================================================================== */
  function setupScrollHeader() {
    if (!header) return;

    let ticking = false;

    function onScroll() {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          if (window.scrollY > 25) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
          ticking = false;
        });
        ticking = true;
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ==========================================================================
     4. Accessible FAQ Accordions (Works across all pages)
     ========================================================================== */
  function setupFaqAccordion() {
    if (!faqQuestions.length) return;

    faqQuestions.forEach(questionBtn => {
      questionBtn.addEventListener('click', function () {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        const targetPanelId = this.getAttribute('aria-controls');
        const targetPanel = document.getElementById(targetPanelId);

        // Close other open items within the same accordion
        const parentAccordion = this.closest('.faq-accordion-wrap');
        if (parentAccordion) {
          const siblingQuestions = parentAccordion.querySelectorAll('.faq-question');
          siblingQuestions.forEach(otherBtn => {
            if (otherBtn !== this) {
              otherBtn.setAttribute('aria-expanded', 'false');
              const otherPanelId = otherBtn.getAttribute('aria-controls');
              const otherPanel = document.getElementById(otherPanelId);
              if (otherPanel) otherPanel.hidden = true;
            }
          });
        }

        // Toggle clicked item
        if (isExpanded) {
          this.setAttribute('aria-expanded', 'false');
          if (targetPanel) targetPanel.hidden = true;
        } else {
          this.setAttribute('aria-expanded', 'true');
          if (targetPanel) targetPanel.hidden = false;
        }
      });
    });
  }

  /* ==========================================================================
     5. Booking & Inquiry Button Dispatcher
     ========================================================================== */
  function setupBookingActions() {
    bookingTriggers.forEach(button => {
      button.addEventListener('click', function (e) {
        if (PracticeConfig.bookingUrl) {
          e.preventDefault();
          window.open(PracticeConfig.bookingUrl, '_blank', 'noopener,noreferrer');
        } else {
          // If on a page with a contact form, scroll smoothly and focus name field
          const formElement = document.getElementById('contact-page-form') || document.getElementById('appointment-inquiry-form');
          if (formElement) {
            const nameInput = document.getElementById('contactFullName') || document.getElementById('fullName');
            if (nameInput) {
              setTimeout(() => nameInput.focus(), 650);
            }
          }
        }
      });
    });
  }

  /* ==========================================================================
     6. Scroll Reveal System (Intersection Observer)
     ========================================================================== */
  function setupScrollReveals() {
    if (!('IntersectionObserver' in window)) {
      revealElements.forEach(el => el.classList.add('is-visible'));
      return;
    }

    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -50px 0px',
      threshold: 0.12
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    revealElements.forEach(el => revealObserver.observe(el));
  }

  /* ==========================================================================
     7. Contact Form Handler (Contact Page)
     ========================================================================== */
  function setupContactPageForm() {
    if (!contactPageForm) return;

    contactPageForm.addEventListener('submit', function (e) {
      e.preventDefault();
      if (contactFormFeedback) {
        contactFormFeedback.className = 'form-feedback success';
        contactFormFeedback.innerHTML = `<strong>Inquiry Received (Demonstration Mode):</strong> Thank you. Your scheduling inquiry details have been verified locally. In production, this form securely routes to our practice coordinator without transmitting sensitive health information.`;
        contactPageForm.reset();
      }
    });
  }

  /* ==========================================================================
     8. Homepage Form Handler (Homepage)
     ========================================================================== */
  function setupHomepageForm() {
    if (!homeInquiryForm) return;

    homeInquiryForm.addEventListener('submit', function (e) {
      e.preventDefault();
      if (homeFormFeedback) {
        homeFormFeedback.className = 'form-feedback success';
        homeFormFeedback.innerHTML = `<strong>Inquiry Received (Demo Mode):</strong> Form validated. In production, this connects to an authenticated scheduling coordinator.`;
        homeInquiryForm.reset();
      }
    });
  }

  /* ==========================================================================
     Application Bootstrapper
     ========================================================================== */
  document.addEventListener('DOMContentLoaded', () => {
    populateDynamicDetails();
    setupMobileNavigation();
    setupScrollHeader();
    setupFaqAccordion();
    setupBookingActions();
    setupScrollReveals();
    setupContactPageForm();
    setupHomepageForm();
  });
})();