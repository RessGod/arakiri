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
define( 'DB_NAME', 'b937ai15q65x9l7i4kdp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'b,^ke1 z[go:OJbN3sc{5YuQg9muyH{c4A[d6:7jZ.k@brh2Xu<X#Bdlnx8Q6L17' );
define( 'SECURE_AUTH_KEY',  'v<;Iw]fecbuo[mf;QbvC7y^[7W4m5uK%+S4-o(C4.2ra%oSowaIzGwAx2O+3;mtM' );
define( 'LOGGED_IN_KEY',    '#^#GBA)bRSo9M%g~LN{N1r`8bY{{e.UzYIy.1 o/;r<r3mRtT}|#O!$M%$@SSVKR' );
define( 'NONCE_KEY',        '9!FQ{:<u.H}<Rcd.9{I`r%W<6h0~)4j=7(ZdLGgL1Tky2c[HvCf(-,OebV3(JV:)' );
define( 'AUTH_SALT',        '>19[#Ej0`Oxt.,&Q&m5vRSgsks@{nI_R4@ev@0|l$3}qd%`b=YmVvOzP5qF_=:LO' );
define( 'SECURE_AUTH_SALT', 'U(o:IhDZtg>]|mE$tb|/FpiMpbbxx#xEliDCU3@$:;F)pHH?(#9+B2>dAW^T3<Wa' );
define( 'LOGGED_IN_SALT',   '7i:XkF<&K:;^6DSC<P=T87o)JrB`-6drU*fppU xEZAh/I]#kVWpP9`.wY1nb`*~' );
define( 'NONCE_SALT',       'zu%0;VR* iy2!ON^`1huk.C0rT0/x^2ixb^Csb33uJxN>kj{GtJ74F{0infCbcN/' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
