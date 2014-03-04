<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>

<div id="primary" class="container">

<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		cfct_content();
	}
}
?>

</div><!-- #primary -->

<?php
get_footer();
?>