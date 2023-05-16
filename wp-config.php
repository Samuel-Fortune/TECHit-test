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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8&sLSbe&pdj+7pd?K0>$jU`%U^PYg%rTs Sd%?v*^hVWJ|R,K2i=UtJ{LKzTtX-Z' );
define( 'SECURE_AUTH_KEY',  '%DLi6a )F|j0h`T/_SzM]k6}sCV3O$BWVFuFL|wWO)=wye&@?18V,5yw~CXYquVo' );
define( 'LOGGED_IN_KEY',    'KtQO}l2FR6$/{BKC(HH}@~h&2NC)oUQ(tB|-q5TkQP6K#EPHqy}MeMk4r*E()Dde' );
define( 'NONCE_KEY',        '6CxjT9e.{fI/Eo^ prTZLcVih+X!(k*5a{?1{1R{m} }C&*`@7[}}8QA|)51^iMu' );
define( 'AUTH_SALT',        'ou{8ukFenQmDB@TTqvi;-W@ud;GGUytG3XbN,i]O>8ZWOWYljdHk7y?R0l^1r*#;' );
define( 'SECURE_AUTH_SALT', '30:/O5pwFY7<H,iZr9EF8^qlO WNGU0tHdD!13F|jFp<i$u|x{d:O8XgD?xF$#]l' );
define( 'LOGGED_IN_SALT',   'SP@Qk-ZyqeuLXa:5u3OO3j:.T8?8&r7U[MR`&~#0tjUsjJ&=^esKw&(4|t##|>wg' );
define( 'NONCE_SALT',       'Bb#E|80B Cj[|Kfj9A;BS*+Lw3>p+jh]ZL15@u98dXHvU@~nL<xxB7#&YQrafSs5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_utf8';

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
