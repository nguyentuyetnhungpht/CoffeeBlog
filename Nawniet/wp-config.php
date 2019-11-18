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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NhunG0607' );

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
define( 'AUTH_KEY',         'yv_rNk)&*&[]h[}Lv8Xi*P2Gmzol*xjJn29u)l+Cwms2ca k>jCd(Z)94LJ5)g_C' );
define( 'SECURE_AUTH_KEY',  '}**K!r/HUf`sojPts/(IQTKbyFR)(^&m$ P;|/@CQ&6=u<{F|#AVV6aLEPi=]-]R' );
define( 'LOGGED_IN_KEY',    '@+HC[+<Gj@iLSFz$E_ IH<M X4(F99Vqs]e laA6,_L?ysSBPDz/~d#|k]2s`Rg!' );
define( 'NONCE_KEY',        '+d-Z!F[kaYL.Pxi(rCWWbW)Oqtl(zLnM&.,pJV6`^(BujR.<.AV7m/(YC{U]$_ C' );
define( 'AUTH_SALT',        'QH|(xg&G{~Hsd%X,|Q%liG;~BrQR3^aYHs4FU70deL<`qD~Azbw`lp8qn{Eq[z:B' );
define( 'SECURE_AUTH_SALT', 'n!HV6HM H}rHV)?p[^ o9Y9^j!A)4nWdE;q*%IAplr4vCqjW(5Jm+c!g=EjwL=94' );
define( 'LOGGED_IN_SALT',   'lZ4D*sm/o?C.zlv50gJ!yg-nS5N6-+yM+2OjfIc]f_c:n{DQSL3nvk %t 0E*O/X' );
define( 'NONCE_SALT',       'o=+G}]rA3< mqf_mC]$klu)3X[1M!,$i#A47U?H%Y8yU%tccA!Uss[:dGX<r96(9' );

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
