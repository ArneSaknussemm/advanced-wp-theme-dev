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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'advanced-wp-theme-dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',4PxcY3HY ON)jER5|i[a *c).A)l)2d~qnrO4WAo!p!7eX4+wV_mZsCUx@o%xDH' );
define( 'SECURE_AUTH_KEY',  '-5GkD;$ccez%N4{}U]V}|q$0Z.?ZH]i>W# A%nNTf,#;]3I(YAGVktnR>VxrR<>x' );
define( 'LOGGED_IN_KEY',    'Q9{saumK7btq93Jqc6QOa#!McU]^oud *10x,$8`atmep#+[-~h:BF#^4RlJk.~/' );
define( 'NONCE_KEY',        'P~_U>LR3/15DT-@2Ad0V83Z P9rYDj4kw>4(24Tgx>7-(Gd&a)S@oK.@ixDf/m:}' );
define( 'AUTH_SALT',        'R5#&$Mjrr4+#k}/%-;zQs]CRui&_NB`#q}./J?xbdn*u62aG%r#-:OYwKW<-` N{' );
define( 'SECURE_AUTH_SALT', 'KR+n,Gi_E.T+4DX{1j<;WR%_dw,@M}>2E|lPg!8S[e0X~EHVacX[foH2[t)ASZSz' );
define( 'LOGGED_IN_SALT',   'Wj!CNIFx[SITrhy;~ Js^^~eodAef_7XpQ&a6x4kp0hYuk^UW ]y1ODdN i2pf2K' );
define( 'NONCE_SALT',       '%~9[jD#._uIW_{-W266;}Gg K7N6vs,XNqA;A<Oi)_dbe&/iB q:Jc68phiQf3gp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

// Enable WP_DEBUG mode
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
