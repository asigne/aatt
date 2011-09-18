<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpKevin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9kit[Ppf#;|uvWx.Q=i>N[1r~u}NVbfBa2]yUh|e//LWHhWP$4]d:-KnALE;I[p?');
define('SECURE_AUTH_KEY',  ';x7&1EY8EzwDJ4H-aYl|7qAPv^T>GJ`kpzF,OUbd ],5%zq5bBt<]n`EwK2umB+P');
define('LOGGED_IN_KEY',    ',;f~gtR$G]oCI9ca+B(u@c?fCpi0Y^|R^O7MfV3>G>{W%BTDWeE{$YyrqK/Wt;U)');
define('NONCE_KEY',        '7BX>NP3<4$}{6D(q{b1Nv;e^x)kxP$J~Lw49sIO&!z=,sXF##>THdb*N9mhDt{YE');
define('AUTH_SALT',        'rW_=/ngWecAlyF!|:#F5r7nS6F[FAaZlXiena&Ao}R$/.s?pe3Pk~pJd)@|.qgFB');
define('SECURE_AUTH_SALT', 'ja[BOo`U2gwq&H]-`vcX0{ao4cAhhrGd mVk93O21e !l]V)I|r2Mz~Jlm_U5<D(');
define('LOGGED_IN_SALT',   ';=PH^bQR60/W5D]k_WS};qrLKCskrOa|);vClf2Va E<Hsg>Y>`$f)meO?jn6D!r');
define('NONCE_SALT',       'bElK/E[o?bOS^/jV-Dk(tyQhGt(M)$,dU{BbgSEf.A3LI2zNl<c^>b.:N1%%^_g=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
