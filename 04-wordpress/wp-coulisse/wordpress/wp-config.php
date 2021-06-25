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
define( 'DB_NAME', 'wp_coulisse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alphabet' );

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
define( 'AUTH_KEY',         'z]79jNiB!1@}zc8mF<#}vh-HW|lDnvcA1ER|T~}%qr)NWbblGi6/=5y%.D;:KKLr' );
define( 'SECURE_AUTH_KEY',  '3VK$^E0,TkNG,ma>${}jGSWX6zf6?arU>c1{U(O_w)9]4+F=5]an>p(|R/sLo@~g' );
define( 'LOGGED_IN_KEY',    'pB >op$<F}p;2_o&xrHVN0eu;XGOXfMDPp^iwje^kFESp?-OSA8(@Ym6mfo{:Z^j' );
define( 'NONCE_KEY',        '64TvhxUGgX{FxVCX2im_6|l:XW_p9.oOjY!b1?+Vq[q^J/w%dc8_8wk_;8$X:V4h' );
define( 'AUTH_SALT',        '_NG#di z=H7d@ed:S#%uKD}5[>A{lB-vXsi>AgFG[R`<P{|ysKgISIa#ii{05n5C' );
define( 'SECURE_AUTH_SALT', 'bTb5Z4P4/Mwo3gfF>t1`z0lm6.,G4>)g[3Nv|R[%+G{*oBj+4w@rEJB(Y0,r5y*L' );
define( 'LOGGED_IN_SALT',   '4=J4Gi@XUpDjCC(D%$Eb0N(0jxWvCl{5S<$*&gW|]ri#<N!?8iyiaI~G?%suPI.|' );
define( 'NONCE_SALT',       '-`y^>;lVT*BKJQiQ;O-o3C.E~5bYdtj!HDBc >OJWTBT584yc&AY09G<YP(zgr3f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpc_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
