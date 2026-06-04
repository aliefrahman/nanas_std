# Nanas.std

A lightweight, standard, and minimalist PHP Native MVC (Model-View-Controller) Framework.

---

## 🚀 Features

- **Clean MVC Architecture**: Simplified structure with clearly decoupled Controllers, Views, and Core libraries.
- **Advanced Routing**: Core router (`core/Router.php`) with support for dynamic parameters (`/user/{id}`), route grouping (`prefix`), and middleware hooks.
- **CSRF Protection**: Automatic session token generation, `csrf_field()` helper, and a dedicated `VerifyCsrfToken` middleware for state-changing HTTP requests.
- **XSS Protection**: Global helper functions `esc()` and `e()` for secure output escaping in views.
- **Input Sanitization & Validation**: Feature-rich `Request` and `Validator` classes supporting rule sets like `required`, `email`, `min:N`, `max:N`, and automatic flash-back session errors/old input.
- **TailwindCSS v4 Integrated**: Pre-configured TailwindCSS v4 with `@tailwindcss/cli` compilation.
- **Database Ready**: Lightweight PDO database wrapper singleton (`core/Database.php`).
- **Autoloading**: PSR-4-like custom autoloader for autoloading `Core\` and `App\` namespaces.

---

## 📁 Directory Structure

```text
├── app/
│   ├── Controllers/      # Application Controllers (e.g. HomeController)
│   ├── Middlewares/      # Request Middlewares (e.g. VerifyCsrfToken)
│   ├── Models/           # Database Models (empty by default)
│   └── Views/            # PHP templates (home, layouts)
│       └── layouts/      # Header and footer partial templates
├── config/
│   ├── app.php           # App name, env, timezone configurations
│   └── database.php      # PDO MySQL configuration database connection details
├── core/
│   ├── Auth.php          # Auth helper class
│   ├── Config.php        # Config loader (dot notation & .env wrapper)
│   ├── Controller.php    # Base controller providing request reference and view rendering
│   ├── Database.php      # PDO database singleton connection
│   ├── Request.php       # HTTP Request wrapper (inputs, method, uri, validation)
│   ├── Router.php        # Regex router supporting groups, params, and middleware
│   └── Validator.php     # Input validator with session flashing
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

## 🔒 Security Features

### 1. CSRF Protection
Every `POST`, `PUT`, `DELETE`, and `PATCH` request is protected by default using the `VerifyCsrfToken` middleware. To include the token in your forms, use the helper function:

```html
<form action="<?= route('/submit') ?>" method="POST">
    <?= csrf_field() ?>
    <!-- inputs -->
    <button type="submit">Kirim</button>
</form>
```

You can exclude specific URIs (e.g., API Webhooks) from CSRF protection by adding them to the `$except` array in `app/Middlewares/VerifyCsrfToken.php`.

### 2. XSS Protection
Escape user input or dynamic values easily inside your view templates using `e()` or `esc()`:

```html
<p>Halo, <?= e($username) ?>!</p>
```

### 3. Input Validation
Handle input validation directly inside your controller using the `$request->validate()` method:

```php
// app/Controllers/UserController.php
public function register(Request $request)
{
    $validator = $request->validate([
        'name' => 'required|alpha|min:3',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed'
    ]);

    if ($validator->fails()) {
        back(); // Redirect back with errors and old input flashed
    }

    // Process valid data
}
```

In your views, you can retrieve validation errors and old inputs using:
- `errors('field_name')`: returns error messages for the field.
- `old('field_name')`: returns the previously submitted input value.

---

## 🛣️ Advanced Routing

### 1. Dynamic Route Parameters
Define dynamic URL segments using curly braces `{}`. These values are automatically passed as positional arguments to your controller/closure:

```php
// Route
$router->get('/user/{id}/post/{slug}', function($id, $slug, Request $request) {
    echo "User ID: " . esc($id);
    echo "Slug: " . esc($slug);
});
```

### 2. Route Grouping
Group related routes to share path prefixes or middleware:

```php
// Prefix Grouping
$router->group(['prefix' => '/api/v1'], function($router) {
    $router->get('/users', [ApiController::class, 'users']);
    $router->get('/user/{id}', [ApiController::class, 'user']);
});
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
This project is open-sourced software licensed under the [ISC License](LICENSE).
