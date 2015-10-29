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
define('DB_NAME', 'QuranSah');

/** MySQL database username */
define('DB_USER', 'zam');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'Lq+|1C_lJVM:kME?Mj|6TR+F-KV/U?SZqoFJuhl{-lL#<aLK[*}Vr@gIMa{L*GU;');
define('SECURE_AUTH_KEY',  'h!Y+D+?d,l+sp+tI6|q:((g>G5QSFf  CW7/pCl=L&eh2;1bg<Y.ILbmFFPl3h2S');
define('LOGGED_IN_KEY',    'LRYl{9[w#;xO&kpxYI_De@o*`@X/#T20l-9qz$b_|GBsI{8>Y<OSDjn{XoePS7-i');
define('NONCE_KEY',        'H9m3k)a2;n-i$Dee$R4jBJ,TXL-=tc# u$uw,.oHB|?4?D:BgG)!I<!tV>Zi-`/G');
define('AUTH_SALT',        'z0Qrddj10]`#`pSC$uMW6!A9?eY:xa+w?QY(9:MNI$-|V,+L</(]!-3y.SG1R{jl');
define('SECURE_AUTH_SALT', ' zbi+V)mL2({z,d*HsfR&e><b7xr?NyVaYwa)JkO??h4ODxc>z/5-3-k6zvpjEPH');
define('LOGGED_IN_SALT',   '*YuC9;v^1@ddX+Tk9Jy7nG*wlh0nA$;KVIc[,#wYnS)OS $>$j!cZXA:/0/s1(zr');
define('NONCE_SALT',       'IT$NAhR#0s82gpeea)+:| PG[-r`N}m-#-^QIe#DV$~_du*QCAU>(:vF P9$i dL');

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
