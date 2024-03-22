<?php 
/*
Template Name: About-Us
*/
?>
<?php get_header(); ?>

<?php
    get_template_part('template-parts/hero');
    get_template_part('template-parts/about-us/about-us');
    get_template_part('template-parts/about-us/service-repair');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/licensed-repair');
    get_template_part('template-parts/about-us/our-team');
?>

<?php get_footer(); ?>