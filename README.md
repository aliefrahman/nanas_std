# Nanas.std

A lightweight, standard, and minimalist PHP Native MVC (Model-View-Controller) Framework.

---

## 🚀 Features

- **Clean MVC Architecture**: Simplified structure with clearly decoupled Controllers, Views, and Core libraries.
- **Fast & Minimal Routing**: Core router (`core/Router.php`) with support for basic routing and middleware hooks.
- **TailwindCSS v4 Integrated**: Pre-configured TailwindCSS v4 with `@tailwindcss/cli` compilation.
- **Database Ready**: Lightweight PDO database wrapper singleton (`core/Database.php`).
- **Autoloading**: PSR-4-like custom autoloader for autoloading `Core\` and `App\` namespaces.

---

## 📁 Directory Structure

```text
├── app/
│   ├── Controllers/      # Application Controllers (e.g. HomeController)
│   ├── Models/           # Database Models (empty by default)
│   └── Views/            # PHP templates (home, layouts)
│       └── layouts/      # Header and footer partial templates
├── config/
│   ├── app.php           # App name, env, timezone configurations
│   └── database.php      # PDO MySQL configuration database connection details
├── core/
│   ├── Auth.php          # Auth helper class
│   ├── Config.php        # Config loader (dot notation & .env wrapper)
│   ├── Controller.php    # Base controller providing view rendering
│   ├── Database.php      # PDO database singleton connection
│   └── Router.php        # Request router mapping URLs to Controllers
├── public/
│   ├── assets/           # Compiled CSS and static assets
│   └── index.php         # Entry point for routing bootstrap
├── src/
│   └── input.css         # TailwindCSS source file
├── .env                  # Environment secrets configuration file
├── package.json          # Node script setup for Tailwind v4 compiler
└── README.md             # This document
```

---

## 🛠️ Installation & Setup

### 1. Prerequisites

- **PHP**: `>= 8.0`
- **NodeJS & npm**: For compiling CSS

### 2. Install Dependencies

Run the following command to install the development dependencies (TailwindCSS CLI):

```bash
npm install
```

### 3. Environment Configuration

Duplicate the `.env.example` file to `.env` and set up your application URL and database credentials:

```ini
APP_NAME="Nanas.std"
APP_BASE_URL="http://localhost/indonesiatourguide/public"
APP_ENV="development"

DB_HOST="127.0.0.1"
DB_NAME="your_database_name"
DB_USER="root"
DB_PASS="your_password"
```

---

## 💻 Development Commands

### Compile TailwindCSS v4

For compilation:

```bash
npm run build
```

For real-time compilation during development (watch mode):

```bash
npm run dev
```

### Run the Server

You can run the built-in PHP server inside the root directory:

```bash
php -S localhost:8000 -t public
```

Then navigate to `http://localhost:8000` in your web browser.

---

## 📝 License
