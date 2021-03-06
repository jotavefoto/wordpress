<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package JVPh
 * @since JVPh 1.0 (Oct-2017)
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
       
        <nav class="navbar gradient-bg custom-nav"> <!--NavBar begin-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">JVPh</a>
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
        
        