<?php



if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

// Calls header.php
get_header();
?>

<div id="primary" class="c1-8">
<?php
// For the loop used, look in /loops
cfct_loop();
comments_template();
?>
	<div class="pagination pagination-single">
		<span class="next"><?php next_post_link() ?></span>
		<span class="previous"><?php previous_post_link() ?></span>
	</div>
</div> <!-- #content -->
<?php

// Calls sidebar.php
get_sidebar();

// Calls footer.php
get_footer();

?>