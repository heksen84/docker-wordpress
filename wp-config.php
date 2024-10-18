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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '=PkTjfQ> a^j~i=GH ?7<UOv,z6g_9>_6>9zw;4C+MW?TJAf}*2cCS,$eb3$StuL' );
define( 'SECURE_AUTH_KEY',  '_|V_2EzsCh*Omz9hYja8:|wMa{w ;0?e M@hW{/=[jmK74[!1AyY/fl/NqR}b.#l' );
define( 'LOGGED_IN_KEY',    'L&iopzU+d_j?H{FxjvDmTE7K1R.K+4;,o%;Zosmj:R=V:AevQ|p(4~s?UW9h*@!?' );
define( 'NONCE_KEY',        'OdD&$Z5YoS{=/oFb6>xqDyf>JfaJyT=8]qlPw@5i+-s7o`5C$Ez^I/P0kuZ%>WQ=' );
define( 'AUTH_SALT',        'CYsEj<b:|8x0R??TdYAC~w]@FFw3[L.&ss;#nO,KG=Tp0F_/F$705.a&-3mvWU91' );
define( 'SECURE_AUTH_SALT', 'Va[ ^%@q2[v]BJ~kBp,@{2d7 drm4iZ:-AIN;#q+-*:o98W{9rnr,{4=UVp|&j|v' );
define( 'LOGGED_IN_SALT',   'O}Yx6B+&KRB3SD*AjK #/]+g$hU|ufwzV}YP+ *0tx,44,(cu1jiF!$aowuy4H/x' );
define( 'NONCE_SALT',       '_lOGu=s0LBK=enGDtC_ngK5=zF,9cT^MxOYrva2<2 ?n+N-i/4?$79`W$9]`6L~V' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

