</div>

<footer class="footer">
<?php if( is_active_sidebar('sidebar-footer') ): ?>
<div class="container"><div class="row">
<?php dynamic_sidebar('sidebar-footer'); ?>
</div></div>
<?php endif; ?>
<div class="container text-center ">
  <p class="muted">&copy; 2017 - <a href="<?php bloginfo('url'); ?>" class="muted"><?php bloginfo('name'); ?></a>
  </p>
  <p class="small theme-credits muted">
    <a href="https://wordpress.org/" target="_blank">Ⓦ</a> ＋ <a href="http://metinsaylan.com/kafka-wordpress-theme/" title="A WordPress theme by metinsaylan" target="_blank">KΛfKΛ</a>
  </p>
</div>
<?php wp_footer();?> </footer>

<div id="bgstripe"></div>
</body> </html>
