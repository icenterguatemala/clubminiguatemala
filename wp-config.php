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
define('DB_NAME', 'clubminicoopergt');

/** MySQL database username */
define('DB_USER', 'icenter');

/** MySQL database password */
define('DB_PASSWORD', 'iCenter2020$$');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ZQLzb4vx9h85mD8WbzvkJ6chO5iJYWi5ZRk17YvHnhAYS0REVvEIL4X1fSkYqbjw');
define('SECURE_AUTH_KEY',  'Emq6upQ4QlEmixV4fGMv6HhijhD6oqbrnOpPObmf0Y0JrfysVOINNhh1xyiXtZEj');
define('LOGGED_IN_KEY',    'LP3FBnzw3APjyH1eaqze7uaaucBLw1qaLgsqx8Q9El7ChniyqSQf4Pj5fpL5tnlE');
define('NONCE_KEY',        '5MjNoQn3cJZawLzbq2gzg8o3OnxUvxUxuknecMpaRs9xbJ6HPLZOdd68e64gK92l');
define('AUTH_SALT',        'foHdHiYWUTlMNCA7oBiYSOkHwKEbQOCCrrPh6VzvbVUMkqqN2BPqeTBJwxL3ObAV');
define('SECURE_AUTH_SALT', 'Av8gVDuRdjHMnPSzLqWQuhm931QTC02gogNDiW3tydIxEjg1iWx5jGBSHYddauxR');
define('LOGGED_IN_SALT',   'aNjyGiwYUJNgPIYCQEOpza3ZIFiMHD77KQEFJSMsCX6g6sFvUN9lLfwYHTCwLOht');
define('NONCE_SALT',       'EqQTSiUuWFhkufw1TLP1mEIC9OGNSUETm8MgEyKxg6unNQCfM5Qpt42FAnFOfdyd');

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
