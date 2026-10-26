/**
 * CONCIERGE MEDICAL - Client-Side Architecture
 * Front-end interaction, accessible navigation, scroll events & validation.
 */

(function () {
  'use strict';

  /* ==========================================================================
     Configuration Registry
     Define placeholders and external integration targets centrally.
     ========================================================================== */
  const PracticeConfig = {
    // If an external verified booking portal exists (e.g. AthenaHealth, SimplePractice),
    // supply the full URL here. Leaving it null smoothly routes users to the #contact inquiry form.
    bookingUrl: null,

    // Practice contact placeholders
    verifiedPhone: null, // e.g. "+1 (301) 555-0199"
    verifiedEmail: null  // e.g. "care@conciergemedical.com"
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
  const inquiryForm = document.getElementById('appointment-inquiry-form');
  const formFeedback = document.getElementById('formFeedback');
  const revealElements = document.querySelectorAll('.reveal');

  /* ==========================================================================
     1. Date & Verification Population
     ========================================================================== */
  function populateDynamicDetails() {
    if (currentYearSpan) {
      currentYearSpan.textContent = new Date().getFullYear();
    }

    // Populate verified phone if configured
    if (PracticeConfig.verifiedPhone) {
      const phoneDisplay = document.getElementById('phone-display');
      if (phoneDisplay) {
        phoneDisplay.innerHTML = `<a href="tel:${PracticeConfig.verifiedPhone.replace(/[^0-9+]/g, '')}" class="text-link">${PracticeConfig.verifiedPhone}</a>`;
      }
    }

    // Populate verified email if configured
    if (PracticeConfig.verifiedEmail) {
      const emailDisplay = document.getElementById('email-display');
      if (emailDisplay) {
        emailDisplay.innerHTML = `<a href="mailto:${PracticeConfig.verifiedEmail}" class="text-link">${PracticeConfig.verifiedEmail}</a>`;
      }
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
      document.body.style.overflow = 'hidden'; // Prevent background scrolling
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

    // Close menu when a navigation item is selected
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (primaryNav.classList.contains('nav-open')) {
          closeMenu();
        }
      });
    });

    // Close on escape key
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
          if (window.scrollY > 20) {
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
    onScroll(); // initial state check
  }

  /* ==========================================================================
     4. Booking CTA Dispatcher
     Handles links or redirects to external clinical scheduling portal if present.
     ========================================================================== */
  function setupBookingActions() {
    bookingTriggers.forEach(button => {
      button.addEventListener('click', function (e) {
        if (PracticeConfig.bookingUrl) {
          e.preventDefault();
          window.open(PracticeConfig.bookingUrl, '_blank', 'noopener,noreferrer');
        } else {
          // If no external URL is configured, let default anchor link scroll to #contact
          const contactSection = document.getElementById('contact');
          if (contactSection) {
            // Focus into name field for user convenience
            const nameInput = document.getElementById('fullName');
            if (nameInput) {
              setTimeout(() => nameInput.focus(), 600);
            }
          }
        }
      });
    });
  }

  /* ==========================================================================
     5. Scroll Reveal System (Intersection Observer)
     ========================================================================== */
  function setupScrollReveals() {
    if (!('IntersectionObserver' in window)) {
      revealElements.forEach(el => el.classList.add('is-visible'));
      return;
    }

    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -40px 0px',
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
     6. Demonstration Inquiry Form Validation & Handling
     Strict client-side validation; avoids handling sensitive health info.
     ========================================================================== */
  function setupInquiryForm() {
    if (!inquiryForm) return;

    const fields = {
      fullName: {
        el: document.getElementById('fullName'),
        errorEl: document.getElementById('nameError'),
        validate: val => val.trim().length >= 2
      },
      emailAddress: {
        el: document.getElementById('emailAddress'),
        errorEl: document.getElementById('emailError'),
        validate: val => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val.trim())
      },
      phoneNumber: {
        el: document.getElementById('phoneNumber'),
        errorEl: document.getElementById('phoneError'),
        validate: val => val.replace(/[^0-9]/g, '').length >= 10
      },
      serviceInterest: {
        el: document.getElementById('serviceInterest'),
        errorEl: document.getElementById('serviceError'),
        validate: val => Boolean(val)
      },
      preferredSetting: {
        el: document.getElementById('preferredSetting'),
        errorEl: document.getElementById('settingError'),
        validate: val => Boolean(val)
      },
      privacyConsent: {
        el: document.getElementById('privacyConsent'),
        errorEl: document.getElementById('consentError'),
        validate: () => document.getElementById('privacyConsent').checked
      }
    };

    // Live validation cleanup on input
    Object.keys(fields).forEach(key => {
      const field = fields[key];
      if (field.el) {
        const eventType = field.el.type === 'checkbox' || field.el.tagName === 'SELECT' ? 'change' : 'input';
        field.el.addEventListener(eventType, () => {
          field.el.classList.remove('input-error');
          if (field.errorEl) {
            field.errorEl.classList.remove('active');
          }
        });
      }
    });

    inquiryForm.addEventListener('submit', function (e) {
      e.preventDefault();
      let isValid = true;

      // Validate each required field
      Object.keys(fields).forEach(key => {
        const field = fields[key];
        if (!field.el) return;

        const value = field.el.value;
        const valid = field.validate(value);

        if (!valid) {
          isValid = false;
          field.el.classList.add('input-error');
          if (field.errorEl) {
            field.errorEl.classList.add('active');
          }
        } else {
          field.el.classList.remove('input-error');
          if (field.errorEl) {
            field.errorEl.classList.remove('active');
          }
        }
      });

      if (!isValid) {
        if (formFeedback) {
          formFeedback.className = 'form-feedback error';
          formFeedback.textContent = 'Please complete all required fields correctly before submitting.';
        }
        return;
      }

      // Safe demonstration feedback - transparent that backend transmission is not active
      if (formFeedback) {
        formFeedback.className = 'form-feedback success';
        formFeedback.innerHTML = `<strong>Inquiry Received (Demo Mode):</strong> Thank you. Your inquiry details have been validated. In production, this data is routed securely to our HIPAA-compliant intake coordinator.`;
        
        // Reset inputs safely
        inquiryForm.reset();
      }
    });
  }

  /* ==========================================================================
     7. Active Navigation State on Scroll
     ========================================================================== */
  function setupActiveNavHighlighting() {
    const sections = document.querySelectorAll('section[id], header[id]');
    if (!sections.length || !navLinks.length) return;

    window.addEventListener('scroll', () => {
      let currentSectionId = '';
      const scrollPosition = window.scrollY + 120;

      sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        if (scrollPosition >= top && scrollPosition < top + height) {
          currentSectionId = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href === `#${currentSectionId}`) {
          link.classList.add('active');
        }
      });
    }, { passive: true });
  }

  /* ==========================================================================
     Initialization
     ========================================================================== */
  document.addEventListener('DOMContentLoaded', () => {
    populateDynamicDetails();
    setupMobileNavigation();
    setupScrollHeader();
    setupBookingActions();
    setupScrollReveals();
    setupInquiryForm();
    setupActiveNavHighlighting();
  });
})();