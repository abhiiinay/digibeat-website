<?php
/**
 * services/web-development.php
 * "Custom Web Application" service page — redesigned, light theme, fully responsive.
 *
 * NOTE: This version defines its own color palette locally instead of
 * relying on --db-bg-dark / --db-ink / --db-muted / --db-panel from
 * assets/css/style.css, so the page is guaranteed to render fully
 * white/light regardless of the global dark-theme tokens.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Web Application Development — Digibeat</title>
<style>
  :root {
    --cwa-bg: #ffffff;
    --cwa-panel: #f7f7fb;
    --cwa-ink: #1a1a2e;
    --cwa-muted: #5b6172;
    --cwa-line: #e5e7f0;
    --cwa-accent: #5546e8;
    --cwa-accent-soft: rgba(85,70,232,0.08);
    --cwa-accent-soft-strong: rgba(85,70,232,0.14);
  }

  html, body {
    background: var(--cwa-bg);
    color: var(--cwa-ink);
  }

  img, svg { max-width: 100%; }

  *, *::before, *::after { box-sizing: border-box; }

  html, body {
    max-width: 100%;
    overflow-x: hidden;
  }

  img, svg { max-width: 100%; height: auto; }

  .cwa-section { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 32px; }

  /* ---------- Hero ---------- */
  .cwa-hero {
    position: relative;
    overflow: hidden;
    background: var(--cwa-bg);
    padding: 120px 0 100px;
  }
  .cwa-hero::before {
    content: "";
    position: absolute;
    top: -220px; right: -160px;
    width: 620px; height: 620px;
    background: radial-gradient(circle, rgba(85,70,232,0.12), transparent 70%);
    pointer-events: none;
  }
  .cwa-hero::after {
    content: "";
    position: absolute;
    bottom: -260px; left: -160px;
    width: 560px; height: 560px;
    background: radial-gradient(circle, rgba(91,123,255,0.10), transparent 70%);
    pointer-events: none;
  }
  .cwa-hero__inner {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 60px;
    align-items: center;
  }
  .cwa-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--cwa-accent);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 22px;
  }
  .cwa-eyebrow .db-dot {
    width: 6px; height: 6px; border-radius: 50%;
    background: var(--cwa-accent);
    box-shadow: 0 0 0 4px var(--cwa-accent-soft);
  }
  .cwa-hero h1 {
    font-size: clamp(32px, 4.4vw, 58px);
    line-height: 1.1;
    color: var(--cwa-ink);
    margin: 0 0 24px;
    word-wrap: break-word;
  }
  .cwa-hero h1 span { color: var(--cwa-accent); }
  .cwa-hero p {
    color: var(--cwa-muted);
    font-size: 17px;
    line-height: 1.7;
    max-width: 480px;
    margin: 0 0 36px;
  }
  .cwa-hero-ctas { display: flex; gap: 14px; flex-wrap: wrap; }
  .cwa-btn-primary {
    display: inline-block;
    text-align: center;
    padding: 14px 26px;
    border-radius: 999px;
    background: var(--cwa-accent);
    color: #ffffff;
    font-weight: 600;
    font-size: 14.5px;
    border: none;
    transition: transform 0.15s ease, background 0.15s ease;
  }
  .cwa-btn-primary:hover { background: #4738c9; transform: translateY(-1px); }
  .cwa-btn-ghost {
    display: inline-block;
    text-align: center;
    padding: 14px 26px;
    border-radius: 999px;
    background: transparent;
    color: var(--cwa-ink);
    font-weight: 600;
    font-size: 14.5px;
    border: 1px solid var(--cwa-line);
    transition: border-color 0.15s ease, color 0.15s ease;
  }
  .cwa-btn-ghost:hover { border-color: var(--cwa-accent); color: var(--cwa-accent); }

  /* ---- hero visual: stylised app window with a pulse tracing the UI ---- */
  .cwa-window {
    position: relative;
    background: var(--cwa-panel);
    border: 1px solid var(--cwa-line);
    border-radius: 16px;
    padding: 0 0 22px;
    box-shadow: 0 30px 60px -30px rgba(26,26,46,0.18);
  }
  .cwa-window__bar {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 14px 18px;
    border-bottom: 1px solid var(--cwa-line);
  }
  .cwa-window__bar span {
    width: 9px; height: 9px; border-radius: 50%;
    background: rgba(26,26,46,0.12);
  }
  .cwa-window__body { padding: 26px 24px 6px; }
  .cwa-window__row {
    height: 10px;
    border-radius: 5px;
    background: rgba(26,26,46,0.08);
    margin-bottom: 14px;
  }
  .cwa-window__row.w60 { width: 60%; }
  .cwa-window__row.w80 { width: 80%; }
  .cwa-window__row.w40 { width: 40%; }
  .cwa-window__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin: 22px 0 6px;
  }
  .cwa-window__tile {
    height: 64px;
    border-radius: 10px;
    background: var(--cwa-accent-soft);
    border: 1px solid rgba(85,70,232,0.25);
  }
  .cwa-pulse-svg { position: absolute; inset: 0; pointer-events: none; }
  .cwa-pulse-svg path {
    fill: none;
    stroke: var(--cwa-accent);
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 6 420;
    animation: cwa-trace 5s linear infinite;
    opacity: 0.9;
  }
  @keyframes cwa-trace {
    0%   { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -840; }
  }

  /* ---------- Off-the-shelf vs Custom ---------- */
  .cwa-compare {
    background: var(--cwa-bg);
    padding: 100px 0;
    border-top: 1px solid var(--cwa-line);
  }
  .cwa-compare__head { max-width: 640px; margin: 0 0 56px; }
  .cwa-compare__head h2 {
    font-size: clamp(26px, 3vw, 38px);
    color: var(--cwa-ink);
    margin: 0 0 14px;
    line-height: 1.25;
  }
  .cwa-compare__head p { color: var(--cwa-muted); font-size: 16px; line-height: 1.7; margin: 0; }

  .cwa-compare__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }
  .cwa-compare__card {
    border-radius: 16px;
    padding: 34px 32px;
    border: 1px solid var(--cwa-line);
  }
  .cwa-compare__card.is-off { background: var(--cwa-panel); }
  .cwa-compare__card.is-custom {
    background: #ffffff;
    border-color: rgba(85,70,232,0.35);
    box-shadow: 0 20px 50px -30px rgba(85,70,232,0.35);
  }
  .cwa-compare__card h3 {
    font-size: 19px;
    margin: 0 0 20px;
    color: var(--cwa-ink);
  }
  .cwa-compare__card.is-custom h3 { color: var(--cwa-accent); }
  .cwa-compare__card ul { display: flex; flex-direction: column; gap: 14px; }
  .cwa-compare__card li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 14.5px;
    color: var(--cwa-muted);
    line-height: 1.55;
  }
  .cwa-compare__card.is-custom li { color: var(--cwa-ink); }
  .cwa-compare__card li svg { flex-shrink: 0; margin-top: 2px; width: 16px; height: 16px; }
  .cwa-compare__card.is-off li svg { stroke: #9aa0b4; }
  .cwa-compare__card.is-custom li svg { stroke: var(--cwa-accent); }

  /* ---------- Why custom (feature cards) ---------- */
  .cwa-why { padding: 100px 0; background: var(--cwa-bg); }
  .cwa-why__top {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 60px;
    align-items: end;
    margin-bottom: 52px;
  }
  .cwa-why__top h2 {
    font-size: clamp(26px, 3vw, 38px);
    color: var(--cwa-ink);
    margin: 0;
    line-height: 1.25;
  }
  .cwa-why__top p { color: var(--cwa-muted); font-size: 16px; line-height: 1.7; margin: 0; }

  .cwa-why__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }
  .cwa-why__card {
    background: var(--cwa-panel);
    border: 1px solid var(--cwa-line);
    border-radius: 16px;
    padding: 28px 24px;
    transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
  }
  .cwa-why__card:hover {
    border-color: rgba(85,70,232,0.4);
    transform: translateY(-4px);
    box-shadow: 0 20px 40px -28px rgba(85,70,232,0.4);
  }
  .cwa-why__num {
    font-family: var(--db-font-mono, monospace);
    font-size: 12px;
    color: var(--cwa-accent);
    margin-bottom: 18px;
    letter-spacing: 0.05em;
  }
  .cwa-why__card h4 {
    font-size: 16.5px;
    color: var(--cwa-ink);
    margin: 0 0 10px;
    line-height: 1.35;
  }
  .cwa-why__card p { color: var(--cwa-muted); font-size: 13.8px; line-height: 1.6; margin: 0; }

  /* ---------- Industries + Expertise ---------- */
  .cwa-split {
    padding: 100px 0;
    background: var(--cwa-panel);
    border-top: 1px solid var(--cwa-line);
    border-bottom: 1px solid var(--cwa-line);
  }
  .cwa-split__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
  }
  .cwa-split h3 {
    font-size: 22px;
    color: var(--cwa-ink);
    margin: 0 0 16px;
  }
  .cwa-split > div > p {
    color: var(--cwa-muted);
    font-size: 15px;
    line-height: 1.7;
    margin: 0 0 26px;
  }
  .cwa-pills { display: flex; flex-wrap: wrap; gap: 10px; }
  .cwa-pill {
    padding: 10px 18px;
    border-radius: 999px;
    border: 1px solid var(--cwa-line);
    color: var(--cwa-ink);
    font-size: 14px;
    font-weight: 500;
    background: #ffffff;
  }
  .cwa-tags { display: flex; flex-wrap: wrap; gap: 10px; }
  .cwa-tag {
    padding: 8px 14px;
    border-radius: 8px;
    background: var(--cwa-accent-soft-strong);
    color: var(--cwa-accent);
    font-size: 13px;
    font-weight: 600;
  }

  /* ---------- Process (pulse-line timeline — signature element) ---------- */
  .cwa-process { padding: 110px 0 100px; background: var(--cwa-bg); }
  .cwa-process__head { text-align: center; max-width: 620px; margin: 0 auto 72px; }
  .cwa-process__head h2 {
    font-size: clamp(26px, 3vw, 38px);
    color: var(--cwa-ink);
    margin: 0 0 14px;
  }
  .cwa-process__head p { color: var(--cwa-muted); font-size: 16px; line-height: 1.7; margin: 0; }

  .cwa-track { position: relative; padding-top: 30px; }
  .cwa-track__line {
    position: absolute;
    top: 30px; left: 0;
    width: 100%; height: 90px;
    overflow: visible;
  }
  .cwa-track__line path {
    fill: none;
    stroke: var(--cwa-line);
    stroke-width: 2;
  }
  .cwa-track__line .cwa-track__live {
    stroke: var(--cwa-accent);
    stroke-dasharray: 14 1200;
    animation: cwa-flow 6s linear infinite;
  }
  @keyframes cwa-flow {
    0%   { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -1214; }
  }

  .cwa-steps {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }
  .cwa-step { text-align: center; }
  .cwa-step__dot {
    width: 14px; height: 14px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid var(--cwa-accent);
    margin: 0 auto 22px;
    position: relative;
    z-index: 1;
  }
  .cwa-step__num {
    font-size: 13px;
    color: var(--cwa-accent);
    margin-bottom: 10px;
    letter-spacing: 0.06em;
  }
  .cwa-step h4 {
    font-size: 16.5px;
    color: var(--cwa-ink);
    margin: 0 0 10px;
  }
  .cwa-step p { color: var(--cwa-muted); font-size: 13.5px; line-height: 1.6; margin: 0; }

  /* ---------- CTA banner ---------- */
  .cwa-cta {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    margin: 0 32px 100px;
    padding: 64px 56px;
    background: var(--cwa-panel);
    border: 1px solid var(--cwa-line);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
  }
  .cwa-cta::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(420px 260px at 85% 20%, rgba(85,70,232,0.14), transparent 70%);
    pointer-events: none;
  }
  .cwa-cta__text { position: relative; z-index: 1; max-width: 560px; }
  .cwa-cta h2 {
    font-size: clamp(24px, 3vw, 34px);
    color: var(--cwa-ink);
    margin: 0 0 14px;
    line-height: 1.3;
  }
  .cwa-cta p { color: var(--cwa-muted); font-size: 15px; line-height: 1.7; margin: 0 0 28px; }
  .cwa-cta .cwa-btn-primary { position: relative; z-index: 1; }

  /* ==========================================================
     Responsive breakpoints
     1000px — tablet: collapse two-column grids to one column
     640px  — large phone: tighten spacing, stack CTA banner
     480px  — small phone: full-width buttons, smaller type
     ========================================================== */

  /* ---------- Tablet (<=1000px) ---------- */
  @media (max-width: 1000px) {
    .cwa-hero { padding: 90px 0 70px; }
    .cwa-hero__inner { grid-template-columns: 1fr; gap: 44px; }
    .cwa-hero p { max-width: 100%; }
    .cwa-window { max-width: 520px; }

    .cwa-compare { padding: 70px 0; }
    .cwa-compare__grid { grid-template-columns: 1fr; }

    .cwa-why { padding: 70px 0; }
    .cwa-why__top { grid-template-columns: 1fr; gap: 20px; align-items: start; }
    .cwa-why__grid { grid-template-columns: 1fr 1fr; }

    .cwa-split { padding: 70px 0; }
    .cwa-split__grid { grid-template-columns: 1fr; gap: 40px; }

    .cwa-process { padding: 80px 0 70px; }
    .cwa-steps { grid-template-columns: 1fr; gap: 32px; }
    .cwa-track__line { display: none; }
    .cwa-step {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      text-align: left;
    }
    .cwa-step__dot { margin: 4px 0 0; flex-shrink: 0; }
  }

  /* ---------- Large phone (<=640px) ---------- */
  @media (max-width: 640px) {
    .cwa-section { padding: 0 20px; }

    .cwa-hero { padding: 64px 0 48px; }
    .cwa-hero h1 { margin-bottom: 18px; }
    .cwa-hero p { font-size: 15.5px; margin-bottom: 28px; }
    .cwa-hero-ctas { flex-direction: column; align-items: stretch; }
    .cwa-hero-ctas a { width: 100%; }

    .cwa-window__grid { grid-template-columns: repeat(2, 1fr); }

    .cwa-compare__head { margin-bottom: 36px; }
    .cwa-compare__card { padding: 26px 22px; }

    .cwa-why__top { margin-bottom: 34px; }
    .cwa-why__grid { grid-template-columns: 1fr; }

    .cwa-split__grid { gap: 32px; }

    .cwa-process__head { margin-bottom: 48px; }

    .cwa-cta {
      margin: 0 18px 70px;
      padding: 40px 28px;
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
    }
    .cwa-cta__text { max-width: 100%; }
    .cwa-cta .cwa-btn-primary { width: 100%; text-align: center; }
  }

  /* ---------- Small phone (<=480px) ---------- */
  @media (max-width: 480px) {
    .cwa-section { padding: 0 16px; }

    .cwa-hero { padding: 52px 0 40px; }
    .cwa-eyebrow { font-size: 12px; }
    .cwa-hero h1 { font-size: 30px; }
    .cwa-hero p { font-size: 14.5px; }

    .cwa-window__body { padding: 20px 18px 4px; }
    .cwa-window__grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    .cwa-window__tile { height: 52px; }

    .cwa-compare__head h2,
    .cwa-why__top h2,
    .cwa-process__head h2 { font-size: 24px; }

    .cwa-compare__card { padding: 22px 18px; }
    .cwa-compare__card h3 { font-size: 17px; }

    .cwa-split h3 { font-size: 19px; }
    .cwa-pill, .cwa-tag { font-size: 12.5px; padding: 8px 14px; }

    .cwa-cta { margin: 0 14px 56px; padding: 32px 20px; border-radius: 18px; }
    .cwa-cta h2 { font-size: 22px; }
    .cwa-cta p { font-size: 14px; }
  }
