<?php

// 1. Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
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
