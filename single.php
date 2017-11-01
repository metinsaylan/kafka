<?php get_header(); ?>
<div class="row">
  <div class="col-md-8">
<?php

if( have_posts() ){

  while( have_posts() ):
  the_post();

?>
<div class="h-entry cf">
  <header class="entry-header">
  <h1 class="entry-title p-name"><a href="<?php the_permalink(); ?>" rel="bookmark" class="u-url"><?php the_title(); ?></a></h1>
	<p class="post-meta">
	  <span class="post-categories"><?php the_category(' '); ?></span>
	  <span class="separator muted"> // </span>
	  <time class="post-date dt-published" datetime="<?php the_time('c'); ?>"><?php the_date('F j, Y'); ?></time>
	  <span class="separator muted"> // </span>
	  <span class="entry-author"><a class="p-author h-card" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
	  <div class="post-tags"><?php the_tags( '<span class="tag">#', '</span><span class="tag">#', '</span>' ); ?></div>
	</p>
  </header>
  <div class="page-content e-content" role="main">
    <?php the_content(); ?>
  </div>
</div>
<?php get_template_part('nav', 'post'); ?>
<?php

	endwhile;
}
 ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
