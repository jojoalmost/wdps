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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '2E.S1dh)nlS;@G~;;b1#n#hVqw}_TB%7P;}um#ZoP_(a0M(<EU9auK^E`nAh[*X&');
define('SECURE_AUTH_KEY',  '/(vvsyz?vAY98MC*L`RcyPIF1S}0t]}9+r}H6Mro 1*g$i([UA5O]zn:dJfOE.$V');
define('LOGGED_IN_KEY',    '35]%ed}%8zJrp6&~tFUZh3LhM2~9HkS![;X2}y)o-$1xx3.p&})lb=8[ {?m*+[h');
define('NONCE_KEY',        ':6BsNdh@^&i!DDJaH+v#Pti.*+DByXE8-vM)Z-noyO$FHf,y_FG:_[X^7rd+F1S6');
define('AUTH_SALT',        'U.6G#uD2AtVrY$2il:S6`ih(]x@$F`~}v|Z-JL4JAj_u7x7&3V8Bg1Y49Mx_42mi');
define('SECURE_AUTH_SALT', 'qevlY5{F[ipsL n{3[%V{yrU&-rzAV?*^,oOGQ+RhI)]y0V^&:ZZkwCBIX(Pm`/*');
define('LOGGED_IN_SALT',   'nS!r}*5}|d16Ywr3N}&8PvY.qI*;XHds67}1]Y7NPr+^](w^=(_wBZ.)9Ux-g1Q3');
define('NONCE_SALT',       ',wjxS:|}mR>C#2%LVnz}Tya+!qB&%%O1+oZO%>2JTPn`lvU+1gJz:u.+F;&Pv!z>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
