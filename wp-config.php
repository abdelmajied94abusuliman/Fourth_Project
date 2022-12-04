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
define( 'DB_NAME', 'xxx' );

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
define( 'AUTH_KEY',         '7j1A4IBj2y>OIG}iD$g(dlb6{N|^Y?(N.Ti=Dx8{`@2>s#AcJTt2*)Tl Jv{XV6=' );
define( 'SECURE_AUTH_KEY',  '*BYGt!E+X922D,v61@s%U+HDxi+@wfq(F|b1?3QzEw@LYPpf3r0]8_3*hx)QQ/wm' );
define( 'LOGGED_IN_KEY',    'lpB[1!8t/<QQ@zl2l9fI jdvyva,]<`!NiaGEygL;tLE-{zWkEZ70-[G=nXj3WI:' );
define( 'NONCE_KEY',        'LG9z7GDjT`+i=Q,k2wO&WLM:p#``m8:lfnCYM%aF$R]7L.`7To1o__e@3p];?=AK' );
define( 'AUTH_SALT',        'ImR7Pv7Ew]-I-e-1/!Sd5^5^Qtz,1Jur/8.ph#wK@3b6@I~92UD@TNihl)!OLcqg' );
define( 'SECURE_AUTH_SALT', 'r^3Ld;bmP~MO0m,go:7s/ TE<EF3Zsz$SZ^&p<@C1+8E+C>9_!Z=<#Yk5d,PlxE/' );
define( 'LOGGED_IN_SALT',   'i@j7a|$vxJSM_wCSfNq{]Q>71;CTpIjZO}!_sF7w(DKE(>p% J;l9[~WM~:h7Qo!' );
define( 'NONCE_SALT',       'cs%JCFFi8#bpi@kT9FOA`DtCVJ ;s?O!wAv&/[OLvoye%Qv-B-S$TrIE}IBd+c{n' );

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
