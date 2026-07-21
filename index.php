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
$services_grid = [
    [
        'title' => 'Web Design (UI/UX)',
        'desc'  => 'Website Design — Figma, Adobe XD',
        'icon'  => '<path d="M12 20h9M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>',
        'link'  => 'services/web-design',
    ],
    [
        'title' => 'Web Development',
        'desc'  => 'Frontend (Bootstrap, HTML/CSS/JS, React JS) + Backend (Laravel, Node JS)',
        'icon'  => '<path d="m18 16 4-4-4-4M6 8l-4 4 4 4M14.5 4l-5 16"/>',
        'link'  => 'services/web-dev',
    ],
    [
        'title' => 'WordPress Development',
        'desc'  => 'Theme-based builds, HTML-to-WordPress conversion',
        'icon'  => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M21 9H3M21 15H3M12 3v18"/>',
        'link'  => 'services/wordpress',
    ],
    [
        'title' => 'E-commerce Solutions',
        'desc'  => 'WooCommerce & Shopify store setup',
        'icon'  => '<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4zM3 6h18M16 10a4 4 0 0 1-8 0"/>',
        'link'  => 'services/ecommerce',
    ],
    [
        'title' => 'Mobile App Development',
        'desc'  => 'Outsourced/partner delivery',
        'icon'  => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
        'link'  => 'services/mobile-apps',
    ],
    [
        'title' => 'Digital Marketing',
        'desc'  => 'SEO, Google Ads, Social Media Marketing',
        'icon'  => '<path d="M23 6 13.5 15.5 8.5 10.5 1 18M17 6h6v6"/>',
        'link'  => 'services/digital-marketing',
    ],
    [
        'title' => 'Social Media & Content',
        'desc'  => 'Social Media Management, Graphic Design (Canva/Photoshop/Illustrator), Video Editing',
        'icon'  => '<path d="m22 8-6 4 6 4V8z"/><rect x="2" y="6" width="14" height="12" rx="2"/>',
        'link'  => 'services/social-media',
    ],
    [
        'title' => 'IT & Business Infrastructure',
        'desc'  => 'Hosting Support (cPanel, Reseller, Cloud), Email Setup (Google Workspace, Outlook)',
        'icon'  => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><path d="M6 6h.01M6 18h.01"/>',
        'link'  => 'services/it-infrastructure',
    ],
];

$siteName    = 'Digibeat';
$pageTitle   = 'Digibeat';
$year        = date('Y');
$badgeText   = '';
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


$caseStudiesEyebrow = 'CASE STUDIES';
$caseStudiesHeadingLead   = 'Our Recent';
$caseStudiesHeadingScript = 'Works';
$caseStudiesSubtitle = 'Real results, real stories, real impact. Explore how we help businesses solve challenges and accelerate growth.';

$caseStudies = [
    [
        'id'           => 'hulul-kitchen',
        'industry'     => 'Hospitality & Commercial Equipment',
        'title'        => 'Hulul Kitchen',
        'tag'          => 'E-commerce · Equipment',
        'tagline'      => 'From a local equipment store to a trusted kitchen solutions brand.',
        'site'         => 'https://www.hululkitchen.sa',
        'photo'        => 'assets/images/hulul-cardd.webp',
        'cardImage'    => 'assets/images/hulul-cardd.webp',
        'heroImage'    => 'assets/images/hulul-case.webp',
        'gallery'      => [
            'assets/images/hulul-prod.webp',
            'assets/images/hulul-serv.webp'
        ],
        'challenge'    => 'Hulul Kitchen, a supplier of commercial and home kitchen equipment, needed a professional online presence to match the scale of their growing business. Their previous website lacked structure, product clarity, and strong branding — making it hard for customers to browse equipment or understand the range on offer.',
        'solution'     => [
            'A dedicated <b>product gallery</b> showcasing kitchen equipment',
            'Organized <b>equipment categories</b> for easy navigation',
            'A professional <b>brand-focused design</b> with consistent colors and layout',
            'A <b>responsive structure</b> for seamless viewing on any device'
        ],
        'results'      => [
            'Stronger digital presence &amp; improved brand perception',
            'Increased product inquiries through better visibility',
            'Enhanced customer experience with faster, clearer navigation',
            'Better engagement from clean presentation &amp; optimized layout'
        ]
    ],
    [
        'id'           => 'snims-hospital',
        'industry'     => 'Healthcare, Hospitals & Wellness',
        'title'        => 'SNIMS Hospital',
        'subtitle'     => 'Website Development | Kerala, India | Healthcare & Medical College',
        'tag'          => 'Healthcare · Medical College Hospital',
        'tagline'      => 'Turning a complex multi-specialty institution into a simple, fast digital front door.',
        'site'         => 'https://snims.org',
        'photo'        => 'assets/images/sreena.webp',
        'cardImage'    => 'assets/images/sreena.webp',
        'heroImage'    => 'assets/images/snims.webp',
        'gallery'      => [
            'assets/images/snimsdr.webp',
            'assets/images/snimsdp.webp'
        ],
        'intro'        => 'SNIMS (Sree Narayana Institute of Medical Sciences) is a multi-specialty medical college hospital in Ernakulam, Kerala, running 25+ departments across super-specialities and specialities. DigiBeat built their website from the ground up — engineered to handle a large doctor directory, appointment bookings, and multiple linked institutions (medical college, nursing college, careers portal) under one connected digital ecosystem.',
        'sections'     => [
            [
                'heading' => 'Built for a Hospital That Never Stops Running',
                'body'    => 'A hospital website isn\'t a brochure — it\'s the first point of contact for someone trying to find the right doctor, book an appointment, or reach emergency care. We designed SNIMS\'s site around that reality: fast search, clear department navigation, and zero friction between a visitor and a confirmed appointment.'
            ],
            [
                'heading' => 'Turning a Complex Institution into a Simple Digital Front Door',
                'body'    => 'SNIMS runs across multiple linked platforms — the main hospital site, a medical college, a nursing college, a careers portal, and election micro-sites for governance. We built the core WordPress site to tie all of it together cleanly, without making visitors feel lost between subdomains.'
            ]
        ],
        'requirements' => [
            'A fast, searchable way to find doctors by specialty or name across 25+ departments',
            'A frictionless appointment booking flow that reduces phone-call dependency',
            'A structure that could host and link a medical college, nursing college, and careers portal without confusing visitors',
            'Fast load times on both mobile and desktop — critical for anxious visitors searching in urgent situations',
            'A credible, trustworthy design befitting a medical college hospital'
        ],
        'solution'     => [
            'A <b>"Find Doctor" system</b> with dual search — by speciality and by doctor name — across 150+ doctor profiles',
            'An <b>integrated online appointment booking system</b>, replacing reliance on phone-only bookings',
            '<b>25+ dedicated department pages</b> covering super-specialities (Cardiology, Neurology, Neurosurgery, Nephrology, Gastroenterology) and specialities (General Medicine, Paediatrics, Orthopaedics, and more)',
            '<b>WhatsApp click-to-chat</b> integration for instant patient queries',
            'A <b>connected multi-portal structure</b> linking the medical college, nursing college, careers, and GCT election portals under one brand experience',
            'A <b>blog and news module</b> to keep patients updated on hospital programmes and outreach camps',
            '<b>Multi-location contact &amp; Google Maps integration</b> for easy navigation to the facility',
            'Performance-first WordPress build with <b>image optimisation &amp; server-side caching</b> for fast load times on any device'
        ],
        'technologies' => 'Built on WordPress with a performance-first approach — optimised theme architecture, custom post types for doctor and department management, and caching/image optimisation tuned specifically for PageSpeed performance on both mobile and desktop.',
        'stats'        => [
            ['value' => '90+',    'label' => 'Google PageSpeed score, mobile & desktop'],
            ['value' => '10,000+', 'label' => 'Website visitors in the first 28 days post-launch'],
            ['value' => '150+',   'label' => 'Appointment bookings generated through the website every month']
        ],
        'results'      => [
            '<b>90+</b> Google PageSpeed score on both mobile and desktop',
            '<b>10,000+</b> website visitors in the first 28 days post-launch',
            '<b>150+</b> appointment bookings generated through the website every month',
            'Zero friction between a visitor and a confirmed appointment — fast search, clear navigation',
            'All linked institutions (medical college, nursing college, careers) unified under one seamless brand'
        ]
    ],
    [
        'id'           => 'elite-mission-hospital',
        'industry'     => 'Healthcare, Hospitals & Wellness',
        'title'        => 'Elite Mission Hospital',
        'subtitle'     => 'Website Development | Thrissur, Kerala | Multi-Specialty Hospital',
        'tag'          => 'Healthcare · Multi-Specialty Hospital',
        'tagline'      => 'Organising 30+ specialities and 80+ doctors into a website a patient can navigate in seconds.',
        'site'         => 'https://elitemissionhospital.com',
        'photo'        => 'assets/images/elite.webp',
        'cardImage'    => 'assets/images/elite.webp',
        'heroImage'    => 'assets/images/elitee.webp',
        'gallery'      => [  
            'assets/images/elitedr.webp',
            'assets/images/elitesp.webp'
        ],
        'intro'        => 'Elite Mission Hospital has been serving Thrissur and central Kerala since 1979 — today running 30+ specialities, 80+ consulting doctors, and NABH-accredited care. A hospital with this much depth needed a website that could organise all of it without overwhelming the patient trying to find one doctor, one department, one answer. DigiBeat built that site from the ground up on WordPress.',
        'sections'     => [
            [
                'heading' => 'A Legacy Hospital Needed a Website That Matched Its Scale',
                'body'    => 'Elite Mission isn\'t a single-department clinic — it\'s a full-scale multi-specialty hospital with an academy, a nursing college, international patient services, and a hospital-wide accreditation story (NABH, ISO 9001:2015) to tell. The challenge wasn\'t just building pages — it was structuring 30+ specialities and 80+ doctor profiles so a first-time visitor could still find what they need in seconds.'
            ],
            [
                'heading' => 'Structure Over Clutter',
                'body'    => 'The real engineering problem on a hospital this size isn\'t the number of pages — it\'s making sure none of them feel buried. We built the navigation and speciality architecture specifically so a patient landing on any page is never more than two clicks from booking an appointment or finding the right doctor.'
            ]
        ],
        'requirements' => [
            'Organise 30+ medical specialities and subspecialities into a navigable structure without a cluttered menu',
            'Give every doctor a discoverable, searchable profile — by name and by speciality',
            'Build a dedicated appointment and enquiry flow to reduce dependency on phone bookings',
            'Present accreditation and credibility signals (NABH, ISO, Intertek) prominently for trust-building',
            'Support an active content engine — blog and health guides — for ongoing SEO and patient education',
            'Link satellite services (International Patients, Health Packages, Careers, Elite Academy) under one cohesive experience'
        ],
        'solution'     => [
            'A <b>structured speciality architecture</b> covering 30+ departments — from Cardiology and Neurosurgery to Rheumatology and Clinical Psychology — each with its own dedicated page',
            'A searchable <b>"Find Your Doctor" system</b> spanning 80+ doctor profiles, filterable by name and speciality',
            'A dedicated <b>"Get an Appointment" flow</b> alongside a "Make an Enquiry" path for non-urgent queries',
            'A <b>Health Care Packages module</b> for pre-priced checkup bundles — a conversion path most competitor hospital sites skip entirely',
            '<b>Accreditation and credibility placement</b> (NABH, ISO 9001:2015, Intertek) built into the homepage and About section',
            'A <b>content-ready blog architecture</b> already publishing patient-education articles on a consistent schedule',
            '<b>International Patient and Health Insurance sections</b> tailored to two distinct visitor intents',
            '<b>WhatsApp click-to-chat, video testimonials, and multi-line contact routing</b> (general enquiry vs. doctor\'s booking) for faster patient response',
            'Integrated satellite links to <b>Elite Academy and the hospital\'s careers portal</b>, kept visually consistent with the core brand'
        ],
        'technologies' => 'Built on WordPress with a custom speciality/doctor content structure, optimised for scale across 30+ department pages and 80+ profiles, with a content architecture designed to support ongoing blog publishing and SEO growth.',
        'stats'        => [
            ['value' => '30+',  'label' => 'Medical specialities & subspecialities, each with a dedicated page'],
            ['value' => '80+',  'label' => 'Doctor profiles, searchable by name and speciality'],
            ['value' => '1979', 'label' => 'Year established — a legacy hospital with a modern digital presence']
        ],
        'results'      => [
            'A patient can find any doctor or department in <b>two clicks or fewer</b> from any page',
            '<b>30+ speciality pages</b> live at launch — each optimised for search and patient discovery',
            '<b>80+ doctor profiles</b> fully searchable by name and speciality',
            'Appointment and enquiry flows live and generating bookings at launch',
            'NABH, ISO 9001:2015, and Intertek accreditations prominently communicated for instant trust',
            'International Patient and Health Package sections serving two high-intent visitor segments'
        ]
    ]
];

