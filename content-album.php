<div id="main-container">
  <div class="row">

    <?php while( have_posts() ) : the_post(); ?>

    <div id="album-detail" class="col-xs-8 col-xs-offset-2">
      <div class="media">
        <div class="media-left">
          <?php echo get_the_post_thumbnail( $post->ID, array( 300, 300 ), array( 'class' => "media-object" ) ); ?>
        </div>
        <div class="media-body">
          <div class="media-heading">
            <h2><?php the_title(); ?></h2>
            <h3 class="h4"><?php echo get_post_meta( $post->ID, 'meta-artist', true ); ?></h3>
          </div>
          <article>
            <?php the_content(); ?>
          </article>
        </div>
      </div>
    </div>

    <?php endwhile; ?>

  </div>
</div>
