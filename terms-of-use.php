<?php
$pageTitle = "Terms of Use | Sankalp Hospital Ambikapur";
$pageDesc = "Terms that apply to using the Sankalp Hospital website, including appointment requests, health information and acceptable use.";
$pageCanonical = "https://www.sankalphospital.com/terms-of-use";
$legalHeading = "Terms of Use";
$legalIntro = "The terms that apply when you use the Sankalp Hospital website.";
include __DIR__ . '/includes/legal-page-top.php';
?>

  <p>By using sankalphospital.com (the “website”), operated by <?php echo legal('entity_name'); ?> as Sankalp Hospital, Ambikapur, you agree to these terms. If you do not agree, please do not use the website.</p>

  <h2 id="health-information">1. Health information is not medical advice</h2>
  <p>Content on the website is general information and may be AI-assisted. It is not a substitute for professional medical advice, diagnosis or treatment. Please read our <a href="/medical-disclaimer">Medical Disclaimer</a>. <strong>In an emergency, call <?php echo legal('emergency_phone'); ?>, 112 or 108. Do not use the website forms or chat.</strong></p>

  <h2 id="appointments">2. Appointment requests</h2>
  <ul>
    <li>Submitting a form is a <strong>request</strong>, not a confirmed appointment. Our team will contact you to confirm a slot, which depends on doctor availability.</li>
    <li>Please give accurate contact details. If you book for someone else (for example a child or an elderly relative), you confirm you are authorised to share their details.</li>
    <li>Fees, packages, empanelments and cashless facilities shown on the website are indicative. Please confirm them with the hospital before treatment.</li>
  </ul>

  <h2 id="acceptable-use">3. Acceptable use</h2>
  <p>You must not misuse the website. This includes submitting false, abusive or spam requests, trying to gain unauthorised access, interfering with its operation, or scraping content or personal data.</p>

  <h2 id="ip">4. Content ownership</h2>
  <p>Text, logos, photographs and videos on the website belong to Sankalp Hospital or its licensors. You may share links to our pages and print pages for personal, non-commercial use. Any other reproduction needs our written permission.</p>

  <h2 id="third-party">5. Third-party services and links</h2>
  <p>The website uses third-party services (for example forms, chat, video and maps) and links to other websites. Their own terms and privacy policies apply, and we are not responsible for their content.</p>

  <h2 id="accuracy">6. Accuracy and availability</h2>
  <p>We try to keep the website accurate and available but cannot guarantee it will always be complete, current or error-free. Doctor schedules, services and facilities may change.</p>

  <h2 id="liability">7. Liability</h2>
  <p>To the extent permitted by law, we are not liable for indirect or consequential loss arising from use of the website. Nothing in these terms limits any right you have under applicable law, including the Consumer Protection Act, 2019, or our responsibility for medical care we provide to you.</p>

  <h2 id="privacy">8. Privacy</h2>
  <p>Our <a href="/privacy-policy">Privacy Policy</a> and <a href="/cookie-policy">Cookie Policy</a> explain how we handle personal data.</p>

  <h2 id="law">9. Governing law</h2>
  <p>These terms are governed by the laws of India. Subject to any rights you have under consumer protection law, the courts at Ambikapur, Chhattisgarh have jurisdiction.</p>

  <h2 id="changes">10. Changes and contact</h2>
  <p>We may update these terms and will show the new date at the top of this page. Questions: <?php echo legal('general_email'); ?> or <?php echo legal('phone'); ?>.</p>

<?php include __DIR__ . '/includes/legal-page-bottom.php'; ?>
