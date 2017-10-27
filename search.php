<?php get_header(); ?>
<div class="row">
  <div class="col-md-8">	
<?php if( have_posts() ){ while( have_posts() ): the_post(); ?>
	<div <?php post_class('listing border pad shadow mb'); ?>>
	  <h6 class="entry-title"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
      <?php the_excerpt(); ?>
	</div>
<?php endwhile; } ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>