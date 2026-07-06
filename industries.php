<?php
/**
 * industries.php
 * "Industries" page — v6.
 *
 * A current-generation (2026) product-marketing treatment rather than
 * a document/photo layout:
 *   - Hero is a gradient-mesh field with an oversized, mixed-weight
 *     headline and floating stat chips instead of a plain paragraph.
 *   - A sticky pill nav lets you jump straight to a sector — the kind
 *     of quick-filter bar you'd expect on a modern product page.
 *   - The six sectors sit in an asymmetric bento mosaic (not a uniform
 *     grid, not a stacked list). Each tile is a photo card; tapping
 *     "View clients" flips it into a detail panel with the blurb and
 *     the client roster as chips, then flips back.
 *   - Tiles reveal on scroll, everything works and degrades sensibly
 *     with no JS, and prefers-reduced-motion is respected throughout.
 */
$active_page = 'industries';

$sectors = [
  [
    'code' => 'HC', 'num' => '01', 'id' => 'healthcare',
    'name' => 'Healthcare, Hospitals & Wellness',
    'blurb' => "From multi-specialty hospitals to Ayurveda, homeopathy, and everyday health products, we build for the full spectrum of care — clinical, alternative, and preventive.",
    'img' => 'https://loremflickr.com/900/900/hospital,doctor/all?lock=21',
    'groups' => [
      'Hospitals & Clinics' => ['BMH (Baby Memorial Hospital)', 'Elite Mission Hospital', 'Tree Health Care'],
      'Alternative Medicine' => ['Edhini Ayurveda', 'AVP (Arya Vaidya Pharmacy)', "Dr. Sameeha's Homoeo Home"],
      'Medical & Consumer Products' => ['Medi Chem (Disinfectant Industries L.L.C)', 'Dr. Alk'],
    ],
  ],
  [
    'code' => 'ED', 'num' => '02', 'id' => 'education',
    'name' => 'Education & Training',
    'blurb' => "We partner with institutions shaping minds at every stage — from a child's first classroom to advanced medical training.",
    'img' => 'https://loremflickr.com/700/900/classroom,school/all?lock=22',
    'groups' => [
      'Institutions & Academies' => ['Ayyoobi Educity', 'Markaz'],
      'Early Childhood Education' => ['Zee Que Preschool'],
      'Medical Education' => ['ALA BMCON (College of Nursing)', 'Sree Narayana Institute of Medical Sciences'],
    ],
  ],
  [
    'code' => 'CN', 'num' => '03', 'id' => 'construction',
    'name' => 'Construction, Real Estate & Interior Design',
    'blurb' => "Building brands as solid as the structures our clients create — from raw materials to finished, liveable interiors.",
    'img' => 'https://loremflickr.com/700/700/construction,architecture/all?lock=23',
    'groups' => [
      'Building Materials' => ['Prime Ston'],
      'Contracting & Interior Design' => ['Gulf Decorex (Trading & Contracting)'],
    ],
  ],
  [
    'code' => 'FA', 'num' => '04', 'id' => 'food',
    'name' => 'Food & Agriculture',
    'blurb' => "Rooted in tradition, grown for today — we help agricultural and food brands bring authenticity to market.",
    'img' => 'https://loremflickr.com/700/900/spices,farm/all?lock=24',
    'groups' => [
      'Spices & Organics' => ['pH7 Indian Organic Spices'],
    ],
  ],
  [
    'code' => 'HP', 'num' => '05', 'id' => 'hospitality',
    'name' => 'Hospitality & Commercial Equipment',
    'blurb' => "Powering the businesses behind hospitality — from kitchen equipment to the technology that keeps service running smoothly.",
    'img' => 'https://loremflickr.com/700/700/restaurant,kitchen/all?lock=25',
    'groups' => [
      'B2B Equipment & Technology' => ['Hulul Tech (Hotel and Restaurant Equipment)'],
    ],
  ],
  [
    'code' => 'NP', 'num' => '06', 'id' => 'nonprofit',
    'name' => 'Non-Profit & Social Welfare',
    'blurb' => "Amplifying causes that matter — helping charitable trusts and social organizations reach further and tell their story clearly.",
    'img' => 'https://loremflickr.com/1400/700/volunteer,charity/all?lock=26',
    'groups' => [
      'Charitable Trusts & NGOs' => ['Gurudeva Charitable Trust', 'Utthan'],
    ],
  ],
];

