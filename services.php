<?php
/**
 * services.php
 * Full services overview page.
 *
 * Hero fills the viewport on load; each capability section reveals
 * as the visitor scrolls, driven by the .reveal / .is-in classes below.
 *
 * IMAGES: every <img> below points at a placeholder path under
 * assets/services/ — drop your own photography in at the same
 * filenames (or edit the src). Each category heading now sits
 * directly over its photo banner, so a landscape shot (roughly
 * 16:7) with clear space in the lower third works best — see the
 * comment above each <img> for the specific shot suggested.
 */
$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services — Digibeat</title>

<style>
  /* ============================================================
     SERVICES PAGE — tokens
     Paper white throughout. Single accent: rgb(61,90,254) — used
     for text accents, hover states, badges and the CTA. Signature
     device: category headings sit directly over a photo banner
     with a dark scrim and a blue rule that draws in under the
     heading on scroll.
     ============================================================ */
  :root {
    --sv-ink:      #14141f;
    --sv-ink-soft: #5a5b6c;
    --sv-paper:    #ffffff;
    --sv-panel:    #f4f5fb;
    --sv-line:     #e6e8f4;
    --sv-accent:   rgb(61, 90, 254);
    --sv-accent-soft: rgba(61, 90, 254, 0.09);
    --sv-watermark: rgba(20,20,31,0.035);
  }

  .sv-page { background: var(--sv-paper); overflow-x: clip; }
  .sv-page * { box-sizing: border-box; }
  .sv-page a { color: inherit; }

  .sv-eyebrow {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--sv-accent);
    display: inline-flex;
    align-items: center;
    gap: 10px;
  }
  .sv-eyebrow::before {
    content: '';
    width: 22px;
    height: 1px;
    background: var(--sv-accent);
    display: inline-block;
  }

  /* ---------------- HERO (centered, image below) ---------------- */
  .sv-hero {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 150px 64px 72px;
    position: relative;
  }
  .sv-hero__intro {
    max-width: 760px;
    margin: 0 auto 48px;
    text-align: center;
  }
  .sv-hero__intro h1 {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: clamp(38px, 5vw, 68px);
    line-height: 1.06;
    letter-spacing: -0.02em;
    color: var(--sv-ink);
    margin: 22px 0 24px;
  }
  .sv-hero__intro h1 span {
    color: var(--sv-accent);
  }
  .sv-hero__intro p {
    font-size: 18px;
    line-height: 1.65;
    color: var(--sv-ink-soft);
    margin: 0 auto 34px;
    max-width: 520px;
  }
  .sv-hero__actions {
    display: flex;
    gap: 14px;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
  }
  .sv-cta {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    font-size: 15px;
    color: #fff;
    background: var(--sv-ink);
    padding: 15px 26px;
    border-radius: 999px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: transform .25s ease, background .25s ease;
  }
  .sv-cta:hover { background: var(--sv-accent); transform: translateY(-2px); }
  .sv-hero__count {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--sv-ink-soft);
  }
  .sv-hero__count strong { color: var(--sv-ink); font-weight: 700; }

  .sv-hero__banner {
    position: relative;
    max-width: 1180px;
    width: 100%;
    margin: 0 auto;
    aspect-ratio: 16 / 7;
    border-radius: 28px;
    overflow: hidden;
    background: var(--sv-panel);
  }
  .sv-hero__banner img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
  }
  .sv-hero__banner-ring {
    position: absolute;
    inset: 0;
    border-radius: 28px;
    box-shadow: inset 0 0 0 2px rgba(61,90,254,0.25);
    pointer-events: none;
  }

  .sv-scrollcue {
    display: flex;
    align-items: center;
    gap: 12px;
    justify-content: center;
    margin-top: 28px;
    font-family: 'Inter', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--sv-ink-soft);
  }
  .sv-scrollcue span {
    width: 34px; height: 1px;
    background: var(--sv-ink-soft);
    display: block;
    position: relative;
    overflow: hidden;
  }
  .sv-scrollcue span::after {
    content: '';
    position: absolute;
    left: -100%; top: 0; bottom: 0; width: 100%;
    background: var(--sv-accent);
    animation: sv-cue 1.8s ease-in-out infinite;
  }
  @keyframes sv-cue { 50% { left: 100%; } 100% { left: 100%; } }

  /* ---------------- CATEGORY SECTIONS ---------------- */
  .sv-category {
    position: relative;
    padding: 96px 64px 120px;
    border-top: 1px solid var(--sv-line);
    overflow: hidden;
  }
  .sv-category--tint { background: var(--sv-panel); }

  .sv-category__watermark {
    position: absolute;
    top: 24px; left: 50%;
    transform: translateX(-50%);
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: clamp(80px, 13vw, 190px);
    color: var(--sv-watermark);
    white-space: nowrap;
    letter-spacing: -0.03em;
    pointer-events: none;
    z-index: 0;
    user-select: none;
  }

  /* the signature: heading lives on top of the photo */
  .sv-category__banner {
    position: relative;
    z-index: 1;
    border-radius: 24px;
    overflow: hidden;
    min-height: 400px;
    display: flex;
    align-items: flex-end;
    margin-bottom: 56px;
  }
  .sv-category__banner img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
  }
  .sv-category__scrim {
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(14,14,24,0) 30%, rgba(10,10,18,0.9) 100%);
  }
  .sv-category__banner-content {
    position: relative;
    z-index: 2;
    padding: 40px 48px;
    max-width: 640px;
  }
  .sv-mono {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px; height: 44px;
    border-radius: 12px;
    background: var(--sv-accent);
    color: #fff;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 18px;
  }
  .sv-category__banner-content h2 {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: clamp(28px, 3.2vw, 40px);
    color: #fff;
    letter-spacing: -0.01em;
    margin: 0 0 14px;
  }
  .sv-category__banner-content h2::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    border-radius: 2px;
    background: var(--sv-accent);
    margin-top: 16px;
    transition: width .9s cubic-bezier(.2,.7,.2,1) .1s;
  }
  .reveal.is-in .sv-category__banner-content h2::after { width: 64px; }
  .sv-category__banner-content p {
    font-size: 16px;
    line-height: 1.6;
    color: rgba(255,255,255,0.82);
    max-width: 420px;
    margin: 0;
  }

  .sv-list { position: relative; z-index: 1; }

  .sv-service {
    display: grid;
    grid-template-columns: 4px 1fr auto;
    align-items: start;
    gap: 24px;
    padding: 26px 4px;
    border-bottom: 1px solid var(--sv-line);
    text-decoration: none;
    position: relative;
  }
  .sv-service:first-child { padding-top: 0; }
  .sv-service:last-child { border-bottom: none; }

  .sv-service__rule {
    align-self: stretch;
    background: transparent;
    border-radius: 2px;
    transition: background .25s ease;
  }
  .sv-service:hover .sv-service__rule { background: var(--sv-accent); }

  .sv-service__body h3 {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    font-size: 20px;
    color: var(--sv-ink);
    margin: 0 0 8px;
    transition: color .2s ease;
  }
  .sv-service:hover .sv-service__body h3 { color: var(--sv-accent); }
  .sv-service__body p {
    font-size: 15.5px;
    line-height: 1.6;
    color: var(--sv-ink-soft);
    margin: 0;
    max-width: 460px;
  }

  .sv-service__arrow {
    color: var(--sv-ink);
    transform: translateX(0);
    transition: transform .25s ease, color .25s ease;
    margin-top: 6px;
  }
  .sv-service:hover .sv-service__arrow { transform: translateX(6px); color: var(--sv-accent); }

  /* ---------------- SCROLL REVEAL ---------------- */
  .reveal {
    opacity: 0;
    transform: translateY(34px);
    transition: opacity .8s cubic-bezier(.2,.7,.2,1), transform .8s cubic-bezier(.2,.7,.2,1);
  }
  .reveal.is-in { opacity: 1; transform: translateY(0); }
  .reveal-stagger.is-in .sv-service {
    animation: sv-rowfade .6s ease forwards;
  }
  @keyframes sv-rowfade {
    from { opacity: 0; transform: translateY(14px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ---------------- CLOSING CTA ---------------- */
  .sv-close {
    padding: 140px 64px;
    text-align: center;
    border-top: 1px solid var(--sv-line);
  }
  .sv-close h2 {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: clamp(32px, 4vw, 54px);
    color: var(--sv-ink);
    margin: 22px auto 34px;
    max-width: 720px;
    letter-spacing: -0.02em;
  }
  .sv-close .sv-cta { margin: 0 auto; }

  @media (max-width: 960px) {
    .sv-hero { padding: 120px 24px 48px; }
    .sv-hero__banner { aspect-ratio: 4 / 5; border-radius: 18px; }
    .sv-category { padding: 72px 24px 88px; }
    .sv-category__watermark { top: 16px; }
    .sv-category__banner { min-height: 300px; border-radius: 18px; margin-bottom: 36px; }
    .sv-category__banner-content { padding: 28px 24px; }
    .sv-service { grid-template-columns: 3px 1fr; }
    .sv-service__arrow { display: none; }
    .sv-close { padding: 80px 24px; }
  }
</style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>
<body class="sv-page">

<?php include 'header.php'; ?>

<main>

  <!-- ============ HERO ============ -->
  <section class="sv-hero">
    <div class="sv-hero__intro">
      <span class="sv-eyebrow">What we do</span>
      <h1>Fifteen capabilities.<br>One team, <span>one direction</span>.</h1>
      <p>Digibeat brings brand strategy, product design, engineering and marketing under one roof, so nothing gets lost in the handoff between departments.</p>
      <div class="sv-hero__actions">
        <a href="contact" class="sv-cta">
          Start a project
          <svg width="16" height="16" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <span class="sv-hero__count">Scroll for all <strong>15 services</strong></span>
      </div>
    </div>

   

    <div class="sv-scrollcue"><span></span>Scroll</div>
  </section>

  <!-- ============ BRANDING ============ -->
  <section class="sv-category">
    <span class="sv-category__watermark">Branding</span>

    <div class="sv-category__banner reveal">
      <!-- BRANDING PHOTO: logo sketches / brand guideline pages / packaging mockups, landscape crop -->
      <img src="assets/images/brr.png" alt="Branding and identity design work">
      <div class="sv-category__scrim"></div>
      <div class="sv-category__banner-content">
        <span class="sv-mono">Br</span>
        <h2>Branding</h2>
        <p>The thinking and the artefacts that make a company recognisable, from the first conversation to the packaging on a shelf.</p>
      </div>
    </div>

    <div class="sv-list reveal reveal-stagger">
      <a href="/digibeat/services/branding.php#brand-consulting" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Brand Consulting</h3>
          <p>Positioning, naming and voice work for brands that need a sharper point of view.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/digibeat/services/branding.php#logo-design" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Logo Design</h3>
          <p>Marks built to hold up from a favicon to a billboard.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/digibeat/services/branding.php#product-design" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Industrial / Product Design</h3>
          <p>Physical products designed around how they'll actually be made and used.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/digibeat/services/branding.php#graphic-design" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Graphic Design</h3>
          <p>Print, packaging and campaign assets that stay on-brand at any size.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>

  <!-- ============ IT SOLUTIONS ============ -->
  <section class="sv-category sv-category--tint">
    <span class="sv-category__watermark">Infrastructure</span>

    <div class="sv-category__banner reveal">
      <!-- IT PHOTO: server racks / network cabling / clean data-centre shot, landscape crop -->
      <img src="assets/services/it-solutions.jpg" alt="Servers and IT infrastructure">
      <div class="sv-category__scrim"></div>
      <div class="sv-category__banner-content">
        <span class="sv-mono">IT</span>
        <h2>IT Solutions</h2>
        <p>The infrastructure that keeps everything else online, backed up and reachable.</p>
      </div>
    </div>

    <div class="sv-list reveal reveal-stagger">
      <a href="/digibeat/services/it-solutions.php#web-hosting" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Web Hosting</h3>
          <p>Managed hosting with monitoring, backups and uptime you don't have to think about.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/digibeat/services/it-solutions.php#business-email" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Business Email Services</h3>
          <p>Professional email on your own domain, set up and maintained for your team.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>

  <!-- ============ WEB DEVELOPMENT ============ -->
  <section class="sv-category">
    <span class="sv-category__watermark">Development</span>

    <div class="sv-category__banner reveal">
      <!-- DEV PHOTO: code editor on screen / desk setup with monitor showing a UI, landscape crop -->
      <img src="assets/services/web-development.jpg" alt="Web development workspace">
      <div class="sv-category__scrim"></div>
      <div class="sv-category__banner-content">
        <span class="sv-mono">Wd</span>
        <h2>Web Development</h2>
        <p>Software and sites built on a foundation that's fast now and still maintainable in two years.</p>
      </div>
    </div>

    <div class="sv-list reveal reveal-stagger">
      <a href="custom-web-development" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Custom Web Application</h3>
          <p>Software built around your workflow, not the other way round.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/devops.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Web Design Service</h3>
          <p>Interfaces designed for the people who'll actually use them.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/data-analytics.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>E-commerce Solutions</h3>
          <p>Storefronts built to convert, from first click through to fulfillment.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/web-development.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Website Development</h3>
          <p>Fast, maintainable sites built on a foundation that scales with you.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>

  <!-- ============ DIGITAL MARKETING ============ -->
  <section class="sv-category sv-category--tint">
    <span class="sv-category__watermark">Marketing</span>

    <div class="sv-category__banner reveal">
      <!-- MARKETING PHOTO: analytics dashboard on screen / content calendar / phone with social feed, landscape crop -->
      <img src="assets/services/digital-marketing.jpg" alt="Digital marketing analytics dashboard">
      <div class="sv-category__scrim"></div>
      <div class="sv-category__banner-content">
        <span class="sv-mono">Dm</span>
        <h2>Digital Marketing</h2>
        <p>The work that gets the right people to notice, and keeps them once they have.</p>
      </div>
    </div>

    <div class="sv-list reveal reveal-stagger">
      <a href="/services/seo.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Search Engine Optimisation</h3>
          <p>Technical and content SEO that compounds over time.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/social-media.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Social Media Marketing</h3>
          <p>Channel strategy and content that sounds like your brand, not a template.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/content-marketing.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Content Marketing</h3>
          <p>Editorial that earns attention instead of renting it.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/marketing-automation.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Online Reputation Management</h3>
          <p>Monitoring and response, so your brand's story stays yours to tell.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="/services/analytics.php" class="sv-service">
        <span class="sv-service__rule"></span>
        <span class="sv-service__body">
          <h3>Analytics</h3>
          <p>Dashboards and reporting that tell you what to do next, not just what happened.</p>
        </span>
        <svg class="sv-service__arrow" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="sv-close reveal">
    <span class="sv-eyebrow">Ready when you are</span>
    <h2>Tell us what you're building. We'll tell you which of these it needs.</h2>
    <a href="contact" class="sv-cta">
      Start a project
      <svg width="16" height="16" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
  </section>

</main>

<script>
(function () {
  var targets = document.querySelectorAll('.reveal');
  if (!('IntersectionObserver' in window)) {
    targets.forEach(function (t) { t.classList.add('is-in'); });
    return;
  }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
  targets.forEach(function (t) { io.observe(t); });
})();
</script>
<?php include '../footer.php'; ?>
</body>
</html>