<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wpimo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~#Fv~f4*m=,,vsT8r8bo$@M.o1s|5u#ME5CNZ SrIti6:D<IYBPFe1nOi7#d]^jH');
define('SECURE_AUTH_KEY',  'TtxT,v?P_(=u|O8V::E1_?I)-|leO+vE`|*7s#~G-!sMyxe(d*wK|*v/28V]+^j,');
define('LOGGED_IN_KEY',    'ED/G#{UNl+n tGqS]P=+)sE_gNI/A*2pRq*r=Z[`rn%oL{wOt{zN*`s~Ux)y{b2u');
define('NONCE_KEY',        '1tKoB28i,|+8?|kN>Q(v@9eC-^:KhJ[]zo6-Ql2z=4pLJQI~Gn$tr1Ec13b?}x%@');
define('AUTH_SALT',        '4u%wvRb|8/drtpc&y-d-=d%IoU7aB-RF++s?IxPnfOgBLlxM&)p4Ddu$9EV>gU,I');
define('SECURE_AUTH_SALT', 'M,,G7}$m.G-4J9-Otg2xIREWrkexd*~w|9Tb`Uj!;%/gQEt` qx7G[tQZ|f%,)r@');
define('LOGGED_IN_SALT',   'pLq~{Z<0W]B71F+vu+>0-^i;<~C.k5iT#,3n$P |r5kSn0@.`hiLay;+dW`zp?,7');
define('NONCE_SALT',       '/T-}i7+E-z&`e4@O7;|WjnVkkz54cH_>r$QF+[<q{s6NRx6>wQz@M8OWy0([|=|s');

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
