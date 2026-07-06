<?php
// --- Data ---
$navLinks = [
    ['label' => 'Services', 'href' => '#', 'active' => true],
    ['label' => 'Solutions', 'href' => '#', 'active' => false],
    ['label' => 'Industries', 'href' => '#', 'active' => false],
    ['label' => 'Works', 'href' => '#', 'active' => false],
    ['label' => 'About', 'href' => 'about', 'active' => false],
    ['label' => 'Careers', 'href' => '#', 'active' => false],
    ['label' => 'Contact', 'href' => 'contact', 'active' => false],
];

// Services — ported from STRATA (orbit navigator + capability cards).
// Trimmed to Digibeat's 4 core service lines.
$services = [
    [
        'key'   => 'web-dev',
        'title' => 'Web Development',
        'desc'  => 'Performance-first builds on modern frameworks, engineered to scale from launch day to a million sessions.',
        'icon'  => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9s1.3-6.5 3.8-9z"/>',
    ],
    [
        'key'   => 'it-solutions',
        'title' => 'IT Solutions',
        'desc'  => 'Infrastructure, systems, and support engineered to keep operations running without friction, day or night.',
        'icon'  => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 00.34 1.87l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.7 1.7 0 00-1.87-.34 1.7 1.7 0 00-1.04 1.56V21a2 2 0 11-4 0v-.09A1.7 1.7 0 008.4 19.4a1.7 1.7 0 00-1.87.34l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.7 1.7 0 004.6 15a1.7 1.7 0 00-1.56-1.04H3a2 2 0 110-4h.09A1.7 1.7 0 004.6 8.6a1.7 1.7 0 00-.34-1.87l-.06-.06a2 2 0 112.83-2.83l.06.06A1.7 1.7 0 008.6 4.6a1.7 1.7 0 001.04-1.56V3a2 2 0 114 0v.09A1.7 1.7 0 0015.4 4.6a1.7 1.7 0 001.87-.34l.06-.06a2 2 0 112.83 2.83l-.06.06A1.7 1.7 0 0019.4 8.6a1.7 1.7 0 001.56 1.04H21a2 2 0 110 4h-.09A1.7 1.7 0 0019.4 15z"/>',
    ],
    [
        'key'   => 'digital-marketing',
        'title' => 'Digital Marketing',
        'desc'  => 'Full-funnel campaigns backed by data, run by people who read the numbers past the dashboard.',
        'icon'  => '<path d="M4 19V9M10 19V4M16 19v-7M22 19H2"/>',
    ],
    [
        'key'   => 'branding',
        'title' => 'Branding',
        'desc'  => 'Identity systems — mark, type, voice — built to hold up across a hundred touchpoints.',
        'icon'  => '<path d="M12 3l3 6 6 1-4.5 4.5L17.5 21 12 17.8 6.5 21l1-6.5L3 10l6-1 3-6z"/>',
    ],
];

// Capabilities cards content — "Why Choose Us" copy.
// Kept separate from $services so the orbit navigator above is unaffected.
$capabilities = [
    [
        'title' => 'Modern And Responsive Websites',
        'desc'  => 'We craft visually appealing, mobile-friendly websites that adapt seamlessly to any device, ensuring a smooth and engaging user experience.',
        'icon'  => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9s1.3-6.5 3.8-9z"/>',
    ],
    [
        'title' => 'SEO And Performance-Focused Strategies',
        'desc'  => 'Our websites are built with speed, optimization, and visibility in mind—helping your brand rank higher and attract the right audience.',
        'icon'  => '<circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>',
    ],
    [
        'title' => 'Transparent Process And Timely Delivery',
        'desc'  => 'From concept to launch, we keep you informed every step of the way, delivering quality work within deadlines without hidden surprises.',
        'icon'  => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>',
    ],
    [
        'title' => 'Ongoing Support And Maintenance',
        'desc'  => "We don't just build and leave — our team provides continuous updates, security checks, and technical support to keep your website running smoothly.",
        'icon'  => '<path d="M3 18v-6a9 9 0 0118 0v6"/><path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"/>',
    ],
];

$siteName    = 'Digibeat';
$pageTitle   = 'Digibeat | Next-Gen Intelligence';
$year        = date('Y');
$badgeText   = 'Next-Gen Intelligence';
$heroHeading = 'Ideas. Engineered.<br/>Growth. Delivered.';
$heroSub     = 'We architect premium digital experiences that scale. From neural-driven strategies to high-end aesthetic engineering.';
$ctaLabel    = 'Get Started';

// About Company section — data only, markup lives inline below (near
// the Capabilities section) so the whole page stays a single file.
$aboutEyebrow      = 'Who We Are';
$aboutHeadingLead  = 'About Our';
$aboutHeadingWord  = 'Company'; // rendered with the blue gradient
$aboutDescription  = "Digibeat was built by engineers and designers who got tired of hand-offs. "
                    . "We keep strategy, build, and growth under one roof, so the people who design "
                    . "your product are the same people accountable for how it performs after launch. "
                    . "No relay race between agencies — one team, one brief, start to finish.";
$aboutStats = [
    ['value' => '120+', 'label' => 'Products shipped'],
    ['value' => '9',    'label' => 'Years in operation'],
    ['value' => '34',   'label' => 'Engineers &amp; strategists'],
];
$aboutCtaLabel = 'Our Story';
$aboutCtaHref  = '#story';
$aboutImage    = 'assets/images/home-about.png';
$aboutImageAlt = 'The Digibeat team at work';

 
$testimonialsEyebrow = 'TESTIMONIALS';
$testimonialsHeadingLead   = 'What People';
$testimonialsHeadingScript = 'Say';
$testimonialsSubtitle = 'Real feedback from teams we\'ve shipped products with — on the work, the process, and what it\'s like to build together.';
 
$testimonials = [
    [
        'photo'  => 'https://i.pravatar.cc/150?img=32',
        'quote'  => 'Digibeat didn\'t just build what we asked for — they questioned the brief until it was worth building. Launch week was the calmest release we\'ve ever had.',
        'name'   => 'Amelia Cross',
        'title'  => 'VP Product, Northwind',
        'accent' => 'purple',
    ],
    [
        'photo'  => 'https://i.pravatar.cc/150?img=68',
        'quote'  => 'One team, start to finish. No hand-offs, no re-explaining the brief to a new face every two weeks. That alone was worth switching agencies for.',
        'name'   => 'Daniel Ferreira',
        'title'  => 'Founder, Loomstate',
        'accent' => 'navy',
    ],
    [
        'photo'  => 'https://i.pravatar.cc/150?img=47',
        'quote'  => 'The kind of partner who tells you when your idea is wrong before you spend the budget on it. Our conversion rate is still climbing four months post-launch.',
        'name'   => 'Priya Nandakumar',
        'title'  => 'Head of Growth, Fielding & Co.',
        'accent' => 'mint',
    ],
];
 

