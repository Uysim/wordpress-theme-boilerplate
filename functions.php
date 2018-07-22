<?php
  function wp_boilerplate_add_styles(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
  add_action( 'wp_enqueue_scripts', 'wp_boilerplate_add_styles' );
?>


