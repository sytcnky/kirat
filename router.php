<?php

// Built-in server için static dosya kontrolü
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $fullPath = __DIR__ . $path;
    if (is_file($fullPath)) {
        return false; // PHP built-in server static dosyayı kendisi verir
    }
}

// Normal router logic
require_once __DIR__ . '/core/kernel.php';
