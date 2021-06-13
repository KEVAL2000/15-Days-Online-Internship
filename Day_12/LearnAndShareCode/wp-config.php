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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LearnAndShareCode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2)Dt-g DZz{c,8Dmm>p%Ui; ` (I>Ii-IK`RC&0QtXj[z>J6ktWwCiTRO#uvRZbw' );
define( 'SECURE_AUTH_KEY',  'XoKz@_;q<0q6^bU%;Yp~IH1-8NGigJ=-@?Q94HA7@,93K*r5@-V/T)|!$Kh.7Tm:' );
define( 'LOGGED_IN_KEY',    'oi)VlQsw?(5BYp[Y!:/a=b0<$Z0rksBWI}7stR5lZ4D>g~tAa[BFHY sm/[SSFH$' );
define( 'NONCE_KEY',        'Oq;jnpQSFTKVK8#GDqr6AR5CMwHwU8>AAr_vS8x1GQu/a%zv/AhAE*#m.n,)1ra-' );
define( 'AUTH_SALT',        'B ),)~;bP*}g[6dJsvD4$uO$k]CR7y+O@h0*FX^6`V}4r&4Hpg! )>^{py@$Qg#(' );
define( 'SECURE_AUTH_SALT', 'n`^>>_vEQ- ^a7hs<zO-P=|mS!Kx10) jkN}=E8Bonqa8x?E};+d4[Zv@6|=LGy4' );
define( 'LOGGED_IN_SALT',   'IGp}t8P=m^+x<[xinGhxa#(&Gx>1diTGfJGiq@`#nAkwz;S|PCQSw,ef=5IZ+KfQ' );
define( 'NONCE_SALT',       'K&*8:L8|>m][b#kK-pur8O.Dx(SAY,KnVKGM=R4pf&UL;~<q.txEN7%<,twTmHZ^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
