<?php
/**
 * services/webdevelopment.php
 * Futuristic, high-end Web Development Landing Page.
 * Showcases the 4 sub-services with animated entries, custom illustrations, and scroll reveals.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Development Services — Digibeat</title>

<!-- Fonts: Inter for headings, IBM Plex Mono for UI tags -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

<style>
  /* ═══════════════════════════════════════════════
     FONT-FACE LOADER FOR HELLIX
     ═══════════════════════════════════════════════ */
  @font-face {
    font-family: 'Hellix';
    src: url('../assets/fonts/Hellix-Regular.woff2') format('woff2'),
         url('../assets/fonts/Hellix-Regular.woff') format('woff');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('../assets/fonts/Hellix-Medium.woff2') format('woff2'),
         url('../assets/fonts/Hellix-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('../assets/fonts/Hellix-SemiBold.woff2') format('woff2'),
         url('../assets/fonts/Hellix-SemiBold.woff') format('woff');
    font-weight: 600;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('../assets/fonts/Hellix-Bold.woff2') format('woff2'),
         url('../assets/fonts/Hellix-Bold.woff') format('woff');
    font-weight: 700;
    font-style: normal;
    font-display: swap;
  }

  /* ═══════════════════════════════════════════════
     DESIGN SYSTEM & CONSTANTS
     ═══════════════════════════════════════════════ */
  :root {
    --wd-bg: #ffffff;
    --wd-ink: #0b0b0f;
    --wd-muted: #535461;
    --wd-accent: #5b7bff;
    --wd-accent-soft: rgba(91, 123, 255, 0.08);
    --wd-accent-glow: rgba(91, 123, 255, 0.25);
    --wd-line: rgba(11, 11, 15, 0.06);
    --wd-panel: #f8fafc;
    --wd-font-heading: 'Inter', -apple-system, sans-serif;
    --wd-font-body: 'Hellix', -apple-system, sans-serif;
  }

  html, body {
    background: var(--wd-bg) !important;
    color: var(--wd-ink) !important;
    font-family: var(--wd-font-body);
    margin: 0;
    padding: 0;
    max-width: 100%;
    overflow-x: hidden;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: var(--wd-font-heading);
    font-weight: 800; /* make bold */
    margin: 0;
  }

  p {
    font-family: var(--wd-font-body);
    font-size: 16.5px;
    line-height: 1.7;
    color: var(--wd-muted);
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  .wd-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* ═══════════════════════════════════════════════
     AMBIENT GLOWS
     ═══════════════════════════════════════════════ */
  .wd-glow-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(140px);
    z-index: 0;
    pointer-events: none;
    opacity: 0.15;
  }
  .wd-glow-1 {
    top: 15%;
    right: -100px;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, var(--wd-accent), transparent 70%);
  }
  .wd-glow-2 {
    top: 60%;
    left: -200px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, var(--wd-accent), transparent 70%);
  }

  /* ═══════════════════════════════════════════════
     HERO SECTION (Only title + image/animation, 100vh)
     ═══════════════════════════════════════════════ */
  .wd-hero {
    position: relative;
    height: calc(100vh - 72px); /* subtract header height */
    min-height: 600px;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: var(--wd-bg);
  }
  .wd-hero__inner {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 64px;
    align-items: center;
    width: 100%;
  }
  .wd-hero__text h1 {
    font-size: clamp(48px, 6.5vw, 84px);
    line-height: 1.05;
    letter-spacing: -0.03em;
    color: var(--wd-ink);
  }
  /* mixed color: black & blue */
  .wd-hero__text h1 span {
    color: var(--wd-accent);
    display: block;
    text-shadow: 0 0 40px var(--wd-accent-glow);
  }

  .wd-hero__visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .wd-hero__image-wrapper {
    position: relative;
    border-radius: 28px;
    padding: 10px;
    background: linear-gradient(135deg, rgba(91,123,255,0.2) 0%, rgba(255,255,255,0) 100%);
    box-shadow: 0 30px 80px -20px var(--wd-accent-glow);
    animation: wd-float 6s ease-in-out infinite;
  }
  .wd-hero__image-wrapper img {
    border-radius: 20px;
    width: 100%;
    height: auto;
    display: block;
    max-width: 480px;
  }

  /* Bouncing Scroll Cue */
  .wd-scroll-cue {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--wd-muted);
    cursor: pointer;
    z-index: 10;
  }
  .wd-scroll-cue span {
    width: 24px;
    height: 40px;
    border: 2px solid var(--wd-muted);
    border-radius: 12px;
    position: relative;
    opacity: 0.7;
    transition: border-color 0.3s ease;
  }
  .wd-scroll-cue:hover span {
    border-color: var(--wd-accent);
  }
  .wd-scroll-cue span::after {
    content: '';
    width: 4px;
    height: 8px;
    background: var(--wd-accent);
    border-radius: 2px;
    position: absolute;
    left: 50%;
    top: 6px;
    transform: translateX(-50%);
    animation: wd-scroll-wheel 1.6s ease-in-out infinite;
  }

  /* ═══════════════════════════════════════════════
     SCROLL REVEAL CONTENT SECTIONS
     ═══════════════════════════════════════════════ */
  /* Hidden state: reveal-container begins hidden */
  .wd-reveal-content {
    opacity: 0;
    transform: translateY(60px);
    transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .wd-reveal-content.is-revealed {
    opacity: 1;
    transform: translateY(0);
  }

  /* Capabilities Grid Layout */
  .wd-services-list {
    padding: 100px 0 140px;
  }

  .wd-service-item {
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 80px;
    align-items: center;
    padding: 96px 0;
    border-bottom: 1px solid var(--wd-line);
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .wd-service-item.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
  .wd-service-item:last-child {
    border-bottom: none;
  }
  .wd-service-item.alternate {
    grid-template-columns: 1.05fr 1fr;
  }
  .wd-service-item.alternate .wd-service-text {
    order: 2;
  }
  .wd-service-item.alternate .wd-service-visual {
    order: 1;
  }

  /* Service text content */
  .wd-tag {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 12px;
    color: var(--wd-accent);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 18px;
    padding: 6px 14px;
    background: var(--wd-accent-soft);
    border-radius: 6px;
    border: 1px solid rgba(91,123,255,0.12);
  }
  .wd-service-text h2 {
    font-size: clamp(28px, 3.8vw, 44px);
    line-height: 1.15;
    color: var(--wd-ink);
    margin-bottom: 24px;
    letter-spacing: -0.02em;
  }
  /* mixed color heading details */
  .wd-service-text h2 span {
    color: var(--wd-accent);
  }
  .wd-service-text p {
    margin-bottom: 30px;
  }

  .wd-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 38px;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }
  .wd-bullets li {
    font-size: 15px;
    color: var(--wd-ink);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .wd-bullets li svg {
    width: 20px;
    height: 20px;
    stroke: var(--wd-accent);
    fill: none;
    stroke-width: 2.2;
    flex-shrink: 0;
  }

  /* Futuristic button */
  .wd-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    font-family: var(--wd-font-heading);
    font-weight: 700;
    font-size: 14.5px;
    color: #ffffff;
    background: var(--wd-ink);
    padding: 16px 32px;
    border-radius: 12px;
    border: 1px solid var(--wd-ink);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 10px 25px -10px rgba(11, 11, 15, 0.15);
  }
  .wd-btn:hover {
    background: var(--wd-accent);
    border-color: var(--wd-accent);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 16px 30px -10px var(--wd-accent-glow);
  }
  .wd-btn svg {
    transition: transform 0.3s ease;
  }
  .wd-btn:hover svg {
    transform: translateX(4px);
  }

  /* Service Visual mockup */
  .wd-service-visual {
    position: relative;
    border-radius: 20px;
    padding: 8px;
    background: var(--wd-panel);
    border: 1px solid var(--wd-line);
    transition: border-color 0.4s ease, box-shadow 0.4s ease, transform 0.4s ease;
  }
  .wd-service-visual:hover {
    border-color: rgba(91,123,255,0.3);
    box-shadow: 0 30px 60px -20px var(--wd-accent-glow);
    transform: translateY(-4px);
  }
  .wd-service-visual img {
    border-radius: 14px;
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
  }
  .wd-service-visual:hover img {
    transform: scale(1.015);
  }

  /* Section divider */
  .wd-divider {
    border: none;
    height: 1px;
    background: var(--wd-line);
    max-width: 1136px;
    margin: 0 auto;
  }

  /* ═══════════════════════════════════════════════
     CLOSING PROMPT CTA SECTION
     ═══════════════════════════════════════════════ */
  .wd-cta-section {
    position: relative;
    padding: 120px 0 140px;
    background: var(--wd-panel);
    text-align: center;
    border-top: 1px solid var(--wd-line);
    overflow: hidden;
  }
  .wd-cta-section__inner {
    position: relative;
    z-index: 2;
    max-width: 680px;
    margin: 0 auto;
  }
  .wd-cta-section h2 {
    font-size: clamp(32px, 4.5vw, 54px);
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--wd-ink);
    margin-bottom: 24px;
  }
  .wd-cta-section h2 span {
    color: var(--wd-accent);
  }
  .wd-cta-section p {
    font-size: 17.5px;
    margin-bottom: 40px;
  }

  /* ═══════════════════════════════════════════════
     KEYFRAMES FOR ANIMATIONS
     ═══════════════════════════════════════════════ */
  @keyframes wd-float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-16px);
    }
  }
  @keyframes wd-scroll-wheel {
    0% {
      opacity: 1;
      top: 6px;
      height: 8px;
    }
    50% {
      opacity: 0.5;
      top: 18px;
      height: 4px;
    }
    100% {
      opacity: 0;
      top: 24px;
      height: 0px;
    }
  }

  /* ═══════════════════════════════════════════════
     RESPONSIVE BREAKPOINTS
     ═══════════════════════════════════════════════ */
  @media (max-width: 992px) {
    .wd-hero {
      height: auto;
      padding: 100px 0 80px;
    }
    .wd-hero__inner {
      grid-template-columns: 1fr;
      gap: 52px;
      text-align: center;
    }
    .wd-hero__image-wrapper {
      max-width: 440px;
      margin: 0 auto;
    }
    .wd-scroll-cue {
      display: none;
    }

    .wd-service-item, 
    .wd-service-item.alternate {
      grid-template-columns: 1fr;
      gap: 48px;
      padding: 64px 0;
    }
    .wd-service-item.alternate .wd-service-text {
      order: 1;
    }
    .wd-service-item.alternate .wd-service-visual {
      order: 2;
    }
    .wd-service-visual {
      max-width: 520px;
      margin: 0 auto;
    }
  }

  @media (max-width: 640px) {
    .wd-container {
      padding: 0 20px;
    }
    .wd-hero__text h1 {
      font-size: clamp(38px, 9vw, 56px);
    }
    .wd-service-text h2 {
      font-size: 28px;
    }
    .wd-tag {
      font-size: 11px;
      padding: 4px 10px;
    }
    .wd-bullets li {
      font-size: 14.2px;
    }
    .wd-btn {
      width: 100%;
      justify-content: center;
    }
    .wd-cta-section {
      padding: 80px 0 100px;
    }
  }
