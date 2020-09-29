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
define( 'DB_NAME', 'donasi' );

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
define( 'AUTH_KEY',         'uYPGs,M&}7F*vLmTi(v/v;m?o+i7C=M_$,8;fs4: `/IJ#HJFPygmbvK#Kdb4[eE' );
define( 'SECURE_AUTH_KEY',  'l,/_?.%-z}u)LH_H[kd!$+;OW0MN <Gy.G#.wC^$}B)p9 iIfM<j(8{(%f.|/}+)' );
define( 'LOGGED_IN_KEY',    '$/D`YBn0zdbHGVj9tf{]kLR%bPS5VvOlpq7{!NvPT{u7&.2uVc+3/w*QM$&(?%j`' );
define( 'NONCE_KEY',        'VEYnQAe@O8jWlOqxlp_n0oOUNb{TYU&Q%<2Me$^/r;m#I1X2ehN-bM!Q6Z&@<VNw' );
define( 'AUTH_SALT',        'VIjeSOR75o)18=lb[nH5u?dm2-q|9ZASTT&>Q6/f)GxwC _Ix(3sY/h5%8agiC~~' );
define( 'SECURE_AUTH_SALT', 'V~__:O`{ua3pT(?a36h#kj3.^`4vgeE+i2JZ7>9EK*<1z!U@Ff*}UHSgbgxaF=a3' );
define( 'LOGGED_IN_SALT',   'Y-[Rnc `U0DF)a^mU]E$5.FSt=5R-;iQEC T~|>wAPoed-aCu7Olz|f3ZCM3cMxy' );
define( 'NONCE_SALT',       'W%7o%CSU6Kr#ErjEj@x.i(ZCs-CDc,R^]1l^h-<g5*1PY9],9{ZB_^5j66#Ek5(n' );

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
