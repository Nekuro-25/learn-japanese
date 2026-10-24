<?php
require_once __DIR__ . '/../../config.php';

$page_title       = "Kana Introduction - Learn Japanese";
$page_heading     = "KANA INTRODUCTION";
$page_subtitle    = "The Three Japanese Writing Systems";
$page_description = "An introduction to Hiragana, Katakana, Kanji, and Furigana.";
$current_page     = "kana-intro";

include __DIR__ . '/../../partials/head.php';
include __DIR__ . '/../../partials/header.php';
include __DIR__ . '/../../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			Haha, welcome everyone — Bagus still here. Based on my earlier
			point that you need to learn the letters first so you can
			read, I still believe that's step one. So let me introduce
			you to...
		</p>

		<h2 class="section-title">Japanese Writing Systems</h2>
		<p>
			Hip hip hooray XD — okay, back to the topic. Japanese uses
			three main writing systems: <strong>Hiragana</strong>,
			<strong>Katakana</strong>, and <strong>Kanji</strong>. Together,
			Hiragana and Katakana are called <strong>Kana</strong>. There's
			also <strong>Furigana</strong>, but that's not a separate
			system — it's a reading aid placed above or beside kanji to
			show pronunciation. I'll explain each one below.
		</p>

		<h3 class="subsection-title">1. Hiragana</h3>
		<p>
			Let's start with Hiragana, the foundation of Japanese writing.
			It's used for native Japanese words, grammatical particles,
			okurigana (verb and adjective endings), and words that aren't
			usually written in kanji. With its rounded strokes and flowing
			curves, Hiragana is relatively easy to get used to. There are
			46 basic Hiragana characters. Think that's a lot? Nah, bro.
		</p>

		<h3 class="subsection-title">2. Katakana</h3>
		<p>
			Please don't confuse Katakana with Katana (the Japanese sword)
			— BUT the two do share a certain vibe. If Hiragana is rounded
			and flowing, Katakana is all about SHARPNESS. It looks like
			characters that could slash something. Katakana is mainly used
			for loanwords, foreign names, onomatopoeia, and emphasis — it's
			the writing system's way of integrating foreign vocabulary
			while still respecting Japanese phonology.
		</p>

		<h3 class="subsection-title">3. Kanji</h3>
		<p>
			I... don't have a lot of opinions about this one. Kanji
			basically carries all the hard parts of Hiragana and Katakana
			combined: rounded corners, sharp turns, and — how do I say
			it? — a lot of strokes on paper. The reason is obvious: kanji
			originally came from Chinese characters and were adapted for
			Japanese. Their readings and usage follow Japanese conventions,
			not Chinese.
		</p>

		<h3 class="subsection-title">Bonus: Furigana</h3>
		<p>
			Furigana isn't a separate writing system — they're small kana
			characters printed above or beside kanji to show how to
			pronounce them. You'll see them a lot in manga, children's
			books, and learning materials.
		</p>

		<p class="spaced">
			That's it for the introduction. For the full chart, see the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php">Hiragana chart</a>.
		</p>

		<?php include __DIR__ . '/../../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
