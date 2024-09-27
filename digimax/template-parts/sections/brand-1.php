    <?php $options = get_option( 'digimax_options' ); ?>

    <!-- ***** Brand Partner Area Start ***** -->
        <section class="section brand-partner ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-2">
                            <h2><?php echo $options['brand_h2']; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $options['brand_desc']; ?></p>
                            <p class="d-block d-sm-none mt-4"><?php echo $options['brand_mb_desc']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- Brand Partner Wrapper -->
                        <ul class="brand-partner-wrapper list-inline text-center">
                            <?php
                            $brand_section = $options['brand_repeater'];
                            foreach($brand_section as $brand) {
                                ?>
                                <!-- Single Partner -->
                                <li class="single-partner list-inline-item p-lg-3">
                                    <img src="<?php echo $brand['brand_img']['url']; ?>" alt="<?php echo $brand['brand_img']['alt']; ?>">
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Brand Partner Area End ***** -->