<?php
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

function musicalibre_styles() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', true );
}
//add_action( 'wp_enqueue_scripts', 'musicalibre_styles');
