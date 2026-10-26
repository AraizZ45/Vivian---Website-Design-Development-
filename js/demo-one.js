/**
 * CONCIERGE MEDICAL - Client-Side Architecture
 * Front-end interaction, interactive setting showcase, accessible navigation,
 * scroll indicators, and demonstration form validation.
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

    // Practice contact placeholders (verified on onboarding)
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
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  const settingTabs = document.querySelectorAll('.setting-tab');
  const settingPanels = document.querySelectorAll('.setting-panel');

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

    // Close menu when any nav item is selected
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
     4. Interactive Care Settings Showcase
     ========================================================================== */
  function setupCareSettingsShowcase() {
    if (!settingTabs.length || !settingPanels.length) return;

    settingTabs.forEach(tab => {
      tab.addEventListener('click', function () {
        const targetSetting = this.getAttribute('data-target');

        // Update active tab states
        settingTabs.forEach(t => {
          t.classList.remove('active');
          t.setAttribute('aria-selected', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-selected', 'true');

        // Switch panels with smooth appearance
        settingPanels.forEach(panel => {
          if (panel.getAttribute('data-panel') === targetSetting) {
            panel.classList.add('active');
            panel.removeAttribute('hidden');
          } else {
            panel.classList.remove('active');
            panel.setAttribute('hidden', 'true');
          }
        });
      });
    });
  }

  /* ==========================================================================
     5. Booking CTA Dispatcher
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
            const nameInput = document.getElementById('fullName');
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
     7. Active Navigation Highlighting on Scroll (Scrollspy)
     ========================================================================== */
  function setupActiveNavHighlighting() {
    const sections = document.querySelectorAll('section[id], header[id]');
    if (!sections.length || !navLinks.length) return;

    window.addEventListener('scroll', () => {
      let currentSectionId = '';
      const scrollPosition = window.scrollY + 140;

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
     8. Demonstration Inquiry Form Validation & Handling
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

    // Live validation cleanup on user input
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

      // Validate all required inputs
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

      // Safe demonstration acknowledgment
      if (formFeedback) {
        formFeedback.className = 'form-feedback success';
        formFeedback.innerHTML = `<strong>Inquiry Received (Demonstration Mode):</strong> Thank you. Your inquiry details have been verified locally. In a production environment, this request routes to our HIPAA-compliant intake coordinator.`;
        
        inquiryForm.reset();
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
    setupCareSettingsShowcase();
    setupBookingActions();
    setupScrollReveals();
    setupActiveNavHighlighting();
    setupInquiryForm();
  });
})();