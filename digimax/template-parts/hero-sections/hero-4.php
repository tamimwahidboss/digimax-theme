<?php
// Retrieve the csf saved option value
$options = get_option( 'digimax_options' );
?>

<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-10">
                <div class="welcome-intro text-center mt-0 py-5">
                    <h1 class="text-white"><?php echo $options['hero_heading']; ?></h1>
                    <p class="text-white my-4"><?php echo $options['hero_des']; ?></p>
                    <!-- Buttons -->
                    <div class="button-group">
                        <a href="<?php echo $options['hero_btn1']['url']; ?>" class="btn btn-bordered-white"><?php echo $options['hero_btn1']['text']; ?></a>
                        <a href="<?php echo $options['hero_btn2']['url']; ?>" class="btn btn-bordered-white d-none d-sm-inline-block"><?php echo $options['hero_btn2']['text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->