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
define('DB_NAME', 'leadaggregator');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'kq_k,+ !HiW|+E]2h@f?++J#;1>2lp`j>;&w/!dujoe7ts;jZ1np=x!;9sV5G&7D');
define('SECURE_AUTH_KEY',  'c}U/3$Y<a[g_B&{Cqi6kGC%9+%Hh@n8(*f5Vb-TjF|L8|RKK32A$EHm2<iVaLj?e');
define('LOGGED_IN_KEY',    'Drx*Dz8FG4+gXPSyqke{|0l;pQHP?8s/;KALk J2cvXKuGOuuXoD(f1+P4-Xk|Hg');
define('NONCE_KEY',        'et?D=hPNxK_v8Xs!uR H0-2FCO+3*?aiYePaRQS?&nawa)Wwkom.]Bz G=2rGgD?');
define('AUTH_SALT',        'jBb%,lZLys~QO:.i~x:bA]QFl|iN<s1!!{+k[/WE_s7 r]1!rlp^Z!$YVT@`YE8Y');
define('SECURE_AUTH_SALT', '!$vW9^<2%c)+g9SOJ>2yOP%9 Nl-RnFcV~n8V|27v/[K;0>W$IA-kv.AF0jK2g6!');
define('LOGGED_IN_SALT',   '][Tc;@%.n)z|1Pk__RE +!atd=2X8<piV9N-0RM&yR,7tjb^D+=%-BJ872$|k~Q}');
define('NONCE_SALT',       '=LQ3ufa1&[90VSDa4W.T8(`;V+X/f<^QzL#Xo|YxeW@y~`I6zh*+@frQhaX+/J==');

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
