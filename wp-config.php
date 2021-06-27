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
define( 'DB_NAME', 'sportwear' );

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
define( 'AUTH_KEY',         ' F)!giRP~IJ+{+Fc30{Lh~41q>^J<*&Z(${|^*_3Vj$IerD[*SDr8X]Sxztc6^0T' );
define( 'SECURE_AUTH_KEY',  '`Qe_},,WL9x+iMPAX>eE)!U|_7z2hU{$;hRoGO5?rjPgh>qBy[SzVi,XS|Hc~Dyx' );
define( 'LOGGED_IN_KEY',    'Zg2L{jz0Li8CCk`m( wN#FQ;MNDHYt$&2R+mTPc^r;MM-b5bg1u%& --O{xw[M}y' );
define( 'NONCE_KEY',        'pwOOH1{+3`mZ5lTsc*I*2?K-g*4+*04e^?0xZUb3M@N8NU1 Im`RwfI],0-r-R~S' );
define( 'AUTH_SALT',        'Od%NElvsjj{*(Vqi Sgg)ZB~E_;M+?Sa4y*Eb cE%S?M]i@fI|R]#>GrBsjm@mPg' );
define( 'SECURE_AUTH_SALT', 'pIuB^o[:F;Wq$eZOj@V+.5#rufE[pmdT.p0!yg-6VuQQi<[voIu_$=/Hk{yl=jZ0' );
define( 'LOGGED_IN_SALT',   ' L3C1U|[y{{7<,9BeF]hvC]W%N#gTplu0}:JDv^cOB^tm#;Pb h.%FUqCX/cRIf.' );
define( 'NONCE_SALT',       '&aL:T@(x2{7Sr8XA>z>_t&cI/iz@@BMHA]h!ca,nS lE+K3H(Ge<R2Y7Z-:`10*?' );

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
