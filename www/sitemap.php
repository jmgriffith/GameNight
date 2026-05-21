<?php
/**
 * XML sitemap of the public (non-login) pages, served at /sitemap.xml via the
 * .htaccess rewrite. URLs are built from get_site_url() so they're correct on
 * any host. Login-gated app pages are intentionally omitted (see robots.txt).
 */
require_once __DIR__ . '/db.php';

header('Content-Type: application/xml; charset=utf-8');

$site = get_site_url();

// [path relative to root, priority, change frequency]
$pages = [
    ['',                '1.0', 'weekly'],
    ['help-hosts.php',  '0.8', 'monthly'],
    ['help-guests.php', '0.8', 'monthly'],
    ['register.php',    '0.6', 'monthly'],
    ['login.php',       '0.3', 'yearly'],
    ['terms.php',       '0.2', 'yearly'],
    ['privacy.php',     '0.2', 'yearly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($pages as [$path, $priority, $freq]) {
    $loc = $site . '/' . ltrim($path, '/');
    echo '  <url><loc>' . htmlspecialchars($loc, ENT_QUOTES) . '</loc>'
       . '<changefreq>' . $freq . '</changefreq>'
       . '<priority>' . $priority . '</priority></url>' . "\n";
}
echo '</urlset>' . "\n";
