        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h2 class="text-white text-uppercase mb-3">
                                    <?php
                                        if (is_front_page() || is_page() || is_single()) {
                                            echo esc_html(single_post_title());
                                        } elseif (is_home()) {
                                            echo esc_html(get_the_title(get_option('page_for_posts')));
                                        } 
                                        elseif (is_author()) {
                                            echo esc_html(get_the_author_meta('display_name'));
                                        }
                                        elseif (is_search()) {
                                            echo 'Search Results for: ' . esc_html(get_search_query());
                                        }
                                        elseif (is_category() || is_tag() || is_date()) {
                                            echo esc_html(single_cat_title());
                                        }
                                    ?>
                            </h2>
                            <?php if( function_exists('mj_wp_breadcrumb') ) mj_wp_breadcrumb();  ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->
