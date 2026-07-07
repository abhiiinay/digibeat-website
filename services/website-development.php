<?php
/**
 * services/website-development.php
 * Website Development service page — custom design, light theme, mixed color headings, fully responsive.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Development — Digibeat</title>
<style>
  :root {
    --wde-bg: #ffffff;
    --wde-panel: #f8f9fc;
    --wde-ink: #0f111a;
    --wde-muted: #5c6275;
    --wde-line: #e6e8f4;
    --wde-accent: #5546e8;
    --wde-accent-rgb: 85, 70, 232;
    --wde-accent-soft: rgba(85, 70, 232, 0.06);
    --wde-accent-soft-strong: rgba(85, 70, 232, 0.12);
    
    --wde-teal: #00e5a3;
    --wde-teal-soft: rgba(0, 229, 163, 0.08);
    
    --font-heading: 'Inter', -apple-system, sans-serif;
    --font-body: 'Hellix', -apple-system, sans-serif;
  }

  /* Force white background globally to override style.css dark defaults */
  html, body {
    background-color: var(--wde-bg) !important;
    background: var(--wde-bg) !important;
    color: var(--wde-ink) !important;
    font-family: var(--font-body);
    max-width: 100%;
    overflow-x: hidden;
    margin: 0;
    padding: 0;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-heading);
    margin: 0;
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  img, svg {
    max-width: 100%;
    height: auto;
  }

  .wde-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Typography / Heading mixed color styling */
  .wde-title-mixed {
    color: var(--wde-ink);
    line-height: 1.15;
    font-weight: 800;
  }
  .wde-title-mixed span {
    color: var(--wde-accent);
    position: relative;
    display: inline-block;
  }

  .wde-title-mixed span::after {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--wde-accent-soft-strong);
    border-radius: 2px;
    z-index: -1;
  }

  /* Decorative section dividers */
  .wde-divider {
    border: none;
    height: 1px;
    background: var(--wde-line);
    margin: 0 auto;
    max-width: 1136px;
  }

  /* ============ HERO SECTION ============ */
  .wde-hero {
    position: relative;
    overflow: hidden;
    background: var(--wde-bg);
    padding: 130px 0 90px;
  }
  
  .wde-hero::before {
    content: "";
    position: absolute;
    top: -180px; right: -120px;
    width: 580px; height: 580px;
    background: radial-gradient(circle, rgba(85, 70, 232, 0.08), transparent 70%);
    pointer-events: none;
  }

  .wde-hero::after {
    content: "";
    position: absolute;
    bottom: -220px; left: -100px;
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(0, 229, 163, 0.06), transparent 70%);
    pointer-events: none;
  }

  .wde-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 64px;
    align-items: center;
  }

  .wde-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--wde-accent);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 24px;
    background: var(--wde-accent-soft);
    padding: 6px 14px;
    border-radius: 99px;
    border: 1px solid rgba(85, 70, 232, 0.15);
  }

  .wde-eyebrow-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--wde-accent);
    box-shadow: 0 0 0 4px var(--wde-accent-soft-strong);
  }

  .wde-hero h1 {
    font-size: clamp(34px, 4.5vw, 56px);
    margin-bottom: 24px;
  }

  .wde-hero-desc {
    color: var(--wde-muted);
    font-size: 17px;
    line-height: 1.7;
    margin-bottom: 36px;
  }

  .wde-hero-ctas {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
  }

  .wde-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 15px 30px;
    border-radius: 99px;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    border: none;
  }

  .wde-btn-primary {
    background: var(--wde-accent);
    color: #ffffff;
    box-shadow: 0 10px 25px -10px rgba(85, 70, 232, 0.4);
  }

  .wde-btn-primary:hover {
    background: #4132cd;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -10px rgba(85, 70, 232, 0.5);
  }

  .wde-btn-secondary {
    background: transparent;
    color: var(--wde-ink);
    border: 1.5px solid var(--wde-line);
  }

  .wde-btn-secondary:hover {
    border-color: var(--wde-accent);
    color: var(--wde-accent);
    background: rgba(85, 70, 232, 0.02);
    transform: translateY(-2px);
  }

  /* Styled Glassmorphic Hero mockup visual */
  .wde-hero-visual {
    position: relative;
    border-radius: 20px;
    padding: 12px;
    background: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(240,242,249,0.3));
    border: 1px solid var(--wde-line);
    box-shadow: 0 40px 80px -40px rgba(15,17,26,0.15);
  }

  .wde-hero-img-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.8);
    aspect-ratio: 4/3;
  }

  .wde-hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);
  }

  .wde-hero-visual:hover .wde-hero-img {
    transform: scale(1.03);
  }

  /* Floating interactive cards in Hero */
  .wde-floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 14px 20px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    box-shadow: 0 15px 35px -10px rgba(15, 17, 26, 0.12);
    display: flex;
    align-items: center;
    gap: 12px;
    animation: float 6s ease-in-out infinite;
  }

  .wde-floating-card-1 {
    top: 25px;
    left: -35px;
    animation-delay: 0s;
  }

  .wde-floating-card-2 {
    bottom: 30px;
    right: -25px;
    animation-delay: 3s;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  .wde-card-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--wde-accent-soft-strong);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--wde-accent);
  }

  .wde-card-icon.green {
    background: var(--wde-teal-soft);
    color: var(--wde-teal);
  }

  .wde-card-info h5 {
    font-size: 13.5px;
    font-weight: 700;
    color: var(--wde-ink);
  }

  .wde-card-info p {
    font-size: 11px;
    color: var(--wde-muted);
    margin: 2px 0 0 0;
  }

  /* ============ APPROACH SECTION ============ */
  .wde-approach {
    padding: 100px 0;
    background: var(--wde-bg);
  }

  .wde-approach__grid {
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    gap: 80px;
    align-items: center;
  }

  .wde-approach__left {
    position: relative;
  }

  .wde-approach__left .wde-title-mixed {
    font-size: clamp(30px, 3.5vw, 44px);
    margin-bottom: 24px;
  }

  .wde-approach__left p {
    font-size: 16px;
    line-height: 1.7;
    color: var(--wde-muted);
    margin-bottom: 28px;
  }

  .wde-title-icon-wrap {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
  }

  .wde-double-chevron {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--wde-teal-soft);
    border-radius: 12px;
    color: var(--wde-teal);
  }

  .wde-approach__list {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .wde-list-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px;
    border-radius: 12px;
    transition: background-color 0.2s ease;
  }

  .wde-list-item:hover {
    background-color: var(--wde-panel);
  }

  .wde-list-item__icon {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--wde-teal-soft);
    color: var(--wde-teal);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
  }

  .wde-list-item__icon svg {
    width: 14px;
    height: 14px;
    stroke-width: 3;
  }

  .wde-list-item__text h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--wde-ink);
    margin-bottom: 6px;
  }

  .wde-list-item__text p {
    font-size: 14.5px;
    color: var(--wde-muted);
    line-height: 1.6;
    margin: 0;
  }

  /* ============ WHAT WE OFFER / DEVELOPMENT SPLIT ============ */
  .wde-split {
    padding: 110px 0;
    background: var(--wde-panel);
    border-top: 1px solid var(--wde-line);
    border-bottom: 1px solid var(--wde-line);
  }

  .wde-split__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
  }

  .wde-split__col {
    background: var(--wde-bg);
    border-radius: 24px;
    padding: 48px 40px;
    border: 1px solid var(--wde-line);
    box-shadow: 0 10px 30px -10px rgba(15, 17, 26, 0.03);
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .wde-split__col.highlighted {
    border-color: rgba(85, 70, 232, 0.25);
    box-shadow: 0 25px 50px -20px rgba(85, 70, 232, 0.08);
  }

  .wde-split__col .wde-title-mixed {
    font-size: 28px;
    margin-bottom: 18px;
  }

  .wde-split__col .wde-col-intro {
    font-size: 15.5px;
    color: var(--wde-muted);
    line-height: 1.75;
    margin-bottom: 32px;
  }

  /* Tech Badge Layout */
  .wde-offer-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-top: auto;
  }

  .wde-offer-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px 22px;
    border-radius: 16px;
    background: var(--wde-panel);
    border: 1px solid var(--wde-line);
    transition: all 0.2s ease;
  }

  .wde-offer-card:hover {
    background: var(--wde-bg);
    border-color: var(--wde-accent);
    transform: translateX(4px);
    box-shadow: 0 8px 20px -8px rgba(85, 70, 232, 0.1);
  }

  .wde-offer-card__icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #ffffff;
    border: 1px solid var(--wde-line);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--wde-accent);
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
  }

  .wde-offer-card__text h5 {
    font-size: 15px;
    font-weight: 700;
    color: var(--wde-ink);
    margin-bottom: 4px;
  }

  .wde-offer-card__text p {
    font-size: 13px;
    color: var(--wde-muted);
    margin: 0;
    line-height: 1.4;
  }

  /* Custom badges in Offer section */
  .wde-approach-features {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: auto;
  }

  .wde-approach-pill {
    background: var(--wde-panel);
    border: 1px solid var(--wde-line);
    border-radius: 12px;
    padding: 12px 18px;
    font-size: 14px;
    font-weight: 600;
    color: var(--wde-ink);
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
  }

  .wde-approach-pill:hover {
    background: var(--wde-accent-soft);
    border-color: var(--wde-accent);
    color: var(--wde-accent);
  }

  .wde-approach-pill span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--wde-teal);
  }

  /* ============ PROCESS SECTION ============ */
  .wde-process {
    padding: 110px 0 100px;
    background: var(--wde-bg);
  }

  .wde-process__head {
    text-align: center;
    max-width: 620px;
    margin: 0 auto 72px;
  }

  .wde-process__head h2 {
    font-size: clamp(28px, 3.5vw, 42px);
    margin-bottom: 16px;
  }

  .wde-process__head p {
    color: var(--wde-muted);
    font-size: 16px;
    line-height: 1.7;
    margin: 0;
  }

  .wde-track {
    position: relative;
    padding-top: 30px;
  }

  .wde-track__line {
    position: absolute;
    top: 36px;
    left: 0;
    width: 100%;
    height: 90px;
    overflow: visible;
  }

  .wde-track__line path {
    fill: none;
    stroke: var(--wde-line);
    stroke-width: 2;
  }

  .wde-track__line .wde-track__live {
    stroke: var(--wde-accent);
    stroke-dasharray: 14 1200;
    animation: wde-flow 6s linear infinite;
  }

  @keyframes wde-flow {
    0%   { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -1214; }
  }

  .wde-steps {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .wde-step {
    text-align: center;
  }

  .wde-step__dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid var(--wde-accent);
    margin: 0 auto 22px;
    position: relative;
    z-index: 1;
    transition: transform 0.2s ease, background-color 0.2s ease;
  }

  .wde-step:hover .wde-step__dot {
    transform: scale(1.3);
    background-color: var(--wde-accent);
  }

  .wde-step__num {
    font-size: 13px;
    color: var(--wde-accent);
    margin-bottom: 10px;
    letter-spacing: 0.06em;
    font-weight: 700;
  }

  .wde-step h4 {
    font-size: 16.5px;
    font-weight: 700;
    color: var(--wde-ink);
    margin: 0 0 10px;
  }

  .wde-step p {
    color: var(--wde-muted);
    font-size: 13.5px;
    line-height: 1.6;
    margin: 0;
  }

  /* ============ CTA SECTION ============ */
  .wde-cta {
    padding: 100px 0;
    background: var(--wde-bg);
  }

  .wde-cta__inner {
    background: linear-gradient(135deg, var(--wde-panel), #ffffff);
    border: 1px solid var(--wde-line);
    border-radius: 32px;
    padding: 80px 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 30px 60px -30px rgba(85, 70, 232, 0.15);
  }

  .wde-cta__inner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(85, 70, 232, 0.08), transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(0, 229, 163, 0.06), transparent 50%);
    pointer-events: none;
  }

  .wde-cta__inner h2 {
    font-size: clamp(28px, 4vw, 44px);
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
  }

  .wde-cta__inner p {
    font-size: 16.5px;
    color: var(--wde-muted);
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto 36px;
    position: relative;
    z-index: 1;
  }

  .wde-cta__inner .wde-hero-ctas {
    justify-content: center;
    position: relative;
    z-index: 1;
  }

  /* ============ RESPONSIVE BREAKPOINTS ============ */
  @media (max-width: 1024px) {
    .wde-container { padding: 0 24px; }
    .wde-hero { padding: 100px 0 70px; }
    .wde-hero__grid { grid-template-columns: 1fr; gap: 48px; }
    .wde-hero-visual { max-width: 520px; margin: 0 auto; }
    .wde-floating-card-1 { left: -15px; }
    .wde-floating-card-2 { right: -15px; }

    .wde-approach { padding: 80px 0; }
    .wde-approach__grid { grid-template-columns: 1fr; gap: 48px; }
    .wde-approach__left { text-align: center; }
    .wde-title-icon-wrap { justify-content: center; }

    .wde-split { padding: 80px 0; }
    .wde-split__grid { grid-template-columns: 1fr; gap: 32px; }
    .wde-split__col { padding: 36px 28px; }

    .wde-process { padding: 80px 0 70px; }
    .wde-steps { grid-template-columns: 1fr; gap: 32px; }
    .wde-track__line { display: none; }
    .wde-step {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      text-align: left;
    }
    .wde-step__dot { margin: 4px 0 0; flex-shrink: 0; }
  }

  @media (max-width: 640px) {
    .wde-container { padding: 0 16px; }
    .wde-hero { padding: 70px 0 50px; }
    .wde-hero h1 { font-size: 32px; }
    .wde-hero-desc { font-size: 15.5px; }
    .wde-hero-ctas { flex-direction: column; align-items: stretch; }
    .wde-btn { width: 100%; }

    .wde-approach__left .wde-title-mixed { font-size: 26px; }
    .wde-list-item { padding: 10px; gap: 12px; }

    .wde-split__col .wde-title-mixed { font-size: 22px; }
    .wde-offer-card { padding: 14px 18px; }
    .wde-approach-features { gap: 8px; }
    .wde-approach-pill { padding: 10px 14px; font-size: 13px; }

    .wde-cta__inner { padding: 48px 24px; border-radius: 20px; }
  }
