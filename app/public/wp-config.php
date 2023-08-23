<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'G0ZRtk+W7/lc6M9ic5rU7meeLESw7ecY9Iyhn264by4XrXsBCI0psO2BK0XoskoAETWOpcgIHk/P8JKJWjCBfw==');
define('SECURE_AUTH_KEY',  'L7HMCUG92f3w2VmKLbqcVjgoj+aNojFIsJAyrczbrSAUhfC3hKmgtdqzoF/0xq+WHxH4l85yhPUabKnbCANqgg==');
define('LOGGED_IN_KEY',    'yYStE7l2U3/JDyltXaR11NWxhvhMZKZfirAV6Bm6CkCkA9VWGqshvEGHu0zFLE/U3uv9Q9tXI5+C6uzDII4QWA==');
define('NONCE_KEY',        '42op//cglKImlj7Sz3trnI3pVaHBRbWYhWEdGVGp0rHlUDOdLlh3oKBG2YMOQSANvgpdgZhksb/CxkMxVANpMg==');
define('AUTH_SALT',        '4A/+kwQHi17v6vALa7JBfHNspQ1Y+gXgE4hBYoXYDJxz8IN79P5Pg1BD5yJr8m8eKFtdgnhRv2wrVDIt/0Nu1w==');
define('SECURE_AUTH_SALT', 'HAYoG0hrEbg1gtKhrBJ7DDLk4RJYHIOnM6SWxKhbqTT0bS1daFz0M/6cRlRJBzTfqF4Y5Nz/xE7qDNIAnI74Zw==');
define('LOGGED_IN_SALT',   '1aH+4iTh+fEayNrcNLq3WPsJXBm681qSj72T+qEJPdqnYzV0eB0vVH1FY3lEWGJFMOUcYgHdTVv0YyH2IEcybw==');
define('NONCE_SALT',       'ApM9aO91eOrggARKTJ1gknd0eQkV289HRu9EkGzvLCgPrMyWSERvPkKPCSWbrBfdRai0MEis4W7JgSWwCrI9BA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
