<?php

function digimax_setup() {
	load_theme_textdomain( 'digimax', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'digimax' ),
			'menu-2' => esc_html__( 'Footer 1', 'digimax' ),
			'menu-3' => esc_html__( 'Footer 2', 'digimax' ),
			'menu-4' => esc_html__( 'Footer 3', 'digimax' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'digimax_setup' );



// Register custom post for project
function wp10ms_create_custom_post_type() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'wp10ms' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'wp10ms' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'wp10ms' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'wp10ms' ),
        'add_new'               => __( 'Add New', 'wp10ms' ),
        'add_new_item'          => __( 'Add New Project', 'wp10ms' ),
        'edit_item'             => __( 'Edit Project', 'wp10ms' ),
        'new_item'              => __( 'New Project', 'wp10ms' ),
        'all_items'             => __( 'All Projects', 'wp10ms' ),
        'view_item'             => __( 'View Project', 'wp10ms' ),
        'search_items'          => __( 'Search Projects', 'wp10ms' ),
        'not_found'             => __( 'No projects found', 'wp10ms' ),
        'not_found_in_trash'    => __( 'No projects found in Trash', 'wp10ms' ),
        'featured_image'        => _x( 'Project Cover Image', 'wp10ms' ),
        'set_featured_image'    => _x( 'Set project cover image', 'wp10ms' ),
        'remove_featured_image' => _x( 'Remove project cover image', 'wp10ms' ),
        'use_featured_image'    => _x( 'Use as project cover image', 'wp10ms' ),
        'archives'              => _x( 'Project archives', 'wp10ms' ),
        'insert_into_item'      => _x( 'Insert into project', 'wp10ms' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'wp10ms' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'         => array( 'project-category' ),
        // 'show_in_rest'       => true, // Enable block editor support
    );
    
    register_post_type( 'project', $args );
}
add_action( 'init', 'wp10ms_create_custom_post_type' );

// Register Custom Taxonomy
function wp10ms_create_project_taxonomy() {
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name', 'wp10ms' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'wp10ms' ),
        'search_items'      => __( 'Search Project Categories', 'wp10ms' ),
        'all_items'         => __( 'All Project Categories', 'wp10ms' ),
        'parent_item'       => __( 'Parent Project Category', 'wp10ms' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'wp10ms' ),
        'edit_item'         => __( 'Edit Project Category', 'wp10ms' ),
        'update_item'       => __( 'Update Project Category', 'wp10ms' ),
        'add_new_item'      => __( 'Add New Project Category', 'wp10ms' ),
        'new_item_name'     => __( 'New Project Category Name', 'wp10ms' ),
        'menu_name'         => __( 'Project Categories', 'wp10ms' ),
    );

    $args = array(
        'hierarchical'      => true, // Set to 'false' for non-hierarchical (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-category' ),
    );

    register_taxonomy( 'project-category', array( 'project' ), $args );
}
add_action( 'init', 'wp10ms_create_project_taxonomy' );