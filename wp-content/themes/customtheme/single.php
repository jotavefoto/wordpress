<?php
/**
 * Single-post view
 * 
 * @package WordPress
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); ?>

<div class="container"> 
    <div class="row">
        
      <div class="col-md-8"> <!--Main column-->
           
            <?php if ( have_posts() ) : ?>  <!--Wordpress loop-->
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'single'); ?> <!--Call a content-single.php-->
                        
                        <?php //Get comments.php
                            if( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            
            <?php if ( is_singular( 'post' ) ) {
                the_post_navigation( array( 
                    'next_text' => 'Siguiente',
                    'prev_text' => 'Anterior'
                    ) );
            }
            ?>
            
        </div><!--Main column end-->
        
        <div class="col-md-4"> <!--Sidebar-->
            <?php get_sidebar(); ?>
        </div> <!--Sidebar end-->
        
    </div> <!--Row end-->
</div>
    
<?php get_footer(); ?>