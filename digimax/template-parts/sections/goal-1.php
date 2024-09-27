<?php
/**
 * Goal Section 01
 */
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
$meta = get_post_meta( get_the_ID(), 'digimax_metabox', true );
?>

<!-- ***** Our Goal Area Start ***** -->
<section class="section our-goal ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Goal Content -->
                <div class="goal-content section-heading text-center text-lg-left pr-md-4 mb-0">
                    <h2 class="mb-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo $meta['goal_h2']; ?></h2>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $meta['goal_desc']; ?></p><br>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $meta['goal_mb_desc']; ?></p>
                    <a href="<?php echo $meta['goal_link']; ?>" class="btn <?php echo ($hmSel === 'home_page_5') ? 'btn-bordered-white' : 'btn-bordered';?> mt-4"><?php echo $meta['goal_btn']; ?></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Goal Thumb -->
                <div class="goal-thumb mt-5 mt-lg-0">
                    <img src="<?php echo $meta['goal_img']['url']; ?>" alt="<?php echo $meta['goal_img']['alt']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Goal Area End ***** -->