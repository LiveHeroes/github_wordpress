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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2Y]^id]BFQ.TEO,^B2+FyXx1IGqm%OosP#+ew)Y6`5Y6 ;bH=$ZkJ}20ZN9~sfZp' );
define( 'SECURE_AUTH_KEY',  '%2ErbuKQD{6I%6cSOf9KV_JfOjZ7xe{(*TOp$w[Yz*7$y!9@oW@8q ?:72QK-&F6' );
define( 'LOGGED_IN_KEY',    '3%xuv,XdMn !lTOm(d<^4UaLW;qR^})}xGViy#pi6NRl[,z^!:b_~W/uN1mvYbTo' );
define( 'NONCE_KEY',        'L||TqGq`GgC#GGS3l3Q$F67m+VGm/.B]u;>*t;31h<bd$sceNv&9^&7(-3}vuX6)' );
define( 'AUTH_SALT',        '^Z~+F;dLPKeE.>cJnc_q#B&voChL~iQXYQkM~)icnC5(i`]=|?amEyzbFR?5Yhqe' );
define( 'SECURE_AUTH_SALT', 'v?IX0^)GSm8(W!681wmRALXSXIq]2{E35%csb?`_(B7bydUgJ^1L+ImsjlflQS<]' );
define( 'LOGGED_IN_SALT',   '!`y$2|CZp&c%(>r+sF{Lzb_9m_Pgirfj]o:7>1Wb*`,3usN3R7Nx!8e^p8{bKT.h' );
define( 'NONCE_SALT',       '[ &v;^y !R4_kMF2]?KP7_5 ?[lSxGRBi1EK:180%wmpE`u#V@ qT;{DD^^A+`}b' );
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
