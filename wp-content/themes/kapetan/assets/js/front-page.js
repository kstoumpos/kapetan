/**
 * Homepage-only widgets: hero audience toggle, services section tabs,
 * testimonial carousel. Enqueued only on is_front_page() — see functions.php.
 */

// ===== Hero audience toggle =====
(function () {
  var toggle = document.getElementById('audience-toggle');
  if (!toggle) return;
  var tabs = Array.prototype.slice.call(toggle.querySelectorAll('.audience-tab'));

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) {
        t.setAttribute('aria-selected', t === tab ? 'true' : 'false');
      });
    });
  });
})();

// ===== Services section slider =====
(function () {
  var track = document.getElementById('svc-track');
  var tabButtons = Array.prototype.slice.call(document.querySelectorAll('.svc-tab-btn'));
  var slides = Array.prototype.slice.call(document.querySelectorAll('.svc-slide'));
  if (!track || !tabButtons.length || !slides.length) return;

  var total = slides.length;
  // each slide takes 80% of the track's own width (which matches the viewport
  // container), leaving the remaining 20% to peek the next slide — keep this
  // in sync with the w-[80%] class on .svc-slide
  var SLIDE_WIDTH_PCT = 80;
  var current = 0;

  function goTo(index) {
    current = (index + total) % total;

    track.style.transform = 'translateX(-' + (current * SLIDE_WIDTH_PCT) + '%)';

    slides.forEach(function (slide, i) {
      if (i === current) {
        slide.removeAttribute('aria-hidden');
      } else {
        slide.setAttribute('aria-hidden', 'true');
      }
    });

    tabButtons.forEach(function (btn, i) {
      var isActive = i === current;
      btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
      if (isActive) {
        btn.classList.add('bg-brand', 'text-white', 'font-medium');
        btn.classList.remove('text-navy-900/70', 'font-normal', 'hover:text-brand');
      } else {
        btn.classList.remove('bg-brand', 'text-white', 'font-medium');
        btn.classList.add('text-navy-900/70', 'font-normal', 'hover:text-brand');
      }
    });

    // The tab bar is sticky to the top of the viewport and stays reachable while
    // scrolling, but if the user clicked it from further down the section, bring
    // the active slide back into view rather than leaving the change hidden
    // behind the pinned bar.
    var tabsWrapEl = document.getElementById('svc-tabs-wrap');
    var barH = tabsWrapEl ? tabsWrapEl.getBoundingClientRect().height : 0;
    var trackRect = track.getBoundingClientRect();
    if (trackRect.top < barH) {
      var prefersReducedScroll = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      window.scrollTo({
        top: window.pageYOffset + trackRect.top - barH - 16,
        behavior: prefersReducedScroll ? 'auto' : 'smooth'
      });
    }
  }

  tabButtons.forEach(function (btn, i) {
    btn.addEventListener('click', function () { goTo(i); });
  });
})();

// ===== Testimonial carousel =====
// Note: the supplied design only provided one placeholder quote (lorem ipsum,
// "Name Surname" / "Company Sector"). Per the brief's "use copy exactly as given,
// never invent your own" rule, both slides intentionally reuse that same
// placeholder content rather than fabricating client quotes — the slider
// mechanism itself is fully functional and ready for real client stories.
(function () {
  var track = document.getElementById('testimonial-track');
  var prevBtn = document.getElementById('testimonial-prev');
  var nextBtn = document.getElementById('testimonial-next');
  var dotsWrap = document.getElementById('testimonial-dots');
  var slides = Array.prototype.slice.call(document.querySelectorAll('.testimonial-slide'));
  if (!track || !prevBtn || !nextBtn || !slides.length) return;

  var total = slides.length;
  var current = 0;

  // build dot indicators
  var dotEls = slides.map(function (_, i) {
    var dot = document.createElement('button');
    dot.type = 'button';
    dot.setAttribute('role', 'tab');
    dot.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
    dot.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
    dot.className = 'w-1.5 h-1.5 rounded-full transition-colors duration-200 ' + (i === 0 ? 'bg-brand' : 'bg-navy-900/20 hover:bg-navy-900/40');
    dot.addEventListener('click', function () { goTo(i); });
    if (dotsWrap) dotsWrap.appendChild(dot);
    return dot;
  });

  function goTo(index) {
    current = (index + total) % total;

    track.style.transform = 'translateX(-' + (current * (100 / total)) + '%)';

    slides.forEach(function (slide, i) {
      if (i === current) {
        slide.removeAttribute('aria-hidden');
      } else {
        slide.setAttribute('aria-hidden', 'true');
      }
    });

    dotEls.forEach(function (dot, i) {
      var active = i === current;
      dot.setAttribute('aria-selected', active ? 'true' : 'false');
      dot.classList.toggle('bg-brand', active);
      dot.classList.toggle('bg-navy-900/20', !active);
    });
  }

  prevBtn.addEventListener('click', function () { goTo(current - 1); });
  nextBtn.addEventListener('click', function () { goTo(current + 1); });
})();
