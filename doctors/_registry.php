<?php
/**
 * Lightweight doctor registry.
 *
 * Used by doctors.php (the directory listing page) to render the doctor grid.
 * Keep in sync with doctors/dr-<slug>.php — the per-doctor files are the
 * source of truth for full data (bio, long_bio, expertise), this registry
 * only holds the fields needed for the directory card.
 */

if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === '_registry.php') {
    http_response_code(404);
    exit;
}

$doctorRegistry = [
    'dr-lata-goyal' => [
        'name' => 'Dr. Lata Goyal',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MBBS, MS (Obstetrics & Gynaecology) | Senior Consultant & IVF Specialist',
        'experience' => '15+ Years',
        'img' => 'lata-goyal.jpg',
        'filters' => ['gynecology'],
    ],
    'dr-tanay-goyal' => [
        'name' => 'Dr. Tanay Goyal',
        'specialty' => 'Orthopaedics',
        'degrees' => 'MBBS, MS (Orthopaedics) | Senior Orthopedic Surgeon',
        'experience' => '10+ Years',
        'img' => 'tanay-goyal.jpg',
        'filters' => ['orthopedics'],
    ],
    'dr-suneedh-gupta' => [
        'name' => 'Dr. Suneedh Gupta',
        'specialty' => 'Oral & Maxillofacial Surgery',
        'degrees' => 'BDS, MDS (Oral & Maxillofacial Surgery) | Consultant Oral & Maxillofacial Surgeon',
        'experience' => '10+ Years',
        'img' => 'suneedh-gupta.jpg',
        'filters' => ['dentistry', 'surgery'],
    ],
    'dr-himanshu-gupta' => [
        'name' => 'Dr. Himanshu Gupta',
        'specialty' => 'Oncology',
        'degrees' => 'MBBS, MD / DNB - Medical Oncology',
        'experience' => '10+ Years',
        'img' => 'himanshu-gupta.jpg',
        'filters' => ['oncology'],
    ],
    'dr-sanjay-goyal' => [
        'name' => 'Dr. Sanjay Goyal',
        'specialty' => 'Ophthalmology (Senior Specialist)',
        'degrees' => 'MBBS, MS (Ophthalmology) | Founder & Senior Eye Surgeon',
        'experience' => '25+ Years',
        'img' => 'sanjay-goyal.jpg',
        'filters' => ['ophthalmology'],
    ],
    'dr-manoj-bharti' => [
        'name' => 'Dr. Manoj Bharti',
        'specialty' => 'General & Laparoscopic Surgery',
        'degrees' => 'MBBS, MS (General & Laparoscopic Surgery) | Consultant Surgeon',
        'experience' => '10+ Years',
        'img' => 'manoj-bharti.jpg',
        'filters' => ['surgery'],
    ],
    'dr-nilesh-goyal' => [
        'name' => 'Dr. Nilesh Goyal',
        'specialty' => 'General & Laparoscopic Surgery',
        'degrees' => 'MBBS, MS (General Surgery) | Consultant General & Laparoscopic Surgeon',
        'experience' => '10+ Years',
        'img' => 'nilesh-goyal.jpg',
        'filters' => ['surgery'],
    ],
    'dr-ankit-sharma' => [
        'name' => 'Dr. Ankit Sharma',
        'specialty' => 'Pediatrics',
        'degrees' => 'MBBS, MD (Pediatrics) | Consultant Pediatrician',
        'experience' => '8+ Years',
        'img' => 'ankit-sharma.jpg',
        'filters' => ['pediatrics'],
    ],
    'dr-ankita-bansal-goyal' => [
        'name' => 'Dr. Ankita Bansal Goyal',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MD (Obstetrics & Gynaecology) - PGIMER CHD, FMAS | Consultant Laparoscopic Surgeon & Gynaecologist',
        'experience' => '8+ Years',
        'img' => 'ankita-goyal.jpg',
        'filters' => ['gynecology', 'surgery'],
    ],
    'dr-shailesh-gupta' => [
        'name' => 'Dr. Shailesh Gupta',
        'specialty' => 'Cardiology & Internal Medicine',
        'degrees' => 'MBBS, MD (Medicine) | Senior Physician & Heart Specialist',
        'experience' => '15+ Years',
        'img' => 'shailesh-gupta.jpg',
        'filters' => ['medicine'],
    ],
    'dr-usha-armo' => [
        'name' => 'Dr. Usha Armo',
        'specialty' => 'ENT (Otolaryngology)',
        'degrees' => 'MBBS, MS (ENT) | Senior ENT Consultant',
        'experience' => '12+ Years',
        'img' => 'usha-armo.jpg',
        'filters' => ['ent'],
    ],
    'dr-sukirti-chauhan' => [
        'name' => 'Dr. Sukruti Chauhan',
        'specialty' => 'Neurosurgery',
        'degrees' => 'MBBS, MS (Neurosurgery) | Consultant Neurosurgeon',
        'experience' => '10+ Years',
        'img' => 'sukirti-chauhan.jpg',
        'filters' => ['neurology', 'surgery'],
    ],
    'dr-megha-goyal' => [
        'name' => 'Dr. Megha Goyal',
        'specialty' => 'Neonatology & Pediatrics',
        'degrees' => 'MBBS, MD (Pediatrics) | Consultant Neonatologist',
        'experience' => '7+ Years',
        'img' => 'megha-goyal.jpg',
        'filters' => ['pediatrics'],
    ],
    'dr-akshaya-goyal' => [
        'name' => 'Dr. Akshaya Goyal',
        'specialty' => 'Ophthalmology (Eye Care)',
        'degrees' => 'MBBS, MS (Ophthalmology) | Consultant Ophthalmologist',
        'experience' => '7+ Years',
        'img' => 'akshaya-goyal.jpg',
        'filters' => ['ophthalmology'],
    ],
    'dr-akshay-gupta' => [
        'name' => 'Dr. Akshay Gupta',
        'specialty' => 'Rheumatology & Internal Medicine',
        'degrees' => 'MD (Medicine) | Consultant Physician & Rheumatologist',
        'experience' => '5+ Years',
        'img' => 'akshay-gupta.png',
        'filters' => ['medicine'],
    ],
    'dr-ankit-gupta' => [
        'name' => 'Dr. Ankit Gupta',
        'specialty' => 'Pediatrics',
        'degrees' => 'MBBS, DCH | Senior Consultant Pediatrician',
        'experience' => '10+ Years',
        'img' => 'ankit-gupta.jpg',
        'filters' => ['pediatrics'],
    ],
    'dr-yuvan-prasannaa' => [
        'name' => 'Dr. Yuvan Prasannaa',
        'specialty' => 'Anaesthesiology',
        'degrees' => 'MBBS, MD (Anaesthesiology) | Consultant Anaesthesiologist',
        'experience' => '10+ Years',
        'img' => 'yuvan.jpg',
        'filters' => ['anesthesiology'],
    ],

    'dr-ambar-garg' => [
        'name' => 'Dr. Ambar Garg',
        'specialty' => 'Haematology',
        'degrees' => 'MBBS, MS (Haematology) | Consultant Haematologist',
        'experience' => '10+ Years',
        'img' => 'ambar-garg.png',
        'filters' => ['medicine'],
    ],
    'dr-azad-bhagat' => [
        'name' => 'Dr. Azad Bhagat',
        'specialty' => 'Pathology',
        'degrees' => 'MBBS, Clinical Pathology | Consultant Pathologist',
        'experience' => '10+ Years',
        'img' => 'azad-bhagat.png',
        'filters' => ['pathology'],
    ],
    'dr-anoj-kumar' => [
        'name' => 'Dr. Anoj Kumar',
        'specialty' => 'Anaesthesiology',
        'degrees' => 'MBBS, DNB (Anaesthesiology) | Consultant Anaesthesiologist',
        'experience' => '10+ Years',
        'img' => 'anoj-kumar.png',
        'filters' => ['anesthesiology'],
    ],
    'dr-rajshree-verma' => [
        'name' => 'Dr. Rajshree Verma',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MBBS, MS (Obstetrics & Gynaecology) | Consultant Gynaecologist',
        'experience' => '10+ Years',
        'img' => 'rajshree-verma.jpg',
        'filters' => ['gynecology'],
    ],
    'dr-sonali-gupta' => [
        'name' => 'Dr. Sonali Gupta',
        'specialty' => 'Pathology',
        'degrees' => 'MBBS, MD (Pathology) | Consultant Pathologist',
        'experience' => '10+ Years',
        'img' => 'sonali-gupta.png',
        'filters' => ['pathology'],
    ],
    'dr-chetan-chaturvedi' => [
        'name' => 'Dr. Chetan Chaturvedi',
        'specialty' => 'Cardiology',
        'degrees' => 'MBBS, DNB (Cardiology) | Consultant Cardiologist',
        'experience' => '10+ Years',
        'img' => 'chetan-chaturvedi.png',
        'filters' => ['cardiology'],
    ],
    'dr-shradha-kinkar' => [
        'name' => 'Dr. Shradha Kinkar',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MBBS, NBEMS DGO | Consultant Gynaecologist',
        'experience' => '5+ Years',
        'img' => 'shradha-kinkar.jpg',
        'filters' => ['gynecology'],
    ],
];
