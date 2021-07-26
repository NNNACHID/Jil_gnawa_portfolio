<?php

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_ADMIN', true);
}

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H+E?|7A[|gm0<w%ttkvsaMT<O~f!#r?N= JnL0IVXOG[H`o 3>jTu(5tZ;Ol3Yt4' );
define( 'SECURE_AUTH_KEY',  'RT^2]bwY*bW$WGc^5Mdu6wwH(7Y`kFRyjpphJ7W]Q_cmQ:>X#{_i2Lm_YdVEHtY|' );
define( 'LOGGED_IN_KEY',    'A64tw5UWW64ga4Q5uw]7ztN)IBc*8=.=q4[.g}_[n5nO>PNMbWi0uunalQqK?R{P' );
define( 'NONCE_KEY',        'RfO69 K#<j5j*BUxV(z,G06.L)@J)guF8)|>1V+,#;uO$jYKhkGVl}/_E%NCU8#A' );
define( 'AUTH_SALT',        'oUdj_Ah/IhfL8 @Y);|||+eJpw9u&XLE%GIS[Wa824Z(g~BOk^;M-tj1K&oSM) B' );
define( 'SECURE_AUTH_SALT', 'nQ=|Kkn)GJi!dtsi>tHKeJ`D,vgZR_N#7_;bo2#tZ`]?]qVbWz%gvj#W?ybBtX*d' );
define( 'LOGGED_IN_SALT',   '8.:<:lvjKgolfjT4ga=CE%n`jdH}n;*YUNfHjTz4_zSG>*H&F~gl24TDE[/K<{;d' );
define( 'NONCE_SALT',       'j2~i@C3U|R=]tgYfu)#)PPX/4~NmP0=w_PHT}^,>T&e[2j;)/jjnkjraY>,R!3&u' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
