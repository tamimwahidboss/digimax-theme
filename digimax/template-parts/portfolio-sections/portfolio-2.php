<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Case Studies Area Start ***** -->
<section class="section case-studies ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2><?php echo $options['portfolio_h2']; ?></h2>
                    <p class="d-none d-sm-block mt-4"><?php echo $options['portfolio_desc']; ?></p>
                    <p class="d-block d-sm-none mt-4"><?php echo $options['portfolio_mb_desc']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $folio_args = array(
                'post_type'     => 'project', // Custom post type slug
                'posts_per_page'=> 6, // Number of posts to display
            );
            $folio_query = new WP_Query($folio_args);

            if ($folio_query->have_posts()) :
                while ($folio_query->have_posts()) : $folio_query->the_post();
                    // Fetch assigned terms/categories for each post dynamically
                    $terms = wp_get_post_terms(get_the_ID(), 'project-category', array('fields' => 'slugs'));
                    $term_classes = !empty($terms) ? implode(' ', $terms) : 'all'; // Assign terms to data-groups attribute
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="<?php the_post_thumbnail_url('full'); ?>" data-fancybox="images" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <i class="fas fa-search-plus fa-2x text-white"></i>
                                    <h3 class="text-white mt-2 mb-3"><?php the_title(); ?></h3>
                                    <p class="text-white"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found.</p>';
            endif;
            ?>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>" class="btn btn-bordered mt-4">View More</a>
        </div>
    </div>
</section>
<!-- ***** Case Studies Area End ***** -->