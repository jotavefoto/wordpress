<?php 

//Carga stylesheets.
function enqueue_customtheme_styles() {
    
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('customtheme-style', get_stylesheet_uri() );
    
}
add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

function customtheme_setup() {
    //Registra un menu de navegacion primario customizado
    register_nav_menus( array( 
        'primary' => __( 'Primary Menu', 'customtheme' )
        ));
        
        //Theme support para title-tag
        add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'customtheme_setup' );

?>