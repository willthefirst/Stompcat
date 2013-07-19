<?php



if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }
?>

	<div class="strip post-banner-text">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
