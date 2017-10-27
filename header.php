<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<style> <?php include 'theme.min.css'; ?> </style>
<?php wp_head();?>
  </head>
<body <?php body_class(); ?>>

  <nav class="navbar navbar-default animated fadeInDown">
	<div class="container">
	  <div class="navbar-header">
		
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navmain" aria-expanded="false" aria-controls="navbar">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		
	  </div>
	  
	  <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navmain',
                'menu_class'        => 'nav navbar-nav',
			  
			  'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>', 
			  
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
	  	  
	</div>
  </nav>
  
<div class="container">          