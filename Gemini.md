# 🤖 Konteks Proyek: Indonesia Tour Guide (MVP)

File ini berisi panduan, konteks, aturan, dan roadmap pengembangan untuk AI assistant dalam bekerja pada proyek ini. Harap baca dan patuhi panduan ini secara ketat sebelum menghasilkan kode, terutama mengingat batasan infrastruktur **Shared Hosting**.

## 1. Gambaran Umum Proyek

- **Nama Produk:** Indonesia Tour Guide (Web Aplikasi Tour & Travel)
- **Status:** Final Draft - MVP (Target Global & Domestik)
- **Deskripsi:** Platform pemesanan perjalanan yang menghubungkan wisatawan domestik dan mancanegara dengan pengalaman wisata lokal (Bali, Lombok, Makassar, Toraja, dll).
- **Tujuan Utama:** Memfasilitasi transaksi lintas negara dengan lokalisasi konten (ID/EN) dan fleksibilitas mata uang (IDR/USD), membangun jaringan mitra B2B dengan komisi berjenjang, dan menjaga biaya operasional serendah mungkin di shared hosting.
- **Target KPI:** Page load < 3 detik, Rasio 30% asing / 70% domestik, Conversion Rate > 3%.

## 2. Tech Stack (Spesifikasi Teknologi)

- **Frontend:** HTML5, Vanilla JavaScript (tanpa framework berat seperti React/Vue), Tailwind CSS v4.
- **Backend:** PHP Native MVC (Tanpa framework berat seperti Laravel/CodeIgniter untuk menghemat resource shared hosting).
- **Database:** MySQL. Pendekatan tabel statis dwibahasa (kolom terpisah untuk ID dan EN) untuk mengurangi kerumitan `JOIN` dan menjaga performa.
- **Infrastruktur:** Shared Hosting (Optimasi gambar, session secure, timezone Asia/Makassar atau Asia/Jakarta).

## 3. Struktur Direktori (PHP Native MVC)

Ikuti struktur ini untuk menjaga konsistensi dan kemudahan deployment di shared hosting:

```text
/

├── /app
│   ├── /Middlewares  # Base Controller, Model, Router, dan Helper (Session/Currency/Lang handler)
│   ├── /controllers  # Logika aplikasi (TourController, BookingController, AuthController, dll)
│   ├── /Models       # Interaksi database (TourModel, UserModel, OrderModel, dll)
│   └── /views        # Template HTML/PHP (dapat menggunakan partials untuk header/footer bilingual)
├── /config           # Konfigurasi database, timezone, dan constanta global
├── /core             # Core logic dan helper function
├── /public           # Document root. Berisi index.php, /css, /js, /images (optimasi wajib)
│   ├── assets/
│   │   └── css/      # Compiled CSS dari Tailwind
│   │   └── js/       # Compiled JS dari Tailwind
│   │   └── images/   # Compiled Images dari Tailwind
│   ├── uploads/      # Uploads dari user (User Images & Files)
│   └── .htaccess     # Konfigurasi Apache untuk PHP Native MVC routing
│   └── index.php     # Single entry point aplikasi
├── /src                # Source code untuk TailwindCSS v4
├── /database           # File SQL migrations atau schema awal
└── Gemini.md           # File konteks ini
```

## 4. Aturan Pengembangan Wajib (Anti-Constraint Breaking)

- **PHP:**
  - Gunakan `mysqli` native denganprepared statements untuk keamanan (prevent SQL Injection).
  - Hindari query dengan melakukanescaping data string `mysqli_real_escape_string()`
  - Gunakan fungsi `addslashes()` pada string yang akan di-insert ke database.
  - Gunakan fungsi `stripslashes()` pada string yang akan di-display ke user.
  - session_set_cookie_params().
  - session_regenerate_id().
  - session_start().
  - setcookie().
  - unset($\_SESSION[]).
  - session_destroy().
  - ini_set(); ini_get(); ini_alter().

## 5. Data Model & Schema (Schema Datar Dwibahasa untuk Efisiensi Shared Hosting)

```sql
    -- tours
CREATE TABLE `tours` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT,
    `category_id` BIGINT UNSIGNED NOT NULL,
    `price_min` BIGINT UNSIGNED NOT NULL,
    `price_max` BIGINT UNSIGNED NOT NULL,
    `is_active` BOOLEAN NOT NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL,
    `title_id` VARCHAR(255) NOT NULL,
    `title_en` VARCHAR(255) NOT NULL,
    `summary_id` VARCHAR(255) NULL,
    `summary_en` VARCHAR(255) NULL,
    `image_path` VARCHAR(255) NOT NULL,
    `duration` VARCHAR(255) NULL,
    `highlight_id` LONGTEXT NULL,
    `highlight_en` LONGTEXT NULL,
    `description_id` LONGTEXT NULL,
    `description_en` LONGTEXT NULL,
    PRIMARY KEY (`id`),
    INDEX `tours_is_active_idx` (`is_active`),
    INDEX `tours_deleted_at_idx` (`deleted_at`),
    CONSTRAINT `tours_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tour_bookings
CREATE TABLE `tour_bookings` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT,
    `tour_id` BIGINT UNSIGNED NOT NULL,
    `user_id` BIGINT UNSIGNED NULL,
    `customer_name` VARCHAR(255) NULL,
    `customer_email` VARCHAR(255) NULL,
    `customer_phone` VARCHAR(50) NULL,
    `customer_address` TEXT NULL,
    `payment_status` VARCHAR(255) NULL,
    `order_status` VARCHAR(255) NULL,
    `total_amount` BIGINT UNSIGNED NOT NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL,
    PRIMARY KEY (`id`),
    INDEX `tour_bookings_tour_id_fk` (`tour_id`),
    INDEX `tour_bookings_user_id_fk` (`user_id`),
    INDEX `tour_bookings_payment_status_idx` (`payment_status`),
    INDEX `tour_bookings_order_status_idx` (`order_status`),
    INDEX `tour_bookings_deleted_at_idx` (`deleted_at`),
    CONSTRAINT `tour_bookings_tour_id_fk` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
    CONSTRAINT `tour_bookings_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tour_reviews
CREATE TABLE `tour_reviews` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT,
    `tour_id` BIGINT UNSIGNED NOT NULL,
    `user_id` BIGINT UNSIGNED NULL,
    `rating` INT UNSIGNED NULL,
    `comment` TEXT NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL,
    PRIMARY KEY (`id`),
    INDEX `tour_reviews_tour_id_fk` (`tour_id`),
    INDEX `tour_reviews_user_id_fk` (`user_id`),
    INDEX `tour_reviews_deleted_at_idx` (`deleted_at`),
    CONSTRAINT `tour_reviews_tour_id_fk` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
    CONSTRAINT `tour_reviews_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- users
CREATE TABLE `users` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(50) NULL,
    `address` TEXT NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL,
    PRIMARY KEY (`id`),
    INDEX `users_email_idx` (`email`),
    INDEX `users_deleted_at_idx` (`deleted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- wishlist
CREATE TABLE `wishlist` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT,
    `user_id` BIGINT UNSIGNED NOT NULL,
    `tour_id` BIGINT UNSIGNED NOT NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL,
    PRIMARY KEY (`id`),
    INDEX `wishlist_user_id_fk` (`user_id`),
    INDEX `wishlist_tour_id_fk` (`tour_id`),
    INDEX `wishlist_deleted_at_idx` (`deleted_at`),
    CONSTRAINT `wishlist_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
    CONSTRAINT `wishlist_tour_id_fk` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
