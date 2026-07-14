<?php
/**
 * Digibeat — About Page
 * Same layout/design system as the original build, reskinned for Digibeat.
 * No header/nav or footer. Coverage section removed. Values section left
 * untouched. Content is data-driven (PHP arrays below) and rendered through
 * simple loops, so copy can be edited in one place.
 */

$pageTitle = "About — Digibeat";

$pillars = [
    [
        "code"   => "SIGNAL_01",
        "label"  => "Vision",
        "title"  => "Our Vision",
        "body"   => "To become a global leader in digital transformation, recognized for excellence, creativity, and impact.",
        "image"  => "https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&q=80&auto=format&fit=crop",
        "alt"    => "A team celebrating with a high five over a desk",
    ],
    [
        "code"   => "SIGNAL_02",
        "label"  => "Mission",
        "title"  => "Our Mission",
        "body"   => "To empower businesses with innovative digital solutions that help them grow, adapt, and lead in the modern digital landscape.",
        "image"  => "https://images.unsplash.com/photo-1552664730-d307ca884978?w=900&q=80&auto=format&fit=crop",
        "alt"    => "A presenter addressing colleagues in a bright meeting room",
    ],
    [
        "code"   => "SIGNAL_03",
        "label"  => "Promise",
        "title"  => "Our Promise",
        "body"   => "A trusted partner who blends creativity and technology to deliver real, measurable results.",
        "image"  => "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80&auto=format&fit=crop",
        "alt"    => "Two colleagues shaking hands in an office",
    ],
];

$values = [
    ["glyph" => "01", "title" => "Precision over guesswork",  "body" => "Every release is measured against defined, repeatable criteria — never a hunch."],
    ["glyph" => "02", "title" => "Coverage, not theatre",       "body" => "We chase real risk, not vanity metrics or a green dashboard for its own sake."],
    ["glyph" => "03", "title" => "Partnership, not a handover", "body" => "We embed with your team's cadence instead of testing at arm's length."],
    ["glyph" => "04", "title" => "Evidence over opinion",       "body" => "Findings are traceable, reproducible, and defensible under scrutiny."],
];

$assertions = [
    ["name" => "vision.test",  "desc" => "innovation × trust"],
    ["name" => "mission.test", "desc" => "tailored digital delivery"],
    ["name" => "promise.test", "desc" => "results at scale"],
];

$founder = [
    "name"  => "Rashid U",
    "role"  => "Founder, Digibeat Online Solutions",
    "photo" => "assets/images/Rashid.png",
    "alt"   => "Rashid U, founder of Digibeat, in a suit looking to the side",
    "quote" => "Rashid believes in transparency, innovation, and results — a philosophy that defines every project Digibeat delivers.",
];

$founder_timeline = [
    ["year" => "2015",  "title" => "Started as a PHP trainee", "body" => "Grew through roles in web development, software engineering, and digital marketing across multiple companies and industries."],
    ["year" => "2022",  "title" => "Founded Digibeat Online Solutions", "body" => "Built on a mission to make digital transformation simple, accessible, and impactful for businesses of all sizes."],
    ["year" => "Today", "title" => "Leading with transparency and results", "body" => "Guides a team building custom websites, applications, and marketing strategies that drive measurable growth."],
];

