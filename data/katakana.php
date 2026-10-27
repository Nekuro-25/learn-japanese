<?php

/**
 * Data Katakana — mirror dari data/kana.php.
 * Format: [symbol, romaji, category, row, vowel]
 * 'row' = konsonan (∅ untuk vokal).
 * 'vowel' = '' artinya standalone (ン, tidak punya pasangan vokal).
 */
return [
	// ─── Gojūon (46) ─────────────────────────────────────────
	['ア', 'a',   'gojuon', '∅', 'a'],
	['イ', 'i',   'gojuon', '∅', 'i'],
	['ウ', 'u',   'gojuon', '∅', 'u'],
	['エ', 'e',   'gojuon', '∅', 'e'],
	['オ', 'o',   'gojuon', '∅', 'o'],

	['カ', 'ka',  'gojuon', 'k', 'a'],
	['キ', 'ki',  'gojuon', 'k', 'i'],
	['ク', 'ku',  'gojuon', 'k', 'u'],
	['ケ', 'ke',  'gojuon', 'k', 'e'],
	['コ', 'ko',  'gojuon', 'k', 'o'],

	['サ', 'sa',  'gojuon', 's', 'a'],
	['シ', 'shi', 'gojuon', 's', 'i'],
	['ス', 'su',  'gojuon', 's', 'u'],
	['セ', 'se',  'gojuon', 's', 'e'],
	['ソ', 'so',  'gojuon', 's', 'o'],

	['タ', 'ta',  'gojuon', 't', 'a'],
	['チ', 'chi', 'gojuon', 't', 'i'],
	['ツ', 'tsu', 'gojuon', 't', 'u'],
	['テ', 'te',  'gojuon', 't', 'e'],
	['ト', 'to',  'gojuon', 't', 'o'],

	['ナ', 'na',  'gojuon', 'n', 'a'],
	['ニ', 'ni',  'gojuon', 'n', 'i'],
	['ヌ', 'nu',  'gojuon', 'n', 'u'],
	['ネ', 'ne',  'gojuon', 'n', 'e'],
	['ノ', 'no',  'gojuon', 'n', 'o'],

	['ハ', 'ha',  'gojuon', 'h', 'a'],
	['ヒ', 'hi',  'gojuon', 'h', 'i'],
	['フ', 'fu',  'gojuon', 'h', 'u'],
	['ヘ', 'he',  'gojuon', 'h', 'e'],
	['ホ', 'ho',  'gojuon', 'h', 'o'],

	['マ', 'ma',  'gojuon', 'm', 'a'],
	['ミ', 'mi',  'gojuon', 'm', 'i'],
	['ム', 'mu',  'gojuon', 'm', 'u'],
	['メ', 'me',  'gojuon', 'm', 'e'],
	['モ', 'mo',  'gojuon', 'm', 'o'],

	['ヤ', 'ya',  'gojuon', 'y', 'a'],
	['ユ', 'yu',  'gojuon', 'y', 'u'],
	['ヨ', 'yo',  'gojuon', 'y', 'o'],

	['ラ', 'ra',  'gojuon', 'r', 'a'],
	['リ', 'ri',  'gojuon', 'r', 'i'],
	['ル', 'ru',  'gojuon', 'r', 'u'],
	['レ', 're',  'gojuon', 'r', 'e'],
	['ロ', 'ro',  'gojuon', 'r', 'o'],

	['ワ', 'wa',  'gojuon', 'w', 'a'],
	['ヲ', 'o',   'gojuon', 'w', 'o'],

	['ン', 'n',   'gojuon', 'n', ''],   // standalone

	// ─── Dakuten (20) ───────────────────────────────────────
	['ガ', 'ga',  'dakuten', 'g', 'a'],
	['ギ', 'gi',  'dakuten', 'g', 'i'],
	['グ', 'gu',  'dakuten', 'g', 'u'],
	['ゲ', 'ge',  'dakuten', 'g', 'e'],
	['ゴ', 'go',  'dakuten', 'g', 'o'],

	['ザ', 'za',  'dakuten', 'z', 'a'],
	['ジ', 'ji',  'dakuten', 'z', 'i'],
	['ズ', 'zu',  'dakuten', 'z', 'u'],
	['ゼ', 'ze',  'dakuten', 'z', 'e'],
	['ゾ', 'zo',  'dakuten', 'z', 'o'],

	['ダ', 'da',  'dakuten', 'd', 'a'],
	['ヂ', 'ji',  'dakuten', 'd', 'i'],
	['ヅ', 'zu',  'dakuten', 'd', 'u'],
	['デ', 'de',  'dakuten', 'd', 'e'],
	['ド', 'do',  'dakuten', 'd', 'o'],

	['バ', 'ba',  'dakuten', 'b', 'a'],
	['ビ', 'bi',  'dakuten', 'b', 'i'],
	['ブ', 'bu',  'dakuten', 'b', 'u'],
	['ベ', 'be',  'dakuten', 'b', 'e'],
	['ボ', 'bo',  'dakuten', 'b', 'o'],

	// ─── Handakuten (5) ─────────────────────────────────────
	['パ', 'pa',  'handakuten', 'p', 'a'],
	['ピ', 'pi',  'handakuten', 'p', 'i'],
	['プ', 'pu',  'handakuten', 'p', 'u'],
	['ペ', 'pe',  'handakuten', 'p', 'e'],
	['ポ', 'po',  'handakuten', 'p', 'o'],
];
