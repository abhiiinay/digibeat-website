<?php
/**
 * services/digital.php
 * Neat, premium, clean light-themed Digital Marketing Services page.
 * Aligns strictly with requested pillars: SEO, Social Media, Content, ORM, and Analytics.
 * Displays each pillar as separate, alternating cards with images and inline simulators.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Marketing Services — Digibeat</title>

<!-- Fonts: Space Grotesk, Inter, IBM Plex Mono -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800&family=IBM+Plex+Mono:wght@400;600&display=swap" rel="stylesheet">

<style>
  /* ═══════════════════════════════════════════════
     DESIGN SYSTEM & CONSTANTS (PREMIUM LIGHT THEME)
     ═══════════════════════════════════════════════ */
  :root {
    --dm-bg: #f4f7fc;
    --dm-bg-gradient: linear-gradient(135deg, #f0f4fa 0%, #ffffff 50%, #e8effd 100%);
    --dm-card-bg: rgba(255, 255, 255, 0.85);
    --dm-card-hover: rgba(255, 255, 255, 0.95);
    --dm-border: rgba(15, 23, 42, 0.08);
    --dm-border-glow: rgba(37, 99, 235, 0.25);
    
    --dm-text-main: #0f172a;
    --dm-text-muted: #475569;
    --dm-text-dim: #64748b;
    
    --dm-blue: #2563eb;
    --dm-blue-hover: #1d4ed8;
    --dm-azure: #3b82f6;
    --dm-sky: #0284c7;
    --dm-emerald: #059669;
    --dm-pink: #db2777;
    
    --dm-shadow-soft: 0 10px 30px -10px rgba(15, 23, 42, 0.04);
    --dm-shadow-med: 0 20px 40px -15px rgba(15, 23, 42, 0.08);
    --dm-shadow-glow: 0 0 30px rgba(37, 99, 235, 0.12);

    --dm-font-heading: 'Space Grotesk', -apple-system, sans-serif;
    --dm-font-body: 'Inter', -apple-system, sans-serif;
    --dm-font-mono: 'IBM Plex Mono', monospace;
  }

  html, body {
    background: var(--dm-bg) !important;
    background-image: var(--dm-bg-gradient) !important;
    color: var(--dm-text-main) !important;
    font-family: var(--dm-font-body);
    margin: 0;
    padding: 0;
    max-width: 100%;
    overflow-x: hidden;
    scroll-behavior: smooth;
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: var(--dm-font-heading);
    font-weight: 700;
    color: var(--dm-text-main);
    margin: 0;
    letter-spacing: -0.02em;
  }

  p {
    font-family: var(--dm-font-body);
    font-size: 16.5px;
    line-height: 1.75;
    color: var(--dm-text-muted);
    margin: 0;
  }

  .dm-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 28px;
  }

  /* Ambient Blur Glow Orbs */
  .dm-glow-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(130px);
    z-index: 0;
    pointer-events: none;
    opacity: 0.4;
  }
  .dm-glow-1 {
    top: 5%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, #e0e7ff, #dbeafe, transparent 70%);
  }
  .dm-glow-2 {
    top: 40%;
    left: -15%;
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, #eff6ff, #e0f2fe, transparent 70%);
  }

  /* Clean Professional Badges */
  .dm-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--dm-font-mono);
    font-size: 11.5px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--dm-blue);
    background: rgba(37, 99, 235, 0.06);
    border: 1px solid rgba(37, 99, 235, 0.15);
    padding: 6px 14px;
    border-radius: 99px;
    backdrop-filter: blur(8px);
  }
  .dm-badge-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--dm-blue);
    box-shadow: 0 0 8px var(--dm-blue);
  }

  /* ═══════════════════════════════════════════════
     HERO SECTION
     ═══════════════════════════════════════════════ */
  .dm-hero {
    position: relative;
    padding: 100px 0 80px;
    min-height: calc(100vh - 72px);
    display: flex;
    align-items: center;
    overflow: hidden;
    z-index: 1;
  }
  .dm-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 60px;
    align-items: center;
    width: 100%;
  }
  .dm-hero__content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .dm-hero__title {
    font-size: clamp(44px, 5.5vw, 72px);
    line-height: 1.1;
    margin: 20px 0 24px;
    color: var(--dm-text-main);
  }
  .dm-hero__title span.gradient-text {
    background: linear-gradient(135deg, var(--dm-blue) 0%, var(--dm-sky) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: block;
  }
  .dm-hero__desc {
    font-size: 17.5px;
    line-height: 1.75;
    color: var(--dm-text-muted);
    max-width: 580px;
    margin-bottom: 36px;
  }
  
  /* Hero Action Buttons */
  .dm-hero__actions {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 48px;
  }
  .dm-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 16px 36px;
    border-radius: 12px;
    font-family: var(--dm-font-heading);
    font-weight: 700;
    font-size: 15.5px;
    color: #ffffff;
    background: var(--dm-blue);
    border: none;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.3);
    transition: all 0.25s ease;
  }
  .dm-btn-primary:hover {
    background: var(--dm-blue-hover);
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(37, 99, 235, 0.45);
    color: #ffffff;
  }
  .dm-btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 16px 32px;
    border-radius: 12px;
    font-family: var(--dm-font-heading);
    font-weight: 600;
    font-size: 15.5px;
    color: var(--dm-text-main);
    background: #ffffff;
    border: 1px solid var(--dm-border);
    text-decoration: none;
    box-shadow: var(--dm-shadow-soft);
    transition: all 0.25s ease;
  }
  .dm-btn-secondary:hover {
    background: #f8fafc;
    border-color: var(--dm-blue);
    color: var(--dm-blue);
    transform: translateY(-2px);
  }

  /* Performance Counters */
  .dm-hero__metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    width: 100%;
    padding-top: 32px;
    border-top: 1px solid var(--dm-border);
  }
  .dm-hero-stat-val {
    font-family: var(--dm-font-mono);
    font-size: 26px;
    font-weight: 700;
    color: var(--dm-blue);
    display: block;
    margin-bottom: 4px;
  }
  .dm-hero-stat-lbl {
    font-size: 12.5px;
    color: var(--dm-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  /* Hero Card Frame */
  .dm-hero__visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .dm-hero__card-frame {
    position: relative;
    width: 100%;
    max-width: 460px;
    border-radius: 24px;
    padding: 12px;
    background: var(--dm-card-bg);
    border: 1px solid rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(20px);
    box-shadow: var(--dm-shadow-med);
    animation: dm-float 6s ease-in-out infinite;
  }
  @keyframes dm-float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
  }
  .dm-hero__card-frame img {
    width: 100%;
    height: auto;
    border-radius: 16px;
    display: block;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  }
  
  /* Symmetrical HUD badges on hero image */
  .dm-hud-badge {
    position: absolute;
    padding: 12px 18px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid var(--dm-border);
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
    display: flex;
    align-items: center;
    gap: 12px;
    z-index: 10;
  }
  .dm-hud-badge-1 {
    top: -15px;
    left: -20px;
  }
  .dm-hud-badge-2 {
    bottom: -15px;
    right: -10px;
  }
  .dm-hud-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: rgba(37, 99, 235, 0.08);
    border: 1px solid rgba(37, 99, 235, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--dm-blue);
  }
  .dm-hud-info h4 {
    font-size: 13.5px;
    font-family: var(--dm-font-mono);
    color: var(--dm-text-main);
  }
  .dm-hud-info p {
    font-size: 11px;
    color: var(--dm-text-muted);
  }

  /* Scroll cue */
  .dm-scroll-cue {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    font-family: var(--dm-font-mono);
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--dm-text-dim);
    cursor: pointer;
    margin-top: 40px;
    transition: color 0.25s ease;
  }
  .dm-scroll-cue:hover {
    color: var(--dm-blue);
  }
  .dm-scroll-cue__mouse {
    width: 22px;
    height: 36px;
    border: 2px solid rgba(15, 23, 42, 0.15);
    border-radius: 10px;
    position: relative;
  }
  .dm-scroll-cue:hover .dm-scroll-cue__mouse {
    border-color: var(--dm-blue);
  }
  .dm-scroll-cue__mouse::after {
    content: '';
    width: 4px;
    height: 6px;
    background: var(--dm-blue);
    border-radius: 2px;
    position: absolute;
    left: 50%;
    top: 6px;
    transform: translateX(-50%);
    animation: dm-wheel 1.6s infinite;
  }
  @keyframes dm-wheel {
    0% { top: 6px; opacity: 1; }
    100% { top: 18px; opacity: 0; }
  }

  /* ═══════════════════════════════════════════════
     SEPARATE CARDS LAYOUT SECTION
     ═══════════════════════════════════════════════ */
  .dm-services-section {
    position: relative;
    padding: 100px 0;
    z-index: 1;
  }
  .dm-cards-stack {
    display: flex;
    flex-direction: column;
    gap: 64px;
  }
  
  /* Individual Alternating Service Card */
  .dm-service-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 56px;
    background: var(--dm-card-bg);
    border: 1px solid var(--dm-border);
    border-radius: 24px;
    padding: 48px;
    backdrop-filter: blur(16px);
    box-shadow: var(--dm-shadow-med);
    transition: all 0.3s ease;
  }
  .dm-service-card:hover {
    border-color: var(--dm-border-glow);
    box-shadow: var(--dm-shadow-med), var(--dm-shadow-glow);
  }
  
  /* Alternate rows on desktop */
  .dm-service-card:nth-child(even) {
    flex-direction: row-reverse;
  }

  /* Left/Right Card Columns */
  .dm-card-info-col {
    flex: 1.15;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .dm-card-img-col {
    flex: 0.85;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  /* Image Frame inside Card */
  .dm-card-img-frame {
    position: relative;
    width: 100%;
    max-width: 400px;
    border-radius: 20px;
    padding: 10px;
    background: #ffffff;
    border: 1px solid var(--dm-border);
    box-shadow: var(--dm-shadow-soft);
  }
  .dm-card-img-frame img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    display: block;
    object-fit: cover;
  }

  .dm-card-info-col h2 {
    font-size: clamp(28px, 3.2vw, 38px);
    line-height: 1.2;
    color: var(--dm-text-main);
    margin: 16px 0;
  }
  .dm-card-info-col h2 span.highlight {
    color: var(--dm-blue);
  }

  .dm-bullets {
    list-style: none;
    padding: 0;
    margin: 20px 0 24px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .dm-bullets li {
    font-size: 15.5px;
    color: var(--dm-text-main);
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .dm-bullets li svg {
    width: 18px;
    height: 18px;
    stroke: var(--dm-blue);
    fill: none;
    stroke-width: 3;
    flex-shrink: 0;
  }

  /* ═══════════════════════════════════════════════
     INTERACTIVE WIDGET STYLE (LIGHT THEME)
     ═══════════════════════════════════════════════ */
  .dm-widget-card {
    background: #ffffff;
    border: 1px solid var(--dm-border);
    border-radius: 18px;
    padding: 24px;
    margin-top: 12px;
    width: 100%;
    box-shadow: var(--dm-shadow-soft);
    position: relative;
    overflow: hidden;
  }
  .dm-widget-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--dm-blue), var(--dm-azure));
  }

  .dm-widget-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--dm-border);
  }
  .dm-widget-title {
    font-family: var(--dm-font-mono);
    font-size: 12.5px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--dm-blue);
    display: flex;
    align-items: center;
    gap: 8px;
  }

  /* SEO Simulator */
  .dm-seo-input-wrapper {
    position: relative;
    margin-bottom: 16px;
  }
  .dm-seo-input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 10px;
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    color: var(--dm-text-main);
    font-family: var(--dm-font-mono);
    font-size: 13.5px;
    outline: none;
    transition: all 0.3s ease;
  }
  .dm-seo-input:focus {
    border-color: var(--dm-blue);
    background: #ffffff;
    box-shadow: 0 0 10px rgba(37, 99, 235, 0.1);
  }
  .dm-seo-serp-preview {
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    border-radius: 10px;
    padding: 16px;
    margin-bottom: 16px;
  }
  .dm-serp-url {
    font-family: var(--dm-font-mono);
    font-size: 11.5px;
    color: var(--dm-emerald);
    margin-bottom: 4px;
  }
  .dm-serp-title {
    font-size: 15px;
    font-weight: 600;
    color: #1a0dab;
    margin-bottom: 4px;
    cursor: pointer;
  }
  .dm-serp-title:hover {
    text-decoration: underline;
  }
  .dm-serp-snippet {
    font-size: 13px;
    color: var(--dm-text-muted);
    line-height: 1.45;
  }

  .dm-score-meter {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-top: 14px;
  }
  .dm-meter-bar-track {
    flex: 1;
    height: 8px;
    background: #e2e8f0;
    border-radius: 99px;
    overflow: hidden;
  }
  .dm-meter-bar-fill {
    height: 100%;
    width: 88%;
    background: linear-gradient(90deg, var(--dm-azure), var(--dm-blue));
    border-radius: 99px;
    transition: width 0.5s ease;
  }
  .dm-score-val {
    font-family: var(--dm-font-mono);
    font-size: 15px;
    font-weight: 700;
    color: var(--dm-blue);
  }

  /* Social Virality Engine Widget */
  .dm-social-card {
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    border-radius: 12px;
    overflow: hidden;
  }
  .dm-social-head {
    padding: 12px 16px;
    display: flex;
    align-items: center;
    gap: 12px;
    border-bottom: 1px solid var(--dm-border);
  }
  .dm-social-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--dm-blue), var(--dm-sky));
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #ffffff;
    font-size: 11px;
  }
  .dm-social-user h5 {
    font-size: 13px;
    color: var(--dm-text-main);
  }
  .dm-social-user p {
    font-size: 11px;
    color: var(--dm-text-dim);
  }
  
  .dm-social-img-box {
    position: relative;
    aspect-ratio: 16/9;
    background: #edf2f9;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    overflow: hidden;
  }
  .dm-social-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .dm-social-actions {
    padding: 12px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffffff;
    border-top: 1px solid var(--dm-border);
  }
  .dm-like-btn {
    background: none;
    border: none;
    color: #ef4444;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: var(--dm-font-mono);
    font-size: 13.5px;
    font-weight: 600;
    padding: 0;
    outline: none;
  }
  .dm-heart-particle {
    position: absolute;
    font-size: 24px;
    pointer-events: none;
    z-index: 100;
    animation: dm-heart-float 1s ease-out forwards;
  }
  @keyframes dm-heart-float {
    0% { transform: translate(-50%, -50%) scale(0.5); opacity: 1; }
    100% { transform: translate(calc(-50% + var(--dx)), calc(-50% - 80px)) scale(1.2); opacity: 0; }
  }

  /* Funnel Matrix Widget */
  .dm-funnel-select {
    width: 100%;
    padding: 11px 14px;
    border-radius: 10px;
    background: #ffffff;
    border: 1px solid var(--dm-border);
    color: var(--dm-text-main);
    font-family: var(--dm-font-heading);
    font-size: 13.5px;
    margin-bottom: 16px;
    outline: none;
    cursor: pointer;
  }
  .dm-funnel-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
  }
  .dm-funnel-card {
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    border-radius: 10px;
    padding: 14px;
    transition: all 0.3s ease;
  }
  .dm-funnel-card.is-active {
    border-color: var(--dm-blue);
    background: rgba(37, 99, 235, 0.04);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.05);
  }
  .dm-funnel-tag {
    font-family: var(--dm-font-mono);
    font-size: 9.5px;
    text-transform: uppercase;
    color: var(--dm-blue);
    font-weight: 700;
    margin-bottom: 6px;
  }
  .dm-funnel-card h5 {
    font-size: 12.5px;
    color: var(--dm-text-main);
    line-height: 1.35;
    margin-bottom: 6px;
  }
  .dm-funnel-card p {
    font-size: 11px;
    line-height: 1.4;
    color: var(--dm-text-muted);
  }

  /* Sentiment Radar Scanner */
  .dm-radar-box {
    display: flex;
    align-items: center;
    gap: 20px;
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    border-radius: 12px;
    padding: 16px;
  }
  .dm-radar-display {
    position: relative;
    width: 84px;
    height: 84px;
    border-radius: 50%;
    border: 2px solid rgba(37, 99, 235, 0.2);
    background: radial-gradient(circle, rgba(37, 99, 235, 0.06), transparent 70%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .dm-radar-line {
    position: absolute;
    inset: 0;
    border-radius: 50%;
  }
  .dm-radar-line.is-scanning::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50%;
    height: 2px;
    background: linear-gradient(90deg, var(--dm-blue), transparent);
    transform-origin: 0% 0%;
    animation: dm-scan-spin 1.5s linear infinite;
  }
  @keyframes dm-scan-spin { to { transform: rotate(360deg); } }

  .dm-radar-score {
    font-family: var(--dm-font-mono);
    font-size: 17px;
    font-weight: 700;
    color: var(--dm-blue);
    z-index: 2;
  }
  .dm-radar-logs {
    flex: 1;
    font-family: var(--dm-font-mono);
    font-size: 11px;
    color: var(--dm-text-muted);
    display: flex;
    flex-direction: column;
    gap: 4px;
  }
  .dm-radar-logs div {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .dm-status-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--dm-emerald);
  }
  .dm-scan-trigger-btn {
    padding: 10px 18px;
    border-radius: 8px;
    border: 1px solid var(--dm-blue);
    background: rgba(37, 99, 235, 0.04);
    color: var(--dm-blue);
    font-family: var(--dm-font-mono);
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.25s ease;
    align-self: flex-start;
    margin-top: 14px;
    outline: none;
  }
  .dm-scan-trigger-btn:hover {
    background: var(--dm-blue);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
  }

  /* ROI Calculator Inside Analytics Section */
  .dm-calc-widget {
    background: #f8fafc;
    border: 1px solid var(--dm-border);
    border-radius: 12px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .dm-calc-sliders {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }
  .dm-slider-group-small {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .dm-slider-label-small {
    display: flex;
    justify-content: space-between;
    font-family: var(--dm-font-mono);
    font-size: 12px;
    color: var(--dm-text-main);
  }
  .dm-slider-label-small span.val {
    color: var(--dm-blue);
    font-weight: 700;
  }
  .dm-calc-metrics-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    background: #ffffff;
    border: 1px solid var(--dm-border);
    border-radius: 10px;
    padding: 12px 10px;
    text-align: center;
  }
  .dm-calc-metric-box {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }
  .dm-calc-metric-lbl {
    font-size: 10.5px;
    color: var(--dm-text-muted);
    text-transform: uppercase;
  }
  .dm-calc-metric-val {
    font-family: var(--dm-font-mono);
    font-size: 14.5px;
    font-weight: 700;
    color: var(--dm-text-main);
  }

  /* ═══════════════════════════════════════════════
     CAPABILITIES BENTO GRID
     ═══════════════════════════════════════════════ */
  .dm-bento-section {
    position: relative;
    padding: 100px 0;
    z-index: 1;
  }
  .dm-section-head {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 60px;
  }
  .dm-section-head h2 {
    font-size: clamp(32px, 4vw, 48px);
    color: var(--dm-text-main);
    margin: 16px 0;
  }

  .dm-bento-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  /* Custom Grid spans for 5 items bento structure */
  .dm-bento-card:nth-child(1) { grid-column: span 1; }
  .dm-bento-card:nth-child(2) { grid-column: span 1; }
  .dm-bento-card:nth-child(3) { grid-column: span 1; }
  .dm-bento-card:nth-child(4) { grid-column: span 1.5; }
  .dm-bento-card:nth-child(5) { grid-column: span 1.5; }

  .dm-bento-card {
    background: var(--dm-card-bg);
    border: 1px solid var(--dm-border);
    border-radius: 20px;
    padding: 36px;
    backdrop-filter: blur(16px);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: var(--dm-shadow-soft);
  }
  .dm-bento-card:hover {
    transform: translateY(-5px);
    border-color: var(--dm-blue);
    background: var(--dm-card-hover);
    box-shadow: var(--dm-shadow-med), var(--dm-shadow-glow);
  }
  .dm-bento-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(37, 99, 235, 0.06);
    border: 1px solid rgba(37, 99, 235, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--dm-blue);
    margin-bottom: 24px;
  }
  .dm-bento-card h3 {
    font-size: 21px;
    color: var(--dm-text-main);
    margin-bottom: 12px;
  }
  .dm-bento-card p {
    font-size: 15px;
    line-height: 1.65;
    margin-bottom: 24px;
  }
  .dm-bento-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }
  .dm-tag-pill {
    font-family: var(--dm-font-mono);
    font-size: 11px;
    color: var(--dm-text-muted);
    background: #f1f5f9;
    border: 1px solid rgba(15, 23, 42, 0.05);
    padding: 4px 12px;
    border-radius: 99px;
  }

  /* ═══════════════════════════════════════════════
     CONVERSION CTA
     ═══════════════════════════════════════════════ */
  .dm-cta-section {
    position: relative;
    padding: 80px 0 110px;
    z-index: 1;
  }
  .dm-cta-card {
    position: relative;
    background: linear-gradient(135deg, #e0e7ff 0%, #dbeafe 100%);
    border: 1px solid rgba(37, 99, 235, 0.15);
    border-radius: 28px;
    padding: 64px 36px;
    text-align: center;
    box-shadow: var(--dm-shadow-med);
    overflow: hidden;
  }
  .dm-cta-card h2 {
    font-size: clamp(34px, 4.5vw, 54px);
    color: var(--dm-text-main);
    margin: 20px 0;
  }
  .dm-cta-card p {
    font-size: 17.5px;
    color: var(--dm-text-muted);
    max-width: 600px;
    margin: 0 auto 36px;
  }

  /* ═══════════════════════════════════════════════
     RESPONSIVE BREAKPOINTS
     ═══════════════════════════════════════════════ */
  @media (max-width: 1024px) {
    .dm-hero__grid {
      grid-template-columns: 1fr;
      text-align: center;
    }
    .dm-hero__content {
      align-items: center;
    }
    .dm-hero__desc {
      text-align: center;
    }
    .dm-hero__actions {
      justify-content: center;
    }
    .dm-service-card,
    .dm-service-card:nth-child(even) {
      flex-direction: column;
      padding: 32px 24px;
      gap: 36px;
    }
    .dm-card-info-col {
      width: 100%;
    }
    .dm-card-img-col {
      width: 100%;
    }
    .dm-calc-sliders {
      grid-template-columns: 1fr;
    }
    .dm-bento-grid {
      grid-template-columns: 1fr;
    }
    .dm-bento-card:nth-child(1),
    .dm-bento-card:nth-child(2),
    .dm-bento-card:nth-child(3),
    .dm-bento-card:nth-child(4),
    .dm-bento-card:nth-child(5) {
      grid-column: span 1;
    }
  }

  @media (max-width: 640px) {
    .dm-hero__metrics {
      grid-template-columns: 1fr;
      gap: 16px;
    }
    .dm-funnel-grid {
      grid-template-columns: 1fr;
    }
    .dm-cta-card {
      padding: 44px 20px;
    }
  }
</style>
</head>
<body>

<?php include '../header.php'; ?>

<!-- Ambient Glow Orbs -->
<div class="dm-glow-orb dm-glow-1"></div>
<div class="dm-glow-orb dm-glow-2"></div>

<main>

  <!-- ============ HERO SECTION ============ -->
  <section class="dm-hero">
    <div class="dm-container">
      <div class="dm-hero__grid">
        
        <div class="dm-hero__content">
          <div class="dm-badge-pill">
            <span class="dm-badge-dot"></span>
            Performance Growth Engine
          </div>
          
          <h1 class="dm-hero__title">
            Digital
            <span class="gradient-text">Marketing</span>
          </h1>

          <p class="dm-hero__desc">
            Engineer sustainable growth through organic search authority, viral brand loops, conversion-optimized content, and predictive reputation management.
          </p>

          <div class="dm-hero__actions">
            <a href="../contact.php" class="dm-btn-primary">
              Build Strategy Plan
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#dm-stream-start" class="dm-btn-secondary">
              Explore Our Pillars
            </a>
          </div>

          <div class="dm-hero__metrics">
            <div>
              <span class="dm-hero-stat-val">+450%</span>
              <span class="dm-hero-stat-lbl">Avg ROAS Lift</span>
            </div>
            <div>
              <span class="dm-hero-stat-val">1.2B+</span>
              <span class="dm-hero-stat-lbl">Targeted Impressions</span>
            </div>
            <div>
              <span class="dm-hero-stat-val">99.4%</span>
              <span class="dm-hero-stat-lbl">Lead Precision Score</span>
            </div>
          </div>
        </div>

        <div class="dm-hero__visual">
          <div class="dm-hero__card-frame">
            <!-- HUD Badge Top-Left -->
            <div class="dm-hud-badge dm-hud-badge-1">
              <div class="dm-hud-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
              </div>
              <div class="dm-hud-info">
                <h4>DATA PIPELINE</h4>
                <p>Real-Time Conversion Auditing</p>
              </div>
            </div>

            <img src="../assets/images/digital_marketing_hero_futuristic.png" alt="Digital Marketing Performance Visualization">

            <!-- HUD Badge Bottom-Right -->
            <div class="dm-hud-badge dm-hud-badge-2">
              <div class="dm-hud-icon" style="background: rgba(37, 99, 235, 0.08); border-color: var(--dm-blue); color: var(--dm-blue);">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <div class="dm-hud-info">
                <h4>5.8x LIFT</h4>
                <p>Organic Search Velocity</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Bouncing Scroll Cue -->
      <div class="dm-scroll-cue" onclick="document.getElementById('dm-stream-start').scrollIntoView({ behavior: 'smooth' });">
        <div class="dm-scroll-cue__mouse"></div>
        Scroll to Explore
      </div>
    </div>
  </section>

  <!-- ============ SPLIT STAGE STREAM SECTION ============ -->
  <section id="dm-stream-start" class="dm-services-section">
    <div class="dm-container">
      <div class="dm-cards-stack">
        
        <!-- CARD 1: Search Engine Optimisation -->
        <div class="dm-service-card">
          <div class="dm-card-info-col">
            <div class="dm-badge-pill">Pillar 01</div>
            <h2>Search Engine Optimisation</h2>
            <p>
              Secure high-intent organic rankings across modern search channels. We combine technical SEO architecture, structured graph schemas, and content alignment tailored for both search engines and AI models.
            </p>

            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Generative Engine Optimization (GEO) for AI Platforms
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Authority Silo Maps & Intent-Driven Keyword Grouping
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Core Web Vitals Remediation & Structural Indexation Audits
              </li>
            </ul>

            <!-- WIDGET 1: SEO SERP Simulator -->
            <div class="dm-widget-card">
              <div class="dm-widget-header">
                <span class="dm-widget-title">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                  SERP Optimization Simulator
                </span>
                <span style="font-family: var(--dm-font-mono); font-size: 11px; color: var(--dm-emerald); font-weight: 600;">● LIVE ANALYZER</span>
              </div>

              <div class="dm-seo-input-wrapper">
                <input type="text" id="dm-seo-keyword-input" class="dm-seo-input" value="https://yourcompany.com/solutions" placeholder="Input targeted URL for live assessment...">
              </div>

              <div class="dm-seo-serp-preview">
                <div class="dm-serp-url" id="dm-serp-url-display">yourcompany.com › solutions › scale</div>
                <div class="dm-serp-title" id="dm-serp-title-display">#1 Organic Performance Solutions — Digibeat Growth</div>
                <div class="dm-serp-snippet">Accelerate organic revenue velocity with enterprise SEO, AI search indexation, and conversion rate optimization campaigns...</div>
              </div>

              <div class="dm-score-meter">
                <span style="font-family: var(--dm-font-mono); font-size: 12px; color: var(--dm-text-muted);">OPTIMIZATION INDEX:</span>
                <div class="dm-meter-bar-track">
                  <div id="dm-seo-score-bar" class="dm-meter-bar-fill"></div>
                </div>
                <span id="dm-seo-score-val" class="dm-score-val">94/100</span>
              </div>
            </div>
          </div>
          
          <div class="dm-card-img-col">
            <div class="dm-card-img-frame">
              <img src="../assets/images/sub-seo.png" alt="Search Engine Optimisation Illustration">
            </div>
          </div>
        </div>

        <!-- CARD 2: Social Media Marketing -->
        <div class="dm-service-card">
          <div class="dm-card-info-col">
            <div class="dm-badge-pill">Pillar 02</div>
            <h2>Social Media Marketing</h2>
            <p>
              Build high-velocity content matrices designed to spark community growth and engagement loops across Instagram, TikTok, LinkedIn, and YouTube.
            </p>

            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Short-Form Video & Visual Motion Sequences
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Algorithmic Audience Interest Targeting
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Paid Social Ads with Continuous Creative A/B Testing
              </li>
            </ul>

            <!-- WIDGET 2: Social Virality Emitter -->
            <div class="dm-widget-card">
              <div class="dm-widget-header">
                <span class="dm-widget-title">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                  Interactive Like Emitter (Click Image)
                </span>
                <span style="font-family: var(--dm-font-mono); font-size: 11px; color: var(--dm-pink); font-weight: 600;">● TAP POST</span>
              </div>

              <div class="dm-social-card">
                <div class="dm-social-head">
                  <div class="dm-social-avatar">DB</div>
                  <div class="dm-social-user">
                    <h5>Digibeat Growth Case</h5>
                    <p>Sponsored • 4h ago</p>
                  </div>
                </div>

                <div class="dm-social-img-box" id="dm-social-tap-box">
                  <img src="../assets/images/sub-social-media.png" alt="Social Post Preview">
                </div>

                <div class="dm-social-actions">
                  <button id="dm-like-trigger" class="dm-like-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    <span id="dm-likes-counter">4,892</span> Likes
                  </button>
                  <span style="font-family: var(--dm-font-mono); font-size: 12px; color: var(--dm-blue);">+142 Shares/hr</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dm-card-img-col">
            <div class="dm-card-img-frame">
              <img src="../assets/images/sub-social-media.png" alt="Social Media Marketing Illustration">
            </div>
          </div>
        </div>

        <!-- CARD 3: Content Marketing -->
        <div class="dm-service-card">
          <div class="dm-card-info-col">
            <div class="dm-badge-pill">Pillar 03</div>
            <h2>Content Marketing</h2>
            <p>
              Convert passive audience interest into qualified pipeline value with thought leadership reports, interactive audit templates, and structured email nurture paths.
            </p>

            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Customer-Journey Content Roadmaps (TOFU/MOFU/BOFU)
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Authority Whitepapers & Proprietary Research Audits
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Automated Lead Scoring Integrations
              </li>
            </ul>

            <!-- WIDGET 3: Funnel Matrix -->
            <div class="dm-widget-card">
              <div class="dm-widget-header">
                <span class="dm-widget-title">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                  Funnel Campaign Architecture Builder
                </span>
              </div>

              <select id="dm-funnel-niche-select" class="dm-funnel-select">
                <option value="saas">SaaS & B2B Tech</option>
                <option value="ecommerce">E-Commerce & Retail</option>
                <option value="services">Professional Consulting Services</option>
              </select>

              <div class="dm-funnel-grid">
                <div class="dm-funnel-card is-active">
                  <div class="dm-funnel-tag">TOFU (AWARENESS)</div>
                  <h5 id="dm-tofu-h">SEO Authority Guides</h5>
                  <p id="dm-tofu-p">Captures high-volume educational developer & architect queries.</p>
                </div>
                <div class="dm-funnel-card">
                  <div class="dm-funnel-tag">MOFU (INTEREST)</div>
                  <h5 id="dm-mofu-h">Gated SaaS Playbook</h5>
                  <p id="dm-mofu-p">Exchanges architecture blueprints for verified corporate contacts.</p>
                </div>
                <div class="dm-funnel-card">
                  <div class="dm-funnel-tag">BOFU (CONVERSION)</div>
                  <h5 id="dm-bofu-h">Enterprise ROI Case Study</h5>
                  <p id="dm-bofu-p">Demonstrates 12x cloud scaling metrics to close buyer deals.</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dm-card-img-col">
            <div class="dm-card-img-frame">
              <img src="../assets/images/sub-content-marketing.png" alt="Content Marketing Illustration">
            </div>
          </div>
        </div>

        <!-- CARD 4: Online Reputation Management -->
        <div class="dm-service-card">
          <div class="dm-card-info-col">
            <div class="dm-badge-pill">Pillar 04</div>
            <h2>Online Reputation Management</h2>
            <p>
              Safeguard brand equity through persistent network sentiment listening, proactive review engines, search layout management, and swift response workflows.
            </p>

            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                AI sentiment monitors scanning social and news feeds
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Automated customer feedback acquisition loops
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Proactive threat alerts and response blueprints
              </li>
            </ul>

            <!-- WIDGET 4: Sentiment Radar Scanner -->
            <div class="dm-widget-card">
              <div class="dm-widget-header">
                <span class="dm-widget-title">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  Brand Sentiment Radar
                </span>
              </div>

              <div class="dm-radar-box">
                <div class="dm-radar-display">
                  <div id="dm-radar-scanner" class="dm-radar-line"></div>
                  <span id="dm-radar-score-val" class="dm-radar-score">96%</span>
                </div>

                <div class="dm-radar-logs">
                  <div><span class="dm-status-dot"></span> <span id="dm-log-1">Status: Active monitoring</span></div>
                  <div><span class="dm-status-dot"></span> <span id="dm-log-2">Trust Level: EXCELLENT</span></div>
                  <div style="color: var(--dm-text-dim);">Sentiment Risk: Threat-Free</div>
                </div>
              </div>

              <button id="dm-run-scan-btn" class="dm-scan-trigger-btn">Perform Brand Audit Scan</button>
            </div>
          </div>
          
          <div class="dm-card-img-col">
            <div class="dm-card-img-frame">
              <img src="../assets/images/sub-reputation-management.png" alt="Online Reputation Management Illustration">
            </div>
          </div>
        </div>

        <!-- CARD 5: Analytics -->
        <div class="dm-service-card">
          <div class="dm-card-info-col">
            <div class="dm-badge-pill">Pillar 05</div>
            <h2>Analytics</h2>
            <p>
              Quantify performance, identify conversion leaks, and scale user acquisition channels. We build data dashboards that link marketing spend directly to business revenue growth.
            </p>

            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Multi-Touch Attribution Modeling
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                User-Journey Cohort Analysis & Funnel Visualization
              </li>
              <li>
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Ad spend optimization models & ROAS dashboards
              </li>
            </ul>

            <!-- WIDGET 5: ROI Calculator Inline Inside Analytics -->
            <div class="dm-widget-card">
              <div class="dm-widget-header">
                <span class="dm-widget-title">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                  Interactive Campaign Forecast Simulator
                </span>
                <span style="font-family: var(--dm-font-mono); font-size: 11px; color: var(--dm-blue); font-weight: 600;">● FORECAST ENGINE</span>
              </div>

              <div class="dm-calc-widget">
                <div class="dm-calc-sliders">
                  <div class="dm-slider-group-small">
                    <div class="dm-slider-label-small">
                      <span>Ad Spend ($)</span>
                      <span id="dm-spend-lbl" class="val">$10,000</span>
                    </div>
                    <input type="range" id="dm-spend-slider" class="dm-range-input" min="2000" max="50000" step="1000" value="10000">
                  </div>

                  <div class="dm-slider-group-small">
                    <div class="dm-slider-label-small">
                      <span>Reach</span>
                      <span id="dm-reach-lbl" class="val">250,000</span>
                    </div>
                    <input type="range" id="dm-reach-slider" class="dm-range-input" min="50000" max="1000000" step="25000" value="250000">
                  </div>
                </div>

                <div class="dm-calc-metrics-row">
                  <div class="dm-calc-metric-box">
                    <span class="dm-calc-metric-lbl">Impressions</span>
                    <span id="dm-res-impressions" class="dm-calc-metric-val">650,000</span>
                  </div>
                  <div class="dm-calc-metric-box">
                    <span class="dm-calc-metric-lbl">Est. Clicks</span>
                    <span id="dm-res-clicks" class="dm-calc-metric-val">16,250</span>
                  </div>
                  <div class="dm-calc-metric-box" style="border-left: 1px solid var(--dm-border); padding-left: 6px;">
                    <span class="dm-calc-metric-lbl">Revenue</span>
                    <span id="dm-res-revenue" class="dm-calc-metric-val" style="color: var(--dm-blue);">$42,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dm-card-img-col">
            <div class="dm-card-img-frame">
              <img src="../assets/images/sub-analytics.png" alt="Analytics Illustration">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ CAPABILITIES BENTO GRID ============ -->
  <section class="dm-bento-section">
    <div class="dm-container">
      <div class="dm-section-head">
        <div class="dm-badge-pill">Capabilities</div>
        <h2>Integrated Marketing Services</h2>
        <p>Explore the five core disciplines of our digital marketing practice.</p>
      </div>

      <div class="dm-bento-grid">
        <!-- Card 1 -->
        <div class="dm-bento-card">
          <div class="dm-bento-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <div>
            <h3>Search Engine Optimisation</h3>
            <p>Optimize organic visibility and AI engine rankings using technical graphs and indexation schema.</p>
          </div>
          <div class="dm-bento-tags">
            <span class="dm-tag-pill">Technical SEO</span>
            <span class="dm-tag-pill">Schema Graphs</span>
            <span class="dm-tag-pill">GEO</span>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="dm-bento-card">
          <div class="dm-bento-icon" style="background: rgba(37, 99, 235, 0.06); border-color: rgba(37,99,235,0.2); color: var(--dm-blue);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <div>
            <h3>Social Media Marketing</h3>
            <p>Scale paid and organic customer acquisition across Instagram, TikTok, LinkedIn, and Meta.</p>
          </div>
          <div class="dm-bento-tags">
            <span class="dm-tag-pill">Creative Loops</span>
            <span class="dm-tag-pill">Paid Ads</span>
            <span class="dm-tag-pill">Retargeting</span>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="dm-bento-card">
          <div class="dm-bento-icon" style="background: rgba(5, 150, 105, 0.06); border-color: rgba(5,150,105,0.2); color: var(--dm-emerald);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <div>
            <h3>Content Marketing</h3>
            <p>Convert leads with thought-leadership audits, value templates, and nurture pipelines.</p>
          </div>
          <div class="dm-bento-tags">
            <span class="dm-tag-pill">Case Studies</span>
            <span class="dm-tag-pill">Funnel Design</span>
            <span class="dm-tag-pill">Copywriting</span>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="dm-bento-card">
          <div class="dm-bento-icon" style="background: rgba(3, 132, 199, 0.06); border-color: rgba(3,132,199,0.2); color: var(--dm-sky);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div>
            <h3>Online Reputation Management</h3>
            <p>Safeguard brand equity through social sentiment tracking, proactive review gathering, and search result management.</p>
          </div>
          <div class="dm-bento-tags">
            <span class="dm-tag-pill">Brand Protection</span>
            <span class="dm-tag-pill">Feedback Loops</span>
            <span class="dm-tag-pill">Sentiment Monitoring</span>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="dm-bento-card">
          <div class="dm-bento-icon" style="background: rgba(219, 39, 119, 0.06); border-color: rgba(219,39,119,0.2); color: var(--dm-pink);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          </div>
          <div>
            <h3>Analytics</h3>
            <p>Quantify advertising expenditures, optimize click conversions, and build visual dashboards showing revenue return on investment (ROAS).</p>
          </div>
          <div class="dm-bento-tags">
            <span class="dm-tag-pill">Attribution Models</span>
            <span class="dm-tag-pill">ROI Mapping</span>
            <span class="dm-tag-pill">Data Dashboards</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CONVERSION CTA SECTION ============ -->
  <section class="dm-cta-section">
    <div class="dm-container">
      <div class="dm-cta-card">
        <div class="dm-badge-pill" style="margin-bottom: 20px;">Ready to Start?</div>
        <h2>Accelerate Your Business Growth</h2>
        <p>Partner with Digibeat to deploy a custom, data-backed digital marketing ecosystem built for your team's objectives.</p>
        <a href="../contact.php" class="dm-btn-primary">
          Launch Growth Plan Strategy
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Interactive scripts engine -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  
  /* ═══════════════════════════════════════════════
     1. SEO SIMULATOR INTERACTION
     ═══════════════════════════════════════════════ */
  var seoInput = document.getElementById('dm-seo-keyword-input');
  var serpUrl = document.getElementById('dm-serp-url-display');
  var serpTitle = document.getElementById('dm-serp-title-display');
  var scoreBar = document.getElementById('dm-seo-score-bar');
  var scoreVal = document.getElementById('dm-seo-score-val');

  if (seoInput) {
    seoInput.addEventListener('input', function() {
      var val = seoInput.value.trim();
      if (val) {
        serpUrl.textContent = val.toLowerCase().replace(/https?:\/\//, '').replace(/\/$/, '') + ' › solutions';
        serpTitle.textContent = '#1 Organic Leader — ' + (val.replace(/https?:\/\//, '').split('.')[0] || 'YourBrand');
        
        var score = Math.min(99, Math.max(72, 80 + (val.length % 19)));
        scoreBar.style.width = score + '%';
        scoreVal.textContent = score + '/100';
      }
    });
  }

  /* ═══════════════════════════════════════════════
     2. SOCIAL ENGAGEMENT WIDGET (HEART FX)
     ═══════════════════════════════════════════════ */
  var socialBox = document.getElementById('dm-social-tap-box');
  var likeTrigger = document.getElementById('dm-like-trigger');
  var likesCounter = document.getElementById('dm-likes-counter');
  var currentLikes = 4892;
  var isLiked = false;

  function spawnHeart(e) {
    if (!socialBox) return;
    var rect = socialBox.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;

    var heart = document.createElement('div');
    heart.className = 'dm-heart-particle';
    heart.innerHTML = '❤️';
    heart.style.left = x + 'px';
    heart.style.top = y + 'px';
    
    var dx = (Math.random() - 0.5) * 80;
    heart.style.setProperty('--dx', dx + 'px');

    socialBox.appendChild(heart);

    if (!isLiked) {
      isLiked = true;
      currentLikes++;
      likesCounter.textContent = currentLikes.toLocaleString();
    }

    setTimeout(function() {
      heart.remove();
    }, 1000);
  }

  if (socialBox) {
    socialBox.addEventListener('click', spawnHeart);
  }

  if (likeTrigger) {
    likeTrigger.addEventListener('click', function() {
      if (!isLiked) {
        isLiked = true;
        currentLikes++;
      } else {
        isLiked = false;
        currentLikes--;
      }
      likesCounter.textContent = currentLikes.toLocaleString();
    });
  }

  /* ═══════════════════════════════════════════════
     3. CONTENT FUNNEL PLANNER WIDGET
     ═══════════════════════════════════════════════ */
  var nicheSelect = document.getElementById('dm-funnel-niche-select');
  var tofuH = document.getElementById('dm-tofu-h');
  var tofuP = document.getElementById('dm-tofu-p');
  var mofuH = document.getElementById('dm-mofu-h');
  var mofuP = document.getElementById('dm-mofu-p');
  var bofuH = document.getElementById('dm-bofu-h');
  var bofuP = document.getElementById('dm-bofu-p');

  var funnelData = {
    saas: {
      tofuH: 'SEO Tech Guides',
      tofuP: 'Captures high-volume educational developer & architect queries.',
      mofuH: 'Gated SaaS Playbook',
      mofuP: 'Exchanges architecture blueprints for verified corporate contacts.',
      bofuH: 'Enterprise ROI Case Study',
      bofuP: 'Demonstrates 12x cloud scaling metrics to close buyer deals.'
    },
    ecommerce: {
      tofuH: 'Visual Trend Hub',
      tofuP: 'Drives consumer search traffic to lifestyle lookbooks.',
      mofuH: 'Interactive Style Quiz',
      mofuP: 'Segments buyer preferences & acquires opt-in subscribers.',
      bofuH: 'Fulfillment & Quality Audit',
      bofuP: 'Highlights conversion speed & free checkout guarantees.'
    },
    services: {
      tofuH: 'Compliance Audit Guide',
      tofuP: 'Targets corporate searches for risk & operational compliance.',
      mofuH: 'Self-Audit Workbook',
      mofuP: 'Provides direct template value to build consulting trust.',
      bofuH: 'Client Review Matrix',
      bofuP: 'Displays verified review benchmarks to prove brand authority.'
    }
  };

  if (nicheSelect) {
    nicheSelect.addEventListener('change', function() {
      var val = nicheSelect.value;
      var data = funnelData[val];
      if (data) {
        tofuH.textContent = data.tofuH;
        tofuP.textContent = data.tofuP;
        mofuH.textContent = data.mofuH;
        mofuP.textContent = data.mofuP;
        bofuH.textContent = data.bofuH;
        bofuP.textContent = data.bofuP;
      }
    });
  }

  /* ═══════════════════════════════════════════════
     4. SENTIMENT RADAR WIDGET
     ═══════════════════════════════════════════════ */
  var scanBtn = document.getElementById('dm-run-scan-btn');
  var scannerLine = document.getElementById('dm-radar-scanner');
  var scoreDisplay = document.getElementById('dm-radar-score-val');
  var log1 = document.getElementById('dm-log-1');
  var log2 = document.getElementById('dm-log-2');

  if (scanBtn) {
    scanBtn.addEventListener('click', function() {
      scanBtn.disabled = true;
      scanBtn.style.opacity = '0.5';
      scannerLine.classList.add('is-scanning');

      log1.textContent = 'Radar: Scanning Google & Social Mentions...';
      log2.textContent = 'Evaluating sentiment semantics...';
      scoreDisplay.textContent = '--%';

      setTimeout(function() {
        log1.textContent = 'Parsing review signals & SERP listings...';
        log2.textContent = 'Neutralizing risk factors...';
      }, 700);

      setTimeout(function() {
        log1.textContent = 'Status: Active protection';
        log2.textContent = 'Trust Level: EXCELLENT';
        scoreDisplay.textContent = '98%';
        scannerLine.classList.remove('is-scanning');
        scanBtn.disabled = false;
        scanBtn.style.opacity = '1';
      }, 1500);
    });
  }

  /* ═══════════════════════════════════════════════
     5. ROI CALCULATOR
     ═══════════════════════════════════════════════ */
  var spendSlider = document.getElementById('dm-spend-slider');
  var reachSlider = document.getElementById('dm-reach-slider');
  var spendLbl = document.getElementById('dm-spend-lbl');
  var reachLbl = document.getElementById('dm-reach-lbl');
  var resImpressions = document.getElementById('dm-res-impressions');
  var resClicks = document.getElementById('dm-res-clicks');
  var resRevenue = document.getElementById('dm-res-revenue');

  function updateCalculator() {
    if (!spendSlider || !reachSlider) return;
    var spend = parseInt(spendSlider.value, 10);
    var reach = parseInt(reachSlider.value, 10);

    spendLbl.textContent = '$' + spend.toLocaleString();
    reachLbl.textContent = reach.toLocaleString();

    var impressions = Math.floor(spend * 65);
    var clicks = Math.floor(impressions * 0.025);
    var revenue = Math.floor(spend * 4.2);

    resImpressions.textContent = impressions.toLocaleString();
    resClicks.textContent = clicks.toLocaleString();
    resRevenue.textContent = '$' + revenue.toLocaleString();
  }

  if (spendSlider && reachSlider) {
    spendSlider.addEventListener('input', updateCalculator);
    reachSlider.addEventListener('input', updateCalculator);
    updateCalculator();
  }

});
</script>

<?php include '../footer.php'; ?>
</body>
</html>
