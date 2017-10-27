<?php get_header(); ?>
<div class="row">
  <div class="col-md-8">
	
<?php if( have_posts() ){ while( have_posts() ): the_post(); ?>
  
	<div class="entry border shadow pad mb">
	  <h3 class="entry-title"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
	</div>
 
<?php endwhile; get_template_part('nav', 'blog'); } ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>