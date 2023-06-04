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
define( 'DB_NAME', 'paseomascotas' );

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
define( 'AUTH_KEY',         'Jb:u.^g>Mz]_puQ7E0EJV?baU8(U}O!HOhNv[$$hA|@UX9}1YLx~j!K(?Vop<C8t' );
define( 'SECURE_AUTH_KEY',  'hucw`Zhk|fKYF IVm2UJ$ml:Uf&j}[kCt).3U3cA:s-/&V3CepX:9EDqj>62v{sV' );
define( 'LOGGED_IN_KEY',    'bcy[$2*)_igO1 WG*q1JNII;o)dI}+.h{unuJ ?))MY87 Ds.6{!/a^p-d#]NG,=' );
define( 'NONCE_KEY',        'y-ciL91R.s)n#J(}$:Xx:)#c#D,{&+9I7bCKxyoTRw}MCcj@W>3GN~:mLk{ep9n)' );
define( 'AUTH_SALT',        '=u_9D22s ) QaG#{b?^Rx^}b&$B/5-i.4n[=p(`.zZdKE/?D.sb`(BmpI9:Z<-]h' );
define( 'SECURE_AUTH_SALT', 'M@J)X{6+/b}D_ztm9;%CPvtqylK7aiQOAn11HFQwrfU+R}7!t:`HB{z]m36i?#W.' );
define( 'LOGGED_IN_SALT',   'cT)=vS=U RPmW k0[<ac^+p,Oqm@0{JB`a^;H`*4`9f.$`[>9I;D~!)o/`}~?NoY' );
define( 'NONCE_SALT',       'FfLZz6D4ZJ(v:_sa(^ZIMF{L 1+x1oyL<`W R=ze (s4y_1lnO<J5{G41<JU{8h_' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