$testimonialsEyebrow = 'TESTIMONIALS';
$testimonialsHeadingLead   = 'What People';
$testimonialsHeadingScript = 'Say';
$testimonialsSubtitle = 'Real feedback from teams we\'ve shipped products with — on the work, the process, and what it\'s like to build together.';


$testimonials = [
    [
        'id'     => 'dr-alk',
        'photo'  => 'assets/images/dra.webp',
        'quote'  => 'We used the services of Digibeat for website development and I\'m really glad with the outcome. They clearly understood what I needed, gave cutting edge suggestions, and delivered high quality service, certainly in time and within our budget. I highly recommend Digibeat Online Solutions to anyone looking for web development services.',
        'name'   => 'Dr. Abdul Latheef Kiliyanni',
        'title'  => 'Dr. Alk',
        'accent' => 'purple',
        'video'  => '',
        'site'   => 'https://dralk.com',
    ],
    [
        'id'     => 'mr-ajith',
        'photo'  => '/assets/images/ajith.webp',
        'quote'  => 'Very satisfied with the work done by DigiBeat Online Solutions. The team redesigned our website to be faster, mobile-friendly, and more modern. They listened to our requirements, delivered on time, and were very responsive during the process. Highly recommended for reliable web development.',
        'name'   => 'Mr. Ajith',
        'title'  => 'Head, IT Department, SNIMS Ernakulam',
        'accent' => 'navy',
        'video'  => '',
        'site'   => 'https://snims.org',
    ],
    [
        'id'     => 'dr-sameeha',
        'photo'  => 'assets/images/drs.webp',
        'quote'  => 'I\'m truly impressed by the outstanding work done by Digibeat Online Solutions in creating my website. Their team was highly professional, creative, and responsive to every detail I envisioned.',
        'name'   => 'Dr. Sameeha N',
        'title'  => 'Chief Consultant, Dr. Sameeha\'s Homoeo Home',
        'accent' => 'mint',
        'video'  => '',
        'site'   => 'https://drsameeha.com',
    ],
    [
        'id'     => 'mr-kamal',
        'photo'  => 'assets/images/kamal.webp',
        'quote'  => 'Efficient and responsive web support provided by DigiBeat for Baby Memorial Hospital for past many years. Always quick to resolve issues and maintain smooth digital operations.',
        'name'   => 'Mr. Kamal K',
        'title'  => 'Senior Manager, Baby Memorial Hospitals',
        'accent' => 'purple',
        'video'  => '',
        'site'   => 'https://babymemorialhospital.in',
    ],
];


