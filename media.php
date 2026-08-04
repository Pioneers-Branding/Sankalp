<!DOCTYPE html>
<html lang="en">
<head>
  <title>Media | Sankalp Hospital - Press & News Coverage</title>
  <meta name="description" content="Media coverage, press releases, and news articles about Sankalp Hospital and its healthcare services in Ambikapur.">
  <?php include 'includes/header-code.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; require_once __DIR__ . '/includes/videos-data.php'; ?>
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <p class="breadcrumbs"><a href="/index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Media</p>
    <h1>Media &amp; Press</h1>
    <p>News coverage, press releases, and media mentions about Sankalp Hospital</p>
  </div>
</section>

<!-- NEWS ARTICLES -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">In The News</h2>
      <span class="section-divider"></span>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-baby"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-newspaper"></i> Local Daily</span>
            <h4>First Test Tube Baby in Surguja District Born at Sankalp Hospital</h4>
            <p>Sankalp Hospital celebrates the birth of the first IVF baby in the entire Surguja district, bringing joy to parents who had been trying for years.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> December 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-ambulance"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-tv"></i> News Channel</span>
            <h4>24/7 Emergency Services: A Boon for Rural Chhattisgarh</h4>
            <p>Report on how Sankalp Hospital's round-the-clock emergency and trauma services are saving lives in remote areas of Chhattisgarh.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> November 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-eye"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-newspaper"></i> Health Magazine</span>
            <h4>Advanced Cataract Surgery Facilities Now Available in Ambikapur</h4>
            <p>Feature on Sankalp Hospital's advanced ophthalmology department offering state-of-the-art cataract surgeries with premium IOL implants.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> October 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-heartbeat"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-tv"></i> Regional News</span>
            <h4>Sankalp Hospital Expands with New Super-Specialty Wings</h4>
            <p>Coverage of the hospital's expansion including new operation theaters, ICU facilities, and advanced diagnostic equipment.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> September 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-users"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-newspaper"></i> Health Journal</span>
            <h4>Free Health Camp Serves Over 500 Patients in Rural Area</h4>
            <p>Sankalp Hospital's initiative to provide free health checkups and consultations in remote villages of Surguja district.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> August 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media-card">
          <div class="media-img"><i class="fas fa-award"></i></div>
          <div class="media-body">
            <span class="media-source"><i class="fas fa-trophy"></i> Award</span>
            <h4>Healthcare Excellence Award for Best Hospital in Ambikapur</h4>
            <p>Sankalp Hospital receives recognition for outstanding healthcare services and patient care in Chhattisgarh.</p>
            <p class="media-date"><i class="far fa-calendar me-1"></i> July 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VIDEO COVERAGE STRIP (central catalog: includes/videos-data.php) -->
<?php $featVids = sankalp_featured_videos(6); if (!empty($featVids)): ?>
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fab fa-youtube me-1"></i> Video Coverage</span>
      <h2 class="section-title">Watch Sankalp Hospital in Action</h2>
      <span class="section-divider"></span>
      <p class="text-muted mt-3">Doctor interviews, treatment explainers and patient success stories from our YouTube channel.</p>
    </div>
    <?php echo sankalp_video_assets(); ?>
    <div class="sk-vid-grid">
      <?php foreach ($featVids as $v) echo sankalp_video_facade($v['id'], $v['title']); ?>
    </div>
    <div class="text-center mt-5">
      <a href="/video-gallery" class="btn btn-primary px-4 py-3 rounded-pill me-2"><i class="fas fa-photo-video me-2"></i> Full Video Gallery</a>
      <a href="<?php echo sankalp_channel_url(); ?>" target="_blank" rel="noopener" class="btn btn-danger px-4 py-3 rounded-pill border-0"><i class="fab fa-youtube me-2"></i> Subscribe</a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- PRESS RELEASES -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Press Releases</h2>
      <span class="section-divider"></span>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="press-release">
          <h4>Sankalp Hospital Launches Advanced IVF Center</h4>
          <p>Sankalp Hospital announces the launch of a state-of-the-art IVF and fertility center, bringing hope to couples struggling with infertility. The center offers comprehensive services including IVF, ICSI, and IUI treatments with high success rates.</p>
          <p class="media-date">Download: <a href="#" class="text-primary">PDF Press Release</a></p>
        </div>
        <div class="press-release">
          <h4>New Hospital Wing Inaugurated by District Collector</h4>
          <p>A new super-specialty wing was inaugurated by the District Collector of Surguja. The expansion includes advanced operation theaters, a dedicated ICU, and new diagnostic facilities to serve the growing healthcare needs of the region.</p>
          <p class="media-date">Download: <a href="#" class="text-primary">PDF Press Release</a></p>
        </div>
        <div class="press-release">
          <h4>Sankalp Hospital Partners with Major Insurance Companies</h4>
          <p>In an effort to make quality healthcare more accessible, Sankalp Hospital has partnered with leading insurance companies and TPAs to offer cashless treatment facilities for patients.</p>
          <p class="media-date">Download: <a href="#" class="text-primary">PDF Press Release</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MEDIA CONTACT -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2 class="mb-4">Media Contact</h2>
        <p class="mb-4">For media inquiries, press releases, or interview requests, please contact our communications team.</p>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="fas fa-envelope text-primary me-3"></i> media.sankalpslms@gmail.com</li>
          <li class="mb-3"><i class="fas fa-phone-alt text-primary me-3"></i> +91 9584 889068</li>
          <li class="mb-3"><i class="fas fa-map-marker-alt text-primary me-3"></i> Sankalp Hospital, Near Distt. Hospital, Manipur, Ambikapur, CG 497001</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="bg-light rounded-3 p-4 text-center">
          <i class="fas fa-camera text-primary" style="font-size:48px;margin-bottom:16px"></i>
          <h4>Press &amp; Media Kit</h4>
          <p class="text-muted mb-4">Download our official press kit including hospital overview, high-resolution images, and executive profiles.</p>
          <a href="#" class="btn btn-primary"><i class="fas fa-download me-2"></i>Download Press Kit</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>