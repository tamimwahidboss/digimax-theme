<?php
/**
 * Template Name: Contact Page
 */
?>


<?php 
get_header();
get_template_part('template-parts/global-elements/breadcrumb', '1');
get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/sections/map', '1');

get_template_part('template-parts/global-elements/cta/cta', '1');

get_footer();
?>