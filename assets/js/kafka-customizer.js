( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( 'a.navbar-brand' ).html( newval );
		} );
	} );

	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( 'a.navbar-brand' ).attr( 'title', newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'bgcolor_light', function( value ) {
		value.bind( function( newval ) {
			$('body, input[type=text].form-control, .h-entry, .sidebar .widget, .footer .widget').css('background-color', newval );
		} );
	} );

  wp.customize( 'bgcolor_dark', function( value ) {
		value.bind( function( newval ) {
			$('.footer, nav.navbar, .panel-heading, code, body:after').css('background-color', newval );
		} );
	} );

	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );

} )( jQuery );
