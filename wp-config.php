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
define( 'DB_NAME', 'woolmart.dkddev.com' );

/** MySQL database username */
define( 'DB_USER', 'woolmart' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wRhb9E4gBts6Ejeq' );

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
define( 'AUTH_KEY',         '!hFa&j)iwtequjhJ:p6Y${hQcEU~MEz&we&a)ccD})S56vDKQ0kOg2<~I1-|`Ddg' );
define( 'SECURE_AUTH_KEY',  'd[y^0wKjE+4l^KpRva&}[.*TH[3uIDm8^t9^p@j8Njy(l8KF+FbpucmuiB%g$[%m' );
define( 'LOGGED_IN_KEY',    'J)kPTAil~XR{IykH]3o0Lonc].F+4/.yDs#TlFa>4!c=fO|=1B+T]K9fo$.zK|Dw' );
define( 'NONCE_KEY',        '{w9_ZL[5;iB:haH]x`U_$z{O8R:tglg[&c(Z[1*ssh.;8fG}POdHs0v[_HUmqbnB' );
define( 'AUTH_SALT',        's*TL|E9xmcAA/uFt{8Ggt)<l{&aq(l~|6!<3GW~0X#%PU(Gb(Mj!-Vf!dx;@~iPg' );
define( 'SECURE_AUTH_SALT', 'puue6IZVe@eRdvh$<)-%bBTI]OqsX6m-dvhF=~g2~C%ZY_)Ayd%:9Y!0E[U(4&8x' );
define( 'LOGGED_IN_SALT',   'kho@A}5$S`v#jV[-fXc%&DF%Ad9FRL<( p-Vx#:q%^2Q2?fO#O8h5v)u+c`uMisv' );
define( 'NONCE_SALT',       '[W B2w;C8xjC^+I6s$V`)SPPfmk-<NB$_cU@G Zt%6;F.%<fG%cI=@7[qx*XUV`3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wool_';

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
