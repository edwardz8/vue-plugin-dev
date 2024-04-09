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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ornlvueplugindev_db' );

/** Database username */
define( 'DB_USER', 'wp_ornlvueplugindev_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_ornlvueplugindev_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'G* UgwIBR]PANKpOa[OZ.]Qsxv6XS2<}jA(:Hpd~Y-h>i-r <`-~jNCbRs6}515s' );
define( 'SECURE_AUTH_KEY',   ')a(<rhjHIUXO.$T`7BHKmq[,(dNY!N|M)qf|P5)(#G(=rW7T~Iyo p&*>G1{NV^(' );
define( 'LOGGED_IN_KEY',     'S| S?Br4`.`3*wGwx&4bgf(uyk$`6S}M@pzbSF6h[zSb-w&YPm;g5r$q`X5~B4m8' );
define( 'NONCE_KEY',         'E#qzgi;CL9-at@c~QO%TN?(oawVS{DIFx|:^3qW&1x.raT`v$Ph9K`jY9cnrIbt<' );
define( 'AUTH_SALT',         '(*djSr&tYHd2[/1A<#V>I`RoZ}k p(,2]jNJVu8G/e#!o,}7>8dLeT:n3iA(iI/v' );
define( 'SECURE_AUTH_SALT',  'H*rkZ$.#`:+* VRO[=A<=m(+k)Xmr,Ql5j%V3}>$lIKY@{J.1y.+-&v2|=%WOU_E' );
define( 'LOGGED_IN_SALT',    'niLY~hm!#DR/-Bgw)jbJ8;<xF^kD@U[gcr{ pv~gydq$$MPTd7%Nq4:to8RVXsJV' );
define( 'NONCE_SALT',        '(RWgezvp`s~R-)o*YuzaZX>5l15l&,xx2 u=HZ=$Q_Vb7*Sa.w8HHM^ik!7$uTA|' );
define( 'WP_CACHE_KEY_SALT', '=^}~h8qe[Ustl=JoSU*b0;z^c[xS|[:b31$>T@aF!KWe)iA(%m@-[o!iV ZnUZ}a' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
