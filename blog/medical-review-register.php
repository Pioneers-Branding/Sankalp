<?php
/**
 * Medical review register — the ONLY place that may mark a blog post as
 * reviewed by a doctor.
 *
 * Add an entry ONLY after the named doctor has actually read the post and
 * approved it in writing (email/WhatsApp/signed sheet — keep that record).
 * Never add an entry on the doctor's behalf or "in anticipation".
 *
 * Key: blog slug (filename without .php).
 * 'reviewer'    => exact name as on /doctors (e.g. 'Dr. Lata Goyal')
 * 'credentials' => qualifications as on the doctor's profile
 * 'date'        => date of approval, YYYY-MM-DD
 * 'evidence'    => where the written approval is stored (internal note; not shown)
 *
 * Posts not listed here are shown as "Sankalp Hospital Editorial Team
 * (AI-assisted)", with no doctor byline and no reviewedBy schema.
 *
 * Example:
 * 'amh-test-ovarian-reserve' => [
 *     'reviewer' => 'Dr. Lata Goyal',
 *     'credentials' => 'MBBS, MS (Obs & Gyn)',
 *     'date' => '2026-10-20',
 *     'evidence' => 'Email approval 20 Oct 2026, filed in Compliance/Blog-Reviews',
 * ],
 */

if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'medical-review-register.php') {
    http_response_code(404);
    exit;
}

return [
    // No reviews recorded yet.
];
