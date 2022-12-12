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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress test */
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'charles' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'v@M)OCIVa9]^~+/E{-bCz}=ofhEE_tPEEIT={3-RYj++|#~BFD>I(O[g*+X6JM^h' );
define( 'SECURE_AUTH_KEY',  'aW?<!m;L.}}VFg.wG,Y =(;jC8v_G:WCbB!vn0lA2$u_g&EuN0KrL%}6$^g-Pv}5' );
define( 'LOGGED_IN_KEY',    'fssA&skTsMDmGBm``:2 1O(*W$lNIv2q-C6f?yemOv~FocH`<<Q>qG9nrG~pI%l/' );
define( 'NONCE_KEY',        'a0MF#^~Nu82Wxf>c~QfizuqRJ1Atyw,s>SonZV&k1o2GD!;;R-~ofiU%moE@}R3G' );
define( 'AUTH_SALT',        'A-deQP]@o:^f(AH%eQQeG+?@bM5MgpC[BS%3+2$?nnu)h8$vO{ Yyp(7U]u}.+4h' );
define( 'SECURE_AUTH_SALT', 'w=(tKD:|&u6ND=Fq>!x[<~C|WZ2wm1Q[nRA+t$2GnmE%YqspQ_QBQO_L/-/zHdfY' );
define( 'LOGGED_IN_SALT',   '=m0?wPRlCiu,gDItcGY|zCbN:`4I$<1j*&s:6y./*|XgaLdZ>VBr:si[iGj^Vx$z' );
define( 'NONCE_SALT',       '{t5u>]a5Nr^#v0pET: 3F$ggVXTB7dgj6$uIUm]AGYo7Lw+U;^SH_Yx){A]qu!sH' );

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
