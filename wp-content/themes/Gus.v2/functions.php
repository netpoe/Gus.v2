<?php 
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	function register_theme_menus(){
		register_nav_menus(
			array( 
				'main-menu' => __('Main Menu'),
				'post-categories' => __('Post categories')
			)
		);
	}
	add_action('init', 'register_theme_menus');
	function gus_theme_styles(){
		wp_enqueue_style( 'style', get_template_directory_uri() . '/app/assets/css/style.css', false, '1.0');
		wp_enqueue_style( 'ebm', get_template_directory_uri() . '/app/assets/css/ebm.css', false, '1.0');
	}
	add_action('wp_enqueue_scripts', 'gus_theme_styles');
	// function gus_theme_scripts() {
	// 	wp_enqueue_script('requirejs', get_template_directory_uri() . '/app/assets/js/lib/require.js', '', '', false);
	// }
	// add_action('wp_enqueue_scripts', 'gus_theme_scripts');
	// FILTERS
	// function custom_excerpt_length( $length ) {
	// 	return 140;
	// }
	// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>