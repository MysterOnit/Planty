<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'cr^Yq[:&i%;}BD WA##A=C^,qrNyV/|o5[6D`X{Kzu0~!=^pw&;w>6q][2`f!Dor' );
define( 'SECURE_AUTH_KEY',  '4:~_HY[ZG_($kE&HmaK4i0vX-sg<3+{a(Yz>is%_epN}47DqX/_l>q)VXxMZ9u/O' );
define( 'LOGGED_IN_KEY',    'p3Z>}{Z=`,XU~9U3a-M:pd{]6Z2.BjU I2DhGe*vouy{R4H$Ao)H%Mb)]e`B+S{P' );
define( 'NONCE_KEY',        'R.55s%ZJ78RXD@tJAK3gdux8QaZx6ra;U7/)lUhnBpe`D]aae:3K[?eK8Bo1G.tI' );
define( 'AUTH_SALT',        'bR>?*-?4ro]s6a,71p)H=(Jb>L3/[sKWt9[LAv9vfn|=c lv6n]A`v/f pwtL[/=' );
define( 'SECURE_AUTH_SALT', 'YoJYz~ j|ce@]{&iW+riz.Yzkn{@NX:*Y{-|neZ*)|6joX`-]LK2!PF7gC.u-IZ*' );
define( 'LOGGED_IN_SALT',   'KtK^`jXk:q6LVm/{Wj2FUhcwWGYQB]rt/B:7v[Zn^^CAw7VD-s.p2me}2/r$An5h' );
define( 'NONCE_SALT',       '_VJQYZ~|fE6iZ<S&0910(PB$_Ln7]uugTTE(yEaT,t,.BP:R7eH.23Myk@Zmo[rJ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
