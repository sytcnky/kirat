<?php
function loadJsonData($file) {
    // HER ZAMAN /kirat-php/data/ yolunu çöz
    $root = realpath(__DIR__ . '/../');
    $path = $root . '/data/' . $file;

    if (!file_exists($path)) {
        trigger_error("JSON file not found: $path", E_USER_WARNING);
        return [];
    }

    $json = file_get_contents($path);
    $data = json_decode($json, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        trigger_error("JSON decode error in $file: " . json_last_error_msg(), E_USER_WARNING);
        return [];
    }

    return $data;
}



