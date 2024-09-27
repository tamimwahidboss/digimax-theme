<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** Content Area Start ***** -->
<section class="section content-area bg-grey ptb_150 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?> ">
    <?php echo ($hmSel === 'home_page_5') ? '' : '<!-- Shape Top -->
    <div class="shape shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>'; ?>
    
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <!-- Content Inner -->
                <div class="content-inner text-center">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-3">
                        <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>" ><?php echo isset($options['bus_left_con_heading']) ? esc_html($options['bus_left_con_heading']) : ''; ?></h2>
                        <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-none d-sm-block mt-4"><?php echo isset($options['bus_left_con_mb_des']) ? esc_html($options['bus_left_con_mb_des']) : ''; ?></p>
                        <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-block d-sm-none mt-4"><?php echo isset($options['bus_left_con_des']) ? esc_html($options['bus_left_con_des']) : ''; ?></p>
                    </div>
                    <!-- Content List -->
                    <ul class="content-list text-left">
                        <?php
                        if (isset($options['bus_left_repeater']) && is_array($options['bus_left_repeater'])) {
                            foreach($options['bus_left_repeater'] as $list) {
                                ?>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                    </div>
                                    <div class="content-text media-body">
                                        <span class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>" ><b><?php echo isset($list['bus_left_sub_heading']) ? esc_html($list['bus_left_sub_heading']) : ''; ?></b><br>
                                        <?php echo isset($list['bus_left_sub_desc']) ? esc_html($list['bus_left_sub_desc']) : ''; ?></span>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <a href="<?php echo isset($options['bus_left_con_btn_link']['url']) ? esc_url($options['bus_left_con_btn_link']['url']) : '#'; ?>" class="btn mt-4 <?php echo ($hmSel === 'home_page_5') ? 'btn-bordered-white' : 'btn-bordered'; ?>">
                        <?php echo isset($options['bus_left_con_btn']) ? esc_html($options['bus_left_con_btn']) : ''; ?>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Service Thumb -->
                <div class="service-thumb mx-auto pt-4 pt-lg-0">
                    <img src="<?php echo isset($options['bus_left_con_img']['url']) ? esc_url($options['bus_left_con_img']['url']) : ''; ?>" alt="Service Image">
                </div>
            </div>
        </div>
    </div>
    <?php echo ($hmSel === 'home_page_5') ? ' ' : '<!-- Shape Bottom -->
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>'; ?>
    
</section>
<!-- ***** Content Area End ***** -->
