<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Service Area Start ***** -->
<section id="service" class="section service-area dark-bg ptb_150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-white"><?php echo $options['service_h2']; ?></h2>
                            <p class="text-white-50 d-none d-sm-block mt-4"><?php echo $options['service_desc']; ?></p>
                            <p class="text-white-50 d-block d-sm-none mt-4"><?php echo $options['service_mb_desc']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $services_section = $options['single_service_box'];
                        $color = 1;
                        $icBg = 1;
                        foreach( $services_section as $services ) {
                            ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <!-- Single Service -->
                                <div class="single-service media p-3">
                                    <span class="flaticon-rocket-launch color-<?php echo $color++; ?> icon-bg-<?php echo $icBg++; ?>"></span>
                                    <!-- Service Text -->
                                    <div class="media-body ml-4">
                                        <h3 class="text-white"><?php echo $services['single_service_h3']; ?></h3>
                                        <p class="text-white-50 mt-2 mb-3"><?php echo $services['single_service_desc']; ?></p>
                                        <a class="service-btn" href="<?php echo $services['service_btn']['url']; ?>"><?php echo $services['service_btn']['text']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->