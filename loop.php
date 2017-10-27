<div class="row">
<?php if( have_posts() ){ while( have_posts() ): the_post(); ?>
  <div class="col-md-4">
	<a rel="bookmark" class="url" href="<?php the_permalink(); ?>">
	<div class="entry pad border shadow mb">
	  <h6 class="entry-title"><?php the_title(); ?></h6>
      <?php the_excerpt(); ?>
	</div>
	</a>
  </div>
<?php endwhile; } ?>
</div>