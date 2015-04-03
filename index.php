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
                  <input type="text" class="form-control" placeholder="Buscar artistas o álbumes">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div>
          </nav>
          <section id="presentation" class="row">
          <div class="col-xs-12">
            <div class="page-header">
              <h1>¡Bienvenidx al catálogo de música libre del Uruguay!</h1>
            </div>
            <p class="lead">
            Musicalibre.uy es un catálogo de álbumes publicados bajo licencias libres y copyleft, es decir, que admiten la modificación, copia y distribución.
            </p>
            <p class="lead">
            Aquí puede encontrarse categorizadas las obras por título, artista y tipo de licencia.
            </p>
            <button type="button" class="open-catalog btn btn-info btn-lg">ACCEDEDER AL CATÁLOGO</button>
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

