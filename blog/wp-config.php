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
define('DB_NAME', 'encore_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JbXr;hHncTMI+1 2}2,PGg{+z+JRmJS|aGM !Mz~Ee$XfGkG(fd;oGjg]hUk7%W&');
define('SECURE_AUTH_KEY',  '|BCFF&%8wx5Wi#TvUMz^qbr7|5lUg-d))vqD}]yW]%]U`rC~n 2g(Eoc|G&/q]]Z');
define('LOGGED_IN_KEY',    'QkG36p:H9I8yRh[sV-q_F#ScUlfA8(|{ ;26Tfv]T_~bPgF!Bx+@-E3$5qx+6;KE');
define('NONCE_KEY',        'l6t3y_}::i!yuoC7jtdCH&hKmuHyltWdn{HKo&vO+>Wj@+f`@|JJf?Ldk02-L)(6');
define('AUTH_SALT',        'Ch/$C$nJjmWS?OvmK/4V7Jj#F A)8pF_[.!uJ#Rb7,,Iiv/zbn|MN]n8qE-{er/U');
define('SECURE_AUTH_SALT', '#+3;4fIyktHY]p8;WwHudd0PPF-5K:pFs<.b -6jLoE{Pa)+u,m-a~%YNa+(C8c`');
define('LOGGED_IN_SALT',   'J<8=aTN]Ap3uvqpO,&&eqx$bR]1+x^g;GG,z.PF6>+YIax(K>k!#4-4P6Mzia+`(');
define('NONCE_SALT',       '-?)RmL35b6g,XcgIY6r.,Q&w!tk-3W;|OZ7g+TCkO6&OK_6}F,;Bv{o0=BX-9[d[');

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
