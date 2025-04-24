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
define( 'DB_NAME', 'spiderte_wp_ks5q5' );

/** Database username */
define( 'DB_USER', 'spiderte_wp_k2hcv' );

/** Database password */
define( 'DB_PASSWORD', 'e4BfqGz5$L#@v2BX' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '8E&x3**-5Ol*22fRid%Mv1I!%Y~]t9;;3yra-3V2V]9O5;zIzf_[!&!&g3nD@WA(');
define('SECURE_AUTH_KEY', '!34VM0A]Hn0_F:&)543tsRTbvZi5M9-9gK%Q8bBFyx3*bx)rt@[3(r25nv&)c#8j');
define('LOGGED_IN_KEY', 'm&uB]5c&E8|hci4%En/s34dr#172gXRzBc3ABzjj0xVU|9haU1*8z#9wiH*ivkbU');
define('NONCE_KEY', '/400KiO9-m*E6J2v%HJ8WEoVTM2~yTX9zJlQ0]]7o@yF8d@eY+19)]_4|H3&9xzI');
define('AUTH_SALT', 'O3+6:KQ3Y|%8(RV&dMUpJ|S+O1]:7(Ey6v/JG4RH3099tv3B70m2PQRqvHy01gl!');
define('SECURE_AUTH_SALT', '5Q[[Al!5Q2DPj3zK!a+|CH%0!8FVO577/HM444&zLK~33B!!530H2U:_39~k2378');
define('LOGGED_IN_SALT', 'otj#20)!~A9(_!-2+1f04C/7Gy;H*3[kIE074B(6u|83[t1i2o99G7~&&a-FhF70');
define('NONCE_SALT', 'G2rVzWI5)m&3v(Kc)#%h4f/T9%1_4[yL02@czt0!h)M:#W+]*;UD4(mz&f7]Q_0D');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gOLNa_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

define('DISALLOW_FILE_EDIT', true);

define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
