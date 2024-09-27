<?php
// Retrive the csf options data
$options = get_option( 'digimax_options' );

// Add all sections from template-parts sections design
get_template_part('template-parts/hero-sections/hero', '4');
get_template_part('template-parts/sections/brand', '1');
get_template_part('template-parts/content-sections/content', '1');
get_template_part('template-parts/content-sections/content', '2');
get_template_part('template-parts/service-sections/service', '2');
get_template_part('template-parts/pricing-sections/pricing', '1');
get_template_part('template-parts/testimonial-sections/testimonial', '1');

// Add all sections from template-parts global design
get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');
?>