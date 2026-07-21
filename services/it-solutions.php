<?php
/**
 * services/it-solutions.php
 * "IT Solutions" service page — Redesigned with a clean, futuristic light-themed white aesthetic.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IT Solutions — Digibeat</title>
<style>
  :root {
    --it-bg: #ffffff;
    --it-panel: #f8fafc;
    --it-panel-hover: #f1f5f9;
    --it-ink: #0f172a;
    --it-muted: #475569;
    --it-line: rgba(0, 0, 0, 0.08);
    --it-accent: #3d5afe;       /* Vibrant Blue (#3d5afe) */
    --it-accent-soft: rgba(61, 90, 254, 0.06);
    --it-accent-glow: rgba(61, 90, 254, 0.15);
  }

  body.it-page {
    background: var(--it-bg);
    color: var(--it-ink);
    font-family: 'Inter', sans-serif;
    margin: 0;
    overflow-x: hidden;
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  .it-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Ambient glowing backgrounds */
  .it-glow-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(140px);
    z-index: 0;
    pointer-events: none;
    opacity: 0.12;
  }
  .glow-1 {
    top: 50px;
    right: -100px;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, var(--it-accent), transparent 70%);
  }
  .glow-2 {
    bottom: 200px;
    left: -200px;
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, var(--it-accent), transparent 70%);
  }

  /* Eyebrows & Common Headers */
  .it-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--it-accent);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 22px;
  }
  .it-eyebrow .it-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--it-accent);
    box-shadow: 0 0 10px var(--it-accent-glow);
  }

  /* Global Rule: ALL section headers must be black base, spans highlighted in blue */
  .it-heading-lg,
  .it-services-section h2,
  .it-service-item h3,
  .it-process__head h2,
  .it-process__step h4,
  .it-cta-card h2 {
    color: var(--it-ink) !important;
  }
  .it-heading-lg span,
  .it-services-section h2 span,
  .it-service-item h3 span,
  .it-process__head h2 span,
  .it-process__step h4 span,
  .it-cta-card h2 span {
    color: var(--it-accent) !important;
  }

  .it-heading-lg {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(36px, 5vw, 62px);
    line-height: 1.1;
    font-weight: 700;
    margin: 0 0 24px;
    letter-spacing: -0.02em;
  }

  .it-lead {
    color: var(--it-muted);
    font-size: 18px;
    line-height: 1.7;
    max-width: 580px;
    margin: 0 0 40px;
  }

  /* Buttons */
  .it-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: var(--it-accent);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    border: none;
    box-shadow: 0 10px 25px -10px var(--it-accent-glow);
  }
  .it-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px -8px var(--it-accent-glow);
  }
  .it-btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: transparent;
    color: var(--it-ink);
    font-weight: 600;
    font-size: 15px;
    border: 1px solid var(--it-line);
    transition: border-color 0.2s ease, color 0.2s ease;
  }
  .it-btn-ghost:hover {
    border-color: var(--it-accent);
    color: var(--it-accent);
  }

  /* ============ HERO SECTION ============ */
  .it-hero {
    position: relative;
    padding: 140px 0 100px;
    overflow: hidden;
  }
  .it-hero__grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 64px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  /* Animated holographic core */
  .hologram-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 400px;
  }
  .holo-shield {
    position: absolute;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    border: 1.5px dashed rgba(61, 90, 254, 0.25);
    animation: rotateHolo 25s linear infinite;
  }
  .holo-shield-inner {
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 1px solid rgba(61, 90, 254, 0.15);
    animation: rotateHoloCounter 15s linear infinite;
  }
  .holo-node-svg {
    position: absolute;
    width: 250px;
    height: 250px;
  }
  .holo-node-path {
    fill: none;
    stroke: var(--it-accent);
    stroke-width: 1.5;
    stroke-dasharray: 5, 250;
    animation: traceHolo 8s linear infinite;
    opacity: 0.7;
  }
  .holo-core {
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, var(--it-accent-glow) 0%, transparent 70%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }
  .holo-core::after {
    content: "";
    position: absolute;
    inset: -10px;
    border-radius: 50%;
    border: 2px solid var(--it-accent);
    box-shadow: 0 0 20px var(--it-accent-glow);
    opacity: 0.8;
    animation: pulseCore 3s ease-in-out infinite alternate;
  }
  .holo-core svg {
    width: 50px;
    height: 50px;
    stroke: var(--it-accent);
    fill: none;
    stroke-width: 1.5;
    animation: floatIcon 6s ease-in-out infinite;
  }

  @keyframes rotateHolo {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  @keyframes rotateHoloCounter {
    0% { transform: rotate(360deg); }
    100% { transform: rotate(0deg); }
  }
  @keyframes traceHolo {
    0% { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -255; }
  }
  @keyframes pulseCore {
    0% { transform: scale(0.95); opacity: 0.5; box-shadow: 0 0 10px var(--it-accent-glow); }
    100% { transform: scale(1.05); opacity: 1; box-shadow: 0 0 30px var(--it-accent); }
  }
  @keyframes floatIcon {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(5deg); }
  }

  /* ============ THE 2 IT SERVICES ============ */
  .it-services-section {
    padding: 120px 0;
  }
  .services-section__title {
    margin-bottom: 72px;
  }
  .services-section__title h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(30px, 4vw, 48px);
    font-weight: 700;
    margin: 0;
    letter-spacing: -0.01em;
  }

  .it-services-grid {
    display: flex;
    flex-direction: column;
    gap: 48px;
  }

  /* Card panel design with photo visual columns */
  .it-service-item {
    background: var(--it-panel);
    border: 1px solid var(--it-line);
    border-radius: 24px;
    padding: 56px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
    transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    position: relative;
    overflow: hidden;
  }
  .it-service-item::after {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; height: 3px;
    background: var(--it-accent);
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  .it-service-item:hover {
    border-color: rgba(61, 90, 254, 0.3);
    box-shadow: 0 30px 60px -30px rgba(0, 0, 0, 0.15), 0 0 25px -10px var(--it-accent-glow);
    transform: translateY(-4px);
  }
  .it-service-item:hover::after {
    opacity: 1;
  }

  .it-service-item:nth-child(even) {
    direction: rtl;
  }
  .it-service-item:nth-child(even) > * {
    direction: ltr; /* Reset text direction inside */
  }

  .service-detail__icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: var(--it-accent-soft);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    border: 1.5px solid rgba(61, 90, 254, 0.2);
  }
  .service-detail__icon svg {
    width: 26px;
    height: 26px;
    stroke: var(--it-accent);
    fill: none;
    stroke-width: 1.8;
  }
  .it-service-item h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 32px;
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.01em;
  }
  .it-service-item p {
    color: var(--it-muted);
    font-size: 16px;
    line-height: 1.7;
    margin: 0 0 32px;
  }

  .service-features__list {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }
  .service-feature__row {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14.5px;
    color: var(--it-ink);
  }
  .service-feature__row svg {
    width: 16px;
    height: 16px;
    stroke: var(--it-accent);
    stroke-width: 2.2;
    fill: none;
    flex-shrink: 0;
  }

  /* Photo visual columns with border glows */
  .it-service-visual {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px -20px rgba(61, 90, 254, 0.25);
    border: 1px solid var(--it-line);
    background: #ffffff;
    aspect-ratio: 4 / 3;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .it-service-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
  }
  .it-service-visual:hover .it-service-img {
    transform: scale(1.04);
  }

  /* ============ PROCESS SECTIONS ============ */
  .it-process {
    padding: 100px 0;
    background: rgba(0, 0, 0, 0.005);
    border-top: 1px solid var(--it-line);
  }
  .it-process__head {
    text-align: center;
    max-width: 600px;
    margin: 0 auto 64px;
  }
  .it-process__head h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 38px;
    font-weight: 700;
  }
  .it-process__head p {
    color: var(--it-muted);
  }

  .it-process__timeline {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px;
    position: relative;
  }
  .it-process__line {
    position: absolute;
    top: 25px;
    left: 40px;
    right: 40px;
    height: 1px;
    background: var(--it-accent);
    z-index: 1;
    opacity: 0.3;
  }
  .it-process__step {
    position: relative;
    z-index: 2;
    background: var(--it-bg);
    padding-top: 10px;
  }
  .it-process__dot {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--it-panel);
    border: 2px solid var(--it-line);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    transition: all 0.3s ease;
  }
  .it-process__dot::after {
    content: "";
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--it-line);
    transition: all 0.3s ease;
  }
  .it-process__step:hover .it-process__dot {
    border-color: var(--it-accent);
    box-shadow: 0 0 15px var(--it-accent-glow);
  }
  .it-process__step:hover .it-process__dot::after {
    background: var(--it-accent);
  }
  
  .it-process__num {
    font-family: monospace;
    font-size: 13px;
    font-weight: 700;
    color: var(--it-accent);
    margin-bottom: 12px;
  }
  .it-process__step h4 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 19px;
    font-weight: 700;
    margin: 0 0 10px;
  }
  .it-process__step p {
    color: var(--it-muted);
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
  }

  /* ============ CLOSING CTA ============ */
  .it-cta-block {
    padding: 120px 0 160px;
    text-align: center;
    position: relative;
  }
  .it-cta-card {
    background: radial-gradient(circle at 50% 0%, var(--it-accent-soft) 0%, transparent 60%), var(--it-panel);
    border: 1px solid var(--it-line);
    border-radius: 28px;
    padding: 80px 48px;
    max-width: 900px;
    margin: 0 auto;
    box-shadow: 0 30px 60px -20px rgba(0,0,0,0.06);
    position: relative;
  }
  .it-cta-card h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(30px, 4vw, 48px);
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.01em;
  }
  .it-cta-card p {
    color: var(--it-muted);
    font-size: 17px;
    line-height: 1.65;
    max-width: 520px;
    margin: 0 auto 36px;
  }

  /* ============ RESPONSIVE LAYOUTS ============ */
  @media (max-width: 960px) {
    .it-hero__grid {
      grid-template-columns: 1fr;
      text-align: center;
      gap: 40px;
    }
    .it-lead {
      margin-left: auto;
      margin-right: auto;
    }
    .hologram-container {
      height: 300px;
    }
    .holo-shield {
      width: 220px; height: 220px;
    }
    .holo-shield-inner {
      width: 160px; height: 160px;
    }
    .holo-node-svg {
      width: 190px; height: 190px;
    }

    .it-service-item {
      grid-template-columns: 1fr;
      gap: 36px;
      padding: 36px;
    }
    .it-service-item:nth-child(even) {
      direction: ltr;
    }

    .it-process__timeline {
      grid-template-columns: repeat(2, 1fr);
      gap: 40px;
    }
    .it-process__line {
      display: none;
    }
  }

  @media (max-width: 600px) {
    .it-container {
      padding: 0 20px;
    }
    .it-hero {
      padding: 100px 0 60px;
    }
    .it-btn-primary, .it-btn-ghost {
      width: 100%;
      justify-content: center;
    }
    .it-hero-ctas {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .it-process__timeline {
      grid-template-columns: 1fr;
      gap: 32px;
    }
    .it-cta-card {
      padding: 48px 24px;
    }
  }
</style>
</head>
<body class="it-page">

<!-- Global Site Header -->
<?php include '../header.php'; ?>

<main style="position: relative;">
  <!-- Ambient background glow fields -->
  <div class="it-glow-blob glow-1"></div>
  <div class="it-glow-blob glow-2"></div>

  <!-- ============ HERO ============ -->
  <section class="it-hero">
    <div class="it-container it-hero__grid">
      <div style="z-index: 5;">
        <div class="it-eyebrow"><span class="it-dot"></span> IT Infrastructure Solutions</div>
        <h1 class="it-heading-lg">We engineer resilient <span>digital foundations</span>.</h1>
        <p class="it-lead">
          Keep your organization reachable and scalable with optimized servers, high-availability managed cloud environments, and domain communication structures.
        </p>
        <div class="it-hero-ctas" style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="../contact.php" class="it-btn-primary">Connect Infrastructure</a>
          <a href="#services-list" class="it-btn-ghost">Explore services</a>
        </div>
      </div>

      <div class="hologram-container">
        <!-- Radial blueprint rings -->
        <div class="holo-shield"></div>
        <div class="holo-shield-inner"></div>
        <!-- Hologram core with custom glowing mark -->
        <div class="holo-core">
          <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
            <line x1="6" y1="6" x2="6.01" y2="6"/>
            <line x1="6" y1="18" x2="6.01" y2="18"/>
          </svg>
        </div>
        <!-- Animated pulsing paths connecting the structure -->
        <svg class="holo-node-svg" viewBox="0 0 200 200">
          <path class="holo-node-path" d="M100,10 C50,10 10,50 10,100 C10,150 50,190 100,190 C150,190 190,150 190,100" />
        </svg>
      </div>
    </div>
  </section>

  <!-- ============ THE 2 SERVICES LIST ============ -->
  <section class="it-services-section" id="services-list">
    <div class="it-container">
      <div class="services-section__title">
        <span class="it-eyebrow"><span class="it-dot"></span> Core Infrastructure</span>
        <h2>High-availability systems <span>built to perform</span>.</h2>
      </div>

      <div class="it-services-grid">
        <!-- WEB HOSTING -->
        <div class="it-service-item" id="web-hosting">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <ellipse cx="12" cy="5" rx="9" ry="3"/>
                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/>
              </svg>
            </div>
            <h3>Web <span>Hosting</span></h3>
            <p>
              Power your online apps with high-speed SSD servers, managed databases, 
              automated backups, and guaranteed uptime, completely supervised by our engineering team.
            </p>
            <div class="services-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Automated Daily Backups &amp; Redundancy</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Fully Managed Security Patching &amp; Monitoring</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>High-Speed Global CDN Integration</span>
              </div>
            </div>
          </div>

          <div class="it-service-visual">
            <img src="../assets/images/web-hosting.png" alt="Futuristic Web Hosting Cloud Servers" class="it-service-img">
          </div>
        </div>

        <!-- BUSINESS EMAIL SERVICES -->
        <div class="it-service-item" id="business-email">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
              </svg>
            </div>
            <h3>Business <span>Email Services</span></h3>
            <p>
              Command professional credibility with custom domain business email setups, 
              protected by modern spam filters and high-availability exchange networks.
            </p>
            <div class="services-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Professional Custom Domain Addresses</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Anti-Spam &amp; Advanced Threat Protection</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Shared Calendars &amp; Seamless Multi-Device Sync</span>
              </div>
            </div>
          </div>

          <div class="it-service-visual">
            <img src="../assets/images/business-email.png" alt="Secure Business Email Communication" class="it-service-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS SECTIONS ============ -->
  <section class="it-process">
    <div class="it-container">
      <div class="it-process__head">
        <span class="it-eyebrow"><span class="it-dot"></span> Roadmap</span>
        <h2>How we <span>build it</span></h2>
        <p>A rigorous, collaborative pathway from research to asset deployment.</p>
      </div>

      <div class="it-process__timeline">
        <div class="it-process__line"></div>

        <div class="it-process__step">
          <div class="it-process__dot"></div>
          <div class="it-process__num">Phase 01</div>
          <h4>Infrastructure <span>Audit</span></h4>
          <p>We evaluate your current hosting setup, traffic requirements, and email channels to identify bottlenecks.</p>
        </div>

        <div class="it-process__step">
          <div class="it-process__dot"></div>
          <div class="it-process__num">Phase 02</div>
          <h4>Architecture <span>Design</span></h4>
          <p>We plan custom cloud routing, configure virtual namespaces, and outline secure exchange boundaries.</p>
        </div>

        <div class="it-process__step">
          <div class="it-process__dot"></div>
          <div class="it-process__num">Phase 03</div>
          <h4>Migration <span>&amp; Setup</span></h4>
          <p>We transfer files and configure MX/SPF records with minimal offline transitions, fully testing mail flow.</p>
        </div>

        <div class="it-process__step">
          <div class="it-process__dot"></div>
          <div class="it-process__num">Phase 04</div>
          <h4>Continuous <span>Monitoring</span></h4>
          <p>We activate live uptime tracking, backup engines, and security alerts to ensure continuous execution.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="it-cta-block">
    <div class="it-container">
      <div class="it-cta-card">
        <h2>Secure your <span>infrastructure</span>.</h2>
        <p>
          Let's setup the high-speed server structures and professional exchange nodes that run your corporate operations.
        </p>
        <a href="../contact.php" class="it-btn-primary">Connect with our IT team</a>
      </div>
    </div>
  </section>
</main>

<!-- Global Site Footer -->
<?php include '../footer.php'; ?>

</body>
</html>
