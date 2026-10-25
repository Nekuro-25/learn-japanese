<?php

/**
 * Pengaturan global proyek.
 */

$base_url  = "/";
$site_name = "Learn Japanese";

/** Escape output HTML. */
function e($s)
{
	return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

/**
 * Hierarki halaman — sumber tunggal untuk breadcrumb, back-link,
 * dan nav. Setiap halaman cukup set $current_page.
 *
 * Field:
 * - label       : teks tampil
 * - url         : path relatif terhadap $base_url
 * - parent      : id parent (null = root)
 * - nav_section : nama section di menu ('' = standalone link, omit = skip menu)
 * - nav_order   : urutan render di menu
 */
$page_hierarchy = [
	'home'           => ['label' => 'Home',              'url' => 'index.php',                             'parent' => null,         'nav_section' => '',             'nav_order' => 1],
	'intro'          => ['label' => 'Introduction',      'url' => 'page/intro.php',                        'parent' => 'home',       'nav_section' => '',             'nav_order' => 2],
	'kana-intro'     => ['label' => 'Kana Introduction', 'url' => 'page/kana/intro-kana.php',              'parent' => 'home',       'nav_section' => 'Kana Section', 'nav_order' => 10],
	'hiragana-chart' => ['label' => 'Hiragana Chart',    'url' => 'page/kana/hiragana/hiragana-chart.php', 'parent' => 'kana-intro', 'nav_section' => 'Kana Section', 'nav_order' => 11],
	'm1'             => ['label' => 'Milestone 1',       'url' => 'milestone/hiragana-m1.php',             'parent' => 'home',       'nav_section' => 'Milestones',   'nav_order' => 20],
	'm2'             => ['label' => 'Milestone 2',       'url' => 'milestone/hiragana-m2.php',             'parent' => 'm1',         'nav_section' => 'Milestones',   'nav_order' => 21],
	'm3'             => ['label' => 'Milestone 3',       'url' => 'milestone/hiragana-m3.php',             'parent' => 'm2',         'nav_section' => 'Milestones',   'nav_order' => 22],
];

/**
 * Bangun trail breadcrumb dari $current_page ke root.
 * Return: [['label'=>, 'url'=>], ...] — item terakhir url = null.
 */
function build_breadcrumbs(?string $current, array $hierarchy): array
{
	if ($current === null || !isset($hierarchy[$current])) {
		return [];
	}

	$trail = [];
	$id = $current;
	$guard = 0;

	while ($id !== null && isset($hierarchy[$id]) && $guard++ < 20) {
		$trail[] = [
			'label' => $hierarchy[$id]['label'],
			'url'   => $hierarchy[$id]['url'],
		];
		$id = $hierarchy[$id]['parent'];
	}

	$trail = array_reverse($trail);

	if (empty($trail)) {
		return [];
	}

	$trail[count($trail) - 1]['url'] = null;

	return $trail;
}

/**
 * Bangun urutan navigasi (prev/next) dalam section yang sama,
 * diurutkan berdasarkan nav_order.
 *
 * Halaman dengan nav_section yang sama dianggap satu sequence.
 * Section '' (standalone) juga dianggap satu group.
 * Halaman dengan nav_section = null (tidak muncul di menu) tidak
 * pernah dianggap sebagai bagian dari sequence.
 *
 * Return: ['prev' => item|null, 'next' => item|null]
 *   item = ['id' => string, 'nav_order' => int, 'page' => array]
 */
function build_sequence(?string $current, array $hierarchy): array
{
	if ($current === null || !isset($hierarchy[$current])) {
		return ['prev' => null, 'next' => null];
	}

	$section = $hierarchy[$current]['nav_section'] ?? null;
	if ($section === null) {
		return ['prev' => null, 'next' => null];
	}

	$siblings = [];
	foreach ($hierarchy as $id => $page) {
		if (!isset($page['nav_section'])) {
			continue;
		}
		if ($page['nav_section'] !== $section) {
			continue;
		}
		$siblings[] = [
			'id'        => $id,
			'nav_order' => $page['nav_order'] ?? 0,
			'page'      => $page,
		];
	}

	usort($siblings, fn ($a, $b) => $a['nav_order'] <=> $b['nav_order']);

	foreach ($siblings as $i => $sib) {
		if ($sib['id'] === $current) {
			return [
				'prev' => $siblings[$i - 1] ?? null,
				'next' => $siblings[$i + 1] ?? null,
			];
		}
	}

	return ['prev' => null, 'next' => null];
}
