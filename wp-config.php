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
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         'Wlwj]8.s;j:J.x6Ydcf XF6SO=a_f9:N[W#>Yh6 [ %qybdpUSc^ABp^:&u@aWM+' );
define( 'SECURE_AUTH_KEY',  '~j~;{HNe`gj%kP[L]D6>QIb4!0irIO`ZhBZ11fJ8L 0 ;LPZA{QU7r(wM[5YD>[[' );
define( 'LOGGED_IN_KEY',    '`o(_??i a{$i9A)G#yYMul;$I(^S0CNnt$_xn8<&p?{4p7X:;NR+.S0{wjHkreb;' );
define( 'NONCE_KEY',        'Zm#{0H6?X7 {;NCpoBsg9=oK7LdkO>B%yIf_o02/dCmFku.aH%K!{M@q!7RANhR;' );
define( 'AUTH_SALT',        'EW_F`~pqZx3#$G *9e5zC?T1_tV.]|ng#^,l--W-1vHIl!.w=I+xr!AJc),`4Xy8' );
define( 'SECURE_AUTH_SALT', ',W=!1@mO5Xvm!p6lqJ56&={oLs+kCZkW<`fI.yFMUwN/}ScCyIKaE:jrH4mZq}~P' );
define( 'LOGGED_IN_SALT',   'zh$+E#;O,5OkT/OiP,~HOZbG/Q^PTZ54xhi%fE#~9_G[COc=K/~mQ<Bw[e<=2Zbr' );
define( 'NONCE_SALT',       '7yI8rF]*RM7~At^]tkt5Wte5M@ba!p_4iTL/|_?C3&8R6cqKL5Q%Y(X6**/9;L=+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
