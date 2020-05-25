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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L:E<p;5ZXh^Ph:v7Yq6gNj(#N#~ 6w,3=DSQ_A)T$^Ezejhir9I8=1/C7s+ @9p,' );
define( 'SECURE_AUTH_KEY',  'fwfwjdQn9hL23+cMEA&)x6+yK`G)$?~$=J_s&cx1nv`t>|7{mN65qT>L*mJ93g&&' );
define( 'LOGGED_IN_KEY',    '<YsFZ{>- 6es.ni-enulH(`9N&3Kkx;(uusvNT],m9L%Sk-*|XYXo6V#}@vZ7mU=' );
define( 'NONCE_KEY',        '2#@;rUEzpr|3pcB=zGGXvX|h+`vW6?FEIfEG4L}s82~wn V~p^nJNMg0?JB{T){p' );
define( 'AUTH_SALT',        'K2[(;+}(mU}Ef)=ZbwH98HEa%!M8kP,+m{%o]0~W%oYa2>|1:54rbN/1ia`jOgt#' );
define( 'SECURE_AUTH_SALT', '!U`,!!5)}>./s{%Q9!?er7[5VMpXi]!$3]=ZL|v{M?4z*vel=EfvG0O (Q<VWyTg' );
define( 'LOGGED_IN_SALT',   'lSLTO|_0~6#_&{mE70e=p2PKo*|yFgps ^_w:sm$MZZ+!&?l|CyRgN$AjCM~=Mp9' );
define( 'NONCE_SALT',       'V`lr+_Ce[/N?s*+s$w:]FM!^Y+13@w$kAljV0c$pI]i[_3b{AK2%lCXse#6+gnL>' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