// Add / edit clients here — name is used for the alt text only.
$clients = [
    ['name' => 'ZeeQue Preschool',                    'logo' => 'assets/clients/zee.webp'],
    ['name' => 'Markaz',                               'logo' => 'assets/clients/markaz.webp'],
    ['name' => 'Utthan',                                'logo' => 'assets/clients/utthan.webp'],
    ['name' => 'BMH',                                   'logo' => 'assets/clients/bmh.webp'],
    ['name' => 'Edhini Ayurveda',                       'logo' => 'assets/clients/edhini.webp'],
    ['name' => 'ALA BMCON',                             'logo' => 'assets/clients/bmc.webp'],
    ['name' => 'Dr. Alk',                               'logo' => 'assets/clients/dralk.webp'],
    ['name' => 'Prime Ston',                            'logo' => 'assets/clients/prime.webp'],
    ['name' => 'Gulf Decorex',                          'logo' => 'assets/clients/gulf.webp'],
    ['name' => 'Medichem Disinfectant Industries',      'logo' => 'assets/clients/medichem.webp'],
    ['name' => "Dr. Sameeha's Homoeo Home",             'logo' => 'assets/clients/dr sameesha.webp'],
    ['name' => 'Gurudeva Charitable Trust',             'logo' => 'assets/clients/guru.webp'],
    ['name' => 'Sree Narayana Institute of Medical Sciences', 'logo' => 'assets/clients/sreen.webp'],
    ['name' => 'Hulul Tech',                            'logo' => 'assets/clients/hulul.webp'],
    ['name' => 'Ayyoobi Educity',                       'logo' => 'assets/clients/ayoobi.webp'],
    ['name' => 'Elite Mission Hospital',                'logo' => 'assets/clients/elite.webp'],
    ['name' => 'ph7 Indian Organic Spices',             'logo' => 'assets/clients/ph7.webp'],
    ['name' => 'AVP',                                   'logo' => 'assets/clients/avp.webp'],
    ['name' => 'Tree Health Care',                      'logo' => 'assets/clients/tree.webp'],
    ['name' => 'Jajini',                      'logo' => 'assets/clients/jajini.webp'],
];

 
// Change this to your real "view all" page.
$view_all_url = '/';



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
    .strata-services#services-grid{
      padding:100px 0 140px;
      background:#ffffff;
    }
    .strata-services#services-grid h2.big{
      color:#111827;
    }
    .strata-services#services-grid .svc-grid{
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
      display: flex;
      flex-direction: column;
      height: 100%;
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
    .strata-services .svc-card p{
      color:var(--st-gray-dim);font-size:14px;line-height:1.7;font-family:var(--st-body);
      flex-grow: 1;
      margin-bottom: 24px;
    }
    .strata-services .svc-card-btn{
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--st-mono);
      font-size: 11px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: .05em;
      color: var(--st-gray);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 10px 18px;
      border-radius: 8px;
      width: max-content;
      transition: all 0.3s var(--st-ease);
      text-decoration: none;
      z-index: 10;
    }
    .strata-services .svc-card-btn svg{
      width: 14px;
      height: 14px;
      stroke: currentColor;
      stroke-width: 2.2;
      fill: none;
      transition: transform 0.3s var(--st-ease);
    }
    .strata-services .svc-card:hover .svc-card-btn{
      color: #ffffff;
      border-color: var(--st-accent);
      background: rgba(77, 127, 255, 0.08);
      box-shadow: 0 0 15px rgba(77, 127, 255, 0.15);
    }
    .strata-services .svc-card-btn:hover svg{
      transform: translateX(4px);
    }
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

  /* ── CLIENTS SECTION — Clean Minimal Logo Layout ── */
  .cl {
    background: #000000;
    color: #fff;
    font-family: 'Inter', sans-serif;
    padding: 100px 0 80px;
    position: relative;
    overflow: hidden;
  }

  .cl-container {
    position: relative;
    z-index: 2;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 60px;
  }

  /* Two-column header */
  .cl-head {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 48px;
    margin-bottom: 80px;
  }
  .cl-title {
    font-size: clamp(52px, 7vw, 90px);
    font-weight: 800;
    letter-spacing: -0.04em;
    line-height: 1.0;
    margin: 0;
    color: #ffffff;
  }
  .cl-sub {
    font-size: clamp(16px, 1.8vw, 20px);
    font-weight: 400;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    max-width: 420px;
  }

  /* Logo Grid — full-width logos, no column gap */
  .cl-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    row-gap: 52px;
    column-gap: 0;
  }

  .cl-card {
    background: transparent;
    border: none;
    height: 140px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 16px;
    cursor: default;
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .cl-card img {
    width: 100%;
    height: 100%;
    max-height: 110px;
    object-fit: contain;
    opacity: 0.9;
    mix-blend-mode: screen;
    filter: brightness(1.2);
    transition: opacity 0.3s ease, transform 0.3s ease;
    display: block;
  }

  .cl-card:hover img {
    opacity: 1;
    filter: brightness(1.4);
    transform: scale(1.04);
  }

  /* CTA Button */
  .cl-cta {
    display: flex;
    justify-content: center;
    margin-top: 64px;
  }
  .cl-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 16px 36px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 4px;
    color: rgba(255, 255, 255, 0.9);
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 0.01em;
    transition: border-color 0.25s ease, background 0.25s ease, color 0.25s ease;
    background: transparent;
  }
  .cl-cta-btn:hover {
    border-color: rgba(255, 255, 255, 0.8);
    color: #fff;
    background: rgba(255, 255, 255, 0.06);
  }
  .cl-cta-btn svg {
    width: 16px;
    height: 16px;
    stroke: currentColor;
    transition: transform 0.2s ease;
  }
  .cl-cta-btn:hover svg {
    transform: translateX(5px);
  }

  @media (max-width: 1024px) {
    .cl-grid { grid-template-columns: repeat(4, 1fr); gap: 36px 48px; }
  }
  @media (max-width: 768px) {
    .cl-head { grid-template-columns: 1fr; gap: 24px; }
    .cl-grid { grid-template-columns: repeat(3, 1fr); gap: 32px 36px; }
    .cl-container { padding: 0 28px; }
  }
  @media (max-width: 480px) {
    .cl-grid { grid-template-columns: repeat(2, 1fr); gap: 28px 24px; }
  }

  </style>
  <link rel="icon" type="image/png" href="/assets/images/logo-footer.png?v=2">
</head>

<body class="min-h-screen flex flex-col relative overflow-x-hidden" style="background:#ffffff;">
  <div id="cr-header-wrap"><?php include 'header.php'; ?></div>

<!-- =========================================================
     HERO SECTION — WHITE · MODERN · INTER · ANIMATED
