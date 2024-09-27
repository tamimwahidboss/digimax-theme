<?php
// Retrieve the csf saved option value
$options = get_option( 'digimax_options' );
$tab_img = $options['hero_tab'];
?>

<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-6">
                <div class="welcome-intro">
                    <h1 class="text-white text-center text-md-left"><?php echo $options['hero_heading']; ?></h1>
                    <p class="text-white text-center text-md-left my-4"><?php echo $options['hero_des']; ?></p>
                    <!-- Buttons -->
                    <div class="button-group d-flex align-items-center justify-content-center justify-content-md-start">
                        <a href="<?php echo $options['hero_btn1']['url']; ?>" class="btn btn-bordered-white"><?php echo $options['hero_btn1']['text']; ?></a>
                        <!-- Play Button -->
                        <a class="play-btn" data-fancybox data-width="640" data-height="360" data-small-btn="true" href="<?php echo $options['hero_btn2']['url']; ?>">
                            <div class="btn-circle play-animation"></div>
                            <div class="btn-circle play-animation animation-short"></div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb-wrapper pt-3 pt-md-5 mt-5">
                    <span class="welcome-thumb-1">
                        <img class="welcome-animation d-block ml-auto" src="<?php echo $tab_img['hero_image_seven']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-2">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_eight']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-3">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_nine']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-4">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_ten']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="welcome-shape">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_shape.png" alt="">
    </div>
</section>
<!-- ***** Welcome Area End ***** -->