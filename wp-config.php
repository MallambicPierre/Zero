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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zero' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mBIMUwS7B90HzGYeqBzohRN8Ulm7DpFLY0adlKTghneZM4tWVNHz2NGKulbjA6P2' );
define( 'SECURE_AUTH_KEY',  'nsdxesJfz0908Hi1mIud6AERiVdNbPactTNOVa9jPpUX8nKMX5YZf2V7scXjl3oK' );
define( 'LOGGED_IN_KEY',    '5bXw0gj5XXN3bk3VlmlYiI3bP1u9K1kEqicJ9ff3mvQDShniFZ7asfBAJiUDy2Hz' );
define( 'NONCE_KEY',        'h1vHR6dtfU05mFLrZUA1ZGq4dp3j2DPrpW3r6iEOVGE2JcTRklgraEY5aKpnriz6' );
define( 'AUTH_SALT',        'jQ1sb25BdW8wTH6dV2wPOqiNAZT1z4kSUGG3EHSRtJkZ5w0HlCxQpSdr9Bbncf8O' );
define( 'SECURE_AUTH_SALT', '18GGSyDajJmuCjj6kG5qHvvwtq0RDIQx6CAtxQar5gWWaTO55IqeMIVfgwXYnmNK' );
define( 'LOGGED_IN_SALT',   'tzYqLxif2WQhWpUBzuKqytCfbVWGxYH8na5iDp7bEjUUlVlAdSLiM1OzGrp3KqLh' );
define( 'NONCE_SALT',       'rjIi4TrHBEBCB1e63OglMq9FzBeKGsdjgtOn5Z9Rg4c1bcT2nCuXn8Iz1gMK75UR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
