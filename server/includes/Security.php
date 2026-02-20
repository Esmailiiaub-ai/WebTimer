<?php

// Security Utility Functions

/**
 * Sanitize input to prevent XSS attacks.
 *
 * @param string $data
 * @return string
 */
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

/**
 * Check if the request is from a secure source.
 *
 * @return bool
 */
function is_secure_request() {
    return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
}

/**
 * Generate a CSRF token.
 *
 * @return string
 */
function generate_csrf_token() {
    return bin2hex(random_bytes(32));
}

/**
 * Validate CSRF token.
 *
 * @param string $token
 * @return bool
 */
function validate_csrf_token($token) {
    // This function should compare the token with a session-stored token
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

?>