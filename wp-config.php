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
define('DB_NAME', 'rovedo_db');

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
define('AUTH_KEY',         '}RcR-4#KusH+t=-4IGC>>cP$fQ:NvJOi.4O.bCm~sBUlparY%*]I8#e97eE4gZ](');
define('SECURE_AUTH_KEY',  'A5w%4L%QW}4@#:*C.|uDg,;@R9GJCEC?5X&lGIl[?=s~8!!59-a)^xDd8Pp{9(MG');
define('LOGGED_IN_KEY',    'HI+!%!3;0;LtlaEBbLuevp|$FkS(!?vD#dqZwOwMK F&@e,?._lYGFFcxT-ohM|p');
define('NONCE_KEY',        'k0[(-W6H6fYXf!0tMl(+~^K-J(_$X1&S|)UfktlD^a AAT>Y+SIq$l4C*xgh>tZd');
define('AUTH_SALT',        'ja8MH x!O#NR-aI/npE<w^=[-=2LBVc*>,;+|N-`+T;ss-|[+46o8vitoNw<>/Rw');
define('SECURE_AUTH_SALT', '$s+(m2+I@#8I5/|vq2-CTb-.J]qC)&3qMwIx/Je/w:jKHIHB6f{EH)Ob3NN,)4`Q');
define('LOGGED_IN_SALT',   'y*zuUO7q>NgPvO@L _]F&0Ve|VU[NaaKnLUA;TBv*U$>oMrO~5Te.?B)ZU|ZWyF.');
define('NONCE_SALT',       '-+AGJf;tcY*Yi@i9+~Tnd4b90t +3zNFWlrw)lbR#Ut-%1J/+S)#|Q;/,wx~xc+m');

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

ini_set ("memory_limit", "128M"); 

define('CONCATENATE_SCRIPTS', false );
