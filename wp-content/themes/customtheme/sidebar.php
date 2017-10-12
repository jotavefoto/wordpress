<?php
/**
 * Side-bar template
 * 
 * @package WordPress
 * @since Twenty Sixteen 1.0
 */
?>


    <?php if ( is_active_sidebar( 'sidebar-1') ) : ?>
          <aside id="secondary" class="sidebar widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </aside>
    <?php endif; ?>