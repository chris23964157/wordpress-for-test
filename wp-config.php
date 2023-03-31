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
define( 'DB_NAME', "techchris_db" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '{}OyJbYjrP3{~E,wJ)FYN.KwSLxC]n7w&U3{0DJ}JQ@8&C+>`q.[LhwW3y.-6I~i' );
define( 'SECURE_AUTH_KEY',  'o>&le<1T{O<NkxMb`}7..gJ6~DE(aYt=nPMoUS}AW{WQtS]p&5B Nyo%I& =q=Yv' );
define( 'LOGGED_IN_KEY',    'C(jQ.kGt6oOzP5<yGrCpcIoq&.m#YFD}t-z7}x~4J3.Yad$[/rvB+_@qZJYKOfp`' );
define( 'NONCE_KEY',        'x_A5|0ZKyX<ck/@Q|6U<&,Wg&$dBmi8y@lu.agV%O@P_i+2<@dC3<s8dvhQ7(n>6' );
define( 'AUTH_SALT',        'ogCz^1RdokF*SqPfBTc%V`<RonMw&Cy|LwAsIf4CHq;yrq#Si:;p(M8TfY&GM-Mv' );
define( 'SECURE_AUTH_SALT', '(s==U4,:X&|.bx 7wwR:cO}oQz:3Mh+|nT#(S;n-j:Xk0.BA.xaT=16NT`4BOWmi' );
define( 'LOGGED_IN_SALT',   'WbR,`L:sOpD]0B=dD.98`G6~${jvfwlgJV<%i.,dF+{7i`WdJRl{#39wTch)b@-B' );
define( 'NONCE_SALT',       ']HukCp+n>U^BWbl@n%DydiZZhMnt$6)uHEW|U98x|rQk-qoE*B}kE3TIco%K}oBp' );

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



define( 'WP_SITEURL', 'http://localhost/wordpress-for-test/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
