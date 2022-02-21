<?php
/**
 * SAAO Newsletters Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SAAO Newsletters
 * @since 1.0.0
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
 * Don't show post/page titles.
 * 
 * https://wpastra.com/docs/remove-page-header-title/
 */
function remove_page_header_title() {
  return;
}

add_filter( 'astra_advanced_header_title', 'remove_page_header_title' );
