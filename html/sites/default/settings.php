<?php

$settings['hash_salt'] = '_8bZE07BrPuCPdsb3wlc_oS4a3F1cFI3DE0jT7biGuueapdewNRfY2jnXFmA1txuAwYT3xwzXA';
$settings['config_sync_directory'] = $app_root . '/../config';
$settings['file_private_path'] = $app_root . '/../private';

// Automatically generated include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/settings.ddev.php';
if (getenv('IS_DDEV_PROJECT') == 'true' && is_readable($ddev_settings)) {
  require $ddev_settings;
}

$settings['trusted_host_patterns'] = [
  '^web$',
  '^(.*)\.ddev\.site$',
  '^drupalnorge\.no$',
  '^www\.drupalnorge\.no$',
  '^(.*)\.servebolt\.com$',
  '^(.*)\.servebolt\.cloud$',
];

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
