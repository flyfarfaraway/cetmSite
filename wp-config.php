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
define('DB_NAME', 'cetm-new');

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
define('AUTH_KEY',         'pyU.1iR9ff]+KIibh{JHL~qYTIS]ha0( ^VUn7`St!2tHr+$=vbRg}aqj}[R XEg');
define('SECURE_AUTH_KEY',  'YWQTxEppB*Wo,,*L3s@k;^Ky*m7r]Y9[ua :VjYAXT@LeXAs[1xF~z#!.U^B>h:w');
define('LOGGED_IN_KEY',    '~1j}Hh6OQ]..9oA3L#J58l*BZ@M:7EKqwqV}-*mm7g faLJ)6]w1?p|{6^hXfQ@^');
define('NONCE_KEY',        '@GXEg#>(`YB!gAQ<*yJJSsSa&9eF{lu</((60QxTT#Bp):5~u)H|rlB,S8>baFj]');
define('AUTH_SALT',        'OF?3J[.ch~Hl7!,>ar)|l%[yd.It#)s7}V%D+}-B5TV<-I%IK1:v:x~&FjX~chHo');
define('SECURE_AUTH_SALT', ':9HM/x9V.NmFir5{E&b^%s/^Dt+w779#Y3=M.I_,<n]mcFS{fg0P+(2H5Hsiiu`_');
define('LOGGED_IN_SALT',   '[CVr;Oe-SEBr9n.`$1TEgf(KTo@;ph=uU1@!(yBOjBLA!VmKAfd*s$p&H`-C7ci/');
define('NONCE_SALT',       '&z@HN|ZPt.67R&|~WA5M,1[is6R)~N0tIDd4H;`>pMIQ#qgA5vlNpTN6rH>)oKz#');

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
