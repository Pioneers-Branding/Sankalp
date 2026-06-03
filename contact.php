<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us | Sankalp Hospital Ambikapur, Chhattisgarh</title>
  <meta name="description" content="Get in touch with Sankalp Hospital, the best multi-specialty hospital in Ambikapur, Chhattisgarh. Contact details, location map, and online appointment booking.">
  <?php include 'includes/header-code.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero-premium contact-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12 text-center">
        <h1 class="display-4 fw-bold text-white mb-3">Contact <span class="text-accent-glow">Us</span></h1>
        <p class="lead text-white opacity-90 mb-0">We are here to help you 24/7. Reach out to us for any medical queries or appointments.</p>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT INFO & FORM -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="contact-sidebar">
          <h2 class="fw-bold mb-4">Get in Touch</h2>
          
          <div class="contact-item-card mb-4">
            <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
            <div class="content">
              <h5>Our Location</h5>
              <p>Manipur, Ambikapur, Chhattisgarh 497001</p>
            </div>
          </div>

          <div class="contact-item-card mb-4">
            <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
            <div class="content">
              <h5>Phone Numbers</h5>
              <p>Reception: <a href="tel:+919584889068">+91 9584 889068</a><br>Emergency: <a href="tel:+917774223344">+91 7774 223344</a></p>
            </div>
          </div>

          <div class="contact-item-card mb-4">
            <div class="icon-box"><i class="fas fa-envelope"></i></div>
            <div class="content">
              <h5>Email Address</h5>
              <p><a href="mailto:info@sankalphospital.org">info@sankalphospital.org</a></p>
            </div>
          </div>

          <div class="contact-item-card">
            <div class="icon-box"><i class="fas fa-clock"></i></div>
            <div class="content">
              <h5>Working Hours</h5>
              <p>OPD: 10:00 AM - 08:00 PM<br>Emergency: 24/7 Available</p>
            </div>
          </div>

          <div class="social-connect mt-5">
            <h5 class="mb-3">Follow Us</h5>
            <div class="d-flex gap-3">
              <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="form-wrapper bg-white p-4 p-md-5 rounded-4 shadow-lg">
          <h2 class="fw-bold mb-4">Send Us a Message</h2>
          <p class="text-muted mb-4">Have a question or want to book an appointment? Fill out the form below and our team will get back to you shortly.</p>
          <form accept-charset='UTF-8' action='https://app.formester.com/forms/UvGLKUCJe/submissions' method='POST' class="row g-3">
            <div class="col-md-6">
              <label class="form-label fw-bold">Full Name</label>
              <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold">Phone Number</label>
              <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Enter your mobile number" required>
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold">Email Address</label>
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email">
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold">Subject</label>
              <select name="subject" class="form-select form-select-lg">
                <option value="General Inquiry">General Inquiry</option>
                <option value="Appointment">Appointment Booking</option>
                <option value="Feedback">Feedback</option>
                <option value="Emergency">Emergency Query</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label fw-bold">Message</label>
              <textarea name="message" class="form-control form-control-lg" rows="4" placeholder="How can we help you?"></textarea>
            </div>
            <!-- Math CAPTCHA -->
            <div class="col-12">
              <label class="form-label fw-bold">Security Check <span class="text-danger">*</span></label>
              <div class="d-flex align-items-center gap-3 flex-wrap">
                <div class="captcha-box d-flex align-items-center justify-content-between gap-2 px-3 py-2 rounded-3 border" style="background:linear-gradient(135deg,rgba(13,110,253,.07),rgba(25,135,84,.07));border-color:rgba(13,110,253,.25)!important;min-width:220px;">
                  <span id="captcha-question" class="fw-bold fs-5 text-dark" style="letter-spacing:.05em;user-select:none;"></span>
                  <button type="button" id="captcha-refresh-btn" onclick="generateCaptcha()" title="Get a new question" class="btn btn-sm btn-outline-primary p-1" style="line-height:1;" aria-label="Refresh CAPTCHA">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </button>
                </div>
                <span class="fw-bold fs-4 text-muted">=</span>
                <input type="number" id="captcha_answer" name="captcha_answer" required autocomplete="off"
                  class="form-control form-control-lg text-center fw-bold"
                  style="width:100px;" placeholder="?">
              </div>
              <div id="captcha-error" class="text-danger small mt-2 d-none">
                <i class="fas fa-exclamation-triangle me-1"></i>Incorrect answer. Please try again.
              </div>
            </div>

            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-primary btn-lg px-5 shadow">Send Message Now</button>
            </div>
          </form>

          <script>
            var _captchaAnswer = 0;

            function generateCaptcha() {
              var ops = ['+', '-', '×'];
              var op = ops[Math.floor(Math.random() * ops.length)];
              var a, b, answer;

              if (op === '+') {
                a = Math.floor(Math.random() * 20) + 1;
                b = Math.floor(Math.random() * 20) + 1;
                answer = a + b;
              } else if (op === '-') {
                a = Math.floor(Math.random() * 20) + 10;
                b = Math.floor(Math.random() * 10) + 1;
                answer = a - b;
              } else {
                a = Math.floor(Math.random() * 9) + 2;
                b = Math.floor(Math.random() * 9) + 2;
                answer = a * b;
              }

              _captchaAnswer = answer;
              document.getElementById('captcha-question').textContent = 'What is ' + a + ' ' + op + ' ' + b + ' ?';
              document.getElementById('captcha_answer').value = '';
              document.getElementById('captcha-error').classList.add('d-none');
            }

            generateCaptcha();

            document.querySelector('form[action*="formester"]').addEventListener('submit', function(e) {
              var userAnswer = parseInt(document.getElementById('captcha_answer').value, 10);
              var errEl = document.getElementById('captcha-error');
              if (isNaN(userAnswer) || userAnswer !== _captchaAnswer) {
                e.preventDefault();
                errEl.classList.remove('d-none');
                generateCaptcha();
                document.getElementById('captcha_answer').focus();
              } else {
                errEl.classList.add('d-none');
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP SECTION -->
<section class="py-0">
  <div class="container-fluid p-0">
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.45678!2d83.18!3d23.12!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDA3JzEyLjAiTiA4M8KwMTAnNDguMCJF!5e0!3m2!1sen!2sin!4v1652180000000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<style>
.contact-hero { background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1516549655169-df83a0774514?w=1600&h=600&fit=crop') center/cover; padding: 100px 0; }
.contact-item-card { display: flex; gap: 20px; align-items: flex-start; }
.contact-item-card .icon-box { min-width: 50px; height: 50px; background: rgba(var(--bs-primary-rgb), 0.1); color: var(--bs-primary); display: flex; align-items: center; justify-content: center; border-radius: 12px; font-size: 1.2rem; }
.contact-item-card h5 { font-weight: 700; margin-bottom: 5px; font-size: 1.1rem; }
.contact-item-card p, .contact-item-card a { color: var(--bs-secondary); text-decoration: none; margin: 0; }
.social-btn { width: 40px; height: 40px; background: #f8f9fa; color: var(--bs-primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: 0.3s; text-decoration: none; }
.social-btn:hover { background: var(--bs-primary); color: white; transform: translateY(-3px); }
.form-wrapper { border-top: 5px solid var(--bs-primary); }
</style>

<?php include 'includes/footer.php'; ?>
</body>
</html>
