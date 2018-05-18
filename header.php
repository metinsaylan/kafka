<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
<?php wp_head();?>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed);
.cf:after,.clr{clear:both} .cf:after,.cf:before {content:" ";display:table}
.m0,p.m0{margin:0}
.mb{margin-bottom:30px}
.mb-2{margin-bottom:8px!important}
.mt{margin-top:30px}
.ma{margin-left:auto;margin-right:auto}
.p0{padding:0}
.pad{padding:30px}
.pad p:last-child{margin-bottom:0}
.pt{padding-top:30px}
.pb{padding-bottom:30px}
.tac,.text-center{text-align:center}
.tal,.text-left{text-align:left}
.tar,.text-right{text-align:right}
.scroll{max-height:340px;overflow-y:scroll}
small,.small{font-size:85%}
ul,ol{margin-bottom:0;margin-top:0;padding-left:0}
.list-style-none{list-style:none!important}
.lh-condensed{line-height:1.25!important}
.alt-text-small{font-size:14px!important}
.w460{max-width:460px}
.e-content img{height:auto;max-width:100%}
img.aligncenter,img.alignleft,img.alignright{display:block}
.aligncenter{float:none;margin:1.64em auto}
.alignleft{float:left;margin-right:1.64em}
.alignright{float:right;margin-left:1.64em}
.wp-caption{margin-bottom:1.64em;max-width:100%}
p.wp-caption-text{font-size:.9em;font-weight:100;margin:.4em 0 0;text-align:center}
body{background-color:#f5f7f8;overflow-x:hidden}
/* links */
a{color:#268bd2;transition:all ease-in-out .2s}
a:focus,a:hover{color:#16527c}
.entry-title a{color:#333}
.entry-title a:hover{color:#268bd2}
a,a:focus,a:hover,.paginated-comments-links a:hover,.wp-pagenavi a:hover{text-decoration:none}
.e-content a:visited{color:#850086}
pre{font-size:15px;white-space:pre-wrap }
code{background-color:#e5e5e1;border-radius:6px;padding:.2rem .4rem }
blockquote,pre{background:#fafaf8}
/* typography */
body,button,input,select,textarea{color:#474747;font: 16px/1.7 "Roboto",sans-serif }
.entry-title,h1,h2,h3,h4{font-family:'Roboto Condensed',sans-serif;line-height:1.3 }
.entry-title{ margin:0 } h4.widget-title{margin-top:0 }
h1.entry-title{font-size:32px}
.e-content h3,h4.widget-title{color:#850086;font-size:28px }
.e-content h3:after,h4.widget-title:after{background:#e2e2e0;content:"";display:block;height:5px;width:25% }
.lead,blockquote{color:#555;font-size:110%;line-height:1.4}
.e-content p:first-child{color:#111;font-size:18px}
.sidebar h4.widget-title{font-size:24px}
.comments-area{font-size:90%}
.comment-meta a{font-size:85%}
p.no-comments{font-size:120%}
/* mute text */
.muted,.p-author,.post-date,a[rel*=category],.form-control,.pager li>span,.paginated-comments-links>span,.wp-pagenavi>span,p.no-comments,.comment-meta a,span.says{color:#ccc}
.footer .muted,.footer .muted a,.footer .muted a:visited{color:#ccc!important}
::placeholder,:-ms-input-placeholder,::-ms-input-placeholder{color:#ccc;opacity:.7}
.wp-pagenavi>span{color:#ccc}
.p-summary{color:#777} .p-summary a{color:#777} .p-summary a:hover{color:#268bd2}
/* background colors */
input[type=text].form-control,.listing,li.comment,.sidebar .widget,.footer .widget, .wp-pagenavi a,.bglight{background:#fff}
.e-content blockquote,.container .entry:first-child,.wp-pagenavi a:hover{background:#fffbdd}
/* spacing */
.pad,blockquote,li.comment,li.pingback,p.no-comments,.comments-navigation,.wp-pagenavi,.footer{padding:30px}
.mb,.navbar,.widget_search,.lead,.e-content h3,li.comment,li.pingback,.panel,.h-entry{margin-bottom:30px}
.widget p:last-child,.widget ul:last-child{margin-bottom:0}
blockquote,.e-content pre{margin:30px 0}
.e-content p, .e-content ul,.e-content ol{margin:0 0 30px}
.e-content ul,.e-content ol{padding-left: 30px}
.sidebar .pad{padding:20px}
.widget_search,.sidebar .banner{margin-bottom:8px}
.panel{padding:4px}
/* alignments */
.comments-navigation,.wp-pagenavi,p.no-comments{text-align:center}
/* borders */
pre,blockquote,.border,.panel,.pager li>a,.pager li>span,.paginated-comments-links a,.paginated-comments-links>span,.wp-pagenavi a,.wp-pagenavi>span,img.aligncenter,img.alignleft,img.alignright,.form-control,div#disqus_thread,li.comment,li.pingback,.syntaxhighlighter,input[type=text].form-control{border:1px solid #eee}
.border-bottom{border-width:0 0 1px}
.widget ul,.widget ul li,div.separator,hr{border-color:#eee}
/* shadows */
.shadow,blockquote,.panel,.pager li>a,.pager li>span,.paginated-comments-links a,.paginated-comments-links>span,.wp-pagenavi a,.wp-pagenavi>span,img.aligncenter,img.alignleft,img.alignright,li.comment,li.pingback,.h-entry
{border-radius:6px;box-shadow:0 1px 6px 0 rgba(117,117,117,.25)}
.pager li>span,.paginated-comments-links>span,.wp-pagenavi>span{box-shadow:none}
/* navbar */
nav.navbar{background:transparent;border:0;position:relative;z-index:9}
.navbar-default .navbar-nav>li>a{color:rgba(0,0,0,0.50)}
.navbar-default .navbar-nav>li>a:hover{color:#000}
.navbar-default .navbar-brand{color:#777;font-size:24px}
.navbar-toggle .icon-bar{height:4px}
.dropdown-menu{font-size:16px}
/* thumbs */
.h-entry.entry{padding:0}
.p-body{padding: 30px 30px 30px 0;} .no-thumb .p-body{padding:30px}
.p-thumb{background:#def;max-height:228px;border-top-left-radius:6px;border-bottom-left-radius:6px;overflow:hidden}
.p-thumb img{width:100%;height:auto}
/* tags and cats */
a[rel*=category], a[rel*=tag],.pager li>a,.pager li>span,.paginated-comments-links a,.paginated-comments-links>span,.wp-pagenavi a,.wp-pagenavi>span{color: #ccc;border:1px solid #ccc;border-radius:4px;display:inline-block;font-size:15px;margin:4px 5px 3px 0;padding:0 6px;white-space:nowrap}
.wp-pagenavi a, .wp-pagenavi span{font-size:18px;padding:2px 12px}
a[rel*=tag]{border-radius:7px 7px 7px 0}
a[rel*=category]{border-radius:7px 0 7px 7px}
a[rel*=category]:hover, a[rel*=tag]:hover{color:#268bd2;border-color:#268bd2}
/* comments */
li.comment,li.pingback{list-style:none}
img.avatar{border:1px solid #eee;border-radius:50%;float:left;margin-right:20px}
/* sidebar widgets */
.sidebar .widget {margin-bottom:4px}
.sidebar .widget ul {padding:0}
.sidebar .widget ul li {line-height:1.2em;list-style:none}
.sidebar .widget ul li a {border:1px solid #eee;border-radius:5px;display:block;height:43px;line-height:30px;margin:0 0 5px;overflow:hidden;padding:5px 8px;text-overflow:ellipsis;white-space:nowrap}
.sidebar .widget ul li a:hover {background:#e5e5e1}
.banner-fixed.affix { top: 30px; }
.banner-fixed.affix-bottom { position: absolute; }
@media only screen and (max-width: 1024px) {
	.banner.affix,.banner-fixed.affix-bottom { position: static; top: auto;bottom: auto;left: auto; }
	.p-thumb{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:0}
	.p-body{padding:20px}
}
/* buttons */ 
a.btn{background:transparent;border:2px solid;border-radius:8px;color:#000;margin:1rem 0;padding:10px 15px;text-decoration:none}
a.btn+a.btn{margin-left:15px}
a.btn.btn-success{color:#4CAF50}
a.btn.btn-primary:hover,a.btn.btn-success:hover{color:#fff}
div#share a.btn {border:2px solid #ddd;display:inline-block;margin:0 0 4px;padding:6px 19px 1px}
/* external links styling */
.e-content a:not( [class*=btn] ):not( [href*=<?php echo bloginfo('url'); ?>] ):not( [href*=<?php echo bloginfo('url'); ?>] ):not( [href^=#] ):not( [href^=/] ){border-bottom:1px solid #ddd}
.e-content a:not( [href*=<?php echo bloginfo('url'); ?>] ):not( [href*=<?php echo bloginfo('url'); ?>] ):not( [href^=#] ):not( [href^=/] ):after{content:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==");margin:0 3px 0 5px}
.e-content a.btn:after{display:none}
/* visual fx */
.listing.page:before {color:#999;content:"PAGE";font-size:12px}
.listing.post:before {color:#999;content:"POST";font-size:12px}
div.separator, hr { padding-top: 12px; margin-top: 45px; margin-bottom: 33px; border-top: 3px solid #FFF; clear: both; padding-bottom: 0; border-bottom: 0; background: -moz-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); background: -webkit-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); background: -o-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); background: -ms-radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); background: radial-gradient(50% 0, ellipse, rgba(196,196,196,0.51) 0, rgba(34,34,34,0) 75%); }
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
		'items_wrap' 		=> '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
		'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		'walker'            => new WP_Bootstrap_Navwalker())
	);
	?>
	</div>
</nav>

<div class="container">
