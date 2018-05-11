<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">

<?php wp_head();?>

<?php

  $pad = get_theme_mod( 'pad', '30px' );
  $bglight = get_theme_mod( 'bglight', '#f0f0f0' ); /* f5f1e4 */
  $bgdark  = get_theme_mod( 'bgdark', '#dddddd' ); /* cec8b7 */
  $shadow = get_theme_mod( 'shadow', '0 1px 6px 0 rgba(117,117,117,.25); border-radius: 6px' );
  $border = get_theme_mod( 'border', '0' );
  $mute = '#aaa';

  $color = get_theme_mod( 'color', '#474747' );
  $fontsize = get_theme_mod( 'fontsize', '16px' );

?>

<style type="text/css"><?php
  $kafka_google_fonts = get_theme_mod( 'kafka_google_fonts', 'Roboto+Condensed:700|Roboto+Slab:400,600' );
  if( $kafka_google_fonts != '' ):  ?>
@import url('https://fonts.googleapis.com/css?family=<?php echo $kafka_google_fonts; ?>');
<?php endif; ?>
/* Util */
a{ transition: all ease-in-out .2s } .cf:after,.clr{ clear:both } .cf:after,.cf:before{ content:" "; display:table } .m0, p.m0{ margin:0 } .mb{ margin-bottom: <?php echo $pad; ?> } .mt{ margin-top:2rem } .ma{ margin-left:auto; margin-right:auto } .p0{ padding:0 } .pad{ padding:<?php echo $pad; ?> } .pad p:last-child { margin-bottom: 0 } .pad2{ padding:2rem } .pt{ padding-top: <?php echo $pad; ?> } .pb{ padding-bottom: <?php echo $pad; ?> } .tac, .text-center{ text-align:center } .tal, .text-left{ text-align:left } .tar, .text-right{ text-align:right } .scroll{ max-height:340px; overflow-y:scroll } small, .small{ font-size:85% } .w460{ max-width:460px }

/* Common */
.aligncenter{ float:none; margin:1.64em auto } .alignleft{ float:left; margin-right:1.64em } .alignright{ float:right; margin-left:1.64em } .wp-caption{ margin-bottom:1.64em; max-width:100% } p.wp-caption-text{ font-weight:100; text-align:center; margin:.4em 0 0; font-size:.9em } img.aligncenter, img.alignleft, img.alignright { display: block }

/*- Layout */
body{ overflow-x: hidden }
body.page-template-page-template-narrow .container { max-width: 840px }

/*- Typography */
body,button,input,select,textarea { font-family:'Roboto Slab', serif; color:<?php echo $color; ?>; font-size: <?php echo $fontsize; ?> ; font-weight:400; line-height: 1.7 } .entry-title,h1,h2,h3,h4 { font-family:"Roboto Condensed",sans-serif; line-height: 1.3 } .entry-title{ font-size:28px; margin:0 } h1.entry-title, h1.page-title{ font-size:36px } h6.entry-title { font-size:22px; max-height:72px; overflow:hidden; margin-bottom:10px; font-family:'Roboto',sans-serif; font-weight:500 } .e-content h3,h4.widget-title{ font-weight:700; font-size:30px; color:#850086 } h4.widget-title{ margin-top:0 } .lead, blockquote { font-size: 105%; font-weight: 100; line-height: 1.4; color: #555; font-family: "Roboto","Helvetica Neue",Helvetica,Arial,sans-serif; } .e-content blockquote { background: #fffbdd } pre{ font-size: 15px; white-space: pre-wrap } code{ padding:.2rem .4rem; background-color:#e5e5e1; border-radius:6px }

/*- Color Fill */
body { background-color: <?php echo get_theme_mod( 'kafka_body_bgcolor', '#fafaf8' ); ?> }  input[type=text].form-control, .h-entry, .entry, .listing, li.comment, .sidebar .widget, .footer .widget, div#respond, .bglight { background: <?php echo $bglight; ?> } blockquote,pre{ background:#fff } .jumbotron { background: <?php echo $bgdark; ?> } .footer, nav.navbar, .panel-heading, code, #bgstripe { background: <?php echo $bgdark; ?> }

/*- Links */
a{ color:#268bd2 } a:focus,a:hover{ color:#16527c } .entry-title a{ color:#333 } .entry-title a:hover{ color:#268bd2 } a,a:focus,a:hover,.paginated-comments-links a:hover,.wp-pagenavi a:hover { text-decoration:none }

/*- Muted Text */
.muted, .p-author, .post-date, a[rel*=category], .form-control, .pager li>span, .paginated-comments-links>span, .wp-pagenavi>span, p.no-comments, .comment-meta a, span.says { color: <?php echo $mute; ?> }
::placeholder { color: <?php echo $mute; ?>; opacity: 1 }
:-ms-input-placeholder { color: <?php echo $mute; ?> }
::-ms-input-placeholder { color: <?php echo $mute; ?> }
.footer .muted { color: <?php echo $bglight; ?> }

.footer p.muted, .footer p.muted a, .footer p.muted a:visited {
    color: #ccc;
    margin: 0;
}

/*- Spacing */
 .pad, blockquote, div#disqus_thread, li.comment, li.pingback, p.no-comments, .comments-navigation,.wp-pagenavi, .footer, .h-entry { padding: <?php echo $pad; ?> } .mb, .navbar, .widget_search, .lead, .e-content h3, li.comment, li.pingback, div#disqus_thread, .h-entry { margin-bottom: <?php echo $pad; ?> } .widget p:last-child,.widget ul:last-child { margin-bottom: 0 } blockquote, .e-content pre, .syntaxhighlighter{ margin:<?php echo $pad; ?> 0 }

/* Alignments */
.comments-navigation,.wp-pagenavi { text-align:center }

/*- Borders */
pre, blockquote, .border, .panel, .pager li>a, .pager li>span, .paginated-comments-links a, .paginated-comments-links>span, .wp-pagenavi a, .wp-pagenavi>span, img.aligncenter, img.alignleft, img.alignright, span.tag, .form-control, div#disqus_thread, li.comment, li.pingback, .syntaxhighlighter, input[type=text].form-control, .h-entry { border: <?php echo $border; ?> solid <?php echo $bgdark; ?> } .e-content blockquote { border-width: <?php echo $border; ?> <?php echo $border; ?> <?php echo $border; ?> 10px } .border-bottom { border-width: 0 0 <?php echo $border; ?> 0 } .widget ul, .widget ul li, div.separator, hr { border-color: <?php echo $bgdark; ?> }

/*- Shadows */
/*-- Outset */
.shadow, blockquote, .panel, .pager li>a, .pager li>span, .paginated-comments-links a, .paginated-comments-links>span, .wp-pagenavi a, .wp-pagenavi>span, img.aligncenter, img.alignleft, img.alignright, li.comment, li.pingback, div#respond, .h-entry { box-shadow: <?php echo $shadow; ?> } .pager li>span,.paginated-comments-links>span,.wp-pagenavi>span { box-shadow:none }

/*-- Inset */
.footer, nav.navbar { box-shadow: none !important; border-radius: 0 !important }

/*- Other customizations */
nav.navbar{ position:relative; z-index:9; border:0 }
.navbar-default .navbar-brand{ font-weight:700; font-size:28px }
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus { background-color: <?php echo $bglight; ?>; }
.e-content img{ max-width:100%; height:auto }
p.post-meta.m0 { margin-bottom: 8px; }
span.tag{ display:inline-block; border-radius:7px 7px 7px 0; padding:0 8px; margin:4px 5px 3px 0; background-color:#fff; white-space:nowrap; line-height:30px }
.container .entry:first-child { background: #fffbdd; border-color: #fffef6 }
div.separator, hr { padding-top: 12px; margin-top: 45px; margin-bottom: 33px; border-top: 3px solid #FFF; clear: both; padding-bottom: 0; border-bottom: 0;
  background: -moz-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%);
  background: -webkit-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%);
  background: -o-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%);
  background: -ms-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%);
  background: radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); }

