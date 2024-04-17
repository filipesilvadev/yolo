<?php
define( 'WP_CACHE', true );

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

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S>0 8$y0kVC]KT.[xa2Gdy}X{W{t+G2)Ce52}0/<_B be..H;LJ,}f >Jc.^');
define('SECURE_AUTH_KEY',  '%RYBZMtkaLr*:e^*LJ@ TMM1J/BYCUh63du{cR6${0mPMv6N`j8AvRBMP}_r');
define('LOGGED_IN_KEY',    '<ef!@TS!0jdj2H>;MV0$;Z8|Zn)e@BL7#9gg47Y|,M,Mge2tZ{r(+jv0g)a|');
define('NONCE_KEY',        'WqgE_Xk R1nF<AC$N5MjPjHCx.m00`L]xamm]M>S)zH+$Aa;rNez}w[QamTh');
define('AUTH_SALT',        '/Qe[6mhQFz_Fmgf_W$ty jZH5kGkSeKakTt,)NdzTY*^%u9eL+e)S!FM1gFK');
define('SECURE_AUTH_SALT', 'U8J Pe{qcN+m6a]R:Yam+K%aBwc88k1:q#5`|3$Kdn/63r^nT2stBDs9|v@3');
define('LOGGED_IN_SALT',   '+MY_Vc|q<s`vvF;{|9k*vKcdP{hmEK[|eQ%r1NXNChBa;L,M6.<@6s#Cb}1z');
define('NONCE_SALT',       'gXGwe:7#k(U6p9vkywKL5jX{Le0Vx}+LT1t[KaXZ>g_4Nh;6d/|B1aveV_w+');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://yoloacessorios.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://yoloacessorios.com.br');

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
define("DISABLE_WP_CRON", true); # CLOUDEZ-WP-CRON

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
