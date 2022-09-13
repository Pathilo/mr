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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mr' );

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
define( 'AUTH_KEY',         '];4%pTj1jE}w`Yg9 x`3w8mg/JtXSOj -j^ifBS7m/m8~O 8@Sij~QB|q2Y+zk[u' );
define( 'SECURE_AUTH_KEY',  'Ja,UEn#R{y26$;V%f&NNGnUGVtb[m[4Gd&{U2cTe$UkExGc5j=w`0KJ>N^Y;T| t' );
define( 'LOGGED_IN_KEY',    '%j+$~&,M)a%W}fPtT&O)1-Sp&q?XFDv1Xccoco4_?aNJQL4b)_@]:q4uvT/a#tp5' );
define( 'NONCE_KEY',        ' ^WbQa} pc8+2PNx98QiW{-gXYKGjjbcv{&JTc $}{gR@Ym+c~]LBK*|6#lb%IAT' );
define( 'AUTH_SALT',        '[^?L=T&5UmS72%``(-t6z<}H!wn9O/0G|xg9@[yFr* Ke(JjOOEB:e//H/m#(n}?' );
define( 'SECURE_AUTH_SALT', '[=c:Y*Y5;cKAv$j>p%u]:,|bSIj)T8fKGQ 1J*PbPt0$:J=Nw)V=lp}0{D=aL2-W' );
define( 'LOGGED_IN_SALT',   ')`}P)]50Hi?V{Z3]uR8m@f!KHnKO& %<bZQEqSbxjz+&p/]vO)%.pq#OL(u=?wAj' );
define( 'NONCE_SALT',       'wI~c#-{o^}s|rud.s6.BM>/jL0+i|GXTtoWr~/5x_{dRK_P9aSmQ_/a_1`]+IV:I' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
