# Learn Japanese

A personal learning journal where I document my Japanese study
progress while improving my English writing and PHP/CSS coding skills.

## Purpose

- Learn Japanese from the ground up (Kana → Kotoba → Bunpō).
- Improve English writing by documenting the journey in English.
- Practice coding through a small PHP + CSS project.

## How it works

1. Request masuk ke `index.php`, `page/**/*.php`, atau `milestone/*.php` — semuanya hanya `require lib/render.php`.
2. `lib/render.php` mencocokkan URL ke `$page_hierarchy` di `config.php`.
3. Konten dicari di `content/` berdasarkan `url` halaman (`.md` dulu, lalu `.php`).
4. Markdown dirender via `lib/markdown.php`; PHP content di-`include` langsung.
5. Template disusun dari `partials/` (head → header → breadcrumb → main → pager → back-link → footer).

### How to add a page

1. Tambah entry di `$page_hierarchy` (`config.php`) — field minimal: `label`, `url`, `parent`, `nav_section`, `nav_order`, `title`, `heading`.
2. Buat stub di `page/**/*.php` yang `require __DIR__ . '/../lib/render.php'` (sesuaikan kedalaman path).
3. Buat konten di `content/**/*.md` (atau `.php` untuk konten dinamis).

Nav, breadcrumb, pager, dan metadata akan otomatis ter-update. Tidak perlu sentuh `lib/nav.php`, `lib/render.php`, atau `partials/`.

## Current Features

- Home page with project overview.
- Introduction page explaining the learning approach.
- Kana introduction covering Hiragana, Katakana, Kanji, and Furigana.
- Hiragana chart — 46 basic kana + 25 dakuten/handakuten + 33 youon
  combinations (semantic tables; core kana from `data/kana.php`, youon
  grid hardcoded in the chart).
- Katakana chart — mirror of the Hiragana chart (46 basic + 25
  dakuten/handakuten + 33 youon; core kana from `data/katakana.php`).
- Learning journal — auto-renders weekly entries from `content/page/journal/*.md`.
- Kotoba section — Kotoba Introduction + List 1 (greetings, numbers 1–10, pronouns, yes/no).
- Bunpō section — Bunpō Introduction (SOV) + Particles 1 (は, が, を, に, で).
- Milestone 1: 46 basic Hiragana in 1 week.
- Milestone 2: 25 dakuten/handakuten characters in 3 days.
- Milestone 3: Advanced Hiragana (youon, sokuon, chouon, hatsuon) +
  Quick Self-Test.
- Breadcrumb, back link, dan prev/next pager — semuanya auto-derived
  dari `$page_hierarchy` (sumber tunggal).
- Nav auto-generated from `$page_hierarchy` — add a page = 1 entry.
- Nav section label di-highlight saat child aktif.
- Dark, responsive card-based layout.
- Accessible navigation with `<details>`/`<summary>` dropdown.
- Skip-to-content link + `main#main` focus target.
- No JavaScript required — every page works without it.

## Planned Features

- Kana recognition quiz (JavaScript) — will reuse `data/kana.php`
  (refactor youon grid to `data/youon.php` at that point).
- Progress tracking (only if there's a real need).

## Conventions

- **Code, comments, commit messages:** English.
- **Content (`content/**`):** English.
- **Internal notes (`todo.md`, `learning-log.md`, `docs/**`):** Indonesian is fine.
- **Romaji:** Hepburn.
  - Macron hanya untuk istilah teknis: `gojūon`, `chōon`, `hatsuon`, `sokuon`, `yōon`.
  - Tanpa macron untuk kata sehari-hari: `okaasan`, `sensei`, `gakkou`.
- **Heading style:** satu sistem via `.content-stack h2/h3`. Jangan pakai `class="section-title"`.
- **Japanese text:** selalu `<span lang="ja">…</span>` di markdown (manual) atau `<strong lang="ja">` untuk emphasis.

## Markdown support

Supported:

- Heading (`#` … `######`)
- Unordered list (`- item`)
- Ordered list (`1. item`)
- Fenced code block (```` ```lang ````)
- Blockquote (`> text`)
- Paragraph
- `**bold**`, `*italic*`, `` `inline code` ``, `[text](url)`
- Raw inline HTML (e.g. `<span lang="ja">`)

Not supported:

- Tables
- Nested list (multi-level)
- Image syntax
- Reference link
- Footnote
- Fenced code block containing blank lines (use raw `<pre><code>` instead)

## How to Run

Requires PHP 7.4+.

php -S localhost:8000
