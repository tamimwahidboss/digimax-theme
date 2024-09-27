<?php
/**
 * Template Name: Pricing Page
 */
?>


<?php 
get_header();
get_template_part('template-parts/global-elements/breadcrumb', '1');



get_template_part('template-parts/pricing-sections/pricing', '1');
get_template_part('template-parts/sections/faq', '1');
get_template_part('template-parts/testimonial-sections/testimonial', '1');




get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');
get_footer();
?>