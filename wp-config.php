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
define( 'DB_NAME', 'msm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-z+<5rkR}b:O::0aO%nl;-D0G6lPrt](P%3]:-uF+Jw6v g[)C<+3<uZ~BV3qJRc' );
define( 'SECURE_AUTH_KEY',  'yP!zTlj]7!C}#R!m^aVM+Av:qceC%{:Z/ J0:}/y/0%0lyXMaQ(nvJ]sHIWlF)Ek' );
define( 'LOGGED_IN_KEY',    'f~o}xjSbv~0p3h_ze! 9<{6ZiF,{b2,:y]W|/xOG.!$+05X/BOX#%1#UAMp,G4(E' );
define( 'NONCE_KEY',        'rGxi^X=&Fb+M`Wf9._|`+JS~ftC=g)%bNo{cgI0m=qy4$i:[EJ}0sKG!g3x*)<9!' );
define( 'AUTH_SALT',        'Iaq24L%P3-zP,=I8~,G|8VFm,(E(-dOoz<V+|&AqQ~;cYOmb*6`LtMf@ro%20wp<' );
define( 'SECURE_AUTH_SALT', 'ig7qWpJRO4V>Nul6L4O2,*1^X2;0[#+}7^I<bRVWaAF*}~_bT]d-KKFLqDB.BbEh' );
define( 'LOGGED_IN_SALT',   ';k*8IGMQ8;={^d(f0@yKE@%SeDmg%9/Eq/FL&O5W^W-vNgG`3`P1%eSgw52Sgovc' );
define( 'NONCE_SALT',       '6hLiC*ETZy orgg0y,f,u r{)FIJ(&fkG)|w.F&QDB`<Z}.[9Vm_`4~|=!0XSBQS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
