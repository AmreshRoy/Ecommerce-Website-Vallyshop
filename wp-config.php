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
define('AUTH_KEY',         'kw0VkCb+EAtMJIitnTby8AbUrCLMoiGNgBCdgzj/TqEJpxv80Xu+weY7qAsa8q5MBAVJP0IK48NbJ1n4feqMbA==');
define('SECURE_AUTH_KEY',  'SDRtwnskzfxx80jUIsjljYqJNH/YIQebviDJy0iGkJ9tvy+ffbRk/90dEPPYG9IBawKi3R2wp3cLGG7/0DAv5Q==');
define('LOGGED_IN_KEY',    'j2lVZABTC3m8lzmnNeGfvkQCADUgzS76QY8ipxdKeiu4rebKJ/mVw3pcM/sivRwIznuPUaoA5S59asf/ghtRYg==');
define('NONCE_KEY',        'jzV7CwwhMr8LFw7rpsTCDEt6mKQ+U2ZYHHUNypab3zUL2u3NoICmvzHM3Hbo//5ZV+1abFvu9sWX9lYOAoq+uw==');
define('AUTH_SALT',        '+UU38j29OhRYVZc83IUpt1soMB8l86U3wHcN1p028tNbeBNL3JMr4xgwGQQzzH2KkWdQ0patQnWyCYY2YwCwiw==');
define('SECURE_AUTH_SALT', 'YivDSLBrKcqRtHp+Gv6q44SPjVXwL5qHMn0NInNy4ASjgmzHvvpATEZ495pWgTxFFMAzaX51Wr43lAvgQxakfg==');
define('LOGGED_IN_SALT',   'ttdTY6SSNAcJYngas9afy4Id3pqdDo4HWIHwp9PNkgkOUF4zb2yIsNAdNhlVXZGXllsJ90A2uw79x7XozCVQGg==');
define('NONCE_SALT',       'XGepXbZaRB6CWpOz/UG0F+3XJiiC2w0c8CYu5oIVJgYOYY3jISLnAlDebDdYmfYY1hqC9B8/ZHLbvUNt7PC/IQ==');

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
