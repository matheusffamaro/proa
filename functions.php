<?php

/**
 * Monsi Core - Functions
 * Versão: 1.0.0
 */

/**
 * Definição da versão
 */
if (is_user_logged_in()) {
  define('THEME_VERSION', microtime(true));
} else {
  define('THEME_VERSION', '1.0.1');
}

/**
 * Check if current language is english
 */
 function checkLang() {
  if(pll_current_language() == 'en'){
    return true;
  } else {
    return false;
  }
 }

/**
 * Geração de LOG de erros
 */
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', ABSPATH.'error.log');
if (!is_file(ABSPATH.'error.log')) {
    file_put_contents(ABSPATH.'error.log', '');
    chmod(ABSPATH.'error.log', 0600);
}
if (is_file(ABSPATH.'error.log')) {
    chmod(ABSPATH.'error.log', 0600);
}

/**
 * Tamanhos de imagem personalizados
 */
add_image_size('full_mobile', 414, 736, false);
add_image_size('full_desktop', 1920, 630, false);
add_image_size('webstories', 1080, 1920, false);


// Theme Settings
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
    'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ));
	
}

/**
 * Registro de CSS e JavaScript
 */

function monsi_scripts(){

  #REGISTRO DE CSS
  wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), THEME_VERSION);
  wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), THEME_VERSION);
  wp_register_style('home', get_template_directory_uri() . '/assets/css/home.css', array(), THEME_VERSION);
  wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), THEME_VERSION);
  wp_register_style('avaliacoes', get_template_directory_uri() . '/assets/css/avaliacoes.css', array(), THEME_VERSION);
  wp_register_style('blog-componente', get_template_directory_uri() . '/assets/css/blog-componente.css', array(), THEME_VERSION);
  wp_register_style('midia', get_template_directory_uri() . '/assets/css/midia.css', array(), THEME_VERSION);
  wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), THEME_VERSION);
  wp_register_style('quem-somos', get_template_directory_uri() . '/assets/css/quem-somos.css', array(), THEME_VERSION);
  wp_register_style('quero-empregar', get_template_directory_uri() . '/assets/css/quero-empregar.css', array(), THEME_VERSION);
  wp_register_style('contato', get_template_directory_uri() . '/assets/css/contato.css', array(), THEME_VERSION);
  wp_register_style('single', get_template_directory_uri() . '/assets/css/single.css', array(), THEME_VERSION);
  wp_register_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), THEME_VERSION);
  wp_register_style('inscricao-voluntario', get_template_directory_uri() . '/assets/css/inscricao-voluntario.css', array(), THEME_VERSION);
 

  #CHAMADA DO CSS
  wp_enqueue_style('reset');
  wp_enqueue_style('main');
  wp_enqueue_style('swiper');
  wp_enqueue_style('avaliacoes');
  wp_enqueue_style('blog-componente');
  wp_enqueue_style('midia');
  wp_enqueue_style('fonts');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false);
    wp_enqueue_style('inscricao-voluntaria', get_template_directory_uri() . '/assets/css/inscricao-voluntaria.css', array(), THEME_VERSION);

  if(is_single()) {
    wp_enqueue_style('single');
  }
  
  if(is_page_template('page-home.php')){
    wp_enqueue_style('home');
    wp_enqueue_style('webstorie', get_template_directory_uri() . '/assets/css/webstorie.css', array(), THEME_VERSION);

  }

  if(is_page_template('page-contato.php')){
    wp_enqueue_style('contato');  
   
  }

  if(is_page_template('page-quem-somos.php')){
    wp_enqueue_style('quem-somos');
  }

  if(is_category()) {
    wp_enqueue_style('blog');
  }

  if(is_tag()) {
    wp_enqueue_style('blog');
  }

  if(is_page_template('page-quero-empregar.php')){
    wp_enqueue_style('quero-empregar');
  }

  if(is_page_template('page-inscricao-voluntario.php')){
    wp_enqueue_style('inscricao-voluntario');
  }
  
  if(is_page_template('page-obrigado.php')){
    wp_enqueue_style('obrigado', get_template_directory_uri() . '/assets/css/obrigado.css', array(), THEME_VERSION);
  }


  if(is_page('blog')) {
    wp_enqueue_style('blog');
  }

  if(is_page('relatorios')){
    wp_enqueue_style('relatorios', get_template_directory_uri() . '/assets/css/relatorio.css', array(), THEME_VERSION);
  }

  if(is_page(231)){
    wp_enqueue_style('inscricao-voluntaria', get_template_directory_uri() . '/assets/css/inscricao-voluntaria.css', array(), THEME_VERSION);
  }
  
  if(is_page_template('page-cadastro-empregador.php')){
    wp_enqueue_style('cadastro-empregador', get_template_directory_uri() . '/assets/css/cadastro-empregador.css', array(), THEME_VERSION);
  }
  if(is_page_template('page-quero-empregar2.php')){
    wp_enqueue_style('quero-empregar2', get_template_directory_uri() . '/assets/css/quero-empregar2.css', array(), THEME_VERSION);
  }

  if(is_page_template('page-profissao.php')){
    wp_enqueue_style('profissao', get_template_directory_uri() . '/assets/css/profissao.css', array(), THEME_VERSION);
  }

  
  if(is_page_template('page-plataforma-proa.php')){
    wp_enqueue_style('plataforma-proa', get_template_directory_uri() . '/assets/css/plataforma-proa.css', array(), THEME_VERSION);
  }
  if(is_page_template('page-quero-doar.php/page-quero-doar.php')){
    wp_enqueue_style('querodoar', get_template_directory_uri() . '/assets/css/querodoar.css', array(), THEME_VERSION);
  }

  if(is_page('webstorie')){
    wp_enqueue_style('webstorie', get_template_directory_uri() . '/assets/css/webstorie.css', array(), THEME_VERSION);
    
    wp_enqueue_style('blog');
    
  }

  #REGISTRO DE SCRIPT
  wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), THEME_VERSION);
  wp_register_script('swiperjs', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), THEME_VERSION);
  wp_register_script('blog', get_template_directory_uri() . '/assets/js/blog.js', array('jquery'), THEME_VERSION);
  wp_register_script('quem-somos', get_template_directory_uri() . '/assets/js/quem-somos.js', array('jquery'), THEME_VERSION);
  wp_register_script('quero-empregar', get_template_directory_uri() . '/assets/js/quero-empregar.js', array('jquery'), THEME_VERSION);
  wp_register_script('contato', get_template_directory_uri() . '/assets/js/contato.js', array('jquery'), THEME_VERSION);
  wp_register_script('singlejs', get_template_directory_uri() . '/assets/js/single.js', array('jquery'), THEME_VERSION);
  wp_register_script('cookies', get_template_directory_uri() . '/assets/js/js.cookies.min.js', array('jquery'), THEME_VERSION);

  #CHAMADA DO SCRIPT
  wp_enqueue_script('swiperjs');
  wp_enqueue_script('cookies');
  wp_enqueue_script('main');
  wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), THEME_VERSION);

  if(is_single()) {
    wp_enqueue_script('singlejs');
  }

  if(is_page_template('page-contato.php')) {
    wp_enqueue_script('contato');
  }

  if(is_page('quero-empregar')) {
    wp_enqueue_script('quero-empregar');
  }

  if(is_page_template('page-quem-somos.php')) {
    wp_enqueue_script('quem-somos');
  }

  if(is_category()) {
    wp_enqueue_script('blog');
  }

  if(is_tag()) {
    wp_enqueue_script('blog');
  }

  if(is_page('blog')) {
    wp_enqueue_script('blog');
  }
  
  if(is_page('relatorios')){
    wp_enqueue_script('relatorio', get_template_directory_uri() . '/assets/js/relatorio.js', array('jquery'), THEME_VERSION);
  }

  if(is_page('apoie')){
    wp_enqueue_script('quero-doar', get_template_directory_uri() . '/assets/js/quero-doar.js', array('jquery'), THEME_VERSION);
  }

 
}
add_action('wp_enqueue_scripts', 'monsi_scripts', 10);

