<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sidebar widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue script additions.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Theme support additions.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Codestar environment additions.
 */
require get_template_directory() . '/inc/csf-options.php';
require get_template_directory() . '/inc/csf-metabox.php';

/**
 * Codestar environment additions.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Codestar environment additions.
 */
require get_template_directory() . '/inc/mj-wp-breadcrumb.php';

// Allow SVG uploads
function digimax_allow_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'digimax_allow_svg');

function digimax_sanitize_svg($file) {
    if ($file['type'] === 'image/svg+xml') {
        $sanitizer = new Sanitizer();
        $dirtySVG = file_get_contents($file['tmp_name']);
        $cleanSVG = $sanitizer->sanitize($dirtySVG);

        if ($cleanSVG) {
            file_put_contents($file['tmp_name'], $cleanSVG);
        } else {
            // Handle invalid SVG
            $file['error'] = 'Invalid SVG file';
        }
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'digimax_sanitize_svg');

// Display SVG in media library
function digimax_display_svg($response, $attachment, $meta) {
    if ($response['type'] === 'image' && $response['subtype'] === 'svg+xml' && class_exists('SimpleXMLElement')) {
        try {
            $path = get_attached_file($attachment->ID);
            $svg = simplexml_load_file($path);
            $src = $response['url'];
            $width = (int) $svg->attributes()->width;
            $height = (int) $svg->attributes()->height;
            $response['image'] = compact('src', 'width', 'height');
            $response['thumb'] = compact('src', 'width', 'height');
        } catch (Exception $e) {
            // Handle exception if SVG is invalid
        }
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'digimax_display_svg', 10, 3);

/**
 * Add custom body class according to the home page design.
 */

 function digimax_custom_body_class( $classes ) {
	$options = get_option( 'digimax_options' );
	$home_selector = $options['home_page_selector'];

	switch ( $home_selector ) {
        case 'home_page_2':
            $classes[] = 'homepage-2';
            break;
        case 'home_page_3':
            $classes[] = 'homepage-3';
            break;
        case 'home_page_4':
            $classes[] = 'homepage-4';
            break;
        case 'home_page_5':
            $classes[] = 'homepage-5 dark';
            break;
        case 'home_page_6':
            $classes[] = 'homepage-6 rtl';
            break;
    }
	return $classes;
}
add_filter('body_class', 'digimax_custom_body_class');