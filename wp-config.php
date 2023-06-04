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
define( 'DB_NAME', 'cocmakt' );

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
define( 'AUTH_KEY',         'BW*%+NhYJZ<l?wKVisYDu1SX%ls#gPy3`Mcr<J!<Zh7S)Oj~SW4uy+0FS2!%D(:$' );
define( 'SECURE_AUTH_KEY',  '`NMlG`H`AagN][6,dJa<DDmf1NB{IW5JP=z0)`tf5zZ!kSPjD@9*Q,8I{Iw7U+|R' );
define( 'LOGGED_IN_KEY',    'J_VGZ!&JXt!]^4.M)_W2Ew@YtZ%NrhTUH.)o%7!`oD=H$8ejLT^Wfg,?y!< LWPQ' );
define( 'NONCE_KEY',        '7usEm~w+t)[#eWPU293qe]gv=lPw@]rA]C(ItRCf,|h`&2/YW)V2!^8@?H&tN,xj' );
define( 'AUTH_SALT',        'H8R!-L~SJky4G/$LbBw`JT$@?x8K16IQb+-EAYxJT~D{+B-8dD(WzR,v}qR.~T6H' );
define( 'SECURE_AUTH_SALT', 'AwPBt#8;`rc:T,G~Vh}S]wmBM&Kom|(1KIbZs1kFFQSNN;hsQ1MQVpqVD[4t[m@9' );
define( 'LOGGED_IN_SALT',   '?#K,1oUbe!|9/fjnVpmw ?(!H+15oY[SKJqfLsILLZrV `]ShY6/+LTGNd!yHiIh' );
define( 'NONCE_SALT',       'T]_ms0ooT:F+d2p^GLlgA|2!di% l39,O<vg#=I`BP5B(C7&$]H4@=*JG^;`r*|3' );

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
