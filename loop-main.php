<div id="cover-container" class="row">
  <!-- <div id="cover-overlay"></div>-->
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <!-- <h2 class="section-heading">Section</h2> -->
        <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)">
          <div class="album-info">
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><em>por</em> Artista</dd>
            </dl>
          </div>
        </div>
      <?php
      endwhile;
    endif;
  ?>
</div>
