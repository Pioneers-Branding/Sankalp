<?php
// Included from header-code.php, header.php and the doctor pages. Blog pages
// pull in more than one of those, so every call site must use include_once:
// a second copy of these tags would double-count every pageview.
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7TKRR2RJLC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7TKRR2RJLC');
</script>

<!-- Usermaven -->
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
