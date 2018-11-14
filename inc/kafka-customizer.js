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

	wp.customize( 'kafka_footer_text', function( value ) {
		value.bind( function( newval ) {
			$('#footer-text').html( newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'bgcolor_light', function( value ) {
		value.bind( function( newval ) {
			$('body, input[type=text].form-control, .h-entry, .entry, .sidebar .widget, .footer .widget').css('background-color', newval );
		} );
	} );

  wp.customize( 'bgcolor_dark', function( value ) {
		value.bind( function( newval ) {
			$('.footer, nav.navbar, .panel-heading, code, #bgstripe').css('background-color', newval );
		} );
	} );

	wp.customize( 'kafka_text_color', function( value ) {
		value.bind( function( newval ) {
			$('body,button,input,select,textarea').css('color', newval );
		} );
	} );

	wp.customize( 'kafka_text_size', function( value ) {
		value.bind( function( newval ) {
			$('body,button,input,select,textarea').css('font-size', newval );
		} );
	} );

	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar a, .e-content a').css('color', newval );
		} );
	} );

	wp.customize( 'global_padding', function( value ){
		value.bind( function ( newval ){
			$( '.pad, blockquote, div#disqus_thread, li.comment, li.pingback, p.no-comments, .comments-navigation,.wp-pagenavi, .footer, .h-entry' ).css( 'padding', newval );
			$( '.mb, .navbar, .widget_search, .lead, .e-content h3, li.comment, li.pingback, div#disqus_thread, .h-entry' ).css( 'margin-bottom', newval );
			$( 'blockquote, .e-content pre, .syntaxhighlighter' ).css( 'margin-top', newval );
			$( 'blockquote, .e-content pre, .syntaxhighlighter' ).css( 'margin-bottom', newval );
		} );
	} );

	wp.customize( 'global_border', function( value ){
		value.bind( function ( newval ){
			$( 'pre, blockquote, .border, .panel, .pager li>a, .pager li>span, .paginated-comments-links a, .paginated-comments-links>span, .wp-pagenavi a, .wp-pagenavi>span, img.aligncenter, img.alignleft, img.alignright, span.tag, .form-control, div#disqus_thread, li.comment, li.pingback, .syntaxhighlighter, input[type=text].form-control, .h-entry' ).css( 'border-width', newval );
			$( '.mb, .navbar, .widget_search, .lead, .e-content h3, li.comment, li.pingback, div#disqus_thread, .h-entry' ).css( 'margin-bottom', newval );
			$( 'blockquote, .e-content pre, .syntaxhighlighter' ).css( 'margin-top', newval );
			$( 'blockquote, .e-content pre, .syntaxhighlighter' ).css( 'margin-bottom', newval );
		} );
	} );

} )( jQuery );
