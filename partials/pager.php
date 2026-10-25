<?php
$seq = build_sequence($current_page ?? null, $page_hierarchy ?? []);

if ($seq['prev'] === null && $seq['next'] === null) {
	return;
}
?>
<nav class="pager" aria-label="Sequential navigation">
	<?php if ($seq['prev']): ?>
		<a class="pager-link pager-prev"
		   href="<?= e($base_url . $seq['prev']['page']['url']) ?>">
			<span class="pager-direction" aria-hidden="true">←</span>
			<span class="pager-body">
				<span class="pager-label">Previous</span>
				<span class="pager-title"><?= e($seq['prev']['page']['label']) ?></span>
			</span>
		</a>
	<?php endif; ?>

	<?php if ($seq['next']): ?>
		<a class="pager-link pager-next"
		   href="<?= e($base_url . $seq['next']['page']['url']) ?>">
			<span class="pager-body">
				<span class="pager-label">Next</span>
				<span class="pager-title"><?= e($seq['next']['page']['label']) ?></span>
			</span>
			<span class="pager-direction" aria-hidden="true">→</span>
		</a>
	<?php endif; ?>
</nav>
