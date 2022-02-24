<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', __DIR__.'/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'akinfo');


/** MySQL database username */
define('DB_USER', 'dalves');


/** MySQL database password */
define('DB_PASSWORD', 'Aguiav0@alto');


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
define('AUTH_KEY',         'U\`!Vr-dBKt_*)PXW>h5->hb=jKjN*GxoZHAC4vaa#E:TSbT=t|E*AO?6H@:FYJ|');
define('SECURE_AUTH_KEY',  'r-T~g@WXu^z0Ul8vhz(ZdV0wYM:Rx\`K8>F6Z)R~wBCz\`g5<6l=<74P(Mi;8;IWqvT$OH=Y?pX');
define('LOGGED_IN_KEY',    'J\`guZ?90b)jaO16mT/V|X7*p?a*uwg9\`^8y-1ce91vmlmiNOC0*^(ieYySez2*UTK#XldNC\`IFFiT');
define('NONCE_KEY',        'GzikvR9A?wI<cbKLri?lD/a|RE#88Fz8c<G_aCZZT0jqAb0\`@dT!zeXvh\`bkC');
define('AUTH_SALT',        '~BgDLWR/Z#XE7=8zt#|#0P|l*n7mshF/Mt|y!-<3*x-uCRsxG44r^hxMZg~PrUdj~2aX$');
define('SECURE_AUTH_SALT', '(Uh(ENUx^32d?NN0rYP/$f*-lBJ4j|XJ5rNKBYmkII7HvMwsF>a(fS-)^?McSM#CNapizr)');
define('LOGGED_IN_SALT',   'n|VuYMj?NB8swr(:z$uqeTXCf\`oeFTKs:i$cy1o)PNio=nW7d7:V2DiZyvK>K-)ND$_>bh<zR@9ggJ>Fg@:0W9k');
define('NONCE_SALT',       'c<FszTrcQruy98#S1jsnxa5JM<68w>P_^|pBQw/$le\`W:X0|Mh2lU!vzkI)1<)(*cq(I|KXHS');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );

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
define( 'WPLANG', 'pt_BR' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
