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
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/digibeat/assets/css/style.css">

<style>
  /* ═══════════════════════════════════════════════
     BASE OVERRIDES (all viewports)
  ═══════════════════════════════════════════════ */
  :root {
    --hdr-accent:   #46e0c9;
    --hdr-accent2:  #5b7bff;
    --hdr-dark:     #0a0e17;
    --hdr-h:        72px;
  }

  body { padding-top: var(--hdr-h); }

  /* Logo */
  .db-header .db-logo__img {
    height: 40px !important;
    width: auto !important;
  }

  /* Fixed header */
  .db-header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    height: var(--hdr-h) !important;
    z-index: 1000 !important;
    border-bottom: none !important;
    box-shadow: none !important;
  }
  .db-header::after, .db-header::before,
  .db-header__inner::after, .db-header__inner::before {
    display: none !important;
    content: none !important;
  }

  /* Desktop nav links */
  .db-header .db-nav__link {
    font-size: 15.5px;
    font-weight: 600;
    color: #1a1a2e !important;
    text-decoration: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
    background-image: none !important;
  }
  .db-header .db-nav__link::after,
  .db-header .db-nav__link::before { display: none !important; content: none !important; }

  .db-header .db-nav__caret {
    color: #1a1a2e !important;
    transition: transform 0.25s ease !important;
  }

  /* Desktop nav ul — horizontal row */
  .db-header .db-nav > ul {
    display: flex;
    align-items: center;
    gap: 4px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  /* Mega menu desktop colours */
  .db-header .db-mega { z-index: 60 !important; }
  .db-header .db-mega__intro h3   { color: #f2f4f9 !important; }
  .db-header .db-mega__col h4     { color: #f2f4f9 !important; }
  .db-header .db-mega__col ul li a,
  .db-header .db-mega__intro a    { color: #8992a8 !important; }
  .db-header .db-mega__col ul li a:hover,
  .db-header .db-mega__intro a:hover { color: #f2f4f9 !important; }

  /* Desktop burger hidden */
  .db-burger { display: none !important; }

  /* Desktop: ensure nav shows as horizontal flex row */
  @media (min-width: 961px) {
    .db-nav {
      display: flex !important;
      position: static !important;
      flex: 1 !important;
      align-items: center !important;
      justify-content: center !important;
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
      pointer-events: auto !important;
      background: transparent !important;
      height: auto !important;
      width: auto !important;
      overflow: visible !important;
      padding: 0 !important;
    }
    .db-mobile-contact { display: none !important; }
  }

  /* ═══════════════════════════════════════════════
     MOBILE  ≤ 960px
  ═══════════════════════════════════════════════ */
  @media (max-width: 960px) {

    /* ── Burger button ── */
    .db-burger {
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      align-items: center !important;
      gap: 5px !important;
      width: 40px !important;
      height: 40px !important;
      padding: 0 !important;
      border: none !important;
      border-radius: 8px !important;
      background: transparent !important;
      cursor: pointer !important;
      z-index: 1100 !important;
      position: relative !important;
      flex-shrink: 0 !important;
    }
    .db-burger .burger-bar {
      width: 22px;
      height: 2px;
      background: #1a1a2e;
      border-radius: 2px;
      transition: transform 0.3s cubic-bezier(0.23,1,0.32,1), opacity 0.2s ease;
      display: block;
    }
    /* X state */
    .db-header.menu-open .burger-bar.line-1 { transform: translateY(7px) rotate(45deg); }
    .db-header.menu-open .burger-bar.line-2 { opacity: 0; transform: scaleX(0); }
    .db-header.menu-open .burger-bar.line-3 { transform: translateY(-7px) rotate(-45deg); }

    /* ── Hide desktop-only items ── */
    .db-actions .db-icon-btn:not(.db-burger),
    .db-actions .db-cta { display: none !important; }

    /* ── Mobile nav drawer (DARK theme) ── */
    .db-nav {
      display: block !important; /* always in DOM, toggled by visibility */
      position: fixed !important;
      top: var(--hdr-h) !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: calc(100vh - var(--hdr-h)) !important;
      overflow-y: auto !important;
      overflow-x: hidden !important;
      z-index: 1000 !important;
      padding: 0 !important;
      margin: 0 !important;

      /* Dark drawer background */
      background: #0a0e17 !important;

      /* Enter animation */
      opacity: 0 !important;
      transform: translateX(100%) !important;
      transition: opacity 0.32s ease, transform 0.32s cubic-bezier(0.23,1,0.32,1) !important;
      pointer-events: none !important;
      visibility: hidden !important;
    }
    .db-nav.is-open {
      opacity: 1 !important;
      transform: translateX(0) !important;
      pointer-events: auto !important;
      visibility: visible !important;
    }

    /* ── Nav list reset ── */
    .db-nav > ul {
      display: flex !important;
      flex-direction: column !important;
      gap: 0 !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 20px 0 0 !important;
      width: 100% !important;
    }

    /* ── Nav items ── */
    .db-nav .db-nav__item {
      display: block !important;
      width: 100% !important;
      opacity: 1 !important;
      transform: none !important;
      border-bottom: 1px solid rgba(255,255,255,0.06) !important;
      position: relative !important;
    }

    /* ── Nav links ── */
    .db-nav .db-nav__link {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      width: 100% !important;
      padding: 17px 24px !important;
      font-size: 17px !important;
      font-weight: 600 !important;
      font-family: 'Inter', sans-serif !important;
      color: #e8eaf0 !important;
      text-decoration: none !important;
      border: none !important;
      background: transparent !important;
      transition: color 0.2s ease, background 0.2s ease !important;
      line-height: 1 !important;
    }
    .db-nav .db-nav__link:hover,
    .db-nav .db-nav__link:focus {
      color: var(--hdr-accent) !important;
      background: rgba(70,224,201,0.05) !important;
    }
    .db-nav .db-nav__link.is-active {
      color: var(--hdr-accent) !important;
    }
    .db-nav .db-nav__link.is-active::before,
    .db-nav .db-nav__link.is-active::after { display: none !important; }

    /* Caret */
    .db-nav .db-nav__caret {
      width: 14px !important;
      height: 14px !important;
      color: #6b7280 !important;
      flex-shrink: 0 !important;
      transition: transform 0.3s ease !important;
    }
    .db-nav .db-nav__item.is-open > .db-nav__link .db-nav__caret {
      transform: rotate(180deg) !important;
      color: var(--hdr-accent) !important;
    }
    .db-nav .db-nav__item.is-open > .db-nav__link {
      color: var(--hdr-accent) !important;
    }

    /* ── Services accordion (mega → inline) ── */
    .db-nav .db-mega {
      display: block !important;
      position: static !important;
      top: auto !important;
      left: auto !important;
      width: 100% !important;
      height: auto !important;

      background: rgba(255,255,255,0.03) !important;
      border: none !important;
      border-top: 1px solid rgba(255,255,255,0.06) !important;
      border-radius: 0 !important;
      padding: 0 !important;
      box-shadow: none !important;
      transform: none !important;
      opacity: 1 !important;
      visibility: visible !important;

      /* height accordion */
      max-height: 0 !important;
      overflow: hidden !important;
      transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1) !important;
    }
    .db-nav .db-nav__item.is-open .db-mega {
      max-height: 2000px !important;
    }
    .db-mega__intro { display: none !important; }

    /* Accordion inner wrapper */
    .db-nav .db-mega__col {
      display: block !important;
      width: 100% !important;
      padding: 12px 24px !important;
      margin: 0 !important;
      border-bottom: 1px solid rgba(255,255,255,0.04) !important;
    }
    .db-nav .db-mega__col:last-child { border-bottom: none !important; }

    .db-nav .db-mega__col h4 {
      font-size: 11px !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #46e0c9 !important;
      margin: 8px 0 10px !important;
      padding: 0 !important;
      display: flex !important;
      align-items: center !important;
      gap: 6px !important;
    }
    .db-nav .db-mega__col h4 svg { display: none !important; }
    .db-nav .db-mega__col h4[style] { margin-top: 16px !important; }

    .db-nav .db-mega__col ul {
      list-style: none !important;
      margin: 0 0 8px !important;
      padding: 0 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 0 !important;
    }
    .db-nav .db-mega__col ul li { display: block !important; margin: 0 !important; padding: 0 !important; }
    .db-nav .db-mega__col ul li a {
      display: block !important;
      padding: 9px 0 !important;
      font-size: 14.5px !important;
      font-weight: 500 !important;
      color: #9ca3af !important;
      transition: color 0.2s ease, padding-left 0.2s ease !important;
    }
    .db-nav .db-mega__col ul li a:hover {
      color: #e8eaf0 !important;
      padding-left: 6px !important;
    }

    /* ── Bottom CTA inside drawer ── */
    .db-mobile-contact {
      display: block !important;
      padding: 24px !important;
      margin-top: auto !important;
      border-top: 1px solid rgba(255,255,255,0.08) !important;
    }
    .db-mobile-cta {
      display: block !important;
      width: 100% !important;
      padding: 14px 20px !important;
      text-align: center !important;
      border-radius: 12px !important;
      background: linear-gradient(135deg, var(--hdr-accent) 0%, var(--hdr-accent2) 100%) !important;
      color: #fff !important;
      font-size: 15px !important;
      font-weight: 700 !important;
      letter-spacing: 0.01em !important;
      transition: opacity 0.2s ease, transform 0.2s ease !important;
    }
    .db-mobile-cta:hover { opacity: 0.9 !important; transform: translateY(-1px) !important; }
    .db-mobile-cta:active { transform: scale(0.98) !important; }

    /* Contact info lines */
    .db-mobile-contact__title {
      font-size: 10px !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.1em !important;
      color: rgba(255,255,255,0.3) !important;
      margin-bottom: 14px !important;
      display: block !important;
    }
    .db-mobile-contact__links {
      display: flex !important;
      flex-direction: column !important;
      gap: 10px !important;
      margin-bottom: 20px !important;
    }
    .db-mobile-contact__item {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      color: #9ca3af !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      transition: color 0.2s ease !important;
    }
    .db-mobile-contact__item svg { width: 16px !important; height: 16px !important; flex-shrink: 0 !important; stroke: var(--hdr-accent) !important; }
    .db-mobile-contact__item:hover { color: #fff !important; }

    /* Socials row */
    .db-mobile-socials {
      display: flex !important;
      gap: 12px !important;
      margin-top: 16px !important;
    }
    .db-mobile-socials a {
      width: 38px !important; height: 38px !important;
      border-radius: 10px !important;
      border: 1px solid rgba(255,255,255,0.12) !important;
      display: flex !important; align-items: center !important; justify-content: center !important;
      color: #9ca3af !important;
      transition: all 0.2s ease !important;
    }
    .db-mobile-socials a svg { width: 16px !important; height: 16px !important; }
    .db-mobile-socials a:hover { color: var(--hdr-accent) !important; border-color: var(--hdr-accent) !important; background: rgba(70,224,201,0.08) !important; }
  }

  /* Outside media query — hide mobile contact on desktop */
  @media (min-width: 961px) {
    .db-mobile-contact { display: none !important; }
    .db-burger { display: none !important; }
  }
</style>

<header class="db-header">
  <div class="db-header__inner">

    <a href="/digibeat/index.php" class="db-logo" aria-label="Digibeat home">
      <img src="/digibeat/assets/logoff.png" alt="Digibeat" class="db-logo__img">
    </a>

    <!-- Primary nav -->
    <nav class="db-nav" aria-label="Primary" id="db-nav">
      <ul>

        <li class="db-nav__item" data-menu="services">
          <a href="/digibeat/services.php" class="db-nav__link<?php echo db_is_active('services', $active_page); ?>">
            Services
            <svg class="db-nav__caret" viewBox="0 0 10 6"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>

          <div class="db-mega">
            <div class="db-mega__intro">
              <h3>Building Strong<br>Capabilities to<br>Empower Your<br>Brand</h3>
              <a href="/digibeat/services.php">Go to overview →</a>
            </div>

            <div class="db-mega__col">
              <h4><a href="/digibeat/services/branding.php" style="color: inherit; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">Branding <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></a></h4>
              <ul>
                <li><a href="/digibeat/services/branding.php#brand-consulting">Brand Consulting</a></li>
                <li><a href="/digibeat/services/branding.php#logo-design">Logo Design</a></li>
                <li><a href="/digibeat/services/branding.php#product-design">Industrial / Product Design</a></li>
                <li><a href="/digibeat/services/branding.php#graphic-design">Graphic Design</a></li>
              </ul>
              <h4 style="margin-top:28px;"><a href="/digibeat/services/it-solutions.php" style="color: inherit; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">IT Solutions <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg></a></h4>
              <ul>
                <li><a href="/digibeat/services/it-solutions.php#web-hosting">Web Hosting</a></li>
                <li><a href="/digibeat/services/it-solutions.php#business-email">Business Email Services</a></li>
              </ul>
            </div>

            <div class="db-mega__col">
              <h4>Web Development</h4>
              <ul>
                <li><a href="/digibeat/services/custom-web-development">Custom Web Application</a></li>
                <li><a href="/digibeat/services/web-development.php?service=web-design-service">Web Design Service</a></li>
                <li><a href="/digibeat/services/ecommerce-solutions">E-commerce Solutions</a></li>
                <li><a href="/digibeat/services/website-development">Website Development</a></li>
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
          <a href="/digibeat/our-works.php" class="db-nav__link<?php echo db_is_active('our-works', $active_page); ?>">Our Works</a>
        </li>
        <li class="db-nav__item">
          <a href="/digibeat/industries.php" class="db-nav__link<?php echo db_is_active('industries', $active_page); ?>">Industries</a>
        </li>
        <li class="db-nav__item">
          <a href="/digibeat/about.php" class="db-nav__link<?php echo db_is_active('about', $active_page); ?>">About</a>
        </li>
        <li class="db-nav__item">
          <a href="/digibeat/careers.php" class="db-nav__link<?php echo db_is_active('careers', $active_page); ?>">Careers</a>
        </li>
      </ul>

      <!-- Mobile-only bottom contact area -->
      <div class="db-mobile-contact">
        <span class="db-mobile-contact__title">Get In Touch</span>
        <div class="db-mobile-contact__links">
          <a href="tel:+10000000000" class="db-mobile-contact__item">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2.2Z"/></svg>
            <span>+1 (000) 000-0000</span>
          </a>
          <a href="mailto:hello@digibeat.com" class="db-mobile-contact__item">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>hello@digibeat.com</span>
          </a>
        </div>
        <a href="/digibeat/contact.php" class="db-mobile-cta">Let's Work Together</a>
        <div class="db-mobile-socials">
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a href="#" aria-label="Twitter / X">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
          </a>
        </div>
      </div>
    </nav>

    <!-- Desktop / right actions -->
    <div class="db-actions">
      <a href="tel:+10000000000" class="db-icon-btn" aria-label="Call us">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2.2Z"/></svg>
      </a>
      <button class="db-icon-btn" aria-label="Search">
        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
      </button>
      <a href="/digibeat/contact.php" class="db-cta<?php echo db_is_active('contact', $active_page); ?>">Contact</a>
      <!-- Burger — only shown on mobile via CSS -->
      <button class="db-icon-btn db-burger" aria-label="Open menu" id="db-burger-btn">
        <span class="burger-bar line-1"></span>
        <span class="burger-bar line-2"></span>
        <span class="burger-bar line-3"></span>
      </button>
    </div>

  </div>
</header>

<script>
(function () {
  var header    = document.querySelector('.db-header');
  var nav       = document.getElementById('db-nav');
  var burgerBtn = document.getElementById('db-burger-btn');

  /* ── Mega-menu items (desktop hover / mobile tap accordion) ── */
  var menuItems = document.querySelectorAll('.db-nav__item[data-menu]');
  menuItems.forEach(function (item) {
    var link  = item.querySelector('.db-nav__link');
    var open  = function () { item.classList.add('is-open'); };
    var close = function () { item.classList.remove('is-open'); };

    /* Desktop: hover */
    item.addEventListener('mouseenter', function () {
      if (window.innerWidth > 960) open();
    });
    item.addEventListener('mouseleave', function () {
      if (window.innerWidth > 960) close();
    });

    /* Mobile: tap accordion */
    link.addEventListener('click', function (e) {
      if (window.innerWidth <= 960) {
        e.preventDefault();
        if (item.classList.contains('is-open')) {
          close();
        } else {
          menuItems.forEach(function (i) { i.classList.remove('is-open'); });
          open();
        }
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') close();
    });
  });

  /* ── Burger toggle ── */
  function openMenu() {
    nav.classList.add('is-open');
    header.classList.add('menu-open');
    burgerBtn.setAttribute('aria-label', 'Close menu');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    nav.classList.remove('is-open');
    header.classList.remove('menu-open');
    burgerBtn.setAttribute('aria-label', 'Open menu');
    document.body.style.overflow = '';
    menuItems.forEach(function (i) { i.classList.remove('is-open'); });
  }

  if (burgerBtn && nav) {
    burgerBtn.addEventListener('click', function () {
      nav.classList.contains('is-open') ? closeMenu() : openMenu();
    });
  }

  /* ── Close on resize back to desktop ── */
  window.addEventListener('resize', function () {
    if (window.innerWidth > 960) closeMenu();
  });

  /* ── Escape key ── */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });
})();
</script>