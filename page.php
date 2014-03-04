<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>

<div id="primary" class="c1-8">
	<?php
	// For the loop used, look in /loops
	cfct_loop();
	?>
</div><!-- #primary -->

<?php
get_footer();
?>