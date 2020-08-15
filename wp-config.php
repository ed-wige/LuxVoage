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
define( 'DB_NAME', 'voyage' );

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
define( 'AUTH_KEY',         'H)SoM/^w^f^ces5T.O5;y=`BuF&(lmBmjv.3usTu4=m=rz/x$$i-Lth8^`:.i[8L' );
define( 'SECURE_AUTH_KEY',  'g1~J7>ivRd4Vha0Bl+f_ifYf!t n]GQH(8Z0:s|up%YCO1(OKjf$4D_}XQant:d/' );
define( 'LOGGED_IN_KEY',    '.@pKu5:/9i[zkvu&fM&Oy_^>+8UJZJ`VUg:fW#~!@XVFDv6-jY#U`kTb$d,b*)qt' );
define( 'NONCE_KEY',        '-?Y20%O]l1X);z&RQ;SV!Nl>?}K`<1PPJpN3VZL-6`tbB=%Z :>EEXn_<Vx&a[0&' );
define( 'AUTH_SALT',        'U,P0S@b[kxk>A+?oS1u6rc|xof$I2AGXHdH)Sa;n*<gTYw,]Wt|kWRKjo`4A!C]`' );
define( 'SECURE_AUTH_SALT', '&YVPs BoD$`BTT.pgdyA7W|n~U onmX#dW:8p).IQ9{lT]C3b7as;{&6tk_R.h.o' );
define( 'LOGGED_IN_SALT',   'i:Be:1:;hbg-4%h>d._@`fML]:XKb@V_|M?k%P)FBXLC*pg4<_1Pa:Iye3F$oFfw' );
define( 'NONCE_SALT',       '8QG9#,8Ie~xj9~H.5.H+o)YcNKiQR~;Hi`+0;ZPqltO_LhDE}j*.~_@#:&[vS~iX' );
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
