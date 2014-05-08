<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'ids_db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y~I,0U+-P9pK^)Dyg)UJ6ZHJ1IS&1.L[q(%w-!rXODy ;_^|u%xlQ--%M2y+0>yc');
define('SECURE_AUTH_KEY',  'vfEWuk,s]vE3CGa+|$J0agoge_IgH/sBql#@sO=]|tZxb@+Wf?eIwRa4cUC?}_+u');
define('LOGGED_IN_KEY',    'F)+[A712^B!Ll{MaFgA5Vp8|EWNVG=F:x|`2a@~jIV;Q3*+-/)vR0dU/Zy6x;7wW');
define('NONCE_KEY',        '%{=0Y9P JM@sfgC`>( LeV|BaDvXUNGNVw=:>du9hExe<t^|IsUB@yNXlU^b3-P1');
define('AUTH_SALT',        'y7KXD`Yr-I$!l?i$Zj>= BIMm]||5wnsC-0KA]%hZunq<wL-<B&Vrnko<mGZ8.6c');
define('SECURE_AUTH_SALT', 'e&gbmk#|CWSg+)Kd,xN? &ql&J&FIjeNj&M7QhG9-C~wXpW|_]cMOh5/>[U(4 M-');
define('LOGGED_IN_SALT',   ' &iCDK-t?G J&J14C*$t6;Zlo-zi]R<4ohR7a@_KQ~H^+UY,x rL$m8Gw02NCBg/');
define('NONCE_SALT',       'F^F;MIMQAd[-E6j+k3aW(%P^a9: il,4E%[fJn7e=5+-i&Fv-T<Pa@q+xf[wd|Gd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ids_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