/**
 * Registro de novos menus
 */

function monsi_menus()
{
   register_nav_menus(array(
      'main_menu' => 'Menu Principal',
      'main_menu_mobile' => 'Menu Principal Mobile',
      'menu_footer' => 'Menu Footer',
   ));
}
add_action('after_setup_theme', 'monsi_menus');

/**
 * OTIMIZAÇÕES DO MONSI CORE
 * Remoção: WP Emoji, WP Block Library, WP Material Dynamic e WP Embed
 */

## Remoção: WP Emoji
function monsi_remove_wp_emoji()
{
   remove_action('wp_print_styles', 'print_emoji_styles');
}

add_action('wp_print_styles', 'monsi_remove_wp_emoji', 0);

function monsi_remove_wp_emoji_head()
{
   remove_action('wp_head', 'print_emoji_detection_script', 7);
}

add_action('wp_head', 'monsi_remove_wp_emoji_head', 0);


## Remoção: WP Block Library
function monsi_remove_wp_block()
{
   wp_dequeue_style('wp-block-library');
   wp_dequeue_style('wp-block-library-theme');
}

add_action('wp_print_styles', 'monsi_remove_wp_block', 999);


## Remoção: WP Material Dynamic
function monsi_remove_wp_material()
{
   wp_dequeue_style('material-wp_dynamic');
}

