<?php 
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');

    wp_enqueue_script('jquery-3.6.1', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array(),'null',true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-3.6.1'),'null',true);

});

add_theme_support('custom-logo')

?>