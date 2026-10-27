# Learn Japanese — Development TODO

> Arsip task yang selesai >1 bulan lalu ada di `docs/done.md`.
> File ini hanya berisi task aktif.

## 🎯 Next Up — Priority High

### 1. Isi `learning-log.md` mingguan

- [ ] Update setiap akhir minggu — ini tujuan utama proyek.
- [ ] Catat huruf yang masih goyah + target minggu depan.

---

## 🔮 Planned — Priority Medium

### 2. Kuis Hiragana (JavaScript pertama)

- [ ] Refactor youon grid ke `data/youon.php` (shared Hiragana + Katakana).
- [ ] Buat folder `js/`.
- [ ] `js/quiz.js` — vanilla JS, reuse `data/kana.php` via JSON endpoint atau inline `<script>`.
- [ ] `page/kana/hiragana/hiragana-quiz.php` — 10 soal per sesi, tampilkan skor.
- [ ] Fallback `<noscript>` yang menampilkan tabel kana biasa.
- [ ] Update README: "Quiz page requires JavaScript" (pengecualian prinsip no-JS).

### 3. Materi Kotoba Awal

- [ ] `page/kotoba/intro.php` — parent: `home`, section: `Kotoba Section`, order: 30.
- [ ] `page/kotoba/list-1.php` — 20 kata dasar (parent: `kotoba-intro`, order: 31).

### 4. Materi Bunpō Awal

- [ ] `page/bunpo/intro.php` — SOV.
- [ ] `page/bunpo/particles-1.php` — は, が, を, に, で.

---

## 💭 Future — Priority Low

- [ ] Progress tracking via `localStorage`.
- [ ] Dark/light theme toggle.
- [ ] Backend PHP + MariaDB — hanya jika butuh konten dinamis.
- [ ] User authentication.
- [ ] Deployment ke hosting.

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
