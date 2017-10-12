<?php 


function enqueue_jvph_styles() {
// Carga stylesheets    
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('customtheme-style', get_stylesheet_uri() );
    
}
add_action('wp_enqueue_scripts', 'enqueue_jvph_styles');

function jvph_setup() {
// Registra un menu de navegacion primario customizado
    register_nav_menus( array( 
        'primary' => __( 'Primary Menu', 'customtheme' )
        ));
        
        //Support para title-tag
        add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'jvph_setup' );

function jvph_widgets() {
// Registra la sidebar
    register_sidebar( array( 
        'name'          => __('Sidebar', 'customtheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here', 'customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
        
        ) );
}
 add_action( 'widgets_init', 'jvph_widgets' );

?>