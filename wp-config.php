<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'clone_theme');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':2RJ&qpEoO=O+wz!$Uo[TlUG}R>O{z__G}c.*ie;3dCzQ_wCc*X&I]^![GB:qQ^|');
define('SECURE_AUTH_KEY',  'rOWL8pJ9Z$`3(+Bfj^IS&KX2JR}D]i< Oh]5!x|$AUN1[C=_u[[x*Z.7 [+:uI*q');
define('LOGGED_IN_KEY',    'M70r|#R@YQ`E^FB1&MA5mcJi:|~*{Y[,5n78c8dp,%,WI_<a$B=2s_}YVNNKcz)8');
define('NONCE_KEY',        '$PQ?1Dkg0( a%AHb{$vyH^~|Gm?9w%^bf6HWokG#E=2l %Gi<yA% gsYFF]Z,Wn8');
define('AUTH_SALT',        'J`ejDd}9<0%$BmDSbF{jEi^nZm/,JUd6Q8|n,jg.DYnd/.i4Vu_hZHu5UggQx`V2');
define('SECURE_AUTH_SALT', '2Aki}w5O,t|T]nBHG8]B!qdI9^ll<.9fg{5o|erKwsxPqQW!Li2Txr}a:AoL3TEj');
define('LOGGED_IN_SALT',   ':oW,,%KB14<Lequ>26_W5A;m,*m59Sk37:cK%+Tg3r:lAaX_zH8$cu*5?cLgCgcK');
define('NONCE_SALT',       '+QK>4Rp&.3!3~>H^4WSX)Gzw-Urg{JL~LU^J i~>@+$7E%jfB}_mT*8Hc#!TY(xK');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
