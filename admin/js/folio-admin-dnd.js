/**
 * Contains JS for Folio meta box
 * @author Shramee Srivastav <shramee.srivastav@gmail.com>
 */

( function( $ ) {

    $( document).ready( function() {
        $( '.folio-cell' )
            .sortable( {
                connectWith: '.folio-cell'
            } )
            .disableSelection();
    } )

} ) ( jQuery );
