/**
 * Contains JS for Folio meta box
 * @author Shramee Srivastav <shramee.srivastav@gmail.com>
 */

( function( $ ) {

    $( document).ready( function() {
        $meta = $( '#folio.postbox' );
        $editor = $( '#postdivrich' );

        $( '#use-folio').click( function(){
            $editor.html( '' );
            $editor.append( $meta );
            $meta.appendTo( '#wp-content-editor-container' );

            $( this ).hide();

        } )

    } )

} ) ( jQuery );
