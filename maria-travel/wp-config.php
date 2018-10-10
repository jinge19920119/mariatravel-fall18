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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/gejin2/thegejin.com/maria-travel/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'thegejin_com_1');

/** MySQL database username */
define('DB_USER', 'thegejincom1');

/** MySQL database password */
define('DB_PASSWORD', 'DYJN?Euf');

/** MySQL hostname */
define('DB_HOST', 'mysql.thegejin.com');

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
define('AUTH_KEY',         'B_Y0Fi3`PQDs)GX*B3I&|q|@yC;sWJWvnzqZbkt@1YaIXkCLOsY:*z#(F?qZBDjs');
define('SECURE_AUTH_KEY',  't@PEfevL""utVlb+OD$`oW*%lzb"87?L|prSwadQKc"yiqFN2nPyV)IlH3/4L(p*');
define('LOGGED_IN_KEY',    'cP!!zBe!3t7eVt|$U73fF*S3ttAyZcNt(Pt:M;Q20Mk77HKN^5(1q1SNNs1CwsS#');
define('NONCE_KEY',        '|R&efJq!*EDoswi|hiadmUkTg$tLKusN*(V:SqhbCy3dm3_gb)l)^Gn3!?+%luYr');
define('AUTH_SALT',        'B`zmEQAvB4rYugF#EW!zYTlgXpdsuMsVwk:zNMQjn*AX1lgBnj^~XdclXo?8#G%J');
define('SECURE_AUTH_SALT', '&8PW/pXMHnv?lI(wrj)h&~+yWyxE";R34%Jb#?jo5MiqJ5_7DDHo9cbSimvmK(49');
define('LOGGED_IN_SALT',   'HAc%P&$d8%Jaj4kJE0CuVSyCkJY*P%$1H0~922s!ZVOF/NVJ3o|XMMeLQ:Kf@Vc*');
define('NONCE_SALT',       '?Vkx+zmU!tk7/"MNf1fxA/Sy%TG"1POM3N1weP@TQBz%5iYzxrkJwaoaI!HZ&`T;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kfcrs3_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

