<?php
    get_header();
    get_template_part('template-parts/global-elements/breadcrumb', '1');
?>

<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row">
            <?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        ?>
                        <div class="col-12 col-lg-9">
                            <!-- Single Blog Details -->
                            <article class="single-blog-details">
                                <!-- Blog Thumb -->
                                <div class="blog-thumb">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <!-- Blog Content -->
                                <div class="blog-content digimax-blog p-3">
                                    <!-- Meta Info -->
                                    <div class="meta-info d-flex flex-wrap align-items-center py-2">
                                        <ul>
                                            <li class="d-inline-block p-2">By <?php the_author_posts_link(); ?></li>
                                            <li class="d-none d-md-inline-block p-2"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_date(); ?></a></li>
                                            <li class="d-inline-block p-2"><a href="<?php echo esc_url( get_comments_link() ); ?>"><?php echo esc_html( get_comments_number() ); ?> Comments</a></li>
                                        </ul>
                                        <!-- Blog Share -->
                                        <div class="blog-share ml-auto d-none d-sm-block">
                                            <!-- Social Icons -->
                                            <div class="social-icons d-flex justify-content-center">
                                                <a class="bg-white facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a class="bg-white twitter" href="https://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Blog Details -->
                                    <div class="blog-details">
                                        <h3 class="blog-title py-3"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                                <!-- Blog Comments Section -->
                                <div class="blog-comments p-3">
                                    <?php
                                        // Check if comments are open or if there are comments
                                        if (comments_open() || get_comments_number()) {
                                            // Display the comments list
                                            comments_template();
                                        }
                                    ?>
                                </div>

                                <!-- Blog Comment Form -->
                                <div class="blog-contact p-3">
                                    <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Post your Comments</h3>
                                    <div class="contact-box comment-box">
                                        <?php
                                            // Display WordPress's comment form
                                            comment_form();
                                        ?>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                    }
                }
            ?>

            <div class="col-12 col-lg-3">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->

<?php get_footer(); ?>
