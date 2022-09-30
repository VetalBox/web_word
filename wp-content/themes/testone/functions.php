<?php 

	add_action('wp_enqueue_scripts', function(){
		
		
		wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
		
	});
	
	add_action('after_setup_theme', 'add_menu');
	
		function add_menu(){
			register_nav_menu('top', 'Главное меню сайта');
		}
	
	
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');

 ?>