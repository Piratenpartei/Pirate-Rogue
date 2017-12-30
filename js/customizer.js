/* 
 * Settings for Customizer Preview. Only used in Backend.
 */


( function( $ ) {
    wp.customize( 'pirate_rogue_footer_background_color', function( value ) {
        $("body[class^='footer-bgcol-']").removeClass( function() {
            return (this.className.match(/\b(footer-col-[a-z]+)\b/g) || []).join(' ');
        })
        
		value.bind( function( newval ) {
			$( 'body' ).addClass( "footer-bgcol-"+newval );
                       
		} );
	} );
} )( jQuery );