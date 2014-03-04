<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

cfct_header();
?>

<div class="container">
	<h1><?php _e('Nothing here baby.', 'carrington-blueprint'); ?></h1>
</div><!-- #content -->

<?php get_footer(); ?>