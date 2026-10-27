# Completed Tasks (Archive)

> Arsip task yang selesai >1 bulan lalu. `todo.md` hanya berisi task aktif.
> Snapshot: 2026-10-27.

## Infrastructure

- [x] Struktur folder konsisten (`page/`, `milestone/`, `css/`, `partials/`).
- [x] Ekstrak layout ke `partials/` (head, nav, header, footer).
- [x] `config.php` menyimpan `$base_url`, `$site_name`, `e()`.
- [x] `$page_hierarchy` di `config.php`.
- [x] Nav dipisah ke `partials/nav.php`.
- [x] Active state di menu via `$current_page`.
- [x] Tahun footer otomatis.
- [x] Extract `build_breadcrumbs()` + `build_sequence()` ke `lib/nav.php` (Phase 1).
- [x] Dev-only hierarchy validation di `config.php` (Phase 1).
- [x] 404 page dalam layout card, bukan teks polos (Phase 1).
- [x] `markdown.php` support ordered list, fenced code, blockquote (Phase 1).

## Bugs Fixed

- [x] Milestone 2 tidak lagi orphan.
- [x] Typo `menu-container` → `corner` di M2.
- [x] `require_once` tanpa `;` di `hiragana-m2.php`.
- [x] Copy-paste "second milestone" di M2.
- [x] Footer path di `hiragana-chart.php` (3 level).
- [x] Milestone 3 tidak lagi orphan — sudah di nav.
- [x] Title duplikat `Learn Japanese - Learn Japanese` (Phase 0).
- [x] Dead CSS selector `.section-title` / `.subsection-title` (Phase 0).

## CSS / UI

- [x] `body` pakai `align-items: flex-start`.
- [x] `.title-text` pakai `min-width: 0`.
- [x] Utility classes menggantikan inline style.
- [x] `<br>` jadwal diganti list utility.
- [x] Responsive breakpoint 600px.
- [x] `:focus-visible`.
- [x] CSS `.kana-table` untuk chart.
- [x] CSS breadcrumb + back-link.
- [x] `.schedule` → `.list-clean` (rename semantik).
- [x] `details[open]` visual state untuk menu toggle.
- [x] Skip-link CSS.
- [x] Hapus CSS dead-code `tfoot` selectors.
- [x] Unifikasi heading — semua pakai `.content-stack h2/h3` (Phase 0).
- [x] Konsistensi spacing heading + style code/quote/ordered-list (Phase 1).

## Content & Writing

- [x] Konten `intro-kana.php` diperbaiki (3 sistem = Hiragana, Katakana, Kanji).
- [x] "Kana" dijelaskan sebagai payung.
- [x] "Furigana" dijelaskan sebagai alat bantu baca.
- [x] Fungsi Hiragana & Katakana lebih akurat.
- [x] Kapitalisasi "I", grammar dasar, ejaan.
- [x] Profanity dihapus dari halaman edukasi.
- [x] Typo `pronounciation` → `pronunciation` di chart.
- [x] Milestone 3 content diisi: Youon, Sokuon, Chouon, Hatsuon, + Quick Self-Test.
- [x] Semua kana di M3 pakai `lang="ja"` (aksesibilitas screen reader).
- [x] CTA "Next: Kana Introduction" di akhir `intro.md` (Phase 0).
- [x] Cross-link Katakana chart dari `intro-kana.md` (Phase 2).

## Charts

- [x] Hiragana chart — 46 dasar + 25 dakuten/handakuten + 33 youon.
- [x] `<tfoot>` ん → `<tbody class="standalone-group">` (semantik).
- [x] Header `∅` → `—` + `aria-label="No consonant"`.
- [x] Cross-link chart ↔ Milestone 3 (`#youon` deep link).
- [x] `data/katakana.php` — 71 entry (Phase 2).
- [x] Katakana chart page — mirror Hiragana (Phase 2).
- [x] Chōonpu (ー) note di Katakana chart (Phase 2).

## Navigasi Internal

- [x] Breadcrumb + back link di semua halaman.
- [x] `build_sequence()` — prev/next per section.
- [x] `partials/pager.php` — komponen prev/next auto-generated.
- [x] Back-link auto-skip jika sama dengan pager-prev.
- [x] Nav section label di-highlight (`nav-label-active`).
- [x] Hapus link "Next" manual di M1 & M2.
- [x] CSS `.pager` + `.nav-label-active` + responsive (single-col di ≤600px).
- [x] Link chart di akhir M2 dan `intro-kana.php`.

## Accessibility

- [x] Skip-to-content link di semua halaman.
- [x] `<main id="main" tabindex="-1">` di semua halaman.
- [x] `aria-label` summary → "Navigation menu".
- [x] `aria-label="No consonant"` di header chart.
- [x] `lang="ja"` pada semua kana di M3.
- [x] `head.php` fallback `$page_title ?? $site_name`.
- [x] `build_breadcrumbs()` empty-trail guard.
- [x] Favicon inline SVG.

## Documentation

- [x] `learning-log.md` dengan format mingguan.
- [x] `README.md` lengkap.
- [x] `todo.md` disinkronkan.
- [x] `.gitignore` dibersihkan.
- [x] Arsip `todo_26_10.md` → `docs/archive/todo_2026-10-26.md` (Phase 0).
- [x] `README.md` + How it works, How to add a page, Conventions, Markdown support (Phase 3a).
- [x] `docs/decisions.md` — 4 ADR (Phase 3a).
