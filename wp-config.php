<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u331485017_vavuj');

/** MySQL database username */
define('DB_USER', 'u331485017_gejah');

/** MySQL database password */
define('DB_PASSWORD', 'TuzaLemany');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'HWplPNeOZaNah8Sbz3R1bsgCymTDyiFe0Jk6f4bTHH6wOryfIFLOF1JIZLZ0YBad');
define('SECURE_AUTH_KEY',  '7CWnjoqA30rklh77dhLK8tNXWFd4UdJeITyxYMkvHeBMumKFsjJs6L9umieOc27j');
define('LOGGED_IN_KEY',    'PnCki9fA1HPr0TEzgD0sl7LP73YlE0GsR9vZut2fFb54mQfICnmQ0SgdmGYpbaBz');
define('NONCE_KEY',        '94FgPgQIxIDuKUOgrQDnJwImQE08qRjwfg4L2jQbJ9cBBGuFzrBiqSdXVHPUATEQ');
define('AUTH_SALT',        'LZ9AkqOdN6WhLmkkHzJ7T2Q2AUeXhmJs1RFHMTXN7zxMH98eyyvcOnOdKO7669DF');
define('SECURE_AUTH_SALT', 'buSKdfD0KH4HSGiniK4bMUR9BfLDZYRmqqjHONYm1Swauwf4AlECVZW4trtZyR5N');
define('LOGGED_IN_SALT',   '58gMkEDZLoUJmPwumaN754GWd9oF4y3QgqrTQxEiKoIXyU1aBRZUhzW2TZ6EYXBG');
define('NONCE_SALT',       'jYVbE9MAlp6CuBfrPLEHf5O0E4QZW9l8BmfcTSzzkbBfZgOCErpYIbRBjfIxzv7O');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'de2n_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
