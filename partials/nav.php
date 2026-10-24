<?php
// Group items by nav_section, sort by nav_order
$navGroups = [];
foreach ($page_hierarchy as $id => $page) {
	if (!isset($page['nav_section'])) {
		continue; // halaman yang tidak ingin tampil di menu
	}
	$section = $page['nav_section'];
	$navGroups[$section][] = ['id' => $id, 'page' => $page];
}
foreach ($navGroups as &$g) {
	usort($g, fn ($a, $b) => $a['page']['nav_order'] <=> $b['page']['nav_order']);
}
unset($g);
?>
<nav aria-label="Main navigation">
	<details class="menu-container">
		<summary class="menu-toggle" aria-label="Navigation menu">
			<span aria-hidden="true">☰</span>
		</summary>

		<div class="dropdown-content">
			<?php foreach ($navGroups as $section => $items): ?>
				<?php if ($section === ''): ?>
					<?php foreach ($items as $item): ?>
						<a href="<?= e($base_url . $item['page']['url']) ?>"
						   <?= ($current_page ?? '') === $item['id'] ? 'class="active" aria-current="page"' : '' ?>>
							<?= e($item['page']['label']) ?>
						</a>
					<?php endforeach; ?>
				<?php else: ?>
					<span class="nav-label"><?= e($section) ?></span>
					<div class="nav-group">
						<?php foreach ($items as $item): ?>
							<a href="<?= e($base_url . $item['page']['url']) ?>"
							   <?= ($current_page ?? '') === $item['id'] ? 'class="active" aria-current="page"' : '' ?>>
								<?= e($item['page']['label']) ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</details>
</nav>
