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
define('DB_NAME', 'clean_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '[#2A&x{%sni8b;;ogt*/}cLis?Z t,$-?ELw[}ON8C/-/0CY)A!jS-5fEkxSFL?_');
define('SECURE_AUTH_KEY',  '5C+1>gLGU<&iG`fXBpV^8lY;%Q6&GS.JF]_z*5Ic 2QRt^y~.1gU6&J,VA/p@+rQ');
define('LOGGED_IN_KEY',    'sb-f/cv.W)xmv?>6&=oP|i Bu*EOT{@CUL3AamI6 #9h #FmVePXzP/Hj3n(lQ:d');
define('NONCE_KEY',        '8B1pl-4 wM4G34/shs60s%etkmdk;XF0|{n9/y5C~?I;J:f*+SBdOV/Iahnxx}{h');
define('AUTH_SALT',        'M0Nra+<*_9@MIv8juE!(Vuqon|`LK]0WrKhek;(BHFkCRcW0L)Uqr!rq,MG]e,&h');
define('SECURE_AUTH_SALT', ')rsBF___NS-C,ya(8Zt7RJ^_)bHoI4&ED!:L-dYKlF=iB`lJ:x9;BN91@|C;w6R-');
define('LOGGED_IN_SALT',   'MLJdc?(QC-{WiAts,Eh6q,J1TDEn4e&lsuRy],4}(Y7@awYG6 2tiX)?80+97VG@');
define('NONCE_SALT',       'zkEq;.j-4 1dDz&p]L9vOR6Mfy*CMX|i`QPT[#Wy{/eRA6[;wR*!cj|`yA5i7C&7');

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
