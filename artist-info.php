<a href="<?php the_permalink(); ?>">
  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)">
    <div class="album-info album-info-index">
      <dl>
        <dt><?php the_title(); ?></dt>
        <dd><em>por</em> <strong><?php get_artist(); ?></strong></dd>
      </dl>
    </div>
    <div class="album-info album-info-background">
      <dl>
        <dt><?php the_title(); ?></dt>
        <dd><?php get_artist(); ?></dd>
      </dl>
    </div>
  </div>
</a>
