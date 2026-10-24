<?php
require_once __DIR__ . '/../../../config.php';

$page_title       = "Hiragana Chart - Learn Japanese";
$page_heading     = "HIRAGANA CHART";
$page_subtitle    = "Page for showing and explaining all 46 basic Hiragana (Gojuon) and additional 25 (Dakuten & Handakuten)";
$page_description = "The target for this page is for knowing the shape, pronunciation and memorizing 46 Hiragana and additional 25 (Dakuten & Handakuten).";
$current_page     = "hiragana-chart";

include __DIR__ . '/../../../partials/head.php';
include __DIR__ . '/../../../partials/header.php';
?>

<main>
	<div class="content-stack">
		<p>So, I'll go straight to the point.</p>

		<h2 class="section-title">Gojūon — 46 Basic Hiragana</h2>
		<p>
			The gojūon ("fifty sounds") is the foundation. It's organized by
			columns (vowels: a, i, u, e, o) and rows (consonants), read
			left-to-right, top-to-bottom.
		</p>

		<table class="kana-table">
			<caption>46 basic hiragana · Hepburn romaji</caption>
			<thead>
				<tr>
					<th scope="col">∅</th>
					<th scope="col">a</th>
					<th scope="col">i</th>
					<th scope="col">u</th>
					<th scope="col">e</th>
					<th scope="col">o</th>
				</tr>
			</thead>
			<tbody>
				<!-- Vowels -->
				<tr>
					<th scope="row">∅</th>
					<td><span class="kana" lang="ja">あ</span><span class="romaji">a</span></td>
					<td><span class="kana" lang="ja">い</span><span class="romaji">i</span></td>
					<td><span class="kana" lang="ja">う</span><span class="romaji">u</span></td>
					<td><span class="kana" lang="ja">え</span><span class="romaji">e</span></td>
					<td><span class="kana" lang="ja">お</span><span class="romaji">o</span></td>
				</tr>
				<!-- K -->
				<tr>
					<th scope="row">k</th>
					<td><span class="kana" lang="ja">か</span><span class="romaji">ka</span></td>
					<td><span class="kana" lang="ja">き</span><span class="romaji">ki</span></td>
					<td><span class="kana" lang="ja">く</span><span class="romaji">ku</span></td>
					<td><span class="kana" lang="ja">け</span><span class="romaji">ke</span></td>
					<td><span class="kana" lang="ja">こ</span><span class="romaji">ko</span></td>
				</tr>
				<!-- S -->
				<tr>
					<th scope="row">s</th>
					<td><span class="kana" lang="ja">さ</span><span class="romaji">sa</span></td>
					<td><span class="kana" lang="ja">し</span><span class="romaji">shi</span></td>
					<td><span class="kana" lang="ja">す</span><span class="romaji">su</span></td>
					<td><span class="kana" lang="ja">せ</span><span class="romaji">se</span></td>
					<td><span class="kana" lang="ja">そ</span><span class="romaji">so</span></td>
				</tr>
				<!-- T -->
				<tr>
					<th scope="row">t</th>
					<td><span class="kana" lang="ja">た</span><span class="romaji">ta</span></td>
					<td><span class="kana" lang="ja">ち</span><span class="romaji">chi</span></td>
					<td><span class="kana" lang="ja">つ</span><span class="romaji">tsu</span></td>
					<td><span class="kana" lang="ja">て</span><span class="romaji">te</span></td>
					<td><span class="kana" lang="ja">と</span><span class="romaji">to</span></td>
				</tr>
				<!-- N -->
				<tr>
					<th scope="row">n</th>
					<td><span class="kana" lang="ja">な</span><span class="romaji">na</span></td>
					<td><span class="kana" lang="ja">に</span><span class="romaji">ni</span></td>
					<td><span class="kana" lang="ja">ぬ</span><span class="romaji">nu</span></td>
					<td><span class="kana" lang="ja">ね</span><span class="romaji">ne</span></td>
					<td><span class="kana" lang="ja">の</span><span class="romaji">no</span></td>
				</tr>
				<!-- H -->
				<tr>
					<th scope="row">h</th>
					<td><span class="kana" lang="ja">は</span><span class="romaji">ha</span></td>
					<td><span class="kana" lang="ja">ひ</span><span class="romaji">hi</span></td>
					<td><span class="kana" lang="ja">ふ</span><span class="romaji">fu</span></td>
					<td><span class="kana" lang="ja">へ</span><span class="romaji">he</span></td>
					<td><span class="kana" lang="ja">ほ</span><span class="romaji">ho</span></td>
				</tr>
				<!-- M -->
				<tr>
					<th scope="row">m</th>
					<td><span class="kana" lang="ja">ま</span><span class="romaji">ma</span></td>
					<td><span class="kana" lang="ja">み</span><span class="romaji">mi</span></td>
					<td><span class="kana" lang="ja">む</span><span class="romaji">mu</span></td>
					<td><span class="kana" lang="ja">め</span><span class="romaji">me</span></td>
					<td><span class="kana" lang="ja">も</span><span class="romaji">mo</span></td>
				</tr>
				<!-- Y (3 real + 2 empty) -->
				<tr>
					<th scope="row">y</th>
					<td><span class="kana" lang="ja">や</span><span class="romaji">ya</span></td>
					<td class="empty">—</td>
					<td><span class="kana" lang="ja">ゆ</span><span class="romaji">yu</span></td>
					<td class="empty">—</td>
					<td><span class="kana" lang="ja">よ</span><span class="romaji">yo</span></td>
				</tr>
				<!-- R -->
				<tr>
					<th scope="row">r</th>
					<td><span class="kana" lang="ja">ら</span><span class="romaji">ra</span></td>
					<td><span class="kana" lang="ja">り</span><span class="romaji">ri</span></td>
					<td><span class="kana" lang="ja">る</span><span class="romaji">ru</span></td>
					<td><span class="kana" lang="ja">れ</span><span class="romaji">re</span></td>
					<td><span class="kana" lang="ja">ろ</span><span class="romaji">ro</span></td>
				</tr>
				<!-- W (2 real + 3 empty) -->
				<tr>
					<th scope="row">w</th>
					<td><span class="kana" lang="ja">わ</span><span class="romaji">wa</span></td>
					<td class="empty">—</td>
					<td class="empty">—</td>
					<td class="empty">—</td>
					<td><span class="kana" lang="ja">を</span><span class="romaji">o (wo)</span></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th scope="row">n</th>
					<td colspan="5" class="standalone">
						<span class="kana" lang="ja">ん</span>
						<span class="romaji">n</span>
					</td>
				</tr>
			</tfoot>
		</table>

		<h2 class="section-title">Dakuten &amp; Handakuten — 25 Additional</h2>
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
					<th scope="col">∅</th>
					<th scope="col">a</th>
					<th scope="col">i</th>
					<th scope="col">u</th>
					<th scope="col">e</th>
					<th scope="col">o</th>
				</tr>
			</thead>
			<tbody>
				<!-- G (dakuten) -->
				<tr>
					<th scope="row">g</th>
					<td><span class="kana" lang="ja">が</span><span class="romaji">ga</span></td>
					<td><span class="kana" lang="ja">ぎ</span><span class="romaji">gi</span></td>
					<td><span class="kana" lang="ja">ぐ</span><span class="romaji">gu</span></td>
					<td><span class="kana" lang="ja">げ</span><span class="romaji">ge</span></td>
					<td><span class="kana" lang="ja">ご</span><span class="romaji">go</span></td>
				</tr>
				<!-- Z (dakuten) -->
				<tr>
					<th scope="row">z</th>
					<td><span class="kana" lang="ja">ざ</span><span class="romaji">za</span></td>
					<td><span class="kana" lang="ja">じ</span><span class="romaji">ji</span></td>
					<td><span class="kana" lang="ja">ず</span><span class="romaji">zu</span></td>
					<td><span class="kana" lang="ja">ぜ</span><span class="romaji">ze</span></td>
					<td><span class="kana" lang="ja">ぞ</span><span class="romaji">zo</span></td>
				</tr>
				<!-- D (dakuten) -->
				<tr>
					<th scope="row">d</th>
					<td><span class="kana" lang="ja">だ</span><span class="romaji">da</span></td>
					<td><span class="kana" lang="ja">ぢ</span><span class="romaji">ji</span></td>
					<td><span class="kana" lang="ja">づ</span><span class="romaji">zu</span></td>
					<td><span class="kana" lang="ja">で</span><span class="romaji">de</span></td>
					<td><span class="kana" lang="ja">ど</span><span class="romaji">do</span></td>
				</tr>
				<!-- B (dakuten) -->
				<tr>
					<th scope="row">b</th>
					<td><span class="kana" lang="ja">ば</span><span class="romaji">ba</span></td>
					<td><span class="kana" lang="ja">び</span><span class="romaji">bi</span></td>
					<td><span class="kana" lang="ja">ぶ</span><span class="romaji">bu</span></td>
					<td><span class="kana" lang="ja">べ</span><span class="romaji">be</span></td>
					<td><span class="kana" lang="ja">ぼ</span><span class="romaji">bo</span></td>
				</tr>
				<!-- P (handakuten) -->
				<tr>
					<th scope="row">p</th>
					<td><span class="kana" lang="ja">ぱ</span><span class="romaji">pa</span></td>
					<td><span class="kana" lang="ja">ぴ</span><span class="romaji">pi</span></td>
					<td><span class="kana" lang="ja">ぷ</span><span class="romaji">pu</span></td>
					<td><span class="kana" lang="ja">ぺ</span><span class="romaji">pe</span></td>
					<td><span class="kana" lang="ja">ぽ</span><span class="romaji">po</span></td>
				</tr>
			</tbody>
		</table>

		<h2 class="section-title">Notes</h2>
		<ul class="schedule">
			<li><strong>し</strong> is <em>shi</em>, not "si".</li>
			<li><strong>ち</strong> is <em>chi</em>, not "ti".</li>
			<li><strong>つ</strong> is <em>tsu</em>, not "tu".</li>
			<li><strong>ふ</strong> is <em>fu</em>, not "hu".</li>
			<li><strong>を</strong> sounds like お (<em>o</em>) and is used only as a grammatical particle.</li>
			<li><strong>ん</strong> is a standalone nasal consonant — it never begins a word.</li>
			<li><strong>ぢ</strong> and <strong>づ</strong> have the same sound as じ and ず in modern Japanese.</li>
		</ul>
	</div>
</main>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
