<?php
/**
 * case-studies.php
 * "Case Studies" page — v5.
 *
 * Changes from v4:
 *  - The "Would you like to know more?" panel no longer has the grey
 *    background block — it's now plain white body copy, matching the
 *    reference: bold heading, muted paragraph, then a hairline divider.
 *  - "Let's talk" is now an outline button (white background, dark
 *    text, arrow icon) instead of a solid indigo pill.
 *  - Previous / Next are now icon-only arrow buttons joined in a single
 *    pill, sitting to the right of "Let's talk" on the same row.
 *  - That whole row (Let's talk + Previous/Next) is now a permanent
 *    footer: it lives outside the drawer's scrollable area, so it
 *    never scrolls out of view — only the hero image, story, and
 *    gallery scroll underneath it. This required splitting the drawer
 *    into a scrollable content region plus a fixed footer, rather than
 *    letting the whole drawer scroll as one block.
 *
 * To add a new case study: duplicate one object inside the
 * `caseStudies` array near the bottom of this file — cards, the
 * Industries filter, and the drawer are all generated from it.
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
<title>Case Studies — Digibeat</title>
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
  .cs-btn-primary svg {
    width: 16px;
    height: 16px;
    stroke: currentColor;
    flex-shrink: 0;
    transition: transform 0.15s ease;
  }
  .cs-btn-primary:hover svg {
    transform: translateX(4px);
  }

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

  /* ================= HERO — Futuristic HUD Split Layout ================= */
  .cs-hero {
    background: #ffffff;
    min-height: calc(100vh - var(--cs-header-h));
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 80px 0;
  }

  /* Grid layout inside wrap */
  .cs-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 60px;
    align-items: center;
    width: 100%;
  }

  .cs-hero__left {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    position: relative;
    z-index: 2;
  }

  .cs-hero__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    border-radius: 4px;
    background: rgba(61, 90, 254, 0.05);
    color: #3d5afe;
    font-family: var(--cs-font-mono, monospace);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 24px;
    border: 1px solid rgba(61, 90, 254, 0.15);
  }
  .cs-hero__eyebrow-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #3d5afe;
    animation: cs-pulse-dot 1.5s infinite;
  }
  @keyframes cs-pulse-dot {
    0% { opacity: 0.4; }
    50% { opacity: 1; }
    100% { opacity: 0.4; }
  }

  .cs-hero h1 {
    font-weight: 900;
    font-size: clamp(36px, 4.8vw, 60px);
    line-height: 1.08;
    letter-spacing: -0.035em;
    color: #0b1437; /* Black base */
    margin: 0 0 24px;
  }
  .cs-hero h1 span.blue-text {
    color: #3d5afe; /* Blue highlight */
  }

  .cs-hero p.cs-hero__sub {
    color: #515b81;
    font-size: 17px;
    line-height: 1.75;
    max-width: 500px;
    margin: 0 0 40px;
  }

  .cs-hero__actions {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  /* Right Side: Futuristic Telemetry Console (White + Blue) */
  .cs-hero__right {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: flex-end;
  }

  .cs-hud-console {
    width: 100%;
    max-width: 440px;
    background: #ffffff;
    border: 1px solid rgba(61, 90, 254, 0.16);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 20px 50px rgba(61, 90, 254, 0.06);
    position: relative;
  }
  .cs-hud-console::before {
    content: '';
    position: absolute;
    top: -1px; left: 30px; right: 30px;
    height: 1px;
    background: linear-gradient(90deg, transparent, #3d5afe, transparent);
  }

  /* Console Header */
  .cs-hud-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
    border-bottom: 1px dashed rgba(61, 90, 254, 0.12);
    padding-bottom: 14px;
    font-family: monospace;
    font-size: 11px;
    color: #3d5afe;
    letter-spacing: 0.05em;
  }
  .cs-hud-status {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #3d5afe;
    font-weight: 700;
  }

  /* Wave Graph */
  .cs-hud-graph {
    width: 100%;
    height: 80px;
    margin-bottom: 28px;
    background: rgba(61, 90, 254, 0.01);
    border: 1px solid rgba(61, 90, 254, 0.06);
    border-radius: 8px;
    overflow: hidden;
    position: relative;
  }
  .cs-hud-grid {
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(rgba(61, 90, 254, 0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(61, 90, 254, 0.04) 1px, transparent 1px);
    background-size: 10px 10px;
  }

  /* SVG Wave styling */
  .cs-hud-svg-wave {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 2;
  }
  .cs-hud-wave-path {
    stroke: #3d5afe;
    stroke-width: 2px;
    fill: none;
    stroke-dasharray: 600;
    stroke-dashoffset: 600;
    animation: cs-wave-draw 8s linear infinite;
  }
  @keyframes cs-wave-draw {
    to { stroke-dashoffset: 0; }
  }

  /* Stats Output List */
  .cs-hud-metrics {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .cs-hud-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 16px;
    background: rgba(61, 90, 254, 0.02);
    border: 1px solid rgba(61, 90, 254, 0.06);
    border-radius: 8px;
    font-family: monospace;
  }
  .cs-hud-label {
    color: #515b81;
    font-size: 12px;
    text-transform: uppercase;
  }
  .cs-hud-value {
    color: #3d5afe;
    font-size: 16px;
    font-weight: 700;
  }

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

    /* Scroll reveal initial state */
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
  }
  .cs-page-head.is-visible {
    opacity: 1;
    transform: translateY(0);
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

  .cs-filters { display: flex; gap: 12px; flex-wrap: wrap; }
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
    min-width: 220px;
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
  .cs-filter__option input { accent-color: var(--cs-accent); width: 16px; height: 16px; }
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
    gap: 28px;
  }

  /* Card — matches index.php case study card style */
  .cs-card {
    background: #ffffff;
    border: 1px solid rgba(61, 90, 254, 0.12);
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    box-shadow: 0 8px 30px rgba(61, 90, 254, 0.04);
    display: flex;
    flex-direction: column;
    text-align: left;
    font-family: var(--font-body);
    color: inherit;
    padding: 0;

    /* Scroll reveal initial state */
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                transform 0.8s cubic-bezier(0.25, 1, 0.5, 1),
                border-color 0.4s ease, 
                box-shadow 0.4s ease;
  }
  .cs-card.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
  .cs-card.is-visible:hover {
    border-color: rgba(61, 90, 254, 0.4);
    box-shadow: 0 20px 40px rgba(61, 90, 254, 0.12);
    transform: translateY(-6px);
  }

  /* Corner tech brackets */
  .cs-card__bracket {
    position: absolute;
    width: 10px;
    height: 10px;
    border: 1.5px solid rgba(61, 90, 254, 0.3);
    pointer-events: none;
    z-index: 10;
    opacity: 0.7;
    transition: all 0.3s ease;
  }
  .cs-card:hover .cs-card__bracket { border-color: rgba(61, 90, 254, 1); opacity: 1; }
  .cs-card__bracket-tl { top: 12px; left: 12px; border-right: none; border-bottom: none; }
  .cs-card__bracket-tr { top: 12px; right: 12px; border-left: none; border-bottom: none; }
  .cs-card__bracket-bl { bottom: 12px; left: 12px; border-right: none; border-top: none; }
  .cs-card__bracket-br { bottom: 12px; right: 12px; border-left: none; border-top: none; }

  /* Laser sweep on hover */
  .cs-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #3d5afe, transparent);
    box-shadow: 0 0 12px #3d5afe;
    opacity: 0;
    pointer-events: none;
    z-index: 11;
  }
  .cs-card:hover::after {
    animation: cs-card-laser-pg 1.5s ease-in-out infinite;
  }
  @keyframes cs-card-laser-pg {
    0% { top: 0%; opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { top: 100%; opacity: 0; }
  }

  .cs-card__media {
    position: relative;
    aspect-ratio: 4 / 3;
    overflow: hidden;
    background: #f1f5f9;
    border-bottom: 1px solid rgba(61, 90, 254, 0.08);
    margin-bottom: 0;
  }
  .cs-card__media img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    opacity: 0.95;
    transition: transform 0.5s ease, opacity 0.5s ease;
  }
  .cs-card:hover .cs-card__media img { transform: scale(1.05); opacity: 1; }

  .cs-card__body {
    padding: 24px 26px 28px;
    position: relative;
  }

  .cs-card__chip {
    display: inline-flex;
    align-items: center;
    padding: 5px 12px;
    border-radius: 999px;
    background: rgba(61, 90, 254, 0.08);
    font-size: 11px;
    font-weight: 700;
    color: #3d5afe;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 12px;
  }

  .cs-card__name {
    font-family: 'Inter', sans-serif;
    font-size: 19px;
    font-weight: 700;
    letter-spacing: -0.01em;
    line-height: 1.35;
    color: #0b1437;
    margin: 0 0 8px;
  }

  .cs-card__role {
    font-size: 14px;
    color: #64748b;
    line-height: 1.55;
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
    .cs-hero__grid { grid-template-columns: 1fr; gap: 48px; }
    .cs-hero__right { justify-content: center; }
    .cs-hud-console { max-width: 100%; }
    .cs-grid { grid-template-columns: 1fr 1fr; }
    .cs-drawer { width: 70%; }
  }

  @media (max-width: 640px) {
    :root { --cs-drawer-pad: 22px; }
    .cs-wrap { padding: 0 20px; }
    .cs-hero { padding: 48px 0; }
    .cs-hero__left { align-items: center; text-align: center; }
    .cs-hero p.cs-hero__sub { margin-left: auto; margin-right: auto; }
    .cs-hero__actions { justify-content: center; }
    .cs-page-head { padding: 4px 0 28px; flex-direction: column; align-items: flex-start; }
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
    .cs-hero h1 { font-size: 32px; }
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
    <div class="cs-hero__grid">
      <!-- Left typographics -->
      <div class="cs-hero__left">
        <div class="cs-hero__eyebrow">
          <span class="cs-hero__eyebrow-dot"></span>
          DATA STREAM // ACTIVE STATE
        </div>
        <h1>Precision <span class="blue-text">Logic</span>.<br>Proven <span class="blue-text">Performance</span>.</h1>
        <p class="cs-hero__sub">
          At Digibeat, every project is a partnership. Explore how our strategies, designs, and solutions help businesses overcome challenges, accelerate growth, and build elite digital experiences.
        </p>
        <div class="cs-hero__actions">
          <button type="button" class="cs-btn-outline" id="cs-scroll-list" style="border-color: #3d5afe; color: #3d5afe;">
            Explore Case Studies
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </button>
        </div>
      </div>

      <!-- Right HUD console -->
      <div class="cs-hero__right">
        <div class="cs-hud-console">
          <div class="cs-hud-header">
            <span>SYS: TELEMETRY</span>
            <div class="cs-hud-status">
              <span class="cs-hero__eyebrow-dot"></span>
              ONLINE
            </div>
          </div>
          
          <div class="cs-hud-graph">
            <div class="cs-hud-grid"></div>
            <!-- Interactive live wave -->
            <svg class="cs-hud-svg-wave" viewBox="0 0 400 80">
              <path class="cs-hud-wave-path" d="M 0,40 C 50,20 100,60 150,40 C 200,20 250,60 300,40 C 350,20 400,40 450,40" />
            </svg>
          </div>

          <div class="cs-hud-metrics">
            <div class="cs-hud-row">
              <span class="cs-hud-label">Projects Delivered</span>
              <span class="cs-hud-value">50+</span>
            </div>
            <div class="cs-hud-row">
              <span class="cs-hud-label">Client Satisfaction</span>
              <span class="cs-hud-value">98%</span>
            </div>
            <div class="cs-hud-row">
              <span class="cs-hud-label">Industries Served</span>
              <span class="cs-hud-value">12+</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PAGE HEAD ============ -->
<section class="cs-wrap cs-page-head-section">
  <div class="cs-page-head" id="cs-list">
    <div class="cs-page-head__title">
      <h2>Case Studies</h2>
      <span class="cs-page-head__count" id="cs-count">(0)</span>
    </div>

    <div class="cs-filters">
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
     CASE STUDY DATA
     Add a new case study by pushing another object into this array.
     Images below use placeholder photography (picsum.photos) — swap
     "cardImage" / "heroImage" / "gallery" for your own project photos
     and screenshots before this goes live.
  ----------------------------------------------------------------- */
  var caseStudies = [
    {
      id: 'hulul-kitchen',
      industry: 'E-commerce',
      title: 'Hulul Kitchen',
      tag: 'E-commerce · Equipment',
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

    /*
    ,{
      id: 'your-next-project',
      industry: 'Healthcare',
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

  var state = { industries: new Set(), current: [] };

  var grid = document.getElementById('cs-grid');
  var countEl = document.getElementById('cs-count');

  function uniqueValues(key) {
    var set = new Set();
    caseStudies.forEach(function (cs) { set.add(cs[key]); });
    return Array.from(set);
  }

  function buildFilterPanel(panelId, key, selectedSet, countId) {
    var panel = document.getElementById(panelId);
    var values = uniqueValues(key);
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
    return state.industries.size === 0 || state.industries.has(cs.industry);
  }

  function render() {
    var filtered = caseStudies.filter(matchesFilters);
    state.current = filtered;
    countEl.textContent = '(' + filtered.length + ')';

    if (!filtered.length) {
      grid.innerHTML = '<p class="cs-empty">No case studies match those filters yet.</p>';
      return;
    }

    grid.innerHTML = filtered.map(function (cs) {
      return '<button type="button" class="cs-card" data-id="' + cs.id + '" aria-haspopup="dialog" aria-label="Open ' + cs.title + ' details">' +
        '<div class="cs-card__bracket cs-card__bracket-tl"></div>' +
        '<div class="cs-card__bracket cs-card__bracket-tr"></div>' +
        '<div class="cs-card__bracket cs-card__bracket-bl"></div>' +
        '<div class="cs-card__bracket cs-card__bracket-br"></div>' +
        '<div class="cs-card__media">' +
          '<img src="' + cs.cardImage + '" alt="' + cs.title + '" loading="lazy">' +
        '</div>' +
        '<div class="cs-card__body">' +
          '<span class="cs-card__chip">' + cs.tag + '</span>' +
          '<h3 class="cs-card__name">' + cs.title + '</h3>' +
          '<p class="cs-card__role">' + cs.tagline + '</p>' +
        '</div>' +
      '</button>';
    }).join('');

    var cards = grid.querySelectorAll('.cs-card');
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    cards.forEach(function (card) {
      card.addEventListener('click', function () { openDrawer(card.getAttribute('data-id')); });
      revealObserver.observe(card);
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
  buildFilterPanel('cs-industry-panel', 'industry', state.industries, 'cs-industry-count');
  wireDropdown('cs-filter-industry');
  render();

  // Scroll reveal for page head
  var pageHead = document.getElementById('cs-list');
  if (pageHead) {
    var headObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          headObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });
    headObserver.observe(pageHead);
  }

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
</body>
</html>