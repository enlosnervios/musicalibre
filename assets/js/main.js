jQuery(document).ready(function() {
  jQuery('.open-catalog').click(function() {
    developCatalog();
  });

  jQuery('#search-bar').focus(function() {
    developCatalog();
  });

  function developCatalog() {
    jQuery('body').css({'overflow': 'scroll'});
    jQuery('#presentation').animate({top: '-245px'}, 500);
    jQuery('#cover-overlay').fadeOut(800);
  }
})
