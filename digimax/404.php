<?php
/**
 * The template for displaying 404 pages (not found)
 * Template Name: 404 Page
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package digimax
 */
get_header(); ?>

    <!--====== 404 Area Start ======-->
    <div class="error-area stars">
        <!-- Error Content -->
        <div class="error-content d-flex flex-column justify-content-center align-items-center text-center">
            <img class="error-thumb" src="<?php echo get_template_directory_uri() ?>/assets/img/error/404.svg">
            <a href="<?php site_url() ?>" class="btn btn-bordered-white mt-4">GO BACK HOME</a>
        </div>
        <!-- Error Objects -->
        <div class="error-objects">
            <img class="thumb-1" src="<?php echo get_template_directory_uri() ?>/assets/img/error/rocket.svg">
            <!-- Earth Moon -->
            <div class="earth-moon">
                <img class="thumb-2" src="<?php echo get_template_directory_uri() ?>/assets/img/error/earth.svg">
                <img class="thumb-3" src="<?php echo get_template_directory_uri() ?>/assets/img/error/moon.svg">
            </div>
            <!-- Astronaut -->
            <div class="astronaut">
                <img class="thumb-4" src="<?php echo get_template_directory_uri() ?>/assets/img/error/astronaut.svg">
            </div>
        </div>
        <!-- Glowing Stars -->
        <div class="glowing-stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </div>
    <!--====== 404 Area End ======-->

<?php get_footer();
