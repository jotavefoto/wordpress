<?php
/**
 * This is the template for page-type.
 * 
 * @package WordPress
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); ?>

<div class="container"> <!--Wordpress Loop-->
    
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        
</div>
    
<?php get_footer(); ?>