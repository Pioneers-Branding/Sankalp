<?php
// blog/sidebar.php — Attractive sidebar with recent posts & contact box
include_once __DIR__ . '/blog-functions.php';
$recentBlogs = array_slice(get_all_blogs(__DIR__), 0, 5);

// Remove the current post from recent list
if (isset($blog_title)) {
    $recentBlogs = array_filter($recentBlogs, function($b) {
        global $blog_title;
        return $b['title'] !== $blog_title;
    });
    $recentBlogs = array_slice(array_values($recentBlogs), 0, 3);
}
?>

<aside class="blog-sidebar">

  <!-- RECENT POSTS -->
  <div class="sidebar-widget sidebar-recent">
    <div class="sidebar-widget-header">
      <i class="fas fa-fire"></i>
      <h4>Recent Articles</h4>
    </div>
    <?php foreach ($recentBlogs as $i => $rp): ?>
    <a href="/blog/<?php echo $rp['url']; ?>" class="recent-post-card">
      <div class="recent-post-number"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
      <div class="recent-post-info">
        <span class="recent-post-cat"><?php echo htmlspecialchars($rp['category'] ?? 'Health'); ?></span>
        <h5><?php echo htmlspecialchars($rp['title']); ?></h5>
        <span class="recent-post-date"><i class="far fa-calendar-alt me-1"></i><?php echo htmlspecialchars($rp['date']); ?></span>
      </div>
    </a>
    <?php endforeach; ?>
  </div>

  <!-- CONTACT BOX -->
  <div class="sidebar-widget sidebar-contact">
    <div class="sidebar-contact-glow"></div>
    <div class="sidebar-contact-inner">
      <div class="sidebar-contact-icon">
        <i class="fas fa-headset"></i>
      </div>
      <h4>Need Expert<br>Medical Advice?</h4>
      <p>Our team of 15+ specialist doctors is ready to help you with personalized care &amp; treatment plans.</p>
      <div class="sidebar-contact-stats">
        <div class="sidebar-stat">
          <strong>15+</strong>
          <span>Specialists</span>
        </div>
        <div class="sidebar-stat">
          <strong>24/7</strong>
          <span>Emergency</span>
        </div>
      </div>
      <a href="tel:+919584889068" class="sidebar-contact-phone">
        <i class="fas fa-phone-alt"></i>
        <span>+91 9584 889068</span>
      </a>
      <a href="/#appointment" class="sidebar-contact-btn">
        <i class="far fa-calendar-check me-2"></i>Book Free Consultation
      </a>
      <div class="sidebar-contact-trust">
        <i class="fas fa-shield-alt me-1"></i> NABH-like standards &bull; ISO Certified
      </div>
    </div>
  </div>

</aside>

<style>
/* =============================================
   BLOG SIDEBAR — Premium Design
   ============================================= */
.blog-sidebar {
  position: sticky;
  top: 100px;
}

/* --- Widget Base --- */
.sidebar-widget {
  border-radius: 16px;
  margin-bottom: 28px;
  overflow: hidden;
}

/* --- Recent Posts Widget --- */
.sidebar-recent {
  background: #fff;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.04);
  padding: 24px;
}
.sidebar-widget-header {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
  padding-bottom: 14px;
  border-bottom: 2px solid var(--primary);
}
.sidebar-widget-header i {
  font-size: 18px;
  color: var(--primary);
  background: rgba(var(--primary-rgb, 37,99,235), 0.1);
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
}
.sidebar-widget-header h4 {
  font-size: 1.1rem;
  font-weight: 700;
  margin: 0;
  color: var(--dark);
}

