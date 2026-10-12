<?php
$pageTitle = "Medical Disclaimer | Sankalp Hospital Ambikapur";
$pageDesc = "Medical disclaimer for the Sankalp Hospital website: health information on this site is general, partly AI-assisted, and not a substitute for advice from a qualified doctor.";
$pageCanonical = "https://www.sankalphospital.com/medical-disclaimer";
$legalHeading = "Medical Disclaimer";
$legalIntro = "Please read this before relying on any health information on our website.";
include __DIR__ . '/includes/legal-page-top.php';
?>

  <div class="legal-emergency">
    <strong><i class="fas fa-ambulance me-2"></i>In an emergency:</strong> do not rely on this website. Call our 24/7 emergency line at <a href="tel:+917774223344"><strong><?php echo legal('emergency_phone'); ?></strong></a>, dial <strong>112</strong> (national emergency number) or <strong>108</strong> (ambulance), or go to the nearest emergency department.
  </div>

  <h2 id="general-information">1. General information only</h2>
  <p>The content on this website — including blog articles, department and treatment pages, FAQs, the “Myths &amp; Facts” and “Medical Glossary” sections, videos and images — is provided for general health education and information. It is <strong>not</strong> medical advice and does not replace a consultation, examination, diagnosis or treatment by a qualified, registered medical practitioner who knows your individual situation.</p>
  <p>Do not start, stop or change any medicine, diet, exercise or treatment, and do not delay seeking medical care, because of something you read on this website.</p>

  <h2 id="ai-assisted">2. AI-assisted content</h2>
  <p>Many articles on our Health Blog were drafted with the help of artificial-intelligence (AI) writing tools and then edited by our team. Each such article carries a red “Medical Disclaimer” notice directly below its title. AI-assisted content can contain errors or become out of date.</p>
  <p>An article is described as <strong>“medically reviewed”</strong> only when a named doctor has actually read and approved it, and the date of that review is shown on the article. Articles without that statement have <strong>not</strong> been individually reviewed by a doctor. See our <a href="/editorial-policy">Editorial &amp; AI Content Policy</a>.</p>

  <h2 id="no-relationship">3. No doctor–patient relationship</h2>
  <p>Reading this website, submitting an appointment request or contact form, or exchanging messages with us through the website or chat widget does not create a doctor–patient relationship. That relationship begins only when you are seen by one of our doctors.</p>

  <h2 id="results-vary">4. Outcomes vary</h2>
  <p>Every patient is different. Descriptions of treatments, procedures, technologies or facilities are general and are not a promise or guarantee of any particular result. Success rates, recovery times and risks depend on your age, medical history, the stage of your condition and other factors your doctor will discuss with you. Any figures quoted on the website are general information from published literature unless clearly stated otherwise, and are not the hospital’s own guaranteed outcomes.</p>

  <h2 id="images">5. Images and videos</h2>
  <p>Some images on this website are stock photographs or illustrations, including images created with AI tools, and are used for illustration only. Unless a caption says otherwise, people shown in such images are not our patients or staff. If you believe a photo, video, review or story about you has been published on this website without your consent, please contact our Grievance Officer (see our <a href="/privacy-policy#grievance">Privacy Policy</a>) and we will review and, where appropriate, remove it.</p>

  <h2 id="doctor-information">6. Information about our doctors and services</h2>
  <p>We try to keep doctor profiles, specialties, timings, empanelments and facility details accurate and current, but they can change. Please confirm availability with our reception on <a href="tel:+919584889068"><?php echo legal('phone'); ?></a> before your visit.</p>

  <h2 id="pcpndt">7. Sex determination is not done</h2>
  <p>Determination or disclosure of the sex of a foetus is prohibited and punishable under the Pre-Conception and Pre-Natal Diagnostic Techniques (PCPNDT) Act, 1994. Sankalp Hospital does not perform or disclose sex determination, and nothing on this website should be read as suggesting otherwise.</p>

  <h2 id="external-links">8. Links to other websites</h2>
  <p>We may link to external websites (for example government health portals or YouTube). We are not responsible for their content or privacy practices.</p>

  <h2 id="liability">9. Limitation of liability</h2>
  <p>To the extent permitted by law, Sankalp Hospital is not liable for any loss or harm arising from reliance on the general information on this website. Nothing in this disclaimer limits any right you have under applicable law, including the Consumer Protection Act, 2019, or our responsibility for the care we actually provide to you as a patient.</p>

  <h2 id="report-error">10. Report an error</h2>
  <p>If you believe any information on this website is inaccurate, outdated or misleading, please write to us at <?php echo legal('general_email'); ?> with the page link. We review every report.</p>

<?php include __DIR__ . '/includes/legal-page-bottom.php'; ?>
