<?php
// Get service parameter
$service_key = isset($_GET['service']) ? $_GET['service'] : 'web-design';

// Define the 8 services and their details
$services_data = [
    'web-design' => [
        'title' => 'Web Design (UI/UX)',
        'intro' => 'Crafting high-fidelity prototypes and structured design systems.',
        'bg_image' => 'assets/services/webdesign.webp',
        'icon' => '<path d="M12 20h9M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>',
        'description' => 'We design digital products that feel premium, modern, and intuitive. Our design process begins with thorough user research and wireframing, which we materialize into interactive, high-fidelity prototypes. We build structured design systems and custom grids that ensure visual consistency and seamless scalability.',
        'tools' => [
            [
                'name' => 'Figma',
                'desc' => 'We build interactive wireframes, screen user journeys, and pixel-perfect UI layouts in Figma. It serves as our central hub for design systems, component libraries, and client collaboration, ensuring absolute precision before coding.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'
            ],
            [
                'name' => 'Adobe XD',
                'desc' => 'Used for designing clean vector assets, layouts, and high-fidelity screen mockups. We leverage XD to wireframe and map user experiences, aligning design intent with corporate branding guidelines.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/adobexd/adobexd-plain.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'What files and deliverables will I receive at the end of the design phase?',
                'a' => 'You will receive fully layered and organized Figma source files, including style guides, components, interactive high-fidelity prototypes, and exported image assets.'
            ],
            [
                'q' => 'Do you offer user testing during the design process?',
                'a' => 'Yes, we build interactive prototypes in Figma and run usability walkthroughs with test users to validate workflows, navigation, and user experience before any coding begins.'
            ]
        ],
        'process' => [
            'Requirement Discovery',
            'Brand & User Research',
            'Information Architecture',
            'Wireframing & UX Mockups',
            'UI Design & Styling',
            'Interactive Prototyping',
            'UX Testing & Hand-off',
            'Design System Audit'
        ]
    ],
    'web-dev' => [
        'title' => 'Web Development',
        'intro' => 'Engineering fast frontend interfaces and secure backend API architectures.',
        'bg_image' => 'assets/services/web.webp',
        'icon' => '<path d="m18 16 4-4-4-4M6 8l-4 4 4 4M14.5 4l-5 16"/>',
        'description' => 'Custom web development engineered to support high traffic volumes, heavy data operations, and scaling logic. We build interactive and fast user interfaces coupled with secure, solid API structures.',
        'tools' => [
            [
                'name' => 'React JS',
                'desc' => 'We build dynamic, component-based frontend interfaces using React JS. It allows us to deliver high-performance single-page behaviors and fluid transitions that feel premium and fast.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg'
            ],
            [
                'name' => 'Laravel',
                'desc' => 'Our primary framework for secure, robust backend systems. Laravel provides clean MVC architectures, database migrations, and built-in protection against web vulnerabilities, making it perfect for custom portal logic.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'
            ],
            [
                'name' => 'Node JS',
                'desc' => 'Utilized to build lightweight, fast asynchronous microservices and real-time features. Node.js excels at processing web sockets, webhooks, and complex integrations without blocking user actions.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg'
            ],
            [
                'name' => 'HTML5',
                'desc' => 'Structuring clean, semantic page markup optimized for accessibility, screen readers, and search engine crawls.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'
            ],
            [
                'name' => 'CSS3',
                'desc' => 'Styling pages with responsive layouts, modern grids, flexbox designs, transitions, and custom brand variables.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'
            ],
            [
                'name' => 'JavaScript',
                'desc' => 'Implementing dynamic animations, client-side validation logic, state alterations, and direct asynchronous content updates.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Will my website be responsive and fast on mobile devices?',
                'a' => 'Absolutely. We build responsive layouts using HTML5, CSS3, and modern framework behaviors, optimized with lazy loading and code splitting for lightning-fast speeds on all viewports.'
            ],
            [
                'q' => 'Can you integrate third-party APIs and payment gateways?',
                'a' => 'Yes, we specialize in building secure API connections and integration pathways for CRM systems, shipping providers, accounting platforms, and custom backend modules.'
            ]
        ],
        'process' => [
            'Requirement & Architecture Mapping',
            'Database Schema Design',
            'API Blueprint Planning',
            'Frontend Interface Styling',
            'Backend MVC Codebase Implementation',
            'Integration & Mid-way Testing',
            'Performance Audit & Optimization',
            'Launch & Cloud Deployment'
        ]
    ],
    'wordpress' => [
        'title' => 'WordPress Development',
        'intro' => 'Building lightweight Gutenberg themes and custom WordPress systems.',
        'bg_image' => 'assets/services/wordpress.webp',
        'icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M21 9H3M21 15H3M12 3v18"/>',
        'description' => 'Leverage the flexibility of WordPress without sacrificing speed or security. We specialize in building lightweight, custom block themes using Gutenberg and Elementor, ensuring full editability for non-technical users. Additionally, we convert static HTML designs into robust, dynamic WordPress layouts, with custom post types and fields that simplify content management.',
        'tools' => [
            [
                'name' => 'Gutenberg / WordPress',
                'desc' => 'We create native block editor themes that deliver ultra-fast load times. Gutenberg blocks keep the code lightweight while offering a drag-and-drop experience for editors.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg'
            ],
            [
                'name' => 'Elementor',
                'desc' => 'For marketing teams that require absolute layout control. We configure Elementor page builder systems, setting up pre-styled sections and global widgets to prevent code bloated styles.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Elementor_Icon.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Do you use heavy, pre-made themes that slow down the website?',
                'a' => 'No. We develop lightweight custom block themes using the WordPress Gutenberg editor, avoiding bloated code and keeping your page speeds fast.'
            ],
            [
                'q' => 'Can I easily edit content on the website myself?',
                'a' => 'Yes, we build custom post fields and drag-and-drop structures so you can easily edit text, images, and pages without any technical experience.'
            ]
        ],
        'process' => [
            'Requirement Analysis & Theme Selection',
            'Static Layout & Asset Alignment',
            'Custom Gutenberg Blocks Creation',
            'Database & Core Site Settings Audit',
            'WordPress Security Configuration',
            'PageSpeed & Image Load Tuning',
            'Content Input & Editorial Review',
            'Domain Transition & Launch'
        ]
    ],
    'ecommerce' => [
        'title' => 'E-commerce Solutions',
        'intro' => 'Deploying WooCommerce and Shopify stores built to drive conversions.',
        'bg_image' => 'assets/services/ecommerce.webp',
        'icon' => '<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4zM3 6h18M16 10a4 4 0 0 1-8 0"/>',
        'description' => 'Fully configured Shopify and WooCommerce online stores built to convert visitors. We handle payment gateways, inventory management, checkout optimizations, and custom shipping rules.',
        'tools' => [
            [
                'name' => 'Shopify',
                'desc' => 'We configure Shopify stores from theme setup to custom checkout flows, inventory tracking, tax rules, and local shipping provider integrations.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Shopify_logo.svg'
            ],
            [
                'name' => 'WooCommerce',
                'desc' => 'We build open-source stores using WooCommerce on WordPress, allowing for unlimited customization of payment flows, subscription models, and catalog layouts.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/woocommerce/woocommerce-original.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Which platform should I choose: WooCommerce or Shopify?',
                'a' => 'It depends on your scale and requirements. Shopify is a fully hosted, reliable solution with fast setup, while WooCommerce offers unlimited custom post setups and open-source database flexibility.'
            ],
            [
                'q' => 'How do you handle security and payment processing?',
                'a' => 'We integrate industry-leading, secure payment gateways like Stripe, PayPal, and local gateways with SSL encryption, ensuring PCI compliance and secure customer transactions.'
            ]
        ],
        'process' => [
            'Discovery & Shop Schema Mapping',
            'Payment & Shipping Provider Alignment',
            'Store Theme & Layout Optimization',
            'Checkout & Cart Flow Customization',
            'Secure Database Configuration',
            'Responsive Testing across Devices',
            'Staff Orders Dashboard Setup',
            'Production Store Launch'
        ]
    ],
    'mobile-apps' => [
        'title' => 'Mobile App Development',
        'intro' => 'Delivering native iOS and Android apps with our expert development partners.',
        'bg_image' => 'assets/services/mobileapps.webp',
        'icon' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
        'description' => 'We deliver high-performance iOS and Android mobile apps through our trusted development partners. We manage the architecture, UI/UX handoff, and coordinate the entire process to ensure a flawless app store launch.',
        'tools' => [
            [
                'name' => 'Flutter',
                'desc' => 'We design and configure cross-platform application portfolios using Flutter, providing seamless performance and a native feel for both Apple iOS and Android OS.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg'
            ],
            [
                'name' => 'React Native',
                'desc' => 'Leveraged to develop interactive hybrid mobile solutions built with component frameworks that speed up release cycles and maintain code continuity.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Do you develop separate native apps or cross-platform apps?',
                'a' => 'We configure cross-platform hybrid applications using Flutter or React Native, which allows us to maintain a single codebase for both iOS and Android, reducing build and maintenance costs.'
            ],
            [
                'q' => 'Will you assist with publishing our apps to the App Store and Google Play?',
                'a' => 'Yes, we handle the entire App Store and Play Store launch process, including packaging, signing, submitting, and navigating developer console review policies.'
            ]
        ],
        'process' => [
            'Discovery & App Map Flow',
            'UI/UX Asset Transfer Prep',
            'Codebase Integration Configuration',
            'Hardware Features Calibration (GPS, Camera)',
            'Interactive Alpha/Beta Testing Cycles',
            'Beta Deployments (TestFlight)',
            'Store Listings & Guidelines Check',
            'Play Store & App Store Publish'
        ]
    ],
    'digital-marketing' => [
        'title' => 'Digital Marketing',
        'intro' => 'Driving organic visibility and executing targeted advertising campaigns.',
        'bg_image' => 'assets/services/digital.webp',
        'icon' => '<path d="M23 6 13.5 15.5 8.5 10.5 1 18M17 6h6v6"/>',
        'description' => 'Turn traffic into revenue with paid and organic growth strategies. We perform technical SEO audits, set up optimized Google Ads campaigns, and manage targeted advertising.',
        'tools' => [
            [
                'name' => 'Google Ads',
                'desc' => 'We design, launch, and manage conversion-focused pay-per-click (PPC) campaigns on Google. This includes query target keyword research, custom landing page alignment, and monthly bid optimization.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c7/Google_Ads_logo.svg'
            ],
            [
                'name' => 'Google Search Console & SEO',
                'desc' => 'Comprehensive technical audits and content structuring. We optimize site speed, meta tags, and schema markers to ensure your website index ranks first in organic listings.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'How long does it take to see organic search engine ranking improvements?',
                'a' => 'Organic SEO is a long-term strategy. You typically begin seeing notice-worthy keyword indexing and traffic increases within 3 to 6 months of execution.'
            ],
            [
                'q' => 'How do you ensure our Google Ads budget is not wasted?',
                'a' => 'We configure strict match keyword intent, negative keyword lists, landing page target alignment, and regular conversion tracking to focus spend only on warm leads.'
            ]
        ],
        'process' => [
            'Goals, Key KPIs & Target Archetype',
            'Technical SEO Page Load Audits',
            'Competitor Search Analytics Mapping',
            'Landing Pages Validation & Testing',
            'Pixel & Conversion Codes Integration',
            'Google Ads & Setup',
            'Initial Ad Campaign Push',
            'Performance Dashboards Review'
        ]
    ],
    'social-media' => [
        'title' => 'Social Media & Content',
        'intro' => 'Managing brand feeds, designing visual assets, and producing video cuts.',
        'bg_image' => 'assets/services/social.webp',
        'icon' => '<path d="m22 8-6 4 6 4V8z"/><rect x="2" y="6" width="14" height="12" rx="2"/>',
        'description' => 'Keep your audience engaged with curated graphic assets and shortform videos. We manage your platform feeds and maintain a consistent brand aesthetic.',
        'tools' => [
            [
                'name' => 'Adobe Photoshop',
                'desc' => 'We create beautiful social feed layouts, banners, and visual assets using Adobe Photoshop, ensuring visual continuity.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg'
            ],
            [
                'name' => 'Adobe Illustrator',
                'desc' => 'Designing clean vector graphics, custom icons, brand identity patterns, and scalable editorial illustrations.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg'
            ],
            [
                'name' => 'Canva',
                'desc' => 'Utilized to build accessible and editable visual assets, template kits, and rapid layout schedulers for brand collaboration.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Canva_logo.svg'
            ],
            [
                'name' => 'Adobe Premiere Pro',
                'desc' => 'We edit vertical reel format videos, compile audio tracks, style subtitles, and create engaging social media shorts.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/premierepro/premierepro-plain.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'What platforms do you manage for social media campaigns?',
                'a' => 'We support branding layouts and content feeds across Instagram, LinkedIn, Facebook, and TikTok, aligning visual style guides to each audience.'
            ],
            [
                'q' => 'Do you write the post captions and perform hashtag research?',
                'a' => 'Yes, our copywriting team designs high-engagement captions, conducts keyword/hashtag research, and plans the content calendar for your review.'
            ]
        ],
        'process' => [
            'Guidelines, Layout & Moodboard Validation',
            'Content Pillars Strategy Construction',
            'Graphic Design Calendar Definition',
            'Captions & Hashtag Matrix Setup',
            'Reels & Short Videos Post-Production',
            'Feed Posts Handoff & Adjustments',
            'Direct Scheduled Posting Setup',
            'Analytics Report Card Creation'
        ]
    ],
    'it-infrastructure' => [
        'title' => 'IT & Business Infrastructure',
        'intro' => 'Configuring professional corporate mail boxes and secure web hosting.',
        'bg_image' => 'assets/services/it.webp',
        'icon' => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><path d="M6 6h.01M6 18h.01"/>',
        'description' => 'Establish a secure, high-uptime digital environment for your organization. We configure business email platforms and handle cPanel hosting setup.',
        'tools' => [
            [
                'name' => 'Google Workspace',
                'desc' => 'Secure business email address routing (e.g. name@company.com), cloud storage setup, sitemap verification, and business tools synchronization.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg'
            ],
            [
                'name' => 'cPanel & Cloud Hosting',
                'desc' => 'cPanel setup, VPS server settings, secure DNS configuration (DKIM, SPF, DMARC), SSL certifications setup, and daily site backup routines.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cpanel/cpanel-original.svg'
            ],
            [
                'name' => 'Reseller Hosting',
                'desc' => 'Dedicated reseller admin panels and virtual account subdivisions for hosting multi-tenant site architectures.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cpanel/cpanel-original.svg'
            ],
            [
                'name' => 'Cloud Infrastructure',
                'desc' => 'High-performance cloud virtual machines, database server configuration, and Amazon Web Services (AWS) deployment patterns.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg'
            ],
            [
                'name' => 'Microsoft Outlook & Exchange',
                'desc' => 'Enterprise Office 365 Exchange mailboxes, Outlook synchronization, custom domain integration, and security controls.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Can you set up and migrate our team to custom Google Workspace emails?',
                'a' => 'Yes, we configure secure domain name routing, set up professional custom emails (name@company.com), and synchronize business tools and cloud drives.'
            ],
            [
                'q' => 'How do you protect our cloud hosting server against outages and data loss?',
                'a' => 'We implement daily automated site backups, configure secure SSL certifications, and setup server firewall settings (DKIM, SPF, DMARC) for complete security.'
            ]
        ],
        'process' => [
            'Current IT Setup Mapping & Audits',
            'Secure Business Emails Routing Configuration',
            'Cloud Host Server Setup & Hosting Integration',
            'SSL Certificates Setup & Encryption Tuning',
            'Automated Security Backup Routing',
            'DNS settings checks (SPF, DKIM, DMARC)',
            'Access Configuration & Onboarding Handoff',
            'VPS & Domain Hosting Launch'
        ]
    ]
];

