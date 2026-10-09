<?php
/**
 * Local Router for PHP Built-in Web Server
 * Mimics Vercel routing rules for clean URL compatibility.
 */

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

$candidate = __DIR__ . $requestPath;

// If directory request (e.g. /blog or /blog/ or /doctors/), serve directory's index.php
if (is_dir($candidate) && rtrim($candidate, '/\\') !== __DIR__) {
    $dirIndex = rtrim($candidate, '/\\') . '/index.php';
    if (file_exists($dirIndex)) {
        require $dirIndex;
        return;
    }
}

// Resolve clean extensionless URLs (e.g. /doctors/dr-lata-goyal -> /doctors/dr-lata-goyal.php, /blog/cataract-guide -> /blog/cataract-guide.php)
if (!file_exists($candidate) || is_dir($candidate)) {
    $cleanCandidate = rtrim($candidate, '/\\');
    if (substr($cleanCandidate, -4) !== '.php' && file_exists($cleanCandidate . '.php') && !is_dir($cleanCandidate . '.php')) {
        require $cleanCandidate . '.php';
        return;
    }
} else {
    // Literal file exists — return false to let PHP's built-in server
    // serve it (handles static assets like style.css, script.js, logo.png, images/*).
    return false;
}

// Route everything else through index.php
require __DIR__ . '/index.php';
