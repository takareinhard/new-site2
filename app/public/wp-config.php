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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'shHBcQkj8d5scj22PXY3SdrqRfDTI/Bt86veubfkcX9cOKF8C6bdXswvxzFPHGy9uGkUoCM3qAUiWgm95dDW6g==');
define('SECURE_AUTH_KEY',  'knPwNvdGtt2caZZpPYQGPkAZQagLNs9PwHce/MHhg57MwS7Mh39DIlK+qMPXtRyHWRSEhAhC/gk3X9TFeUZMbA==');
define('LOGGED_IN_KEY',    'fgy2Y4jwKigVjZzbCykkfbXYUr72RtkPeIIFq6ghjqGpNniup8KHqt/qLZa9l61lWkS94cl9EA2ncqFcJL1S6A==');
define('NONCE_KEY',        'hBkC42Zo8cl5iGuwrciLqRFrrEMvy0l6yDdwFg/tIApyhenB7H2KS4UpSoxwguBACjyzzQqHYRWO6/V1Sor3ww==');
define('AUTH_SALT',        '9S5Slx/unLlWiM0KbxfYv67tHRMZqmIWEplcxQJz9F1jVQoZO3PsLWto4llUjz1fjDep1OGo2ahf6XfgIFN6jw==');
define('SECURE_AUTH_SALT', 'cj+q6NhdRuKZUYfFirZTEvaEgu/5+iA/sxOSt+YNhfMJATSBM9ToyObqz5lInVPti4tYZUCnD2UQTkSSh+vLmA==');
define('LOGGED_IN_SALT',   'DOU1//dLaablzgCtGJQ9NE3grgo0tVYDqQXQ6LuHMucyMKMBxz3RHu0CEsCdU1SoBkuM1wUOEQP9H2QYVScc8Q==');
define('NONCE_SALT',       '61kHIcNBcGIFyutYCS8eLEheluriNhtys9+77vriWtWoBOHHvBepJ67UdtQ+KbJ6twXVG6797UweAm52//3zwA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
