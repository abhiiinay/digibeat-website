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

// Add this here 👇
function youtube_id($url) {
    if ($url && preg_match('/(?:youtube\.com\/embed\/|youtu\.be\/|v=)([A-Za-z0-9_-]{11})/', $url, $m)) {
        return $m[1];
    }
    return null;
}

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
$ctaLabel    = '';

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
        'id'       => 'northwind',
        'photo'    => '/digibeat/assets/images/br.png',
        'quote'    => 'Digibeat didn\'t just build what we asked for — they questioned the brief until it was worth building. Launch week was the calmest release we\'ve ever had.',
        'name'     => 'Amelia Cross',
        'title'    => 'VP Product, Northwind',
        'accent'   => 'purple',
        'tag'      => 'PRODUCT · SAAS',
        'tagline'  => 'Transforming legacy software into a performant cloud-native workspace.',
        'video'    => '',
        'challenge'=> 'Northwind faced scaling bottlenecks, outdated UX flows, and heavy code debt that resulted in customer drop-offs and complex feature releases.',
        'solution' => [
            'Conducted a detailed <b>UX mapping audit</b> to streamline friction points',
            'Implemented a modern component-driven system utilizing <b>Inter & Space Grotesk</b>',
            'Rebuilt backend integration layers for <b>sub-second API queries</b>'
        ],
        'results'  => [
            'Decreased code release cycle times by over <b>45%</b>',
            'Increased active user workspace engagement by <b>30%</b>',
            'Zero critical issues or downtime recorded during release week'
        ],
        'metrics'  => [
            ['val' => '45%', 'lbl' => 'Release Speed'],
            ['val' => '30%', 'lbl' => 'Engagement'],
            ['val' => '100%', 'lbl' => 'Release Uptime']
        ]
    ],
    [
        'id'       => 'loomstate',
        'photo'    => '',
        'quote'    => 'One team, start to finish. No hand-offs, no re-explaining the brief to a new face every two weeks. That alone was worth switching agencies for.',
        'name'     => 'Daniel Ferreira',
        'title'    => 'Founder, Loomstate',
        'accent'   => 'navy',
        'tag'      => 'COMMERCE · DIGITAL',
        'tagline'  => 'A cohesive design-to-engineering workflow for a headless e-commerce store.',
        'video' => 'assets/bg-video.mp4',
        'challenge'=> 'Loomstate was struggling with traditional agency workflows where key design details and UI logic got lost during the design-to-development hand-off phase.',
        'solution' => [
            'Unified designers and developers into a <b>single collaborative squad</b>',
            'Created a strict <b>Figma-to-Code design token standard</b>',
            'Deployed a fast headless web layout using modern responsive architectures'
        ],
        'results'  => [
            'Bypassed the usual agency hand-off delays and shipped <b>4 weeks early</b>',
            'Reduced post-implementation design discrepancies to <b>less than 2%</b>',
            'Delivered an exceptionally smooth product browsing experience'
        ],
        'metrics'  => [
            ['val' => '4 wks', 'lbl' => 'Ahead of plan'],
            ['val' => '<2%', 'lbl' => 'UI Deviations'],
            ['val' => '100%', 'lbl' => 'Unified workflow']
        ]
    ],
    [
        'id'       => 'fielding',
        'photo'    => 'https://i.pravatar.cc/150?img=47',
        'quote'    => 'The kind of partner who tells you when your idea is wrong before you spend the budget on it. Our conversion rate is still climbing four months post-launch.',
        'name'     => 'Priya Nandakumar',
        'title'    => 'Head of Growth, Fielding & Co.',
        'accent'   => 'mint',
        'tag'      => 'GROWTH · OPTIMIZATION',
        'tagline'  => 'Persistent landing experience optimization and checkout refinement.',
        'video'    => 'https://assets.mixkit.co/videos/preview/mixkit-business-charts-on-a-tablet-screen-40361-large.mp4',
        'challenge'=> 'Fielding & Co. was getting high inbound traffic but faced low sign-up rates due to a complex checkout pipeline and lack of page optimization.',
        'solution' => [
            'Conducted intensive <b>funnel mapping</b> and user-session testing',
            'Deployed modular <b>landing page variants</b> built for speed and clarity',
            'Optimized loading performance and script execution schedules'
        ],
        'results'  => [
            'Increased sign-up conversion rate by <b>2.4x</b> in 60 days',
            'Maintained steady growth in customer retention metrics',
            'Achieved a Lighthouse performance rating of <b>98+</b>'
        ],
        'metrics'  => [
            ['val' => '2.4x', 'lbl' => 'Conversion Rate'],
            ['val' => '98+', 'lbl' => 'Lighthouse score'],
            ['val' => '60d', 'lbl' => 'Payback window']
        ]
    ],
      [
        'id'       => 'sewq',
        'photo'    => '/digibeat/assets/images/br.png',
        'quote'    => 'Digibeat didn\'t just build what we asked for — they questioned the brief until it was worth building. Launch week was the calmest release we\'ve ever had.',
        'name'     => 'tyr',
        'title'    => 'VP Product, Northwind',
        'accent'   => 'purple',
        'tag'      => 'PRODUCT · SAAS',
        'tagline'  => 'Transforming legacy software into a performant cloud-native workspace.',
        'video'    => '',
        'challenge'=> 'Northwind faced scaling bottlenecks, outdated UX flows, and heavy code debt that resulted in customer drop-offs and complex feature releases.',
        'solution' => [
            'Conducted a detailed <b>UX mapping audit</b> to streamline friction points',
            'Implemented a modern component-driven system utilizing <b>Inter & Space Grotesk</b>',
            'Rebuilt backend integration layers for <b>sub-second API queries</b>'
        ],
        'results'  => [
            'Decreased code release cycle times by over <b>45%</b>',
            'Increased active user workspace engagement by <b>30%</b>',
            'Zero critical issues or downtime recorded during release week'
        ],
        'metrics'  => [
            ['val' => '45%', 'lbl' => 'Release Speed'],
            ['val' => '30%', 'lbl' => 'Engagement'],
            ['val' => '100%', 'lbl' => 'Release Uptime']
        ]
    ],
];


