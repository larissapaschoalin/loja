<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'Loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9E|H>^2rGC^IME`({F|=^sr3*e3o~6Q;.Mr2BHA*d5$TM[b+eEM4rI:P*BZUT[<q');
define('SECURE_AUTH_KEY',  '5,$EB&G(_89y$`8~1?@!1HFav?dC^jw6I0,-j:VX/qfo4U!?oOX1=: ,4arqzjY,');
define('LOGGED_IN_KEY',    '#!Z@K8dX+f!!C0Z~]al6>FZ`O6K 2my`AbmT!rg{ciK!Rdgr$-z$+:zM4^F~pEJn');
define('NONCE_KEY',        'a>7v[`(+eZn&OJ/wbn`-M|ta3S$4>U+L$R qJINbucR3v_40|.|?/Mgr/mm67;dd');
define('AUTH_SALT',        's0Ph%N@s7&)_cr8.[0BQquvn4^Qw9m /lC[qVo-+3z/5j]yuJg%jA7F]Ns}QM26J');
define('SECURE_AUTH_SALT', '#kE0{.)).GzzB:1#@UkZ9.:fn~SU(YAnV5P1k&Qb`CQcKgK>]0LuOw|tRUCA^AX9');
define('LOGGED_IN_SALT',   '>zKR7EkUsw~g@TE#G,tB!SW@|=qsL35(JP&))E+m#]MQ DWf(EyKxE1-CZZICP,T');
define('NONCE_SALT',       '9zm75p;n+M$d]Q?Ye,-v@=~5zAZErV8aYgVOC<~J6+d&b `HqW8m*H8+lm=37k/3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
