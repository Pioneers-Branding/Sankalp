<?php
/**
 * Blog Data Loader
 * Automatically scans blog directory and loads blog metadata
 */

// Helper function to extract blog metadata from a PHP file
function get_blog_metadata($file_path) {
    $content = @file_get_contents($file_path);
    if ($content === false) return [];
    $metadata = [];

    // Extract title from PHP variable first, then fallback to HTML title
    if (preg_match('/\$blog_title\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['title'] = $match[1];
    } elseif (preg_match('/<title>([^<]+)/', $content, $match)) {
        $metadata['title'] = trim($match[1]);
    }

    // Extract description from PHP variable first, then fallback to meta description
    if (preg_match('/\$blog_desc\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['desc'] = $match[1];
    } elseif (preg_match('/<meta name="description" content="([^"]+)"/', $content, $match)) {
        $metadata['desc'] = $match[1];
    }

    // Extract category
    if (preg_match('/\$blog_category\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['category'] = $match[1];
    } else {
        $metadata['category'] = 'Health';
    }

    // Extract date
    if (preg_match('/\$blog_date\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['date'] = $match[1];
        $metadata['timestamp'] = strtotime($match[1]);
    } else {
        // Try to get file modification time as fallback
        $mtime = @filemtime($file_path);
        $metadata['date'] = $mtime ? date('F j, Y', $mtime) : '';
        $metadata['timestamp'] = $mtime ?: 0;
    }

    // Extract read time
    if (preg_match('/\$blog_readtime\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['readtime'] = $match[1];
    }

    // Extract image
    if (preg_match('/\$blog_image\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['image'] = $match[1];
    }

    // Extract author
    if (preg_match('/\$blog_author\s*=\s*["\'](.+?)["\']/', $content, $match)) {
        $metadata['author'] = $match[1];
    }

    return $metadata;
}

// Function to get all blogs sorted by date (newest first)
function get_all_blogs($blog_dir = __DIR__) {
    $blogs = [];

    if (!is_dir($blog_dir)) return $blogs;

    $files = @scandir($blog_dir);
    if ($files === false) return $blogs;

    // Files to skip (non-blog PHP files)
    $skip = ['index.php', 'blog-post.php', 'blog-functions.php', 'sidebar.php'];

    foreach ($files as $file) {
        // Skip non-PHP files
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;
        // Skip template/utility files
        if (in_array($file, $skip)) continue;
        // Blog posts always have a hyphen in the name
        if (strpos($file, '-') === false) continue;

        $file_path = $blog_dir . '/' . $file;
        if (!is_file($file_path)) continue;

        $metadata = get_blog_metadata($file_path);

        // Only include files that have a title
        if (!empty($metadata['title'])) {
            // Remove .php extension from URL
            $url = preg_replace('/\.php$/', '', $file);
            $metadata['url'] = $url;
            $metadata['file'] = $file;
            $blogs[] = $metadata;
        }
    }

    // Sort by timestamp (newest first)
    usort($blogs, function($a, $b) {
        return ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0);
    });

    return $blogs;
}

// Function to get a single blog by URL slug
function get_blog_by_slug($slug, $blog_dir = __DIR__) {
    $blogs = get_all_blogs($blog_dir);

    foreach ($blogs as $blog) {
        $blog_url = preg_replace('/\.php$/', '', $blog['file']);
        if ($blog_url === $slug) {
            return $blog;
        }
    }

    return null;
}