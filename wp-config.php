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
define( 'DB_NAME', 'grocery_new_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|JqsGyiT0/%vn[*,;jp^X;?EIAGX-nd/j<XLy;F7A* sBkJx7I1g``pbAk+u!}{h' );
define( 'SECURE_AUTH_KEY',  '|zTUC>=~E4T}}]J;eL2eg)Q}hb`.F{H>jon7L$=oMk}dK#jFT}RqPGhO%y4[Ei&v' );
define( 'LOGGED_IN_KEY',    'iY_R]k=?k>+[d_BXhC{.nFxN_E/r:pm92c*IZX4?o1)|m_9yY58><2ZF;q35lgeF' );
define( 'NONCE_KEY',        'vip0<)D4`S&ts_^ tw!l.,Rg[P}GMdj;C-T7]G+(Ad!w,lGy&`%|nNsm;R(/KO>h' );
define( 'AUTH_SALT',        'V@>z(2It29 d4):!:r29`rN;se&FYGR>(B!WAc2H6n7t *G*}FLSE-xgy)6wkm=_' );
define( 'SECURE_AUTH_SALT', 'JqXHiMjGl4}tp~^:TF^J>Na=A6qWyk{1=^5e4uIcg2VJ;<z<^n*Lz]*%.&}*G3ol' );
define( 'LOGGED_IN_SALT',   'wb2pl6,; ^lCeQU|M0DC)eRc],w%0z4$2}Ew`DyxdIt;A<@Vra(5k$2Q+>h#*,F2' );
define( 'NONCE_SALT',       ':_5]POy/[{m][5&,BDyqKi&OixFqe#0a{axjVy-U5,$A9n>^}ugh$H7BI;_ ,X#1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
