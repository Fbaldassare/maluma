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
define('DB_NAME', 'malumababy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&clUV|IiTYElh0V|~&NJ<:t!O v.iZ+Elt 01FfV<R,nF*I+U,~YVr=x+iFazi/=');
define('SECURE_AUTH_KEY',  'C+F+9`?&P`XL1yR$U`X0j(8^|B?<Dx2FX%iY?YfDtEva@f66c RT[;nE1?@#Lg[<');
define('LOGGED_IN_KEY',    'nMiJItI)Wy504yo9}?;+uQK.o)4m{uyGG<%5wv(*~jbCa$a9G>~3X=xwYQh~w}1w');
define('NONCE_KEY',        'XrX.O3_Jx)8-$Di8j$R}*!ZknP4!1;m*?g|uw]9nj,OOFgY=vX{I#b:EzKWTT5^W');
define('AUTH_SALT',        '%45D6Z=f}`mZ?w 7~6X|yFA3JM`PB,L&;/Ou:>+RoC(!Z>OnYh/A(HG>~=JZju+0');
define('SECURE_AUTH_SALT', 'Rq3lhE()$.qZZG(3Y((3:VO6Wqw#>]@c0;v,HRqF#Z9(xe8gh>q Ae263+n_$8g|');
define('LOGGED_IN_SALT',   '*&aeDu%QZtwxrX3kF}%3.19K3BP6D8p6E}h8<`<;g#Y4qw^(;:p dY=ip<<i@Plx');
define('NONCE_SALT',       'ai]CevKE58z@iXXVX;2_wt[:(fZ|op8KKow=8jPgG#RY(y9!Qtt;S/6Vwoa[/9Q$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
