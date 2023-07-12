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


define('AUTH_KEY',         'MgbV5+SpNPQAFDwCdZDkcRlxx8D94fsnTsUSCd1j3hKeCZXlYgBV8mtW6VbyWU+HO8pvQe/1UgXHXx5/StO0Ug==');
define('SECURE_AUTH_KEY',  'nkBpyDAVXUK+fJgpsu2TFUhCoWWbKe0KhPX7Kjj7yA1FnO+fH/PhItgkkKQhb+Bzp+uY0xfdcTcWVoIYGQaTIw==');
define('LOGGED_IN_KEY',    'Otbz4MD+gqIgJJ80sD+pS0ObjsCmKDiZemhoX5KK8UmSL4Q1LYnprFEAaS8bJpUsLLlRG9qi/TmxKWnegvLSzg==');
define('NONCE_KEY',        'ivf8K1JTFd7L7419eB3IaWmbXcUc+8s9N+ZYTRQMNruflN9jJm+w7tEuZ2Xi8qv9/x2lgV4WguUgHI/otGhsCA==');
define('AUTH_SALT',        '1jKhXTah9xrkyrAV0iuR2nITYMLVoAzCV+vApHS95F2rhJWMi41KwMNXgfy9VPtZ0+JZmVH9Re6e3e3K27a8uA==');
define('SECURE_AUTH_SALT', '2Jq1S8mt/XlzfnOrpIVZjZ9wSb/fgYHe2caWNch49eKwh01MjPTl0RQaYK7xMCh0A+2/5NYBthoFvtuJJWOk/Q==');
define('LOGGED_IN_SALT',   '66Cmo/cudl2ugueOxW5uKVmQ2UyB4L+cQ6dY5NgoGrjk3ua584DWVvkq1AKHKlFwdc7Lvc5EjvE2lZH4N88utw==');
define('NONCE_SALT',       'HgRMRu0OUi69MTmNd3oeVR2h2ITdFFyedSDgQY6dpS6ea4NDITMeE8LTCHUW/JVBwVd1EgheCwOPcp7K2SO+RA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
