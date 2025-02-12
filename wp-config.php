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
define( 'DB_NAME', 'peak-growth-media' );

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
define( 'AUTH_KEY',         '{Mum<pqM3yglb_$]^fdW0bCD;wZ+I!O),weWwMKK[ N]j]*S>iForu,TsBk)ZV[]' );
define( 'SECURE_AUTH_KEY',  'h0biU;.1!0xW|J3EnpKWm;O6`Cga]$Df{xW]XxMoL^gqWv7-xoA&`<jy]Ej2z,17' );
define( 'LOGGED_IN_KEY',    '.Tk|xCZzFgIVuZ}D0UT-mg8l%&A|AHy{^<~y1k:&IlI@8SSu,|R0v)2N0n?8*%0]' );
define( 'NONCE_KEY',        'B?~FY&E5Z>|T7}<PiIj6u`{{X-.OkU8pc$pt}fJP@/#|R1/yp2:($/EW&n&U*L{A' );
define( 'AUTH_SALT',        '}SQ*-hMjY3?G~yMp$72Q&)5Rde*F.)Y LQ^P!:AfLQ]xd*up7Z*ldg7;6Edi2^Tx' );
define( 'SECURE_AUTH_SALT', 'dKA4At/&Zyx@;U>h}tXGaztg:*Wx3m#TIo_J&BVl-Af-H+hIVo4]*S0$MBJ[VjfA' );
define( 'LOGGED_IN_SALT',   '_Bj55plKEixQ^d:NEB|=T|He^++gPK!n?#8q$qRXI{$*AY8kulbbLgA^6n[b-F[L' );
define( 'NONCE_SALT',       '06M+]F(KRm$K3@1]f{IsAyrA7pMgYhGVl<(?^;$,|x$YUu6esf]:Sa7X$$G.]zLh' );

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
