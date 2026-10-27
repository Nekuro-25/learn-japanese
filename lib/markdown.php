<?php

/**
 * Markdown parser minimal — cukup untuk kebutuhan proyek ini.
 *
 * Didukung:
 * - heading (#..######)
 * - unordered list (- item)
 * - ordered list (1. item)
 * - fenced code block (```lang)
 * - blockquote (> text)
 * - paragraf
 * - **bold**, *italic*, `inline code`, [teks](url)
 * - raw HTML inline (mis. <span lang="ja">)
 *
 * Tidak didukung: tabel, nested list multi-level, image syntax,
 * reference link, footnote, fenced code block yang berisi baris kosong
 * (gunakan raw <pre><code> untuk kasus itu).
 *
 * URL relatif otomatis di-prefix $base_url; URL absolut
 * (http://, https://, //, #anchor, mailto:) dibiarkan.
 */

function markdown_to_html(string $md, string $base_url = '/'): string
{
	$md = str_replace(["\r\n", "\r"], "\n", trim($md));

	if ($md === '') {
		return '';
	}

	$blocks = preg_split('/\n{2,}/', $md);
	$html   = [];

	foreach ($blocks as $block) {
		$block = trim($block);
		if ($block === '') {
			continue;
		}

		// Heading
		if (preg_match('/^(#{1,6})\s+(.+)$/', $block, $m)) {
			$level = strlen($m[1]);
			$html[] = "<h{$level}>" . inline_md($m[2], $base_url) . "</h{$level}>";
			continue;
		}

		// Fenced code block — HARUS sebelum blockquote & list
		if (preg_match('/^```([a-z]*)\n(.*)\n```$/s', $block, $m)) {
			$lang = $m[1] !== ''
				? ' class="language-' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . '"'
				: '';
			$code = htmlspecialchars($m[2], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
			$html[] = '<pre><code' . $lang . '>' . $code . '</code></pre>';
			continue;
		}

		// Blockquote — parse isi secara rekursif
		if (preg_match('/^>\s?/', $block)) {
			$inner  = preg_replace('/^>\s?/m', '', $block);
			$html[] = '<blockquote>' . markdown_to_html($inner, $base_url) . '</blockquote>';
			continue;
		}

		// Unordered list
		if (preg_match('/^-\s+/', $block)) {
			$items = preg_split('/\n(?=-\s+)/', $block);
			$lis   = '';
			foreach ($items as $item) {
				$item = preg_replace('/^-\s+/', '', $item);
				$lis .= '<li>' . inline_md($item, $base_url) . '</li>';
			}
			$html[] = '<ul class="list-clean">' . $lis . '</ul>';
			continue;
		}

		// Ordered list
		if (preg_match('/^\d+\.\s+/', $block)) {
			$items = preg_split('/\n(?=\d+\.\s+)/', $block);
			$lis   = '';
			foreach ($items as $item) {
				$item = preg_replace('/^\d+\.\s+/', '', $item);
				$lis .= '<li>' . inline_md($item, $base_url) . '</li>';
			}
			$html[] = '<ol class="list-clean">' . $lis . '</ol>';
			continue;
		}

		// Raw block HTML (kalau ada) — biarkan apa adanya
		if (preg_match('/^<(h[1-6]|ul|ol|table|div|blockquote|figure|pre|section|nav|aside|header|footer|article|details|summary)\b/i', $block)) {
			$html[] = $block;
			continue;
		}

		// Paragraf
		$html[] = '<p>' . inline_md($block, $base_url) . '</p>';
	}

	return implode("\n\n", $html);
}

function inline_md(string $s, string $base_url = '/'): string
{
	// Link: [teks](url)
	$s = preg_replace_callback('/\[([^\]]+)\]\(([^)\s]+)\)/', function ($m) use ($base_url) {
		$text = $m[1];
		$url  = $m[2];

		// URL absolut / anchor / mailto — biarkan
		if (!preg_match('#^(https?://|//|\#|mailto:)#', $url)) {
			// Internal relatif — prefix $base_url kalau belum diawali "/"
			if ($url === '' || $url[0] !== '/') {
				$url = rtrim($base_url, '/') . '/' . $url;
			}
		}

		return '<a href="' . $url . '">' . $text . '</a>';
	}, $s);

	// Bold
	$s = preg_replace('/\*\*([^*]+)\*\*/', '<strong>$1</strong>', $s);

	// Italic (jangan sentuh **)
	$s = preg_replace('/(?<!\*)\*([^*\n]+)\*(?!\*)/', '<em>$1</em>', $s);

	// Inline code
	$s = preg_replace('/`([^`]+)`/', '<code>$1</code>', $s);

	return $s;
}
