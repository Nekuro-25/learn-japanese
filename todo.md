# Learn Japanese — Development TODO

## ✅ Completed (Refactor Phase)

### Infrastructure

- [x] Struktur folder konsisten (`page/`, `milestone/`, `css/`, `partials/`).
- [x] Ekstrak layout ke `partials/` (head, nav, header, footer).
- [x] `config.php` menyimpan `$base_url`, `$site_name`, dan helper `e()`.
- [x] Nav dipisah ke `partials/nav.php` (single source of truth).
- [x] Active state di menu via `$current_page`.
- [x] Tahun footer otomatis (`date('Y')`).

### Bugs Fixed

- [x] Milestone 2 tidak lagi orphan — sekarang muncul di menu.
- [x] Typo `menu-container` → `corner` di halaman Milestone 2.
- [x] `require_once` tanpa `;` di `hiragana-m2.php` sudah diperbaiki.
- [x] Copy-paste "second milestone" di Milestone 2 → "next milestone".

### CSS / UI

- [x] `body` pakai `align-items: flex-start` (halaman panjang tidak terpotong).
- [x] `.title-text` pakai `min-width: 0` (judul panjang tidak menekan tombol menu).
- [x] Utility classes menggantikan inline `style="..."`.
- [x] `<br>` untuk list jadwal diganti `<ul class="schedule">`.
- [x] Responsive breakpoint 600px.
- [x] `:focus-visible` untuk aksesibilitas keyboard.

### Content & Writing

- [x] Konten `intro-kana.php` diperbaiki: 3 sistem = Hiragana, Katakana, Kanji.
- [x] "Kana" dijelaskan sebagai payung Hiragana + Katakana.
- [x] "Furigana" dijelaskan sebagai alat bantu baca, bukan sistem.
- [x] Fungsi Hiragana & Katakana dijelaskan lebih akurat.
- [x] Kapitalisasi "I", grammar dasar, ejaan diperbaiki.
- [x] Profanity dihapus dari halaman edukasi.

### Documentation

- [x] `README.md` lengkap (fitur, cara run, struktur, tech stack, design decisions).
- [x] `todo.md` disinkronkan dengan realita.

---

## 🎯 Next Up — Priority High

Target berikutnya, dikerjakan berurutan.

### 1. Halaman Chart Hiragana

- [ ] Buat `page/kana/hiragana-chart.php`.
- [ ] Tampilkan 46 huruf dasar dalam grid (5 kolom × ~10 baris untuk gojūon).
- [ ] Setiap sel: huruf besar, romaji, cara baca.
- [ ] Tambahkan **dakuten/handakuten** chart (25 huruf) di section terpisah.
- [ ] CSS: grid responsif, kartu huruf yang bisa dipindai cepat.
- [ ] Tambah link di `partials/nav.php` (section "Kana Section").
- [ ] Tautkan dari `intro-kana.php` ("lihat chart lengkap →").

**Kenapa ini duluan:** konten ini paling sering dibuka saat belajar, dan
jadi fondasi untuk kuis Hiragana nanti.

### 2. Navigasi Internal yang Lebih Baik

- [ ] Tambahkan breadcrumb atau tombol "back" di setiap halaman materi.
- [ ] Di akhir setiap Milestone, tambahkan link ke Milestone berikutnya:
  - M1 → M2
  - M2 → (nanti) M3
- [ ] Link "Lihat chart" muncul di akhir `intro-kana.php`.

**Kenapa penting:** user saat ini harus buka menu untuk pindah halaman.
Alur belajar jadi terputus.

### 3. Lengkapi Learning Log

- [ ] Buat `LEARNING_LOG.md` di root.
- [ ] Format per minggu: huruf yang sudah dikuasai, yang masih goyah,
      catatan (misal "し vs ち sering ketukar"), target minggu depan.
- [ ] Update setiap akhir minggu — ini tujuan utama proyek, bukan kode.

**Kenapa penting:** proyek ini learning journal, bukan technical blog.
Tanpa learning log, "journal"-nya hanya soal kode.

---

## 🔮 Planned — Priority Medium

Dikerjakan setelah Priority High selesai.

### 4. Halaman Chart Katakana

- [ ] `page/kana/katakana-chart.php` — mirror dari Hiragana chart.
- [ ] Tabel konversi Hiragana ↔ Katakana untuk huruf yang sama bunyinya.
- [ ] Tambahkan link dari nav.

### 5. Kuis Hiragana (JavaScript pertama)

- [ ] Halaman `page/kana/hiragana-quiz.php`.
- [ ] Tampilkan satu huruf acak → user pilih romaji (atau sebaliknya).
- [ ] Skor + feedback langsung (benar/salah).
- [ ] 10 soal per sesi, lalu tampilkan hasil.
- [ ] Mulai dengan vanilla JS saja — file `js/quiz.js`.
- [ ] Tidak ada penyimpanan permanen dulu.

### 6. Materi Kotoba Awal

- [ ] `page/kotoba/intro.php` — kenapa kosakata penting.
- [ ] `page/kotoba/list-1.php` — 20 kata dasar (angka, salam, kata ganti).
- [ ] Format: Jepang (kana + kanji kalau ada), romaji, arti, contoh kalimat singkat.

### 7. Materi Bunpō Awal

- [ ] `page/bunpo/intro.php` — struktur kalimat Jepang (SOV).
- [ ] `page/bunpo/particles-1.php` — partikel は, が, を, に, で.
- [ ] Setiap partikel: penjelasan singkat + 2–3 contoh.

---

## 💭 Future — Priority Low

Hanya dikerjakan jika kebutuhan muncul.

- [ ] Progress tracking via `localStorage` (untuk kuis).
- [ ] Halaman Milestone 3 ( kombinasi kana, youon きゃ しゅ ちょ, dll).
- [ ] Dark/light theme toggle.
- [ ] Backend PHP + MySQL — hanya jika benar-benar butuh konten dinamis.
- [ ] User authentication — hanya jika ada progress storage.
- [ ] Deployment ke hosting (GitHub Pages tidak bisa PHP; pertimbangkan
      shared hosting atau VPS murah).

---

## 🧪 Quality Checks (berkala, sebelum commit)

- [ ] Tidak ada inline `style="..."` baru:
      `grep -rn 'style="' --include="*.php" .`
- [ ] Tidak ada `<br>` untuk layout:
      `grep -rn '<br>' --include="*.php" .`
- [ ] Semua `require_once` diakhiri `;`.
- [ ] Semua link internal mengarah ke file yang ada.
- [ ] Active state nav cocok dengan `$current_page` di setiap halaman.
- [ ] Validasi HTML: <https://validator.w3.org/>.
- [ ] Test di 375px (HP) dan desktop.
- [ ] Cek footer tahun berubah otomatis.

---

## 📝 Aturan Pengerjaan

- Satu kelompok perubahan = satu commit (kalau pakai Git).
- Commit message jelas: `feat: hiragana chart`, `fix: nav active state`.
- Jangan lanjut ke fitur baru sebelum Quality Checks hijau.
- Kalau ragu antara "tambah dokumentasi" atau "tambah fitur", pilih fitur
  — dokumentasi dibuat saat menyelesaikan masalah nyata, bukan karena
  "proyek besar biasanya punya".
- Backend (MySQL, auth) ditunda sampai ada kebutuhan nyata. Saat ini
  semuanya bisa diselesaikan dengan PHP + CSS + sedikit JS.
