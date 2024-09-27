<?php
/**
 * Template Name: About Page
 */
?>


<?php
get_header();

get_template_part('template-parts/global-elements/breadcrumb', '1');
get_template_part('template-parts/sections/about', '1');
get_template_part('template-parts/sections/goal', '1');
get_template_part('template-parts/sections/team', '1');
get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');

get_footer();
?>