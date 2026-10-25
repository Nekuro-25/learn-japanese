<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 1: Basic Hiragana - Learn Japanese";
$page_heading     = "MILESTONE 1: BASIC HIRAGANA";
$page_subtitle    = "Learn and Read the 46 Basic Hiragana Characters";
$page_description = "A flexible learning plan for recognizing, recalling, writing, and reading the 46 basic Hiragana characters.";
$current_page     = "m1";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			Okay, while I was studying Japanese, I had a thought:
			"Why focus only on how much time I spend studying?
			Why not set milestones so I can track what I've actually learned?"
			And boom — that's why this page exists.
		</p>

		<p>
			I want to organize my Hiragana learning into three milestones.
			I don't want to create too many milestones for one topic,
			so I'll keep them focused on specific learning goals.
			If a topic turns out to be manageable, there's no need to
			split it into too many parts. Without further ado, let's
			start with the first milestone!
		</p>

		<h2 class="subsection-title">
			1. Learn the 46 Basic Hiragana Characters (Gojūon)
		</h2>

		<p>
			The goal of this milestone is to learn all 46 basic Hiragana
			characters and gradually recognize them without consciously
			thinking about each character's sound.
			One week is my initial target, but everyone learns at a
			different pace. Take more time if you need it.
		</p>

		<h3>Suggested 7-Day Learning Plan</h3>

		<ul class="list-clean">
			<li>
				<strong>Day 1–2: Recognize and Memorize.</strong>
				Learn the shapes and sounds of the characters in small
				groups. Practice recognizing each character and recalling
				its sound without relying on romaji.
			</li>
			<li>
				<strong>Day 3–4: Recall and Write.</strong>
				Review previously learned characters, write them from
				memory, and practice writing the correct character when
				given its sound. Continue reviewing characters you often
				mistake.
			</li>
			<li>
				<strong>Day 5–6: Read and Review.</strong>
				Read individual characters, simple character combinations,
				and familiar words written with the Hiragana you have
				learned. Mix old and new characters and spend extra time
				on the ones you still find difficult.
			</li>
			<li>
				<strong>Day 7: Test Your Progress.</strong>
				Take a 30-question quiz and answer at least 25 questions
				correctly to pass the quiz. Also check your writing and
				reading fluency separately, because a quiz score alone
				cannot prove that you can write from memory or read fluently.
			</li>
		</ul>

		<p>
			This schedule is a suggested pace, not a deadline.
			Review difficult characters for as long as necessary.
			Short, repeated practice sessions are more useful than
			rushing through the material just to finish the week.
		</p>

		<h3>Criteria for Completing This Milestone</h3>

		<ul class="list-clean">
			<li>
				<strong>Recognize Characters Quickly and Accurately:</strong>
				Identify the sounds of the 46 basic Hiragana characters
				accurately and with little hesitation, including when
				the characters appear in random order.
			</li>
			<li>
				<strong>Write Characters from Memory:</strong>
				Write the correct Hiragana character when given its sound,
				without looking at a chart, textbook, or cheatsheet.
			</li>
			<li>
				<strong>Read Hiragana Combinations and Words Fluently:</strong>
				Read familiar combinations and simple words without
				stopping to recall the sound of each individual character.
				Gradually work toward reading short, beginner-friendly
				passages written with the Hiragana you have learned.
			</li>
		</ul>

		<p>
			Reading fluency does not mean reading without any pauses at all.
			Natural pauses are normal. The goal is to stop hesitating over
			individual characters, not to rush through every sentence.
			Reading fluently also does not automatically mean understanding
			every word or sentence.
		</p>

		<p>
			<strong>One important note:</strong>
			This milestone focuses on the 46 basic Hiragana characters.
			You'll learn additional sound variations and reading rules
			in the next milestones, so you don't need to master them here.
		</p>

		<p class="spaced">
			That's it for the first milestone! Learn at your own pace,
			keep reviewing, and I'll see you in the next one.
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
