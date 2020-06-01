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
define( 'DB_NAME', 'wptesting_db' );

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
define( 'AUTH_KEY',         '_it3*JB-]O6V*X^Jc$LYSmc&f8wK<W6P~n3=AG$i~5i6M}i=BVx,@|7c+&=HhFE;' );
define( 'SECURE_AUTH_KEY',  'vsiy!<a>[$aUm[$k]{l%*sZUH^<J4%:}a78,jx:5O!X;KC#c,]qaq@~?,,}9#i^T' );
define( 'LOGGED_IN_KEY',    'veD#kw+Zv4zqdtS0<?.+b,:n(A3?E*8|k$xWInb*T4-[.GCo$f@fCI7LsZf^B<kZ' );
define( 'NONCE_KEY',        's%SLeYPpa_^LsN(]OZljs,aqC&[.gl^6{D{FF /_L atFw&s_t?JGD8euydeK#z)' );
define( 'AUTH_SALT',        'Y|iJO$?>(t2v%|zM|9?;s>kzl8H+pQiD]imqvLNC-1VJ#r+#~},u0JW 2NGGyVlG' );
define( 'SECURE_AUTH_SALT', 'h)uS/1BoGvdox>^,2MlpcSF G4krU@vVz/ru}qfStEiV[sbDqGoLUz<}V$_A2HBg' );
define( 'LOGGED_IN_SALT',   'vatnc2$@AOm@SdH9B!`|WWkxL[MeeT7V`n@r<=GSGmY:CV/YG8=}<ul-?xJgl8(-' );
define( 'NONCE_SALT',       'J;;1#:Do+xNh,4N#Gi>|WRe&v-[esqSE*EzdybS<IH/5b_`5pRn(k53&e?zv]J%#' );

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
