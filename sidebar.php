<div class="col-md-4">
<aside id="sidebar" class="" role="complementary">
<div class="widget widget_search">
<?php get_search_form(); ?>
</div>

<div class="banner mb">
<?php $sidebar_adcode = get_theme_mod( 'kafka_sidebar_adcode' ); echo $sidebar_adcode; ?>
</div>

<?php dynamic_sidebar('sidebar-main'); ?>
</aside>
</div>
