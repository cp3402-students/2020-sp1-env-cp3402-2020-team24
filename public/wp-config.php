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
define( 'AUTH_KEY',         'TXCwfKeG@62}$Vi<v$KG4/up+kZI^426MLr_|h,YwD^M.4JwYII5pavnvMS@fN7^' );
define( 'SECURE_AUTH_KEY',  '5%g-1y*T1;`1-a)Cjpk-3_ii5A+n&+K.LN*X6sOluOxc$,T+S1^qPRz#8wI`qq<o' );
define( 'LOGGED_IN_KEY',    'ivPlOplL u<l?7K&>BuI~WT.{wDLki5ILJgsCbPx$ST=`HWebH)?:pba AnTgDlp' );
define( 'NONCE_KEY',        '{QFn`K&);6M8S7+e<W@*pbh9vcjMhTV$1-cdy._K?|Srx_Y`/:FR6H[Ea4~*u:vb' );
define( 'AUTH_SALT',        '?Wl5PjO9fM^^hu}!Ezef>FD t[19Ue3%c.6w=n[%J/i8}9&6@l`Ih--qhjf<P/{W' );
define( 'SECURE_AUTH_SALT', '}Tm.!d6^H@e`$k2!35-~{[Kz_UdXoQoL]BdLt*:1*=dljJ^!X/5CjX^<gzJ@xa7~' );
define( 'LOGGED_IN_SALT',   'w(68)!B)Q<>@x@A?cGnwIf+3NAusj(,:/bXTX(IqM$D9Y+0}lHZg:F6$JL<UTgMn' );
define( 'NONCE_SALT',       'DpD[88Ef@I`YC|][Hy+Y+YE?QU= bVOa5N(/T1_e&q]L~s-!>4Mc>^@=)t}G5^,<' );

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
