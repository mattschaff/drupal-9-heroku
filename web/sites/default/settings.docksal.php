<?php

/**
 * @file
 * Docksal db default.
 */

$databases = [
  'default' =>
    [
      'default' =>
      [
        'database' => 'default',
        'username' => 'user',
        'password' => 'user',
        'host' => 'db',
        'port' => '',
        'driver' => 'mysql',
        'prefix' => '',
      ],
    ],
];

// Default docksal url.
if (isset($_SERVER['HTTP_HOST'])) {
  $settings['trusted_host_patterns'][] = '^' . $_SERVER['HTTP_HOST'] . '$';
}
// Workaround for permission issues with NFS shares in Vagrant.
$settings['file_chmod_directory'] = 0777;
$settings['file_chmod_file'] = 0666;

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['container_yamls'][] = __DIR__ . '/local.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

$config['system.logging']['error_level'] = 'verbose';

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);