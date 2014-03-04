<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }
?>
<article id="post-<?php the_ID() ?>" <?php post_class('clearfix') ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink() ?>"  title="<?php printf( esc_attr__( 'Permalink to %s', 'carrington-blueprint' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title() ?></a></h1>
		<time class="entry-date" datetime="<?php the_time('c'); ?>" pubdate><?php the_date(); ?></time>
	</header>
	<div class="entry-content">
		<?php
			the_content('<span class="more-link">'.__('Continued&hellip;', 'carrington-blueprint').'</span>');
			$args = array(
				'before' => '<p class="pages-link">'. __('Pages: ', 'carrington-blueprint'),
				'after' => "</p>\n",
				'next_or_number' => 'number'
			);
			wp_link_pages($args);
		?>
	</div>
	<div class="entry-footer entry-meta">
		<?php
			// printf(__('<p><strong>Categories:</strong> %s</p>', 'carrington-blueprint'), get_the_category_list(', '));
			// the_tags(__('<p><strong>Tags:</strong> ', 'carrington-blueprint'), ', ', '</p>');
		?>
	</div>
	<p><?php edit_post_link(); ?></p>
</article><!-- .post -->
