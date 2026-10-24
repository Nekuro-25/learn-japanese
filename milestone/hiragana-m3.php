<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 3: Advanced Hiragana - Learn Japanese";
$page_heading     = "MILESTONE 3: ADVANCED HIRAGANA";
$page_subtitle    = "Mastering Youon, Sokuon, Chouon, and Hatsuon";
$page_description = "The final milestone for Hiragana: combinations, small tsu, long vowels, and the nasal.";
$current_page     = "m3";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			We made it — the last milestone for Hiragana. The 71 characters
			from M1 and M2 aren't the whole story, though. There are four
			more concepts I need to learn on top of them: <strong>Youon</strong>,
			<strong>Sokuon</strong>, <strong>Chouon</strong>, and
			<strong>Hatsuon</strong>. None of these are new characters —
			they're just rules for combining or extending the kana I already
			know.
		</p>

		<h2 class="subsection-title">1. Youon (<span lang="ja">拗音</span>) — Combining Kana</h2>
		<p>
			Youon happens when a kana from the <span lang="ja">い</span>-row
			(<span lang="ja">き, し, ち, に, ひ, み, り</span>, and their
			dakuten versions) is combined with a <strong>small</strong>
			<span lang="ja">ゃ, ゅ, or ょ</span>. The small kana is written
			smaller than usual — that's the signal. The result is one
			combined sound, not two.
		</p>
		<p>
			For example: <span lang="ja">き</span> + small
			<span lang="ja">ゃ</span> = <span lang="ja">きゃ</span>
			(<em>kya</em>), not "kiya".
		</p>
		<ul class="list-clean">
			<li><strong lang="ja">きゃ / きゅ / きょ</strong> — kya / kyu / kyo</li>
			<li><strong lang="ja">しゃ / しゅ / しょ</strong> — sha / shu / sho</li>
			<li><strong lang="ja">ちゃ / ちゅ / ちょ</strong> — cha / chu / cho</li>
			<li><strong lang="ja">にゃ / にゅ / にょ</strong> — nya / nyu / nyo</li>
			<li><strong lang="ja">ひゃ / ひゅ / ひょ</strong> — hya / hyu / hyo</li>
			<li><strong lang="ja">みゃ / みゅ / みょ</strong> — mya / myu / myo</li>
			<li><strong lang="ja">りゃ / りゅ / りょ</strong> — rya / ryu / ryo</li>
			<li>And the voiced versions: <strong lang="ja">ぎゃ, じゃ, びゃ, ぴゃ</strong>, etc.</li>
		</ul>

		<p>
			For the full combination grid, see the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php#youon">Youon table in the Hiragana chart →</a>.
		</p>

		<h2 class="subsection-title">2. Sokuon (<span lang="ja">促音</span>) — The Small <span lang="ja">っ</span></h2>
		<p>
			Sokuon is the <strong>small <span lang="ja">っ</span></strong>
			(small tsu). It's not pronounced "tsu" — it represents a short
			pause, then doubles the consonant that comes after it. Think of
			it as one beat of silence before the next sound.
		</p>
		<ul class="list-clean">
			<li><strong lang="ja">きって</strong> — <em>kitte</em> (stamp) — doubles the t</li>
			<li><strong lang="ja">がっこう</strong> — <em>gakkou</em> (school) — doubles the k</li>
			<li><strong lang="ja">ちょっと</strong> — <em>chotto</em> (a little) — doubles the t</li>
			<li><strong lang="ja">きっぷ</strong> — <em>kippu</em> (ticket) — doubles the p</li>
		</ul>
		<p>
			Two details: <span lang="ja">っ</span> is always smaller than
			the regular <span lang="ja">つ</span>, and it never appears at
			the start of a word.
		</p>

		<h2 class="subsection-title">3. Chouon (<span lang="ja">長音</span>) — Long Vowels</h2>
		<p>
			Chouon means "long vowel" — a vowel held for <strong>two
			beats</strong> instead of one. In Hiragana, this is usually
			written with an extra vowel after the original one. It's the
			number one thing that makes a word sound "wrong" if I miss it.
		</p>
		<ul class="list-clean">
			<li><strong lang="ja">おかあさん</strong> — <em>okaasan</em> (mother), not "okasan"</li>
			<li><strong lang="ja">おにいさん</strong> — <em>oniisan</em> (older brother)</li>
			<li><strong lang="ja">おとうさん</strong> — <em>otousan</em> (father) — <span lang="ja">おう</span> = long "ō"</li>
			<li><strong lang="ja">おおきい</strong> — <em>ookii</em> (big) — <span lang="ja">おお</span> = long "ō" too</li>
			<li><strong lang="ja">せんせい</strong> — <em>sensei</em> (teacher) — <span lang="ja">せい</span> = long "ē"</li>
			<li><strong lang="ja">がくせい</strong> — <em>gakusei</em> (student)</li>
		</ul>
		<p>
			Note: <span lang="ja">おう</span> and <span lang="ja">おお</span>
			both become a long "ō". Katakana handles long vowels differently
			— but that's a Katakana problem for later.
		</p>

		<h2 class="subsection-title">4. Hatsuon (<span lang="ja">撥音</span>) — The Standalone <span lang="ja">ん</span></h2>
		<p>
			Hatsuon is just <span lang="ja">ん</span> — the "n" character I
			already learned. It gets its own spot because its pronunciation
			<strong>changes depending on what comes after it</strong>, and
			it's the only Hiragana that never starts a word.
		</p>
		<ul class="list-clean">
			<li><strong lang="ja">しんぶん</strong> — <em>shinbun</em> (newspaper) — sounds like "shimbun"</li>
			<li><strong lang="ja">かんたん</strong> — <em>kantan</em> (simple) — stays "n"</li>
			<li><strong lang="ja">せんせい</strong> — <em>sensei</em> (teacher) — clean nasal "n"</li>
			<li><strong lang="ja">ほんや</strong> — <em>hon'ya</em> (bookstore) — separated "n-ya"</li>
		</ul>
		<p>
			For now I don't need to master the assimilation rules — just
			know that <span lang="ja">ん</span> is flexible and never starts
			a word.
		</p>

		<h2 class="subsection-title">5. Quick Self-Test</h2>
		<p>
			Read these words without looking at the romaji first:
		</p>
		<ul class="list-clean">
			<li><span lang="ja">きょう</span> — kyō (today)</li>
			<li><span lang="ja">がっこう</span> — gakkou (school)</li>
			<li><span lang="ja">せんせい</span> — sensei (teacher)</li>
			<li><span lang="ja">しんぶん</span> — shinbun (newspaper)</li>
			<li><span lang="ja">おかあさん</span> — okaasan (mother)</li>
		</ul>
		<p>
			If I can read all five smoothly, I can officially say: Hiragana
			mastered. Next stop is Katakana — but that's a different
			milestone.
		</p>

		<p class="spaced">
			Okay, that's it for the third milestone — goodbye.
		</p>

		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
