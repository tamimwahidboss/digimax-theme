<?php
$options = get_option( 'digimax_options' );
$hmSel = $options['home_page_selector'];
?>

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100 <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-3">
                            <h2 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo isset($options['contact_h2']) ? esc_html($options['contact_h2']) : ''; ?></h2>
                            <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-none d-sm-block mt-4"><?php echo isset($options['contact_desc']) ? esc_html($options['contact_desc']) : ''; ?></p>
                            <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?> d-block d-sm-none mt-4"><?php echo isset($options['contact_mb_desc']) ? esc_html($options['contact_mb_desc']) : ''; ?></p>
                        </div>
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <ul>
                                <?php
                                $contact_form = isset($options['contact_info']) ? $options['contact_info'] : [];
                                if (!empty($contact_form)) {
                                    foreach ($contact_form as $form) {
                                        ?>
                                        <!-- Contact Info -->
                                        <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3 <?php if( $hmSel == 'home_page_5' ) { echo 'dark-shadow';} ?>">
                                            <span><i class="<?php echo isset($form['contact_info_icon']) ? esc_attr($form['contact_info_icon']) : ''; ?> fa-3x"></i></span>
                                            <a class="d-block my-2" href="<?php echo isset($form['contact_info_h3_link']['url']) ? esc_url($form['contact_info_h3_link']['url']) : '#'; ?>">
                                                <h3 class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white';} ?>"><?php echo isset($form['contact_info_h3']) ? esc_html($form['contact_info_h3']) : ''; ?></h3>
                                            </a>
                                            <p class="<?php if( $hmSel == 'home_page_5' ) {echo 'text-white-50';} ?>"><?php echo isset($form['contact_info_desc']) ? esc_html($form['contact_info_desc']) : ''; ?></p>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                                <?php
                            //     <div class="row"><div class="col-12">
                            //     <div class="form-group">
                            //      [text name class:form-control placeholder akismet:author "Name"]
                            //     </div>
                               
                            //     <div class="form-group">
                            //      [text name class:form-control placeholder akismet:author "Company Name"]
                            //     </div>
                               
                            //     <div class="form-group">
                            //      [email* email class:form-control placeholder akismet:author_email "Email"]
                            //     </div>
                               
                            //     <div class="form-group">
                            //      [number* subject class:form-control placeholder "Phone"]
                            //     </div>
                               
                            //     <div class="form-group">
                            //      [textarea* message class:form-control placeholder "Message"]
                            //     </div>
                            //    </div>
                               
                            //    <div class="col-12">
                            //     [submit class:btn class:btn-bordered class:active class:btn-block class:mt-3 "Send Message"]
                            //    </div></div>
                                echo isset($options['form_shortcode']) ? do_shortcode($options['form_shortcode']) : '';
                                ?>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->