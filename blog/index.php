<?php
$pageTitle = "Health Blog | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Read the latest health tips, medical insights, and wellness articles from the expert doctors at Sankalp Hospital, Ambikapur.";

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
include __DIR__ . '/blog-functions.php';

$allBlogs = get_all_blogs(__DIR__);

// Category icon map
$catIcons = [
  'Ophthalmology' => 'fa-eye',
  'IVF & Fertility' => 'fa-baby',
  'Fertility' => 'fa-baby',
  'Pediatrics' => 'fa-child',
  'Orthopaedics' => 'fa-bone',
  'Orthopedics' => 'fa-bone',
  'Emergency Care' => 'fa-ambulance',
  'Psychiatry' => 'fa-brain',
  'Gynecology' => 'fa-female',
  'Pregnancy Care' => 'fa-baby',
  'Urology' => 'fa-user-md',
  'Heart Health' => 'fa-heartbeat',
  'Cardiology' => 'fa-heartbeat',
  'General Health' => 'fa-notes-medical',
  'Health' => 'fa-notes-medical',
  'Joint Pain' => 'fa-bone',
  'Kidney Care' => 'fa-kidneys',
  'Thyroid' => 'fa-lungs',
  'Women Health' => 'fa-female',
  "Women's Health" => 'fa-female',
  'Mental Health' => 'fa-brain',
  'Neurology' => 'fa-brain',
  'Pain Management' => 'fa-hand-holding-medical',
  'Diabetes' => 'fa-syringe',
  'Pulmonology' => 'fa-lungs',
  'Dermatology' => 'fa-hand-sparkles',
];

// Category image fallback map
$catImages = [
  'Ophthalmology' => '/images/ophthalmology.png',
  'Gynecology' => '/images/ultrasound.png',
  'Pregnancy Care' => '/images/ultrasound.png',
  'Pediatrics' => '/images/pediatric.png',
  'Orthopaedics' => '/images/orthopedics.png',
  'Orthopedics' => '/images/orthopedics.png',
  'Urology' => '/images/urology.png',
  'Emergency Care' => '/images/emergency.png',
  'Psychiatry' => '/images/psychiatry.png',
];
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="/assets/img/infrastructure/PATHOLOGY-LAB.jpg" alt="Sankalp Hospital Blog">
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-book-medical me-1"></i> Health Blog</span>
        <h1 class="text-white display-4 fw-bold">Our Health Blog</h1>
        <p class="lead text-white-50 mb-0">Stay informed with the latest health tips, medical insights, and wellness articles from our expert doctors.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="/index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- BLOG CARDS SECTION -->
<section class="py-5 bg-white">
  <div class="container">

    <?php if (empty($allBlogs)): ?>
    <div class="text-center py-5">
      <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
      <h4 class="text-muted">No blog posts found.</h4>
    </div>
    <?php else: ?>

    <div class="row g-4">
      <?php foreach ($allBlogs as $blog):
        $cat = isset($blog['category']) ? $blog['category'] : 'Health';
        $icon = isset($catIcons[$cat]) ? $catIcons[$cat] : 'fa-notes-medical';
        
        // Use blog image if available, otherwise fall back to category image, then default
        if (!empty($blog['image'])) {
          $img = $blog['image'];
        } elseif (isset($catImages[$cat])) {
          $img = $catImages[$cat];
        } else {
          $img = '/assets/img/infrastructure/PATHOLOGY-LAB.jpg';
        }
      ?>
      <div class="col-lg-4 col-md-6">
        <a href="/blog/<?php echo $blog['url']; ?>" class="text-decoration-none">
          <div class="blog-card h-100">
            <div class="blog-img-wrapper">
              <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" class="blog-img">
              <span class="blog-category"><i class="fas <?php echo $icon; ?> me-1"></i> <?php echo htmlspecialchars($cat); ?></span>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="far fa-calendar-alt me-1"></i> <?php echo htmlspecialchars($blog['date']); ?></span>
                <?php if (!empty($blog['readtime'])): ?>
                <span class="ms-3"><i class="far fa-clock me-1"></i> <?php echo htmlspecialchars($blog['readtime']); ?></span>
                <?php endif; ?>
              </div>
              <h5 class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></h5>
              <?php if (!empty($blog['desc'])): ?>
              <p class="blog-excerpt"><?php echo htmlspecialchars(strlen($blog['desc']) > 150 ? substr($blog['desc'], 0, 147) . '...' : $blog['desc']); ?></p>
              <?php endif; ?>
              <span class="blog-read-more">Read More <i class="fas fa-arrow-right ms-1"></i></span>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
