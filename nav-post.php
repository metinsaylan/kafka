<div class="post-navigation">
<div class="row mt mb">
<?php
	$post_permalink = get_permalink();
	$pID = get_adjacent_post(false,'',false);
	$previous_post = get_permalink( $pID );
	$nID = get_adjacent_post(false,'',true);
	$next_post = get_permalink( $nID );

	if( $post_permalink != $previous_post ):
?>
<div class="prev-post col-md-6 text-right">
	<a href="<?php echo $previous_post; ?>" title="Previous post" data-toggle="tooltip" data-placement="left">
  <div class="border shadow pad">
	<div class="sqr pull-left mr pagination-thumb prev-thumb">
	  <?php echo get_the_post_thumbnail( $pID->ID, array( 120, 120) ); ?>
	</div>
	<span class="muted">Previous Post</span><br />
	<?php echo get_the_title( $pID ); ?>
  </div>
	</a>
</div>
<?php endif; ?>
<?php if( $post_permalink != $next_post ): ?>
<div class="next-post col-md-6">
	<a href="<?php echo $next_post; ?>" title="Previous post" data-toggle="tooltip" data-placement="left">
  <div class="border shadow pad">
	<div class="sqr pull-right ml pagination-thumb next-thumb">
	  <?php echo get_the_post_thumbnail( $nID->ID, array( 120, 120) ); ?>
	</div>
	<span class="muted">Next Post</span><br />
	<?php echo get_the_title( $nID ); ?>
  </div>
	</a>
</div>
<?php endif; ?>
</div>
</div>
