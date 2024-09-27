<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!-- ***** FAQ Area Start ***** -->
<section id="pricing" class="section price-plan-area overflow-hidden ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-12">
                <!-- FAQ Content -->
                <div class="faq-content">
                    <!-- sApp Accordion -->
                    <div class="accordion" id="sApp-accordion">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <?php
                                $faqOne_col = $options['faqOne_col'];
                                foreach($faqOne_col as $faqOne){
                                    ?>
                                    <!-- Single Card -->
                                    <div class="card border-0">
                                        <!-- Card Header -->
                                        <div class="card-header bg-inherit border-0 p-0 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
                                            <h2 class="mb-0">
                                                <button class="btn px-0 py-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>" type="button">
                                                    <?php echo $faqOne['faqOne_btn']; ?>
                                                </button>
                                            </h2>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50 dark-bg';} ?>">
                                            <?php echo $faqOne['faqOne_body']; ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php
                                $faqTwo_col = $options['faqTwo_col'];
                                foreach($faqTwo_col as $faqTwo){
                                    ?>
                                    <!-- Single Card -->
                                    <div class="card border-0">
                                        <!-- Card Header -->
                                        <div class="card-header bg-inherit border-0 p-0 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
                                            <h2 class="mb-0">
                                                <button class="btn px-0 py-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>" type="button">
                                                    <?php echo $faqTwo['faqTwo_btn']; ?>
                                                </button>
                                            </h2>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 <?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50 dark-bg';} ?>">
                                            <?php echo $faqTwo['faqTwo_body']; ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** FAQ Area End ***** -->