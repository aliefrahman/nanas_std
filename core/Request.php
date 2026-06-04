<?php

namespace Core;

class Request
{
    protected array $data = [];
    protected string $method;
    protected string $uri;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $this->bootstrapInput();
    }

    /**
     * Bootstrap and sanitize all input data.
     */
    protected function bootstrapInput(): void
    {
        $inputs = [];

        // Parse GET parameters
        if (!empty($_GET)) {
            $inputs = array_merge($inputs, $_GET);
        }

        // Parse POST parameters
        if (!empty($_POST)) {
            $inputs = array_merge($inputs, $_POST);
        }

        // Parse JSON payload if Content-Type is application/json
        $contentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';
        if (strpos($contentType, 'application/json') !== false) {
            $json = file_get_contents('php://input');
            $decoded = json_decode($json, true);
            if (is_array($decoded)) {
                $inputs = array_merge($inputs, $decoded);
            }
        }

        $this->data = $this->sanitize($inputs);
    }

    /**
     * Sanitize input values recursively.
     * Trims string inputs.
     */
    protected function sanitize($data)
    {
        if (is_array($data)) {
            return array_map([$this, 'sanitize'], $data);
        }
        if (is_string($data)) {
            return trim($data);
        }
        return $data;
    }

    /**
     * Get the request method (GET, POST, etc.)
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Get the request path/URI.
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Retrieve all input data.
     */
    public function all(): array
    {
        return $this->data;
    }

    /**
     * Retrieve a specific input value.
     */
    public function input(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    /**
     * Retrieve a specific input value (alias of input).
     */
    public function get(string $key, $default = null)
    {
        return $this->input($key, $default);
    }

    /**
     * Retrieve only a subset of the input data.
     */
    public function only(array $keys): array
    {
        $result = [];
        foreach ($keys as $key) {
            $result[$key] = $this->input($key);
        }
        return $result;
    }

    /**
     * Validate the request inputs.
     */
    public function validate(array $rules): Validator
    {
        $validator = new Validator();
        $validator->validate($this->all(), $rules);
        return $validator;
    }
}
