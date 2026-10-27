<?php
/**
 * Journal index — auto-list weekly entries from content/page/journal/.
 *
 * Entry format: content/page/journal/YYYY-MM-DD.md
 * Sort: newest first (filename sort, descending).
 * Render: setiap entry di-parse sebagai markdown, dibungkus <article>.
 */
$entries_dir = __DIR__ . '/journal';
$entries     = is_dir($entries_dir) ? glob($entries_dir . '/*.md') : [];

if ($entries === false) {
	$entries = [];
}
rsort($entries);
?>
<p>
	This is where I write down what I actually did each week — not what
	I planned to do. Progress, stuck points, and one thing I learned.
</p>

<?php if (empty($entries)): ?>
	<p><em>No entries yet. Come back soon.</em></p>
<?php else: ?>
	<?php foreach ($entries as $entry): ?>
		<?php
		$md   = file_get_contents($entry);
		$slug = basename($entry, '.md');
		?>
		<article class="journal-entry" id="entry-<?= e($slug) ?>">
			<?= markdown_to_html($md, $base_url) ?>
		</article>
	<?php endforeach; ?>
<?php endif; ?>
