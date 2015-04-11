<div id="latest-releases" class="col-md-4">
  <?php
    $latest_releases = new WP_Query( array( 'post_type' => 'album', 'posts_per_page' => 6 ) );

    if ( $latest_releases->have_posts() ) : ?>
      <ul class="list-group">
        <li class="list-group-item"><strong>Álbumes más recientes</strong></li>

        <?php
        while ( $latest_releases->have_posts() ) : $latest_releases->the_post(); ?>

          <li class="album-item list-group-item">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <?php echo get_the_post_thumbnail( $post->ID, array( 50, 50 ), array( 'class' => "media-object" ) ); ?>
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?php the_title(); ?></h4>
              </div>
            </div>
          </li>

        <?php
        endwhile;
        ?>

      </ul>

      <?php
    endif;
  ?>
</div>
