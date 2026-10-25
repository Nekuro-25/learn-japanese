<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 1: Basic Hiragana - Learn Japanese";
$page_heading     = "MILESTONE 1: BASIC HIRAGANA";
$page_subtitle    = "Mastering the 46 Gojūon Letters in 1 Week";
$page_description = "A one-week plan to master the 46 basic hiragana characters.";
$current_page     = "m1";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			Okay, so while I was working, I had a thought:
			"Why using timeset to study? Why don't I set milestones
			so I can actually track how much I've learned?" And boom —
			that's why this page exists.
		</p>
		<p>
			So I want to make three milestones to master Hiragana. I don't
			want too many milestones for one part, so if I feel it's easy,
			I'll go with shorter milestones. Without further ado, let's
			jump into the first milestone!
		</p>

		<h2 class="subsection-title">1. Learn and Master 46 Basic Hiragana (Gojūon)</h2>
		<p>
			I want all of us (including me!) to master the 46 basic
			hiragana in one week. I don't know how yet, but we must.
		</p>
		<ul class="list-clean">
			<li>
				<strong>Day 1–2:</strong> Learn the character group, handshake with the character look, and memorize it.
			</li>
			<li>
				<strong>Day 3–4:</strong> Learn how to to write, from a textbook and from the sound. 
			</li>
			<li>
				<strong>Day 5-6:</strong> Read character combination and Kotoba while keep repeating the hard character.
			</li>
			<li>
				<strong>Day 7:</strong> Time to test your 1 week study, there'll be 30 question, and you need to answer with minimum 25 correct to pass this test.
			</li>
		</ul>
		<p>
			The criteria to pass this milestone is:
		</p> 
		<ul class="list-clean">	
			<li>
				<strong>Accurate and Quick to Knowing the Character:</strong> 
				Knowing the character and read it in under 1 seconds.
			</li>
			<li>
				<strong>Write Character From Your Head:</strong>
				Know how to write the character without looking at your cheatsheet.
			</li>
			<li>
				<strong>Read Combination of Character Fluently:</strong>
				Can read Combination of character or basic conversation fluently (Exception for accent).
			</li>
		</ul>
		<p class="spaced">
			Okay, that's it for the first milestone — goodbye.
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
