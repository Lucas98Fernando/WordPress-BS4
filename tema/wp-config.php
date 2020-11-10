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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_bs4wp' );

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
define( 'AUTH_KEY',         '&krr`<|Wn#^5AqX6lT$)U/jU8~I C:f7|:PUH]PPv2*BMNr]bl7hnS<jZ9(Cq-%Z' );
define( 'SECURE_AUTH_KEY',  'PDBw*wWBz^<y_NamPs7):eKO6$SHHkR7w!mQmiXr_@|f_ckNq;<EU:iy,ZIZN-H~' );
define( 'LOGGED_IN_KEY',    ';Y a5?]><v/1qw27Sl1LM^n/^^/jU>z!;PJ9u8I.KN<fVC][yMsADjj0>9=pT~>#' );
define( 'NONCE_KEY',        '(Q=>RU/q@}{`RYj4cvGPgIZ_of7a%OBy%[}4tkc,_/&:@>_m&a2lC>RpK^&A`eJl' );
define( 'AUTH_SALT',        'VF8.US>>ja3_)M}FAQ(]H5tG|MNMznD-N#YDIr 5gFbQH<FWjGC>I&LWe-I%A 7I' );
define( 'SECURE_AUTH_SALT', '20Vd!<mBs*A}d{=pt<MXG,!2Xf5S8q03?R^4(+O| vl8<O{Q^uA&DDO[E^R~jzPw' );
define( 'LOGGED_IN_SALT',   '^wyj/_uLGajh5!dw>R*Kw3|WB<bKCoe3vU0>$xYD.A-K_#&Y b^4DEj&`#qY%Z^4' );
define( 'NONCE_SALT',       'UBhjdC#]=:Slb%ky`:nR-G:8V@:3^4R~#9/,b@;1v(M,KAE%6 Dhzqdk=7br*any' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
