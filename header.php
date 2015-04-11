<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head lang="es">
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">

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
              <?php get_search_form(); ?>
            </div>
          </nav>
