<?php
/**
 * case-studies.php
 * "Case Studies" page — v6.
 *
 * Changes from v5:
 *  - Added a search bar next to the "Industries" filter (inside the
 *    same .cs-filters row) so visitors can search case studies by
 *    title, tagline, tag, or industry.
 *  - The "Industries" dropdown now lists a fixed set of industry
 *    categories (matching the reference image) instead of only the
 *    industries currently present in the caseStudies data. This means
 *    the full set of categories always shows up in the filter, even
 *    before you've added a case study for every one of them.
 *  - Search and the Industries filter combine (AND logic): typing a
 *    search term while an industry is checked narrows to case studies
 *    that match both.
 *
 * To add a new case study: duplicate one object inside the
 * `caseStudies` array near the bottom of this file — cards, the
 * Industries filter, and the drawer are all generated from it. Make
 * sure the `industry` value you use matches one of the entries in the
 * `INDUSTRY_OPTIONS` list in the script below so it shows up correctly
 * under the Industries filter.
 *
 * Fonts: Inter for headings, Helix for body copy. Helix is not a
 * Google/system font, so it's declared first in the body stack with
 * safe fallbacks — if you have licensed Helix font files, add an
 * @font-face block near the top of the <style> and it'll be used
 * automatically; until then it quietly falls back to Inter.
 */
