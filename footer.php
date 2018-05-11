</div>

<footer class="footer">

<?php if( is_active_sidebar('sidebar-footer') ): ?>
<div class="container"><div class="row">
<?php dynamic_sidebar('sidebar-footer'); ?>
</div></div>
<?php endif; ?>

<div class="container text-center ">
  <p id="footer-text" class="muted"><?php echo get_theme_mod( 'kafka_footer_text', '&copy; 2018  <a href="' . get_bloginfo( 'url' )  . '" class="muted">' . get_bloginfo( 'name' ) . '</a> - ' . get_bloginfo( 'description' ) ); ?>
  </p>
  <p class="small theme-credits muted">
    <a href="https://wordpress.org/" target="_blank">Ⓦ</a> ＋ <a href="http://metinsaylan.com/kafka-wordpress-theme/" title="A WordPress theme by metinsaylan" target="_blank">KΛfKΛ</a>
  </p>
</div>

<?php wp_footer();?> </footer>

</body> </html>
