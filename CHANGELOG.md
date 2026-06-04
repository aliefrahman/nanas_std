# Catatan Perubahan (Changelog) - Nanas.std

Semua perubahan penting pada proyek **Nanas.std** akan didokumentasikan di file ini. Format ini didasarkan pada [Keep a Changelog](https://keepachangelog.com/id/1.0.0/) dan proyek ini mematuhi [Semantic Versioning](https://semver.org/lang/id/).

---

## [1.1.0] - 2026-06-05

### Ditambahkan
- **CSRF Protection (Cross-Site Request Forgery)**:
  - Pembuatan token otomatis di dalam session saat aplikasi dijalankan.
  - Middleware `VerifyCsrfToken` di `app/Middlewares` untuk mengamankan request `POST`, `PUT`, `DELETE`, dan `PATCH`.
  - Dukungan pengecualian rute (`$except` array) di dalam middleware.
  - Helper global `csrf_token()` dan `csrf_field()` untuk mempermudah penyisipan input token tersembunyi ke form HTML.
- **XSS Protection (Cross-Site Scripting)**:
  - Helper global `esc()` dan `e()` untuk membersihkan output HTML entities secara aman pada View.
- **Input Sanitization & Validation**:
  - Class `Request` di `core/Request.php` untuk menangani input GET, POST, dan JSON body secara otomatis dilengkapi dengan data trimming.
  - Class `Validator` di `core/Validator.php` untuk validasi form input (rule: `required`, `email`, `min`, `max`, `numeric`, `alpha`, `alphanumeric`, `confirmed`).
  - Fitur Flash Memory untuk secara otomatis meneruskan old input (`old()` helper) dan error validasi (`errors()` helper) ke view setelah terjadi redirect.
  - Helper `back()` di `public/index.php` untuk memudahkan redirect kembali ke halaman sebelumnya.
- **Routing Lanjutan**:
  - **Dynamic Route Parameters**: Mendukung pencocokan parameter dinamis (seperti `/user/{id}` atau `/post/{slug}`) menggunakan reguler expression, serta meng-inject otomatis sebagai argumen ke method Controller.
  - **Route Grouping**: Pengelompokan rute berdasarkan prefix URL dan middleware menggunakan method `group()`.
  - Integrasi Request Injection ke handler rute dinamis secara otomatis.

---

## [1.0.0] - 2026-06-05

### Ditambahkan
- **Struktur MVC Inti (Core MVC)**: Arsitektur Model-View-Controller dasar yang ringan dan minimalis.
- **Sistem Autoloading Kustom**: Autoloader berbasis `spl_autoload_register` untuk memuat namespace `Core\` dan `App\` secara otomatis tanpa dependensi eksternal (PSR-4-like).
- **Core Router Bawaan**: Dukungan pencocokan rute dasar (`GET` dan `POST`), middleware rute, dan normalisasi URI subdirektori.
- **Core Config**: Parser file `.env` kustom dan pembaca konfigurasi berbasis *dot-notation* (contoh: `Config::get('app.name')`).
- **Core Database**: PDO MySQL wrapper singleton (`core/Database.php`) dengan helper `Database::query()`.
- **Base Controller**: Kelas Controller dasar dengan method `view()` untuk merender view PHP dengan ekstraksi data otomatis.
- **Boilerplate Autentikasi**: Kerangka dasar `core/Auth.php`.
- **Integrasi TailwindCSS v4**: Konfigurasi `@tailwindcss/cli` di `package.json` untuk build & watch CSS.
- **Helper Global Dasar**: Fungsi `route()` dan `redirect()`.
- **Halaman Error Kustom**: Halaman `404 Not Found` dasar di `app/Views/errors/404.php`.

### Diubah
- **Pembaruan Dokumentasi (`README.md`)**: Menambahkan panduan instalasi lengkap, konfigurasi `.env`, dan panduan direktori.
- **Footer Dinamis**: Integrasi info nama perusahaan dan tagline ke dalam footer layout.

### Diperbaiki
- **Layout Footer**: Perbaikan tata letak ikon hak cipta (copyright) pada footer.
- **Cache Stylesheet**: Menambahkan pencegah cache styles (`?v=<?= time() ?>`) pada `header.php`.
