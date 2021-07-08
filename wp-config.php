<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u813082887_Test' );

/** MySQL database username */
define( 'DB_USER', 'u813082887_Test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Test@1234' );

/** MySQL hostname */
define( 'DB_HOST', '185.28.21.20' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '< 4<CY:Nh<Tw||Ez6y}q>v2!tRj,Jw&JksfX_FZ.~WU[W~ @r?ebJ-0IS6tV{Eu1' );
define( 'SECURE_AUTH_KEY',   'W{}Poo-<U`jes&aSy[vLg{#[#<7U;mnaKd$ZP],g[@x?WxWT2;oquIP@]Djr31Hd' );
define( 'LOGGED_IN_KEY',     'vP89Av^6XLNjCO!Pl&JY;57;;_%otCvw3yO-KD9],;ibv%]+-W5k*U(fyr{)3rW]' );
define( 'NONCE_KEY',         '?DV()m:T!ZSC$tT+tKiF;Lt+-UP@rJCn*o=j)P;b9@A:P3l1L691`Ov,GZxd??>R' );
define( 'AUTH_SALT',         'bct`(eWa>b!^%5y7G*{d;%JpWi6Dd.aBK{ks}>$d)Soe]7TD6=<3W7 dPc(&_t|a' );
define( 'SECURE_AUTH_SALT',  '6L5Ie=Cr0~yfj-Y?0Q;K{(Z,Sr$^W8ZtPHv na$$6f:|EmDxhiY^A#|(&zhuC6d{' );
define( 'LOGGED_IN_SALT',    'QI[|CU(gUyXET!-XCv|[:p:eM~57>%tOHP7=3`yZmHIi%:G$gT$LVzS>qUKELF.i' );
define( 'NONCE_SALT',        'SwZtEaO .*%a%u`h+?fXNLoyi`0{jM/+k5)-MIV^z*vBq<Bg=8!eC=Kq3A#sV9n=' );
define( 'WP_CACHE_KEY_SALT', 'mA~Z#wTrZ:]aNN>OuBP@V:(yB>l#Z#L7$_=yaSous2Hq},[k3K?4^>+K|dt^!VtS' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
