<?php 

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

	function register_theme_menus(){
		register_nav_menus(array('main-menu' => __('Main Menu')));
	}
	add_action('init', 'register_theme_menus');


	function gus_theme_styles(){
		wp_enqueue_style( 'style', get_template_directory_uri() . '/app/assets/css/style.css');
		wp_enqueue_style( 'ebm', get_template_directory_uri() . '/app/assets/css/ebm.css');
	}
	add_action('wp_enqueue_scripts', 'gus_theme_styles');

	// FILTERS
	// add_filter( 'home_layout', 'add_class_if_home');
	// function add_class_if_home( $classes ) {
	// 	if ( is_page_template( 'index.php' ) )
	//     $classes[] = 'home-layout';
	// 	return $classes; 
	// }

?>