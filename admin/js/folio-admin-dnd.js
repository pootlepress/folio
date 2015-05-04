/**
 * Contains JS for Folio meta box
 * @author Shramee Srivastav <shramee.srivastav@gmail.com>
 */

( function( $ ) {

    $( document).ready( function() {
        $( '.folio-content' ).draggable( { revert: "invalid" } );

        $( '.folio-content' ).bind( 'drag', function( e, ui ) {
            $t = $(this);
            ui.helper.css( "width", $t.css( 'width' ) );
        });

        $( '.folio-cell').droppable( {
            drop: function( e, ui ) {

                $t = $(this);
                $dragged = ui.draggable;
                $dragged.remove();

                $t.append( '<div class="folio-content new-elem" >' + $dragged.html() + '</div>' );
                $t.children('.new-elem').draggable( { revert: "invalid" } );

                $

            }
        } );

    } )

} ) ( jQuery );
