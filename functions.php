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
function html5blank_header_scripts()
{
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_script( 'codigo', get_template_directory_uri() . '/js/codigo.js', array ( 'jquery' ), 1.1, true);
}

?>

