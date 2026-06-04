<?php

namespace App\Middlewares;

use Core\Request;

class VerifyCsrfToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected array $except = [];

    /**
     * Handle the incoming request.
     */
    public function handle(): void
    {
        $request = new Request();

        if ($this->isReading($request) || $this->inExceptArray($request)) {
            return;
        }

        // Check token from POST parameter or X-CSRF-TOKEN header
        $token = $request->input('csrf_token') ?: ($_SERVER['HTTP_X_CSRF_TOKEN'] ?? '');

        if (!$token || $token !== ($_SESSION['csrf_token'] ?? '')) {
            http_response_code(403);
            
            // Render a clean error message
            echo "403 Forbidden: CSRF token mismatch or missing. Please refresh the page and try again.";
            exit;
        }
    }

    /**
     * Determine if the HTTP request method is one that doesn't modify state (GET, HEAD, OPTIONS).
     */
    protected function isReading(Request $request): bool
    {
        return in_array($request->getMethod(), ['GET', 'HEAD', 'OPTIONS']);
    }

    /**
     * Determine if the request URI is in the excluded list.
     */
    protected function inExceptArray(Request $request): bool
    {
        $uri = $request->getUri();

        foreach ($this->except as $except) {
            if ($except === '/') {
                if ($uri === '/') {
                    return true;
                }
                continue;
            }

            $exceptClean = trim($except, '/');
            $uriClean = trim($uri, '/');

            if ($exceptClean === $uriClean || str_starts_with($uriClean, $exceptClean . '/')) {
                return true;
            }
        }

        return false;
    }
}
