<div class="entry-list">
<?php if( have_posts() ){ while( have_posts() ): the_post(); ?>
  <li>
	<a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
<?php endwhile; } ?>
</div>