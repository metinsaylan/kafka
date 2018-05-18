<div class="h-feed"><?php if( have_posts() ){ $ctr = 0; while( have_posts() ): the_post(); $ctr++; 

if( $ctr == 2 || $ctr == 5 ){
	get_template_part( 'banner', 'loop' );
}
 $col2 = 'col-md-12 no-thumb';
?>
  
	<div class="h-entry entry bglight border shadow pad mb cf">
	<div class="row no-gutter">
	
	<?php if( has_post_thumbnail() ): $col2='col-md-8'; ?>
	<div class="col-md-4">
	<div class="p-thumb">
		<a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $pID->ID, array( 200, 200) ); ?></a>
	</div>
	</div>
	<?php endif; ?>
	<div class="<?php echo $col2; ?>">	
	<div class="p-body">
	  <h3 class="p-name entry-title"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	  <p class="post-meta m0"><span class="entry-author"><a class="p-author h-card" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> <span class="separator muted"> // </span> <time class="post-date dt-published" datetime="<?php the_time('c'); ?>"><?php the_date('F j, Y'); ?></time></p>
      <p class="p-summary lh-condensed"><a rel="bookmark" class="url" href="<?php the_permalink(); ?>"><?php echo(get_the_excerpt()); ?></a></p>
	</div>
	</div>
	
	</div>
	</div>
 
<?php endwhile; ?>

<?php get_template_part( 'banner', 'loop' ); ?>
<?php get_template_part('nav', 'blog'); 

} ?></div>