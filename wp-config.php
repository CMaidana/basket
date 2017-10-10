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
define('DB_NAME', 'sampledb');

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
define('AUTH_KEY',         'QUUf9Y5@O Y+3GmX&TKg!sb4l^8Jv{yhZLIK4Ij#oLJnFY3x7Nd-5s7$t7>OqF]^');
define('SECURE_AUTH_KEY',  'q6,_rjw;cpURfMP5X<h5i%p,&$poYO#Yn5.Tb3U[4M%`/w#)va+sW`jOID/`&fvm');
define('LOGGED_IN_KEY',    'mA)s&HG7H?>n@AIioNOy*<Hd|[&:^nKXc<`@x-5n_31 @#82l4gsmqOHt^6`/2>P');
define('NONCE_KEY',        '0vivtEw0=3kRkpTrs;g%cdG6+h_^rYi[o9jH>P?-3n5L/4f_Z3b3 A=3V@c>-y@4');
define('AUTH_SALT',        'd*HG&dR+g?If^Mq:DacV5K#nnNtkQ=ajoB]1fAl(}39rG$W2w:GgZqXtZE~)pBI&');
define('SECURE_AUTH_SALT', 'G9j%Q.naB>HChUuYprh5IsQ[Oo2xKd`wB_8Uw#x}LjcRC*nnyqTZ#4hV.Q+wDd]!');
define('LOGGED_IN_SALT',   '~!B6Y|G3RQEh<AMsG6gvLO% E{H@p#{t,i#B(-7H;%mb3hfiqZ#4ctb!tBu718zx');
define('NONCE_SALT',       ',6?_MwP3,Gk58;aNVPZ%64#mD5heE=zqJ_L{h@IwxM {9dN)My#;X7_~u5nw)`4*');

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
