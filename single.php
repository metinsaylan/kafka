<?php get_header(); ?>
<div class="row">
  <div class="col-md-8">
<?php
if( have_posts() ){
  while( have_posts() ):
	the_post();
?>
<div class="h-entry bglight pad cf">
	<header class="entry-header mb">
		<h1 class="entry-title p-name"><a href="<?php the_permalink(); ?>" rel="bookmark" class="u-url"><?php the_title(); ?></a></h1>
		<?php if( has_excerpt() ): ?>
		<p class="lead"><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
		<?php endif; ?>
		<p class="post-meta m0">
		<time class="post-date dt-published" datetime="<?php the_time('c'); ?>"><?php the_date('F j, Y'); ?></time> 
		<span class="separator muted"> // </span>
		<span class="entry-author"><a class="p-author h-card" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span> - Last update: <time class="post-date dt-updated" datetime="<?php the_modified_time('c'); ?>"><?php the_modified_date('F j, Y'); ?></time>
		<br />
		<span class="post-categories"><?php the_category(' '); ?></span> <?php edit_post_link('e'); ?></p>
	</header>
	<div class="page-content e-content" role="main">
		<?php get_template_part( 'banner', 'post' ); ?>
		<?php the_content(); ?>
		<?php get_template_part( 'banner', 'post' ); ?>
	</div>						  
	<footer class="entry-footer mt">
		<div class="post-meta"><div class="post-tags"><strong>Tags: </strong><?php the_tags( '<span class="tag">', '</span><span class="tag">', '</span>' ); ?></div></div>
		<?php get_template_part( 'share' ); ?>
	</footer>
</div>

<?php get_template_part( 'author', 'post' ) ?>
<?php get_template_part( 'nav', 'post' ); ?>

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
