<?php
include 'blog/blog-functions.php';
$b = get_all_blogs('blog');
foreach($b as $p) {
    echo $p['url'] . "\n";
}
echo "Total: " . count($b) . "\n";
