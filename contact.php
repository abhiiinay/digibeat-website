<?php
/**
 * Contact Page
 * -------------------------------------------------
 * Handles the contact form submission (validation + mail)
 * and renders a light, modern contact page.
 *
 * Update the CONFIG block below with your own details.
 */

// ===================== CONFIG =====================
$RECIPIENT_EMAIL = "hello@yourcompany.com"; // <-- change this
$COMPANY_NAME    = "Digibeat"; // <-- change this
$SITE_NAME       = "digibeat.in";
// ====================================================

$errors  = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first_name = trim($_POST["first_name"] ?? "");
    $last_name  = trim($_POST["last_name"] ?? "");
    $email      = trim($_POST["email"] ?? "");
    $company    = trim($_POST["company"] ?? "");
    $phone      = trim($_POST["phone"] ?? "");
    $message    = trim($_POST["message"] ?? "");

    // ---- Validation ----
    if ($first_name === "") $errors[] = "First name is required.";
    if ($last_name === "")  $errors[] = "Last name is required.";
    if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }
    if ($message === "") $errors[] = "Please write a short message.";

    // ---- Send mail if valid ----
    if (empty($errors)) {
        $subject = "New contact form submission from $first_name $last_name";
        $body  = "Name: $first_name $last_name\n";
        $body .= "Email: $email\n";
        $body .= "Company: $company\n";
        $body .= "Phone: $phone\n\n";
        $body .= "Message:\n$message\n";

        $headers = "From: no-reply@" . preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n";
        $headers .= "Reply-To: $email\r\n";

        // mail() requires a properly configured mail server on the host.
        $sent = @mail($RECIPIENT_EMAIL, $subject, $body, $headers);

        if ($sent) {
            $success = true;
            $first_name = $last_name = $email = $company = $phone = $message = "";
        } else {
            $errors[] = "Something went wrong sending your message. Please try again.";
        }
    }
}

function old($field, $data) {
    return htmlspecialchars($data[$field] ?? "", ENT_QUOTES);
}

// ---- Locations data (edit / extend as needed) ----
$locations = [
    [
        "country"   => "Kozhikode, India",
        "flag"      => "🇮🇳",
        "image"     => "https://media.istockphoto.com/id/917807264/photo/silhouettes-of-sea-piers-during-sunset-in-calicut.webp?a=1&b=1&s=612x612&w=0&k=20&c=PYi7y5a2IiRmukDAA59JEtivX0Pk7xbeWQmsCcki_cQ=",
        "company"   => "Digibeat Online Solutions",
        "address"   => "NK Tower, North Karassery Jn.\n Mukkam – Areekode Road, Mukkam,\n Calicut - 673601.",
        "map_url"   => "https://maps.google.com/?q=Infopark+Kozhikode",
        "enquiry"   => [
            "label" => "General Enquiry",
            "phone" => "+91 9526157470",
            "email" => "hello@digibeat.in",
        ],
    ],
];

