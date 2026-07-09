<?php
$pageTitle = "Contact Us | Sankalp Hospital Ambikapur, Chhattisgarh";
$pageDesc = "Get in touch with Sankalp Hospital, the best multi-specialty hospital in Ambikapur, Chhattisgarh. Contact details, location map, and online appointment booking.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="images/hero4.png" alt="Sankalp Hospital Contact">
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-headset me-1"></i> Patient Support</span>
        <h1 class="text-white display-4 fw-bold">Contact Us</h1>
        <p class="lead text-white-50 mb-0">We are here to help you 24/7. Reach out to us for any medical queries, slot bookings, or emergency services.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5 bg-light">
  <div class="container py-3">
    <div class="row g-5">
      <!-- Left side: Contact Info Cards -->
      <div class="col-lg-4">
        <div class="d-flex flex-column gap-4">
          <div class="bg-white p-4 rounded-4 shadow-sm border border-light">
            <h4 class="fw-bold mb-4 text-dark" style="font-size: 1.25rem;">Hospital Contact Details</h4>

            <!-- Location -->
            <div class="d-flex gap-3 mb-4">
              <div class="flex-shrink-0 bg-primary-soft text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Our Location</h6>
                <p class="text-muted mb-0 small">Manipur, Ambikapur, Chhattisgarh 497001</p>
              </div>
            </div>

            <!-- Phones -->
            <div class="d-flex gap-3 mb-4">
              <div class="flex-shrink-0 bg-primary-soft text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Phone Numbers</h6>
                <p class="text-muted mb-0 small">
                  Reception: <a href="tel:+919584889068" class="text-decoration-none text-muted fw-bold">+91 9584 889068</a><br>
                  Emergency: <a href="tel:+917774223344" class="text-decoration-none text-danger fw-bold">+91 7774 223344</a>
                </p>
              </div>
            </div>

            <!-- Email -->
            <div class="d-flex gap-3 mb-4">
              <div class="flex-shrink-0 bg-primary-soft text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Email Address</h6>
                <p class="text-muted mb-0 small">
                  <a href="mailto:info@sankalphospital.org" class="text-decoration-none text-muted">info@sankalphospital.org</a>
                </p>
              </div>
            </div>

            <!-- Timings -->
            <div class="d-flex gap-3">
              <div class="flex-shrink-0 bg-primary-soft text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <i class="fas fa-clock"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">OPD Timings</h6>
                <p class="text-muted mb-0 small">Mon - Sat: 10:00 AM - 08:00 PM<br>Emergency: 24/7 Available</p>
              </div>
            </div>
          </div>

          <!-- Social Media Card -->
          <div class="bg-white p-4 rounded-4 shadow-sm border border-light text-center">
            <h6 class="fw-bold mb-3 text-dark">Connect With Us</h6>
            <div class="d-flex justify-content-center gap-3">
              <a href="https://www.facebook.com/sankalphospitals/" target="_blank" class="btn btn-outline-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/sankalphospitals/" target="_blank" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCWGjgpakHsg7z4qMbXBSK_w" target="_blank" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side: Contact Form & Map -->
      <div class="col-lg-8">
        <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light mb-4">
          <h3 class="fw-bold text-dark mb-3">Send Us a Message</h3>
          <p class="text-muted mb-4 small">Have a query or need assistance? Fill out this quick form, and our healthcare coordinator will respond shortly.</p>
          
          <form accept-charset='UTF-8' action='https://app.formester.com/forms/UvGLKUCJe/submissions' method='POST' class="row g-3">
            <div class="col-md-6">
              <label class="form-label fw-bold small text-dark">Full Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold small text-dark">Phone Number</label>
              <input type="tel" name="phone" class="form-control" placeholder="Mobile number" required>
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold small text-dark">Email Address (Optional)</label>
              <input type="email" name="email" class="form-control" placeholder="example@email.com">
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold small text-dark">Subject</label>
              <select name="subject" class="form-select">
                <option value="General Inquiry">General Inquiry</option>
                <option value="Appointment Booking">Appointment Booking</option>
                <option value="Healthcare Packages">Healthcare Packages</option>
                <option value="Feedback / Suggestion">Feedback / Suggestion</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold small text-dark">Message</label>
              <textarea name="message" class="form-control" rows="4" placeholder="How can we assist you?" required></textarea>
            </div>
            <div class="col-md-12 mt-4">
              <button type="submit" class="btn btn-primary py-3 px-5 rounded-pill fw-bold border-0 shadow"><i class="fas fa-paper-plane me-2"></i> Send Message</button>
            </div>
          </form>
        </div>

        <!-- Google Map -->
        <div class="bg-white p-2 rounded-4 shadow-sm border border-light overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.4385172288075!2d83.18957811497918!3d23.62441998465191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398863f69aa24e8d%3A0xe54ef130ab7be352!2sSankalp%20Hospital%20Ambikapur!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin" 
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="rounded-3">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
