<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cn1UoyVWrwQFmGlNXORxdUw7gTKa67ZBdrRlgWZCmdAZ0oBkO/z8f6rqut9ZsVMJkh+TuJfSeG+wFbfJr1To3Q==');
define('SECURE_AUTH_KEY',  'Y3mTSF7sKPhMO13BCP+iUc3OfFu7awk6Ot4pR/1wMuf7PIXhVZdxPBlO5f2IsK1KzhMCCeXPV45OC/wEsAEbSQ==');
define('LOGGED_IN_KEY',    'mTxsZ3APh0qe+wzPXNRtZwlcouE0pdZqzfw9hj4XVp1FQCz0VXmX7SLvnST3m0CA2R8Zi8s8Z0RqZiN4Pp8Ezw==');
define('NONCE_KEY',        '76+C+Uc1bP+2HTbExtdWH+jR1V8W+ujHX7zwPnuWfIvF3cawNdxNmJZcm7a5s9Ma9RE6Gva4z7wb4tjrSru1KQ==');
define('AUTH_SALT',        'lfHvsKJOHCJbcT9JydGp6o69WZIZW41Chv0Jaa0KdvlYqUxhZ9OYIJJG0dr0KKOYQGAE+J+Fhznzxjkfogwf5g==');
define('SECURE_AUTH_SALT', '2WTCRQ8h9ys2rgwhOJLgfdbifAVO6rvEKxcehD1XqqZhu2slioj8pQaOAOEnzP7lnrIBI9NVRIiB8EULZ3YmkA==');
define('LOGGED_IN_SALT',   'hTZezIRMafVcFkhjhP84cgso3tm2ttM3bATDyzfwQlfhaEoBhm3rcKjt0rksRZ9KwsBzd+LK46nu8SGjWUPd2w==');
define('NONCE_SALT',       'qTY40+juuOTb9S6La7Ot8beGzGMKrT68eX07pTON1GgIbAf/C5gdk95KkDampCuxRKGzqa4ixByPIxj71pEQrg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
