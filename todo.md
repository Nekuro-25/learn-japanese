# Learn Japanese — Development TODO

## ✅ Completed

### Infrastructure

- [x] Struktur folder konsisten (`page/`, `milestone/`, `css/`, `partials/`).
- [x] Ekstrak layout ke `partials/` (head, nav, header, footer).
- [x] `config.php` menyimpan `$base_url`, `$site_name`, `e()`.
- [x] `$page_hierarchy` + `build_breadcrumbs()` di `config.php`.
- [x] Nav dipisah ke `partials/nav.php`.
- [x] Active state di menu via `$current_page`.
- [x] Tahun footer otomatis.

### Bugs Fixed

- [x] Milestone 2 tidak lagi orphan.
- [x] Typo `menu-container` → `corner` di M2.
- [x] `require_once` tanpa `;` di `hiragana-m2.php`.
- [x] Copy-paste "second milestone" di M2.
- [x] Footer path di `hiragana-chart.php` (3 level).
- [x] Milestone 3 tidak lagi orphan — sudah di nav.

### CSS / UI

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

### Content & Writing

- [x] Konten `intro-kana.php` diperbaiki (3 sistem = Hiragana, Katakana, Kanji).
- [x] "Kana" dijelaskan sebagai payung.
- [x] "Furigana" dijelaskan sebagai alat bantu baca.
- [x] Fungsi Hiragana & Katakana lebih akurat.
- [x] Kapitalisasi "I", grammar dasar, ejaan.
- [x] Profanity dihapus dari halaman edukasi.
- [x] Typo `pronounciation` → `pronunciation` di chart.
- [x] Milestone 3 content diisi: Youon, Sokuon, Chouon, Hatsuon, + Quick Self-Test.
- [x] Semua kana di M3 pakai `lang="ja"` (aksesibilitas screen reader).

### Hiragana Chart

- [x] Buat `page/kana/hiragana/hiragana-chart.php`.
- [x] 46 huruf dasar + 25 dakuten/handakuten.
- [x] Setiap sel: huruf besar, romaji.
- [x] CSS tabel responsif.
- [x] Link di `partials/nav.php`.
- [x] Tautkan dari `intro-kana.php`.
- [x] `<tfoot>` ん → `<tbody class="standalone-group">` (semantik).
- [x] `$standalone` → array (siap multi-entry).
- [x] Header `∅` → `—` + `aria-label="No consonant"`.
- [x] Youon reference grid (11 base × 3 vowels = 33 combinations).
- [x] Cross-link chart ↔ Milestone 3 (`#youon` deep link).

### Navigasi Internal

- [x] Breadcrumb + back link di semua halaman (via `$page_hierarchy`).
- [x] `build_sequence()` di `config.php` — prev/next per section.
- [x] `partials/pager.php` — komponen prev/next auto-generated.
- [x] Back-link auto-skip jika sama dengan pager-prev.
- [x] Nav section label di-highlight (`nav-label-active`).
- [x] Hapus link "Next" manual di M1 & M2.
- [x] CSS `.pager` + `.nav-label-active` + responsive (single-col di ≤600px).
- [x] Link chart di akhir M2 (kontekstual, bukan sekuensial).
- [x] Link chart di akhir `intro-kana.php`.
- [ ] Test 375px pager (manual).

### Accessibility

- [x] Skip-to-content link di semua halaman.
- [x] `<main id="main" tabindex="-1">` di semua halaman.
- [x] `aria-label` summary → "Navigation menu".
- [x] `aria-label="No consonant"` di header chart.
- [x] `lang="ja"` pada semua kana di M3.
- [x] `head.php` fallback `$page_title ?? $site_name`.
- [x] `build_breadcrumbs()` empty-trail guard.
- [x] Favicon inline SVG.

### Documentation

- [x] `learning-log.md` dengan format mingguan.
- [x] `README.md` lengkap.
- [x] `todo.md` disinkronkan.
- [x] `.gitignore` dibersihkan (hapus `config.local.php` mati).

---

## 🎯 Next Up — Priority High

### 1. Isi `learning-log.md` mingguan

- [ ] Update setiap akhir minggu — ini tujuan utama proyek.
- [ ] Catat huruf yang masih goyah + target minggu depan.

---

## 🔮 Planned — Priority Medium

### 2. Halaman Chart Katakana

- [ ] **Keputusan data structure:** file baru `data/katakana.php` (rekomendasi) — biar `hiragana-chart.php` dan `katakana-chart.php` independen.
- [ ] Buat `data/katakana.php` dengan 46 gojūon + 25 dakuten/handakuten (mirror dari `data/kana.php`).
- [ ] Buat `page/kana/katakana/katakana-chart.php` — copy `hiragana-chart.php`, ganti `require` data ke `data/katakana.php`.
- [ ] Tambah entry di `$page_hierarchy` (parent: `kana-intro`, section: `Kana Section`, order: 12) — pager & nav otomatis update.
- [ ] Opsional: rename `data/kana.php` → `data/hiragana.php` untuk konsistensi.
- [ ] Tabel konversi Hiragana ↔ Katakana (nice-to-have).

### 3. Kuis Hiragana (JavaScript pertama)

- [ ] Buat folder `js/`.
- [ ] `js/quiz.js` — vanilla JS, reuse `data/kana.php` via JSON endpoint atau inline `<script>`.
- [ ] `page/kana/hiragana/hiragana-quiz.php` — 10 soal per sesi, tampilkan skor.
- [ ] Update README: "Quiz page requires JavaScript" (pengecualian prinsip no-JS).
- [ ] Data romaji sudah bersih (を = `'o'`), siap dipakai quiz.

### 4. Materi Kotoba Awal

- [ ] `page/kotoba/intro.php` — parent: `home`, section: `Kotoba Section`, order: 30.
- [ ] `page/kotoba/list-1.php` — 20 kata dasar (parent: `kotoba-intro`, order: 31).

### 5. Materi Bunpō Awal

- [ ] `page/bunpo/intro.php` — SOV.
- [ ] `page/bunpo/particles-1.php` — は, が, を, に, で.

---

## 💭 Future — Priority Low

- [ ] Progress tracking via `localStorage`.
- [ ] Dark/light theme toggle.
- [ ] Backend PHP + MariaDB — hanya jika butuh konten dinamis.
- [ ] User authentication.
- [ ] Deployment ke hosting.
- [ ] Refactor youon grid to `data/youon.php` when building the quiz.

---

## 🧪 Quality Checks

- [x] `grep -rn 'style="' --include="*.php" .` → kosong
- [x] `grep -rn '<br>' --include="*.php" .` → kosong
- [x] Semua `require_once` diakhiri `;`
- [x] Semua link internal mengarah ke file yang ada
- [x] Active state nav cocok dengan `$current_page`
- [x] Breadcrumb cocok dengan `$page_hierarchy`
- [x] Semua halaman punya `<main id="main" tabindex="-1">`
- [x] Tidak ada `.schedule` / `<tfoot>` tersisa di CSS/PHP
- [x] Semua kana di M3 pakai `lang="ja"`
- [ ] Validasi HTML: <https://validator.w3.org/>
- [ ] Test 375px + desktop (manual)
- [x] Footer tahun otomatis

---

## 📝 Aturan Pengerjaan

- Satu kelompok perubahan = satu commit.
- Commit message: `feat: hiragana chart`, `fix: nav active state`.
- Jangan lanjut ke fitur baru sebelum Quality Checks hijau.
- Backend (MariaDB, auth) ditunda sampai ada kebutuhan nyata.
