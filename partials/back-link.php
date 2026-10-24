<?php
$trail = build_breadcrumbs($current_page ?? null, $page_hierarchy ?? []);
$n = count($trail);

if ($n < 2) {
	return;
}

$parent = $trail[$n - 2];
if (empty($parent['url'])) {
	return;
}
?>
<p class="back-link">
	<a href="<?= e($base_url . $parent['url']) ?>">
		← Back to <?= e($parent['label']) ?>
	</a>
</p>
