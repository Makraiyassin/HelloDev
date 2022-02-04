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
define( 'DB_NAME', 'hellodev' );

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
define( 'AUTH_KEY',         '|w;0b3e_*V*&~!w.c8Vz&V>zPcl=HqaI%<r$u73! Va}vld,Bu08Gt) &c`&9!rr' );
define( 'SECURE_AUTH_KEY',  '9GZ<W-mb%CJ}n4pRv2s)TZ4ynz3G/:KJg+Yk<JU:6c[~8,wj#cKi,1G,gFX{?ZNS' );
define( 'LOGGED_IN_KEY',    '^&&h%PO_@Y8f@.T h8x0A~] ^d)}%KFX=ldYj*lIKV^qxzL3<PS+GM0=J>XA{`,~' );
define( 'NONCE_KEY',        'Y$Qt`;jJ>5nZJ<V)orjNnVxdj9l{B~w9wL-i4{(_ 3VOhzQ{d#.Ut/A2(OMgd U;' );
define( 'AUTH_SALT',        'emlrJuoj7C_ev`#l~KFQ:Zm@e3S/?NKam@~>G{@Z20 Vb/Nv(]dm@. 43YmjQe.N' );
define( 'SECURE_AUTH_SALT', '+D1y kM!wT#hTvhOlPa6ZUpylAqzEvF;HI| $NEK[d(MXSN%`[GSDF[Nj*OLi,xl' );
define( 'LOGGED_IN_SALT',   ':C%x-pO7}DT>qy<2&O~UsVA5;B*GX0>35FnK2*SLnd^e}]#.dd&Jc]+s6a@[U<M0' );
define( 'NONCE_SALT',       'b<@6O4{xY]?vbPEVsFEPs,kly18hxNTne6C|jR`NjUirxKD6q9wCXz4GPNoOrG<>' );

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
