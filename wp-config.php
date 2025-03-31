<?php
define('DB_NAME', 'mydb');
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));

define('WP_REDIS_HOST', getenv('REDIS_HOST'));
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_DATABASE', 0);
define('WP_CACHE', true);

define('WP_SITEURL', getenv('IP'));
define('WP_HOME', getenv('IP'));


#define('WP_SITEURL', 'http://localhost/wordpress');
#define('WP_HOME', 'http://localhost/wordpress');

$table_prefix  = 'wp_';

/**
 *  * WordPress Localized Language, defaults to English.
 *   *
 *    * Change this to localize WordPress. A corresponding MO file for the chosen
 *     * language must be installed to wp-content/languages. For example, install
 *      * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 *       * language support.
 *        */
define('WPLANG', '');

/**
 *  * For developers: WordPress debugging mode.
 *   *
 *    * Change this to true to enable the display of notices during development.
 *     * It is strongly recommended that plugin and theme developers use WP_DEBUG
 *      * in their development environments.
 *       */
define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
                define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
