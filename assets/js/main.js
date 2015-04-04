jQuery( document ).ready( function() {
  jQuery( '.open-catalog' ).click( function() {
    developCatalog();
  });

  jQuery('#search-bar').focus( function() {
    developCatalog();
  });

  function developCatalog() {
    jQuery( '#presentation' ).animate( { top: '-245px' }, 500 );
    jQuery( '#cover-overlay' ).fadeOut( 800 );
  }

  jQuery('#search-form').submit( function( ev ) {
    ev.preventDefault();

    jQuery.post(
        Main.ajaxurl,
        {
            action: 'search',
            search_term: jQuery( '#search-bar' ).val()
        },
        function( response ) {
          jQuery( '#cover-container' ).html( '' );
          jQuery( response ).appendTo( '#cover-container' ).hide().fadeIn( 1000 );
        }
    );
  });
})