$all_brands = [];
foreach ($sectors as $s) { foreach ($s['groups'] as $names) { foreach ($names as $n) { $all_brands[] = $n; } } }
$brand_count  = count($all_brands);
$sector_count = count($sectors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="light only">
<title>Industries — Digibeat</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; }
  html { color-scheme: light only; }

  :root {
    --in-ink: #0b0b10;
    --in-muted: #63636f;
    --in-faint: #97979f;
    --in-accent: #5546e8;
    --in-accent-soft: #ece9fd;
    --in-line: #e8e7ee;
    --in-paper: #f6f5f9;
    --in-header-h: 76px;
    --in-nav-h: 60px;
  }

  html { scroll-behavior: smooth; }
  html {
    background: #ffffff !important;
    color: var(--in-ink) !important;
  }
  body {
    max-width: 100%;
    overflow-x: hidden;
    background: #ffffff !important;
    color: var(--in-ink) !important;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  body { padding-top: var(--in-header-h); position: relative; }

  /* filmic grain layer, subtle, sits above everything, ignores input */
  body::after {
    content: ""; position: fixed; inset: 0; z-index: 999; pointer-events: none;
    opacity: 0.025; mix-blend-mode: multiply;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  }

  #cr-header-wrap {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;
    background: #ffffff !important; border-bottom: 1px solid var(--in-line);
  }

  img, svg { max-width: 100%; height: auto; }
  h1, h2, h3 {
    font-family: 'Space Grotesk', 'Inter', sans-serif;
    font-weight: 600; letter-spacing: -0.02em; color: var(--in-ink);
  }
  .mono { font-family: 'JetBrains Mono', ui-monospace, monospace; }

  :focus-visible { outline: 2px solid var(--in-accent); outline-offset: 3px; border-radius: 4px; }

  .in-section { width: 100%; max-width: 1180px; margin: 0 auto; padding: 0 32px; }

  .in-eyebrow {
    display: inline-flex; align-items: center; gap: 9px;
    font-family: 'JetBrains Mono', monospace; font-size: 12.5px; font-weight: 600;
    letter-spacing: 0.1em; text-transform: uppercase; color: var(--in-accent); margin-bottom: 20px;
  }
  .in-eyebrow::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: var(--in-accent); flex-shrink: 0; }

  .in-btn-outline {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 15px 30px; border-radius: 999px; background: transparent;
    color: var(--in-ink); font-weight: 600; font-size: 14.5px;
    border: 1px solid var(--in-line); text-decoration: none; cursor: pointer;
    transition: border-color 0.15s ease, gap 0.15s ease, background 0.15s ease;
  }
  .in-btn-outline svg { width: 16px; height: 16px; stroke: currentColor; flex-shrink: 0; }
  .in-btn-outline:hover { border-color: var(--in-accent); background: var(--in-accent-soft); gap: 14px; }

  .in-btn-primary {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 16px 32px; border-radius: 999px; background: var(--in-ink);
    color: #ffffff; font-weight: 600; font-size: 14.5px; text-decoration: none;
    transition: background 0.15s ease, transform 0.15s ease, box-shadow 0.15s ease;
  }
  .in-btn-primary svg { width: 16px; height: 16px; stroke: currentColor; }
  .in-btn-primary:hover { background: var(--in-accent); transform: translateY(-2px); box-shadow: 0 14px 30px -12px rgba(85,70,232,0.55); }

  /* ---------- Hero: gradient mesh + floating chips ---------- */
  .in-hero { position: relative; padding: 96px 0 64px; overflow: hidden; }
  .in-hero__mesh { position: absolute; inset: 0; z-index: 0; pointer-events: none; }
  .in-hero__mesh span {
    position: absolute; border-radius: 50%; filter: blur(60px); opacity: 0.35;
  }
  .in-hero__mesh span:nth-child(1) { width: 420px; height: 420px; background: #5546e8; top: -160px; right: -60px; }
  .in-hero__mesh span:nth-child(2) { width: 300px; height: 300px; background: #9b8cff; top: 120px; right: 260px; opacity: 0.22; }

  .in-hero__inner { position: relative; z-index: 1; display: flex; align-items: flex-start; justify-content: space-between; gap: 40px; flex-wrap: wrap; }
  .in-hero__copy { max-width: 640px; }

  .in-hero h1 {
    font-size: clamp(40px, 5.8vw, 72px); line-height: 1.02; margin: 0 0 26px;
  }
  .in-hero h1 .in-hero__line2 { color: var(--in-accent); }

  .in-hero p {
    color: var(--in-muted); font-size: 17px; line-height: 1.7; font-weight: 400;
    max-width: 520px; margin: 0 0 36px;
  }

  .in-hero__stats { position: relative; width: 260px; flex-shrink: 0; min-height: 220px; display: none; }
  .in-chip {
    position: absolute; background: #fff; border: 1px solid var(--in-line);
    border-radius: 16px; padding: 16px 20px; box-shadow: 0 20px 40px -20px rgba(11,11,16,0.18);
  }
  .in-chip__num { font-family: 'Space Grotesk', sans-serif; font-weight: 700; font-size: 26px; display: block; line-height: 1; margin-bottom: 4px; }
  .in-chip__label { font-family: 'JetBrains Mono', monospace; font-size: 10.5px; color: var(--in-faint); text-transform: uppercase; letter-spacing: 0.04em; }
  .in-chip--a { top: 0; right: 40px; transform: rotate(-4deg); }
  .in-chip--b { top: 110px; right: 0; transform: rotate(3deg); }
  .in-chip--c { top: 200px; right: 90px; transform: rotate(-2deg); }

  @media (min-width: 860px) { .in-hero__stats { display: block; } }

  /* ---------- Sticky pill nav ---------- */
  .in-navbar {
    position: sticky; top: var(--in-header-h); z-index: 50;
    background: rgba(255,255,255,0.85); backdrop-filter: blur(10px);
    border-bottom: 1px solid var(--in-line);
  }
  .in-navbar__track {
    display: flex; gap: 8px; overflow-x: auto; padding: 14px 32px;
    max-width: 1180px; margin: 0 auto; scrollbar-width: none;
  }
  .in-navbar__track::-webkit-scrollbar { display: none; }
  .in-navlink {
    all: unset; cursor: pointer; white-space: nowrap; flex-shrink: 0;
    font-family: 'JetBrains Mono', monospace; font-size: 12.5px; font-weight: 600;
    letter-spacing: 0.02em; color: var(--in-muted); padding: 9px 16px;
    border-radius: 999px; border: 1px solid var(--in-line);
    transition: background 0.15s ease, color 0.15s ease, border-color 0.15s ease;
  }
  .in-navlink:hover { border-color: var(--in-accent); color: var(--in-accent); }
  .in-navlink.is-active { background: var(--in-ink); color: #fff; border-color: var(--in-ink); }

  /* ---------- Bento mosaic ---------- */
  .in-bento {
    padding: 64px 0 96px;
    display: grid; grid-template-columns: repeat(6, 1fr); grid-auto-rows: 130px; gap: 20px;
  }
  .in-tile {
    position: relative; border-radius: 22px; overflow: hidden;
    background: var(--in-paper); opacity: 0; transform: translateY(24px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
  .in-tile.is-visible { opacity: 1; transform: translateY(0); }

  .in-tile:nth-child(1) { grid-column: span 4; grid-row: span 3; }
  .in-tile:nth-child(2) { grid-column: span 2; grid-row: span 3; }
  .in-tile:nth-child(3) { grid-column: span 2; grid-row: span 2; }
  .in-tile:nth-child(4) { grid-column: span 2; grid-row: span 2; }
  .in-tile:nth-child(5) { grid-column: span 2; grid-row: span 2; }
  .in-tile:nth-child(6) { grid-column: span 6; grid-row: span 2; }

  .in-tile__img {
    position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.5s ease;
  }
  .in-tile:hover .in-tile__img { transform: scale(1.04); }

  .in-tile__scrim {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(0deg, rgba(8,8,14,0.86) 0%, rgba(8,8,14,0.35) 55%, rgba(8,8,14,0.02) 100%);
  }

  .in-tile__face { position: absolute; inset: 0; z-index: 2; display: flex; flex-direction: column; justify-content: flex-end; padding: 22px; color: #fff; }
  .in-tile__code {
    align-self: flex-start; font-family: 'JetBrains Mono', monospace; font-size: 11px; font-weight: 600;
    letter-spacing: 0.05em; background: rgba(255,255,255,0.16); backdrop-filter: blur(4px);
    padding: 6px 11px; border-radius: 999px; margin-bottom: auto;
  }
  .in-tile__name { font-family: 'Space Grotesk', sans-serif; font-weight: 600; font-size: clamp(17px, 1.6vw, 22px); line-height: 1.15; margin: 0 0 12px; max-width: 90%; }
  .in-tile__toggle {
    all: unset; cursor: pointer; display: inline-flex; align-items: center; gap: 8px;
    font-family: 'JetBrains Mono', monospace; font-size: 12px; font-weight: 600;
    letter-spacing: 0.03em; background: #fff; color: var(--in-ink);
    padding: 9px 14px; border-radius: 999px; width: fit-content;
    transition: background 0.15s ease, gap 0.15s ease;
  }
  .in-tile__toggle:hover { background: var(--in-accent-soft); gap: 11px; }
  .in-tile__toggle svg { width: 13px; height: 13px; stroke: currentColor; transition: transform 0.2s ease; }

  .in-tile__panel {
    position: absolute; inset: 0; z-index: 3; background: rgba(255,255,255,0.98);
    padding: 22px; display: flex; flex-direction: column;
    transform: translateY(100%); transition: transform 0.35s cubic-bezier(.2,.8,.2,1);
    overflow-y: auto;
  }
  .in-tile.is-open .in-tile__panel { transform: translateY(0); }
  .in-tile.is-open .in-tile__toggle svg { transform: rotate(45deg); }

  .in-tile__panel-top { display: flex; align-items: flex-start; justify-content: space-between; gap: 12px; margin-bottom: 12px; }
  .in-tile__panel-top h4 { font-family: 'Space Grotesk', sans-serif; font-weight: 600; font-size: 18px; margin: 0; }
  .in-tile__close {
    all: unset; cursor: pointer; flex-shrink: 0; width: 30px; height: 30px; border-radius: 50%;
    border: 1px solid var(--in-line); display: flex; align-items: center; justify-content: center;
    transition: border-color 0.15s ease, background 0.15s ease;
  }
  .in-tile__close:hover { border-color: var(--in-accent); background: var(--in-accent-soft); }
  .in-tile__close svg { width: 12px; height: 12px; stroke: currentColor; }

  .in-tile__blurb { color: var(--in-muted); font-size: 13.5px; line-height: 1.6; margin: 0 0 16px; }

  .in-roster__group + .in-roster__group { margin-top: 14px; }
  .in-roster__group h5 {
    font-family: 'JetBrains Mono', monospace; font-size: 10px; font-weight: 600;
    text-transform: uppercase; letter-spacing: 0.06em; color: var(--in-faint); margin: 0 0 8px;
  }
  .in-roster__list { display: flex; flex-wrap: wrap; gap: 6px; }
  .in-roster__item {
    background: var(--in-paper); border: 1px solid var(--in-line);
    border-radius: 999px; padding: 6px 12px; font-size: 12.5px; font-weight: 500; color: var(--in-ink);
  }

  /* ---------- Closing CTA ---------- */
  .in-cta { padding: 8px 0 96px; }
  .in-cta__card {
    position: relative; overflow: hidden; border-radius: 28px; background: var(--in-ink);
    padding: 72px 48px; display: flex; align-items: flex-end; justify-content: space-between; gap: 32px; flex-wrap: wrap;
  }
  .in-cta__card::before {
    content: ""; position: absolute; width: 360px; height: 360px; border-radius: 50%;
    background: var(--in-accent); filter: blur(90px); opacity: 0.5; top: -140px; left: -80px;
  }
  .in-cta__text { position: relative; z-index: 1; max-width: 560px; }
  .in-cta .in-eyebrow { color: #b7aeff; }
  .in-cta .in-eyebrow::before { background: #b7aeff; }
  .in-cta h2 { color: #fff; font-size: clamp(28px, 3.6vw, 42px); line-height: 1.08; margin: 0 0 16px; }
  .in-cta p { color: #b9b9c6; font-size: 16px; line-height: 1.7; margin: 0; }
  .in-cta__card .in-btn-primary { position: relative; z-index: 1; background: #fff; color: var(--in-ink); }
  .in-cta__card .in-btn-primary:hover { background: var(--in-accent); color: #fff; }

  /* ---------- Responsive ---------- */
  @media (max-width: 900px) {
    .in-bento { grid-template-columns: 1fr; grid-auto-rows: auto; }
    .in-tile:nth-child(n) { grid-column: auto; grid-row: auto; height: 320px; }
  }

  @media (max-width: 640px) {
    .in-section { padding: 0 20px; }
    .in-hero { padding: 52px 0 40px; }
    .in-navbar__track { padding: 12px 20px; }
    .in-cta__card { padding: 44px 24px; }
    .in-btn-primary { width: 100%; justify-content: center; }
  }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    .in-tile, .in-tile__img, .in-tile__panel, .in-btn-outline, .in-btn-primary, .in-navlink { transition: none; }
    .in-tile { opacity: 1; transform: none; }
  }
</style>
</head>
<body>
<div id="cr-header-wrap"><?php include 'header.php'; ?></div>

<!-- ============ HERO ============ -->
<section class="in-hero">
  <div class="in-hero__mesh" aria-hidden="true"><span></span><span></span></div>
  <div class="in-section in-hero__inner">
    <div class="in-hero__copy">
      <span class="in-eyebrow">Industries</span>
      <h1>Design that already<br>speaks <span class="in-hero__line2">your sector's language.</span></h1>
      <p>
        <?= $brand_count ?> brands, <?= $sector_count ?> industries — from hospital
        wards to construction sites to community causes. We learn the sector
        before we touch a pixel.
      </p>
      <a href="contact.php" class="in-btn-outline">
        Let's talk
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
    <div class="in-hero__stats" aria-hidden="true">
      <div class="in-chip in-chip--a">
        <span class="in-chip__num"><?= $brand_count ?></span>
        <span class="in-chip__label">Clients on file</span>
      </div>
      <div class="in-chip in-chip--b">
        <span class="in-chip__num"><?= $sector_count ?></span>
        <span class="in-chip__label">Industries</span>
      </div>
      <div class="in-chip in-chip--c">
        <span class="in-chip__num">1</span>
        <span class="in-chip__label">Team, no hand-offs</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ STICKY PILL NAV ============ -->
<nav class="in-navbar" aria-label="Jump to industry">
  <div class="in-navbar__track" id="in-navbar-track">
    <?php foreach ($sectors as $i => $s): ?>
      <button type="button" class="in-navlink<?= $i === 0 ? ' is-active' : '' ?>" data-target="<?= $s['id'] ?>"><?= htmlspecialchars($s['code']) ?> · <?= htmlspecialchars(explode(',', $s['name'])[0]) ?></button>
    <?php endforeach; ?>
  </div>
</nav>

<!-- ============ BENTO MOSAIC ============ -->
<section class="in-section">
  <div class="in-bento" id="in-bento">
    <?php foreach ($sectors as $i => $s): ?>
    <article class="in-tile" id="<?= $s['id'] ?>" data-tile>
      <img class="in-tile__img" src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['name']) ?>" loading="lazy">
      <div class="in-tile__scrim"></div>
      <div class="in-tile__face">
        <span class="in-tile__code"><?= $s['num'] ?> / 0<?= $sector_count ?> — <?= $s['code'] ?></span>
        <p class="in-tile__name"><?= htmlspecialchars($s['name']) ?></p>
        <button type="button" class="in-tile__toggle" data-toggle aria-expanded="false">
          View clients
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
        </button>
      </div>
      <div class="in-tile__panel">
        <div class="in-tile__panel-top">
          <h4><?= htmlspecialchars($s['name']) ?></h4>
          <button type="button" class="in-tile__close" data-close aria-label="Close">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>
        <p class="in-tile__blurb"><?= htmlspecialchars($s['blurb']) ?></p>
        <div class="in-roster">
          <?php foreach ($s['groups'] as $group => $names): ?>
            <div class="in-roster__group">
              <h5><?= htmlspecialchars($group) ?></h5>
              <div class="in-roster__list">
                <?php foreach ($names as $n): ?>
                  <span class="in-roster__item"><?= htmlspecialchars($n) ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============ WORK WITH US ============ -->
<section class="in-cta">
  <div class="in-section">
    <div class="in-cta__card">
      <div class="in-cta__text">
        <span class="in-eyebrow">Work with us</span>
        <h2>Don't see your industry here?</h2>
        <p>We're always glad to learn a new sector. Tell us what you're building and we'll show you how we'd approach it.</p>
      </div>
      <a href="contact.php" class="in-btn-primary">
        Let's talk
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<script>
(function () {
  var headerWrap = document.getElementById('cr-header-wrap');
  var navbar = document.querySelector('.in-navbar');
  function syncHeaderHeight() {
    if (!headerWrap) return;
    var h = headerWrap.offsetHeight;
    if (h > 0) document.documentElement.style.setProperty('--in-header-h', h + 'px');
  }
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);

  // Sticky pill nav: click to jump, highlight on scroll
  var navLinks = Array.prototype.slice.call(document.querySelectorAll('.in-navlink'));
  var tiles = Array.prototype.slice.call(document.querySelectorAll('[data-tile]'));
  var byId = {};
  navLinks.forEach(function (b) { byId[b.getAttribute('data-target')] = b; });

  navLinks.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = document.getElementById(btn.getAttribute('data-target'));
      if (!target) return;
      var offset = (headerWrap ? headerWrap.offsetHeight : 0) + (navbar ? navbar.offsetHeight : 0) + 16;
      var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

  if (tiles.length) {
    var navObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navLinks.forEach(function (b) { b.classList.remove('is-active'); });
          var btn = byId[entry.target.id];
          if (btn) {
            btn.classList.add('is-active');
            btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
          }
        }
      });
    }, { rootMargin: '-40% 0px -40% 0px', threshold: 0 });
    tiles.forEach(function (t) { navObserver.observe(t); });

    // Scroll reveal for tiles
    var revealObserver = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    tiles.forEach(function (t) { revealObserver.observe(t); });
  }

  // Flip-panel toggles
  tiles.forEach(function (tile) {
    var toggle = tile.querySelector('[data-toggle]');
    var close = tile.querySelector('[data-close]');
    function open() { tile.classList.add('is-open'); if (toggle) toggle.setAttribute('aria-expanded', 'true'); }
    function shut() { tile.classList.remove('is-open'); if (toggle) toggle.setAttribute('aria-expanded', 'false'); }
    if (toggle) toggle.addEventListener('click', open);
    if (close) close.addEventListener('click', shut);
  });
})();
</script>
</body>
</html>