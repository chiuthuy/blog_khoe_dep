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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'chiuthuy@98' );

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
define( 'AUTH_KEY',         'KuXctdyr.Z3#rl#[!jtWszDu+ts7oV^g~au5? 4$&eOX5_+o9yZ}%{XHl<ltt4_*' );
define( 'SECURE_AUTH_KEY',  'yu/j{8^g{`QQfwrbMjJAtZdsroE(t)rcyqZlD}oK+w|ha^;c8M9oug{{6T9*#D6[' );
define( 'LOGGED_IN_KEY',    '8f5W{~+reo2TOhOXk[xX#zGrTyyM}W]Zx|bSmKYaC%~sND3(DntjP(BqsytLh2F1' );
define( 'NONCE_KEY',        'G@}}965R3lv/y}g.w?5xP{opLS8s/P{9#TBu<uhG`{931G8=1_WJN]`PPB1T%fth' );
define( 'AUTH_SALT',        'xt:l+!8bSEC.60jDDRF;+fSyuO>wQVg3,GfcD.H4 zwXn`ain#=eGTq4B-v?>-~c' );
define( 'SECURE_AUTH_SALT', 'yTaNq[E9%<8z~?5hvyKVJ57&lePL[VCb}LiVF*FD%}Y&pH&Of1Olqazn:>+v</}D' );
define( 'LOGGED_IN_SALT',   '(v-R $3m;1%l^texFwMWi_4XogJvl#psY&]#x[S6p7+a|;ip!~6sAj03Pqxmq450' );
define( 'NONCE_SALT',       'PH/^{bJ$6c=/.#Ytdw539#+Q^HcTj,/i$mvEd#K60rceZ@1>yC;^[YE*(GPzhj6q' );

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
