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
define('DB_NAME', 'samachar');

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
define('AUTH_KEY',         'M3]bmU%wKk=[B1oB@qX~7=MiLcVt0D20f;7Q`j9KR%y]Wm,0b=}^U*}yL`zQ6B2,');
define('SECURE_AUTH_KEY',  '`mY-^Ac07-J$vhAFCy<mX{#cp?b{/DhiFi6CO)*(nrPEG8K72$Vz~$q)VH=X;unc');
define('LOGGED_IN_KEY',    'H<gocOLWKb~ <*&(s6Gxy7)ll):SpuH!b<0MB6g4`{-tkb5kNivs2yRn=8Q.DGT&');
define('NONCE_KEY',        'hXU_FTu9ytp*r=P]5,bkU@hzGMSMi:Fd$?Jed@{zJlwS5h?)3M#@E?Pg%q??gj^y');
define('AUTH_SALT',        'ntZzrcu#7DT:p|WG(uCiG5F[_*(w_<#gh[UC!)P[H{$/0D_wpQp<n5,!o8(0AKk|');
define('SECURE_AUTH_SALT', '(D&PA,0_q~T}SxTI+>H)Q=,ChZxjq3K8>f9?_i|/;Kq{.uVySFh{Oz&z(Vd;[gT2');
define('LOGGED_IN_SALT',   'j+9laY:=?~)#3~W4i^Vhc3dZ&<>[5<4JnFTPq}wuMpVQ+S]-Ti2A?~jCiSaT]f+&');
define('NONCE_SALT',       '[acP=A^Azd#B#|E2i4J2%vURD8Y[2TEHBgQ,v0e*lTr([%/lxu+j;HHkH<3d-Y{L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rs_';

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
