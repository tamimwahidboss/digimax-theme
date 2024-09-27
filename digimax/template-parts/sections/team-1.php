<?php
/**
 * Goal Section 01
 */
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
$meta = get_post_meta( get_the_ID(), 'digimax_metabox', true );
?>

<!-- ***** Team Area Start ***** -->
<section class="section team-area bg-grey ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <!-- Shape Top -->
    <?php ( $hmSel == 'home_page_5' ) ? '' : '<div class="shape shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>';?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo $meta['goal_h2']; ?></h2>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-none d-sm-block mt-4"><?php echo $meta['team_desc']; ?></p>
                    <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-block d-sm-none mt-4"><?php echo $meta['team_mb_desc']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $team_section = $meta['team_repeater'];
                foreach($team_section as $team){
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Team -->
                        <div class="single-team">
                            <!-- Team Photo -->
                            <div class="team-photo">
                                <a href="<?php echo $team['team_link']; ?>"><img src="<?php echo $team['team_img']['url']; ?>" alt="<?php echo $img['team_img'];['alt'] ?>"></a>
                            </div>
                            <!-- Team Content -->
                            <div class="team-content p-3 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg dark-shadow';} ?>">
                                <a href="<?php echo $team['team_link']; ?>">
                                    <h3 class="mb-2 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo $team['team_h3']; ?></h3>
                                </a>
                                <h5 class="text-uppercase <?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo $team['team_h5']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php ( $hmSel == 'home_page_5' ) ? '' : '<!-- Shape Bottom -->
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>'; ?>
    
</section>
<!-- ***** Team Area End ***** -->