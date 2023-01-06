<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '(d.Zc^@UR!;)NSG>.G_^N{|1MRyufOyvGCwazJE]J6ZpU/rFQ[:K6R_i=S4}xS*$' );
define( 'SECURE_AUTH_KEY',  '+_)VksGtQz`!][8B~@N5O`rntEODd4 R=OV.Nhwsed-);@fKY+>TpOR|Wu7VQexe' );
define( 'LOGGED_IN_KEY',    '@PT1:w0Ud{`XHYRW9i$?ov_#;e?<.%2P4g_T57X~wWw9=qK M2Yj :LL^QL~0eQH' );
define( 'NONCE_KEY',        'i$03t}G.$?A1|?ecD`hZO}v[J.J+g20xgz{E0xgE2oWH$%TD:Z:l:CXFi_D|{6lS' );
define( 'AUTH_SALT',        '1<SX4<s62,TmM,QX0vSjwvexfhj}L~}LEK&j4k;4Dp]=E(E7?[`M-qWy+b++>$l!' );
define( 'SECURE_AUTH_SALT', 'jm]N^>_&HOyGOf/(izhtt;H~BDe.D?cs+dqwDXC8m}>ng@O u-[S/{|=Bh7!LFaL' );
define( 'LOGGED_IN_SALT',   'ox*_;3BS02.t8Cbd.`k9P4h/L/M$@pt37D(,rK7 ~1Vx6U4c%&Y%M&ia1Z[:!x~U' );
define( 'NONCE_SALT',       'yo!N)Tfy^n2lH!oV@$JAXqSyi&xzW]#-L.Ql@eH53a5iub,JLtI#YbPq+D7mHUxk' );

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
