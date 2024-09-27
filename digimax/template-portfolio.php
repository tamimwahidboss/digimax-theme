<?php
/**
 * Template Name: Portfolio Page
 */
$options = get_option( 'digimax_options' );
$hm_ser = $options['home_page_selector'];
get_header();
get_template_part('template-parts/global-elements/breadcrumb', '1');
// Testimonial section condition
if(in_array($hm_ser, ['home_page_1', 'home_page_3', 'home_page_4', 'home_page_5', 'home_page_6'])){
    get_template_part('template-parts/portfolio-sections/portfolio', '1');
} elseif(in_array($hm_ser, ['home_page_2'])){
    get_template_part('template-parts/portfolio-sections/portfolio', '2');
}
get_template_part('template-parts/testimonial-sections/testimonial', '1');

get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');
get_footer();
?>