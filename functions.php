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

function artist_post_type() {
  register_post_type( 'artist',
    array(
      'labels' => array(
        'name' => "Artistas",
        'singular_name' => 'Artista'
      ),
      'public' => true,
      'has_archie' => false,
      'supports' => array( 'title', 'editor' )
    )
  );
}
add_action( 'init', 'artist_post_type' );

function label_post_type() {
  register_post_type( 'label',
    array(
      'labels' => array(
        'name' => "Sellos",
        'singular_name' => 'Sello'
      ),
      'public' => true,
      'has_archie' => false,
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );
}
add_action( 'init', 'label_post_type' );


function musicalibre_scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );

  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array( 'dashicons' ) );

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

function album_metadata() {
      add_meta_box( 'prfx_meta', 'Información sobre el álbum', 'album_metadata_callback', 'album' );
}
add_action( 'add_meta_boxes', 'album_metadata' );

function album_metadata_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'album_nonce' );

  $album_metadata = get_post_meta( $post->ID );
  $artists = new WP_Query( array( 'post_type' => 'artist' ) );
  $labels  = new WP_Query( array( 'post_type' => 'label' ) );
  ?>

  <p>
    <label for="meta-artist">Artista</label>
    <select name="meta-select" id="meta-select">
    <?php
      if ( $artists->have_posts() ):
        while ( $artists->have_posts() ) : $artists->the_post(); ?>
          <option value="<?php echo $post->post_title; ?>" <?php if ( isset ( $album_metadata['meta-artist'] ) ) selected( $album_metadata['meta-artist'][0], '<?php echo $post->post_title; ?>' ); ?>><?php the_title(); ?></option>';
        <?php
        endwhile;
      else : ?>
        <option value="Desconocido" selected="selected">Desconocido</option>
      <?php
      endif; ?>
    </select>
  </p>

  <p>
    <label for="meta-date">Fecha</label>
    <input type="text" name="meta-date" id="meta-text" value="<?php if ( isset ( $album_metadata['meta-date'] ) ) echo $album_metadata['meta-date'][0]; ?>" />
  </p>

  <p>
    <label for="meta-label">Sello</label>
    <select name="meta-select" id="meta-select">
    <?php
      if ( $labels->have_posts() ):
        while ( $labels->have_posts() ) : $labels->the_post(); ?>
          <option value="<?php echo $post->post_title; ?>" <?php if ( isset ( $album_metadata['meta-label'] ) ) selected( $album_metadata['meta-label'][0], '<?php echo $post->post_title; ?>' ); ?>><?php the_title(); ?></option>';
        <?php
        endwhile;
      else : ?>
        <option value="Desconocido" selected="selected">Desconocido</option>
      <?php
      endif; ?>
    </select>
  </p>

  <p>
    <label for="meta-license">Licencia</label>
    <input type="text" name="meta-license" id="meta-text" value="<?php if ( isset ( $album_metadata['meta-license'] ) ) echo $album_metadata['meta-license'][0]; ?>" />
  </p>

  <p>
    <label for="meta-download">Enlace de descarga</label>
    <input type="text" name="meta-download" id="meta-text" value="<?php if ( isset ( $album_metadata['meta-download'] ) ) echo $album_metadata['meta-download'][0]; ?>" />
  </p>

  <p>
    <label for="meta-contact">Contacto</label>
    <input type="text" name="meta-contact" id="meta-text" value="<?php if ( isset ( $album_metadata['meta-contact'] ) ) echo $album_metadata['meta-contact'][0]; ?>" />
  </p>

  <?php
}

function album_metadata_save( $post_id ) {
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'album_nonce' ] ) && wp_verify_nonce( $_POST[ 'album_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
    return;
  }

  if( isset( $_POST[ 'meta-artist' ] ) ) {
    update_post_meta( $post_id, 'meta-artist', sanitize_text_field( $_POST[ 'meta-artist' ] ) );
  }

  if( isset( $_POST[ 'meta-date' ] ) ) {
    update_post_meta( $post_id, 'meta-date', sanitize_text_field( $_POST[ 'meta-date' ] ) );
  }

  if( isset( $_POST[ 'meta-label' ] ) ) {
    update_post_meta( $post_id, 'meta-label', sanitize_text_field( $_POST[ 'meta-label' ] ) );
  }

  if( isset( $_POST[ 'meta-license' ] ) ) {
    update_post_meta( $post_id, 'meta-license', sanitize_text_field( $_POST[ 'meta-license' ] ) );
  }

  if( isset( $_POST[ 'meta-download' ] ) ) {
    update_post_meta( $post_id, 'meta-download', sanitize_text_field( $_POST[ 'meta-download' ] ) );
  }

  if( isset( $_POST[ 'meta-contact' ] ) ) {
    update_post_meta( $post_id, 'meta-contact', sanitize_text_field( $_POST[ 'meta-contact' ] ) );
  }
}
add_action( 'save_post', 'album_metadata_save' );

function get_artist() {
  $artist = get_post_meta( get_the_ID(), 'meta-artist', true );

  if ( !empty( $artist ) ) {
    echo $artist;
  }
}
