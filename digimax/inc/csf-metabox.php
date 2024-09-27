<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'digimax_metabox';

    // Start About Us Page
    CSF::createMetabox( $prefix, array(
        'title'        => 'Digimax Editor',
        'post_type'     => 'page', // Make sure it applies to Pages
        'where'     => function() {
            return ( get_page_template_slug() == 'template-about.php' );
        },
    ) );
    
    // Start About Section
    CSF::createSection( $prefix, array(
        'title'  => 'About Section',
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id'      => 'about01_img',
                'type'    => 'media',
                'title'   => esc_html__('About Image', 'digimax'),
            ),
            array(
                'id'      => 'about01_h2',
                'type'    => 'text',
                'title'   => esc_html__('About Heading', 'digimax'),
                'default' => esc_html__('We are Your Partner in Your Success', 'digimax'),
            ),
            array(
                'id'      => 'about01_desc',
                'type'    => 'text',
                'title'   => esc_html__('About Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis tenetur maxime labore recusandae enim dolore, nesciunt, porro molestias ullam eum atque harum! Consectetur, facilis maxime ratione fugiat laborum omnis atque quae, molestiae rem perspiciatis veritatis cumque ex minima, numquam quis dicta impedit possimus tempore? Quo sequi labore, explicabo sit vitae.', 'digimax'),
            ),
            array(
                'id'      => 'about01_mb_desc',
                'type'    => 'text',
                'title'   => esc_html__('About Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto iure excepturi eos, tenetur minima dignissimos repellendus laudantium, rem, quo ipsam esse maiores sequi ex debitis quae facilis dolorum voluptates animi.', 'digimax'),
            ),
            array(
                'id'      => 'about01_happy',
                'type'    => 'number',
                'title'   => esc_html__('Happy Clients', 'digimax'),
                'default' => '375',
            ),
            array(
                'id'      => 'about01_complete',
                'type'    => 'number',
                'title'   => esc_html__('Projects Completed', 'digimax'),
                'default' => '1500',
            ),
            array(
                'id'      => 'about01_running',
                'type'    => 'number',
                'title'   => esc_html__('Running Projects', 'digimax'),
                'default' => '695',
            ),
        )
    ) );
    // End About Section

    // Start Goal Section
    CSF::createSection( $prefix, array(
        'title'  => 'Goal Section',
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id'      => 'goal_h2',
                'type'    => 'text',
                'title'   => esc_html__('Goal Heading', 'digimax'),
                'default' => esc_html__('Our Goal', 'digimax'),
            ),
            array(
                'id'      => 'goal_desc',
                'type'    => 'text',
                'title'   => esc_html__('Goal Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis tenetur maxime labore recusandae enim dolore, nesciunt, porro molestias ullam eum atque harum! Consectetur, facilis maxime ratione fugiat laborum omnis atque quae, molestiae rem perspiciatis veritatis cumque ex minima, numquam quis dicta impedit possimus tempore? Quo sequi labore, explicabo sit vitae.', 'digimax'),
            ),
            array(
                'id'      => 'goal_mb_desc',
                'type'    => 'text',
                'title'   => esc_html__('Goal Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto iure excepturi eos, tenetur minima dignissimos repellendus laudantium, rem, quo ipsam esse maiores sequi ex debitis quae facilis dolorum voluptates animi.', 'digimax'),
            ),
            array(
                'id'      => 'goal_link',
                'type'    => 'link',
                'title'   => esc_html__('Goal Button Link', 'digimax'),
            ),
            array(
                'id'      => 'goal_btn',
                'type'    => 'text',
                'title'   => esc_html__('Goal Button', 'digimax'),
                'default' => esc_html__('Read More', 'digimax'),
            ),
            array(
                'id'      => 'goal_img',
                'type'    => 'media',
                'title'   => esc_html__('Goal Image', 'digimax'),
            ),
        )
    ) );
    // End Goal Section

    // Start Team Section
    CSF::createSection( $prefix, array(
        'title'  => 'Team Section',
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id'      => 'team_h2',
                'type'    => 'text',
                'title'   => esc_html__('Team Heading', 'digimax'),
                'default' => esc_html__('Our Experts', 'digimax'),
            ),
            array(
                'id'      => 'team_desc',
                'type'    => 'text',
                'title'   => esc_html__('Team Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'digimax'),
            ),
            array(
                'id'      => '  ',
                'type'    => 'text',
                'title'   => esc_html__('Team Mobile Description', 'digimax'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.', 'digimax'),
            ),
            array(
                'id' => 'team_repeater',
                'type' => 'repeater',
                'button_title' => esc_html__('Add new member', 'digimax'),
                'max' => '6',
                'fields' => array(
                    array(
                        'id'      => 'team_link',
                        'type'    => 'link',
                        'title'   => esc_html__('Team Linking', 'digimax'),
                    ),
                    array(
                        'id'      => 'team_img',
                        'type'    => 'media',
                        'title'   => esc_html__('Team Member Image', 'digimax'),
                    ),
                    array(
                        'id'      => 'team_h3',
                        'type'    => 'text',
                        'title'   => esc_html__('Member Name', 'digimax'),
                        'default' => esc_html__('Junaid Hasan', 'digimax'),
                    ),
                    array(
                        'id'      => 'team_h5',
                        'type'    => 'text',
                        'title'   => esc_html__('Member Status', 'digimax'),
                        'default' => esc_html__('Marketing Officer', 'digimax'),
                    ),
                )
            ),
        )
    ));
    // End Team Section
}
