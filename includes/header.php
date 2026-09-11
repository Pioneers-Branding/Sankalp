<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include_once __DIR__ . '/analytics.php'; ?>
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Sankalp Hospital | Best Multi-Specialty Hospital In Ambikapur'; ?></title>
  <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Sankalp Hospital is a premier multi-specialist healthcare facility in Ambikapur. We provide advanced IVF treatments, Urology, Gynecology, 24/7 emergency care, and world-class medical infrastructure.'; ?>">
<?php if (isset($pageCanonical) && $pageCanonical): ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical); ?>">
<?php endif; ?>

  <!-- CSS CDNs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/style.css">
  <script type="text/javascript">
    (function () {
        window.usermaven = window.usermaven || (function () { (window.usermavenQ = window.usermavenQ || []).push(arguments); })
        var t = document.createElement('script'),
            s = document.getElementsByTagName('script')[0];
        t.defer = true;
        t.id = 'um-tracker';
        t.setAttribute('data-tracking-host', "https://events.usermaven.com")
        t.setAttribute('data-key', 'UM67IGZjVj');
        t.setAttribute('data-autocapture', 'true');
        t.setAttribute('data-form-tracking', 'all');
        t.src = 'https://t.usermaven.com/lib.js';
        s.parentNode.insertBefore(t, s);
    })();
  </script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1562886295079580');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1562886295079580&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

  
</head>
<body data-bs-spy="scroll" data-bs-target="#scroll-spy" data-bs-offset="90">
<div class="page-wrapper">
