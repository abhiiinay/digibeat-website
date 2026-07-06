<?php
/**
 * header.php
 * Shared site header — include this at the top of every page.
 *
 * Usage:
 *   <?php $active_page = 'services'; include 'header.php'; ?>
 *
 * $active_page (optional) highlights the matching nav link.
 * Accepted values: home, services, solutions, industries, works, about, careers, contact
 */
if (!isset($active_page)) {
    $active_page = '';
}

function db_is_active($page, $active) {
    return $page === $active ? ' is-active' : '';
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<style>
  /* ---- Logo size ---- */
  .db-header .db-logo__img {
    height: 42px !important;
    width: auto !important;
  }

  /* ---- Kill the header's bottom separator line entirely ---- */
  .db-header {
    border-bottom: none !important;
    box-shadow: none !important;
    outline: none !important;
  }
  .db-header::after,
  .db-header::before,
  .db-header__inner::after,
  .db-header__inner::before {
    display: none !important;
    content: none !important;
    border: none !important;
    box-shadow: none !important;
  }

  /* ---- Nav readability + spacing overrides (mega menu content untouched) ---- */
  .db-header .db-nav ul {
    gap: 34px !important;
  }
  .db-header .db-nav__link {
    font-size: 16px;
    font-weight: 600;
    color: #1a1a2e !important;
  }
  .db-header .db-nav__caret {
    color: #1a1a2e !important;
  }
  /* Kill underline / bottom-border in every state, including any ::after or
     ::before underline-on-hover effect the base stylesheet may add. */
  .db-header .db-nav__link,
  .db-header .db-nav__link:hover,
  .db-header .db-nav__link:focus,
  .db-header .db-nav__link:active,
  .db-header .db-nav__link.is-active {
    text-decoration: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
    background-image: none !important;
  }
  .db-header .db-nav__link::after,
  .db-header .db-nav__link::before {
    display: none !important;
    content: none !important;
  }

  /* ---- Responsive navbar ---- */
  .db-burger { display: none; }

  @media (max-width: 960px) {
    .db-burger {
      display: inline-flex;
    }

    /* Mobile nav renders as a fixed overlay panel instead of pushing page
       content down, so every item (Services, Case Studies, etc.) is always
       visible immediately when opened — no scrolling required. */
    .db-nav {
      display: none;
    }
    .db-nav.is-open {
      display: flex;
      flex-direction: column;
      position: fixed;
      top: var(--db-header-bottom, 72px);
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      background: #ffffff;
      overflow-y: auto;
      z-index: 999;
      padding: 8px 24px 24px;
      box-shadow: 0 16px 32px -12px rgba(20,20,30,0.18);
    }
    .db-header .db-nav.is-open ul {
      flex-direction: column;
      align-items: stretch;
      gap: 2px !important;
      width: 100%;
      padding: 8px 0 4px;
      margin: 0;
      list-style: none;
    }
    .db-header .db-nav.is-open .db-nav__item {
      width: 100%;
      border-bottom: 1px solid #eceef4;
    }
    .db-header .db-nav.is-open .db-nav__link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 16px 4px;
      font-size: 16.5px;
    }

    /* Services mega menu becomes an inline accordion panel on mobile */
    .db-mega {
      position: static !important;
      display: none;
      width: 100% !important;
      box-shadow: none !important;
      border: none !important;
      padding: 0 0 12px 12px !important;
    }
    .db-nav__item[data-menu].is-open .db-mega {
      display: block !important;
    }
    .db-nav__item[data-menu].is-open > .db-nav__link .db-nav__caret {
      transform: rotate(180deg);
    }

    .db-mobile-contact {
      display: block;
      margin-top: 20px;
    }
    .db-mobile-contact .db-cta {
      display: block;
      width: 100%;
      text-align: center;
      padding: 15px 20px;
    }

    .db-actions .db-icon-btn:not(.db-burger),
    .db-actions .db-cta {
      display: none;
    }
  }

  .db-mobile-contact { display: none; }
</style>