</style>
</head>
<body>

<?php include '../header.php'; ?>

<!-- ============ HERO ============ -->
<section class="wde-hero">
  <div class="wde-container wde-hero__grid">
    <div>
      <div class="wde-eyebrow">
        <span class="wde-eyebrow-dot"></span>
        Digital Web Presence
      </div>
      <h1 class="wde-title-mixed">
        Building Websites That <span>Perform</span>, <span>Engage</span>, and <span>Grow</span>
      </h1>
      <p class="wde-hero-desc">
        At Digibeat, we specialize in developing high-performing, responsive, and user-friendly websites that represent your brand and drive results. Whether it's a business portfolio, a corporate platform, or a service-based site, we create web solutions that are not only visually appealing but also built for speed, security, and scalability.
      </p>
      <div class="wde-hero-ctas">
        <a href="/digibeat/contact.php" class="wde-btn wde-btn-primary">Start a project</a>
        <a href="#wde-process" class="wde-btn wde-btn-secondary">Our Process</a>
      </div>
    </div>

    <div class="wde-hero-visual">
      <div class="wde-hero-img-wrapper">
        <img src="/digibeat/assets/images/web-dev-hero.png" alt="Futuristic Website Development Mockup" class="wde-hero-img">
      </div>
      
      <!-- Floating Card 1: SEO Optimization -->
      <div class="wde-floating-card wde-floating-card-1">
        <div class="wde-card-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <div class="wde-card-info">
          <h5>SEO Optimized</h5>
          <p>+85% Visibility</p>
        </div>
      </div>

      <!-- Floating Card 2: Performance Score -->
      <div class="wde-floating-card wde-floating-card-2">
        <div class="wde-card-icon green">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
        <div class="wde-card-info">
          <h5>Performance</h5>
          <p>Lighthouse 99/100</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="wde-divider">

