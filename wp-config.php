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
define('DB_NAME', 'senonweb_wor5355');

/** MySQL database username */
define('DB_USER', 'senonweb_wor5355');

/** MySQL database password */
define('DB_PASSWORD', 'JT7798lErVZ9');

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
define('AUTH_KEY', 'Csz%LZ_Rg/n%sjbDFA|Spj/RHR=]U|j^lbvaMYkcLFC]WJHOfQ^FZs]lnPZ/;wEQ<n)|B=Q@qUv>+K&WNY_[HN&RO%[fLrw-QUwI+cPEgD<moTqr>KJlrhTVnPdojC^O');
define('SECURE_AUTH_KEY', '@d^;Fz/@J<Yf{Fhs>f_hXj!K^%JSeWI?EAiEVoA%w;]gn-?$=ztyDJ/MI>X-(-Pbul{gBBAGI<SK}%rKU<q;Yx;vSCCR&F[LPj+k[/t<k;{LMVFVapE%b(zFg;)KnOSi');
define('LOGGED_IN_KEY', 'p]SVX^>lcObGtFfhUojae(?=C?OTfr-FqMor@z)==LKr;epw|M@?/PE/dJ/?AzJEtgv*AuwFSx_EQig(L{xTg!D^+l-L-SQ[YO[$&]!tr]>F&(cZA-?trhs^*J(J^xwE');
define('NONCE_KEY', '$LOd/qdVfr<B{<*TQc+QEn+CIyw>o^@/>LYhCdkh@_HiywruB=b;SGs(!]SV=ga?rT](&ul^Rz(]XjukmuHDU-oaqbWdCYbyO@jHryCkUjqZwBqYdRjYd)UfRuGp[xza');
define('AUTH_SALT', 'xDjCqM(;YJjCxxY(jfbfN!cXGUSqyshWBGhZ*rOgANa<go*bZUDZoQN>/&^ufE(L^rCuKY|SJNpGnMPvx_LTYy|)kXhF?-pc*BsX!hG{viY?^zTnqO;$xFkWuO$rY*}s');
define('SECURE_AUTH_SALT', 'Rr[@f<PE?SGuk&fD>=TIuJSTB{hK;Dlz=lYB-GMNLeKICv([hes_]Ea=*(&S%Id?@|wYk-L)JX])TFCTo-bkQ]pq=&knoIaUw%+j=;/--%rTZ(KFGJdL>-=p]g>Ifyzb');
define('LOGGED_IN_SALT', 'xa}_fi^sg?Vygz^gdMbvk$R>&JwUPcpJuB=mtslzavPY{}KBQsfiEhvAa]sST[z$j;rEGktZaCeWorlR?ywRRNLKkNl{m}>!uP<)U|qot)h/NxfsVF_bhq];(ED)S_mM');
define('NONCE_SALT', 'eZLM=exus$%RPa+B^N*>wL?KNL|]lL^T=K/wykA>tVSDGZGg&SZKrN&_[S$ww(l]{J+QNBjznlnwFt}rV=l%AhZ&yrc{GthxZ$+xVY}ds?V{vkD_-tZYKpQ)|jikl{]<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tnoy_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
