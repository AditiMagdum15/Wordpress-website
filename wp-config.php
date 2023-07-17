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
define( 'DB_NAME', 'demowp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':PALJbJguZK#tu9JrE_zHF[.gj^9Yh5gIm;ntK}W>lwox.i+V~cC4dU^b+GgTiEm' );
define( 'SECURE_AUTH_KEY',  '5tRT`lEyO54lt;OQCiT*3ytA2p38gHeVc*}N|}]9o#qJA*w0#GeQs?h#d6.k(krK' );
define( 'LOGGED_IN_KEY',    'f:8GdHQp*L1$bx,#iq!e27,|8x}XL+Ahivu~x><,%m$khvk?A,[% 2*,+Snx9Hx-' );
define( 'NONCE_KEY',        '1=sI])gzR*Sx8Gn&IVpv%g2*k]$#fR`0L7@zG!L;-h<6$c7C.1)OgL#Ib$9TFyMT' );
define( 'AUTH_SALT',        'pXMw~lpB.!vp~jU_^!e4i?6+)Q$gObXdy(B|sv<*u_8)X4 QYl;~A=A`n^#?BPMn' );
define( 'SECURE_AUTH_SALT', 'wm7*WxgB1g),w*C.;@<v;^@q:=J=jxf*k]Rui`j@]BJA{j>5ptK@,<Lbfd)}%|0v' );
define( 'LOGGED_IN_SALT',   '}@of!QpNw[T.IN,9Of):,B5HXzes-iJ,MlL8P)`xk12F#u^rjQ2^1Cw$P:UY8d)?' );
define( 'NONCE_SALT',       '~CTb~Z|N<Ml;a&dR<h#`8;SsLTzWx#sRu9O6Cb}+,{3vDg]qm932= c=)is&g7-U' );

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
