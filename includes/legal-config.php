<?php
/**
 * Single source of facts used by the policy pages (privacy, cookie, terms,
 * disclaimer, editorial). Values marked TBC MUST be confirmed by the hospital
 * management (and reviewed by legal counsel) before these pages go live —
 * they render with a yellow "to be confirmed" highlight until then.
 *
 * Set a value by replacing the ['tbc' => ...] array with a plain string.
 */

if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'legal-config.php') {
    http_response_code(404);
    exit;
}

$LEGAL = [
    // Legal name of the entity operating the hospital/website (Data Fiduciary).
    'entity_name'      => ['tbc' => 'Legal entity name of Sankalp Hospital (e.g. "Sankalp ... Pvt. Ltd." / trust / proprietorship)'],
    'address'          => 'Near District Hospital, Manipur, Ambikapur, Chhattisgarh - 497001',
    'phone'            => '+91 9584 889068',
    'emergency_phone'  => '+91 7774 223344',
    // The site currently shows two addresses: info@sankalphospital.com (contact page)
    // and info.sankalpslms@gmail.com (footer). Confirm which one is monitored.
    'general_email'    => ['tbc' => 'info@sankalphospital.com'],

    // Grievance Officer — IT (SPDI) Rules 2011, Rule 5(9); DPDP Act s.8(9)/Rule 9
    // contact person for data-principal questions.
    'grievance_name'   => ['tbc' => 'Name of the designated Grievance Officer'],
    'grievance_title'  => ['tbc' => 'Designation'],
    'grievance_email'  => ['tbc' => 'A dedicated mailbox, e.g. privacy@sankalphospital.com'],
    'grievance_phone'  => ['tbc' => 'Phone number'],

    // Retention — proposed defaults; confirm with management/legal.
    'retention_enquiries' => ['tbc' => '12 months from the last communication, unless the enquiry becomes part of your medical record'],
    'retention_medical'   => ['tbc' => 'the period required by law and medical-record regulations (at least 3 years for in-patient records under the IMC Regulations 2002, longer where other laws or pending proceedings require)'],

    'last_updated'     => '9 October 2026',
];

/** Render a config value; TBC values are highlighted so they cannot go live unnoticed. */
function legal($key) {
    global $LEGAL;
    $v = $LEGAL[$key] ?? '';
    if (is_array($v)) {
        return '<mark class="legal-tbc" title="To be confirmed before publishing">[TO BE CONFIRMED: ' . htmlspecialchars($v['tbc']) . ']</mark>';
    }
    return htmlspecialchars($v);
}
