<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'SDcxNG5nQW8lLzxFYjZAKDBMOFtASm5YOl5rcTMzbjthIV1oKyY2PzlpNkRxcHlkRyBBKkZ6JmZuLDw2Yisufg==' );

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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'aibug08k712x9_I6d/xT77>Y$J8:cX.kY[263O|1F(OWd5=i^%-E1}CZt,[??hL~' );
define( 'SECURE_AUTH_KEY',  'jn36^+S<%}26MFSH}R>.g]:UB:aC+sAlkNg=Oj&Q}rY9k@1[^vq^HMU;),#o^F}V' );
define( 'LOGGED_IN_KEY',    '0f>AaTmH.30{wWTK%BO0_o@)ywv!6/TH]E)Cdt8eBqhI,(vyL&!V.)3vWab,hYcL' );
define( 'NONCE_KEY',        'z}O`)/~O4&kIOn;Ov/8i|A:JW^Blr+xo04tm@oJGFgu^z&t6>UyWiR>RhhpeMkTK' );
define( 'AUTH_SALT',        '-bEe$6^(pVLBGS`e-Y%AY0+Q?6/eRZA.QPt.b_bfFirnjrcmU@y?a}{fOMhQMSAz' );
define( 'SECURE_AUTH_SALT', ')Xq^IFrX $;:.zW$+;Wd4V__T.7?v7wo2OlL%czAC-&!ZTnwT$@6RX+93~lgZzb[' );
define( 'LOGGED_IN_SALT',   '.<UPG82NO383Nk]CpMtKL?h{H~?:CP$:Z_{/g!Vq@@nquc1B<5%.qf#dL{4&e]#;' );
define( 'NONCE_SALT',       'h3%@/sk_0MX7=hcc1h#V]9ftN}f4oOz(91[d@O^V/5a(oLtjDw1!CF{<7KwrosT:' );

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
