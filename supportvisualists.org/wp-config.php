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
define('DB_NAME', 'supportvisualists87876542');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '98yxXqN6yfrBbgJV');

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
define('AUTH_KEY',         '$=Xtc}Hm 0wm3_Z/4L<A_`Md]EGc_7@#?xSFKr~F{Nx(D6sB9Z-rGB#>[nZaFXyK');
define('SECURE_AUTH_KEY',  'y>Fp3a~madvnP):b`v!)5o$Qp o|~Nv2rD!pbySq:K #2GKz0XIBXvX/8#<if@$N');
define('LOGGED_IN_KEY',    '^x3,Mkw_=m&pO]gqqC@@pj;Tnkgc#x:u*5#A.B-L<`)<]<0^wg40B]afs]v3S2U5');
define('NONCE_KEY',        'T 4PmWsF@[?r@ch@J;Lnvor.b.@n{Z|lYiIy0Y8)P1v%v5.%-47+H%Bz#o=UBM/f');
define('AUTH_SALT',        'gD3Y/ PN<12oq.$9OG_UeB!YakgH+MtSVdt38~HJyF?XUMIgG4LP)XqJkLprl.2B');
define('SECURE_AUTH_SALT', '7p5rQDlMcmqF{PG oJ*I+ocge<1:ogIJ=5D0|<Q6t{,G=v+^mZL^<U ,s&|OeSd|');
define('LOGGED_IN_SALT',   'zoG0Gal[V.Ir)D+$#r0A_i^$u6<h43*Ftm)|$ma1<l5Ip=Vi+F1pQM?U1}9FSLD0');
define('NONCE_SALT',       'C7QhHDqq<q(dVM08aI AR}nYM#U4DgnOheJqu}eld8=J,Hd $nMFg(pq%A^h:Q_w');

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
