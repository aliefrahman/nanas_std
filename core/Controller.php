<?php

namespace Core;

use Core\Config;

class Controller
{
    /**
     * Render view file
     *
     * @param string $name Name of the view file (e.g. 'home' or 'layout/main')
     * @param array $data Data array to extract and make available to the view
     */
    protected function view(string $name, array $data = []): void
    {
        $data['appBaseUrl'] = $data['appBaseUrl'] ?? Config::get('app.base_url');
        $data['appName'] = $data['appName'] ?? Config::get('app.name');

        extract($data);

        $viewPath = dirname(__DIR__) . "/app/Views/{$name}.php";

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            http_response_code(500);
            echo "Error: View '{$name}' not found at {$viewPath}";
        }
    }
}
