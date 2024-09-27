<?php
/**
 * Template Name: Search Page
 */
?>

<?php
        get_header();
        get_template_part('template-parts/sections/breadcrumb01', 'section');

        $options = get_option('digimax_options');
        // Start Blog Section
        $blog_section = $options['blog_selector'];
        switch($blog_section) {
                case "blog_1":
                        get_template_part('template-parts/content', 'blog');
                        break;
                case "blog_2":
                        get_template_part('template-parts/content', 'blog02');
                        break;
                case "blog_3":
                        get_template_part('template-parts/content', 'blog03');
                        break;
                case "blog_4":
                        get_template_part('template-parts/content', 'blog04');
                        break;
                default:
                        get_template_part('template-parts/content', 'blog');
        }
        // End Blog Section
?>
        
        <?php get_footer(); ?>