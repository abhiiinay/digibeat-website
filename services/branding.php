<?php
/**
 * services/branding.php
 * "Branding & Identity" service page — Redesigned with a futuristic, modern dark aesthetic.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Branding &amp; Identity — Digibeat</title>
<style>
  :root {
    --brand-bg: #ffffff;
    --brand-panel: #f8fafc;
    --brand-panel-hover: #f1f5f9;
    --brand-ink: #0f172a;
    --brand-muted: #475569;
    --brand-line: rgba(0, 0, 0, 0.08);
    --brand-accent: #3d5afe;      /* Vibrant Blue */
    --brand-accent-2: #3d5afe;    /* Royal Blue */
    --brand-accent-soft: rgba(61, 90, 254, 0.06);
    --brand-accent-glow: rgba(61, 90, 254, 0.15);
    --brand-purple: #7c3aed;
    --brand-purple-glow: rgba(124, 58, 237, 0.15);
  }

  body.brand-page {
    background: var(--brand-bg);
    color: var(--brand-ink);
    font-family: 'Inter', sans-serif;
    margin: 0;
    overflow-x: hidden;
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  .brand-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Ambient glowing backgrounds */
  .brand-glow-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(140px);
    z-index: 0;
    pointer-events: none;
    opacity: 0.12; /* extremely soft for white theme */
  }
  .glow-1 {
    top: 50px;
    right: -100px;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, var(--brand-accent), transparent 70%);
  }
  .glow-2 {
    top: 600px;
    left: -200px;
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, var(--brand-purple), transparent 70%);
  }
  .glow-3 {
    bottom: 200px;
    right: -150px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, var(--brand-accent-2), transparent 70%);
  }

  /* Eyebrows & Common Headers */
  .brand-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--brand-accent);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 22px;
  }
  .brand-eyebrow .brand-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--brand-accent);
    box-shadow: 0 0 10px var(--brand-accent-glow);
  }

  /* Global Rule: ALL section headers must be black base, spans highlighted in blue */
  .brand-heading-lg,
  .brand-lab__header h2,
  .services-section__title h2,
  .brand-service-item h3,
  .brand-process__head h2,
  .brand-process__step h4,
  .brand-cta-card h2,
  .lab-info h3 {
    color: var(--brand-ink) !important;
  }
  .brand-heading-lg span,
  .brand-lab__header h2 span,
  .services-section__title h2 span,
  .brand-service-item h3 span,
  .brand-process__head h2 span,
  .brand-process__step h4 span,
  .brand-cta-card h2 span,
  .lab-info h3 span {
    color: var(--brand-accent-2) !important;
  }

  .brand-heading-lg {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(36px, 5vw, 62px);
    line-height: 1.1;
    font-weight: 700;
    margin: 0 0 24px;
    letter-spacing: -0.02em;
  }

  .brand-lead {
    color: var(--brand-muted);
    font-size: 18px;
    line-height: 1.7;
    max-width: 580px;
    margin: 0 0 40px;
  }

  /* Buttons */
  .brand-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: linear-gradient(135deg, var(--brand-accent) 0%, var(--brand-accent-2) 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    border: none;
    box-shadow: 0 10px 25px -10px var(--brand-accent-glow);
  }
  .brand-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px -8px var(--brand-accent-glow);
  }
  .brand-btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 999px;
    background: transparent;
    color: var(--brand-ink);
    font-weight: 600;
    font-size: 15px;
    border: 1px solid var(--brand-line);
    transition: border-color 0.2s ease, color 0.2s ease;
  }
  .brand-btn-ghost:hover {
    border-color: var(--brand-accent);
    color: var(--brand-accent);
  }

  /* ============ HERO SECTION ============ */
  .brand-hero {
    position: relative;
    padding: 140px 0 100px;
    overflow: hidden;
  }
  .brand-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
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
    border: 1.5px dashed rgba(37, 99, 235, 0.25);
    animation: rotateHolo 25s linear infinite;
  }
  .holo-shield-inner {
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 1px solid rgba(124, 58, 237, 0.25);
    animation: rotateHoloCounter 15s linear infinite;
  }
  .holo-node-svg {
    position: absolute;
    width: 250px;
    height: 250px;
  }
  .holo-node-path {
    fill: none;
    stroke: url(#holo-grad);
    stroke-width: 1.5;
    stroke-dasharray: 5, 250;
    animation: traceHolo 8s linear infinite;
  }
  .holo-core {
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, var(--brand-accent-glow) 0%, transparent 70%);
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
    border: 2px solid var(--brand-accent);
    box-shadow: 0 0 20px var(--brand-accent-glow);
    opacity: 0.8;
    animation: pulseCore 3s ease-in-out infinite alternate;
  }
  .holo-core svg {
    width: 50px;
    height: 50px;
    stroke: var(--brand-accent-2);
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
    0% { transform: scale(0.95); opacity: 0.5; box-shadow: 0 0 10px var(--brand-accent-glow); }
    100% { transform: scale(1.05); opacity: 1; box-shadow: 0 0 30px var(--brand-accent); }
  }
  @keyframes floatIcon {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(5deg); }
  }

  /* ============ FUTURE BRAND LAB (INTERACTIVE - SCROLL REVEAL) ============ */
  .brand-lab {
    padding: 100px 0;
    position: relative;
    border-top: 1px solid var(--brand-line);
    border-bottom: 1px solid var(--brand-line);
    background: rgba(0,0,0,0.01);
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .brand-lab.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
  .brand-lab__header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 56px;
  }
  .brand-lab__header p {
    color: var(--brand-muted);
    font-size: 16px;
    line-height: 1.6;
  }
  .brand-lab__tabs {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 40px;
    flex-wrap: wrap;
  }
  .brand-lab__tab {
    background: var(--brand-panel);
    border: 1px solid var(--brand-line);
    color: var(--brand-muted);
    padding: 12px 24px;
    border-radius: 99px;
    font-weight: 600;
    font-size: 14.5px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .brand-lab__tab:hover {
    color: var(--brand-ink);
    border-color: rgba(0,0,0,0.15);
  }
  .brand-lab__tab.is-active {
    background: var(--brand-accent-soft);
    border-color: var(--brand-accent);
    color: var(--brand-accent);
    box-shadow: 0 0 15px rgba(37, 99, 235, 0.1);
  }

  /* Interactive Screen Vibe */
  .brand-lab__canvas {
    background: #ffffff;
    border: 1px solid var(--brand-line);
    border-radius: 20px;
    padding: 48px;
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 48px;
    align-items: center;
    box-shadow: 0 30px 60px -30px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
  }
  .brand-lab__canvas::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 100% 0%, var(--lab-glow, var(--brand-accent-soft)) 0%, transparent 60%);
    pointer-events: none;
    transition: background 0.5s ease;
  }

  .lab-preview__container {
    background: var(--brand-panel);
    border-radius: 16px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 320px;
    border: 1px solid var(--brand-line);
    position: relative;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .lab-preview__logo {
    width: 100px;
    height: 100px;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.5s ease;
  }
  .lab-preview__logo svg {
    width: 100%;
    height: 100%;
    transition: all 0.5s ease;
  }
  
  .lab-preview__swatches {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
  }
  .lab-preview__swatch {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    border: 1.5px solid rgba(0,0,0,0.12);
    transition: transform 0.3s ease;
  }
  .lab-preview__swatch:hover {
    transform: scale(1.15);
  }

  .lab-preview__typography {
    text-align: center;
  }
  .lab-preview__font-display {
    font-family: var(--lab-font, 'Space Grotesk'), sans-serif;
    font-size: 24px;
    font-weight: 700;
    margin: 0 0 6px;
    letter-spacing: var(--lab-letter-spacing, -0.01em);
    transition: all 0.5s ease;
  }
  .lab-preview__font-body {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    color: var(--brand-muted);
    margin: 0;
  }

  /* Info Column */
  .lab-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .lab-info__tag {
    align-self: flex-start;
    padding: 6px 12px;
    border-radius: 99px;
    background: var(--lab-tag-bg, var(--brand-accent-soft));
    color: var(--lab-accent-color, var(--brand-accent));
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    border: 1px solid var(--lab-tag-border, rgba(37, 99, 235, 0.15));
    transition: all 0.5s ease;
  }
  .lab-info h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 28px;
    margin: 0;
    font-weight: 700;
  }
  .lab-info p {
    color: var(--brand-muted);
    font-size: 15.5px;
    line-height: 1.7;
    margin: 0 0 10px;
  }
  .lab-info__spec-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
    border-top: 1px solid var(--brand-line);
    padding-top: 20px;
  }
  .lab-info__spec-item {
    font-size: 13.5px;
  }
  .lab-info__spec-item strong {
    color: var(--brand-ink);
    display: block;
    margin-bottom: 4px;
  }
  .lab-info__spec-item span {
    color: var(--brand-muted);
  }

  /* Styles for the different active tab archetype configurations */
  .lab-preview__font-display {
    color: var(--lab-accent-color, var(--brand-ink));
  }
  .lab-archetype-minimal {
    --lab-glow: rgba(0, 0, 0, 0.02);
    --lab-tag-bg: rgba(0, 0, 0, 0.04);
    --lab-accent-color: #0f172a;
    --lab-tag-border: rgba(0,0,0,0.1);
    --lab-font: monospace;
    --lab-letter-spacing: -0.05em;
  }
  .lab-archetype-cyberpunk {
    --lab-glow: rgba(255, 0, 127, 0.04);
    --lab-tag-bg: rgba(255, 0, 127, 0.06);
    --lab-accent-color: #ff007f;
    --lab-tag-border: rgba(255,0,127,0.15);
    --lab-font: 'Space Grotesk';
    --lab-letter-spacing: 0.02em;
  }
  .lab-archetype-cyberpunk .lab-preview__container {
    border-color: rgba(255, 0, 127, 0.25);
    box-shadow: inset 0 0 15px rgba(255, 0, 127, 0.03);
  }
  .lab-archetype-elegant {
    --lab-glow: rgba(212, 175, 55, 0.04);
    --lab-tag-bg: rgba(212, 175, 55, 0.06);
    --lab-accent-color: #b48a17;
    --lab-tag-border: rgba(212,175,55,0.15);
    --lab-font: 'Space Grotesk';
    --lab-letter-spacing: -0.02em;
  }
  .lab-archetype-elegant .lab-preview__container {
    border-color: rgba(212, 175, 55, 0.2);
  }
  .lab-archetype-disruptive {
    --lab-glow: rgba(255, 87, 34, 0.04);
    --lab-tag-bg: rgba(255, 87, 34, 0.06);
    --lab-accent-color: #ea580c;
    --lab-tag-border: rgba(255, 87, 34, 0.15);
    --lab-font: 'Inter';
    --lab-letter-spacing: -0.03em;
  }
  .lab-archetype-disruptive .lab-preview__container {
    border-color: rgba(255, 87, 34, 0.2);
  }

  /* ============ THE 4 BRANDING SERVICES ============ */
  .brand-services-section {
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
  .services-section__title h2 span {
    color: var(--brand-accent);
  }

  .brand-services-grid {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }

  /* Card blueprint panel design */
  .brand-service-item {
    background: var(--brand-panel);
    border: 1px solid var(--brand-line);
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
  .brand-service-item::after {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; height: 3px;
    background: linear-gradient(90deg, transparent, var(--card-glow-color, var(--brand-accent)), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  .brand-service-item:hover {
    border-color: var(--card-hover-border, rgba(70, 224, 201, 0.3));
    box-shadow: 0 30px 60px -30px rgba(0, 0, 0, 0.5), 0 0 25px -10px var(--card-glow-shadow, rgba(70, 224, 201, 0.15));
    transform: translateY(-4px);
  }
  .brand-service-item:hover::after {
    opacity: 1;
  }

  .brand-service-item:nth-child(even) {
    direction: rtl;
  }
  .brand-service-item:nth-child(even) > * {
    direction: ltr; /* Reset text direction inside */
  }

  .service-detail__icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: var(--icon-bg, var(--brand-accent-soft));
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    border: 1.5px solid var(--icon-border, rgba(70, 224, 201, 0.2));
  }
  .service-detail__icon svg {
    width: 26px;
    height: 26px;
    stroke: var(--icon-stroke, var(--brand-accent));
    fill: none;
    stroke-width: 1.8;
  }
  .brand-service-item h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 32px;
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.01em;
  }
  .brand-service-item p {
    color: var(--brand-muted);
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
    color: var(--brand-ink);
  }
  .service-feature__row svg {
    width: 16px;
    height: 16px;
    stroke: var(--feature-bullet, var(--brand-accent));
    stroke-width: 2.2;
    fill: none;
    flex-shrink: 0;
  }

  /* Right column panel visual (holographic/cyber grid) */
  .service-visual-panel {
    background: #ffffff;
    border: 1px solid var(--brand-line);
    border-radius: 16px;
    height: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }
  .blueprint-grid {
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(rgba(0, 0, 0, 0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
    background-size: 20px 20px;
    background-position: center;
    opacity: 0.8;
  }

  .blueprint-shapes {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .blueprint-circle-lg {
    position: absolute;
    width: 180px; height: 180px;
    border-radius: 50%;
    border: 1px solid rgba(61, 90, 254, 0.15);
  }
  .blueprint-circle-sm {
    position: absolute;
    width: 100px; height: 100px;
    border-radius: 50%;
    border: 1px dashed rgba(124, 58, 237, 0.15);
  }
  .blueprint-axis-h {
    position: absolute;
    width: 220px; height: 1px;
    background: linear-gradient(90deg, transparent, rgba(0,0,0,0.08), transparent);
  }
  .blueprint-axis-v {
    position: absolute;
    width: 1px; height: 220px;
    background: linear-gradient(180deg, transparent, rgba(0,0,0,0.08), transparent);
  }
  .blueprint-vector-object {
    position: relative;
    z-index: 2;
    animation: pulseShape 4s ease-in-out infinite alternate;
  }

  @keyframes pulseShape {
    0% { transform: scale(0.96) rotate(0deg); filter: drop-shadow(0 0 5px rgba(70, 224, 201, 0.1)); }
    100% { transform: scale(1.04) rotate(5deg); filter: drop-shadow(0 0 15px var(--card-glow-shadow, rgba(70, 224, 201, 0.3))); }
  }

  /* Specific colors per card */
  .brand-service-item:nth-child(1) {
    --card-hover-border: rgba(70, 224, 201, 0.35);
    --card-glow-shadow: rgba(70, 224, 201, 0.15);
    --card-glow-color: var(--brand-accent);
  }
  .brand-service-item:nth-child(2) {
    --card-hover-border: rgba(91, 123, 255, 0.35);
    --card-glow-shadow: rgba(91, 123, 255, 0.15);
    --card-glow-color: var(--brand-accent-2);
    --icon-bg: rgba(91, 123, 255, 0.1);
    --icon-border: rgba(91, 123, 255, 0.2);
    --icon-stroke: var(--brand-accent-2);
    --feature-bullet: var(--brand-accent-2);
  }
  .brand-service-item:nth-child(3) {
    --card-hover-border: rgba(168, 85, 247, 0.35);
    --card-glow-shadow: rgba(168, 85, 247, 0.15);
    --card-glow-color: var(--brand-purple);
    --icon-bg: rgba(168, 85, 247, 0.1);
    --icon-border: rgba(168, 85, 247, 0.2);
    --icon-stroke: var(--brand-purple);
    --feature-bullet: var(--brand-purple);
  }
  .brand-service-item:nth-child(4) {
    --card-hover-border: rgba(255, 0, 127, 0.35);
    --card-glow-shadow: rgba(255, 0, 127, 0.15);
    --card-glow-color: #ff007f;
    --icon-bg: rgba(255, 0, 127, 0.1);
    --icon-border: rgba(255, 0, 127, 0.2);
    --icon-stroke: #ff007f;
    --feature-bullet: #ff007f;
  }

  /* ============ PROCESS / TIMELINE ============ */
  .brand-process {
    padding: 100px 0;
    background: rgba(255, 255, 255, 0.005);
    border-top: 1px solid var(--brand-line);
  }
  .brand-process__head {
    text-align: center;
    max-width: 600px;
    margin: 0 auto 64px;
  }
  .brand-process__head h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 38px;
    font-weight: 700;
  }
  .brand-process__head p {
    color: var(--brand-muted);
  }

  .brand-process__timeline {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px;
    position: relative;
  }
  .brand-process__line {
    position: absolute;
    top: 25px;
    left: 40px;
    right: 40px;
    height: 1px;
    background: linear-gradient(90deg, var(--brand-accent) 0%, var(--brand-accent-2) 50%, var(--brand-purple) 100%);
    z-index: 1;
    opacity: 0.3;
  }
  .brand-process__step {
    position: relative;
    z-index: 2;
    background: var(--brand-bg);
    padding-top: 10px;
  }
  .brand-process__dot {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--brand-panel);
    border: 2px solid var(--brand-line);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    transition: all 0.3s ease;
  }
  .brand-process__dot::after {
    content: "";
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--brand-line);
    transition: all 0.3s ease;
  }
  .brand-process__step:hover .brand-process__dot {
    border-color: var(--brand-accent);
    box-shadow: 0 0 15px var(--brand-accent-glow);
  }
  .brand-process__step:hover .brand-process__dot::after {
    background: var(--brand-accent);
  }
  
  .brand-process__num {
    font-family: var(--db-font-mono, monospace);
    font-size: 13px;
    font-weight: 700;
    color: var(--brand-accent);
    margin-bottom: 12px;
  }
  .brand-process__step h4 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 19px;
    font-weight: 700;
    margin: 0 0 10px;
  }
  .brand-process__step p {
    color: var(--brand-muted);
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
  }

  /* ============ CLOSING CTA ============ */
  .brand-cta-block {
    padding: 120px 0 160px;
    text-align: center;
    position: relative;
  }
  .brand-cta-card {
    background: radial-gradient(circle at 50% 0%, rgba(91,123,255,0.15) 0%, transparent 60%), var(--brand-panel);
    border: 1px solid var(--brand-line);
    border-radius: 28px;
    padding: 80px 48px;
    max-width: 900px;
    margin: 0 auto;
    box-shadow: 0 30px 60px -20px rgba(0,0,0,0.6);
    position: relative;
  }
  .brand-cta-card h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(30px, 4vw, 48px);
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.01em;
  }
  .brand-cta-card p {
    color: var(--brand-muted);
    font-size: 17px;
    line-height: 1.65;
    max-width: 520px;
    margin: 0 auto 36px;
  }

  /* ============ RESPONSIVE LAYOUTS ============ */
  @media (max-width: 960px) {
    .brand-hero__grid {
      grid-template-columns: 1fr;
      text-align: center;
      gap: 40px;
    }
    .brand-lead {
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

    .brand-lab__canvas {
      grid-template-columns: 1fr;
      gap: 32px;
      padding: 32px;
    }

    .brand-service-item {
      grid-template-columns: 1fr;
      gap: 36px;
      padding: 36px;
    }
    .brand-service-item:nth-child(even) {
      direction: ltr;
    }

    .brand-process__timeline {
      grid-template-columns: repeat(2, 1fr);
      gap: 40px;
    }
    .brand-process__line {
      display: none;
    }
  }

  @media (max-width: 600px) {
    .brand-container {
      padding: 0 20px;
    }
    .brand-hero {
      padding: 100px 0 60px;
    }
    .brand-btn-primary, .brand-btn-ghost {
      width: 100%;
      justify-content: center;
    }
    .brand-hero-ctas {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .brand-lab__canvas {
      padding: 20px;
    }
    .lab-preview__container {
      padding: 24px;
    }
    .brand-process__timeline {
      grid-template-columns: 1fr;
      gap: 32px;
    }
    .brand-cta-card {
      padding: 48px 24px;
    }
  }
</style>
</head>
<body class="brand-page">

<!-- Global Site Header -->
<?php include '../header.php'; ?>

<main style="position: relative;">
  <!-- Ambient background glow fields -->
  <div class="brand-glow-blob glow-1"></div>
  <div class="brand-glow-blob glow-2"></div>
  <div class="brand-glow-blob glow-3"></div>

  <!-- ============ HERO ============ -->
  <section class="brand-hero">
    <div class="brand-container brand-hero__grid">
      <div style="z-index: 5;">
        <div class="brand-eyebrow"><span class="brand-dot"></span> Brand &amp; Identity Design</div>
        <h1 class="brand-heading-lg">We engineer brand identity for the <span>digital future</span>.</h1>
        <p class="brand-lead">
          We combine core positioning, scalable visual guidelines, and interactive assets 
          to forge memorable digital footprints that withstand shifting technologies.
        </p>
        <div class="brand-hero-ctas" style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="../contact.php" class="brand-btn-primary">Start a project</a>
          <a href="#services-list" class="brand-btn-ghost">Explore capabilities</a>
        </div>
      </div>

      <div class="hologram-container">
        <!-- Radial blueprint rings -->
        <div class="holo-shield"></div>
        <div class="holo-shield-inner"></div>
        <!-- Hologram core with custom glowing mark -->
        <div class="holo-core">
          <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
          </svg>
        </div>
        <!-- Animated pulsing paths connecting the structure -->
        <svg class="holo-node-svg" viewBox="0 0 200 200">
          <defs>
            <linearGradient id="holo-grad" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#46e0c9" />
              <stop offset="100%" stop-color="#a855f7" />
            </linearGradient>
          </defs>
          <path class="holo-node-path" d="M100,10 C50,10 10,50 10,100 C10,150 50,190 100,190 C150,190 190,150 190,100" />
        </svg>
      </div>
    </div>
  </section>



  <!-- ============ THE 4 BRANDING SERVICES LIST ============ -->
  <section class="brand-services-section" id="services-list">
    <div class="brand-container">
      <div class="services-section__title">
        <span class="brand-eyebrow"><span class="brand-dot"></span> Core Capabilities</span>
        <h2>Four pillars of <span>modern identity engineering</span>.</h2>
      </div>

      <div class="brand-services-grid">
        <!-- BRAND CONSULTING -->
        <div class="brand-service-item" id="brand-consulting">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                <line x1="12" y1="22.08" x2="12" y2="12"/>
              </svg>
            </div>
            <h3>Brand <span>Consulting</span></h3>
            <p>
              We craft core positioning, custom brand nomenclature, tone guidelines, and message blueprints. 
              We clarify why your business stands out, transforming ambiguous values into sharp verbal structures.
            </p>
            <div class="service-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Competitive Positioning Analysis</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Nomenclature &amp; Product Naming Frameworks</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Brand Tone-of-Voice &amp; Messaging Playbooks</span>
              </div>
            </div>
          </div>

          <div class="service-visual-panel">
            <div class="blueprint-grid"></div>
            <div class="blueprint-shapes">
              <div class="blueprint-circle-lg"></div>
              <div class="blueprint-circle-sm"></div>
              <div class="blueprint-axis-h"></div>
              <div class="blueprint-axis-v"></div>
              <svg class="blueprint-vector-object" width="120" height="120" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="30" stroke="#3d5afe" stroke-width="1.5" fill="none" />
                <path d="M50 10 L50 90 M10 50 L90 50" stroke="rgba(0,0,0,0.12)" stroke-width="1" />
                <rect x="35" y="35" width="30" height="30" stroke="#3d5afe" stroke-width="1.5" fill="none" transform="rotate(45 50 50)" />
              </svg>
            </div>
          </div>
        </div>

        <!-- LOGO DESIGN -->
        <div class="brand-service-item" id="logo-design">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <path d="m10 15 5-3-5-3v6Z"/>
              </svg>
            </div>
            <h3>Logo <span>Design</span></h3>
            <p>
              We design premium marks, emblems, and visual assets built to scale flawlessly from small favicons to massive digital displays, while expressing the core energy of your identity.
            </p>
            <div class="service-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Adaptive Responsive Logo Suites</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Bespoke Wordmarks &amp; Typographic Elements</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Scalable Vector Optimization &amp; Asset Delivery</span>
              </div>
            </div>
          </div>

          <div class="service-visual-panel">
            <div class="blueprint-grid"></div>
            <div class="blueprint-shapes">
              <div class="blueprint-circle-lg" style="border-color: rgba(91, 123, 255, 0.2);"></div>
              <div class="blueprint-circle-sm" style="border-color: rgba(70, 224, 201, 0.2);"></div>
              <div class="blueprint-axis-h"></div>
              <div class="blueprint-axis-v"></div>
              <svg class="blueprint-vector-object" width="130" height="130" viewBox="0 0 100 100">
                <polygon points="50,15 90,80 10,80" stroke="#3d5afe" stroke-width="2.2" fill="none" />
                <circle cx="50" cy="53" r="18" stroke="#3d5afe" stroke-width="1.5" fill="none" />
              </svg>
            </div>
          </div>
        </div>

        <!-- PRODUCT DESIGN -->
        <div class="brand-service-item" id="product-design">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                <polyline points="7.5 4.21 12 6.81 16.5 4.21"/>
                <polyline points="7.5 19.79 7.5 14.6 12 12.01 16.5 14.6 16.5 19.79"/>
                <polyline points="12 12.01 12 6.81"/>
              </svg>
            </div>
            <h3>Industrial &amp; <span>Product Design</span></h3>
            <p>
              We shape physical product conceptualization, hardware casing styling, packaging architecture, and mechanical engineering blueprints, aligning high physical touchpoints with digital style guides.
            </p>
            <div class="service-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>3D Conceptual Modeling &amp; Casing Styles</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Ergonomics, Materials &amp; Finish Definitions</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Futuristic Tactile Packaging Architecture</span>
              </div>
            </div>
          </div>

          <div class="service-visual-panel">
            <div class="blueprint-grid"></div>
            <div class="blueprint-shapes">
              <div class="blueprint-circle-lg" style="border-color: rgba(168, 85, 247, 0.2);"></div>
              <div class="blueprint-circle-sm" style="border-color: rgba(91, 123, 255, 0.2);"></div>
              <div class="blueprint-axis-h"></div>
              <div class="blueprint-axis-v"></div>
              <svg class="blueprint-vector-object" width="120" height="120" viewBox="0 0 100 100">
                <path d="M50,15 L90,38 L90,82 L50,95 L10,82 L10,38 Z" stroke="#7c3aed" stroke-width="1.8" fill="none" />
                <path d="M10,38 L50,60 L90,38 M50,60 L50,95" stroke="rgba(0,0,0,0.12)" stroke-width="1.5" />
                <circle cx="50" cy="38" r="10" stroke="#3d5afe" stroke-width="1.2" fill="none" />
              </svg>
            </div>
          </div>
        </div>

        <!-- GRAPHIC DESIGN -->
        <div class="brand-service-item" id="graphic-design">
          <div>
            <div class="service-detail__icon">
              <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                <circle cx="9" cy="9" r="2"/>
                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
              </svg>
            </div>
            <h3>Graphic <span>Design</span></h3>
            <p>
              We develop editorial brochures, print and outdoor materials, marketing campaign graphics, and digital assets. We ensure absolute visual consistency across both online screens and physical paper.
            </p>
            <div class="service-features__list">
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Editorial layouts &amp; Print collaterals</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Social and Digital Campaign Assets</span>
              </div>
              <div class="service-feature__row">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Interactive Brand Guidelines &amp; Styleboards</span>
              </div>
            </div>
          </div>

          <div class="service-visual-panel">
            <div class="blueprint-grid"></div>
            <div class="blueprint-shapes">
              <div class="blueprint-circle-lg" style="border-color: rgba(255, 0, 127, 0.2);"></div>
              <div class="blueprint-circle-sm" style="border-color: rgba(168, 85, 247, 0.2);"></div>
              <div class="blueprint-axis-h"></div>
              <div class="blueprint-axis-v"></div>
              <svg class="blueprint-vector-object" width="120" height="120" viewBox="0 0 100 100">
                <rect x="20" y="20" width="60" height="60" stroke="#ff007f" stroke-width="1.8" fill="none" rx="8" />
                <circle cx="45" cy="45" r="12" stroke="#7c3aed" stroke-width="1.2" fill="none" />
                <path d="M22 68 L48 50 L78 72" stroke="rgba(0,0,0,0.15)" stroke-width="1.5" fill="none" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS SECTIONS ============ -->
  <section class="brand-process">
    <div class="brand-container">
      <div class="brand-process__head">
        <span class="brand-eyebrow"><span class="brand-dot"></span> Roadmap</span>
        <h2>How we <span>build it</span></h2>
        <p>A rigorous, collaborative pathway from research to asset deployment.</p>
      </div>

      <div class="brand-process__timeline">
        <div class="brand-process__line"></div>

        <div class="brand-process__step">
          <div class="brand-process__dot"></div>
          <div class="brand-process__num">Phase 01</div>
          <h4>Strategic <span>Genesis</span></h4>
          <p>We analyze market position, competitors, and defining target attributes to map out the brand blueprint.</p>
        </div>

        <div class="brand-process__step">
          <div class="brand-process__dot"></div>
          <div class="brand-process__num">Phase 02</div>
          <h4>Visual <span>Engineering</span></h4>
          <p>We render multiple vector identity paths, typography grids, and color schemes under real conditions.</p>
        </div>

        <div class="brand-process__step">
          <div class="brand-process__dot"></div>
          <div class="brand-process__num">Phase 03</div>
          <h4>Collateral <span>Expansion</span></h4>
          <p>We map guidelines to mockups, stationery, web designs, packaging prototypes, and corporate literature.</p>
        </div>

        <div class="brand-process__step">
          <div class="brand-process__dot"></div>
          <div class="brand-process__num">Phase 04</div>
          <h4>Style Engine <span>Launch</span></h4>
          <p>We deliver organized vector directories, guidelines sheets, and web assets ready for the team to deploy.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="brand-cta-block">
    <div class="brand-container">
      <div class="brand-cta-card">
        <h2>Forge your new <span>trajectory</span>.</h2>
        <p>
          Let's shape the visual codes that command authority in your space. Partner with Digibeat to engineer a modern, iconic brand.
        </p>
        <a href="../contact.php" class="brand-btn-primary">Connect with our designers</a>
      </div>
    </div>
  </section>
</main>


<!-- Global Site Footer -->
<?php include '../footer.php'; ?>

</body>
</html>
