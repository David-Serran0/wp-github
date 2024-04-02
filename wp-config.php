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
define( 'DB_NAME', 'wp-github' );

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
define( 'AUTH_KEY',         'I7xx{@~aisSA,fHZy4EHC[B2!t.W)N=&7 Z)p~iWp?cL0>!n-5i&rAx&DdUJ@6Xs' );
define( 'SECURE_AUTH_KEY',  'BeO{l!n.p?jM;e].{2^C+@ylywuH||lq!#~U)!!71dIA3Z%v8:ozA5D].ec+-{+ ' );
define( 'LOGGED_IN_KEY',    'H>g/M8I1-J9A[[_`#WTRv8CGxJ8K)!$S/yL8:Hqqh(KR~mv_ChJryOsDM_Vq.]`z' );
define( 'NONCE_KEY',        'UE}_ih`)Vd%7~9b#h2pr3THiM3m/bu*U6G9ZCnpk+=uFXT3sA!iZ:9gpM]i2?r}o' );
define( 'AUTH_SALT',        'GL.BbiR5W*Iw#3!GN_Lw+X:s5*&ENSjiu^Pa2tjHF.og! k#7 %*r0pGQY%[w~$)' );
define( 'SECURE_AUTH_SALT', '@_Xh!Q6*Vz29J_4tLx<u$#k$OR_c@cYOu.]JFI?Qa0W[gz8q7=?8[9>Ab_UNu<V%' );
define( 'LOGGED_IN_SALT',   '/3P#F%>f{CUeiv6k.s*/^c jE!ekBlkoJmrwSn[p]=3gB-8Mk9#qsA2KAp9L[!Xz' );
define( 'NONCE_SALT',       'VF8/8E;pQ`22N{YZH&ND%xsG5c@%>{j)oI9AIj4B/VS*^#<=;D:n,qNMQhbt4o_t' );

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
