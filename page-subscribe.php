<?php

// Template Name: Subscribe

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

cfct_header();
?>

<div class="mar-top strip-cta">
	<?php cfct_misc('subscribe'); ?>
</div>

<?php
get_footer();
?>