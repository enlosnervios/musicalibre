<?php
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

function album_post_type() {
  register_post_type( 'album',
    array(
      'labels' => array(
        'name' => "Álbumes",
        'singular_name' => 'Álbum'
      ),
      'public' => true,
      'has_archie' => false,
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );
}
add_action( 'init', 'album_post_type' );

function musicalibre_scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );

  wp_localize_script( 'main', 'Main', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'musicalibre_scripts');

function search_data() {
  $search_term = $_POST['search_term'];
  $search = new WP_Query( array(
    's' => $search_term,
    'post_type' => 'album'
  ) );

  if ( $search->have_posts() ) :
    while ( $search->have_posts() ) : $search->the_post();
      get_template_part( 'loop', 'search' );
    endwhile;
  endif;

  die();
}
add_action( 'wp_ajax_nopriv_search', 'search_data' );

add_action( 'wp_ajax_search', 'search_data' );
