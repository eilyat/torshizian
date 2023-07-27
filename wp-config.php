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
define( 'DB_NAME', 'htmldev_6229' );

/** Database username */
define( 'DB_USER', 'htmldev_14ab6229' );

/** Database password */
define( 'DB_PASSWORD', 'Z9j-HiTY@-?@UPN0' );

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
define( 'AUTH_KEY',         'N|N g_g%Pj`G7qw)7cEWfS!#5=EH63`NC5ueT$PUx`YO;<wKF;&-,fY(;kkprb&-' );
define( 'SECURE_AUTH_KEY',  '[qm:duq$l,5o@:JR]%&K;R4[9Q-(mfsnnb+czWlB`KF/%Uxh8)T$7t[L-yJUf-gH' );
define( 'LOGGED_IN_KEY',    ']m{0XKun+batU6@qXQ}%6MsU}>5W%!usk=QBU&#5(?;MyOz=Wmb>?$5Ot~/mw`;5' );
define( 'NONCE_KEY',        '9s!voMo*]@x]p)3N7<6l5jh^BgPQqadt0SBxA;4Chu:zZT1S@DiM^I*d]hfnVbuc' );
define( 'AUTH_SALT',        'k1/nE`.U&cNZs_}KMf.WBPpFW,BXz%b)8FB?P)#hFbtghBi.ARMO.W^}s{]v~O~D' );
define( 'SECURE_AUTH_SALT', '<&-y[A,}z_0gY;X15XeA/OA?/H25:K#3~XW+%.%`|f@GKKTP_DD@1Uy.4E4 b.K0' );
define( 'LOGGED_IN_SALT',   '=w|!kM;*V=T2.OS?vE[!=#b)1jQBDP]Clv1y/*a]N5APBJ?^19DdyeX~4CcM`Uml' );
define( 'NONCE_SALT',       'sfz`y0+B9lUK}S,MQHG|[5lYM2k&0Gt)@HWeP3%;>C7o#<_}~)(s9}*eBxp8@~zt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tXWL2_';


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