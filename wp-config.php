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
define( 'DB_NAME', 'umkmstore' );

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
define( 'AUTH_KEY',         ']{U=*DrRw7Lo#lzTCls`jWy9b{hP@%#NXL)Lr2xhE{Tb[2UBn yxg|>Az A%qOra' );
define( 'SECURE_AUTH_KEY',  '}bzbf/a-1TtV/<ak;%o&O84t2}==7|EV5r@d[AO0#cjlAnN0e)rMNzL#te]UiWex' );
define( 'LOGGED_IN_KEY',    '/nfX4WR8&F^_h&w|^+mBIGYLY^OONBhi~3=M91uYsEv>AJOr.*m]]*?kq@.y*elc' );
define( 'NONCE_KEY',        '0:Dzt|%A35IN<QBK(o.|24,AaoYAPx5I|f/Gt|o^uGob:fCz>M#&=? qpy{HRd0K' );
define( 'AUTH_SALT',        'ge^W`L2~_115gXZ&JGR(=[g]<~6%xYcdm+^/qi<>A:( Qcp/Q1Mxoo=H^U/k6<u{' );
define( 'SECURE_AUTH_SALT', '!uC[z?IA]!9i2C}Fvd9hfQiHE&xiO~62cy rvKshgK0.ozJD%3D$4DnH-w~w&+Pr' );
define( 'LOGGED_IN_SALT',   'l0V3ZC7W}prrKdmv|9l EPV-6o<SL(FFlsattFd1Ek&63>@vH90Ce/fA1Vsw1r4+' );
define( 'NONCE_SALT',       '75 [FXf8t_VjRe=SJ^t2/loVYVas+4 a^lE}k7^^=Qxn.SkEVGx>{|^FM~@#>D57' );

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
