<?php
$pageTitle = "Thank You | Sankalp Hospital";
$pageDesc = "Thank you for contacting Sankalp Hospital. Our care coordinator will reach out to you shortly.";

include __DIR__ . '/includes/header.php';
?>

<!-- THANK YOU SECTION -->
<section class="py-5 bg-light d-flex align-items-center" style="min-height: 80vh;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light text-center">
          <div class="flex-shrink-0 bg-primary-soft text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
            <i class="fas fa-check fs-1"></i>
          </div>
          
          <h1 class="fw-bold text-dark display-6 mb-3">Request Received!</h1>
          <p class="text-muted lead mb-4">Thank you for reaching out to Sankalp Hospital. Our care coordinator will review your details and contact you shortly to confirm your visit or assist with your query.</p>

          <hr class="my-4 text-muted opacity-25">

          <!-- Next Steps -->
          <h5 class="fw-bold text-dark mb-4 text-start"><i class="fas fa-list-ol text-primary me-2"></i> What happens next?</h5>
          <div class="row g-4 text-start mb-5">
            <div class="col-md-4">
              <div class="p-3 bg-light rounded-3 h-100">
                <h6 class="fw-bold text-dark mb-2">1. Confirmation Call</h6>
                <p class="text-muted small mb-0">Our team will call your registered contact number to confirm the consultation timing.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 bg-light rounded-3 h-100">
                <h6 class="fw-bold text-dark mb-2">2. Visit Preparation</h6>
                <p class="text-muted small mb-0">We will provide any pre-consultation guidelines, required tests, and location directions.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 bg-light rounded-3 h-100">
                <h6 class="fw-bold text-dark mb-2">3. Doctor Consultation</h6>
                <p class="text-muted small mb-0">Walk in at the scheduled time and receive world-class care from our medical experts.</p>
              </div>
            </div>
          </div>

          <!-- Actions -->
          <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/index.php" class="btn btn-primary px-4 py-3 rounded-pill fw-bold border-0 shadow"><i class="fas fa-home me-2"></i> Back to Home</a>
            <a href="/doctors.php" class="btn btn-outline-primary px-4 py-3 rounded-pill fw-bold"><i class="fas fa-user-md me-2"></i> Meet Our Experts</a>
            <a href="tel:+919584889068" class="btn btn-outline-primary px-4 py-3 rounded-pill fw-bold"><i class="fas fa-phone-alt me-2"></i> Call Reception</a>
          </div>

          <!-- Emergency note -->
          <div class="mt-5 p-3 rounded-3 border-start border-4 border-danger text-start bg-danger-soft">
            <h6 class="fw-bold text-danger mb-1"><i class="fas fa-exclamation-triangle me-2"></i> In Case of Medical Emergency</h6>
            <p class="text-muted small mb-0">If you are dealing with a critical or life-threatening situation, please do not wait. Call our 24/7 emergency unit directly at <a href="tel:+917774223344" class="text-danger fw-bold text-decoration-none">+91 7774 223344</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>