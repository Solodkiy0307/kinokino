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
define('DB_NAME', 'solodkiy');

/** MySQL database username */
define('DB_USER', 'solodkiy.dm@gmai');

/** MySQL database password */
define('DB_PASSWORD', 'ssik88kissAAA');

/** MySQL hostname */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         'XLXY@HRLjPM5^)oFeO:KuB~Vk@f+y/oL`^j$1S5|y}}u*j8Kh[~[@P`_d8ssAZ-V');
define('SECURE_AUTH_KEY',  ';mKHq8m$f|O-`d_g2/Wrtc?-U^;Ch|4ky*?.wg/_i~u?O_Ynnv;:#[?4V{$w/Ohf');
define('LOGGED_IN_KEY',    'K*lw3 b7>qfNq4*n4Js/O8{L}s#/ivITR 0vZVDgU<[Hy]F^ce659QJGRWjgm]j[');
define('NONCE_KEY',        'z64#>N+q_t_eoVQ=3Vj{-Zb_4.i;{;C,6J4%!7Ie&}tiiZs*b3%8q`M1J^vK(I2X');
define('AUTH_SALT',        'kd3nxD][P(mlW:$cxU8@ikoxnw@^^V/EKEbM!BWhcqbBG|FPsc0g+Rfq<5y_GQOJ');
define('SECURE_AUTH_SALT', 'V0~L 0J1qAq`q*G9M8aI:8MHTn.-xg&E#H)#{GcP-YmZXgWl2pRr X`%WCR]pmBT');
define('LOGGED_IN_SALT',   'JaNU[LG<,Zka$0y-;Cz+Rhq2T4Ewn]-ibFJcRh|1i%_YDiieO7GWmHF T4hFHGAY');
define('NONCE_SALT',       '0o}CN2 ?%s2-zq$fO.P%BSU>jCgjJzFp2Kzdv&A=|/7ypG*_lrHu0Wm<gl(DJ5y|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_z';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';


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
