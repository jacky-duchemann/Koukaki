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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2X>IYo8N[m~|:M=Lb QF}[jt^YrD<<gTRR:iS%fApd1[1*9+!SXM7mnPb[@i0m@*' );
define( 'SECURE_AUTH_KEY',   'MDX)O2tNCd}gtP@RzM`aL!QXjA912Z5|YYT,qlI:yPPL&}Ab2&KKPcsRKU_<*A]_' );
define( 'LOGGED_IN_KEY',     'kK.b.p`srWlpnkW2(6,k_t.w(wl;YZDE=5dyOOCF}<DxQc?<Mf,skv<k x!VH%$R' );
define( 'NONCE_KEY',         '<|2K]CQ gP9A{JQ!MZ&rt) 8ZpWh*A@Q#MP`n;^y$06p]noY%g_}ebl^uzyoE2BD' );
define( 'AUTH_SALT',         'rGyF99(SkQ](Uu6^o:})yMeVYlOQ>c;wA3iv7n1 D8F?@kNzyTTus(4>*_BXaUMv' );
define( 'SECURE_AUTH_SALT',  'b{tY!ZP 15,W?9N _ab4FB7zzWr8>&+C]HSK>8eY1!fcC*!uJXb1r,_OmZ;pEtjG' );
define( 'LOGGED_IN_SALT',    '.1D4 _FR94vue5OP:0s5dEY)*^i$jRq4j.~@9+fB+#7c$y5Ni[P*=/Cckb}@F9@W' );
define( 'NONCE_SALT',        '`,^Rs-mE,=ya2*p#R|j<zYMDi=:A: H|N}]Mu`)|_(&-V4Fe)P=H2,U[#vY-cr%?' );
define( 'WP_CACHE_KEY_SALT', '}dKD20#><lyUMj4&T2#QLXd[.K&=WxspYd|W`) Y}OUN^H1co`r_H3V^Ftg?84t6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
