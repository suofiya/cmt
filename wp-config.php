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
define('DB_NAME', 'cmt');

/** MySQL database username */
define('DB_USER', 'cmt');

/** MySQL database password */
define('DB_PASSWORD', 'cmt');

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
define('AUTH_KEY',         '%HwAwW,XB03HfaVo7[5[j(,#Hg![}-5`ohEuGS3c$$ wwZuX+=s{dm7VTNj|dLeH');
define('SECURE_AUTH_KEY',  '^-wz@+L@a lX//f0uh2Sz-$Bv GCBc@J()M%C}zm|[nDKB/[b`@#=!KC-3M)&#|J');
define('LOGGED_IN_KEY',    '[@>fWPK)CT{Sd#qh^Y1un8@>n*l03YY_Efw;v28+1XG9IUZA[!t4WQ1^Mb&kprxT');
define('NONCE_KEY',        'C:xeLW_5YPiue|fOxaQ)ujbr4gLndbcC| (|j0#9#VCFeg_+LoOHBS^x.3-x!_:v');
define('AUTH_SALT',        ':{nOuQ|tsk<W@E7|_DAt|`*aiX-YB_<h)XL#%~)gs}e|lpI6zb=_bR?n--|g:^^A');
define('SECURE_AUTH_SALT', '|C+[EqQ>31?}2KR_Vo.f,91Ll*jvb+?SeBpwmwTolBvUR}u-U-wGZWnO&-I*[LVI');
define('LOGGED_IN_SALT',   '@Y}p1Eu0lDCO]sVEqBTWa@muSx)E-ut/PPy6cd!|SdsvO5QoQiDLEcAu+2S)#iAP');
define('NONCE_SALT',       'V;}|F=6y[3#u,VBD()NV}aKS?SmdNIQA] A|Xq9vRD=WFIppV+Pq<Wlt||8j.rHr');

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
