<?php
$pageTitle = "Photos & Reviews | Sankalp Hospital Ambikapur — Rated 4.7★ on Google";
$pageDesc  = "See real photos of Sankalp Hospital, Ambikapur — our multi-specialty facility, modular OTs, ICU/NICU, wards and labs — plus verified Google patient reviews. Trusted by thousands of families across Surguja.";
$pageCanonical = "https://www.sankalphospital.com/photos";

/* --------------------------------------------------------------------------
 * Business / trust constants (verified from Google Business Profile + site)
 * ------------------------------------------------------------------------ */
$GB_CID        = "16523409274206675794";
$GB_MAPS_URL   = "https://www.google.com/maps?cid={$GB_CID}";
$GB_LAT        = "23.62441998465191";
$GB_LNG        = "83.18957811497918";
$GB_RATING     = "4.7"; // patient rating shown across Google & directories
$GB_ADDRESS    = "Near District Hospital, Manipur, Ambikapur, Chhattisgarh - 497001";
$GB_PHONE_DISP = "+91 9584 889068";
$GB_PHONE_TEL  = "+919584889068";
$GB_DIRECTIONS = "https://www.google.com/maps/dir/?api=1&destination={$GB_LAT},{$GB_LNG}";

/* --------------------------------------------------------------------------
 * Image collection — auto-scans every real image folder so ALL existing
 * photos (and any new ones dropped in later) are embedded automatically.
 * ------------------------------------------------------------------------ */
$captions = [
    'hospital-front.jpg'        => 'Sankalp Hospital — Front View',
    'hospital-render-1.jpg'     => 'Hospital Campus — Aerial View',
    'hospital-render-2.jpg'     => 'Hospital Building',
    'EYE-OT.jpg'                => 'Ophthalmology Operation Theatre',
    'GENERAL-WARD.jpg'          => 'General Ward',
    'GYNAE-OT.jpg'              => 'Gynaecology Operation Theatre',
    'ICU.jpg'                   => 'Intensive Care Unit (ICU)',
    'ICU1.jpg'                  => 'Critical Care Monitoring',
    'LAPAROSCOPIC-SURGERY.jpg'  => 'Laparoscopic Surgery Suite',
    'NICU.jpg'                  => 'Neonatal ICU (NICU)',
    'OPD-CHAMBER-2.jpg'         => 'OPD Consultation Room',
    'OPD-CHAMBER-4.jpg'         => 'OPD Consultation Chamber',
    'ORTHO-OT.jpg'              => 'Orthopaedic Operation Theatre',
    'PATHOLOGY-LAB.jpg'         => 'Pathology Laboratory',
    'TPA-DESK.jpg'              => 'TPA & Insurance Help Desk',
    'sankalp-photo-010.jpg'     => 'Inside Sankalp Hospital',
    'wing-1.jpg' => 'Hospital Wing', 'wing-2.jpg' => 'Patient Care Wing',
    'wing-3.jpg' => 'Treatment Wing', 'wing-4.jpg' => 'Emergency Wing',
    'wing-5.jpg' => 'Surgical Wing',  'wing-6.jpg' => 'Diagnostic Wing',
    'wing-7.jpg' => 'Consultation Wing',
    'g1.jpg' => 'At Sankalp Hospital', 'g2.jpg' => 'At Sankalp Hospital',
    'g3.jpg' => 'At Sankalp Hospital', 'g4.jpg' => 'At Sankalp Hospital',
];

function sh_prettify($file) {
    $name = preg_replace('/\.[^.]+$/', '', $file);      // strip extension
    $name = preg_replace('/[-_]+/', ' ', $name);          // separators -> space
    $name = trim(preg_replace('/\s+/', ' ', $name));
    return ucwords(strtolower($name));
}

