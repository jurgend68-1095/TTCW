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
define( 'AUTH_KEY',          'xQI9[>we#on<q%%K<~Iq1bF9I(:7<l(JoV4x%F@Sd}j2{wnV#^ZhB35`PX!3k.ZI' );
define( 'SECURE_AUTH_KEY',   '7d/a;e,dZqEs-3v|2>~V^b,)@dMooEfxS5Vp`aQ4!sbLkO5:Z:R2%XMzvFzN&dYB' );
define( 'LOGGED_IN_KEY',     '2Ue2$B$2G:6$BN3IdPu5Ll$bNVkg%D{Gl::28/GWE&_s>:Sj+jwVja8( frSd|-/' );
define( 'NONCE_KEY',         ';TG&*u[d0sc[8P9|G$>,^FtfU z}t?.5?? R5O<8Fw:~WRZ,x@4(,!mgkxHCi$}E' );
define( 'AUTH_SALT',         'i#:0RcC`e$E:obEJR-z)-@f$-]u{MGkI|Q.-S|T{)?LeIfVWTlINZe}*n*Ti8G4/' );
define( 'SECURE_AUTH_SALT',  'sE!5H6ATfe.(m}>:jD$V~L7LbFBP{[lm4ImsE&MeH[{DmJM8o~^4$6LC?jR]}R[;' );
define( 'LOGGED_IN_SALT',    'n($6%4QgX7%Ut-Zd$9(,z!~<J(si!CU20Ye@mQO:9%}:W1w/A)ZUu)$J@2`5(mtV' );
define( 'NONCE_SALT',        '5GQa8C}B|#M,xGdk3ELQz{p@j^p8y)~=,Do VyWBp4D=P}L.Pm jS;BL%x4Sn$]d' );
define( 'WP_CACHE_KEY_SALT', 'i &:NR/Zp*<DMKhL*6=ZBw2cV:vdL/J[H/)}up9s6d9ls8h@Y<dsYFp+Ue|sGFG^' );


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

@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '1000M' );
@ini_set( 'max_execution_time', '0' );
@ini_set( 'max_input_time', '600' );
