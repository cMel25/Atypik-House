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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vK`EIyQ5A<jBRLwL;2SdNW3_M0I*Dl`&lYt/]Z$#yGCFHJ|gFKo(i51L+[]SGXS&' );
define( 'SECURE_AUTH_KEY',  '+%ACCQM46mtt0PQ&0OT2]v|/!mQd%zgJ_1=p.Z%ip*+9+SN(m|qR-Zjy/}1+zI:%' );
define( 'LOGGED_IN_KEY',    'a;SBV.n;pJu;Mli8d>$%NP.MF4!|S^:G?f$F!UcYqTO%A`Fn.A9KaA~|kZI}88:~' );
define( 'NONCE_KEY',        'LQ.HNvpO:f<8Fq1~;jJJ;tB7h6Dv3kc56(LM_nnl|LUe{cru7YG$`hxruh#Jo+  ' );
define( 'AUTH_SALT',        '<k0U>D:ScGd?,PY4AjO/@<#pEMlrnR~6S[{`}hetBxn@JSG-&(#@#Bkz}^/x{9Nr' );
define( 'SECURE_AUTH_SALT', '$.eUZASy.Grh,icU.ZTuChiN&cq(p$0)|7gZoyr2dmL z|nW#<spY$/#]rIp;05H' );
define( 'LOGGED_IN_SALT',   '[No-@$:rP,qsmXNB15#UZFM]esJV#&R{)pa2Lf6MOBNQG<:LUTolZML2JjRZmjDt' );
define( 'NONCE_SALT',       ';jlWFzaLu?y>+>4 C6A=X|b o9I2f?ba9E*}@2n|=PR+R& by;h}*L,Fi~g)l$Lc' );
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
define( 'WP_POST_REVISIONS', 5 );
define( 'AUTOSAVE_INTERVAL', 300 );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );


