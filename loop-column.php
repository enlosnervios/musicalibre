<div id="latest-releases" class="col-md-4">
  <?php
  $latest_releases = new WP_Query( array( 'post_type' => 'album', 'posts_per_page' => 5 ) );

  if ( $latest_releases->have_posts() ) : ?>
      <div class="list-group">
        <a class="list-group-item latest-releases-heading" href="#"><strong>Álbumes más recientes</strong></a>

        <?php
        while ( $latest_releases->have_posts() ) : $latest_releases->the_post(); ?>

          <a class="album-item list-group-item" href="#">
            <div class="media">
              <div class="media-left">
                <?php echo get_the_post_thumbnail( $post->ID, array( 50, 50 ), array( 'class' => "media-object" ) ); ?>
              </div>
              <div class="media-body">
                <p class="media-heading"><strong><?php the_title(); ?></strong></p>
                <p><?php echo get_post_meta( $post->ID, 'meta-artist', true ); ?></p>
              </div>
            </div>
          </a>

        <?php
        endwhile;
        ?>
      </div>
  <?php
  endif;
  ?>
</div>
