<?php

/*
	=============================================
        Include Scripts and Styles
	=============================================
*/
function rsm_styles_and_scripts() {
	//CSS
	wp_enqueue_style('style-rsm', get_stylesheet_uri() );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);
	wp_enqueue_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	wp_enqueue_script('viewportjs', get_template_directory_uri() . '/js/jquery.superslides.js', array('jquery'), '1', true);
	wp_enqueue_script('viewportjs', get_template_directory_uri() . '/js/viewportchecker.js', array('jquery'), '1', true);
	wp_enqueue_script('scrollrevealjs', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array(), '1', true);
    
}

add_action( 'wp_enqueue_scripts', 'rsm_styles_and_scripts' );

/*
	=============================================
        Theme Support Functions
	=============================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));
add_theme_support('html5', 'search-form');

/*
	=============================================
        Menus
	=============================================
*/
function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('general_menu', 'Menú General');
    register_nav_menu('main_menu', 'Main Menú');
    register_nav_menu('mobile_menu', 'Mobile Menú');

}

add_action('init', 'awesome_theme_setup');

/*
	=============================================
        Include Walker
	=============================================
*/

//require get_template_directory() . '/functions/walker.php';

/*
	=============================================
        Imagen Editor
	=============================================
*/
add_filter( 'wp_image_editors', 'change_graphic_lib' ); 

function change_graphic_lib($array) {
    return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

/*
	=============================================
        Control de caracteres Excerpt y Titulo
	=============================================
*/
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_custom_titulo_length( $length ) {
    return 10;
}
add_filter( 'title_length', 'wpdocs_custom_titulo_length', 999 );
 
/*
	=============================================
        Admin Columnas
	=============================================
*/
// ADD NEW COLUMN
function ST4_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}

// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
    }
}

/*
	=============================================
        Slider
	=============================================
*/

