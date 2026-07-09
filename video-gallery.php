<?php
$pageTitle = "Video Gallery | Sankalp Hospital - Hospital Tour & Patient Stories";
$pageDesc = "Watch videos of Sankalp Hospital - virtual tours, patient testimonials, doctor interviews, and health tips.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';

// Featured channel details
$channel_id = 'UCWGjgpakHsg7z4qMbXBSK_w';
$rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$channel_id";
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
.yt-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid rgba(0,0,0,0.05);
}
.yt-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important;
}
.yt-thumb-wrapper {
  position: relative;
  padding-bottom: 56.25%;
  overflow: hidden;
}
.yt-thumb-wrapper img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.yt-play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(225, 29, 72, 0.9);
  color: #fff;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.25rem;
  box-shadow: 0 5px 15px rgba(225, 29, 72, 0.4);
  transition: background 0.2s, transform 0.2s;
}
.yt-card:hover .yt-play-btn {
  background: rgba(225, 29, 72, 1);
  transform: translate(-50%, -50%) scale(1.1);
}
</style>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="images/hero5.png" alt="Sankalp Hospital Video Gallery">
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

    <!-- YouTube Feed -->
    <div class="row g-4 mt-2">
      <div class="col-12 text-center mb-4">
        <h3 class="fw-bold text-dark">Latest Videos from Our Channel</h3>
        <p class="text-muted">Stay updated with fresh health content and clinical tips.</p>
      </div>

      <?php
      // Fetch and parse RSS feed for individual video cards
      $xml = @simplexml_load_file($rss_url);

      if ($xml && isset($xml->entry)) {
          $count = 0;
          foreach ($xml->entry as $entry) {
              if ($count >= 9) break;

              $video_id = '';
              foreach ($entry->link as $link) {
                  if ($link['rel'] == 'alternate') {
                      parse_str(parse_url($link['href'], PHP_URL_QUERY), $url_params);
                      $video_id = $url_params['v'] ?? '';
                      break;
                  }
              }

              if (!$video_id) {
                  $video_id = str_replace('yt:video:', '', (string)$entry->id);
              }

              $title = (string)$entry->title;
              $published = date('M d, Y', strtotime((string)$entry->published));
              $thumbnail = "https://img.youtube.com/vi/$video_id/maxresdefault.jpg";
              ?>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100 yt-card rounded-4 bg-white overflow-hidden shadow-sm border-0">
                  <div class="yt-thumb-wrapper">
                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo htmlspecialchars($title); ?>">
                    <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" target="_blank" class="yt-play-btn" aria-label="Play Video">
                      <i class="fas fa-play"></i>
                    </a>
                  </div>
                  <div class="card-body p-4">
                    <span class="text-primary small fw-bold mb-2 d-inline-block"><i class="far fa-calendar-alt me-1"></i> <?php echo $published; ?></span>
                    <h5 class="fw-bold text-dark lh-base" style="font-size: 1.05rem;"><?php echo htmlspecialchars($title); ?></h5>
                  </div>
                </div>
              </div>
              <?php
              $count++;
          }
      } else {
          // Fallback if RSS fails
          ?>
          <div class="col-12 text-center py-5">
            <i class="fab fa-youtube fs-1 text-danger mb-3"></i>
            <h5 class="fw-bold">Visit Our YouTube Channel</h5>
            <p class="text-muted">Could not load feed. You can explore all our videos directly on YouTube.</p>
            <a href="https://www.youtube.com/channel/UCWGjgpakHsg7z4qMbXBSK_w" target="_blank" class="btn btn-danger py-3 px-5 rounded-pill border-0 shadow"><i class="fab fa-youtube me-2"></i> Subscribe Now</a>
          </div>
          <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- YouTube Subscribe script -->
<script src="https://apis.google.com/js/platform.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>