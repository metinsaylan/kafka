<?php get_header(); ?>
<div class="row">
  <div class="col-md-12 text-center muted">
	
	<h1 style="text-align: center;">Not <strong>Found</strong></h1>
	<p class="lead">Maybe searching will help?</p>
	
	<div class="border shadow w460 pad ma">
		<?php get_search_form(); ?>
	</div>
	
	<?php get_template_part( 'banner', 'page' ) ?>
	
	<script type="text/javascript"> /* Google Analytics error tracking */ function check_ga() { if ( typeof ga === 'function' && document.referrer ) { ga( 'send', 'event', 'error', '404', 'page: ' + document.location.pathname + document.location.search + ' ref: ' + document.referrer, {'nonInteraction': true});  } else { setTimeout(check_ga,100); } } check_ga(); </script>
	
  </div>
</div>
<?php get_footer(); ?>