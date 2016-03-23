<?php

// If your dev site is on Pantheon, see the "Environment" section at
// admin/reports/status/php for the value.

// Settings Drupal will put at the bottom of settings.php upon install.
// If you use Pantheon, $settings['hash_salt'] will be in the environment
// variables, which you can see from admin/reports/status/php on the dev site.
// On Pantheon, $config_directories['sync'] directory will be in settings.php
// already.
$settings['hash_salt'] = '';
$settings['install_profile'] = 'standard';
#$config_directories['sync'] = '';

// PHP settings.
ini_set('date.timezone', 'UTC');

// URLs.
$settings['trusted_host_patterns'] = array(
  '^example\.dev$',
);

// Filesystem.
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '/tmp';

// On local and testing servers, disable caching.
$config['system.performance']['cache']['page.max_age'] = 0;
#$config['system.performance']['css']['preprocess'] = FALSE;
#$config['system.performance']['css']['preprocess'] = FALSE;
#$settings['omit_vary_cookie'] = TRUE;
#$settings['class_loader_auto_detect'] = FALSE;

// On local and testing servers, display all logging and error messages.
assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();
$config['system.logging']['error_level'] = 'verbose';

// Local development services and caches.
#$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
#$settings['cache']['bins']['render'] = 'cache.backend.null';
#$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

// Admin theme.
#$config['system.theme']['admin'] = 'seven';

// Development module / theme visibility.
#$settings['extension_discovery_scan_tests'] = TRUE;

// Default file/folder modes.
#$settings['file_chmod_directory'] = 0775;
#$settings['file_chmod_file'] = 0664;

// Emergency "everything's broken" toggles.
#$settings['rebuild_access'] = TRUE;
#$settings['update_free_access'] = TRUE;
#ini_set('memory_limit', '512M');
