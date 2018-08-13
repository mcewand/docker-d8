<?php

$databases = array();

$config_directories = array();

$settings['hash_salt'] = 'dKPadu0eGrl8Vaun7PTWMShsdh7l1uCpdQvCK-ibpFuBoXKP0VX8b82yQx49XsyBWrEIAniaqw';
$settings['update_free_access'] = FALSE;

$config['system.site']['name'] = 'Test Site';
$config['system.theme']['default'] = 'bartik';

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
$config_directories['sync'] = 'sites/default/files/config_XG14BEPJRHNoBIfreZ8Ror2q_6XexURPG0IgD37NWdsp6W5H8RfxEheQEu1i-E2w9iI4Hj2lOA/sync';
