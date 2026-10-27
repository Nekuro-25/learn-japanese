<?php
// Canonical URL — strip query string, always trailing path (no query)
$scheme = (($_SERVER['HTTPS'] ?? '') === 'on'
		|| ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
$path   = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$canonical_url = $scheme . '://' . $host . $path;

$og_title = $page_title ?? $site_name;
$og_desc  = $page_description ?? 'A personal Japanese learning journal.';
$og_type  = ($current_page ?? '') === 'home' ? 'website' : 'article';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?= e($og_desc) ?>">
	<title><?= e($og_title) ?></title>
	<link rel="canonical" href="<?= e($canonical_url) ?>">

	<!-- Open Graph -->
	<meta property="og:type"        content="<?= e($og_type) ?>">
	<meta property="og:title"       content="<?= e($og_title) ?>">
	<meta property="og:description" content="<?= e($og_desc) ?>">
	<meta property="og:url"         content="<?= e($canonical_url) ?>">
	<meta property="og:site_name"   content="<?= e($site_name) ?>">
	<meta property="og:locale"      content="en_US">

	<!-- Twitter Card -->
	<meta name="twitter:card"        content="summary">
	<meta name="twitter:title"       content="<?= e($og_title) ?>">
	<meta name="twitter:description" content="<?= e($og_desc) ?>">

	<link rel="stylesheet" href="<?= e($base_url) ?>css/style.css">
	<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='0.9em' font-size='90'%3E%E3%81%82%3C/text%3E%3C/svg%3E">
</head>

<body>
	<a href="#main" class="skip-link">Skip to main content</a>
	<div class="card">
