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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'vxviFBGMw(h]l6cK+YIrMlw-f4gE=fR8v/wB>N5x7K6!5b+1p18u?L{m_z^Zh_h%');
define('SECURE_AUTH_KEY',  '<j>^/Dt%U+[(uiWMD0o=nnBF)Rdl_$nV->AUY|fEB`I{iD-|fd0>%D^{daB.$9mw');
define('LOGGED_IN_KEY',    'ZQ{N.,*L?3tQ*S6>wDnT,^YE67vD=W}SdMnlXYD(Y]a/%Z4H30F^+zzAgI7I_1i_');
define('NONCE_KEY',        '9i}RM7y5.7fgy0n|Esxmf1sOP8Q,!yJnuG>png{RK{b3,WM{/Y-KWF7%@&MuBSq&');
define('AUTH_SALT',        'Y+ZNVx?X>xQT7J{|1`V{tIZrC6OC!ce3bJ9*Smyw-!Zz.R)NQE,,QumpAnnt0@iw');
define('SECURE_AUTH_SALT', '@R6bu}<c8 t(~@ktv)bn#bM+z{pW[<ov2E=+@M__ZZDmGN#9_y1b&4cW(ISMMYIK');
define('LOGGED_IN_SALT',   '=,7ms?(z}oN a+@)A`W|geZYa`ktz}zX4C?l#T[29;![X+o$1T8~/j{$/_TI&+7]');
define('NONCE_SALT',       'Tr>oTv&9MA#|,Z2bekkSE,Zkll=Uh2z1uKW,K`VT/U^DvGr%ur`m).8EoW69Aq@r');

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
