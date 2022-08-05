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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wyh334455' );

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
define( 'AUTH_KEY',         'pZ[#C=i6>ia7w^4ewq 4SW);iOJ14`[,p1o3QuTc*E9 h_]=(a:K{il`s`Lo1,k3' );
define( 'SECURE_AUTH_KEY',  'S.:k}2q^OaMx8V.#dsb{)fR+)wb(Ay1SH>GR^h^V0m$dQU%?)IjyNlGpp4i=LcQ6' );
define( 'LOGGED_IN_KEY',    'dj`W97cKRxQCFUBm$2bs.e.HXXyVsT_rH&1,XB3e3v/aUP:h6`/[iDj?rDzA}>Lc' );
define( 'NONCE_KEY',        'yniMaC$lutwCODq?x:i^MXom~N,b>67So:j-ysb0D;MvV64owq!Z3hYF(ldfE0U`' );
define( 'AUTH_SALT',        'oMg<Rs)=>#8@ C?eT)#T5by;PDLc[~RL+/|) [mxZ1sN_{x]g/4+W7FbFb|kvdi%' );
define( 'SECURE_AUTH_SALT', '^t;>_t(fZ)5(OCZ~5b?4ceUcrOBip@L9P~-y&usrSH7l!)E_p^iCVVtjwnaex~gn' );
define( 'LOGGED_IN_SALT',   'K|qQ5^WGnMXob,G;PE^PA(SH6UKO,@PpUvyX9 ub_0Xv)hpn@`BO`b5}J-1G_ Bp' );
define( 'NONCE_SALT',       '_wK|aRU+98XCsGhOW:FffR|<oW@@QjYZv)H4$^E_q[Or&2LQBrnA/+7~!(Ns#D8$' );

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
