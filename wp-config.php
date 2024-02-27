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
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         '/UcZ4KFXZ>M:3oX0o+@V[8(F5;1?@+d*[T^P202q)|m?=*g{z}sGZQ)vk(Fb%[Kn' );
define( 'SECURE_AUTH_KEY',  'Z~c.{JiNSlgLi}RT%@CbY4m<1XznIL@(t78)_NYnyjLB2)9GQNAJNRc:tMjCKn~y' );
define( 'LOGGED_IN_KEY',    'u{y^Yo}72`B]E~W# cC82+d!ZP7<tBhEosn5H8sx7sj?b57^_irJd7unKX6~y#+g' );
define( 'NONCE_KEY',        '~CVG4B(c&Y5|L%#95>nfOxJXdiC|-B[&>CY8hTpCNM R~Z^QvJVijaHK&(Akc._,' );
define( 'AUTH_SALT',        'T~&Gy);^/)d];-=7e%Yw6Cv6xV(#K0DnHYE^PWwLg/Z1F$xNl{bt->+vq%f$2+J5' );
define( 'SECURE_AUTH_SALT', ']P6_~rXt&dh%ok~,0N,;;H$Y5rX0%nNkzr%9pA^GjDW1#TE%~g5}UcyZ-Vs0:-K&' );
define( 'LOGGED_IN_SALT',   '<hK/^abQj^!NQ3a 3#N&J$Fl[PGpw#78>H{BD>:{Z17RN}x.Qfw,Ea}FfqWJ6g@,' );
define( 'NONCE_SALT',       'c*VP.b;Fk0sD3^FBgVfLYOI-)&^!x6uYk8lKS&i~CxBtP-Xq,C@ych>b87oa  83' );

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
