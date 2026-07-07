<?php
/**
 * ecommerce-solutions.php
 * E-commerce Solutions service page — custom design, light theme, mixed color headings, fully responsive.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-commerce Solutions — Digibeat</title>
<style>
  :root {
    --ecs-bg: #ffffff;
    --ecs-panel: #f8f9fc;
    --ecs-ink: #0f111a;
    --ecs-muted: #5c6275;
    --ecs-line: #e6e8f4;
    --ecs-accent: #5546e8;
    --ecs-accent-rgb: 85, 70, 232;
    --ecs-accent-soft: rgba(85, 70, 232, 0.06);
    --ecs-accent-soft-strong: rgba(85, 70, 232, 0.12);
    
    --ecs-teal: #00e5a3;
    --ecs-teal-soft: rgba(0, 229, 163, 0.08);
    
    --font-heading: 'Inter', -apple-system, sans-serif;
    --font-body: 'Hellix', -apple-system, sans-serif;
  }

  /* Force white background globally to override style.css dark defaults */
  html, body {
    background-color: var(--ecs-bg) !important;
    background: var(--ecs-bg) !important;
    color: var(--ecs-ink) !important;
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

  .ecs-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Typography / Heading mixed color styling */
  .ecs-title-mixed {
    color: var(--ecs-ink);
    line-height: 1.15;
    font-weight: 800;
  }
  .ecs-title-mixed span {
    color: var(--ecs-accent);
    position: relative;
    display: inline-block;
  }

  .ecs-title-mixed span::after {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--ecs-accent-soft-strong);
    border-radius: 2px;
    z-index: -1;
  }

  /* Decorative section dividers */
  .ecs-divider {
    border: none;
    height: 1px;
    background: var(--ecs-line);
    margin: 0 auto;
    max-width: 1136px;
  }

  /* ============ HERO SECTION ============ */
  .ecs-hero {
    position: relative;
    overflow: hidden;
    background: var(--ecs-bg);
    padding: 130px 0 90px;
  }
  
  .ecs-hero::before {
    content: "";
    position: absolute;
    top: -180px; right: -120px;
    width: 580px; height: 580px;
    background: radial-gradient(circle, rgba(85, 70, 232, 0.08), transparent 70%);
    pointer-events: none;
  }

  .ecs-hero::after {
    content: "";
    position: absolute;
    bottom: -220px; left: -100px;
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(0, 229, 163, 0.06), transparent 70%);
    pointer-events: none;
  }

  .ecs-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 64px;
    align-items: center;
  }

  .ecs-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--ecs-accent);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 24px;
    background: var(--ecs-accent-soft);
    padding: 6px 14px;
    border-radius: 99px;
    border: 1px solid rgba(85, 70, 232, 0.15);
  }

  .ecs-eyebrow-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--ecs-accent);
    box-shadow: 0 0 0 4px var(--ecs-accent-soft-strong);
  }

  .ecs-hero h1 {
    font-size: clamp(34px, 4.5vw, 56px);
    margin-bottom: 24px;
  }

  .ecs-hero-desc {
    color: var(--ecs-muted);
    font-size: 17px;
    line-height: 1.7;
    margin-bottom: 36px;
  }

  .ecs-hero-ctas {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
  }

  .ecs-btn {
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

  .ecs-btn-primary {
    background: var(--ecs-accent);
    color: #ffffff;
    box-shadow: 0 10px 25px -10px rgba(85, 70, 232, 0.4);
  }

  .ecs-btn-primary:hover {
    background: #4132cd;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -10px rgba(85, 70, 232, 0.5);
  }

  .ecs-btn-secondary {
    background: transparent;
    color: var(--ecs-ink);
    border: 1.5px solid var(--ecs-line);
  }

  .ecs-btn-secondary:hover {
    border-color: var(--ecs-accent);
    color: var(--ecs-accent);
    background: rgba(85, 70, 232, 0.02);
    transform: translateY(-2px);
  }

  /* Styled Glassmorphic Hero mockup visual */
  .ecs-hero-visual {
    position: relative;
    border-radius: 20px;
    padding: 12px;
    background: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(240,242,249,0.3));
    border: 1px solid var(--ecs-line);
    box-shadow: 0 40px 80px -40px rgba(15,17,26,0.15);
  }

  .ecs-hero-img-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.8);
    aspect-ratio: 4/3;
  }

  .ecs-hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);
  }

  .ecs-hero-visual:hover .ecs-hero-img {
    transform: scale(1.03);
  }

  /* Floating interactive cards in Hero */
  .ecs-floating-card {
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

  .ecs-floating-card-1 {
    top: 25px;
    left: -35px;
    animation-delay: 0s;
  }

  .ecs-floating-card-2 {
    bottom: 30px;
    right: -25px;
    animation-delay: 3s;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  .ecs-card-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--ecs-accent-soft-strong);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ecs-accent);
  }

  .ecs-card-icon.green {
    background: var(--ecs-teal-soft);
    color: var(--ecs-teal);
  }

  .ecs-card-info h5 {
    font-size: 13.5px;
    font-weight: 700;
    color: var(--ecs-ink);
  }

  .ecs-card-info p {
    font-size: 11px;
    color: var(--ecs-muted);
    margin: 2px 0 0 0;
  }

  /* ============ STORE YOUR WAY ============ */
  .ecs-store-way {
    padding: 100px 0;
    background: var(--ecs-bg);
  }

  .ecs-store-way__grid {
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    gap: 80px;
    align-items: center;
  }

  .ecs-store-way__left {
    position: relative;
  }

  .ecs-store-way__left .ecs-title-mixed {
    font-size: clamp(30px, 3.5vw, 44px);
    margin-bottom: 24px;
  }

  .ecs-store-way__left p {
    font-size: 16px;
    line-height: 1.7;
    color: var(--ecs-muted);
    margin-bottom: 28px;
  }

  .ecs-title-icon-wrap {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
  }

  .ecs-double-chevron {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--ecs-teal-soft);
    border-radius: 12px;
    color: var(--ecs-teal);
  }

  .ecs-store-way__list {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .ecs-list-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px;
    border-radius: 12px;
    transition: background-color 0.2s ease;
  }

  .ecs-list-item:hover {
    background-color: var(--ecs-panel);
  }

  .ecs-list-item__icon {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--ecs-teal-soft);
    color: var(--ecs-teal);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
  }

  .ecs-list-item__icon svg {
    width: 14px;
    height: 14px;
    stroke-width: 3;
  }

  .ecs-list-item__text h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--ecs-ink);
    margin-bottom: 6px;
  }

  .ecs-list-item__text p {
    font-size: 14.5px;
    color: var(--ecs-muted);
    line-height: 1.6;
    margin: 0;
  }

  /* ============ WHAT WE OFFER / TECH SPLIT ============ */
  .ecs-split {
    padding: 110px 0;
    background: var(--ecs-panel);
    border-top: 1px solid var(--ecs-line);
    border-bottom: 1px solid var(--ecs-line);
  }

  .ecs-split__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
  }

  .ecs-split__col {
    background: var(--ecs-bg);
    border-radius: 24px;
    padding: 48px 40px;
    border: 1px solid var(--ecs-line);
    box-shadow: 0 10px 30px -10px rgba(15, 17, 26, 0.03);
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .ecs-split__col.highlighted {
    border-color: rgba(85, 70, 232, 0.25);
    box-shadow: 0 25px 50px -20px rgba(85, 70, 232, 0.08);
  }

  .ecs-split__col .ecs-title-mixed {
    font-size: 28px;
    margin-bottom: 18px;
  }

  .ecs-split__col .ecs-col-intro {
    font-size: 15.5px;
    color: var(--ecs-muted);
    line-height: 1.75;
    margin-bottom: 32px;
  }

  /* Tech Badge Layout */
  .ecs-tech-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 16px;
    margin-top: auto;
  }

  .ecs-tech-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px 22px;
    border-radius: 16px;
    background: var(--ecs-panel);
    border: 1px solid var(--ecs-line);
    transition: all 0.2s ease;
  }

  .ecs-tech-card:hover {
    background: var(--ecs-bg);
    border-color: var(--ecs-accent);
    transform: translateX(4px);
    box-shadow: 0 8px 20px -8px rgba(85, 70, 232, 0.1);
  }

  .ecs-tech-card__icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #ffffff;
    border: 1px solid var(--ecs-line);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ecs-accent);
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
  }

  .ecs-tech-card__text h5 {
    font-size: 15px;
    font-weight: 700;
    color: var(--ecs-ink);
    margin-bottom: 4px;
  }

  .ecs-tech-card__text p {
    font-size: 13px;
    color: var(--ecs-muted);
    margin: 0;
    line-height: 1.4;
  }

  /* Custom badges in Offer section */
  .ecs-offer-features {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: auto;
  }

  .ecs-offer-pill {
    background: var(--ecs-panel);
    border: 1px solid var(--ecs-line);
    border-radius: 12px;
    padding: 12px 18px;
    font-size: 14px;
    font-weight: 600;
    color: var(--ecs-ink);
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
  }

  .ecs-offer-pill:hover {
    background: var(--ecs-accent-soft);
    border-color: var(--ecs-accent);
    color: var(--ecs-accent);
  }

  .ecs-offer-pill span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--ecs-teal);
  }

  /* ============ PROCESS SECTION ============ */
  .ecs-process {
    padding: 110px 0 100px;
    background: var(--ecs-bg);
  }

  .ecs-process__head {
    text-align: center;
    max-width: 620px;
    margin: 0 auto 72px;
  }

  .ecs-process__head h2 {
    font-size: clamp(28px, 3.5vw, 42px);
    margin-bottom: 16px;
  }

  .ecs-process__head p {
    color: var(--ecs-muted);
    font-size: 16px;
    line-height: 1.7;
    margin: 0;
  }

  .ecs-track {
    position: relative;
    padding-top: 30px;
  }

  .ecs-track__line {
    position: absolute;
    top: 36px;
    left: 0;
    width: 100%;
    height: 90px;
    overflow: visible;
  }

  .ecs-track__line path {
    fill: none;
    stroke: var(--ecs-line);
    stroke-width: 2;
  }

  .ecs-track__line .ecs-track__live {
    stroke: var(--ecs-accent);
    stroke-dasharray: 14 1200;
    animation: ecs-flow 6s linear infinite;
  }

  @keyframes ecs-flow {
    0%   { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -1214; }
  }

  .ecs-steps {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .ecs-step {
    text-align: center;
  }

  .ecs-step__dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid var(--ecs-accent);
    margin: 0 auto 22px;
    position: relative;
    z-index: 1;
    transition: transform 0.2s ease, background-color 0.2s ease;
  }

  .ecs-step:hover .ecs-step__dot {
    transform: scale(1.3);
    background-color: var(--ecs-accent);
  }

  .ecs-step__num {
    font-size: 13px;
    color: var(--ecs-accent);
    margin-bottom: 10px;
    letter-spacing: 0.06em;
    font-weight: 700;
  }

  .ecs-step h4 {
    font-size: 16.5px;
    font-weight: 700;
    color: var(--ecs-ink);
    margin: 0 0 10px;
  }

  .ecs-step p {
    color: var(--ecs-muted);
    font-size: 13.5px;
    line-height: 1.6;
    margin: 0;
  }

  /* ============ CTA SECTION ============ */
  .ecs-cta {
    padding: 100px 0;
    background: var(--ecs-bg);
  }

  .ecs-cta__inner {
    background: linear-gradient(135deg, var(--ecs-panel), #ffffff);
    border: 1px solid var(--ecs-line);
    border-radius: 32px;
    padding: 80px 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 30px 60px -30px rgba(85, 70, 232, 0.15);
  }

  .ecs-cta__inner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(85, 70, 232, 0.08), transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(0, 229, 163, 0.06), transparent 50%);
    pointer-events: none;
  }

  .ecs-cta__inner h2 {
    font-size: clamp(28px, 4vw, 44px);
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
  }

  .ecs-cta__inner p {
    font-size: 16.5px;
    color: var(--ecs-muted);
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto 36px;
    position: relative;
    z-index: 1;
  }

  .ecs-cta__inner .ecs-hero-ctas {
    justify-content: center;
    position: relative;
    z-index: 1;
  }

  /* ============ RESPONSIVE BREAKPOINTS ============ */
  @media (max-width: 1024px) {
    .ecs-container { padding: 0 24px; }
    .ecs-hero { padding: 100px 0 70px; }
    .ecs-hero__grid { grid-template-columns: 1fr; gap: 48px; }
    .ecs-hero-visual { max-width: 520px; margin: 0 auto; }
    .ecs-floating-card-1 { left: -15px; }
    .ecs-floating-card-2 { right: -15px; }

    .ecs-store-way { padding: 80px 0; }
    .ecs-store-way__grid { grid-template-columns: 1fr; gap: 48px; }
    .ecs-store-way__left { text-align: center; }
    .ecs-title-icon-wrap { justify-content: center; }

    .ecs-split { padding: 80px 0; }
    .ecs-split__grid { grid-template-columns: 1fr; gap: 32px; }
    .ecs-split__col { padding: 36px 28px; }

    .ecs-process { padding: 80px 0 70px; }
    .ecs-steps { grid-template-columns: 1fr; gap: 32px; }
    .ecs-track__line { display: none; }
    .ecs-step {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      text-align: left;
    }
    .ecs-step__dot { margin: 4px 0 0; flex-shrink: 0; }
  }

  @media (max-width: 640px) {
    .ecs-container { padding: 0 16px; }
    .ecs-hero { padding: 70px 0 50px; }
    .ecs-hero h1 { font-size: 32px; }
    .ecs-hero-desc { font-size: 15.5px; }
    .ecs-hero-ctas { flex-direction: column; align-items: stretch; }
    .ecs-btn { width: 100%; }

    .ecs-store-way__left .ecs-title-mixed { font-size: 26px; }
    .ecs-list-item { padding: 10px; gap: 12px; }

    .ecs-split__col .ecs-title-mixed { font-size: 22px; }
    .ecs-tech-card { padding: 14px 18px; }
    .ecs-offer-features { gap: 8px; }
    .ecs-offer-pill { padding: 10px 14px; font-size: 13px; }



    .ecs-cta__inner { padding: 48px 24px; border-radius: 20px; }
  }
