<?php
/**
 * case-studies.php
 * "Case Studies" page — v1 (redesign).
 *
 * Design language matches careers.php: white background throughout,
 * indigo/blue accent for highlights, bold tight-tracking headings,
 * fixed navbar. Hero ("Real Results...") is a single self-contained
 * section. Case studies use a modern side-by-side Challenge/Solution
 * layout + a results stat strip, instead of the old stacked icon list.
 */
$active_page = 'case-studies';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Studies — Digibeat</title>
<style>
  *, *::before, *::after { box-sizing: border-box; }

  :root {
    --cs-bg: #ffffff;
    --cs-panel: #f7f8fc;
    --cs-ink: #1a1a2e;
    --cs-muted: #5b6172;
    --cs-line: #e5e7f0;
    --cs-accent: #3d5afe;
    --cs-accent-deep: #2a3eb1;
    --cs-accent-soft: rgba(61,90,254,0.08);
    --cs-accent-soft-strong: rgba(61,90,254,0.13);
    --cs-header-h: 76px;
  }

  html { scroll-behavior: smooth; }

  html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: var(--cs-bg);
    color: var(--cs-ink);
    font-family: inherit;
  }

  body { padding-top: var(--cs-header-h); }

  #cs-header-wrap {
    position: fixed;
    top: 0; left: 0; width: 100%;
    z-index: 1000;
    background: var(--cs-bg);
    border-bottom: 1px solid var(--cs-line);
  }

  img, svg { max-width: 100%; height: auto; }

  .cs-wrap { width: 100%; max-width: 1080px; margin: 0 auto; padding: 0 32px; }

  /* ================= HERO (single section) ================= */
  .cs-hero {
    background: var(--cs-bg);
    min-height: calc(100vh - var(--cs-header-h));
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 56px 0;
    text-align: center;
  }
  .cs-hero .cs-wrap { width: 100%; }
  .cs-hero__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 999px;
    background: var(--cs-accent-soft);
    color: var(--cs-accent);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    margin-bottom: 26px;
  }
  .cs-hero__eyebrow svg { width: 14px; height: 14px; stroke: var(--cs-accent); }

  .cs-hero h1 {
    font-weight: 800;
    font-size: clamp(36px, 5.4vw, 58px);
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--cs-ink);
    margin: 0 0 22px;
  }
  .cs-hero h1 .cs-accent-text { color: var(--cs-accent); }

  .cs-hero > .cs-wrap > p {
    color: var(--cs-muted);
    font-size: 17px;
    line-height: 1.75;
    max-width: 640px;
    margin: 0 auto 48px;
  }

  .cs-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    flex-wrap: wrap;
    margin: 0 auto 40px;
  }
  .cs-stats__item {
    padding: 0 36px;
    text-align: center;
  }
  .cs-stats__item + .cs-stats__item { border-left: 1px solid var(--cs-line); }
  .cs-stats__num {
    display: block;
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 800;
    color: var(--cs-accent);
    letter-spacing: -0.02em;
    line-height: 1;
    margin-bottom: 8px;
  }
  .cs-stats__label {
    display: block;
    font-size: 13px;
    color: var(--cs-muted);
    font-weight: 500;
  }

  .cs-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: transparent;
    color: var(--cs-ink);
    font-weight: 600;
    font-size: 14.5px;
    border: 1px solid var(--cs-line);
    text-decoration: none;
    cursor: pointer;
    transition: border-color 0.15s ease, color 0.15s ease, gap 0.15s ease;
  }
  .cs-btn-outline svg { width: 16px; height: 16px; stroke: currentColor; transition: transform 0.15s ease; }
  .cs-btn-outline:hover { border-color: var(--cs-accent); color: var(--cs-accent); gap: 14px; }

  .cs-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    border-radius: 999px;
    background: var(--cs-accent);
    color: #ffffff;
    font-weight: 700;
    font-size: 14.5px;
    border: none;
    white-space: nowrap;
    text-decoration: none;
    transition: transform 0.15s ease, background 0.15s ease;
  }
  .cs-btn-primary:hover { background: var(--cs-accent-deep); transform: translateY(-1px); }

  /* ================= CASE STUDY LIST ================= */
  .cs-list { background: var(--cs-bg); padding: 10px 0 100px; scroll-margin-top: calc(var(--cs-header-h) + 20px); }

  .cs-study { padding: 72px 0; }
  .cs-study + .cs-study { border-top: 1px solid var(--cs-line); }

  .cs-study__head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }
  .cs-study__title-row { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
  .cs-study__index {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px; height: 44px;
    border-radius: 12px;
    background: var(--cs-accent-soft-strong);
    color: var(--cs-accent);
    font-weight: 800;
    font-size: 15px;
    flex-shrink: 0;
  }
  .cs-study__title { font-size: clamp(24px, 3vw, 32px); font-weight: 800; letter-spacing: -0.01em; color: var(--cs-ink); margin: 0; }
  .cs-study__tag {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 999px;
    background: var(--cs-accent-soft);
    color: var(--cs-accent);
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 0.02em;
  }
  .cs-study__site {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13.5px;
    font-weight: 700;
    color: var(--cs-accent);
    text-decoration: none;
    white-space: nowrap;
  }
  .cs-study__site svg { width: 14px; height: 14px; stroke: var(--cs-accent); transition: transform 0.15s ease; }
  .cs-study__site:hover svg { transform: translate(2px, -2px); }

  .cs-study__tagline {
    color: var(--cs-accent);
    font-size: 17px;
    font-weight: 600;
    margin: 0 0 34px;
    max-width: 640px;
  }

  .cs-study__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 28px;
  }
  .cs-study__card {
    background: var(--cs-panel);
    border: 1px solid var(--cs-line);
    border-radius: 18px;
    padding: 28px;
  }
  .cs-study__card h4 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 15.5px;
    font-weight: 800;
    color: var(--cs-ink);
    margin: 0 0 14px;
  }
  .cs-study__card h4 .cs-card-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 30px; height: 30px;
    border-radius: 9px;
    background: var(--cs-accent-soft-strong);
    flex-shrink: 0;
  }
  .cs-study__card h4 .cs-card-icon svg { width: 15px; height: 15px; stroke: var(--cs-accent); }
  .cs-study__card p { color: var(--cs-muted); font-size: 14.5px; line-height: 1.7; margin: 0 0 12px; }
  .cs-study__card p:last-child { margin-bottom: 0; }
  .cs-study__card ul { margin: 0; padding-left: 18px; display: flex; flex-direction: column; gap: 8px; }
  .cs-study__card li { color: var(--cs-muted); font-size: 14.5px; line-height: 1.6; }
  .cs-study__card li b { color: var(--cs-ink); font-weight: 700; }

  .cs-results {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
  }
  .cs-results__item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 16px;
    border-radius: 14px;
    background: var(--cs-accent-soft);
  }
  .cs-results__item svg { width: 18px; height: 18px; stroke: var(--cs-accent); flex-shrink: 0; margin-top: 2px; }
  .cs-results__item span { font-size: 13.5px; font-weight: 700; color: var(--cs-ink); line-height: 1.45; }

  /* ================= CTA (white page bg, black card) ================= */
  .cs-cta-wrap { background: var(--cs-bg); padding: 100px 0; }
  .cs-cta {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    max-width: 1080px;
    margin: 0 auto;
    padding: 60px 52px;
    background: #0e0e16;
    border: 1px solid #22222f;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    flex-wrap: wrap;
  }
  .cs-cta::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(460px 260px at 88% 12%, rgba(61,90,254,0.4), transparent 70%);
    pointer-events: none;
  }
  .cs-cta__text { position: relative; z-index: 1; max-width: 580px; }
  .cs-cta h2 {
    font-size: clamp(24px, 3.2vw, 34px);
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #ffffff;
    margin: 0 0 12px;
    line-height: 1.2;
  }
  .cs-cta p { color: #b7b9c9; font-size: 15px; line-height: 1.7; margin: 0; }
  .cs-cta .cs-btn-primary { position: relative; z-index: 1; flex-shrink: 0; }

  /* ================= Responsive ================= */
  @media (max-width: 800px) {
    .cs-study__grid { grid-template-columns: 1fr; }
    .cs-results { grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 640px) {
    .cs-wrap { padding: 0 20px; }
    .cs-hero { min-height: calc(92vh - var(--cs-header-h)); padding: 48px 0; }
    .cs-stats__item { padding: 0 18px; }
    .cs-study { padding: 52px 0; }
    .cs-study__head { flex-direction: column; align-items: flex-start; }
    .cs-results { grid-template-columns: 1fr; }
    .cs-cta-wrap { padding: 64px 0; }
    .cs-cta { margin: 0 18px; padding: 36px 26px; flex-direction: column; align-items: flex-start; text-align: left; }
    .cs-cta .cs-btn-primary { width: 100%; justify-content: center; }
  }

  @media (max-width: 480px) {
    .cs-wrap { padding: 0 16px; }
    .cs-hero h1 { font-size: 30px; }
    .cs-study__title { font-size: 22px; }
    .cs-cta-wrap { padding: 52px 0; }
    .cs-cta { margin: 0 14px; padding: 28px 20px; border-radius: 18px; }
  }
</style>
</head>
<body>
<div id="cs-header-wrap"><?php include 'header.php'; ?></div>

<!-- ============ HERO (single section) ============ -->
<section class="cs-hero" id="cs-hero">
  <div class="cs-wrap">
    <div class="cs-hero__eyebrow">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m16.24 7.76 2.83-2.83"/><path d="M18 12h4"/><path d="m16.24 16.24 2.83 2.83"/><path d="M12 18v4"/><path d="m4.93 19.07 2.83-2.83"/><path d="M2 12h4"/><path d="m4.93 4.93 2.83 2.83"/></svg>
      Case Studies
    </div>
    <h1>Real Results. Real Stories. <span class="cs-accent-text">Real Impact.</span></h1>
    <p>
      At Digibeat, every project is a partnership — and every partnership
      tells a story. Explore how our strategies, designs, and solutions
      help businesses overcome challenges, accelerate growth, and build
      stronger digital experiences.
    </p>

    <div class="cs-stats">
      <div class="cs-stats__item">
        <span class="cs-stats__num">50+</span>
        <span class="cs-stats__label">Projects delivered</span>
      </div>
      <div class="cs-stats__item">
        <span class="cs-stats__num">98%</span>
        <span class="cs-stats__label">Client satisfaction</span>
      </div>
      <div class="cs-stats__item">
        <span class="cs-stats__num">12+</span>
        <span class="cs-stats__label">Industries served</span>
      </div>
    </div>

    <button type="button" class="cs-btn-outline" id="cs-scroll-list">
      Explore case studies
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </button>
  </div>
</section>

<!-- ============ CASE STUDIES LIST ============ -->
<section class="cs-list" id="cs-list">
  <div class="cs-wrap">

    <article class="cs-study">
      <div class="cs-study__head">
        <div class="cs-study__title-row">
          <span class="cs-study__index">01</span>
          <h3 class="cs-study__title">Hulul Kitchen</h3>
          <span class="cs-study__tag">E-commerce · Equipment</span>
        </div>
        <a href="https://www.hululkitchen.sa" target="_blank" rel="noopener" class="cs-study__site">
          Visit live site
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7"/><path d="M7 7h10v10"/></svg>
        </a>
      </div>

      <p class="cs-study__tagline">From a local equipment store to a trusted kitchen solutions brand.</p>

      <div class="cs-study__grid">
        <div class="cs-study__card">
          <h4>
            <span class="cs-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></span>
            The Challenge
          </h4>
          <p>
            Hulul Kitchen, a supplier of commercial and home kitchen equipment,
            needed a professional online presence to match the scale of their
            growing business. Their previous website lacked structure, product
            clarity, and strong branding — making it hard for customers to
            browse equipment or understand the range on offer.
          </p>
        </div>

        <div class="cs-study__card">
          <h4>
            <span class="cs-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 0 0-4 12.7c.5.4.8 1 .8 1.7v.1h6.4v-.1c0-.7.3-1.3.8-1.7A7 7 0 0 0 12 2Z"/></svg></span>
            The Solution
          </h4>
          <ul>
            <li>A dedicated <b>product gallery</b> showcasing kitchen equipment</li>
            <li>Organized <b>equipment categories</b> for easy navigation</li>
            <li>A professional <b>brand-focused design</b> with consistent colors and layout</li>
            <li>A <b>responsive structure</b> for seamless viewing on any device</li>
          </ul>
        </div>
      </div>

      <div class="cs-results">
        <div class="cs-results__item">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
          <span>Stronger digital presence &amp; improved brand perception</span>
        </div>
        <div class="cs-results__item">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4 20-7Z"/></svg>
          <span>Increased product inquiries through better visibility</span>
        </div>
        <div class="cs-results__item">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M2 12h20"/></svg>
          <span>Enhanced customer experience with faster, clearer navigation</span>
        </div>
        <div class="cs-results__item">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z"/></svg>
          <span>Better engagement from clean presentation &amp; optimized layout</span>
        </div>
      </div>
    </article>

    <!--
      Add more case studies by duplicating the <article class="cs-study"> block
      above and updating the index, title, tag, tagline, challenge/solution
      copy, results, and site link.
    -->

  </div>
</section>

<!-- ============ CTA ============ -->
<section class="cs-cta-wrap">
  <div class="cs-cta">
    <div class="cs-cta__text">
      <h2>Your success could be our next case study.</h2>
      <p>
        Whether you need a website, a marketing strategy, or a complete brand
        transformation, we're here to turn your vision into real results.
      </p>
    </div>
    <a href="contact.php" class="cs-btn-primary">
      Contact Us
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </a>
  </div>
</section>

<script>
(function () {
  var scrollBtn = document.getElementById('cs-scroll-list');
  var listSection = document.getElementById('cs-list');
  if (scrollBtn && listSection) {
    scrollBtn.addEventListener('click', function () {
      listSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  var headerWrap = document.getElementById('cs-header-wrap');
  function syncHeaderHeight() {
    if (!headerWrap) return;
    var h = headerWrap.offsetHeight;
    if (h > 0) {
      document.documentElement.style.setProperty('--cs-header-h', h + 'px');
    }
  }
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);
})();
</script>
</body>
</html>