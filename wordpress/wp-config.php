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
define( 'DB_NAME', 'pecommerce' );

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
define( 'AUTH_KEY',         'hw{U*b@rl2vyGFph|k#`B%7@4!}~+%@Zd>PmA3Me0BXGc$2(EoL:Zb@8/]UwHr;#' );
define( 'SECURE_AUTH_KEY',  'M(0Z*w/LIws-.LLL1sZN(,Vy9gmvtF!<l5t{kJ[Hr$y0_VjPm5f6!g%~PjlUMjAF' );
define( 'LOGGED_IN_KEY',    'Cv&fd~6t^C#_F`p6!c4+Lp%tB)RRnpd{YL/8!AoOmA%.${Eu$[vKJ68a|70$qKgl' );
define( 'NONCE_KEY',        'p|+%|uTa)W,8svipJXj3_|_V2 >skk}:I,LE?YG_<GQ=cu!+};x-aNju$W&,_q[/' );
define( 'AUTH_SALT',        '_6q>6H?F`f+x`4% [cwB/^D_-W1@:m=>oWF5&.+G!|V5IWkI@t(d`t4ykk2O)`<p' );
define( 'SECURE_AUTH_SALT', '_V>k&}Ve}I[sBfGv]8;OCY_3OmqYm%R[lLv`*pWV6QXq=zi&fFZ:NFEA9}5!@A3w' );
define( 'LOGGED_IN_SALT',   'q1*A7>s;~vm2rj^,.q&bCA#([Yol/?8P%:^H?Wy+9,)jE+!u5u1(]T9fI0R:{<B1' );
define( 'NONCE_SALT',       'u**k0K0}#?^qH4abGf!.BG%m%osy8`58&S^WVH*|I/9tMTW| :+DxUrRp^rUJH/-' );

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
