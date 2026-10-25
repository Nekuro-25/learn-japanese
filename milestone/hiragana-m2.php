<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 2: Dakuten and Handakuten - Learn Japanese";
$page_heading     = "MILESTONE 2: DAKUTEN AND HANDAKUTEN";
$page_subtitle    = "Learn the 25 Additional Hiragana Sound Variations";
$page_description = "A flexible learning plan for recognizing, recalling, writing, and reading Hiragana with dakuten and handakuten.";
$current_page     = "m2";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			If you've completed the first milestone, you should already
			be familiar with the 46 basic Hiragana characters.
			Now it's time to learn another 25 character forms:
			Hiragana with dakuten and handakuten.
		</p>

		<p>
			These marks may look like small cosmetic additions, but
			they change how a character is pronounced.
			You don't need to relearn every character from scratch.
			Instead, learn how these marks change the sounds you
			already know.
		</p>

		<h2 class="subsection-title">
			1. Learn 25 Additional Hiragana Forms
			(Dakuten and Handakuten)
		</h2>

		<h3>What Are Dakuten and Handakuten?</h3>

		<p>
			<strong>Dakuten (゛):</strong>
			Two small strokes written at the upper-right of a Hiragana
			character. For example, か (ka) becomes が (ga).
		</p>

		<p>
			<strong>Handakuten (゜):</strong>
			A small circle written at the upper-right of a Hiragana
			character. For example, は (ha) becomes ぱ (pa).
		</p>

		<p>
			Not every basic Hiragana character can take these marks.
			Use the Hiragana chart to study which characters have
			these sound variations.
		</p>

		<h3>Suggested 3-Day Learning Plan</h3>

		<ul class="list-clean">
			<li>
				<strong>Day 1: Recognize, Recall, and Write.</strong>
				Learn the 25 additional forms and their sounds.
				Practice matching each character to its pronunciation,
				then write it from memory. Compare similar-looking
				pairs, such as か and が, to avoid mixing them up.
			</li>
			<li>
				<strong>Day 2: Read and Speak.</strong>
				Review the new forms in random order, then read
				familiar words and short beginner-friendly passages
				that use them. Read aloud to practice pronunciation.
				Repeat any characters or words that cause hesitation.
			</li>
			<li>
				<strong>Day 3: Test Your Progress.</strong>
				Take a 30-question quiz that mixes the 46 basic
				Hiragana characters with the 25 additional forms.
				Answer at least 25 questions correctly to pass the quiz.
				Also test your writing and reading separately, because
				a quiz score alone cannot prove those skills.
			</li>
		</ul>

		<p>
			This three-day schedule is a suggested pace, not a deadline.
			Take extra time if you still confuse the basic characters
			with their dakuten or handakuten forms.
			Short, repeated practice sessions are more useful than
			rushing just to finish the milestone.
		</p>

		<h3>Criteria for Completing This Milestone</h3>

		<ul class="list-clean">
			<li>
				<strong>Recognize the Additional Forms:</strong>
				Identify the sounds of all 25 dakuten and handakuten
				forms accurately, including when they appear in random
				order alongside basic Hiragana.
			</li>
			<li>
				<strong>Distinguish Similar Characters:</strong>
				Correctly tell the difference between basic characters
				and their modified forms, such as さ and ざ,
				は and ば, or は and ぱ.
			</li>
			<li>
				<strong>Write Characters from Memory:</strong>
				Write the correct character when given its sound,
				without looking at the Hiragana chart or a cheatsheet.
			</li>
			<li>
				<strong>Read Words and Short Passages:</strong>
				Read familiar words and beginner-friendly passages
				containing both basic Hiragana and the additional forms
				without repeatedly stopping to recall each character's
				sound.
			</li>
			<li>
				<strong>Pass the Quiz:</strong>
				Answer at least 25 out of 30 questions correctly.
				Review mistakes before attempting the quiz again.
			</li>
		</ul>

		<p>
			Reading fluency does not mean reading without any pauses
			at all. The goal is to recognize the characters without
			needing to consciously recall every individual sound.
			Reading fluently also does not automatically mean
			understanding every word or sentence.
		</p>

		<p>
			<strong>One important note:</strong>
			This milestone focuses on dakuten and handakuten.
			You will study other Hiragana combinations and sound rules
			in the next milestone, so you don't need to master them here.
		</p>

		<p>
			Practice with the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php">
				Hiragana chart →
			</a>
		</p>

		<p class="spaced">
			That's it for the second milestone!
			Keep reviewing the characters you find difficult,
			and I'll see you in the next one.
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
