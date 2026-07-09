<?php
$pageTitle = "Image Gallery | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Explore the world-class infrastructure, modern operation theatres, patient wards, and advanced medical facilities at Sankalp Hospital, Ambikapur.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="assets/img/hospital-front.jpg" alt="Sankalp Hospital Gallery">
  </div>
  <div class="subpage-hero-overlay"></div>

  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-images me-1"></i> Our Facility</span>
        <h1 class="text-white display-4 fw-bold">Image Gallery</h1>
        <p class="lead text-white-50 mb-0">Take a visual tour of Sankalp Hospital's world-class infrastructure, advanced medical equipment, and patient-friendly environment.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-hospital me-1"></i> Hospital Infrastructure</span>
      <h2 class="fw-bold text-dark">Our World-Class Facilities</h2>
      <p class="text-muted mx-auto" style="max-width: 600px;">Sankalp Hospital is equipped with state-of-the-art medical technology and patient-centric infrastructure designed for optimal care and comfort.</p>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4">
      <!-- Card 1: Hospital Front View -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/hospital-front.jpg" alt="Sankalp Hospital Front View" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/hospital-front.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Hospital Front View</h5>
            <p>Our modern multi-story hospital building with advanced medical facilities.</p>
          </div>
        </div>
      </div>

      <!-- Card 2: ICU -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/ICU.jpg" alt="Intensive Care Unit" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/ICU.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Intensive Care Unit (ICU)</h5>
            <p>24/7 critical care with advanced monitoring and life support systems.</p>
          </div>
        </div>
      </div>

      <!-- Card 3: Operation Theatre -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/GYNAE-OT.jpg" alt="Modular Operation Theatre" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/GYNAE-OT.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Modular Operation Theatre</h5>
            <p>Equipped with modern anesthesia systems and laminar air flow technology.</p>
          </div>
        </div>
      </div>

      <!-- Card 4: Pathology Lab -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/PATHOLOGY-LAB.jpg" alt="Pathology Laboratory" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/PATHOLOGY-LAB.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Pathology Laboratory</h5>
            <p>Fully automated analyzers for rapid and precise diagnostic results.</p>
          </div>
        </div>
      </div>

      <!-- Card 5: OPD Chamber -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/OPD-CHAMBER-2.jpg" alt="OPD Consultation Room" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/OPD-CHAMBER-2.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>OPD Consultation Room</h5>
            <p>Private counseling chambers for in-depth clinical discussions.</p>
          </div>
        </div>
      </div>

      <!-- Card 6: NICU -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/NICU.jpg" alt="Neonatal Intensive Care Unit" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/NICU.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>NICU (Neonatal Care)</h5>
            <p>Specialized care for newborns requiring intensive medical attention.</p>
          </div>
        </div>
      </div>

      <!-- Card 7: Eye OT -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/EYE-OT.jpg" alt="Ophthalmology Operation Theatre" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/EYE-OT.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Eye Operation Theatre</h5>
            <p>Advanced eye care facility with modern cataract and LASIK equipment.</p>
          </div>
        </div>
      </div>

      <!-- Card 8: General Ward -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/GENERAL-WARD.jpg" alt="General Ward" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/GENERAL-WARD.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>General Ward</h5>
            <p>Comfortable and clean ward settings for patient recovery.</p>
          </div>
        </div>
      </div>

      <!-- Card 9: Laparoscopic Surgery -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/LAPAROSCOPIC-SURGERY.jpg" alt="Laparoscopic Surgery Suite" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/LAPAROSCOPIC-SURGERY.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Laparoscopic Surgery Suite</h5>
            <p>Minimally invasive surgery with advanced laparoscopic equipment.</p>
          </div>
        </div>
      </div>

      <!-- Card 10: Ortho OT -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/ORTHO-OT.jpg" alt="Orthopaedics Operation Theatre" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/ORTHO-OT.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Orthopaedics OT</h5>
            <p>Specialized unit for joint replacement, sports trauma, and spinal surgeries.</p>
          </div>
        </div>
      </div>

      <!-- Card 11: TPA Desk -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/TPA-DESK.jpg" alt="TPA Help Desk" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/TPA-DESK.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>TPA Help Desk</h5>
            <p>Insurance and TPA assistance for cashless treatment.</p>
          </div>
        </div>
      </div>

      <!-- Card 12: Hospital Interior -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/infrastructure/sankalp-photo-010.jpg" alt="Hospital Interior" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/infrastructure/sankalp-photo-010.jpg" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Hospital Interior</h5>
            <p>Complete multi-specialty healthcare facility serving the Surguja region.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Gallery Section -->
    <div class="text-center mt-5 mb-4">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-images me-1"></i> Hospital Wings</span>
      <h3 class="fw-bold text-dark">Our Medical Wings</h3>
    </div>

    <div class="row g-4">
      <!-- Wing 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-1.jpg" alt="Medical Wing 1" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-1.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 1</h5>
            <p>Advanced medical departments and treatment facilities.</p>
          </div>
        </div>
      </div>

      <!-- Wing 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-2.jpg" alt="Medical Wing 2" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-2.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 2</h5>
            <p>Specialized treatment and diagnostic centers.</p>
          </div>
        </div>
      </div>

      <!-- Wing 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-3.jpg" alt="Medical Wing 3" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-3.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 3</h5>
            <p>Patient care and recovery facilities.</p>
          </div>
        </div>
      </div>

      <!-- Wing 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-4.jpg" alt="Medical Wing 4" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-4.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 4</h5>
            <p>Emergency and critical care departments.</p>
          </div>
        </div>
      </div>

      <!-- Wing 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-5.jpg" alt="Medical Wing 5" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-5.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 5</h5>
            <p>Surgical and operation theatre complex.</p>
          </div>
        </div>
      </div>

      <!-- Wing 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-6.jpg" alt="Medical Wing 6" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-6.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 6</h5>
            <p>Diagnostic and imaging center.</p>
          </div>
        </div>
      </div>

      <!-- Wing 7 -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="assets/img/wings/wing-7.jpg" alt="Medical Wing 7" class="gallery-img">
            <div class="gallery-overlay">
              <a href="assets/img/wings/wing-7.jpg" class="gallery-lightbox" data-gallery="wings"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Medical Wing 7</h5>
            <p>Outpatient and consultation departments.</p>
          </div>
        </div>
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
        <img src="" id="lightboxImg" class="img-fluid rounded" alt="Gallery Image">
      </div>
      <div class="modal-footer border-0 justify-content-center">
        <button class="btn btn-light btn-sm rounded-pill me-2" id="prevBtn"><i class="fas fa-arrow-left me-1"></i> Prev</button>
        <button class="btn btn-light btn-sm rounded-pill" id="nextBtn">Next <i class="fas fa-arrow-right ms-1"></i></button>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- Gallery Lightbox Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const lightboxes = document.querySelectorAll('.gallery-lightbox');
  const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
  const modalImg = document.getElementById('lightboxImg');
  let currentIndex = 0;
  const images = [];

  lightboxes.forEach(function(link, index) {
    images.push({
      src: link.getAttribute('href'),
      alt: link.closest('.gallery-card').querySelector('.gallery-img').alt
    });

    link.addEventListener('click', function(e) {
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

  document.getElementById('prevBtn').addEventListener('click', function() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showModalImage();
  });

  document.getElementById('nextBtn').addEventListener('click', function() {
    currentIndex = (currentIndex + 1) % images.length;
    showModalImage();
  });
});
</script>
