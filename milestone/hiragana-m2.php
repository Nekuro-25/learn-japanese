<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 2: Dakuten and Handakuten - Learn Japanese";
$page_heading     = "MILESTONE 2: DAKUTEN AND HANDAKUTEN";
$page_subtitle    = "25 More Hiragana Forms? Let's Do This!";
$page_description = "My next Hiragana milestone: learning dakuten and handakuten sound variations.";
$current_page     = "m2";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			Back again! If you've finished M1, you should already
			know the 46 basic Hiragana characters.
			Hopefully, your brain and the characters have finally
			become friends. Now it's time to add 25 more forms to
			the collection.
		</p>

		<p>
			Don't panic, though. We're not starting from zero again.
			These new forms use characters you already know, with
			a couple of little marks added to them.
			They look like tiny cosmetic upgrades, but they actually
			change the sounds. Pretty important little marks, huh?
		</p>

		<h2 class="subsection-title">
			1. Learn 25 More Hiragana Forms
		</h2>

		<h3>So, What Are Dakuten and Handakuten?</h3>

		<p>
			Let's keep this simple.
		</p>

		<p>
			<strong>Dakuten (゛):</strong>
			Those two little strokes at the upper-right of a character.
			For example, <span lang="ja">か</span> (<em>ka</em>)
			becomes <span lang="ja">が</span> (<em>ga</em>).
		</p>

		<p>
			<strong>Handakuten (゜):</strong>
			The little circle at the upper-right.
			For example, <span lang="ja">は</span> (<em>ha</em>)
			becomes <span lang="ja">ぱ</span> (<em>pa</em>).
		</p>

		<p>
			Not every Hiragana can use these marks, so don't go
			adding them randomly and hope for the best.
			Check the chart to see which characters have these
			sound variations.
		</p>

		<h3>My Suggested 3-Day Plan</h3>

		<ul class="list-clean">
			<li>
				<strong>Day 1: Look, Listen, and Write.</strong>
				Get familiar with the 25 additional forms and their
				sounds. Practice matching each character to its sound,
				then try writing it from memory.
				Pay extra attention to pairs like
				<span lang="ja">か</span> and <span lang="ja">が</span>.
				That little mark is easy to miss when you're in a hurry!
			</li>
			<li>
				<strong>Day 2: Read and Speak.</strong>
				Time to put those characters to work.
				Read familiar words and short, beginner-friendly passages
				that contain the new forms. Try reading aloud, too,
				and revisit anything that makes you hesitate.
			</li>
			<li>
				<strong>Day 3: Test Time!</strong>
				Take another 30-question quiz, this time mixing the
				46 basic characters with the 25 additional forms.
				You'll need at least 25 correct answers to pass.
				After that, check your writing and reading separately.
			</li>
		</ul>

		<p>
			Three days is my target, but don't treat it like a
			countdown timer. If <span lang="ja">ば</span>,
			<span lang="ja">ぱ</span>, and <span lang="ja">は</span>
			keep getting mixed up, slow down and practice those first.
			There's no prize for finishing quickly and forgetting
			everything the next morning!
		</p>

		<h3>What Do I Need to Do Before Moving On?</h3>

		<ul class="list-clean">
			<li>
				<strong>Recognize the New Forms.</strong>
				I should be able to identify all 25 additional forms
				and read their sounds correctly, even when they're
				mixed with basic Hiragana in random order.
			</li>
			<li>
				<strong>Spot the Difference.</strong>
				I shouldn't confuse a basic character with its
				modified form. For example:
				<span lang="ja">さ / ざ</span>,
				<span lang="ja">は / ば</span>, and
				<span lang="ja">は / ぱ</span>.
				Those little marks aren't decoration!
			</li>
			<li>
				<strong>Write from Memory.</strong>
				Given a sound, I should be able to write the right
				character without checking the chart or cheatsheet.
			</li>
			<li>
				<strong>Read Words Without Getting Stuck.</strong>
				I should be able to read familiar words and short
				passages containing both basic and modified Hiragana
				without constantly stopping to figure out each character.
			</li>
			<li>
				<strong>Pass the Quiz.</strong>
				At least 25 out of 30 questions correct.
				If I miss some, I'll review the mistakes and try again
				instead of pretending they don't exist.
			</li>
		</ul>

		<p>
			And remember, reading smoothly doesn't mean racing
			through every word. I just want to stop hesitating
			over individual characters. Understanding every word
			is another skill that we'll keep building over time.
		</p>

		<p>
			<strong>One more thing:</strong>
			M2 is all about dakuten and handakuten.
			We'll get to other combinations and sound rules in M3,
			so let's not throw everything into one giant learning soup.
		</p>

		<p>
			Need a quick refresher? Check out the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php">
				Hiragana chart →
			</a>
		</p>

		<p class="spaced">
			And that's M2 done! Keep an eye on those tiny marks,
			give the tricky characters some extra practice,
			and I'll see you in the final Hiragana milestone.
			We're getting there!
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
