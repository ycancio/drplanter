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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'drplanter' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         'y_>Er.<0mO4aV)xI/Vn?AQlu{(ol}x!8Kb/pacZVr.x0`?.xWy?!)U#GvFeUJk~l' );
define( 'SECURE_AUTH_KEY',  'Ee2R1T}^E`dPHiU@dP@r4P-$w+DNk:H{v1MUa_z{fk:STIxDtD i}[Er%gK~n]R]' );
define( 'LOGGED_IN_KEY',    '#k&mqhy)hm_ iH6k_:$F[$K;cuYX6j:DpA=Gc^FI.opE.})~~s*268yjpDC/SCmT' );
define( 'NONCE_KEY',        'lP#NXW=h[O$xY?*cP2H5aksuV*ht]}}XsA)W^!yn)?<hnzRbv1&.GIRR4#g<qVFl' );
define( 'AUTH_SALT',        'F9>hdYS@066g,idj6&_k-lgBVoC6&YQ2L88fPs?]4UUm<L3Goj^4(bacU>f4>MtG' );
define( 'SECURE_AUTH_SALT', 'm`9!!{.,CPwGZq@IHs,7O!f-~>!~l6t#.WngLh1cR#xO54@;:dc 8lZfCn1^YHB{' );
define( 'LOGGED_IN_SALT',   '6-Mqw^whR$nGJR]S3LwhZ$S.1KPjby(xGn{t!xKyRx5pIv&>sv?/d&VXVE=2:mg/' );
define( 'NONCE_SALT',       'a|:)TLo%:A;~XEPvI$62NVf[}[T=548{cFT33[=i_=,C$Y<twfqa_/r$4)Ket1 m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