</style>
</head>
<body>
<?php include '../header.php'; ?>

<!-- ============ HERO ============ -->
<section class="cwa-hero">
  <div class="cwa-section cwa-hero__inner">
    <div>
      <div class="cwa-eyebrow"><span class="db-dot"></span> Custom Web Application Development</div>
      <h1>Software built around <span>how your business actually runs</span></h1>
      <p>
        We design and build web applications tailored to your exact workflow —
        dashboards, booking systems, portals, and internal tools that off-the-shelf
        software was never going to fit.
      </p>
      <div class="cwa-hero-ctas">
        <a href="contact.php" class="cwa-btn-primary">Start a project</a>
        <a href="#cwa-process" class="cwa-btn-ghost">See our process</a>
      </div>
    </div>

    <div class="cwa-window">
      <svg class="cwa-pulse-svg" viewBox="0 0 480 360" preserveAspectRatio="none">
        <path d="M0 60 H60 L90 20 L130 140 L170 60 H480" />
      </svg>
      <div class="cwa-window__bar"><span></span><span></span><span></span></div>
      <div class="cwa-window__body">
        <div class="cwa-window__row w60"></div>
        <div class="cwa-window__row w80"></div>
        <div class="cwa-window__row w40"></div>
        <div class="cwa-window__grid">
          <div class="cwa-window__tile"></div>
          <div class="cwa-window__tile"></div>
          <div class="cwa-window__tile"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ OFF-THE-SHELF VS CUSTOM ============ -->
