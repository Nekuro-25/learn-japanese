<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 3: Hiragana Sound Rules - Learn Japanese";
$page_heading     = "MILESTONE 3: HIRAGANA SOUND RULES";
$page_subtitle    = "Learn Youon, Sokuon, Chouon, and Hatsuon";
$page_description = "A flexible learning plan for reading Hiragana combinations, doubled consonants, long vowels, and the nasal sound.";
$current_page     = "m3";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			We've made it to the third and final Hiragana milestone!
			By now, you should be familiar with the 46 basic Hiragana
			characters and the 25 additional forms covered in the
			first two milestones.
		</p>

		<p>
			However, recognizing individual characters isn't enough
			to read Japanese comfortably. We also need to understand
			how certain kana combine, how consonants are doubled,
			and how long vowels are pronounced.
			This milestone covers four important concepts:
			<strong>Youon</strong>, <strong>Sokuon</strong>,
			<strong>Chouon</strong>, and <strong>Hatsuon</strong>.
		</p>

		<p>
			These concepts don't simply add  four more basic characters
			to memorize. They teach us how to interpret kana combinations
			and pronunciation patterns when reading Japanese.
		</p>

		<h2 class="subsection-title">
			1. Youon (<span lang="ja">拗音</span>) — Combining Kana
		</h2>

		<p>
			Youon is formed by combining a kana ending in the
			<strong>i-vowel sound</strong> with a small
			<span lang="ja">ゃ</span>, <span lang="ja">ゅ</span>,
			or <span lang="ja">ょ</span>.
			The small kana changes how the combination is read.
		</p>

		<p>
			For example, <span lang="ja">き</span> + small
			<span lang="ja">ゃ</span> = <span lang="ja">きゃ</span>
			(<em>kya</em>), not <em>kiya</em>.
			The combination is pronounced as one mora rather than
			two separate morae.
		</p>

		<ul class="list-clean">
			<li><strong lang="ja">きゃ / きゅ / きょ</strong> — kya / kyu / kyo</li>
			<li><strong lang="ja">しゃ / しゅ / しょ</strong> — sha / shu / sho</li>
			<li><strong lang="ja">ちゃ / ちゅ / ちょ</strong> — cha / chu / cho</li>
			<li><strong lang="ja">にゃ / にゅ / にょ</strong> — nya / nyu / nyo</li>
			<li><strong lang="ja">ひゃ / ひゅ / ひょ</strong> — hya / hyu / hyo</li>
			<li><strong lang="ja">みゃ / みゅ / みょ</strong> — mya / myu / myo</li>
			<li><strong lang="ja">りゃ / りゅ / りょ</strong> — rya / ryu / ryo</li>
			<li>
				<strong>Voiced and semi-voiced forms:</strong>
				<span lang="ja">ぎゃ, じゃ, びゃ, ぴゃ</span>,
				and their corresponding <span lang="ja">ゅ</span>
				and <span lang="ja">ょ</span> combinations.
			</li>
		</ul>

		<p>
			Remember that the size of the second kana matters.
			Compare <span lang="ja">きゃ</span> (<em>kya</em>)
			with <span lang="ja">きや</span> (<em>kiya</em>).
			The small <span lang="ja">ゃ</span> combines with the
			preceding kana, while the regular-sized
			<span lang="ja">や</span> is read separately.
		</p>

		<p>
			For the combination grid, see the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php#youon">
				Youon table in the Hiragana chart →
			</a>
		</p>

		<h2 class="subsection-title">
			2. Sokuon (<span lang="ja">促音</span>) — The Small
			<span lang="ja">っ</span>
		</h2>

		<p>
			Sokuon is represented by the small
			<span lang="ja">っ</span>, often called small tsu.
			It isn't pronounced as a separate <em>tsu</em> sound.
			Instead, it marks a doubled or geminated consonant
			that follows it.
		</p>

		<p>
			When reading aloud, hold the timing briefly before
			pronouncing the following consonant. This timing matters:
			<span lang="ja">きて</span> (<em>kite</em>) and
			<span lang="ja">きって</span> (<em>kitte</em>) are
			different words.
		</p>

		<ul class="list-clean">
			<li><strong lang="ja">きって</strong> — <em>kitte</em> (stamp)</li>
			<li><strong lang="ja">がっこう</strong> — <em>gakkou</em> (school)</li>
			<li><strong lang="ja">ちょっと</strong> — <em>chotto</em> (a little)</li>
			<li><strong lang="ja">きっぷ</strong> — <em>kippu</em> (ticket)</li>
		</ul>

		<p>
			Two important details: small
			<span lang="ja">っ</span> is written smaller than
			<span lang="ja">つ</span>, and it generally does not
			appear at the beginning of native Japanese words.
			Pay attention to the consonant that follows it,
			since that determines how the word is read.
		</p>

		<h2 class="subsection-title">
			3. Chouon (<span lang="ja">長音</span>) — Long Vowels
		</h2>

		<p>
			Chouon means a long vowel. In Japanese, vowel length
			can change a word's meaning, so it is important to
			hear and pronounce the full duration.
			A long vowel generally occupies two morae, rather
			than one.
		</p>

		<p>
			In Hiragana, long vowels are commonly written by
			adding another vowel kana. The spelling pattern
			depends on the vowel and the word.
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">おかあさん</strong> —
				<em>okaasan</em> (mother): the <span lang="ja">あ</span>
				extends the preceding <em>a</em> sound.
			</li>
			<li>
				<strong lang="ja">おにいさん</strong> —
				<em>oniisan</em> (older brother): the <span lang="ja">い</span>
				extends the preceding <em>i</em> sound.
			</li>
			<li>
				<strong lang="ja">おとうさん</strong> —
				<em>otousan</em> (father): <span lang="ja">とう</span>
				has a long <em>o</em> sound.
			</li>
			<li>
				<strong lang="ja">おおきい</strong> —
				<em>ookii</em> (big): <span lang="ja">おお</span>
				has a long <em>o</em> sound.
			</li>
			<li>
				<strong lang="ja">せんせい</strong> —
				<em>sensei</em> (teacher): <span lang="ja">せい</span>
				is commonly pronounced with a long <em>e</em> sound.
			</li>
			<li>
				<strong lang="ja">がくせい</strong> —
				<em>gakusei</em> (student): the final <span lang="ja">せい</span>
				is commonly pronounced with a long <em>e</em> sound.
			</li>
		</ul>

		<p>
			Notice that <span lang="ja">おう</span> and
			<span lang="ja">おお</span> can both represent a long
			<em>o</em> sound. Similarly, <span lang="ja">えい</span>
			often represents a long <em>e</em> sound.
			These are useful patterns, but you should learn the
			spelling of each word rather than assuming every word
			follows one universal rule.
		</p>

		<p>
			For now, focus on Hiragana. Katakana has its own
			common long-vowel spelling convention, which we'll
			cover when we study Katakana.
		</p>

		<h2 class="subsection-title">
			4. Hatsuon (<span lang="ja">撥音</span>) — The
			<span lang="ja">ん</span> Sound
		</h2>

		<p>
			Hatsuon refers to the nasal sound represented by
			<span lang="ja">ん</span>. You have already learned
			this character, but its pronunciation can vary
			depending on the surrounding sounds.
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">しんぶん</strong> —
				<em>shinbun</em> (newspaper): before <em>b</em>,
				the nasal may sound closer to <em>m</em>.
			</li>
			<li>
				<strong lang="ja">かんたん</strong> —
				<em>kantan</em> (simple): notice the nasal before
				the <em>t</em> sound.
			</li>
			<li>
				<strong lang="ja">せんせい</strong> —
				<em>sensei</em> (teacher): notice the nasal before
				the <em>s</em> sound.
			</li>
			<li>
				<strong lang="ja">ほんや</strong> —
				<em>hon'ya</em> (bookstore): the apostrophe in
				romaji makes it clear that the <em>n</em> is
				separate from the following <em>ya</em>.
			</li>
		</ul>

		<p>
			You don't need to memorize every phonetic variation yet.
			For now, learn to recognize <span lang="ja">ん</span>,
			pronounce it naturally in context, and distinguish it
			from the following kana when necessary.
		</p>

		<p>
			<span lang="ja">ん</span> generally does not begin
			native Japanese words. Its pronunciation can change
			slightly depending on what comes next, but it remains
			the same written kana.
		</p>

		<h3>Suggested 5-Day Learning Plan</h3>

		<ul class="list-clean">
			<li>
				<strong>Day 1: Learn Youon.</strong>
				Practice reading small <span lang="ja">ゃ, ゅ, よ</span>
				combinations and distinguishing them from regular-sized
				kana. Read examples in random order.
			</li>
			<li>
				<strong>Day 2: Learn Sokuon.</strong>
				Compare words with and without small
				<span lang="ja">っ</span>. Practice the timing of
				the doubled consonant by reading words aloud.
			</li>
			<li>
				<strong>Day 3: Learn Chouon.</strong>
				Read words with long vowels and practice keeping
				the vowel long enough. Compare spelling and
				pronunciation rather than relying only on romaji.
			</li>
			<li>
				<strong>Day 4: Learn Hatsuon and Review.</strong>
				Practice words containing <span lang="ja">ん</span>,
				then review all four concepts together with the
				characters from M1 and M2.
			</li>
			<li>
				<strong>Day 5: Test Your Progress.</strong>
				Take a cumulative quiz covering all three milestones.
				Also test reading aloud and writing separately,
				since a multiple-choice score cannot measure every skill.
			</li>
		</ul>

		<p>
			This five-day schedule is a suggested pace, not a deadline.
			Some concepts may take longer than others, especially
			when you're learning to hear the difference between
			short and long sounds. Spend extra time on the areas
			that still cause confusion.
		</p>

		<h3>Criteria for Completing This Milestone</h3>

		<ul class="list-clean">
			<li>
				<strong>Read Youon Correctly:</strong>
				Distinguish combinations such as
				<span lang="ja">きゃ</span> from
				<span lang="ja">きや</span> and read common
				youon combinations accurately.
			</li>
			<li>
				<strong>Recognize Sokuon:</strong>
				Identify small <span lang="ja">っ</span> and
				pronounce words with doubled consonants using
				the correct timing.
			</li>
			<li>
				<strong>Maintain Long Vowels:</strong>
				Read common long-vowel patterns without shortening
				the vowel, and recognize that vowel length matters
				in Japanese pronunciation.
			</li>
			<li>
				<strong>Read Hatsuon in Context:</strong>
				Read words containing <span lang="ja">ん</span>
				and distinguish it from the kana that follows.
			</li>
			<li>
				<strong>Read Mixed Hiragana:</strong>
				Read familiar words and short, beginner-friendly
				passages containing material from M1, M2, and M3
				without repeatedly stopping to recall each kana's sound.
			</li>
			<li>
				<strong>Pass the Cumulative Quiz:</strong>
				Answer at least 25 out of 30 questions correctly.
				Review incorrect answers and retest weak areas.
			</li>
		</ul>

		<p>
			Reading fluency does not mean reading without any pauses.
			The goal is to stop hesitating over individual kana and
			to read familiar combinations more naturally.
			Reading accurately also does not automatically mean
			understanding every word or sentence.
		</p>

		<p>
			<strong>One important note:</strong>
			Completing these three milestones means you've studied
			the main Hiragana forms and several important reading
			patterns. It does not mean you've mastered all Japanese
			reading. Continue practicing with vocabulary, sentences,
			and beginner-friendly passages to build speed and
			comprehension over time.
		</p>

		<h3>Quick Self-Test</h3>

		<p>
			Try reading these words without looking at the romaji.
			Check whether you can identify the special sound patterns
			in each word.
		</p>

		<ul class="list-clean">
			<li><strong lang="ja">きょう</strong> — <em>kyou</em> (today): youon and long vowel</li>
			<li><strong lang="ja">がっこう</strong> — <em>gakkou</em> (school): sokuon and long vowel</li>
			<li><strong lang="ja">せんせい</strong> — <em>sensei</em> (teacher): hatsuon and long vowel</li>
			<li><strong lang="ja">しんぶん</strong> — <em>shinbun</em> (newspaper): hatsuon</li>
			<li><strong lang="ja">おかあさん</strong> — <em>okaasan</em> (mother): long vowel</li>
		</ul>

		<p>
			These five words are a quick check, not a complete
			mastery test. If you can read them accurately, move on
			to unfamiliar words and mixed practice to see whether
			you can apply the rules beyond memorized examples.
		</p>

		<p class="spaced">
			That's it for the third milestone!
			You've reached the end of the Hiragana learning path.
			Keep practicing with real words and short passages.
			Next stop: Katakana!
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
