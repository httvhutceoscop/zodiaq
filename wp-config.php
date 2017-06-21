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
define('DB_NAME', 'zodiaq_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '59#W%6(;]mxh*J$%TJ]OsiGwKK@=iiksc}&)PHB?`f_btAh.1-<T}^@QHb}BFDF(');
define('SECURE_AUTH_KEY',  'y806GmX?>VoIKLJs8dCZV=rDY0^+n oOY:LBX[Q2Ibge/W-uk0JUJ_Qf1ZEpTu!i');
define('LOGGED_IN_KEY',    '{S<#>xp:g>D?lxO;IQ =Uc_oph=kB8q[n;]qUE.!*^(:DZYtt0)66mwBv-?im{Ct');
define('NONCE_KEY',        '353Z0^n%VgXB(:z-8+r}r1ZcG^ecA#5R7Gy:F,b%D1XDD6_B:nB,$F-<;M3u.Eup');
define('AUTH_SALT',        'U5I1z/f.MVy1#},zN>&jy4B)+H.;mqyz15*$`o&KJQ/fs.d3<ctoZn ,wG1gv!Op');
define('SECURE_AUTH_SALT', '6?o.kQ|ocx4]f&<4U[.JGu=>2T>U`].]6rSY<{=cYVzExExS{HKrr:P>u=+}R9`x');
define('LOGGED_IN_SALT',   'sy.z];] rM.e+j-HrG;H-q^PFtFKl KE_sP#)Nrh<c~S(hv;3h3KrTcr~*BNxg0F');
define('NONCE_SALT',       'gXbQ)k$X4R?)aMW2jQ;1jaP~Q$F1QHw01dL*sb0r])e4Xo(Bo^V8[!jN|ZO<6aWf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
