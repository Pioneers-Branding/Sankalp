<?php
/**
 * One-time generator: builds 21 fully self-contained doctors/dr-<slug>.php
 * files using the data from doctors/_registry.php plus the per-doctor
 * bio/long_bio/expertise inlined directly. Run from project root:
 *
 *     php tools/generate-doctor-pages.php
 *
 * After this runs, the per-doctor files are completely standalone — no
 * require of _template.php, no shared rendering logic.
 */

declare(strict_types=1);

$projectRoot = dirname(__DIR__);
require $projectRoot . '/doctors/_registry.php';

// Full data for each doctor (was previously in the per-doctor file's $doc).
// Pulled from the original $doctors array. Each per-doctor file will get its
// own self-contained page that includes the long_bio + expertise.
$fullDocs = json_decode(file_get_contents($projectRoot . '/scraped_doctors.json'), true);

// Category resolution (mirrors _template.php logic)
$catMap = [
    'ophthalmology' => 'clinical',
    'urology'       => 'clinical',
    'ent'           => 'clinical',
    'anesthesia'    => 'clinical',
    'psychiatry'    => 'clinical',
    'surgery'       => 'surgical',
    'orthopedics'   => 'surgical',
    'oncology'      => 'surgical',
    'gynecology'    => 'surgical',
    'emergency'     => 'critical',
    'ivf'           => 'family',
    'pediatrics'    => 'family',
];
$customCatMap = [
    'dentistry' => 'clinical',
    'medicine'  => 'clinical',
    'nutrition' => 'clinical',
];

// Compute the "dept slug" used by the booking form (first word of specialty, lowercased, with & stripped).
function bookingDept(string $specialty): string {
    $first = strtolower(explode(' ', str_replace('&', '', $specialty))[0]);
    return htmlspecialchars($first, ENT_QUOTES, 'UTF-8');
}

// Resolve the per-doctor theme class (e.g. "dp-theme-surgical") from the
// registry's filter slug. The actual colors live in /css/doctor-profile.css
// so all 21 pages share one stylesheet.
function resolveThemeClass(array $filters, array $catMap, array $customCatMap): string {
    $primary = $filters[0] ?? 'clinical';
    $cat = $customCatMap[$primary] ?? ($catMap[$primary] ?? 'clinical');
    return 'dp-theme-' . $cat;
}

function html(?string $s): string {
    return htmlspecialchars((string)($s ?? ''), ENT_QUOTES, 'UTF-8');
}