add_action('wp_enqueue_scripts', 'monsi_remove_wp_material', 999);


## Remoção: WP Embed
function monsi_remove_wp_embed()
{
   wp_dequeue_script('wp-embed');
}

add_action('wp_head', 'monsi_remove_wp_embed', 999);

function wpdocs_custom_excerpt_length( $length ) {
    return 14;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * ACF Load More Repeater
*/

add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 9;
	$start = $_POST['offset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	ob_start();
	if (have_rows('relatorios_bimestral', $post_id)) {
		$total = count(get_field('relatorios_bimestral', $post_id));
		$count = 0;
		while (have_rows('relatorios_bimestral', $post_id)) {
			the_row();
			if ($count < $start) {
				$count++;
				continue;
			}
			?>
<a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio">
  <img src="<?php the_sub_field('imagem_do_relatorio'); ?>" alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
    title="<?php the_sub_field('titulo_do_relatorio'); ?>">
  <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
</a>
<?php 
			$count++;
			if ($count == $end) {
				break;
			}
		} 
	}
	$content = ob_get_clean();
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
} 



add_action('wp_ajax_my_repeater_show_more2', 'my_repeater_show_more2');
add_action('wp_ajax_nopriv_my_repeater_show_more2', 'my_repeater_show_more2');

function my_repeater_show_more2() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce2')) {
		exit;
	}
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show2 = 9;
	$start2 = $_POST['offset'];
	$end2 = $start2+$show2;
	$post_id2 = $_POST['post_id'];
	ob_start();
	if (have_rows('relatorios_anuais', $post_id2)) {
		$total2 = count(get_field('relatorios_anuais', $post_id2));
		$count2 = 0;
		while (have_rows('relatorios_anuais', $post_id2)) {
			the_row();
			if ($count2 < $start2) {
				$count2++;
				continue;
			}
			?>
<a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio">
  <img src="<?php the_sub_field('imagem_do_relatorio'); ?>" alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
    title="<?php the_sub_field('titulo_do_relatorio'); ?>">
  <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
</a>
<?php 
			$count2++;
			if ($count2 == $end2) {
				break;
			}
		} 
	}
	$content2 = ob_get_clean();
	$more2 = false;
	if ($total2 > $count2) {
		$more2 = true;
	}
	echo json_encode(array('content' => $content2, 'more' => $more2, 'offset' => $end2));
	exit;
} 