<section class="cwa-compare">
  <div class="cwa-section">
    <div class="cwa-compare__head">
      <h2>Off-the-shelf wasn't built for your business. This is.</h2>
      <p>
        Every business operates differently — that's why generic software so often
        forces you to work around it instead of the other way around.
      </p>
    </div>

    <div class="cwa-compare__grid">
      <div class="cwa-compare__card is-off">
        <h3>Off-the-shelf software</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg> Generic workflows you have to adapt to</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg> Paying for features you'll never use</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg> Limited or no control over your own data</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg> Fragile integrations with your existing tools</li>
        </ul>
      </div>
      <div class="cwa-compare__card is-custom">
        <h3>A Digibeat custom build</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M20 6 9 17l-5-5"/></svg> Built around your exact processes and users</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M20 6 9 17l-5-5"/></svg> Every feature earns its place in your product</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M20 6 9 17l-5-5"/></svg> You own the code, the data, and the roadmap</li>
          <li><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"><path d="M20 6 9 17l-5-5"/></svg> Designed to connect cleanly with what you already use</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHY CUSTOM ============ -->
<section class="cwa-why">
  <div class="cwa-section">
    <div class="cwa-why__top">
      <h2>Why teams choose a custom build</h2>
      <p>
        A custom web app gives you the freedom to innovate without the limits of
        pre-built platforms — designed around your business logic, branding, and
        growth goals.
      </p>
    </div>

    <div class="cwa-why__grid">
      <div class="cwa-why__card">
        <div class="cwa-why__num">01</div>
        <h4>Tailored functionality</h4>
        <p>Fits your business processes exactly, instead of the other way around.</p>
      </div>
      <div class="cwa-why__card">
        <div class="cwa-why__num">02</div>
        <h4>Enhanced security</h4>
        <p>Full control over data handling, access, and compliance from day one.</p>
      </div>
      <div class="cwa-why__card">
        <div class="cwa-why__num">03</div>
        <h4>Scalable architecture</h4>
        <p>Built to support future growth rather than needing a rebuild at scale.</p>
      </div>
      <div class="cwa-why__card">
        <div class="cwa-why__num">04</div>
        <h4>Seamless integration</h4>
        <p>Connects cleanly with the tools and systems you already rely on.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ INDUSTRIES + EXPERTISE ============ -->
