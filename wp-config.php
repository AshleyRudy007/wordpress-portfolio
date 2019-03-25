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
define('AUTH_KEY',         '.P0NAAU[q%>Zyi)NIy-MI%ma;0#CZDa:uCgm9^uQu1$DsS&fc~XMq3/DQmkIU,8B');
define('SECURE_AUTH_KEY',  'Fqv7w^L[Tm[l;o++#-v}G%P:l~sSe32f(2PUS(gjPali[jte4|5*kfEo,1b})!wW');
define('LOGGED_IN_KEY',    ',}nwj*4vfF1YlcKmjH/)/N 2C)QG<k>pgwM`kJR?PI>bvD;Yjw_XSrsXY1{puClC');
define('NONCE_KEY',        '4|?%C,rTN;&95G@mO=,1~[:pXfGo[mn Z7kAiyMNM]wrzxP5q1UXmkE~yvu%EoE?');
define('AUTH_SALT',        'g>|v*%U^&aUSa+~{&!;qIt{v7I=1>NN1{&UaRM5Faa372;J!wU]E)PNeI37]^)cO');
define('SECURE_AUTH_SALT', '.41R12(VUR1T;`{euI-$p8KYPL7|7djB#fOUe**MCt>td3qzjjRtpx}NKQ`z+6KI');
define('LOGGED_IN_SALT',   '/ >P8WV@3]^,5B~b@lOKV^H2R/vGEmPOhJ2hZU#q:mw{ruy&azs]8-<#iukfi9.C');
define('NONCE_SALT',       '*ZIPp_p2k?|:H Pzg54w(y?,7mBFv&QZJv/D2z7l xc8[CY5v%P:HQey7[@ll%KG');

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
