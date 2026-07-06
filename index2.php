<?php
// --- Data ---
$navLinks = [
    ['label' => 'Services', 'href' => '#', 'active' => true],
    ['label' => 'Solutions', 'href' => '#', 'active' => false],
    ['label' => 'Industries', 'href' => '#', 'active' => false],
    ['label' => 'Works', 'href' => '#', 'active' => false],
    ['label' => 'About', 'href' => '#', 'active' => false],
    ['label' => 'Careers', 'href' => '#', 'active' => false],
    ['label' => 'Contact', 'href' => '#', 'active' => false],
];

$services = [
    [
        'key'         => 'web-dev',
        'title'       => 'Web Development',
        'status'      => 'ACTIVE',
        'dotColor'    => 'bg-blue-500',
        'dotShadow'   => 'shadow-[0_0_8px_#3b82f6]',
        'iconColor'   => 'text-blue-400',
        'iconBorder'  => 'border-blue-500/30',
        'iconShadow'  => 'shadow-[0_0_15px_rgba(59,130,246,0.3)]',
        'statusColor' => 'text-blue-400',
        'lineClasses' => ['stroke-blue-400', 'stroke-blue-500/70', 'stroke-blue-300/50', 'stroke-blue-400/40', 'stroke-blue-300/30'],
        'paths'       => [
            'M 200,250 C 400,250 500,95 800,100',
            'M 200,250 C 400,235 500,105 800,100',
            'M 200,250 C 400,260 500,90 800,100',
            'M 200,250 C 420,245 520,115 800,100',
            'M 200,250 C 420,265 520,85 800,100',
        ],
        'iconPath'    => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
        'nodes'       => [[450, 220], [620, 140]],
        'rowY'        => 100,
    ],
    [
        'key'         => 'it-solutions',
        'title'       => 'IT Solutions',
        'status'      => 'READY',
        'dotColor'    => 'bg-yellow-500',
        'dotShadow'   => 'shadow-[0_0_8px_#eab308]',
        'iconColor'   => 'text-yellow-400',
        'iconBorder'  => 'border-yellow-500/30',
        'iconShadow'  => 'shadow-[0_0_15px_rgba(234,179,8,0.2)]',
        'statusColor' => 'text-on-surface-variant',
        'lineClasses' => ['stroke-yellow-400/50', 'stroke-yellow-300/30'],
        'paths'       => [
            'M 200,250 C 450,250 550,200 800,200',
            'M 200,250 C 450,240 550,210 800,200',
        ],
        'iconPath'    => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707m12.728 12.728L5.343 5.343',
        'nodes'       => [[500, 220], [650, 210]],
        'rowY'        => 200,
    ],
    [
        'key'         => 'digital-marketing',
        'title'       => 'Digital Marketing',
        'status'      => 'READY',
        'dotColor'    => 'bg-purple-500',
        'dotShadow'   => 'shadow-[0_0_8px_#a855f7]',
        'iconColor'   => 'text-purple-400',
        'iconBorder'  => 'border-purple-500/30',
        'iconShadow'  => 'shadow-[0_0_15px_rgba(168,85,247,0.2)]',
        'statusColor' => 'text-on-surface-variant',
        'lineClasses' => ['stroke-purple-400/50', 'stroke-purple-300/30'],
        'paths'       => [
            'M 200,250 C 450,250 550,300 800,300',
            'M 200,250 C 450,260 550,290 800,300',
        ],
        'iconPath'    => 'M4 6h16M4 12h16m-7 6h7',
        'nodes'       => [[500, 270], [650, 290]],
        'rowY'        => 300,
    ],
    [
        'key'         => 'branding',
        'title'       => 'Branding',
        'status'      => 'READY',
        'dotColor'    => 'bg-pink-500',
        'dotShadow'   => 'shadow-[0_0_8px_#ec4899]',
        'iconColor'   => 'text-pink-400',
        'iconBorder'  => 'border-pink-500/30',
        'iconShadow'  => 'shadow-[0_0_15px_rgba(236,72,153,0.2)]',
        'statusColor' => 'text-on-surface-variant',
        'lineClasses' => ['stroke-pink-400/50', 'stroke-pink-300/30'],
        'paths'       => [
            'M 200,250 C 400,250 500,400 800,400',
            'M 200,250 C 420,260 520,390 800,400',
        ],
        'iconPath'    => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',
        'nodes'       => [[450, 320], [620, 370]],
        'rowY'        => 400,
    ],
];

$siteName    = 'Digibeat';
$pageTitle   = 'Digibeat | Next-Gen Intelligence';
$year        = date('Y');
$badgeText   = 'Next-Gen Intelligence';
$heroHeading = 'Ideas. Engineered.<br/>Growth. Delivered.';
$heroSub     = 'We architect premium digital experiences that scale. From neural-driven strategies to high-end aesthetic engineering.';
$ctaLabel    = 'Get Started';

