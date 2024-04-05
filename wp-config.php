<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'voguebd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '.ysp-rq~?I%#n<2kop]G~gqjVo!AgGYkjR,S7E&0>zLsM*a:M(f$mzMbV^tP7@N;' );
define( 'SECURE_AUTH_KEY',  'J-d!~Bxu+;XRcL(&7M^w&bEr$OryH{@E}?j=dl3Q?38=5N3bE7UPji8}wa2}uFIa' );
define( 'LOGGED_IN_KEY',    'OC|M=h:qGa.mL-mnZs%yzf=wB$8Ea,:Eg]v>bJ0~5W[KAd%=s[7tdj.b2bL[B!nK' );
define( 'NONCE_KEY',        'Q1aV)vl_VhyDS%i.2Z0-t8Gbu:nfC<kTV:/*7HP/bH^RZ4qtJUuP4 Kl;PI65#Gv' );
define( 'AUTH_SALT',        '6i*lBW:)tD|]TgB>>/NaLhM^k#u_6A8b+Fae_Lq~r6da-dv[9&DU)bfnc16]Kv)e' );
define( 'SECURE_AUTH_SALT', '2:Y[q|%= yUKf<4(Q8X<u-E}HT317:Onn,?aIAnswz;}E9|`8a}+RqR0#=J1*8){' );
define( 'LOGGED_IN_SALT',   'WlQvD..[$m@KMxv {8n4n->(LK;.Ve68T+_*]OjM>EQiF8wTMWPwle32E*6vGBIx' );
define( 'NONCE_SALT',       '_&m&;$3r@/KUY5/-zD=>0qg]Cz$^PRE%`u.UG->LmP^f`A`d`axT1i_<]$?S>bDy' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
