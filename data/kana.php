<?php

/**
 * Data kana — sumber tunggal untuk chart, kuis, dan migrasi DB nanti.
 * Format: [symbol, romaji, category, row, vowel]
 * 'row' = konsonan (∅ untuk vokal).
 * 'vowel' = '' artinya standalone (ん, tidak punya pasangan vokal).
 */
return [
	// ─── Gojūon (46) ─────────────────────────────────────────
	['あ', 'a',   'gojuon', '∅', 'a'],
	['い', 'i',   'gojuon', '∅', 'i'],
	['う', 'u',   'gojuon', '∅', 'u'],
	['え', 'e',   'gojuon', '∅', 'e'],
	['お', 'o',   'gojuon', '∅', 'o'],

	['か', 'ka',  'gojuon', 'k', 'a'],
	['き', 'ki',  'gojuon', 'k', 'i'],
	['く', 'ku',  'gojuon', 'k', 'u'],
	['け', 'ke',  'gojuon', 'k', 'e'],
	['こ', 'ko',  'gojuon', 'k', 'o'],

	['さ', 'sa',  'gojuon', 's', 'a'],
	['し', 'shi', 'gojuon', 's', 'i'],
	['す', 'su',  'gojuon', 's', 'u'],
	['せ', 'se',  'gojuon', 's', 'e'],
	['そ', 'so',  'gojuon', 's', 'o'],

	['た', 'ta',  'gojuon', 't', 'a'],
	['ち', 'chi', 'gojuon', 't', 'i'],
	['つ', 'tsu', 'gojuon', 't', 'u'],
	['て', 'te',  'gojuon', 't', 'e'],
	['と', 'to',  'gojuon', 't', 'o'],

	['な', 'na',  'gojuon', 'n', 'a'],
	['に', 'ni',  'gojuon', 'n', 'i'],
	['ぬ', 'nu',  'gojuon', 'n', 'u'],
	['ね', 'ne',  'gojuon', 'n', 'e'],
	['の', 'no',  'gojuon', 'n', 'o'],

	['は', 'ha',  'gojuon', 'h', 'a'],
	['ひ', 'hi',  'gojuon', 'h', 'i'],
	['ふ', 'fu',  'gojuon', 'h', 'u'],
	['へ', 'he',  'gojuon', 'h', 'e'],
	['ほ', 'ho',  'gojuon', 'h', 'o'],

	['ま', 'ma',  'gojuon', 'm', 'a'],
	['み', 'mi',  'gojuon', 'm', 'i'],
	['む', 'mu',  'gojuon', 'm', 'u'],
	['め', 'me',  'gojuon', 'm', 'e'],
	['も', 'mo',  'gojuon', 'm', 'o'],

	['や', 'ya',  'gojuon', 'y', 'a'],
	['ゆ', 'yu',  'gojuon', 'y', 'u'],
	['よ', 'yo',  'gojuon', 'y', 'o'],

	['ら', 'ra',  'gojuon', 'r', 'a'],
	['り', 'ri',  'gojuon', 'r', 'i'],
	['る', 'ru',  'gojuon', 'r', 'u'],
	['れ', 're',  'gojuon', 'r', 'e'],
	['ろ', 'ro',  'gojuon', 'r', 'o'],

	['わ', 'wa',  'gojuon', 'w', 'a'],
	['を', 'o',   'gojuon', 'w', 'o'],

	['ん', 'n',   'gojuon', 'n', ''],   // standalone

	// ─── Dakuten (20) ───────────────────────────────────────
	['が', 'ga',  'dakuten', 'g', 'a'],
	['ぎ', 'gi',  'dakuten', 'g', 'i'],
	['ぐ', 'gu',  'dakuten', 'g', 'u'],
	['げ', 'ge',  'dakuten', 'g', 'e'],
	['ご', 'go',  'dakuten', 'g', 'o'],

	['ざ', 'za',  'dakuten', 'z', 'a'],
	['じ', 'ji',  'dakuten', 'z', 'i'],
	['ず', 'zu',  'dakuten', 'z', 'u'],
	['ぜ', 'ze',  'dakuten', 'z', 'e'],
	['ぞ', 'zo',  'dakuten', 'z', 'o'],

	['だ', 'da',  'dakuten', 'd', 'a'],
	['ぢ', 'ji',  'dakuten', 'd', 'i'],
	['づ', 'zu',  'dakuten', 'd', 'u'],
	['で', 'de',  'dakuten', 'd', 'e'],
	['ど', 'do',  'dakuten', 'd', 'o'],

	['ば', 'ba',  'dakuten', 'b', 'a'],
	['び', 'bi',  'dakuten', 'b', 'i'],
	['ぶ', 'bu',  'dakuten', 'b', 'u'],
	['べ', 'be',  'dakuten', 'b', 'e'],
	['ぼ', 'bo',  'dakuten', 'b', 'o'],

	// ─── Handakuten (5) ─────────────────────────────────────
	['ぱ', 'pa',  'handakuten', 'p', 'a'],
	['ぴ', 'pi',  'handakuten', 'p', 'i'],
	['ぷ', 'pu',  'handakuten', 'p', 'u'],
	['ぺ', 'pe',  'handakuten', 'p', 'e'],
	['ぽ', 'po',  'handakuten', 'p', 'o'],
];