$founder_social = [
    ["name" => "Facebook",  "url" => "#", "path" => "M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12"],
    ["name" => "Instagram", "url" => "#", "path" => "M12 2.2c2.7 0 3 0 4 .1 1 0 1.7.2 2.1.4.5.2.9.5 1.3.9.4.4.7.8.9 1.3.2.4.3 1.1.4 2.1.1 1 .1 1.3.1 4s0 3-.1 4c0 1-.2 1.7-.4 2.1-.2.5-.5.9-.9 1.3-.4.4-.8.7-1.3.9-.4.2-1.1.3-2.1.4-1 .1-1.3.1-4 .1s-3 0-4-.1c-1 0-1.7-.2-2.1-.4-.5-.2-.9-.5-1.3-.9-.4-.4-.7-.8-.9-1.3-.2-.4-.3-1.1-.4-2.1-.1-1-.1-1.3-.1-4s0-3 .1-4c0-1 .2-1.7.4-2.1.2-.5.5-.9.9-1.3.4-.4.8-.7 1.3-.9.4-.2 1.1-.3 2.1-.4 1-.1 1.3-.1 4-.1M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10m0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4M17.4 5.6a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4"],
    ["name" => "LinkedIn",  "url" => "#", "path" => "M6.9 8.4H3.6V20h3.3zM5.3 3.4a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8M20.4 20h-3.3v-6c0-1.4 0-3.3-2-3.3s-2.3 1.6-2.3 3.2V20H9.5V8.4h3.2v1.6h.1c.4-.8 1.5-1.7 3.2-1.7 3.4 0 4.4 2.2 4.4 5.2z"],
    ["name" => "RSS",       "url" => "#", "path" => "M4 4v3.5C11.4 7.5 17 13.1 17 20.5h3.5C20.5 11.2 12.8 4 4 4M4 11v3.5A5.5 5.5 0 0 1 9.5 20H13c0-5-4-9-9-9M6 16a2 2 0 1 0 0 4 2 2 0 0 0 0-4"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  /*
   * Hellix is a commercial font (not hosted on Google Fonts), so it's
   * loaded via @font-face. Drop your licensed font files into an
   * "assets/fonts/" folder next to this page (or update the src paths
   * below) — filenames/weights are just examples, adjust to match what
   * you were given. Until those files are in place, the browser will
   * fall back to the sans-serif stack for body copy.
   */
  @font-face {
    font-family: 'Hellix';
    src: url('assets/fonts/Hellix-Regular.woff2') format('woff2'),
         url('assets/fonts/Hellix-Regular.woff') format('woff');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('assets/fonts/Hellix-Medium.woff2') format('woff2'),
         url('assets/fonts/Hellix-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('assets/fonts/Hellix-SemiBold.woff2') format('woff2'),
         url('assets/fonts/Hellix-SemiBold.woff') format('woff');
    font-weight: 600;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'Hellix';
    src: url('assets/fonts/Hellix-Bold.woff2') format('woff2'),
         url('assets/fonts/Hellix-Bold.woff') format('woff');
    font-weight: 700;
    font-style: normal;
    font-display: swap;
  }

  :root{
    --ink:#0b0b0e;
    --ink-soft:#4a4a52;
    --paper:#ffffff;
    --paper-soft:#ffffff;
    --line:#e6e6ec;
    --blue:#5546e8;
    --blue-deep:#3d32b0;
    --pass:#00b57a;
    --pass-soft:#e5f8f1;
    --radius:14px;
    --display: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --body: 'Hellix', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --mono: 'IBM Plex Mono', monospace;
  }
  html, body {
    background: #ffffff !important;
    overflow-x: hidden;
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    background:var(--paper);
    color:var(--ink);
    font-family:var(--body);
    line-height:1.5;
    -webkit-font-smoothing:antialiased;
  }
  a{color:inherit;}
  img{display:block;max-width:100%;}
  .wrap{max-width:1180px;margin:0 auto;padding-left:32px;padding-right:32px;}

  :focus-visible{outline:2px solid var(--blue);outline-offset:3px;}

  /* Headings across the page use Inter */
  h1, h2, h3, h4, h5, h6 {
    font-family: var(--display);
    color: #0b0b0e !important;
  }

  /* ---------- HERO ---------- */
  .hero{padding-top:96px; padding-bottom:64px;}
  .eyebrow{
    font-family:var(--mono);font-size:12.5px;font-weight:500;
    letter-spacing:.14em;text-transform:uppercase;color:var(--blue);
    display:flex;align-items:center;gap:10px;margin-bottom:22px;
  }
  .eyebrow::before{content:"";width:22px;height:2px;background:var(--blue);display:inline-block;flex-shrink:0;}
  .hero-grid{display:grid;grid-template-columns:1.15fr .85fr;gap:56px;align-items:end;}
  @media (max-width:960px){ .hero-grid{grid-template-columns:1fr;} }
  h1{
    font-weight:600;
    font-size:clamp(34px,4.6vw,58px);line-height:1.06;letter-spacing:-.01em;
    margin:0 0 20px;
  }
  .hero-sub{font-size:17px;color:var(--ink-soft);max-width:46ch;margin:0;}

  /* ---------- ASSERTION CONSOLE (signature element) ---------- */
  .console{
    background:var(--ink);color:#e8e8ee;border-radius:var(--radius);
    padding:22px 22px 18px;font-family:var(--mono);font-size:13.5px;
    box-shadow:0 24px 60px -30px rgba(11,11,14,.55);
    max-width:100%;overflow:hidden;
  }
  .console-bar{display:flex;align-items:center;gap:8px;margin-bottom:16px;opacity:.6;}
  .console-dot{width:9px;height:9px;border-radius:50%;background:#4a4a52;flex-shrink:0;}
  .console-title{margin-left:8px;font-size:11.5px;letter-spacing:.06em;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
  .console-line{
    display:flex;justify-content:space-between;gap:14px;
    padding:9px 0;border-top:1px solid rgba(255,255,255,.08);
    opacity:0;transform:translateY(4px);
    animation:consoleIn .45s ease forwards;
    flex-wrap:wrap;
  }
  .console-line:first-of-type{border-top:none;}
  .console-line .name{color:#c9c9d4;white-space:nowrap;}
  .console-line .desc{color:#77778a;flex:1;text-align:left;padding-left:12px;min-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
  .status{
    color:var(--pass);font-weight:500;display:inline-flex;align-items:center;gap:6px;
  }
  .status::before{content:"✓";}
  .console-summary{
    margin-top:14px;padding-top:14px;border-top:1px solid rgba(255,255,255,.08);
    display:flex;justify-content:space-between;font-size:12px;color:#77778a;
    opacity:0;animation:consoleIn .5s ease forwards;animation-delay:1.2s;
  }
  @keyframes consoleIn{to{opacity:1;transform:translateY(0);}}
  @media (prefers-reduced-motion:reduce){
    .console-line, .console-summary{animation:none;opacity:1;transform:none;}
  }

  /* ---------- PILLAR CARDS ---------- */
  .pillars{padding-top:24px; padding-bottom:80px;}
  .pillar-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
  @media (max-width:900px){ .pillar-grid{grid-template-columns:1fr 1fr;} }
  @media (max-width:640px){ .pillar-grid{grid-template-columns:1fr;} }
  .pillar{
    border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;
    background:var(--paper-soft);
    transition:transform .25s ease, box-shadow .25s ease;
  }
  .pillar:hover{transform:translateY(-4px);box-shadow:0 20px 40px -28px rgba(11,11,14,.35);}
  .pillar-media{aspect-ratio:4/3;overflow:hidden;}
  .pillar-media img{width:100%;height:100%;object-fit:cover;}
  .pillar-body{padding:22px 22px 26px;}
  .pillar-tag{
    display:flex;align-items:center;justify-content:space-between;
    font-family:var(--mono);font-size:11.5px;letter-spacing:.06em;
    color:var(--ink-soft);margin-bottom:14px;
  }
  .pillar-body h3{font-size:21px;margin:0 0 8px;font-weight:600;}
  .pillar-body p{margin:0;color:var(--ink-soft);font-size:15px;}

  /* ---------- VALUES ---------- */
  .values{padding-top:80px; padding-bottom:80px;}
  .values-head{max-width:56ch;margin-bottom:40px;}
  .values-head .eyebrow{margin-bottom:14px;}
  .values-head h2{font-size:30px;font-weight:600;margin:0 0 10px;}
  .values-head p{color:var(--ink-soft);margin:0;font-size:15.5px;}
  .values-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--line);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;}
  @media (max-width:900px){ .values-grid{grid-template-columns:repeat(2,1fr);} }
  @media (max-width:480px){
    .values-grid{grid-template-columns:1fr; gap:16px; background:transparent; border:none; overflow:visible;}
    .value-card{border:1px solid var(--line); border-radius:var(--radius);}
  }
  .value-card{background:var(--paper);padding:28px 24px;}
  .value-glyph{font-family:var(--mono);color:var(--blue);font-size:13px;margin-bottom:14px;}
  .value-card h3{font-size:17px;margin:0 0 8px;font-weight:600;}
  .value-card p{margin:0;color:var(--ink-soft);font-size:14px;}

  /* ---------- FOUNDER ---------- */
  .founder{padding-top:40px; padding-bottom:100px;}
  .founder-grid{display:grid;grid-template-columns:.82fr 1.18fr;gap:64px;align-items:start;}
  @media (max-width:900px){ .founder-grid{grid-template-columns:1fr;gap:36px;} }

  .founder-media{position:relative;border-radius:var(--radius);overflow:hidden;aspect-ratio:3/4;background:var(--paper-soft);}
  @media (max-width:900px){ .founder-media{max-width:360px;margin:0 auto;} }
  .founder-media > img{width:100%;height:100%;object-fit:cover;}
  .founder-badge{
    position:absolute;left:0;bottom:0;background:var(--paper);
    border-radius:0 14px 0 0;padding:14px 20px 12px 16px;
    display:flex;align-items:center;gap:9px;
    box-shadow:0 -8px 24px rgba(11,11,14,.08);
  }
  .founder-badge-logo{height:24px;width:auto;max-width:120px;display:block;}

  .founder-social{display:flex;gap:10px;margin-top:22px;flex-wrap:wrap;}
  @media (max-width:900px){ .founder-social{justify-content:center;} }
  .founder-social a{
    width:36px;height:36px;border-radius:50%;border:1px solid var(--line);
    display:flex;align-items:center;justify-content:center;color:var(--blue);
    transition:background .15s ease, color .15s ease, border-color .15s ease;
    flex-shrink:0;
  }
  .founder-social a:hover{background:var(--blue);border-color:var(--blue);color:#fff;}
  .founder-social svg{width:16px;height:16px;fill:currentColor;}

  .founder-name{font-size:29px;font-weight:700;margin:0 0 4px;}
  .founder-role{font-size:14.5px;color:var(--ink-soft);margin:0 0 26px;}

  .founder-quote{
    font-family:var(--display);font-size:21px;line-height:1.4;font-weight:500;
    color:var(--ink);border-left:3px solid var(--blue);padding-left:22px;
    margin:0 0 36px;max-width:52ch;
  }

  .founder-timeline{border-top:1px solid var(--line);}
  .founder-item{
    display:grid;grid-template-columns:74px 1fr;gap:20px;
    padding:22px 0;border-bottom:1px solid var(--line);
  }
  @media (max-width:480px){
    .founder-item{grid-template-columns:1fr;gap:6px;}
  }
  .founder-year{font-family:var(--mono);font-size:13px;font-weight:500;color:var(--blue);}
  .founder-item h4{margin:0 0 6px;font-size:16.5px;font-weight:600;}
  .founder-item p{margin:0;color:var(--ink-soft);font-size:14.5px;max-width:60ch;}


  /* ---------- CTA ---------- */
  .cta{background:var(--ink);color:#fff;border-radius:20px;margin:0 32px 90px;padding:56px 48px;position:relative;overflow:hidden;}
  .cta::after{
    content:"";position:absolute;right:-60px;top:-60px;width:220px;height:220px;
    border-radius:50%;background:radial-gradient(circle,var(--blue) 0%,transparent 70%);opacity:.5;
  }
  .cta-inner{position:relative;display:flex;align-items:center;justify-content:space-between;gap:28px;flex-wrap:wrap;max-width:1116px;margin:0 auto;}
  .cta h2{font-size:30px;margin:0;max-width:16ch;font-weight:600;color:#ffffff !important;}
  .cta-btn{
    background:var(--blue);color:#fff;text-decoration:none;font-weight:600;
    padding:14px 26px;border-radius:999px;font-size:15px;white-space:nowrap;
    transition:background .15s;
  }
  .cta-btn:hover{background:var(--blue-deep);}

  /* ---------- RESPONSIVE: TABLET ---------- */
  @media (max-width:960px){
    .wrap{padding-left:24px; padding-right:24px;}
    .hero{padding-top:72px; padding-bottom:48px;}
    .cta{margin:0 24px 72px;padding:44px 36px;}
  }

  /* ---------- RESPONSIVE: MOBILE ---------- */
  @media (max-width:600px){
    .wrap{padding-left:20px; padding-right:20px;}
    .hero{padding-top:56px; padding-bottom:36px;}
    .hero-grid{gap:36px;}
    .hero-sub{font-size:15.5px;max-width:none;}
    .console{padding:18px 16px 16px;font-size:12.5px;}

    .pillars{padding-top:16px; padding-bottom:56px;}
    .pillar-grid{gap:20px;}
    .pillar-body{padding:18px 18px 22px;}
    .pillar-body h3{font-size:19px;}

    .values{padding-top:56px; padding-bottom:56px;}
    .values-head{margin-bottom:28px;}
    .values-head h2{font-size:25px;}
    .value-card{padding:22px 18px;}

    .founder{padding-top:24px; padding-bottom:72px;}
    .founder-name{font-size:25px;}
    .founder-quote{font-size:18px;padding-left:18px;margin-bottom:28px;}

    .cta{margin:0 16px 56px;padding:36px 24px;border-radius:16px;}
    .cta-inner{gap:20px;}
    .cta h2{font-size:24px;max-width:none;}
    .cta-btn{padding:12px 22px;font-size:14px;}
  }

  @media (max-width:380px){
    .founder-badge{padding:10px 14px 9px 12px;}
    .founder-badge-logo{height:20px;}
  }
</style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>
<body style="background:#ffffff !important;">
<?php include 'header.php'; ?>
<main style="background:#ffffff;">
  <section class="hero wrap">
    <div class="hero-grid">
      <div>
        <p class="eyebrow">What Digibeat stands for</p>
        <h1>Guiding principles behind our purpose, goals, and commitment to making a difference.</h1>
        <p class="hero-sub">Three statements. Zero ambiguity. Everything we build our digital practice on, written down and held to the same standard we hold your brand to.</p>
      </div>

      <div class="console" role="img" aria-label="Terminal showing vision, mission and promise tests all passing">
        <div class="console-bar">
          <span class="console-dot"></span><span class="console-dot"></span><span class="console-dot"></span>
          <span class="console-title">digibeat — about.suite</span>
        </div>
        <?php foreach ($assertions as $i => $a): ?>
        <div class="console-line" style="animation-delay:<?php echo 0.25 + $i * 0.28; ?>s">
          <span class="name">$ run <?php echo htmlspecialchars($a['name']); ?></span>
          <span class="desc"><?php echo htmlspecialchars($a['desc']); ?></span>
          <span class="status" aria-hidden="true"></span>
        </div>
        <?php endforeach; ?>
        <div class="console-summary">
          <span>3 passed, 0 failed</span>
          <span></span>
        </div>
      </div>
    </div>
  </section>

  <section class="pillars wrap">
    <div class="pillar-grid">
      <?php foreach ($pillars as $p): ?>
      <article class="pillar">
        <div class="pillar-media">
          <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['alt']); ?>" loading="lazy">
        </div>
        <div class="pillar-body">
          <div class="pillar-tag">
            <span><?php echo htmlspecialchars($p['code']); ?> · <?php echo strtoupper(htmlspecialchars($p['label'])); ?></span>
          </div>
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p><?php echo htmlspecialchars($p['body']); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="values wrap">
    <div class="values-head">
      <p class="eyebrow">How we work</p>
      <h2>Four things we won't compromise on</h2>
      <p>Vision and mission set the direction. These are the rules that keep us honest along the way.</p>
    </div>
    <div class="values-grid">
      <?php foreach ($values as $v): ?>
      <div class="value-card">
        <div class="value-glyph"><?php echo htmlspecialchars($v['glyph']); ?></div>
        <h3><?php echo htmlspecialchars($v['title']); ?></h3>
        <p><?php echo htmlspecialchars($v['body']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="founder wrap">
    <div class="founder-grid">
      <div>
        <div class="founder-media">
          <img src="<?php echo htmlspecialchars($founder['photo']); ?>" alt="<?php echo htmlspecialchars($founder['alt']); ?>" loading="lazy">
          <div class="founder-badge">
            <img src="assets/logoff.png" alt="Digibeat — Online Solutions" class="founder-badge-logo">
          </div>
        </div>
        <div class="founder-social">
          <?php foreach ($founder_social as $s): ?>
          <a href="<?php echo htmlspecialchars($s['url']); ?>" aria-label="<?php echo htmlspecialchars($s['name']); ?>">
            <svg viewBox="0 0 24 24"><path d="<?php echo htmlspecialchars($s['path']); ?>"/></svg>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <div>
        <p class="eyebrow">The beat behind Digibeat</p>
        <h2 class="founder-name"><?php echo htmlspecialchars($founder['name']); ?></h2>
        <p class="founder-role"><?php echo htmlspecialchars($founder['role']); ?></p>

        <blockquote class="founder-quote">&ldquo;<?php echo htmlspecialchars($founder['quote']); ?>&rdquo;</blockquote>

        <div class="founder-timeline">
          <?php foreach ($founder_timeline as $t): ?>
          <div class="founder-item">
            <div class="founder-year"><?php echo htmlspecialchars($t['year']); ?></div>
            <div>
              <h4><?php echo htmlspecialchars($t['title']); ?></h4>
              <p><?php echo htmlspecialchars($t['body']); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="cta-inner">
      <h2>Let's put your brand through the same suite.</h2>
      <a href="#" class="cta-btn">Start a conversation</a>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
</body>
</html>