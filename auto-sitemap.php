<?php
// ==========================================
// AUTO GENERATE SITEMAP FOR urfws.com
// ==========================================

$site_url = "https://technomerates.com";
$root_path = __DIR__;

$exclude_folders = ['admin', 'config', 'server.php', 'db', 'includes', 'uploads', 'cgi-bin'];
$allowed_extensions = ['php', 'html'];

// Collect all valid URLs
$urls = [];

$directory = new RecursiveDirectoryIterator($root_path);
$iterator = new RecursiveIteratorIterator($directory);

foreach ($iterator as $file) {
    if ($file->isDir())
        continue;

    $file_path = $file->getRealPath();
    $file_name = $file->getFilename();
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    // Skip unwanted files
    if (!in_array($ext, $allowed_extensions))
        continue;

    // Exclude folders
    foreach ($exclude_folders as $excluded) {
        if (strpos($file_path, DIRECTORY_SEPARATOR . $excluded . DIRECTORY_SEPARATOR) !== false) {
            continue 2;
        }
    }

    // Build URL
    $relative_path = str_replace($root_path, '', $file_path);
    $relative_url = str_replace(DIRECTORY_SEPARATOR, '/', $relative_path);

    // Remove index.php (handled as homepage)
    if (strpos($relative_url, '/index.php') !== false) {
        $relative_url = '/';
    }

    $loc = rtrim($site_url . $relative_url, '/');
    $lastmod = date("Y-m-d", filemtime($file_path));

    $urls[] = [
        'loc' => $loc,
        'lastmod' => $lastmod
    ];
}

// Create sitemap XML content
$sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$sitemap .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

foreach ($urls as $url) {
    $sitemap .= "  <url>\n";
    $sitemap .= "    <loc>{$url['loc']}</loc>\n";
    $sitemap .= "    <lastmod>{$url['lastmod']}</lastmod>\n";
    $sitemap .= "    <changefreq>weekly</changefreq>\n";
    $sitemap .= "    <priority>" . ($url['loc'] == $site_url ? "1.00" : "0.80") . "</priority>\n";
    $sitemap .= "  </url>\n";
}

$sitemap .= "</urlset>";

// Save sitemap.xml file
file_put_contents($root_path . "/sitemap.xml", $sitemap);

echo "<h2>Sitemap Generated Successfully!</h2>";
echo "<p>Saved as: <b>sitemap.xml</b></p>";
echo "<p>Total URLs Added: <b>" . count($urls) . "</b></p>";
?>