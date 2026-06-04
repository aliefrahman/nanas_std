<?php

namespace Core;

class Router {
    protected array $routes = [];
    protected ?string $lastMethod = null;
    protected ?string $lastPath = null;
    protected array $globalMiddlewares = [
        \App\Middlewares\VerifyCsrfToken::class
    ];
    
    // Group configuration active stack
    protected array $groupStack = [];

    /**
     * Define a group of routes sharing prefix and/or middleware.
     */
    public function group(array $attributes, callable $callback): void
    {
        $this->groupStack[] = $attributes;
        $callback($this);
        array_pop($this->groupStack);
    }

    /**
     * Register a GET route.
     */
    public function get(string $path, $handler): self {
        return $this->addRoute('GET', $path, $handler);
    }

    /**
     * Register a POST route.
     */
    public function post(string $path, $handler): self {
        return $this->addRoute('POST', $path, $handler);
    }

    /**
     * Register route internally, merging active group prefix and middleware.
     */
    protected function addRoute(string $method, string $path, $handler): self
    {
        $prefix = '';
        $middlewares = [];

        foreach ($this->groupStack as $group) {
            if (isset($group['prefix'])) {
                $prefix .= '/' . trim($group['prefix'], '/');
            }
            if (isset($group['middleware'])) {
                $middlewares = array_merge($middlewares, (array)$group['middleware']);
            }
        }

        // Join prefix and path safely
        $path = '/' . trim($prefix . '/' . trim($path, '/'), '/');
        if ($path === '') {
            $path = '/';
        }

        $this->routes[$method][$path] = [
            'handler' => $handler,
            'middlewares' => $middlewares
        ];

        $this->lastMethod = $method;
        $this->lastPath = $path;

        return $this;
    }

    /**
     * Attach middleware to the last registered route.
     */
    public function middleware(array $middlewares): self {
        if ($this->lastMethod && $this->lastPath) {
            $this->routes[$this->lastMethod][$this->lastPath]['middlewares'] = array_merge(
                $this->routes[$this->lastMethod][$this->lastPath]['middlewares'],
                $middlewares
            );
        }
        return $this;
    }

    /**
     * Resolve the request URI and run the matching route.
     */
    public function resolve(): void {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // Normalize base path if running in a subdirectory (e.g. /nanascms/public)
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $basePath = dirname($scriptName);
        if ($basePath !== '/' && $basePath !== '\\') {
            if (strpos($uri, $basePath) === 0) {
                $uri = substr($uri, strlen($basePath));
            }
        }

        // Normalize URI: strip trailing slashes, keep '/' as is
        if ($uri !== '/' && str_ends_with($uri, '/')) {
            $uri = rtrim($uri, '/');
        }
        
        if ($uri === '') {
            $uri = '/';
        }

        // 1. Static Route Match
        $route = $this->routes[$method][$uri] ?? null;
        $params = [];

        // 2. Dynamic Route Match (Regex)
        if (!$route) {
            foreach ($this->routes[$method] ?? [] as $routePath => $routeConfig) {
                if (strpos($routePath, '{') !== false) {
                    // Convert {param} to pattern ([^/]+)
                    $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([^/]+)', $routePath);
                    $regex = '#^' . $pattern . '$#';

                    if (preg_match($regex, $uri, $matches)) {
                        $route = $routeConfig;
                        
                        // Extract parameter values
                        array_shift($matches);
                        preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $routePath, $paramNames);
                        $paramNames = $paramNames[1];

                        foreach ($paramNames as $index => $name) {
                            $params[$name] = $matches[$index] ?? null;
                        }
                        break;
                    }
                }
            }
        }

        if (!$route) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        // Support both old raw handlers and new route configurations
        $handler = is_array($route) && isset($route['handler']) ? $route['handler'] : $route;
        $middlewares = is_array($route) && isset($route['middlewares']) ? $route['middlewares'] : [];

        // Run global middlewares first
        foreach ($this->globalMiddlewares as $middlewareClass) {
            if (class_exists($middlewareClass)) {
                $middleware = new $middlewareClass();
                if (method_exists($middleware, 'handle')) {
                    $middleware->handle();
                }
            }
        }

        // Run route-specific middlewares sequentially
        foreach ($middlewares as $middlewareClass) {
            if (class_exists($middlewareClass)) {
                $middleware = new $middlewareClass();
                if (method_exists($middleware, 'handle')) {
                    $middleware->handle();
                }
            }
        }

        $request = new Request();
        // Dynamic parameters passed first, Request object passed last
        $arguments = array_merge(array_values($params), [$request]);

        if (is_callable($handler)) {
            call_user_func_array($handler, $arguments);
            return;
        }

        if (is_array($handler)) {
            [$controllerClass, $methodName] = $handler;
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $methodName)) {
                    call_user_func_array([$controller, $methodName], $arguments);
                    return;
                }
            }
        }

        http_response_code(500);
        echo "500 Internal Server Error: Invalid handler configuration.";
    }
}
