<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** Review Area Start ***** -->
<section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-4">
                        <!-- Section Heading -->
                        <div class="section-heading m-0">
                            <h2 class="text-white"><?php echo isset($options['review_h2']) ? esc_html($options['review_h2']) : ''; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4"><?php echo isset($options['review_desc']) ? esc_html($options['review_desc']) : ''; ?></p>
                            <p class="text-white d-block d-sm-none mt-4"><?php echo isset($options['review_mb_desc']) ? esc_html($options['review_mb_desc']) : ''; ?></p>
                            <a href="<?php echo $options['review_btn']['url'] ?>" class="btn btn-bordered-white mt-4"><?php echo $options['review_btn']['text'] ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row mt-5 mt-lg-0">
                            <?php
                            $review_repeater = isset($options['single_review']) ? $options['single_review'] : [];
                            if (!empty($review_repeater)) {
                                foreach($review_repeater as $review) {
                                    ?>
                                    <div class="col-12 col-md-6 res-margin">
                                        <!-- Single Review -->
                                        <div class="single-review bg-inherit p-5  <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg dark-shadow';} ?>">
                                            <!-- Review Content -->
                                            <div class="review-content">
                                                <!-- Review Text -->
                                                <div class="review-text">
                                                    <p class="text-white-50"><?php echo isset($review['client_review']) ? esc_html($review['client_review']) : ''; ?></p>
                                                </div>
                                                <!-- Quotation Icon -->
                                                <div class="quot-icon">
                                                    <img class="avatar-sm" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/quote.png" alt="">
                                                </div>
                                            </div>
                                            <!-- Reviewer -->
                                            <div class="reviewer media mt-3">
                                                <!-- Reviewer Thumb -->
                                                <div class="reviewer-thumb">
                                                    <img class="avatar-lg radius-100" src="<?php echo isset($review['client_review_avatar']['url']) ? esc_url($review['client_review_avatar']['url']) : ''; ?>" alt="">
                                                </div>
                                                <!-- Reviewer Media -->
                                                <div class="reviewer-meta media-body align-self-center ml-4">
                                                    <h5 class="reviewer-name text-white mb-2"><?php echo isset($review['client_review_name']) ? esc_html($review['client_review_name']) : ''; ?></h5>
                                                    <h6 class="text-white-50 fw-6"><?php echo isset($review['client_review_status']) ? esc_html($review['client_review_status']) : ''; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->