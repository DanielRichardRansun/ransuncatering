<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ransuncatering' );

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
define( 'AUTH_KEY',         '9#8Q;V&,4WJp~KF;_5i(;$gq<^kGs#Pwr-+%m_h46Qn,655| *I`+QLT/C71jT}(' );
define( 'SECURE_AUTH_KEY',  'K18AQ8.@C3KdsZ]%6fJB<,Rnft^52`b<e#`@T3gG6s]`Ijd|:ZKM`r8U0M86ByWu' );
define( 'LOGGED_IN_KEY',    '5Czvtl iL#V8*~v#hU7Fc[:67-_VAy< f|1udRhyBwXO5+[=e7mB+_>6k*%(/ei6' );
define( 'NONCE_KEY',        'j](-m!b4g02Sc6c#vxEeAo*nG[-UNlU|5X.Tph>Tx%+ Q3~A&IA<}y>S7CPKfu:`' );
define( 'AUTH_SALT',        'Q&%O(WhSpDF/fGN0AUpk,Ia`2,9UCE0Vh+SJqxz=cDBQp= mKF1IrO0KSqCV~[aX' );
define( 'SECURE_AUTH_SALT', '/d_qz86S:bvv 7O)+Kt>ADcbil?b]]tFEuLmt=/*pWmO;b$k/#b+yYm*r`V+cftF' );
define( 'LOGGED_IN_SALT',   '@SzEq$I(Ox2OqmDO?PfO&`=`fglN@,c[/F8S&Ssi~<$JG$6y42p~O1,,+Kx>!+|/' );
define( 'NONCE_SALT',       ';o^COvxOKYh$kg&oR`,m=d.wNz$/x{4{nZ[4$<(@tSR5j&7DrFLSoC}^M[5Mz]^n' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