?>
<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<link href="assets/tailwind.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&amp;family=Space+Mono:wght@400;700&amp;family=Inter:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
    body {
      background-color: #0e0e14;
      color: #e4e1ea;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
      font-family: 'Inter', sans-serif;
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

    .connection-line {
      fill: none;
      stroke-width: 1.5;
      stroke-linecap: round;
      opacity: 0.4;
      transition: opacity 0.3s, stroke-width 0.3s;
    }

    .path-node {
      fill: #fff;
      opacity: 0.6;
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

    .focus-ring {
      position: absolute;
      width: 240px;
      height: 100px;
      border-radius: 9999px;
      border: 2px solid rgba(76, 214, 255, 0.6);
      box-shadow: 0 0 50px rgba(76, 214, 255, 0.35), inset 0 0 30px rgba(76, 214, 255, 0.1);
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.25s ease, top 0.25s ease;
      transform: translate(-50%, -50%);
      z-index: 30;
    }
    .focus-ring.visible {
      opacity: 1;
    }

    .service-row {
      transition: all 0.25s ease;
      position: relative;
      z-index: 20;
    }
    .service-row:hover,
    .service-row.is-active {
      background: rgba(76, 214, 255, 0.08) !important;
      border-color: rgba(76, 214, 255, 0.5) !important;
      transform: translateX(8px) scale(1.02);
      box-shadow: 0 0 25px rgba(76, 214, 255, 0.15);
    }

    @media (max-width: 767px) {
      .service-row:hover,
      .service-row.is-active {
        transform: scale(1.01);
      }
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
    }
  </style>
</head>
<body class="min-h-screen flex flex-col relative overflow-x-hidden bg-[#0e0e14]">

<header class="fixed top-0 w-full z-50 bg-transparent">
<div class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 md:px-10 lg:px-16 flex flex-nowrap items-center justify-between gap-3" style="height:68px;">
<div style="flex-shrink:0;">
<div class="logo-chip">
<div class="logo-chip-inner">
<img src="assets/logoff.png" alt="<?php echo htmlspecialchars($siteName); ?>" style="display:block; height:34px; width:auto; max-width:160px;"/>
</div>
</div>
</div>
<nav class="hidden md:flex flex-nowrap items-center gap-6 overflow-x-auto ml-auto" style="scrollbar-width:none;" aria-label="Primary navigation">
<?php foreach ($navLinks as $link): ?>
<a class="<?php echo $link['active'] ? 'nav-link active' : 'nav-link'; ?> whitespace-nowrap" href="<?php echo htmlspecialchars($link['href']); ?>"><?php echo htmlspecialchars($link['label']); ?></a>
<?php endforeach; ?>
</nav>
<div style="flex-shrink:0; margin-left:auto;">
<button class="nav-action" style="width:40px;height:40px;" aria-label="Open menu" id="mobile-menu-btn">
<span class="material-symbols-outlined" style="font-size:1.25rem;color:white;line-height:1;">menu</span>
</button>
</div>
</div>
<nav id="mobile-nav" class="md:hidden hidden flex-col gap-1 px-4 pb-4 bg-[#0e0e14]/95 backdrop-blur" aria-label="Mobile navigation">
<?php foreach ($navLinks as $link): ?>
<a class="<?php echo $link['active'] ? 'nav-link active' : 'nav-link'; ?> py-2 border-b border-white/5" href="<?php echo htmlspecialchars($link['href']); ?>"><?php echo htmlspecialchars($link['label']); ?></a>
<?php endforeach; ?>
</nav>
</header>

<main class="flex-1 relative z-10">
<div class="hero-block relative w-full overflow-hidden flex flex-col">
<div class="absolute inset-0 w-full h-full pointer-events-none z-0">
<video autoplay muted loop playsinline class="w-full h-full object-cover">
<source src="assets/bg-video2.mp4" type="video/mp4">
</video>
<div class="absolute inset-0 bg-gradient-to-r from-black/65 via-black/35 to-black/10"></div>
<div class="absolute inset-x-0 bottom-0 h-48 bg-gradient-to-b from-transparent to-[#0e0e14]"></div>
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

<section class="max-w-7xl mx-auto px-5 sm:px-8 pt-24 sm:pt-32 md:pt-40 pb-16 md:pb-24 relative" data-purpose="interactive-diagram">
<div class="text-center mb-16 md:mb-20">
<h2 class="font-display-lg text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight gradient-text">Our Services</h2>
</div>
<div class="relative flex flex-col md:flex-row items-center justify-between gap-10 md:gap-12">

<div class="relative flex items-center gap-6 md:gap-12 group" data-purpose="central-hub">
<div class="vertical-text hidden md:block">Your Business</div>
<div class="relative w-16 h-16 md:w-24 md:h-24 flex items-center justify-center mx-auto">
<div class="absolute inset-0 rounded-full bg-purple-500/20 blur-xl animate-pulse"></div>
<div class="absolute w-11 h-11 md:w-16 md:h-16 rounded-full border border-purple-500/30 rotate-45"></div>
<div class="absolute w-14 h-14 md:w-20 md:h-20 rounded-full border border-blue-500/20 -rotate-12"></div>
<div class="relative z-10 w-3 h-3 md:w-4 md:h-4 bg-white rounded-full shadow-[0_0_15px_#fff]"></div>
</div>
<span class="md:hidden text-xs uppercase tracking-widest text-white/40 font-label-sm">Your Business</span>
</div>

<div class="absolute inset-0 pointer-events-none hidden md:block" data-purpose="svg-connections">
<svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 1000 500">
<?php foreach ($services as $service): ?>
<?php foreach ($service['paths'] as $i => $d): ?>
<path class="connection-line <?php echo $service['lineClasses'][$i] ?? $service['lineClasses'][0]; ?>" data-service="<?php echo $service['key']; ?>" d="<?php echo $d; ?>"></path>
<?php endforeach; ?>
<?php foreach ($service['nodes'] as $node): ?>
<circle class="path-node" cx="<?php echo $node[0]; ?>" cy="<?php echo $node[1]; ?>" r="2.5"></circle>
<?php endforeach; ?>
<?php endforeach; ?>
</svg>
</div>

<div class="w-full max-w-sm relative mx-auto" id="services-panel" data-purpose="services-list">
<div class="focus-ring hidden md:block" id="focus-ring"></div>
<div class="flex flex-col gap-4 sm:gap-6">
<?php foreach ($services as $service): ?>
<div class="service-row glass-card flex items-center justify-between p-3 sm:p-4 rounded-xl cursor-pointer" data-purpose="service-item" data-service="<?php echo $service['key']; ?>">
<div class="flex items-center gap-3 sm:gap-4">
<div class="icon-container w-10 h-10 sm:w-12 sm:h-12 rounded-lg flex items-center justify-center <?php echo $service['iconShadow']; ?> <?php echo $service['iconBorder']; ?>">
<svg class="w-5 h-5 sm:w-6 sm:h-6 <?php echo $service['iconColor']; ?>" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="<?php echo $service['iconPath']; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</div>
<div>
<span class="text-base sm:text-lg font-medium text-slate-200 block"><?php echo htmlspecialchars($service['title']); ?></span>
<span class="text-[10px] <?php echo $service['statusColor']; ?> font-label-sm">STATUS: <?php echo htmlspecialchars($service['status']); ?></span>
</div>
</div>
<div class="w-2 h-2 rounded-full flex-shrink-0 <?php echo $service['dotColor']; ?> <?php echo $service['dotShadow']; ?>"></div>
</div>
<?php endforeach; ?>
</div>
</div>

</div>
</section>
</main>

<footer class="mt-auto py-10 sm:py-12 relative z-10">
<div class="max-w-7xl mx-auto px-5 sm:px-8 flex flex-col md:flex-row justify-between items-center gap-6 sm:gap-8 text-center md:text-left">
<div class="flex items-center gap-2">
<img src="assets/logoff.png" alt="<?php echo htmlspecialchars($siteName); ?>" class="h-10 w-auto"/>
</div>
<p class="text-on-surface-variant text-sm font-body-md"><?php echo $year; ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
<div class="flex gap-6 sm:gap-8">
<a class="nav-link" href="#">Privacy Policy</a>
<a class="nav-link" href="#">Terms of Service</a>
</div>
</div>
</footer>

<script src="https://unpkg.com/three@0.158.0/build/three.min.js"></script>
<script data-purpose="interactive-enhancements">
    const rows = document.querySelectorAll('.service-row');
    const focusRing = document.getElementById('focus-ring');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileNav = document.getElementById('mobile-nav');

    if (mobileMenuBtn && mobileNav) {
      mobileMenuBtn.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
        mobileNav.classList.toggle('flex');
      });
    }

    const isDesktop = () => window.matchMedia('(min-width: 768px)').matches;

    rows.forEach((row) => {
      row.addEventListener('mouseenter', () => {
        if (!isDesktop()) return;
        const key = row.dataset.service;

        rows.forEach((r) => r.classList.remove('is-active'));
        row.classList.add('is-active');

        document.querySelectorAll('.connection-line').forEach((line) => {
          if (line.dataset.service === key) {
            line.style.opacity = '0.9';
            line.style.strokeWidth = '2.5';
          } else {
            line.style.opacity = '0.12';
          }
        });

        const rowRect = row.getBoundingClientRect();
        const panelRect = row.closest('#services-panel').getBoundingClientRect();
        const centerY = rowRect.top - panelRect.top + rowRect.height / 2;
        const centerX = rowRect.left - panelRect.left + rowRect.width / 2;
        focusRing.style.top = centerY + 'px';
        focusRing.style.left = centerX + 'px';
        focusRing.style.width = (rowRect.width + 20) + 'px';
        focusRing.style.height = (rowRect.height + 20) + 'px';
        focusRing.classList.add('visible');
      });

      row.addEventListener('mouseleave', () => {
        row.classList.remove('is-active');
        document.querySelectorAll('.connection-line').forEach((line) => {
          line.style.opacity = '0.4';
          line.style.strokeWidth = '1.5';
        });
        focusRing.classList.remove('visible');
      });
    });

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
  </script>
</body>
</html>