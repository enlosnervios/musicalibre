<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head lang="es">
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
      <?php wp_head(); ?>
    </head>
    <body>
        <div class="container-fluid">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo home_url();?>">
                  <img alt="<?php echo bloginfo( 'name' ); ?>" src="...">
                </a>
              </div>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </nav>
          <section id="presentation" class="row">
          <div class="col-xs-12">
            <div class="page-header">
              <h1>Example page header <small>Subtext for header</small></h1>
            </div></small></h>
          </div>
          </section>
          <div id="cover-container" class="row">
            <?php
              if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                  <div class="cover col-xs-2" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>)"></div>
                <?php
                endwhile;
              endif;
            ?>
          </div>
          <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
            </div>
          </nav>
        </div>
    </body>
</html>

