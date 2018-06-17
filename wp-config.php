<?php
define('WP_AUTO_UPDATE_CORE', false);// Ce paramètre a été défini par WordPress Toolkit pour empêcher les mises à jour automatiques de WordPress. Ne le modifiez pas pour éviter les conflits avec la fonction de mise à jour automatique de WordPress Toolkit.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_y');

/** MySQL database username */
define('DB_USER', 'wordpress_o');

/** MySQL database password */
define('DB_PASSWORD', '$1AaX2dRf5');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '4AxaoH#hQZsZ7zk&N:X*)6:gH-B0zSh7%dot:gQ8u9-:6c![5_3*9-q9!@y:m+W5');
define('SECURE_AUTH_KEY', '(C&S_r1xN+/TRk15;O8kWVx:|5jA1)K9&MD4%8SePyHR3|)owAd919uX1pLEru]4');
define('LOGGED_IN_KEY', '7N:NpXXM/2j;%4/f0k0MG_cS9vRN+5(273L07/0Uzv390A~T+_Vgh_LgVx/o5;UW');
define('NONCE_KEY', '@5)Y%KB!jnv-lNK*FeLy&YG5v6n]M407ttG78||o7aF)!nb5/8;[5~139BpFO|yL');
define('AUTH_SALT', '46LW2q4K:MWan2dhVJpxo2uH9mWmW7zQ94P++w!Q8mY87Ai0]9!]Q/)1Og&DzM)~');
define('SECURE_AUTH_SALT', '4-9C1w48c|Y5dy5Nf0~FHd;&0R6&6/e6f0%HTF3;#yc3:Z|2Pl9Tqv6[a5b96N9C');
define('LOGGED_IN_SALT', 'Z&QvY~@7@3(as6r2(i/47&Z|NJMi1uA81cM%x08~I78ro*6~_3u&69b39-:u4PSB');
define('NONCE_SALT', '8(Y(4/_cO&gb|epm8Zv5*Q50zR8&U&jRcs(&b!5Y6ua9m1&v&Tgh+a:#i3%sRJ4U');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XPK4Xt4_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
