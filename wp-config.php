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
define( 'DB_NAME', 'dbdesa' );

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
define( 'AUTH_KEY',         'K>h@c~2Gdkif>p>2~Va2pd;% *EqVp=%g7?^PtXYJ}wXC|SQBHPR-=zu{mw[Un6Y' );
define( 'SECURE_AUTH_KEY',  '!yD&ocPhUuVK0M#oi^`UQgrfc3n@^aR9tEP#)!~)R3.&68O$`@3vcZM{sGO$}MFm' );
define( 'LOGGED_IN_KEY',    'x[L@U0*7x9GhbFxZVN#aT#P4mTx0j&CYqG,X6,mkr^+dWNxWSTWXq08`:gGA[hK@' );
define( 'NONCE_KEY',        'M>{MdS,DNL-1A|0aC_p,{XoZHy;i$OYq$o1UV{w^!:,T`if[m5Vw~PfJJ?_O6ERS' );
define( 'AUTH_SALT',        'V_@NYK(,WqRWy]=mD2ei>UF@8F^o(z+gp)QO@R?ex]|WVIdfc:5~8B/WgH5{rTe?' );
define( 'SECURE_AUTH_SALT', 'ze^/Qsx0.J$>a-!?`;{w63?6Brn)P`7%cS>khxORNv;$g<gMZ|&47h+*!n;_#XZl' );
define( 'LOGGED_IN_SALT',   'VH1*;( -w@[~]wqc-u[<WS63HrJG]$]MP)bD$u#Nq:Y(Q0SN-|`9V$XGf?N]Yy:I' );
define( 'NONCE_SALT',       'n*67~o89ROUW0`(:8glP<l!{xjWPh!#kXGUz+X5#0MlPwTMyWyg9#tNx0;*`~Nup' );

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
