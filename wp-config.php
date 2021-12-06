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
define( 'DB_NAME', 'Louis Vuitton' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|7UEQH4$X*P3>j7T.e`i#!{{qljS+;euOThR}d;A.w~67i?+196xMEMS-AH}!VrG' );
define( 'SECURE_AUTH_KEY',  '}g+`2K$*.+>%WAUxx $6KkvfC}&p71F1S6 Qea1*a~N;YM(bd?_C>?>Vn$z6t19Q' );
define( 'LOGGED_IN_KEY',    '/Q_{>8(5=MSWK@&T |Jij0G4C6Ka|]}wJ6/WJ<Uox%,./mvsx>DZ|=C$]<_bLl@U' );
define( 'NONCE_KEY',        'vL$CW[zE3!)q?*?=#fwR4=dzG~P=<+ST:;d |o$U,kR[u/Az9v9]duC`InF!I|#.' );
define( 'AUTH_SALT',        'kb4D}x;/;tm2[bT@gG;k:qZ^1&yfx)h>bQV=_aFuS:k8-NH]iB~MP&1gwNq/fz|&' );
define( 'SECURE_AUTH_SALT', 'H!6#q,=Hn)9ZZ(6PI.+%Q64mXkNxo2Yi-a+0d=gQvs36X>4`1wP<`J!8[7^6(jTG' );
define( 'LOGGED_IN_SALT',   'MmQ1jv$eqqj*z>zejeKfgiw][I!qfe?CD#V>{}K!VNi*N_P#xPSUH@e,~ure*mK(' );
define( 'NONCE_SALT',       '8M[5l|X1-M>aEG]M54-G$*,]DJD$n_N~OCC{$Y3lMz)>7u@zja=ixahi{UUiH=J4' );

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
