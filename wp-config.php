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
define( 'DB_NAME', 'polesdb' );

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
define( 'AUTH_KEY',         '/liCAr9mWy2,Lp:m868evw4oSAi6w;,<WH_EFBG<, $K%XbF#|T3Hi5Mxl4kWFO%' );
define( 'SECURE_AUTH_KEY',  '2Am,/)5]934vN-#N%M#uiu[=z>N<8MyxGIqVBrS-nvTN!a_ nbnxlU_s|>u4#koi' );
define( 'LOGGED_IN_KEY',    '[9s[vfH?7=T>#`)L8Sd9s^5|O[N12Kqj;r`h0Omb^w!bJbGRg4uctucF@l(^I]O{' );
define( 'NONCE_KEY',        'uhN mFPhho4U `<%3[z *`MnX|B%k~=g+ZQ=lN/lgQ5Wu_tGK7~gC/9+QiJbIr0{' );
define( 'AUTH_SALT',        '6:`18$#6^=yq5Z7)w}Ps3%VE.3`cjO82;+Q4kSA+,JS!TvoKBj1b^IS(Tvbu#unP' );
define( 'SECURE_AUTH_SALT', 'cni:ojw*;tn<)2]H-,IIYUG< .O&iVeRz4m2&^p]fFbJuV*rM%vvz!z|;f+Ka=m]' );
define( 'LOGGED_IN_SALT',   's/Icqqf=.B5oug`H FrcIW?Rm5t6Pvr4yx0aVu/*s|##v<<HFvb6@xofBVI;lwO]' );
define( 'NONCE_SALT',       'd94V%N1 @I?&0Prith$Qi, _~vZ`Y1u^QhA[U8xgQ!)&>bTC-@V>U`nz?Q#9<^&s' );

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
