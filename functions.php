<?php
/**
 * SAAO Newsletters Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SAAO Newsletters
 * @since 1.1.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SAAO_NEWSLETTERS_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'saao-newsletters-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SAAO_NEWSLETTERS_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Custom post types
 */

// Register Custom Post Type
function newsletter_post_type() {

    $labels = array(
        'name'                  => _x( 'Newsletters', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Newsletter', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Newsletters', 'text_domain' ),
        'name_admin_bar'        => __( 'Newsletter', 'text_domain' ),
        'archives'              => __( 'Newsletter Archives', 'text_domain' ),
        'attributes'            => __( 'Newsletter Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Newsletter:', 'text_domain' ),
        'all_items'             => __( 'All Newsletters', 'text_domain' ),
        'add_new_item'          => __( 'Add New Newsletter', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Newsletter', 'text_domain' ),
        'edit_item'             => __( 'Edit Newsletter', 'text_domain' ),
        'update_item'           => __( 'Update Newsletter', 'text_domain' ),
        'view_item'             => __( 'View Newsletter', 'text_domain' ),
        'view_items'            => __( 'View Newsletters', 'text_domain' ),
        'search_items'          => __( 'Search Newsletter', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Newsletters list', 'text_domain' ),
        'items_list_navigation' => __( 'Newsletters list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter newsletters list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Newsletter', 'text_domain' ),
        'description'           => __( 'SAAO newsletter', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'newsletter', $args );

}
add_action( 'init', 'newsletter_post_type', 0 );

// Register Custom Post Type
function newsletter_article_post_type() {

    $labels = array(
        'name'                  => _x( 'Newsletter Articles', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Newsletter Article', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Newsletter Articles', 'text_domain' ),
        'name_admin_bar'        => __( 'Newsletter Article', 'text_domain' ),
        'archives'              => __( 'Newsletter Article Archives', 'text_domain' ),
        'attributes'            => __( 'Newsletter Article Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Newsletter Article:', 'text_domain' ),
        'all_items'             => __( 'All Newsletter Articles', 'text_domain' ),
        'add_new_item'          => __( 'Add New Newsletter Article', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Newsletter Article', 'text_domain' ),
        'edit_item'             => __( 'Edit Newsletter Article', 'text_domain' ),
        'update_item'           => __( 'Update Newsletter Article', 'text_domain' ),
        'view_item'             => __( 'View Newsletter Article', 'text_domain' ),
        'view_items'            => __( 'View Newsletter Articles', 'text_domain' ),
        'search_items'          => __( 'Search Newsletter Article', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Newsletter Articles list', 'text_domain' ),
        'items_list_navigation' => __( 'Newsletter Articles list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter newsletters list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Newsletter Article', 'text_domain' ),
        'description'           => __( 'SAAO newsletter article', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'newsletter-article', $args );

}
add_action( 'init', 'newsletter_article_post_type', 0 );