<section class="cwa-split">
  <div class="cwa-section cwa-split__grid">
    <div>
      <h3>Industries we serve</h3>
      <p>Our custom web applications power businesses across industries such as:</p>
      <div class="cwa-pills">
        <span class="cwa-pill">E-commerce &amp; Retail</span>
        <span class="cwa-pill">Education &amp; E-learning</span>
        <span class="cwa-pill">Healthcare &amp; Fitness</span>
        <span class="cwa-pill">Logistics &amp; Transportation</span>
        <span class="cwa-pill">Finance &amp; Real Estate</span>
        <span class="cwa-pill">Hospitality &amp; Services</span>
      </div>
    </div>
    <div>
      <h3>Our expertise</h3>
      <p>
        Our developers combine modern technologies and strategic design thinking
        to build apps that are powerful, intuitive, and easy to use — whatever
        the use case.
      </p>
      <div class="cwa-tags">
        <span class="cwa-tag">Management Dashboards</span>
        <span class="cwa-tag">CRM Systems</span>
        <span class="cwa-tag">E-learning Platforms</span>
        <span class="cwa-tag">Customer Portals</span>
        <span class="cwa-tag">Booking Systems</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS (pulse-line signature) ============ -->
<section class="cwa-process" id="cwa-process">
  <div class="cwa-section">
    <div class="cwa-process__head">
      <h2>Our process</h2>
      <p>Five steps, one continuous thread from first conversation to launch day.</p>
    </div>

    <div class="cwa-track">
      <svg class="cwa-track__line" viewBox="0 0 1000 90" preserveAspectRatio="none">
        <path d="M100 4 H900" />
        <path class="cwa-track__live" d="M100 4 H900" />
      </svg>

      <div class="cwa-steps">
        <div class="cwa-step">
          <div class="cwa-step__dot"></div>
          <div class="cwa-step__num">01</div>
          <h4>Discovery &amp; Strategy</h4>
          <p>We understand your goals, users, and workflows.</p>
        </div>
        <div class="cwa-step">
          <div class="cwa-step__dot"></div>
          <div class="cwa-step__num">02</div>
          <h4>Design &amp; Prototyping</h4>
          <p>We craft intuitive UI/UX that reflects your brand.</p>
        </div>
        <div class="cwa-step">
          <div class="cwa-step__dot"></div>
          <div class="cwa-step__num">03</div>
          <h4>Development</h4>
          <p>Our team builds using clean, efficient, scalable code.</p>
        </div>
        <div class="cwa-step">
          <div class="cwa-step__dot"></div>
          <div class="cwa-step__num">04</div>
          <h4>Testing &amp; QA</h4>
          <p>Every app is tested for performance and security.</p>
        </div>
        <div class="cwa-step">
          <div class="cwa-step__dot"></div>
          <div class="cwa-step__num">05</div>
          <h4>Launch &amp; Support</h4>
          <p>We deploy smoothly and provide continuous support.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="cwa-cta">
  <div class="cwa-cta__text">
    <h2>"Let's build something custom for you."</h2>
    <p>
      Your business deserves a web application that works exactly the way you do.
      Partner with Digibeat to create a solution that simplifies operations and
      drives growth.
    </p>
    <a href="contact.php" class="cwa-btn-primary">Contact Us</a>
  </div>
</section>


</body>
</html>