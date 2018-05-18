<div class="col-md-4"> 
<aside id="sidebar" class="sidebar"> 
<div class="widget widget_search shadow mb">
<?php get_search_form(); ?>
</div>
<?php dynamic_sidebar('sidebar-main'); ?>
<div class="banner banner-fixed"> 
<?php $sidebar_adcode = get_theme_mod( 'kafka_sidebar_adcode' ); echo $sidebar_adcode; ?>
</div>
</aside>
</div>
