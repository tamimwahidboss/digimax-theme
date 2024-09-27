<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Service Area Start ***** -->
<section id="service" class="section service-area bg-grey ptb_150">
    <!-- Shape Top -->
    <div class="shape shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2><?php echo isset($options['service_h2']) ? esc_html($options['service_h2']) : ''; ?></h2>
                    <p class="d-none d-sm-block mt-4"><?php echo isset($options['service_desc']) ? esc_html($options['service_desc']) : ''; ?></p>
                    <p class="d-block d-sm-none mt-4"><?php echo isset($options['service_mb_desc']) ? esc_html($options['service_mb_desc']) : ''; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $services_section = isset($options['single_service_box']) ? $options['single_service_box'] : [];
            $colCounter = 1;
            $bgCounter = 1;
            if (!empty($services_section)) {
                foreach ($services_section as $services) {
                    // Ensure each service's data exists and is valid
                    $single_service_icon = isset($services['single_service_icon']) ? esc_attr($services['single_service_icon']) : '';
                    $single_service_h3 = isset($services['single_service_h3']) ? esc_html($services['single_service_h3']) : '';
                    $single_service_desc = isset($services['single_service_desc']) ? esc_html($services['single_service_desc']) : '';
                    $service_btn_url = isset($services['service_btn']['url']) ? esc_url($services['service_btn']['url']) : '#';
                    $service_btn_text = isset($services['service_btn']['text']) ? esc_html($services['service_btn']['text']) : '';
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <span class="<?php echo $single_service_icon; ?> color-<?php echo $colCounter++; ?> icon-bg-<?php echo $bgCounter++; ?>"></span>
                            <h3 class="my-3"><?php echo $single_service_h3; ?></h3>
                            <p><?php echo $single_service_desc; ?></p>
                            <a class="service-btn mt-3" href="<?php echo isset($services['service_btn']['url']) ? esc_url($services['service_btn']['url']) : ''; ?>"><?php echo $services['service_btn']['text']; ?></a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
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
<!-- ***** Service Area End ***** -->