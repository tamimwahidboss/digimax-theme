<?php

/**
 * Enqueue scripts and styles.
 */
function digimax_scripts() {
	wp_enqueue_style( 'digimax-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'digimax-style', 'rtl', 'replace' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins/plugins.min.js', array(), '4.0.1', true );
	wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digimax_scripts' );