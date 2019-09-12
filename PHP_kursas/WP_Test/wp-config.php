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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'sH#xDNugBI@3BCa<UdB~ls)~g(kJ`)Od&(m(pNXhfx=VwGX>10.xya~+,NhPT,xt' );
define( 'SECURE_AUTH_KEY',  'o29~vl7,7zE)^i5ZlaITxf)m#pFV!:Z:X8K~R-ffEh7q;B]TQ0P(Ue8p.U^~rBXv' );
define( 'LOGGED_IN_KEY',    'BubQuRKlE4vokn|T*90Nv6AfVrt2i]{&dexH:kg2yxa&pb};,I,wi[jE4<IvbmQ|' );
define( 'NONCE_KEY',        '{+(jV*OavEp3R!|RAqpMuw9 wfp9/m}mSpzbz->q(v_vh9gmFACxZ!3oS#5|#?#r' );
define( 'AUTH_SALT',        '#v&Y)b%MTrw,w|FN^U|h#Qp`k{!)j!&JxW;f4b)fSX0~tN%2J{[-XVVS|D!jESP{' );
define( 'SECURE_AUTH_SALT', 'ST(*B$/SPy1+&[6UA$rs{px7[]$X?ppIc&Odv!e3>4icI>O,*x`e_dS>?LYrv1?[' );
define( 'LOGGED_IN_SALT',   '~>>1K0QBL`Vd=[-=`Z.l[eQ{}S AxXFPWcFu5BqGXB)m`9TihvzqAdJqmS8cp[p-' );
define( 'NONCE_SALT',       'vn<$G3VS7(Urw<H>wWjwW@WTc8ZobUeKBvt1&]35XqS=PmM^c:n&ci+&UNWz5$nY' );

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
