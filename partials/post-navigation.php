<nav>
  <ul class="pager">
<?php 
	$post_permalink = get_permalink(); 
	$previous_post = get_permalink(get_adjacent_post(false,'',false));
	$next_post = get_permalink(get_adjacent_post(false,'',true));
	
	if( $post_permalink != $previous_post ):
?>
<li class="previous"><a href="<?php echo $previous_post; ?>"><span aria-hidden="true">&larr;</span> Previous</a></li>
<?php endif; ?>
<?php if( $post_permalink != $next_post ): ?>
<li class="next"><a href="<?php echo $next_post; ?>">Next <span aria-hidden="true">&rarr;</span></a></li>
<?php endif; ?>
	</ul>
</nav>