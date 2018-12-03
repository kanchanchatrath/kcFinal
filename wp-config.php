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
define('DB_NAME', 'kFinal');

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
define('AUTH_KEY',         'vUnI)1q!hY0f&S]FE#=4H8HP7r?!cb};~tz&|z ~ 40VL}*^?(~Ni/:6+{3|Ph46');
define('SECURE_AUTH_KEY',  'O,g1)WqO0`Gdo/)Rq]1]/VZB~GkPLmMLjogQ<IWpV[0]@U_~FV+V,s?rz2=;HW@v');
define('LOGGED_IN_KEY',    'P!{F[y ]3Mro?v$>#8=|>:7uhHP]p <*}kcH(W7{u8^kWi]d99 cb6H*(,GqkDFx');
define('NONCE_KEY',        'Z.8i7@G~b^}!E{q$efo2[)ri.Qw=p-S>oolM@;)7#*s`j]U|bMJY#^O<;S cWY_Z');
define('AUTH_SALT',        '$(`9RZaFqMz2NIPdi<}fCTL1h;C@,/yvK)/p<5w$.o[1Z>E[2,8|CXLa4]|$*q8]');
define('SECURE_AUTH_SALT', 'm ~0HWxyRgG$nWiM)s9UI<,L-fgnLtk{6MXYk.Rm67n8,#<BRcOD0~B6P0=VQ}{j');
define('LOGGED_IN_SALT',   'oe?(O4 nPWXU*m3}I!poR@^O(VBfk6GmUEp]&9gN)W_7Xjjf:<3Ji2i Eu,6A}Yy');
define('NONCE_SALT',       'Khl(WvV^_>f?O*lw0.!:POy?4Msr~DRjj*F(0TebD:zRUKT0.vJS_=vV}/[XDqx[');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
