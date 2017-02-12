<?php
  function codebyscott_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'codebyscott-style', get_stylesheet_uri() );
  }
  add_action( 'wp_enqueue_scripts', 'codebyscott_styles' );
