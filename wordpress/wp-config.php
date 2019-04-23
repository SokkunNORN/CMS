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
define( 'DB_NAME', 'cms_advance' );

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
define( 'AUTH_KEY',         'ulxe2bh@~.~W~RCD_[!aQ#S%p9}y<UDrVtZ`OPIC4^yJG4I-R[@`Wtcvc0MfcO2H' );
define( 'SECURE_AUTH_KEY',  'qw*+Wsoee*V=A]hBVAS`^ylRSu,}zNVV~_A:~IWK?lwEkI*rPFo3/N#kqH{G6)f^' );
define( 'LOGGED_IN_KEY',    'V+9m-nvH(Gw+@Z/% =2@510HJ^hdmgoX)$#,n50~HgoB_7%-K*5{rZ/N>@D%4j)a' );
define( 'NONCE_KEY',        'QM^v`{X+xZ_C~2x]Y=*rPR`fgcF}nvKaeKa5FH B%FulF|Y~<n7%}+o+r_8#COST' );
define( 'AUTH_SALT',        'j$-U_2^lUe Kq2e-{_1|.uQMx.0WwU_zjtq@!| E9EOi7_A9ZPOAvTa7u-<K[:AP' );
define( 'SECURE_AUTH_SALT', '{d@(HkEk Y9=uVX}}<Yka>c)Q$+:Rz8XT`I?ck$UBu~Z(au0!^H|gJ|oI?7=b&:.' );
define( 'LOGGED_IN_SALT',   '7sQQK3B3f,7:T8XNlkg}vSV)A=GARfn<=S!UFIOM+Q/[xD{K;@fBe,z@9N3Ts4f_' );
define( 'NONCE_SALT',       '?J4y<#oe1[+Z=[ <7@<)^ES!gu [1Uk])TxpwHAr&3IZ1,usEXqbpVFvQ|,HdGbl' );

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
