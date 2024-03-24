<?php 
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');

    wp_enqueue_script('jquery-3.6.1', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array(),'null',true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-3.6.1'),'null',true);

});

add_theme_support('custom-logo');
add_action( 'init', 'create_custom_post_type' );

function create_custom_post_type() {
    register_post_type( 'Repair',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Ремонт' ),
                'singular_name' => __( 'Ремонт' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'Repair'),
        )
    );
    register_post_type( 'faq',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Часто задаваємі запитання' ),
                'singular_name' => __( 'запитання' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'faq'),
        )
    );
    remove_post_type_support( 'faq', 'editor' );

}

register_taxonomy('Repair','Repair');
register_taxonomy('faq','faq');

?>