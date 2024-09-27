<?php
// Retrive the csf options data
$options = get_option( 'digimax_options' );

// Add all sections from template-parts sections design
get_template_part('template-parts/hero-sections/hero', '1');
get_template_part('template-parts/promo-sections/promo', '1');
get_template_part('template-parts/content-sections/content', '1');
get_template_part('template-parts/content-sections/content', '2');
get_template_part('template-parts/service-sections/service', '1');
get_template_part('template-parts/portfolio-sections/portfolio', '1');
get_template_part('template-parts/service-sections/service', '2');
get_template_part('template-parts/pricing-sections/pricing', '1');
get_template_part('template-parts/testimonial-sections/testimonial', '2');

// Add all sections from template-parts global design
get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');
?>