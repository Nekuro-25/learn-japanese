# Architecture Decisions

Catatan keputusan teknis — supaya tidak dibongkar ulang 6 bulan lagi.
Format ringkas: keputusan → alasan. Bukan ADR formal.

## ADR-001: No JavaScript by default

**Decision:** Situs berjalan penuh tanpa JS. Quiz boleh pakai JS, tapi wajib punya fallback `<noscript>`.

**Reason:** Latihan HTML/CSS murni, aksesibilitas, menghindari distraction. Halaman yang butuh JS akan jadi pengecualian yang didokumentasikan di README.

## ADR-002: `data/*.php` bukan database

**Decision:** Kana disimpan sebagai array PHP (`data/kana.php`, `data/katakana.php`), bukan MariaDB.

**Reason:** Data statis, <200 entry, tidak butuh query. Refactor ke DB hanya jika ada kebutuhan nyata (progress tracking per-user).

## ADR-003: `$page_hierarchy` sebagai single source of truth

**Decision:** Semua metadata halaman (nav, breadcrumb, pager, title, subtitle) berasal dari satu array di `config.php`.

**Reason:** Menambah halaman = 1 entry. Tidak ada duplikasi state yang bisa drift. Helper (`build_breadcrumbs()`, `build_sequence()`) menerima array sebagai parameter — tidak baca global, jadi mudah dites dan dipindah.

## ADR-004: Markdown minimal, bukan CommonMark

**Decision:** `lib/markdown.php` hanya mendukung subset (heading, list, code, quote, bold, italic, link, inline code). Tidak ada dependensi eksternal.

**Reason:** Kontrol penuh, tidak ada dependensi, mudah dipahami. Kalau butuh fitur kompleks (tabel, nested list), tambahkan manual — bukan ganti library. Limitation didokumentasikan di doc-comment file dan README.
