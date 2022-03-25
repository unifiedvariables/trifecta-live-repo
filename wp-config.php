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
define( 'DB_NAME', 'trifecy1_trifecta' );

/** MySQL database username */
define( 'DB_USER', 'trifecy1_trifect' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H7D83S6Ibvni' );

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
define( 'AUTH_KEY',         '+*]l67(=:@Ht8D&mOIB:HaYW!beq:pl{18A{<gA-o9eBM~TQ)w({rL$fj|)N#`]e' );
define( 'SECURE_AUTH_KEY',  '(yJPQUR+qh1Fu`zFysaWBSf-=W]68/p5i=JO2FzuD^((Bo, D0A8]Q^%S18U=^rt' );
define( 'LOGGED_IN_KEY',    'i5Mp|f~5LFiYLvXTUb;L,*Y+wl+iY2`DSR+3%uJNiW;0g)a*%Yc>z6yREla+s=1]' );
define( 'NONCE_KEY',        'NI?U%e6!nYRCiBX={p:awP0|Bt)k-2R}-L62goLbmuYv0waGUfLXhH^~=*>/Y8_<' );
define( 'AUTH_SALT',        'NMx` 6bn0lf/u{Y<OEPWT![T{:)?@4GWu7fTLD>GeI?15`$m-^^z-[Lct5s}O WL' );
define( 'SECURE_AUTH_SALT', '(29A7Xn(;eKxD4qZJEn4WWktmWc5atZXS)!V|P)Iypp9%m{0)*k(oKo9.hrNY94;' );
define( 'LOGGED_IN_SALT',   '~9b%MWgZKTXc>%ni]Q}G!r$}U!`r0fZahw{,/l<.}PIK +T4q,u^R$d[?[n&UmlE' );
define( 'NONCE_SALT',       'p}I[s]0`msT>t}p`&{~y)2AnOH7Fki5//<D3HrgM<lcbJe%AKXX>+Z=y!Xb?25o ' );

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
