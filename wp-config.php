<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_v632' );

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
define( 'AUTH_KEY',         'KGryQ4Uv.I{;/|4Db,$_z[o_ ^X3m3m}~)K(^H1u/^*Mr6;7awCgoq`MA1j?r+>6' );
define( 'SECURE_AUTH_KEY',  't.Z}1geh5 /G2ajQR.Vz SyM~TT(E+-av,+EJp0+5?m4V).L39x6+Jnq86ZX?o%S' );
define( 'LOGGED_IN_KEY',    '{rX1zj2J~fF.E@K-PE/V-zl#g}G.)[VIL3M[2Y#sYkx,Uov;&qH)0]@aU/gOQM[C' );
define( 'NONCE_KEY',        'oDE#7B0uns/1?)#}z(YPi7+|pjbOcIc=:Q6ox)7SU{TG&(^O~ldqTF}Ir5lOql w' );
define( 'AUTH_SALT',        '{i|*1I7tNO}ZmO*Ri%(Db%na2U&giQx0^5jzf0]x9:@B7`,{>iqBDzc#6`^4Km1c' );
define( 'SECURE_AUTH_SALT', '/9,xti#Vye_(q!!MAoH_bcB6sfo}8s#O7TJm /Zv9P7_8A1}4nie!zgN|a.ldSiC' );
define( 'LOGGED_IN_SALT',   'q[ijBstE}#iC5ho7F;>1B{F$ev!T9e`KAoD6hsPW8=r(03sT=It/!aG8W1NniIYN' );
define( 'NONCE_SALT',       'Flj5Z`mFccbNs_<?gCy^X<J=H-N*a9y F<E,H*K(f[B<KzSZ&ZkpIVC]Vus]z`Q3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
