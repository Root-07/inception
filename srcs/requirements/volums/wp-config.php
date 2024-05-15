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
define( 'DB_NAME', 'RAJACASABLANCA' );

/** Database username */
define( 'DB_USER', 'ALI' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', '172.17.0.2' );

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
define( 'AUTH_KEY',          'l7#p}ISdmNo9 Oj0!6%o$9@m%j*6&/.`,^$_d&G^&$VQ]u`SE~,N >@/vFPuTj`#' );
define( 'SECURE_AUTH_KEY',   'h1VaAa2k+`?Fed,IAq<*coUd9D]83HQ0p,XjBKZyVM?.>^S5`T,!L?bnwnm$B0<6' );
define( 'LOGGED_IN_KEY',     '6gg.0jNz+p3>ecbes*l}No*T~:1&^4`/9CE8b-pRW:X2pYUjW`y=$!s^O?(si0_7' );
define( 'NONCE_KEY',         '3oN4q>`c(!L0;1,PCU#7]B()FmQeZjZ%wb,8_CkT%rsP*?m5f1WF|eqES5>/3r)J' );
define( 'AUTH_SALT',         'vmFE@)l_ld39F?ouhz`{>Lgqr,x>,P[}DPFid{IJrb2`f~r_C|C+>Oa ^DL<_WP<' );
define( 'SECURE_AUTH_SALT',  '=GoH<~-2@}{Iu>y4`yfo07I:D?@L/S*;oJ!t8EILOMmpoqSIwwD]}pr:6kpsYhvl' );
define( 'LOGGED_IN_SALT',    'k1sqN}^,5]dM?/gl-xDF8x|P!Ln0&`gyj}AAS-9]u|Kfih?C`%Lyw {wSKXf@@ib' );
define( 'NONCE_SALT',        'pT]9Ztwz;=Aro?1C+s[}Edy/3k:@G9F^oFs.*.(l]d_u!6xeg|kswFg08u{JI$K&' );
define( 'WP_CACHE_KEY_SALT', '_Q{ Z^sy<8+jU$pL&sLavy` l/ggeZa]05n$=9y&I6z([1xS)J6|ru KRO$0H5$/' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
