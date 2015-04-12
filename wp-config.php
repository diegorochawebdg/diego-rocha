<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'diegorocha');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~b(zlXGvN~l2i+tJe},gSd:jp.|pyMr07EV,lc.8~:h=<?<EY!IieRT)_c>s_-$4');
define('SECURE_AUTH_KEY',  'nIQ2VE*-t_BN;&-;V58+?9+RzE&;?Lma!WZ|Cp!sY8nv{ER]a8FSPzSLB%&|^/X;');
define('LOGGED_IN_KEY',    'Yz4Qs8RdG?3vv7B]U37(Tv=|u5D-(_biY`R^6/B_L2_,>M+,SFc::Znwz+a;*_Lc');
define('NONCE_KEY',        '~|CkiaOH_pp5A47..lU9dj) p{66#[crL!PuLc?Nc>+wW$ge^<it x/e+:V*Zt(|');
define('AUTH_SALT',        '&v.H.tx7:7FJzIys9lE9W GEpFNH&~6AEJ`j+qozLBlqG[qfW+3KEA8/*A&8L.!.');
define('SECURE_AUTH_SALT', 'wB-8)^]MB~L%x%@+#eO}c~f$E!B|9GES;7pik8.HQW1O4S+%~gL4v^[ZS#uIRRzg');
define('LOGGED_IN_SALT',   'dk9fS+?4wv<bDj{A44&?_j&.K,(C -ry]E%$6Nfyg p2v1A8BCBIs{V(ewJ3d=gf');
define('NONCE_SALT',       'gYn&Cy&}(=d^19@7M25#:uZCy9CHI/*-pW|BY}|-vg1OC,w|H4qngj|qD#`vyR91');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
