<?php

/**
 * Helper navigasi — breadcrumb & pager sequence.
 *
 * Dipisah dari config.php agar config tetap murni data.
 * Semua fungsi menerima $hierarchy sebagai parameter (tidak baca global).
 */

/**
 * Bangun trail breadcrumb dari $current ke root.
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
 *
 * Page tanpa nav_section (null) di-skip; page dengan nav_section = ''
 * (standalone: home, intro, journal) TIDAK punya pager — mereka
 * bukan bagian dari alur linear.
 */
function build_sequence(?string $current, array $hierarchy): array
{
	if ($current === null || !isset($hierarchy[$current])) {
		return ['prev' => null, 'next' => null];
	}

	$section = $hierarchy[$current]['nav_section'] ?? null;
	if ($section === null || $section === '') {
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
