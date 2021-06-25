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
define( 'DB_NAME', 'cinemania' );

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
define( 'AUTH_KEY',         'dT}oP@b=9zTGziewoco-;&!KQ7$BPp@Avm46{*^ zswB3jJ58bpW&#ZRo=>@ehps' );
define( 'SECURE_AUTH_KEY',  '[y.2~9#^H|)z A[}H.XGw~r?F~IiZB}s=jA7FFK^.>DZkn!)zo7:h>|Wi!S>^{!V' );
define( 'LOGGED_IN_KEY',    ',_yfuds-#FHl`P=+RT?@)_*;]xH.+6m9qLIgPluV-n]`C9WAv3;B+Ld-U<pZQtq#' );
define( 'NONCE_KEY',        'Hn;-#>siGpC]o>O&je|ybP Db9ng>M5H1+my[c<0?<ky32:|O7b.E?<ywOeo1*(S' );
define( 'AUTH_SALT',        '{&WSPr%Ik8{bh-pXN6Cr&%ywGm>]a1b.MPliV-/~:yY.G~#s7ZYM_+3i!ijv8krB' );
define( 'SECURE_AUTH_SALT', '`VJ{Ok@ Ap%ah3+S]hams5oDvsB5nmjJFm;0{[OKli49O N`3]01xi6+cR$LaYTP' );
define( 'LOGGED_IN_SALT',   'yxy5,r#m<sDLi!y 1P,`d2vplr3ha:sPID]CP<K$eg0^~>q3D!v~(Pmk  w_%BJT' );
define( 'NONCE_SALT',       'MX+^6!vqyuXWy.1^WFfUTYtdLhd3T^A]ro+(AXEpFH&iXA-97}:%Q/G!&RN|so8H' );

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
