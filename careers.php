<?php
/**
 * careers.php
 * "Careers at Digibeat" page — v4 (fully responsive pass).
 *
 * Hero + Current Openings merged into a single section (white background).
 * Clicking "Current openings" smooth-scrolls within that same section.
 * Why Work With Us + closing CTA follow below (CTA now inverted: black card).
 *
 * Responsiveness changes in this pass:
 * - Accordion panels now expand to their true content height (measured in
 *   JS) instead of a fixed max-height guess, so nothing clips on narrow
 *   screens, at larger text sizes, or with longer translated copy.
 * - Open panels are re-measured on resize/orientation change so reflowed
 *   text never gets cut off.
 * - Long/unbroken strings (role titles, meta, descriptions) wrap safely on
 *   very narrow viewports.
 * - Added an extra breakpoint for small phones (<=380px).
 * - Added a tablet-range tweak (641px–900px) for the "Why work with us"
 *   grid and hero spacing.
 * - Removed a redundant CSS declaration in .cr-cta.
 * - Buttons/CTAs get a bit more breathing room and never overflow at very
 *   narrow widths.
 */
$active_page = 'careers';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Careers at Digibeat</title>
<style>
  *, *::before, *::after { box-sizing: border-box; }

  :root {
    --cr-bg: #ffffff;
    --cr-panel: #f7f7fb;
    --cr-ink: #1a1a2e;
    --cr-muted: #5b6172;
    --cr-line: #e5e7f0;
    --cr-accent: #5546e8;
    --cr-accent-soft: rgba(85,70,232,0.08);
    --cr-accent-soft-strong: rgba(85,70,232,0.14);
    --cr-header-h: 76px;
  }

  html { scroll-behavior: smooth; }

  html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: var(--cr-bg);
    color: var(--cr-ink);
  }

  body { padding-top: var(--cr-header-h); }

  /* Fixed navbar wrapper (contains header.php output) */
  #cr-header-wrap {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background: var(--cr-bg);
    border-bottom: 1px solid var(--cr-line);
  }

  img, svg { max-width: 100%; height: auto; }

  .cr-section { width: 100%; max-width: 1000px; margin: 0 auto; padding: 0 32px; }

  /* Safety net: wrap long/unbroken strings on narrow screens everywhere */
  .cr-hero h1,
  .cr-hero p,
  .cr-openings__head h2,
  .cr-openings__head p,
  .cr-role__info h4,
  .cr-role__meta,
  .cr-role__desc,
  .cr-why__head h2,
  .cr-why__head p,
  .cr-why__card p,
  .cr-cta h2,
  .cr-cta p {
    overflow-wrap: break-word;
    word-break: break-word;
  }

  /* ---------- Hero + Openings (merged single section, white) ---------- */
  .cr-hero-openings { background: var(--cr-bg); }

  .cr-hero {
    min-height: calc(100vh - var(--cr-header-h));
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px 0;
    text-align: center;
  }
  .cr-hero .cr-section { width: 100%; }
  .cr-hero__art {
    max-width: 460px;
    width: 100%;
    margin: 0 auto 36px;
  }
  .cr-hero h1 {
    font-weight: 800;
    font-size: clamp(32px, 5.6vw, 60px);
    line-height: 1.08;
    color: var(--cr-ink);
    margin: 0 0 22px;
    letter-spacing: -0.02em;
  }
  .cr-hero p {
    color: var(--cr-muted);
    font-size: clamp(14.5px, 2.2vw, 17px);
    line-height: 1.7;
    max-width: 560px;
    margin: 0 auto 40px;
  }
  .cr-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: transparent;
    color: var(--cr-ink);
    font-weight: 500;
    font-size: 14.5px;
    border: 1px solid var(--cr-line);
    text-decoration: none;
    cursor: pointer;
    transition: border-color 0.15s ease, color 0.15s ease, gap 0.15s ease;
    max-width: 100%;
    white-space: normal;
  }
  .cr-btn-outline svg { width: 16px; height: 16px; stroke: currentColor; transition: transform 0.15s ease; flex-shrink: 0; }
  .cr-btn-outline:hover { border-color: var(--cr-accent); color: var(--cr-accent); gap: 14px; }

  .cr-btn-primary {
    display: inline-block;
    padding: 14px 28px;
    border-radius: 999px;
    background: var(--cr-accent);
    color: #ffffff;
    font-weight: 600;
    font-size: 14.5px;
    border: none;
    text-align: center;
    text-decoration: none;
    transition: transform 0.15s ease, background 0.15s ease;
    max-width: 100%;
  }
  .cr-btn-primary:hover { background: #4738c9; transform: translateY(-1px); }

  /* ---------- Current openings (accordion) ---------- */
  .cr-openings { padding: 10px 0 100px; scroll-margin-top: calc(var(--cr-header-h) + 20px); }
  .cr-openings__head { text-align: center; margin: 0 0 44px; }
  .cr-openings__head h2 {
    font-weight: 800;
    font-size: clamp(28px, 5vw, 48px);
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--cr-ink);
    margin: 0 0 14px;
  }
  .cr-openings__head p { color: var(--cr-muted); font-size: 16px; margin: 0; }

  .cr-accordion { border-top: 1px solid var(--cr-line); }
  .cr-accordion__item { border-bottom: 1px solid var(--cr-line); }

  .cr-accordion__trigger {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 26px 4px;
    text-align: left;
    font-family: inherit;
  }
  .cr-accordion__trigger h3 {
    font-size: clamp(15.5px, 3vw, 18px);
    font-weight: 700;
    color: var(--cr-ink);
    margin: 0;
  }
  .cr-accordion__trigger h3 span { color: var(--cr-muted); font-weight: 500; }
  .cr-accordion__chevron {
    flex-shrink: 0;
    width: 20px; height: 20px;
    stroke: var(--cr-ink);
    transition: transform 0.25s ease;
  }
  .cr-accordion__item.is-open .cr-accordion__chevron { transform: rotate(180deg); }

  /*
   * max-height starts at 0 and is set inline (in px, to the panel's real
   * scrollHeight) by JS when a panel opens — see script below. This means
   * panels always fit their content exactly, regardless of viewport width,
   * font size, or how much the description text wraps.
   */
  .cr-accordion__panel {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .cr-accordion__inner { padding: 0 4px 30px; display: flex; flex-direction: column; gap: 22px; }

  .cr-role {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    padding: 18px 20px;
    background: var(--cr-panel);
    border-radius: 12px;
    flex-wrap: wrap;
  }
  .cr-role__info { min-width: 0; flex: 1 1 220px; }
  .cr-role__info h4 { font-size: 15.5px; color: var(--cr-ink); margin: 0 0 6px; }
  .cr-role__meta { font-size: 13px; color: var(--cr-muted); margin: 0; }
  .cr-role__meta b { color: var(--cr-ink); font-weight: 600; }
  .cr-role__desc { font-size: 13.5px; color: var(--cr-muted); margin: 8px 0 0; line-height: 1.6; max-width: 480px; }
  .cr-role__apply {
    flex-shrink: 0;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--cr-accent);
    text-decoration: none;
    white-space: nowrap;
    align-self: center;
  }
  .cr-role__apply svg { width: 14px; height: 14px; stroke: var(--cr-accent); transition: transform 0.15s ease; }
  .cr-role__apply:hover svg { transform: translateX(3px); }

  .cr-openings__footer { text-align: center; margin-top: 44px; }

  /* ---------- Why work with us ---------- */
  .cr-why {
    padding: 90px 0 100px;
    background: var(--cr-panel);
    border-top: 1px solid var(--cr-line);
    border-bottom: 1px solid var(--cr-line);
  }
  .cr-why .cr-section { max-width: 1160px; }
  .cr-why__head { text-align: center; max-width: 700px; margin: 0 auto 56px; }
  .cr-why__head-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 52px; height: 52px;
    border-radius: 14px;
    background: var(--cr-accent-soft-strong);
    margin-bottom: 18px;
  }
  .cr-why__head-badge svg { width: 26px; height: 26px; stroke: var(--cr-accent); }
  .cr-why__head h2 {
    font-size: clamp(23px, 3vw, 36px);
    font-weight: 800;
    letter-spacing: -0.02em;
    color: var(--cr-ink);
    margin: 0 0 14px;
    line-height: 1.15;
  }
  .cr-why__head p { color: var(--cr-muted); font-size: 16px; line-height: 1.7; margin: 0; }

  .cr-why__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .cr-why__card {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    background: #ffffff;
    border: 1px solid var(--cr-line);
    border-radius: 16px;
    padding: 24px;
    transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
  }
  .cr-why__card:hover {
    border-color: rgba(85,70,232,0.35);
    transform: translateY(-3px);
    box-shadow: 0 18px 36px -26px rgba(85,70,232,0.4);
  }
  .cr-why__icon {
    flex-shrink: 0;
    width: 40px; height: 40px;
    border-radius: 10px;
    background: var(--cr-accent-soft-strong);
    display: flex; align-items: center; justify-content: center;
  }
  .cr-why__icon svg { width: 20px; height: 20px; stroke: var(--cr-accent); }
  .cr-why__card p {
    margin: 0;
    color: var(--cr-ink);
    font-size: 15px;
    font-weight: 600;
    line-height: 1.5;
  }

  /* ---------- CTA banner (inverted: white page background, black container) ---------- */
  .cr-cta-wrap {
    background: var(--cr-bg);
    padding: 100px 0;
  }
  .cr-cta {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 56px 48px;
    background: #0e0e16;
    border: 1px solid #22222f;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    flex-wrap: wrap;
  }
  .cr-cta::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(400px 240px at 88% 15%, rgba(85,70,232,0.35), transparent 70%);
    pointer-events: none;
  }
  .cr-cta__text { position: relative; z-index: 1; max-width: 560px; min-width: 0; }
  .cr-cta h2 { font-size: clamp(21px, 3vw, 30px); font-weight: 800; letter-spacing: -0.01em; color: #ffffff; margin: 0 0 10px; line-height: 1.2; }
  .cr-cta p { color: #b7b9c9; font-size: 15px; line-height: 1.7; margin: 0; }
  .cr-cta .cr-btn-primary { position: relative; z-index: 1; flex-shrink: 0; }

  /* ---------- Responsive ---------- */

  /* Tablet range */
  @media (max-width: 900px) {
    .cr-why__head { margin-bottom: 44px; }
    .cr-hero { padding: 50px 0; }
  }

  @media (max-width: 1000px) {
    .cr-why__grid { grid-template-columns: 1fr 1fr; }
    .cr-hero { min-height: calc(90vh - var(--cr-header-h)); padding: 50px 0; }
  }

  @media (max-width: 640px) {
    .cr-section { padding: 0 20px; }
    .cr-hero { min-height: calc(88vh - var(--cr-header-h)); padding: 40px 0; }
    .cr-hero p { font-size: 15.5px; }
    .cr-hero__art { max-width: 260px; margin-bottom: 24px; }
    .cr-why { padding: 56px 0 72px; }
    .cr-why__grid { grid-template-columns: 1fr; }
    .cr-openings { padding: 4px 0 72px; }
    .cr-role { flex-direction: column; align-items: flex-start; }
    .cr-role__info { flex-basis: auto; width: 100%; }
    .cr-role__desc { max-width: 100%; }
    .cr-role__apply { align-self: flex-start; }
    .cr-cta-wrap { padding: 70px 0; }
    .cr-cta {
      margin: 0 18px;
      padding: 36px 26px;
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
    }
    .cr-cta__text { max-width: 100%; }
    .cr-cta .cr-btn-primary { width: 100%; text-align: center; }
  }

  @media (max-width: 480px) {
    .cr-section { padding: 0 16px; }
    .cr-hero h1 { font-size: 30px; }
    .cr-openings__head h2 { font-size: 26px; }
    .cr-why__head h2 { font-size: 22px; }
    .cr-accordion__trigger h3 { font-size: 15.5px; }
    .cr-cta-wrap { padding: 56px 0; }
    .cr-cta { margin: 0 14px; padding: 28px 20px; border-radius: 18px; }
  }

  /* Small phones */
  @media (max-width: 380px) {
    .cr-section { padding: 0 14px; }
    .cr-hero h1 { font-size: 27px; }
    .cr-hero p { font-size: 14px; }
    .cr-btn-outline, .cr-btn-primary { padding: 13px 20px; font-size: 13.5px; }
    .cr-openings__head h2 { font-size: 23px; }
    .cr-openings__head p { font-size: 14.5px; }
    .cr-accordion__trigger { padding: 20px 2px; }
    .cr-accordion__trigger h3 { font-size: 14.5px; }
    .cr-role { padding: 14px 16px; }
    .cr-why__head h2 { font-size: 20px; }
    .cr-why__head p { font-size: 14.5px; }
    .cr-why__card { padding: 18px; gap: 12px; }
    .cr-cta { margin: 0 10px; padding: 24px 16px; }
  }

  /* Respect reduced-motion preferences */
  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    .cr-accordion__panel,
    .cr-accordion__chevron,
    .cr-btn-outline,
    .cr-btn-primary,
    .cr-why__card {
      transition: none !important;
    }
  }
</style>
</head>
<body>
<div id="cr-header-wrap"><?php include 'header.php'; ?></div>

<!-- ============ HERO + CURRENT OPENINGS (single merged section) ============ -->
<section class="cr-hero-openings">

  <div class="cr-hero">
    <div class="cr-section">

      <!-- decorative illustration -->
      <div class="cr-hero__art">
        <svg viewBox="0 0 420 200" xmlns="http://www.w3.org/2000/svg">
          <rect x="0" y="150" width="420" height="2" fill="#e5e7f0"/>
          <circle cx="90" cy="90" r="46" fill="rgba(85,70,232,0.10)"/>
          <circle cx="90" cy="90" r="46" fill="none" stroke="#5546e8" stroke-width="2"/>
          <rect x="60" y="70" width="60" height="40" rx="8" fill="none" stroke="#5546e8" stroke-width="2"/>
          <circle cx="330" cy="70" r="30" fill="rgba(85,70,232,0.08)"/>
          <path d="M310 70a20 20 0 1 1 40 0 20 20 0 0 1 -40 0Z" fill="none" stroke="#5546e8" stroke-width="2"/>
          <path d="M300 110c0-14 12-22 30-22s30 8 30 22" fill="none" stroke="#5546e8" stroke-width="2" stroke-linecap="round"/>
          <path d="M170 120c20-30 60-30 80 0" fill="none" stroke="#5546e8" stroke-width="2" stroke-linecap="round"/>
          <circle cx="210" cy="60" r="14" fill="none" stroke="#5546e8" stroke-width="2"/>
          <path d="M150 150c10-12 24-18 60-18s50 6 60 18" fill="none" stroke="#1a1a2e" stroke-width="1.5" stroke-linecap="round" opacity="0.35"/>
        </svg>
      </div>

      <h1>Build What's Next With Digibeat</h1>
      <p>
        We're a team of builders, designers, and strategists who believe
        great work happens when talented people are trusted, challenged,
        and given room to grow. Come do the best work of your career.
      </p>
      <button type="button" class="cr-btn-outline" id="cr-scroll-openings">
        Current openings
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </button>
    </div>
  </div>

  <div class="cr-openings" id="cr-openings">
    <div class="cr-section">
      <div class="cr-openings__head">
        <h2>Current Openings</h2>
        <p>Become part of a high-performing &amp; collaborative team</p>
      </div>

      <div class="cr-accordion" id="cr-accordion">

        <div class="cr-accordion__item">
          <button type="button" class="cr-accordion__trigger">
            <h3>Development <span>(2)</span></h3>
            <svg class="cr-accordion__chevron" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="cr-accordion__panel">
            <div class="cr-accordion__inner">
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>Laravel Developer</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 1–3 years experience</p>
                  <p class="cr-role__desc">Skilled in HTML, CSS, JavaScript, and modern frameworks like React or Vue; strong at turning designs into responsive interfaces.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>WordPress Developer</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 1–2 years experience</p>
                  <p class="cr-role__desc">Can build, customize, and maintain websites using themes, plugins, and custom code when needed.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="cr-accordion__item">
          <button type="button" class="cr-accordion__trigger">
            <h3>Design <span>(2)</span></h3>
            <svg class="cr-accordion__chevron" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="cr-accordion__panel">
            <div class="cr-accordion__inner">
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>UI/UX Designer</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 0–2 years experience</p>
                  <p class="cr-role__desc">Strong in Figma/Adobe XD, crafting intuitive interfaces and brand-aligned user experiences.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>Graphic Designer</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 0–3 years experience</p>
                  <p class="cr-role__desc">Creates brand visuals, social media creatives, banners, and marketing material using Adobe Suite or Canva.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="cr-accordion__item">
          <button type="button" class="cr-accordion__trigger">
            <h3>Marketing <span>(3)</span></h3>
            <svg class="cr-accordion__chevron" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="cr-accordion__panel">
            <div class="cr-accordion__inner">
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>Digital Marketing Executive</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 0–2 years experience</p>
                  <p class="cr-role__desc">Manages social media, SEO, campaigns, and analytics; data-driven with strong communication and content skills.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>SEO Specialist</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 1–3 years experience</p>
                  <p class="cr-role__desc">Expert in keyword research, on-page and off-page optimization, technical audits, and analytics reporting.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>Content Writer</h4>
                  <p class="cr-role__meta"><b>Remote / On-site</b> · 0–2 years experience</p>
                  <p class="cr-role__desc">Crafts engaging content for blogs, websites, ads, and social media with a focus on clarity and creativity.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="cr-accordion__item">
          <button type="button" class="cr-accordion__trigger">
            <h3>IT &amp; Support <span>(1)</span></h3>
            <svg class="cr-accordion__chevron" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="cr-accordion__panel">
            <div class="cr-accordion__inner">
              <div class="cr-role">
                <div class="cr-role__info">
                  <h4>IT Support Technician</h4>
                  <p class="cr-role__meta"><b>On-site</b> · 0–2 years experience</p>
                  <p class="cr-role__desc">Handles basic IT troubleshooting, system setup, hosting support, and technical assistance for clients.</p>
                </div>
                <a href="contact.php" class="cr-role__apply">
                  Apply now
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="cr-openings__footer">
        <button type="button" class="cr-btn-outline" id="cr-see-all">
          See all openings
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </div>

</section>

<!-- ============ WHY WORK WITH US ============ -->
<section class="cr-why">
  <div class="cr-section">
    <div class="cr-why__head">
      <div class="cr-why__head-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/><circle cx="10" cy="8" r="4"/><path d="M22 20v-2a4 4 0 0 0-3-3.87"/><path d="M16 4.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
      <h2>Why work with us</h2>
      <p>
        We believe in a workspace where ideas thrive, growth is encouraged, and
        every voice matters — because the best work comes from people who feel
        genuinely invested in it.
      </p>
    </div>

    <div class="cr-why__grid">
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z"/></svg>
        </div>
        <p>A supportive and growth-oriented work culture</p>
      </div>
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4 12 14.01l-3-3"/></svg>
        </div>
        <p>Opportunities to work on real projects that make a difference</p>
      </div>
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1Z"/></svg>
        </div>
        <p>Exposure to modern tools, technologies, and creative processes</p>
      </div>
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <p>A flexible work environment with continuous learning</p>
      </div>
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <p>A chance to be part of a passionate, friendly team</p>
      </div>
      <div class="cr-why__card">
        <div class="cr-why__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m16.24 7.76 2.83-2.83"/><path d="M18 12h4"/><path d="m16.24 16.24 2.83 2.83"/><path d="M12 18v4"/><path d="m4.93 19.07 2.83-2.83"/><path d="M2 12h4"/><path d="m4.93 4.93 2.83 2.83"/></svg>
        </div>
        <p>Room to experiment, take ownership, and grow your career</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA (white page background, black container) ============ -->
<section class="cr-cta-wrap">
  <div class="cr-cta">
    <div class="cr-cta__text">
      <h2>Don't see a role that fits?</h2>
      <p>
        We're always happy to hear from talented people. Send us your resume and
        we'll reach out when something matches.
      </p>
    </div>
    <a href="contact.php" class="cr-btn-primary">Get in Touch</a>
  </div>
</section>



<script>
(function () {
  var items = document.querySelectorAll('#cr-accordion .cr-accordion__item');

  // Measure a panel's true content height and apply it as max-height so
  // it always fits — regardless of viewport width, font-size, or how much
  // the role descriptions wrap.
  function openPanel(item) {
    var panel = item.querySelector('.cr-accordion__panel');
    var inner = item.querySelector('.cr-accordion__inner');
    if (!panel || !inner) return;
    panel.style.maxHeight = inner.scrollHeight + 'px';
    item.classList.add('is-open');
  }

  function closePanel(item) {
    var panel = item.querySelector('.cr-accordion__panel');
    if (!panel) return;
    panel.style.maxHeight = '0px';
    item.classList.remove('is-open');
  }

  function togglePanel(item) {
    if (item.classList.contains('is-open')) {
      closePanel(item);
    } else {
      openPanel(item);
    }
  }

  items.forEach(function (item) {
    var trigger = item.querySelector('.cr-accordion__trigger');
    trigger.addEventListener('click', function () {
      togglePanel(item);
    });
  });

  var seeAll = document.getElementById('cr-see-all');
  if (seeAll) {
    seeAll.addEventListener('click', function () {
      var allOpen = Array.from(items).every(function (i) { return i.classList.contains('is-open'); });
      items.forEach(function (item) {
        if (allOpen) {
          closePanel(item);
        } else {
          openPanel(item);
        }
      });
    });
  }

  // Keep open panels correctly sized if the layout reflows (resize,
  // orientation change, zoom, dynamic type / font-size changes, etc.)
  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      items.forEach(function (item) {
        if (item.classList.contains('is-open')) {
          var panel = item.querySelector('.cr-accordion__panel');
          var inner = item.querySelector('.cr-accordion__inner');
          if (panel && inner) {
            panel.style.maxHeight = inner.scrollHeight + 'px';
          }
        }
      });
    }, 120);
  });

  var scrollBtn = document.getElementById('cr-scroll-openings');
  var openingsSection = document.getElementById('cr-openings');
  if (scrollBtn && openingsSection) {
    scrollBtn.addEventListener('click', function () {
      openingsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  var headerWrap = document.getElementById('cr-header-wrap');
  function syncHeaderHeight() {
    if (!headerWrap) return;
    var h = headerWrap.offsetHeight;
    if (h > 0) {
      document.documentElement.style.setProperty('--cr-header-h', h + 'px');
    }
  }
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);
})();
</script>
</body>
</html>