$generated = 0;
foreach ($doctorRegistry as $slug => $reg) {
    $longBio = $fullDocs[$slug]['long_bio'] ?? '';
    $bio     = $fullDocs[$slug]['bio'] ?? ($reg['bio'] ?? '');
    $expertise = $fullDocs[$slug]['expertise'] ?? [];

    $themeClass = resolveThemeClass($reg['filters'], $catMap, $customCatMap);

    $pageTitle = "{$reg['name']} | Best {$reg['specialty']} Specialist in Ambikapur | Sankalp Hospital";
    $pageDesc  = "Consult {$reg['name']}, {$reg['degrees']} at Sankalp Hospital in Ambikapur. {$bio}";

    $deptHidden = bookingDept($reg['specialty']);

    // Split degrees into qualifications + designation
    $degreeParts = explode('|', $reg['degrees']);
    $qualsStr = trim($degreeParts[0] ?? '');
    $designation = isset($degreeParts[1]) ? trim($degreeParts[1]) : '';
    $quals = array_filter(array_map('trim', explode(',', $qualsStr)), fn($q) => $q !== '');

    $qualsHtml = '';
    foreach ($quals as $q) $qualsHtml .= '                <li>' . html($q) . "</li>\n";
    if ($designation !== '') $qualsHtml .= '                <li>' . html($designation) . "</li>\n";

    $expertiseHtml = '';
    foreach ($expertise as $exp) {
        $expertiseHtml .= '            <span class="dp-exp-pill"><i class="fas fa-check-circle"></i> ' . html($exp) . "</span>\n";
    }

    $name = html($reg['name']);
    $specialty = html($reg['specialty']);
    $degrees = html($reg['degrees']);
    $experience = html($reg['experience']);
    $img = html($reg['img']);
    $bio = html($bio);
    $longBioHtml = html($longBio);

    $out = <<<PHP
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once __DIR__ . '/../includes/analytics.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$pageTitle}</title>
  <meta name="description" content="{$pageDesc}">

  <!-- CSS CDNs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/css/doctor-profile.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#scroll-spy" data-bs-offset="90">
<div class="page-wrapper">

PHP;

    $out .= file_get_contents($projectRoot . '/includes/navbar.php');

    $out .= <<<PHP



<!-- HERO BANNER -->
<div class="dp-page {$themeClass}">
<section class="dp-hero">
  <!-- Background Image & Overlay -->
  <div class="dp-hero-bg">
    <img src="/assets/img/infrastructure/OPD-CHAMBER-2.jpg" alt="Clinical Consult Background">
  </div>
  <div class="dp-hero-overlay"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-pattern"></div>

  <div class="container">
    <!-- Breadcrumb -->
    <div class="dp-breadcrumb">
      <div class="dp-breadcrumb-list">
        <a href="/index.php">Home</a>
        <span class="sep"><i class="fas fa-chevron-right"></i></span>
        <a href="/doctors.php">Our Experts</a>
        <span class="sep"><i class="fas fa-chevron-right"></i></span>
        <span class="current">{$name}</span>
      </div>
    </div>

    <div class="row align-items-center g-4 g-lg-5 mt-2">
      <!-- Doctor Photo -->
      <div class="col-lg-4 col-md-5">
        <div class="dp-photo-wrapper">
          <div class="dp-photo-card">
            <img src="/images/{$img}" alt="{$name}" onerror="this.src='/images/doc1.png'">
            <span class="dp-photo-badge"><i class="fas fa-award"></i> {$experience} Exp</span>
          </div>
        </div>
      </div>

      <!-- Doctor Info -->
      <div class="col-lg-8 col-md-7">
        <div class="dp-hero-content">
          <span class="dp-specialty-tag">
            <i class="fas fa-stethoscope"></i> {$specialty}
          </span>
          <h1 class="dp-hero-name">{$name}</h1>
          <p class="dp-hero-degrees">{$degrees}</p>
          <p class="dp-hero-bio">{$bio}</p>

          <div class="dp-stats-row">
            <div class="dp-stat-chip">
              <div class="chip-icon icon-exp"><i class="fas fa-award"></i></div>
              <div class="chip-text">
                <strong>{$experience}</strong>
                <span>Experience</span>
              </div>
            </div>
            <div class="dp-stat-chip">
              <div class="chip-icon icon-patients"><i class="fas fa-users"></i></div>
              <div class="chip-text">
                <strong>5000+</strong>
                <span>Happy Patients</span>
              </div>
            </div>
            <div class="dp-stat-chip">
              <div class="chip-icon icon-avail"><i class="fas fa-clock"></i></div>
              <div class="chip-text">
                <strong>24/7</strong>
                <span>Available</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="dp-content-area">
  <div class="container">
    <div class="row g-4 g-lg-5">

      <!-- LEFT: Profile & Expertise -->
      <div class="col-lg-7">
        <div class="dp-profile-card">
          <!-- Professional Profile -->
          <span class="dp-section-label"><i class="fas fa-circle"></i> Professional Profile</span>
          <h2 class="dp-section-title">About {$name}</h2>
          <p class="dp-profile-text">{$longBioHtml}</p>

          <div class="dp-divider"></div>

          <!-- Clinical Expertise -->
          <span class="dp-section-label"><i class="fas fa-circle"></i> Clinical Expertise</span>
          <h2 class="dp-section-title">Specializations & Services</h2>
          <div class="dp-expertise-grid">
{$expertiseHtml}          </div>

          <!-- Credentials & Qualifications -->
          <div class="dp-qual-box">
            <div class="dp-qual-title-row">
              <div class="dp-qual-icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <h3 class="mb-0" style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">Credentials & Certifications</h3>
            </div>
            <ul class="dp-qual-list">
{$qualsHtml}            </ul>
          </div>
        </div>
      </div>

      <!-- RIGHT: Booking Sidebar -->
      <div class="col-lg-5">
        <div class="dp-sticky-sidebar">
          <!-- Booking Form -->
          <div class="dp-book-card">
            <h3><i class="far fa-calendar-check me-2"></i> Request a Callback</h3>
            <p class="dp-book-sub">Schedule a consultation with {$name}. Our coordinator will reach out to confirm.</p>
            <form id="detailed-booking-form" class="appointment-form">
              <input type="hidden" id="book-dept" value="{$deptHidden}">
              <input type="hidden" id="book-doc" value="{$name}">
              <div class="mb-3">
                <label for="book-name" class="form-label">Patient Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" id="book-name" class="form-control" placeholder="Enter your full name" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="book-phone" class="form-label">Contact Number</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  <input type="tel" id="book-phone" class="form-control" placeholder="Mobile number" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="book-date" class="form-label">Preferred Date</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  <input type="date" id="book-date" class="form-control" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="book-msg" class="form-label">Health Concerns <span style="font-weight:400;text-transform:none;letter-spacing:0;font-size:0.82rem;color:#94a3b8">(Optional)</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                  <textarea id="book-msg" class="form-control" rows="3" placeholder="Describe your symptoms or concerns..."></textarea>
                </div>
              </div>
              <button type="submit" class="dp-btn-submit"><i class="fas fa-paper-plane"></i> Submit Request</button>
            </form>
          </div>

          <!-- Timings Card -->
          <div class="dp-timings-card">
            <div class="d-flex align-items-center gap-3">
              <div class="dp-timings-icon">
                <i class="far fa-clock"></i>
              </div>
              <h4 class="mb-0" style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">OPD Schedule</h4>
            </div>
            <div class="dp-timings-list">
              <div class="dp-timing-row">
                <span>Mon - Sat</span>
                <strong>09:00 AM - 06:00 PM</strong>
              </div>
              <div class="dp-timing-row border-top pt-2 mt-2">
                <span>Emergency Care</span>
                <strong style="color: var(--emergency, #e11d48);"><i class="fas fa-circle-notch fa-spin me-1 text-danger"></i> 24/7 Available</strong>
              </div>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="dp-contact-bar">
            <i class="fas fa-phone-alt"></i>
            <div class="contact-info">
              <strong>Emergency Helpline</strong>
              <span>+91 9584 889068</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</div><!-- /.dp-page -->

PHP;

    $out .= file_get_contents($projectRoot . '/includes/footer.php');

    $outPath = $projectRoot . '/doctors/' . $slug . '.php';
    file_put_contents($outPath, $out);
    $generated++;
}

echo "Generated {$generated} self-contained doctor page(s) in doctors/\n";
