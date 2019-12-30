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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_password' );

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
define('AUTH_KEY',         '9]:ZXo-P-K)Ac2&yLOjZ,&dQkzS+Lc645K&Ijqoz[y-=e;DIc-yB3A ,#hq7mm+b');
define('SECURE_AUTH_KEY',  'd+%m||?Gvz5%-e9l.0;QKd&+OY?C/>2GTI*CJ/2r:36b#[_Y;E}-/it/,F(7pQ)q');
define('LOGGED_IN_KEY',    ',E?9Hs}tjnX[0G>4-kaA!+~DXNX38Y8v_yX8JyO+?Pq]`vCJ|)p]^p4D=:^$4Gtg');
define('NONCE_KEY',        '~~65&%gxIt@=r_`DLR|z0w[%,q3a isGHf~K6|<tk*sSpp_:+7-:6!_Zi,1<><ET');
define('AUTH_SALT',        '+g$iRjLfG}x@|+X+4yzc<38d4-8fe%8ajU6-|/H-z/l)RVWgrEP.WtU|WO&ciyBN');
define('SECURE_AUTH_SALT', ';|ouK5eUecGgyOQdvnWoY+QBE(.]i3QH-?x&Pf9U3w&6N:JznnU.}vp~rsmx|x|%');
define('LOGGED_IN_SALT',   '.aBT#vm+jb!:6]O^Fe9bP9RzIw-vw< L|+YB||F|a+{ug7<`w!D_:3]H8$5m:.KO');
define('NONCE_SALT',       'S,tk->e#mkh#N8{OPb2NIk[W|xOrv!{cW&HcaegZgi-wb~]%G=2g4O_tj},6A[1_');
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
