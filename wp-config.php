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
define('DB_NAME', 'msm');

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
define('AUTH_KEY',         '_{&P;U[JU=}]FGu4P1U?e0u(i_(T|yhu8+m;u]i@{YtcL4c8[4-fmAU%yw}{[>pc');
define('SECURE_AUTH_KEY',  'H+2v1YZ+QSGO&J!:]%Y_8]0? 8!2sA:w(KQj8VzS[vC-ATdcY(&Q@ReCv#J@</Px');
define('LOGGED_IN_KEY',    'AnM;Ed@{W-&gx|46%4Z!>#04dvq3T4r{)bKuo_!*T.n<HK>P}q(rl2P(kabL<s>F');
define('NONCE_KEY',        'n..y~%$}`l9`8Aj#%;KlxD}A8cE*IEfMU7f#auwXV.y#s~4~K~FtqAi&Y3ARA&yr');
define('AUTH_SALT',        '2(%$|5>;i~`}?]kUKmPZWTed; +TX-Y^FTTM%hQ`k-x|G/KRUW-t/oWe7y5MNQ>(');
define('SECURE_AUTH_SALT', '^NpHvEc]bz#!eK/5^ :>pnuOcQWkl]lgSAhrWJ_6L9IQs)q/#<`l%uE0BNd#dObp');
define('LOGGED_IN_SALT',   'A8@7R(9ks.b7?W78<%Pz&Br[~)v_uxQA*]Ul)cvAd`wy3#!Tu9B`VDyZb#E#<25=');
define('NONCE_SALT',       'JDS}MBty4;T`?D03;k cS:8sFhnhb1Tws,GY6&KBTSNjvqe[G`^g;w-CPG{o(LH^');

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
