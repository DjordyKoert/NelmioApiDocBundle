<?php declare(strict_types = 1);

use PHPStan\DependencyInjection\NeonAdapter;

$adapter = new NeonAdapter();

$config = [];
if (PHP_VERSION_ID < 70300) {
    $config = array_merge_recursive($config, $adapter->load(__DIR__ . '/phpstan-7.3.neon'));
}

if (PHP_VERSION_ID >= 80000) {
    $config = array_merge_recursive($config, $adapter->load(__DIR__ . '/phpstan-8.0.neon'));
}

if (PHP_VERSION_ID >= 80100) {
    $config = array_merge_recursive($config, $adapter->load(__DIR__ . '/phpstan-8.1.neon'));
}

$config['parameters']['phpVersion'] = PHP_VERSION_ID;

return $config;
