<?php
$trail = build_breadcrumbs($current_page ?? null, $page_hierarchy ?? []);

if (count($trail) < 2) {
	return;
}
?>
<nav class="breadcrumb" aria-label="Breadcrumb">
	<ol>
		<?php foreach ($trail as $i => $crumb): ?>
			<?php $isLast = $i === count($trail) - 1; ?>
			<li>
				<?php if ($isLast || empty($crumb['url'])): ?>
					<span aria-current="page"><?= e($crumb['label']) ?></span>
				<?php else: ?>
					<a href="<?= e($base_url . $crumb['url']) ?>"><?= e($crumb['label']) ?></a>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ol>
</nav>
