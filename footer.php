<?php
/**
 * footer.php
 * Global site footer — include this at the bottom of every page's
 * <body>, e.g.:
 *
 *   <?php include 'footer.php'; ?>
 *
 * Self-contained: brings its own <style> and <script>, so it can be
 * dropped into any page (case-studies.php, index.php, etc.) without
 * depending on that page's CSS variables.
 *
 * REDESIGN NOTES (v4):
 * - Wordmark text next to the logo has been removed — logo mark only,
 *   sized up considerably.
 * - Background dot-matrix world map has been removed entirely — footer
 *   now uses a plain dark background with a subtle gradient overlay only.
 * - Link columns are Company / Services / Other, plain text with no card
 *   borders or backgrounds — just typography. Column headings are white.
 * - Newsletter field removed.
 * - "Back to top" is an orbiting glow button.
 *
 * Logo file expected at: assets/images/logo-footer.png
 * Brochure file expected at: assets/files/digibeat-brochure.pdf
 *
 * To edit the footer's links: everything under "Company", "Services",
 * "Other", and "Get in touch" is plain HTML in the markup below —
 * just edit the <a href> / text directly, no JS involved.
 */
?>
<style>
  .ft-footer {
    --ft-bg: #06060c;
    --ft-bg-soft: #0f0f1a;
    --ft-panel: rgba(255,255,255,0.035);
    --ft-panel-border: rgba(255,255,255,0.08);
    --ft-line: rgba(255,255,255,0.09);
    --ft-ink: #f5f6fb;
    --ft-muted: #9799b0;
    --ft-accent: #3d5afe;
    --ft-accent-2: #00d68f;

    position: relative;
    isolation: isolate;
    overflow: hidden;
    background: var(--ft-bg);
    color: var(--ft-muted);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    padding: 52px 0 0;
  }

  .ft-footer *, .ft-footer *::before, .ft-footer *::after { box-sizing: border-box; }
  .ft-footer img, .ft-footer svg { max-width: 100%; height: auto; display: block; }
  .ft-footer a { color: inherit; text-decoration: none; }

  /* ---------- background overlay (no map) ---------- */
  .ft-overlay {
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    background:
      radial-gradient(ellipse 900px 500px at 12% -10%, rgba(61,90,254,0.16), transparent 65%),
      radial-gradient(ellipse 700px 500px at 100% 30%, rgba(0,214,143,0.08), transparent 60%),
      linear-gradient(180deg, rgba(6,6,12,0.05) 0%, rgba(6,6,12,0.35) 55%, var(--ft-bg) 88%);
  }

  .ft-wrap {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* ---------- back to top (orbiting glow) ---------- */
  .ft-top {
    position: absolute;
    top: -30px; right: 32px;
    width: 60px; height: 60px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: var(--ft-bg-soft);
    border: 1px solid var(--ft-panel-border);
    cursor: pointer;
    z-index: 5;
    isolation: isolate;
  }
  .ft-top::before {
    content: "";
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    padding: 3px;
    background: conic-gradient(from 0deg, var(--ft-accent), var(--ft-accent-2), var(--ft-accent));
    -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: ft-spin 4s linear infinite;
    z-index: -1;
  }
  @keyframes ft-spin { to { transform: rotate(360deg); } }
  .ft-top svg { width: 20px; height: 20px; stroke: var(--ft-ink); transition: transform 0.2s ease; }
  .ft-top:hover svg { transform: translateY(-2px); stroke: var(--ft-accent-2); }

  /* ---------- top grid: brand + 3 link columns ---------- */
  .ft-grid {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 64px;
    padding-bottom: 36px;
  }

  .ft-links {
    display: flex;
    gap: 56px;
    flex-wrap: wrap;
  }

  .ft-brand { padding-top: 8px; flex: 0 1 340px; }

  .ft-logo {
    display: inline-flex;
    align-items: center;
    margin-bottom: 24px;
  }
  .ft-logo img {
    width: 76px;
    height: 76px;
    border-radius: 20px;
    box-shadow: 0 14px 40px rgba(61,90,254,0.35);
    transition: transform 0.25s ease;
  }
  .ft-logo:hover img { transform: scale(1.05) rotate(-2deg); }

  .ft-brand__desc {
    font-size: 15px;
    line-height: 1.8;
    max-width: 320px;
    margin: 0 0 26px;
  }

  .ft-socials { display: flex; gap: 10px; margin-bottom: 30px; }
  .ft-socials a {
    width: 42px; height: 42px;
    border-radius: 50%;
    border: 1px solid var(--ft-panel-border);
    display: flex; align-items: center; justify-content: center;
    transition: border-color 0.15s ease, background 0.15s ease, transform 0.15s ease;
  }
  .ft-socials svg { width: 17px; height: 17px; stroke: var(--ft-muted); transition: stroke 0.15s ease; }
  .ft-socials a:hover { border-color: var(--ft-accent); background: rgba(61,90,254,0.14); transform: translateY(-3px); }
  .ft-socials a:hover svg { stroke: var(--ft-ink); }

  .ft-chips { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 24px; }
  .ft-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    padding: 9px 14px;
    border-radius: 999px;
    background: var(--ft-panel);
    border: 1px solid var(--ft-panel-border);
    color: var(--ft-muted);
    transition: border-color 0.15s ease, color 0.15s ease;
  }
  .ft-chip svg { width: 14px; height: 14px; stroke: var(--ft-accent-2); flex-shrink: 0; }
  .ft-chip:hover { border-color: var(--ft-accent-2); color: var(--ft-ink); }

  /* ---------- link columns (no card chrome — plain, borderless) ---------- */
  .ft-col {
    /* lines up with the "We build digital..." paragraph, not the logo:
       matches .ft-brand's padding-top + logo height + logo margin-bottom */
    padding: 108px 0 0;
    flex: 0 0 auto;
    min-width: 140px;
  }

  .ft-footer .ft-col h4 {
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff;
    opacity: 1 !important;
    margin: 0 0 20px;
    position: relative;
    padding-bottom: 12px;
  }
  .ft-col h4::after {
    content: "";
    position: absolute;
    left: 0; bottom: 0;
    width: 26px; height: 2px;
    background: linear-gradient(90deg, var(--ft-accent), var(--ft-accent-2));
    border-radius: 2px;
  }
  .ft-col ul { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 12px; }
  .ft-col ul a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: var(--ft-muted);
    transition: color 0.15s ease, gap 0.15s ease;
  }
  .ft-col ul a::before {
    content: "";
    width: 5px; height: 5px;
    border-radius: 50%;
    background: var(--ft-muted);
    flex-shrink: 0;
    transition: background 0.15s ease, transform 0.15s ease;
  }
  .ft-col ul a:hover { color: var(--ft-ink); gap: 12px; }
  .ft-col ul a:hover::before { background: var(--ft-accent-2); transform: scale(1.4); }

  .ft-address {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-style: normal;
    font-size: 14px;
    line-height: 1.7;
    color: var(--ft-muted);
    max-width: 220px;
  }
  .ft-address__icon {
    width: 17px;
    height: 17px;
    stroke: var(--ft-accent-2);
    flex-shrink: 0;
    margin-top: 2px;
  }

  /* ---------- divider + bottom ---------- */
  .ft-divider { height: 1px; background: var(--ft-line); }

  .ft-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    padding: 24px 0 32px;
    font-size: 13.5px;
  }
  .ft-legal { display: flex; gap: 24px; flex-wrap: wrap; }
  .ft-legal a { color: var(--ft-muted); transition: color 0.15s ease; }
  .ft-legal a:hover { color: var(--ft-ink); }

  /* ---------- responsive ---------- */
  @media (max-width: 980px) {
    .ft-grid { flex-direction: column; gap: 32px; }
    .ft-brand { flex: 1 1 auto; max-width: none; }
    .ft-links { gap: 32px; }
    .ft-col { padding-top: 4px; min-width: 130px; }
  }

  @media (max-width: 640px) {
    .ft-footer { padding-top: 60px; }
    .ft-wrap { padding: 0 20px; }
    .ft-top { top: -24px; right: 20px; width: 52px; height: 52px; }
    .ft-grid { gap: 28px; padding-bottom: 40px; }
    .ft-links { gap: 24px 32px; }
    .ft-col { flex: 0 0 calc(50% - 16px); min-width: 0; }
    .ft-bottom { flex-direction: column; align-items: flex-start; }
    .ft-logo img { width: 64px; height: 64px; }
  }
