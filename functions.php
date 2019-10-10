<?php



function load_stylesheets(){

  wp_register_style('styles', get_template_directory_uri() . '/styles.css', array(), 1, 'all');
  wp_enqueue_style('styles');


}


add_action('wp_enqueue_scripts', 'load_stylesheets');
