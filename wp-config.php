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
define( 'DB_NAME', 'gbua_spacinema' );

/** Database username */
define( 'DB_USER', 'gbua_spacinema' );

/** Database password */
define( 'DB_PASSWORD', '57494537a' );

/** Database hostname */
define( 'DB_HOST', 'mysql317.1gb.ua' );

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
define( 'AUTH_KEY',         '8}=>{8ps9<fS Y}}e7#P@yA9$i5{bpd8/,Q:4d?Co;Hx2!`F)}-.`{z)^kvQg|b?' );
define( 'SECURE_AUTH_KEY',  '9yWsiwD>slR#5wTX}d##R_JH,[3=s_ W@+ymq>y[:e QfT7hIj&[-D85$muz {Y?' );
define( 'LOGGED_IN_KEY',    '{Q`tTy3OHWJ~[H>VLThu>m6]juS`K*JQ,~X2 j%hMJ=IEL)=6_vUE|PZzuxTlM5(' );
define( 'NONCE_KEY',        'ZHKXnW }n;(?1n1s X jNT~Y{)Vagr]_&l*s}lc]U_6M> |e-ieo*3p1l+*vI}<2' );
define( 'AUTH_SALT',        '7i~=0z$fn;hur/x6ZBM^]o6NJZ!8EZ61>.MTx{(e`ici:WRBEH8!Rqee1kMo.+jQ' );
define( 'SECURE_AUTH_SALT', '?`ta~,o#ZyPRwQ+Vlq}9<o,MB_o_N^P^4~}q/N&$kMpm )`42dL`rb.V,7gFtKqb' );
define( 'LOGGED_IN_SALT',   'CsGTppz:3,3mFTE>X/CH`lPsc$o |q0naVW2YcQ%kODU3>W9ES^u1D&qONfR0#:A' );
define( 'NONCE_SALT',       'awaqO;K_{~Mn_%R2*<WkPAxU?H=6n~b7-?3::qvD)XyD<fy!o=j3)vdALo:kDH,h' );

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
