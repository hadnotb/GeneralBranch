<?php
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
define( 'DB_NAME', 'wp_cinemania_coulisse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'alphabet' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'v$Ghpc&`ZT5Q]%v`kiT_2/Lg2w*l*&+=Ba){QW[{50<dLP[0T]G;T.<fg)|nwC+}' );
define( 'SECURE_AUTH_KEY',  'AxNM(8,V*lf14XFT?U*E%^E2}0~r*9mZtd+S{%~1gKT|HPPBDjj[{icH)wo.$U:x' );
define( 'LOGGED_IN_KEY',    'pwrIeCHee&thbNLM4UGE`VIt4[8?bRGyCpNeMh1_LK%{(G,6dBl9:rB,b%^^2Ku:' );
define( 'NONCE_KEY',        '4q5tG)a?:+SwB(wg;HpC|DZrSd:t{d>04>1E>)kvh##eKwTcwDh`>[I l)#-)b*G' );
define( 'AUTH_SALT',        ')4E/2~[^S:XC1l<wdi;uQ&Rw%Gf`fCUz,5fS_pT/|:~^>aqrIl7wu=/Mv#5}4q1e' );
define( 'SECURE_AUTH_SALT', '^TJa UFN}BN8$<=Y`*H`u|^|x~GeXr80DgROwXH:weIn%&j1URD.m2a&fIXs-viK' );
define( 'LOGGED_IN_SALT',   'Hy8oO#DQfl{WAO97tL[W8RIBN*G+jL}Ud4URhD,!PQuazU*][hDXFV6>J7.MP*&#' );
define( 'NONCE_SALT',       '%;D=yF(e.:/qGg7Iy}7ff/r|{-Mn,W_65b0zaW/`y{`,s@+(S5NW3W|)=.NafDLg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ha_';

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
