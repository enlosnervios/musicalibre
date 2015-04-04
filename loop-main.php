<div id="cover-container" class="row">
  <div id="cover-overlay"></div>
  <?php
    $albums = new WP_Query( array( 'post_type' => 'album' ) );
    if ( $albums->have_posts() ) :
      while ( $albums->have_posts() ) : $albums->the_post();
        get_template_part( 'artist', 'info' );
      endwhile;
    endif;
  ?>
</div>
