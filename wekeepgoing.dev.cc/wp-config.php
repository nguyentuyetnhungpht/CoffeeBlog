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
define( 'DB_NAME', 'wekeepgoDBtifcl' );

/** MySQL database username */
define( 'DB_USER', 'wekeepgoDBtifcl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wWfZ93LFfw' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'L#tDao9[dk5SS-!NvgCJg4>Nv>Uvn7Jf7<Ut+MHe]Ap]+Sa-LHp]DoZ!SZ|RCo@|R' );
define( 'SECURE_AUTH_KEY',  '|O8dvV!zNRzJ4nvFcU,0f^rIPqBuEMpAS*]WOpAO-l1Zl5ZO-[Vwo8Kg8>Vk,RRz' );
define( 'LOGGED_IN_KEY',    '6IPx6]ai]WL~#Stl9Wl5|Zh!SOw5Jv4R@|Rzk8cj40Rz,XyjBMj3Q$Q+LWxIDl#' );
define( 'NONCE_KEY',        'aLtl6Sa1_Od~OGs-KoZ[Ck|@NV!N8kUvFjQb<yQmuIAX.6iT+LS*x6ewHdW_1aSsD' );
define( 'AUTH_SALT',        '66PmD2a_]WS~#S-l9Ok51Rz|V>@NOk91S@|ZzkGck80Rz0RzvFcjB0Y^<XPqBM+A<' );
define( 'SECURE_AUTH_SALT', 'QTm<*PS.+LiwH6KhoD5R!4R@vKRoF4R,4c@vJy^TufBIf<Mu<Tum6qi_Ph2OLt#s' );
define( 'LOGGED_IN_SALT',   'RKV!sNRsC8g!4cQ,JQ$uFbuFbX.Q.u3itEaS.]e~pLhp95S~5d~R![V@oCRoC4Q^' );
define( 'NONCE_SALT',       '_o5Hp5|Rg1SKv@OGc>Fn>^QYzQFn3Bn<*QXQEi3Em2.Px*PLh2D#SL-9Htl#Sk5R' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
