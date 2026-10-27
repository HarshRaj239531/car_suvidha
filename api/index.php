<?php

// Prepare writable /tmp storage directories for Vercel serverless environment
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    @mkdir($storagePath, 0755, true);
    @mkdir($storagePath . '/framework/views', 0755, true);
    @mkdir($storagePath . '/framework/cache', 0755, true);
    @mkdir($storagePath . '/framework/sessions', 0755, true);
    @mkdir($storagePath . '/logs', 0755, true);
}

// Forward incoming Vercel serverless requests to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
