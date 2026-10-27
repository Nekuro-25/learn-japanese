<?php
$kana = require __DIR__ . '/../../../../data/katakana.php';

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
	'キ' => ['a' => ['キャ', 'kya'], 'u' => ['キュ', 'kyu'], 'o' => ['キョ', 'kyo']],
	'シ' => ['a' => ['シャ', 'sha'], 'u' => ['シュ', 'shu'], 'o' => ['ショ', 'sho']],
	'チ' => ['a' => ['チャ', 'cha'], 'u' => ['チュ', 'chu'], 'o' => ['チョ', 'cho']],
	'ニ' => ['a' => ['ニャ', 'nya'], 'u' => ['ニュ', 'nyu'], 'o' => ['ニョ', 'nyo']],
	'ヒ' => ['a' => ['ヒャ', 'hya'], 'u' => ['ヒュ', 'hyu'], 'o' => ['ヒョ', 'hyo']],
	'ミ' => ['a' => ['ミャ', 'mya'], 'u' => ['ミュ', 'myu'], 'o' => ['ミョ', 'myo']],
	'リ' => ['a' => ['リャ', 'rya'], 'u' => ['リュ', 'ryu'], 'o' => ['リョ', 'ryo']],
	'ギ' => ['a' => ['ギャ', 'gya'], 'u' => ['ギュ', 'gyu'], 'o' => ['ギョ', 'gyo']],
	'ジ' => ['a' => ['ジャ', 'ja'],  'u' => ['ジュ', 'ju'],  'o' => ['ジョ', 'jo']],
	'ビ' => ['a' => ['ビャ', 'bya'], 'u' => ['ビュ', 'byu'], 'o' => ['ビョ', 'byo']],
	'ピ' => ['a' => ['ピャ', 'pya'], 'u' => ['ピュ', 'pyu'], 'o' => ['ピョ', 'pyo']],
];
?>
<p>The Katakana counterpart to the Hiragana chart. Same sounds, sharper strokes.</p>

<h2>Gojūon — 46 Basic Katakana</h2>
<p>
	The gojūon ("fifty sounds") follows the same grid as Hiragana:
	columns are vowels (a, i, u, e, o), rows are consonants. If you
	already know the Hiragana table, you already know the layout —
	only the shapes change.
</p>

<table class="kana-table">
	<caption>46 basic katakana · Hepburn romaji · Columns are vowels, rows are consonants</caption>
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
	<strong>handakuten</strong> (small circle ゜) work exactly the same
	way as in Hiragana: they modify the base character's consonant.
	There are 20 dakuten and 5 handakuten.
</p>

<table class="kana-table">
	<caption>25 additional katakana · Hepburn romaji</caption>
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
	<span lang="ja">イ</span>-row with a <strong>small</strong>
	<span lang="ja">ャ</span>, <span lang="ja">ュ</span>, or
	<span lang="ja">ョ</span> to make one combined sound. Only
	<em>a</em>, <em>u</em>, and <em>o</em> forms exist.
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

<h2>Notes</h2>
<ul class="list-clean">
	<li><strong>シ</strong> is <em>shi</em>, not "si".</li>
	<li><strong>チ</strong> is <em>chi</em>, not "ti".</li>
	<li><strong>ツ</strong> is <em>tsu</em>, not "tu".</li>
	<li><strong>フ</strong> is <em>fu</em>, not "hu".</li>
	<li><strong>ヲ</strong> sounds like オ (<em>o</em>) and is rarely used in modern Japanese.</li>
	<li><strong>ン</strong> is a standalone nasal consonant — it never begins a word.</li>
	<li><strong>ヂ</strong> and <strong>ヅ</strong> have the same sound as ジ and ズ in modern Japanese.</li>
	<li><strong>Long vowels</strong> in Katakana are usually written with <strong>ー</strong> (chōonpu), e.g. コーヒー (<em>kōhī</em>, coffee) — unlike Hiragana, which repeats the vowel kana.</li>
</ul>
