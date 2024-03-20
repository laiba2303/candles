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
define( 'DB_NAME', 'candles' );

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
define( 'AUTH_KEY',         'kKf:hy^*`?@f-lN;_a7{AV v;T,)geY~%s)q;>_SjnBbm3br6$/T>NT{F yNrUt*' );
define( 'SECURE_AUTH_KEY',  'nq#3d84~j9=z+m2[8:h`%X~.^s _d2ulnGf- z={9IY{C4~o={-%)EZ,%c}hz ~p' );
define( 'LOGGED_IN_KEY',    '|7##,xNRunX7t`f8hV exM_vw!P#W-g|M](,l8rS?pP:#pVZ|THz)Q.G|VzR[I{T' );
define( 'NONCE_KEY',        'YJO3}ur4~+oF:JJ[>`r83(|;Rgv<NQ|Ey1xy`!;Y}E<w$kCQBd1iJaE2~=U3N&[!' );
define( 'AUTH_SALT',        '8km[fh`!&B)WqrW6|+U9w7cU/xwsd}d *k]bHTovX]F*48_p+SY/SNm$q9f_`qQD' );
define( 'SECURE_AUTH_SALT', 'x>Hdh[xxASaDiLA @IW.S%keG3ssQP[>mJg-OJWR><lM(n{=H0+g-!7u-@FJTV!+' );
define( 'LOGGED_IN_SALT',   '%&tyb6DB[-,X(Ev(xzxt$Zl)E|1}|z ur.08P%=7zNEeWpKdt5JS{hb;e8xwZOs2' );
define( 'NONCE_SALT',       'o@K-nNNen:a#mAA*V2s5JW&`Z^MBV[lwT+_6Ta~[5;=xr{yn0rq?Be27TSYnVm-1' );

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
