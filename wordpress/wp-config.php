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

define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'O#lUn66J|kO?rsBB|f97~|7 mb].:0n~?Isty&&WZr@mE[lj9`#j[bx-PFRNB-Ky');
define('SECURE_AUTH_KEY',  ';9x[l(C9ld|HtxR(lyNHVA{m*92+da5n(6}A* c0}Da<N%{z118cP(*D;R%y9fV@');
define('LOGGED_IN_KEY',    '+uv*c-qSgi[1uOBOVZ95[X0>;)Pj@+,spTCoS}G[M<Q YjDS=wLMOE|M*@QV|t+}');
define('NONCE_KEY',        '+6PJ~bZ!|,^%PPY^zNv)K4+_gKeyzp<RWNE[adZ6wo#uhUDDCj7d+&JFMgx3~-8`');
define('AUTH_SALT',        'IO]xZ/yjL[Q%kk.87zkA$D<}k%}|Gs-J(kU;~H+r-3V50)9hr3`!Ev=FpK]WqQ.$');
define('SECURE_AUTH_SALT', '>x]{q8V6Nf]/-RS54CP=o1@-si$w]6-<Ee #7r!uEbD3/%qYc!vPk|RpoWV%-mrf');
define('LOGGED_IN_SALT',   'qf(~6B9j?}`e+IA~W|@}|N?L%z1aMF]#85.pg/X1cpV*kT3$~a%`D+TQ%++Je9h`');
define('NONCE_SALT',       'PZ=<Nm1+tg$T|R9+.ls<s (oeJAB:S~5I$vU50p>ZGi=}{Y[ec9^`yacEJQ)#74}');

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
