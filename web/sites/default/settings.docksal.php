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

