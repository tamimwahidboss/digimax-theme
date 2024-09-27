<?php $options = get_option( 'digimax_options' ); ?>

<!--====== Call To Action Area Start ======-->
<section class="section cta-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <!-- Section Heading -->
                <div class="section-heading text-center m-0">
                    <h2 class="text-white">
                        <?php echo isset($options['cta_h2']) ? esc_html($options['cta_h2']) : ''; ?>
                    </h2>
                    <p class="text-white d-none d-sm-block mt-4">
                        <?php echo isset($options['cta_desc']) ? esc_html($options['cta_desc']) : ''; ?>
                    </p>
                    <p class="text-white d-block d-sm-none mt-4">
                        <?php echo isset($options['cta_mb_desc']) ? esc_html($options['cta_mb_desc']) : ''; ?>
                    </p>
                    <a href="<?php echo isset($options['cta_btn']['url']) ? esc_url($options['cta_btn']['url']) : '#'; ?>" class="btn btn-bordered-white mt-4">
                        <?php echo isset($options['cta_btn']['text']) ? esc_html($options['cta_btn']['text']) : ''; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call To Action Area End ======-->
