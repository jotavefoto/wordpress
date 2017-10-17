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
    
    <div class="col-md-8">
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
      
    <div class="col-md-4"> <!--Sidebar-->
            <?php get_sidebar(); ?>
    </div> <!--Sidebar end-->
</div>
    
<?php get_footer(); ?>