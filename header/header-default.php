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
	<!-- Facebook Meta Info -->
	<meta property="og:image" content="STOMPCAT_TEST"/>
	<meta property="og:title" content="Stompcat"/>
	<meta property="og:description"
	  content="We make music to to stomp to. And we brighten news feeds across the Internet." />
	<meta property="og:url" content="http://www.stompcat.com"/>
	<meta property="og:type" content="blog"/>
	<?php wp_head(); ?>
	<!-- Twitter share script -->
	<script src="https://platform.twitter.com/widgets.js"></script>
</head>

<body <?php body_class("responsive"); ?>>
		<div class="strip">
			<div class="container">
				<span>Hey, we are</span>
			</div>
		</div>
		<div class="container">
			<h1>Stompcat
				<img src="http://placehold.it/940x312" alt="">
			</h1>
		</div>
