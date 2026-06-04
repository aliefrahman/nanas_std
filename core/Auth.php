<?php

namespace Core;

class Auth {
    public static function check(): bool {
        return false;
    }

    public static function user(): ?array {
        return null;
    }

    public static function role(): ?string {
        return null;
    }

    public static function hasRole(string $roleName): bool {
        return false;
    }

    public static function login(int $userId): void {
    }

    public static function logout(): void {
    }
}
