<?php

/**
 * Front controller — satu pintu render untuk semua halaman.
 *
 * Setiap entry file (index.php, page/**, milestone/**) cukup:
 *     <?php require __DIR__ . '/../lib/render.php';
 *
 * Konten dicari di content/ berdasar $page_hierarchy[$current_page]['url'].
 * Urutan: coba .md dulu, kalau tidak ada coba .php.
 */

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/nav.php';
require_once __DIR__ . '/markdown.php';

// ─── 1. Deteksi halaman dari URL ───────────────────────────
$script = $_SERVER['SCRIPT_NAME'] ?? '/';

if ($script === '' || $script[0] !== '/') {
	$script = '/' . $script;
}
if ($script === '/') {
	$script = '/index.php';
}

$current_page = null;
foreach ($page_hierarchy as $id => $p) {
	if ('/' . ltrim($p['url'], '/') === $script) {
		$current_page = $id;
		break;
	}
}

// ─── 2. 404 — render dalam layout, bukan teks polos ────────
if ($current_page === null) {
	http_response_code(404);

	$page_title       = '404 Not Found - ' . $site_name;
	$page_description = 'Halaman tidak ditemukan.';
	$page_heading     = '404 NOT FOUND';
	$page_subtitle    = 'Halaman yang kamu cari tidak ada.';

	include __DIR__ . '/../partials/head.php';
	include __DIR__ . '/../partials/header.php';
	?>
	<main id="main" tabindex="-1">
		<div class="content-stack">
			<p>Periksa URL, atau kembali ke <a href="<?= e($base_url) ?>">Home</a>.</p>
		</div>
	</main>
	<?php
	include __DIR__ . '/../partials/footer.php';
	exit;
}

$page = $page_hierarchy[$current_page];

// ─── 3. Metadata (dari hierarchy, fallback ke label) ───────
$page_title = $page['title'] ?? $page['label'];
if ($page_title !== $site_name) {
	$page_title .= ' - ' . $site_name;
}
$page_heading     = $page['heading'] ?? strtoupper($page['label']);
$page_subtitle    = $page['subtitle'] ?? '';
$page_description = $page['description'] ?? '';

// ─── 4. Cari file konten ───────────────────────────────────
$rel     = $page['url'];
$root    = dirname(__DIR__);
$md_rel  = 'content/' . preg_replace('/\.php$/', '.md', $rel);
$php_rel = 'content/' . $rel;

$md_path  = $root . '/' . $md_rel;
$php_path = $root . '/' . $php_rel;

// ─── 5. Render konten ke buffer ────────────────────────────
ob_start();
if (is_file($md_path)) {
	$md = file_get_contents($md_path);
	echo markdown_to_html($md, $base_url);
} elseif (is_file($php_path)) {
	include $php_path;
} else {
	echo '<p>Content not found for this page.</p>';
}
$content_html = ob_get_clean();

// ─── 6. Render template ────────────────────────────────────
include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>
<main id="main" tabindex="-1">
	<div class="content-stack">
		<?= $content_html ?>
		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
