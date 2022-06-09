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
define( 'DB_NAME', 'learningwp_ecommerce' );

/** Database username */
define( 'DB_USER', 'learningwp_ecommerce' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'C{4. 1BT!6TR+^1S}y9>DUo_i`WM!<8,]^m(Q.K/W/_`J!;*50I1jYXP616n 6]m' );
define( 'SECURE_AUTH_KEY',  '?UfMs)M@Z8p:A}H8ICp$pFe<>xm]if[LK>}tI$A:5Iszyx<N_wb~cgE<f8(?IKP0' );
define( 'LOGGED_IN_KEY',    'PqjF|0RTXL.>TW$3GMw^y?/b[0gTAgM)n5]Z-}Az:fld=W]KkFiy.FudGPL*O{lQ' );
define( 'NONCE_KEY',        '2^Y5^mU~i6uIK4DcI^Fgp$u0Q`@ucx[+FbXH98A(}NqP`TF/rL>Z?`40C2;zX@d~' );
define( 'AUTH_SALT',        '0:_,;V*XDUY(2!N$/%<FI1;{svUC%gFX_WnM=Em:kvKP$tz}Fp%@KNUJB@t-1fJN' );
define( 'SECURE_AUTH_SALT', '`}XLD)KYq$)-}jp[@V<(L^6A(sV3IT3^r4RVj(zW/CVB{(m,Y7aa!cjc`]i%v:~e' );
define( 'LOGGED_IN_SALT',   '/~xL)m&WB:|;5HU N~TLtAs2%rIwG]M(ROQ9#1TGCI7$Prsk>R7]kX4TpNt{Zt4u' );
define( 'NONCE_SALT',       'PCT*u``W2T$UwiN]8Vtr&mmFwJax.;oWc6pt&8#@=WA.}FP&h#yprGWJ2598v#G7' );

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
