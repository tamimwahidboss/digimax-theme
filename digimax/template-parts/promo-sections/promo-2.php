<?php $options = get_option( 'digimax_options' ); ?>

<!-- ***** Promo Area Start ***** -->
<section class="section promo-area ptb_100">
            <div class="container">
                <div class="row">
                    <?php
                        $promo_section = $options['promo-section'];
                        foreach($promo_section as $promo) {
                            ?>
                            <div class="col-12 col-md-6 col-lg-4 res-margin">
                                <!-- Single Promo -->
                                <div class="single-promo grad-hover text-center p-5">
                                    <!-- Promo Wrapper -->
                                    <div class="promo-wrapper">
                                        <h3 class="mb-3"><?php echo $promo['promo_h3']; ?></h3>
                                        <p><?php echo $promo['promo_desc']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->