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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '<!H!/5RB1I5KP,MfDWela/yrIi;grIr-MM4xj3{);a*B%WAzANkk`)C1WKS6e=:)' );
define( 'SECURE_AUTH_KEY',  'c(@Oej_^C=1?iUo!!6n>n-T,`^8tCWrXIXJ.(Ih9Yd>3-n,R*#g>(wZ0rG)AX(aU' );
define( 'LOGGED_IN_KEY',    'Db:k7dsEfVTHR@Nc!hj%LHl[V}+q1W<_E@3tEf5OoW+8LSJ*T;qegu@.~KY[#;M9' );
define( 'NONCE_KEY',        'Gu2+Fd|s@d:6J[pw?yYS<*Y))-cd1jY[@ae4:-;T: 7/AVlsi7K5+C_b:S@a]6F1' );
define( 'AUTH_SALT',        'alb%-9Aput?TbUEIJGHj =-{DLl9A7n3*89X]V871`:W^#hzKh^2fNI` G>Ek]*T' );
define( 'SECURE_AUTH_SALT', ':j=}.|Lh(ZH@53q`BMigX7X:a`X0q)i~%@E^h>@K}|( gVAD7iKr#4[ww.G{?<ex' );
define( 'LOGGED_IN_SALT',   'ki?<B*QU=vdqQ(&4;=5;twF5+y7=[@bs<s4SqO{k~qWjZ&wGC%>#gFJfG=l`Z_&`' );
define( 'NONCE_SALT',       '96_Q%U#mxWy((xHMoq0WG2hL*cO#&ai}YMLOlY&<J>-cZR9CwV0]5(K0O/En+n2b' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
