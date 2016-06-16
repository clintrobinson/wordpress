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
	define('DB_NAME', 'wordpress');
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
define('AUTH_KEY',         'R;]5I,&[]2-LL8z{,SK^+wwVm8ewat!`%vLtS@<1rN7nXt(B@xC^r2S (?&Sf+2Z');
define('SECURE_AUTH_KEY',  'vl1-`]sNKkVMp+|$(@:,37QzrEX#?5DqAm5_M?XLK2dCh4Uu}(bAZ7SlxVn<zc1P');
define('LOGGED_IN_KEY',    '+eio7{2o@pQjL|,9hd+dCyJ=&nRD3`.aJV+,.?,~-(.GJCf1]XI7X.cSq:Yg~TVQ');
define('NONCE_KEY',        'e?|GTv{W|<LF.cvW_:.lc<ke} tHi%%&c%^Rk9CMu)F3:{e4:Iw!|8:|@.|Y5hDR');
define('AUTH_SALT',        'v3-hFt-=@=gx}uCtQD-4$C7$*zH<!x2)${e>uR{bwdHY|UR~M8mW>;W>?9H`0--3');
define('SECURE_AUTH_SALT', '<%#Tztt)E*6+6.!hv[3`h;Ea||&my)Z n$zhA5pv~A]5WZ<5~[x#olQ=[c+f1}C*');
define('LOGGED_IN_SALT',   '[+DoF7/v2$!qID$^E.<_5^~Vm/WqGpylo`GR5xbIS{BZ<z2-Jo{hqT}<o)+`qNMA');
define('NONCE_SALT',       '~EVAb3^{/6G-x-8o0O-+. +3iF~`Om5B?8T5>zPPBcs}H|;2)K^r4?DZswS4EC)*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
