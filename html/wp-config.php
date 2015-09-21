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
define('DB_NAME', 'db195315_mzf');

/** MySQL database username */
define('DB_USER', 'db195315_kevin');

/** MySQL database password */
define('DB_PASSWORD', '5kRub_0EhA(L');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s195315.gridserver.com');

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
define('AUTH_KEY',         'c**hWDWGu*2:6xrd.pdsYp,?JgA-90M.Ny_.1-&W@O,ZtAwA]|{q$;g}]VpqypB@');
define('SECURE_AUTH_KEY',  '8rr3hIn(=>6;mOV2qRnhQQ[EY%+Ti3-&W2>$j5$73GV0-L{ vgfoa-wg3u4vJ|0a');
define('LOGGED_IN_KEY',    'D1u;!|cA-qndt#<jX8atrhdl[9$5-nB9|Hp?gjEebPqSGXiu:=R0WaB+gfk/wy`z');
define('NONCE_KEY',        '{+2m:!<ZR[*|+|m+lYe!=1201sr]_47e-6|-R@C3}DBxzR].W<Y=B+VRID{|!!Pa');
define('AUTH_SALT',        'QOWgsTW,aphn1T[~WD>evZ,+`2H&T@EAqPmE 4/YeCJ:JQao|78Vy^U^/i+mx..m');
define('SECURE_AUTH_SALT', '@CJ^)UZ]{0~69@!{-Prn5U1r!E4t^ h>VVdK4W9?+Y#rt;,/Xhqlf4Ks8a?Z3[Ew');
define('LOGGED_IN_SALT',   's>1E]/|%(iPaRlsF5-<uGs|qlI1)&|p%w3A&15g+i~IEk{u~u8*zV~/c{Zp!m-pY');
define('NONCE_SALT',       'qO^c&^KFFdz3-p;AS8=R7rDB-)LO.=,x&|Q(aRA10nIV7`f4PTx&Yk:dvwYMFSMp');

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