function sh_scan($webDir, $captions) {
    $abs = __DIR__ . '/' . ltrim($webDir, '/');
    if (!is_dir($abs)) return [];
    $files = glob($abs . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [];
    natcasesort($files);
    $out = [];
    foreach ($files as $f) {
        $base = basename($f);
        $out[] = [
            'src' => '/' . trim($webDir, '/') . '/' . rawurlencode($base),
            'cap' => $captions[$base] ?? sh_prettify($base),
        ];
    }
    return $out;
}

// Facility photos already in the repository (front + infrastructure + wings + gallery)
$facilityPhotos = array_merge(
    sh_scan('assets/img',                $captions), // hospital-front / renders (top level only)
    sh_scan('assets/img/infrastructure', $captions),
    sh_scan('assets/img/wings',          $captions),
    sh_scan('assets/img/gallery',        $captions)
);

// Keep only the intended top-level hospital shots from assets/img (skip logos etc.)
$facilityPhotos = array_values(array_filter($facilityPhotos, function ($p) {
    $b = strtolower(basename($p['src']));
    if (strpos($p['src'], '/assets/img/infrastructure/') !== false) return true;
    if (strpos($p['src'], '/assets/img/wings/') !== false)          return true;
    if (strpos($p['src'], '/assets/img/gallery/') !== false)        return true;
    return in_array($b, ['hospital-front.jpg', 'hospital-render-1.jpg', 'hospital-render-2.jpg'], true);
}));

// Owner-supplied Google Business Profile photos (auto-appear when added)
$googlePhotos = sh_scan('assets/img/google-business', $captions);

// Everything, for JSON-LD image list
$allImages = array_merge($facilityPhotos, $googlePhotos);

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- Page-scoped trust styling -->
<style>
  .sh-trust-bar{background:linear-gradient(135deg,#0d6efd0d,#19875408);border-block:1px solid #0000000d}
  .sh-google-card{background:#fff;border:1px solid #eef0f4;border-radius:20px;box-shadow:0 18px 45px -22px rgba(16,24,40,.28)}
  .sh-stars{color:#fbbc04;letter-spacing:2px}
  .sh-gicon{width:26px;height:26px;flex:0 0 26px}
  .sh-stat{background:#fff;border:1px solid #eef0f4;border-radius:16px;padding:1.1rem .75rem;height:100%}
  .sh-stat h3{font-size:1.6rem;line-height:1;margin:0;color:#0d6efd;font-weight:800}
  .sh-stat p{margin:.4rem 0 0;font-size:.82rem;color:#6b7280;font-weight:600;text-transform:uppercase;letter-spacing:.03em}
  .sh-badge-pill{display:inline-flex;align-items:center;gap:.5rem;background:#fff;border:1px solid #eef0f4;border-radius:999px;padding:.5rem 1rem;font-weight:700;color:#111827;box-shadow:0 6px 18px -10px rgba(16,24,40,.35)}
  .sh-verified{color:#1a73e8;font-size:.9rem}
  .gallery-img{width:100%;height:250px;object-fit:cover}
  @media (max-width:575px){.gallery-img{height:210px}}
</style>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="/assets/img/hospital-front.jpg" alt="Sankalp Hospital Ambikapur building">
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-star me-1"></i> Photos &amp; Patient Trust</span>
        <h1 class="text-white display-4 fw-bold">Photos &amp; Reviews</h1>
        <p class="lead text-white-50 mb-0">Real photos of Sankalp Hospital, Ambikapur and verified patient reviews on Google — see why thousands of families across Surguja trust us with their care.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="<?php echo htmlspecialchars($GB_MAPS_URL); ?>" target="_blank" rel="noopener" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="fab fa-google me-2"></i> Reviews on Google</a>
      </div>
    </div>
  </div>
</section>

<!-- GOOGLE RATING + TRUST BAR -->
<section class="sh-trust-bar py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <!-- Google review card -->
      <div class="col-lg-5">
        <div class="sh-google-card p-4 p-md-5 text-center h-100">
          <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
            <!-- Google "G" -->
            <svg class="sh-gicon" viewBox="0 0 48 48" aria-hidden="true"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg>
            <span class="fw-bold fs-5">Google Reviews</span>
          </div>
          <div class="display-3 fw-bold text-dark mb-1"><?php echo $GB_RATING; ?></div>
          <div class="sh-stars fs-4 mb-2">★★★★★</div>
          <p class="text-muted mb-1">Rated <strong><?php echo $GB_RATING; ?> / 5</strong> by hundreds of patients</p>
          <p class="sh-verified mb-4"><i class="fas fa-check-circle me-1"></i> Verified Google Business Profile</p>
          <a href="<?php echo htmlspecialchars($GB_MAPS_URL); ?>" target="_blank" rel="noopener" class="btn btn-primary rounded-pill px-4 py-2 w-100 mb-2"><i class="fab fa-google me-2"></i> Read all reviews on Google</a>
          <a href="<?php echo htmlspecialchars($GB_DIRECTIONS); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary rounded-pill px-4 py-2 w-100"><i class="fas fa-location-arrow me-2"></i> Get Directions</a>
        </div>
      </div>

      <!-- Trust stats -->
      <div class="col-lg-7">
        <div class="mb-4">
          <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-shield-heart me-1"></i> A Heritage of Trust</span>
          <h2 class="fw-bold text-dark">Trusted care, backed by real results</h2>
          <p class="text-muted mb-0">For over 15 years, Sankalp Hospital has delivered multi-specialty healthcare to Ambikapur and the wider Surguja region — from advanced fertility care to 24×7 emergency and trauma services.</p>
        </div>
        <div class="row g-3">
          <div class="col-6 col-md-3"><div class="sh-stat text-center"><h3>15+</h3><p>Years of Care</p></div></div>
          <div class="col-6 col-md-3"><div class="sh-stat text-center"><h3>1,500+</h3><p>IVF Babies</p></div></div>
          <div class="col-6 col-md-3"><div class="sh-stat text-center"><h3>13+</h3><p>Specialties</p></div></div>
          <div class="col-6 col-md-3"><div class="sh-stat text-center"><h3>24×7</h3><p>Emergency</p></div></div>
        </div>
        <div class="d-flex flex-wrap gap-2 mt-4">
          <span class="sh-badge-pill"><i class="fas fa-award text-primary"></i> Ayushman &amp; CGHS empanelled</span>
          <span class="sh-badge-pill"><i class="fas fa-hospital text-primary"></i> Modular OTs &amp; ICU/NICU</span>
          <span class="sh-badge-pill"><i class="fas fa-user-md text-primary"></i> Experienced specialists</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if (!empty($googlePhotos)): ?>
<!-- GOOGLE BUSINESS PROFILE PHOTOS (auto-loaded from assets/img/google-business/) -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fab fa-google me-1"></i> From Google</span>
      <h2 class="fw-bold text-dark">Straight From Our Google Business Profile</h2>
      <p class="text-muted mx-auto" style="max-width:620px;">The same photos patients see on our verified Google listing.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($googlePhotos as $img): ?>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="<?php echo htmlspecialchars($img['src']); ?>" alt="<?php echo htmlspecialchars($img['cap']); ?> — Sankalp Hospital Ambikapur" class="gallery-img" loading="lazy">
            <div class="gallery-overlay">
              <a href="<?php echo htmlspecialchars($img['src']); ?>" class="gallery-lightbox" data-gallery="photos"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info"><h5><?php echo htmlspecialchars($img['cap']); ?></h5></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- FACILITY PHOTO WALL -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-images me-1"></i> Inside Sankalp Hospital</span>
      <h2 class="fw-bold text-dark">A Real Look At Our Facility</h2>
      <p class="text-muted mx-auto" style="max-width:620px;">Modular operation theatres, intensive care units, wards, labs and patient areas — an honest, unfiltered view of where your treatment happens.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($facilityPhotos as $img): ?>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="<?php echo htmlspecialchars($img['src']); ?>" alt="<?php echo htmlspecialchars($img['cap']); ?> — Sankalp Hospital Ambikapur" class="gallery-img" loading="lazy">
            <div class="gallery-overlay">
              <a href="<?php echo htmlspecialchars($img['src']); ?>" class="gallery-lightbox" data-gallery="photos"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info"><h5><?php echo htmlspecialchars($img['cap']); ?></h5></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center text-muted small mt-4 mb-0"><i class="fas fa-camera me-1"></i> <?php echo count($allImages); ?> photos · Showing our real hospital infrastructure in Ambikapur.</p>
  </div>
</section>

<!-- MAP + LOCATION -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-5">
        <div class="sh-google-card p-4 p-md-5 h-100">
          <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-map-marker-alt me-1"></i> Find Us</span>
          <h3 class="fw-bold text-dark mb-3">Visit Sankalp Hospital, Ambikapur</h3>
          <ul class="list-unstyled text-muted mb-4">
            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text-primary mt-1 me-3"></i><span><?php echo htmlspecialchars($GB_ADDRESS); ?></span></li>
            <li class="mb-3 d-flex"><i class="fas fa-phone-alt text-primary mt-1 me-3"></i><a href="tel:<?php echo $GB_PHONE_TEL; ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($GB_PHONE_DISP); ?></a></li>
            <li class="mb-0 d-flex"><i class="fas fa-clock text-primary mt-1 me-3"></i><span>OPD: 9:00 AM – 6:00 PM · Emergency &amp; Trauma: 24×7</span></li>
          </ul>
          <a href="<?php echo htmlspecialchars($GB_DIRECTIONS); ?>" target="_blank" rel="noopener" class="btn btn-primary rounded-pill px-4 py-2 me-2 mb-2"><i class="fas fa-location-arrow me-2"></i> Directions</a>
          <a href="<?php echo htmlspecialchars($GB_MAPS_URL); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary rounded-pill px-4 py-2 mb-2"><i class="fab fa-google me-2"></i> View on Google</a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="rounded-4 overflow-hidden shadow-sm h-100" style="min-height:360px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.4385172288075!2d83.18957811497918!3d23.62441998465191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398863f69aa24e8d%3A0xe54ef130ab7be352!2sSankalp%20Hospital%20Ambikapur!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;min-height:360px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Sankalp Hospital Ambikapur location map"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="sh-google-card p-4 p-md-5 text-center">
      <h2 class="fw-bold text-dark mb-2">Ready to book your visit?</h2>
      <p class="text-muted mb-4">Talk to our team or reserve an OPD slot — we're here to help you and your family.</p>
      <div class="d-flex flex-wrap justify-content-center gap-2">
        <a href="/#appointment" class="btn btn-primary btn-lg rounded-pill px-4"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
        <a href="tel:<?php echo $GB_PHONE_TEL; ?>" class="btn btn-outline-primary btn-lg rounded-pill px-4"><i class="fas fa-phone-alt me-2"></i> <?php echo htmlspecialchars($GB_PHONE_DISP); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 p-0">
        <button type="button" class="btn-close btn-close-white ms-auto m-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0 text-center">
        <img src="" id="lightboxImg" class="img-fluid rounded" alt="Sankalp Hospital photo">
      </div>
      <div class="modal-footer border-0 justify-content-center">
        <button class="btn btn-light btn-sm rounded-pill me-2" id="prevBtn"><i class="fas fa-arrow-left me-1"></i> Prev</button>
        <button class="btn btn-light btn-sm rounded-pill" id="nextBtn">Next <i class="fas fa-arrow-right ms-1"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- JSON-LD: Hospital + ImageGallery -->
<script type="application/ld+json">
<?php
$schema = [
    "@context" => "https://schema.org",
    "@type"    => "Hospital",
    "name"     => "Sankalp Hospital",
    "url"      => "https://www.sankalphospital.com/",
    "image"    => array_map(function ($p) { return "https://www.sankalphospital.com" . $p['src']; }, array_slice($allImages, 0, 25)),
    "telephone" => $GB_PHONE_TEL,
    "address"  => [
        "@type" => "PostalAddress",
        "streetAddress" => "Near District Hospital, Manipur",
        "addressLocality" => "Ambikapur",
        "addressRegion" => "Chhattisgarh",
        "postalCode" => "497001",
        "addressCountry" => "IN",
    ],
    "geo" => ["@type" => "GeoCoordinates", "latitude" => $GB_LAT, "longitude" => $GB_LNG],
    "hasMap" => $GB_MAPS_URL,
    "sameAs" => [
        "https://www.facebook.com/sankalphospitals/",
        "https://www.instagram.com/sankalphospitals/",
        "https://www.youtube.com/channel/UCWGjgpakHsg7z4qMbXBSK_w",
        $GB_MAPS_URL,
    ],
];
echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- Gallery Lightbox Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  var lightboxes = document.querySelectorAll('.gallery-lightbox');
  if (!lightboxes.length) return;
  var modal = new bootstrap.Modal(document.getElementById('galleryModal'));
  var modalImg = document.getElementById('lightboxImg');
  var currentIndex = 0;
  var images = [];

  lightboxes.forEach(function (link, index) {
    images.push({
      src: link.getAttribute('href'),
      alt: link.closest('.gallery-card').querySelector('.gallery-img').alt
    });
    link.addEventListener('click', function (e) {
      e.preventDefault();
      currentIndex = index;
      showModalImage();
      modal.show();
    });
  });

  function showModalImage() {
    modalImg.src = images[currentIndex].src;
    modalImg.alt = images[currentIndex].alt;
  }
  document.getElementById('prevBtn').addEventListener('click', function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showModalImage();
  });
  document.getElementById('nextBtn').addEventListener('click', function () {
    currentIndex = (currentIndex + 1) % images.length;
    showModalImage();
  });
});
</script>
