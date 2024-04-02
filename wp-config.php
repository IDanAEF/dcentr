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
define( 'DB_NAME', 'u2294390_default' );

/** Database username */
define( 'DB_USER', 'u2294390_default' );

/** Database password */
define( 'DB_PASSWORD', 'KdXi2MweRw8zQZ56' );

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
define( 'AUTH_KEY',         '/XIZW:g^[>f|r uZ&amjP+F_HT{QMk^}<56_A=C/Iw.[TH Tp6aa]Te;(?dm}w3m' );
define( 'SECURE_AUTH_KEY',  '@C}8g=m`iXGPBAOa}2ZoBjKR3m,`NGmr{5eW@d8*}`f];vyqj4d]{TU1aKqu7&B.' );
define( 'LOGGED_IN_KEY',    'GsYk;)o| cWT=QM&xH@.m5sTHz1mnc1d+3H<Z-&8x#82B+#,,t%q=6If78 z%uf!' );
define( 'NONCE_KEY',        'yD+bktf@Y/FUp}i;mM+h@ye:3T<)=Fuc(x;StRQn,>-1|.3<s|(AmxQY<Z;hR0?X' );
define( 'AUTH_SALT',        'x~q $V@&$:DUJaau$q;pN)Siuo*YS;viY(%hne(N,P&}po-51[pH&rt!l@-{p<MR' );
define( 'SECURE_AUTH_SALT', '-%:]Bl mZhjnT3/:5V|4p- >2b%gvI0NR}`XAdA)>l<po8Vrn1K0dUs7a8v3rMmJ' );
define( 'LOGGED_IN_SALT',   'vmR46eretWzT.`g_:uUr]~&VyG1$7DllE6HIt(1{PLdG?Z$ccnWJcs{mz`e3z4%H' );
define( 'NONCE_SALT',       '!@wh`nO:eS]/IixOz~lP>Ed9ck3|VH4gmP:jCf-5CQ:PDnN:M>=Lo4nC{!rc{~B]' );

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
