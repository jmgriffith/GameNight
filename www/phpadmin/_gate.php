<?php
// Admin auth gate for /phpadmin/. Wired up as auto_prepend_file in this
// directory's .htaccess, so every PHP request here — including direct hits
// on phpliteadmin.php — runs through this check before any pla-ng code.
require_once __DIR__ . '/../auth.php';
session_start_safe();
$user = current_user();
if (!$user || $user['role'] !== 'admin') {
    $back = $_SERVER['REQUEST_URI'] ?? '/phpadmin/';
    header('Location: /login.php?redirect=' . urlencode($back));
    exit;
}
