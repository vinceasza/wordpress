<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'play');

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
define('AUTH_KEY',         's.c6<YOS)}!d|Xw;Op6pbM!?*t]#!G-Q2TVS07jKzH%gPfJ.yzWg6|*9U(.YP`?=');
define('SECURE_AUTH_KEY',  'C%QIMzb 1LV@E,60[m==N)9#z71[aXEk4cm%OSr8$~7-l&,kEex `6~VM;6QGc A');
define('LOGGED_IN_KEY',    '4cm@P$Fc7~ FgOWSGHBFhI0diBll-LO-i+k4,TH-V9|06i%2|-QW;x6Cxzu058ON');
define('NONCE_KEY',        'PGy4#hmIP|+hi{UZKOlyv)vkBpM%*2_M&LG)#2`{S f?,RqA~RQ~HLEH a30@2uM');
define('AUTH_SALT',        'M} wqSB[|ilK&|0vjs~,%bspFpJ}JfA7QS2bw*M|Xctv8iI;Pq<&gt%`Nst?.Lf,');
define('SECURE_AUTH_SALT', '*#^9}4peWk}-PW%gj+BuGz/.UA-RfM]IT0,QHoza[cid6}}Z/%Za7m@BWOU;DE_H');
define('LOGGED_IN_SALT',   'fHB7ZvqOw81Dsn:8*%;F=^r<XueiH_8:sPfh=|=5+gBS)3/`Nnsf[9E0AnWldYSN');
define('NONCE_SALT',       'u+fx]^P }*?-S+(7pmeD-(%&^r+tn=f%G2% Kio*-L_gA{4G+5SiZwKGpH)+y9:<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
