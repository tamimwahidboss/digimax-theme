<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** Content Area Start ***** -->
<section class="section content-area ptb_150 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <!-- Profile Circle Wrapper -->
                <div class="profile-circle-wrapper circle-animation d-none d-sm-block">
                    <!-- Profile Inner -->
                    <div class="profile-inner">
                        <!-- Profile Circle -->
                        <div class="profile-circle circle-lg">
                            <span class="profile-icon icon-1">
                                <img class="icon-1-img" src="<?php echo isset($options['profile_circle_img1']['url']) ? esc_url($options['profile_circle_img1']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-2">
                                <img class="icon-2-img" src="<?php echo isset($options['profile_circle_img2']['url']) ? esc_url($options['profile_circle_img2']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-3">
                                <img class="icon-3-img" src="<?php echo isset($options['profile_circle_img3']['url']) ? esc_url($options['profile_circle_img3']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-4">
                                <img class="icon-4-img" src="<?php echo isset($options['profile_circle_img4']['url']) ? esc_url($options['profile_circle_img4']['url']) : ''; ?>" />
                            </span>
                        </div>

                        <!-- Profile Circle -->
                        <div class="profile-circle circle-md">
                            <span class="profile-icon icon-5">
                                <img class="icon-5-img" src="<?php echo isset($options['profile_circle_img5']['url']) ? esc_url($options['profile_circle_img5']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-6">
                                <img class="icon-6-img" src="<?php echo isset($options['profile_circle_img6']['url']) ? esc_url($options['profile_circle_img6']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-7">
                                <img class="icon-7-img" src="<?php echo isset($options['profile_circle_img7']['url']) ? esc_url($options['profile_circle_img7']['url']) : ''; ?>" />
                            </span>
                        </div>

                        <!-- Profile Circle -->
                        <div class="profile-circle circle-sm">
                            <span class="profile-icon icon-8">
                                <img class="icon-8-img" src="<?php echo isset($options['profile_circle_img8']['url']) ? esc_url($options['profile_circle_img8']['url']) : ''; ?>" />
                            </span>
                            <span class="profile-icon icon-9">
                                <img class="icon-9-img" src="<?php echo isset($options['profile_circle_img9']['url']) ? esc_url($options['profile_circle_img9']['url']) : ''; ?>" />
                            </span>
                        </div>
                    </div>
                    <img class="folder-img" src="<?php echo isset($options['folder_img']['url']) ? esc_url($options['folder_img']['url']) : ''; ?>" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Content Inner -->
                <div class="content-inner text-center pt-sm-4 pt-lg-0 mt-sm-5 mt-lg-0">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-3">
                        <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo isset($options['bus_right_con_heading']) ? esc_html($options['bus_right_con_heading']) : ''; ?></h2>
                        <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-none d-sm-block mt-4"><?php echo isset($options['bus_right_con_mb_des']) ? esc_html($options['bus_right_con_mb_des']) : ''; ?></p>
                        <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-block d-sm-none mt-4"><?php echo isset($options['bus_right_con_des']) ? esc_html($options['bus_right_con_des']) : ''; ?></p>
                    </div>
                    <!-- Content List -->
                    <ul class="content-list text-left">
                        <?php
                        if (isset($options['bus_right_repeater']) && is_array($options['bus_right_repeater'])) {
                            foreach($options['bus_right_repeater'] as $list) {
                                ?>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                    </div>
                                    <div class="content-text media-body">
                                        <span class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><b><?php echo isset($list['bus_right_sub_heading']) ? esc_html($list['bus_right_sub_heading']) : ''; ?></b><br>
                                        <?php echo isset($list['bus_right_sub_desc']) ? esc_html($list['bus_right_sub_desc']) : ''; ?></span>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <a href="<?php echo isset($options['bus_right_con_btn_link']['url']) ? esc_url($options['bus_right_con_btn_link']['url']) : '#'; ?>" class="btn <?php echo ($hmSel === 'home_page_5') ? 'btn-bordered-white' : 'btn-bordered'; ?> mt-4">
                        <?php echo isset($options['bus_right_con_btn']) ? esc_html($options['bus_right_con_btn']) : ''; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Content Area End ***** -->
