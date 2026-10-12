<?php
// Shared opening markup for policy pages. The page sets $pageTitle, $pageDesc,
// $pageCanonical, $legalHeading and $legalIntro before including this file,
// and includes legal-page-bottom.php at the end.
require_once __DIR__ . '/legal-config.php';
include __DIR__ . '/header.php';
include __DIR__ . '/navbar.php';
?>
<style>
  .legal-hero { background: linear-gradient(135deg, var(--primary, #0b5cad) 0%, var(--primary-dark, #083f78) 100%); color: #fff; padding: 150px 0 48px; }
  .legal-hero h1 { color: #fff; font-weight: 700; font-size: 2.2rem; margin-bottom: 10px; }
  .legal-hero p { color: rgba(255,255,255,.9); margin: 0; max-width: 760px; }
  .legal-body { max-width: 860px; margin: 0 auto; padding: 48px 16px 64px; color: #374151; font-size: 16px; line-height: 1.75; }
  .legal-body h2 { color: var(--primary, #0b5cad); font-size: 1.4rem; font-weight: 700; margin: 36px 0 12px; scroll-margin-top: 110px; }
  .legal-body h3 { color: #111827; font-size: 1.1rem; font-weight: 700; margin: 22px 0 8px; }
  .legal-body ul, .legal-body ol { padding-left: 22px; margin-bottom: 16px; }
  .legal-body li { margin-bottom: 6px; }
  .legal-body table { width: 100%; border-collapse: collapse; margin: 14px 0 20px; font-size: 14.5px; }
  .legal-body th, .legal-body td { border: 1px solid #e5e7eb; padding: 9px 11px; vertical-align: top; text-align: left; }
  .legal-body th { background: #f3f6fa; color: #111827; }
  .legal-table-wrap { overflow-x: auto; }
  .legal-meta { font-size: 14px; color: #6b7280; margin-bottom: 24px; }
  .legal-callout { background: #fff7ed; border-left: 4px solid #f59e0b; padding: 14px 18px; border-radius: 0 10px 10px 0; margin: 20px 0; }
  .legal-emergency { background: #fef2f2; border-left: 4px solid #b71c1c; padding: 14px 18px; border-radius: 0 10px 10px 0; margin: 20px 0; }
  .legal-tbc { background: #fde68a; color: #78350f; padding: 0 4px; border-radius: 3px; }
  @media (max-width: 768px) { .legal-hero { padding-top: 120px; } .legal-hero h1 { font-size: 1.6rem; } }
</style>

<section class="legal-hero">
  <div class="container">
    <p style="font-size:14px;margin-bottom:12px;"><a href="/" style="color:#fff;">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:10px"></i> <?php echo htmlspecialchars($legalHeading); ?></p>
    <h1><?php echo htmlspecialchars($legalHeading); ?></h1>
    <?php if (!empty($legalIntro)): ?><p><?php echo $legalIntro; ?></p><?php endif; ?>
  </div>
</section>

<div class="legal-body">
  <p class="legal-meta">Last updated: <?php echo legal('last_updated'); ?></p>
