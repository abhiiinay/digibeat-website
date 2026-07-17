<?php
/**
 * services/digital-marketing.php
 * Futuristic, interactive Split-Stage Sticky Scroll Landing Page.
 * Showcases Digital Marketing capabilities using live interactive simulators and widgets.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Marketing Services — Digibeat</title>

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
    --dm-bg: #ffffff;
    --dm-ink: #0b0b0f;
    --dm-muted: #535461;
    --dm-accent: #5b7bff;
    --dm-accent-soft: rgba(91, 123, 255, 0.08);
    --dm-accent-glow: rgba(91, 123, 255, 0.25);
    --dm-line: rgba(11, 11, 15, 0.06);
    --dm-panel: #f8fafc;
    --dm-font-heading: 'Inter', -apple-system, sans-serif;
    --dm-font-body: 'Hellix', -apple-system, sans-serif;
  }

  html, body {
    background: var(--dm-bg) !important;
    color: var(--dm-ink) !important;
    font-family: var(--dm-font-body);
    margin: 0;
    padding: 0;
    max-width: 100%;
    overflow-x: hidden;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: var(--dm-font-heading);
    font-weight: 900; /* make bold */
    margin: 0;
  }

  p {
    font-family: var(--dm-font-body);
    font-size: 17.5px; /* Increased font size */
    line-height: 1.9; /* Increased line-height spacing */
    color: var(--dm-muted);
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  .dm-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* ═══════════════════════════════════════════════
     AMBIENT GLOWS
     ═══════════════════════════════════════════════ */
  .dm-glow-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(140px);
    z-index: 0;
    pointer-events: none;
    opacity: 0.16;
  }
  .dm-glow-1 {
    top: 15%;
    right: -100px;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, var(--dm-accent), transparent 70%);
  }
  .dm-glow-2 {
    top: 60%;
    left: -200px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, var(--dm-accent), transparent 70%);
  }

  /* ═══════════════════════════════════════════════
     HERO SECTION (Title + Image animation, 100vh)
     ═══════════════════════════════════════════════ */
  .dm-hero {
    position: relative;
    height: calc(100vh - 72px); /* subtract header height */
    min-height: 600px;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: var(--dm-bg);
  }
  .dm-hero__inner {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 64px;
    align-items: center;
    width: 100%;
  }
  .dm-hero__text h1 {
    font-size: clamp(48px, 6.5vw, 84px);
    line-height: 1.05;
    letter-spacing: -0.03em;
    color: var(--dm-ink);
  }
  .dm-hero__text h1 span {
    color: var(--dm-accent);
    display: block;
    text-shadow: 0 0 40px var(--dm-accent-glow);
  }

  .dm-hero__visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .dm-hero__image-wrapper {
    position: relative;
    border-radius: 28px;
    padding: 10px;
    background: linear-gradient(135deg, rgba(91,123,255,0.2) 0%, rgba(255,255,255,0) 100%);
    box-shadow: 0 30px 80px -20px var(--dm-accent-glow);
    animation: dm-float 6s ease-in-out infinite;
  }
  .dm-hero__image-wrapper img {
    border-radius: 20px;
    width: 100%;
    height: auto;
    display: block;
    max-width: 480px;
  }

  /* Bouncing Scroll Cue */
  .dm-scroll-cue {
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
    color: var(--dm-muted);
    cursor: pointer;
    z-index: 10;
  }
  .dm-scroll-cue span {
    width: 24px;
    height: 40px;
    border: 2px solid var(--dm-muted);
    border-radius: 12px;
    position: relative;
    opacity: 0.7;
    transition: border-color 0.3s ease;
  }
  .dm-scroll-cue:hover span {
    border-color: var(--dm-accent);
  }
  .dm-scroll-cue span::after {
    content: '';
    width: 4px;
    height: 8px;
    background: var(--dm-accent);
    border-radius: 2px;
    position: absolute;
    left: 50%;
    top: 6px;
    transform: translateX(-50%);
    animation: dm-scroll-wheel 1.6s ease-in-out infinite;
  }

  /* ═══════════════════════════════════════════════
     SCROLL REVEAL PRESENTER WRAPPER
     ═══════════════════════════════════════════════ */
  .dm-reveal-content {
    opacity: 0;
    transform: translateY(60px);
    transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .dm-reveal-content.is-revealed {
    opacity: 1;
    transform: translateY(0);
  }

  /* Unique Split Stage Presenter */
  .dm-presenter {
    position: relative;
    width: 100%;
    background: var(--dm-bg);
  }
  .dm-presenter-grid {
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 80px;
    position: relative;
  }

  /* Sticky Stage (Left Column) */
  .dm-stage {
    position: sticky;
    top: 72px;
    height: calc(100vh - 72px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 5;
  }
  .dm-stage__visual-frame {
    position: relative;
    width: 100%;
    max-width: 440px;
    aspect-ratio: 1;
    border-radius: 28px;
    background: var(--dm-panel);
    border: 1px solid var(--dm-line);
    padding: 16px;
    box-shadow: 0 20px 50px -20px rgba(11, 11, 15, 0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .dm-stage__glow-ring {
    position: absolute;
    inset: -3px;
    border-radius: 28px;
    padding: 3px;
    background: conic-gradient(from 0deg, var(--dm-accent), #a3b8ff, var(--dm-accent));
    -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0.4;
    animation: dm-spin 8s linear infinite;
    z-index: 0;
  }
  @keyframes dm-spin { to { transform: rotate(360deg); } }

  .dm-stage__image-holder {
    position: absolute;
    inset: 16px;
    opacity: 0;
    transform: scale(0.92) translateY(20px) rotate(-1.5deg);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .dm-stage__image-holder.is-active {
    opacity: 1;
    transform: scale(1) translateY(0) rotate(0deg);
    z-index: 2;
  }
  .dm-stage__image-holder img {
    max-width: 100%;
    max-height: 100%;
    border-radius: 18px;
    object-fit: cover;
    box-shadow: 0 15px 30px -10px var(--dm-accent-glow);
  }

  /* Content Stream (Right Column) */
  .dm-stream {
    display: flex;
    flex-direction: column;
  }
  .dm-stream-section {
    min-height: calc(100vh - 72px);
    padding: 100px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    opacity: 0.3;
    transform: translateX(15px);
    transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    border-bottom: 1px solid var(--dm-line);
  }
  .dm-stream-section:last-child {
    border-bottom: none;
  }
  .dm-stream-section.is-active {
    opacity: 1;
    transform: translateX(0);
  }

  /* Section texts */
  .dm-tag {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 12px;
    color: var(--dm-accent);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 20px;
    padding: 6px 14px;
    background: var(--dm-accent-soft);
    border-radius: 6px;
    border: 1px solid rgba(91,123,255,0.12);
  }
  .dm-stream-section h2 {
    font-size: clamp(32px, 3.8vw, 46px);
    line-height: 1.2;
    color: var(--dm-ink);
    margin-bottom: 26px;
    letter-spacing: -0.02em;
  }
  .dm-stream-section h2 span {
    color: var(--dm-accent);
  }
  .dm-stream-section p {
    margin-bottom: 24px;
  }

  .dm-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 28px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .dm-bullets li {
    font-size: 16.5px;
    color: var(--dm-ink);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 14px;
    opacity: 0.8;
    transition: opacity 0.3s ease;
  }
  .dm-stream-section.is-active .dm-bullets li {
    opacity: 1;
  }
  .dm-bullets li svg {
    width: 22px;
    height: 22px;
    stroke: var(--dm-accent);
    fill: none;
    stroke-width: 2.2;
    flex-shrink: 0;
  }

  /* Interactive link button */
  .dm-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    font-family: var(--dm-font-heading);
    font-weight: 700;
    font-size: 15px;
    color: #ffffff;
    background: var(--dm-ink);
    padding: 16px 32px;
    border-radius: 12px;
    border: 1px solid var(--dm-ink);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 10px 25px -10px rgba(11, 11, 15, 0.15);
    align-self: flex-start;
    margin-top: 24px;
  }
  .dm-btn:hover {
    background: var(--dm-accent);
    border-color: var(--dm-accent);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 16px 30px -10px var(--dm-accent-glow);
  }
  .dm-btn svg {
    transition: transform 0.3s ease;
  }
  .dm-btn:hover svg {
    transform: translateX(4px);
  }

  /* Mobile Visual Holder (hidden by default on desktop) */
  .dm-mobile-visual {
    display: none;
    position: relative;
    border-radius: 20px;
    padding: 8px;
    background: var(--dm-panel);
    border: 1px solid var(--dm-line);
    margin-top: 32px;
  }
  .dm-mobile-visual img {
    border-radius: 14px;
    width: 100%;
    height: auto;
    display: block;
  }

  /* ═══════════════════════════════════════════════
     ADVANCED INTERACTIVE WIDGET STYLING
     ═══════════════════════════════════════════════ */
  .dm-widget {
    background: var(--dm-panel);
    border: 1px solid var(--dm-line);
    border-radius: 20px;
    padding: 24px;
    margin-top: 32px;
    box-shadow: 0 15px 35px -10px rgba(11,11,15,0.04);
    font-family: var(--dm-font-body);
    width: 100%;
    position: relative;
    overflow: hidden;
  }

  /* Widget 1: SEO Live Optimizer */
  .dm-seo-widget__input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 10px;
    border: 1px solid var(--dm-line);
    background: #ffffff;
    font-size: 15px;
    color: var(--dm-ink);
    margin-bottom: 18px;
    outline: none;
    font-family: var(--dm-font-body);
  }
  .dm-seo-widget__input:focus {
    border-color: var(--dm-accent);
  }

  .dm-seo-widget__toggle-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 22px;
  }
  .dm-seo-widget__toggle-label {
    font-weight: 700;
    font-size: 15px;
    color: var(--dm-ink);
  }
  .dm-switch {
    position: relative;
    display: inline-block;
    width: 52px;
    height: 28px;
  }
  .dm-switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  .dm-slider-toggle {
    position: absolute;
    cursor: pointer;
    inset: 0;
    background-color: #cbd5e1;
    transition: .3s;
    border-radius: 34px;
  }
  .dm-slider-toggle:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .3s;
    border-radius: 50%;
  }
  input:checked + .dm-slider-toggle {
    background-color: var(--dm-accent);
  }
  input:checked + .dm-slider-toggle:before {
    transform: translateX(24px);
  }

  .dm-google-serp {
    background: #ffffff;
    border: 1px solid var(--dm-line);
    border-radius: 12px;
    padding: 18px;
    font-family: Arial, sans-serif; /* matches google SERP look */
    text-align: left;
  }
  .dm-google-serp__title {
    font-size: 19px;
    line-height: 1.3;
    color: #1a0dab;
    margin-bottom: 4px;
    font-weight: normal;
  }
  .dm-google-serp__url {
    font-size: 14px;
    color: #202124;
    margin-bottom: 6px;
    word-break: break-all;
  }
  .dm-google-serp__desc {
    font-size: 14px;
    color: #4d5156;
    line-height: 1.5;
  }

  .dm-seo-widget__score-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid var(--dm-line);
    font-family: 'IBM Plex Mono', monospace;
    font-size: 13px;
  }
  .dm-ctr-badge {
    padding: 4px 10px;
    border-radius: 6px;
    font-weight: 700;
  }
  .dm-ctr-badge.red {
    background: #fef2f2;
    color: #ef4444;
  }
  .dm-ctr-badge.green {
    background: #f0fdf4;
    color: #22c55e;
    animation: pulse-green 2s infinite;
  }
  @keyframes pulse-green {
    0%, 100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
    50% { box-shadow: 0 0 0 6px rgba(34, 197, 94, 0); }
  }

  /* Widget 2: ROAS Calculator & Social Mockup */
  .dm-smm-widget__sliders {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 24px;
  }
  .dm-slider-row {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .dm-slider-header {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    font-weight: 600;
    color: var(--dm-ink);
  }
  .dm-slider-header span:last-child {
    font-family: 'IBM Plex Mono', monospace;
    color: var(--dm-accent);
  }
  .dm-input-slider {
    width: 100%;
    accent-color: var(--dm-accent);
    cursor: pointer;
  }

  .dm-smm-widget__metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    background: #ffffff;
    border: 1px solid var(--dm-line);
    border-radius: 12px;
    padding: 16px 12px;
    text-align: center;
    margin-bottom: 20px;
  }
  .dm-metric-box {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }
  .dm-metric-label {
    font-size: 11px;
    color: var(--dm-muted);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-weight: 600;
  }
  .dm-metric-value {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 16px;
    font-weight: 700;
    color: var(--dm-ink);
  }

  /* Post Mockup */
  .dm-social-post {
    background: #ffffff;
    border: 1px solid var(--dm-line);
    border-radius: 16px;
    overflow: hidden;
    max-width: 320px;
    margin: 0 auto;
    text-align: left;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.05);
  }
  .dm-social-post__header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px;
  }
  .dm-social-post__avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--dm-accent-soft);
    border: 1.5px solid var(--dm-accent);
  }
  .dm-social-post__user {
    font-size: 13px;
    font-weight: 700;
    color: var(--dm-ink);
  }
  .dm-social-post__img {
    aspect-ratio: 1;
    background: linear-gradient(135deg, #a3b8ff 0%, var(--dm-accent) 100%);
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }
  .dm-social-post__img::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle, rgba(255,255,255,0.15), transparent 70%);
  }
  .dm-social-post__actions {
    padding: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  .dm-social-post__buttons {
    display: flex;
    gap: 12px;
    color: var(--dm-ink);
  }
  .dm-like-btn {
    cursor: pointer;
    background: none;
    border: none;
    padding: 0;
    display: flex;
    align-items: center;
    color: #dc2626;
    transition: transform 0.2s ease;
  }
  .dm-like-btn:active {
    transform: scale(1.3);
  }
  .dm-social-post__likes {
    font-size: 13.5px;
    font-weight: 700;
    color: var(--dm-ink);
  }
  .dm-social-post__caption {
    font-size: 13px;
    line-height: 1.4;
    color: var(--dm-muted);
  }
  .dm-social-post__caption strong {
    color: var(--dm-ink);
    margin-right: 4px;
  }

  /* Heart particles animation styles */
  .dm-heart-particle {
    position: absolute;
    font-size: 24px;
    color: #ef4444;
    pointer-events: none;
    user-select: none;
    z-index: 100;
    animation: particle-rise 1s ease-out forwards;
  }
  @keyframes particle-rise {
    0% {
      transform: translate(-50%, -50%) scale(0.4);
      opacity: 1;
    }
    100% {
      transform: translate(calc(-50% + var(--dx)), calc(-50% - 80px)) scale(1.2);
      opacity: 0;
    }
  }

  /* Widget 3: Live Editorial Funnel Planner */
  .dm-planner-dropdown {
    width: 100%;
    padding: 14px 18px;
    border-radius: 12px;
    border: 1px solid var(--dm-line);
    background: #ffffff;
    font-size: 15.5px;
    font-weight: 600;
    color: var(--dm-ink);
    outline: none;
    cursor: pointer;
    margin-bottom: 24px;
    font-family: var(--dm-font-body);
  }
  .dm-funnel-stages {
    display: flex;
    flex-direction: column;
    gap: 16px;
    text-align: left;
  }
  .dm-funnel-stage {
    background: #ffffff;
    border: 1.5px dashed var(--dm-line);
    border-radius: 14px;
    padding: 16px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
  }
  .dm-funnel-stage:hover {
    border-color: var(--dm-accent);
    background: var(--dm-panel);
    transform: translateX(4px);
  }
  .dm-funnel-stage.is-active {
    border-color: var(--dm-accent);
    border-style: solid;
    background: var(--dm-accent-soft);
    box-shadow: 0 0 15px var(--dm-accent-glow);
  }
  .dm-funnel-stage__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
  }
  .dm-funnel-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--dm-accent);
    letter-spacing: 0.05em;
  }
  .dm-funnel-stage__title {
    font-size: 15.5px;
    font-weight: 700;
    color: var(--dm-ink);
  }
  .dm-funnel-stage__content {
    font-size: 14px;
    color: var(--dm-muted);
    line-height: 1.5;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }
  .dm-funnel-stage.is-active .dm-funnel-stage__content {
    max-height: 80px;
    margin-top: 8px;
  }

  /* Widget 4: Sentiment Tracker Scanner */
  .dm-orm-widget__list {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 24px;
    text-align: left;
  }
  .dm-orm-item {
    background: #ffffff;
    border: 1px solid var(--dm-line);
    border-radius: 12px;
    padding: 14px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    transition: border-color 0.3s ease, background 0.3s ease;
  }
  .dm-orm-item__text {
    font-size: 13.5px;
    line-height: 1.4;
    color: var(--dm-muted);
  }
  .dm-sentiment-badge {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10.5px;
    font-weight: 700;
    padding: 4px 8px;
    border-radius: 6px;
    text-transform: uppercase;
    background: #f1f5f9;
    color: #64748b;
  }
  .dm-sentiment-badge.positive {
    background: #f0fdf4;
    color: #22c55e;
  }
  .dm-sentiment-badge.neutral {
    background: #f8fafc;
    color: #64748b;
  }
  .dm-sentiment-badge.negative {
    background: #fef2f2;
    color: #ef4444;
  }

  /* Glowing scanner line animation */
  .dm-scanner-line {
    position: absolute;
    left: -20px;
    width: calc(100% + 40px);
    height: 4px;
    background: linear-gradient(90deg, rgba(91,123,255,0) 0%, var(--dm-accent) 50%, rgba(91,123,255,0) 100%);
    box-shadow: 0 0 12px var(--dm-accent);
    top: -10px;
    opacity: 0;
    pointer-events: none;
    z-index: 10;
  }
  .dm-scanner-line.is-scanning {
    animation: scan-move 1.6s ease-in-out forwards;
  }
  @keyframes scan-move {
    0% { top: -10px; opacity: 1; }
    50% { top: 50%; opacity: 1; }
    100% { top: calc(100% + 10px); opacity: 0; }
  }

  .dm-orm-widget__btn {
    width: 100%;
    padding: 14px;
    border-radius: 10px;
    border: none;
    background: var(--dm-ink);
    color: #ffffff;
    font-family: var(--dm-font-heading);
    font-weight: 700;
    font-size: 14.5px;
    cursor: pointer;
    transition: background 0.2s ease;
    margin-bottom: 24px;
  }
  .dm-orm-widget__btn:hover {
    background: var(--dm-accent);
  }

  .dm-orm-widget__dashboard {
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-top: 1px solid var(--dm-line);
    padding-top: 20px;
    background: #ffffff;
    border-radius: 12px;
    padding: 16px;
    border: 1px solid var(--dm-line);
  }
  .dm-chart-container {
    position: relative;
    width: 80px;
    height: 80px;
  }
  .dm-chart-circle {
    width: 80px;
    height: 80px;
    transform: rotate(-90deg);
  }
  .dm-circle-bg {
    fill: none;
    stroke: var(--dm-line);
    stroke-width: 8;
  }
  .dm-circle-progress {
    fill: none;
    stroke: var(--dm-accent);
    stroke-width: 8;
    stroke-linecap: round;
    stroke-dasharray: 226;
    stroke-dashoffset: 226;
    transition: stroke-dashoffset 1.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .dm-chart-percentage {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 16px;
    font-weight: 700;
    color: var(--dm-ink);
  }
  
  .dm-status-log {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: var(--dm-muted);
    text-align: left;
  }
  .dm-status-log div {
    margin-bottom: 4px;
  }

  /* ═══════════════════════════════════════════════
     RESPONSIVE BREAKPOINTS
     ═══════════════════════════════════════════════ */
  @media (max-width: 992px) {
    .dm-hero {
      height: auto;
      padding: 110px 0 90px;
    }
    .dm-hero__inner {
      grid-template-columns: 1fr;
      gap: 52px;
      text-align: center;
    }
    .dm-hero__image-wrapper {
      max-width: 440px;
      margin: 0 auto;
    }
    .dm-scroll-cue {
      display: none;
    }

    .dm-stage {
      display: none !important;
    }
    .dm-presenter-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    .dm-stream-section {
      min-height: auto;
      opacity: 1 !important;
      transform: none !important;
      padding: 60px 0;
      border-bottom: 1px solid var(--dm-line);
    }
    .dm-mobile-visual {
      display: block !important;
    }
  }

  @media (max-width: 640px) {
    .dm-container {
      padding: 0 20px;
    }
    .dm-hero__text h1 {
      font-size: clamp(38px, 9vw, 56px);
    }
    .dm-stream-section h2 {
      font-size: 28px;
    }
    .dm-tag {
      font-size: 11px;
      padding: 4px 10px;
    }
    .dm-bullets li {
      font-size: 14.2px;
    }
    .dm-btn {
      width: 100%;
      justify-content: center;
    }
    .dm-cta-section {
      padding: 80px 0 100px;
    }
  }
</style>
</head>
<body class="brand-page">

<?php include '../header.php'; ?>

<!-- Ambient Glows -->
<div class="dm-glow-orb dm-glow-1"></div>
<div class="dm-glow-orb dm-glow-2"></div>

<main>

  <!-- ============ HERO SECTION ============ -->
  <section class="dm-hero">
    <div class="dm-container dm-hero__inner">
      <div class="dm-hero__text">
        <h1>
          Digital
          <span>Marketing</span>
        </h1>
      </div>
      <div class="dm-hero__visual">
        <div class="dm-hero__image-wrapper">
          <img src="../assets/images/digital_marketing_hero_futuristic.png" alt="Futuristic Digital Marketing Data Visual">
        </div>
      </div>
    </div>
    
    <!-- Bouncing Scroll Indicator -->
    <div class="dm-scroll-cue" onclick="document.getElementById('dm-services-start').scrollIntoView({ behavior: 'smooth' });">
      <span></span>
      Scroll to explore
    </div>
  </section>

  <!-- ============ SCROLL REVEAL PRESENTER WRAPPER ============ -->
  <div id="dm-services-start" class="dm-reveal-content">
    
    <div class="dm-presenter">
      <div class="dm-container dm-presenter-grid">
        
        <!-- LEFT COLUMN: Sticky Stage (Desktop only) -->
        <div class="dm-stage">
          <div class="dm-stage__visual-frame">
            <div class="dm-stage__glow-ring"></div>
            
            <div class="dm-stage__image-holder is-active" data-service="seo">
              <img src="../assets/images/sub-seo.png" alt="SEO Illustration">
            </div>
            <div class="dm-stage__image-holder" data-service="social-media">
              <img src="../assets/images/sub-social-media.png" alt="Social Media Illustration">
            </div>
            <div class="dm-stage__image-holder" data-service="content-marketing">
              <img src="../assets/images/sub-content-marketing.png" alt="Content Marketing Illustration">
            </div>
            <div class="dm-stage__image-holder" data-service="reputation">
              <img src="../assets/images/sub-reputation-management.png" alt="Reputation & Analytics Illustration">
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN: Content Stream -->
        <div class="dm-stream">
          
          <!-- SUB-SERVICE 1: Search Engine Optimisation -->
          <section class="dm-stream-section" id="seo" data-service="seo">
            <span class="dm-tag">Strategy 01</span>
            <h2>Search Engine <span>Optimisation</span></h2>
            <p>
              Drive organic customer acquisition on autopilot. We implement data-backed keyword targets, semantic content enhancements, and robust technical infrastructure audits to secure sustained high-ranking search engine placement.
            </p>
            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                In-Depth Keyword Mapping &amp; Competitor Intelligence
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Technical SEO Audits &amp; Core Web Vitals Fine-Tuning
              </li>
            </ul>

            <!-- SEO Live Simulator Widget -->
            <div class="dm-widget">
              <input type="text" class="dm-seo-widget__input" id="dm-seo-input" value="Best Digital Agency" placeholder="Type a search query...">
              
              <div class="dm-seo-widget__toggle-row">
                <span class="dm-seo-widget__toggle-label">Enable Digibeat Optimization</span>
                <label class="dm-switch">
                  <input type="checkbox" id="dm-seo-toggle" checked>
                  <span class="dm-slider-toggle"></span>
                </label>
              </div>

              <div class="dm-google-serp">
                <div class="dm-google-serp__title" id="dm-serp-title">Best Digital Agency in 2026 | Digibeat Ranked #1</div>
                <div class="dm-google-serp__url" id="dm-serp-url">https://www.digibeat.com/services/digital-marketing</div>
                <div class="dm-google-serp__desc" id="dm-serp-desc">Looking for the best digital agency? Digibeat builds dynamic digital experiences that turn first-time visitors into long-term customer relationships. Partner with us today.</div>
              </div>

              <div class="dm-seo-widget__score-row">
                <span>PROJECTED CLICK-THROUGH RATE</span>
                <span class="dm-ctr-badge green" id="dm-ctr-badge">28.4% CTR</span>
              </div>
            </div>

            <!-- Mobile Graphic (Visible on <=992px) -->
            <div class="dm-mobile-visual">
              <img src="../assets/images/sub-seo.png" alt="SEO Illustration">
            </div>
            
            <a href="../contact.php" class="dm-btn">
              Optimise My Rankings
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </section>

          <!-- SUB-SERVICE 2: Social Media Marketing -->
          <section class="dm-stream-section" id="social-media" data-service="social-media">
            <span class="dm-tag">Strategy 02</span>
            <h2>Social Media <span>Marketing</span></h2>
            <p>
              Develop authentic relationships where your audience gathers. We design platform assets, formulate content distributions, and analyze social listening patterns to make your brand a vital topic of conversation.
            </p>
            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Cross-Platform Content Strategy &amp; Asset Formulation
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Interactive Paid Ad Campaign Optimization
              </li>
            </ul>

            <!-- SMM Ad Reach & Interactive Like Widget -->
            <div class="dm-widget">
              <div class="dm-smm-widget__sliders">
                <div class="dm-slider-row">
                  <div class="dm-slider-header">
                    <span>Monthly Ad Budget</span>
                    <span id="dm-budget-val">$2,500</span>
                  </div>
                  <input type="range" class="dm-input-slider" id="dm-budget-slider" min="500" max="10000" step="500" value="2500">
                </div>
                <div class="dm-slider-row">
                  <div class="dm-slider-header">
                    <span>Audience Pool Size</span>
                    <span id="dm-audience-val">150,000</span>
                  </div>
                  <input type="range" class="dm-input-slider" id="dm-audience-slider" min="20000" max="500000" step="10000" value="150000">
                </div>
              </div>

              <div class="dm-smm-widget__metrics">
                <div class="dm-metric-box">
                  <span class="dm-metric-label">Estimated Reach</span>
                  <span class="dm-metric-value" id="dm-reach-val">45.0k</span>
                </div>
                <div class="dm-metric-box">
                  <span class="dm-metric-label">Engagements</span>
                  <span class="dm-metric-value" id="dm-clicks-val">1.08k</span>
                </div>
                <div class="dm-metric-box">
                  <span class="dm-metric-label">Est. Revenue</span>
                  <span class="dm-metric-value" style="color: #22c55e;" id="dm-revenue-val">$9.5k</span>
                </div>
              </div>

              <!-- Interactive Glassmorphic Post Mockup -->
              <div class="dm-social-post">
                <div class="dm-social-post__header">
                  <div class="dm-social-post__avatar"></div>
                  <span class="dm-social-post__user">@digibeat_agency</span>
                </div>
                <div class="dm-social-post__img" id="dm-post-image"></div>
                <div class="dm-social-post__actions">
                  <div class="dm-social-post__buttons">
                    <button class="dm-like-btn" id="dm-like-trigger">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </button>
                    <span class="dm-social-post__likes" id="dm-likes-count">2,482 likes</span>
                  </div>
                  <div class="dm-social-post__caption">
                    <strong>@digibeat_agency</strong>Building beautiful campaigns that convert! Tap to like and test reach performance.
                  </div>
                </div>
              </div>
            </div>

            <!-- Mobile Graphic (Visible on <=992px) -->
            <div class="dm-mobile-visual">
              <img src="../assets/images/sub-social-media.png" alt="Social Media Illustration">
            </div>

            <a href="../contact.php" class="dm-btn">
              Grow My Community
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </section>

          <!-- SUB-SERVICE 3: Content Marketing -->
          <section class="dm-stream-section" id="content-marketing" data-service="content-marketing">
            <span class="dm-tag">Strategy 03</span>
            <h2>Content <span>Marketing</span></h2>
            <p>
              Earn lasting trust with editorial depth instead of renting temporary attention. We structure high-value resources, product guides, and case histories that assist prospects through every layer of their decision-making process.
            </p>
            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                Audience-Targeted Resource Planning &amp; Production
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke="currentColor"/></svg>
                High-Conversion Newsletters &amp; Email Nurtures
              </li>
            </ul>

            <!-- Content Funnel Planner Widget -->
            <div class="dm-widget">
              <select class="dm-planner-dropdown" id="dm-niche-select">
                <option value="saas">B2B SaaS Sector</option>
                <option value="ecommerce">E-Commerce Retailing</option>
                <option value="services">Local Professional Services</option>
              </select>

              <div class="dm-funnel-stages">
                <div class="dm-funnel-stage is-active" id="dm-stage-tofu" data-stage="tofu">
                  <div class="dm-funnel-stage__header">
                    <span class="dm-funnel-label">Top of Funnel (Awareness)</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2"><path d="m19 9-7 7-7-7"/></svg>
                  </div>
                  <div class="dm-funnel-stage__title" id="dm-tofu-title">Blog Strategy: "Why legacy infrastructure fails scale"</div>
                  <div class="dm-funnel-stage__content" id="dm-tofu-desc">Focuses on high-intent SEO search queries to hook prospects exploring solutions. Drives direct organic acquisition paths.</div>
                </div>

                <div class="dm-funnel-stage" id="dm-stage-mofu" data-stage="mofu">
                  <div class="dm-funnel-stage__header">
                    <span class="dm-funnel-label">Middle of Funnel (Evaluation)</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2"><path d="m19 9-7 7-7-7"/></svg>
                  </div>
                  <div class="dm-funnel-stage__title" id="dm-mofu-title">Gated Whitepaper: "The B2B Infrastructure Playbook"</div>
                  <div class="dm-funnel-stage__content" id="dm-mofu-desc">Exchanges high-value technical strategy blueprints for prospect emails to initialize nurture sequences.</div>
                </div>

                <div class="dm-funnel-stage" id="dm-stage-bofu" data-stage="bofu">
                  <div class="dm-funnel-stage__header">
                    <span class="dm-funnel-label">Bottom of Funnel (Conversion)</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2"><path d="m19 9-7 7-7-7"/></svg>
                  </div>
                  <div class="dm-funnel-stage__title" id="dm-bofu-title">Case Study: "Scaling SaaS ops by 12x with Digibeat"</div>
                  <div class="dm-funnel-stage__content" id="dm-bofu-desc">Applies social proof and concrete ROI metrics to eliminate transaction friction and secure sales.</div>
                </div>
              </div>
            </div>

            <!-- Mobile Graphic (Visible on <=992px) -->
            <div class="dm-mobile-visual">
              <img src="../assets/images/sub-content-marketing.png" alt="Content Marketing Illustration">
            </div>

            <a href="../contact.php" class="dm-btn">
              Build Authority
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </section>

          <!-- SUB-SERVICE 4: Online Reputation & Analytics -->
          <section class="dm-stream-section" id="reputation" data-service="reputation">
            <span class="dm-tag">Strategy 04</span>
            <h2>Online Reputation <span>&amp; Analytics</span></h2>
            <p>
              Secure your brand sentiment across search indexes and feedback loops. Combined with advanced dashboard reporting, we ensure every decision is backed by clean performance datasets showing exactly where acquisition flows.
            </p>
            <ul class="dm-bullets">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width:22px; height:22px; stroke:var(--dm-accent); flex-shrink:0;"><path d="M20 6L9 17l-5-5"/></svg>
                Active Review and Digital Sentiment Monitoring
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width:22px; height:22px; stroke:var(--dm-accent); flex-shrink:0;"><path d="M20 6L9 17l-5-5"/></svg>
                User Journey Analytics &amp; Conversion Tracking
              </li>
            </ul>

            <!-- Sentiment Analytics Scanner Widget -->
            <div class="dm-widget" style="position: relative;">
              <div class="dm-scanner-line" id="dm-scanner"></div>

              <div class="dm-orm-widget__list">
                <div class="dm-orm-item" id="dm-orm-1">
                  <span class="dm-orm-item__text">"Digibeat expanded our organic search reach dramatically!"</span>
                  <span class="dm-sentiment-badge positive" id="dm-badge-1">Positive</span>
                </div>
                <div class="dm-orm-item" id="dm-orm-2">
                  <span class="dm-orm-item__text">"Campaign launched on time, monitoring dashboard works cleanly."</span>
                  <span class="dm-sentiment-badge neutral" id="dm-badge-2">Neutral</span>
                </div>
                <div class="dm-orm-item" id="dm-orm-3">
                  <span class="dm-orm-item__text">"Ad setup is performing well, but we need more report intervals."</span>
                  <span class="dm-sentiment-badge positive" id="dm-badge-3">Positive</span>
                </div>
              </div>

              <button type="button" class="dm-orm-widget__btn" id="dm-scan-btn">Scan Sentiments</button>

              <div class="dm-orm-widget__dashboard">
                <div class="dm-chart-container">
                  <svg class="dm-chart-circle">
                    <circle class="dm-circle-bg" cx="40" cy="40" r="36" />
                    <circle class="dm-circle-progress" id="dm-chart-ring" cx="40" cy="40" r="36" />
                  </svg>
                  <div class="dm-chart-percentage" id="dm-trust-val">0%</div>
                </div>

                <div class="dm-status-log">
                  <div style="font-weight: 700; color: var(--dm-ink);">SCANNER STATUS</div>
                  <div id="dm-log-1">&gt; Standby</div>
                  <div id="dm-log-2">&gt; Ready for scan</div>
                </div>
              </div>
            </div>

            <!-- Mobile Graphic (Visible on <=992px) -->
            <div class="dm-mobile-visual">
              <img src="../assets/images/sub-reputation-management.png" alt="Reputation & Analytics Illustration">
            </div>

            <a href="../contact.php" class="dm-btn">
              Monitor Reputation
              <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </section>

        </div>

      </div>
    </div>

    <!-- ============ CLOSING CTA SECTION ============ -->
    <section class="dm-cta-section">
      <div class="dm-glow-orb dm-glow-1" style="top: 0;"></div>
      <div class="dm-container dm-cta-section__inner">
        <h2>Launch your next <span>growth cycle</span>.</h2>
        <p>Partner with our digital marketing specialists to construct compounding customer acquisition channels that scale organic traffic and drive real revenue.</p>
        <a href="../contact.php" class="dm-btn">
          Start a project
          <svg width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </section>

  </div>

</main>

<!-- Scroll Reveal, Sticky observer, and Dynamic Interactive Widgets Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  /* ═══════════════════════════════════════════════
     SCROLL REVEAL & PRESENTATION STAGE OBSERVATION
     ═══════════════════════════════════════════════ */
  var revealWrapper = document.getElementById('dm-services-start');
  var streamSections = document.querySelectorAll('.dm-stream-section');
  var imageHolders   = document.querySelectorAll('.dm-stage__image-holder');

  function handleMainReveal() {
    var scrollPos = window.scrollY || window.pageYOffset;
    if (scrollPos > 40) {
      revealWrapper.classList.add('is-revealed');
      window.removeEventListener('scroll', handleMainReveal);
    }
  }
  window.addEventListener('scroll', handleMainReveal);
  handleMainReveal();

  if ('IntersectionObserver' in window) {
    var observerOptions = {
      root: null,
      rootMargin: '-30% 0px -40% 0px',
      threshold: 0
    };

    var activeObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var serviceName = entry.target.getAttribute('data-service');
          
          streamSections.forEach(function(sec) {
            sec.classList.remove('is-active');
          });
          entry.target.classList.add('is-active');

          imageHolders.forEach(function(img) {
            img.classList.remove('is-active');
            if (img.getAttribute('data-service') === serviceName) {
              img.classList.add('is-active');
            }
          });
        }
      });
    }, observerOptions);

    streamSections.forEach(function(section) {
      activeObserver.observe(section);
    });
  } else {
    streamSections.forEach(function(sec) { sec.classList.add('is-active'); });
    imageHolders.forEach(function(img) { img.classList.add('is-active'); });
  }

  /* ═══════════════════════════════════════════════
     WIDGET 1: SEO LIVE SERP OPTIMIZER
     ═══════════════════════════════════════════════ */
  var seoInput = document.getElementById('dm-seo-input');
  var seoToggle = document.getElementById('dm-seo-toggle');
  var serpTitle = document.getElementById('dm-serp-title');
  var serpUrl = document.getElementById('dm-serp-url');
  var serpDesc = document.getElementById('dm-serp-desc');
  var ctrBadge = document.getElementById('dm-ctr-badge');

  function updateSERP() {
    var query = seoInput.value.trim() || 'Your Brand';
    var isOptimized = seoToggle.checked;

    if (isOptimized) {
      serpTitle.textContent = query.charAt(0).toUpperCase() + query.slice(1) + ' in 2026 | Digibeat Ranked #1';
      serpUrl.textContent = 'https://www.digibeat.com/services/digital-marketing';
      serpDesc.textContent = 'Looking for the best ' + query.toLowerCase() + '? Digibeat builds dynamic digital experiences that turn first-time visitors into long-term customer relationships. Partner with us.';
      ctrBadge.textContent = '28.4% CTR';
      ctrBadge.className = 'dm-ctr-badge green';
    } else {
      serpTitle.textContent = query;
      serpUrl.textContent = 'https://www.yoursite.com/default-page';
      serpDesc.textContent = 'Welcome to our generic business landing page. We offer standard operational service options to customers globally. Read about our guidelines here...';
      ctrBadge.textContent = '2.1% CTR';
      ctrBadge.className = 'dm-ctr-badge red';
    }
  }

  seoInput.addEventListener('input', updateSERP);
  seoToggle.addEventListener('change', updateSERP);

  /* ═══════════════════════════════════════════════
     WIDGET 2: SMM CALCULATOR & HEART EMITTER
     ═══════════════════════════════════════════════ */
  var budgetSlider = document.getElementById('dm-budget-slider');
  var audienceSlider = document.getElementById('dm-audience-slider');
  var budgetVal = document.getElementById('dm-budget-val');
  var audienceVal = document.getElementById('dm-audience-val');
  var reachVal = document.getElementById('dm-reach-val');
  var clicksVal = document.getElementById('dm-clicks-val');
  var revenueVal = document.getElementById('dm-revenue-val');

  function calculateAdMetrics() {
    var budget = parseInt(budgetSlider.value);
    var audience = parseInt(audienceSlider.value);

    budgetVal.textContent = '$' + budget.toLocaleString();
    audienceVal.textContent = audience.toLocaleString();

    // Marketing estimation formula
    var reach = Math.floor(budget * 16 + audience * 0.04);
    var clicks = Math.floor(reach * 0.026);
    var revenue = Math.floor(budget * 3.8);

    reachVal.textContent = (reach >= 1000) ? (reach / 1000).toFixed(1) + 'k' : reach;
    clicksVal.textContent = (clicks >= 1000) ? (clicks / 1000).toFixed(2) + 'k' : clicks;
    revenueVal.textContent = '$' + (revenue >= 1000 ? (revenue / 1000).toFixed(1) + 'k' : revenue);
  }

  budgetSlider.addEventListener('input', calculateAdMetrics);
  audienceSlider.addEventListener('input', calculateAdMetrics);
  calculateAdMetrics();

  // Heart particle trigger
  var likeTrigger = document.getElementById('dm-like-trigger');
  var likesCountEl = document.getElementById('dm-likes-count');
  var postImg = document.getElementById('dm-post-image');
  var currentLikes = 2482;
  var liked = false;

  function createHeart(e, isTouch) {
    var rect = postImg.getBoundingClientRect();
    var x = isTouch ? e.touches[0].clientX - rect.left : e.clientX - rect.left;
    var y = isTouch ? e.touches[0].clientY - rect.top : e.clientY - rect.top;

    var heart = document.createElement('div');
    heart.className = 'dm-heart-particle';
    heart.innerHTML = '❤️';
    heart.style.left = x + 'px';
    heart.style.top = y + 'px';
    
    // Random horizontal delta variance
    var dx = (Math.random() - 0.5) * 100;
    heart.style.setProperty('--dx', dx + 'px');

    postImg.appendChild(heart);

    // Increment like status
    if (!liked) {
      liked = true;
      currentLikes++;
      likesCountEl.textContent = currentLikes.toLocaleString() + ' likes';
    }

    setTimeout(function() {
      heart.remove();
    }, 1000);
  }

  postImg.addEventListener('click', function(e) {
    createHeart(e, false);
  });

  likeTrigger.addEventListener('click', function(e) {
    if (!liked) {
      liked = true;
      currentLikes++;
      likesCountEl.textContent = currentLikes.toLocaleString() + ' likes';
    } else {
      liked = false;
      currentLikes--;
      likesCountEl.textContent = currentLikes.toLocaleString() + ' likes';
    }
  });

  /* ═══════════════════════════════════════════════
     WIDGET 3: EDITORIAL FUNNEL PLANNER
     ═══════════════════════════════════════════════ */
  var nicheSelect = document.getElementById('dm-niche-select');
  var stageTofu = document.getElementById('dm-stage-tofu');
  var stageMofu = document.getElementById('dm-stage-mofu');
  var stageBofu = document.getElementById('dm-stage-bofu');
  
  var tofuTitle = document.getElementById('dm-tofu-title');
  var mofuTitle = document.getElementById('dm-mofu-title');
  var bofuTitle = document.getElementById('dm-bofu-title');

  var tofuDesc = document.getElementById('dm-tofu-desc');
  var mofuDesc = document.getElementById('dm-mofu-desc');
  var bofuDesc = document.getElementById('dm-bofu-desc');

  var nicheData = {
    saas: {
      tofuTitle: 'Blog Strategy: "Why legacy infrastructure fails scale"',
      tofuDesc: 'Focuses on B2B technical search queries to capture infrastructure architects. Optimised for structural growth keywords.',
      mofuTitle: 'Gated Whitepaper: "The B2B Infrastructure Playbook"',
      mofuDesc: 'Collects email contacts in exchange for comprehensive system architectural frameworks to feed nurture tracks.',
      bofuTitle: 'Case Study: "Scaling SaaS operations by 12x with Digibeat"',
      bofuDesc: 'Applies deep technical metrics and cost-saving results to resolve conversion friction and close opportunities.'
    },
    ecommerce: {
      tofuTitle: 'SEO Topic Hub: "Top visual styling trends for retail in 2026"',
      tofuDesc: 'Draws massive consumer and fashion search query volume into visual content categories.',
      mofuTitle: 'Interactive Quiz: "Find your brand identity style profile"',
      mofuDesc: 'Gathers audience preferences and contact addresses while segmenting list categories automatically.',
      bofuTitle: 'Fulfillment Story: "How Retailer X expanded checkouts by 180%"',
      bofuDesc: 'Displays load velocity improvements and payment conversion metrics to convince cart operators.'
    },
    services: {
      tofuTitle: 'Local Guide: "10 compliance audits your company needs"',
      tofuDesc: 'Targets localized corporate queries for operational and regulatory compliance topics.',
      mofuTitle: 'Self-Audit Workbook: "The Corporate Compliance Checklist"',
      mofuDesc: 'Supplies immediate template utilities to build confidence in professional consulting capabilities.',
      bofuTitle: 'Client Review Matrix: "Digibeat ORM security performance audit"',
      bofuDesc: 'Provides direct reviews, quotes, and audit transcripts showing positive brand equity impact.'
    }
  };

  function updateFunnelStages() {
    var niche = nicheSelect.value;
    var data = nicheData[niche];

    tofuTitle.textContent = data.tofuTitle;
    tofuDesc.textContent = data.tofuDesc;
    mofuTitle.textContent = data.mofuTitle;
    mofuDesc.textContent = data.mofuDesc;
    bofuTitle.textContent = data.bofuTitle;
    bofuDesc.textContent = data.bofuDesc;
  }

  nicheSelect.addEventListener('change', updateFunnelStages);

  var stages = document.querySelectorAll('.dm-funnel-stage');
  stages.forEach(function(stage) {
    stage.addEventListener('click', function() {
      stages.forEach(function(stg) { stg.classList.remove('is-active'); });
      stage.classList.add('is-active');
    });
  });

  /* ═══════════════════════════════════════════════
     WIDGET 4: SENTIMENT SCANNERS & CHART RING
     ═══════════════════════════════════════════════ */
  var scanBtn = document.getElementById('dm-scan-btn');
  var scannerLine = document.getElementById('dm-scanner');
  var chartRing = document.getElementById('dm-chart-ring');
  var trustVal = document.getElementById('dm-trust-val');
  var log1 = document.getElementById('dm-log-1');
  var log2 = document.getElementById('dm-log-2');
  var ormItems = [
    document.getElementById('dm-orm-1'),
    document.getElementById('dm-orm-2'),
    document.getElementById('dm-orm-3')
  ];
  var sentimentBadges = [
    document.getElementById('dm-badge-1'),
    document.getElementById('dm-badge-2'),
    document.getElementById('dm-badge-3')
  ];

  function runSentimentScan() {
    scanBtn.disabled = true;
    scanBtn.style.opacity = '0.5';
    scannerLine.classList.add('is-scanning');

    // Reset status elements
    chartRing.style.strokeDashoffset = '226';
    trustVal.textContent = '0%';
    log1.textContent = '> Initializing radar scanner...';
    log2.textContent = '> Detecting search mentions...';

    // Reset items background states
    ormItems.forEach(function(item) {
      item.style.borderColor = 'rgba(11, 11, 15, 0.06)';
      item.style.background = '#ffffff';
    });

    // Step-by-step scanner visual feedback
    setTimeout(function() {
      log1.textContent = '> Parsing sentiment semantics...';
      log2.textContent = '> Evaluating customer feedback...';
      ormItems[0].style.borderColor = 'rgba(34, 197, 94, 0.35)';
      ormItems[0].style.background = 'rgba(34, 197, 94, 0.03)';
    }, 500);

    setTimeout(function() {
      log1.textContent = '> Validating network trust indices...';
      ormItems[1].style.borderColor = 'rgba(91, 123, 255, 0.35)';
      ormItems[1].style.background = 'rgba(91, 123, 255, 0.03)';
    }, 1000);

    setTimeout(function() {
      log1.textContent = '> Aggregating total trust score...';
      log2.textContent = '> Complete.';
      ormItems[2].style.borderColor = 'rgba(34, 197, 94, 0.35)';
      ormItems[2].style.background = 'rgba(34, 197, 94, 0.03)';

      // Animate Pie Chart Progress (92% positive = Dashoffset 18)
      chartRing.style.strokeDashoffset = '18';
      trustVal.textContent = '92%';
      
      scanBtn.disabled = false;
      scanBtn.style.opacity = '1';
      scannerLine.classList.remove('is-scanning');
    }, 1500);
  }

  scanBtn.addEventListener('click', runSentimentScan);
});
</script>

<?php include '../footer.php'; ?>
</body>
</html>
