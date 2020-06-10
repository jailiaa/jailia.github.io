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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'repo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c-9++^w<Csk.&Opr!|nn]qU@k]kI@AIG$~p?9+/)G|X%Iyp#MgzlvnV:g)7PeCwX' );
define( 'SECURE_AUTH_KEY',  '9]RY<,My`h%/:o1y|@dFS8y4ar+cjP$`WJ5K7_`f]|`n/ T;kdiTic{9Z}tH(}Y ' );
define( 'LOGGED_IN_KEY',    'T{-}it6X_`>lkb@iT|W BYdT72xps>)j5$NC87hI^*1YQ[&.AUt,| IU@s%#=U{U' );
define( 'NONCE_KEY',        'H&x~ttRk_WXgvoZM;|Xd|+|e7?$?#,E(x!Od19)`Jo%p81IX]5T|jo:9u|Mop6*=' );
define( 'AUTH_SALT',        'b!JF+_P%7UIRP6Vlq(nesn-!&f#F!@ZS<E1dW$a4m0|xO2<2xtD-8oc_<#<lr_qj' );
define( 'SECURE_AUTH_SALT', '9fET|d@1nYWJV7YJ.ICA+4Eq|i3nUAM^0gL|iTl8R*NgO5#p|L~.isNwXT3R80;B' );
define( 'LOGGED_IN_SALT',   'b0J;(Mx5lTf {PA&De{uo3aK %kY5gqd%%|J&WR,~UWnd6F+*}79rjkFmC?+7hc`' );
define( 'NONCE_SALT',       'V8M;njVmA)c#u?(WD=MFH^u7)5Im$+[~uLVdoBYmqCb(zRJ2zHJ+pbYNj1P%;v7g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
