jQuery( document ).ready( function() {
  jQuery('#search-form').submit( function( ev ) {
    ev.preventDefault();

    jQuery.post(
        Main.ajaxurl,
        {
            action: 'search',
            search_term: jQuery( '#search-bar' ).val()
        },
        function( response ) {
          jQuery( '#main-container' ).html( '' );
          jQuery( response ).appendTo( '#main-container' ).hide().fadeIn( 1000 );
        }
    );
  });
})
