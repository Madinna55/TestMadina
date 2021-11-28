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
define( 'DB_NAME', 'myfirstbase1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':hR!|^gg-hW0{-Vt@pyTj.+$25VoQPFzI[8)7p=SsxWF|%qW&?(f4><e|JpkKj3d' );
define( 'SECURE_AUTH_KEY',  '^njbR-|zad/K iej3K7ZOBRdpMLPDiyF>N<_,1,P-<D@/[f5V/$6N<Wdiz=]ROgV' );
define( 'LOGGED_IN_KEY',    'ch)j{c+OLkV5i?MRy9R }>Udc}MF`X|TM_6^S},odC6-&pUb6CZ#hxDO6Jx7Wgj8' );
define( 'NONCE_KEY',        'xBm5k&{Za}_u-t.=o=AW{m0_CTi:l`VH,vZth=f|Rt;JtaQO?A?[dF/-WMofb`F]' );
define( 'AUTH_SALT',        'c%P,!jZzP_Bz6R)D4lejN`aI;NWp4EQ41Y` a2C2w-SaKoa,:J|v^MfSb,JqIBpJ' );
define( 'SECURE_AUTH_SALT', '_ae3,m9x_Z)uMg]%VvmT2>j8I!F&RCh{;4Z;x6q<KB-]u80wWlR#X{+}B2nM^B4{' );
define( 'LOGGED_IN_SALT',   'C>esWcTHjO.nu~+/ic2J<}91s<1)!7UcJJ_x]_2|}9O0Qq%o@DElz$v30lTOI17[' );
define( 'NONCE_SALT',       'B_^Z_I+ostI?1fZ*Bct7=($b}Al8K,K$ysA~9YO2TAp={]9C4I_&#IV}Igm}L)?>' );

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
