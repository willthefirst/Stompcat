<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$blog_desc = get_bloginfo('description');
$title_description = (is_home() && !empty($blog_desc) ? ' - '.$blog_desc : '');

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 oldie" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 oldie" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 oldie" <?php language_attributes() ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes() ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ).$title_description; ?></title>
	<meta name=”description” content="We make music to stomp to. You'll love us. Look, we're already making your Google search useful.">
	<!-- Facebook Meta Info -->
	<meta property="og:image" content="STOMPCAT_TEST"/>
	<meta property="og:title" content="Stompcat"/>
	<meta property="og:description" content="We make music to to stomp to. And we brighten news feeds across the Internet." />
	<meta property="og:url" content="http://www.stompcat.com"/>
	<meta property="og:type" content="blog"/>
	<meta property="fb:app_id" content="518342208237704"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class("responsive"); ?>>

	<h1 class="strip-banner">
		<a href="/">
			<span class="hide">Stompcat</span>
			<img class="banner-img" src="<?php echo get_template_directory_uri() . '/assets-helium/img/web-banner.png'; ?>" alt="Stompcat">
		</a>
	</h1>

	<!-- <div class="cta-fixed">
		<ul>
			<li>
				<a href="http://stompcat.us7.list-manage.com/subscribe/post?u=a9647b6224323ceb07cf3ab54&amp;id=18f86f4bfb" target="_blank" class="purple">Stompletter</a>
			</li>
			<li>
				<span class="fb-like fb-like-top" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></span>
			</li>
			<li>
				<a href="https://twitter.com/stompcat" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stompcat</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</li>
		</ul>
	</div> -->

	<div class="pad-top pad-bot">
		<div class="container">
			<nav id="nav-main">
				<?php wp_nav_menu( array(
					'container' => '',
					'theme_location' => 'main',
					'depth' => 0
				)); ?>
			</nav>
		</div>
	</div>