function codex_slides_init() {
  $labels = array(
    'name' => _x('Slides', 'post type general name'),
    'singular_name' => _x('Slides', 'post type singular name'),
    'add_new' => _x('Add New', 'slides'),
    'add_new_item' => __('Add New Slides'),
    'edit_item' => __('Edit Slides'),
    'new_item' => __('New Slides'),
    'all_items' => __('All Slides'),
    'view_item' => __('View Slides'),
    'search_items' => __('Search Slides'),
    'not_found' =>  __('No slides found'),
    'not_found_in_trash' => __('No slides found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Slides')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 
  register_post_type('slides',$args);
}
add_action( 'init', 'codex_slides_init' );

/*
	=============================================
        Historia
	=============================================
*/

function codex_historia_init() {
  $labels = array(
    'name' => _x('Historia', 'post type general name'),
    'singular_name' => _x('Historia', 'post type singular name'),
    'add_new' => _x('Add New', 'historia'),
    'add_new_item' => __('Add New Historia'),
    'edit_item' => __('Edit Historia'),
    'new_item' => __('New Historia'),
    'all_items' => __('All Historia'),
    'view_item' => __('View Historia'),
    'search_items' => __('Search Historia'),
    'not_found' =>  __('No historia found'),
    'not_found_in_trash' => __('No historia found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Historia')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 
  register_post_type('historia',$args);
}
add_action( 'init', 'codex_historia_init' );

/*
	=============================================
        Directores
	=============================================
*/

function codex_directores_init() {
  $labels = array(
    'name' => _x('Director', 'post type general name'),
    'singular_name' => _x('Director', 'post type singular name'),
    'add_new' => _x('Add New', 'Director'),
    'add_new_item' => __('Add New Director'),
    'edit_item' => __('Edit Director'),
    'new_item' => __('New Director'),
    'all_items' => __('All Director'),
    'view_item' => __('View Director'),
    'search_items' => __('Search Director'),
    'not_found' =>  __('No Director found'),
    'not_found_in_trash' => __('No Director found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('directores')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 
  register_post_type('directores', $args);
}
add_action( 'init', 'codex_directores_init' );

/*
	=============================================
        Eventos
	=============================================
*/

function codex_evento_init() {
  $labels = array(
    'name' => _x('Eventos', 'post type general name'),
    'singular_name' => _x('Eventos', 'post type singular name'),
    'add_new' => _x('Add New', 'Evento'),
    'add_new_item' => __('Add New Evento'),
    'edit_item' => __('Edit Evento'),
    'new_item' => __('New Evento'),
    'all_items' => __('All Evento'),
    'view_item' => __('View Evento'),
    'search_items' => __('Search Evento'),
    'not_found' =>  __('No Evento found'),
    'not_found_in_trash' => __('No Evento found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Eventos')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 
  register_post_type('eventos',$args);
}
add_action( 'init', 'codex_evento_init' );

 
/*
	=============================================
        Empleos
	=============================================
*/

add_action( 'init', 'vacante_post_type' );
function vacante_post_type() {
  register_post_type( 'vacante',
    array(
      'labels' => array(
        'name' => __( 'Vacantes' ),
        'singular_name' => __( 'Vacante' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

/*
	=============================================
        Opciones de páginas Configuracion General
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Radio Santa María',
		'menu_title'	=> 'Configuración General',
		'menu_slug' 	=> 'configuracion-general',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'configuracion-general',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'configuracion-general',
	));
	
}
 
/*
	=============================================
        Opciones de página RSM 590
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'RSM 590 AM',
		'menu_title'	=> 'RSM 590 AM',
		'menu_slug' 	=> 'rsm590-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración AM',
		'menu_title'	=> 'Configuración AM',
		'parent_slug'	=> 'rsm590-opciones',
	));
	
	
}
 
/*
	=============================================
        Opciones de página Estudio 979
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Estudio 979 FM',
		'menu_title'	=> 'Estudio 979 FM',
		'menu_slug' 	=> 'estudio979-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración FM',
		'menu_title'	=> 'Configuración FM',
		'parent_slug'	=> 'estudio979-opciones',
	));
	
}
 
/*
	=============================================
        Opciones de página Cobertura Especial
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Cobertura Especial',
		'menu_title'	=> 'Cobertura Especial',
		'menu_slug' 	=> 'cobertura-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
	
}
 
/*
	=============================================
        Opciones de página ERSM
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'ERSM',
		'menu_title'	=> 'ERSM',
		'menu_slug' 	=> 'ersm-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración ERSM',
		'menu_title'	=> 'Configuración ERSM',
		'parent_slug'	=> 'ersm-opciones',
	));
	
}
 
/*
	=============================================
        Opciones de página Asociaciones
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Asociaciones',
		'menu_title'	=> 'Asociaciones',
		'menu_slug' 	=> 'asociaciones-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración Asociaciones',
		'menu_title'	=> 'Configuración Asociaciones',
		'parent_slug'	=> 'asociaciones-opciones',
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Organizaciones',
		'menu_title'	=> 'Organizaciones',
		'parent_slug'	=> 'asociaciones-opciones',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Lo que somos',
		'menu_title'	=> 'Lo que somos',
		'parent_slug'	=> 'asociaciones-opciones',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Que hacemos',
		'menu_title'	=> 'Que hacemos',
		'parent_slug'	=> 'asociaciones-opciones',
	));
	
}

/*
	=============================================
        Opciones de página Ediciones
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ediciones',
		'menu_title'	=> 'Ediciones',
		'menu_slug' 	=> 'ediciones-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración Ediciones',
		'menu_title'	=> 'Configuración Ediciones',
		'parent_slug'	=> 'ediciones-opciones',
	));
	
}

/*
	=============================================
        Publicidad
	=============================================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Publicidad',
		'menu_title'	=> 'Publicidad',
		'menu_slug' 	=> 'Publicidad-opciones',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'      => false,
        /*'icon_url'      => 'http://megasite.radiosantamaria.net/wp-content/themes/rsm-megasite/img/rsm590-logocolor.png'*/
	));
}


/*
	=============================================
        Tienda
	=============================================
*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

//    // Remove the description tab
//    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

// Remove the SKU
function sv_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );


/*
	=============================================
        Mostrar Barra de Herramientas
	=============================================
*/
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator')) {
        show_admin_bar(false);
    }
}
