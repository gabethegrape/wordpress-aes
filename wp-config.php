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
define('SQLKEY', '7pp3XeLESBCe89FuXT9hhbsxTRS6C3WmBXCxD3MfngOn35az70lPSW1yGtvSGd4KCnZZe0TDVETGyDvP5B960sTy9p7xOCnPx2T2dmxN7aOLR6xGPRtT0BvEOqzQtMQeEEvW0luzir7TdThKBtAeXGGToCsZeyk8fKGTsbpUS71rwPWUZ3llLFVDEW3F3OrcmBFzxbSN4HV9segA0qHBG7mKKpXAqzpPHVTb9A1tsDx7KL0Aeec7yTPwTeAgcrP');

// ** mcrypt database encryption setup ** //

define('CIPHER', 'rijndael-256');
define('CIPHERM', 'ctr'); 
define('EPASS', '7hHrCQkT2o9sAytik9she0PeVUmg3GyEuGCV8ysFowCGgq3poUUQ7zmKCIhWilLxqpXuoRZ1g0LMbNVMTI5ra6ZlSXqRzHbxeKD8GgssKMSS5XIECCzlqoo9s9eTuQm4aJ4XCZbkW6i7TEu00cgIGqH1HiCgNoGiXoRZ53euTTGV3zHFefZyJVwy82rrbrBCXJyshZ81ISwAXsGqgPms14Dd5oI3dqpANGbZof15dkTqugJkMCP7mXr3pfmHJAS');
define('ESALT', 'aWT0z0q2wmoAdkMJtfX3dWdq0EZXtPzNhJ2zN2cfrlKiSmelRdvG4w6Wwf8izwtAOLOQ3EzZNwqxdH3A7p3gz52DodT9Ms1Ah7fGm7w7TdbOsuvfzAM9RFnoRbHkQ0OJgzGnGQMDxEmvLa21M0e5bvplz4ztU2O9RLcG9J9Q0GiCCu6dyL3FmE2Lg0OHN1Z6RyLfwkXK8ynd6To4PQFbTQC2rMIr8zlz7kZoTCo1I14WB5tZtVwZPkiI91e33lF'); 
define('EPBALG', 'sha256'); //PBKDF2 hasing alg md5,sha,sha2,sha3
define('EPBI', '20000'); //PBKDF2 interation

/* 
Regarding modes, the consensus was to either use CBC or CTR and because CBC requires us to manually perform padding operations I chose CTR, which also has other upsides. Do not use CFB and just as with the cipher, you will do well by NOT switching to another mode. 
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aes');

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
define('AUTH_KEY',         'ELu1-_b~1FD[^n5h*2zIM-17&O`ITaiR^AY8mToo&[5&hhAAu?S|4hOHz950M1(G');
define('SECURE_AUTH_KEY',  'C#zb8ZB/|W+X{`S ,NL]so;w-9PDhelc`.%<)ir8+nOIEHuL9U]poesf+:-C9Bbz');
define('LOGGED_IN_KEY',    '|JA|SDMbUx20G<HdJF4F.R`[Um{H+!FZ,%]vf} [5aM`ht,BX/6}0g2-fPMtg*x7');
define('NONCE_KEY',        'yHG<{Y4n3vCKlN9|3!q6w{Fa#dJ9s}$rv8x+|G{zXpat6m+gtk*|_71=v=/aJMd9');
define('AUTH_SALT',        '}J+Fwj]% AM[yR6#V,wG2x;p.ql,/S6L!!zIaxacq1gfwcpuO-HwI+cq/1C9xc&9');
define('SECURE_AUTH_SALT', 'G64uu&2{w5wC~sqLmvHdu%b<5@/Gjm}4f.~!bu.*xg4A,KCtqm+|>iflCsM@:om]');
define('LOGGED_IN_SALT',   'p$#RFtJ(_`M?It3^B#eVu1$hGR7zIw3>O,:q#EF%L8GY_=dXhc6$Li}vc_/yPXLc');
define('NONCE_SALT',       'uYHm>OQwHd3f(8+Ck&g4pg9q:lh~P+E!k>zLpj:y,8oVb $ Gn]sk!<b,Jd,=}qj');

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
