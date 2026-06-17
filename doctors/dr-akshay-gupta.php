<?php
$doc_name = "Dr. Akshay Gupta";
$doc_title = "Best Rheumatologist in Ambikapur | Dr. Akshay Gupta - Consultant Physician";
$doc_desc = "Consult Dr. Akshay Gupta, the first & only Rheumatology specialist in Ambikapur & Surguja region. Expert care for Rheumatoid Arthritis, Lupus, Ankylosing Spondylitis, and General Medicine.";
$doc_specialty = "Rheumatology & Internal Medicine";
$doc_degree = "MD (Medicine)";
$doc_experience = "5+ Years";
$doc_designation = "Consultant Physician & Rheumatologist";
$doc_image = "/assets/img/doctors/akshay-gupta.jpg";
$doc_bio = "Dr. Akshay Gupta is a Consultant Physician and Rheumatologist with expertise in Internal Medicine, autoimmune diseases, arthritis, and complex medical disorders. He completed his MBBS from Vardhman Mahavir Medical College & Safdarjung Hospital and MD (Medicine) from Dr. Ram Manohar Lohia Hospital, New Delhi. He is recognized as the first and only rheumatology specialist serving the Surguja region.";
$doc_keywords = ["Rheumatology", "Rheumatoid Arthritis", "Ankylosing Spondylitis", "Lupus (SLE)", "Psoriatic Arthritis", "Gout", "Vasculitis", "Osteoporosis", "Diabetes & Hypertension", "General Internal Medicine"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $doc_title; ?> | Sankalp Hospital</title>
  <meta name="description" content="<?php echo $doc_desc; ?>">
  <?php include '../includes/header-code.php'; ?>
  <style>
    .doc-hero { background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 60px 0; border-bottom: 1px solid #dee2e6; }
    .doc-img-wrapper { position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); background: #fff; }
    .doc-img-wrapper img { width: 100%; transition: transform 0.5s; }
    .doc-info-badge { background: var(--primary); color: #fff; padding: 5px 15px; border-radius: 50px; font-size: 13px; display: inline-block; margin-bottom: 15px; }
    .doc-stats { display: flex; gap: 30px; margin-top: 30px; }
    .stat-item h4 { color: var(--primary); font-weight: 700; margin-bottom: 0; }
    .stat-item span { font-size: 14px; color: #666; }
    .doc-content h2 { font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: var(--dark); }
    .keyword-pill { display: inline-block; background: #fff; border: 1px solid var(--primary); color: var(--primary); padding: 5px 15px; border-radius: 50px; margin: 0 5px 10px 0; font-size: 14px; }
    .achievements-list { list-style-type: none; padding-left: 0; }
    .achievements-list li { position: relative; padding-left: 30px; margin-bottom: 15px; font-size: 1.05rem; }
    .achievements-list li i { position: absolute; left: 0; top: 3px; color: #ffc107; font-size: 1.2rem; }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>

<section class="doc-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-4">
        <div class="doc-img-wrapper">
          <img src="<?php echo $doc_image; ?>" alt="<?php echo $doc_name; ?>" onerror="this.src='/assets/img/doctors/default.jpg'">
        </div>
      </div>
      <div class="col-lg-8">
        <span class="doc-info-badge"><?php echo $doc_specialty; ?></span>
        <h1 class="display-5 fw-bold mb-2"><?php echo $doc_name; ?></h1>
        <p class="text-primary fw-bold mb-3"><?php echo $doc_degree; ?> | <?php echo $doc_designation; ?></p>
        <p class="lead text-muted mb-4"><?php echo $doc_bio; ?></p>
        
        <div class="doc-stats">
          <div class="stat-item">
            <h4><?php echo $doc_experience; ?></h4>
            <span>Experience</span>
          </div>
          <div class="stat-item">
            <h4>1st & Only</h4>
            <span>Rheumatologist in Surguja</span>
          </div>
          <div class="stat-item">
            <h4>Rank 1</h4>
            <span>CGPMT State Rank</span>
          </div>
        </div>

        <div class="mt-5">
          <a href="/index#appointment" class="btn btn-primary btn-lg px-5 shadow">Book Appointment with <?php echo $doc_name; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="doc-content">
          <h2>Areas of Expertise</h2>
          <p>As the premier rheumatology specialist in Northern Chhattisgarh, Dr. Akshay Gupta provides advanced clinical diagnosis and management for a broad range of disorders:</p>
          <div class="mb-4">
            <?php foreach($doc_keywords as $keyword): ?>
              <span class="keyword-pill"><i class="fas fa-check-circle me-2"></i><?php echo $keyword; ?></span>
            <?php endforeach; ?>
          </div>
          
          <h2 class="mt-5">Key Achievements & Academic Credentials</h2>
          <ul class="achievements-list mt-3">
            <li><i class="fas fa-trophy"></i> <strong>CGPMT 2016 State Rank 1:</strong> Distinguished academic achiever, becoming the first student from Surguja to top the examination.</li>
            <li><i class="fas fa-medal"></i> <strong>All India Rank 269 in NEET:</strong> Earned admission to one of India's premier medical institutions.</li>
            <li><i class="fas fa-university"></i> <strong>MBBS</strong> from Vardhman Mahavir Medical College & Safdarjung Hospital, New Delhi.</li>
            <li><i class="fas fa-graduation-cap"></i> <strong>MD (Medicine)</strong> from Dr. Ram Manohar Lohia Hospital, New Delhi.</li>
            <li><i class="fas fa-shield-alt"></i> <strong>Pioneer of Rheumatology services:</strong> First and currently the only rheumatology specialist serving the Surguja region and surrounding areas.</li>
          </ul>

          <h2 class="mt-5">Bringing Specialized Rheumatology Services to Surguja</h2>
          <p>Previously, patients suffering from chronic autoimmune diseases and complex joint disorders in Northern Chhattisgarh had to travel hundreds of kilometers to metropolitan cities for specialized care. By introducing dedicated rheumatology services at Sankalp Hospital, Dr. Akshay Gupta has made top-tier medical care accessible locally, ensuring timely diagnosis and preventing long-term joint damage or systemic complications for his patients.</p>

          <div class="alert alert-info border-0 shadow-sm mt-4">
            <strong>Consultation Hours:</strong> Monday - Saturday (10:00 AM - 6:00 PM)
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="sticky-top" style="top:100px">
          <div class="card border-0 shadow-lg rounded-4 p-4">
            <h3 class="fw-bold mb-4">Book Consultation</h3>
            <form accept-charset='UTF-8' action='https://app.formester.com/forms/UvGLKUCJe/submissions' method='POST'>
              <input type="hidden" name="doctor" value="<?php echo $doc_name; ?>">
              <div class="mb-3">
                <label class="form-label small fw-bold">Patient Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Mobile Number</label>
                <input type="tel" name="phone" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Select Concern</label>
                <select name="concern" class="form-select">
                  <option value="Joint Pain / Arthritis">Joint Pain / Arthritis</option>
                  <option value="Lupus (SLE) / Autoimmune">Lupus (SLE) / Autoimmune</option>
                  <option value="Diabetes / Hypertension">Diabetes / Hypertension</option>
                  <option value="General Fever / Infection">General Fever / Infection</option>
                  <option value="Other Medical Consultation">Other Medical Consultation</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Health Concern Description</label>
                <textarea name="message" class="form-control" rows="3">I need a consultation for Rheumatology / Internal Medicine issues.</textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-3 shadow">Book Appointment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
</body>
</html>
