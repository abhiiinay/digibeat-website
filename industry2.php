<?php
/**
 * industries.php
 * "Industries" page — v5.
 *
 * A plain, confident case-study layout: one photo and one write-up per
 * industry, in alternating rows, on a white ground. Heading style is
 * matched to the brand's existing "Get in touch" treatment — a small
 * purple mono eyebrow with a bullet, then a very heavy, tight black
 * headline, then a quieter grey paragraph. That same three-part rhythm
 * (eyebrow / heavy headline / grey body) repeats at the top of the
 * page and again in the closing section, so the page has one voice.
 *
 * Client names are no longer inside the photo — they sit underneath
 * each write-up as plain grouped tags, so the image can just be a
 * photo of the industry instead of a canvas for text-over-image.
 */
$active_page = 'industries';

$sectors = [
  [
    'code' => 'HC', 'num' => '01', 'id' => 'healthcare',
    'name' => 'Healthcare, Hospitals & Wellness',
    'blurb' => "From multi-specialty hospitals to Ayurveda, homeopathy, and everyday health products, we build for the full spectrum of care — clinical, alternative, and preventive.",
    'img' => 'https://loremflickr.com/900/1000/hospital,doctor/all?lock=21',
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
    'img' => 'https://loremflickr.com/900/1000/classroom,school/all?lock=22',
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
    'img' => 'https://loremflickr.com/900/1000/construction,architecture/all?lock=23',
    'groups' => [
      'Building Materials' => ['Prime Ston'],
      'Contracting & Interior Design' => ['Gulf Decorex (Trading & Contracting)'],
    ],
  ],
  [
    'code' => 'FA', 'num' => '04', 'id' => 'food',
    'name' => 'Food & Agriculture',
    'blurb' => "Rooted in tradition, grown for today — we help agricultural and food brands bring authenticity to market.",
    'img' => 'https://loremflickr.com/900/1000/spices,farm/all?lock=24',
    'groups' => [
      'Spices & Organics' => ['pH7 Indian Organic Spices'],
    ],
  ],
  [
    'code' => 'HP', 'num' => '05', 'id' => 'hospitality',
    'name' => 'Hospitality & Commercial Equipment',
    'blurb' => "Powering the businesses behind hospitality — from kitchen equipment to the technology that keeps service running smoothly.",
    'img' => 'https://loremflickr.com/900/1000/restaurant,kitchen/all?lock=25',
    'groups' => [
      'B2B Equipment & Technology' => ['Hulul Tech (Hotel and Restaurant Equipment)'],
    ],
  ],
  [
    'code' => 'NP', 'num' => '06', 'id' => 'nonprofit',
    'name' => 'Non-Profit & Social Welfare',
    'blurb' => "Amplifying causes that matter — helping charitable trusts and social organizations reach further and tell their story clearly.",
    'img' => 'https://loremflickr.com/900/1000/volunteer,charity/all?lock=26',
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
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@500;700;800&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; }
  html { color-scheme: light only; }

  :root {
    --in-ink: #0a0a0c;
    --in-muted: #6b6d78;
    --in-faint: #9497a3;
    --in-accent: #5546e8;
    --in-line: #e7e7ec;
    --in-paper: #f7f7f9;
    --in-header-h: 76px;
  }

  html { scroll-behavior: smooth; }
  html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: #ffffff !important;
    color: var(--in-ink) !important;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  body { padding-top: var(--in-header-h); }

  #cr-header-wrap {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;
    background: #ffffff !important; border-bottom: 1px solid var(--in-line);
  }

  img, svg { max-width: 100%; height: auto; }
  h1, h2, h3 {
    font-family: 'Inter Tight', 'Inter', sans-serif;
    font-weight: 800; letter-spacing: -0.028em; color: var(--in-ink);
  }
  .mono { font-family: 'IBM Plex Mono', ui-monospace, monospace; }

  :focus-visible { outline: 2px solid var(--in-ink); outline-offset: 3px; border-radius: 2px; }

  .in-section { width: 100%; max-width: 1160px; margin: 0 auto; padding: 0 32px; }

  .in-eyebrow {
    display: flex; align-items: center; gap: 9px;
    font-family: 'IBM Plex Mono', monospace; font-size: 12.5px; font-weight: 600;
    letter-spacing: 0.12em; text-transform: uppercase; color: var(--in-accent); margin-bottom: 22px;
  }
  .in-eyebrow::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: var(--in-accent); flex-shrink: 0; }

  .in-btn-outline {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 15px 30px; border-radius: 999px; background: transparent;
    color: var(--in-ink); font-weight: 600; font-size: 14.5px;
    border: 1px solid var(--in-line); text-decoration: none; cursor: pointer;
    transition: border-color 0.15s ease, gap 0.15s ease;
  }
  .in-btn-outline svg { width: 16px; height: 16px; stroke: currentColor; flex-shrink: 0; }
  .in-btn-outline:hover { border-color: var(--in-ink); gap: 14px; }

  .in-btn-primary {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 16px 32px; border-radius: 999px; background: var(--in-ink);
    color: #ffffff; font-weight: 600; font-size: 14.5px; text-decoration: none;
    transition: background 0.15s ease, transform 0.15s ease;
  }
  .in-btn-primary svg { width: 16px; height: 16px; stroke: currentColor; }
  .in-btn-primary:hover { background: var(--in-accent); transform: translateY(-1px); }

  /* ---------- Hero ---------- */
  .in-hero { padding: 88px 0 76px; }
  .in-hero h1 {
    font-size: clamp(38px, 5.4vw, 68px); line-height: 1.04; margin: 0 0 26px; max-width: 820px;
  }
  .in-hero p {
    color: var(--in-muted); font-size: 17px; line-height: 1.7; font-weight: 400;
    max-width: 540px; margin: 0 0 36px;
  }

  .in-tally {
    display: flex; gap: 40px; margin-top: 52px; padding-top: 32px; border-top: 1px solid var(--in-line);
  }
  .in-tally__num {
    font-family: 'Inter Tight', sans-serif; font-weight: 800; font-size: 30px;
    letter-spacing: -0.02em; display: block; margin-bottom: 4px;
  }
  .in-tally__label {
    font-family: 'IBM Plex Mono', monospace; font-size: 11.5px; color: var(--in-faint);
    letter-spacing: 0.04em; text-transform: uppercase;
  }

  /* ---------- Sector rows ---------- */
  .in-stack { padding: 0 0 24px; }

  .in-row {
    display: grid; grid-template-columns: minmax(0, 460px) 1fr; gap: 64px; align-items: center;
    padding: 68px 0; border-top: 1px solid var(--in-line);
  }
  .in-row:first-child { border-top: none; }
  .in-row.is-flip .in-row__media { order: 2; }
  .in-row.is-flip .in-row__content { order: 1; }

  .in-row__media { position: relative; }
  .in-row__frame {
    position: relative; width: 100%; aspect-ratio: 4 / 4.6; border-radius: 18px; overflow: hidden;
    background: var(--in-paper);
  }
  .in-row__frame img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .in-row__tag {
    position: absolute; top: 16px; left: 16px; z-index: 2;
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(10,10,12,0.55); backdrop-filter: blur(6px);
    color: #fff; font-family: 'IBM Plex Mono', monospace; font-size: 11.5px;
    font-weight: 600; letter-spacing: 0.04em; padding: 7px 12px; border-radius: 999px;
  }

  .in-row__content h3 {
    font-size: clamp(23px, 2.6vw, 30px); line-height: 1.12; margin: 0 0 16px;
  }
  .in-row__content > p {
    color: var(--in-muted); font-size: 15.5px; line-height: 1.7; font-weight: 400;
    margin: 0 0 28px; max-width: 480px;
  }

  .in-roster__group + .in-roster__group { margin-top: 20px; }
  .in-roster__group h4 {
    font-family: 'IBM Plex Mono', monospace; font-size: 11px; font-weight: 600;
    text-transform: uppercase; letter-spacing: 0.06em; color: var(--in-faint); margin: 0 0 10px;
  }
  .in-roster__list { display: flex; flex-wrap: wrap; gap: 8px; }
  .in-roster__item {
    background: var(--in-paper); border: 1px solid var(--in-line);
    border-radius: 999px; padding: 7px 14px; font-size: 13.5px; font-weight: 500; color: var(--in-ink);
  }

  /* ---------- Closing CTA ---------- */
  .in-cta { padding: 96px 0 40px; border-top: 1px solid var(--in-line); }
  .in-cta__grid { display: flex; align-items: flex-end; justify-content: space-between; gap: 32px; flex-wrap: wrap; }
  .in-cta__text { max-width: 560px; }
  .in-cta h2 { font-size: clamp(28px, 3.8vw, 44px); line-height: 1.08; margin: 0 0 16px; }
  .in-cta p { color: var(--in-muted); font-size: 16px; line-height: 1.7; margin: 0; }

  /* ---------- Responsive ---------- */
  @media (max-width: 900px) {
    .in-row { grid-template-columns: 1fr; gap: 28px; padding: 48px 0; }
    .in-row.is-flip .in-row__media, .in-row.is-flip .in-row__content { order: initial; }
    .in-row__frame { aspect-ratio: 16 / 10; }
  }

  @media (max-width: 640px) {
    .in-section { padding: 0 20px; }
    .in-hero { padding: 52px 0 48px; }
    .in-tally { gap: 24px; }
    .in-cta { padding: 64px 0 30px; }
    .in-btn-primary { width: 100%; justify-content: center; }
  }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    .in-btn-outline, .in-btn-primary { transition: none; }
  }
