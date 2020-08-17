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
define( 'DB_NAME', 'all' );

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
define( 'AUTH_KEY',         'CxAPyr@oM(=OvRR}Ny* ]]:BM91;|9tn@a=,]Mb}Y!S,i`,wb0jW7DJ>xr|OTBLB' );
define( 'SECURE_AUTH_KEY',  '.H{-M Uvp8ojfZ}a8DbOL5*D8tYkxwU&m}PP7ePNQ2sXFU:SNU_F[J=a-xL&WEQF' );
define( 'LOGGED_IN_KEY',    'BO|RmBi#(V41@H7RjSeMvmGEO%~Gw!w`kxcU_VJ@at>k;#^/<W(O@<H%6a vpCFn' );
define( 'NONCE_KEY',        '}1wLl_Y9L1Y?Vt5T5/*/Tpe{oAo:i+I,A.jvXyZ4k~+BzzD4x5S%5#?&8$YWFHg9' );
define( 'AUTH_SALT',        'O<g/>MTAXx]jT4H50*xpOq-u?8`fd4CA?r4^7-&rY}pqAR~EISD?R}dC 56hJRJ!' );
define( 'SECURE_AUTH_SALT', '?.3;;B`c=Q}S)pC&X|K|d$1>K`=`KqMTi:+pw6Q&|lCt*90/bf%FJ>d@y.nZFdxF' );
define( 'LOGGED_IN_SALT',   'oJ6ut)+N&5-~uVu[GT =y2`QY5,nZ+0~UwmEHH9RK<uTo:?1XH*+fbL/A3GJ%;7@' );
define( 'NONCE_SALT',       '9&fH-_r#zD{Y.o?rbBz%avu(%;Xavx0z;gx<!ux~<}MgS.ECHqhllkvJ^I((1,</' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
