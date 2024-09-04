<?php
/**
 * This file adds functions to the WPEntrepreneur WordPress theme.
 *
 * @package wpentrepreneur
 * @author  WPWheels
 * @license GNU General Public License v2 or later
 * @link    https://wpwheels.com
 */

namespace WPEntrepreneur;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Languages
	load_theme_textdomain( 'wpentrepreneur', get_template_directory() . '/languages' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Responsive video
	add_theme_support( 'responsive-embeds' );

	// Custom Logo
	add_theme_support( 'custom-logo' );

	// Register menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'wpentrepreneur' ),
		)
	);

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Theme Enqueue Styles.
 */
function enqueue_style_sheet() {

	// Enqueue theme stylesheet with versioning based on file modification time.
	wp_enqueue_style(
		sanitize_title( __NAMESPACE__ . 'animate-css'),
		get_theme_file_uri( 'assets/library/css/animate.min.css' ),
		array(),
		filemtime( get_theme_file_path( 'assets/library/css/animate.min.css' ) )
	);

	// Enqueue the JavaScript file with jQuery as a dependency and versioning based on file modification time.
	wp_enqueue_script(
		sanitize_title(__NAMESPACE__ . 'wow-js'),
		get_theme_file_uri( 'assets/library/js/wow.min.js' ),
		array(),
		filemtime( get_theme_file_path( 'assets/library/js/wow.min.js' ) ),
		true
	);

	wp_enqueue_script(
		sanitize_title(__NAMESPACE__ . 'index-js'),
		get_theme_file_uri( 'build/public/index.js' ),
		array(),
		filemtime( get_theme_file_path( 'build/public/index.js' ) ),
		true
	);

}

// Enqueue styles for the front-end.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );

/**
 * Theme Enqueue Style for the editor and front end.
 */
function enqueue_dev_style_sheet() {

	// Enqueue theme stylesheet with versioning based on file modification time.
	wp_enqueue_style(
		sanitize_title( __NAMESPACE__ . 'style-css'),
		get_theme_file_uri( 'build/public/index.css' ),
		array(),
		filemtime( get_theme_file_path( 'build/public/index.css' ) )
	);

	// Enable automatic RTL support by looking for index-rtl.css.
	wp_style_add_data( sanitize_title( __NAMESPACE__ . 'style-css'), 'rtl', 'replace' );
}

// Enqueue styles for the front-end.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_dev_style_sheet' );

// Enqueue styles for the block editor.
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_dev_style_sheet' );

/**
 * Add Dashicons for use with block styles.
 */
function enqueue_block_dashicons() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_dashicons' );


/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/button'                    => array(
			'secondary-button' => __( 'Secondary', 'wpentrepreneur' ),
		),
		'core/list'                      => array(
			'list-check'        => __( 'Check', 'wpentrepreneur' ),
			'list-check-circle' => __( 'Check Circle', 'wpentrepreneur' ),
			'list-boxed'        => __( 'Boxed', 'wpentrepreneur' ),
		),
		'core/query-pagination-next'     => array(
			'wp-block-button__link' => __( 'Button', 'wpentrepreneur' ),
		),
		'core/query-pagination-previous' => array(
			'wp-block-button__link' => __( 'Button', 'wpentrepreneur' ),
		),
		'core/code'                      => array(
			'dark-code' => __( 'Dark', 'wpentrepreneur' ),
		),
		'core/cover'                     => array(
			'blur-image-less' => __( 'Blur Image Less', 'wpentrepreneur' ),
			'blur-image-more' => __( 'Blur Image More', 'wpentrepreneur' ),
			'rounded-cover'   => __( 'Rounded', 'wpentrepreneur' ),
		),
		'core/column'                    => array(
			'column-box-shadow' => __( 'Box Shadow', 'wpentrepreneur' ),
		),
		'core/post-excerpt'              => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'wpentrepreneur' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'wpentrepreneur' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'wpentrepreneur' ),
		),
		'core/group'                     => array(
			'column-box-shadow' => __( 'Box Shadow', 'wpentrepreneur' ),
		),
		'core/separator'                 => array(
			'separator-dotted' => __( 'Dotted', 'wpentrepreneur' ),
			'separator-thin'   => __( 'Thin', 'wpentrepreneur' ),
		),
		'core/image'                     => array(
			'rounded-full' => __( 'Rounded Full', 'wpentrepreneur' ),
			'media-boxed'  => __( 'Boxed', 'wpentrepreneur' ),
		),
		'core/preformatted'              => array(
			'preformatted-dark' => __( 'Dark Style', 'wpentrepreneur' ),
		),
		'core/post-terms'                => array(
			'term-button' => __( 'Button Style', 'wpentrepreneur' ),
		),
		'core/video'                     => array(
			'media-boxed' => __( 'Boxed', 'wpentrepreneur' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );


/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		
		'wpentrepreneur/hero' => array(
			'label' => __('Hero', 'wpentrepreneur'),
		),
		'wpentrepreneur/skills' => array(
			'label' => __('Skills', 'wpentrepreneur'),
		),
		'wpentrepreneur/posts' => array(
			'label' => __('Posts', 'wpentrepreneur')
		),
		'wpentrepreneur/portfolio' => array(
			'label' => __('Portfolio', 'wpentrepreneur'),
		),
		'wpentrepreneur/video' => array(
			'label' => __('Video', 'wpentrepreneur'),
		),
		'wpentrepreneur/testimonials'    => array(
			'label' => __( 'Testimonials', 'wpentrepreneur' ),
		),
		'wpentrepreneur/social-media'    => array(
			'label' => __( 'Social Media', 'wpentrepreneur' ),
		),
		'wpentrepreneur/about'    => array(
			'label' => __( 'About', 'wpentrepreneur' ),
		),
		'wpentrepreneur/experiences'    => array(
			'label' => __( 'Experiences', 'wpentrepreneur' ),
		),
		'wpentrepreneur/contact'		=> array(
			'label' => __( 'Contact', 'wpentrepreneur' )
		)
	
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Remove last separator on blog/archive if no pagination exists.
 */
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .archive .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .search .wp-block-post-template .wp-block-post:last-child .wp-block-post-excerpt + .wp-block-separator { display: none; }</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\is_paginated' );


/**
 * Add a Sidebar template part area
 */
function template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'wpentrepreneur' ),
		'description' => __( 'The Sidebar template defines a page area that can be found on the Page (With Sidebar) template.', 'wpentrepreneur' ),
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );

// Admin only classes.
if ( is_admin() ) {
    
    // Recommend plugins.
    require_once get_theme_file_path( '/dashboard/class-dashboard.php' );
}