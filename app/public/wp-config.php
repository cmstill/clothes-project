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
define( 'AUTH_KEY',          'FT84SGb7+R0st3auaP76D,AAQp/Ikvh/!>m/<SP-NUR%$/j}g^)6$Ly/n|3X)Z`Q' );
define( 'SECURE_AUTH_KEY',   'dUXI=G%4M|Q8*PJT!YH?Z8-TE=N[g$_%_}qMp$y`5j bSO=N 4C|M|j % Nsy/k?' );
define( 'LOGGED_IN_KEY',     'N6*Udb<p+:/I%dPw5[LdfD-!V|j e@Hb@a4iB)Ahj#[GU+hlhFm~UYA-m8Pn `>i' );
define( 'NONCE_KEY',         'SgP!5$9@Yxp- e^e-:-k.[iCaGU}2 -$(N`~UD$LOn/`y&2ww*U<aI2[jQLmqLa|' );
define( 'AUTH_SALT',         'X/q+0`%Q;1nZ5Wfwf[yYV@AzZ:nJ#q yW!1`z(#1m:43V`3wz4?gQtw]%-C[chKH' );
define( 'SECURE_AUTH_SALT',  'U@1JxE?XEx~IS9vT%tKOTjC$!jo)pyS0Inu0 XB{YV^rM*9,_k9]KzuQS!Dlw~kM' );
define( 'LOGGED_IN_SALT',    'f5KlP0/B7Fot?bs#~A}@=4F|T[FIEp!0?]]OUdsiJv/SWUYSRB_nrx$/rygC8qb{' );
define( 'NONCE_SALT',        '_bFDC^}y*TCDl2gX6BIP@1~/p!5GVK#b$4jV1G[|^FXrr;[#sQMcTI=,hXKQi|aG' );
define( 'WP_CACHE_KEY_SALT', 'Y|tMj%8Ox@h[}4c/=?%w}>lDb/TcZhZ&jlAlRNJOo0f5trs6_!S0{%+LfXyf|O)l' );


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
