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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lScf>Ys[se-,56DUt;p)WjwVZZ5EGDuV-%B>e657e9bE3zZ+0-uJ&$a8IMQR4N|w');
define('SECURE_AUTH_KEY',  'F(qRSDw7e`lGF-}/cnSz0x4*B=G}X_Y)fE,Yuv`f,=QcdUCgwai#lC<Tz4oLj{Pb');
define('LOGGED_IN_KEY',    'afO1FN`?nbEZ&nl_g{MN(IQ7@Fk?g6wT:N$R{&&~Rv`P{NJ`q3n]6K,UUVq=jZC?');
define('NONCE_KEY',        'spBZ5+nu;f7Tw7%1@N{S>gHvqe4]pY:V3vZF@6gk!=pD:.9A~2zpxdds<liWWky4');
define('AUTH_SALT',        ' K!GmEfhVAmMW6#[>tzc6$[T/1HR2Nj0)HoM|hb&Ot>l-X>:Ap&/V;5.I|[Sxq,}');
define('SECURE_AUTH_SALT', 'ZI3w;[a,1o;.e5j*q*NU 0;@*7`!xVXH+>!ZLLY($-.h}!N?ml16X]5ufECTba$&');
define('LOGGED_IN_SALT',   ';A 4%QI~7<d>aQ5-zsuu+$RxxY&c-!Gsa~eBK-BqOc*W2U<#4H%0afZ,Glf14nXg');
define('NONCE_SALT',       'C7K/[)*_PB_X]g>;)80L?d5IWr!Cp!C64 lJkD(5Zm[m>iMKT,xyh.o+}]%Jsy7W');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
