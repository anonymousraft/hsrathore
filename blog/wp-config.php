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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hsrathore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'banna@09166177');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ';n97TNze2t`$S=oZ}A)FYV=S:Gl:z]}+0<qFw-J8T-ys+[,.> o-1MjH([%K.^|E');
define('SECURE_AUTH_KEY',  '[<+A7bon7ZEk[?G4`?*|=m<Eu#}SN:[$+kP:}C|luSW$_T;Lv8hfi.[ixi<8S%VX');
define('LOGGED_IN_KEY',    'P+)j2nuK+9jL+;#RH-Z3]@0N*qkH6D:L1qn{-EFJ)Y@b^juD6. !{hn3UO7ELL8P');
define('NONCE_KEY',        '|b>>2n[XCN>0FMRlApF|.^y=AlU+!|EiH$%IMKipEFhM^eYt$Dr6f.W/$0MS(kn+');
define('AUTH_SALT',        'd/xUH6gcUnL(!-EGnWL<%@]%,kdY5*8mN#F/l>ps~waxI^;{neK;0FR|>(4pyr>]');
define('SECURE_AUTH_SALT', '*WP*K+NldWuDJp%{*`%ow7ma-bD:>BJbBFNF0$d1_jX`5;yQ6KE8^v(!4Z8[(=s$');
define('LOGGED_IN_SALT',   '09S_s Dqjwb9kl]Xl^2_.XD[vx|JVj1krCNutroY>R* ~!J1Jqx]_qlTL/qz>|m~');
define('NONCE_SALT',       '7M!Y~88lvZz!u*qv;MM?+:`=?Dp;ZIOU|_Br2<otUBgm+nyz$ DhJ0l0k{jZL&Hl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
