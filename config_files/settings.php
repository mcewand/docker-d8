<?php

$databases = array();

$config_directories = array();

$settings['hash_salt'] = 'dKPadu0eGrl8Vaun7PTWMShsdh7l1uCpdQvCK-ibpFuBoXKP0VX8b82yQx49XsyBWrEIAniaqw';
$settings['update_free_access'] = FALSE;

$config['system.site']['name'] = 'Test Site';

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'root',
  'password' => '12345',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'standard';
