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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'sentinel');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'cym4t1ka');

/** MySQL hostname */
//define('DB_HOST', 'localhost');


define('DB_NAME', 'despot1_sentinel-dev');

/** MySQL database username */
define('DB_USER', 'despot1_sentinel');

/** MySQL database password */
define('DB_PASSWORD', '8Wqs0zPXZo');

/** MySQL hostname */
define('DB_HOST', '188.166.109.230');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N~ngYZWbu7H?#U lql0[m_u ^tg jA];cpnkhr9s}D>Egvy12]l|W4,h6/wNDI1L');
define('SECURE_AUTH_KEY',  'L%XtysC60&m9MT[/u:K+YPc}]pWH.u%arW,rIE7ehD-rm7!H]h~Y Fi`-NbKz3&q');
define('LOGGED_IN_KEY',    '%iB;h[P0hddu8@?RMy!F_N&1s&?Bes&Yhq1>* 4`D5Mp!oJdN,u3ENP%>+m,Ceff');
define('NONCE_KEY',        'wD2h_Ag,cMe/?&NN/Z:QVb3v.)I~Ro+oXcumZ,cZ(y?[Tz 0f8y4=$VGxT([a:+T');
define('AUTH_SALT',        'AKN+(!`cP+>6c(6*!A=e>+8=[gegrupPwi3ei+}Gio;H8-NhV|l^0o=cz2u6fOy/');
define('SECURE_AUTH_SALT', 'onN4f0n4L4n+I9zrH>5xL%D`:2B#5^5Bm#gT~c85%D.IK tu^C^Os7K~4MV&B]62');
define('LOGGED_IN_SALT',   'nr0g6>=U]i58S$zB11-UC(M/fkmLsgwQ TN+eo~Xa#L5phv4K#:aw/de`G;^=M1<');
define('NONCE_SALT',       'Taa|ay#=ni8)@abrGc6X14FM~Te,_7739rd0U=}aod-5r/k02T9YZSZ;r ?5)GkI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
