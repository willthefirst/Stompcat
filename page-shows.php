<?php

// Template Name: Shows

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

cfct_header();
?>

<div class="strip strip-cta">
	<?php cfct_misc('shows'); ?>
</div>

<?php
get_footer();
?>