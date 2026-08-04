<?php
http_response_code(404);
$pageTitle = "404 Not Found | Sankalp Hospital";
$pageDesc = "The page you are looking for could not be found.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- 404 HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <div style="background-color: #0b2e59; width: 100%; height: 100%;"></div>
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center">
    <div class="row align-items-center justify-content-center g-4">
      <div class="col-lg-8 py-5 mt-5">
        <h1 class="text-white display-1 fw-bold">404</h1>
        <h2 class="text-white h3 mb-4">Page Not Found</h2>
        <p class="lead text-white-50 mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="/" class="btn btn-light btn-lg px-5 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="fas fa-home me-2"></i> Back to Homepage</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
