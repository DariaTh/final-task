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
define('DB_NAME', 'final');

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
define('AUTH_KEY',         'RIx%JyG(6w>AU0;L9dWpK{lxt |Wm~g>lAy>AqRbH0Djq,`#H>#5R_Ih_j:yPiP&');
define('SECURE_AUTH_KEY',  '03?t]|sjU~r]~hu(MT!.ca}~S4F#vlG~O!)>6Jr{B(^iqS+.wcAnlmw=ioOyh%D]');
define('LOGGED_IN_KEY',    'wbFhh9s+c?T$9:]&>;v)F8t!CRC%{9g-.8*Z&4(eC.~QN_/SOqOxmLT?RIKqy3tI');
define('NONCE_KEY',        '^l*$^UrPU0bjq)KT`-OONc;Upz3A-k?WsxWJ,yHfm>SI[{tk_}mT{Eg83A>F]TBu');
define('AUTH_SALT',        '+5{{<G 9p.y5&qACu0eH^Zy^4o1laCklzau==V0U=Hnv0J@Z[Beh=juZ<0-CU6B[');
define('SECURE_AUTH_SALT', '-I]/E@P>:eu6/c.V?;9xF~#!sMW_MW%=B09qv2?g8U)x&r`Tfqkc-Zs.Sr>>X^UU');
define('LOGGED_IN_SALT',   '5V3P0v]c0t+7jI+OxMg$;]lgC1q;LwhKBDFQerS-7I<Q;L~m31)vegQ55o3(:7$}');
define('NONCE_SALT',       '!Mlj7zJ&Y;>8#i4OM,XEPVctuj`@HP7q!>qtpU<h}Q0@8]b=?T#]z 8$wv/U$3V~');

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
