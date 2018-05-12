<?php get_header(); ?>
<div class="row">
<div class="col-md-8">
<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php the_archive_description( '<p class="lead">', '</p>' ); ?>	
<?php if( have_posts() ){ $ctr = 0; while( have_posts() ): the_post(); $ctr++; 
if( $ctr == 2 || $ctr == 5 ){
	get_template_part( 'banner', 'loop' );
}
?>
<div class="entry border shadow pad mb">
<h3 class="entry-title"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
<?php get_template_part( 'banner', 'loop' ); ?>

<?php get_template_part('nav', 'blog'); 
} ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>