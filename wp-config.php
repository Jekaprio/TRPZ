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
define( 'DB_NAME', 'litmap' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_d3dc,eP6` X 6Z!A$*g, ~rX/oy/6%xPDd=eJxmuu?vB{UgLCQGhFwf+{:l6n<W' );
define( 'SECURE_AUTH_KEY',  '%{w`{V&3*-5}s?bMJHo/#Mx;,[g5!TQT^#thLiZW0D`Lp~zpYln3&W9!%5~3vjC9' );
define( 'LOGGED_IN_KEY',    'dU^Da$t6=Js^R~LG,pdX)e|^A,6]];7-1,$Pj0aVAI513k&QG&U)24fC`b4oV7Qh' );
define( 'NONCE_KEY',        'K6M)lDgg9vlR*V X.y;C,%AjVXu&@dh@9lgr!r_o|Zl76eIZqhJ6{OsO!?l0w?c,' );
define( 'AUTH_SALT',        'ffp~zcV^uaRI^3w^`lUE=M*S1)teRp@o43jIHrsS*d,4C*ez.>@qfiZ]6$.?H {T' );
define( 'SECURE_AUTH_SALT', '33-k(-9,>O$1n$9x1?EH;d3g*/7K.S5w` w4(<KD_Z47+ Vy7vS[NNxlCn*6-Nub' );
define( 'LOGGED_IN_SALT',   'eL,BlC;U50^Tl3p&MUomRt^R%54*F=`d8GEH$gw_$um.6Tn;Nb<FW`a7,C*cli&?' );
define( 'NONCE_SALT',       'l*[U;qJ9|[1lb?#b3Pxph)`qK}RT77I}BLrCtngoVgm;g#ovpIV#:,tS)$>fYVMI' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