</style>
</head>
<body>

<?php include '../header.php'; ?>

<!-- ============ HERO ============ -->
<section class="ecs-hero">
  <div class="ecs-container ecs-hero__grid">
    <div>
      <div class="ecs-eyebrow">
        <span class="ecs-eyebrow-dot"></span>
        Digital Commerce Excellence
      </div>
      <h1 class="ecs-title-mixed">
        Empowering Businesses to <span>Sell Smarter</span> and <span>Grow Faster</span>
      </h1>
      <p class="ecs-hero-desc">
        At Digibeat, we build custom ecommerce websites that help your business stand out, attract customers, and increase sales. Our ecommerce solutions are designed to provide a seamless shopping experience — from browsing to checkout — while keeping your brand identity strong and your store performance high.
      </p>
      <div class="ecs-hero-ctas">
        <a href="/digibeat/contact.php" class="ecs-btn ecs-btn-primary">Start a project</a>
        <a href="#ecs-process" class="ecs-btn ecs-btn-secondary">Our Process</a>
      </div>
    </div>

    <div class="ecs-hero-visual">
      <div class="ecs-hero-img-wrapper">
        <img src="/digibeat/assets/images/ecommerce-hero.png" alt="Futuristic E-commerce Dashboard Mockup" class="ecs-hero-img">
      </div>
      
      <!-- Floating Card 1: Sales Pulse -->
      <div class="ecs-floating-card ecs-floating-card-1">
        <div class="ecs-card-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
        </div>
        <div class="ecs-card-info">
          <h5>+38% Revenue</h5>
          <p>Real-time optimization</p>
        </div>
      </div>

      <!-- Floating Card 2: Safe Payments -->
      <div class="ecs-floating-card ecs-floating-card-2">
        <div class="ecs-card-icon green">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </div>
        <div class="ecs-card-info">
          <h5>Secure Checkout</h5>
          <p>PCI-DSS Compliant</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="ecs-divider">

