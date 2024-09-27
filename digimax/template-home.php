<?php
/**
 * Template Name: Home Page
 */

        get_header();
        
        $options = get_option('digimax_options');
        
        // Start home selector case
        $home_page = $options['home_page_selector'];
        switch ( $home_page ) {
                case "home_page_1":
                        get_template_part( 'template-parts/home-page/home', '1' );
                        break;
                case "home_page_2":
                        get_template_part( 'template-parts/home-page/home', '2' );
                        break;
                case "home_page_3":
                        get_template_part( 'template-parts/home-page/home', '3' );
                        break;
                case "home_page_4":
                        get_template_part( 'template-parts/home-page/home', '4' );
                        break;
                case "home_page_5":
                        get_template_part( 'template-parts/home-page/home', '5' );
                        break;
                case "home_page_6":
                        get_template_part( 'template-parts/home-page/home', '6' );
                        break;
                default:
                        get_template_part( 'template-parts/home-page/home', '1' );
        }
        // End home selector case
        
        get_footer();
        
        ?>