// Fallback if not found
if (!array_key_exists($service_key, $services_data)) {
    $service_key = 'web-design';
}

$current_service = $services_data[$service_key];

// Define case studies for the slider
$caseStudies = [
    [
        'id'        => 'hulul-kitchen',
        'title'     => 'Hulul Kitchen',
        'tagline'   => 'From a local equipment store to a trusted kitchen solutions brand.',
        'photo'     => 'assets/works/hul.webp',
    ],
    [
        'id'        => 'edihi',
        'title'     => 'Edhini',
        'tagline'   => 'Authentic Ayurvedic treatments and holistic healthcare services.',
        'photo'     => 'assets/works/ed.webp',
    ],
    [
        'id'        => 'cac',
        'title'     => 'Coimbatore Ayurvedic Centre',
        'tagline'   => 'Strong online presence for a leading Ayurvedic healthcare center in Coimbatore.',
        'photo'     => 'assets/works/cacc.webp',
    ],
    [
        'id'        => 'bmhn',
        'title'     => 'Baby Memorial College of Nursing',
        'tagline'   => 'A modern educational portal showcasing academic excellence and admissions.',
        'photo'     => 'assets/works/bmhn.webp',
    ],
    [
        'id'        => 'snims-hospital',
        'title'     => 'SNIMS Hospital',
        'tagline'   => 'Turning a complex multi-specialty institution into a simple, fast digital front door.',
        'photo'     => 'assets/images/sreena.webp',
    ]
];