========================================================= -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

  /* ── Hero Root ── */
  .dh {
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    min-height: calc(100vh - var(--hdr-h, 72px));
    height: calc(100vh - var(--hdr-h, 72px));
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 60px 0 65px;
    text-align: center;
  }

  /* ── Background decoration elements ── */
  .dh-bg-visuals {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
  }
  
  .dh-bg-grid {
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(rgba(15, 23, 42, 0.018) 1px, transparent 1px),
      linear-gradient(90deg, rgba(15, 23, 42, 0.018) 1px, transparent 1px);
    background-size: 32px 32px;
    background-position: center center;
  }

  .dh-bg-glow {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.12;
    will-change: transform;
    animation: dh-glow-drift 15s ease-in-out infinite alternate;
  }
  .dh-bg-glow-1 {
    width: 320px;
    height: 320px;
    background: radial-gradient(circle, #6366f1, #818cf8);
    top: 15%;
    left: -80px;
  }
  .dh-bg-glow-2 {
    width: 290px;
    height: 290px;
    background: radial-gradient(circle, #0ea5e9, #22d3ee);
    bottom: 15%;
    right: -80px;
    animation-delay: -5s;
  }

  @keyframes dh-glow-drift {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(30px, 20px) scale(1.15); }
  }

  .dh-bg-radar {
    position: absolute;
    width: 480px;
    height: 480px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.7;
    z-index: 1;
    animation: dh-radar-spin 25s linear infinite;
  }

  @keyframes dh-radar-spin {
    from { transform: translate(-50%, -50%) rotate(0deg); }
    to { transform: translate(-50%, -50%) rotate(360deg); }
  }

  .dh-container {
    position: relative;
    z-index: 10;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Cyber Monospace Header */
  .dh-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: #6366f1;
    background: rgba(99, 102, 241, 0.05);
    border: 1px solid rgba(99, 102, 241, 0.15);
    padding: 8px 16px;
    border-radius: 6px;
    margin-bottom: 22px;
    font-family: monospace;
  }

  /* Massive Epic Typography */
  .dh-h1 {
    font-size: clamp(44px, 8vw, 88px);
    font-weight: 900;
    line-height: 1.0;
    letter-spacing: -0.05em;
    color: #0f172a;
    margin: 0 0 20px;
    text-transform: uppercase;
    user-select: none;
  }
  .dh-h1 span {
    background: linear-gradient(135deg, #6366f1, #0ea5e9, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .dh-sub {
    font-size: clamp(16px, 1.8vw, 20px);
    font-weight: 400;
    line-height: 1.65;
    color: #64748b;
    max-width: 580px;
    margin: 0 0 26px;
  }

  /* Actions with interactive brackets */
  .dh-actions {
    display: flex;
    align-items: center;
    gap: 28px;
    flex-wrap: wrap;
    justify-content: center;
  }

  .dh-action-link {
    display: inline-flex;
    align-items: center;
    color: #0f172a;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-decoration: none;
    font-family: var(--font-body), sans-serif;
    position: relative;
    padding: 10px 20px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .dh-action-link::before,
  .dh-action-link::after {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    width: 6px;
    border: 2px solid #cbd5e1;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .dh-action-link::before {
    left: 0;
    border-right: none;
  }
  .dh-action-link::after {
    right: 0;
    border-left: none;
  }

  /* Hover Bracket expansion */
  .dh-action-link:hover {
    color: #6366f1;
    letter-spacing: 0.18em;
  }
  .dh-action-link:hover::before {
    transform: translateX(-8px);
    border-color: #6366f1;
  }
  .dh-action-link:hover::after {
    transform: translateX(8px);
    border-color: #6366f1;
  }

  /* Innovative Telemetry Metrics Bar */
  .dh-telemetry-metrics {
    display: none; /* Mobile only */
    align-items: center;
    gap: 16px;
    padding: 8px 20px;
    border-radius: 999px;
    background: rgba(99, 102, 241, 0.03);
    border: 1px solid rgba(99, 102, 241, 0.08);
    margin-bottom: 36px;
    position: relative;
    z-index: 10;
  }
  .dh-metric-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: monospace;
    font-size: 11px;
    letter-spacing: 0.05em;
  }
  .dh-metric-glow {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #3d5afe;
    box-shadow: 0 0 6px #3d5afe;
    animation: dh-metric-pulse 1.8s infinite;
  }
  @keyframes dh-metric-pulse {
    0% { opacity: 0.4; }
    50% { opacity: 1; }
    100% { opacity: 0.4; }
  }
  .dh-metric-label {
    color: #64748b;
  }
  .dh-metric-val {
    color: #3d5afe;
    font-weight: 700;
  }
  .dh-metric-divider {
    width: 1px;
    height: 12px;
    background: rgba(99, 102, 241, 0.15);
  }

  /* Futuristic HUD Content Panel wrapper */
  .dh-hud-box {
    width: 100%;
    max-width: 1000px;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 10;
  }
  
  /* Corner tech brackets for the HUD box */
  .dh-hud-bracket {
    position: absolute;
    width: 12px;
    height: 12px;
    border: 2px solid rgba(99, 102, 241, 0.25);
    pointer-events: none;
    display: none; /* Mobile only */
  }
  .dh-hud-bracket-tl { top: -1px; left: -1px; border-right: none; border-bottom: none; border-top-left-radius: 8px; }
  .dh-hud-bracket-tr { top: -1px; right: -1px; border-left: none; border-bottom: none; border-top-right-radius: 8px; }
  .dh-hud-bracket-bl { bottom: -1px; left: -1px; border-right: none; border-top: none; border-bottom-left-radius: 8px; }
  .dh-hud-bracket-br { bottom: -1px; right: -1px; border-left: none; border-top: none; border-bottom-right-radius: 8px; }

  /* Live HUD Console Log Style */
  .dh-console-log {
    display: none; /* Mobile only */
    align-items: center;
    font-family: monospace;
    font-size: 10px;
    color: #6366f1;
    background: rgba(99, 102, 241, 0.04);
    border: 1px solid rgba(99, 102, 241, 0.12);
    padding: 6px 14px;
    border-radius: 6px;
    margin-bottom: 24px;
    min-width: 250px;
    justify-content: flex-start;
    overflow: hidden;
    white-space: nowrap;
    letter-spacing: 0.06em;
    box-shadow: inset 0 1px 3px rgba(99, 102, 241, 0.05);
  }
  .dh-console-cursor {
    width: 6px;
    height: 10px;
    background: #6366f1;
    margin-left: 4px;
    display: inline-block;
    animation: dh-cursor-blink 0.8s infinite;
  }
  @keyframes dh-cursor-blink {
    50% { opacity: 0; }
  }

  @media (max-width: 640px) {
    .dh {
      height: auto;
      padding: 32px 0 64px !important; /* Extremely tight padding to fit HUD box */
    }
    .dh-container {
      width: 100%;
      padding: 0 16px;
      margin-top: -8px;
    }
    .dh-hud-box {
      width: 100%;
      max-width: 100%;
      position: relative;
      padding: 44px 20px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(99, 102, 241, 0.08);
      border-radius: 16px;
      box-shadow: 0 12px 40px rgba(99, 102, 241, 0.03);
      backdrop-filter: blur(8px);
    }
    .dh-hud-bracket {
      display: block;
    }
    .dh-console-log {
      display: inline-flex;
      max-width: 100%;
      padding: 10px 16px;
      margin-bottom: 16px;
    }
    .dh-h1 {
      font-size: clamp(28px, 7.5vw, 44px);
      line-height: 1.35;
      letter-spacing: -0.03em;
      margin-bottom: 12px;
      max-width: 100%;
    }
    .dh-eyebrow {
      font-size: 10px;
      letter-spacing: 0.15em;
      padding: 10px 16px;
      margin-bottom: 12px;
      max-width: 100%;
      white-space: normal;
      text-align: center;
    }
    .dh-sub {
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 16px;
      max-width: 100%;
    }
    .dh-telemetry-metrics {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 6px 12px;
      padding: 10px 20px;
      margin-bottom: 18px;
      max-width: 100%;
    }
    .dh-metric-divider {
      display: none;
    }
    .dh-metric-item {
      font-size: 9.5px;
    }
    .dh-actions {
      flex-direction: column;
      align-items: center;
      gap: 12px;
      width: 100%;
    }
    .dh-actions .dh-action-link {
      width: auto;
      min-width: 200px;
      text-align: center;
      justify-content: center;
      padding: 14px 24px;
    }
  }

  /* ── Infinite Ticker Bar Styles ── */
  .dh-ticker-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #0000ff; /* Electric blue from reference */
    height: 52px;
    display: flex;
    align-items: center;
    overflow: hidden;
    white-space: nowrap;
    z-index: 20;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .dh-ticker-track {
    display: flex;
    width: max-content;
    animation: dh-ticker-scroll 25s linear infinite;
  }

  .dh-ticker-content {
    display: flex;
    align-items: center;
    gap: 32px;
    padding-right: 32px;
  }

  .dh-ticker-content span {
    font-family: var(--font-body), sans-serif;
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    color: #ffffff;
    letter-spacing: 0.12em;
  }

  .dh-ticker-sep {
    color: rgba(255, 255, 255, 0.4) !important;
  }

  @keyframes dh-ticker-scroll {
    0% { transform: translate3d(0, 0, 0); }
    100% { transform: translate3d(-50%, 0, 0); }
  }
</style>
<section class="dh" id="home">

  <!-- Tech & Ambient Background Visuals to fill up gaps and add visual interest on mobile -->
  <div class="dh-bg-visuals" aria-hidden="true">
    <div class="dh-bg-grid"></div>
    <div class="dh-bg-glow dh-bg-glow-1"></div>
    <div class="dh-bg-glow dh-bg-glow-2"></div>
    <div class="dh-bg-radar">
      <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;">
        <circle cx="200" cy="200" r="180" stroke="rgba(99, 102, 241, 0.05)" stroke-width="1.5" fill="none" stroke-dasharray="4 8" />
        <circle cx="200" cy="200" r="130" stroke="rgba(14, 165, 233, 0.06)" stroke-width="1.2" fill="none" />
        <circle cx="200" cy="200" r="80" stroke="rgba(99, 102, 241, 0.04)" stroke-width="1.5" fill="none" stroke-dasharray="2 4" />
      </svg>
    </div>
  </div>

  <div class="dh-container">
    
    <div class="dh-hud-box">
      <!-- HUD corners -->
      <div class="dh-hud-bracket dh-hud-bracket-tl"></div>
      <div class="dh-hud-bracket dh-hud-bracket-tr"></div>
      <div class="dh-hud-bracket dh-hud-bracket-bl"></div>
      <div class="dh-hud-bracket dh-hud-bracket-br"></div>

      <!-- Live Typing HUD Terminal Log -->
      <div class="dh-console-log">
        <span style="color: #6366f1; margin-right: 4px;">&gt;</span>
        <span id="dh-console-text">SYSTEM PROTOCOL // ACTIVE</span>
        <span class="dh-console-cursor"></span>
      </div>

      <h1 class="dh-h1">
        We engineer products<br>
        for the <span>next epoch.</span>
      </h1>

      <div class="dh-eyebrow">// CORE SYSTEM PROTOCOL : ONLINE</div>

      <p class="dh-sub">
        A high-performance creative design and engineering studio. We build digital architectures, web interfaces, and growth channels focused on scale.
      </p>

      <!-- Innovative Telemetry metrics row before the CTA buttons -->
      <div class="dh-telemetry-metrics">
        <div class="dh-metric-item">
          <span class="dh-metric-glow"></span>
          <span class="dh-metric-label">LATENCY</span>
          <span class="dh-metric-val">12ms</span>
        </div>
        <div class="dh-metric-divider"></div>
        <div class="dh-metric-item">
          <span class="dh-metric-glow"></span>
          <span class="dh-metric-label">SYS.LOAD</span>
          <span class="dh-metric-val">OPTIMAL</span>
        </div>
        <div class="dh-metric-divider"></div>
        <div class="dh-metric-item">
          <span class="dh-metric-glow"></span>
          <span class="dh-metric-label">SECURE_SSL</span>
          <span class="dh-metric-val">ACTIVE</span>
        </div>
      </div>

      <!-- Dynamic Actions -->
      <div class="dh-actions">
        <a href="/contact" class="dh-action-link">
          Start Project
        </a>
        <a href="/our-works" class="dh-action-link">
          Explore Work
        </a>
      </div>
    </div>

  </div>

  <!-- Moving Infinite Ticker containing Digibeat services -->
  <div class="dh-ticker-bar">
    <div class="dh-ticker-track">
      <div class="dh-ticker-content">
        <span>Web Development</span> <span class="dh-ticker-sep">•</span>
        <span>IT Solutions</span> <span class="dh-ticker-sep">•</span>
        <span>Digital Marketing</span> <span class="dh-ticker-sep">•</span>
        <span>Branding</span> <span class="dh-ticker-sep">•</span>
        <span>Web Development</span> <span class="dh-ticker-sep">•</span>
        <span>IT Solutions</span> <span class="dh-ticker-sep">•</span>
        <span>Digital Marketing</span> <span class="dh-ticker-sep">•</span>
        <span>Branding</span> <span class="dh-ticker-sep">•</span>
      </div>
      <div class="dh-ticker-content">
        <span>Web Development</span> <span class="dh-ticker-sep">•</span>
        <span>IT Solutions</span> <span class="dh-ticker-sep">•</span>
        <span>Digital Marketing</span> <span class="dh-ticker-sep">•</span>
        <span>Branding</span> <span class="dh-ticker-sep">•</span>
        <span>Web Development</span> <span class="dh-ticker-sep">•</span>
        <span>IT Solutions</span> <span class="dh-ticker-sep">•</span>
        <span>Digital Marketing</span> <span class="dh-ticker-sep">•</span>
        <span>Branding</span> <span class="dh-ticker-sep">•</span>
      </div>
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

<section class="strata-services strata-services-grid" id="services-grid" data-purpose="services-grid">
<div class="wrap">
<div class="section-head">
<div class="tag">Services</div>
<h2 class="big reveal">Built to be used, not just admired.</h2>
</div>
<div class="svc-grid">
<?php foreach ($services_grid as $i => $c): ?>
<div class="svc-card" data-tilt>
<div class="svc-num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
<svg class="svc-icon" viewbox="0 0 24 24"><?php echo $c['icon']; ?></svg>
<h3><?php echo htmlspecialchars($c['title']); ?></h3>
<p><?php echo htmlspecialchars($c['desc']); ?></p>
<a href="<?php echo htmlspecialchars($c['link']); ?>" class="svc-card-btn">
  <span>View Details</span>
  <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
    <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
  </svg>
</a>
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
  font-size: 20px; font-weight: 400;
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
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
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

  /* ============================================================
     FUTURISTIC WHITE & BLUE CARD SLIDER & CONSOLE DRAWER
     ============================================================ */
  .cyber-terminal-cs {
    --ct-bg-dark: #ffffff;
    --ct-border: rgba(61, 90, 254, 0.15);
    --ct-border-glow: rgba(61, 90, 254, 0.35);
    --ct-neon-cyan: #3d5afe;
    --ct-neon-purple: #ab44ff;
    --ct-neon-green: #10b981;
    --ct-text-primary: #0b1437;
    --ct-text-muted: #64748b;
    --ct-font-mono: 'Space Mono', 'JetBrains Mono', monospace;
    
    position: relative;
    background: var(--ct-bg-dark) !important;
    padding: 120px 0;
    color: var(--ct-text-primary);
    overflow: hidden;
  }

  /* Grid background styling with light blue lines */
  .cyber-terminal-cs::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(rgba(61, 90, 254, 0.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(61, 90, 254, 0.03) 1px, transparent 1px);
    background-size: 40px 40px;
    background-position: center;
    pointer-events: none;
    z-index: 1;
  }

  /* Glowing blobs */
  .ct-bg-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.08;
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

  /* Cybernetic Header */
  .ct-head {
    margin-bottom: 72px;
    position: relative;
  }
  .ct-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    background: rgba(61, 90, 254, 0.06);
    border: 1px solid rgba(61, 90, 254, 0.2);
    border-radius: 4px;
    font-family: var(--ct-font-mono);
    font-size: 11px;
    color: var(--ct-neon-cyan);
    text-transform: uppercase;
    letter-spacing: 0.2em;
    margin-bottom: 24px;
  }
  .ct-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--ct-neon-cyan);
    box-shadow: 0 0 8px var(--ct-neon-cyan);
    animation: ct-blink 1.5s infinite;
  }
  @keyframes ct-blink {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; }
  }
  .ct-title {
    font-family: 'Inter', sans-serif;
    font-size: clamp(36px, 5vw, 64px);
    font-weight: 900;
    line-height: 1.05;
    letter-spacing: -0.04em;
    margin: 0 0 20px;
    color: #3d5afe !important;
  }
  .ct-title span {
    background: none;
    -webkit-background-clip: initial;
    -webkit-text-fill-color: initial;
    background-clip: initial;
    color: #0b1437;
  }
  .ct-sub {
    font-size: 18px;
    line-height: 1.7;
    color: var(--ct-text-muted);
    max-width: 600px;
    margin: 0;
  }

  /* Slider Viewport */
  .cs-cards-viewport {
    overflow: hidden;
    margin-bottom: 48px;
    background: transparent;
    position: relative;
    z-index: 2;
  }
  .cs-cards {
    display: flex;
    gap: 32px;
    transition: transform .5s cubic-bezier(.16,.84,.44,1);
    background: transparent;
  }

  /* Cyber card with white background */
  .cs-card {
    flex: 0 0 calc((100% - 64px) / 3);
    background: #ffffff;
    border: 1px solid var(--ct-border);
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    padding: 0;
    cursor: pointer;
    transition: border-color 0.4s ease, box-shadow 0.4s ease, transform 0.4s ease;
    box-shadow: 0 8px 30px rgba(61, 90, 254, 0.04);
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
  }
  .cs-card:hover {
    border-color: rgba(61, 90, 254, 0.4);
    box-shadow: 0 20px 40px rgba(61, 90, 254, 0.1);
    transform: translateY(-6px);
  }
  
  /* Corner tech brackets on cards */
  .cs-card__bracket {
    position: absolute;
    width: 10px;
    height: 10px;
    border: 1.5px solid rgba(61, 90, 254, 0.3);
    pointer-events: none;
    z-index: 10;
    opacity: 0.7;
    transition: all 0.3s ease;
  }
  .cs-card:hover .cs-card__bracket {
    border-color: rgba(61, 90, 254, 1);
    opacity: 1;
  }
  .cs-card__bracket-tl { top: 12px; left: 12px; border-right: none; border-bottom: none; }
  .cs-card__bracket-tr { top: 12px; right: 12px; border-left: none; border-bottom: none; }
  .cs-card__bracket-bl { bottom: 12px; left: 12px; border-right: none; border-top: none; }
  .cs-card__bracket-br { bottom: 12px; right: 12px; border-left: none; border-top: none; }

  .cs-card__media {
    position: relative;
    aspect-ratio: 4 / 3;
    overflow: hidden;
    background: #f1f5f9;
    border-bottom: 1px solid var(--ct-border);
  }
  .cs-card__media img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    opacity: 0.95;
    transition: transform .5s ease, opacity .5s ease;
  }
  .cs-card:hover .cs-card__media img {
    transform: scale(1.05);
    opacity: 1;
  }
  
  /* Sweeping scanning laser line on hover */
  .cs-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--ct-neon-cyan), transparent);
    box-shadow: 0 0 12px var(--ct-neon-cyan);
    opacity: 0;
    pointer-events: none;
    z-index: 11;
  }
  .cs-card:hover::after {
    animation: cs-card-laser 1.5s ease-in-out infinite;
  }
  @keyframes cs-card-laser {
    0% { top: 0%; opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { top: 100%; opacity: 0; }
  }

  .cs-card__body {
    padding: 26px 28px 30px;
    position: relative;
  }
  .cs-card__name {
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: var(--ct-text-primary);
    margin-bottom: 6px;
  }
  .cs-card__role {
    font-size: 13.5px;
    line-height: 1.5;
    color: var(--ct-text-muted);
    margin-bottom: 20px;
  }
  
  /* Remove extra bottom margin now that metrics bar is removed */
  .cs-card__role {
    margin-bottom: 12px;
  }

  /* View All CTA */
  .cs-view-all {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 40px;
  }
  .cs-view-all__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 36px;
    background: #3d5afe;
    color: #ffffff;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 700;
    border-radius: 999px;
    text-decoration: none;
    letter-spacing: -0.01em;
    transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
    box-shadow: 0 8px 24px rgba(61, 90, 254, 0.22);
  }
  .cs-view-all__btn svg {
    width: 18px; height: 18px;
    stroke: currentColor;
    transition: transform 0.25s ease;
  }
  .cs-view-all__btn:hover {
    background: #2948e8;
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(61, 90, 254, 0.35);
  }
  .cs-view-all__btn:hover svg { transform: translateX(4px); }

  @media (max-width: 900px) {
    .cs-card { flex: 0 0 100%; }
  }

  /* ============================================================
     COMMAND CONSOLE DRAWER STYLES
     ============================================================ */
  .cs-overlay {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.45);
    backdrop-filter: blur(4px);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease;
    z-index: 1200;
  }
  .cs-overlay.is-open { opacity: 1; pointer-events: auto; }

  .cs-drawer {
    position: fixed;
    top: 0; right: 0;
    height: 100%;
    width: 50%;
    background: #ffffff;
    border-left: 1px solid rgba(61, 90, 254, 0.15);
    z-index: 1201;
    transform: translateX(100%);
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: -20px 0 60px rgba(15, 23, 42, 0.1), -10px 0 30px rgba(61, 90, 254, 0.03);
    display: flex;
    flex-direction: column;
    color: var(--ct-text-primary);
  }
  .cs-drawer.is-open { transform: translateX(0); }
  
  /* Glitch transition for drawer content updating */
  .cs-drawer.glitching .cs-drawer__scroll {
    animation: ct-screen-glitch 0.25s ease-out;
  }
  @keyframes ct-screen-glitch {
    0% { transform: scale(1); opacity: 0.95; }
    50% { transform: scale(0.995) skewX(-0.5deg); opacity: 0.95; }
    100% { transform: scale(1); opacity: 1; }
  }

  .cs-drawer__scroll {
    flex: 1 1 auto;
    min-height: 0;
    overflow-y: auto;
    background: #ffffff;
    position: relative;
  }

  .cs-drawer__topbar {
    position: sticky;
    top: 0;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 18px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(61, 90, 254, 0.1);
  }

  .cs-drawer__close {
    width: 40px; height: 40px;
    flex-shrink: 0;
    border-radius: 50%;
    background: rgba(61, 90, 254, 0.02);
    border: 1px solid rgba(61, 90, 254, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--ct-text-muted);
    transition: all 0.3s ease;
  }
  .cs-drawer__close svg { width: 18px; height: 18px; stroke: currentColor; }
  .cs-drawer__close:hover {
    border-color: #ff3b30;
    color: #ff3b30;
    background: rgba(255, 59, 48, 0.05);
    box-shadow: 0 0 10px rgba(255, 59, 48, 0.2);
    transform: scale(1.05);
  }

  .cs-drawer__visit {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    border-radius: 6px;
    background: #3d5afe;
    color: #ffffff;
    border: none;
    font-family: var(--ct-font-mono);
    font-weight: 700;
    font-size: 12px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
    box-shadow: 0 6px 18px rgba(61, 90, 254, 0.28);
  }
  .cs-drawer__visit:hover {
    background: #2948e8;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(61, 90, 254, 0.42);
  }
  .cs-drawer__visit svg { width: 14px; height: 14px; stroke: currentColor; }

  .cs-drawer__progress {
    position: sticky;
    top: 76px;
    z-index: 10;
    height: 3px;
    width: 100%;
    background: rgba(61, 90, 254, 0.06);
  }
  .cs-drawer__progress-bar {
    height: 100%;
    width: 0%;
    background: var(--ct-neon-cyan);
    box-shadow: 0 0 8px var(--ct-neon-cyan);
    transition: width 0.1s linear;
  }

  .cs-drawer__hero {
    width: 100%;
    aspect-ratio: 16 / 10;
    background: #f1f5f9;
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid rgba(61, 90, 254, 0.1);
  }
  .cs-drawer__hero img { width: 100%; height: 100%; object-fit: cover; display: block; opacity: 1; }

  .cs-drawer__body { padding: 36px 40px 40px; }
  .cs-drawer__tag {
    display: inline-block;
    font-family: var(--ct-font-mono);
    font-size: 11px;
    font-weight: 700;
    color: var(--ct-neon-cyan);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 12px;
  }
  .cs-drawer__title {
    font-family: 'Inter', sans-serif;
    font-size: clamp(26px, 3.5vw, 34px);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.2;
    margin: 0 0 14px;
    color: var(--ct-text-primary);
  }
  .cs-drawer__tagline {
    font-size: 16px;
    color: var(--ct-text-muted);
    line-height: 1.6;
    margin: 0 0 32px;
  }

  /* Metrics grid in drawer */
  .cs-drawer__metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 36px;
  }
  .cs-drawer__metric-card {
    background: rgba(61, 90, 254, 0.03);
    border: 1px solid rgba(61, 90, 254, 0.08);
    border-radius: 10px;
    padding: 16px 10px;
    text-align: center;
    transition: all 0.3s ease;
  }
  .cs-drawer__metric-card:hover {
    border-color: rgba(61, 90, 254, 0.3);
    background: rgba(61, 90, 254, 0.06);
  }
  .cs-drawer__metric-val {
    font-family: var(--ct-font-mono);
    font-size: 20px;
    font-weight: 800;
    color: var(--ct-neon-cyan);
    display: block;
    margin-bottom: 4px;
  }
  .cs-drawer__metric-lbl {
    font-size: 11px;
    color: var(--ct-text-muted);
  }

  .cs-drawer__section { margin-bottom: 28px; }
  .cs-drawer__section:last-child { margin-bottom: 0; }
  .cs-drawer__section h4 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
    font-weight: 700;
    color: var(--ct-text-primary);
    margin: 0 0 14px;
    letter-spacing: -0.01em;
    text-transform: none;
    font-family: inherit;
  }
  .cs-drawer__section h4::before {
    content: '';
    display: block;
    width: 3px;
    height: 20px;
    background: #3d5afe;
    border-radius: 99px;
    flex-shrink: 0;
  }
  .cs-drawer__section h4::after { display: none; }

  .cs-drawer__section p {
    font-size: 15px;
    line-height: 1.75;
    color: var(--ct-text-muted);
    margin: 0;
  }

  .cs-drawer__section ul {
    margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 4px;
    list-style: none;
  }
  .cs-drawer__section li {
    display: flex;
    align-items: baseline;
    gap: 10px;
    font-size: 14.5px;
    line-height: 1.65;
    color: var(--ct-text-muted);
    padding: 6px 0;
    position: static;
  }
  .cs-drawer__section li::before {
    content: '•';
    font-size: 16px;
    font-weight: 700;
    color: #3d5afe;
    flex-shrink: 0;
    position: static;
    left: auto; top: auto;
    width: auto; height: auto;
    background: none; border: none; border-radius: 0;
    box-shadow: none; margin-top: -2px; display: inline;
  }
  .cs-drawer__section li b { color: var(--ct-text-primary); font-weight: 700; }

  /* ---- Drawer rich-content additions ---- */
  .cs-drawer__subtitle {
    font-size: 12px;
    color: #3d5afe;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin: 4px 0 20px;
  }
  .cs-drawer__intro {
    font-size: 15px;
    line-height: 1.8;
    color: var(--ct-text-muted);
    margin: 0 0 28px;
    border-left: 3px solid #3d5afe;
    padding-left: 16px;
  }
  .cs-drawer__narrative {
    margin-bottom: 22px;
    padding: 18px 20px;
    background: rgba(61,90,254,0.03);
    border-radius: 10px;
    border-left: 3px solid rgba(61,90,254,0.3);
  }
  .cs-drawer__narrative h3 {
    font-size: 15px;
    font-weight: 700;
    color: var(--ct-text-primary);
    margin: 0 0 8px;
    line-height: 1.3;
  }
  .cs-drawer__narrative p {
    font-size: 14.5px;
    line-height: 1.75;
    color: var(--ct-text-muted);
    margin: 0;
  }
  .cs-drawer__stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 30px;
  }
  .cs-drawer__stat {
    background: rgba(61,90,254,0.05);
    border: 1px solid rgba(61,90,254,0.12);
    border-radius: 12px;
    padding: 16px 10px;
    text-align: center;
  }
  .cs-drawer__stat-value {
    font-family: var(--ct-font-mono);
    font-size: 24px;
    font-weight: 800;
    color: #3d5afe;
    line-height: 1.1;
    margin-bottom: 6px;
    letter-spacing: -0.02em;
  }
  .cs-drawer__stat-label {
    font-size: 11px;
    color: var(--ct-text-muted);
    line-height: 1.4;
  }
  .cs-drawer__tech-block {
    background: rgba(61,90,254,0.03);
    border-radius: 10px;
    padding: 14px 16px;
    font-size: 14.5px;
    line-height: 1.75;
    color: var(--ct-text-muted);
  }
  @media (max-width: 640px) {
    .cs-drawer__stats { grid-template-columns: 1fr 1fr; }
  }

  .cs-drawer__gallery {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 34px;
  }
  .cs-drawer__gallery img {
    width: 100%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    border-radius: 12px;
    display: block;
    border: 1px solid rgba(61, 90, 254, 0.1);
  }

  /* Diagnostics Outcome block */
  .cs-drawer__diagnostics-row {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 28px;
    align-items: center;
    margin-top: 14px;
  }

  /* Circular Diagnostic Dial Chart */
  .cs-drawer__dial-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: rgba(61, 90, 254, 0.02);
    border: 1px solid rgba(61, 90, 254, 0.08);
    border-radius: 12px;
    padding: 16px 20px;
  }
  .cs-drawer__dial-svg {
    width: 100px;
    height: 100px;
    transform: rotate(-90deg);
  }
  .cs-drawer__dial-bg {
    fill: none;
    stroke: rgba(61, 90, 254, 0.05);
    stroke-width: 8;
  }
  .cs-drawer__dial-track {
    fill: none;
    stroke: var(--ct-neon-cyan);
    stroke-width: 8;
    stroke-linecap: round;
    stroke-dasharray: 251.2; /* 2 * PI * 40 */
    stroke-dashoffset: 251.2;
    transition: stroke-dashoffset 1.2s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .cs-drawer__dial-percent {
    position: absolute;
    font-family: var(--ct-font-mono);
    font-size: 18px;
    font-weight: 700;
    color: var(--ct-text-primary);
  }
  .cs-drawer__dial-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
  }
  .cs-drawer__dial-lbl {
    font-family: var(--ct-font-mono);
    font-size: 9px;
    color: var(--ct-neon-cyan);
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  .cs-drawer__contact-text {
    border-top: 1px dashed rgba(61, 90, 254, 0.15);
    padding-top: 30px;
  }
  .cs-drawer__contact-text h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--ct-text-primary);
    margin-bottom: 12px;
  }

  /* Fixed Footer */
  .cs-drawer__footer {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 20px 40px;
    background: #ffffff;
    border-top: 1px solid rgba(61, 90, 254, 0.15);
  }

  .cs-drawer__talk-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background: #3d5afe;
    border: none;
    border-radius: 6px;
    font-family: var(--ct-font-mono);
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    text-decoration: none;
    transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
    box-shadow: 0 6px 18px rgba(61, 90, 254, 0.28);
  }
  .cs-drawer__talk-btn:hover {
    background: #2948e8;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(61, 90, 254, 0.42);
  }
  .cs-drawer__talk-btn svg { width: 14px; height: 14px; fill: none; stroke: currentColor; stroke-width: 2.5; }

  .cs-drawer__navgroup {
    display: flex;
    border: 1px solid rgba(61, 90, 254, 0.2);
    border-radius: 6px;
    overflow: hidden;
  }
  .cs-drawer__navicon {
    width: 44px; height: 44px;
    display: flex; align-items: center; justify-content: center;
    background: #3d5afe;
    border: none;
    cursor: pointer;
    color: #ffffff;
    transition: background 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease;
    box-shadow: inset 0 0 0 0 rgba(255,255,255,0);
  }
  .cs-drawer__navicon:first-child { border-right: 1px solid rgba(255, 255, 255, 0.2); }
  .cs-drawer__navicon svg { width: 16px; height: 16px; stroke: currentColor; stroke-width: 2.2; }
  .cs-drawer__navicon:hover:not(:disabled) {
    background: #2948e8;
    transform: scale(1.08);
    box-shadow: 0 6px 16px rgba(61, 90, 254, 0.4);
  }
  .cs-drawer__navicon:disabled { opacity: 0.35; cursor: not-allowed; background: rgba(61, 90, 254, 0.25); }

  @media (max-width: 991.98px) {
    .cs-drawer { width: 70%; }
  }
  @media (max-width: 767.98px) {
    .cs-drawer { width: 100%; }
    .cs-drawer__topbar, .cs-drawer__body, .cs-drawer__footer { padding-left: 24px; padding-right: 24px; }
  }
  body.cs-lock { overflow: hidden; }