</style>

<footer class="ft-footer" id="site-footer">
  <div class="ft-overlay"></div>

  <div class="ft-wrap">

    <button type="button" class="ft-top" id="ft-top-btn" aria-label="Back to top">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg>
    </button>

    <div class="ft-grid">

      <div class="ft-brand">
        <a href="/digibeat/index.php" class="ft-logo" aria-label="Digibeat home">
          <img src="/digibeat/assets/images/logo-footer.png" alt="Digibeat">
        </a>
        <p class="ft-brand__desc">
          We build digital experiences that turn first-time visitors into
          long-term customers — strategy, design, and engineering under
          one roof.
        </p>
        <div class="ft-socials">
          <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="#" aria-label="Instagram" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37a4 4 0 1 1-7.914 1.174A4 4 0 0 1 16 11.37z"/><path d="M17.5 6.5h.01"/></svg>
          </a>
          <a href="#" aria-label="X (Twitter)" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l16 16"/><path d="M20 4 4 20"/></svg>
          </a>
          <a href="#" aria-label="Facebook" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
        </div>

        <div class="ft-chips">
          <a class="ft-chip" href="mailto:hello@digibeat.com">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
            hello@digibeat.com
          </a>
          <a class="ft-chip" href="tel:+914802733555">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 480 2733 555
          </a>
        </div>
      </div>

      <div class="ft-links">
      <div class="ft-col">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="industries.php">Industries</a></li>
          <li><a href="case-studies.php">Works</a></li>
          <li><a href="careers.php">Careers</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="ft-col">
        <h4>Services</h4>
        <ul>
          <li><a href="services.php#branding">Branding</a></li>
          <li><a href="services.php#experience-design">Experience Design</a></li>
          <li><a href="services.php#technology">Technology</a></li>
          <li><a href="services.php#marketing">Digital Marketing</a></li>
        </ul>
      </div>

      <div class="ft-col">
        <h4>Other</h4>
        <ul>
          <li><a href="blog.php">Blogs</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>
          <li><a href="clients.php">Our Clients</a></li>
          <li><a href="/digibeat/assets/files/digibeat-brochure.pdf" download>Download Brochure</a></li>
          <li><a href="sitemap.php">Sitemap</a></li>
        </ul>
      </div>

      <!--
        Address column — edit the text inside .ft-address__text below,
        or replace it with a Google Maps link if you'd rather link out
        to directions instead of showing plain text.
      -->
      <div class="ft-col ft-col--address">
        <h4>Get In Touch</h4>
        <address class="ft-address">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ft-address__icon"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span class="ft-address__text">
            123 Business Street,<br>
            Kozhikode, Kerala 673001,<br>
            India
          </span>
        </address>
      </div>
      </div>

    </div>

    <div class="ft-divider"></div>

    <div class="ft-bottom">
      <p>&copy; <span id="ft-year"><?php echo date('Y'); ?></span> Digibeat. All rights reserved.</p>
      <div class="ft-legal">
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="terms.php">Terms of Service</a>
        <a href="sitemap.php">Sitemap</a>
      </div>
    </div>

  </div>
</footer>

<script>
(function () {
  var backToTop = document.getElementById('ft-top-btn');
  if (backToTop) {
    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
})();
</script>