<!-- ============ OUR APPROACH ============ -->
<section class="wde-approach">
  <div class="wde-container wde-approach__grid">
    <div class="wde-approach__left">
      <div class="wde-title-icon-wrap">
        <div class="wde-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h2 class="wde-title-mixed">Our <span>Approach</span></h2>
      </div>
      <p>
        We combine creativity, functionality, and the latest web technologies to deliver websites that do more than just look good — they perform. Our approach focuses on user experience, scalability, and performance optimization to ensure long-term success.
      </p>
      
      <!-- Interactive SVG Web Visual -->
      <svg viewBox="0 0 380 180" fill="none" style="max-width: 320px; display: block; margin: 0 auto;">
        <rect x="10" y="10" width="360" height="160" rx="16" fill="var(--wde-panel)" stroke="var(--wde-line)" stroke-width="1.5"/>
        <circle cx="36" cy="30" r="4" fill="#ff5f56"/>
        <circle cx="48" cy="30" r="4" fill="#ffbd2e"/>
        <circle cx="60" cy="30" r="4" fill="#27c93f"/>
        <path d="M20 50h340v1M60 90h220M60 114h180" stroke="var(--wde-line)" stroke-width="2" stroke-linecap="round"/>
        <path d="M60 90h150" stroke="var(--wde-accent)" stroke-width="4" stroke-linecap="round"/>
        
        <!-- Floating wireframe tags -->
        <g>
          <animateTransform attributeName="transform" type="translate" values="0 0; 0 -8; 0 0" dur="4s" repeatCount="indefinite"/>
          <rect x="290" y="70" width="60" height="50" rx="8" fill="#ffffff" stroke="var(--wde-line)" stroke-width="1.5"/>
          <circle cx="320" cy="95" r="12" fill="var(--wde-teal-soft)" stroke="var(--wde-teal)" stroke-width="1"/>
          <path d="M316 95h8M320 91v8" stroke="var(--wde-teal)" stroke-width="2" stroke-linecap="round"/>
        </g>
      </svg>
    </div>

    <div class="wde-approach__right">
      <div class="wde-approach__list">
        <div class="wde-list-item">
          <div class="wde-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="wde-list-item__text">
            <h4>User-Centric Design</h4>
            <p>We map layout decisions around target search intent, helping visitors easily find information and take action.</p>
          </div>
        </div>

        <div class="wde-list-item">
          <div class="wde-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="wde-list-item__text">
            <h4>Performance-Optimized</h4>
            <p>Your site will load instantly. We optimize scripts, stylesheets, and images for maximum Core Web Vitals performance.</p>
          </div>
        </div>

        <div class="wde-list-item">
          <div class="wde-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="wde-list-item__text">
            <h4>SEO-Ready</h4>
            <p>Built with search engines in mind, featuring structured schemas, meta configurations, and indexable layouts from day one.</p>
          </div>
        </div>

        <div class="wde-list-item">
          <div class="wde-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="wde-list-item__text">
            <h4>Secure Architecture</h4>
            <p>Using robust coding practices, SSL security layers, and secure database connections to protect business data.</p>
          </div>
        </div>

        <div class="wde-list-item">
          <div class="wde-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="wde-list-item__text">
            <h4>Easy Management</h4>
            <p>Admin dashboards that allow non-technical members to publish content, update text, and manage layouts easily.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE OFFER / TECH SPLIT ============ -->
