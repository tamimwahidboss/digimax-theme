<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** Price Plan Area Start ***** -->
<section id="pricing" class="section price-plan-area bg-grey overflow-hidden ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo isset($options['pricing_h2']) ? esc_html($options['pricing_h2']) : ''; ?></h2>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-none d-sm-block mt-4"><?php echo isset($options['pricing_desc']) ? esc_html($options['pricing_desc']) : ''; ?></p>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-block d-sm-none mt-4"><?php echo isset($options['pricing_mb_desc']) ? esc_html($options['pricing_mb_desc']) : ''; ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row price-plan-wrapper">
                    <?php
                    $pricing_section = isset($options['pricing_single_box']) ? $options['pricing_single_box'] : [];

                    if (!empty($pricing_section)) {
                        $classActive = '';
                        $counter = 1;
                        foreach ($pricing_section as $pricing) {
                            $pricing_box_h3 = isset($pricing['pricing_box_h3']) ? esc_html($pricing['pricing_box_h3']) : '';
                            $pricing_badge = isset($pricing['pricing_badge']) ? esc_html($pricing['pricing_badge']) : '';
                            $pricing_box_desc = isset($pricing['pricing_box_desc']) ? esc_html($pricing['pricing_box_desc']) : '';
                            $pricing_box_icon = isset($pricing['pricing_box_icon']) ? esc_html($pricing['pricing_box_icon']) : '';
                            $pricing_box_amount = isset($pricing['pricing_box_amount']) ? esc_html($pricing['pricing_box_amount']) : '';
                            $pricing_icon_prefix = isset($pricing['pricing_icon_prefix']) ? esc_html($pricing['pricing_icon_prefix']) : '';
                            $pricing_box_btn = isset($pricing['pricing_box_btn']['url']) ? esc_html($pricing['pricing_box_btn']['url']) : '';
                            $pricing_box_btnT = isset($pricing['pricing_box_btn']['text']) ? esc_html($pricing['pricing_box_btn']['text']) : '';

                            ?>
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan <? if($counter === 2) { echo $classActive ='active'; } ?> color-<?php echo $counter++; ?> bg-hover hover-top text-center p-5 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg dark-shadow';} ?>">
                                    <!-- Plan Title -->
                                    <div class="plan-title mb-2 mb-sm-3">
                                        <h3 class="mb-2 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?> "><?php echo $pricing_box_h3; ?>
                                            <sup><span class="badge badge-pill badge-warning ml-2"><?php echo $pricing_badge; ?></span></sup>
                                        </h3>
                                        <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $pricing_box_desc; ?></p>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <span class="color-primary fw-7"><?php echo $pricing_box_icon; ?></span>
                                        <span class="h1 fw-7"><?php echo $pricing_box_amount; ?></span>
                                        <sub class="validity text-muted fw-5"><?php echo $pricing_icon_prefix; ?></sub>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                    <ul class="plan-features">
                                        <?php
                                        $single_feature = isset($pricing['pricing_features']) ? $pricing['pricing_features'] : []; // Get pricing features

                                        if (!empty($single_feature)) {
                                            foreach ($single_feature as $feature) {
                                                // Check if 'pricing_single_stc' is set and if it's false
                                                $pricing_single_stc = isset($feature['pricing_single_stc']) && $feature['pricing_single_stc'] == false;
                                                $pricing_single_tr = isset($feature['pricing_single_stc']) && $feature['pricing_single_stc'] == true;
                                                ?>
                                                <li class="py-2 <?php echo $pricing_single_stc ? 'text-muted' : ''; echo ($pricing_single_tr && ($hmSel === 'home_page_5')) ? 'text-white' : ''; ?>">
                                                    <?php echo isset($feature['pricing_single_features']) ? esc_html($feature['pricing_single_features']) : ''; ?>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>

                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="<?php echo $pricing_box_btn; ?>" class="btn <?php echo ($hmSel === 'home_page_5') ? 'btn-bordered-white' : 'btn-bordered'; if($counter === 3) { echo $classActive ='active'; } ?> mt-3"><?php echo $pricing_box_btnT;?></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Price Plan Area End ***** -->
