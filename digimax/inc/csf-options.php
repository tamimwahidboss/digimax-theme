<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'digimax_options';
  
    //
    // Digimax Options
    CSF::createOptions( $prefix, array(
      'menu_title' => esc_html__( 'Digimax', 'digimax'),
      'menu_slug'  => 'digimax-options',
      'framework_title' => esc_html__('Digimax Editor', 'digimax'),
      'menu_icon' => 'dashicons-admin-appearance',
      'show_in_customizer' => true,
      'theme' => 'light',
      'menu_position' => 60,
    ) );
    
    // --------------------Header Section---------------------
    CSF::createSection( $prefix, array(
        'title'  => esc_html__('Digimax Header', 'digimax'),
        'icon' => 'fa fa-pager',
        'fields' => array(
            // Logo White
            array(
                'id'    => 'logo-white',
                'type'  => 'media',
                'title' => esc_html__('Logo White', 'digimax'),
                'default' => esc_url( get_template_directory_uri() . '/assets/img/logo/logo-white.png' )
            ),
            // Sticky Logo
            array(
                'id'    => 'sticky-logo',
                'type'  => 'media',
                'title' => esc_html__('Sticky Logo', 'digimax'),
                'default' => esc_url( get_template_directory_uri() . '/assets/img/logo/logo.png' )
            ),
            // Header Social Links
            array(
                'id'        => 'header-social',
                'type'      => 'repeater',
                'title'     => 'Social Link',
                'button_title' => esc_html__('Add new social link', 'digimax'),
                'max'       => '3',
                'fields'    => array(
                    array(
                        'id'    => 'header-social-icon',
                        'type'  => 'text',
                        'title' => esc_html__('Social Icon', 'digimax'),
                        'default' => 'fab fa-facebook-f',
                    ),
                    array(
                        'id'    => 'header-social-link',
                        'type'  => 'link',
                        'title' => esc_html__('Social Link', 'digimax'),
                    ),
                ),
            ),
            // Header Right Button Text
            array(
                'id'    => 'header-right-btn-text',
                'type'  => 'text',
                'title' => esc_html__('Right Button Text', 'digimax'),
                'default' => esc_html__('Contact Us', 'digimax')
            ),
            // Header Right Button Link
            array(
                'id'    => 'header-right-btn-link',
                'type'  => 'link',
                'title' => esc_html__('Right Button Link', 'digimax'),
            ),
        )
    ) );

    // ------------------ Global Settings Tab ------------------------
    CSF::createSection( $prefix, array(
        'id' => 'global',
        'title' => esc_html__('Global Settings', 'digimax'),
        'icon' => 'fas fa-yin-yang'
    ));

    // Blog Section
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('Blog Page Settings', 'digimax'),
        'icon' => 'fas fa-user-tie',
        'fields' => array(
            array(
                'id'          => 'blog_selector',
                'type'        => 'select',
                'title'       => esc_html__('Select blog template', 'digimax'),
                'placeholder' => esc_html__('Select Blog Design', 'digimax'),
                'options' => array(
                    'blog_1' => 'Grid 2 Colume',
                    'blog_2' => 'Grid 3 Colume',
                    'blog_3' => 'Left Sidebar',
                    'blog_4' => 'Right Sidebar',
                ),
              ),
        )
    ));

    // FAQ Section
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('FAQ Section', 'digimax'),
        'icon' => 'fas fa-user-tie',
        'fields' => array(
            array(
                'id' => 'faqOne_col',
                'type' => 'repeater',
                'title' => esc_html__('FAQ Left', 'digimax'),
                'button_title' => esc_html__('Add new faq', 'digimax'),
                'max' => '5',
                'fields' => array(
                    array(
                        'id' => 'faqOne_btn',
                        'type' => 'text',
                        'title' => esc_html__('FAQ Title', 'digimax'),
                        'default' => esc_html__('What is a digital agency?', 'digimax'),
                    ),
                    array(
                        'id' => 'faqOne_body',
                        'type' => 'textarea',
                        'title' => esc_html__('FAQ Details', 'digimax'),
                        'default' => esc_html__('The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'digimax'),
                    ),
                )
            ),
            array(
                'id' => 'faqTwo_col',
                'type' => 'repeater',
                'title' => esc_html__('FAQ Right', 'digimax'),
                'button_title' => esc_html__('Add new faq', 'digimax'),
                'max' => '5',
                'fields' => array(
                    array(
                        'id' => 'faqTwo_btn',
                        'type' => 'text',
                        'title' => esc_html__('FAQ Title', 'digimax'),
                        'default' => esc_html__('What is a digital agency?', 'digimax'),
                    ),
                    array(
                        'id' => 'faqTwo_body',
                        'type' => 'textarea',
                        'title' => esc_html__('FAQ Details', 'digimax'),
                        'default' => esc_html__('The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'digimax'),
                    ),
                )
            ),
        )
    ));

    // Brand Section
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('Brand Section', 'digimax'),
        'icon' => 'fas fa-user-tie',
        'fields' => array(
            array(
                'id' => 'brand_h2',
                'type' => 'text',
                'title' => esc_html__('Brand Heading', 'digimax'),
                'default' => esc_html__('We are working with', 'digimax')
            ),
            array(
                'id' => 'brand_desc',
                'type' => 'text',
                'title' => esc_html__('Brand Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'brand_mb_desc',
                'type' => 'text',
                'title' => esc_html__('Brand Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.', 'digimax'),
            ),
            array(
                'id' => 'brand_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Brand Logo', 'digimax'),
                'button_title' => esc_html__('Add new brand', 'digimax'),
                'max' => '10',
                'fields' => array(
                    array(
                        'id' => 'brand_img',
                        'type' => 'media',
                        'title' => 'Select brand image',
                    ),
                )
            ),
        )
    ));

    // Search Bar
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('Search Bar', 'digimax'),
        'icon' => 'fas fa-user-tie',
        'fields' => array(
            array(
                'id' => 'search_h2',
                'type' => 'text',
                'title' => esc_html__('Search Bar Heading', 'digimax'),
                'default' => esc_html__('What are you looking for?', 'digimax'),
            ),
            array(
                'id' => 'search_p',
                'type' => 'textarea',
                'title' => esc_html__('Search Bar Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.', 'digimax'),
            ),
        )
    ));

    // Call To Action
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('CTA Section', 'digimax'),
        'icon' => 'fas fa-user-tie',
        'fields' => array(
            array(
                'id' => 'cta_h2',
                'type' => 'text',
                'title' => esc_html__('Heading', 'digimax'),
                'default' => esc_html__('Looking for the best digital agency &amp; marketing solution?', 'digimax')
            ),
            array(
                'id' => 'cta_desc',
                'type' => 'textarea',
                'title' => esc_html__('Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'cta_mb_desc',
                'type' => 'textarea',
                'title' => esc_html__('Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.', 'digimax')
            ),
            array(
                'id' => 'cta_btn',
                'type' => 'link',
                'title' => esc_html__('Button Title', 'digimax'),
            ),
        )
    ));

    // Contact Form Section
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title' => esc_html__('Form Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'contact_h2',
                'type' => 'text',
                'title' => esc_html__('Contact Heading', 'digimax'),
                'default' => esc_html__('lets connect!', 'digimax')
            ),
            array(
                'id' => 'contact_desc',
                'type' => 'textarea',
                'title' => esc_html__('Contact Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'contact_mb_desc',
                'type' => 'textarea',
                'title' => esc_html__('Contact Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'digimax')
            ),
            array(
                'id' => 'contact_info',
                'title' => esc_html__('Contact Info', 'digimax'),
                'type' => 'repeater',
                'button_title' => esc_html__('Add contact info', 'digimax'),
                'max' => '2',
                'fields' => array(
                    array(
                        'id' => 'contact_info_icon',
                        'type' => 'icon',
                        'title' => esc_html__('Info icon', 'digimax'),
                        'default' => 'fas fa-mobile-alt'
                    ),
                    array(
                        'id' => 'contact_info_h3',
                        'type' => 'text',
                        'title' => esc_html__('Info heading', 'digimax'),
                        'default' => esc_html__('+89 (0) 2354 5470091', 'digimax')
                    ),
                    array(
                        'id' => 'contact_info_h3_link',
                        'type' => 'link',
                        'title' => esc_html__('Heading Link', 'digimax'),
                    ),
                    array(
                        'id' => 'contact_info_desc',
                        'type' => 'textarea',
                        'title' => esc_html__('Info description', 'digimax'),
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'digimax')
                    ),
                )
            ),
            array(
                'id' => 'form_shortcode',
                'type' => 'text',
                'title' => esc_html__('Contact Form 7 Shortcode', 'digimax'),
            ),
            array(
                'id' => 'map_iframe',
                'type' => 'text',
                'title' => esc_html__('Map Iframe Link', 'digimax'),
                'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.596666220624!2d-0.16124461362595294!3d51.46556134684942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605a25375dfb7%3A0xe0d9fa09dcf932a8!2s15%20Theatre%20St%2C%20Battersea%2C%20London%20SW11%205ND%2C%20UK!5e0!3m2!1sen!2sbd!4v1567427969685!5m2!1sen!2sbd',
            ),
        ),
    ));


    // Home Page Content Tab
    CSF::createSection( $prefix, array(
        'id' => 'home_page',
        'title' => esc_html__('Home Page', 'digimax'),
        'icon' => 'fas fa-yin-yang'
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Home Settings', 'digimax'),
        'fields' => array(
            array(
                'id'          => 'home_page_selector',
                'type'        => 'select',
                'title'       => 'Home Design',
                'placeholder' => 'Select home page design',
                'options' => array(
                    'home_page_1' => 'Home Page 1',
                    'home_page_2' => 'Home Page 2',
                    'home_page_3' => 'Home Page 3',
                    'home_page_4' => 'Home Page 4',
                    'home_page_5' => 'Home Page 5(Dark)',
                    'home_page_6' => 'Home Page 6',
                ),
            ),

            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_1' ),
            ),
            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_5' ),
            ),
            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_6' ),
            ),
            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg_2',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.homepage-2 .welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_2' ),
            ),
            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg_3',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.homepage-3 .welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_3' ),
            ),
            // All hero background imgeges - hero 1
            array(
                'id'    => 'welcome_area_bg_4',
                'type'  => 'background',
                'title' => 'Welcome Area Background',
                'desc'  => 'Set the background properties for the welcome area.',
                'output'=> '.homepage-4 .welcome-area',
                'dependency' => array( 'home_page_selector', '==', 'home_page_4' ),
            ),
            // Hero Heading
            array(
                'id'      => 'hero_heading',
                'type'    => 'text',
                'title'   => esc_html__('Hero Heading', 'digimax'),
                'default' => esc_html__('We are digital agency & Marketing', 'digimax')
            ),
            // Hero Description
            array(
                'id'      => 'hero_des',
                'type'    => 'textarea',
                'title'   => esc_html__('Hero Description', 'digmax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem est deserunt molestias accusamus harum ullam tempore debitis et, expedita, repellat delectus aspernatur neque itaque qui quod.', 'digimax'),
            ),
            // Button One Link
            array(
                'id'    => 'hero_btn1',
                'type'  => 'link',
                'title' => esc_html__('Button One', 'digimax'),
            ),
            // Button Two Link
            array(
                'id'    => 'hero_btn2',
                'type'  => 'link',
                'title' => esc_html__('Button Two', 'digimax'),
            ),
        )
    ));
    
    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Hero Gallery', 'digimax'),
        'description' => esc_html__( 'Please, must follow the recomand image size', 'digimax' ),
        'fields' => array(
            array(
                'id' => 'hero_tab',
                'type' => 'accordion',
                'title' => esc_html__('Hero Images', 'digimax'),
                'accordions' => array(
                    array(
                        'id' => 'hero_tab_one',
                        'title' => 'Hero Section 1, 5',
                        'fields' => array(
                            // Image One
                            array(
                                'id'          => 'hero_image_one',
                                'type'        => 'media',
                                'title'       => esc_html__('Image One', 'digimax'),
                                'placeholder' => 'Select 342*400 image',
                            ),
                            // Image Two
                            array(
                                'id'          => 'hero_image_two',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Two', 'digimax'),
                                'placeholder' => 'Select 131*300 image',
                            ),
                            // Image Three
                            array(
                                'id'          => 'hero_image_three',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Three', 'digimax'),
                                'placeholder' => 'Select 139*300 image',
                            ),
                            // Image Four
                            array(
                                'id'          => 'hero_image_four',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Four', 'digimax'),
                                'placeholder' => 'Select 150*112 image',
                            ),
                            // Image Five
                            array(
                                'id'          => 'hero_image_five',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Five', 'digimax'),
                                'placeholder' => 'Select 150*95 image',
                            ),
                            // Image Six
                            array(
                                'id'          => 'hero_image_six',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Six', 'digimax'),
                                'placeholder' => 'Select 60*63 image',
                            ),
                        )
                    ),
                    array(
                        'id' => 'hero_tab_two',
                        'type' => 'text',
                        'title' => 'Hero Section 03',
                        'fields' => array(
                            // Image Seven
                            array(
                                'id'          => 'hero_image_seven',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Seven', 'digimax'),
                                'placeholder' => 'Select 612*410 image',
                            ),
                            // Image Eight
                            array(
                                'id'          => 'hero_image_eight',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Eight', 'digimax'),
                                'placeholder' => 'Select 410*269 image',
                            ),
                            // Image Nine
                            array(
                                'id'          => 'hero_image_nine',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Nine', 'digimax'),
                                'placeholder' => 'Select 411*261 image',
                            ),
                            // Image Ten
                            array(
                                'id'          => 'hero_image_ten',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Ten', 'digimax'),
                                'placeholder' => 'Select 411*261 image',
                            ),
                        )
                    ),
                    array(
                        'id' => 'hero_tab_three',
                        'type' => 'text',
                        'title' => 'Hero Section 05',
                        'fields' => array(
                            // Image Eleven
                            array(
                                'id'          => 'hero_image_eleven',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Eleven', 'digimax'),
                                'placeholder' => 'Select 373*437 image',
                            ),
                            // Image Twelve
                            array(
                                'id'          => 'hero_image_twelve',
                                'type'        => 'media',
                                'title'       => esc_html__('Image Twelve', 'digimax'),
                                'placeholder' => 'Select 237*281 image',
                            ),
                        )
                    ),
                )
            ),
        )
    ));

    // Promo Section
    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title'  => 'Promo Section',
        'fields' => array(
            // Promo Selector
            array(
                'id'          => 'promo_selector',
                'type'        => 'select',
                'title'       => 'Promo Design',
                'placeholder' => 'Select an promo option',
                'options'     => array(
                  'promo_1'  => 'Promo Section 1',
                  'promo_2'  => 'Promo Section 2',
                ),
                'default'     => 'promo_1'
            ),
            // Promo Single Box
            array(
                'id'           => 'promo-section',
                'type'         => 'repeater',
                'title'        => 'Promo Single Box',
                'button_title' => 'Add Promo',
                'max'          => 3,
                'fields'       => array(
                    // Promo Heading
                    array(
                        'id'    => 'promo_h3',
                        'type'  => 'text',
                        'title' => 'Promo Heading',
                        'default' => 'trend design',
                        'sanitize' => 'sanitize_text_field',
                    ),
                    // Promo Description
                    array(
                        'id'    => 'promo_desc',
                        'type'  => 'textarea',
                        'title' => 'Promo Description',
                        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur provident unde ex eligendi magni sit impedit iusto, sed ad fuga minima, dignissimos ducimus autem molestias, nostrum nesciunt enim? Ea, non hic voluptates dolorum impedit eveniet dolorem temporibus illo incidunt quis minima facere doloribus sit maiores, blanditiis labore quasi, accusantium quaerat!',
                        'sanitize' => 'sanitize_textarea_field',
                    ),
                ),
            ),
        )
    ) );

    // Content Area Section
    CSF::createSection( $prefix, array(
        'id'    => 'content_sec',
        'title' => 'Content Section',
        'icon' => 'far fa-file',
    ) );

    // Left Content Area Section
    CSF::createSection( $prefix, array(
        'parent' => 'content_sec',
        'title'  => 'Business Content',
        'fields' => array(
            // Content Heading
            array(
                'id'       => 'bus_left_con_heading',
                'type'     => 'text',
                'title'    => 'Content Heading',
                'default'  => 'we help to grow your business.',
                'sanitize' => 'sanitize_text_field',
            ),
            // Content Description
            array(
                'id'       => 'bus_left_con_des',
                'type'     => 'textarea',
                'title'    => 'Content Description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiorest.',
                'sanitize' => 'sanitize_textarea_field',
            ),
            // Mobile Content Description
            array(
                'id'       => 'bus_left_con_mb_des',
                'type'     => 'textarea',
                'title'    => 'Mobile Content Description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiore',
                'sanitize' => 'sanitize_textarea_field',
            ),
            // Business Left Content Repeater
            array(
                'id'      => 'bus_left_repeater',
                'title'   => 'Business Left Content',
                'type'    => 'repeater',
                'max'     => '3',
                'fields'  => array(
                    // Sub Heading One
                    array(
                        'id'       => 'bus_left_sub_heading',
                        'type'     => 'text',
                        'title'    => 'Sub Heading One',
                        'default'  => 'Online Presence',
                        'sanitize' => 'sanitize_text_field',
                    ),
                    // Sub Description One
                    array(
                        'id'       => 'bus_left_sub_desc',
                        'type'     => 'textarea',
                        'title'    => 'Sub Description One',
                        'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.',
                        'sanitize' => 'sanitize_textarea_field',
                    ),
                ),
            ),
            // Button Text
            array(
                'id'       => 'bus_left_con_btn',
                'type'     => 'text',
                'title'    => 'Button Text',
                'default'  => 'Learn More',
                'sanitize' => 'sanitize_text_field',
            ),
            // Button Link
            array(
                'id'       => 'bus_left_con_btn_link',
                'type'     => 'link',
                'title'    => 'Button Link',
            ),
            // Business Image
            array(
                'id'    => 'bus_left_con_img',
                'type'  => 'media',
                'title' => 'Business Image',
            ),
        ),
    ) );

    // Right Content Area Section
    CSF::createSection( $prefix, array(
        'parent' => 'content_sec', // The slug id of the parent section
        'title'  => 'Profile Content',
        'fields' => array(
            // Profile Image One
            array(
                'id'    => 'profile_circle_img1',
                'type'  => 'media',
                'title' => 'Profile Image One',
                'default' => get_template_directory_uri() . '/assets/img/content/profile-icons/profile_icon_4.svg'
            ),
            // Profile Image Two
            array(
                'id'    => 'profile_circle_img2',
                'type'  => 'media',
                'title' => 'Profile Image Two',
            ),
            // Profile Image Three
            array(
                'id'    => 'profile_circle_img3',
                'type'  => 'media',
                'title' => 'Profile Image Three',
            ),
            // Profile Image Four
            array(
                'id'    => 'profile_circle_img4',
                'type'  => 'media',
                'title' => 'Profile Image Four',
            ),
            // Profile Image Five
            array(
                'id'    => 'profile_circle_img5',
                'type'  => 'media',
                'title' => 'Profile Image Five',
            ),
            // Profile Image Six
            array(
                'id'    => 'profile_circle_img6',
                'type'  => 'media',
                'title' => 'Profile Image Six',
            ),
            // Profile Image Seven
            array(
                'id'    => 'profile_circle_img7',
                'type'  => 'media',
                'title' => 'Profile Image Seven',
            ),
            // Profile Image Eight
            array(
                'id'    => 'profile_circle_img8',
                'type'  => 'media',
                'title' => 'Profile Image Eight',
            ),
            // Profile Image Nine
            array(
                'id'    => 'profile_circle_img9',
                'type'  => 'media',
                'title' => 'Profile Image Nine',
            ),
            // Folder Image
            array(
                'id'    => 'folder_img',
                'type'  => 'media',
                'title' => 'Folder Image',
            ),
            // Content Heading
            array(
                'id'       => 'bus_right_con_heading',
                'type'     => 'text',
                'title'    => 'Content Heading',
                'default'  => 'work smarter,not harder.',
                'sanitize' => 'sanitize_text_field',
            ),
            // Content Description
            array(
                'id'       => 'bus_right_con_des',
                'type'     => 'textarea',
                'title'    => 'Content Description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.',
                'sanitize' => 'sanitize_textarea_field',
            ),
            // Mobile Content Description
            array(
                'id'       => 'bus_right_con_mb_des',
                'type'     => 'textarea',
                'title'    => 'Mobile Content Description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.',
                'sanitize' => 'sanitize_textarea_field',
            ),
            // Business Right Content Repeater
            array(
                'id'      => 'bus_right_repeater',
                'title'   => 'Business Right Content',
                'type'    => 'repeater',
                'max'     => '3',
                'fields'  => array(
                    // Sub Heading One
                    array(
                        'id'       => 'bus_right_sub_heading',
                        'type'     => 'text',
                        'title'    => 'Sub Heading One',
                        'default'  => 'Digital Agency & Marketing',
                        'sanitize' => 'sanitize_text_field',
                    ),
                    // Sub Description One
                    array(
                        'id'       => 'bus_right_sub_desc',
                        'type'     => 'textarea',
                        'title'    => 'Sub Description One',
                        'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.',
                        'sanitize' => 'sanitize_textarea_field',
                    ),
                ),
            ),
            // Button Text
            array(
                'id'       => 'bus_right_con_btn',
                'type'     => 'text',
                'title'    => 'Button Text',
                'default'  => 'Learn More',
                'sanitize' => 'sanitize_text_field',
            ),
            // Button Link
            array(
                'id'       => 'bus_right_con_btn_link',
                'type'     => 'link',
                'title'    => 'Button Link',
            ),
        ),
    ) );

    // Services Section
    CSF::createSection( $prefix, [
        'parent' => 'home_page',
        'title' => esc_html__('Service Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'service_h2',
                'type' => 'text',
                'title' => esc_html__('Service Heading', 'digimax'),
                'default' => esc_html__('we provide the best digital services', 'digimax')
            ),
            array(
                'id' => 'service_desc',
                'type' => 'textarea',
                'title' => esc_html__('Service Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'service_mb_desc',
                'type' => 'textarea',
                'title' => esc_html__('Service Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'single_service_box',
                'title' => esc_html__('Service Box', 'digimax'),
                'type' => 'repeater',
                'button_title' => esc_html__('Add new service', 'digimax'),
                'max' => '6',
                'fields' => array(
                    array(
                        'id'    => 'single_service_icon',
                        'type'  => 'text',
                        'title' => esc_html__('Single Service Icon', 'digimax'),
                        'default' => 'flaticon-rocket-launch'
                    ),
                    array(
                        'id'    => 'single_service_thumb',
                        'type'  => 'media',
                        'title' => esc_html__('Single Service Thumnnail', 'digimax')
                    ),
                    array(
                        'id'    => 'single_service_h3',
                        'type'  => 'text',
                        'title' => esc_html__('Single Service Heading', 'digimax'),
                        'default' => esc_html__('Data Analytics', 'digimax')
                    ),
                    array(
                        'id'    => 'single_service_desc',
                        'type'  => 'textarea',
                        'title' => esc_html__('Single Service Description', 'digimax'),
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.', 'digimax')
                    ),
                    array(
                        'id'    => 'service_btn',
                        'type'  => 'link',
                        'title' => esc_html__('Service Button', 'digimax'),
                    ),
                )
            )
        )
    ]);
    
    // Portfolio Section
    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Portfolio Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'portfolio_h2',
                'type' => 'text',
                'title' => esc_html__('Portfolio Heading'),
                'default' => esc_html__('our recent works', 'digimax')
            ),
            array(
                'id' => 'portfolio_desc',
                'type' => 'text',
                'title' => esc_html__('Portfolio Description'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'portfolio_mb_desc',
                'type' => 'text',
                'title' => esc_html__('Portfolio Description'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.', 'digimax')
            ),
        )
    ));

    // Video promo Section
    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Video Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'video_h2',
                'type' => 'text',
                'title' => esc_html__('Video Heading'),
                'default' => esc_html__('Watch the Video', 'digimax')
            ),
            array(
                'id' => 'video_p',
                'type' => 'text',
                'title' => esc_html__('Video Description'),
                'default' => esc_html__('our recent works', 'digimax')
            ),
            array(
                'id' => 'video_mb_p',
                'type' => 'text',
                'title' => esc_html__('Mobile Description'),
                'default' => esc_html__('our recent works', 'digimax')
            ),
            array(
                'id' => 'video_link',
                'type' => 'link',
                'title' => esc_html__('Video Link'),
            ),
            array(
                'id' => 'video_thumb',
                'type' => 'media',
                'title' => esc_html__('Video Thumbnail'),
            ),
        ),
    ) );
    
    // Pricing Section
    CSF::createSection( $prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Pricing Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'pricing_h2',
                'title' => esc_html__('Pricing Heading'), // Field title
                'type' => 'text', // Field type
                'default' => esc_html__('Our Price Plans', 'digimax') // Default value
            ),
            array(
                'id' => 'pricing_desc',
                'title' => esc_html__('Pricing Description'), // Field title
                'type' => 'textarea', // Field type
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax') // Default value
            ),
            array(
                'id' => 'pricing_mb_desc',
                'title' => esc_html__('Pricing Mobile Description'), // Field title
                'type' => 'textarea', // Field type
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax') // Default value
            ),
            array(
                'id' => 'pricing_single_box',
                'title' => esc_html__('Pricing Single Box', 'digimax'), // Field title
                'type' => 'repeater', // Field type
                'button_title' => esc_html__('Add new plan'), // Button title
                'max' => '2', // Maximum number of items
                'fields' => array(
                    array(
                        'id' => 'pricing_box_h3',
                        'type' => 'text',
                        'title' => esc_html__('Pricing Box Heading', 'digimax'), // Field title
                        'default' => esc_html__('Basic', 'digimax') // Default value
                    ),
                    array(
                        'id' => 'pricing_badge',
                        'title' => esc_html__('Badge', 'digimax'), // Field title
                        'type' => 'text', // Field type
                        'default' => esc_html__('Save 20%') // Default value
                    ),
                    array(
                        'id' => 'pricing_box_desc',
                        'type' => 'textarea',
                        'title' => esc_html__('Pricing Box Description', 'digimax'), // Field title
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, nemo.', 'digimax') // Default value
                    ),
                    array(
                        'id' => 'pricing_box_icon',
                        'type' => 'text',
                        'title' => esc_html__('Pricing Box Icon', 'digimax'),
                        'default' => '$'
                    ),
                    array(
                        'id' => 'pricing_box_amount',
                        'type' => 'number',
                        'title' => esc_html__('Amount', 'digimax'), // Field title
                        'default' => '49' // Default value
                    ),
                    array(
                        'id' => 'pricing_icon_prefix',
                        'type' => 'text',
                        'title' => esc_html__('Icon Prefix', 'digimax'), // Field title
                        'default' => esc_html__('/mo', 'digimax') // Default value
                    ),
                    array(
                        'id' => 'pricing_features',
                        'type' => 'repeater',
                        'button_title' => esc_html__('Add new feature'), // Button title
                        'title' => esc_html__('Plan Features', 'digimax'), // Field title
                        'max' => '10', // Maximum number of items
                        'fields' => array(
                            array(
                                'id'         => 'pricing_single_stc', // field id
                                'type'       => 'switcher',
                                'title'      => 'Switcher',
                                // 'default'    => true,
                              ),
                            array(
                                'id' => 'pricing_single_features',
                                'type' => 'text',
                                'title' => esc_html__('Feature', 'digimax'), // Field title
                                'default' => esc_html__('5GB Linux Web Space', 'digimax'), // Default value
                                'dependency' => array( 'pricing_single_stc', '==', 'true' ),
                            )
                        )
                    ),
                    array(
                        'id' => 'pricing_box_btn',
                        'type' => 'link',
                        'title' => esc_html__('Button Text', 'digimax'), // Field title
                        'default' => esc_html__('Get Started', 'digimax') // Default value
                    ),
                )
            )
        )
    ));


    // Review Section
    CSF::createSection($prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Review Section', 'digimax'),
        'fields' => array(
            array(
                'id' => 'review_h2',
                'title' => esc_html__('Section Heading', 'digimax'),
                'type' => 'text',
                'default' => esc_html__('our clients says', 'digimax')
            ),
            array(
                'id' => 'review_desc',
                'title' => esc_html__('Review Description', 'digimax'),
                'type' => 'textarea',
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax')
            ),
            array(
                'id' => 'review_mb_desc',
                'title' => esc_html__('Short Desc(mobile)', 'digimax'),
                'type' => 'text',
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissi', 'digimax')
            ),
            array(
                'id' => 'review_btn',
                'title' => esc_html__('Add Link', 'digimax'),
                'type' => 'link',
                // 'dependency' => array( 'home_page_selector', '==', 'home_page_5' ),
            ),
            array(
                'id' => 'single_review',
                'title' => esc_html__('What say your client?', 'digimax'),
                'type' => 'repeater',
                'max' => '6',
                'button_title' => 'Add More',
                'fields' => array(
                    array(
                        'id' => 'client_review',
                        'type' => 'text',
                        'title' => esc_html__('Client Review', 'digimax'),
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.', 'digimax')
                    ),
                    array(
                        'id' => 'client_review_avatar',
                        'type' => 'media',
                        'title' => 'Client Avatar',
                    ),
                    array(
                        'id' => 'client_review_name',
                        'type' => 'text',
                        'title' => 'Client Name',
                        'default' => esc_html__('Md. Arham', 'digimax')
                    ),
                    array(
                        'id' => 'client_review_status',
                        'type' => 'text',
                        'title' => esc_html__('Client Status', 'digimax'),
                        'default' => esc_html__('Founder, Themeland', 'digimax')
                    ),
                )
            ),
        )

    ));

    // Footer Area - Call To Action
    CSF::createSection( $prefix, array(
        'title'  => 'Digimax Footer',
        'fields' => array(
            array(
                'id' => 'ft-cpr',
                'title' => 'Footer Copyright',
                'type' => 'text',
                'default' => '&copy; Copyrights 2020 Digimax All rights reserved.',
            ),
        ),
    ) );

}
