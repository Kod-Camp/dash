/**
 * Appended Lando local development override configuration.
 *
 * A Composer extra.drupal-scaffolding and post-drupal-scaffold-cmd event script
 * appends this Lando local development override. This simplifies project on-
 * boarding.
 *
 * Typical uses of this Lando include:
 * - Setting database credentials.
 * - Setting config sync directory.
 * - Configure hash_salt.
 * - Configure trusted host patterns.
 */
if (getenv('LANDO')) {
  $lando_info = json_decode(getenv('LANDO_INFO'), TRUE);
  $settings['trusted_host_patterns'] = ['^.*\.lndo\.site$'];
  $settings['hash_salt'] = md5(getenv('LANDO_HOST_IP'));
  $settings['config_sync_directory'] = '../config/sync';
  $databases['default']['default'] = [
    'database' => $lando_info['database']['creds']['database'],
    'username' => $lando_info['database']['creds']['user'],
    'password' => $lando_info['database']['creds']['password'],
    'prefix' => '',
    'host' => $lando_info['database']['internal_connection']['host'],
    'port' => $lando_info['database']['internal_connection']['port'],
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  ];
}
