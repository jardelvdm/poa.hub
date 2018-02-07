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
define('DB_NAME', 'poahub');

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
define('AUTH_KEY',         'cF_fIK64Owa.,trNiH<s$SA#~Q1cO<)|E^5a!p;s;4`*d,|b5dIW?dE~SfaG<jm^');
define('SECURE_AUTH_KEY',  '}Hc_H+;1GWC2jm*=MjRG-KlM}zf!_P/=!Q A[B~UH2HV 5jjw9--!~n@%5@K?&M8');
define('LOGGED_IN_KEY',    'lNEQBuEHC?rV31S;t(qtC^uw/*hBXT,DTNyq#9rKtf<034p/V^~EICD%C@wT0EC{');
define('NONCE_KEY',        ';xDw9,zU{>WSa[DesWxL=xFOJn^eQRS@%f(rE _]~RHh77f2Wwek#lqNsHbjx@qW');
define('AUTH_SALT',        ')J4|AF%1BXjxly[@ID|kei$/?H2,=xs-6TvW.yk0]EML=|?8WbnKD7BNDtie80{e');
define('SECURE_AUTH_SALT', 'R>_gh<=u;0[ .m8$Mv9+]l^@omo?]::h}N~Fm5-s5A{;S/c,@ig-?< Y:rl20iLn');
define('LOGGED_IN_SALT',   '[^md5WqPlH.nrGB7&,v4J^O9AjS|,&g`SZ#71}/ma[Iw?vKDo%le.!y(zY4M;wtd');
define('NONCE_SALT',       'H*OA~Z|)QzX_pf@1O6{ZAKe7.]F<wwK|R-C;#DwOfb00fy-[zvQimiXgX(~M,m~q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hub_poa_';

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
