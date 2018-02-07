<?php
/**
 *
 * "A estrada para o sucesso esta sempre em construcao."
 *
 * Funcoes para o tema Epico
 *
 * @package    Epico
 * @subpackage Functions
 * @version    1.9.6
 * @since      1.0.0
 * @author     Uberfacil <contato@uberfacil.com>
 * @copyright  Epico Copyright (c) 2014, Uberfacil
 * @link       //www.uberfacil.com/temas/epico
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */

/* O Epico é compativel somente com as versoes WordPress maiores que 4.7. */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) || version_compare( PHP_VERSION, '5.3', '<' ) || $is_IIS ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/* Obtem o diretorio do tema e certifica de que possua a barra final. */
$epico_dir = trailingslashit( get_template_directory() );

/* Carrega o framework principal do tema. */
require_once( $epico_dir . 'core/hybrid.php' );

/* Carrega o customizador avancado e arquivos do painel. */
require_once( $epico_dir . 'lib/kirki/kirki.php' );

/* Carrega biblioteca de deteccao de dispositivos moveis. */
if ( ! class_exists( 'Epico_Mobile_Detect' ) ) {
	require_once( $epico_dir . 'lib/mobile-detect/mobile-detect.php' );
}

require_once( $epico_dir . 'inc/metabox/featured-metabox.php' );
require_once( $epico_dir . 'inc/pointers.php' );
require_once( $epico_dir . 'inc/epico-theme-updater.php' );

new Epico_Theme_Updater;

/*-------------------------------------------------------------
	FRAMEWORK PRINCIPAL
--------------------------------------------------------------*/

/* Configura o tema no hook 'after_setup_theme'. */
add_action( 'after_setup_theme', 'epico_theme_setup', 5 );

/**
 * Funcao de config do tema. Esta funcao adiciona suporte a
 * recursos do tema e define o as acoes e filtros do tema padrao
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function epico_theme_setup() {

	/* Argumentos da atualizacao */
	$updater_args = array(
		'repo_slug' => 'epico',
		'dashboard' => true,
		'username'  => true,
		'key'       => '',
		'repo_uri'  => 'https://minha.uberfacil.com/',
	);

	/* add support for updater */
	add_theme_support( 'auto-hosted-theme-updater', $updater_args );

	/* Carrega os arquivos com funcoes. */
	require_once( trailingslashit( get_template_directory() ) . 'inc/epico.php'	 );

	/* Registra os menus */
	add_theme_support(
		'hybrid-core-menus',
		array( 'primary', 'secondary' )
	);

	/* Habilita suporte a imagens destacadas nos artigos. */
	add_theme_support( 'post-thumbnails' );

	/* Habilita a hierarquia de templates personalizada. */
	add_theme_support( 'hybrid-core-template-hierarchy' );

	/* Habilita o suporte a barras laterais do framework. */
	add_theme_support( 'hybrid-core-sidebars', array( 'primary', 'promo', 'after-primary', 'before-content', 'after-content', 'subsidiary', 'footer', 'top' ) );

	/* Suporte ao script de imagens. */
	add_theme_support( 'get-the-image' );

	/* Adiciona links de feed automaticamente ao <head> da pagina. */
	add_theme_support( 'automatic-feed-links' );

	/* Breadcrumbs. */
	add_theme_support( 'breadcrumb-trail' );

	/* Paginacao. */
	add_theme_support( 'loop-pagination' );

	/* Implementacao do shortcode avancado de galeria. */
	add_theme_support( 'cleaner-gallery' );

	/* Formatos de artigo. */
	add_theme_support( 'post-formats',
		array( 'aside', 'quote', 'status', )
	);
	/* Legendas aperfeicoadas. */
	add_theme_support( 'cleaner-caption' );

	/* Suporte para imagens de fundo personalizadas. */
	add_theme_support( 'custom-background' );

	/* Largura maxima do conteudo para imagens e outros elementos embutidos. */
	hybrid_set_content_width( 1075 );

	/* Adiciona suporte ao refresh seletivo para widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );
}
