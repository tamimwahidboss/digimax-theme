<?php
/**
 * Template Name: 2 Colume Blog Page
 */
?>
            <!-- ***** Blog Area Start ***** -->
            <section id="blog" class="section blog-area ptb_100">
                <div class="container">
                    <div class="row">
                        <?php
                            // Custom query to set posts per page
                            $args = array(
                                'posts_per_page'    =>  6,
                                'orderby'           =>  'comment_count',
                                'order'             =>  'DESC',
                                'paged'             =>  $paged,
                            );
                            $blog_query = new WP_Query($args);

                            if ($blog_query->have_posts()) {
                                while ($blog_query->have_posts()) {
                                    $blog_query->the_post();
                                    ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog -->
                                        <div class="single-blog res-margin">
                                            <!-- Blog Thumb -->
                                            <div class="blog-thumb">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div>
                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <!-- Meta Info -->
                                                <ul class="meta-info d-flex justify-content-between">
                                                    <li>By <?php the_author_posts_link(); ?></li>
                                                    <li><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
                                                    <li><a href="<?php comments_link(); ?>"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
                                                </ul>
                                                <!-- Blog Title -->
                                                <h3 class="blog-title my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="blog-btn mt-3">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No posts available.</p>';
                            }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Pagination -->
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            echo '<ul class="pagination justify-content-center">';
                            $args = array(
                                'mid_size'  => 2,
                                'prev_text' => '<i class="fas fa-arrow-left"></i>',
                                'next_text' => '<i class="fas fa-arrow-right"></i>',
                                // 'current'   => $paged,
                                'type'      => 'array',
                            );
                            $paginates = paginate_links($args);

                            // var_dump($paginates);
                            
                            foreach($paginates as $paginate){
                                echo '<li class="px-1">'.$paginate.'</li>';
                            }
                            echo '</ul>';
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Blog Area End ***** -->