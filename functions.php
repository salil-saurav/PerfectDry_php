<?php
function my_css()
{


	//  Page custom styles 
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('owl_carousel_theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('media_css', get_template_directory_uri() . '/assets/css/media.css', array(), wp_get_theme()->get('Version'));

}
add_action('wp_enqueue_scripts', 'my_css');

function custom_js_css_file()
{

	wp_enqueue_script(
		'twenty-twenty-one-jquery-min',
		get_template_directory_uri() . '/assets/js/jquery.min.js',
		array(),
		wp_get_theme()->get('Version'),
		false
	);
	wp_enqueue_script(
		'app',
		get_template_directory_uri() . '/assets/js/app.js',
		array(),
		wp_get_theme()->get('Version'),
		false
	);
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array(),
		wp_get_theme()->get('Version'),
		false
	);
	wp_enqueue_script(
		'owl',
		get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
		array(),
		wp_get_theme()->get('Version'),
		false
	);
}

add_action('wp_enqueue_scripts', 'custom_js_css_file');



if (function_exists('acf_add_options_page')) {

	acf_add_options_page(
		array(
			'page_title' => 'Theme Options',
			'menu_title' => 'Theme Options',
			'menu_slug' => 'theme-options',
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);

}