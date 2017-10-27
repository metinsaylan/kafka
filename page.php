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
  </header>
  <div class="page-content e-content" role="main"> 
    <?php the_content(); ?>
  </div>
</div>
<?php 

	endwhile;
}
 ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>