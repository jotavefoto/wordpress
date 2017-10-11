<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        
        <nav class="navbar gradient-bg custom-nav"> <!--NavBar begin-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <!--Hamburguer collapse-->
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                            wp_nav_menu( array(
                                    'theme_location'    => 'primary', 
                                    'menu_class'        => 'primary-menu',
                                    'container'         => false,
                                    'items_wrap'        => '%3$s'
                                ) );
                        ?>          
                    </ul>
                </div>
            </div> <!--NavBar collapse-->
        </nav>
        
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
            
        </div>
        <?php wp_footer(); ?>
    </body>
</html>