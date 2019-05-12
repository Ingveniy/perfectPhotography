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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'nbAOX3N[*r{-n|os8_Y0D^~{Hac;u^$X[`FX4Y(:um/1@h|%hkrPa|8)><Br}8)@' );
define( 'SECURE_AUTH_KEY',  'qekn1tlmEmH p Qg=ZxDzAmiDn1y8eIbh([Fv{V{CcFtP+5|u+{fXerCKZK&?<QV' );
define( 'LOGGED_IN_KEY',    'W|*.]$<o*x)(e: R{-004/LiJtL(HXpBk+=>73e=mk+Z7,%%_v%,4|![L@t$k>%1' );
define( 'NONCE_KEY',        'OkY^y6l#2{h`W[O;5OM}/z-Nk iYn}gJ<QA2XEZ1pWupPbF[j@R`2BJtEvc&ILY ' );
define( 'AUTH_SALT',        '~o#ic[2cEFaV`vSK-L:Hhv?C&Ly#?je3)A=Oqf5||FWgnl_5MzrWGAoaqWh`lD]B' );
define( 'SECURE_AUTH_SALT', 'MhFjBFUfjPhcQ%=K6->pxNu0k29_hdgSwvg-^@;A]6gXz6>]HS7LG_g[s~C1`c X' );
define( 'LOGGED_IN_SALT',   '-n6ZKTIT7}qo3qCd_G`|BEk8{S#9.^mIEoOU_|Br2MmeV$O<E:7B}5CFXU5|S<Ud' );
define( 'NONCE_SALT',       'G}l?>|wI<I0ZQ_mFHK(*acXk2Oa9@$m/>rtxW`J`geZT#K=!HExZSO2[GW})ZLeB' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
