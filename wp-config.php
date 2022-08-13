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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ks406989/wordpress' );

/** Database username */
define( 'DB_USER', 'ks406989' );

/** Database password */
define( 'DB_PASSWORD', 'v2_3tLcb_xrwFdK7jdX2X62CPq49YMcm' );

/** Database hostname */
define( 'DB_HOST', 'db.bit.io' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vubibfshqgsevy3wluuzeh8rvxvnqdaqcydsfzgsnx0aicambc7ykiok8hf5su6c' );
define( 'SECURE_AUTH_KEY',  'lfmnuo4gyy6oftvnmmn6hnpklobm76c0qidely31glxp451ag6jryhkozvagbp3v' );
define( 'LOGGED_IN_KEY',    'qt4vsyyxzkgpm19ibozwmlnjrewbbthmslwlggg5uevcb6086oklwxzpxolufhtp' );
define( 'NONCE_KEY',        'slk2zmiurye8aesp3wg0m4lrhxemcgvazy7l9mgyvele3yjicgkvopw4cwiycfmp' );
define( 'AUTH_SALT',        'v4mmqpsjnekcnl8mgyfectmmggyxhnjqd80wn0iiaczil2ofklr3oughm6zul4qy' );
define( 'SECURE_AUTH_SALT', 'vdffqux7upmck68hccsc0hlsfsaqpewsumsxmfuqgzado05tfcuppoy7ojinrnjy' );
define( 'LOGGED_IN_SALT',   'fwjyzs2ut132bg43omobwt8xjq29udexazlkd3dhropkr6jx1hoazzmk7thpx6ji' );
define( 'NONCE_SALT',       'tnqcppgwrhh4vrripxr522odt3k5ocbjw6q8pq9wfhnumbp2unritas0lubofyqq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbq_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
