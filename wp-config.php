<?php
define ('WP_HOME', 'http://localhost:9000/ahcs-wp' );
define ('WP_SITEURL', 'http://localhost:9000/ahcs-wp' );
define('FORCE_SSL_ADMIN', false);
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahcservi_wp817' );
/** Database username */
define( 'DB_USER', 'ahcservi_wp817' );
/** Database password */
define( 'DB_PASSWORD', 'Brunom@rs1' );
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
define( 'AUTH_KEY',         'xkp4xckzwfee5gtxn0wglyunsqtjdecd5vsssgcshwigxsturanwy2tvann503b1' );
define( 'SECURE_AUTH_KEY',  'ygw2tmnhlcragxvts3eqkw1rtaixogsy7mpdg7axdj6zfbdufpdtj3f1jv2xtcga' );
define( 'LOGGED_IN_KEY',    'k8mmhcfkwtf3irxqepu7dsqbxoagxsv6l25kh0spxl6534owsgqbzaehf8delsjo' );
define( 'NONCE_KEY',        'wfd56yncztkcx16kbeby6rtlncf2aplpunimxiouba3wlkiccxjrtq4aysqz5wzf' );
define( 'AUTH_SALT',        'c9ry2zmvwqj2v2x27nerz5zk69b8d7vmfogdnsjzlgul78wzvsyrnbd671lnaabx' );
define( 'SECURE_AUTH_SALT', 'yc2rsq9nqmmjwq6ax6lmcado09alwuxb5q3zkculj6xuex9wxwe8i1hoh5aev9hk' );
define( 'LOGGED_IN_SALT',   'zkz1c4grksbykmsyd96umqa8guzatyxnpjfh7s0aakairoq0ymrjwhtwfee3tura' );
define( 'NONCE_SALT',       'rc5qgl9bgl1bjbi9ssjjowysesbqllkrmpgselq5upzbdvptai9fek1i7wzv4mby' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf8_';
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