function render_icon($name) {
    $icons = [
        "chat" => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>',
        "mail" => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m22 6-10 7L2 6"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>',
        "phone" => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.36 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
        "arrow" => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"></path></svg>',
        "clock" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 3"></path></svg>',
        "shield" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
        "users" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
        "pin" => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
    ];
    return $icons[$name] ?? "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — <?php echo htmlspecialchars($COMPANY_NAME); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:            #ffffff;
    --panel:         #f7f7f9;
    --panel-border:  #e7e7ec;
    --text-primary:  #131318;
    --text-muted:    #6c6c78;
    --accent:        #5546e8;
    --accent-soft:   rgba(85,70,232,0.10);
    --error:         #d6403f;
    --success:       #1f9d55;

    --font-display: 'Space Grotesk', 'Inter', sans-serif;
    --font-body:    'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --font-mono:    'JetBrains Mono', 'Courier New', monospace;
  }

  *{ box-sizing: border-box; }

  html,body{
    margin:0; padding:0;
    background: var(--bg);
    color: var(--text-primary);
    font-family: var(--font-body);
    min-height:100vh;
  }

  a{ color:inherit; }

  .wrap{
    max-width: 1200px;
    margin: 0 auto;
    padding: 90px 40px 100px;
  }

  .eyebrow{
    font-family: var(--font-mono);
    font-size: 12px;
    letter-spacing: 0.16em;
    color: var(--accent);
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom: 24px;
    text-transform: uppercase;
  }
  .eyebrow::before{
    content:"";
    width:6px; height:6px;
    border-radius:50%;
    background: var(--accent);
    display:inline-block;
  }

  .grid{
    display:grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 64px;
    align-items:start;
  }

  h1{
    font-family: var(--font-display);
    font-size: 48px;
    line-height: 1.1;
    letter-spacing: -0.02em;
    margin: 0 0 22px;
    font-weight: 600;
  }

  .lede{
    color: var(--text-muted);
    font-size: 16px;
    line-height: 1.7;
    max-width: 480px;
    margin-bottom: 46px;
  }

  /* ---- reasons list: fills the left column to the card's height ---- */
  .reasons{
    display:flex;
    flex-direction: column;
    gap: 30px;
    padding: 36px 0;
    margin-bottom: 30px;
    border-top: 1px solid var(--panel-border);
    border-bottom: 1px solid var(--panel-border);
  }
  .reason-item{
    display:flex;
    gap: 18px;
    align-items:flex-start;
  }
  .reason-icon{
    width: 42px; height: 42px;
    flex-shrink:0;
    border-radius: 11px;
    background: var(--accent-soft);
    color: var(--accent);
    display:flex; align-items:center; justify-content:center;
  }
  .reason-item h4{
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 600;
    margin: 2px 0 6px;
  }
  .reason-item p{
    font-size: 14.5px;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0;
    max-width: 380px;
  }

  .quick-contact{
    display:flex;
    flex-wrap: wrap;
    gap: 12px;
  }
  .quick-chip{
    display:inline-flex;
    align-items:center;
    gap: 10px;
    padding: 12px 18px;
    border-radius: 999px;
    border: 1px solid var(--panel-border);
    background: var(--panel);
    color: var(--text-primary);
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    font-family: var(--font-display);
    transition: border-color .15s ease, background .15s ease, transform .15s ease;
  }
  .quick-chip:hover{
    border-color: var(--accent);
    background: #fff;
    transform: translateY(-1px);
  }
  .quick-chip .icon{ color: var(--accent); display:flex; }

  /* ---- form card ---- */
  .card{
    background: var(--panel);
    border: 1px solid var(--panel-border);
    border-radius: 18px;
    padding: 40px;
  }
  .card h2{
    font-family: var(--font-display);
    margin: 0 0 26px;
    font-size: 22px;
    font-weight: 600;
  }

  .row{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 14px;
  }
  .row.single{ grid-template-columns: 1fr; }

  label{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    margin-bottom: 6px;
    font-family: var(--font-mono);
    letter-spacing: 0.04em;
  }

  input, textarea{
    width:100%;
    background:#ffffff;
    border: 1px solid var(--panel-border);
    border-radius: 10px;
    padding: 13px 14px;
    color: var(--text-primary);
    font-size: 14px;
    font-family: var(--font-body);
    transition: border-color .15s ease, box-shadow .15s ease;
  }
  input::placeholder, textarea::placeholder{ color:#a3a3ac; }

  input:focus, textarea:focus{
    outline:none;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px var(--accent-soft);
  }

  textarea{ resize: vertical; min-height:120px; }

  .field{ margin-bottom:14px; }

  .submit-btn{
    width:100%;
    margin-top: 10px;
    background: var(--accent);
    color: #fff;
    border:none;
    border-radius: 10px;
    padding: 15px 18px;
    font-size: 15px;
    font-weight: 600;
    font-family: var(--font-display);
    cursor:pointer;
    transition: transform .12s ease, background .15s ease;
  }
  .submit-btn:hover{ background:#463adb; transform: translateY(-1px); }

  .alert{
    border-radius: 10px;
    padding: 14px 16px;
    font-size: 14px;
    margin-bottom: 18px;
  }
  .alert-error{
    background: rgba(214,64,63,0.06);
    border: 1px solid rgba(214,64,63,0.3);
    color: var(--error);
  }
  .alert-success{
    background: rgba(31,157,85,0.06);
    border: 1px solid rgba(31,157,85,0.3);
    color: var(--success);
  }
  .alert ul{ margin:6px 0 0; padding-left: 18px; }

  .disclaimer{
    font-size: 12px;
    color: var(--text-muted);
    margin-top: 16px;
    line-height:1.6;
  }

  @media (max-width: 860px){
    .grid{ grid-template-columns: 1fr; }
    h1{ font-size: 34px; }
    .wrap{ padding: 50px 22px 60px; }
    .row{ grid-template-columns: 1fr; }
  }

  /* =========================================================
     OUR LOCATIONS — same white canvas as the page above; kept
     distinct through a top rule, spacing, and a display-serif-
     free modern heading rather than a color block.
  ========================================================= */
  .locations{
    background: var(--bg);
    color: var(--text-primary);
    padding: 90px 40px 120px;
    border-top: 1px solid var(--panel-border);
  }
  .loc-wrap{
    max-width: 1200px;
    margin: 0 auto;
  }
  .loc-head{
    text-align:center;
    margin-bottom: 64px;
  }
  .loc-eyebrow{
    font-family: var(--font-mono);
    font-size: 12px;
    letter-spacing: 0.16em;
    color: var(--accent);
    margin-bottom: 18px;
    text-transform: uppercase;
  }
  .loc-head h2{
    font-family: var(--font-display);
    font-size: 42px;
    font-weight: 600;
    letter-spacing: -0.02em;
    margin: 0 0 16px;
  }
  .loc-head p{
    color: var(--text-muted);
    font-size: 16px;
    max-width: 480px;
    margin: 0 auto;
  }

  .loc-body{
    display:grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 56px;
    align-items:stretch;
  }

  .loc-photo{
    width:100%;
    height: 230px;
    object-fit: cover;
    border-radius: 12px;
    display:block;
    margin-bottom: 22px;
  }
  .loc-country{
    display:flex;
    align-items:center;
    gap: 12px;
    font-family: var(--font-display);
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 0.01em;
    margin-bottom: 16px;
  }
  .loc-flag{ font-size: 24px; line-height:1; }
  .loc-address{
    color: var(--text-muted);
    font-size: 15.5px;
    line-height: 1.7;
    white-space: pre-line;
    margin: 0 0 18px;
  }
  .loc-map{
    display:inline-flex;
    align-items:center;
    gap:6px;
    font-weight: 600;
    font-size: 14px;
    color: var(--text-primary);
    text-decoration:none;
    border-bottom: 2px solid var(--text-primary);
    padding-bottom: 2px;
  }
  .loc-map:hover{ color: var(--accent); border-color: var(--accent); }

  /* ---- single enquiry card: the visual counterweight to the photo ---- */
  .enquiry-card{
    position: relative;
    background: var(--text-primary);
    color: #fff;
    border-radius: 20px;
    padding: 40px;
    height: 100%;
    overflow: hidden;
    display:flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 320px;
  }
  .enquiry-card::before{
    content:"";
    position:absolute;
    top:-60px; right:-60px;
    width: 220px; height: 220px;
    background: var(--accent);
    border-radius: 50%;
    opacity: 0.35;
    filter: blur(10px);
  }
  .enquiry-card::after{
    content:"";
    position:absolute;
    inset:0;
    background: linear-gradient(155deg, rgba(85,70,232,0.28), transparent 55%);
  }
  .enquiry-top{ position: relative; z-index:1; }
  .enquiry-icon{
    width: 46px; height: 46px;
    border-radius: 12px;
    background: rgba(255,255,255,0.12);
    display:flex; align-items:center; justify-content:center;
    color: #cfc9ff;
    margin-bottom: 22px;
  }
  .enquiry-label{
    font-family: var(--font-mono);
    font-size: 12px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #b9b4e6;
    margin-bottom: 10px;
  }
  .enquiry-card h3{
    font-family: var(--font-display);
    font-size: 26px;
    font-weight: 600;
    margin: 0 0 26px;
    letter-spacing: -0.01em;
  }
  .enquiry-links{
    position: relative;
    z-index: 1;
    display:flex;
    flex-direction: column;
    gap: 14px;
  }
  .enquiry-link{
    display:flex;
    align-items:center;
    justify-content: space-between;
    gap: 14px;
    padding: 16px 18px;
    border-radius: 12px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    text-decoration:none;
    color: #fff;
    transition: background .15s ease, transform .15s ease;
  }
  .enquiry-link:hover{
    background: rgba(255,255,255,0.12);
    transform: translateX(2px);
  }
  .enquiry-link .left{
    display:flex;
    align-items:center;
    gap: 12px;
  }
  .enquiry-link .left .icon{ color:#cfc9ff; display:flex; }
  .enquiry-link .text{ display:flex; flex-direction:column; }
  .enquiry-link .text small{
    font-size: 11.5px;
    color: #b9b4e6;
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .enquiry-link .text strong{
    font-family: var(--font-display);
    font-size: 15.5px;
    font-weight: 600;
  }
  .enquiry-link .arrow{
    color: #b9b4e6;
    flex-shrink:0;
  }

  @media (max-width: 860px){
    .loc-body{ grid-template-columns: 1fr; }
    .enquiry-card{ min-height: unset; }
    .loc-head h2{ font-size: 32px; }
    .locations{ padding: 70px 22px 80px; }
  }

   html, body {
    background: var(--bg) !important;
    color: var(--text-primary) !important;
  }
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="wrap">
  <div class="eyebrow">Get in touch</div>

  <div class="grid">
    <!-- LEFT: copy -->
    <div>
      <h1>Let's talk about<br>your next project.</h1>
      <p class="lede">
        Tell us a bit about what you're building. A real person from our team
        will get back to you within one business day — no forms disappearing
        into a queue, no automated hand-offs.
      </p>

      <div class="reasons">
        <div class="reason-item">
          <div class="reason-icon"><?php echo render_icon('clock'); ?></div>
          <div>
            <h4>Fast, human response</h4>
            <p>Every message is read by a person on our team, and we reply within one business day — not an autoresponder.</p>
          </div>
        </div>

        <div class="reason-item">
          <div class="reason-icon"><?php echo render_icon('users'); ?></div>
          <div>
            <h4>One team, start to finish</h4>
            <p>You'll work with the same people from the first call through delivery — no re-explaining the brief to a new face.</p>
          </div>
        </div>

        <div class="reason-item">
          <div class="reason-icon"><?php echo render_icon('shield'); ?></div>
          <div>
            <h4>Your details stay private</h4>
            <p>We only use your contact info to reply to you. NDAs are available on request before any project details are shared.</p>
          </div>
        </div>
      </div>

      <div class="quick-contact">
        <a class="quick-chip" href="mailto:hello@<?php echo htmlspecialchars($SITE_NAME); ?>">
          <span class="icon"><?php echo render_icon('mail'); ?></span>
          hello@<?php echo htmlspecialchars($SITE_NAME); ?>
        </a>
        <a class="quick-chip" href="tel:+919526157470">
          <span class="icon"><?php echo render_icon('phone'); ?></span>
          +91 9526157470
        </a>
      </div>
    </div>

    <!-- RIGHT: form -->
    <div class="card">
      <h2>Send us a message</h2>

      <?php if ($success): ?>
        <div class="alert alert-success">
          Thanks — your message has been sent. We'll be in touch shortly.
        </div>
      <?php elseif (!empty($errors)): ?>
        <div class="alert alert-error">
          Please fix the following:
          <ul>
            <?php foreach ($errors as $e): ?>
              <li><?php echo htmlspecialchars($e); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form method="POST" action="">
        <div class="row">
          <div class="field">
            <label for="first_name">First Name *</label>
            <input type="text" id="first_name" name="first_name" placeholder="Jane"
                   value="<?php echo old('first_name', $_POST ?? []); ?>" required>
          </div>
          <div class="field">
            <label for="last_name">Last Name *</label>
            <input type="text" id="last_name" name="last_name" placeholder="Doe"
                   value="<?php echo old('last_name', $_POST ?? []); ?>" required>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="email">Work Email *</label>
            <input type="email" id="email" name="email" placeholder="jane@company.com"
                   value="<?php echo old('email', $_POST ?? []); ?>" required>
          </div>
          <div class="field">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210"
                   value="<?php echo old('phone', $_POST ?? []); ?>">
          </div>
        </div>

        <div class="row single">
          <div class="field">
            <label for="message">Message *</label>
            <textarea id="message" name="message" placeholder="Tell us about your project..." required><?php echo old('message', $_POST ?? []); ?></textarea>
          </div>
        </div>

        <button type="submit" class="submit-btn">Send Message</button>

        <p class="disclaimer">
          We use your contact info only to respond to your message.
          We never share your details with third parties.
        </p>
      </form>
    </div>
  </div>
</div>

<!-- ============ OUR LOCATIONS ============ -->
<section class="locations">
  <div class="loc-wrap">
    <div class="loc-head">
      <div class="loc-eyebrow">Where we work</div>
      <h2>Our Location</h2>
      <p>We work with clients across the globe. Find the office nearest you.</p>
    </div>

    <?php foreach ($locations as $loc): ?>
      <div class="loc-body">
        <div class="loc-card">
          <img class="loc-photo" src="<?php echo htmlspecialchars($loc['image']); ?>" alt="<?php echo htmlspecialchars($loc['country']); ?> office">
          <div class="loc-country">
            <span class="loc-flag"><?php echo $loc['flag']; ?></span>
            <span><?php echo htmlspecialchars(strtoupper($loc['country'])); ?></span>
          </div>
          <p class="loc-address"><?php echo htmlspecialchars($loc['company']) . "\n" . htmlspecialchars($loc['address']); ?></p>
          <a class="loc-map" href="<?php echo htmlspecialchars($loc['map_url']); ?>" target="_blank" rel="noopener"><?php echo render_icon('pin'); ?> Google Map</a>
        </div>

        <div class="enquiry-card">
          <div class="enquiry-top">
            <div class="enquiry-icon"><?php echo render_icon('chat'); ?></div>
            <div class="enquiry-label"><?php echo htmlspecialchars($loc['enquiry']['label']); ?></div>
            <h3>Reach out — we usually reply the same day.</h3>
          </div>

          <div class="enquiry-links">
            <a class="enquiry-link" href="tel:<?php echo htmlspecialchars(preg_replace('/\s+/', '', $loc['enquiry']['phone'])); ?>">
              <span class="left">
                <span class="icon"><?php echo render_icon('phone'); ?></span>
                <span class="text">
                  <small>Call us</small>
                  <strong><?php echo htmlspecialchars($loc['enquiry']['phone']); ?></strong>
                </span>
              </span>
              <span class="arrow"><?php echo render_icon('arrow'); ?></span>
            </a>

            <a class="enquiry-link" href="mailto:<?php echo htmlspecialchars($loc['enquiry']['email']); ?>">
              <span class="left">
                <span class="icon"><?php echo render_icon('mail'); ?></span>
                <span class="text">
                  <small>Email us</small>
                  <strong><?php echo htmlspecialchars($loc['enquiry']['email']); ?></strong>
                </span>
              </span>
              <span class="arrow"><?php echo render_icon('arrow'); ?></span>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

</body>
</html>