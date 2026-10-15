# Learn Japanese — Development TODO

## Priority 1 — High: Fix Broken Navigation

- [Done] **Periksa tautan Dashboard di `index.html`.**
  - Tautan `dashboard/index.html` mengarah ke file yang tidak ditemukan saat diperiksa.
  - Buat file tersebut jika memang direncanakan, atau hapus/perbaiki tautannya.
  - Test: klik tautan dari halaman utama dan pastikan halaman tujuan dapat dibuka.

## Priority 2 — High: Organize the Project Structure

- [Done] **Tetapkan struktur folder yang konsisten.**
  - Pisahkan halaman, stylesheet, JavaScript, dan aset jika jumlah file mulai bertambah.
  - Contoh struktur awal:

  ```text
  learn-japanese/
  ├── index.html
  ├── README.md
  ├── TODO.md
  ├── page/
  │   ├── intro.html
  │   └── kana/
  │       └── index.html
  └── assets/
      ├── css/
      │   └── style.css
      ├── js/
      └── images/
  ```

  - Jangan membuat file atau folder kosong hanya demi mengikuti struktur ini. Tambahkan saat dibutuhkan.
  - Test: buka semua halaman dan periksa tautan relatif setelah pemindahan file.

## Priority 3 — High: Add a README

- [Done] **Buat `README.md` di root repository.**
  - Jelaskan tujuan proyek.
  - Cantumkan fitur yang sudah tersedia dan yang masih direncanakan.
  - Jelaskan cara menjalankan atau membuka proyek.
  - Dokumentasikan struktur folder secara singkat.
  - Gunakan README sebagai dokumentasi proyek, bukan sekadar deskripsi satu kalimat.

## Priority 4 — Medium: Improve HTML Semantics

- [Done] **Gunakan elemen HTML sesuai fungsinya.**
  - Gunakan `<header>` untuk bagian pengantar halaman jika sesuai.
  - Gunakan `<nav>` untuk kumpulan tautan navigasi.
  - Gunakan `<main>` untuk konten utama.
  - Gunakan `<footer>` untuk informasi penutup jika diperlukan.
  - Jangan menambahkan elemen hanya agar kode terlihat lebih profesional.

- [Done] **Ganti penggunaan `<br>` untuk mengatur jarak.**
  - Gunakan elemen yang sesuai untuk struktur konten.
  - Atur jarak visual menggunakan CSS, bukan menumpuk `<br>`.

## Priority 5 — Medium: Improve Readability and Consistency

- [Done] **Gunakan format kode yang konsisten.**
  - Terapkan indentasi yang sama.
  - Pisahkan elemen yang berbeda ke baris masing-masing.
  - Hindari indentasi yang tidak konsisten di dalam paragraf dan tautan.

- [Done] **Gunakan konvensi penamaan yang konsisten.**
  - Pertahankan pola penamaan file yang mudah dipahami.
  - Gunakan nama file deskriptif dan huruf kecil, misalnya `intro.html` dan `hiragana.html`.
  - Hindari mengganti nama file tanpa memeriksa tautan yang mengarah kepadanya.

## Priority 6 — Medium: Add Basic Styling

- [Otw] **Buat stylesheet eksternal ketika mulai mengatur tampilan.**
  - Hubungkan CSS melalui elemen `<link>` di dalam `<head>`.
  - Atur tipografi, warna, lebar konten, jarak, dan tampilan tautan.
  - Pastikan halaman nyaman dibaca di layar ponsel dan desktop.
  - Hindari menyalin aturan CSS yang sama ke setiap halaman.

- [ ] **Pastikan struktur tetap berfungsi tanpa JavaScript.**
  - Untuk halaman artikel dan materi pembelajaran statis, HTML dan CSS sudah cukup.
  - Tambahkan JavaScript ketika benar-benar membutuhkan interaksi, misalnya kuis Kana.

## Priority 7 — Medium: Correct Japanese Learning Content

- [ ] **Perbaiki penjelasan tentang sistem tulisan Jepang di `page/kana/index.html`.**
  - Konsisten menyebut tiga sistem tulisan utama: Hiragana, Katakana, dan Kanji.
  - Jelaskan bahwa Hiragana juga digunakan untuk partikel, akhiran gramatikal, dan kata tertentu yang tidak ditulis dengan Kanji.
  - Jelaskan bahwa Katakana umum digunakan untuk kata serapan, nama asing, dan beberapa penggunaan khusus lainnya.
  - Jelaskan bahwa Kanji berasal dari karakter Tionghoa yang diadaptasi ke dalam bahasa Jepang; cara baca dan penggunaannya mengikuti bahasa Jepang.
  - Hindari penjelasan yang menyederhanakan fungsi setiap sistem tulisan secara berlebihan.

- [ ] **Periksa akurasi materi sebelum menambah banyak halaman.**
  - Gunakan sumber pembelajaran bahasa Jepang yang tepercaya.
  - Bedakan fakta bahasa dari opini atau pengalaman pribadi.
  - Tambahkan referensi untuk klaim yang memerlukan penjelasan lebih lanjut.

## Priority 8 — Low: Improve English Writing

- [ ] **Periksa grammar, ejaan, kapitalisasi, dan tanda baca.**
  - Perbaiki penggunaan huruf kapital pada awal kalimat dan nama bahasa.
  - Periksa bentuk jamak, artikel, dan struktur kalimat.
  - Gunakan ungkapan yang alami tanpa menghilangkan gaya personal.

- [ ] **Pisahkan gaya informal dari penjelasan pembelajaran.**
  - Humor dan bahasa santai boleh digunakan dalam narasi pribadi.
  - Untuk definisi dan materi edukasi, prioritaskan kejelasan dan ketepatan.
  - Pertahankan suara personal tanpa mengorbankan pemahaman pembaca.

## Priority 9 — Low: Add Basic Quality Checks

- [ ] **Periksa seluruh tautan internal secara berkala.**
  - Pastikan setiap `href` mengarah ke file atau halaman yang benar.
  - Uji navigasi dari halaman utama hingga halaman terdalam.

- [ ] **Validasi HTML.**
  - Gunakan [W3C Markup Validation Service](https://validator.w3.org/).
  - Perbaiki error sebelum terlalu banyak halaman dibuat.

- [ ] **Uji tampilan dan navigasi di layar ponsel serta desktop.**
  - Periksa keterbacaan, ukuran teks, dan kemudahan penggunaan tautan.

## Priority 10 — Future Work: Add Interactive Learning Features

- [ ] **Bangun fitur pembelajaran secara bertahap.**
  1. Halaman Hiragana dan latihan membaca.
  2. Halaman Katakana dan latihan membaca.
  3. Kuis pengenalan serta penulisan Kana menggunakan JavaScript.
  4. Materi kosakata dan tata bahasa.
  5. Penyimpanan progres jika kebutuhan proyek sudah jelas.

- [ ] **Pelajari Git dan dokumentasikan perubahan.**
  - Gunakan commit yang menjelaskan perubahan secara spesifik.
  - Kerjakan satu kelompok perbaikan dalam satu commit jika memungkinkan.
  - Periksa hasil perubahan sebelum melakukan commit.

- [ ] **Tunda PHP, MySQL, dan autentikasi sampai ada kebutuhan nyata.**
  - Mulai dari HTML, CSS, dan JavaScript.
  - Tambahkan backend ketika proyek memerlukan konten dinamis atau penyimpanan data.
  - Pelajari validasi server, prepared statements, dan keamanan sesi sebelum menangani data pengguna.
