</div>
<footer class="footer">
<?php if( is_active_sidebar('sidebar-footer') ): ?>
<div class="container"><div class="row">
<?php dynamic_sidebar('sidebar-footer'); ?>
</div></div>
<?php endif; ?>
<div class="container text-center "><div class="row">
<?php
	wp_nav_menu( array(
		'menu'              => 'footer',
		'theme_location'    => 'footer',
		'depth'             => 0,
		'container'         => 'nav',
		'container_class'   => '',
		'container_id'      => 'navfooter',
		'menu_class'        => 'footer-menu',

        'items_wrap' => '<ul class="list-inline muted">%3$s</ul>',
		'item_spacing' => 'discard',

		'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		'walker'            => new WP_Bootstrap_Navwalker())
	);
?>
</div></div>
<div class="container text-center ">
  <p id="footer-text" class="muted"><?php echo get_theme_mod( 'kafka_footer_text', '&copy; 2018  <a href="' . get_bloginfo( 'url' )  . '" class="muted">' . get_bloginfo( 'name' ) . '</a> - ' . get_bloginfo( 'description' ) ); ?>
  </p>
  <p class="small theme-credits muted">
    <a href="https://wordpress.org/" target="_blank">Ⓦ</a> ＋ <a href="http://metinsaylan.com/kafka-wordpress-theme/" title="A WordPress theme by metinsaylan" target="_blank">KΛfKΛ</a>
  </p>
</div>

<?php wp_footer();?> </footer>
<script>!function(t){t(".banner-fixed").affix({offset:{top:function(){var o=t(".banner-fixed").offset().top+30,n=parseInt(t(document.body).css("padding-top"),10)||0;return this.top=o-n},bottom:function(){var o=t(".footer").outerHeight(!0)||0;return this.bottom=o+30}}})}(jQuery);</script>
<?php get_template_part( 'partials/extra', 'microlight' ); ?>
</body> </html>
