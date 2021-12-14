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
define( 'DB_NAME', 'theme_wordpress' );

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
define( 'AUTH_KEY',         ',NjwX+fA4{SkMDRAs9!Z]z?&j<I}(R+Ts@cZ^P|(pYt:7LG*Gs[Zw)Ml1!cLh*Q0' );
define( 'SECURE_AUTH_KEY',  'qG vBx{(/&6>&M@+fg~pQVAY|p[IjJF*Iyf0sCG~/U<5%EM99g.)5a=v2gTH=@4[' );
define( 'LOGGED_IN_KEY',    '>r#|w|&qqyE?nrG7/$)*uAysB4_enPDTQ?XHfZ+A.|Li7IH(:{`<ea8!;6WqsPlQ' );
define( 'NONCE_KEY',        'R@ly`NsY R6hX(Wl3D0)$`>eN4a7vE[O%l98&f7~TQ^v]db/A.E>k?}/E/&`9^Rb' );
define( 'AUTH_SALT',        'A?)f`v^BDG&8O{,e2#@E:nr`=Cz-OYj XyMk36SVYP$p#{)YU`Fw<|t:*cd/$$MC' );
define( 'SECURE_AUTH_SALT', 'XK} qwmw,LKFE({OsfBcUZ+~F[fDt L;Iq0f7f4c.~XP8l`~eGPWd^R|&]xt#ZAq' );
define( 'LOGGED_IN_SALT',   '88eNeK.UfH:^VCmK9)Lp/5]&!)ef-z_*+?.g4`Vx:T~4_~p0d]??N_ReywSmUl-`' );
define( 'NONCE_SALT',       'g6;#kp9~ak Ik4:}=YOJSW;+aHeXx4tb~[HTxZTmQ26p[r:,XLAc}86ApiiXCNls' );
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
