<?php get_header(); ?>

<div id="main-container">
  <section id="presentation" class="row">
    <div class="col-xs-12 text-center">
      <div class="page-header">
        <h1>¡Bienvenidx al catálogo de música libre de Uruguay!</h1>
      </div>
      <p class="lead">
      Musicalibre.uy es un catálogo de álbumes publicados bajo licencias libres y copyleft, es decir, que admiten la modificación, copia y distribución.
      Aquí puede encontrarse categorizadas las obras por título, artista y tipo de licencia.
      </p>
    </div>
  </section>

  <div id="latest-container" class="navbar navbar-fixed-bottom">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php get_template_part( 'loop', 'column' ); ?>
          <?php get_template_part( 'loop', 'column' ); ?>
          <?php get_template_part( 'loop', 'column' ); ?>
        </div>
    </div>
  </div>
</div>

<?php

get_footer();