<section class="wde-split">
  <div class="wde-container wde-split__grid">
    <!-- What We Offer Column -->
    <div class="wde-split__col highlighted">
      <div class="wde-title-icon-wrap">
        <div class="wde-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h3 class="wde-title-mixed">What We <span>Offer ?</span></h3>
      </div>
      <p class="wde-col-intro">
        At Digibeat, we offer a full range of web development services to meet diverse business needs — from basic business sites to advanced, CMS-driven platforms.
      </p>
      
      <div class="wde-offer-list">
        <div class="wde-offer-card">
          <div class="wde-offer-card__icon">CB</div>
          <div class="wde-offer-card__text">
            <h5>Corporate &amp; Business Website Development</h5>
            <p>Establish authority online with highly professional, content-rich corporate portals.</p>
          </div>
        </div>

        <div class="wde-offer-card">
          <div class="wde-offer-card__icon">LP</div>
          <div class="wde-offer-card__text">
            <h5>Landing Page &amp; Portfolio Websites</h5>
            <p>High-conversion focused landing pages to power your marketing funnels and lead generation.</p>
          </div>
        </div>

        <div class="wde-offer-card">
          <div class="wde-offer-card__icon">RD</div>
          <div class="wde-offer-card__text">
            <h5>Website Redesign &amp; Revamp</h5>
            <p>Give your legacy store or corporate site a modern design refresh and underlying speed boost.</p>
          </div>
        </div>

        <div class="wde-offer-card">
          <div class="wde-offer-card__icon">MS</div>
          <div class="wde-offer-card__text">
            <h5>Maintenance &amp; Support</h5>
            <p>Continuous uptime tracking, security updates, server backups, and content updates.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Technologies We Use Column -->
    <div class="wde-split__col">
      <div class="wde-title-icon-wrap">
        <div class="wde-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h3 class="wde-title-mixed">Our Development <span>Approach</span></h3>
      </div>
      <p class="wde-col-intro">
        At Digibeat, we follow a user-centric and goal-driven development process to craft websites that not only look stunning but also perform seamlessly. From the initial concept to the final launch, every line of code and design decision is made to enhance functionality, speed, and user experience. We focus on building secure, scalable, and responsive websites that adapt perfectly to any device and grow with your business needs.
      </p>

      <div class="wde-approach-features">
        <div class="wde-approach-pill"><span></span>User Experience Focus</div>
        <div class="wde-approach-pill"><span></span>Semantic HTML5 / CSS3</div>
        <div class="wde-approach-pill"><span></span>Responsive CSS Layouts</div>
        <div class="wde-approach-pill"><span></span>Speed Optimization Checks</div>
        <div class="wde-approach-pill"><span></span>CMS Customizations</div>
        <div class="wde-approach-pill"><span></span>Database Governance</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="wde-process" id="wde-process">
  <div class="wde-container">
    <div class="wde-process__head">
      <h2 class="wde-title-mixed">Our <span>Process</span></h2>
      <p>Five steps, one continuous thread from first conversation to launch day.</p>
    </div>

    <div class="wde-track">
      <svg class="wde-track__line" viewBox="0 0 1000 90" preserveAspectRatio="none">
        <path d="M100 4 H900" />
        <path class="wde-track__live" d="M100 4 H900" />
      </svg>

      <div class="wde-steps">
        <div class="wde-step">
          <div class="wde-step__dot"></div>
          <div class="wde-step__num">01</div>
          <h4>Discovery &amp; Research</h4>
          <p>Understanding your goals, audience, and brand identity.</p>
        </div>
        <div class="wde-step">
          <div class="wde-step__dot"></div>
          <div class="wde-step__num">02</div>
          <h4>Planning &amp; Wireframing</h4>
          <p>Creating the website structure and layout blueprint.</p>
        </div>
        <div class="wde-step">
          <div class="wde-step__dot"></div>
          <div class="wde-step__num">03</div>
          <h4>Design &amp; Development</h4>
          <p>Combining UI/UX design with clean, efficient coding.</p>
        </div>
        <div class="wde-step">
          <div class="wde-step__dot"></div>
          <div class="wde-step__num">04</div>
          <h4>Testing &amp; Quality Assurance</h4>
          <p>Checking performance, compatibility, and security.</p>
        </div>
        <div class="wde-step">
          <div class="wde-step__dot"></div>
          <div class="wde-step__num">05</div>
          <h4>Launch &amp; Ongoing Support</h4>
          <p>Deploying your website with post-launch maintenance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="wde-cta">
  <div class="wde-container">
    <div class="wde-cta__inner">
      <h2 class="wde-title-mixed">Ready to build a <span>stunning website</span>?</h2>
      <p>
        Let's work together to create an engaging digital representation of your brand that drives growth and converts users.
      </p>
      <div class="wde-hero-ctas">
        <a href="/digibeat/contact.php" class="wde-btn wde-btn-primary">Contact Us Today</a>
        <a href="/digibeat/about" class="wde-btn wde-btn-secondary">Learn More</a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
