# Catatan Perubahan (Changelog) - Nanas.std

Semua perubahan penting pada proyek **Nanas.std** akan didokumentasikan di file ini. Format ini didasarkan pada [Keep a Changelog](https://keepachangelog.com/id/1.0.0/) dan proyek ini mematuhi [Semantic Versioning](https://semver.org/lang/id/).

---

## [1.0.0] - 2026-06-05

### Ditambahkan
- **Struktur MVC Inti (Core MVC)**: Implementasi arsitektur Model-View-Controller dasar yang ringan dan minimalis.
- **Sistem Autoloading Kustom**: Autoloader berbasis `spl_autoload_register` untuk memuat namespace `Core\` dan `App\` secara otomatis tanpa dependensi eksternal (PSR-4-like).
- **Core Router (`core/Router.php`)**:
  - Dukungan metode pencocokan rute `GET` dan `POST`.
  - Dukungan integrasi Middleware sebelum handler rute dieksekusi.
  - Normalisasi otomatis URI untuk mendukung instalasi di subdirektori (misal: `/nanascms/public`).
- **Core Config (`core/Config.php`)**:
  - Parser file `.env` kustom untuk memuat variabel lingkungan.
  - Akses konfigurasi menggunakan *dot-notation* (contoh: `Config::get('app.base_url')`).
- **Core Database Wrapper (`core/Database.php`)**:
  - Koneksi database PDO menggunakan pola desain *Singleton* untuk mencegah koneksi ganda yang tidak efisien.
  - Helper fungsi `Database::query()` untuk eksekusi prepared statements dengan mudah.
- **Base Controller (`core/Controller.php`)**: Method `view()` untuk merender template PHP secara dinamis dengan ekstraksi data otomatis.
- **Boilerplate Autentikasi (`core/Auth.php`)**: Kerangka helper class autentikasi user untuk pengembangan ke depan.
- **Integrasi TailwindCSS v4**:
  - Konfigurasi `@tailwindcss/cli` di `package.json` untuk kompilasi CSS yang cepat.
  - Penambahan file input CSS Tailwind (`src/input.css`).
  - Script perintah npm (`npm run dev` dan `npm run build`) untuk mode *development* dan *production build*.
- **Helper Global**: Fungsi global `route($path)` untuk resolusi URL subdirektori yang aman dan `redirect($path)` di file `public/index.php`.
- **Halaman Error Kustom**: Halaman `404 Not Found` dasar di `app/Views/errors/404.php`.

### Diubah
- **Pembaruan Dokumentasi (`README.md`)**: Menambahkan petunjuk instalasi yang jelas, konfigurasi `.env`, panduan perintah kompilasi TailwindCSS v4, serta penjelasan struktur direktori proyek.
- **Struktur Footer (`app/Views/layouts/footer.php`)**: Memodifikasi footer agar memuat nama perusahaan (`companyName`), tagline (`tagline`), dan tahun hak cipta secara dinamis dari Controller.

### Diperbaiki
- **Fungsi Render Footer**: Perbaikan tata letak layout dan penyelarasan vertikal ikon SVG hak cipta (copyright) pada footer.
- **Masalah Cache Stylesheet**: Menambahkan versi *timestamp* dinamis pada pemanggilan CSS (`?v=<?= time() ?>`) pada file `header.php` agar perubahan tampilan selama pengembangan langsung terlihat tanpa terhalang cache browser.
