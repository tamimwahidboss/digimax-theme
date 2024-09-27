<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Service Area End ***** -->
<section id="service" class="section service-area bg-grey ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2><?php echo $options['service_h2']; ?></h2>
                    <p class="d-none d-sm-block mt-4"><?php echo $options['service_desc']; ?></p>
                    <p class="d-block d-sm-none mt-4"><?php echo $options['service_mb_desc']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $services_section = $options['single_service_box'];
                foreach( $services_section as $services ) {
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service text-center p-4">
                            <span class="flaticon-rocket-launch color-1 icon-bg-1"></span>
                            <h3 class="my-3"><?php echo $services['single_service_h3']; ?></h3>
                            <p><?php echo $services['single_service_desc']; ?></p>
                            <a class="service-btn mt-3" href="<?php echo $services['service_btn_link']['url']; ?>"><?php echo $services['service_btn_text']; ?></a>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- ***** Service Area End ***** -->