$active_page = 'services';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($current_service['title']); ?> - Digibeat</title>

<style>
  /* Inter Font Implementation Throughout */
  body, button, input, select, textarea, h1, h2, h3, h4, h5, h6, .sd-hero-title, .sv-title, .tech-content h3, .ct-title {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  }

  /* Base Overrides: Pure White Theme */
  body {
    background-color: #ffffff !important;
    color: #1a1c1e !important;
  }
  
  /* ── Hero Banner Section (Like reference image) ── */
  .sd-hero {
    height: 250px;
    min-height: 250px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('<?php echo (strpos($current_service['bg_image'], "http") === 0) ? $current_service['bg_image'] : "/digibeat/" . $current_service['bg_image']; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    text-align: left;
    position: relative;
    padding: 0 80px;
    z-index: 10;
  }
  @media (max-width: 767.98px) {
    .sd-hero {
      height: 280px;
      min-height: 280px;
      padding: 0 24px;
    }
  }
  .sd-hero-content {
    max-width: 1200px;
    width: 100%;
    z-index: 20;
  }
  .sd-hero-title {
    font-size: clamp(32px, 5.2vw, 56px);
    font-weight: 500;
    line-height: 1.2;
    margin: 0;
    color: #ffffff;
    text-transform: none; /* Case matches array title value, not forced uppercase */
    letter-spacing: -1px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
  }

  /* Breadcrumbs navigation */
  .sv-breadcrumbs {
    font-size: 13.5px;
    color: #64748b;
    margin-bottom: 48px;
    font-family: 'Inter', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .sv-breadcrumbs a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.2s ease;
  }
  .sv-breadcrumbs a:hover {
    color: var(--sv-blue);
  }
  .sv-breadcrumbs span {
    color: var(--sv-ink);
    font-weight: 500;
  }
  
  /* Scroll Indicator */
  .sd-scroll-down {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 20;
    color: rgba(255, 255, 255, 0.6);
    animation: sd-bounce 2s infinite;
  }
  .sd-scroll-down svg {
    width: 28px;
    height: 28px;
    stroke-width: 2.2;
  }
  @keyframes sd-bounce {
    0%, 20%, 50%, 80%, 100% { transform: translate(-50%, 0); }
    40% { transform: translate(-50%, -10px); }
    60% { transform: translate(-50%, -5px); }
  }

  /* ══════════════════════════════════════════════════════════
     SERVICE SPEC PANEL — new middle section
     A "technical blueprint" reading: engineering-drawing grid,
     coordinate labels, a slow vertical scan line, and a spec
     sheet stack for each tool. Distinctive signature: the
     scanline + coordinate framing, tying "service" to something
     being actively inspected/measured.
     ══════════════════════════════════════════════════════════ */
  @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap');

  .sv-panel {
    --sv-ink: #0a0e1a;
    --sv-slate: #56607a;
    --sv-line: rgba(61, 95, 255, 0.10);
    --sv-blue: #3d5fff;
    --sv-blue-soft: #5b7bff;
    --sv-violet: #8b5cf6;
    --sv-mint: #10b981;
    --sv-canvas: #f7f8fc;
    --sv-mono: 'JetBrains Mono', ui-monospace, monospace;

    position: relative;
    background: #ffffff;
    padding: 30px 0 130px;
    overflow: hidden;
    z-index: 20;
  }

  .sv-blueprint-grid {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(var(--sv-line) 1px, transparent 1px),
      linear-gradient(90deg, var(--sv-line) 1px, transparent 1px);
    background-size: 64px 64px;
    -webkit-mask-image: radial-gradient(ellipse 80% 60% at 50% 30%, #000 0%, transparent 75%);
            mask-image: radial-gradient(ellipse 80% 60% at 50% 30%, #000 0%, transparent 75%);
    pointer-events: none;
    z-index: 1;
  }

  .sv-scanline {
    position: absolute;
    left: 0;
    right: 0;
    height: 140px;
    background: linear-gradient(180deg, transparent, rgba(61, 95, 255, 0.06) 45%, rgba(61, 95, 255, 0.1) 50%, rgba(61, 95, 255, 0.06) 55%, transparent);
    animation: sv-scan 9s linear infinite;
    pointer-events: none;
    z-index: 1;
  }
  @keyframes sv-scan {
    0%   { top: -140px; }
    100% { top: 100%; }
  }

  .sv-coords {
    position: absolute;
    font-family: var(--sv-mono);
    font-size: 11px;
    letter-spacing: 0.08em;
    color: #9aa4bf;
    z-index: 2;
  }
  .sv-coords-tl { top: 48px; left: 32px; }
  .sv-coords-br { bottom: 48px; right: 32px; }

  .sv-wrap {
    position: relative;
    z-index: 10;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
  }

  .sv-grid {
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 90px;
    align-items: start;
  }
  @media (max-width: 991.98px) {
    .sv-grid { grid-template-columns: 1fr; gap: 56px; }
  }

  /* ── Intro column ── */
  .sv-intro {
    position: sticky;
    top: 120px;
  }
  @media (max-width: 991.98px) {
    .sv-intro { position: static; }
  }

  .sv-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: var(--sv-mono);
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--sv-blue);
    margin-bottom: 26px;
  }
  .sv-eyebrow-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--sv-mint);
    box-shadow: 0 0 8px var(--sv-mint);
    animation: sv-pulse 1.6s infinite;
    flex-shrink: 0;
  }
  @keyframes sv-pulse {
    0%, 100% { opacity: 0.35; }
    50% { opacity: 1; }
  }

  .sv-title {
    font-size: clamp(32px, 3.6vw, 46px);
    font-weight: 800;
    color: var(--sv-ink);
    letter-spacing: -1px;
    line-height: 1.1;
    margin: 0 0 24px;
  }

  .sv-desc {
    font-size: 16.5px;
    line-height: 1.85;
    color: var(--sv-slate);
    margin: 0 0 40px;
    max-width: 46ch;
  }

  .sv-meta {
    display: flex;
    align-items: center;
    gap: 28px;
    padding: 24px 0;
    margin-bottom: 40px;
    border-top: 1px solid #eceff5;
    border-bottom: 1px solid #eceff5;
  }
  .sv-meta-item {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }
  .sv-meta-num {
    font-family: var(--sv-mono);
    font-size: 26px;
    font-weight: 700;
    color: var(--sv-ink);
  }
  .sv-meta-label {
    font-size: 11.5px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #9aa4bf;
  }
  .sv-meta-divider {
    width: 1px;
    height: 34px;
    background: #e5e8f0;
  }

  .sv-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 32px;
    background: var(--sv-ink);
    color: #ffffff !important;
    font-weight: 600;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
  }
  .sv-cta:hover {
    background: var(--sv-blue);
    transform: translateY(-2px);
    box-shadow: 0 15px 25px -10px rgba(61, 95, 255, 0.45);
  }
  .sv-cta svg {
    width: 15px;
    height: 15px;
    stroke: currentColor;
    stroke-width: 2.5;
    fill: none;
    transition: transform 0.3s ease;
  }
  .sv-cta:hover svg { transform: translateX(4px); }

  /* ── Tool spec stack ── */
  .sv-stack {
    display: flex;
    flex-direction: column;
    gap: 22px;
  }

  .sv-card {
    position: relative;
    display: grid;
    grid-template-columns: 44px 76px 1fr;
    align-items: center;
    gap: 26px;
    padding: 28px 30px;
    background: var(--sv-canvas);
    border: 1px solid #eceff5;
    border-radius: 16px;
    overflow: hidden;
    transition: border-color 0.35s ease, box-shadow 0.35s ease, transform 0.35s ease, background 0.35s ease;
  }
  @media (max-width: 560px) {
    .sv-card {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 18px;
      padding: 24px 20px;
    }
    .sv-card-frame {
      width: 60px;
      height: 60px;
      border-radius: 10px;
    }
    .sv-card-frame img {
      width: 28px;
      height: 28px;
    }
  }

  .sv-card:hover {
    background: #ffffff;
    border-color: rgba(61, 95, 255, 0.35);
    box-shadow: 0 20px 45px -18px rgba(61, 95, 255, 0.22);
    transform: translateY(-3px);
  }

  .sv-card-index {
    font-family: var(--sv-mono);
    font-size: 13px;
    font-weight: 700;
    color: #c3c9db;
    transition: color 0.3s ease;
  }
  .sv-card:hover .sv-card-index { color: var(--sv-blue); }

  .sv-card-frame {
    width: 76px;
    height: 76px;
    border-radius: 14px;
    background: #ffffff;
    border: 1px solid #e5e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: border-color 0.3s ease, transform 0.3s ease;
  }
  .sv-card:hover .sv-card-frame {
    border-color: rgba(61, 95, 255, 0.3);
    transform: scale(1.04);
  }
  .sv-card-frame img {
    width: 34px;
    height: 34px;
    object-fit: contain;
  }

  .sv-card-body { min-width: 0; }
  .sv-card-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 8px;
  }
  .sv-card-head h3 {
    font-size: 19px;
    font-weight: 700;
    color: var(--sv-ink);
    margin: 0;
    letter-spacing: -0.3px;
  }
  .sv-card-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--sv-mono);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--sv-mint);
    flex-shrink: 0;
  }
  .sv-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--sv-mint);
    box-shadow: 0 0 6px var(--sv-mint);
  }
  .sv-card-body p {
    font-size: 14.5px;
    line-height: 1.7;
    color: var(--sv-slate);
    margin: 0;
  }

  .sv-card-bar {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 3px;
    background: #eceff5;
    overflow: hidden;
  }
  .sv-card-bar span {
    display: block;
    height: 100%;
    width: 100%;
    background: linear-gradient(90deg, var(--sv-blue), var(--sv-violet));
    transform: translateX(-100%);
    transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .sv-card:hover .sv-card-bar span { transform: translateX(0); }

  @media (prefers-reduced-motion: reduce) {
    .sv-scanline, .sv-eyebrow-dot { animation: none; }
  }

  @media (max-width: 767.98px) {
    .sv-panel {
      padding: 90px 0 70px;
    }
    .sv-wrap {
      padding: 0 20px;
    }
    .sv-coords {
      display: none;
    }
    .sv-meta {
      gap: 16px;
      margin-bottom: 30px;
    }
  }
  @media (max-width: 480px) {
    .sv-meta {
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }
    .sv-meta-divider {
      display: none;
    }
  }

  /* ── Futuristic Card Slider: White Theme ── */
  .cyber-terminal-cs {
    --ct-bg-dark: #f8fafc;
    --ct-border: rgba(91, 123, 255, 0.12);
    --ct-border-glow: rgba(91, 123, 255, 0.25);
    --ct-neon-cyan: #5b7bff;
    --ct-neon-purple: #ab44ff;
    --ct-text-primary: #0f172a;
    --ct-text-muted: #475569;
    --ct-font-mono: monospace;
    
    position: relative;
    background: var(--ct-bg-dark) !important;
    padding: 120px 0;
    color: var(--ct-text-primary);
    overflow: hidden;
    z-index: 20;
    border-top: 1px solid #e2e8f0;
  }
  .cyber-terminal-cs::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(rgba(91, 123, 255, 0.02) 1px, transparent 1px),
      linear-gradient(90deg, rgba(91, 123, 255, 0.02) 1px, transparent 1px);
    background-size: 40px 40px;
    background-position: center;
    pointer-events: none;
    z-index: 1;
  }
  .ct-bg-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.06;
    pointer-events: none;
    z-index: 1;
  }
  .ct-bg-glow-1 {
    background: radial-gradient(circle, var(--ct-neon-cyan), transparent);
    top: -10%;
    left: -10%;
  }
  .ct-bg-glow-2 {
    background: radial-gradient(circle, var(--ct-neon-purple), transparent);
    bottom: -10%;
    right: -10%;
  }
  .ct-wrap {
    position: relative;
    z-index: 10;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
  }
  .ct-head {
    margin-bottom: 72px;
    text-align: left;
  }
  .ct-title {
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 800;
    margin: 0 0 16px;
    color: #0f172a;
    letter-spacing: -1px;
  }
  .ct-title span {
    background: linear-gradient(135deg, var(--ct-neon-cyan), #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .ct-sub {
    font-size: 16px;
    color: var(--ct-text-muted);
    max-width: 600px;
    margin: 0;
    line-height: 1.6;
  }
  
  /* Card Viewport */
  .cs-cards-viewport {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding: 20px 0;
  }
  .cs-cards {
    display: flex;
    gap: 30px;
    width: max-content;
    will-change: transform;
  }
  
  /* Cards with Corner Brackets */
  .cs-card {
    display: flex;
    flex-direction: column;
    width: calc((100vw - 80px - 60px) / 3);
    max-width: 420px;
    background: #ffffff;
    border: 1px solid var(--ct-border);
    position: relative;
    padding: 30px;
    text-decoration: none;
    transition: background 0.3s, border-color 0.3s, box-shadow 0.3s;
    flex-shrink: 0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
  }
  @media (max-width: 900px) {
    .cs-card {
      width: calc(100vw - 80px) !important;
      max-width: none;
      padding: 24px;
    }
  }
  @media (max-width: 767.98px) {
    .cs-card {
      width: calc(100vw - 40px) !important;
      max-width: none;
      padding: 20px;
    }
  }
  @media (max-width: 767.98px) {
    .cyber-terminal-cs {
      padding: 80px 0;
    }
    .ct-wrap {
      padding: 0 20px;
    }
    .ct-head {
      margin-bottom: 40px;
    }
  }
  .cs-card:hover {
    border-color: var(--ct-border-glow);
    box-shadow: 0 15px 35px rgba(91, 123, 255, 0.12);
  }
  .cs-card__bracket {
    position: absolute;
    width: 10px;
    height: 10px;
    border: 2px solid #5b7bff;
    opacity: 0.3;
    transition: transform 0.3s ease, border-color 0.3s ease;
  }
  .cs-card__bracket-tl { top: 12px; left: 12px; border-right: none; border-bottom: none; }
  .cs-card__bracket-tr { top: 12px; right: 12px; border-left: none; border-bottom: none; }
  .cs-card__bracket-bl { bottom: 12px; left: 12px; border-right: none; border-top: none; }
  .cs-card__bracket-br { bottom: 12px; right: 12px; border-left: none; border-top: none; }
  
  .cs-card:hover .cs-card__bracket {
    transform: scale(1.15);
    border-color: #22d3ee;
    opacity: 0.8;
  }
  .cs-card__media {
    position: relative;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    margin-bottom: 24px;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }
  .cs-card__media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .cs-card:hover .cs-card__media img {
    transform: scale(1.06);
  }
  .cs-card__body {
    text-align: left;
  }
  .cs-card__name {
    font-size: 19px;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 10px;
    transition: color 0.3s;
  }
  .cs-card:hover .cs-card__name {
    color: var(--ct-neon-cyan);
  }
  .cs-card__role {
    font-size: 13.5px;
    line-height: 1.6;
    color: var(--ct-text-muted);
    margin: 0;
  }
  
  .cs-view-all {
    margin-top: 56px;
    display: flex;
    justify-content: center;
  }
  .cs-view-all__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--ct-font-mono);
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--ct-neon-cyan);
    border: 1px solid var(--ct-border);
    padding: 12px 28px;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s;
    background: transparent;
  }
  .cs-view-all__btn:hover {
    color: #ffffff;
    background: var(--ct-neon-cyan);
    box-shadow: 0 0 15px rgba(91, 123, 255, 0.3);
  }
  .cs-view-all__btn svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
  }

  /* Centered Breadcrumbs Bar */
  .sv-breadcrumbs-bar {
    padding: 10px 0;
    border-bottom: 1px solid #eceff5;
    background: #ffffff;
    z-index: 30;
    position: relative;
  }
  .sv-breadcrumbs-bar .sv-breadcrumbs {
    margin-bottom: 0;
  }

  /* Centered Main Paragraph Layout */
  .sv-header-centered {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .sv-header-centered .sv-eyebrow {
    justify-content: center;
  }
  .sv-header-centered .sv-title {
    margin: 0 0 20px;
    text-align: center;
  }
  .sv-header-centered .sv-desc {
    margin: 0 auto 30px;
    max-width: 70ch;
    text-align: center;
    color: var(--sv-slate);
    font-size: 16.5px;
    line-height: 1.85;
  }
  .sv-header-centered .sv-meta {
    justify-content: center;
    width: 100%;
    max-width: 400px;
    margin-bottom: 0;
    border-top: 1px solid #eceff5;
    border-bottom: 1px solid #eceff5;
  }

  /* Center CTA Container */
  .sv-cta-container {
    text-align: center;
    margin-top: 60px;
  }

  /* Tools Grid (Like reference image) */
  .sv-tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 40px;
  }
  .sv-tools-grid .sv-card {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 36px;
    background: rgba(247, 248, 252, 0.7);
    border: 1px solid #eceff5;
    border-radius: 20px;
    transition: all 0.35s ease;
    text-align: left;
    position: relative;
    overflow: hidden;
  }
  .sv-tools-grid .sv-card:hover {
    background: #ffffff;
    border-color: rgba(61, 95, 255, 0.35);
    box-shadow: 0 20px 45px -18px rgba(61, 95, 255, 0.22);
    transform: translateY(-5px);
  }
  .sv-tools-grid .sv-card-frame {
    width: 64px;
    height: 64px;
    border-radius: 14px;
    background: #ffffff;
    border: 1px solid #e5e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    transition: all 0.3s ease;
  }
  .sv-tools-grid .sv-card:hover .sv-card-frame {
    border-color: rgba(61, 95, 255, 0.3);
    transform: scale(1.04);
  }
  .sv-tools-grid .sv-card-frame img {
    width: 32px;
    height: 32px;
    object-fit: contain;
  }
  .sv-tools-grid .sv-card-body {
    width: 100%;
  }
  .sv-tools-grid .sv-card-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
  }
  .sv-tools-grid .sv-card-head h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--sv-ink);
    margin: 0;
  }
  .sv-tools-grid .sv-card-body p {
    font-size: 15px;
    line-height: 1.7;
    color: var(--sv-slate);
    margin: 0;
  }
  .sv-tools-grid .sv-card-index {
    position: absolute;
    top: 24px;
    right: 24px;
    font-family: var(--sv-mono);
    font-size: 13px;
    font-weight: 700;
    color: #c3c9db;
  }
  .sv-tools-grid .sv-card:hover .sv-card-index {
    color: var(--sv-blue);
  }

  @media (max-width: 767.98px) {
    .sv-tools-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .sv-tools-grid .sv-card {
      padding: 24px;
    }
  }

  /* FAQ Accordion Section */
  .sv-faq-section {
    padding: 140px 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    position: relative;
    z-index: 20;
  }
  .faq-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 80px;
    padding: 0 24px;
  }
  .faq-eyebrow {
    font-family: var(--sv-mono);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--sv-blue);
    margin-bottom: 20px;
    display: inline-block;
  }
  .faq-title {
    font-size: clamp(34px, 4vw, 46px);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -1px;
    margin: 0 0 20px;
  }
  .faq-subtitle {
    font-size: 16.5px;
    color: #56607a;
    margin: 0;
    line-height: 1.7;
  }
  .faq-accordion {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .faq-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .faq-item:hover {
    border-color: rgba(61, 95, 255, 0.3);
    box-shadow: 0 10px 25px -10px rgba(61, 95, 255, 0.1);
  }
  .faq-trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 32px;
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    outline: none;
  }
  .faq-question {
    font-size: 22px;
    font-weight: 600;
    color: #0f172a;
    padding-right: 20px;
  }
  .faq-icon-wrapper {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
  }
  .faq-icon-wrapper svg {
    width: 14px;
    height: 14px;
    stroke: #64748b;
    transition: transform 0.3s ease;
  }
  .faq-trigger[aria-expanded="true"] .faq-icon-wrapper {
    background: var(--sv-blue);
    border-color: var(--sv-blue);
  }
  .faq-trigger[aria-expanded="true"] .faq-icon-wrapper svg {
    stroke: #ffffff;
    transform: rotate(45deg);
  }
  .faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s cubic-bezier(0.16, 1, 0.3, 1), padding 0.3s ease;
    padding: 0 32px;
  }
  .faq-content p {
    font-size: 19px;
    line-height: 1.7;
    color: #475569;
    margin: 0 0 24px;
  }
  @media (max-width: 767.98px) {
    .faq-trigger {
      padding: 20px 24px;
    }
    .faq-question {
      font-size: 19px;
    }
  }

  /* Services Slider Section */
  .sv-slider-section {
    padding: 120px 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    position: relative;
    z-index: 20;
    overflow: hidden;
  }
  .sv-slider-header {
    text-align: left;
    max-width: 1280px;
    margin: 0 auto 60px;
    padding: 0 32px;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 24px;
  }
  .sv-slider-title {
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -1px;
    margin: 0 0 12px;
  }
  .sv-slider-title span {
    background: linear-gradient(135deg, var(--sv-blue), #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .sv-slider-sub {
    font-size: 16px;
    color: #64748b;
    margin: 0;
    max-width: 500px;
    line-height: 1.6;
  }
  .sv-slider-nav {
    display: flex;
    gap: 12px;
  }
  .sv-slider-nav button {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: #0f172a;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .sv-slider-nav button:hover {
    background: var(--sv-blue);
    border-color: var(--sv-blue);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px -6px rgba(61,95,255,0.4);
  }
  .sv-slider-viewport {
    width: 100%;
    max-width: 1260px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    padding: 20px 0;
  }
  .sv-slider-track {
    display: flex;
    gap: 30px;
    width: max-content;
    will-change: transform;
  }
  .sv-slider-card {
    display: flex;
    flex-direction: column;
    width: calc((100vw - 80px - 60px) / 3);
    max-width: 400px;
    background: #000000;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 20px;
    position: relative;
    padding: 36px;
    text-decoration: none;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    flex-shrink: 0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  }
  .sv-slider-card:hover {
    opacity: 1 !important;
    border-color: rgba(61, 95, 255, 0.45);
    box-shadow: 0 15px 35px -10px rgba(61, 95, 255, 0.25);
    transform: translateY(-5px);
  }
  .sv-slider-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    margin-bottom: 24px;
    transition: all 0.3s ease;
  }
  .sv-slider-card-icon svg {
    width: 24px;
    height: 24px;
    stroke: currentColor;
    stroke-width: 1.8;
    fill: none;
  }
  .sv-slider-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 12px;
  }
  .sv-slider-card p {
    font-size: 14.5px;
    line-height: 1.6;
    color: #d1d5db;
    margin: 0 0 24px;
    flex-grow: 1;
  }
  .sv-slider-card-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--sv-mono);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #ffffff;
    text-decoration: none;
    transition: all 0.3s;
    margin-top: auto;
  }
  .sv-slider-card-btn svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    stroke-width: 2.2;
    transition: transform 0.3s;
  }

  @media (max-width: 1024.98px) {
    .sv-slider-card {
      width: calc((100vw - 80px - 30px) / 2) !important;
      max-width: none;
    }
  }
  @media (max-width: 767.98px) {
    .sv-slider-viewport {
      width: calc(100vw - 40px);
    }
    .sv-slider-card {
      width: calc(100vw - 40px) !important;
      padding: 24px;
    }
    .sv-slider-section {
      padding: 80px 0;
    }
    .sv-slider-header {
      padding: 0 20px;
      margin-bottom: 40px;
    }
  }

  /* ================= OUR PROCESS SECTION ================= */
  .sv-process-section {
    padding: 140px 0;
    background: #fbfcfe;
    border-top: 1px solid #e2e8f0;
    position: relative;
    z-index: 20;
    overflow: hidden;
  }
  .sv-process-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      radial-gradient(rgba(61, 95, 255, 0.07) 1px, transparent 1px);
    background-size: 26px 26px;
    -webkit-mask-image: radial-gradient(ellipse 70% 55% at 50% 0%, #000 0%, transparent 75%);
            mask-image: radial-gradient(ellipse 70% 55% at 50% 0%, #000 0%, transparent 75%);
    pointer-events: none;
    z-index: 1;
  }
  .process-header {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 700px;
    margin: 0 auto 80px;
    padding: 0 24px;
  }
  .process-eyebrow {
    font-family: var(--sv-mono);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--sv-blue);
    margin-bottom: 20px;
    display: inline-block;
  }
  .process-title {
    font-size: clamp(34px, 4vw, 46px);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -1px;
    margin: 0 0 20px;
  }
  .process-subtitle {
    font-size: 16.5px;
    color: #56607a;
    margin: 0;
    line-height: 1.7;
  }
  .process-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px 28px;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Connector line threading through the numbered badges on desktop */
  .process-grid::before {
    content: '';
    position: absolute;
    top: 32px;
    left: calc(32px + 28px);
    right: calc(32px + 28px);
    height: 1px;
    background: repeating-linear-gradient(90deg, #e2e8f0 0, #e2e8f0 6px, transparent 6px, transparent 12px);
    z-index: 0;
  }

  .process-card {
    --accent: var(--sv-blue);
    background: #ffffff;
    border: 1px dashed #cbd5e1;
    border-radius: 16px;
    padding: 32px 24px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    min-height: 180px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.01);
  }
  .process-card:nth-child(4n+1) { --accent: #2563eb; }
  .process-card:nth-child(4n+2) { --accent: #7c3aed; }
  .process-card:nth-child(4n+3) { --accent: #059669; }
  .process-card:nth-child(4n+4) { --accent: #db2777; }

  .process-card:hover {
    border-style: solid;
    border-color: var(--accent);
    box-shadow: 0 20px 45px -12px color-mix(in srgb, var(--accent) 15%, transparent);
    transform: translateY(-6px);
    background: color-mix(in srgb, var(--accent) 2%, #ffffff);
  }

  .process-badge {
    position: relative;
    z-index: 2;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
    font-family: var(--sv-mono);
    font-size: 14px;
    font-weight: 700;
    color: var(--accent);
    background: #ffffff;
    border: 2px solid var(--accent);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .process-card:hover .process-badge {
    background: var(--accent);
    color: #ffffff;
    box-shadow: 0 0 15px color-mix(in srgb, var(--accent) 40%, transparent);
    transform: scale(1.05);
  }

  .process-step-title {
    font-size: 17.5px;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
    line-height: 1.45;
    position: relative;
    z-index: 2;
    transition: color 0.3s ease;
  }
  .process-card:hover .process-step-title {
    color: #000000;
  }

  @media (max-width: 1024.98px) {
    .process-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }
    .process-grid::before { display: none; }
  }
  @media (max-width: 600px) {
    .process-grid {
      grid-template-columns: 1fr;
      gap: 18px;
      padding: 0 20px;
    }
    .sv-process-section {
      padding: 80px 0;
    }
    .process-card {
      padding: 28px 22px 24px;
      min-height: 150px;
    }
  }
</style>
<link rel="icon" type="image/png" href="/assets/images/logo-footer.png?v=2">
</head>
<body>
<?php include 'header.php'; ?>

<section class="sd-hero">
  <div class="sd-hero-content">
    <h1 class="sd-hero-title"><?php echo htmlspecialchars($current_service['title']); ?></h1>
  </div>
</section>

<!-- Breadcrumbs Navigation below Hero -->
<div class="sv-breadcrumbs-bar">
  <div class="sv-wrap">
    <div class="sv-breadcrumbs">
      <a href="/digibeat/">Home</a>
      <span>/</span>
      <a href="/digibeat/services">Services</a>
      <span>/</span>
      <span><?php echo htmlspecialchars($current_service['title']); ?></span>
    </div>
  </div>
</div>

<!-- ================= SERVICE SPEC PANEL ================= -->
<section class="sv-panel" id="scroll-content">
  <div class="sv-blueprint-grid" aria-hidden="true"></div>
  <div class="sv-scanline" aria-hidden="true"></div>

  <div class="sv-wrap">

    <!-- Centered Header & Main Paragraph (Like reference image) -->
    <div class="sv-header-centered">
      <div class="sv-eyebrow">
        <span class="sv-eyebrow-dot"></span>
        Service Profile
      </div>
      <h2 class="sv-title"><?php echo htmlspecialchars($current_service['title']); ?></h2>
      <p class="sv-desc"><?php echo htmlspecialchars($current_service['description']); ?></p>

      <div class="sv-meta">
        <div class="sv-meta-item">
          <span class="sv-meta-num"><?php echo str_pad(count($current_service['tools']), 2, '0', STR_PAD_LEFT); ?></span>
          <span class="sv-meta-label">Core Tools</span>
        </div>
        <div class="sv-meta-divider"></div>
        <div class="sv-meta-item">
          <span class="sv-meta-num">100%</span>
          <span class="sv-meta-label">In-House</span>
        </div>
      </div>
    </div>

    <!-- Centered Discuss Project CTA (Above Tools) -->
    <div class="sv-cta-container" style="margin-top: 0; margin-bottom: 60px;">
      <a href="/digibeat/contact?service=<?php echo urlencode($current_service['title']); ?>" class="sv-cta">
        <span>Discuss Project</span>
        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
        </svg>
      </a>
    </div>

    <!-- Tools Grid (Like reference image) -->
    <div class="sv-tools-grid">
      <?php foreach ($current_service['tools'] as $index => $tool): ?>
        <div class="sv-card">
          <div class="sv-card-index">/<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
          <div class="sv-card-frame">
            <img src="<?php echo (strpos($tool['image'], "http") === 0) ? htmlspecialchars($tool['image']) : "/digibeat/" . htmlspecialchars($tool['image']); ?>" alt="<?php echo htmlspecialchars($tool['name']); ?>" loading="lazy">
          </div>
          <div class="sv-card-body">
            <div class="sv-card-head">
              <h3><?php echo htmlspecialchars($tool['name']); ?></h3>
              <span class="sv-card-status"><span class="sv-dot"></span></span>
            </div>
            <p><?php echo htmlspecialchars($tool['desc']); ?></p>
          </div>
          <div class="sv-card-bar"><span></span></div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ================= OUR PROCESS SECTION ================= -->
<section class="sv-process-section" id="our-process">
  <div class="sv-wrap">
    <div class="process-header">
      <span class="process-eyebrow">Methodology</span>
      <h2 class="process-title">Our Process</h2>
      <p class="process-subtitle">How we take your project from initial concept to high-performance execution.</p>
    </div>
    
    <div class="process-grid">
      <?php foreach ($current_service['process'] as $index => $step): ?>
        <div class="process-card">
          <div class="process-badge"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
          <h3 class="process-step-title"><?php echo htmlspecialchars($step); ?></h3>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= CASE STUDIES SECTION ================= -->
<section class="cyber-terminal-cs" id="case-studies" aria-labelledby="case-studies-heading" data-purpose="case-studies">
  <div class="ct-bg-glow ct-bg-glow-1" aria-hidden="true"></div>
  <div class="ct-bg-glow ct-bg-glow-2" aria-hidden="true"></div>

  <div class="ct-wrap">
    <!-- Header -->
    <div class="ct-head">
      <h2 class="ct-title" id="case-studies-heading">
        <?php echo htmlspecialchars($current_service['title']); ?> <span>Works</span>
      </h2>
      <p class="ct-sub">Real results, real stories, real impact. Explore how we help businesses solve challenges and accelerate growth.</p>
    </div>

    <!-- Slider Viewport -->
    <div class="cs-cards-viewport">
      <div class="cs-cards" id="csCardsTrack">
        <?php foreach ($caseStudies as $i => $cs): ?>
          <div class="cs-card" data-index="<?php echo $i; ?>">
            <div class="cs-card__bracket cs-card__bracket-tl"></div>
            <div class="cs-card__bracket cs-card__bracket-tr"></div>
            <div class="cs-card__bracket cs-card__bracket-bl"></div>
            <div class="cs-card__bracket cs-card__bracket-br"></div>
            
            <div class="cs-card__media">
              <img src="<?php echo (strpos($cs['photo'], "http") === 0) ? htmlspecialchars($cs['photo']) : "/digibeat/" . htmlspecialchars($cs['photo']); ?>" alt="<?php echo htmlspecialchars($cs['title']); ?>" loading="lazy">
            </div>
            <div class="cs-card__body">
              <h3 class="cs-card__name"><?php echo htmlspecialchars($cs['title']); ?></h3>
              <p class="cs-card__role"><?php echo htmlspecialchars($cs['tagline']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- View All CTA -->
    <div class="cs-view-all">
      <a href="/digibeat/our-works" class="cs-view-all__btn">
        View All Works
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>

<!-- ================= FAQ SECTION ================= -->
<section class="sv-faq-section" id="faq">
  <div class="sv-wrap">
    <div class="faq-header">
      <span class="faq-eyebrow">FAQ</span>
      <h2 class="faq-title">Frequently Asked Questions</h2>
      <p class="faq-subtitle">Common questions about our <?php echo htmlspecialchars($current_service['title']); ?> services.</p>
    </div>
    
    <div class="faq-accordion">
      <?php foreach ($current_service['faqs'] as $index => $faq): ?>
        <div class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question"><?php echo htmlspecialchars($faq['q']); ?></span>
            <span class="faq-icon-wrapper">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5v14M5 12h14"/>
              </svg>
            </span>
          </button>
          <div class="faq-content">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section class="sv-slider-section" id="other-services">
  <div class="sv-slider-header">
    <div>
      <h2 class="sv-slider-title">Explore Our Services</h2>
      <p class="sv-slider-sub">We offer full-spectrum digital engineering and design solutions tailored to help your brand grow and succeed.</p>
    </div>
  </div>

  <div class="sv-slider-viewport">
    <div class="sv-slider-track" id="svSliderTrack">
      <?php foreach ($services_data as $key => $svc): 
        if ($key === $service_key) continue; // Exclude current active service
      ?>
        <a href="/digibeat/services/<?php echo htmlspecialchars($key); ?>" class="sv-slider-card">
          <div class="sv-slider-card-icon">
            <svg viewBox="0 0 24 24"><?php echo $svc['icon']; ?></svg>
          </div>
          <h3><?php echo htmlspecialchars($svc['title']); ?></h3>
          <p><?php echo htmlspecialchars($svc['intro']); ?></p>
          <div class="sv-slider-card-btn">
            <span>Explore Service</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    /* ===== CASE STUDIES INFINITE SLIDER ===== */
    (function initCsCardSlider() {
      var track = document.getElementById('csCardsTrack');
      var viewport = track ? track.parentElement : null;
      if (!track || !viewport) return;

      var realCards = Array.prototype.slice.call(track.children);
      var total = realCards.length;
      if (total === 0) return;

      // Always clone 3 cards to keep bounds stable across all desktop & mobile resizes
      var visible = 3;

      function makeClone(card) {
        return card.cloneNode(true);
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
        track.style.transition = withTransition ? 'transform .5s cubic-bezier(.16,.84,.44,1)' : 'none';
        track.style.transform = 'translateX(-' + (index * step) + 'px)';
      }

      function goTo(newIndex) {
        if (animating) return;
        animating = true;
        index = newIndex;
        setPosition(true);
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

      var autoTimer = setInterval(function () { goTo(index + 1); }, 4000);

      window.addEventListener('resize', function () {
        setPosition(false);
      });

      setPosition(false);
    })();

    /* ===== FAQ ACCORDION ===== */
    (function initFaqAccordion() {
      var faqTriggers = document.querySelectorAll('.faq-trigger');
      faqTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
          var isExpanded = this.getAttribute('aria-expanded') === 'true';
          var content = this.nextElementSibling;
          
          // Close all other items
          document.querySelectorAll('.faq-trigger').forEach(function (otherTrigger) {
            if (otherTrigger !== trigger) {
              otherTrigger.setAttribute('aria-expanded', 'false');
              otherTrigger.nextElementSibling.style.maxHeight = null;
            }
          });
          
          if (isExpanded) {
            this.setAttribute('aria-expanded', 'false');
            content.style.maxHeight = null;
          } else {
            this.setAttribute('aria-expanded', 'true');
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      });
    })();

    /* ===== SERVICES INFINITE SLIDER ===== */
    (function initServicesSlider() {
      var track = document.getElementById('svSliderTrack');
      if (!track) return;

      var realCards = Array.prototype.slice.call(track.children);
      var total = realCards.length;
      if (total === 0) return;

      function visibleCount() {
        if (window.innerWidth <= 767.98) return 1;
        if (window.innerWidth <= 1024.98) return 2;
        return 3;
      }
      var visible = visibleCount();

      function makeClone(card) {
        return card.cloneNode(true);
      }

      // Clone visible cards for infinite loop
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
        track.style.transition = withTransition ? 'transform .5s cubic-bezier(.16,.84,.44,1)' : 'none';
        track.style.transform = 'translateX(-' + (index * step) + 'px)';
      }

      function goTo(newIndex) {
        if (animating) return;
        animating = true;
        index = newIndex;
        setPosition(true);
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

      var autoTimer = setInterval(function () { goTo(index + 1); }, 4000);

      window.addEventListener('resize', function () {
        setPosition(false);
      });

      setPosition(false);
    })();
  });
</script>

<?php include 'footer.php'; ?>
</body>
</html>