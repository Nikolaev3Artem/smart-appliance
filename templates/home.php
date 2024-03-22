<?php 
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<?php
    get_template_part('template-parts/hero');
    get_template_part('template-parts/professional-appliance');
    get_template_part('template-parts/home/meet-fix');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/home/our-team');
    get_template_part('template-parts/home/we-offer');
    get_template_part('template-parts/home/same-day-appliance');
    get_template_part('template-parts/home/why-choose-fix-appliance');
    get_template_part('template-parts/licensed-repair');
    get_template_part('template-parts/appliance-in-your-area');
    get_template_part('template-parts/faq');
    get_template_part('template-parts/recent-articles');
?>

<?php get_footer(); ?>