</style>
 
<!-- ================= CASE STUDIES SECTION — FUTURISTIC SLIDER & DRAWER ================= -->
<section class="cyber-terminal-cs" id="case-studies" aria-labelledby="case-studies-heading" data-purpose="case-studies">
  <div class="ct-bg-glow ct-bg-glow-1" aria-hidden="true"></div>
  <div class="ct-bg-glow ct-bg-glow-2" aria-hidden="true"></div>

  <div class="ct-wrap">
    <!-- Header -->
    <div class="ct-head">
      <span class="ct-badge">
        <?php echo htmlspecialchars($caseStudiesEyebrow); ?>
      </span>
      <h2 class="ct-title" id="case-studies-heading">
        <?php echo htmlspecialchars($caseStudiesHeadingLead); ?> <span><?php echo htmlspecialchars($caseStudiesHeadingScript); ?></span>
      </h2>
      <p class="ct-sub"><?php echo htmlspecialchars($caseStudiesSubtitle); ?></p>
    </div>

    <!-- Slider Viewport -->
    <div class="cs-cards-viewport">
      <div class="cs-cards" id="csCardsTrack">
        <?php foreach ($caseStudies as $i => $cs): ?>
          <a href="/case-studies/<?php echo htmlspecialchars($cs['id']); ?>" class="cs-card" data-index="<?php echo $i; ?>" aria-label="Open <?php echo htmlspecialchars($cs['title']); ?> details">
            <div class="cs-card__bracket cs-card__bracket-tl"></div>
            <div class="cs-card__bracket cs-card__bracket-tr"></div>
            <div class="cs-card__bracket cs-card__bracket-bl"></div>
            <div class="cs-card__bracket cs-card__bracket-br"></div>
            
            <div class="cs-card__media">
              <img src="<?php echo htmlspecialchars($cs['photo']); ?>" alt="<?php echo htmlspecialchars($cs['title']); ?>" loading="lazy">
            </div>
            <div class="cs-card__body">
              <h3 class="cs-card__name"><?php echo htmlspecialchars($cs['title']); ?></h3>
              <p class="cs-card__role"><?php echo htmlspecialchars($cs['tagline']); ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- View All CTA -->
    <div class="cs-view-all">
      <a href="case-studies.php" class="cs-view-all__btn">
        View All Case Studies
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>

