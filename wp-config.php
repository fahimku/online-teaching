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
define( 'DB_NAME', 'online-teaching' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'I% mxrK]Jw}]>vAh_0RL6+}z<;X5|Hf~d0*}Bk!hOwkIhl0lsMNX(`#=-T*hK%D0' );
define( 'SECURE_AUTH_KEY',  'uC[vc;UeKfoP-c^=To!Y7r6Sr;/50iTQN:P}f[ R8yxUt1Z3iY,}B,/3=n6j|t[-' );
define( 'LOGGED_IN_KEY',    'rmQ]wfKc[kIsr)GXUw?[opJFSx{#iwv1:i8`[B%pz@@@qzm.][|jX]UJ-TV1;%;D' );
define( 'NONCE_KEY',        'R7<*1tb#pa7sP;RC*ge>C!dq61lvT=/AfPX;DRSbT];R;/c?dclvMPAN)OqAZ?b2' );
define( 'AUTH_SALT',        'Dr!jaf*OF=~+t-m-9|LKG-ZYH+{cKAi%r,5^*qW26 >WIySi/jg=.SRFi)W.1QS9' );
define( 'SECURE_AUTH_SALT', '//%<o&QpHZ/` iDh9*)/3g2:zPukRZhKG_ <M$MN{5FZ$jS6`@aF{5AZJQ>64k=t' );
define( 'LOGGED_IN_SALT',   '/* q1Z4!(A$8_,+bUQ/Rl_X<E7tKPM ]Zz[$SsKp`.77--UQ8ok$n+1{5F3GqRmU' );
define( 'NONCE_SALT',       'y0{8(L;s]VD}H&_fo2PQGUfxQrr&VV7h:;l$/0B(fAg%2>LyUU5>ClB+l{T}^^Q6' );

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
