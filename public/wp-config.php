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

define( 'DB_NAME', "wp_sumimoto" );


/** MySQL database username */

define( 'DB_USER', "dev_sumimoto" );


/** MySQL database password */

define( 'DB_PASSWORD', "123456" );


/** MySQL hostname */

define( 'DB_HOST', "lemp-mysql" );


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

define( 'AUTH_KEY',         '&Sp94!u{Od#M@]R9M4CLKn8op{#UQ^#OgKzwGhQap blXQU<=#|Bi:Shj -1.@=K' );

define( 'SECURE_AUTH_KEY',  '>=T!wZk?xfpn5INS~7U_AolA :CV7yvu1Ubgm2t!!b,%SFg+{6z}9.HIwo5xi Fy' );

define( 'LOGGED_IN_KEY',    'uk9S<XXEAK+t~|K#Et-!u=aY^.2qYWZ#eU<V0H.8YF8H~t:(+oEUJit[~h&0n_tW' );

define( 'NONCE_KEY',        'Jrk.=,p<S7Upe!WM[luJ3L@&123HHJFtbOH2e$E=OUa?GqG/giItJ?5JU 3?:*fV' );

define( 'AUTH_SALT',        ')49VY2_M3y8W>7b$G$TuxKWG~tJ8a[a=qnh N3pFhl538<{.Z&p@qVX4tC`/, 9Q' );

define( 'SECURE_AUTH_SALT', '^0$YP}(4^q/b>|.DG5>U$Pl2DxzD&uS |*{T^P!AF_^De#+]}E0o&P=8&,4ns}O9' );

define( 'LOGGED_IN_SALT',   'omjpWLK-ir%*F;IwS#UJ769R=oN!1dkowMad0T0%0U4uz&IM`}<f,7pAJkRx4vJd' );

define( 'NONCE_SALT',       'j>6nqdxF@is}%,zRMe&(l.qYEg.h&;ZXK!X&zcJd=Z K>3L4ZwjQ06_,>>3&1oD9' );


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

