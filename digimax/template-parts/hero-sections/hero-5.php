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
            <div class="col-12 col-md-7">
                <div class="welcome-intro">
                    <h1 class="text-white"><?php echo $options['hero_heading']; ?></h1>
                    <p class="text-white-50 my-4"><?php echo $options['hero_des']; ?></p>
                    <!-- Buttons -->
                    <div class="button-group">
                        <a href="<?php echo $options['hero_btn1']['url']; ?>" class="btn btn-bordered-white active"><?php echo $options['hero_btn1']['text']; ?></a>
                        <a href="<?php echo $options['hero_btn2']['url']; ?>" class="btn btn-bordered-white d-none d-sm-inline-block"><?php echo $options['hero_btn2']['text']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                    <span class="welcome-thumb-1">
                        <img class="d-block ml-auto" src="<?php echo $tab_img['hero_image_eleven']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-2">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_twelve']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->