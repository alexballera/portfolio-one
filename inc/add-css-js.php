<?php 
// Agregar Mis Scripts
function my_scripts(){
        // wp_enqueue_script('myScript', get_template_directory_uri (). '/js/main.min.js', array(), '1', true );
        wp_enqueue_script('myScript', get_template_directory_uri (). '/js/main.min.js', array('jquery'), '1', true );
        // wp_enqueue_script('components', get_stylesheet_directory_uri(). '/js/components.js', array(), '1', true );
}
add_action('wp_enqueue_scripts', 'my_scripts', 11);

function insertStyle() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'insertStyle' );

function my_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login.css" />';
}
add_action('login_head', 'my_custom_login');

 ?>