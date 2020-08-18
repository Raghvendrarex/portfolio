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
define( 'DB_NAME', 'raghvendra_portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'raghvendra' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Raghvendra@21198' );

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
define( 'AUTH_KEY',         'qkUL[y=CBVrteM)fEU;1`*m_7bEM.WaAY_n{vi+`9y8]d)_<8x>|G;(X6}npP*rg' );
define( 'SECURE_AUTH_KEY',  'AU%ZpMSk`Q38JlOk=]%FJ@KwDK|DD Q8u8PAuGr^[k@x|S!Oi=Y^tKhCVYA[U.Ob' );
define( 'LOGGED_IN_KEY',    'jYbn5Oxo]4GM=`Ocv{2 >X`n;Cma-g{T5o%Q736rf(&$iUWe2s}dc9`]WJ29K*uA' );
define( 'NONCE_KEY',        'yH-Su,@BBIWh:^VG{;Lx<P@:bNyT@=b `)K:%*;]$9i%UW}_i#rBs_QBxzi|knwA' );
define( 'AUTH_SALT',        'h6cFzoHkN/WpvCR!jJ`2R1cXMIAXvs;an7op=6MC;kf#{5nbJVPx09VdDPXVF;+T' );
define( 'SECURE_AUTH_SALT', 'qYCTynIn.(^`WbtfG$7U,P_[8(fC{z(wU(Zx;D95[qSK^t, cyMY%/&)9=o{Zq1M' );
define( 'LOGGED_IN_SALT',   '-Rf3Yq8Hadw[#T2G UxF6r4~Gd}|;=Fv_Rs:$z?FgO?X$? h]L[0ra9BBj)^GYHS' );
define( 'NONCE_SALT',       'ph8~RnoC9Z)$*h+pWm9kdl</5jK1&s#f:#+v^AjetKo_2 ~lD0tnwR%V8^D*=hV%' );

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
