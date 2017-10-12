<?php
/**
 * The main template file
 * 
 * @package WordPress
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg custom-margin">
    <div class="container text-center ">
        
        <h1>Joaquin Villaverde Photography</h1>
    
    </div>
</div>
    
<div class="container"> <!--Wordpress Loop-->
    
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
      
<?php get_sidebar(); ?>
</div>
    
<?php get_footer(); ?>