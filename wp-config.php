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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'bVbg/j(J9_a/dJ!/Qi_+8z!Pnhr5L*Pw0q?(7-^p|t~sY;hkhRRsp$1nt[J/+)v5' );
define( 'SECURE_AUTH_KEY',   'X`Ak]Y|0@[#Zq[Qpd0T~3dO[?Cg|s7E)LpQzP>?YPu,f{H[kx+|vi-*+v KfcCbx' );
define( 'LOGGED_IN_KEY',     'oa7)qn<J.ib%aO!}@ RJR-q0Mn%C2&vgjV;y8zL#aU=$8g-=bFBzQbXD.0LPg=1W' );
define( 'NONCE_KEY',         'k5bpxy0V6F0(OZxu7Opd>vL!rq<xG42xF;KafP=Y**g2n+C-*Y&h)tg,#=VgO8pc' );
define( 'AUTH_SALT',         'w=AbAOap_?L9*0%vR73E8PO<f+o9fY?5ctm2<P,euCMJHN>m3:jkI3Qz:,T?[vak' );
define( 'SECURE_AUTH_SALT',  'sJqxl4MawK6APOch/g_P6moP]Z>N?F,e F`.)dYKGi8chMwC3yRP:d*79*#ZBtEr' );
define( 'LOGGED_IN_SALT',    '=^:#pEme)=90KtRyw&aV g<67f?=*#x_fqv`pIViV$1@2hUjrfRZau!]7sc;}`(O' );
define( 'NONCE_SALT',        '{>bBX[iKWADTt0)vQ^y}]!g!IbMi6y&/5Ow1w6%l;npz-dXkbE)S7T [bdut4JZ/' );
define( 'WP_CACHE_KEY_SALT', 'A}4Vu7(5iI-AoGh>)St@S9{A#9,>We2^nqsQ4HI:j:G?f zst~7eYpy}Kmrn|dBw' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
