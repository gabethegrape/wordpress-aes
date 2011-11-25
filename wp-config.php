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

// ** MySQL AES encryption Key ** //
define('SQLENC', 'TRUE');
define('SQLKEY', 'l8tSn6DLcq9AMW2VT0mBwPoCgu7F9HQS1XBVv58BEx7vpuLXTGaiq6R1t6Oaxtv4U5pacwKbRKWI2OOmgB0XWFpRppmaiDoiNJxtRWKPb6vT02hqyL1LmirqbOoTBhQoyG0U8spqtzJ216HgvIodTTFqzmGzZfCuNd7ZGWeTciVb8nSmyGicsx6iPf5athqbTHzn573GCscSlBnJyMo5xTT9Ozbiw63U4qsvTHxpxo20ZKK34oMlHa27EOxv6mMM');

// ** mcrypt database encryption setup ** //

define('CIPHER', 'rijndael-256');
define('CIPHERM', 'ctr'); 
define('EPASS', 'Mosnpkl0XzK6mh7zgasrvLO3lHolwCHldTOQgcChLVmXMtwaxBBodMTLZsMwLnaeC02QV7ayFnmnvUHBAlpJR7HxOXUbmN3ZZ5TdJKADgdpsPHZRfMiaELGQfaH0o3Agxvp69LqqrWScRekSuc2zoqK0U2cFuANQqp75dc33F1iFdGpghUNd5N64fhHRSdO94t5csZ2sMddrEx3PxM9ZbzltAo317XoCydC7TTAVnq7Z7v7LGLA1DQ3ThMCLFrw8');
define('ESALT', 'kywA1UfrMF1itATT8wep0ufqeDFTmS1CHLErU6ZLlCRGH8ZFHhIKe3lM97pbDTT5yIN3Ifq09TNWuazs8WeOoAfVTBxfv7ax12u7GKnkMMV81vU0hlraoi9miPUhfgLdlVxn02ouwsHKrM9TeuQpe4VpbgpHRTWCUWlIW0J8pGGJst6tZST4LNE1espfOaAaHDOr4DoMzqg2XuZ6ct6OCwlyZB4FEc1kGlsFFOQAUuL9AbAiE30HcdTaqpI0hQTl'); 
define('EPBALG', 'sha256'); //PBKDF2 hasing alg md5,sha,sha2,sha3
define('EPBI', '16426'); //PBKDF2 interation

/* 
Regarding modes, the consensus was to either use CBC or CTR and because CBC requires us to manually perform padding operations I chose CTR, which also has other upsides. Do not use CFB and just as with the cipher, you will do well by NOT switching to another mode. 
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'm~?-[@xs,`3+()YGC!?zBXj&*h)L|t.bEP_1Wo=r<EAZ+vRDPf7Kanhq@jew1 b5');
define('SECURE_AUTH_KEY',  'AoJ@qnfTlCY><AlM_K%R7rXBwa}p8Gxph~3D0<vu6rKe7/V<5,i+SZIh-_dHS`+q');
define('LOGGED_IN_KEY',    'k4Rma8Cs[3qLu 8c 3[g=*0f`5kn}b/SG:v7()M4qV^E@0o=n0vI$Sa@f[F/ek(s');
define('NONCE_KEY',        'JBT.qoq<7yu7BMf1alU(T^&~MPWyhspw!L%(/n xZqw.bBt)#vYaT=WO3E<]fCsr');
define('AUTH_SALT',        'g}94e)GPgN#^7h1>3jrudm/v-fKXl|qD]>D6m A+!{W/[2)!Hm wyVm/MJz1uS,>');
define('SECURE_AUTH_SALT', 'nHov!Q+NzA]9wC4iY*-8Yo8i4G4d<F!~8[Uh6&wG!nDNM&ws )iz$Dk+R??c-t=x');
define('LOGGED_IN_SALT',   'ism!ayOd*jJz-f(>-w?~63oXS^BIFn@Z~r}T.r|N UOvJ=i$Ra#pyZ3g#3]ONEsh');
define('NONCE_SALT',       '|R^^,Us?&o3Qry59HN@x@dPm#wT7ME=]C3{Y+Kh%eBKtg7&UgAa)Xo9{(6}<tr&~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
