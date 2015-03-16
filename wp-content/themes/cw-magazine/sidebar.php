<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package cw-magazine
 */
?>
	<div id="secondary" class="sidebar widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if (  is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php else: ?>
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'cw-magazine' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
			
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->