<?php

/**
 * Pengaturan global proyek.
 */

$base_url  = "/";
$site_name = "Learn Japanese";

/** Escape output HTML. */
function e($s)
{
	return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Hierarki halaman — sumber tunggal untuk breadcrumb, back-link,
 * nav, pager, dan metadata.
 *
 * Field:
 * - label       : teks nav (fallback untuk title/heading)
 * - url         : path relatif terhadap $base_url (juga path file entry)
 * - parent      : id parent (null = root)
 * - nav_section : nama section di menu ('' = standalone link, omit = skip menu)
 * - nav_order   : urutan render di menu
 * - title       : <title> halaman
 * - heading     : <h1> halaman
 * - subtitle    : teks di bawah <h1>
 * - description : meta description
 */
$page_hierarchy = [
	'home' => [
		'label'       => 'Home',
		'url'         => 'index.php',
		'parent'      => null,
		'nav_section' => '',
		'nav_order'   => 1,
		'title'       => 'Learn Japanese',
		'heading'     => 'LEARN JAPANESE',
		'subtitle'    => 'Learn Japanese • Improve English • Coding Documentation',
		'description' => 'A personal project documenting a Japanese learning journey.',
	],
	'intro' => [
		'label'       => 'Introduction',
		'url'         => 'page/intro.php',
		'parent'      => 'home',
		'nav_section' => '',
		'nav_order'   => 2,
		'title'       => 'Introduction',
		'heading'     => 'INTRODUCTION',
		'subtitle'    => 'Why I started this journey',
		'description' => 'The story behind this Japanese learning project.',
	],
	'kana-intro' => [
		'label'       => 'Kana Introduction',
		'url'         => 'page/kana/intro-kana.php',
		'parent'      => 'home',
		'nav_section' => 'Kana Section',
		'nav_order'   => 10,
		'title'       => 'Kana Introduction',
		'heading'     => 'KANA INTRODUCTION',
		'subtitle'    => 'The Three Japanese Writing Systems',
		'description' => 'An introduction to Hiragana, Katakana, Kanji, and Furigana.',
	],
	'hiragana-chart' => [
		'label'       => 'Hiragana Chart',
		'url'         => 'page/kana/hiragana/hiragana-chart.php',
		'parent'      => 'kana-intro',
		'nav_section' => 'Kana Section',
		'nav_order'   => 11,
		'title'       => 'Hiragana Chart',
		'heading'     => 'HIRAGANA CHART',
		'subtitle'    => 'All 46 basic Hiragana, 25 Dakuten/Handakuten, and 33 Youon combinations',
		'description' => 'The target for this page is knowing the shape, pronunciation, and memorization of all Hiragana forms.',
	],
	'm1' => [
		'label'       => 'Milestone 1',
		'url'         => 'milestone/hiragana-m1.php',
		'parent'      => 'home',
		'nav_section' => 'Milestones',
		'nav_order'   => 20,
		'title'       => 'Milestone 1: Basic Hiragana',
		'heading'     => 'MILESTONE 1: BASIC HIRAGANA',
		'subtitle'    => 'Learn and Read the 46 Basic Hiragana Characters',
		'description' => 'A flexible learning plan for recognizing, recalling, writing, and reading the 46 basic Hiragana characters.',
	],
	'm2' => [
		'label'       => 'Milestone 2',
		'url'         => 'milestone/hiragana-m2.php',
		'parent'      => 'm1',
		'nav_section' => 'Milestones',
		'nav_order'   => 21,
		'title'       => 'Milestone 2: Dakuten and Handakuten',
		'heading'     => 'MILESTONE 2: DAKUTEN AND HANDAKUTEN',
		'subtitle'    => 'Learn the 25 Additional Hiragana Sound Variations',
		'description' => 'A flexible learning plan for recognizing, recalling, writing, and reading Hiragana with dakuten and handakuten.',
	],
	'm3' => [
		'label'       => 'Milestone 3',
		'url'         => 'milestone/hiragana-m3.php',
		'parent'      => 'm2',
		'nav_section' => 'Milestones',
		'nav_order'   => 22,
		'title'       => 'Milestone 3: Hiragana Sound Rules',
		'heading'     => 'MILESTONE 3: HIRAGANA SOUND RULES',
		'subtitle'    => 'Learn Youon, Sokuon, Chouon, and Hatsuon',
		'description' => 'A flexible learning plan for reading Hiragana combinations, doubled consonants, long vowels, and the nasal sound.',
	],
];

/**
 * Bangun trail breadcrumb dari $current_page ke root.
 */
function build_breadcrumbs(?string $current, array $hierarchy): array
{
	if ($current === null || !isset($hierarchy[$current])) {
		return [];
	}

	$trail = [];
	$id    = $current;
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
 * Bangun urutan navigasi (prev/next) dalam section yang sama.
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