<header class="db-header">
  <div class="db-header__inner">

    <!-- Logo: swap the file below for your actual logo image -->
    <a href="/" class="db-logo" aria-label="Digibeat home">
      <img src="assets/logoff.png" alt="Digibeat" class="db-logo__img">
    </a>

    <!-- Primary nav -->
    <nav class="db-nav" aria-label="Primary" id="db-nav">
      <ul style="display:flex; align-items:center; gap:4px;">

        <li class="db-nav__item" data-menu="services">
          <a href="/services.php" class="db-nav__link<?php echo db_is_active('services', $active_page); ?>">
            Services
            <svg class="db-nav__caret" viewBox="0 0 10 6"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>

          <!-- Mega menu -->
          <div class="db-mega">
            <div class="db-mega__intro">
              <h3>Building Strong<br>Capabilities to<br>Empower Your<br>Brand</h3>
              <a href="/services.php">Go to overview →</a>
            </div>

            <div class="db-mega__col">
              <h4>Branding <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></h4>
              <ul>
                <li><a href="/services/brand-consulting.php">Brand Consulting</a></li>
                <li><a href="/services/logo-design.php">Logo Design</a></li>
                <li><a href="/services/product-design.php">Industrial / Product Design</a></li>
                <li><a href="/services/graphic-design.php">Graphic Design</a></li>
                
              </ul>
              <h4 style="margin-top:28px;">IT Solutions <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></h4>
              <ul>
                <li><a href="/services/ui-ux.php">Web Hosting</a></li>
                <li><a href="/services/website-design.php">Bussiness Email Services</a></li>
              </ul>
            </div>

            <div class="db-mega__col">
              <h4>Web Development<svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></h4>
              <ul>
                <li><a href="custom-web-development">Custom Web Application </a></li>
                <li><a href="/services/devops.php">Web Design Service</a></li>
                <li><a href="/services/data-analytics.php">E-commerce Solutions</a></li>
                <li><a href="/services/web-development.php">Website Development</a></li>
              </ul>
            </div>

            <div class="db-mega__col">
              <h4>Digital Marketing <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></h4>
              <ul>
                <li><a href="/services/seo.php">Search Engine Optimisation</a></li>
                <li><a href="/services/social-media.php">Social Media Marketing</a></li>
                <li><a href="/services/content-marketing.php">Content Marketing</a></li>
                <li><a href="/services/marketing-automation.php">Online Reputation Management</a></li>
                <li><a href="/services/analytics.php">Analytics</a></li>
              </ul>
            </div>
          </div>
        </li>

        <li class="db-nav__item">
          <a href="case-studies" class="db-nav__link<?php echo db_is_active('case-studies', $active_page); ?>">Case Studies</a>
        </li>
        <li class="db-nav__item">
          <a href="industries" class="db-nav__link<?php echo db_is_active('industries', $active_page); ?>">Industries</a>
        </li>
        <li class="db-nav__item">
          <a href="/works.php" class="db-nav__link<?php echo db_is_active('works', $active_page); ?>">Works</a>
        </li>
        <li class="db-nav__item">
          <a href="about" class="db-nav__link<?php echo db_is_active('about', $active_page); ?>">About</a>
        </li>
        <li class="db-nav__item">
          <a href="careers" class="db-nav__link<?php echo db_is_active('careers', $active_page); ?>">Careers</a>
        </li>
      </ul>

      <!-- Shown only on mobile, pinned below the list -->
      <div class="db-mobile-contact">
        <a href="contact" class="db-cta">Contact Us</a>
      </div>
    </nav>

    <!-- Actions -->
    <div class="db-actions">
      <a href="tel:+10000000000" class="db-icon-btn" aria-label="Call us">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2.2Z"/></svg>
      </a>
      <button class="db-icon-btn" aria-label="Search">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
      </button>
      <button class="db-icon-btn" aria-label="Saved">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12a1 1 0 0 1 1 1v17l-7-4-7 4V4a1 1 0 0 1 1-1Z"/></svg>
      </button>
      <a href="contact" class="db-cta<?php echo db_is_active('contact', $active_page); ?>">Contact</a>
      <button class="db-icon-btn db-burger" aria-label="Open menu" id="db-burger-btn">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" id="db-burger-icon"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>

  </div>
</header>

<script>
(function () {
  var items = document.querySelectorAll('.db-nav__item[data-menu]');
  items.forEach(function (item) {
    var link = item.querySelector('.db-nav__link');
    var close = function () { item.classList.remove('is-open'); };
    var open = function () { item.classList.add('is-open'); };

    item.addEventListener('mouseenter', function () {
      if (!window.matchMedia('(max-width: 960px)').matches) open();
    });
    item.addEventListener('mouseleave', function () {
      if (!window.matchMedia('(max-width: 960px)').matches) close();
    });

    link.addEventListener('click', function (e) {
      var isMobile = window.matchMedia('(max-width: 960px)').matches;
      // On touch devices / mobile widths, first tap expands the accordion instead of navigating.
      if (isMobile) {
        if (!item.classList.contains('is-open')) {
          e.preventDefault();
          items.forEach(close);
          open();
        } else {
          e.preventDefault();
          close();
        }
      } else if (!item.classList.contains('is-open') && window.matchMedia('(hover: none)').matches) {
        e.preventDefault();
        items.forEach(close);
        open();
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') close();
    });
  });

  var header = document.querySelector('.db-header');
  var nav = document.getElementById('db-nav');
  var burgerBtn = document.getElementById('db-burger-btn');
  var burgerIcon = document.getElementById('db-burger-icon');

  var BARS_PATH = '<path d="M4 6h16M4 12h16M4 18h16"/>';
  var X_PATH = '<path d="M6 6l12 12M18 6 6 18"/>';

  function syncHeaderBottom() {
    if (!header) return;
    var bottom = header.getBoundingClientRect().bottom;
    document.documentElement.style.setProperty('--db-header-bottom', Math.max(bottom, 0) + 'px');
  }
  syncHeaderBottom();
  window.addEventListener('resize', syncHeaderBottom);
  window.addEventListener('load', syncHeaderBottom);
  window.addEventListener('scroll', syncHeaderBottom);

  if (burgerBtn && nav) {
    burgerBtn.addEventListener('click', function () {
      var isOpen = nav.classList.toggle('is-open');
      if (burgerIcon) burgerIcon.innerHTML = isOpen ? X_PATH : BARS_PATH;
      burgerBtn.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      if (isOpen) syncHeaderBottom();
      if (!isOpen) items.forEach(function (item) { item.classList.remove('is-open'); });
    });
  }

  window.addEventListener('resize', function () {
    if (!window.matchMedia('(max-width: 960px)').matches) {
      if (nav) nav.classList.remove('is-open');
      if (burgerIcon) burgerIcon.innerHTML = BARS_PATH;
      if (burgerBtn) burgerBtn.setAttribute('aria-label', 'Open menu');
      items.forEach(function (item) { item.classList.remove('is-open'); });
    }
  });
})();
</script>