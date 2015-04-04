<div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)">
  <div class="album-info">
    <dl>
      <dt><?php the_title(); ?></dt>
      <dd><em>por</em> <?php get_artist(); ?></dd>
    </dl>
  </div>
</div>

