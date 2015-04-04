<?php get_header() ?>

<section id="presentation" class="row">
  <div class="col-xs-12 text-center">
    <div class="page-header">
      <h1>¡Bienvenidx al catálogo de música libre de Uruguay!</h1>
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

<?php get_template_part( 'loop', 'main' ); ?>

<?php get_footer() ?>