<section class="testimonials-section" id="testi" aria-labelledby="testimonials-heading" data-purpose="testimonials">
 
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
    <div class="ts-card__name"><?php echo htmlspecialchars($t['name']); ?></div>
    <div class="ts-card__role"><?php echo htmlspecialchars($t['title']); ?></div>
    <div class="ts-card__desc"><?php echo htmlspecialchars($t['quote']); ?></div>
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
    .hero > div:first-child {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .hero h1{ font-size:38px; }
    .map-wrap{ height:280px; }
  }

  /* =========================================================================
     Clients Section Redesign (Matches reference image)
     ========================================================================= */
  .cl {
    background: #000000 !important;
    padding: 120px 0 !important;
    color: #ffffff !important;
    font-family: var(--font-body), sans-serif;
    position: relative;
    z-index: 10;
    width: 100%;
    max-width: 100vw;
    overflow: hidden;
    box-sizing: border-box;
  }
  .cl-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 40px;
    box-sizing: border-box;
  }
  .cl-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 40px;
    margin-bottom: 70px;
  }
  .cl-title {
    font-family: 'Inter', sans-serif;
    font-size: 52px;
    font-weight: 500;
    line-height: 1.1;
    color: #ffffff !important;
    margin: 0;
    letter-spacing: -1px;
  }
  .cl-sub {
    font-size: 19px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.7);
    max-width: 460px;
    margin: 0;
  }
  .cl-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 0;
    margin-bottom: 60px;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-left: 1px solid rgba(255,255,255,0.1);
  }
  .cl-card {
    background: #111111;
    height: auto !important;
    aspect-ratio: 16 / 8 !important;
    border-right: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    overflow: hidden;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 8px 12px !important;
    box-sizing: border-box !important;
  }
  .cl-card img {
    width: auto !important;
    height: auto !important;
    max-width: 100% !important;
    max-height: 100% !important;
    object-fit: contain !important;
    object-position: center center !important;
    display: block !important;
    margin: 0 auto !important;
    filter: none;
    opacity: 1;
  }
  .cl-cta {
    display: flex;
    justify-content: center;
  }
  .cl-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 32px;
    font-family: var(--font-body), sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: #ffffff;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.15);
    background: transparent;
    transition: all 0.3s ease;
  }
  .cl-cta-btn:hover {
    border-color: rgba(255, 255, 255, 0.6);
    background: rgba(255, 255, 255, 0.05);
  }
  .cl-cta-btn svg {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
  }
  .cl-cta-btn:hover svg {
    transform: translateX(4px);
  }

  @media (max-width: 1024px) {
    .cl-grid {
      grid-template-columns: repeat(3, 1fr);
    }
    .cl-head {
      flex-direction: column;
      gap: 16px;
      margin-bottom: 50px;
    }
    .cl-title {
      font-size: 40px;
    }
    .cl-sub {
      font-size: 17px;
    }
  }
  @media (max-width: 640px) {
    .cl-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .cl {
      padding: 80px 0 !important;
    }
    .cl-container {
      padding: 0 24px;
    }
  }
