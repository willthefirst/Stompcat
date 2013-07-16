<?php



if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
<div id="secondary" class="c9-12">
	<?php if (!dynamic_sidebar('sidebar-default')) { ?>
	<aside class="widget">
		<!-- Will appear of no widgets are activated -->
		<h1 class="widget-title"><?php _e('No Widgets Yet!', 'carrington-blueprint'); ?></h1>
		<p><?php printf(__('It looks like you haven&rsquo;t added any widgets to this sidebar yet. To customize this sidebar (Blog Sidebar), go <a href="%s">add some</a>!', 'carrington-blueprint'), admin_url('widgets.php')); ?></p>
	</aside>
	<?php } ?>
</div><!--#secondary-->
