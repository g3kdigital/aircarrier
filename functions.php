<?php 

//Making jQuery to load from Google Library
function replace_jquery() {
  if (!is_admin()) {
    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'replace_jquery');


// Load HTML5 Blank scripts (header.php)
function misRecursos()
{
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . 'http://localhost/aircarrierzf/wp-content/themes/aircarrierzf/css/g3k-aircarrierzfont.css', array(), '1.1', 'all');
 	wp_enqueue_script( 'codigo', get_template_directory_uri() . '/js/codigo.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'misRecursos' );

register_nav_menus( array(
  'menu_main' => 'Menú Principal',
  'menu_super' => 'Redes Sociales',
));	