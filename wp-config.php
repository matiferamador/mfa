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
define( 'DB_NAME', 'matiferamador' );

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
define( 'AUTH_KEY',         'A%uTu:Oo,~]n33/B5B0; J3nAXN[GcFA_r90ra&8/mO&)zmk):i~Pfa-5o<n-;ct' );
define( 'SECURE_AUTH_KEY',  'Eu*XS*li(k@D- DEawuA5=B/MQ8e^d{4GVxkwR|tAL<-X];@|A3dzWx*96F0*2>P' );
define( 'LOGGED_IN_KEY',    'yD]-vU#_I@8 z4@EJ|]:w{%6#aWs`teg+w<L5u{|Fy;2w)aZ5)Oz-k6eI5<zk5!?' );
define( 'NONCE_KEY',        '1wC~v]g@MbLJD,$7uTIB1G,:aCM|0~{70MV]t/TApimXPDU_j)q|kx*TS1|j~D7P' );
define( 'AUTH_SALT',        'Q%/xdN?fU;#S>:fUfnCK@)=gwnz@T_62-E31}|RBI*=x$d *wTo$yogsi#H/5N<_' );
define( 'SECURE_AUTH_SALT', '.p!bN~-Fn9oh4pd>:4x{rq;N-URVsC[=Uxb6E*7cFpJUY||g0rGRD,85mB)Wm3Dh' );
define( 'LOGGED_IN_SALT',   'd@l3VGp9CQ %A$li8h?xi.G#{jZ!)d|wI~jpgLR~)Kotv7gu+% _VM0:w^w~dGKv' );
define( 'NONCE_SALT',       '=,r~UwRmN[1~Fnw%?*pa6^P.KJ<f(%e:ATGp8urAXSVL3-h:ug?pGl[Oek0jr]T6' );

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
define('FS_METHOD', 'direct');