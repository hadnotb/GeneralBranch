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
define( 'DB_NAME', '212104_formatech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H79561384200*h' );

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
define( 'AUTH_KEY',         ';vZk/Ji%s9JYm,<Q|lnUqwyV?WU||E|ar;HY&6~N|Z/x>UVu{R4*Mhg(+DvvcB6{' );
define( 'SECURE_AUTH_KEY',  '_OS=)Vz]!l:G(H =FC~4WR_4qp{wi= ~k^3E@*i[3gm@Dtq?^ cl/ QdjP|Yi?dC' );
define( 'LOGGED_IN_KEY',    'Ixg9nhP^{ZyyX1#^mV<vY7Rhqr=NF;u]ycXEefq$JUZ}JpqhgV!Jr3,xVc[| *0[' );
define( 'NONCE_KEY',        'KUGY;U8HOFUZuEJw281w/)[ht^e{(Hrf~|}I01mgz,mg`+SCrB_~NUcgf0i$f`t<' );
define( 'AUTH_SALT',        '4k8kFR*z+MdPDrGO=LMR]$,Z I_-Y|/^j; /-*PaX%5Tj6R@*rsFVaKw0O`%>(x(' );
define( 'SECURE_AUTH_SALT', 'yZ*k^#[|DPPXJ4SxQn|6&LO5@_A%*e+K},[34nwb,tXgsKSsL7v-~tqR&U+0&$6?' );
define( 'LOGGED_IN_SALT',   '#|8c-F&Pyu-*/>bwTO42C Xvn|0qGu&n6WXOmp*36~R<_jp^|W$u;E~{c&DEH5<m' );
define( 'NONCE_SALT',       '{A^mcD(4KxEO&,=Dps;0igoF/J!nw,(sfsGx;*wF|?w3b6RrZ/h-At*8t^YzDp*^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ah_';

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
