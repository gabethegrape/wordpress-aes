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
define('SQLKEY', 'Rp4VOB3rnFQmx8Rp9Uh6i6guOLy7ZetovDCPovEdL2usqBDAW49CSTZOuintihMWe427vsyA8wz7TiEBfraA8vnpWy4JyAKzkzuLrFUS6W1TkxZpVaQT5y8LPwn3QbEn4eT6Lp6B2CWmvc4weZCxGIQt2d3PklQxRVqy2vLkvaE3C4oB9shq8UMyNMSBN0DZsePeznTlhQ5Z1AxDRvTkouXh2yuO38JTF4vdRCUe8Rf5GthFZKhcOvs5xcafPQWo');

// ** mcrypt database encryption setup ** //

define('CIPHER', 'rijndael-256');
define('CIPHERM', 'ctr'); 
define('EPASS', 'BOrKEOn3rPfIOq6Q0CNBGqndn22LrtC9OKRU9UK5cq69EvtJzDVdKuA9IW5hXIVTV3bL85lb0ZyKrx8wK5NdXfe3dRZuqpcJ1WgD2U5kLtR8HBDZiqMuTy4LFkstJlztqcNoVupiWduWdmfyBrxFt6gNZKMOMsNNWmQVMPFAOqqBskmCq6rThW6cDEsbLv1bbuOrzKnSMLvoO3H0ylTV4sImCvW87Qzr6cgG8toOQtPhL2VC9zZoF5zxTwfEahru');
define('ESALT', 'Vfw5ztV5FHodo0ZQmzFuLwBJok68t6eSqXTqNyD8bwdpLFu5mJ3PHg6mfsesKWyiwRDhGom47ZeHx24ccNU3o6C6iFq83GLDAUeHblJw1GBQ47mxWJf30aU9BqvTZxwwE6FcDfCJUTirqL9BxzFqqiFRiU9otrTdIesTC0FMz8sPoWFeKKZp6uhwW4D1VNLTITkiJ5BKwONWecu42qDdUKF2Tn2x4t1rb0QHqoN7cVZmK7e0dQXO6EiwoslbtdhU'); 
define('EPBALG', 'sha256'); //PBKDF2 hasing alg md5,sha,sha2,sha3
define('EPBI', '17111'); //PBKDF2 interation

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
define('AUTH_KEY',         '=F*&YN%;P`{s6{s+ic$D>}EM*_+c:ur1_41a18;?W/laSYa;RW3HaVpg8?Qtn#Sf');
define('SECURE_AUTH_KEY',  '5TTl9urU-YjKsdeIBgcza pd{||!v,+{T?nUn-3xWSvz-e14CzAqYp;-xJ~c,qp~');
define('LOGGED_IN_KEY',    'HN{cO@+6b.d@F2?^jL{zqh+-nQ4ILl 38?Z0Q}_4Y/X4l?){}q+ezxY1P8y&ZXc,');
define('NONCE_KEY',        '@aBQ9kEwv!Y-uA=T~DeDD (]0qqtwF5--7J5q_Fo//]-MGn-*8vGiMcJ7$GP~:CT');
define('AUTH_SALT',        'e}Gqnxz{Wk04_Z3i}f)a-:O=oH!8)UD4Q^x(uR:<+3FYm>+BjOh1-f#-C(FoI-x$');
define('SECURE_AUTH_SALT', 'Od`U/#M2|^8HO/bWFs<a}S&=6#s,v?3BR?e<QT^L+t^ ~n|`dtj%Fh}SN<|0+.>$');
define('LOGGED_IN_SALT',   'F.|>oC_Re#$/V#4_B[~URu{1?!#8(/SF?1N%]%C/-B g3-}|,)0D-r+Nl{}=t1s@');
define('NONCE_SALT',       'w8dHZpMc*Haj-ec[!y9w,-A,tzA/`Qw>gqD^U>P3A]4Vxkjj_P_Kewn&PF:m6#(c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp17_';

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