$active_page = 'case-studies';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Works — Digibeat</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; }

  /* If you have licensed Helix font files, uncomment and point at them: */
  /*
  @font-face {
    font-family: 'Helix';
    src: url('/fonts/Helix-Regular.woff2') format('woff2');
    font-weight: 400;
    font-display: swap;
  }
  @font-face {
    font-family: 'Helix';
    src: url('/fonts/Helix-Medium.woff2') format('woff2');
    font-weight: 600;
    font-display: swap;
  }
  */

  :root {
    --cs-bg: #ffffff;
    --cs-panel: #f4f5fa;
    --cs-ink: #14142b;
    --cs-muted: #64687a;
    --cs-line: #e6e8f2;
    --cs-accent: #3d5afe;
    --cs-accent-deep: #1f2a78;
    --cs-accent-soft: rgba(61,90,254,0.08);
    --cs-accent-soft-strong: rgba(61,90,254,0.14);
    --cs-header-h: 76px;
    --cs-drawer-pad: 40px;

    --font-heading: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --font-body: 'Helix', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  }

  html { scroll-behavior: smooth; }

  html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: #ffffff !important;
    color: var(--cs-ink);
    font-family: var(--font-body);
  }

  body { padding-top: var(--cs-header-h); }
  body.cs-lock { overflow: hidden; }

  #cs-header-wrap {
    position: fixed;
    top: 0; left: 0; width: 100%;
    z-index: 1000;
    background: #ffffff;
    border-bottom: 1px solid var(--cs-line);
  }

  img, svg { max-width: 100%; height: auto; }

  h1, h2, h3, h4, h5 { font-family: var(--font-heading); }

  .cs-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 32px; }

  .cs-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    border-radius: 999px;
    background: var(--cs-accent);
    color: #ffffff;
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 14.5px;
    border: none;
    white-space: nowrap;
    text-decoration: none;
    cursor: pointer;
    transition: transform 0.15s ease, background 0.15s ease;
  }
  .cs-btn-primary:hover { background: var(--cs-accent-deep); transform: translateY(-1px); }

  .cs-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: transparent;
    color: var(--cs-ink);
    font-family: var(--font-heading);
    font-weight: 600;
    font-size: 14.5px;
    border: 1px solid var(--cs-line);
    text-decoration: none;
    cursor: pointer;
    transition: border-color 0.15s ease, color 0.15s ease, gap 0.15s ease;
  }
  .cs-btn-outline svg { width: 16px; height: 16px; stroke: currentColor; transition: transform 0.15s ease; }
  .cs-btn-outline:hover { border-color: var(--cs-accent); color: var(--cs-accent); gap: 14px; }

  /* ================= HERO ================= */
 .cs-hero {
    background: #fff;
    min-height: calc(100vh - var(--cs-header-h));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px 0;
}
  .cs-hero__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 999px;
    background: var(--cs-accent-soft);
    color: var(--cs-accent);
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    margin-bottom: 26px;
  }
  .cs-hero__eyebrow svg { width: 14px; height: 14px; stroke: var(--cs-accent); }

  .cs-hero h1 {
    font-weight: 800;
    font-size: clamp(34px, 5.2vw, 56px);
    line-height: 1.12;
    letter-spacing: -0.02em;
    color: var(--cs-ink);
    margin: 0 0 22px;
  }
  .cs-hero h1 .cs-accent-text { color: var(--cs-accent); }

  .cs-hero p.cs-hero__sub {
    color: var(--cs-muted);
    font-size: 17px;
    line-height: 1.75;
    max-width: 640px;
    margin: 0 auto 44px;
  }

  .cs-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin: 0 auto 40px;
  }
  .cs-stats__item { padding: 0 36px; text-align: center; }
  .cs-stats__item + .cs-stats__item { border-left: 1px solid var(--cs-line); }
  .cs-stats__num {
    display: block;
    font-family: var(--font-heading);
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 800;
    color: var(--cs-accent);
    letter-spacing: -0.02em;
    line-height: 1;
    margin-bottom: 8px;
  }
  .cs-stats__label { display: block; font-size: 13px; color: var(--cs-muted); font-weight: 500; }

  /* ================= PAGE HEAD (forced white) ================= */
  .cs-page-head-section { background: #ffffff !important; }
  .cs-page-head {
    padding: 8px 0 36px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    background: #ffffff;
    scroll-margin-top: calc(var(--cs-header-h) + 20px);
  }
  .cs-page-head__title { display: flex; align-items: baseline; gap: 10px; }
  .cs-page-head h2 {
    font-weight: 800;
    font-size: clamp(30px, 4vw, 40px);
    letter-spacing: -0.02em;
    line-height: 1;
    margin: 0;
    color: var(--cs-ink) !important;
  }
  .cs-page-head__count { font-size: 17px; font-weight: 600; color: var(--cs-accent); }

  .cs-filters { display: flex; gap: 12px; flex-wrap: wrap; align-items: center; }

  .cs-search { position: relative; display: inline-flex; align-items: center; }
  .cs-search svg {
    position: absolute;
    left: 14px;
    width: 16px; height: 16px;
    stroke: var(--cs-muted);
    pointer-events: none;
  }
  .cs-search__input {
    width: 220px;
    padding: 11px 14px 11px 38px;
    border-radius: 999px;
    border: 1px solid var(--cs-line);
    background: #fff;
    font-family: var(--font-body);
    font-size: 14px;
    color: var(--cs-ink);
    outline: none;
    transition: border-color 0.15s ease, width 0.2s ease;
  }
  .cs-search__input:focus { border-color: var(--cs-accent); width: 260px; }
  .cs-search__input::placeholder { color: var(--cs-muted); }

  .cs-filter { position: relative; }
  .cs-filter__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 18px;
    border-radius: 999px;
    border: 1px solid var(--cs-line);
    background: #fff;
    font-family: var(--font-heading);
    font-weight: 600;
    font-size: 14px;
    color: var(--cs-ink);
    cursor: pointer;
    transition: border-color 0.15s ease;
  }
  .cs-filter__btn:hover, .cs-filter__btn.is-open { border-color: var(--cs-accent); }
  .cs-filter__btn svg { width: 14px; height: 14px; stroke: currentColor; transition: transform 0.15s ease; }
  .cs-filter__btn.is-open svg.cs-chevron { transform: rotate(180deg); }
  .cs-filter__count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 18px; height: 18px;
    padding: 0 5px;
    border-radius: 999px;
    background: var(--cs-ink);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
  }

  .cs-filter__panel {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    min-width: 260px;
    background: #fff;
    border: 1px solid var(--cs-line);
    border-radius: 16px;
    box-shadow: 0 16px 40px rgba(20,20,40,0.12);
    padding: 14px;
    display: none;
    flex-direction: column;
    gap: 2px;
    z-index: 50;
  }
  .cs-filter__panel.is-open { display: flex; }
  .cs-filter__option {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 8px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 14px;
    color: var(--cs-ink);
  }
  .cs-filter__option:hover { background: var(--cs-panel); }
  .cs-filter__option input { accent-color: var(--cs-accent); width: 16px; height: 16px; flex-shrink: 0; }
  .cs-filter__clear {
    margin-top: 6px;
    padding-top: 10px;
    border-top: 1px solid var(--cs-line);
    text-align: left;
    background: none;
    border-left: none; border-right: none; border-bottom: none;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 600;
    color: var(--cs-accent);
    cursor: pointer;
  }

  /* ================= GRID ================= */
  .cs-list { background: #ffffff; padding: 0 0 100px; }

  .cs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px 24px;
  }

  .cs-card {
    display: flex;
    flex-direction: column;
    text-align: left;
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    font-family: var(--font-body);
    color: inherit;
  }
  .cs-card__img {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    aspect-ratio: 4 / 3;
    background: var(--cs-panel);
    margin-bottom: 16px;
  }
  .cs-card__img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.45s ease;
  }
  .cs-card:hover .cs-card__img img { transform: scale(1.06); }

  .cs-card__chip {
    position: absolute;
    left: 14px; bottom: 14px;
    display: inline-flex;
    align-items: center;
    padding: 6px 13px;
    border-radius: 999px;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(6px);
    font-size: 12px;
    font-weight: 700;
    color: var(--cs-accent);
  }

  .cs-card__arrow {
    position: absolute;
    right: 14px; bottom: 14px;
    width: 38px; height: 38px;
    border-radius: 50%;
    background: var(--cs-accent);
    display: flex; align-items: center; justify-content: center;
    opacity: 0;
    transform: translateY(6px);
    transition: opacity 0.2s ease, transform 0.2s ease;
  }
  .cs-card__arrow svg { width: 16px; height: 16px; stroke: #fff; }
  .cs-card:hover .cs-card__arrow { opacity: 1; transform: translateY(0); }

  .cs-card__title {
    font-size: 19px;
    font-weight: 700;
    letter-spacing: -0.01em;
    line-height: 1.35;
    color: var(--cs-ink);
    margin: 0;
  }

  .cs-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    color: var(--cs-muted);
    font-size: 15px;
  }

  /* ================= DRAWER ================= */
  .cs-overlay {
    position: fixed;
    inset: 0;
    background: rgba(15, 15, 25, 0.45);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
    z-index: 1200;
  }
  .cs-overlay.is-open { opacity: 1; pointer-events: auto; }

  /* Drawer is a column: a scrollable region on top, and a footer that
     sits outside that scroll area so it never moves — it's the
     "permanent" Let's talk / Previous / Next row. */
  .cs-drawer {
    position: fixed;
    top: 0; right: 0;
    height: 100%;
    width: 50%;
    background: #fff;
    z-index: 1201;
    transform: translateX(100%);
    transition: transform 0.35s cubic-bezier(.4,0,.2,1);
    box-shadow: -20px 0 60px rgba(20,20,40,0.18);
    display: flex;
    flex-direction: column;
  }
  .cs-drawer.is-open { transform: translateX(0); }

  .cs-drawer__scroll {
    flex: 1 1 auto;
    min-height: 0;
    overflow-y: auto;
  }

  .cs-drawer__topbar {
    position: sticky;
    top: 0;
    z-index: 6;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 14px var(--cs-drawer-pad);
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid var(--cs-line);
  }
  .cs-drawer__close {
    width: 38px; height: 38px;
    flex-shrink: 0;
    border-radius: 50%;
    background: #fff;
    border: 1px solid var(--cs-line);
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
  }
  .cs-drawer__close svg { width: 17px; height: 17px; stroke: var(--cs-ink); }
  .cs-drawer__close:hover { border-color: var(--cs-accent); }
  .cs-drawer__close:hover svg { stroke: var(--cs-accent); }

  .cs-drawer__visit {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 10px 18px;
    border-radius: 999px;
    background: #ffffff;
    color: var(--cs-accent);
    border: 1.5px solid var(--cs-accent);
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 13.5px;
    text-decoration: none;
    white-space: nowrap;
    transition: background 0.15s ease;
  }
  .cs-drawer__visit:hover { background: var(--cs-accent-soft); }
  .cs-drawer__visit svg { width: 14px; height: 14px; stroke: var(--cs-accent); }

  .cs-drawer__progress {
    position: sticky;
    top: 66px;
    z-index: 6;
    height: 3px;
    width: 100%;
    background: var(--cs-line);
  }
  .cs-drawer__progress-bar {
    height: 100%;
    width: 0%;
    background: var(--cs-accent);
    transition: width 0.1s linear;
  }

  .cs-drawer__hero {
    width: 100%;
    aspect-ratio: 16 / 10;
    background: var(--cs-panel);
    overflow: hidden;
  }
  .cs-drawer__hero img { width: 100%; height: 100%; object-fit: cover; display: block; }

  .cs-drawer__body { padding: 32px var(--cs-drawer-pad) 40px; }
  .cs-drawer__tag {
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    color: var(--cs-accent);
    margin-bottom: 10px;
  }
  .cs-drawer__title {
    font-size: clamp(24px, 3vw, 30px);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.2;
    margin: 0 0 14px;
    color: var(--cs-ink);
  }
  .cs-drawer__tagline {
    font-size: 15.5px;
    color: var(--cs-muted);
    line-height: 1.7;
    margin: 0 0 30px;
  }

  .cs-drawer__section { margin-bottom: 30px; }
  .cs-drawer__section:last-child { margin-bottom: 0; }
  .cs-drawer__section h4 {
    font-size: 14.5px;
    font-weight: 800;
    color: var(--cs-ink);
    margin: 0 0 12px;
  }
  .cs-drawer__section p {
    font-size: 15px;
    line-height: 1.75;
    color: var(--cs-muted);
    margin: 0;
  }
  .cs-drawer__section ul {
    margin: 0; padding-left: 18px;
    display: flex; flex-direction: column; gap: 8px;
  }
  .cs-drawer__section li { font-size: 15px; line-height: 1.65; color: var(--cs-muted); }
  .cs-drawer__section li b { color: var(--cs-ink); font-weight: 700; }

  .cs-drawer__gallery {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 30px;
  }
  .cs-drawer__gallery img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    border-radius: 14px;
    display: block;
  }

  /* Plain white contact copy — no colored panel, matches reference */
  .cs-drawer__contact-text h3 {
    font-size: clamp(21px, 2.4vw, 26px);
    font-weight: 700;
    letter-spacing: -0.01em;
    line-height: 1.3;
    margin: 0 0 14px;
    color: var(--cs-ink);
  }
  .cs-drawer__contact-text p {
    font-size: 15px;
    line-height: 1.75;
    color: var(--cs-muted);
    margin: 0;
  }
  .cs-drawer__contact-text p b { color: var(--cs-ink); }
  .cs-drawer__contact-text p a { color: var(--cs-accent); font-weight: 700; text-decoration: none; }

  /* Permanent footer — outside the scroll region, always visible */
  .cs-drawer__footer {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 18px var(--cs-drawer-pad);
    background: #ffffff;
    border-top: 1px solid var(--cs-line);
  }
  .cs-drawer__navgroup {
    display: flex;
    border: 1px solid var(--cs-line);
    border-radius: 999px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .cs-drawer__navicon {
    width: 44px; height: 44px;
    display: flex; align-items: center; justify-content: center;
    background: #fff;
    border: none;
    cursor: pointer;
    transition: background 0.15s ease;
  }
  .cs-drawer__navicon:first-child { border-right: 1px solid var(--cs-line); }
  .cs-drawer__navicon svg { width: 16px; height: 16px; stroke: var(--cs-ink); }
  .cs-drawer__navicon:hover:not(:disabled) { background: var(--cs-panel); }
  .cs-drawer__navicon:disabled { opacity: 0.35; cursor: not-allowed; }

  /* ================= CTA ================= */
  .cs-cta-wrap { background: #ffffff; padding: 40px 0 100px; }
  .cs-cta {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    max-width: 1240px;
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
  .cs-cta p { color: #b7b9c9; font-size: 15px; line-height: 1.7; margin: 0; font-family: var(--font-body); }
  .cs-cta .cs-btn-primary { position: relative; z-index: 1; flex-shrink: 0; }

  /* ================= Responsive ================= */
  @media (max-width: 980px) {
    .cs-grid { grid-template-columns: 1fr 1fr; }
    .cs-drawer { width: 70%; }
  }

  @media (max-width: 640px) {
    :root { --cs-drawer-pad: 22px; }
    .cs-wrap { padding: 0 20px; }
    .cs-hero { padding: 48px 0 40px; }
    .cs-stats__item { padding: 0 18px; }
    .cs-page-head { padding: 4px 0 28px; flex-direction: column; align-items: flex-start; }
    .cs-filters { width: 100%; flex-direction: column; align-items: stretch; }
    .cs-search { width: 100%; }
    .cs-search__input { width: 100%; }
    .cs-search__input:focus { width: 100%; }
    .cs-filter, .cs-filter__btn { width: 100%; }
    .cs-filter__btn { justify-content: space-between; }
    .cs-filter__panel { left: 0; right: 0; min-width: 0; }
    .cs-grid { grid-template-columns: 1fr; gap: 32px; }
    .cs-drawer { width: 100%; }
    .cs-drawer__visit span { display: none; }
    .cs-drawer__footer .cs-btn-outline span { display: inline; }
    .cs-drawer__footer { flex-wrap: nowrap; }
    .cs-cta-wrap { padding: 24px 0 64px; }
    .cs-cta { margin: 0 18px; padding: 36px 26px; flex-direction: column; align-items: flex-start; text-align: left; }
    .cs-cta .cs-btn-primary { width: 100%; justify-content: center; }
  }

  @media (max-width: 480px) {
    .cs-wrap { padding: 0 16px; }
    .cs-hero h1 { font-size: 30px; }
    .cs-cta { margin: 0 14px; padding: 28px 20px; border-radius: 18px; }
    .cs-drawer__footer .cs-btn-outline { padding: 12px 18px; font-size: 13.5px; }
  }
</style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>
<body>
<div id="cs-header-wrap"><?php include 'header.php'; ?></div>

<!-- ============ HERO ============ -->
<section class="cs-hero">
  <div class="cs-wrap">
    <div class="cs-hero__eyebrow">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m16.24 7.76 2.83-2.83"/><path d="M18 12h4"/><path d="m16.24 16.24 2.83 2.83"/><path d="M12 18v4"/><path d="m4.93 19.07 2.83-2.83"/><path d="M2 12h4"/><path d="m4.93 4.93 2.83 2.83"/></svg>
      Our Works
    </div>
    <h1>Real Results. Real Stories. <span class="cs-accent-text">Real Impact.</span></h1>
    <p class="cs-hero__sub">
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
      Explore our works
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </button>
  </div>
</section>

<!-- ============ PAGE HEAD ============ -->
<section class="cs-wrap cs-page-head-section">
  <div class="cs-page-head" id="cs-list">
    <div class="cs-page-head__title">
      <h2>Our Works</h2>
      <span class="cs-page-head__count" id="cs-count">(0)</span>
    </div>

    <div class="cs-filters">
      <div class="cs-search">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input type="text" class="cs-search__input" id="cs-search-input" placeholder="Search projects…" aria-label="Search case studies">
      </div>

      <div class="cs-filter" id="cs-filter-industry">
        <button type="button" class="cs-filter__btn">
          Industries
          <span class="cs-filter__count" id="cs-industry-count" style="display:none;">0</span>
          <svg class="cs-chevron" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
        </button>
        <div class="cs-filter__panel" id="cs-industry-panel"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GRID ============ -->
<section class="cs-list">
  <div class="cs-wrap">
    <div class="cs-grid" id="cs-grid"></div>
  </div>
</section>

<!-- ============ DRAWER ============ -->
<div class="cs-overlay" id="cs-overlay"></div>
<aside class="cs-drawer" id="cs-drawer" role="dialog" aria-modal="true" aria-hidden="true">

  <div class="cs-drawer__scroll" id="cs-drawer-scroll">
    <div class="cs-drawer__topbar">
      <a href="#" target="_blank" rel="noopener" class="cs-drawer__visit" id="cs-drawer-site">
        <span>Visit site</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7"/><path d="M7 7h10v10"/></svg>
      </a>
      <button type="button" class="cs-drawer__close" id="cs-drawer-close" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>
    <div class="cs-drawer__progress"><div class="cs-drawer__progress-bar" id="cs-drawer-progress-bar"></div></div>

    <div class="cs-drawer__hero"><img id="cs-drawer-hero" src="" alt=""></div>

    <div class="cs-drawer__body">
      <span class="cs-drawer__tag" id="cs-drawer-tag"></span>
      <h2 class="cs-drawer__title" id="cs-drawer-title"></h2>
      <p class="cs-drawer__tagline" id="cs-drawer-tagline"></p>

      <div class="cs-drawer__section">
        <h4>The Challenge</h4>
        <p id="cs-drawer-challenge"></p>
      </div>

      <div class="cs-drawer__section">
        <h4>The Solution</h4>
        <ul id="cs-drawer-solution"></ul>
      </div>

      <div class="cs-drawer__gallery" id="cs-drawer-gallery"></div>

      <div class="cs-drawer__section">
        <h4>The Results</h4>
        <ul id="cs-drawer-results"></ul>
      </div>

      <div class="cs-drawer__section cs-drawer__contact-text">
        <h3>Would you like to know more about the project?</h3>
        <p>To find out more about our work or any of our other case studies, get in touch. Mail us on <b>hello@digibeat.com</b> or call <b>+91 480 2733 555</b>.</p>
      </div>
    </div>
  </div>

  <div class="cs-drawer__footer">
    <a href="contact.php" class="cs-btn-outline">
      Let's talk
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </a>
    <div class="cs-drawer__navgroup">
      <button type="button" class="cs-drawer__navicon" id="cs-drawer-prev" aria-label="Previous case study">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
      </button>
      <button type="button" class="cs-drawer__navicon" id="cs-drawer-next" aria-label="Next case study">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </button>
    </div>
  </div>
</aside>

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
  /* ---------------------------------------------------------------
     Fixed set of industry categories for the "Industries" filter.
     These always appear in the dropdown regardless of which
     industries are currently represented in caseStudies below, so
     the filter matches the categories you defined up front.
     Keep the `industry` value on each case study object in sync with
     one of these strings (exact match, case-sensitive) so filtering
     works correctly.
  ----------------------------------------------------------------- */
  var INDUSTRY_OPTIONS = [
    'Healthcare, Hospitals & Wellness',
    'Education & Training',
    'Construction, Real Estate & Interior Design',
    'Food & Agriculture',
    'Hospitality & Commercial Equipment',
    'Non-Profit & Social Welfare'
  ];

  /* ---------------------------------------------------------------
     CASE STUDY DATA
     Add a new case study by pushing another object into this array.
     Images below use placeholder photography (picsum.photos) — swap
     "cardImage" / "heroImage" / "gallery" for your own project photos
     and screenshots before this goes live.
  ----------------------------------------------------------------- */
  var caseStudies = [
    {
      id: 'hulul-kitchen',
      industry: 'Hospitality & Commercial Equipment',
      title: 'Hulul Kitchen',
      tag: 'Hospitality · Equipment',
      tagline: 'From a local equipment store to a trusted kitchen solutions brand.',
      site: 'https://www.hululkitchen.sa',
      cardImage: 'assets/images/hulul.png',
      heroImage: 'https://picsum.photos/seed/hulul-hero/1200/750',
      gallery: [
        'https://picsum.photos/seed/hulul-gallery-1/700/525',
        'https://picsum.photos/seed/hulul-gallery-2/700/525'
      ],
      challenge: 'Hulul Kitchen, a supplier of commercial and home kitchen equipment, needed a professional online presence to match the scale of their growing business. Their previous website lacked structure, product clarity, and strong branding — making it hard for customers to browse equipment or understand the range on offer.',
      solution: [
        'A dedicated <b>product gallery</b> showcasing kitchen equipment',
        'Organized <b>equipment categories</b> for easy navigation',
        'A professional <b>brand-focused design</b> with consistent colors and layout',
        'A <b>responsive structure</b> for seamless viewing on any device'
      ],
      results: [
        'Stronger digital presence &amp; improved brand perception',
        'Increased product inquiries through better visibility',
        'Enhanced customer experience with faster, clearer navigation',
        'Better engagement from clean presentation &amp; optimized layout'
      ]
    }
    ,{
      id: 'your-project-slug',              // unique, used internally — lowercase, hyphens
      industry: 'Food & Agriculture',        // MUST exactly match one from INDUSTRY_OPTIONS
      title: 'Project Name',
      tag: 'Food & Agriculture · Retail',    // small chip shown on the card + drawer
      tagline: 'A one-line summary of the transformation.',
      site: 'https://example.com',
      cardImage: 'assets/images/your-project-card.png',
      heroImage: 'assets/images/your-project-hero.png',
      gallery: [
        'assets/images/your-project-1.png',
        'assets/images/your-project-2.png'
      ],
      challenge: 'What the client came to you with — the problem before you got involved.',
      solution: [
        'What you <b>built</b> — point one',
        'What you <b>built</b> — point two',
        'A third solution point if useful'
      ],
      results: [
        'A measurable or qualitative result',
        'Another result'
      ]
    }

    /*
    ,{
      id: 'your-next-project',
      industry: 'Healthcare, Hospitals & Wellness', // must match INDUSTRY_OPTIONS exactly
      title: 'Project Name',
      tag: 'Healthcare · Clinic',
      tagline: 'A one-line summary of the transformation.',
      site: 'https://example.com',
      cardImage: 'https://your-cdn.com/card.jpg',
      heroImage: 'https://your-cdn.com/hero.jpg',
      gallery: ['https://your-cdn.com/g1.jpg', 'https://your-cdn.com/g2.jpg'],
      challenge: 'What the client came to you with.',
      solution: ['What you <b>built</b>', 'A second solution point'],
      results: ['A result', 'Another result']
    }
    */
  ];

  var state = { industries: new Set(), search: '', current: [] };

  var grid = document.getElementById('cs-grid');
  var countEl = document.getElementById('cs-count');

  function buildFilterPanel(panelId, selectedSet, countId, values) {
    var panel = document.getElementById(panelId);
    panel.innerHTML = values.map(function (v, i) {
      var id = panelId + '-opt-' + i;
      return '<label class="cs-filter__option" for="' + id + '">' +
             '<input type="checkbox" id="' + id + '" value="' + v + '"> ' + v +
             '</label>';
    }).join('') + (values.length ? '<button type="button" class="cs-filter__clear" data-clear="' + panelId + '">Clear</button>' : '<div style="padding:8px;color:var(--cs-muted);font-size:13.5px;">No options yet</div>');

    panel.querySelectorAll('input[type=checkbox]').forEach(function (box) {
      box.addEventListener('change', function () {
        if (box.checked) { selectedSet.add(box.value); } else { selectedSet.delete(box.value); }
        document.getElementById(countId).style.display = selectedSet.size ? 'inline-flex' : 'none';
        document.getElementById(countId).textContent = selectedSet.size;
        render();
      });
    });
    var clearBtn = panel.querySelector('[data-clear]');
    if (clearBtn) {
      clearBtn.addEventListener('click', function () {
        selectedSet.clear();
        panel.querySelectorAll('input[type=checkbox]').forEach(function (b) { b.checked = false; });
        document.getElementById(countId).style.display = 'none';
        render();
      });
    }
  }

  function matchesFilters(cs) {
    var industryMatch = state.industries.size === 0 || state.industries.has(cs.industry);
    if (!industryMatch) return false;

    if (!state.search) return true;
    var haystack = (
      cs.title + ' ' + cs.tagline + ' ' + cs.tag + ' ' + cs.industry
    ).toLowerCase();
    return haystack.indexOf(state.search) !== -1;
  }

  function render() {
    var filtered = caseStudies.filter(matchesFilters);
    state.current = filtered;
    countEl.textContent = '(' + filtered.length + ')';

    if (!filtered.length) {
      grid.innerHTML = '<p class="cs-empty">No case studies match your search or filters yet.</p>';
      return;
    }

    grid.innerHTML = filtered.map(function (cs) {
      return '<button type="button" class="cs-card" data-id="' + cs.id + '">' +
        '<span class="cs-card__img">' +
          '<img src="' + cs.cardImage + '" alt="' + cs.title + '" loading="lazy">' +
          '<span class="cs-card__chip">' + cs.tag + '</span>' +
          '<span class="cs-card__arrow"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7"/><path d="M7 7h10v10"/></svg></span>' +
        '</span>' +
        '<span class="cs-card__title">' + cs.title + '</span>' +
        '</button>';
    }).join('');

    grid.querySelectorAll('.cs-card').forEach(function (card) {
      card.addEventListener('click', function () { openDrawer(card.getAttribute('data-id')); });
    });
  }

  /* -------------------- search bar -------------------- */
  var searchInput = document.getElementById('cs-search-input');
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      state.search = searchInput.value.trim().toLowerCase();
      render();
    });
  }

  /* -------------------- filter dropdown open/close -------------------- */
  function wireDropdown(filterId) {
    var wrap = document.getElementById(filterId);
    var btn = wrap.querySelector('.cs-filter__btn');
    var panel = wrap.querySelector('.cs-filter__panel');
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var willOpen = !panel.classList.contains('is-open');
      document.querySelectorAll('.cs-filter__panel').forEach(function (p) { p.classList.remove('is-open'); });
      document.querySelectorAll('.cs-filter__btn').forEach(function (b) { b.classList.remove('is-open'); });
      if (willOpen) { panel.classList.add('is-open'); btn.classList.add('is-open'); }
    });
  }
  document.addEventListener('click', function () {
    document.querySelectorAll('.cs-filter__panel').forEach(function (p) { p.classList.remove('is-open'); });
    document.querySelectorAll('.cs-filter__btn').forEach(function (b) { b.classList.remove('is-open'); });
  });

  /* -------------------- hero scroll button -------------------- */
  var scrollBtn = document.getElementById('cs-scroll-list');
  var listAnchor = document.getElementById('cs-list');
  if (scrollBtn && listAnchor) {
    scrollBtn.addEventListener('click', function () {
      listAnchor.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  /* -------------------- drawer -------------------- */
  var overlay = document.getElementById('cs-overlay');
  var drawer = document.getElementById('cs-drawer');
  var drawerScroll = document.getElementById('cs-drawer-scroll');
  var drawerHero = document.getElementById('cs-drawer-hero');
  var drawerTag = document.getElementById('cs-drawer-tag');
  var drawerTitle = document.getElementById('cs-drawer-title');
  var drawerTagline = document.getElementById('cs-drawer-tagline');
  var drawerSite = document.getElementById('cs-drawer-site');
  var drawerChallenge = document.getElementById('cs-drawer-challenge');
  var drawerSolution = document.getElementById('cs-drawer-solution');
  var drawerResults = document.getElementById('cs-drawer-results');
  var drawerGallery = document.getElementById('cs-drawer-gallery');
  var drawerPrev = document.getElementById('cs-drawer-prev');
  var drawerNext = document.getElementById('cs-drawer-next');
  var progressBar = document.getElementById('cs-drawer-progress-bar');

  var activeIndex = -1;

  function openDrawer(id) {
    var list = state.current.length ? state.current : caseStudies;
    var idx = list.findIndex(function (cs) { return cs.id === id; });
    if (idx === -1) return;
    activeIndex = idx;
    populateDrawer(list[idx]);

    drawerPrev.disabled = idx === 0;
    drawerNext.disabled = idx === list.length - 1;

    overlay.classList.add('is-open');
    drawer.classList.add('is-open');
    drawer.setAttribute('aria-hidden', 'false');
    document.body.classList.add('cs-lock');
  }

  function populateDrawer(cs) {
    drawerScroll.scrollTop = 0;
    progressBar.style.width = '0%';
    drawerHero.src = cs.heroImage;
    drawerHero.alt = cs.title;
    drawerTag.textContent = cs.tag;
    drawerTitle.textContent = cs.title;
    drawerTagline.textContent = cs.tagline;
    drawerSite.href = cs.site;
    drawerChallenge.textContent = cs.challenge;
    drawerSolution.innerHTML = cs.solution.map(function (s) { return '<li>' + s + '</li>'; }).join('');
    drawerResults.innerHTML = cs.results.map(function (r) { return '<li>' + r + '</li>'; }).join('');
    drawerGallery.innerHTML = cs.gallery.map(function (src) {
      return '<img src="' + src + '" alt="' + cs.title + ' screenshot" loading="lazy">';
    }).join('');
  }

  function closeDrawer() {
    overlay.classList.remove('is-open');
    drawer.classList.remove('is-open');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('cs-lock');
  }

  document.getElementById('cs-drawer-close').addEventListener('click', closeDrawer);
  overlay.addEventListener('click', closeDrawer);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer.classList.contains('is-open')) closeDrawer();
  });

  drawerScroll.addEventListener('scroll', function () {
    var max = drawerScroll.scrollHeight - drawerScroll.clientHeight;
    var pct = max > 0 ? (drawerScroll.scrollTop / max) * 100 : 0;
    progressBar.style.width = pct + '%';
  });

  drawerPrev.addEventListener('click', function () {
    var list = state.current.length ? state.current : caseStudies;
    if (activeIndex <= 0) return;
    activeIndex -= 1;
    populateDrawer(list[activeIndex]);
    drawerPrev.disabled = activeIndex === 0;
    drawerNext.disabled = activeIndex === list.length - 1;
  });
  drawerNext.addEventListener('click', function () {
    var list = state.current.length ? state.current : caseStudies;
    if (activeIndex >= list.length - 1) return;
    activeIndex += 1;
    populateDrawer(list[activeIndex]);
    drawerPrev.disabled = activeIndex === 0;
    drawerNext.disabled = activeIndex === list.length - 1;
  });

  /* -------------------- init -------------------- */
  buildFilterPanel('cs-industry-panel', state.industries, 'cs-industry-count', INDUSTRY_OPTIONS);
  wireDropdown('cs-filter-industry');
  render();

  /* -------------------- header height sync -------------------- */
  var headerWrap = document.getElementById('cs-header-wrap');
  function syncHeaderHeight() {
    if (!headerWrap) return;
    var h = headerWrap.offsetHeight;
    if (h > 0) { document.documentElement.style.setProperty('--cs-header-h', h + 'px'); }
  }
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);
})();
</script>

<?php include 'footer.php'; ?>
</body>
</html>