// Add / edit clients here — name is used for the alt text only.
$clients = [
    ['name' => 'ZeeQue Preschool',                    'logo' => 'assets/clients/zeeque-preschool.png'],
    ['name' => 'Markaz',                               'logo' => 'assets/clients/markaz.png'],
    ['name' => 'Utthan',                                'logo' => 'assets/clients/utthan.png'],
    ['name' => 'BMH',                                   'logo' => 'assets/clients/bmh.png'],
    ['name' => 'Edhini Ayurveda',                       'logo' => 'assets/clients/edhini-ayurveda.png'],
    ['name' => 'ALA BMCON',                             'logo' => 'assets/clients/ala-bmcon.png'],
    ['name' => 'Dr. Alk',                               'logo' => 'assets/clients/dr-alk.png'],
    ['name' => 'Prime Ston',                            'logo' => 'assets/clients/prime-ston.png'],
    ['name' => 'Gulf Decorex',                          'logo' => 'assets/clients/gulf-decorex.png'],
    ['name' => 'Medichem Disinfectant Industries',      'logo' => 'assets/clients/medichem.png'],
    ['name' => "Dr. Sameeha's Homoeo Home",             'logo' => 'assets/clients/homoeo-home.png'],
    ['name' => 'Gurudeva Charitable Trust',             'logo' => 'assets/clients/gurudeva-trust.png'],
    ['name' => 'Sree Narayana Institute of Medical Sciences', 'logo' => 'assets/clients/sree-narayana-institute.png'],
    ['name' => 'Hulul Tech',                            'logo' => 'assets/clients/hulul-tech.png'],
    ['name' => 'Ayyoobi Educity',                       'logo' => 'assets/clients/ayyoobi-educity.png'],
    ['name' => 'Elite Mission Hospital',                'logo' => 'assets/clients/elite-mission-hospital.png'],
    ['name' => 'ph7 Indian Organic Spices',             'logo' => 'assets/clients/ph7-spices.png'],
    ['name' => 'AVP',                                   'logo' => 'assets/clients/avp.png'],
    ['name' => 'Tree Health Care',                      'logo' => 'assets/clients/tree-healthcare.png'],
    ['name' => 'Jajini',                      'logo' => 'assets/clients/jajini.png'],
];

 
// Change this to your real "view all" page.
$view_all_url = '/clients.php';



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
    :root {
      --font-body: 'Hellix', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    body {
      background-color: #ececf0;
      color: #e4e1ea;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
      font-family: var(--font-body);
    }

    .gradient-text {
      background: linear-gradient(135deg, #4cd6ff 0%, #ffffff 50%, #ecb2ff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .glass-card {
      background: rgba(31, 31, 38, 0.4);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.05);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .glass-card:hover {
      background: rgba(31, 31, 38, 0.6);
      border-color: rgba(76, 214, 255, 0.3);
      transform: translateX(8px);
    }

    @media (max-width: 767px) {
      .glass-card:hover {
        transform: none;
      }
    }

    .nav-link {
      @apply text-sm font-medium text-white/70 hover:text-white transition-colors;
    }

    .nav-link.active {
      @apply text-sm font-semibold text-white;
    }

    .nav-icon {
      @apply text-white text-[1.15rem] leading-none;
    }

    .nav-action {
      @apply inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent text-white/90 transition-all hover:text-white hover:bg-white/5;
    }

    .nav-action:hover .nav-icon {
      color: #ffffff;
    }

    .icon-container {
      background: rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .vertical-text {
      writing-mode: vertical-rl;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      transform: rotate(180deg);
      color: #666;
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
      box-shadow: 0 0 18px rgba(168,85,247,0.45), 0 0 30px rgba(76,214,255,0.3);
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
      background-color: #ececf0;
    }
    .hero-gradient-text {
      background: linear-gradient(135deg, #0f172a 0%, #312e81 50%, #4f46e5 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    #hero-fade-wrap {
      will-change: opacity, transform;
    }

    /* ============================================================
       Hero visual — Neural Signal: gradient blobs + fine grid +
       canvas particle constellation, replacing the stock video.
       ============================================================ */
   .hero-visual { overflow: hidden; }

    .hero-visual__canvas {
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      display: block;
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
      --st-black:#000000;
      --st-line:rgba(255,255,255,0.09);
      --st-line-strong:rgba(255,255,255,0.22);
      --st-gray:#bfbfbf;
      --st-gray-dim:#7a7a7a;
      --st-accent:#4d7fff;
      --st-accent-soft:rgba(77,127,255,0.14);
      --st-display:'Inter', sans-serif;
      --st-body:var(--font-body);
      --st-mono:'JetBrains Mono', monospace;
      --st-ease:cubic-bezier(.16,.84,.44,1);
      position:relative;
      padding:180px 0 120px;
      background:#000000;
    }
    /* Orbit ("What we do") and Capabilities are now two separate
       <section> elements — tune their own top/bottom spacing so
       there's real, deliberate space between them (the orbit-count
       label also hangs 40px below the orbit stage, so the next
       section needs enough top padding to clear it). */
    .strata-services#services{
      padding:180px 0 80px;
      background:#000000;
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
      color:#fff;
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
    .strata-services .orbit-list button.active{color:#fff;}
    .strata-services .orbit-list button .idx{font-size:11px;opacity:.6;}

    .strata-services .orbit-stage{
      position:relative;aspect-ratio:1/1;display:flex;align-items:center;justify-content:center;
      user-select:none;touch-action:none;
    }
    .strata-services .orbit-stage svg{width:100%;height:100%;overflow:visible;cursor:grab;}
    .strata-services .orbit-stage svg:active{cursor:grabbing;}
    .strata-services .orbit-ring-static{fill:none;stroke:var(--st-line);stroke-width:1;}
    .strata-services .orbit-ring-progress{fill:none;stroke:#fff;stroke-width:1;stroke-linecap:round;transition:stroke-dashoffset .1s linear;}
    .strata-services .orbit-dot{fill:#fff;transition:fill .3s,r .3s;cursor:pointer;}
    .strata-services .orbit-dot.active{fill:var(--st-accent);}
    .strata-services .orbit-center{
      position:absolute;text-align:center;pointer-events:none;
      width:60%;
    }
    .strata-services .orbit-icon{width:52px;height:52px;margin:0 auto 22px;display:flex;align-items:center;justify-content:center;}
    .strata-services .orbit-icon svg{width:100%;height:100%;stroke:#fff;fill:none;stroke-width:1.2;}
    .strata-services .orbit-title{font-family:var(--st-display);font-size:24px;font-weight:600;margin-bottom:10px;color:#fff;}
    .strata-services .orbit-desc{font-family:var(--st-body);font-size:13px;color:var(--st-gray-dim);line-height:1.6;}
    .strata-services .orbit-count{position:absolute;bottom:-40px;left:0;font-family:var(--st-mono);font-size:12px;color:var(--st-gray-dim);letter-spacing:.1em;}

    @media (max-width:900px){
      .strata-services .orbit-section-inner{grid-template-columns:1fr;}
      .strata-services .orbit-stage{max-width:340px;margin:60px auto 0;}
    }

    .strata-services .svc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--st-line);border:1px solid var(--st-line);margin-top:60px;}
    .strata-services .svc-card{
      background:#000;padding:44px 30px;position:relative;overflow:hidden;
      transition:transform .5s var(--st-ease),background .5s var(--st-ease);
    }
    .strata-services .svc-card::before{
      content:'';position:absolute;inset:0;
      background:radial-gradient(circle at var(--mx,50%) var(--my,50%), var(--st-accent-soft), transparent 60%);
      opacity:0;transition:opacity .4s ease;pointer-events:none;
    }
    .strata-services .svc-card:hover::before{opacity:1;}
    .strata-services .svc-card:hover{transform:translateY(-6px);background:#050505;}
    .strata-services .svc-num{font-family:var(--st-mono);font-size:12px;color:var(--st-gray-dim);}
    .strata-services .svc-icon{width:36px;height:36px;margin:24px 0;stroke:#fff;fill:none;stroke-width:1.1;}
    .strata-services .svc-card h3{font-family:var(--st-display);font-size:20px;font-weight:600;margin-bottom:12px;color:#fff;}
    .strata-services .svc-card p{color:var(--st-gray-dim);font-size:14px;line-height:1.7;font-family:var(--st-body);}
    @media (max-width:900px){.strata-services .svc-grid{grid-template-columns:1fr;}}

    /* ============================================================
       About Company section — inline, namespaced under .about-section
       so it can't clash with Tailwind or the strata-services styles
       above it. Uses plain CSS grid (no Bootstrap dependency).
       ============================================================ */
    .about-section {
      --about-bg: #000000;
      --about-white: #ffffff;
      --about-text-secondary: #a0aec0;
      --about-accent: #3d5afe;
      --about-accent-soft: rgba(61, 90, 254, 0.12);
      --about-border: rgba(255, 255, 255, 0.08);
      --about-display: 'Space Grotesk', sans-serif;
      --about-body: 'Inter', sans-serif;
      --about-mono: 'IBM Plex Mono', monospace;
      --about-ease: cubic-bezier(.16, .84, .44, 1);

      position: relative;
      isolation: isolate;
      overflow: hidden;
      background: var(--about-bg);
      background-image: 
        radial-gradient(circle at 80% 50%, rgba(61, 90, 254, 0.12) 0%, transparent 60%),
        linear-gradient(rgba(255, 255, 255, 0.015) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.015) 1px, transparent 1px);
      background-size: 100% 100%, 32px 32px, 32px 32px;
      padding: 150px 0;
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
      gap: 80px;
      align-items: center;
    }

    /* Left column: copy */
    .about-eyebrow {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
    }
    .about-eyebrow__dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--about-accent);
      box-shadow: 0 0 10px var(--about-accent);
      animation: about-pulse 2s infinite;
    }
    @keyframes about-pulse {
      0%, 100% { opacity: 0.5; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.3); }
    }
    .about-eyebrow__text {
      font-family: var(--about-mono);
      font-size: 12px;
      letter-spacing: .25em;
      text-transform: uppercase;
      color: var(--about-accent);
      font-weight: 600;
    }

    .about-heading {
      font-family: var(--about-display);
      font-weight: 700;
      font-size: clamp(38px, 4.8vw, 62px);
      line-height: 1.08;
      letter-spacing: -0.02em;
      margin-bottom: 24px;
      color: var(--about-white);
    }
    .about-heading__accent {
      color: var(--about-accent);
      display: block;
    }

    .about-desc {
      font-size: 17px;
      line-height: 1.8;
      color: var(--about-text-secondary);
      max-width: 500px;
      margin-bottom: 40px;
    }

    .about-cta {
      position: relative;
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 16px 32px;
      background: var(--about-accent);
      border: 1px solid var(--about-accent);
      border-radius: 12px;
      color: var(--about-white);
      font-family: var(--about-body);
      font-weight: 600;
      font-size: 15px;
      text-decoration: none;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(61, 90, 254, 0.25);
      transition: background .3s var(--about-ease), border-color .3s var(--about-ease), box-shadow .3s var(--about-ease), transform .3s var(--about-ease);
    }
    .about-cta:hover {
      background: #2a4be5;
      border-color: #2a4be5;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(61, 90, 254, 0.4);
      color: var(--about-white);
    }
    .about-cta__icon {
      width: 16px;
      height: 16px;
      transition: transform .3s var(--about-ease);
    }
    .about-cta:hover .about-cta__icon {
      transform: translate(3px, -3px);
    }

    /* Right column: Interactive Node Cards */
    .about-pillar-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      perspective: 1000px;
    }

    .about-pillar-card {
      position: relative;
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 24px;
      padding: 28px;
      background: rgba(255, 255, 255, 0.015);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid var(--about-border);
      border-radius: 16px;
      cursor: pointer;
      transition: border-color .4s var(--about-ease), background .4s var(--about-ease), transform .4s var(--about-ease), box-shadow .4s var(--about-ease);
      transform-style: preserve-3d;
    }

    .about-pillar-card::before {
      content: '';
      position: absolute;
      inset: -1px;
      border-radius: 16px;
      background: linear-gradient(135deg, rgba(61, 90, 254, 0.4), transparent 40%);
      z-index: -1;
      opacity: 0;
      transition: opacity .4s var(--about-ease);
    }

    .about-pillar-card:hover {
      background: rgba(61, 90, 254, 0.03);
      border-color: rgba(61, 90, 254, 0.4);
      transform: translateY(-4px) translateZ(10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 30px rgba(61, 90, 254, 0.1);
    }

    .about-pillar-card:hover::before {
      opacity: 1;
    }

    .about-pillar-card__icon-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 56px;
      height: 56px;
      background: rgba(61, 90, 254, 0.08);
      border: 1px solid rgba(61, 90, 254, 0.2);
      border-radius: 12px;
      color: var(--about-accent);
      transition: transform .4s var(--about-ease), background .4s var(--about-ease), border-color .4s var(--about-ease), box-shadow .4s var(--about-ease);
    }

    .about-pillar-card:hover .about-pillar-card__icon-wrapper {
      transform: scale(1.1) rotate(5deg);
      background: var(--about-accent);
      color: var(--about-white);
      border-color: var(--about-accent);
      box-shadow: 0 0 20px rgba(61, 90, 254, 0.4);
    }

    .about-pillar-card__icon {
      width: 26px;
      height: 26px;
      stroke-width: 1.5;
    }

    .about-pillar-card__content {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .about-pillar-card__title-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .about-pillar-card__num {
      font-family: var(--about-mono);
      font-size: 11px;
      color: var(--about-accent);
      letter-spacing: 0.1em;
      opacity: 0.6;
    }

    .about-pillar-card__title {
      font-family: var(--about-display);
      font-size: 20px;
      font-weight: 600;
      color: var(--about-white);
      margin: 0;
    }

    .about-pillar-card__desc {
      font-size: 14px;
      line-height: 1.6;
      color: var(--about-text-secondary);
      margin: 0;
    }

    @media (max-width: 991.98px) {
      .about-row {
        grid-template-columns: 1fr;
        gap: 50px;
      }
      .about-section {
        padding: 100px 0;
      }
      .about-desc {
        max-width: 100%;
      }
    }

    @media (max-width: 575.98px) {
      .about-section {
        padding: 80px 0;
      }
      .about-heading {
        font-size: clamp(32px, 8vw, 44px);
      }
      .about-pillar-card {
        grid-template-columns: 1fr;
        gap: 16px;
        padding: 20px;
      }
      .about-pillar-card__icon-wrapper {
        width: 48px;
        height: 48px;
      }
      .about-pillar-card__icon {
        width: 22px;
        height: 22px;
      }
      .about-cta {
        width: 100%;
        justify-content: center;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .about-pillar-card { transition: none; }
      .about-pillar-card__icon-wrapper { transition: none; }
    }

    .clients-section {
    background: #ffffff;
    color: #0e0d0d;
    font-family: 'Inter', sans-serif;
    width: 100%;
    padding: 100px 0;
}

.clients-inner {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 40px;
}
 
    .clients-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 70px;
    }
 
    .clients-header h2 {
        font-size: 56px;
        font-weight: 600;
        margin: 0;
        line-height: 1.1;
    }
 
    .clients-header p {
        font-size: 24px;
        font-weight: 400;
        max-width: 480px;
        margin: 0;
        line-height: 1.4;
        color: #4a4a4a; 
    }
 
    .clients-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        row-gap: 32px;
        column-gap: 20px;
        margin-bottom: 60px;
    }
 
    .client-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90px;
    }
 
   .client-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    opacity: 0.9;
    transition: opacity 0.25s ease, transform 0.25s ease;
}

.client-logo img:hover {
    opacity: 1;
    transform: scale(1.05);
}
 
    .clients-cta {
        display: flex;
        justify-content: center;
    }
 
    .clients-cta a {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #111;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
        border: 1px solid #111;
        padding: 16px 32px;
        transition: background 0.25s ease, color 0.25s ease;
    }
 
    .clients-cta a:hover {
    background: #111;       /* was #fff */
    color: #fff;             /* was #000 */
}
 
    .clients-cta a svg {
        width: 16px;
        height: 16px;
        transition: transform 0.25s ease;
    }
 
    .clients-cta a:hover svg {
        transform: translateX(4px);
    }
 
    @media (max-width: 992px) {
        .clients-grid { grid-template-columns: repeat(3, 1fr); }
    }
 
    @media (max-width: 600px) {
        .clients-section { padding: 60px 24px; }
        .clients-header h2 { font-size: 40px; }
        .clients-header p { font-size: 18px; }
        .clients-grid { grid-template-columns: repeat(2, 1fr); row-gap: 28px; }
    }
  </style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>

<body class="min-h-screen flex flex-col relative overflow-x-hidden" style="background:#ffffff;">
  <div id="cr-header-wrap"><?php include 'header.php'; ?></div>

<!-- =========================================================
     HERO SECTION — WHITE · MODERN · INTER · ANIMATED
========================================================= -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

  /* ── Hero root ── */
  .dh {
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding: 100px 0 0;
  }

  /* ── Dot-grid background ── */
  .dh::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, #d1d5db 1.5px, transparent 1.5px);
    background-size: 32px 32px;
    opacity: 0.5;
    z-index: 0;
    pointer-events: none;
  }

  /* ── Gradient vignette to fade dots toward centre ── */
  .dh::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 75% 70% at 50% 50%, #ffffff 35%, transparent 100%);
    z-index: 1;
    pointer-events: none;
  }

  /* ── Accent blobs ── */
  .dh-blobs {
    position: absolute;
    inset: 0;
    z-index: 2;
    pointer-events: none;
    overflow: hidden;
  }
  .dh-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(90px);
    opacity: 0.1;
    animation: blobDrift 20s ease-in-out infinite alternate;
  }
  .dh-blob--1 { width: 560px; height: 560px; background: #6366f1; top: -160px; left: -120px; animation-delay: 0s; }
  .dh-blob--2 { width: 420px; height: 420px; background: #0ea5e9; bottom: -60px; right: -80px; animation-delay: -8s; }
  .dh-blob--3 { width: 300px; height: 300px; background: #22d3ee; top: 38%; left: 52%; animation-delay: -14s; }
  @keyframes blobDrift {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(28px, -28px) scale(1.05); }
    100% { transform: translate(-18px, 18px) scale(0.96); }
  }

  /* ── Inner wrapper ── */
  .dh-wrap {
    position: relative;
    z-index: 10;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 48px 80px;
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 64px;
    align-items: center;
    width: 100%;
  }

  /* ── LEFT COLUMN ── */
  .dh-copy { display: flex; flex-direction: column; align-items: flex-start; }

  /* Status pill */
  .dh-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px 6px 10px;
    border: 1.5px solid #e5e7eb;
    border-radius: 100px;
    background: #f9fafb;
    font-size: 12px;
    font-weight: 600;
    color: #374151;
    letter-spacing: 0.02em;
    margin-bottom: 36px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    opacity: 0;
    transform: translateY(12px);
    animation: dhFadeUp 0.6s cubic-bezier(0.16,1,0.3,1) 0.1s forwards;
  }
  .dh-pill-dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #22c55e;
    animation: dhPing 1.8s ease-in-out infinite;
  }
  @keyframes dhPing {
    0%, 100% { box-shadow: 0 0 0 3px rgba(34,197,94,0.2); }
    50%       { box-shadow: 0 0 0 6px rgba(34,197,94,0.05); }
  }

  /* Headline */
  .dh-h1 {
    font-size: clamp(40px, 5.5vw, 74px);
    font-weight: 800;
    line-height: 1.06;
    letter-spacing: -0.04em;
    color: #0f172a;
    margin: 0 0 26px;
    opacity: 0;
    transform: translateY(20px);
    animation: dhFadeUp 0.75s cubic-bezier(0.16,1,0.3,1) 0.25s forwards;
  }
  .dh-h1 .dh-word--accent {
    position: relative;
    display: inline-block;
  }
  .dh-h1 .dh-word--accent::after {
    content: '';
    position: absolute;
    left: 0; bottom: 2px;
    height: 7px;
    width: 0;
    background: linear-gradient(90deg, #818cf8, #22d3ee);
    border-radius: 4px;
    z-index: -1;
    animation: dhLineReveal 0.65s cubic-bezier(0.16,1,0.3,1) 1.1s forwards;
  }
  @keyframes dhLineReveal { to { width: 100%; } }
  .dh-grad {
    background: linear-gradient(135deg, #6366f1 0%, #0ea5e9 55%, #22d3ee 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* Sub */
  .dh-sub {
    font-size: 18px;
    font-weight: 400;
    line-height: 1.75;
    color: #64748b;
    max-width: 520px;
    margin: 0 0 44px;
    opacity: 0;
    transform: translateY(16px);
    animation: dhFadeUp 0.65s cubic-bezier(0.16,1,0.3,1) 0.42s forwards;
  }

  /* CTA row */
  .dh-actions {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    opacity: 0;
    transform: translateY(12px);
    animation: dhFadeUp 0.6s cubic-bezier(0.16,1,0.3,1) 0.58s forwards;
  }
  .dh-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    background: #0f172a;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    border-radius: 12px;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
    transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 4px 16px rgba(15,23,42,0.18);
  }
  .dh-btn-primary:hover { background: #1e293b; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(15,23,42,0.22); }
  .dh-btn-primary svg { width: 16px; height: 16px; transition: transform 0.2s; }
  .dh-btn-primary:hover svg { transform: translateX(3px); }

  .dh-btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 24px;
    border: 1.5px solid #e2e8f0;
    color: #374151;
    font-size: 15px;
    font-weight: 600;
    border-radius: 12px;
    text-decoration: none;
    background: #fff;
    font-family: 'Inter', sans-serif;
    transition: border-color 0.2s, color 0.2s, transform 0.2s;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
  }
  .dh-btn-ghost:hover { border-color: #6366f1; color: #6366f1; transform: translateY(-2px); }

  /* Client logos row */
  .dh-clients {
    margin-top: 52px;
    opacity: 0;
    transform: translateY(10px);
    animation: dhFadeUp 0.6s cubic-bezier(0.16,1,0.3,1) 0.78s forwards;
  }
  .dh-clients-label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #94a3b8;
    margin-bottom: 16px;
  }
  .dh-clients-logos {
    display: flex;
    align-items: center;
    gap: 28px;
    flex-wrap: wrap;
  }
  .dh-client-logo {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: -0.01em;
    color: #cbd5e1;
    transition: color 0.2s;
    white-space: nowrap;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
  }
  .dh-client-logo:hover { color: #94a3b8; }

  /* ── RIGHT COLUMN — Visual board ── */
  .dh-visual {
    position: relative;
    opacity: 0;
    animation: dhFadeIn 1s ease 0.55s forwards;
  }
  @keyframes dhFadeIn { to { opacity: 1; } }
  @keyframes dhFadeUp  { to { opacity: 1; transform: translateY(0); } }

  /* Main card */
  .dh-card-main {
    background: #fff;
    border: 1.5px solid #e5e7eb;
    border-radius: 24px;
    padding: 32px;
    box-shadow: 0 8px 48px rgba(0,0,0,0.07);
    position: relative;
    overflow: hidden;
    z-index: 2;
  }
  /* Spinning gradient border */
  .dh-card-main::before {
    content: '';
    position: absolute;
    inset: -2px;
    border-radius: 26px;
    background: conic-gradient(from var(--dh-angle, 0deg), #6366f1, #22d3ee, #6366f1);
    z-index: -1;
    animation: dhBorderSpin 5s linear infinite;
  }
  .dh-card-main::after {
    content: '';
    position: absolute;
    inset: 1.5px;
    border-radius: 22.5px;
    background: #fff;
    z-index: -1;
  }
  @property --dh-angle { syntax: '<angle>'; inherits: false; initial-value: 0deg; }
  @keyframes dhBorderSpin { to { --dh-angle: 360deg; } }

  .dh-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
    position: relative;
    z-index: 1;
  }
  .dh-card-title { font-size: 13px; font-weight: 700; color: #0f172a; }
  .dh-card-badge {
    display: inline-flex; align-items: center; gap: 5px;
    font-size: 11px; font-weight: 600; color: #16a34a;
    background: #dcfce7; padding: 3px 10px; border-radius: 100px;
  }
  .dh-card-badge-dot { width: 6px; height: 6px; border-radius: 50%; background: #22c55e; }

  /* Bar chart */
  .dh-bars {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    height: 76px;
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
  }
  .dh-bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    transform-origin: bottom;
    animation: dhGrowBar 1s cubic-bezier(0.34,1.56,0.64,1) var(--dd) forwards;
    transform: scaleY(0);
  }
  .dh-bar:nth-child(odd)  { background: linear-gradient(180deg, #6366f1, #818cf8); }
  .dh-bar:nth-child(even) { background: #e8eafd; }
  @keyframes dhGrowBar { to { transform: scaleY(1); } }

  .dh-card-stat { display: flex; justify-content: space-between; align-items: center; position: relative; z-index: 1; }
  .dh-stat-num { font-size: 28px; font-weight: 800; color: #0f172a; letter-spacing: -0.04em; line-height: 1; }
  .dh-stat-sub { font-size: 12px; color: #94a3b8; font-weight: 500; margin-top: 3px; }
  .dh-stat-delta {
    display: inline-flex; align-items: center; gap: 3px;
    font-size: 13px; font-weight: 700; color: #22c55e;
    background: #dcfce7; padding: 4px 10px; border-radius: 100px;
  }

  /* Floating metric cards */
  .dh-metric {
    position: absolute;
    background: #fff;
    border: 1.5px solid #e5e7eb;
    border-radius: 14px;
    padding: 12px 16px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    z-index: 5;
    display: flex;
    align-items: center;
    gap: 12px;
    white-space: nowrap;
    animation: dhFloatCard 6s ease-in-out infinite;
  }
  .dh-metric--1 { top: -32px; left: -44px; animation-delay: 0s; }
  .dh-metric--2 { bottom: 24px; right: -48px; animation-delay: -3s; }
  .dh-metric--3 { top: 46%; right: -54px; animation: dhFloatCard3 6.5s ease-in-out infinite; animation-delay: -5s; }
  @keyframes dhFloatCard  { 0%,100% { transform: translateY(0); }       50% { transform: translateY(-9px); } }
  @keyframes dhFloatCard3 { 0%,100% { transform: translateY(-50%); }    50% { transform: translateY(calc(-50% - 9px)); } }

  .dh-metric-icon {
    width: 34px; height: 34px; border-radius: 9px;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .dh-metric-icon svg { width: 17px; height: 17px; }
  .dh-metric-icon--purple { background: #ede9fe; color: #7c3aed; }
  .dh-metric-icon--blue   { background: #e0f2fe; color: #0284c7; }
  .dh-metric-icon--green  { background: #dcfce7; color: #16a34a; }
  .dh-metric-num { font-size: 16px; font-weight: 800; color: #0f172a; letter-spacing: -0.03em; line-height: 1; }
  .dh-metric-lbl { font-size: 11px; font-weight: 500; color: #94a3b8; margin-top: 2px; }

  /* Scroll cue */
  .dh-scroll {
    position: absolute;
    bottom: 90px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    opacity: 0;
    animation: dhFadeUp 0.5s ease 1.5s forwards;
  }
  .dh-scroll-label { font-size: 10px; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: #94a3b8; }
  .dh-scroll-mouse { width: 22px; height: 34px; border: 2px solid #cbd5e1; border-radius: 12px; display: flex; justify-content: center; padding-top: 5px; }
  .dh-scroll-wheel { width: 3px; height: 7px; background: #94a3b8; border-radius: 2px; animation: dhScrollWheel 1.6s ease-in-out infinite; }
  @keyframes dhScrollWheel { 0% { opacity:1; transform:translateY(0); } 100% { opacity:0; transform:translateY(10px); } }

  /* Ticker tape */
  .dh-ticker {
    position: relative;
    z-index: 10;
    width: 100%;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
    overflow: hidden;
    padding: 14px 0;
    margin-top: 0;
  }
  .dh-ticker-inner { display: flex; width: max-content; animation: dhTicker 30s linear infinite; }
  .dh-ticker-item {
    display: flex; align-items: center; gap: 12px;
    padding: 0 40px;
    font-size: 12px; font-weight: 600;
    color: #94a3b8;
    letter-spacing: 0.06em; text-transform: uppercase;
    white-space: nowrap;
    font-family: 'Inter', sans-serif;
  }
  .dh-ticker-dot { width: 4px; height: 4px; border-radius: 50%; background: #cbd5e1; flex-shrink: 0; }
  @keyframes dhTicker { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* ── Responsive ── */
  @media (max-width: 1024px) {
    .dh-wrap { grid-template-columns: 1fr; }
    .dh-visual { display: none; }
  }
  @media (max-width: 640px) {
    .dh-wrap { padding: 0 24px 60px; }
    .dh-sub { font-size: 16px; }
    .dh-actions { flex-direction: column; align-items: stretch; }
    .dh-btn-primary, .dh-btn-ghost { justify-content: center; }
  }
</style>

<section class="dh" id="home" aria-labelledby="dh-headline">

  <div class="dh-blobs" aria-hidden="true">
    <div class="dh-blob dh-blob--1"></div>
    <div class="dh-blob dh-blob--2"></div>
    <div class="dh-blob dh-blob--3"></div>
  </div>

  <div class="dh-wrap">

    <!-- LEFT: COPY -->
    <div class="dh-copy">

      <div class="dh-pill">
        <span class="dh-pill-dot"></span>
        Available for new projects &nbsp;·&nbsp; 2025
      </div>

      <h1 class="dh-h1" id="dh-headline">
        We&nbsp;<span class="dh-word--accent">engineer</span>&nbsp;digital<br>
        products&nbsp;that&nbsp;<span class="dh-grad">grow.</span>
      </h1>

      <p class="dh-sub">
        Digibeat is a full-service digital studio — strategy, design, engineering
        and growth under one roof. No hand-offs, no guesswork, just results.
      </p>

      <div class="dh-actions">
        <a href="/digibeat/contact" class="dh-btn-primary">
          Start a project
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="/digibeat/our-works" class="dh-btn-ghost">View our work</a>
      </div>
    </div>

    <!-- RIGHT: VISUAL -->
    <div class="dh-visual" aria-hidden="true">

      <div class="dh-metric dh-metric--1">
        <div class="dh-metric-icon dh-metric-icon--purple">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V9M10 19V4M16 19v-7M22 19H2"/></svg>
        </div>
        <div><div class="dh-metric-num">+184%</div><div class="dh-metric-lbl">Avg. traffic growth</div></div>
      </div>

      <div class="dh-metric dh-metric--2">
        <div class="dh-metric-icon dh-metric-icon--green">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <div><div class="dh-metric-num">120+</div><div class="dh-metric-lbl">Projects shipped</div></div>
      </div>

      <div class="dh-metric dh-metric--3">
        <div class="dh-metric-icon dh-metric-icon--blue">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
        </div>
        <div><div class="dh-metric-num">9 yrs</div><div class="dh-metric-lbl">In operation</div></div>
      </div>

      <div class="dh-card-main">
        <div class="dh-card-top">
          <div class="dh-card-title">Project performance</div>
          <div class="dh-card-badge"><span class="dh-card-badge-dot"></span>Live</div>
        </div>
        <div class="dh-bars">
          <div class="dh-bar" style="height:40%;--dd:0.7s"></div>
          <div class="dh-bar" style="height:65%;--dd:0.8s"></div>
          <div class="dh-bar" style="height:52%;--dd:0.9s"></div>
          <div class="dh-bar" style="height:82%;--dd:1.0s"></div>
          <div class="dh-bar" style="height:55%;--dd:1.1s"></div>
          <div class="dh-bar" style="height:92%;--dd:1.2s"></div>
          <div class="dh-bar" style="height:70%;--dd:1.3s"></div>
          <div class="dh-bar" style="height:100%;--dd:1.4s"></div>
        </div>
        <div class="dh-card-stat">
          <div>
            <div class="dh-stat-num">98.4%</div>
            <div class="dh-stat-sub">Client satisfaction</div>
          </div>
          <div class="dh-stat-delta">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
            +12.3%
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scroll cue -->
  <div class="dh-scroll" aria-hidden="true">
    <div class="dh-scroll-label">Scroll</div>
    <div class="dh-scroll-mouse"><div class="dh-scroll-wheel"></div></div>
  </div>

  <!-- Ticker tape -->
  <div class="dh-ticker">
    <div class="dh-ticker-inner">
      <?php
      $ticks = ['Web Development','Digital Marketing','Brand Identity','IT Solutions','UX Design','SEO Strategy','E-commerce','Cloud Hosting','Content Marketing','Web Hosting'];
      $double = array_merge($ticks, $ticks);
      foreach ($double as $t): ?>
        <div class="dh-ticker-item"><span class="dh-ticker-dot"></span><?= htmlspecialchars($t) ?></div>
      <?php endforeach; ?>
    </div>
  </div>

</section>
<!-- END HERO -->


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
  <div class="about-container">
    <div class="about-row">

      <!-- ============== LEFT COLUMN — copy ============== -->
      <div class="about-copy">
        <div class="about-eyebrow">
          <span class="about-eyebrow__dot"></span>
          <span class="about-eyebrow__text"><?php echo htmlspecialchars($aboutEyebrow); ?></span>
        </div>

        <h2 class="about-heading" id="about-heading">
          <?php echo htmlspecialchars($aboutHeadingLead); ?>
          <span class="about-heading__accent"><?php echo htmlspecialchars($aboutHeadingWord); ?></span>
        </h2>

        <p class="about-desc"><?php echo $aboutDescription; ?></p>

        <a class="about-cta" href="<?php echo htmlspecialchars($aboutCtaHref); ?>">
          <span><?php echo htmlspecialchars($aboutCtaLabel); ?></span>
          <svg class="about-cta__icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M7 17L17 7M7 7h10v10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>

      <!-- ============== RIGHT COLUMN — interactive cards ============== -->
      <div class="about-visual-col">
        <div class="about-pillar-grid">

          <!-- Card 01: Product Strategy -->
          <div class="about-pillar-card">
            <div class="about-pillar-card__icon-wrapper">
              <svg class="about-pillar-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                <path d="M20 20H4V4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 16.5L9.5 11L14 15.5L20 8.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 12.5V8.5H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-pillar-card__content">
              <div class="about-pillar-card__title-row">
                <h3 class="about-pillar-card__title">Product Strategy</h3>
                <span class="about-pillar-card__num">01 / ANALYSIS</span>
              </div>
              <p class="about-pillar-card__desc">Aligning business goals with user behavior to map out high-impact features that drive conversions and scalable product engagement.</p>
            </div>
          </div>

          <!-- Card 02: Crafted Experience -->
          <div class="about-pillar-card">
            <div class="about-pillar-card__icon-wrapper">
              <svg class="about-pillar-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 12L12 17L22 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-pillar-card__content">
              <div class="about-pillar-card__title-row">
                <h3 class="about-pillar-card__title">Crafted Experience</h3>
                <span class="about-pillar-card__num">02 / DESIGN</span>
              </div>
              <p class="about-pillar-card__desc">Creating gorgeous, bespoke user interfaces and micro-interactions that elevate brand perception, user trust, and visual wow-factor.</p>
            </div>
          </div>

          <!-- Card 03: Performance Engineering -->
          <div class="about-pillar-card">
            <div class="about-pillar-card__icon-wrapper">
              <svg class="about-pillar-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                <path d="M16 18L22 12L16 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 6L2 12L8 18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.5 4.5L10.5 19.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-pillar-card__content">
              <div class="about-pillar-card__title-row">
                <h3 class="about-pillar-card__title">Performance Engineering</h3>
                <span class="about-pillar-card__num">03 / CODE</span>
              </div>
              <p class="about-pillar-card__desc">Building super-fast, modular, and highly secure web products using advanced performance-optimized architectures and clean code.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>



<style>
    :root {
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
      --ts-display: 'Inter', sans-serif;
      --ts-script: 'Sora', cursive;
      --ts-body-font: var(--font-body);
      --ts-label: 'Poppins', sans-serif;
      --ts-ease: cubic-bezier(.16,.84,.44,1);
    }
    .testimonials-section {
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
.ts-cards-viewport {
  overflow: hidden;
  margin-bottom: 64px;
  background: transparent;
}
.ts-cards {
  display: flex;
  gap: 32px;
  transition: transform .5s var(--ts-ease);
  background: transparent;
}
.ts-card {
  flex: 0 0 calc((100% - 64px) / 3);
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 24px -10px rgba(11,20,55,0.15);
  cursor: pointer;
  transition: transform .4s var(--ts-ease), box-shadow .4s var(--ts-ease);
}
.ts-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 32px -10px rgba(11,20,55,0.2);
}
@media (max-width: 900px) {
  .ts-card { flex: 0 0 100%; }
}

.ts-card__media {
  position: relative;
  aspect-ratio: 4 / 3;
  overflow: hidden;
  background: #0b1437;
}
.ts-card__media video {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
  transition: transform .5s var(--ts-ease);
}

.ts-card:hover .ts-card__media video { transform: scale(1.05); }

.ts-card__media img {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
  transition: transform .5s var(--ts-ease);
}
.ts-card:hover .ts-card__media img { transform: scale(1.05); }

.ts-card__play {
  position: absolute; left: 18px; bottom: 18px;
  width: 44px; height: 44px; border-radius: 50%;
  background: rgba(255,255,255,0.92);
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 6px 18px rgba(0,0,0,0.25);
}
.ts-card__play svg { width: 16px; height: 16px; fill: var(--ts-navy); margin-left: 2px; }

.ts-card__body { padding: 26px 28px 30px; }

.ts-card__tag {
  display: block;
  font-family: var(--ts-label);
  font-size: 12px; font-weight: 700; letter-spacing: .08em;
  text-transform: uppercase;
  color: var(--ts-blue-1);
  margin-bottom: 12px;
}

.ts-card__name {
  font-family: var(--ts-display);
  font-size: 20px; font-weight: 700;
  color: var(--ts-navy);
  margin-bottom: 4px;
}

.ts-card__role {
  font-size: 13.5px;
  color: var(--ts-body);
  margin-bottom: 14px;
}

.ts-card__desc {
  font-size: 14.5px;
  line-height: 1.7;
  color: var(--ts-body);
}
    .ts-card--center .ts-card__role { color: rgba(255,255,255,0.55); }
 
   
 
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

    /* ================= TESTIMONIAL DRAWER (SLIDER) ================= */
    body.ts-lock { overflow: hidden; }

    .ts-overlay {
      position: fixed;
      inset: 0;
      background: rgba(11, 20, 55, 0.45);
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
      z-index: 1200;
    }
    .ts-overlay.is-open { opacity: 1; pointer-events: auto; }
.ts-drawer {
  position: fixed;
  top: 0; right: 0;
  height: 100%;
  width: 50%;
  background: #fff;
  z-index: 1201;
  transform: translateX(100%);
  transition: transform 0.35s cubic-bezier(.4,0,.2,1);
  box-shadow: -20px 0 60px rgba(11, 20, 55, 0.18);
  display: flex;
  flex-direction: column;
}
.ts-drawer.is-open { transform: translateX(0); }

.ts-drawer__scroll {
  flex: 1 1 auto;
  min-height: 0;
  overflow-y: auto;
  background: #ffffff;
}

.ts-drawer__topbar {
  position: sticky;
  top: 0;
  z-index: 6;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  padding: 14px var(--ts-drawer-pad, 40px);
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(11, 20, 55, 0.08);
}

.ts-drawer__close {
  width: 38px; height: 38px;
  flex-shrink: 0;
  border-radius: 50%;
  background: #ffffff;
  border: 1px solid rgba(11, 20, 55, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
}
.ts-drawer__close svg { width: 17px; height: 17px; stroke: var(--ts-navy); }
.ts-drawer__close:hover {
  background: #f4f5fa;
  border-color: var(--ts-blue-2);
  transform: scale(1.05);
}
.ts-drawer__close:hover svg { stroke: var(--ts-blue-2); }

.ts-drawer__progress {
  position: sticky;
  top: 66px;
  z-index: 6;
  height: 3px;
  width: 100%;
  background: rgba(11, 20, 55, 0.04);
}
.ts-drawer__progress-bar {
  height: 100%;
  width: 0%;
  background: var(--ts-blue-2);
  transition: width 0.1s linear;
  box-shadow: 0 0 8px rgba(61, 90, 254, 0.5);
}

/* Hero media now sits inline at the top of the scroll column,
   like the case-study drawer, instead of a fixed left panel */
.ts-drawer__hero {
  width: 100%;
  aspect-ratio: 16 / 10;
  background: #09090e;
  overflow: hidden;
  position: relative;
}
.ts-drawer__hero video,
.ts-drawer__hero img,
.ts-drawer__hero iframe {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border: 0;
}

.ts-drawer__body {
  padding: 32px var(--ts-drawer-pad, 40px) 40px;
}

.ts-drawer__footer {
  flex: 0 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 18px var(--ts-drawer-pad, 40px);
  background: #ffffff;
  border-top: 1px solid rgba(11, 20, 55, 0.08);
}
.ts-drawer__tag {
  display: inline-block;
  font-size: 13px;
  font-weight: 700;
  color: var(--ts-blue-2);
  margin-bottom: 12px;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__title {
  font-size: clamp(24px, 3vw, 32px);
  font-weight: 800;
  letter-spacing: -0.02em;
  line-height: 1.15;
  margin: 0 0 16px;
  color: var(--ts-navy);
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__tagline {
  font-size: 16px;
  color: var(--ts-body);
  line-height: 1.7;
  margin: 0 0 30px;
  font-family: 'Inter', sans-serif !important;
}

.ts-drawer__metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-bottom: 34px;
}
.ts-drawer__metric-card {
  background: rgba(61, 90, 254, 0.03);
  border: 1px solid rgba(61, 90, 254, 0.08);
  border-radius: 12px;
  padding: 16px 10px;
  text-align: center;
  transition: transform 0.3s ease, border-color 0.3s ease;
}
.ts-drawer__metric-card:hover {
  transform: translateY(-2px);
  border-color: rgba(61, 90, 254, 0.25);
  background: rgba(61, 90, 254, 0.05);
}
.ts-drawer__metric-val {
  font-family: 'Inter', sans-serif !important;
  font-size: 20px;
  font-weight: 800;
  color: var(--ts-blue-2);
  display: block;
  margin-bottom: 4px;
}
.ts-drawer__metric-lbl {
  font-family: 'Inter', sans-serif !important;
  font-size: 11px;
  color: var(--ts-body);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.02em;
}

.ts-drawer__quote-block {
  background: #f8fafc;
  border-left: 4px solid var(--ts-blue-2);
  padding: 22px 26px;
  border-radius: 0 16px 16px 0;
  margin-bottom: 34px;
}
.ts-drawer__quote-text {
  font-size: 16.5px;
  line-height: 1.75;
  color: var(--ts-navy);
  font-style: italic;
  margin-bottom: 14px;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__quote-author {
  font-size: 14.5px;
  font-weight: 700;
  color: var(--ts-navy);
  font-family: 'Inter', sans-serif !important;
}

.ts-drawer__section { margin-bottom: 32px; }
.ts-drawer__section:last-child { margin-bottom: 0; }
.ts-drawer__section h4 {
  font-size: 14px;
  font-weight: 800;
  color: var(--ts-navy);
  margin: 0 0 14px;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__section p {
  font-size: 15.5px;
  line-height: 1.75;
  color: var(--ts-body);
  margin: 0;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__section ul {
  margin: 0; padding-left: 0;
  display: flex; flex-direction: column; gap: 10px;
}
.ts-drawer__section li {
  font-size: 15.5px;
  line-height: 1.7;
  color: var(--ts-body);
  font-family: 'Inter', sans-serif !important;
  position: relative;
  padding-left: 18px;
  list-style: none;
}
.ts-drawer__section li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 9px;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: var(--ts-blue-2);
}
.ts-drawer__section li b { color: var(--ts-navy); font-weight: 700; }

.ts-drawer__visit {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 10px 18px;
  border-radius: 999px;
  background: #ffffff;
  color: var(--ts-blue-2);
  border: 1.5px solid var(--ts-blue-2);
  font-weight: 700;
  font-size: 13.5px;
  text-decoration: none;
  white-space: nowrap;
  transition: background 0.15s ease;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__visit:hover { background: rgba(79, 70, 255, 0.05); }
.ts-drawer__visit svg { width: 14px; height: 14px; stroke: var(--ts-blue-2); }

.ts-drawer__navgroup {
  display: flex;
  border: 1px solid rgba(11, 20, 55, 0.08);
  border-radius: 999px;
  overflow: hidden;
  flex-shrink: 0;
}
.ts-drawer__navicon {
  width: 44px; height: 44px;
  display: flex; align-items: center; justify-content: center;
  background: #fff;
  border: none;
  cursor: pointer;
  transition: background 0.15s ease;
}
.ts-drawer__navicon:first-child { border-right: 1px solid rgba(11, 20, 55, 0.08); }
.ts-drawer__navicon svg { width: 16px; height: 16px; stroke: var(--ts-blue-2); }
.ts-drawer__navicon:hover:not(:disabled) { background: #f4f5fa; }
.ts-drawer__navicon:disabled { opacity: 0.35; cursor: not-allowed; }
#ts-drawer-next { background: var(--ts-blue-2); }
#ts-drawer-next svg { stroke: #ffffff; }
#ts-drawer-next:hover:not(:disabled) { background: #2a4be5; }

.ts-drawer__footer-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 26px;
  background: var(--ts-blue-2);
  color: #fff !important;
  border: 1.5px solid var(--ts-blue-2);
  border-radius: 999px;
  font-weight: 700;
  font-size: 14px;
  text-decoration: none;
  transition: background 0.15s ease, border-color 0.15s ease, transform 0.15s ease;
  font-family: 'Inter', sans-serif !important;
}
.ts-drawer__footer-btn:hover {
  background: #2a4be5;
  border-color: #2a4be5;
  transform: translateY(-1px);
}

@media (max-width: 991.98px) {
  .ts-drawer { width: 70%; }
}
@media (max-width: 767.98px) {
  .ts-drawer { width: 100%; --ts-drawer-pad: 22px; }
}
    @media (max-width: 767.98px) {
      .ts-drawer { --ts-drawer-pad: 20px; }
      .ts-drawer__footer { flex-wrap: nowrap; }
    }
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
 
    <div class="ts-cards-viewport">
    <div class="ts-cards" id="tsCardsTrack">
   <?php foreach ($testimonials as $i => $t):
  $hasVideo = !empty($t['video']);
  $ytId     = $hasVideo ? youtube_id($t['video']) : null;
?>
<div class="ts-card ts-reveal" data-index="<?php echo $i; ?>">
  <div class="ts-card__media">
    <?php if ($ytId): ?>
      <img src="https://img.youtube.com/vi/<?php echo htmlspecialchars($ytId); ?>/hqdefault.jpg"
           alt="<?php echo htmlspecialchars($t['name']); ?>" loading="lazy">
      <span class="ts-card__play" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7L8 5z"/></svg>
      </span>
    <?php elseif ($hasVideo): ?>
      <video muted playsinline preload="metadata">
        <source src="<?php echo htmlspecialchars($t['video']); ?>#t=0.5" type="video/mp4">
      </video>
      <span class="ts-card__play" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7L8 5z"/></svg>
      </span>
    <?php else: ?>
      <img src="<?php echo htmlspecialchars($t['photo']); ?>" alt="<?php echo htmlspecialchars($t['name']); ?>" loading="lazy">
    <?php endif; ?>
  </div>
  <div class="ts-card__body">
    <span class="ts-card__tag"><?php echo htmlspecialchars($t['tag']); ?></span>
    <div class="ts-card__name"><?php echo htmlspecialchars($t['name']); ?></div>
    <div class="ts-card__role"><?php echo htmlspecialchars($t['title']); ?></div>
    <p class="ts-card__desc"><?php echo htmlspecialchars($t['tagline']); ?></p>
  </div>
</div>
<?php endforeach; ?>
    </div>
    </div>
 
   
 
    <div class="ts-nav">
      <button class="ts-nav__prev" id="tsPrev" aria-label="Previous testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button class="ts-nav__next" id="tsNext" aria-label="Next testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
      </button>
    </div>
 
</section>



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
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M13.5 3.5c2.5.5 4.5 2.5 5 5-2 4.5-5 7.5-8 9-1 .5-2-.5-1.5-1.5 1.5-3 4.5-6 9-8Z"/><path d="M14.5 4.8c-4.7 1.6-8.1 4.9-10 9.2-.2.5.1 1 .6 1.2l2 .6"/><path d="M9.3 15.8l-1.6 3.4c-.2.4-.7.5-1 .2l-1.1-1.1c-.3-.3-.2-.8.2-1l3.4-1.6"/><circle cx="15.3" cy="8.7" r="1.1"/></svg>';
        case 'heart':
            return '<svg viewBox="0 0 24 24" '.$common.'><path d="M12 20.5s-7-4.35-9.3-8.8C1.2 8.6 2.9 5.5 6 5c2-.3 3.6.7 6 3 2.4-2.3 4-3.3 6-3 3.1.5 4.8 3.6 3.3 6.7C19 16.15 12 20.5 12 20.5Z"/></svg>';
        default:
            return '';
    }
}
?>
<style>
  /* ===== THE DIGIBEAT DIFFERENCE — v5 ===== */
  .diff-section {
    background: #050508;
    position: relative;
    overflow: hidden;
    padding: 120px 80px;
  }
  .diff-section::before {
    content: "";
    position: absolute;
    top: -200px; left: -200px;
    width: 600px; height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(61,90,254,.18) 0%, transparent 70%);
    pointer-events: none;
  }
  .diff-section::after {
    content: "";
    position: absolute;
    bottom: -180px; right: -150px;
    width: 500px; height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(61,90,254,.12) 0%, transparent 70%);
    pointer-events: none;
  }
  .diff-inner {
    position: relative;
    z-index: 2;
    max-width: 1300px;
    margin: 0 auto;
  }
  .diff-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 72px;
    flex-wrap: wrap;
  }
  .diff-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: #3d5afe;
    margin-bottom: 18px;
  }
  .diff-eyebrow .eye-line {
    display: inline-block;
    width: 28px; height: 2px;
    background: #3d5afe;
    border-radius: 2px;
  }
  .diff-heading {
    font-family: 'Inter', 'Space Grotesk', sans-serif;
    font-size: 60px;
    font-weight: 800;
    line-height: 1.06;
    letter-spacing: -2px;
    color: #ffffff;
    margin: 0;
  }
  .diff-heading em { font-style: normal; color: #3d5afe; }
  .diff-sub {
    max-width: 400px;
    font-size: 16px;
    line-height: 1.75;
    color: rgba(255,255,255,.52);
    margin: 0;
    flex-shrink: 0;
  }
  .diff-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    background: rgba(255,255,255,.05);
    border-radius: 20px 20px 0 0;
    overflow: hidden;
  }
  .diff-card {
    background: #0c0c14;
    padding: 44px 36px;
    position: relative;
    transition: background .3s ease;
    cursor: default;
  }
  .diff-card:hover { background: #0f1020; }
  .diff-card::before {
    content: "";
    position: absolute;
    top: 0; left: 36px; right: 36px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #3d5afe, transparent);
    opacity: 0;
    transition: opacity .3s ease;
  }
  .diff-card:hover::before { opacity: 1; }
  .diff-num {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .12em;
    color: #3d5afe;
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .diff-num::after {
    content: "";
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, rgba(61,90,254,.4), transparent);
  }
  .diff-icon {
    width: 52px; height: 52px;
    border-radius: 14px;
    background: rgba(61,90,254,.12);
    border: 1px solid rgba(61,90,254,.25);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    color: #3d5afe;
    transition: background .3s, border-color .3s;
  }
  .diff-card:hover .diff-icon {
    background: rgba(61,90,254,.22);
    border-color: rgba(61,90,254,.55);
  }
  .diff-icon svg { width: 24px; height: 24px; }
  .diff-card h3 {
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 12px;
    letter-spacing: -.2px;
  }
  .diff-card p {
    font-size: 14.5px;
    line-height: 1.72;
    color: rgba(255,255,255,.48);
    margin: 0;
  }
  .diff-card.span2 {
    grid-column: span 2;
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  .diff-card.span2 .diff-card-body { flex: 1; }
  .diff-cta-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 22px;
    font-size: 14px;
    font-weight: 700;
    color: #3d5afe;
    text-decoration: none;
    letter-spacing: .02em;
    transition: gap .25s;
  }
  .diff-cta-link:hover { gap: 13px; }
  .diff-cta-link svg { width: 16px; height: 16px; }

  @media (max-width: 1024px) {
    .diff-section    { padding: 80px 40px; }
    .diff-heading    { font-size: 44px; }
    .diff-grid       { grid-template-columns: repeat(2, 1fr); }
    .diff-card.span2 { grid-column: span 2; flex-direction: column; gap: 0; }
  }
  @media (max-width: 680px) {
    .diff-section    { padding: 60px 20px; }
    .diff-heading    { font-size: 34px; letter-spacing: -1px; }
    .diff-header     { flex-direction: column; align-items: flex-start; }
    .diff-grid       { grid-template-columns: 1fr; }
    .diff-card.span2 { grid-column: span 1; }
  }
</style>

<!-- =========================================================
     THE DIGIBEAT DIFFERENCE SECTION — v5
========================================================= -->
<section class="diff-section" id="difference">
  <div class="diff-inner">

    <div class="diff-header">
      <div>
        <div class="diff-eyebrow">
          <span class="eye-line"></span>
          Why Choose Us
        </div>
        <h2 class="diff-heading">The <em>Digibeat</em><br>Difference</h2>
      </div>
      <p class="diff-sub">
        We go beyond delivering services — we build lasting partnerships
        rooted in creativity, trust, and real business results.
      </p>
    </div>

    <div class="diff-grid">
      <?php foreach ($features as $i => $f):
        $isLast = ($i === count($features) - 1);
      ?>
      <?php if ($isLast): ?>
      <div class="diff-card span2">
        <div class="diff-card-body">
          <div class="diff-num">0<?php echo $i + 1; ?></div>
          <div class="diff-icon"><?php echo digibeat_icon($f['icon']); ?></div>
          <h3><?php echo htmlspecialchars($f['title']); ?></h3>
          <p><?php echo htmlspecialchars($f['text']); ?></p>
          <a class="diff-cta-link" href="#contact">
            Work with us
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"/><path d="M13 6l6 6-6 6"/>
            </svg>
          </a>
        </div>
      </div>
      <?php else: ?>
      <div class="diff-card">
        <div class="diff-num">0<?php echo $i + 1; ?></div>
        <div class="diff-icon"><?php echo digibeat_icon($f['icon']); ?></div>
        <h3><?php echo htmlspecialchars($f['title']); ?></h3>
        <p><?php echo htmlspecialchars($f['text']); ?></p>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
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

// Country markers — (left%, top%) tuned to the 2754×1398 SVG world map
$markers = [
    [ "flag" => "🇨🇦", "label" => "Canada",      "left" => 20.0,  "top" => 23.0 ],
    [ "flag" => "🇺🇸", "label" => "USA",          "left" => 19.5,  "top" => 33.5 ],
    [ "flag" => "🇸🇪", "label" => "Sweden",       "left" => 51.0,  "top" => 16.5 ],
    [ "flag" => "🇳🇱", "label" => "Netherlands",  "left" => 48.5,  "top" => 26.5 ],
    [ "flag" => "🇶🇦", "label" => "Qatar",        "left" => 60.5,  "top" => 43.5 ],
    [ "flag" => "🇦🇪", "label" => "UAE",          "left" => 61.5,  "top" => 48.5 ],
    [ "flag" => "🇮🇳", "label" => "India",        "left" => 67.5,  "top" => 41.0 ],
    [ "flag" => "🇲🇾", "label" => "Malaysia",     "left" => 76.5,  "top" => 51.5 ],
];

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Digibeat — Redesign</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:#ffffff;
    --ink:#0b0b10;
    --ink-soft:#5b5c63;
    --hairline:#e7e7ec;
    --cyan:#00c2ff;
    --magenta:#ff2e92;
    --card:#0b0b10;
    --font-body: 'Hellix', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  }
  *{box-sizing:border-box; margin:0; padding:0;}
  html, body{
    background:#ffffff;
  }
  body{
    background:var(--bg);
    color:var(--ink);
    font-family: var(--font-body);
    -webkit-font-smoothing:antialiased;
  }
  .mono{
    font-family:'IBM Plex Mono', monospace;
    letter-spacing:.14em;
    text-transform:uppercase;
    font-size:12px;
    font-weight:500;
  }
  h1,h2{
    font-family:'Inter', sans-serif;
    letter-spacing:-0.02em;
  }

  /* ================= SECTION 1 : PULSE / MAP ================= */
  .hero{
    background:#ffffff;
    display:grid;
    grid-template-columns: 1fr 1.2fr;
    gap:64px;
    max-width:1320px;
    margin:0 auto;
    padding:110px 40px 130px;
    align-items:center;
  }
  .eyebrow{
    display:flex;
    align-items:center;
    gap:9px;
    color:var(--ink);
    margin-bottom:22px;
  }
  .dot-pulse{
    width:7px; height:7px; border-radius:50%;
    background: linear-gradient(135deg,var(--cyan),var(--magenta));
    animation: beat 1.15s ease-in-out infinite;
    flex-shrink:0;
  }
  @keyframes beat{
    0%,100%{ transform:scale(1); opacity:1; }
    45%{ transform:scale(1.9); opacity:.55; }
  }
  .hero h1{
    font-size:56px;
    line-height:1.04;
    font-weight:700;
    margin-bottom:28px;
  }
  .hero h1 .grad{
    background:linear-gradient(100deg,var(--cyan),var(--magenta));
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }
  .hero p{
    font-size:16.5px;
    line-height:1.68;
    color:var(--ink-soft);
    max-width:480px;
    margin-bottom:20px;
  }
  .cta{
    display:inline-flex;
    align-items:center;
    gap:8px;
    margin-top:14px;
    font-family:'Space Grotesk', sans-serif;
    font-weight:600;
    font-size:15px;
    color:var(--ink);
    text-decoration:none;
    position:relative;
    padding-bottom:3px;
  }
  .cta::after{
    content:"";
    position:absolute;
    left:0; bottom:0;
    width:100%; height:2px;
    background:linear-gradient(90deg,var(--cyan),var(--magenta));
    transform-origin:left;
    transition:transform .35s ease;
  }
  .cta:hover::after{ transform:scaleX(1.15); }
  .cta svg{ transition:transform .3s ease; }
  .cta:hover svg{ transform:translateX(4px); }

  /* ====================== MAP ====================== */
  .map-wrap{
    position:relative;
    width:100%;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 40px -12px rgba(11,11,50,.20);
    /* Fixed height so the map is tall enough to show the pin */
    height:420px;
  }

  /* Satellite background map */
  .map-canvas{
    position:absolute;
    inset:0;
    background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1Ylcl5-jZoPhsqPo15xfq1fD8gyQbTPJ7vZQIkYM3YSruptihBPEVx1Vd6iP-R-x-Il9AvFTfpMWY824wDix6kiwIWtsEtwvWaic-Qqd6sbk95o9d0_kEZp_lXpRpCPEHjWIcCd3QOECdQuNvBBQ25JojkMd_NFv77eLdnQKo8NYZidUm6O0ZQ7459YtAtPx99Snq-dKXOfqekKftCn46BKwQJXfIQ92lvSNDma3S3cqL13nBodgn');
    background-size:cover;
    background-position:center;
    width:100%;
    height:100%;
  }

  /* ---- Kozhikode marker / pin card ---- */
  .kzh-marker{
    position:absolute;
    /* Kozhikode sits roughly 68% from left, 58% from top of this world map */
    top:58%;
    left:69%;
    transform:translate(-50%, -100%);
    cursor:pointer;
    z-index:4;
  }
  .kzh-tooltip{
    display:flex;
    align-items:center;
    gap:8px;
    background:#ffffff;
    border:1px solid rgba(191,201,193,.4);
    padding:6px 12px 6px 8px;
    border-radius:10px;
    font-family:'Inter', sans-serif;
    font-size:12px;
    font-weight:700;
    letter-spacing:.04em;
    text-transform:uppercase;
    color:#191c1d;
    white-space:nowrap;
    box-shadow:0 4px 20px rgba(0,0,0,.08);
    transition:transform .2s ease, box-shadow .2s ease;
  }
  .kzh-marker:hover .kzh-tooltip{
    transform:translateY(-3px);
    box-shadow:0 8px 28px rgba(0,0,0,.14);
  }
  .kzh-tooltip .flag{ font-size:16px; line-height:1; }

  /* Stem + pulsing dot */
  .kzh-stem{
    display:flex;
    flex-direction:column;
    align-items:center;
    margin-top:4px;
  }
  .kzh-line{
    width:2px;
    height:8px;
    background:rgba(112,121,115,.45);
  }
  .kzh-dot-wrap{ position:relative; width:12px; height:12px; }
  .kzh-pulse{
    position:absolute;
    inset:-2px;
    border-radius:50%;
    background:rgba(15,82,56,.25);
    animation:kzh-ring 2s ease-out infinite;
  }
  .kzh-dot{
    position:absolute;
    inset:2px;
    border-radius:50%;
    background:#0f5238;
  }
  @keyframes kzh-ring{
    0%  { transform:scale(.6); opacity:.9; }
    100%{ transform:scale(2.2); opacity:0; }
  }

  @media (max-width: 980px){
    .hero{ grid-template-columns:1fr; padding:70px 24px; }
    .hero h1{ font-size:38px; }
    .map-wrap{ height:280px; }
  }
</style>
  <link rel="icon" type="image/png" href="/digibeat/assets/images/logo-footer.png?v=2">
</head>
<body>

<!-- ============ SECTION 1 ============ -->
<div style="background: #ffffff; width: 100%; border-top: 1px solid #e7e7ec; border-bottom: 1px solid #e7e7ec;">
<section class="hero">
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
    <!-- Satellite map background -->
    <div class="map-canvas"></div>

    <!-- Kozhikode, Kerala marker -->
    <div class="kzh-marker" id="kzhMarker">
      <div class="kzh-tooltip">
        <span class="flag">🇮🇳</span>
        Kozhikode
      </div>
      <div class="kzh-stem">
        <div class="kzh-line"></div>
        <div class="kzh-dot-wrap">
          <div class="kzh-pulse"></div>
          <div class="kzh-dot"></div>
        </div>
      </div>
    </div>


  </div>
</section>
</div>
<!-- ---- PASTE CLIENTS SECTION HERE ---- -->
<section class="clients-section">
    <div class="clients-inner">
        <div class="clients-header">
            <h2>Clients</h2>
            <p>Our clients are everything to us; so are we to them.</p>
        </div>

        <div class="clients-grid">
            <?php foreach ($clients as $client): ?>
                <div class="client-logo">
                    <img src="<?php echo htmlspecialchars($client['logo']); ?>"
                         alt="<?php echo htmlspecialchars($client['name']); ?>"
                         loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>

        <div class="clients-cta">
            <a href="<?php echo htmlspecialchars($view_all_url); ?>">
                View all clients
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- ---- END CLIENTS SECTION ---- -->  
</body>
</html>

<!-- Bootstrap JS (grid/utilities only) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Scroll-triggered fade / slide animations (Vanilla JS, no jQuery)
    document.addEventListener('DOMContentLoaded', function () {
        const observerOptions = { root: null, rootMargin: '0px 0px -80px 0px', threshold: 0.15 };

        const revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up').forEach(function (el) { revealObserver.observe(el); });
        document.querySelectorAll('.feature-card-wrap').forEach(function (card) { revealObserver.observe(card); });
    });
</script>

</body>
</html>

</main>

<script src="https://unpkg.com/three@0.158.0/build/three.min.js"></script>
<script data-purpose="interactive-enhancements">
    gsap.registerPlugin(ScrollTrigger);

    /* ============================================================
       Hero — Neural Signal canvas: a drifting particle constellation
       with connecting lines, reacting subtly to the mouse. Replaces
       the old video background.
       ============================================================ */
   /* ============================================================
       Hero — Neural Signal canvas: particle constellation with a
       live radial-gradient background, reacting to the mouse.
       ============================================================ */
    /* ============================================================
       Hero — Neural Signal canvas: physics-based particle field
       (friction, elastic bounce, force-accelerated mouse pull) with
       a live radial-gradient backdrop. Density slider is optional —
       if absent, uses a fixed sensible default.
       ============================================================ */
    (function initHeroSignal() {
      const canvas = document.getElementById('neuralCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      const blobCanvas = document.getElementById('blobCanvas');
      const blobCtx = blobCanvas ? blobCanvas.getContext('2d') : null;
      const densitySlider = document.getElementById('densitySlider');

      let particles = [];
      let blobs = [];
      let isDragging = false;
      const mouse = { x: null, y: null, radius: 240 };
      let currentDivisor = densitySlider ? parseInt(densitySlider.value) : 6000;
      
      const numSmallerBlobs = 6;

      function initBlobs() {
        const w = canvas.width;
        const h = canvas.height;
        blobs = [];
        
        // Main blob
        blobs.push({
          x: w * 0.7,
          y: h * 0.5,
          vx: 0,
          vy: 0,
          radius: 90,
          type: 'main'
        });

        // Smaller floating blobs
        for (let i = 0; i < numSmallerBlobs; i++) {
          blobs.push({
            x: Math.random() * w,
            y: Math.random() * h,
            vx: (Math.random() - 0.5) * 1.5,
            vy: (Math.random() - 0.5) * 1.5,
            radius: Math.random() * 20 + 25, // 25 to 45
            type: 'small',
            color1: i % 3 === 0 ? 'rgba(37, 99, 235, 0.95)' : (i % 3 === 1 ? 'rgba(59, 130, 246, 0.95)' : 'rgba(6, 182, 212, 0.95)'), // Blue, Blue, Cyan
color2: i % 3 === 0 ? 'rgba(14, 165, 233, 0.85)' : (i % 3 === 1 ? 'rgba(6, 182, 212, 0.85)' : 'rgba(103, 232, 249, 0.85)') // Sky, Cyan, Light Cyan
          });
        }
      }

      function updateBlobs() {
        if (blobs.length === 0) return;
        const main = blobs[0];
        
        // Main blob target (follows mouse or floats at home if mouse leaves)
        let targetX = mouse.x !== null ? mouse.x : canvas.width * 0.7;
        let targetY = mouse.y !== null ? mouse.y : canvas.height * 0.5;

        if (mouse.x === null) {
          const time = performance.now() * 0.001;
          targetX = canvas.width * 0.7 + Math.sin(time * 0.4) * 40;
          targetY = canvas.height * 0.5 + Math.cos(time * 0.6) * 40;
        }

        // Elastic spring physics for main blob
        let dx = targetX - main.x;
        let dy = targetY - main.y;
        let spring = isDragging ? 0.055 : 0.028;
        let friction = 0.84;

        main.vx += dx * spring;
        main.vy += dy * spring;
        main.vx *= friction;
        main.vy *= friction;
        main.x += main.vx;
        main.y += main.vy;

        // Update smaller blobs
        for (let i = 1; i < blobs.length; i++) {
          const b = blobs[i];
          b.x += b.vx;
          b.y += b.vy;

          // Boundary bouncing
          if (b.x < b.radius) { b.x = b.radius; b.vx *= -1; }
          if (b.x > canvas.width - b.radius) { b.x = canvas.width - b.radius; b.vx *= -1; }
          if (b.y < b.radius) { b.y = b.radius; b.vy *= -1; }
          if (b.y > canvas.height - b.radius) { b.y = canvas.height - b.radius; b.vy *= -1; }

          // Magnetic attraction to main blob when close
          let mdx = main.x - b.x;
          let mdy = main.y - b.y;
          let dist = Math.hypot(mdx, mdy);
          if (dist < 300) {
            let force = (300 - dist) / 300;
            b.vx += (mdx / dist) * force * 0.2;
            b.vy += (mdy / dist) * force * 0.2;
          }

          // Apply speed limit & drag
          const speed = Math.hypot(b.vx, b.vy);
          const maxSpeed = 3.0;
          if (speed > maxSpeed) {
            b.vx = (b.vx / speed) * maxSpeed;
            b.vy = (b.vy / speed) * maxSpeed;
          }
          b.vx *= 0.98;
          b.vy *= 0.98;
        }
      }

      function drawBlobs() {
        if (!blobCtx) return;
        blobCtx.clearRect(0, 0, canvas.width, canvas.height);

        blobs.forEach((b) => {
          blobCtx.save();
          
          // Draw blob radial gradient
          const grad = blobCtx.createRadialGradient(b.x, b.y, 0, b.x, b.y, b.radius * 1.5);
          
          if (b.type === 'main') {
            // Liquid light multi-stop gradient
            grad.addColorStop(0, 'rgba(79, 70, 229, 1)');     // Indigo
              // Purple
            grad.addColorStop(0.85, 'rgba(6, 182, 212, 0.7)'); // Cyan
            grad.addColorStop(1, 'rgba(6, 182, 212, 0)');
          } else {
            // Smaller blobs gradient
            grad.addColorStop(0, b.color1);
            grad.addColorStop(0.6, b.color2);
            grad.addColorStop(1, 'rgba(255, 255, 255, 0)');
          }

          blobCtx.beginPath();
          blobCtx.arc(b.x, b.y, b.radius * 1.5, 0, Math.PI * 2);
          blobCtx.fillStyle = grad;
          blobCtx.fill();
          
          // If main blob is moving, draw a trailing blob to stretch it organically
          if (b.type === 'main') {
            const speed = Math.hypot(b.vx, b.vy);
            if (speed > 1.2) {
              const trailX = b.x - b.vx * 1.4;
              const trailY = b.y - b.vy * 1.4;
              const trailRadius = b.radius * 0.75;
              
              const trailGrad = blobCtx.createRadialGradient(trailX, trailY, 0, trailX, trailY, trailRadius * 1.5);
              
              trailGrad.addColorStop(1, 'rgba(236, 72, 153, 0)');
              
              blobCtx.beginPath();
              blobCtx.arc(trailX, trailY, trailRadius * 1.5, 0, Math.PI * 2);
              blobCtx.fillStyle = trailGrad;
              blobCtx.fill();
            }
          }
          
          blobCtx.restore();
        });
      }

      function resizeCanvas() {
        const w = canvas.parentElement.offsetWidth;
        const h = canvas.parentElement.offsetHeight;
        canvas.width = w;
        canvas.height = h;
        if (blobCanvas) {
          blobCanvas.width = w;
          blobCanvas.height = h;
        }
        initParticles();
        initBlobs();
      }

      class Particle {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          this.vx = (Math.random() - 0.5) * 0.8;
          this.vy = (Math.random() - 0.5) * 0.8;
          this.radius = Math.random() * 1.5 + 1.2;
        }

        update() {
          if (mouse.x !== null && mouse.y !== null) {
            const dx = mouse.x - this.x, dy = mouse.y - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            if (distance < mouse.radius) {
              const force = (mouse.radius - distance) / mouse.radius;
              this.vx += (dx / distance) * force * 0.35;
              this.vy += (dy / distance) * force * 0.35;
            }
          }

          this.vx *= 0.95;
          this.vy *= 0.95;
          this.vx += (Math.random() - 0.5) * 0.05;
          this.vy += (Math.random() - 0.5) * 0.05;

          this.x += this.vx;
          this.y += this.vy;

          if (this.x < 0) { this.x = 0; this.vx *= -1; }
          if (this.x > canvas.width) { this.x = canvas.width; this.vx *= -1; }
          if (this.y < 0) { this.y = 0; this.vy *= -1; }
          if (this.y > canvas.height) { this.y = canvas.height; this.vy *= -1; }
        }

        draw() {
          ctx.beginPath();
          ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
          ctx.fillStyle = 'rgba(99, 102, 241, 0.35)'; // darker pastel for light bg
          ctx.fill();
        }
      }

      function initParticles() {
        particles = [];
        const particleCount = Math.floor((canvas.width * canvas.height) / currentDivisor);
        const maxParticles = currentDivisor < 4000 ? 300 : 150;
        for (let i = 0; i < Math.min(particleCount, maxParticles); i++) particles.push(new Particle());
      }

      function connectParticles() {
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            if (distance < 120) {
              const opacity = (1 - (distance / 120)) * 0.16;
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.strokeStyle = `rgba(99, 102, 241, ${opacity})`;
              ctx.lineWidth = 0.8;
              ctx.stroke();
            }
          }
        }
      }

      function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        // Soft white-to-light-gray radial gradient background
        const gradient = ctx.createRadialGradient(
          canvas.width * 0.75, canvas.height * 0.25, 20,
          canvas.width * 0.75, canvas.height * 0.25, canvas.width * 0.8
        );
        gradient.addColorStop(0, '#ececf0');
        gradient.addColorStop(1, '#ececf0');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        particles.forEach((p) => { p.update(); p.draw(); });
        connectParticles();

        updateBlobs();
        drawBlobs();

        requestAnimationFrame(animate);
      }

      // Interaction listeners
      canvas.addEventListener('mousemove', (e) => {
        const rect = canvas.getBoundingClientRect();
        const mx = e.clientX - rect.left;
        const my = e.clientY - rect.top;
        mouse.x = mx;
        mouse.y = my;

        if (!isDragging) {
          const main = blobs[0];
          if (main && Math.hypot(mx - main.x, my - main.y) < main.radius * 1.5) {
            canvas.style.cursor = 'grab';
          } else {
            canvas.style.cursor = 'default';
          }
        }
      });

      canvas.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
        if (!isDragging) canvas.style.cursor = 'default';
      });

      canvas.addEventListener('mousedown', (e) => {
        const rect = canvas.getBoundingClientRect();
        const mx = e.clientX - rect.left;
        const my = e.clientY - rect.top;
        
        const main = blobs[0];
        if (main) {
          isDragging = true;
          canvas.style.cursor = 'grabbing';
          mouse.x = mx;
          mouse.y = my;
        }
      });

      window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
      });

      window.addEventListener('mouseup', () => {
        if (isDragging) {
          isDragging = false;
          canvas.style.cursor = 'default';
        }
      });

      canvas.addEventListener('touchstart', (e) => {
        const t = e.touches[0];
        const rect = canvas.getBoundingClientRect();
        const mx = t.clientX - rect.left;
        const my = t.clientY - rect.top;
        
        const main = blobs[0];
        if (main) {
          isDragging = true;
          mouse.x = mx;
          mouse.y = my;
        }
      }, { passive: true });

      window.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const t = e.touches[0];
        const rect = canvas.getBoundingClientRect();
        mouse.x = t.clientX - rect.left;
        mouse.y = t.clientY - rect.top;
      }, { passive: true });

      window.addEventListener('touchend', () => {
        isDragging = false;
      });

      if (densitySlider) {
        densitySlider.addEventListener('input', (e) => {
          currentDivisor = parseInt(e.target.value);
          initParticles();
        });
      }

      window.addEventListener('resize', resizeCanvas);
      resizeCanvas();
      animate();
    })();
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

  <!-- ============ TESTIMONIAL VIDEO DRAWER (SLIDER) ============ -->
  <div class="ts-overlay" id="ts-overlay"></div>
  <aside class="ts-drawer" id="ts-drawer" role="dialog" aria-modal="true" aria-hidden="true">

  <div class="ts-drawer__scroll" id="ts-drawer-scroll">
    <div class="ts-drawer__topbar">
      <a href="contact.php" class="ts-drawer__visit" id="ts-drawer-site">
        <span>Get in Touch</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7"/><path d="M7 7h10v10"/></svg>
      </a>
      <button type="button" class="ts-drawer__close" id="ts-drawer-close" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>
    <div class="ts-drawer__progress"><div class="ts-drawer__progress-bar" id="ts-drawer-progress-bar"></div></div>

    <div class="ts-drawer__hero">
      <video id="ts-drawer-video" controls playsinline loop muted>
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <img id="ts-drawer-image" src="" alt="" style="display:none;">
      <iframe id="ts-drawer-yt" style="display:none;"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    </div>

    <div class="ts-drawer__body">
      <span class="ts-drawer__tag" id="ts-drawer-tag"></span>
      <h2 class="ts-drawer__title" id="ts-drawer-title"></h2>
      <p class="ts-drawer__tagline" id="ts-drawer-tagline"></p>

      

      <div class="ts-drawer__quote-block">
        <p class="ts-drawer__quote-text" id="ts-drawer-quote"></p>
        <div class="ts-drawer__quote-author" id="ts-drawer-author"></div>
      </div>

      <div class="ts-drawer__section">
        <h4>The Challenge</h4>
        <p id="ts-drawer-challenge"></p>
      </div>

    
      </div>
    </div>
  </div>

  <div class="ts-drawer__footer">
    <a href="contact.php" class="ts-drawer__footer-btn">
      Let's talk
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px; height: 14px; margin-left: 6px;"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </a>
    <div class="ts-drawer__navgroup">
      <button type="button" class="ts-drawer__navicon" id="ts-drawer-prev" aria-label="Previous testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
      </button>
      <button type="button" class="ts-drawer__navicon" id="ts-drawer-next" aria-label="Next testimonial">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </button>
    </div>
  </div>

</aside>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var section = document.getElementById('testimonials');
      if (!section) return;

      var testimonialsData = <?php echo json_encode($testimonials); ?>;
      var cards = section.querySelectorAll('.ts-card');

      if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        var header = document.getElementById('tsHeader');

        gsap.to(header, {
          opacity: 1, y: 0, duration: .9, ease: 'power3.out',
          scrollTrigger: { trigger: header, start: 'top 85%' }
        });

        cards.forEach(function (card, i) {
  gsap.fromTo(card,
    { opacity: 0, y: 40 },
    {
      opacity: 1, y: 0, duration: 1, delay: i * .12, ease: 'power3.out',
      scrollTrigger: { trigger: section, start: 'top 75%' }
    }
  );
  card.addEventListener('click', function () { openDrawer(i); });
});
      } else {
        section.querySelectorAll('.ts-reveal').forEach(function (el) { el.style.opacity = 1; });
        cards.forEach(function (card, i) {
          card.addEventListener('click', function () {
            openDrawer(i);
          });
        });
      }

(function initCardSlider() {
  var track = document.getElementById('tsCardsTrack');
  var viewport = track ? track.parentElement : null;
  var prevBtn = document.getElementById('tsPrev');
  var nextBtn = document.getElementById('tsNext');
  var dots = section.querySelectorAll('.ts-pagination span');
  if (!track || !viewport) return;

  var realCards = Array.prototype.slice.call(track.children);
  var total = realCards.length;
  if (total === 0) return;

  function visibleCount() {
    return window.innerWidth <= 900 ? 1 : 3;
  }
  var visible = visibleCount();

  // Clone helper — strips the reveal-hidden state so clones render immediately.
  function makeClone(card) {
    var clone = card.cloneNode(true);
    clone.classList.remove('ts-reveal');
    clone.style.opacity = '1';
    clone.style.transform = 'none';
    return clone;
  }

  var clonesEnd = realCards.slice(0, visible).map(makeClone);
  var clonesStart = realCards.slice(-visible).map(makeClone);
  clonesStart.forEach(function (c) { track.insertBefore(c, track.firstChild); });
  clonesEnd.forEach(function (c) { track.appendChild(c); });

  var index = visible;
  var animating = false;

  function cardStep() {
    var card = track.children[0];
    var style = getComputedStyle(track);
    var gap = parseFloat(style.gap || style.columnGap || 0);
    return card.getBoundingClientRect().width + gap;
  }

  function setPosition(withTransition) {
    var step = cardStep();
    track.style.transition = withTransition ? 'transform .5s var(--ts-ease)' : 'none';
    track.style.transform = 'translateX(-' + (index * step) + 'px)';
  }

  function updateDots() {
    var realIndex = ((index - visible) % total + total) % total;
    dots.forEach(function (d, i) { d.classList.toggle('active', i === (realIndex % dots.length)); });
  }

  function goTo(newIndex) {
    if (animating) return;
    animating = true;
    index = newIndex;
    setPosition(true);
    updateDots();
  }

  track.addEventListener('transitionend', function () {
    animating = false;
    if (index >= total + visible) {
      index -= total;
      setPosition(false);
    } else if (index < visible) {
      index += total;
      setPosition(false);
    }
  });

  if (prevBtn) prevBtn.addEventListener('click', function () { goTo(index - 1); resetAuto(); });
  if (nextBtn) nextBtn.addEventListener('click', function () { goTo(index + 1); resetAuto(); });

  var autoTimer;
  function resetAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(function () { goTo(index + 1); }, 4000);
  }
  resetAuto();

  window.addEventListener('resize', function () {
    setPosition(false);
  });

  setPosition(false);
  updateDots();
})();
      var overlay = document.getElementById('ts-overlay');
      var drawer = document.getElementById('ts-drawer');
      var drawerScroll = document.getElementById('ts-drawer-scroll');
      var drawerVideo = document.getElementById('ts-drawer-video');
      var drawerTag = document.getElementById('ts-drawer-tag');
      var drawerTitle = document.getElementById('ts-drawer-title');
      var drawerTagline = document.getElementById('ts-drawer-tagline');
      var drawerQuote = document.getElementById('ts-drawer-quote');
      var drawerAuthor = document.getElementById('ts-drawer-author');
      var drawerChallenge = document.getElementById('ts-drawer-challenge');
     
      var drawerPrev = document.getElementById('ts-drawer-prev');
      var drawerNext = document.getElementById('ts-drawer-next');
      var progressBar = document.getElementById('ts-drawer-progress-bar');

      var activeIndex = -1;

      function openDrawer(index) {
        if (index < 0 || index >= testimonialsData.length) return;
        activeIndex = index;
        populateDrawer(testimonialsData[index]);

        drawerPrev.disabled = index === 0;
        drawerNext.disabled = index === testimonialsData.length - 1;

        overlay.classList.add('is-open');
        drawer.classList.add('is-open');
        drawer.setAttribute('aria-hidden', 'false');
        document.body.classList.add('ts-lock');
      }

function populateDrawer(data) {
  drawerScroll.scrollTop = 0;
  progressBar.style.width = '0%';

  var drawerImage = document.getElementById('ts-drawer-image');
  var drawerYt = document.getElementById('ts-drawer-yt');
  var ytMatch = data.video && data.video.match(/(?:youtube\.com\/embed\/|youtu\.be\/|v=)([A-Za-z0-9_-]{11})/);

  drawerVideo.pause();
  drawerVideo.style.display = 'none';
  drawerImage.style.display = 'none';
  drawerYt.style.display = 'none';
  drawerYt.src = '';

  if (ytMatch) {
    drawerYt.style.display = '';
    drawerYt.src = 'https://www.youtube.com/embed/' + ytMatch[1] + '?autoplay=1&mute=1';
  } else if (data.video) {
    drawerVideo.style.display = '';
    var videoSource = drawerVideo.querySelector('source');
    videoSource.src = data.video;
    drawerVideo.load();
    var p = drawerVideo.play();
    if (p !== undefined) p.catch(function () {});
  } else {
    drawerImage.style.display = '';
    drawerImage.src = data.photo;
    drawerImage.alt = data.name;
  }

  drawerTag.textContent = data.tag;
  drawerTitle.textContent = data.name + ' · ' + data.title;
  drawerTagline.textContent = data.tagline;

 
  drawerQuote.innerHTML = '&ldquo;' + data.quote + '&rdquo;';
  drawerAuthor.textContent = '— ' + data.name + ', ' + data.title;

  drawerChallenge.textContent = data.challenge;

}

      function closeDrawer() {
  overlay.classList.remove('is-open');
  drawer.classList.remove('is-open');
  drawer.setAttribute('aria-hidden', 'true');
  document.body.classList.remove('ts-lock');
  if (drawerVideo) drawerVideo.pause();
  var drawerYt = document.getElementById('ts-drawer-yt');
  if (drawerYt) drawerYt.src = '';
}

      var drawerCloseBtn = document.getElementById('ts-drawer-close');
      if (drawerCloseBtn) drawerCloseBtn.addEventListener('click', closeDrawer);
      if (overlay) overlay.addEventListener('click', closeDrawer);

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer.classList.contains('is-open')) closeDrawer();
      });

      if (drawerScroll && progressBar) {
        drawerScroll.addEventListener('scroll', function () {
          var max = drawerScroll.scrollHeight - drawerScroll.clientHeight;
          var pct = max > 0 ? (drawerScroll.scrollTop / max) * 100 : 0;
          progressBar.style.width = pct + '%';
        });
      }

      if (drawerPrev) {
        drawerPrev.addEventListener('click', function () {
          if (activeIndex <= 0) return;
          activeIndex -= 1;
          populateDrawer(testimonialsData[activeIndex]);
          drawerPrev.disabled = activeIndex === 0;
          drawerNext.disabled = activeIndex === testimonialsData.length - 1;
        });
      }

      if (drawerNext) {
        drawerNext.addEventListener('click', function () {
          if (activeIndex >= testimonialsData.length - 1) return;
          activeIndex += 1;
          populateDrawer(testimonialsData[activeIndex]);
          drawerPrev.disabled = activeIndex === 0;
          drawerNext.disabled = activeIndex === testimonialsData.length - 1;
        });
      }
    });
  </script>
</body>
<?php include 'footer.php'; ?>
</html>