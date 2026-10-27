<?php
$kana = require __DIR__ . '/../../../../data/kana.php';

$vowels        = ['a', 'i', 'u', 'e', 'o'];
$youon_vowels  = ['a', 'u', 'o'];

$grouped     = ['gojuon' => [], 'dakuten' => [], 'handakuten' => []];
$standalone  = [];

foreach ($kana as [$symbol, $romaji, $category, $row, $vowel]) {
	if ($vowel === '') {
		$standalone[] = ['symbol' => $symbol, 'romaji' => $romaji];
		continue;
	}
	$grouped[$category][$row][$vowel] = ['symbol' => $symbol, 'romaji' => $romaji];
}

$youon = [
	'き' => ['a' => ['きゃ', 'kya'], 'u' => ['きゅ', 'kyu'], 'o' => ['きょ', 'kyo']],
	'し' => ['a' => ['しゃ', 'sha'], 'u' => ['しゅ', 'shu'], 'o' => ['しょ', 'sho']],
	'ち' => ['a' => ['ちゃ', 'cha'], 'u' => ['ちゅ', 'chu'], 'o' => ['ちょ', 'cho']],
	'に' => ['a' => ['にゃ', 'nya'], 'u' => ['にゅ', 'nyu'], 'o' => ['にょ', 'nyo']],
	'ひ' => ['a' => ['ひゃ', 'hya'], 'u' => ['ひゅ', 'hyu'], 'o' => ['ひょ', 'hyo']],
	'み' => ['a' => ['みゃ', 'mya'], 'u' => ['みゅ', 'myu'], 'o' => ['みょ', 'myo']],
	'り' => ['a' => ['りゃ', 'rya'], 'u' => ['りゅ', 'ryu'], 'o' => ['りょ', 'ryo']],
	'ぎ' => ['a' => ['ぎゃ', 'gya'], 'u' => ['ぎゅ', 'gyu'], 'o' => ['ぎょ', 'gyo']],
	'じ' => ['a' => ['じゃ', 'ja'],  'u' => ['じゅ', 'ju'],  'o' => ['じょ', 'jo']],
	'び' => ['a' => ['びゃ', 'bya'], 'u' => ['びゅ', 'byu'], 'o' => ['びょ', 'byo']],
	'ぴ' => ['a' => ['ぴゃ', 'pya'], 'u' => ['ぴゅ', 'pyu'], 'o' => ['ぴょ', 'pyo']],
];
?>
<p>So, I'll go straight to the point.</p>

<h2>Gojūon — 46 Basic Hiragana</h2>
<p>
	The gojūon ("fifty sounds") is the foundation. It's organized by
	columns (vowels: a, i, u, e, o) and rows (consonants), read
	left-to-right, top-to-bottom.
</p>

<table class="kana-table">
	<caption>46 basic hiragana · Hepburn romaji · Columns are vowels, rows are consonants</caption>
	<thead>
		<tr>
			<th scope="col" aria-label="No consonant">—</th>
			<?php foreach ($vowels as $v): ?>
				<th scope="col"><?= e($v) ?></th>
			<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($grouped['gojuon'] as $rowLetter => $row): ?>
			<tr>
				<th scope="row"><?= e($rowLetter) ?></th>
				<?php foreach ($vowels as $v): ?>
					<td>
						<?php if (isset($row[$v])): ?>
							<span class="kana" lang="ja"><?= e($row[$v]['symbol']) ?></span>
							<span class="romaji"><?= e($row[$v]['romaji']) ?></span>
						<?php else: ?>
							<span class="empty" aria-hidden="true">—</span>
						<?php endif; ?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</tbody>
	<?php if (!empty($standalone)): ?>
		<tbody class="standalone-group">
			<?php foreach ($standalone as $item): ?>
				<tr>
					<th scope="row">n</th>
					<td colspan="5" class="standalone">
						<span class="kana" lang="ja"><?= e($item['symbol']) ?></span>
						<span class="romaji"><?= e($item['romaji']) ?></span>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	<?php endif; ?>
</table>

<h2>Dakuten &amp; Handakuten — 25 Additional</h2>
<p>
	<strong>Dakuten</strong> (two small strokes ゛) and
	<strong>handakuten</strong> (small circle ゜) are added to the
	top-right corner of certain kana to change their sound. There are
	20 dakuten and 5 handakuten.
</p>

<table class="kana-table">
	<caption>25 additional hiragana · Hepburn romaji</caption>
	<thead>
		<tr>
			<th scope="col" aria-label="No consonant">—</th>
			<?php foreach ($vowels as $v): ?>
				<th scope="col"><?= e($v) ?></th>
			<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach (['dakuten', 'handakuten'] as $cat): ?>
			<?php foreach ($grouped[$cat] as $rowLetter => $row): ?>
				<tr>
					<th scope="row"><?= e($rowLetter) ?></th>
					<?php foreach ($vowels as $v): ?>
						<td>
							<?php if (isset($row[$v])): ?>
								<span class="kana" lang="ja"><?= e($row[$v]['symbol']) ?></span>
								<span class="romaji"><?= e($row[$v]['romaji']) ?></span>
							<?php else: ?>
								<span class="empty" aria-hidden="true">—</span>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</tbody>
</table>

<h2 id="youon">Youon — Combination Kana</h2>
<p>
	<strong>Youon</strong> combines a kana from the
	<span lang="ja">い</span>-row with a <strong>small</strong>
	<span lang="ja">ゃ</span>, <span lang="ja">ゅ</span>, or
	<span lang="ja">ょ</span> to make one combined sound. There is no
	<em>i</em> or <em>e</em> form — only <em>a</em>, <em>u</em>, and
	<em>o</em>.
</p>

<table class="kana-table">
	<caption>33 youon combinations (11 base kana × 3 vowels) · Hepburn romaji</caption>
	<thead>
		<tr>
			<th scope="col" aria-label="Base kana">—</th>
			<?php foreach ($youon_vowels as $v): ?>
				<th scope="col"><?= e($v) ?></th>
			<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($youon as $base => $row): ?>
			<tr>
				<th scope="row" lang="ja"><?= e($base) ?></th>
				<?php foreach ($youon_vowels as $v): ?>
					<td>
						<?php if (isset($row[$v])): ?>
							<span class="kana" lang="ja"><?= e($row[$v][0]) ?></span>
							<span class="romaji"><?= e($row[$v][1]) ?></span>
						<?php else: ?>
							<span class="empty" aria-hidden="true">—</span>
						<?php endif; ?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<p>
	For the full explanation and practice, see
	<a href="<?= e($base_url) ?>milestone/hiragana-m3.php">Milestone 3 — Advanced Hiragana →</a>.
</p>

<h2>Notes</h2>
<ul class="list-clean">
	<li><strong>し</strong> is <em>shi</em>, not "si".</li>
	<li><strong>ち</strong> is <em>chi</em>, not "ti".</li>
	<li><strong>つ</strong> is <em>tsu</em>, not "tu".</li>
	<li><strong>ふ</strong> is <em>fu</em>, not "hu".</li>
	<li><strong>を</strong> sounds like お (<em>o</em>) and is used only as a grammatical particle.</li>
	<li><strong>ん</strong> is a standalone nasal consonant — it never begins a word.</li>
	<li><strong>ぢ</strong> and <strong>づ</strong> have the same sound as じ and ず in modern Japanese.</li>
</ul>
