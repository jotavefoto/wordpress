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
        
      <div class="col-md-8">
            <!--Wordpress Loop-->
            <?php if ( have_posts() ) : ?> 
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            
            <?php if ( is_singular( 'post' ) ) {
                the_post_navigation( array( 
                    'next_text' => 'Siguiente',
                    'prev_text' => 'Anterior'
                    ) );
            }
            ?>
        </div>
        
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div> 
        
    </div> <!--Row close-->
</div>
    
<?php get_footer(); ?>