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
define('AUTH_KEY',         'SU(`!F.km}H?})fVv%=^S|&$|@W&fx^;1KU_e[h.9_a|Me=@J,9JlNWMFH>90M8-');
define('SECURE_AUTH_KEY',  's3w.9-x2>KEI9TBn49uC-IRQlt<Xjx0~siA]rH]mbXP, 4MbMm[e7}XMT%s.TZ&^');
define('LOGGED_IN_KEY',    'wQedA8Zd?7%7oKfjt1V8e/|6fMsxL}QH[J?iuL(@lvILUod0=]<gIh1}AecR4|^q');
define('NONCE_KEY',        '<Nv/Z]rqj+1 8ZID!WkeEHtY8iOmNsIz*NRIXnpP+.n=z[7inVVTBn0(* g%z{)*');
define('AUTH_SALT',        'i3m;>S$qmtms1dV`Nv#/1m*L7aS!,YxR830V`^3s?!|q pJB<O5fB9e)S(W>6h/b');
define('SECURE_AUTH_SALT', 'l;_a0nnvw9a]+(&hp+D~s}QH[-n%^_n[gu*,$S>{#h9jGB!1ju0RZ-$H65*vFKGs');
define('LOGGED_IN_SALT',   '*Au]8Ol$s]uahvZHj=xR&Ji,9Q(<cn5Ba!6oAVp0TDh%.3M*Ci&[1Ck`7;} :M`y');
define('NONCE_SALT',       '76xD?foY1j{!bucWA)6kA?n#H4@V9s*j,h^Un| @H8]eST2J7RQ}b^&&PVTqx`Ow');

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
