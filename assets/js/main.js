/**
 * NovaMedex Main Interactive JavaScript
 * Handles navigation, mobile drawer, accordions, form submissions, and counter animations
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. STICKY HEADER SCROLL EFFECT
  const header = document.querySelector('.nm-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  // 2. MOBILE DRAWER NAVIGATION
  const mobileToggle = document.querySelector('.nm-mobile-toggle');
  const drawer = document.querySelector('.nm-drawer');
  const overlay = document.querySelector('.nm-drawer-overlay');
  const drawerClose = document.querySelector('.nm-drawer-close');

  function openDrawer() {
    if (drawer) drawer.classList.add('active');
    if (overlay) overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    if (drawer) drawer.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
  if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
  if (overlay) overlay.addEventListener('click', closeDrawer);

  // 3. FAQ ACCORDION INTERACTION
  const accordions = document.querySelectorAll('.nm-accordion-item');
  accordions.forEach(item => {
    const headerBtn = item.querySelector('.nm-accordion-header');
    if (headerBtn) {
      headerBtn.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Close siblings if desired, or toggle
        accordions.forEach(sibling => sibling.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // 4. FORM SUBMISSION INTERACTION & TOAST NOTIFICATION
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      
      const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerText : 'Submit';
      
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerText = 'Submitting...';
      }

      setTimeout(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerText = originalText;
        }
        form.reset();
        showToast('Thank you! Your request has been received. A NovaMedex practice consultant will contact you shortly.');
      }, 700);
    });
  });

  // 5. TOAST NOTIFICATION HELPER
  function showToast(message) {
    let toast = document.querySelector('.nm-toast');
    if (!toast) {
      toast = document.createElement('div');
      toast.className = 'nm-toast';
      document.body.appendChild(toast);
    }
    toast.innerHTML = `<i class="fa-solid fa-circle-check"></i> <span>${message}</span>`;
    toast.classList.add('active');

    setTimeout(() => {
      toast.classList.remove('active');
    }, 4500);
  }

  // 6. ANIMATED NUMBER COUNTERS (FOR STATS)
  const counterElements = document.querySelectorAll('[data-counter]');
  if (counterElements.length > 0 && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseFloat(el.getAttribute('data-counter'));
          const suffix = el.getAttribute('data-suffix') || '';
          const prefix = el.getAttribute('data-prefix') || '';
          const isPercent = suffix.includes('%');
          
          let count = 0;
          const duration = 1500;
          const stepTime = 30;
          const totalSteps = duration / stepTime;
          const increment = target / totalSteps;

          const timer = setInterval(() => {
            count += increment;
            if (count >= target) {
              count = target;
              clearInterval(timer);
            }
            el.innerText = `${prefix}${isPercent ? count.toFixed(0) : Math.floor(count)}${suffix}`;
          }, stepTime);

          observer.unobserve(el);
        }
      });
    }, { threshold: 0.2 });

    counterElements.forEach(el => counterObserver.observe(el));
  }
});
