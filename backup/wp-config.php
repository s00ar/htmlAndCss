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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_30784353_w571' );

/** MySQL database username */
define( 'DB_USER', '30784353_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '4@SQ532p)2' );

/** MySQL hostname */
define( 'DB_HOST', 'sql102.byetcluster.com' );

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
define( 'AUTH_KEY',         'rgdcis793u5dbxw96rpxzjdud2gujp5hoovc2ztr2rszi0ge6o9wuxtrir7kocis' );
define( 'SECURE_AUTH_KEY',  '1pdfr3wzzxa7jnpyptkes9fcq3fld9otvcljb9emraob94n80tmbp0m77oyxsyrq' );
define( 'LOGGED_IN_KEY',    '3hlmi8mmxdyhzproyjxquyxtusrnwxgrslctbrjhxlcnu848pxppecijjsmomcqg' );
define( 'NONCE_KEY',        'evebhjhzqeuiguserhwndma7gcir5f2mwpgt8cyqvksp5fcxi24xf4aoau31hagw' );
define( 'AUTH_SALT',        'czsh9cvahsblnffyrzft5aa3dlunidhnqxrwpprn8kbcawa82xjarrjeb4txiqom' );
define( 'SECURE_AUTH_SALT', '0xy3dvb6leipzrvse7rdq01c8hl1lk3hemtind0ezwibolhuw33tpb5q8fczj4sy' );
define( 'LOGGED_IN_SALT',   '6nfuns78flx1qamgwsindawu5ks5mc9ipkeihvkvybn6t6likkofrspqscze4yvi' );
define( 'NONCE_SALT',       'lctkx7wpehlazfvaoo1w6wgkiasieqz0927mhwdbahiztcr23snngsownm4s1emb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf6_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
