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
define( 'DB_NAME', 'applab_wp' );

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
define( 'AUTH_KEY',         'x `Ax>wYX3zeuJ$6@a ISgLu!BAhvt=1)qU6Zw|*lX$WC6|xa/bU{nDR<d,6(U$0' );
define( 'SECURE_AUTH_KEY',  'nJ*a6tWGfeM_5pxgtl(6yM)pn*!)uj9:@QXr_QGs%H0*cPH*f>@F3YXT?GpAT WX' );
define( 'LOGGED_IN_KEY',    'M`tBqe^><r$uK U`7*Iq#B6!l|FYo!VrXAWFhm1EXt_y8IEa?7yVTvOP@Vj+%J5h' );
define( 'NONCE_KEY',        'JIr(&9<_1FZ<?[w@sZziPQ0tP[1|:O)0c708(*upvg@Pa#f45{ij:,w%wT6]/4k+' );
define( 'AUTH_SALT',        '!vkdV3I!TMElR),^O.sBz*Qqn{o+*p_p+QE:P&nBx4x?{&zi2 JW;exL3uYEZDFf' );
define( 'SECURE_AUTH_SALT', '[n-G]Oe_?.?1^ZosS,5IK# 56.-_xC~C.V1Ax]kxw,{vR#t6GW?g]=Ow07TI{|-]' );
define( 'LOGGED_IN_SALT',   'Pwenao{0,xnIq@?3z;Svz=d8uP&?WV=*L{!OxC!BP0rBhjN$VTXaaL51xB*`n(ID' );
define( 'NONCE_SALT',       'atH+vcQ(5X@8UkF|nkUa182|i%*K^A`K5SD.[)BCx!O2IUJ/7+l7)fS:`t4YC+i*' );

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