/*- Post navigation */
.post-navigation { line-height: 1.5 }

/*- Comments */
.comments-area{ font-size: 90% }
li.comment, li.pingback { list-style: none; } img.avatar { border-radius: 50%; border: 3px solid <?php echo $bgdark; ?>; float: left; margin-right: 20px } .comment-meta a { font-size: 85% } p.no-comments { text-align: center; font-size: 120% }

/*- Pagination */
.wp-pagenavi a:hover { background: #fff } .pager li>a,.pager li>span,.paginated-comments-links a,.paginated-comments-links>span,.wp-pagenavi a,.wp-pagenavi>span{ display:inline-block; padding:0 15px; margin:3px; border-radius:8px; font-size:22px; color:#000 }

/*- Sidebar */
.widget ul { padding: 0 }
.widget ul li { line-height: 1.2em; list-style: none }
.widget ul li a { display: block; padding: 5px 8px; border: 1px solid <?php echo $bgdark; ?>; margin: 0 0 5px; border-radius: 5px; line-height: 30px; height: 43px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis }
.widget ul li a:hover { background: #e5e5e1 }

/*- Forms */
.form-control { padding: 1px 8px !important; box-shadow: none !important; }

/*- Buttons */
a.btn { border: 3px solid; text-decoration: none; border-radius: 8px; padding: 3px 11px; margin: 1rem 0; padding: 10px 15px; background: transparent; color: #000; }
a.btn+a.btn { margin-left: 15px; }
a.btn.btn-success { color: #4CAF50; }
a.btn.btn-primary:hover, a.btn.btn-success:hover { color: #fff; }
li.btn a { padding: 0; }
li.menu-item.btn { margin-top: 14px; margin-left: 20px; background: #e5e5e1; color: #000; }

/*- Plugins */
.e-content a:not( [href*='<?php echo bloginfo('url'); ?>'] ):not( [href^='#'] ):not( [href^='/'] ):after { content: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg=="); margin: 0 3px 0 5px; }

.author h6 { margin: 0; color: #aaa } .author h3 { margin: 0 0 6px } .author img.u-photo { float: right; width: 175px; margin-left: 30px; border-radius: 6px; background: #dcebf3; padding: 6px; }

.pad-sm, div#respond { padding: 8px; }
.author-sm img.u-photo { float: left; margin-right: 8px; }
.author-sm h4 { margin: 0;  }

/* Comments */ 
div#respond { border-radius: 6px; } h3#reply-title{ margin: 0; font-size: 24px } p.logged-in-as { margin: 0 } textarea#comment { border: 1px solid #eee; width: 100%; height: 60px } input#submit { border: 2px solid #333; background: #fff; border-radius: 6px } p.form-submit { text-align: right; margin: 0 }
</style>

</head><body <?php body_class(); ?>>
  <nav class="navbar navbar-default animated fadeInDown">
	<div class="container">
	  <div class="navbar-header">

		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navmain" aria-expanded="false" aria-controls="navbar">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>

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