</style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>
<body>
<div id="cr-header-wrap"><?php include 'header.php'; ?></div>

<!-- ============ HERO ============ -->
<section class="in-hero">
  <div class="in-section">
    <span class="in-eyebrow">Industries</span>
    <h1>We don't design at an industry. We design from inside it.</h1>
    <p>
      From hospital wards to classrooms, construction sites to community
      causes — <?= $brand_count ?> brands, <?= $sector_count ?> industries, one
      team that takes the time to learn each sector's own language before
      touching a pixel.
    </p>
    <a href="contact.php" class="in-btn-outline">
      Let's talk
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </a>

    <div class="in-tally">
      <div>
        <span class="in-tally__num"><?= $brand_count ?></span>
        <span class="in-tally__label">Clients</span>
      </div>
      <div>
        <span class="in-tally__num"><?= $sector_count ?></span>
        <span class="in-tally__label">Industries</span>
      </div>
      <div>
        <span class="in-tally__num">1</span>
        <span class="in-tally__label">Team, no hand-offs</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTOR ROWS ============ -->
<section class="in-stack">
  <div class="in-section">
    <?php foreach ($sectors as $i => $s): ?>
    <article class="in-row<?= $i % 2 === 1 ? ' is-flip' : '' ?>" id="<?= $s['id'] ?>">
      <div class="in-row__media">
        <div class="in-row__frame">
          <img src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['name']) ?>" loading="lazy">
          <span class="in-row__tag"><?= $s['num'] ?> / 0<?= $sector_count ?> — <?= $s['code'] ?></span>
        </div>
      </div>
      <div class="in-row__content">
        <h3><?= htmlspecialchars($s['name']) ?></h3>
        <p><?= htmlspecialchars($s['blurb']) ?></p>
        <div class="in-roster">
          <?php foreach ($s['groups'] as $group => $names): ?>
            <div class="in-roster__group">
              <h4><?= htmlspecialchars($group) ?></h4>
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
  <div class="in-section in-cta__grid">
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
</section>

<script>
(function () {
  var headerWrap = document.getElementById('cr-header-wrap');
  function syncHeaderHeight() {
    if (!headerWrap) return;
    var h = headerWrap.offsetHeight;
    if (h > 0) document.documentElement.style.setProperty('--in-header-h', h + 'px');
  }
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);
})();
</script>
</body>
</html>