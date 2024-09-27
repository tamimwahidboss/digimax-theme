<?php

get_header();
get_template_part('template-parts/global-elements/breadcrumb', '1');

// Start Blog Section
$options = get_option('digimax_options');
$blog_section = $options['blog_selector'];
switch($blog_section) {
        case "blog_1":
                get_template_part('template-parts/blog/grid', '2');
                break;
        case "blog_2":
                get_template_part('template-parts/blog/grid', '3');
                break;
        case "blog_3":
                get_template_part('template-parts/blog/left', 'sidebar');
                break;
        case "blog_4":
                get_template_part('template-parts/blog/right', 'sidebar');
                break;
        default:
                get_template_part('template-parts/blog/grid', '2');
}
// End Blog Section


get_template_part('template-parts/global-elements/contact/contact', '1');
get_template_part('template-parts/global-elements/cta/cta', '1');
get_footer();
?>