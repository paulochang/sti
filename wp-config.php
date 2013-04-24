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
define('DB_NAME', 'wp_sti');

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
define('AUTH_KEY',         '}nRNLp5hVvDK`B<7k+nRB=|xP|-gcXUu?$.|[(.YZ/93My?B`1npy9=KL:3#}yQ>');
define('SECURE_AUTH_KEY',  '#|H(d+g%oL5-m$b5WETWkuq+McL0FM5IcS+9P%d}8jo28#~]b9|6TVd|SSk2z)If');
define('LOGGED_IN_KEY',    '-)go;AMaL[U.pO):.=1x5/>@2yF(}RHu4| v&^|oQ7Dh4(|(]g5||ubBf}>9)k.&');
define('NONCE_KEY',        'zVq*VBZeL|Xtm|Q#be<XTR|#:@LFv77hc,RKi):dXCqsta(Q3gVQO]4#!wn0Gw|E');
define('AUTH_SALT',        'n`k4o-x-n8]Cz=]r6W8DMg<r^(:mf/#BPC{cO@^wu?NR+,UiDj-vV7+lT9$&u1+-');
define('SECURE_AUTH_SALT', '4Oz]>0+J5X@%;f59B_|4[(r=b+W[w7qAm<^J4Tv!(=9_-7VlwJ#=yMjICmG&+T&P');
define('LOGGED_IN_SALT',   '.wSnnC+9#7y#V(J8o Vktn(F;pKP1p2y>Trmo4A)dB-J.k=+oXR0L{YqxAL-S9S6');
define('NONCE_SALT',       'V,qsJqxm#!vhTV18%shoM(Q8oiKw.MB94+KZmA0hQP*Y:tcrwLqJ(Qhk`[F;3W_A');

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