/* Recent Post Card */
.recent-post-card {
  display: flex;
  gap: 14px;
  padding: 14px 0;
  border-bottom: 1px solid #f0f0f0;
  text-decoration: none;
  transition: all 0.25s ease;
  align-items: flex-start;
}
.recent-post-card:last-child {
  border-bottom: none;
  padding-bottom: 0;
}
.recent-post-card:hover {
  transform: translateX(4px);
}
.recent-post-card:hover .recent-post-number {
  background: var(--primary);
  color: #fff;
  transform: scale(1.1);
}
.recent-post-card:hover h5 {
  color: var(--primary);
}
.recent-post-number {
  min-width: 38px;
  height: 38px;
  background: linear-gradient(135deg, #f0f4ff 0%, #e8eeff 100%);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: 14px;
  color: var(--primary);
  transition: all 0.3s ease;
  flex-shrink: 0;
  margin-top: 2px;
}
.recent-post-info {
  flex: 1;
  min-width: 0;
}
.recent-post-cat {
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: var(--primary);
  background: rgba(var(--primary-rgb, 37,99,235), 0.08);
  padding: 2px 8px;
  border-radius: 4px;
  margin-bottom: 4px;
}
.recent-post-info h5 {
  font-size: 14px;
  font-weight: 600;
  line-height: 1.4;
  margin: 4px 0 4px;
  color: var(--dark);
  transition: color 0.2s;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.recent-post-date {
  font-size: 12px;
  color: #999;
}

/* --- Contact Box Widget --- */
.sidebar-contact {
  position: relative;
  background: linear-gradient(145deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
  padding: 2px;
  border-radius: 20px;
}
.sidebar-contact-glow {
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  border-radius: 22px;
  background: linear-gradient(135deg, var(--primary), #8b5cf6, #ec4899, var(--primary));
  background-size: 300% 300%;
  animation: sidebarGlow 4s ease infinite;
  z-index: 0;
  opacity: 0.7;
  filter: blur(3px);
}
@keyframes sidebarGlow {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}
.sidebar-contact-inner {
  position: relative;
  z-index: 1;
  background: linear-gradient(145deg, #0f172a 0%, #1e293b 100%);
  border-radius: 18px;
  padding: 32px 24px;
  text-align: center;
}
.sidebar-contact-icon {
  width: 64px;
  height: 64px;
  background: linear-gradient(135deg, var(--primary), #8b5cf6);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 18px;
  font-size: 26px;
  color: #fff;
  box-shadow: 0 8px 25px rgba(var(--primary-rgb, 37,99,235), 0.35);
  animation: sidebarPulse 2.5s ease-in-out infinite;
}
@keyframes sidebarPulse {
  0%, 100% { box-shadow: 0 8px 25px rgba(var(--primary-rgb, 37,99,235), 0.35); }
  50% { box-shadow: 0 8px 35px rgba(var(--primary-rgb, 37,99,235), 0.55), 0 0 0 8px rgba(var(--primary-rgb, 37,99,235), 0.1); }
}
.sidebar-contact h4 {
  font-size: 1.3rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: 10px;
  line-height: 1.3;
}
.sidebar-contact p {
  font-size: 13.5px;
  color: rgba(255,255,255,0.6);
  line-height: 1.6;
  margin-bottom: 20px;
}
.sidebar-contact-stats {
  display: flex;
  justify-content: center;
  gap: 28px;
  margin-bottom: 20px;
  padding: 14px 0;
  border-top: 1px solid rgba(255,255,255,0.08);
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.sidebar-stat {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.sidebar-stat strong {
  font-size: 1.4rem;
  font-weight: 800;
  background: linear-gradient(135deg, #60a5fa, #a78bfa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.sidebar-stat span {
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.4);
  margin-top: 2px;
}
.sidebar-contact-phone {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 12px;
  border-radius: 12px;
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.1);
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  text-decoration: none;
  margin-bottom: 12px;
  transition: all 0.3s;
}
.sidebar-contact-phone i {
  color: #22c55e;
  font-size: 18px;
}
.sidebar-contact-phone:hover {
  background: rgba(34,197,94,0.15);
  border-color: rgba(34,197,94,0.3);
  color: #22c55e;
  transform: translateY(-2px);
}
.sidebar-contact-btn {
  display: block;
  padding: 14px 20px;
  border-radius: 12px;
  background: linear-gradient(135deg, var(--primary), #6366f1);
  color: #fff;
  font-weight: 700;
  font-size: 14px;
  text-decoration: none;
  text-align: center;
  transition: all 0.3s;
  box-shadow: 0 6px 20px rgba(var(--primary-rgb, 37,99,235), 0.3);
}
.sidebar-contact-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(var(--primary-rgb, 37,99,235), 0.45);
  color: #fff;
}
.sidebar-contact-trust {
  margin-top: 16px;
  font-size: 11px;
  color: rgba(255,255,255,0.35);
  letter-spacing: 0.3px;
}
.sidebar-contact-trust i {
  color: #22c55e;
}

/* Responsive */
@media (max-width: 991px) {
  .blog-sidebar {
    position: static;
    margin-top: 40px;
  }
}
</style>
