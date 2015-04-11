<form id="search-form" class="navbar-form navbar-left" role="search" action="/" method="get">
  <div class="input-group">
    <input id="search-bar" name="s" type="text" class="form-control" placeholder="Buscar artistas o álbumes" data-role="tagsinput" value="<?php the_search_query(); ?>">
    <span class="input-group-btn">
      <span class="dashicons-before dashicons-search"></span>
    </span>
  </div>
</form>
