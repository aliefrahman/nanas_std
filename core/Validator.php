<?php

namespace Core;

class Validator
{
    protected array $errors = [];

    /**
     * Validate data against defined rules.
     */
    public function validate(array $data, array $rules): void
    {
        foreach ($rules as $field => $fieldRules) {
            $value = $data[$field] ?? null;
            $rulesArray = is_string($fieldRules) ? explode('|', $fieldRules) : $fieldRules;

            foreach ($rulesArray as $rule) {
                $ruleName = $rule;
                $ruleValue = null;

                if (strpos($rule, ':') !== false) {
                    [$ruleName, $ruleValue] = explode(':', $rule, 2);
                }

                $this->applyRule($field, $value, $ruleName, $ruleValue, $data);
            }
        }

        if ($this->fails()) {
            $_SESSION['_errors'] = $this->errors;
            $_SESSION['_old'] = $data;
        }
    }

    /**
     * Apply a specific rule to a field value.
     */
    protected function applyRule(string $field, $value, string $ruleName, $ruleValue, array $data): void
    {
        $fieldName = ucwords(str_replace('_', ' ', $field));

        switch ($ruleName) {
            case 'required':
                if ($value === null || $value === '') {
                    $this->addError($field, "{$fieldName} wajib diisi.");
                }
                break;

            case 'email':
                if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($field, "Format {$fieldName} harus berupa email yang valid.");
                }
                break;

            case 'min':
                $min = (int)$ruleValue;
                if (!empty($value) && strlen((string)$value) < $min) {
                    $this->addError($field, "{$fieldName} minimal harus {$min} karakter.");
                }
                break;

            case 'max':
                $max = (int)$ruleValue;
                if (!empty($value) && strlen((string)$value) > $max) {
                    $this->addError($field, "{$fieldName} maksimal harus {$max} karakter.");
                }
                break;

            case 'numeric':
                if (!empty($value) && !is_numeric($value)) {
                    $this->addError($field, "{$fieldName} harus berupa angka.");
                }
                break;

            case 'alpha':
                if (!empty($value) && !preg_match('/^[a-zA-Z\s]+$/', $value)) {
                    $this->addError($field, "{$fieldName} hanya boleh berisi huruf.");
                }
                break;

            case 'alphanumeric':
                if (!empty($value) && !preg_match('/^[a-zA-Z0-9\s]+$/', $value)) {
                    $this->addError($field, "{$fieldName} hanya boleh berisi huruf dan angka.");
                }
                break;

            case 'confirmed':
                $confirmationField = $field . '_confirmation';
                $confirmationValue = $data[$confirmationField] ?? null;
                if ($value !== $confirmationValue) {
                    $this->addError($field, "Konfirmasi {$fieldName} tidak cocok.");
                }
                break;
        }
    }

    /**
     * Add error message to errors list.
     */
    protected function addError(string $field, string $message): void
    {
        if (!isset($this->errors[$field])) {
            $this->errors[$field] = [];
        }
        $this->errors[$field][] = $message;
    }

    /**
     * Check if validation failed.
     */
    public function fails(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Check if validation passed.
     */
    public function passes(): bool
    {
        return empty($this->errors);
    }

    /**
     * Get all validation errors.
     */
    public function errors(): array
    {
        return $this->errors;
    }
}
