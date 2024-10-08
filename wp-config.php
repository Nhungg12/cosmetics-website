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
define( 'DB_NAME', 'SudesBeauty' );

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
define( 'AUTH_KEY',         'wF *;zgjJYz^hF4!E&ks&9Qva#|[:?&5kA-kT&u5#eS!JV/`,RP!SB]{<L@txZ7s' );
define( 'SECURE_AUTH_KEY',  'I[NEX`wOkr;c}68l1 K*5YdAN%$_MgKO%UG9_{Y7NY@*t)(A[ne2dn~Bb.gt.dux' );
define( 'LOGGED_IN_KEY',    '|rU{SawFS_!|&O432e:yH#ca`LIZ>[ .zD]]m^+TlJ?{Bcc.;hvGv0XZ]/p~3nC ' );
define( 'NONCE_KEY',        'V|#j%^dz;HU`5v]*P_;aNsfIX*ueg(0112@. sLc%9*tq4#?;SWX#:x!V)yWSA}d' );
define( 'AUTH_SALT',        'TSsb54v#B6Tjiw{##_Y9%S/S#INcP;|11BGpn9tZA_Ag=T)L`Hu_DH+>Tl]eGJI-' );
define( 'SECURE_AUTH_SALT', '?UDI5 uMUC/J1ZiNZo2YwxE:<!?nQpHAaZA41)vx~.y*EHTq[w<BZ:f8G<JcL|=@' );
define( 'LOGGED_IN_SALT',   'h nHbD`47u{0KapHKxmdg^9733livvge|l`{$*&*@Ly&oh/B%f$6Ml$.2lr-tU&e' );
define( 'NONCE_SALT',       '3+9c_>sPSfOe9_0Q`,PN-9g={hHp9&M>q$8<;_{Gb ^DFe+)O}y7_pPnxjoyoDH[' );

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