?>
<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<link href="assets/tailwind.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&amp;family=Space+Mono:wght@400;700&amp;family=Inter:wght@400;500&amp;family=Space+Grotesk:wght@500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&amp;display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<style>
    body {
      background-color: #ffffff;
      color: #111318;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
      font-family: 'Inter', sans-serif;
    }

    .gradient-text {
      background: linear-gradient(135deg, #0284c7 0%, #111318 50%, #a855f7 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(0, 0, 0, 0.06);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .glass-card:hover {
      background: rgba(255, 255, 255, 0.85);
      border-color: rgba(76, 154, 255, 0.3);
      transform: translateX(8px);
    }

    @media (max-width: 767px) {
      .glass-card:hover {
        transform: none;
      }
    }

    .nav-link {
      @apply text-sm font-medium text-black/60 hover:text-black transition-colors;
    }

    .nav-link.active {
      @apply text-sm font-semibold text-black;
    }

    .nav-icon {
      @apply text-black text-[1.15rem] leading-none;
    }

    .nav-action {
      @apply inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent text-black/90 transition-all hover:text-black hover:bg-black/5;
    }

    .nav-action:hover .nav-icon {
      color: #000000;
    }

    .icon-container {
      background: rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .vertical-text {
      writing-mode: vertical-rl;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      transform: rotate(180deg);
      color: #999;
      font-size: 0.75rem;
      font-weight: 600;
    }

    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .logo-chip {
      padding: 2px;
      border-radius: 12px;
      background: conic-gradient(from 180deg, #ff5f6d, #ffc371, #4cd6ff, #a855f7, #ec4899, #ff5f6d);
      box-shadow: 0 0 18px rgba(168,85,247,0.25), 0 0 30px rgba(76,214,255,0.2);
      flex-shrink: 0;
    }
    .logo-chip-inner {
      border-radius: 10px;
      background: #ffffff;
      padding: 3px 10px;
    }
    .hero-block {
      min-height: 100svh;
      margin-bottom: 60px;
      background-color: #ffffff;
    }
    #hero-fade-wrap {
      will-change: opacity, transform;
    }
    @media (min-width: 768px) {
      .hero-block {
        margin-bottom: 100px;
      }
    }

    /* ============================================================
       STRATA services block — ported from STRATA (orbit navigator +
       capability cards), scoped under .strata-services so nothing
       here leaks into the rest of the Digibeat page.
       ============================================================ */
    .strata-services{
      --st-black:#ffffff;
      --st-line:rgba(0,0,0,0.09);
      --st-line-strong:rgba(0,0,0,0.22);
      --st-gray:#4b4b4b;
      --st-gray-dim:#6b6b6b;
      --st-accent:#4d7fff;
      --st-accent-soft:rgba(77,127,255,0.10);
      --st-display:'Space Grotesk', sans-serif;
      --st-body:'Inter', sans-serif;
      --st-mono:'JetBrains Mono', monospace;
      --st-ease:cubic-bezier(.16,.84,.44,1);
      position:relative;
      padding:180px 0 120px;
      background:#ffffff;
    }
    /* Orbit ("What we do") and Capabilities are now two separate
       <section> elements — tune their own top/bottom spacing so
       there's real, deliberate space between them (the orbit-count
       label also hangs 40px below the orbit stage, so the next
       section needs enough top padding to clear it). */
    .strata-services#services{
      padding:180px 0 80px;
      background:#ffffff;
    }
    .strata-services#capabilities{
      padding:100px 0 140px;
      background:#ffffff;
    }
    .strata-services#capabilities h2.big{
      color:#111827;
    }
    .strata-services#capabilities .svc-grid{
      background:rgba(0,0,0,0.08);
      border-color:rgba(0,0,0,0.08);
    }
    .strata-services .wrap{
      max-width:1280px;
      margin:0 auto;
      padding:0 24px;
    }
    .strata-services .reveal{opacity:0;transform:translateY(40px);}
    .strata-services .section-head{margin-bottom:70px;}
    .strata-services .tag{
      font-family:var(--st-mono);font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--st-accent);
      display:flex;align-items:center;gap:10px;margin-bottom:20px;
    }
    .strata-services .tag::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--st-accent);}
    .strata-services h2.big{
      font-family:var(--st-display);font-weight:600;font-size:clamp(32px,4.4vw,56px);line-height:1.05;letter-spacing:-0.01em;
      color:#111318;
    }

    .strata-services .orbit-section-inner{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
    .strata-services .orbit-copy p{color:var(--st-gray);font-size:16px;line-height:1.8;max-width:440px;margin-top:22px;font-family:var(--st-body);}
    .strata-services .orbit-list{margin-top:40px;display:flex;flex-direction:column;gap:0;}
    .strata-services .orbit-list button{
      width:100%;text-align:left;padding:16px 0;border-top:1px solid var(--st-line);
      font-family:var(--st-mono);font-size:13px;letter-spacing:.06em;text-transform:uppercase;color:var(--st-gray-dim);
      display:flex;justify-content:space-between;align-items:center;transition:color .3s;background:none;border-left:none;border-right:none;border-bottom:none;cursor:pointer;
    }
    .strata-services .orbit-list button:last-child{border-bottom:1px solid var(--st-line);}
    .strata-services .orbit-list button.active{color:#111318;}
    .strata-services .orbit-list button .idx{font-size:11px;opacity:.6;}

    .strata-services .orbit-stage{
      position:relative;aspect-ratio:1/1;display:flex;align-items:center;justify-content:center;
      user-select:none;touch-action:none;
    }
    .strata-services .orbit-stage svg{width:100%;height:100%;overflow:visible;cursor:grab;}
    .strata-services .orbit-stage svg:active{cursor:grabbing;}
    .strata-services .orbit-ring-static{fill:none;stroke:var(--st-line);stroke-width:1;}
    .strata-services .orbit-ring-progress{fill:none;stroke:#111318;stroke-width:1;stroke-linecap:round;transition:stroke-dashoffset .1s linear;}
    .strata-services .orbit-dot{fill:#111318;transition:fill .3s,r .3s;cursor:pointer;}
    .strata-services .orbit-dot.active{fill:var(--st-accent);}
    .strata-services .orbit-center{
      position:absolute;text-align:center;pointer-events:none;
      width:60%;
    }
    .strata-services .orbit-icon{width:52px;height:52px;margin:0 auto 22px;display:flex;align-items:center;justify-content:center;}
    .strata-services .orbit-icon svg{width:100%;height:100%;stroke:#111318;fill:none;stroke-width:1.2;}
    .strata-services .orbit-title{font-family:var(--st-display);font-size:24px;font-weight:600;margin-bottom:10px;color:#111318;}
    .strata-services .orbit-desc{font-family:var(--st-body);font-size:13px;color:var(--st-gray-dim);line-height:1.6;}
    .strata-services .orbit-count{position:absolute;bottom:-40px;left:0;font-family:var(--st-mono);font-size:12px;color:var(--st-gray-dim);letter-spacing:.1em;}

    @media (max-width:900px){
      .strata-services .orbit-section-inner{grid-template-columns:1fr;}
      .strata-services .orbit-stage{max-width:340px;margin:60px auto 0;}
    }

    .strata-services .svc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--st-line);border:1px solid var(--st-line);margin-top:60px;}
    .strata-services .svc-card{
      background:#ffffff;padding:44px 30px;position:relative;overflow:hidden;
      transition:transform .5s var(--st-ease),background .5s var(--st-ease);
    }
    .strata-services .svc-card::before{
      content:'';position:absolute;inset:0;
      background:radial-gradient(circle at var(--mx,50%) var(--my,50%), var(--st-accent-soft), transparent 60%);
      opacity:0;transition:opacity .4s ease;pointer-events:none;
    }
    .strata-services .svc-card:hover::before{opacity:1;}
    .strata-services .svc-card:hover{transform:translateY(-6px);background:#fafbff;}
    .strata-services .svc-num{font-family:var(--st-mono);font-size:12px;color:var(--st-gray-dim);}
    .strata-services .svc-icon{width:36px;height:36px;margin:24px 0;stroke:#111318;fill:none;stroke-width:1.1;}
    .strata-services .svc-card h3{font-family:var(--st-display);font-size:20px;font-weight:600;margin-bottom:12px;color:#111318;}
    .strata-services .svc-card p{color:var(--st-gray-dim);font-size:14px;line-height:1.7;font-family:var(--st-body);}
    @media (max-width:900px){.strata-services .svc-grid{grid-template-columns:1fr;}}

    /* ============================================================
       About Company section — inline, namespaced under .about-section
       so it can't clash with Tailwind or the strata-services styles
       above it. Uses plain CSS grid (no Bootstrap dependency).
       ============================================================ */
    .about-section {
      --about-bg: #ffffff;
      --about-white: #111318;
      --about-text-secondary: #5b5c63;
      --about-accent: #4F46FF;
      --about-accent-soft: rgba(79, 70, 255, 0.10);
      --about-border: rgba(0, 0, 0, 0.10);
      --about-display: 'Space Grotesk', sans-serif;
      --about-body: 'Inter', sans-serif;
      --about-mono: 'JetBrains Mono', monospace;
      --about-ease: cubic-bezier(.16, .84, .44, 1);

      position: relative;
      isolation: isolate;
      overflow: hidden;
      background: var(--about-bg);
      background-image: radial-gradient(
        ellipse 900px 600px at 78% 30%,
        rgba(79, 70, 255, 0.06),
        transparent 65%
      );
      padding: 140px 0;
      color: var(--about-white);
      font-family: var(--about-body);
    }

    .about-container {
      position: relative;
      z-index: 2;
      max-width: 1360px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .about-row {
      display: grid;
      grid-template-columns: 5fr 7fr;
      gap: 60px;
      align-items: center;
    }

    /* ---------------- Background decoration (section-level) ---------------- */
    .about-bg { position: absolute; inset: 0; z-index: 1; pointer-events: none; }

    /* faint oversized circle peeking from the bottom-left corner */
    .about-bg__giant-circle {
      position: absolute; left: -220px; bottom: -220px; width: 440px; height: 440px;
      border-radius: 50%; border: 1px solid var(--about-border);
    }
    .about-bg__giant-circle::before {
      content: ''; position: absolute; inset: 60px; border-radius: 50%; border: 1px solid var(--about-border); opacity: .7;
    }

    /* small 3x3 dot grid, top-right of the whole section */
    .about-bg__dotgrid {
      position: absolute; top: 8%; right: 4%; display: grid;
      grid-template-columns: repeat(3, 1fr); gap: 6px;
    }
    .about-bg__dotgrid span { width: 3px; height: 3px; border-radius: 50%; background: rgba(0,0,0,.25); }

    /* diagonal "speed line" clusters, top-right and bottom-right */
    .about-corner-lines { position: absolute; display: flex; gap: 8px; }
    .about-corner-lines span {
      width: 1px; height: 70px; background: linear-gradient(180deg, var(--about-accent), transparent);
      transform: rotate(28deg); transform-origin: top center; opacity: .8;
    }
    .about-corner-lines--top { top: 4%; right: 2%; }
    .about-corner-lines--bottom { bottom: 14%; right: 3%; }

    /* three-dot pagination, bottom-right of the section */
    .about-pagination { position: absolute; bottom: 6%; right: 6%; display: flex; align-items: center; gap: 7px; }
    .about-pagination span { width: 5px; height: 5px; border-radius: 50%; background: rgba(0,0,0,.2); }
    .about-pagination span:last-child { background: var(--about-accent); box-shadow: 0 0 8px 2px var(--about-accent-soft); }

    /* ---------------- Left column: copy ---------------- */
    .about-eyebrow {
      display: flex; align-items: center; gap: 14px; margin-bottom: 28px;
    }
    .about-eyebrow__line {
      height: 1px; background: rgba(0,0,0,.22); flex-shrink: 0;
    }
    .about-eyebrow__line--left { width: 34px; }
    .about-eyebrow__line--right { width: 100px; background: linear-gradient(90deg, rgba(0,0,0,.22), transparent); }
    .about-eyebrow__text {
      font-family: var(--about-mono); font-size: 12px; letter-spacing: .28em; text-transform: uppercase;
      color: rgba(0,0,0,.7); white-space: nowrap;
    }

    .about-heading {
      font-family: var(--about-display); font-weight: 700; font-size: clamp(36px, 4.6vw, 58px);
      line-height: 1.06; letter-spacing: -0.01em; margin-bottom: 22px;
    }
    .about-heading__accent {
      display: block;
      background: linear-gradient(120deg, #6f66ff 0%, #4F46FF 55%, #8b7dff 100%);
      -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
    }

    .about-rule-wrap { display: flex; align-items: center; gap: 7px; margin-bottom: 30px; }
    .about-rule {
      display: block; width: 56px; height: 2px; background: var(--about-accent); border-radius: 2px;
      transform-origin: left center; animation: about-rule-grow 1.4s var(--about-ease) both;
    }
    .about-rule-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--about-accent); }
    @keyframes about-rule-grow { from { width: 0; opacity: 0; } to { width: 56px; opacity: 1; } }

    .about-desc { font-size: 16px; line-height: 1.85; color: var(--about-text-secondary); max-width: 460px; margin-bottom: 48px; }

    .about-cta {
      position: relative; display: inline-flex; align-items: center; gap: 14px; padding: 18px 30px;
      border: 1.5px solid rgba(79, 70, 255, 0.35); border-radius: 999px; color: var(--about-white);
      font-family: var(--about-body); font-weight: 600; font-size: 15px; text-decoration: none; overflow: hidden;
      transition: border-color .4s var(--about-ease), box-shadow .4s var(--about-ease), transform .3s var(--about-ease);
    }
    .about-cta::before {
      content: ''; position: absolute; inset: 0; background: var(--about-accent-soft); backdrop-filter: blur(10px);
      opacity: 0; transition: opacity .4s var(--about-ease); z-index: -1;
    }
    .about-cta__icon { width: 15px; height: 15px; transition: transform .4s var(--about-ease); }
    .about-cta:hover { border-color: rgba(79, 70, 255, 0.7); box-shadow: 0 0 26px rgba(79, 70, 255, 0.18); transform: translateY(-2px); color: var(--about-white); }
    .about-cta:hover::before { opacity: 1; }
    .about-cta:hover .about-cta__icon { transform: translate(3px, -3px); }

    /* ---------------- Right column: visual ---------------- */
    .about-visual { position: relative; width: min(560px, 92%); aspect-ratio: 1 / 1; margin: 0 auto; }

    .about-visual__glow {
      position: absolute; inset: 10%; border-radius: 50%;
      background: radial-gradient(circle, var(--about-accent-soft) 0%, transparent 70%); filter: blur(30px);
    }

    /* rotated diamond peeking out behind the photo top-right and bottom-right, for layered depth */
    .about-visual__diamond {
      position: absolute; width: 74%; height: 74%; right: -10%; bottom: -8%;
      border: 1px solid var(--about-border); background: rgba(0,0,0,0.02);
      transform: rotate(45deg); border-radius: 22px; z-index: 1;
    }

    /* thick offset "donut" ring — sits behind/left of the photo so only a bold crescent shows */
    .about-visual__ring-thick {
      position: absolute; left: -7%; top: -3%; width: 90%; height: 90%;
      border-radius: 50%; border: 26px solid rgba(0,0,0,0.035);
      box-shadow: inset 0 0 0 1px rgba(0,0,0,0.10), 0 0 0 1px rgba(0,0,0,0.04);
      z-index: 2;
    }

    .about-ring { position: absolute; inset: 0; width: 100%; height: 100%; overflow: visible; z-index: 3; }
    .about-ring circle { fill: none; }

    /* thin static outline ring, full circle, sits just outside the photo */
    .about-ring--static circle { stroke: rgba(0, 0, 0, 0.14); stroke-width: 1; }

    /* blue progress-style arc, full sweep, slightly larger than the photo, peeking on the right/bottom */
    .about-ring--progress circle {
      stroke: var(--about-accent); stroke-width: 1.5; stroke-linecap: round;
      stroke-dasharray: 900 1300; stroke-dashoffset: 0; opacity: .85;
    }
    .about-ring--progress { animation: about-spin 30s linear infinite; transform-origin: 50% 50%; z-index: 4; }

    @keyframes about-spin { to { transform: rotate(360deg); } }

    .about-visual__dot {
      position: absolute; width: 8px; height: 8px; border-radius: 50%; background: var(--about-white);
      box-shadow: 0 0 8px 2px rgba(0,0,0,.15); transform: translate(-50%, -50%); z-index: 5;
    }
    .about-visual__dot--accent { background: var(--about-accent); box-shadow: 0 0 10px 3px var(--about-accent-soft); }

    .about-photo {
      position: absolute; inset: 16%; border-radius: 50%; overflow: hidden; border: 1px solid var(--about-border);
      box-shadow: 0 0 0 1px rgba(0,0,0,0.08), 0 25px 70px rgba(0,0,0,0.18); z-index: 3;
    }
    .about-photo img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 50%; transition: transform .6s var(--about-ease); }
    .about-photo:hover img { transform: scale(1.03); }

    /* Graceful degradation if the photo fails to load (missing/corrupt file) */
    .about-photo--fallback {
      background: radial-gradient(circle at 35% 30%, rgba(79,70,255,0.14), #f4f4f8 70%);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .about-photo--fallback::after {
      content: 'DB';
      font-family: var(--about-display);
      font-size: 48px;
      font-weight: 600;
      letter-spacing: .05em;
      color: rgba(0,0,0,0.25);
    }

    /* diagonal line cluster tucked into the visual's own top-right corner */
    .about-visual__lines {
      position: absolute; top: -6%; right: -8%; display: flex; gap: 6px; z-index: 5;
    }
    .about-visual__lines span {
      width: 1px; height: 34px; background: linear-gradient(180deg, var(--about-accent), transparent);
      transform: rotate(28deg); transform-origin: top center; opacity: .8;
    }

    /* small dot-grid + diagonal lines pinned to the visual's own corner */
    .about-visual__dotgrid {
      position: absolute; top: -6%; right: -2%; display: grid;
      grid-template-columns: repeat(3, 1fr); gap: 6px;
    }
    .about-visual__dotgrid span { width: 3px; height: 3px; border-radius: 50%; background: rgba(0,0,0,.3); }

    .about-reveal { opacity: 0; transform: translateY(28px); }

    @media (max-width: 991.98px) {
      .about-row { grid-template-columns: 1fr; }
      .about-copy { order: 2; }
      .about-visual-col { order: 1; }
      .about-section { padding: 100px 0; text-align: center; }
      .about-eyebrow { justify-content: center; }
      .about-desc { margin-left: auto; margin-right: auto; }
      .about-rule-wrap { margin-left: auto; margin-right: auto; justify-content: center; }
      .about-visual { margin-bottom: 20px; }
      .about-corner-lines, .about-bg__dotgrid, .about-pagination, .about-bg__giant-circle { display: none; }
    }

    @media (max-width: 575.98px) {
      .about-section { padding: 80px 0; }
      .about-heading { font-size: clamp(30px, 8vw, 40px); }
      .about-desc { max-width: 100%; }
      .about-visual { width: 90%; }
      .about-cta { width: 100%; justify-content: center; }
    }

    @media (prefers-reduced-motion: reduce) {
      .about-ring--progress, .about-rule { animation: none; }
      .about-photo img { transition: none; }
    }
  </style>
</head>
<body class="min-h-screen flex flex-col relative overflow-x-hidden bg-white">

<main class="flex-1 relative z-10">
<div class="hero-block relative w-full overflow-hidden flex flex-col" id="hero-fade-wrap">
<div class="absolute inset-0 w-full h-full pointer-events-none z-0">
<video autoplay muted loop playsinline class="w-full h-full object-cover">
<source src="assets/bg-video3.mp4" type="video/mp4">
</video>
<div class="absolute inset-0 bg-gradient-to-r from-white/70 via-white/40 to-white/10"></div>
<div class="absolute inset-x-0 bottom-0 h-48 bg-gradient-to-b from-transparent to-white"></div>
</div>
<section class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 md:px-10 lg:px-16 pb-16 sm:pb-20 relative z-10 flex-1 flex items-center" style="padding-top: max(120px, 15vh);">
<div class="max-w-3xl space-y-6 sm:space-y-8">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-sm text-[10px] text-primary tracking-widest uppercase"><?php echo htmlspecialchars($badgeText); ?></span>
</div>
<h1 class="font-display-lg text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold leading-[1.05] gradient-text tracking-tight">
          <?php echo $heroHeading; ?>
        </h1>
<p class="text-on-surface-variant text-base sm:text-lg md:text-xl max-w-xl leading-relaxed font-body-md">
          <?php echo htmlspecialchars($heroSub); ?>
        </p>
<div class="flex flex-wrap items-center gap-6 sm:gap-8 pt-2 sm:pt-4">
<button class="px-7 sm:px-10 py-4 sm:py-5 bg-primary text-on-primary font-bold rounded-xl hover:shadow-[0_0_30px_rgba(76,214,255,0.4)] transition-all transform hover:-translate-y-1">
            <?php echo htmlspecialchars($ctaLabel); ?>
          </button>

</div>
</div>
</section>
</div>

<!-- ============================================================
     Services — ported from STRATA: orbit navigator + capability cards.
     Replaces the previous hub-and-spoke "Our Services" diagram.
     ============================================================ -->
<section class="strata-services" id="services" data-purpose="services-strata">
<div class="wrap">
<div class="section-head">
<div class="tag">What we do</div>
<h2 class="big reveal">Four disciplines, one studio, no handoffs.</h2>
</div>
<div class="orbit-section-inner">
<div class="orbit-copy">
<p class="reveal">Every engagement draws on the same team from strategy through launch — design, engineering, and marketing working from a shared brief instead of a chain of hand-offs.</p>

<div class="orbit-list" id="orbitList">
<?php foreach ($services as $i => $s): ?>
<button data-index="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>">
<?php echo htmlspecialchars($s['title']); ?>
<span class="idx"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
</button>
<?php endforeach; ?>
</div>
</div>

<div class="orbit-stage reveal" id="orbitStage">
<svg viewBox="0 0 400 400" id="orbitSvg">
<circle class="orbit-ring-static" cx="200" cy="200" r="176"></circle>
<circle class="orbit-ring-progress" id="orbitProgress" cx="200" cy="200" r="176" stroke-dasharray="1106" stroke-dashoffset="1106" transform="rotate(-90 200 200)"></circle>
<g id="orbitDots"></g>
</svg>
<div class="orbit-center">
<div class="orbit-icon" id="orbitIcon"><svg viewbox="0 0 24 24"><?php echo $services[0]['icon']; ?></svg></div>
<div class="orbit-title" id="orbitTitle"><?php echo htmlspecialchars($services[0]['title']); ?></div>
<div class="orbit-desc" id="orbitDesc"><?php echo htmlspecialchars($services[0]['desc']); ?></div>
</div>
<div class="orbit-count"><span id="orbitCount">01</span> / <?php echo str_pad(count($services), 2, '0', STR_PAD_LEFT); ?> — drag, scroll, or wait</div>
</div>
</div>
</div>
</section>

<section class="strata-services strata-capabilities" id="capabilities" data-purpose="capabilities">
<div class="wrap">
<div class="section-head">
<div class="tag">Capabilities</div>
<h2 class="big reveal">Built to be used, not just admired.</h2>
</div>
<div class="svc-grid">
<?php foreach ($capabilities as $i => $c): ?>
<div class="svc-card" data-tilt>
<div class="svc-num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
<svg class="svc-icon" viewbox="0 0 24 24"><?php echo $c['icon']; ?></svg>
<h3><?php echo htmlspecialchars($c['title']); ?></h3>
<p><?php echo htmlspecialchars($c['desc']); ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
</section>
<script>
  window.SITE_SERVICES = <?php echo json_encode($services, JSON_UNESCAPED_SLASHES); ?>;
</script>

<!-- ============================================================
     About Company — inline section (data set at top of file as
     $about* variables). Sits directly after Capabilities.
     ============================================================ -->
<section class="about-section" id="about" aria-labelledby="about-heading" data-purpose="about-company">

  <!-- Ambient background decoration -->
  <div class="about-bg" aria-hidden="true">
    <span class="about-bg__giant-circle"></span>
    <div class="about-bg__dotgrid">
      <span></span><span></span><span></span>
      <span></span><span></span><span></span>
      <span></span><span></span><span></span>
    </div>
    <div class="about-corner-lines about-corner-lines--bottom">
      <span></span><span></span><span></span>
    </div>
    <div class="about-pagination">
      <span></span><span></span><span></span>
    </div>
  </div>

  <div class="about-container">
    <div class="about-row">

      <!-- ============== LEFT COLUMN — copy ============== -->
      <div class="about-copy">
        <div class="about-eyebrow">
          <span class="about-eyebrow__line about-eyebrow__line--left"></span>
          <span class="about-eyebrow__text"><?php echo htmlspecialchars($aboutEyebrow); ?></span>
          <span class="about-eyebrow__line about-eyebrow__line--right"></span>
        </div>

        <h2 class="about-heading" id="about-heading">
          <?php echo htmlspecialchars($aboutHeadingLead); ?>
          <span class="about-heading__accent"><?php echo htmlspecialchars($aboutHeadingWord); ?></span>
        </h2>

        <div class="about-rule-wrap" aria-hidden="true">
          <span class="about-rule"></span>
          <span class="about-rule-dot"></span>
        </div>

        <p class="about-desc"><?php echo $aboutDescription; ?></p>

        <a class="about-cta" href="<?php echo htmlspecialchars($aboutCtaHref); ?>">
          <span><?php echo htmlspecialchars($aboutCtaLabel); ?></span>
          <svg class="about-cta__icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M7 17L17 7M7 7h10v10" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>

      <!-- ============== RIGHT COLUMN — visual ============== -->
      <div class="about-visual-col">
        <div class="about-visual">

          <div class="about-visual__glow" aria-hidden="true"></div>

          <!-- rotated square peeking out behind the photo, for layered depth -->
          <span class="about-visual__diamond" aria-hidden="true"></span>

          <!-- thick offset ring, mostly hidden behind the photo, shows as a bold crescent -->
          <span class="about-visual__ring-thick" aria-hidden="true"></span>

          <!-- thin static outline ring -->
          <svg class="about-ring about-ring--static" viewBox="0 0 400 400" aria-hidden="true">
            <circle cx="200" cy="200" r="196" />
          </svg>

          <!-- blue partial-sweep progress ring -->
          <svg class="about-ring about-ring--progress" viewBox="0 0 400 400" aria-hidden="true">
            <circle cx="200" cy="200" r="196" />
          </svg>

          <!-- orbit marker dots at fixed positions around the ring -->
          <span class="about-visual__dot" style="top:8%; left:80%;"></span>
          <span class="about-visual__dot" style="top:46%; left:-1%;"></span>
          <span class="about-visual__dot" style="top:82%; left:18%;"></span>
          <span class="about-visual__dot about-visual__dot--accent" style="top:62%; left:99%;"></span>

          <!-- diagonal accent lines, top-right corner of the visual -->
          <div class="about-visual__lines" aria-hidden="true">
            <span></span><span></span><span></span>
          </div>

          <!-- small dot-grid tucked into the visual's own top-right corner -->
          <div class="about-visual__dotgrid" aria-hidden="true">
            <span></span><span></span><span></span>
            <span></span><span></span><span></span>
          </div>

          <div class="about-photo" id="aboutPhoto">
            <img
              src="<?php echo htmlspecialchars($aboutImage); ?>"
              alt="<?php echo htmlspecialchars($aboutImageAlt); ?>"
              loading="lazy"
              width="480"
              height="480"
              onerror="this.style.display='none'; document.getElementById('aboutPhoto').classList.add('about-photo--fallback');"
            />
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<style>
    .testimonials-section {
      --ts-bg: #ffffff;
      --ts-navy: #0B1437;
      --ts-navy-deep: #0B1538;
      --ts-blue-1: #2563EB;
      --ts-blue-2: #4F46FF;
      --ts-badge-bg: #EEF4FF;
      --ts-body: #667085;
      --ts-border: rgba(11, 20, 55, 0.08);
      --ts-purple: #7C6FFF;
      --ts-purple-soft: rgba(124, 111, 255, 0.16);
      --ts-mint: #34D399;
      --ts-mint-soft: rgba(52, 211, 153, 0.16);
      --ts-gold: #F5B301;
      --ts-display: 'Space Grotesk', sans-serif;
      --ts-script: 'Sora', cursive;
      --ts-body-font: 'Inter', sans-serif;
      --ts-label: 'Poppins', sans-serif;
      --ts-ease: cubic-bezier(.16,.84,.44,1);
 
      position: relative;
      isolation: isolate;
      overflow: hidden;
      background: var(--ts-bg);
      padding: 120px 0;
      color: var(--ts-navy);
      font-family: var(--ts-body-font);
    }
 
    .ts-wrap {
      position: relative;
      z-index: 2;
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 24px;
    }
 
    /* ---------------- Background decoration ---------------- */
    .ts-bg { position: absolute; inset: 0; z-index: 1; pointer-events: none; }
 
    .ts-bg__rings {
      position: absolute; width: 420px; height: 420px; border-radius: 50%;
      border: 1px solid rgba(11,20,55,0.05);
    }
    .ts-bg__rings::before { content:''; position:absolute; inset: 46px; border-radius:50%; border:1px solid rgba(11,20,55,0.05); }
    .ts-bg__rings::after  { content:''; position:absolute; inset: 92px; border-radius:50%; border:1px solid rgba(11,20,55,0.05); }
    .ts-bg__rings--tr { top: -140px; right: -140px; }
    .ts-bg__rings--br { bottom: -180px; right: -60px; opacity: .7; }
 
    .ts-bg__dotgrid {
      position: absolute; display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px;
    }
    .ts-bg__dotgrid span { width: 3px; height: 3px; border-radius: 50%; background: rgba(37,99,235,0.35); }
    .ts-bg__dotgrid--tl { top: 8%; left: 4%; }
    .ts-bg__dotgrid--br { bottom: 10%; right: 6%; }
 
    .ts-bg__wave {
      position: absolute; top: 42%; left: -5%; width: 220px; opacity: .5;
    }
 
    .ts-bg__curve {
      position: absolute; bottom: 6%; left: 2%; width: 180px; opacity: .6;
    }
 
    /* ---------------- Header ---------------- */
    .ts-header { text-align: center; margin-bottom: 28px; }
 
    .ts-badge {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 9px 18px 9px 14px; border-radius: 999px;
      background: var(--ts-badge-bg);
      font-family: var(--ts-label); font-weight: 600; font-size: 12px;
      letter-spacing: .16em; text-transform: uppercase; color: var(--ts-blue-1);
      margin-bottom: 28px;
    }
    .ts-badge svg { width: 15px; height: 15px; flex-shrink: 0; }
 
    .ts-heading {
      font-family: var(--ts-display); font-weight: 700;
      font-size: clamp(38px, 5.2vw, 72px); line-height: 1.08; letter-spacing: -0.01em;
      color: var(--ts-navy); margin-bottom: 22px;
    }
    .ts-heading__script {
      font-family: var(--ts-script); font-style: italic; font-weight: 700;
      background: linear-gradient(120deg, var(--ts-blue-1) 0%, var(--ts-blue-2) 100%);
      -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
      margin-left: 14px;
    }
 
    .ts-subtitle {
      max-width: 650px; margin: 0 auto 32px; color: var(--ts-body);
      font-size: 17px; line-height: 1.8;
    }
 
    .ts-pagination { display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 88px; }
    .ts-pagination span { display: block; height: 4px; width: 20px; border-radius: 999px; background: #E4E7EC; transition: all .3s var(--ts-ease); }
    .ts-pagination span.active { width: 34px; background: var(--ts-blue-1); }
 
    /* ---------------- Cards ---------------- */
    .ts-cards {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;
      align-items: center; margin-bottom: 64px;
    }
 
    .ts-card {
      position: relative; padding: 44px 34px 38px; border-radius: 36px;
      background: #ffffff; box-shadow: 0 20px 50px rgba(11,20,55,0.08);
      transition: transform .5s var(--ts-ease), box-shadow .5s var(--ts-ease);
    }
    .ts-card:hover { transform: translateY(-8px) rotate(0deg) !important; box-shadow: 0 30px 70px rgba(11,20,55,0.14); }
 
    .ts-card--left  { transform: rotate(-3.5deg); }
    .ts-card--right { transform: rotate(3.5deg); }
    .ts-card--center {
      background: var(--ts-navy-deep); color: #fff;
      padding: 54px 40px 46px; transform: translateY(-28px) rotate(0.4deg);
      box-shadow: 0 34px 80px rgba(11,21,56,0.35);
      z-index: 2;
    }
    .ts-card--center:hover { transform: translateY(-36px) rotate(0.4deg) !important; }
 
    .ts-card__shape {
      position: absolute; width: 210px; height: 210px; border-radius: 46% 54% 58% 42% / 48% 42% 58% 52%;
      z-index: -1; filter: blur(2px);
    }
    .ts-card--left .ts-card__shape  { background: var(--ts-purple-soft); top: -34px; left: -40px; }
    .ts-card--right .ts-card__shape { background: var(--ts-mint-soft); bottom: -34px; right: -40px; }
 
    .ts-card__quotemark {
      position: absolute; top: 22px; right: 28px; font-family: var(--ts-display);
      font-size: 64px; line-height: 1; font-weight: 700; color: rgba(11,20,55,0.06);
      pointer-events: none;
    }
    .ts-card--center .ts-card__quotemark { color: rgba(255,255,255,0.08); }
 
    .ts-card__photo {
      width: 68px; height: 68px; border-radius: 50%; overflow: hidden; margin: 0 auto 18px;
      border: 2px solid rgba(11,20,55,0.06);
    }
    .ts-card--center .ts-card__photo { border-color: rgba(255,255,255,0.14); }
    .ts-card__photo img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s var(--ts-ease); }
    .ts-card:hover .ts-card__photo img { transform: scale(1.06); }
 
    .ts-card__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 20px; }
    .ts-card__stars svg { width: 15px; height: 15px; fill: var(--ts-gold); }
 
    .ts-card__text {
      text-align: center; font-size: 15.5px; line-height: 1.75;
      color: var(--ts-navy); margin-bottom: 26px;
    }
    .ts-card--center .ts-card__text { color: rgba(255,255,255,0.88); }
 
    .ts-card__divider { width: 40px; height: 2px; margin: 0 auto 20px; border-radius: 2px; background: var(--ts-blue-1); }
    .ts-card--left .ts-card__divider  { background: var(--ts-purple); }
    .ts-card--right .ts-card__divider { background: var(--ts-mint); }
 
    .ts-card__name { text-align: center; font-family: var(--ts-display); font-weight: 600; font-size: 16px; margin-bottom: 4px; }
    .ts-card__role { text-align: center; font-size: 13px; color: var(--ts-body); }
    .ts-card--center .ts-card__role { color: rgba(255,255,255,0.55); }
 
    @media (max-width: 900px) {
      .ts-cards { grid-template-columns: 1fr; max-width: 420px; margin-left: auto; margin-right: auto; }
      .ts-card--left, .ts-card--right, .ts-card--center { transform: none; }
      .ts-card--center:hover, .ts-card:hover { transform: translateY(-6px) !important; }
    }
 
    /* ---------------- Nav buttons ---------------- */
    .ts-nav { display: flex; align-items: center; justify-content: center; gap: 14px; }
    .ts-nav button {
      width: 52px; height: 52px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
      border: none; cursor: pointer; transition: transform .3s var(--ts-ease), box-shadow .3s var(--ts-ease);
      box-shadow: 0 8px 20px rgba(11,20,55,0.10);
    }
    .ts-nav button svg { width: 18px; height: 18px; }
    .ts-nav__prev { background: #fff; color: var(--ts-navy); }
    .ts-nav__next { background: var(--ts-blue-1); color: #fff; }
    .ts-nav button:hover { transform: translateY(-3px); box-shadow: 0 14px 28px rgba(11,20,55,0.18); }
 
    .ts-reveal { opacity: 0; transform: translateY(30px); }
</style>
 
<section class="testimonials-section" id="testimonials" aria-labelledby="testimonials-heading" data-purpose="testimonials">
 
  <div class="ts-bg" aria-hidden="true">
    <span class="ts-bg__rings ts-bg__rings--tr"></span>
    <span class="ts-bg__rings ts-bg__rings--br"></span>
    <div class="ts-bg__dotgrid ts-bg__dotgrid--tl">
      <span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span>
    </div>
    <div class="ts-bg__dotgrid ts-bg__dotgrid--br">
      <span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span>
    </div>
    <svg class="ts-bg__wave" viewBox="0 0 220 60" fill="none">
      <path d="M2 30c18-24 36-24 54 0s36 24 54 0 36-24 54 0 36 24 54 0" stroke="#2563EB" stroke-opacity=".18" stroke-width="1.5"/>
    </svg>
    <svg class="ts-bg__curve" viewBox="0 0 180 100" fill="none">
      <path d="M4 4c40 40 40 60 90 92" stroke="#0B1437" stroke-opacity=".06" stroke-width="1.5"/>
    </svg>
  </div>
 
  <div class="ts-wrap">
 
    <div class="ts-header ts-reveal" id="tsHeader">
      <span class="ts-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
        </svg>
        <?php echo htmlspecialchars($testimonialsEyebrow); ?>
      </span>
 
      <h2 class="ts-heading" id="testimonials-heading">
        <?php echo htmlspecialchars($testimonialsHeadingLead); ?><span class="ts-heading__script"><?php echo htmlspecialchars($testimonialsHeadingScript); ?></span>
      </h2>
 
      <p class="ts-subtitle"><?php echo htmlspecialchars($testimonialsSubtitle); ?></p>
 
      <div class="ts-pagination" aria-hidden="true">
        <span class="active"></span><span></span><span></span>
      </div>
    </div>
 
    <div class="ts-cards">
      <?php foreach ($testimonials as $i => $t):
        $posClass = $i === 0 ? 'ts-card--left' : ($i === 2 ? 'ts-card--right' : 'ts-card--center');
      ?>
      <div class="ts-card <?php echo $posClass; ?> ts-reveal" data-index="<?php echo $i; ?>">
        <?php if ($posClass !== 'ts-card--center'): ?><span class="ts-card__shape" aria-hidden="true"></span><?php endif; ?>
        <span class="ts-card__quotemark" aria-hidden="true">&rdquo;</span>
 
        <div class="ts-card__photo">
          <img src="<?php echo htmlspecialchars($t['photo']); ?>" alt="<?php echo htmlspecialchars($t['name']); ?>" loading="lazy" width="68" height="68"/>
        </div>
 
        <div class="ts-card__stars" aria-hidden="true">
          <?php for ($s = 0; $s < 5; $s++): ?>
          <svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.8 6.2.6-4.7 4.2 1.4 6.2L10 15.2l-5.5 3.1 1.4-6.2L1.2 7.9l6.2-.6L10 1.5z"/></svg>
          <?php endfor; ?>
        </div>
 
        <p class="ts-card__text">&ldquo;<?php echo htmlspecialchars($t['quote']); ?>&rdquo;</p>
 
        <span class="ts-card__divider"></span>
        <div class="ts-card__name"><?php echo htmlspecialchars($t['name']); ?></div>
        <div class="ts-card__role"><?php echo htmlspecialchars($t['title']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
 
    <div class="ts-nav">
      <button class="ts-nav__prev" id="tsPrev" aria-label="Previous testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button class="ts-nav__next" id="tsNext" aria-label="Next testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
      </button>
    </div>
 
  </div>
</section>
 
<script>
  /* ============================================================
     Testimonials — reveal-on-scroll (uses the gsap + ScrollTrigger
     instances already loaded/registered earlier in index.php) and
     simple prev/next pagination-dot cycling.
     ============================================================ */
  (function initTestimonials() {
    var section = document.getElementById('testimonials');
    if (!section) return;
 
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger); // safe to call again — no-op if already registered
      var header = document.getElementById('tsHeader');
      var cards = section.querySelectorAll('.ts-card');
 
      gsap.to(header, {
        opacity: 1, y: 0, duration: .9, ease: 'power3.out',
        scrollTrigger: { trigger: header, start: 'top 85%' }
      });
 
      cards.forEach(function (card, i) {
        var baseRotate = card.classList.contains('ts-card--left') ? -3.5
                        : card.classList.contains('ts-card--right') ? 3.5 : 0.4;
        var baseY = card.classList.contains('ts-card--center') ? -28 : 0;
        gsap.fromTo(card,
          { opacity: 0, y: baseY + 40, rotate: 0 },
          {
            opacity: 1, y: baseY, rotate: baseRotate, duration: 1, delay: i * .12, ease: 'power3.out',
            scrollTrigger: { trigger: section, start: 'top 75%' }
          }
        );
      });
    } else {
      section.querySelectorAll('.ts-reveal').forEach(function (el) { el.style.opacity = 1; });
    }
 
    // Pagination dots cycle in sync with prev/next (purely visual —
    // swap in real slide logic if you turn this into a carousel).
    var dots = section.querySelectorAll('.ts-pagination span');
    var current = 0;
    function setDot(i) {
      current = ((i % dots.length) + dots.length) % dots.length;
      dots.forEach(function (d, idx) { d.classList.toggle('active', idx === current); });
    }
    var prevBtn = document.getElementById('tsPrev');
    var nextBtn = document.getElementById('tsNext');
    if (prevBtn) prevBtn.addEventListener('click', function () { setDot(current - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { setDot(current + 1); });
  })();
</script>

<?php
/**
 * "The Digibeat Difference" — single-file luxury/futuristic landing section
 * PHP + HTML5 + CSS3 + Bootstrap 5 (grid only) + Vanilla JS
 * Built to match the supplied reference design as closely as possible.
 */

$pageTitle = "The Digibeat Difference";

// Feature data — drives the 5 stacked timeline cards.
$features = [
    [
        "title" => "Innovation at the Core",
        "text"  => "We stay ahead of trends to deliver creative, future-ready digital solutions that make your brand stand out.",
        "icon"  => "lightbulb",
    ],
    [
        "title" => "Collaboration that Counts",
        "text"  => "Every project is a partnership — we work closely with you to bring your ideas to life with precision and purpose.",
        "icon"  => "handshake",
    ],
    [
        "title" => "Excellence in Every Detail",
        "text"  => "From strategy to execution, we maintain the highest standards to ensure quality and consistency in all we do.",
        "icon"  => "target",
    ],
    [
        "title" => "Growth-Driven Mindset",
        "text"  => "Our focus is always on driving real results — helping your business grow, evolve, and stay competitive.",
        "icon"  => "rocket",
    ],
    [
        "title" => "Passion for What We Do",
        "text"  => "We love what we do, and it shows in the creativity, care, and dedication behind every project.",
        "icon"  => "heart",
    ],
];

/**
 * Returns inline SVG markup for a given outline icon key.
 * Kept as thin-stroke line art to match the reference visuals exactly
 * (no icon-font glyph matched the design closely enough).
 */
function digibeat_icon(string $key): string
{
    $common = 'fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"';
    switch ($key) {
        case 'lightbulb':
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M9 18h6"/><path d="M10 21h4"/><path d="M12 3a6 6 0 0 0-3.6 10.8c.6.45 1.1 1.15 1.1 1.95V16h5v-.25c0-.8.5-1.5 1.1-1.95A6 6 0 0 0 12 3Z"/></svg>';
        case 'handshake':
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M8 12 4.5 8.5a1.5 1.5 0 0 1 0-2.12l1-1a1.5 1.5 0 0 1 2.12 0L11 8.7"/><path d="M16 12l3.5-3.5a1.5 1.5 0 0 0 0-2.12l-1-1a1.5 1.5 0 0 0-2.12 0L13 8.7"/><path d="M8 12l2.3 2.3a1.5 1.5 0 0 0 2.12 0L13 13.9"/><path d="M13 13.9l1.4 1.4a1.5 1.5 0 0 0 2.12 0l.3-.3"/><path d="M11 8.7 9.6 10.1a1.5 1.5 0 0 0 0 2.12"/></svg>';
        case 'target':
            return '<svg viewBox="0 0 24 24" '.$common.'><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4.2"/><circle cx="12" cy="12" r="0.6" fill="currentColor"/></svg>';
        case 'rocket':
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M13.5 3.5c2.5.5 4.5 2.5 5 5-2 4.5-5 7.5-8 9-1 .5-2-.5-1.5-1.5 1.5-3 4.5-6 9-8Z" transform="translate(0,0)"/><path d="M14.5 4.8c-4.7 1.6-8.1 4.9-10 9.2-.2.5.1 1 .6 1.2l2 .6"/><path d="M9.3 15.8l-1.6 3.4c-.2.4-.7.5-1 .2l-1.1-1.1c-.3-.3-.2-.8.2-1l3.4-1.6"/><circle cx="15.3" cy="8.7" r="1.1"/></svg>';
        case 'heart':
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M12 20.5s-7-4.35-9.3-8.8C1.2 8.6 2.9 5.5 6 5c2-.3 3.6.7 6 3 2.4-2.3 4-3.3 6-3 3.1.5 4.8 3.6 3.3 6.7C19 16.15 12 20.5 12 20.5Z"/></svg>';
        default:
            return '';
    }
}
?>
<style>
    /* ============================
       ROOT VARIABLES
    ============================ */
    :root{
        --bg: #ffffff;
        --card-bg: #f7f7f9;
        --card-bg-alt: #f7f7f9;
        --blue: #4361FF;
        --blue-soft: #6a82ff;
        --glow: rgba(67,97,255,.35);
        --text: #111318;
        --para: #5b5c63;
        --border: rgba(0,0,0,.08);
        --border-soft: rgba(0,0,0,.06);
        --container-max: 1400px;
        --pad-desktop: 80px;
        --pad-tablet: 40px;
        --pad-mobile: 20px;
        --transition: .35s ease;
    }

    .difference-section *{ box-sizing: border-box; }

    .difference-section{
        background: #ffffff;
        color: var(--text);
        font-family: 'Plus Jakarta Sans', 'Manrope', sans-serif;
        overflow-x: hidden;
        position: relative;
        padding-top: 120px;
        padding-bottom: 120px;
        padding-left: var(--pad-desktop);
        padding-right: var(--pad-desktop);
        background:
            radial-gradient(ellipse 900px 600px at 10% 85%, rgba(67,97,255,.06), transparent 60%),
            radial-gradient(ellipse 700px 500px at 90% 15%, rgba(67,97,255,.03), transparent 60%),
            #ffffff;
    }

    .difference-section a{ text-decoration: none; }

    .difference-container{
        max-width: var(--container-max);
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .difference-section .fade-up{
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .9s ease, transform .9s ease;
    }
    .difference-section .fade-up.in-view{
        opacity: 1;
        transform: translateY(0);
    }

    /* ============================
       LEFT DECORATIVE BACKGROUND
    ============================ */
    .decorative-layer{
        position: absolute;
        top: 0;
        left: 0;
        width: 55%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
    }

    /* Large soft glowing orb, bottom-left, like the reference */
    .glow-orb{
        position: absolute;
        left: -220px;
        bottom: -220px;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: radial-gradient(circle at 40% 35%, rgba(90,110,255,.25), rgba(67,97,255,.08) 55%, transparent 75%);
        filter: blur(2px);
        animation: pulseGlow 7s ease-in-out infinite;
    }

    /* Thin radar-style arcs sweeping through the heading area */
    .radar-ring{
        position: absolute;
        border-radius: 50%;
        border: 1px solid rgba(67,97,255,.16);
        left: -160px;
        animation: pulseGlow 6s ease-in-out infinite;
    }
    .radar-ring.r1{ width: 420px;  height: 420px;  bottom: -140px; border-color: rgba(120,140,255,.25); }
    .radar-ring.r2{ width: 640px;  height: 640px;  bottom: -230px; border-color: rgba(67,97,255,.14); animation-delay: .6s; }
    .radar-ring.r3{ width: 300px;  height: 300px;  top: 90px; left: -80px; border-color: rgba(67,97,255,.20); animation-delay: 1s; }

    @keyframes pulseGlow{
        0%, 100%{ opacity: .6; }
        50%{ opacity: 1; }
    }

    /* dotted pattern top-left */
    .dot-pattern{
        position: absolute;
        top: 48px;
        left: 4px;
        width: 130px;
        height: 90px;
        background-image: radial-gradient(rgba(0,0,0,.22) 1.4px, transparent 1.4px);
        background-size: 18px 18px;
        z-index: 1;
    }

    /* ============================
       LEFT CONTENT
    ============================ */
    .left-col{
        position: relative;
        z-index: 2;
        padding-top: 40px;
    }

    .accent-line{
        width: 46px;
        height: 3px;
        background: linear-gradient(90deg, var(--blue), rgba(67,97,255,.2));
        border-radius: 2px;
        margin-bottom: 26px;
        box-shadow: 0 0 12px var(--glow);
    }

    .heading-large{
        font-weight: 800;
        font-size: 68px;
        line-height: 1.08;
        letter-spacing: -1.5px;
        margin-bottom: 26px;
        color: var(--text);
        font-family: 'Space Grotesk', sans-serif;
        letter-spacing: -0.02em;
    }

    .heading-large span{
        display: block;
    }

    .heading-swirl{
        display: inline-block;
        width: 46px;
        height: 30px;
        margin-left: 6px;
        vertical-align: middle;
        color: var(--blue-soft);
        filter: drop-shadow(0 0 6px var(--glow));
    }

    .desc-text{
        font-weight: 400;
        font-size: 16px;
        line-height: 1.8;
        color: var(--para);
        max-width: 460px;
        margin-bottom: 18px;
        letter-spacing: .1px;
    }

    /* CTA Button */
    .cta-btn{
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 16px;
        margin-top: 22px;
        padding: 14px 12px 14px 28px;
        border-radius: 50px;
        background: #ffffff;
        border: 1.5px solid var(--blue);
        color: var(--text);
        font-weight: 700;
        font-size: 15px;
        letter-spacing: .3px;
        box-shadow: 0 0 22px rgba(67,97,255,.14);
        transition: var(--transition);
        cursor: pointer;
    }
    .cta-btn .arrow-circle{
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(67,97,255,.12);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
    }
    .cta-btn:hover{
        background: var(--blue);
        color: #fff;
        box-shadow: 0 0 40px var(--glow), 0 8px 24px rgba(67,97,255,.25);
        transform: translateY(-4px);
    }
    .cta-btn:hover .arrow-circle{
        background: rgba(255,255,255,.22);
        transform: translateX(4px);
    }

    /* ============================
       RIGHT SIDE — TIMELINE + CARDS
    ============================ */
    .right-col{
        position: relative;
        z-index: 2;
    }

    .timeline-wrap{
        position: relative;
        padding-left: 34px;
    }

    .timeline-line{
        position: absolute;
        left: 3px;
        top: 36px;
        bottom: 36px;
        width: 1.5px;
        background: linear-gradient(180deg, rgba(120,140,255,0) 0%, rgba(120,140,255,.5) 10%, rgba(120,140,255,.5) 90%, rgba(120,140,255,0) 100%);
    }

    .timeline-dot{
        position: absolute;
        left: -3px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ffffff;
        border: 1.5px solid var(--blue-soft);
        box-shadow: 0 0 10px var(--glow);
        animation: dotPulse 2.4s ease-in-out infinite;
    }

    @keyframes dotPulse{
        0%, 100%{ box-shadow: 0 0 6px var(--glow); }
        50%{ box-shadow: 0 0 18px var(--glow); }
    }

    /* Feature Card row: card body + protruding arrow tip */
    .feature-card-wrap{
        position: relative;
        display: flex;
        align-items: stretch;
        margin-bottom: 30px;
        opacity: 0;
        transform: translateX(70px);
        transition: transform var(--transition), opacity .8s ease;
    }
    .feature-card-wrap.in-view{
        opacity: 1;
        transform: translateX(0);
    }
    .feature-card-wrap:last-child{ margin-bottom: 0; }

    .feature-card{
        position: relative;
        display: flex;
        align-items: center;
        gap: 22px;
        flex: 1 1 auto;
        background: var(--card-bg-alt);
        border: 1px solid var(--border-soft);
        border-right: none;
        border-radius: 12px 0 0 12px;
        padding: 26px 28px;
        transition: box-shadow var(--transition), border-color var(--transition), transform var(--transition);
    }

    .feature-card-wrap:hover .feature-card{
        transform: translateY(-6px);
        box-shadow: 0 14px 34px rgba(67,97,255,.10);
        border-color: rgba(67,97,255,.28);
    }

    /* Protruding arrow tip — double-triangle trick for a hollow blue chevron */
    .card-arrow{
        position: relative;
        flex: 0 0 30px;
        width: 30px;
        transition: transform var(--transition);
    }
    .card-arrow .outer{
        position: absolute;
        left: 0; top: 50%;
        width: 0; height: 0;
        transform: translateY(-50%);
        border-top: 37px solid transparent;
        border-bottom: 37px solid transparent;
        border-left: 30px solid rgba(120,140,255,.45);
        filter: drop-shadow(0 0 8px rgba(67,97,255,.30));
    }
    .card-arrow .inner{
        position: absolute;
        left: -1px; top: 50%;
        width: 0; height: 0;
        transform: translateY(-50%);
        border-top: 33px solid transparent;
        border-bottom: 33px solid transparent;
        border-left: 27px solid var(--card-bg-alt);
    }
    .feature-card-wrap:hover .card-arrow{
        transform: translateX(4px);
    }

    /* Hexagon icon container (outline hexagon) */
    .hex-icon{
        position: relative;
        flex: 0 0 68px;
        width: 68px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
    }
    .hex-icon svg.hex-frame{
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: visible;
    }
    .hex-icon .hex-shape{
        fill: rgba(67,97,255,.05);
        stroke: rgba(67,97,255,.55);
        stroke-width: 1.4;
        filter: drop-shadow(0 0 8px rgba(67,97,255,.20));
    }
    .hex-icon .icon-inner{
        position: relative;
        width: 26px;
        height: 26px;
        color: var(--text);
        z-index: 1;
        transition: var(--transition);
    }
    .hex-icon .icon-inner svg{ width: 100%; height: 100%; }

    .feature-card-wrap:hover .hex-icon .icon-inner{
        transform: rotate(8deg) scale(1.1);
    }

    .card-content h3{
        font-size: 19px;
        font-weight: 700;
        margin-bottom: 8px;
        letter-spacing: .1px;
        color: var(--text);
        font-family: 'Space Grotesk', sans-serif;
    }

    .card-content p{
        font-size: 14.5px;
        line-height: 1.7;
        color: var(--para);
        margin-bottom: 0;
        max-width: 430px;
    }

    /* ============================
       RESPONSIVE
    ============================ */
    @media (max-width: 1199.98px){
        .heading-large{ font-size: 54px; }
        .difference-section{ padding-left: var(--pad-tablet); padding-right: var(--pad-tablet); }
        .decorative-layer{ width: 100%; opacity: .6; }
    }

    @media (max-width: 991.98px){
        .heading-large{ font-size: 44px; }
        .left-col{ margin-bottom: 60px; text-align: left; padding-top: 0; }
        .desc-text{ max-width: 100%; }
        .right-col{ margin-top: 10px; }
        .timeline-wrap{ padding-left: 30px; }
    }

    @media (max-width: 767.98px){
        .difference-section{
            padding-top: 80px;
            padding-bottom: 80px;
            padding-left: var(--pad-mobile);
            padding-right: var(--pad-mobile);
        }
        .heading-large{ font-size: 36px; letter-spacing: -1px; }
        .feature-card-wrap{ flex-direction: column; }
        .feature-card{
            flex-direction: column;
            align-items: flex-start;
            border-radius: 12px;
            border-right: 1px solid var(--border-soft);
            padding: 24px 22px;
        }
        .card-arrow{ display: none; }
        .hex-icon{ margin-bottom: 10px; }
        .cta-btn{ width: 100%; justify-content: center; }
        .dot-pattern{ display: none; }
    }
</style>

<!-- =========================================================
     THE DIGIBEAT DIFFERENCE SECTION
========================================================= -->
<section class="difference-section" id="difference">

    <!-- Decorative background layer: glow orb + radar arcs + dotted grid -->
    <div class="decorative-layer" aria-hidden="true">
        <div class="glow-orb"></div>
        <div class="radar-ring r1"></div>
        <div class="radar-ring r2"></div>
        <div class="radar-ring r3"></div>
    </div>
    <div class="dot-pattern" aria-hidden="true"></div>

    <div class="difference-container">
        <div class="row gy-5 align-items-center">

            <!-- LEFT COLUMN -->
            <div class="col-lg-5 left-col fade-up">
                <div class="accent-line"></div>

                <h2 class="heading-large">
                    <span>The Digibeat</span>
                    <span>Difference
                        <svg class="heading-swirl" viewBox="0 0 46 30" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M2 20c8-10 16 6 24-2 4-4 3-9 8-9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M28 5l6 4-2 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </h2>

                <p class="desc-text">
                    At Digibeat, we go beyond delivering services — we build lasting
                    partnerships rooted in creativity, trust, and results.
                </p>
                <p class="desc-text">
                    Our approach combines innovation, collaboration, and attention to
                    detail to ensure every project reflects our commitment to excellence
                    and your business success.
                </p>

                <a href="#contact" class="cta-btn">
                    Contact Us
                    <span class="arrow-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/><path d="M13 6l6 6-6 6"/>
                        </svg>
                    </span>
                </a>
            </div>

            <!-- RIGHT COLUMN — Feature cards with glowing timeline -->
            <div class="col-lg-7 right-col">
                <div class="timeline-wrap">
                    <div class="timeline-line" aria-hidden="true"></div>

                    <?php foreach ($features as $index => $feature) : ?>
                        <?php $dotTop = ($index * (100 / count($features))) + 6; ?>
                        <div class="timeline-dot" style="top: calc(<?php echo $dotTop; ?>% + <?php echo $index * 4; ?>px); animation-delay: <?php echo $index * 0.3; ?>s;"></div>

                        <div class="feature-card-wrap fade-up" style="transition-delay: <?php echo $index * 0.12; ?>s;">
                            <div class="feature-card">
                                <div class="hex-icon">
                                    <svg class="hex-frame" viewBox="0 0 68 68" xmlns="http://www.w3.org/2000/svg">
                                        <polygon class="hex-shape" points="17,4 51,4 67,34 51,64 17,64 1,34"/>
                                    </svg>
                                    <span class="icon-inner"><?php echo digibeat_icon($feature['icon']); ?></span>
                                </div>
                                <div class="card-content">
                                    <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($feature['text']); ?></p>
                                </div>
                            </div>
                            <div class="card-arrow" aria-hidden="true">
                                <span class="outer"></span>
                                <span class="inner"></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
/* =========================================================
   DIGIBEAT — EDITABLE CONTENT CONFIG
   Change the values below; the markup further down reads
   from these variables so you don't have to touch the HTML.
   ========================================================= */

$eyebrow_text = "Digibeat — Digital Partner";

$headline_html = 'Your business,<br>running on <span class="grad">signal</span>,<br>not noise.';

$paragraphs = [
    "Based in Kozhikode, Digibeat builds the digital backbone for brands that refuse to sit still — web development, IT infrastructure, digital marketing and branding, engineered as one system instead of four separate vendors.",
    "We start by reading the signal in your data, your users, your market — then build the loop that keeps you improving long after launch.",
    "No handoffs, no disappearing act. Our team stays wired into what we build, tuning performance as your business moves.",
];

$cta_text = "See how we work";
$cta_href = "#";

// Marker on the map: left/top are percentages positioned over the
// dot-matrix world map (already tuned to sit on Kerala's coast).
$marker = [
    "flag"  => "🇮🇳",
    "label" => "Kozhikode, Kerala",
    "left"  => 71.96,
    "top"   => 57.00,
];

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<style>
  .signal-section{
    --sg-bg:#ffffff;
    --sg-ink:#0b0b10;
    --sg-ink-soft:#5b5c63;
    --sg-hairline:#e7e7ec;
    --sg-cyan:#00c2ff;
    --sg-magenta:#ff2e92;
  }
  .signal-section .mono{
    font-family:'IBM Plex Mono', monospace;
    letter-spacing:.14em;
    text-transform:uppercase;
    font-size:12px;
    font-weight:500;
  }
  .signal-section h1{
    font-family:'Space Grotesk', sans-serif;
    letter-spacing:-0.02em;
  }

  /* ================= SECTION : PULSE / MAP ================= */
  .signal-section.hero{
    background:#ffffff;
    display:grid;
    grid-template-columns: 1fr 1.2fr;
    gap:64px;
    max-width:1320px;
    margin:0 auto;
    padding:110px 40px 130px;
    align-items:center;
  }
  .signal-section .eyebrow{
    display:flex;
    align-items:center;
    gap:9px;
    color:var(--sg-ink);
    margin-bottom:22px;
  }
  .signal-section .dot-pulse{
    width:7px; height:7px; border-radius:50%;
    background: linear-gradient(135deg,var(--sg-cyan),var(--sg-magenta));
    animation: sg-beat 1.15s ease-in-out infinite;
    flex-shrink:0;
  }
  @keyframes sg-beat{
    0%,100%{ transform:scale(1); opacity:1; }
    45%{ transform:scale(1.9); opacity:.55; }
  }
  .signal-section h1{
    font-size:56px;
    line-height:1.04;
    font-weight:700;
    margin-bottom:28px;
    color: var(--sg-ink);
  }
  .signal-section h1 .grad{
    background:linear-gradient(100deg,var(--sg-cyan),var(--sg-magenta));
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }
  .signal-section p{
    font-size:16.5px;
    line-height:1.68;
    color:var(--sg-ink-soft);
    max-width:480px;
    margin-bottom:20px;
  }
  .signal-section .cta{
    display:inline-flex;
    align-items:center;
    gap:8px;
    margin-top:14px;
    font-family:'Space Grotesk', sans-serif;
    font-weight:600;
    font-size:15px;
    color:var(--sg-ink);
    text-decoration:none;
    position:relative;
    padding-bottom:3px;
  }
  .signal-section .cta::after{
    content:"";
    position:absolute;
    left:0; bottom:0;
    width:100%; height:2px;
    background:linear-gradient(90deg,var(--sg-cyan),var(--sg-magenta));
    transform-origin:left;
    transition:transform .35s ease;
  }
  .signal-section .cta:hover::after{ transform:scaleX(1.15); }
  .signal-section .cta svg{ transition:transform .3s ease; }
  .signal-section .cta:hover svg{ transform:translateX(4px); }

  /* map */
  .signal-section .map-wrap{
    position:relative;
    width:100%;
    background:
      radial-gradient(circle at 50% 45%, rgba(0,194,255,.05), transparent 60%);
  }
  .signal-section .map-canvas{
    position:relative;
    width:100%;
    aspect-ratio: 784.077 / 458.627;
  }
  .signal-section .world-dots{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    display:block;
  }

  .signal-section .pin{
    position:absolute;
    display:flex; align-items:center; gap:7px;
    background:#fff;
    border:1px solid var(--sg-hairline);
    padding:7px 12px 7px 10px;
    border-radius:999px;
    font-family:'Space Grotesk', sans-serif;
    font-weight:600;
    font-size:13px;
    box-shadow:0 8px 20px -10px rgba(11,11,16,.18);
    white-space:nowrap;
    z-index:3;
  }
  .signal-section .pin .flag{ font-size:15px; line-height:1; }

  .signal-section .anchor{
    position:absolute;
    width:8px; height:8px;
    border-radius:50%;
    background:var(--sg-ink);
    z-index:3;
  }
  .signal-section .anchor::before{
    content:"";
    position:absolute;
    inset:-8px;
    border-radius:50%;
    border:1.4px solid var(--sg-magenta);
    animation: sg-ring 1.9s ease-out infinite;
  }
  @keyframes sg-ring{
    0%{ transform:scale(.4); opacity:.9; }
    100%{ transform:scale(2.3); opacity:0; }
  }

  .signal-section .pulse-line{
    position:absolute;
    width:34%;
    height:26%;
    z-index:2;
    overflow:visible;
    pointer-events:none;
  }
  .signal-section .pulse-line path{
    fill:none;
    stroke:url(#lineGrad);
    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
    stroke-dasharray: 6 7;
    animation: sg-travel 3s linear infinite;
    opacity:.9;
  }
  @keyframes sg-travel{ to{ stroke-dashoffset:-260; } }

  @media (max-width: 980px){
    .signal-section.hero{ grid-template-columns:1fr; padding:70px 24px; }
    .signal-section h1{ font-size:38px; }
  }
</style>

<!-- ============ SIGNAL / MAP SECTION ============ -->
<section class="signal-section hero">
  <div>
    <div class="eyebrow">
      <span class="dot-pulse"></span>
      <span class="mono"><?php echo e($eyebrow_text); ?></span>
    </div>
    <h1><?php echo $headline_html; ?></h1>
    <?php foreach ($paragraphs as $para): ?>
    <p><?php echo e($para); ?></p>
    <?php endforeach; ?>
    <a class="cta" href="<?php echo e($cta_href); ?>"><?php echo e($cta_text); ?>
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
  </div>

  <div class="map-wrap">
    <div class="map-canvas">
      <svg class="world-dots" viewBox="30.767 241.591 784.077 458.627" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
</svg>
      <svg class="pulse-line" style="left:37%; top:38%;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <linearGradient id="lineGrad" x1="0" y1="0" x2="1" y2="0">
            <stop offset="0%" stop-color="#00c2ff"/>
            <stop offset="100%" stop-color="#ff2e92"/>
          </linearGradient>
        </defs>
        <path d="M 0 62 L 20 62 L 26 40 L 34 78 L 40 62 L 55 62 L 61 30 L 68 88 L 74 62 L 100 62"/>
      </svg>
      <div class="anchor" style="left:<?php echo $marker['left']; ?>%; top:<?php echo $marker['top']; ?>%;"></div>
      <div class="pin" style="left:<?php echo $marker['left']; ?>%; top:<?php echo $marker['top'] + 9; ?>%;"><span class="flag"><?php echo $marker['flag']; ?></span><?php echo e($marker['label']); ?></div>
    </div>
  </div>
</section>

</main>

<script src="https://unpkg.com/three@0.158.0/build/three.min.js"></script>
<script data-purpose="interactive-enhancements">
    gsap.registerPlugin(ScrollTrigger);

    class WebGLShader extends HTMLElement {
      constructor() {
        super();
        this.attachShadow({ mode: 'open' });
      }

      async connectedCallback() {
        const src = this.getAttribute('src');
        if (!src) return;

        const container = document.createElement('div');
        container.style.width = '100%';
        container.style.height = '100%';
        container.style.position = 'relative';
        this.shadowRoot.appendChild(container);

        const canvas = document.createElement('canvas');
        canvas.style.display = 'block';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        container.appendChild(canvas);

        const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
        const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
        const scene = new THREE.Scene();

        const geometry = new THREE.PlaneGeometry(2, 2);
        const uniforms = {
          u_time: { value: 0 },
          u_resolution: { value: new THREE.Vector2() },
          u_mouse: { value: new THREE.Vector2() }
        };

        const material = new THREE.ShaderMaterial({
          uniforms,
          vertexShader: `
            varying vec2 v_texCoord;
            void main() {
              v_texCoord = uv;
              gl_Position = vec4(position, 1.0);
            }
          `,
          fragmentShader: src
        });

        const mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);

        const resize = () => {
          const width = container.clientWidth;
          const height = container.clientHeight;
          renderer.setSize(width, height, false);
          uniforms.u_resolution.value.set(width, height);
        };

        window.addEventListener('resize', resize);
        resize();

        const animate = (time) => {
          uniforms.u_time.value = time * 0.001;
          renderer.render(scene, camera);
          requestAnimationFrame(animate);
        };
        requestAnimationFrame(animate);
      }
    }
    customElements.define('webgl-shader', WebGLShader);

    /* ============================================================
       Hero — fade out smoothly as the user scrolls past it, instead
       of just being cut off by the next section.
       ============================================================ */
    (function initHeroFade() {
      const hero = document.getElementById('hero-fade-wrap');
      const servicesHeading = document.querySelector('.strata-services h2.big');
      if (!hero) return;
      gsap.to(hero, {
        opacity: 0,
        y: -60,
        ease: 'none',
        scrollTrigger: {
          trigger: hero,
          start: 'top top',
          endTrigger: servicesHeading || hero,
          end: servicesHeading ? 'top 90%' : 'bottom top',
          scrub: true
        }
      });
    })();

    /* ============================================================
       Services block — ported from STRATA script.js
       (reveal-on-scroll + orbit navigator + card tilt)
       ============================================================ */
    document.querySelectorAll('.strata-services .reveal').forEach((el) => {
      gsap.to(el, {
        opacity: 1, y: 0, duration: 1, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 85%' }
      });
    });

    document.querySelectorAll('.strata-services [data-tilt]').forEach((card) => {
      card.addEventListener('mousemove', (e) => {
        const r = card.getBoundingClientRect();
        card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
        card.style.setProperty('--my', (e.clientY - r.top) + 'px');
      });
    });

    (function initOrbit() {
      const services = window.SITE_SERVICES || [];
      if (!services.length) return;

      const dotsG = document.getElementById('orbitDots');
      const svg = document.getElementById('orbitSvg');
      const progress = document.getElementById('orbitProgress');
      const CIRC = 1106; // 2 * PI * 176
      const N = services.length;
      const R = 176, CX = 200, CY = 200;

      services.forEach((s, i) => {
        const ang = (i / N) * Math.PI * 2 - Math.PI / 2;
        const dx = CX + R * Math.cos(ang), dy = CY + R * Math.sin(ang);
        const c = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
        c.setAttribute('cx', dx); c.setAttribute('cy', dy);
        c.setAttribute('r', i === 0 ? 5 : 3.4);
        c.classList.add('orbit-dot');
        if (i === 0) c.classList.add('active');
        c.dataset.index = i;
        dotsG.appendChild(c);
      });

      let current = 0;
      let autoTimer;

      function renderOrbit(index, animateProgress = true) {
        const s = services[index];
        document.getElementById('orbitIcon').innerHTML = `<svg viewBox="0 0 24 24">${s.icon}</svg>`;
        document.getElementById('orbitTitle').textContent = s.title;
        document.getElementById('orbitDesc').textContent = s.desc;
        document.getElementById('orbitCount').textContent = String(index + 1).padStart(2, '0');

        document.querySelectorAll('.orbit-dot').forEach((d, i) => {
          d.classList.toggle('active', i === index);
          gsap.to(d, { attr: { r: i === index ? 5 : 3.4 }, duration: .3 });
        });
        document.querySelectorAll('#orbitList button').forEach((b, i) => b.classList.toggle('active', i === index));

        const target = CIRC - (CIRC / N) * (index + 1);
        if (animateProgress) {
          gsap.to(progress, { strokeDashoffset: target, duration: .8, ease: 'power2.out' });
        } else {
          progress.style.strokeDashoffset = target;
        }
        gsap.fromTo('#orbitTitle', { opacity: 0, y: 8 }, { opacity: 1, y: 0, duration: .4 });
        gsap.fromTo('#orbitDesc', { opacity: 0 }, { opacity: 1, duration: .5, delay: .05 });
        gsap.fromTo('#orbitIcon', { opacity: 0, scale: .8 }, { opacity: 1, scale: 1, duration: .4 });
      }
      renderOrbit(0, false);
      gsap.set(progress, { strokeDashoffset: CIRC - (CIRC / N) });

      function goTo(index, restartAuto = true) {
        current = ((index % N) + N) % N;
        renderOrbit(current);
        if (restartAuto) resetAutoRotate();
      }

      function resetAutoRotate() {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => goTo(current + 1, false), 5000);
      }
      resetAutoRotate();

      document.querySelectorAll('#orbitList button').forEach((btn) => {
        btn.addEventListener('click', () => goTo(parseInt(btn.dataset.index, 10)));
      });
      document.querySelectorAll('.orbit-dot').forEach((dot) => {
        dot.addEventListener('click', () => goTo(parseInt(dot.dataset.index, 10)));
      });

      // Drag to rotate
      let dragging = false, lastAngle = 0, dragAccum = 0;
      function angleFromEvent(e) {
        const r = svg.getBoundingClientRect();
        const cx = r.left + r.width / 2, cy = r.top + r.height / 2;
        const px = (e.touches ? e.touches[0].clientX : e.clientX);
        const py = (e.touches ? e.touches[0].clientY : e.clientY);
        return Math.atan2(py - cy, px - cx);
      }
      function dragStart(e) { dragging = true; lastAngle = angleFromEvent(e); dragAccum = 0; clearInterval(autoTimer); }
      function dragMove(e) {
        if (!dragging) return;
        const a = angleFromEvent(e);
        let diff = a - lastAngle;
        if (diff > Math.PI) diff -= Math.PI * 2;
        if (diff < -Math.PI) diff += Math.PI * 2;
        dragAccum += diff;
        lastAngle = a;
        const step = Math.PI * 2 / N;
        if (Math.abs(dragAccum) > step * 0.6) {
          goTo(current + (dragAccum > 0 ? 1 : -1), false);
          dragAccum = 0;
        }
      }
      function dragEnd() { dragging = false; resetAutoRotate(); }
      svg.addEventListener('mousedown', dragStart);
      window.addEventListener('mousemove', dragMove);
      window.addEventListener('mouseup', dragEnd);
      svg.addEventListener('touchstart', dragStart, { passive: true });
      window.addEventListener('touchmove', dragMove, { passive: true });
      window.addEventListener('touchend', dragEnd);

      // Wheel to rotate
      let wheelLock = false;
      const stage = document.getElementById('orbitStage');
      stage.addEventListener('wheel', (e) => {
        e.preventDefault();
        if (wheelLock) return;
        wheelLock = true;
        goTo(current + (e.deltaY > 0 ? 1 : -1));
        setTimeout(() => wheelLock = false, 260);
      }, { passive: false });
    })();

    /* ============================================================
       About Company section — entrance animation (GSAP + ScrollTrigger,
       both already loaded above). Degrades to instant-visible if
       GSAP is somehow unavailable.
       ============================================================ */
    (function initAbout() {
      const section = document.getElementById('about');
      if (!section) return;

      const heading = section.querySelector('.about-heading');
      const desc = section.querySelector('.about-desc');
      const cta = section.querySelector('.about-cta');
      const visual = section.querySelector('.about-visual');

      if (typeof gsap === 'undefined') {
        [heading, desc, cta, visual].forEach((el) => { if (el) el.style.opacity = 1; });
        return;
      }

      gsap.timeline({
        scrollTrigger: { trigger: section, start: 'top 75%', once: true },
        defaults: { ease: 'power3.out' }
      })
        .fromTo(heading, { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: .8 })
        .fromTo(desc, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: .7 }, '-=.5')
        .fromTo(cta, { scale: .92, opacity: 0 }, { scale: 1, opacity: 1, duration: .5 }, '-=.3')
        .fromTo(visual, { x: 60, opacity: 0 }, { x: 0, opacity: 1, duration: 1 }, '-=.9');
    })();
  </script>
</body>
</html>