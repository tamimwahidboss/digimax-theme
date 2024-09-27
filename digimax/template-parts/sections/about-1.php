<?php
/**
 * About Section 01
 */
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
$meta = get_post_meta( get_the_ID(), 'digimax_metabox', true );
?>

<!-- ***** About Area Start ***** -->
<section class="section about-area ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6">
                <!-- About Thumb -->
                <div class="about-thumb text-center">
                    <img src="<?php echo $meta['about01_img']['url']; ?>" alt="<?php echo $meta['about01_img']['alt']; ?>">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- About Content -->
                <div class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
                    <h2 class="mb-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo $meta['about01_h2']; ?></h2>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $meta['about01_desc']; ?></p><br>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $meta['about01_mb_desc']; ?></p>
                    <!-- Counter Area -->
                    <div class="couter-area mt-5">
                        <!-- Single Counter -->
                        <div class="single-counter d-block d-md-inline-block m-4 m-md-2">
                            <div class="counter-inner">
                                <!-- Counter Item -->
                                <div class="counter-item d-inline-block mb-3">
                                    <span class="counter color-1 fw-7"><?php echo $meta['about01_happy']; ?></span><span class="color-1 fw-7">+</span>
                                </div>
                            </div>
                            <h4 class="text-uppercase fw-7 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>">Happy Clients</h4>
                        </div>
                        <!-- Single Counter -->
                        <div class="single-counter d-block d-md-inline-block m-4 m-md-2">
                            <div class="counter-inner">
                                <!-- Counter Item -->
                                <div class="counter-item d-inline-block mb-3">
                                    <span class="counter color-2 fw-7"><?php echo $meta['about01_complete']; ?></span><span class="color-2 fw-7">+</span>
                                </div>
                            </div>
                            <h4 class="text-uppercase fw-7 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>">Projects Completed</h4>
                        </div>
                        <!-- Single Counter -->
                        <div class="single-counter d-block d-md-inline-block m-4 m-md-2">
                            <div class="counter-inner">
                                <!-- Counter Item -->
                                <div class="counter-item d-inline-block mb-3">
                                    <span class="counter color-3 fw-7"><?php echo $meta['about01_running']; ?></span><span class="color-3 fw-7">+</span>
                                </div>
                            </div>
                            <h4 class="text-uppercase fw-7 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>">Running Projects</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->