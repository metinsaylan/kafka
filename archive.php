<?php get_header(); ?>
<div class="row">
<div class="col-md-8">
<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php the_archive_description( '', '' ); ?>	
<?php get_template_part( 'loop' ); ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>