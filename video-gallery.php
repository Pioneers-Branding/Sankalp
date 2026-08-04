<?php
$pageTitle = "Video Gallery | Sankalp Hospital - Hospital Tour & Patient Stories";
$pageDesc = "Watch videos of Sankalp Hospital - virtual tours, patient testimonials, doctor interviews, and health tips.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
require_once __DIR__ . '/includes/videos-data.php';

// Featured channel details
$channel_id = 'UCWGjgpakHsg7z4qMbXBSK_w';

// Full local catalog (no RSS dependency — reliable & complete)
$allVids = sankalp_all_videos();
$totalVids = count($allVids);

// Topic filters (key => label). Only show a filter if the catalog has matches.
$gvCats = [
  'gynecology'   => 'Gynecology',
  'pregnancy'    => 'Pregnancy &amp; Delivery',
  'ivf'          => 'IVF &amp; Fertility',
  'orthopedics'  => 'Orthopedics',
  'ophthalmology'=> 'Eye Care',
  'pediatrics'   => 'Child Care',
  'neurosurgery' => 'Neuro &amp; Brain',
  'emergency'    => 'Emergency &amp; ICU',
  'laparoscopy'  => 'Laparoscopy',
  'diabetes'     => 'Diabetes',
  'dialysis'     => 'Dialysis',
  'japa'         => 'Japa Sakhi',
  'testimonial'  => 'Patient Stories',
];
// keep only filters that have at least one video
$tagCounts = [];
foreach ($allVids as $v) foreach ($v['tags'] as $t) $tagCounts[$t] = ($tagCounts[$t] ?? 0) + 1;
$gvCats = array_filter($gvCats, function($k) use ($tagCounts){ return !empty($tagCounts[$k]); }, ARRAY_FILTER_USE_KEY);
?>

<style>
.video-responsive {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
.video-responsive iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
/* Filter pills */
.gv-filter-btn{
  border:1.5px solid #e2e8f0;background:#fff;color:#334155;
  font-size:0.82rem;font-weight:700;padding:9px 18px;border-radius:50px;
  cursor:pointer;transition:all .25s ease;white-space:nowrap;
}
.gv-filter-btn:hover{border-color:#e11d48;color:#e11d48;}
.gv-filter-btn.active{background:#e11d48;border-color:#e11d48;color:#fff;box-shadow:0 8px 20px rgba(225,29,72,0.28);}
.gv-item{min-width:0;}
.gv-item.gv-hide{display:none;}
.gv-count{font-size:0.85rem;color:#64748b;font-weight:600;}
</style>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="assets/img/infrastructure/PATHOLOGY-LAB.jpg" alt="Sankalp Hospital Video Gallery">
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-video me-1"></i> Media Gallery</span>
        <h1 class="text-white display-4 fw-bold">Video Gallery</h1>
        <p class="lead text-white-50 mb-0">Watch hospital tours, patient testimonials, doctor interviews, and health tips from our experts.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-5 bg-white">
  <div class="container py-3">
    <!-- Featured Playlist -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10">
        <div class="text-center mb-4">
          <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fab fa-youtube me-1"></i> Featured Videos</span>
          <h2 class="fw-bold text-dark">Sankalp Hospital Playlist</h2>
          <p class="text-muted">Browse our video series for virtual tours, services overviews, and healthcare seminars.</p>
        </div>
        <div class="video-responsive">
          <iframe
            src="https://www.youtube.com/embed/videoseries?list=UUWGjgpakHsg7z4qMbXBSK_w&playsinline=1"
            title="Sankalp Hospital Videos"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>

    <!-- Full Video Library (filterable, from local catalog) -->
    <div class="text-center mb-4">
      <h3 class="fw-bold text-dark">Explore Our Full Video Library</h3>
      <p class="text-muted mb-1">Browse <?php echo $totalVids; ?> health videos by topic — tips, treatment explainers and real patient stories.</p>
      <span class="gv-count" id="gvCount"></span>
    </div>

    <!-- Filter pills -->
    <div class="gv-filters d-flex flex-wrap justify-content-center gap-2 mb-4">
      <button type="button" class="gv-filter-btn active" data-filter="all">All Videos</button>
      <?php foreach ($gvCats as $k => $label): ?>
      <button type="button" class="gv-filter-btn" data-filter="<?php echo $k; ?>"><?php echo $label; ?></button>
      <?php endforeach; ?>
      <button type="button" class="gv-filter-btn" data-filter="short">Shorts</button>
    </div>

    <?php echo sankalp_video_assets(); ?>
    <div class="sk-vid-grid gv-grid">
      <?php foreach ($allVids as $v):
        $tagAttr = implode(' ', $v['tags']) . ' ' . ($v['t'] === 's' ? 'short' : 'longform');
      ?>
      <div class="gv-item" data-tags="<?php echo htmlspecialchars($tagAttr, ENT_QUOTES); ?>">
        <?php echo sankalp_video_facade($v['id'], $v['title']); ?>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="<?php echo sankalp_channel_url(); ?>" target="_blank" rel="noopener" class="btn btn-danger py-3 px-5 rounded-pill border-0 shadow">
        <i class="fab fa-youtube me-2"></i> Subscribe on YouTube
      </a>
    </div>
  </div>
</section>

<script>
(function(){
  var buttons = document.querySelectorAll('.gv-filter-btn');
  var items = Array.prototype.slice.call(document.querySelectorAll('.gv-item'));
  var countEl = document.getElementById('gvCount');
  function apply(filter){
    var shown = 0;
    items.forEach(function(it){
      var tags = ' ' + (it.getAttribute('data-tags') || '') + ' ';
      var match = (filter === 'all') || tags.indexOf(' ' + filter + ' ') !== -1;
      it.classList.toggle('gv-hide', !match);
      if (match) shown++;
    });
    if (countEl) countEl.textContent = 'Showing ' + shown + ' video' + (shown === 1 ? '' : 's');
  }
  buttons.forEach(function(btn){
    btn.addEventListener('click', function(){
      buttons.forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      apply(btn.getAttribute('data-filter'));
    });
  });
  apply('all');
})();
</script>

<!-- YouTube platform script (subscribe widgets) -->
<script src="https://apis.google.com/js/platform.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>
