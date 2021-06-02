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
define( 'DB_NAME', 'MVVM' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '51IJ9|o@#-)O6!l+xN$f;ts<D:[~q?P:xqvx=7PKea4WOd17}4=SY.RxHp8=+gc ' );
define( 'SECURE_AUTH_KEY',  'ocE:.uh}YpjF2]!$]O^I{T0d4G(Bplh$D; V,jyv~$%WdWLM[r/ ^ +ElUt`)t#h' );
define( 'LOGGED_IN_KEY',    'vVO#pD(x&TXY?n0ob=0nX[[dLDenEpzjIGBQKzv!vH&=:NXV K>,2iXxuVF+~~3@' );
define( 'NONCE_KEY',        'pKu>qFs%&K`Scc_^7LoRIrMqQs63S@i7_:qEZUR7^f1>M2Zp0CF%j0?zZO[EehP*' );
define( 'AUTH_SALT',        'UP`1~/Bb!}j[[NEV|.]+HDb$*/&cl@E7tX*m7.3@6#1=@h?_[#O2FbkzLwN:)]O$' );
define( 'SECURE_AUTH_SALT', '^Ew|,Y:r|2hO7fh<^a6$boF8$!`_}#u/P, 8aUjgA$ieafH?Tnw*[%VfqtVDcP.v' );
define( 'LOGGED_IN_SALT',   'z_dVP`n01Z~Y%[%b&2qS 3ucFtvZ5u(+{>~RSGtAu<X`&Ahy4|4,Oxe*[</nV^v=' );
define( 'NONCE_SALT',       '_VGagx)|bil?~h-0?2_3cTwhf2Bcc}qL> U2NuJbV{T*}|t N;n.J(n8|75u9+e ' );

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
