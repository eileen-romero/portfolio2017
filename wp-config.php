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
define('DB_NAME', 'portfolio2017');

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
define('AUTH_KEY',         'mNL!{lEhss.Z-?n<YKqV@m#,GYGw[=X.)VD`ru>0+x(Vg(A+?}>I0p7e>t&OT(/Z');
define('SECURE_AUTH_KEY',  'zOMUt+tUsm945oaLn-w]$=aB1gdJd(puwyZmz>YSEHV)kl*x:QgDAIuj|D3cwQ3x');
define('LOGGED_IN_KEY',    '0v]I(/nlF1S!FMG6?o<]vyuCd_=6{+{Ybrjyt&{^$}+iz3lMfj=w3r:yQ;,+Bt6R');
define('NONCE_KEY',        '682hZo7t4<ZM$(K ]@Ho`QfkobmP^jrZKWoheb~26vq&FP}4%f&qR/@ctHVK}W^!');
define('AUTH_SALT',        '~finTA)V5l/IA2^Hy6||NV&;DN-4bIj+pcAx,i 3q#CYpH ^2C[GW(bOBDL-nWZO');
define('SECURE_AUTH_SALT', '0wRKh$`$4TG_9qS/jxO [xiRr6D6(ObaBrQbc_W$Qqu%,3Z@h] Sq,ZS]K>]lys@');
define('LOGGED_IN_SALT',   '(&XVwPh=&4SX0{~X*qaC?uo=raj:Y8)1APdr%kNBb_vgGD-h>dZ>cUyD@Flb29vJ');
define('NONCE_SALT',       'RAB$O8<vx[1Ab+KguL(fRpq#xua0MPf@sxYM.`YNtG2}XeyG)Wv2jxF|oPI.j++t');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
