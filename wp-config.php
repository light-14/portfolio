<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '6n3dh6umyrbsyzZJmMvu+sdFO6kHhMlGW17KqWaspMarlPm8eCkxwO+l48YJWzvWA/l5MkLIZBbpUNVQVX0jmw==');
define('SECURE_AUTH_KEY',  'nlR4RwdNwneXC0lPokMyLon1xeRI5X2fXF5oSgQsv9kTR4ywqe0P9Ktk05wq6qQvEYFog2bGeWTg9iuMGnv16g==');
define('LOGGED_IN_KEY',    'dUJ8jNTOMdgOXF8Y3+FticLcQ+3AmWfquFnPSPW5usABpvl2mxJxpb0oL+wqkQvC9N60fnVMt3jaaTjEpiDNfw==');
define('NONCE_KEY',        'J4+3uA3Y+ThPGAUsPuerFQqdn/nJBBcGaQZQI08FT1G9GX9DnfPdTquGfgyqKki5NDfdxMxPzL4Av8YNcIR+TA==');
define('AUTH_SALT',        'sSMCM62De5cLr2M/HLNSsEWF/L34HHxd/oM4aRXSYBTmCpmvFwbZ1lg2p6H3RjYzswUYrvz1TmejbTLhbyrnDQ==');
define('SECURE_AUTH_SALT', '3Gxt7qxw94HQh10O+LzafBa7YCUZCcWp7duGiOLbLiwl1vNj2+tcNRsgABVfbDO9InuAu71xScBGIBoMkiLTBQ==');
define('LOGGED_IN_SALT',   'qd9MM8v6fYzGFTw7aYVxRCGzBlhg4Rhgkvt0wAdjUAnwQGJnKvIxkY8Uyjv00W4xMuvQx+NP6c4vNIodj35fcg==');
define('NONCE_SALT',       'CfV1s4Z0WatrrNK33DQeOtmBqxrE00RTWeN5xik9AkqB1n3FymOtxOnzPqk/Lmadj7o2T19XwO6n8QOsUEA3rw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
