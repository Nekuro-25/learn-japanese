# Learn Japanese

A personal learning journal where I document my Japanese study
progress while improving my English writing and PHP/CSS coding skills.

## Purpose

- Learn Japanese from the ground up (Kana → Kotoba → Bunpō).
- Improve English writing by documenting the journey in English.
- Practice coding through a small PHP + CSS project.

## Current Features

- Home page with project overview.
- Introduction page explaining the learning approach.
- Kana introduction covering Hiragana, Katakana, Kanji, and Furigana.
- Hiragana chart — 46 basic kana + 25 dakuten/handakuten + 33 youon
  combinations (semantic tables; core kana from `data/kana.php`, youon
  grid hardcoded in the chart).
- Milestone 1: 46 basic Hiragana in 1 week.
- Milestone 2: 25 dakuten/handakuten characters in 3 days.
- Milestone 3: Advanced Hiragana (youon, sokuon, chouon, hatsuon) +
  Quick Self-Test.
- Breadcrumb + back link on every content page (auto-derived from
  `$page_hierarchy`).
- Nav auto-generated from `$page_hierarchy` — add a page = 1 entry.
- Dark, responsive card-based layout.
- Accessible navigation with `<details>`/`<summary>` dropdown.
- Skip-to-content link + `main#main` focus target.
- No JavaScript required — every page works without it.

## Planned Features

- Katakana chart (mirror of the Hiragana chart) — will use a parallel
  `data/katakana.php`.
- Kana recognition quiz (JavaScript) — will reuse `data/kana.php`
  (refactor youon grid to `data/youon.php` at that point).
- Vocabulary and grammar notes.
- Progress tracking (only if there's a real need).

## How to Run

Requires PHP 7.4+.

```bash
php -S localhost:8000
