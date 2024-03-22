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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'd({)~+=B.Y46^>d3H/4c}tKGx_s@m499n%i&q: Uuqw85&/|$JXr50g%b#3C_)Wj' );
define( 'SECURE_AUTH_KEY',  'J{U?dXFB4]ej}a9KNF:@QOc3# bce$l}CA`3-}9DeJ-bJN`67I`!5~4,%$OQL*AZ' );
define( 'LOGGED_IN_KEY',    'p2F;Me~l6,/`?fDxCx[TBSE@-G^5NE~h)Vc[Dr-E4eN1/XdPXP=DIO`SPlM*N,DX' );
define( 'NONCE_KEY',        '97;..NH6`DH6}eyH2J3OO8YK%J{.anvpNfwy,=(Lg+#n4[=gPWbZ$L+wsEmmz-w/' );
define( 'AUTH_SALT',        'P{rd1Q:9I^~vwg5gu+494+a%@YW2l~d[=0=5S4Z0eb[5he$1.YgJ$2WZk.h/D,+5' );
define( 'SECURE_AUTH_SALT', ']5DjS/CMWc!}kx+5W`p0:1X8X8OpQp%k>k+<f<fg_WN6,VC0v| upjy$)6nZpj)E' );
define( 'LOGGED_IN_SALT',   'CrC_oA;J]d#`;D;g$~DL3LG$wGQ;Daq:XR!i,PFieYk&n!-XzFMGeid58,2A(R;Q' );
define( 'NONCE_SALT',       'zZDa|zQgGTBlAg~GlEg8I8,[{5Y~z,xXo`XK&l0)(=Q>1c5:J&}Zej&(mS::9_5y' );

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
