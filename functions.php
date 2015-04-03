<?php
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

function musicalibre_scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'musicalibre_scripts');
