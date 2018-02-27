<?php get_header(); ?>
<div class="row">
  <div class="col-md-8">
<?php

if( have_posts() ){
  
  while( have_posts() ):
  the_post();
  
?>
<div class="h-entry">
  <header class="entry-header"> 
  <h1 class="entry-title p-name"><a href="<?php the_permalink(); ?>" rel="bookmark" class="u-url"><?php the_title(); ?></a></h1>
  <?php if( has_excerpt() ): ?>
	<p class="lead"><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
  <?php endif; ?>
  </header>
  <div class="page-content e-content" role="main"> 
	<?php get_template_part( 'banner', 'page' ) ?>
    <?php the_content(); ?>
	<?php get_template_part( 'banner', 'page' ) ?>
  </div>
</div>

<?php 
 if ( comments_open() || get_comments_number() ) :
    comments_template();
 endif;
?>


<?php 

	endwhile;
}
 ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>