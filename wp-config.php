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
define( 'DB_NAME', 'quizz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j${e2vMGo:c1>*>:#:2r/6H4;b0bW%k^z0&Rv<(!v`-.pKegZX?IH`7 |9:b3rdj' );
define( 'SECURE_AUTH_KEY',  ':0,u%Hb;h|$cTOmrBsNpIoYyQh4 Jo%`wbU#xaT25Lp}%vk6Q~`[;NM).I8>,9P?' );
define( 'LOGGED_IN_KEY',    '*sQ1/)I;Qe%QK;M1s]R@b)ijmqGA;9ocH!H_itJ#u(/q`_}-n(br5S]8/R[=;HQO' );
define( 'NONCE_KEY',        'KcVew3_{a:1.n|+<XcXgVeJNLocY<37],sNFKNq6wHss;::X2M23rZ ! N5&TG#`' );
define( 'AUTH_SALT',        '?78ce}p8EMEg,t|Zc|+~JX[pokm5[=G !#QpC-9OBEq!cf!oT.{L@DS-v8?QAe*b' );
define( 'SECURE_AUTH_SALT', '}RM9af`C`{qy,8I+pl(x33F9tQw1d>eJWT$^9g|K64{`PuR^6.-}#kZ N(u4)C2v' );
define( 'LOGGED_IN_SALT',   '!`(f4) Ro{vCopZ{5Cq_8V_Zc.j#5IeVqYWPA *Rr 9]#k/Vx[1c#y6H%s2!~Fl8' );
define( 'NONCE_SALT',       '*%KQGH]s?!T:*aynQ+$5moY:02PTRfOHq<[HiB//+oyJC9j)W=Q[+Z?cyslmS5vH' );

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
