<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'gh429087_db' );

/** MySQL database username */
define( 'DB_USER', 'gh429087_db' );

/** MySQL database password */
define( 'DB_PASSWORD', '4xaChy4f' );

/** MySQL hostname */
define( 'DB_HOST', 'gh429087.mysql.tools' );

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
define( 'AUTH_KEY',         'fx/ZTRMsmSOg%)l@6*KNT<S5^N)),BA>lTg}r^~S?0dbrzgJBHsL8;Il{wJ=.|Z?' );
define( 'SECURE_AUTH_KEY',  'EUa<P_AhTpk)Tf+6Ep}JFaR5nt*m>tR;?4X_-{t-bH&I*u*b]SLJO5uKi;Pd_0NB' );
define( 'LOGGED_IN_KEY',    '!aU48iK.%{H&MAWeq][AuJ3vTm9<zh*kjOJfj,L,a8[;(,Y%@abVkJZC)O.kanl1' );
define( 'NONCE_KEY',        'DIg8Yb$r7A:UpoS+OPllq_+EFz9q8^Gz]AU,0/G21vQ:A?)Vs*16C}i;`V^~bDiw' );
define( 'AUTH_SALT',        '#8N@E]A#^+i$yEe65u%J>hPNs<7Agg!LS?&=*mOG}Ijy4Ab2&)3|GZ*z>94=;MhR' );
define( 'SECURE_AUTH_SALT', 'o:e.gc*ZWSscSuM_0FGsLc8/IdReuZC*tZK++ZbE2B2!<AiqD1M)PaweI[3dGxC5' );
define( 'LOGGED_IN_SALT',   '@}1[U;K/El]-!f>s>|V_<T*[-Fj<bCE%)6Tr&2_^t|6#AT{JRbKs*6&L.:vdcjrN' );
define( 'NONCE_SALT',       'RQI]T$tFhU1M>Uyo*7dpkP<k3hIH+PQ,1&#5mr{g3sop?gH1yB8<_O6gz)Xi1Y)G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

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
