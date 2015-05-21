<?php get_header(); ?>

<div id="main-container">
  <section id="welcome" class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <form id="search-form" role="search" action="/" method="get">
        <input id="search-bar" name="s" type="text" class="form-control input-lg" placeholder="Buscar artistas o álbumes" data-role="tagsinput" value="<?php the_search_query(); ?>">
      </form>
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
