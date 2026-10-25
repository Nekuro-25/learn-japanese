<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 2: Hiragana Derivatives - Learn Japanese";
$page_heading     = "MILESTONE 2: INTERMEDIATE HIRAGANA";
$page_subtitle    = "Mastering Dakuten and Handakuten in 3 Days";
$page_description = "A three-day plan to master the 25 dakuten and handakuten characters.";
$current_page     = "m2";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			I won't explain too much, but since you and I have (hopefully)
			already mastered 46 basic Hiragana, I have high hopes of mastering
			Dakuten and Handakuten in 3 days.
		</p>
		<p>
			So, what are Dakuten and Handakuten? They're basically the
			basic hiragana with a small cosmetic addition that changes how they sound, not all basic hiragana have this add onn. You can check it on the hiragana chart.
			<strong>Dakuten.</strong> It has two small strokes at the top-right
			corner, while <strong>Handakuten</strong> is a small circle at
			the top-right corner.
		</p>

		<h2 class="subsection-title">1. Learn and Master 25 Additional Hiragana (Dakuten and Handakuten)</h2>
		<p>
			As before, the first thing I do is practice writing (even
			though it's just adding strokes and a circle — writing is
			still fundamental). Then I read full paragraphs (I use AI for
			this) to practice reading.
		</p>
		<ul class="list-clean">
			<li><strong>Day 1:</strong> Writing learn and listening.</li>
			<li>
				<strong>Day 2:</strong> Reading and speaking.
			</li>
			<li>
				<strong>Day 3:</strong> Same test like before, the only thing difference is it'll mix all of 46 hiragana and additional 25.
			</li>
		</ul>
		<p>
			Once you can read, speak fluently and pass the test, you can continue to the next milestone.
		</p>
		<p class="spaced">
			Okay, that's it for the second milestone — goodbye.
		</p>
		<p>
			Practice with the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php">
				Hiragana chart →
			</a>
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
