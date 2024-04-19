<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', 'C:\laragon\www\Dragoon5-web\wp-content\plugins\tenweb-speed-optimizer/' );
# END WP Cache by 10Web
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Dragoon5-web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I8IRAqqgT28HknOt8csVIBkRNyZDaKykHyFuci9efgdP5e8Wb07baygHYHPXLwCO' );
define( 'SECURE_AUTH_KEY',  'gSsuzPHYQy6S9Ui8xSl0Vd8tRqhbvSOYsF8S4UZO5jdM6dvddx1NwnDLrYZtprrU' );
define( 'LOGGED_IN_KEY',    'hxpVLeE7TVoVRJNbhCQ7FXUw7YiT8xIibw7vcyzkQin12b1rkvSlm4iMIUCxn4Il' );
define( 'NONCE_KEY',        'BvM5W73ktRCWhKEtxsRKRrz0ZT9ohfiS4f8ihB54EQKX8OhRNXfDlmQlsarwdUP3' );
define( 'AUTH_SALT',        '5CQz8dDCk5NVyQES3jEfNib3JuRMHXd5ZnaFllxotbIKjhVSXEQjRsQHqAmrtnTT' );
define( 'SECURE_AUTH_SALT', 'S2kLhNF2HRVSx91x4eYrbSGv9soYEHOw3nebntWWj7TgEnk7vQWJwcIzQkugB5O2' );
define( 'LOGGED_IN_SALT',   'RpSnQgKFpzoo9KLVMBCRsII7xeCCjEpkzixOLfvca0ccv5Z3F9VZD8JAKEjPR84U' );
define( 'NONCE_SALT',       'bUaMMQ7DHvbtdK5brrlklad7MwqEYQl7Ex58vlbN49eqWahi0M3uM1jukKY7F7yJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
