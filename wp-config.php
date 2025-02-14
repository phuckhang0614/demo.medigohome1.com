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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo.medigohome1.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '990614' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'ox)U,Vp:T,r=7{~<gY[T}+1P=4-Scms?[dZ{h9-H}X`{{0CE3OkaxCNdF57oXYu7' );
define( 'SECURE_AUTH_KEY',  'M,=cg]exP!C>s{nJLe9*^/7oT`b_~fSRO 6t={35t9,`ge?0~@5PM,LXu%pIgVOa' );
define( 'LOGGED_IN_KEY',    '*4rm$I~R[rYo(2/b/<I|v={a#`[{[E[U[tFyJM@l0=n<D#@(eG;&m6=3ny2@sN>m' );
define( 'NONCE_KEY',        '+]>0V17=pW$^xR`Pj-qs>ydn]IgHt),a?3I([>|61y`b >3[9YtG=toQ05z>=#WZ' );
define( 'AUTH_SALT',        '96x#mI*?`b,}e EVV8&y8@Es-nc,x32kyB}9z?kB0d*9v*NL{)$,6.c3?l*ir:Du' );
define( 'SECURE_AUTH_SALT', '(dYu*JP`nepct=;S{wJ22iXq?u0^[CC/tTSah}41A[=?tz?tRy1Fd%KCXQW]OksN' );
define( 'LOGGED_IN_SALT',   '}@RYVFCge1+T qOpC ;?%*:G?N>Wcot#b^?`V]t-z%}/dr*!|bWq3E^&`2~3j)CS' );
define( 'NONCE_SALT',       '{=pb_1eB,O_K3k~f^2w<RZWuf.!&o#gZCG+)}w~svxiE5UaPe3Od7djF_.R~|SMI' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