<!-- ============ STORE YOUR WAY ============ -->
<section class="ecs-store-way">
  <div class="ecs-container ecs-store-way__grid">
    <div class="ecs-store-way__left">
      <div class="ecs-title-icon-wrap">
        <div class="ecs-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h2 class="ecs-title-mixed">Your Store, <span>Your Way</span></h2>
      </div>
      <p>
        Every business is unique, and your online store should reflect that. Whether you're a small retailer or a growing enterprise, we create ecommerce platforms that fit your goals and scale with your business. From custom designs to payment gateway integration, we handle every aspect with precision and care.
      </p>
      
      <!-- Interactive SVG Cart Visual -->
      <svg viewBox="0 0 380 180" fill="none" style="max-width: 320px; display: block; margin: 0 auto;">
        <rect x="10" y="10" width="360" height="160" rx="16" fill="var(--ecs-panel)" stroke="var(--ecs-line)" stroke-width="1.5"/>
        <path d="M60 90h120M60 114h90" stroke="var(--ecs-line)" stroke-width="8" stroke-linecap="round"/>
        <rect x="60" y="50" width="40" height="20" rx="4" fill="var(--ecs-accent-soft-strong)" stroke="var(--ecs-accent)" stroke-width="1.5"/>
        <circle cx="80" cy="60" r="4" fill="var(--ecs-accent)"/>
        
        <!-- Cart -->
        <circle cx="280" cy="120" r="8" fill="var(--ecs-ink)"/>
        <circle cx="310" cy="120" r="8" fill="var(--ecs-ink)"/>
        <path d="M250 50h14l12 48h42l10-34H270" stroke="var(--ecs-ink)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        
        <!-- Floating item -->
        <g>
          <animateTransform attributeName="transform" type="translate" values="0 0; 0 -12; 0 0" dur="4s" repeatCount="indefinite"/>
          <rect x="274" y="24" width="24" height="24" rx="6" fill="var(--ecs-teal)" opacity="0.8"/>
          <path d="M281 36h10M286 31v10" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
        </g>
      </svg>
    </div>

    <div class="ecs-store-way__right">
      <div class="ecs-store-way__list">
        <div class="ecs-list-item">
          <div class="ecs-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="ecs-list-item__text">
            <h4>Fully responsive and mobile-friendly design</h4>
            <p>Your shop will look stunning and run fast on smartphones, tablets, laptops, and desktop monitors alike.</p>
          </div>
        </div>

        <div class="ecs-list-item">
          <div class="ecs-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="ecs-list-item__text">
            <h4>Secure checkout and payment gateways</h4>
            <p>Ensure customers can complete purchases safely with seamless integration with Stripe, PayPal, Razorpay, or local banks.</p>
          </div>
        </div>

        <div class="ecs-list-item">
          <div class="ecs-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="ecs-list-item__text">
            <h4>Easy inventory and order management</h4>
            <p>A back-office catalog and stock manager designed to save you time and remove shipping bottlenecks.</p>
          </div>
        </div>

        <div class="ecs-list-item">
          <div class="ecs-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="ecs-list-item__text">
            <h4>Optimized for speed, SEO, and performance</h4>
            <p>We implement Core Web Vitals optimizations, structured schemas, and SEO markers to lift search results organic indexing.</p>
          </div>
        </div>

        <div class="ecs-list-item">
          <div class="ecs-list-item__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="ecs-list-item__text">
            <h4>Scalable architecture for long-term growth</h4>
            <p>Built with robust modern standards ready to support millions of queries, visitors, and active stock changes.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE OFFER / TECH SPLIT ============ -->
