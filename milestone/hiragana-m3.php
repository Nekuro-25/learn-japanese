<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 3: Hiragana Sound Rules - Learn Japanese";
$page_heading     = "MILESTONE 3: HIRAGANA SOUND RULES";
$page_subtitle    = "Youon, Sokuon, Chouon, and Hatsuon — The Final Hiragana Milestone";
$page_description = "My final Hiragana milestone: learning kana combinations, doubled consonants, long vowels, and the nasal sound.";
$current_page     = "m3";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/breadcrumb.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			We made it — the final Hiragana milestone!
			If you've made it through M1 and M2, you should already
			be familiar with the 46 basic Hiragana characters and
			the 25 additional forms.
			But wait, we're not done just yet.
		</p>

		<p>
			Knowing the characters is one thing.
			Actually knowing how to read them when they appear
			together is another.
			There are four more things I need to get familiar with:
			<strong>Youon</strong>, <strong>Sokuon</strong>,
			<strong>Chouon</strong>, and <strong>Hatsuon</strong>.
			The names might look a little intimidating, but don't worry.
			We'll take them one at a time!
		</p>

		<h2 class="subsection-title">
			1. Youon (<span lang="ja">拗音</span>) — Kana Combinations
		</h2>

		<p>
			Youon happens when certain kana with an <em>i</em> vowel
			sound are combined with a <strong>small</strong>
			<span lang="ja">ゃ</span>, <span lang="ja">ゅ</span>,
			or <span lang="ja">ょ</span>.
			The small kana changes the sound of the combination.
		</p>

		<p>
			For example:
			<span lang="ja">き</span> + small <span lang="ja">ゃ</span>
			= <span lang="ja">きゃ</span> (<em>kya</em>).
			Not <em>kiya</em>!
			That tiny <span lang="ja">ゃ</span> makes a difference.
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
				<strong>Voiced and semi-voiced combinations:</strong>
				<span lang="ja">ぎゃ, じゃ, びゃ, ぴゃ</span>,
				and their corresponding <span lang="ja">ゅ</span>
				and <span lang="ja">ょ</span> combinations.
			</li>
		</ul>

		<p>
			Here's something worth remembering:
			<span lang="ja">きゃ</span> (<em>kya</em>) and
			<span lang="ja">きや</span> (<em>kiya</em>) are not
			read the same way. Small kana combine with the kana
			before them, while regular-sized kana are read separately.
		</p>

		<p>
			Want to see the full combination grid?
			Check the
			<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php#youon">
				Youon table in the Hiragana chart →
			</a>
		</p>

		<h2 class="subsection-title">
			2. Sokuon (<span lang="ja">促音</span>) — The Small
			<span lang="ja">っ</span>
		</h2>

		<p>
			Meet the small <span lang="ja">っ</span>, often called
			small tsu. Here's the important part:
			you don't pronounce it as a separate <em>tsu</em> sound.
			Instead, it marks a doubled consonant that comes next.
		</p>

		<p>
			Think of it as holding the timing briefly before saying
			the following consonant. It's not just a random pause —
			the timing is part of how the word is pronounced.
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">きって</strong> —
				<em>kitte</em> (stamp): double the <em>t</em>.
			</li>
			<li>
				<strong lang="ja">がっこう</strong> —
				<em>gakkou</em> (school): double the <em>k</em>.
			</li>
			<li>
				<strong lang="ja">ちょっと</strong> —
				<em>chotto</em> (a little): double the <em>t</em>.
			</li>
			<li>
				<strong lang="ja">きっぷ</strong> —
				<em>kippu</em> (ticket): double the <em>p</em>.
			</li>
		</ul>

		<p>
			Also, don't mix up small <span lang="ja">っ</span>
			with regular-sized <span lang="ja">つ</span>.
			They look related because they are, but they do
			different jobs. Small <span lang="ja">っ</span>
			generally doesn't appear at the beginning of native
			Japanese words.
		</p>

		<h2 class="subsection-title">
			3. Chouon (<span lang="ja">長音</span>) — Long Vowels
		</h2>

		<p>
			Chouon means a long vowel.
			And yes, how long you pronounce a vowel actually matters
			in Japanese. Cutting it short can make a word sound wrong
			or even change its meaning.
		</p>

		<p>
			A long vowel generally takes two morae instead of one.
			You don't need to memorize that technical term right away,
			but remember this: give the vowel its full length.
			Don't rush it!
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">おかあさん</strong> —
				<em>okaasan</em> (mother): the extra
				<span lang="ja">あ</span> extends the <em>a</em> sound.
			</li>
			<li>
				<strong lang="ja">おにいさん</strong> —
				<em>oniisan</em> (older brother): the extra
				<span lang="ja">い</span> extends the <em>i</em> sound.
			</li>
			<li>
				<strong lang="ja">おとうさん</strong> —
				<em>otousan</em> (father): <span lang="ja">とう</span>
				has a long <em>o</em> sound.
			</li>
			<li>
				<strong lang="ja">おおきい</strong> —
				<em>ookii</em> (big): <span lang="ja">おお</span>
				also has a long <em>o</em> sound.
			</li>
			<li>
				<strong lang="ja">せんせい</strong> —
				<em>sensei</em> (teacher): <span lang="ja">せい</span>
				is commonly pronounced with a long <em>e</em> sound.
			</li>
			<li>
				<strong lang="ja">がくせい</strong> —
				<em>gakusei</em> (student): notice the long <em>e</em>
				sound at the end.
			</li>
		</ul>

		<p>
			One thing that might surprise you:
			<span lang="ja">おう</span> and <span lang="ja">おお</span>
			can both represent a long <em>o</em> sound.
			Similarly, <span lang="ja">えい</span> often represents
			a long <em>e</em> sound.
			The spelling patterns depend on the word, so learn
			the actual spelling instead of relying on one rule
			to solve everything.
		</p>

		<p>
			For now, we're focusing on Hiragana.
			Katakana has its own common way of writing long vowels,
			so we'll save that adventure for later.
		</p>

		<h2 class="subsection-title">
			4. Hatsuon (<span lang="ja">撥音</span>) — The
			<span lang="ja">ん</span> Sound
		</h2>

		<p>
			Remember <span lang="ja">ん</span>?
			Good news: you already learned the character back in M1.
			So why are we talking about it again?
			Because its pronunciation can change slightly depending
			on the sounds around it.
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">しんぶん</strong> —
				<em>shinbun</em> (newspaper): before <em>b</em>,
				the nasal can sound closer to <em>m</em>.
			</li>
			<li>
				<strong lang="ja">かんたん</strong> —
				<em>kantan</em> (simple): notice the nasal before <em>t</em>.
			</li>
			<li>
				<strong lang="ja">せんせい</strong> —
				<em>sensei</em> (teacher): notice the nasal before <em>s</em>.
			</li>
			<li>
				<strong lang="ja">ほんや</strong> —
				<em>hon'ya</em> (bookstore): the apostrophe in romaji
				helps show that the <em>n</em> is separate from <em>ya</em>.
			</li>
		</ul>

		<p>
			Don't worry about memorizing every tiny pronunciation
			variation just yet. For now, learn to recognize
			<span lang="ja">ん</span>, read it naturally in context,
			and avoid accidentally merging it with the following kana.
		</p>

		<p>
			<span lang="ja">ん</span> generally doesn't begin native
			Japanese words. Its sound can vary depending on what comes
			next, but the written character stays the same.
		</p>

		<h3>My Suggested 5-Day Plan</h3>

		<ul class="list-clean">
			<li>
				<strong>Day 1: Youon.</strong>
				Practice combinations with small
				<span lang="ja">ゃ, ゅ, ょ</span>.
				Make sure you can tell the difference between
				<span lang="ja">きゃ</span> and <span lang="ja">きや</span>.
			</li>
			<li>
				<strong>Day 2: Sokuon.</strong>
				Read words with small <span lang="ja">っ</span>.
				Compare words with and without it, and pay attention
				to the doubled consonant.
			</li>
			<li>
				<strong>Day 3: Chouon.</strong>
				Practice reading long vowels without cutting them short.
				Take your time and listen to examples if you have audio
				available.
			</li>
			<li>
				<strong>Day 4: Hatsuon and Review.</strong>
				Practice words with <span lang="ja">ん</span>,
				then mix all four concepts together.
				Don't forget the characters from M1 and M2!
			</li>
			<li>
				<strong>Day 5: Test Time!</strong>
				Take a cumulative quiz covering all three milestones.
				Afterward, practice reading aloud and writing separately.
				Let's see whether the knowledge actually sticks.
			</li>
		</ul>

		<p>
			Five days is just a starting point.
			If long vowels or small <span lang="ja">っ</span>
			are still giving you trouble, spend more time on them.
			There's no point moving on just to discover that the
			same problem keeps following you around!
		</p>

		<h3>What Does "Done with M3" Actually Mean?</h3>

		<ul class="list-clean">
			<li>
				<strong>Youon:</strong>
				I can read common combinations correctly and tell
				the difference between small and regular-sized kana.
			</li>
			<li>
				<strong>Sokuon:</strong>
				I can spot small <span lang="ja">っ</span> and pronounce
				the following consonant with the right timing.
			</li>
			<li>
				<strong>Chouon:</strong>
				I can recognize common long-vowel patterns and avoid
				shortening the vowel when reading.
			</li>
			<li>
				<strong>Hatsuon:</strong>
				I can read words containing <span lang="ja">ん</span>
				and handle it naturally in context.
			</li>
			<li>
				<strong>Reading Practice:</strong>
				I can read familiar words and short, beginner-friendly
				passages that mix material from M1, M2, and M3 without
				constantly stopping to recall every kana's sound.
			</li>
			<li>
				<strong>The Final Quiz:</strong>
				I can answer at least 25 out of 30 questions correctly
				and understand the mistakes I made.
			</li>
		</ul>

		<p>
			And no, reading smoothly doesn't mean reading like a
			speedrunner. Natural pauses are fine!
			The goal is to stop getting stuck on individual kana
			and start reading familiar combinations more naturally.
			Understanding every word is another challenge we'll
			continue working on.
		</p>

		<h3>Quick Self-Test</h3>

		<p>
			Let's put those rules to work.
			Try reading these words without looking at the romaji first.
			Can you spot which sound rule appears in each one?
		</p>

		<ul class="list-clean">
			<li>
				<strong lang="ja">きょう</strong> —
				<em>kyou</em> (today): youon and long vowel.
			</li>
			<li>
				<strong lang="ja">がっこう</strong> —
				<em>gakkou</em> (school): sokuon and long vowel.
			</li>
			<li>
				<strong lang="ja">せんせい</strong> —
				<em>sensei</em> (teacher): hatsuon and long vowel.
			</li>
			<li>
				<strong lang="ja">しんぶん</strong> —
				<em>shinbun</em> (newspaper): hatsuon.
			</li>
			<li>
				<strong lang="ja">おかあさん</strong> —
				<em>okaasan</em> (mother): long vowel.
			</li>
		</ul>

		<p>
			If you can read all five, great — that's a good start!
			But don't declare yourself the Hiragana champion just yet.
			These are only five familiar examples.
			Try some unfamiliar words and mixed practice, too,
			to see whether you can use the rules without memorizing
			every answer beforehand.
		</p>

		<p>
			<strong>One final reminder:</strong>
			Finishing these three milestones means you've covered
			the main Hiragana forms and several important sound rules.
			That's a solid foundation, but Japanese reading doesn't
			end here. Vocabulary, grammar, Kanji, and comprehension
			will take more practice.
		</p>

		<p class="spaced">
			And that's it — the final Hiragana milestone!
			We made it through all three.
			Keep practicing with actual Japanese words, and don't
			be afraid to revisit the earlier milestones when needed.
			Next stop: Katakana. Here we go again!
		</p>

		<?php include __DIR__ . '/../partials/pager.php'; ?>
		<?php include __DIR__ . '/../partials/back-link.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
