/**
 * Shared behaviour — present on every page (mobile menu, hero parallax,
 * scroll-reveal animations). Homepage-only widgets (audience toggle,
 * services tabs, testimonial carousel) live in front-page.js.
 */
(function () {
  var menuBtn = document.getElementById('menu-btn');
  var mobileMenu = document.getElementById('mobile-menu');
  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
    });
  }
})();

// ===== Hero parallax on scroll =====
(function () {
  var heroImg = document.getElementById('hero-bg-img');
  var heroSection = document.getElementById('top');
  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!heroImg || !heroSection || prefersReduced) return;

  var PARALLAX_FACTOR = 0.12;
  heroImg.style.transform = 'translate3d(0,0,0) scale(1.25)';

  var ticking = false;
  function update() {
    var rect = heroSection.getBoundingClientRect();
    ticking = false;
    if (rect.bottom <= 0 || rect.top >= window.innerHeight) return;
    var scrolledPast = Math.max(0, Math.min(-rect.top, rect.height));
    var offset = scrolledPast * PARALLAX_FACTOR;
    heroImg.style.transform = 'translate3d(0,' + offset.toFixed(1) + 'px,0) scale(1.25)';
  }
  function onScroll() {
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(update);
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll, { passive: true });
  update();
})();

// ===== Animate sections into view on scroll =====
(function () {
  var targets = document.querySelectorAll('.reveal, .reveal-group');
  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (prefersReduced || !('IntersectionObserver' in window)) {
    targets.forEach(function (el) { el.classList.add('is-visible'); });
    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

  targets.forEach(function (el) { observer.observe(el); });
})();
