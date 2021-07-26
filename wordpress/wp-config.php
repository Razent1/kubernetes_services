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
define( 'DB_USER', 'aashley' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aashley' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '.TJe9QP{|KetlZt{obg15wstZiP_3/d)V),|:-1 Sn^ i%eNy(!%x[j?qH%EOohr');
define('SECURE_AUTH_KEY',  '~fQ[d|$]|-[k:-b[1xBsSm+R4,nd-SG&i$zh>wq<1o#spi7!N4|b|6cB*eI.b<pw');
define('LOGGED_IN_KEY',    'v_7OR)&n,<bY%I5%gP4DL Rk3~S`?5voUYn[`A9dajj>5oy=N4ZF9sR$!tz9dAQp');
define('NONCE_KEY',        '<5=eA=5cK9=4g`r>7Kn=0|B{1gur+Z-@!6w$wjgY*D4g/EsRS}z?B7)+n7ZlH+k<');
define('AUTH_SALT',        'l>LR6!7<[e>xzJg<|Ii0{UP(4rNtf]QM/$Czz#}_.8Hg%6Jm~GS|?tVR_:)k1pFo');
define('SECURE_AUTH_SALT', 'S!b?hL|}G@vV2Q-RH3R*Vruj=Bd%5|jdk,.1w/O8d>eHFBD#/e:`yE8PEdFUl&Xj');
define('LOGGED_IN_SALT',   '%3pc:t5A:5TId5c>HZ1{6O6W?ymx1F2;P3FL9hbn}E2[n]i)QZfY&?vc((jw%AvY');
define('NONCE_SALT',       'pN-7IHMAS:=|2a^_G!}:x;nB=G9p;uh`9m/R0o8+MTg/o3-vK~CeyT}+u>PQPlyB');

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
