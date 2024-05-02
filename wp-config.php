<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ejemplo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+(VH.O:d:gsjDqK^|OY~j/-IB?] >*a+B4.Wo;ir 5Z5*4r6hH[_RtO}SSJI(Pk&' );
define( 'SECURE_AUTH_KEY',  'qRMkJzK}yHN]gowMn.BD^UG$3]~UsHY ^{e[hL&~gj_UN^KEJ^@lU_Hkwic4!s:G' );
define( 'LOGGED_IN_KEY',    '_/]~9QZU?}TUkZW)|8.)]3}q1eSxQ,Qz!r2p!7V&mK$vwDo:<io~v}/kjvRSs^L&' );
define( 'NONCE_KEY',        ']Ip.RmVO4hU<Elp*px;euJV3Xm<d6@w}9>8KHj/_4c[j=(p/6,0oGz6bHOoq$w s' );
define( 'AUTH_SALT',        'VAX;rU09=of/E%iwH+7rZ#Z55aC#R,8r^7%AG()JQy]IT3M92&PkasP8qNzf$R;m' );
define( 'SECURE_AUTH_SALT', 'AYCQwT27([3lh|a&XY.>v*fNY!Y j,_9siX8n]zF11q}#VQ{L1m(b HJi]9q!Kz1' );
define( 'LOGGED_IN_SALT',   '|&V3X!3m;1H!IDs(KAn2:/af.C{!]jJW 8B);r1Zrmcf=Nk(%RnUXXwc,qc0?b/O' );
define( 'NONCE_SALT',       'r8ICY)SAWKc9tiZxs>wPPdZo1Atilm[-nkNs/OiE.2fyZ6_DIvy4`!8JF2D2mUO*' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
