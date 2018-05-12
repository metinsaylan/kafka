<?php get_header(); ?>
<div class="row">
<div class="col-md-8">
<h1 class="entry-title">Search results for <strong><?php echo get_search_query(); ?></strong></h1>
<?php if( have_posts() ){ $ctr = 0; while( have_posts() ): the_post(); $ctr++;
if( $ctr == 3 || $ctr == 5 ){
	get_template_part( 'banner', 'loop' );
}
?>
<div <?php post_class('listing border pad shadow mb'); ?>>
<h6 class="entry-title"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
<?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
<?php get_template_part( 'banner', 'loop' ); ?>

<?php get_template_part('nav', 'blog');
} else { get_template_part('content', '404'); } ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
