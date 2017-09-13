<?php

/*
	=============================================
        Include Scripts and Styles
	=============================================
*/
function rsm_styles_and_scripts() {
	//CSS
	wp_enqueue_style( 'materialize-rsm', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css' );
	wp_enqueue_style( 'normalize-rsm', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css' );
    wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
	wp_enqueue_style( 'style-rsm', get_stylesheet_uri() );
	
}

add_action( 'wp_enqueue_scripts', 'rsm_styles_and_scripts' );

/*
	=============================================
        Theme Support Functions
	=============================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnail');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', 'search-form');

/*
	=============================================
        Menus
	=============================================
*/
function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary_menu', 'Menú Primario');
	register_nav_menu('institucional_menu', 'Menú Institucional');
	register_nav_menu('front_menu', 'Menú Frontal');
	register_nav_menu('radios_menu', 'Menú Radios');
	register_nav_menu('ersm_menu', 'Menú ERSM');
	register_nav_menu('asociaciones_menu', 'Menú Asociaciones');
	register_nav_menu('ediciones_menu', 'Menú Ediciones');
	register_nav_menu('footer_menu1', 'Menú Footer 1');
	register_nav_menu('footer_menu2', 'Menú Footer 2');
	register_nav_menu('footer_menu3', 'Menú Footer 3');
	register_nav_menu('footer_menu4', 'Menú Footer 4');

}

add_action('init', 'awesome_theme_setup');

/*
	=============================================
        Sections Admin Menus
	=============================================
*/
add_action('admin_menu', 'radios_menu');
function radios_menu() {
	add_menu_page('Radios', 'Radios', 'manage_options', 'radios-menu', 'my_menu_output');
}

add_action('admin_menu', 'ersm_menu');
function ersm_menu() {
	add_menu_page('ERSM', 'ERSM', 'manage_options', 'ersm-menu', 'my_menu_output');
}

add_action('admin_menu', 'asociaciones_menu');
function asociaciones_menu() {
	add_menu_page('Asociaciones RSM', 'Asociaciones', 'manage_options', 'asociaciones-menu', 'my_menu_output');
}

add_action('admin_menu', 'ediciones_menu');
function ediciones_menu() {
	add_menu_page('Ediciones RSM', 'Ediciones RSM', 'manage_options', 'ediciones-menu', 'my_menu_output');
}

/*
	=============================================
        Include Walker
	=============================================
*/
//
//require get_template_directory() . '/functions/walker.php';