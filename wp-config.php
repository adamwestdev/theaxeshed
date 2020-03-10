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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'axeshed' );

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
define( 'AUTH_KEY',         'NeZ>h[Tk;|-GT3SkY!9@G%Df0I`7^u?zJzpYze(],vC*swT?0i~eW~/xV:4&{7R0' );
define( 'SECURE_AUTH_KEY',  ',B:<e:+<jst|0P#,T_JKS#o3j.nH|CS`?44dzBoW0C|0Y-NnDw~mH0v?aTa(064|' );
define( 'LOGGED_IN_KEY',    ']JH60?-*8{K+885o Y4=*/Z+LYWQ3aW:{AawMJLlvWj-`2|Ga(t~cG3=4b>`7jGD' );
define( 'NONCE_KEY',        'B!Qkw-(X8(3yg#AJSCAY.YI+t$g4.zS~_pW,EFK+*T#ID$>c{xJ:K1Vb2$.=/) 7' );
define( 'AUTH_SALT',        'vmfq``yFQX8`!]9C@9,hPhI?!T>k!Ga/lT;nPTx~Dz%f+^BP:@akw108DYb~}`;M' );
define( 'SECURE_AUTH_SALT', '@TW;^~3E^oLjv=F>L=7%U8tf;O+/_T>P? gO`d)tdJXc`KdjQ&Wbe}n*wc^,l,WM' );
define( 'LOGGED_IN_SALT',   '!D`-*Pp3NG8.auaA/Y-O t_/k^i#<(`2Ka)t1:LyR>Q]Y-Jj%9D!F>= PenP`=#>' );
define( 'NONCE_SALT',       'GI;ir5PNKl W=jd,)*xQ/bFPqI:pSL$p9d5&<~+ N)RMWUQYt,l5XX>KAy8#i<q7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
