<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** Portfolio Area Start ***** -->
<section id="portfolio" class="portfolio-area overflow-hidden ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo esc_html( get_option('portfolio_h2', 'Our Portfolio') ); ?></h2>
                    <p class="d-none d-sm-block mt-4 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo esc_html( get_option('portfolio_desc', 'Check out some of our recent projects.') ); ?></p>
                    <p class="d-block d-sm-none mt-4 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo esc_html( get_option('portfolio_mb_desc', 'Recent projects showcase.') ); ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <!-- Portfolio Menu -->
                <div class="portfolio-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4 mb-md-5" data-toggle="buttons">
                    <?php
                    // Fetch portfolio categories dynamically
                    $categories = get_terms('project-category'); // Replace with your custom taxonomy slug
                    if (!empty($categories) && !is_wp_error($categories)) {
                        ?>
                        <label class="btn active d-table text-uppercase p-2">
                            <input type="radio" value="all" checked class="portfolio-btn">
                            <span class=" <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>" >All</span>
                        </label>
                        <?php
                        foreach ($categories as $category) {
                            echo '<label class="btn d-table text-uppercase p-2">';
                            echo '<input type="radio" value="' . esc_attr($category->slug) . '" class="portfolio-btn">';
                            echo '<span class="' . ($hmSel == 'home_page_5' ? 'text-white ' : ' ') . '">' . esc_html($category->name) . '</span>';
                            echo '</label>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Portfolio Items -->
        <div class="row items portfolio-items">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item" data-groups='<?php echo json_encode($terms); ?>'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="<?php the_permalink(); ?>" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3"><?php the_title(); ?></h3>
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
<!-- ***** Portfolio Area End ***** -->
