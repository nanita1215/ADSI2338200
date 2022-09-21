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
define( 'DB_NAME', 'cms2338200' );

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
define( 'AUTH_KEY',         '`|Co<HOL~h@7|o?%;T/G>G|vkY1UNNNra=Muv]d8ZiaJy3F&UtF/)rO4wm4tg2>t' );
define( 'SECURE_AUTH_KEY',  'RN;5.&[mKkGC;YbjPbXapr7y$lVps G(w0hm&ce=D+%<VR[2EstaD&c}u8g9T.-q' );
define( 'LOGGED_IN_KEY',    '_>EfQk(cvfSH|6jL,;8Xr0+S>Q|!vPKKm1e=]Kd*dAn%L;11EF^Wj@g%W7Qm1]sC' );
define( 'NONCE_KEY',        's)ayo$&C5sIeV/3^w1RZ*2~4&%185.QMOFOG#ew&m|:v}++teHd^(ZA;5^ yxj{t' );
define( 'AUTH_SALT',        'VXk>gb36.N6zJD5bBa9p3Gb-#V.r; 6,lf9}ojg{sDVtkaTsS!k;At@: aNoFFcv' );
define( 'SECURE_AUTH_SALT', '#Z5sPD;:Cu$;up|-+> 1A16~EG8H3x~ kHH@YI,I4Nc@sP^uG)bb>Kh0J8&8K5Q]' );
define( 'LOGGED_IN_SALT',   'u ;l)zC~MJj:;KeZ+<YH]jH3Fs{qxiSn<w>&lDuv7}iEmGn~_B4EV^H1cY)ugtTc' );
define( 'NONCE_SALT',       'k9@h`j<8~*6I#ob|ee-F;YKvN6UpcI9dnIvF~dcO8dCelf4+TI%dnC<K*!7z512a' );

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
