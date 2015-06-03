<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sereteli-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5X%^c%-<,*MS,F vHuO4O/+n +]5Y?`HV>K(N(D}& OREUUBrw8=/r(T|YPNz}~I');
define('SECURE_AUTH_KEY',  'S(?{~^sug@fJ%S1#f!6L~==L`) GOP1E2fZB*MS*IY7!NPQ/@bVM>uhN!{B(qiJH');
define('LOGGED_IN_KEY',    '!Wi|,|dK)AB^]M)VFvb9=tX[Bg;8+<qy^e`5{.^=#{c}RC@W_[[oT&hmK>*a6$af');
define('NONCE_KEY',        'Er(+|DB[#B0X+@!$!aDeDTcp.tGU_V9(h$B571fNHUo*UxDLqq{/ZIW:j6wFvQ3%');
define('AUTH_SALT',        ']HQL3|XZ}j >k|7yyou:+_.A@%}@x}0TwrqYw4vwhN@UMRCwS8G/#|;|IF0*y0kD');
define('SECURE_AUTH_SALT', ')/,NJ>gc[?I4pF^#j|V/_<la)|0W%;Wa4PJY-:K,J$b.osA&M}+K-JnwZ)|8lA/`');
define('LOGGED_IN_SALT',   'G<Y,Xo,+<k!XUKEh-y|p6agssA:)|+icwjna0q#k+tjat6nz_]ssI%y3AIi*=vGs');
define('NONCE_SALT',       'HP4z!iTbA^@b?.sHfG;6tH=u(K!Y[Is$/u]PAzSmjEl~56w?~Z3/NFim?&BPN|EM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WPLANG', 'es_MX');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
