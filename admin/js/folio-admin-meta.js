/**
 * Contains JS for Folio meta box
 * @author Shramee Srivastav <shramee.srivastav@gmail.com>
 */

( function( $ ) {

    $( document).ready( function() {
        $meta = $( '#folio.postbox' );
        $editor = $( '#postdivrich' );
        $editor_html = $editor.html();
        $use_folio = $( '#use-folio');
        $use_def = $( '#use-default');

        $use_folio.click( function(){
            $editor.html( $meta );

            $use_def.show( 0 );
            $use_folio.hide( 0 );

        } )

        $use_def.click( function(){

            sure = confirm( 'Are you sure you wanna continue? You will lose your changes.' );

            if( sure ){
                $editor.html( $editor_html );
                $use_folio.show( 0 );
                $use_def.hide( 0 );
            }

        } )

    } )

} ) ( jQuery );
