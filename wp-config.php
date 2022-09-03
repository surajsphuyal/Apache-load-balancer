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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'suraj' );

/** Database password */
define( 'DB_PASSWORD', 'suraj@1' );

/** Database hostname */
define( 'DB_HOST', '192.168.56.33' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem access **/
define( 'FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'zo:hTCGH63F3IrCg8QZ|RNp+zHYS_;71(n4C@ZGWKgp=U3@n ^9p65P0J`8q/E$1' );
define( 'SECURE_AUTH_KEY',  '}>&2O^H;h-+G}{oAE_9D!~`~n9bQ(7A7!0~4-g Xx%?2HVO!0e]x:`2Pi%[<YZ:w' );
define( 'LOGGED_IN_KEY',    'UU)C$eBSXYYozs$^dBAOUk+Zz`h>fY;m-X+9{.hCN,mVUmRxnmMGw6Z`VkZi[C27' );
define( 'NONCE_KEY',        ']agdEna#>|ZOQjF&ut=6p.z5adXJnO(Z4P=-Zxg?LQ%mXl{9o<c6*%g|c3:$:.3q' );
define( 'AUTH_SALT',        'CtQ+>#]KFWO!MP8>19zE)Sv<JYDgKsP{-T.#o1/Ba,cr.S5*5=/OElCv;a(vkr6U' );
define( 'SECURE_AUTH_SALT', '}w<B){TS+Ksc3j^dW74bn@ |FTCdqsMKNO }P{8+_F,PyK3K |mpuO_D?>H3I|_U' );
define( 'LOGGED_IN_SALT',   '?U#]vdcqq%AP5u{pNr[1mQ-Oh}DfNO+FKE$})S%CfvIr`@q_<~93w<=<-Cj8=^iZ' );
define( 'NONCE_SALT',       '>-c0;qu+1S#*EL&Q~]dB#;v:jMG{FwgFc(!6qq_.cE.mb}`:QctMy%Q{pbSbY%B3' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
