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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'v/5.W:WYWt34,/caR+#pcwS$<NEh(2X=92)r~An<^e$Oe_}7)[SyS;%4c(pV(nkT');
define('SECURE_AUTH_KEY',  'b3x]go7l}<W^0tiA?Kg)|qpY;g}fsspo:&(5Vs.@-rK?jGT`m3zVk) (`,L[_$xJ');
define('LOGGED_IN_KEY',    'e87,mNgFt}yu*%u-DRUt{cXb93ib=H8~!cC}&@svPh@88MR/SEXNG%gy789^1*N7');
define('NONCE_KEY',        'YMG)VoU1{oVvY)C(lT_$;f^*s7eK7~gFUVU^AFY6O?dx{3|;FiCQZ(k:Y4(WYs`$');
define('AUTH_SALT',        'o*>jxVSDkk&>E|JLz4l)5E:WG-6cU)>$iV5 #e)-zS^W@pJpAX~&6~{]G2Uydpc.');
define('SECURE_AUTH_SALT', '1UqZS(9.`:u=$UhF0x)Aa%N^+hL*Ozi^_cnoVR[~oe#d&HTMdUVPg?_5Twt4T58M');
define('LOGGED_IN_SALT',   ')C*[9kpY.sz&bv*AeVJed7K.VIUk&bIg@$Rvg&d:&y;6tCD.(M#T^TdY76B]x!(t');
define('NONCE_SALT',       '{KPA!CpM%_mjvGpTn.@x#*I.8b8474~Frn*nqzd3DH5.x]*4A9i#NZvma#7eRSgC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  =  'xyz_';

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
