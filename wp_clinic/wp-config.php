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
define( 'DB_NAME', 'wp_clinic' );

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
define( 'AUTH_KEY',         't#_sQ4]|/lajn5j3TnMTiR/qQl=A9V*7nPe[X?]9[Vlz,#`.1AoM;/ORH[Rmm?Po' );
define( 'SECURE_AUTH_KEY',  '!l@BcWRIjP_ ]5ids9Zk;+L!uwg[S*]2:kJC{QlKXCE8&dV%oihb24+Qi_37!EUN' );
define( 'LOGGED_IN_KEY',    ',%CWF*|^/Z*4r:MNF2fG.& ve}]kyZCJ[.jF_qWj+*J0D{yH.l}*[cj,Mico]`g ' );
define( 'NONCE_KEY',        'xzy~g;:RiH3&X,ql}}XYUI+_u+7#LvE)@KCIQ__5Xd86+&/bN~|wrWf7Z3NEc_[R' );
define( 'AUTH_SALT',        'Je+|`sAb_cmim`6D1Er1XP+K2b9U!m+N #w14G#ZvR@E,w nmGr5Y=ELk_QFM~.U' );
define( 'SECURE_AUTH_SALT', 'jw@y1o7&C8`!E[V5`>H*hr.eN$%Mp:(aky@/Exc!e|VwM9k%+hq_:^3_,78Y GFQ' );
define( 'LOGGED_IN_SALT',   '&.M>$~^%^^EbN$c21 ,R.O6 z.O>.Wx)22Knp|NFhEub0ttJPaI*W$Ne.BX,CpR^' );
define( 'NONCE_SALT',       '>M#mHKd?w!jP0]z6xV{V%8_!/xU9)B.3^Jm~iZ9YJy:4jVwt$w9AfP`H/RoZfI&s' );

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
