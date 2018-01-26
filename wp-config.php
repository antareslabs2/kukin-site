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

defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'local'));

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
switch(APPLICATION_ENV) {
    case "local":
        define('DB_NAME', 'wordpress');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');
        define('DB_CHARSET', 'utf8');
        define('DB_COLLATE', '');
        define('WP_DEBUG', true);
        break;
    case "test":
        define('DB_NAME', 'dmitriykukinsite');
        define('DB_USER', 'dmitriykukinsite');
        define('DB_PASSWORD', '6E8t5I8e');
        define('DB_HOST', 'localhost');
        define('DB_CHARSET', 'utf8');
        define('DB_COLLATE', '');
        define('WP_DEBUG', false);
        break;
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g)Ims^iGXmqrK{pRh]?ZxZ$2(y-%elGow/]Co<P{zKN4}s9rv@ML9}VBp!Fln>`-');
define('SECURE_AUTH_KEY',  'N4:4s7&aWeFiGCN[$VRIjT,Y,slWfY@jd@*Y~!>6|l/xrf0kY-}zIy(h`-1F+#@}');
define('LOGGED_IN_KEY',    'ez-iNIoN+w7CXMhAnE||qFL=l2ELk_AQVVL$Lr#!G^1~4u|+Tp+w`I1d jo@njiP');
define('NONCE_KEY',        'I>-7SHN.z/)e3gCux-d3=-.U%tjm*+!VSsTO=_{%|b^wue_2qGEDFY6d|)zsNLWb');
define('AUTH_SALT',        'L>5Zii 9l&~6LcLB8&AtcD1*/@X+L(1L[A}vY^Am)vY>&Qu7mUmJK?V?nkrfqdc^');
define('SECURE_AUTH_SALT', 'Je4g+XqNM2C%_VrkZrO%z sY^%!FpMXvr?*bK=J*s63iM9+JLbNV^GkQ]H1+FOW+');
define('LOGGED_IN_SALT',   'bz#}6OX;Wel3WQxkz]dIWlsy~9ER4)N +O5kxj`y39c_27[ktiphYwT&:HA%=4`|');
define('NONCE_SALT',       'Y(5`oKn .&;Fvyr^`|o dCVVsu]s-@se^yGwk)X>x<M88]T0OdZH.U}&$XXDlx6s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
