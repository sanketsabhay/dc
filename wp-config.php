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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dc' );

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
define( 'AUTH_KEY',         'C6{/EvbMw3PHtFCDPDU9%7R$t,ntbrm.,HLE-z5ov%KNd8}_|W_B2e<vj_s!9#.a' );
define( 'SECURE_AUTH_KEY',  'V.X9W( T<)IS0|LiJne(q=0(5mK]%4kEki?Z5<*r?~]4DA&NH:w60^?arbljNyey' );
define( 'LOGGED_IN_KEY',    'ALZ=yN]7}^,Uo~fwqN~)O]CQ$/uME%3yQ=Y9N]8hJM<(Ejf>)Qw`{)u@p]U@,%?8' );
define( 'NONCE_KEY',        'N@H.^S20v,uU/ OF!,%U/q(<wo|IF)e@#6/jn]hT.iVvL_HqUw!R1+J#/ZoJ<bEJ' );
define( 'AUTH_SALT',        '>YxY]A_ DVnbln[?T0YgIc>GPVbf$cl,?,H,]f5wY*p7Ix!O/uEmK-L]8yT*$YLL' );
define( 'SECURE_AUTH_SALT', 'BEUJGM$xeBWq&IEli#Un2OYZ;e5Lke?#>l-0bD0Fa-xHe=IW(d.rGb|9M&eU4A:N' );
define( 'LOGGED_IN_SALT',   'z>e+S:dVWIoS`~gFXuZ7LxPrxe%L.H6y?z/I*fwABp<a^f9BMEIr(4@bf,u?&Mj-' );
define( 'NONCE_SALT',       'Dt3B#,^j]AH>T6 &v[-m.ASX!cwc mEj(kv,_LWF/vtiOZ0n.[@6FyN_Z].B_0^-' );

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
