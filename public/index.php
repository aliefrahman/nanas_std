<?php

// 1. Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF Token automatically if not present in session
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Global Routing Helpers for subdirectory support
function route(string $path): string
{
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $basePath = dirname($scriptName);
    if ($basePath === '/' || $basePath === '\\') {
        $basePath = '';
    }
    return $basePath . '/' . ltrim($path, '/');
}

function redirect(string $path): void
{
    header('Location: ' . route($path));
    exit;
}

function back(): void
{
    $referer = $_SERVER['HTTP_REFERER'] ?? route('/');
    header('Location: ' . $referer);
    exit;
}

// Global Security & Form Helpers
function csrf_token(): string
{
    return $_SESSION['csrf_token'] ?? '';
}

function csrf_field(): string
{
    return '<input type="hidden" name="csrf_token" value="' . e(csrf_token()) . '">';
}

function esc($value): string
{
    if (is_array($value)) {
        return '';
    }
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function e($value): string
{
    return esc($value);
}

function old(string $key, $default = null)
{
    $old = $_SESSION['_old'][$key] ?? $default;
    return esc($old);
}

function errors(string $key = null)
{
    if ($key === null) {
        return $_SESSION['_errors'] ?? [];
    }
    return $_SESSION['_errors'][$key] ?? null;
}

// 2. Register Simple Autoloader (Core\ -> core/, App\ -> app/)
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class);
    $parts = explode('/', $classPath);
    if (empty($parts))
        return;

    // Lowercase the first namespace level to match directories: Core -> core, App -> app
    $parts[0] = strtolower($parts[0]);
    $file = dirname(__DIR__) . '/' . implode('/', $parts) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

// 3. Define and resolve routes
use Core\Router;
use App\Controllers\HomeController;

$router = new Router();

// Route configuration
$router->get('/', [HomeController::class, 'index']);

// Run application
$router->resolve();

// 4. Clear Flash Data after request resolution (only if not redirected)
if (isset($_SESSION['_errors'])) {
    unset($_SESSION['_errors']);
}
if (isset($_SESSION['_old'])) {
    unset($_SESSION['_old']);
}