</style>
  <link rel="icon" type="image/png" href="/assets/images/logo-footer.png?v=2">
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
<!-- ── CLIENTS SECTION — Interactive Kinetic Logo Grid ── -->
<section class="cl" id="clients" aria-labelledby="cl-title">
  <div class="cl-container">
    
    <!-- Header: two-column layout -->
    <div class="cl-head">
      <h2 class="cl-title" id="cl-title">Clients</h2>
      <p class="cl-sub">Brands that trust us to build, grow, and transform their digital presence.</p>
    </div>

    <!-- Grid -->
    <div class="cl-grid" id="clientGrid">
      <?php foreach ($clients as $c): ?>
        <div class="cl-card" title="<?php echo htmlspecialchars($c['name']); ?>">
          <?php
            $filename = basename($c['logo']);
            $img_style = '';
            if ($filename === 'zee.webp') {
                // Keep ZeeQue at its natural size
                $img_style = '';
            } elseif ($filename === 'sreen.webp') {
                $img_style = ' style="transform: scale(1.65);"';
            } elseif ($filename === 'guru.webp') {
                $img_style = ' style="transform: scale(1.55);"';
            } else {
                // Scale up all other logos to look visually larger
                $img_style = ' style="transform: scale(1.25);"';
            }
          ?>
          <img src="<?php echo htmlspecialchars($c['logo']); ?>" alt="<?php echo htmlspecialchars($c['name']); ?>" loading="lazy"<?php echo $img_style; ?>>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA -->
    <div class="cl-cta">
      <a href="<?php echo htmlspecialchars($view_all_url); ?>" class="cl-cta-btn">
        <span>View all clients</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

  </div>