</style>
</head>
<body class="brand-page">

<?php include '../header.php'; ?>

<!-- Ambient Glows -->
<div class="wd-glow-orb wd-glow-1"></div>
<div class="wd-glow-orb wd-glow-2"></div>

<main>

  <!-- ============ HERO SECTION (Only contains title & image/animation) ============ -->
  <section class="wd-hero">
    <div class="wd-container wd-hero__inner">
      <div class="wd-hero__text">
        <h1>
          Web
          <span>Development</span>
        </h1>
      </div>
      <div class="wd-hero__visual">
        <div class="wd-hero__image-wrapper">
          <img src="../assets/images/web_dev_hero_futuristic.png" alt="Futuristic Web Development Grid Visual">
        </div>
      </div>
    </div>
    
    <!-- Bouncing Scroll Indicator -->
    <div class="wd-scroll-cue" onclick="document.getElementById('wd-services-start').scrollIntoView({ behavior: 'smooth' });">
      <span></span>
      Scroll to explore
    </div>
  </section>

  <!-- ============ SCROLL REVEAL WRAPPER ============ -->
  <!-- Initially hidden, only shown and animated after scrolling down -->
  <div id="wd-services-start" class="wd-reveal-content">
    
    <section class="wd-services-list">
      <div class="wd-container">
        
        <!-- SUB-SERVICE 1: Custom Web Application -->
        <div class="wd-service-item">
          <div class="wd-service-text">
            <span class="wd-tag">Capability 01</span>
            <h2>Custom Web <span>Applications</span></h2>
            <p>
              We design and construct tailored web software built from scratch around your specific business logic, data models, and workflow routines. Replace rigid, costly SaaS subscriptions with a high-performance system you own fully.
            </p>
            <ul class="wd-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Management Dashboards &amp; Client Portals
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Custom CRM, ERP, and Database Infrastructure
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Robust System Integration via Tailored API layers
              </li>
            </ul>
            <a href="custom-web-development.php" class="wd-btn">
              Explore Custom Apps
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
          
          <div class="wd-service-visual">
            <img src="../assets/images/sub-custom-web-app.png" alt="Futuristic Custom Web Application Dashboard Mockup">
          </div>
        </div>

        <!-- SUB-SERVICE 2: Web Design Service -->
        <div class="wd-service-item alternate">
          <div class="wd-service-text">
            <span class="wd-tag">Capability 02</span>
            <h2>Web Design <span>Service</span></h2>
            <p>
              Stunning user interfaces that balance brand aesthetics with clear conversions. We combine wireframing, interactive high-fidelity prototyping, and modern typographic visual systems to craft digital journeys that delight your audience.
            </p>
            <ul class="wd-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                UI/UX Prototypes &amp; Wireframing
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Custom Design Systems &amp; Guidelines
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Interaction Architecture &amp; Micro-animations
              </li>
            </ul>
            <a href="web-development.php?service=web-design-service" class="wd-btn">
              View Web Design
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
          
          <div class="wd-service-visual">
            <img src="../assets/images/sub-web-design.png" alt="Futuristic Web Design Concept Canvas Mockup">
          </div>
        </div>

        <!-- SUB-SERVICE 3: E-commerce Solutions -->
        <div class="wd-service-item">
          <div class="wd-service-text">
            <span class="wd-tag">Capability 03</span>
            <h2>E-commerce <span>Solutions</span></h2>
            <p>
              High-converting digital storefronts built to scale with transaction volume. From specialized custom cart operations to inventory synchronization dashboards, we supply retail logic built for speed, security, and high performance.
            </p>
            <ul class="wd-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Custom Cart, Checkout, and Funnel Optimizations
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Seamless Payment Gateway &amp; Logistics Integrations
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Advanced Storefront Performance Tuning
              </li>
            </ul>
            <a href="ecommerce-solutions.php" class="wd-btn">
              See E-Commerce Solutions
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
          
          <div class="wd-service-visual">
            <img src="../assets/images/sub-ecommerce.png" alt="Futuristic E-Commerce Storefront Illustration Mockup">
          </div>
        </div>

        <!-- SUB-SERVICE 4: Website Development -->
        <div class="wd-service-item alternate">
          <div class="wd-service-text">
            <span class="wd-tag">Capability 04</span>
            <h2>Website <span>Development</span></h2>
            <p>
              Corporate websites designed to act as your ultimate business engine. Built on incredibly fast, SEO-friendly framework infrastructure, our websites load instantly, deliver flawless responsive layouts, and are easy to maintain.
            </p>
            <ul class="wd-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                SEO-optimized, Semantic Markup Structure
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                High-Performance Server and Static Builds
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                CMS Integration (WordPress, headless, Custom)
              </li>
            </ul>
            <a href="website-development.php" class="wd-btn">
              Discover Website Dev
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
          
          <div class="wd-service-visual">
            <img src="../assets/images/sub-website-dev.png" alt="Futuristic Website Development Workspace Code Mockup">
          </div>
        </div>

      </div>
    </section>

    <!-- ============ CLOSING CTA SECTION ============ -->
    <section class="wd-cta-section">
      <div class="wd-glow-orb wd-glow-1" style="top: 0;"></div>
      <div class="wd-container wd-cta-section__inner">
        <h2>Let's build your <span>digital future</span> together.</h2>
        <p>Whether you require a dynamic SaaS dashboard, custom e-commerce solution, or an outstanding corporate web presence, our engineering team is ready to deliver.</p>
        <a href="../contact.php" class="wd-btn">
          Start a project
          <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </section>

  </div>

</main>

<!-- Scroll Reveal and Bouncing indicator JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var revealWrapper = document.getElementById('wd-services-start');
  var serviceItems  = document.querySelectorAll('.wd-service-item');

  // Trigger main content container reveal on scroll
  function handleMainReveal() {
    var scrollPos = window.scrollY || window.pageYOffset;
    if (scrollPos > 40) {
      revealWrapper.classList.add('is-revealed');
      window.removeEventListener('scroll', handleMainReveal);
    }
  }
  window.addEventListener('scroll', handleMainReveal);
  // Trigger immediately in case page is loaded scrolled down
  handleMainReveal();

  // IntersectionObserver to animate individual sub-service sections as they enter the screen
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    serviceItems.forEach(function(item) {
      observer.observe(item);
    });
  } else {
    // Fallback if IntersectionObserver is not supported
    serviceItems.forEach(function(item) {
      item.classList.add('is-visible');
    });
  }
});
</script>

<?php include '../footer.php'; ?>
</body>
</html>
