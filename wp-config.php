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
define('DB_NAME', 'cleanHouse');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '40MAV9ddq1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ug8fn?DI+[i&mJGGP_%NO&f.6V7ZI/dkrSOItu97A8-1qsG`bcn`kGx+4}00-O01');
define('SECURE_AUTH_KEY',  'z3j`Kjwk7BFq|2t.r)F9F+UjOzBhFjGd6>SE?0k3~J*V>Z0Hs)aBd6x 42n1fsD6');
define('LOGGED_IN_KEY',    '}@%5YU+n.2c>?pM!<;CcNcBI}es_Rky#K,O}JlpzNj@z-0:Cx B}xQdBDtln#6yr');
define('NONCE_KEY',        ' prx!8(F2w#}iz63f:z SMve-Z9iDL)S[^{I|K>:ebTVqrUqWW7rXLSWZOltq8Bx');
define('AUTH_SALT',        'd$$lgU5g6VoBg:JOR#K@jPuW}$jx96}++GA{Azox4MKb5mN-bByO!-}^FM}H:r=Q');
define('SECURE_AUTH_SALT', '/Nn4=dl)C/`$Ne1~;YSjVXFahauH@qFI7k<qwd[9!N]Xow-,3#F<<B},ULPUS!}2');
define('LOGGED_IN_SALT',   '8MMbZZeY3FE1)yn}89A:`o Uu-Xy3W]-v$+TyJmOA KmP L$DoLw#j&PMJQdSwu+');
define('NONCE_SALT',       'yn;k+c|.|bCY9D%XGc0{KDlWV4Wo|-V5tTwO{aeIyVajYuPP8PZjCij+~`w?+[Q<');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
