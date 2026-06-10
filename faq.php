<!DOCTYPE html>
<html lang="en">
<head>
  <title>FAQ | Sankalp Hospital - Frequently Asked Questions</title>
  <meta name="description" content="Find answers to frequently asked questions about Sankalp Hospital services, treatments, appointments, and facilities.">
  <?php include 'includes/header-code.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <p class="breadcrumbs"><a href="/index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> About <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> FAQ</p>
    <h1>Frequently Asked Questions</h1>
    <p>Find answers to common questions about our hospital services and treatments</p>
  </div>
</section>

<!-- FAQ CONTENT -->
<section class="py-5">
  <div class="container">
    <div class="search-box">
      <input type="text" id="faqSearch" placeholder="Search for a question..." onkeyup="filterFAQs()">
    </div>

    <!-- Appointments -->
    <div class="faq-category">
      <h3><i class="fas fa-calendar-check"></i> Appointments & OPD</h3>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">How can I book an appointment? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>You can book an appointment through our website by filling out the appointment form, calling us at +91 9584 889068, or visiting the hospital directly. For online booking, fill the form and our coordinator will call you to confirm the slot.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">What are the OPD timings? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>General OPD runs from 9:00 AM to 6:00 PM. However, different departments may have varying timings. Emergency services are available 24/7. Please call to confirm the specific department timing you need.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Do I need a referral to see a specialist? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>No referral is required. You can directly book an appointment with any specialist based on your health concern. Our staff will help guide you to the right department if needed.</p></div>
      </div>
    </div>

    <!-- Emergency -->
    <div class="faq-category">
      <h3><i class="fas fa-ambulance"></i> Emergency Services</h3>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Is emergency service available 24/7? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Yes, our Emergency and Trauma Centre operates 24 hours a day, 7 days a week with a dedicated team of emergency physicians and staff. Fully equipped ambulances are also available round the clock.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">How quickly can I get emergency care? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Our emergency team is trained to provide immediate care. Upon arrival, patients are assessed and treated based on the severity of their condition. Life-saving interventions are initiated within minutes.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Do you have ambulance services? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Yes, we have fully equipped ambulances available 24/7. For emergency pickup, call +91 9584 889068. Our ambulances are equipped with life-support systems and trained paramedics.</p></div>
      </div>
    </div>

    <!-- Billing & Insurance -->
    <div class="faq-category">
      <h3><i class="fas fa-file-invoice-dollar"></i> Billing & Insurance</h3>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">What insurance companies do you accept? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>We are empaneled with major insurance companies including Star Health, HDFC ERGO, ICICI Lombard, Bajaj Allianz, and many others. We also work with multiple TPAs for cashless treatment. Please check our Empanelments page or call to confirm if your insurer is covered.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">How does cashless treatment work? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>If your insurance company/TPA is empaneled with us, you can avail cashless treatment. Get pre-authorization from your insurance company, bring your policy documents, and our TPA desk will assist with the process.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">What payment methods are accepted? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>We accept cash, credit/debit cards, UPI payments, net banking, and all major payment apps. For larger treatments, we also offer payment plans in coordination with our billing department.</p></div>
      </div>
    </div>

    <!-- Facilities -->
    <div class="faq-category">
      <h3><i class="fas fa-hospital"></i> Facilities & Services</h3>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Do you have ICU facilities? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Yes, we have fully equipped ICU with modern life-support systems, dedicated nursing staff, and round-the-clock monitoring by intensivists. We also have NICU for neonatal care.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Is there a pharmacy in the hospital? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Yes, we have a fully stocked in-house pharmacy operating 24/7. All essential medicines, surgical supplies, and implants are available within the hospital campus.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Can I get a second opinion? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Absolutely. We encourage patients to seek second opinions. Our specialists will review your existing reports and provide an independent assessment. You can book a consultation specifically for a second opinion.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">Do you provide lodging facilities for attendants? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>While we don't have dedicated attendant lodging, we have comfortable waiting areas. For patients from outstation, our staff can suggest nearby hotels and guest houses that offer discounted rates for patient families.</p></div>
      </div>
    </div>

    <!-- IVF Related -->
    <div class="faq-category">
      <h3><i class="fas fa-dna"></i> IVF & Fertility</h3>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">What fertility treatments are available? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>We offer complete fertility solutions including IUI (Intra-Uterine Insemination), IVF (In-Vitro Fertilization), and ICSI (Intra-Cytoplasmic Sperm Injection). As the first IVF center in Surguja district, we have helped many couples achieve parenthood.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">What is the success rate of IVF? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>Our IVF success rate is 60-70% per cycle. The actual success depends on various factors including age, cause of infertility, and individual health conditions. Our doctors provide detailed assessment during consultation.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">How much does IVF cost? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer"><p>IVF costs start from ₹1,50,000. IUI is more affordable starting from ₹25,000. The exact cost depends on individual treatment protocols. We offer competitive pricing and can discuss payment options during consultation.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT CTA -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center">
      <h3 class="mb-3">Still have questions?</h3>
      <p class="text-muted mb-4">Our team is here to help. Contact us and we'll get back to you promptly.</p>
      <a href="tel:+919584889068" class="btn btn-primary me-3"><i class="fas fa-phone-alt me-2"></i>Call Us</a>
      <a href="mailto:contact@sankalphospital.com" class="btn btn-outline-primary"><i class="fas fa-envelope me-2"></i>Email Us</a>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>