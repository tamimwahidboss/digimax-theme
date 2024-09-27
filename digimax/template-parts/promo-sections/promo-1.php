<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Promo Area Start ***** -->
<section class="section promo-area ptb_100">
    <div class="container">
        <div class="row">
            <?php
            $activeClass = '';  // Initialize the class variable
            $counter = 1;  // Counter variable to track position
            $promo_section = isset($options['promo-section']) ? $options['promo-section'] : []; // Check if promo-section is set

            if (!empty($promo_section)) {
                foreach ($promo_section as $promo) {
                    // Ensure promo content exists and is valid
                    $promo_h3 = isset($promo['promo_h3']) ? esc_html($promo['promo_h3']) : '';
                    $promo_desc = isset($promo['promo_desc']) ? esc_html($promo['promo_desc']) : '';

                    $activeClass = ($counter == 2) ? 'active' : '';  // Add 'active' class for the second promo
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo color-<?php echo esc_attr($counter); ?> bg-hover <?php echo esc_attr($activeClass); ?> hover-bottom text-center p-5">
                            <h3 class="mb-3"><?php echo $promo_h3; ?></h3>
                            <p><?php echo $promo_desc; ?></p>
                        </div>
                    </div>
                    <?php
                    $counter++;  // Increment the counter
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- ***** Promo Area End ***** -->
