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
                    <p class="text-white my-4"><?php echo $options['hero_des']; ?></p>
                    <!-- Buttons -->
                    <div class="button-group">
                        <a href="<?php echo $options['hero_btn1']['url']; ?>" class="btn btn-bordered-white"><?php echo $options['hero_btn1']['text']; ?></a>
                        <a href="<?php echo $options['hero_btn2']['url']; ?>" class="btn btn-bordered-white d-none d-sm-inline-block"><?php echo $options['hero_btn2']['text']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                    <span class="welcome-thumb-1">
                        <img class="welcome-animation d-block ml-auto" src="<?php echo $tab_img['hero_image_one']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-2">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_two']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-3">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_three']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-4">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_four']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-5">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_five']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                    <span class="welcome-thumb-6">
                        <img class="welcome-animation d-block" src="<?php echo $tab_img['hero_image_six']['url']; ?>" alt="<?php echo $tab_img['hero_image_one']['alt']; ?>">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->