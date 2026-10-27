<?php

/**
 * Pengaturan global proyek.
 *
 * Berisi: $base_url, $site_name, e(), $page_hierarchy.
 * Helper navigasi ada di lib/nav.php.
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
	'journal' => [
		'label'       => 'Learning Journal',
		'url'         => 'page/journal.php',
		'parent'      => 'home',
		'nav_section' => '',
		'nav_order'   => 3,
		'title'       => 'Learning Journal',
		'heading'     => 'LEARNING JOURNAL',
		'subtitle'    => 'Weekly progress notes',
		'description' => 'A weekly journal of my Japanese learning progress.',
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
	'katakana-chart' => [
		'label'       => 'Katakana Chart',
		'url'         => 'page/kana/katakana/katakana-chart.php',
		'parent'      => 'kana-intro',
		'nav_section' => 'Kana Section',
		'nav_order'   => 12,
		'title'       => 'Katakana Chart',
		'heading'     => 'KATAKANA CHART',
		'subtitle'    => 'All 46 basic Katakana, 25 Dakuten/Handakuten, and 33 Youon combinations',
		'description' => 'The Katakana counterpart to the Hiragana chart.',
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
	'kotoba-intro' => [
		'label'       => 'Kotoba Introduction',
		'url'         => 'page/kotoba/intro.php',
		'parent'      => 'home',
		'nav_section' => 'Kotoba Section',
		'nav_order'   => 30,
		'title'       => 'Kotoba Introduction',
		'heading'     => 'KOTOBA INTRODUCTION',
		'subtitle'    => 'Why vocabulary comes before grammar',
		'description' => 'An introduction to vocabulary learning in this project.',
	],
	'kotoba-list-1' => [
		'label'       => 'Kotoba List 1',
		'url'         => 'page/kotoba/list-1.php',
		'parent'      => 'kotoba-intro',
		'nav_section' => 'Kotoba Section',
		'nav_order'   => 31,
		'title'       => 'Kotoba List 1: 20 Basic Words',
		'heading'     => 'KOTOBA LIST 1',
		'subtitle'    => 'Greetings, Numbers, Pronouns, Yes/No',
		'description' => '20 foundational Japanese words: greetings, numbers 1-10, pronouns, and yes/no.',
	],
	'bunpo-intro' => [
		'label'       => 'Bunpō Introduction',
		'url'         => 'page/bunpo/intro.php',
		'parent'      => 'home',
		'nav_section' => 'Bunpō Section',
		'nav_order'   => 40,
		'title'       => 'Bunpō Introduction',
		'heading'     => 'BUNPŌ INTRODUCTION',
		'subtitle'    => 'Subject-Object-Verb and particles',
		'description' => 'An introduction to Japanese grammar: SOV word order and particles.',
	],
	'bunpo-particles-1' => [
		'label'       => 'Particles 1',
		'url'         => 'page/bunpo/particles-1.php',
		'parent'      => 'bunpo-intro',
		'nav_section' => 'Bunpō Section',
		'nav_order'   => 41,
		'title'       => 'Particles 1: は, が, を, に, で',
		'heading'     => 'PARTICLES 1',
		'subtitle'    => 'The five most common particles',
		'description' => 'Learn the roles of は, が, を, に, で with example sentences.',
	],
];

/**
 * Dev-only sanity check — aktif hanya saat `php -S localhost:8000`
 * atau diakses via hostname `localhost`.
 *
 * Menangkap typo parent & URL duplikat sebelum jadi bug di pager/nav.
 * Tidak pernah dieksekusi di production (SERVER_NAME bukan localhost,
 * SAPI bukan cli-server).
 */
if (PHP_SAPI === 'cli-server' || ($_SERVER['SERVER_NAME'] ?? '') === 'localhost') {
	foreach ($page_hierarchy as $id => $p) {
		if ($p['parent'] !== null && !isset($page_hierarchy[$p['parent']])) {
			trigger_error(
				"Hierarchy: parent '{$p['parent']}' untuk '{$id}' tidak ada",
				E_USER_WARNING
			);
		}
	}
	$urls = array_column($page_hierarchy, 'url');
	if (count($urls) !== count(array_unique($urls))) {
		trigger_error('Hierarchy: ada URL duplikat', E_USER_WARNING);
	}
}