</section>
<!-- ── END CLIENTS ── -->

<script>
/* JS auto-sizing disabled in favor of clean universal CSS scaling and centering */
/*
(function() {
  function adjustLogo(img) {
    if (!img.naturalWidth || !img.naturalHeight) return;
    var iw = img.naturalWidth;
    var ih = img.naturalHeight;
    var ratio = iw / ih;

    if (ratio >= 1.2) {
      img.style.width  = '100%';
      img.style.height = 'auto';
      img.style.maxHeight = '110px';
    } else if (ratio <= 0.85) {
      img.style.height = '110px';
      img.style.width  = 'auto';
      img.style.maxWidth = '100%';
    } else {
      img.style.width  = '100%';
      img.style.height = 'auto';
      img.style.maxHeight = '110px';
    }
    img.style.objectFit = 'contain';
  }

  document.querySelectorAll('.cl-card img').forEach(function(img) {
    if (img.complete && img.naturalWidth > 0) {
      adjustLogo(img);
    } else {
      img.addEventListener('load', function() { adjustLogo(img); });
    }
  });

  window.addEventListener('resize', function() {
    document.querySelectorAll('.cl-card img').forEach(adjustLogo);
  });
})();
*/
</script>  
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

     <!-- Case Studies Drawer UI Removed -->

  <!-- ============ TESTIMONIAL VIDEO DRAWER (SLIDER) ============ -->
  <div class="ts-overlay" id="ts-overlay"></div>
  <aside class="ts-drawer" id="ts-drawer" role="dialog" aria-modal="true" aria-hidden="true">

  <div class="ts-drawer__scroll" id="ts-drawer-scroll">
    <div class="ts-drawer__topbar">
      <a href="#" class="ts-drawer__visit" id="ts-drawer-site" target="_blank" rel="noopener noreferrer">
        <span>Visit Site</span>
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
      var section = document.getElementById('testi');
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

      var drawerSite = document.getElementById('ts-drawer-site');
     
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

  if (data.site) {
    drawerSite.href = data.site;
    drawerSite.style.display = '';
  } else {
    drawerSite.href = '#';
    drawerSite.style.display = 'none';
  }

 
  drawerQuote.innerHTML = '&ldquo;' + data.quote + '&rdquo;';
  drawerAuthor.textContent = '— ' + data.name + ', ' + data.title;



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

      // Smooth scroll to testimonials and clean URL query parameter
      document.querySelectorAll('.ft-testimonials-link').forEach(function(link) {
        link.addEventListener('click', function(e) {
          var target = document.getElementById('testi');
          if (target) {
            var isHomepage = window.location.pathname.indexOf('index.php') !== -1 || 
                             window.location.pathname === '/' || 
                             window.location.pathname === '/';
            if (isHomepage) {
              e.preventDefault();
              target.scrollIntoView({ behavior: 'smooth' });
            }
          }
        });
      });

      var urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get('scroll') === 'testi') {
        var target = document.getElementById('testi');
        if (target) {
          setTimeout(function() {
            target.scrollIntoView({ behavior: 'smooth' });
            // Clean the URL bar parameter without reloading
            history.replaceState(null, '', window.location.pathname);
          }, 300);
        }
      }

      /* ===== FUTURISTIC CASE STUDIES ENGINE ===== */
      (function initFuturisticCaseStudies() {
        const caseStudies = <?php echo json_encode($caseStudies, JSON_UNESCAPED_SLASHES); ?>;
        if (!caseStudies || !caseStudies.length) return;

        // Card Slider logic
        (function initCsCardSlider() {
          var track = document.getElementById('csCardsTrack');
          var viewport = track ? track.parentElement : null;
          var prevBtn = document.getElementById('csPrev');
          var nextBtn = document.getElementById('csNext');
          if (!track || !viewport) return;

          var realCards = Array.prototype.slice.call(track.children);
          var total = realCards.length;
          if (total === 0) return;

          function visibleCount() {
            return window.innerWidth <= 900 ? 1 : 3;
          }
          var visible = visibleCount();

          function makeClone(card) {
            var clone = card.cloneNode(true);
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

          if (prevBtn) prevBtn.addEventListener('click', function () { goTo(index - 1); resetAuto(); });
          if (nextBtn) nextBtn.addEventListener('click', function () { goTo(index + 1); resetAuto(); });

          var autoTimer;
          function resetAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(function () { goTo(index + 1); }, 5000);
          }
          resetAuto();

          window.addEventListener('resize', function () {
            setPosition(false);
          });

          // Cards now navigate directly via href link anchors, no click handler binding needed.

          setPosition(false);
        })();

        // Dynamic HUD terminal logger
        (function initHudTerminal() {
          var logEl = document.getElementById('dh-console-text');
          if (!logEl) return;
          var logs = [
            "SYSTEM PROTOCOL // ACTIVE",
            "PORT 8080 // ONLINE",
            "SECURE_SHIELD // CALIBRATED",
            "INTERFACE SCALING // OPTIMAL",
            "MEM_BUFFER // CACHED",
            "CORE_LOGIC // COUPLED"
          ];
          var idx = 0;
          var charIdx = 0;
          var isDeleting = false;
          function type() {
            var current = logs[idx];
            if (isDeleting) {
              logEl.textContent = current.substring(0, charIdx - 1);
              charIdx--;
            } else {
              logEl.textContent = current.substring(0, charIdx + 1);
              charIdx++;
            }
            var speed = isDeleting ? 25 : 50;
            if (!isDeleting && charIdx === current.length) {
              speed = 2200; // Wait at the end of phrase
              isDeleting = true;
            } else if (isDeleting && charIdx === 0) {
              isDeleting = false; 
              idx = (idx + 1) % logs.length;
              speed = 400; // Wait before typing next phrase
            }
            setTimeout(type, speed);
          }
          type();
        })();

      })();
    });
  </script>
</body>
<?php include 'footer.php'; ?>
</html>