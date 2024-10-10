<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aiss' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'X(c Yl_topKKP-!IB]>pS8o94(|@]Okh62yxlJrN<$q,XNQd8F>afK1wY5pQRPio' );
define( 'SECURE_AUTH_KEY',  'P7]1/+*=^4gR.U+k241$qTm]:x7Y^GWOcF{8+B(JP8e},y#/&vf}7<91`nkS6>hv' );
define( 'LOGGED_IN_KEY',    '-&a<8yVKJxYoE5[ucCD^I}^=:1-#/Q>*zO4FNLyZcgjyXZAEJQL(&-MctTbq>{<F' );
define( 'NONCE_KEY',        ': Fv|r!~:YD|.8}.QHa.E1>86w:MNCb=KuzieL+at`_W!k`o13y*~6Iq:Z>QX;wO' );
define( 'AUTH_SALT',        '$Lnk1|SB_kqxkTYwI7Xj;n#|O_ nUUaN_1dIIlFT<5buW:`,kl-ae38JzGM7on.4' );
define( 'SECURE_AUTH_SALT', '}~vlf<:2b5@%sSv|V0vnAP7[hf5m, {O32!?x.3U6t*H_QctKt.|qW5]g3xAF-;R' );
define( 'LOGGED_IN_SALT',   'z=voV:O?.l;U,FA&hNpHW/M&t6)xR.V@qp+I[6KmRNRMZtz9M13)^s*t?V1MuH9;' );
define( 'NONCE_SALT',       'cW|[?hbx$p9BS}gdhnN5aaeGnljk!c=$=r1GcrS:9sG4KAJI6QVTfoLXT;X;[}l4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yuwpai_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

	/** Загрузка плагинов и обновлений без FTP. */
	define('FS_METHOD', 'direct');

	/* Отключение редактирования файлов в админке WP */
	define('DISALLOW_FILE_EDIT', true);