<section class="ecs-split">
  <div class="ecs-container ecs-split__grid">
    <!-- What We Offer Column -->
    <div class="ecs-split__col highlighted">
      <div class="ecs-title-icon-wrap">
        <div class="ecs-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h3 class="ecs-title-mixed">What We <span>Offer ?</span></h3>
      </div>
      <p class="ecs-col-intro">
        At Digibeat, we provide end-to-end ecommerce development solutions that help you establish a strong online presence and maximize conversions. Our team takes care of everything - from strategy, design, and platform setup to secure payment integration and post-launch support. We focus on creating seamless, engaging, and scalable shopping experiences that make online buying effortless for your customers and growth-ready for your business.
      </p>
      
      <div class="ecs-offer-features">
        <div class="ecs-offer-pill"><span></span>Custom Storefronts</div>
        <div class="ecs-offer-pill"><span></span>Multi-Currency Checkout</div>
        <div class="ecs-offer-pill"><span></span>ERP & CRM Integrations</div>
        <div class="ecs-offer-pill"><span></span>Conversion Rate Optimization</div>
        <div class="ecs-offer-pill"><span></span>Post-Launch Marketing</div>
        <div class="ecs-offer-pill"><span></span>24/7 Hosting Support</div>
      </div>
    </div>

    <!-- Technologies We Use Column -->
    <div class="ecs-split__col">
      <div class="ecs-title-icon-wrap">
        <div class="ecs-double-chevron">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
        </div>
        <h3 class="ecs-title-mixed">Technologies <span>We Use</span></h3>
      </div>
      <p class="ecs-col-intro">
        We design using industry-leading tools and best practices to ensure quality, performance, safety, and consistency across all of our digital projects.
      </p>

      <div class="ecs-tech-grid">
        <div class="ecs-tech-card">
          <div class="ecs-tech-card__icon">WP</div>
          <div class="ecs-tech-card__text">
            <h5>WordPress + WooCommerce</h5>
            <p>Perfect for highly customizable, content-rich, and easily managed e-commerce shops.</p>
          </div>
        </div>

        <div class="ecs-tech-card">
          <div class="ecs-tech-card__icon">SH</div>
          <div class="ecs-tech-card__text">
            <h5>Shopify / Magento / Laravel</h5>
            <p>From simple hosted stores to high-volume custom Laravel web apps built for performance.</p>
          </div>
        </div>

        <div class="ecs-tech-card">
          <div class="ecs-tech-card__icon">$$</div>
          <div class="ecs-tech-card__text">
            <h5>Stripe, Razorpay, and PayPal</h5>
            <p>Native APIs and secure tokenized checkouts for card, UPI, wallet, or netbanking options.</p>
          </div>
        </div>

        <div class="ecs-tech-card">
          <div class="ecs-tech-card__icon">DB</div>
          <div class="ecs-tech-card__text">
            <h5>Firebase, MySQL &amp; Cloud Hosting</h5>
            <p>Reliable cloud infrastructure, fast database reads, and global CDN caching.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="ecs-process" id="ecs-process">
  <div class="ecs-container">
    <div class="ecs-process__head">
      <h2 class="ecs-title-mixed">Our <span>Process</span></h2>
      <p>Five steps, one continuous thread from first conversation to launch day.</p>
    </div>

    <div class="ecs-track">
      <svg class="ecs-track__line" viewBox="0 0 1000 90" preserveAspectRatio="none">
        <path d="M100 4 H900" />
        <path class="ecs-track__live" d="M100 4 H900" />
      </svg>

      <div class="ecs-steps">
        <div class="ecs-step">
          <div class="ecs-step__dot"></div>
          <div class="ecs-step__num">01</div>
          <h4>Discovery &amp; Strategy</h4>
          <p>We begin by understanding your business goals, target audience, and product range to create a clear ecommerce strategy.</p>
        </div>
        <div class="ecs-step">
          <div class="ecs-step__dot"></div>
          <div class="ecs-step__num">02</div>
          <h4>Design &amp; User Experience</h4>
          <p>Our designers craft intuitive, visually appealing interfaces that keep customers engaged and make navigation effortless.</p>
        </div>
        <div class="ecs-step">
          <div class="ecs-step__dot"></div>
          <div class="ecs-step__num">03</div>
          <h4>Development &amp; Integration</h4>
          <p>We build secure, scalable stores with advanced features — including product management, payment gateways, and shipping integrations.</p>
        </div>
        <div class="ecs-step">
          <div class="ecs-step__dot"></div>
          <div class="ecs-step__num">04</div>
          <h4>Testing &amp; Optimization</h4>
          <p>Every element is tested for speed, security, and usability to ensure flawless performance on all devices.</p>
        </div>
        <div class="ecs-step">
          <div class="ecs-step__dot"></div>
          <div class="ecs-step__num">05</div>
          <h4>Launch &amp; Support</h4>
          <p>We deploy your online store and continue to monitor, maintain, and enhance it to keep your business running smoothly and successfully.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="ecs-cta">
  <div class="ecs-container">
    <div class="ecs-cta__inner">
      <h2 class="ecs-title-mixed">Ready to build a <span>smarter online store</span>?</h2>
      <p>
        Let's create an extraordinary e-commerce platform that delights your customers and drives consistent revenue growth.
      </p>
      <div class="ecs-hero-ctas">
        <a href="/digibeat/contact.php" class="ecs-btn ecs-btn-primary">Contact Us Today</a>
        <a href="/digibeat/about" class="ecs-btn ecs-btn-secondary">Learn More</a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
