<?php
/**
 * This file adds functions to the WPEntrepreneur WordPress theme.
 *
 * @package wpentrepreneur
 * @author  WP Wheels
 * @license GNU General Public License v2 or later
 * @link    https://wpwheels.com
 */

namespace WPEntrepreneur;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {

	// CSS
	wp_enqueue_style( sanitize_title( __NAMESPACE__ . 'style-css'), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( sanitize_title( __NAMESPACE__ . 'animate-css'), get_template_directory_uri() . '/assets/css/animate.min.css', array(), wp_get_theme()->get( 'Version' ) );

	// JS
	// wp_enqueue_script(sanitize_title(__NAMESPACE__ . 'jquery-js'), get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_script(sanitize_title(__NAMESPACE__ . 'wow-js'), get_template_directory_uri() . '/assets/js/wow.min.js', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_script(sanitize_title(__NAMESPACE__ . 'custom-js'), get_template_directory_uri() .'/assets/js/custom.js', array(), wp_get_theme()->get( 'Version' ));
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


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
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "wpentrepreneur-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );


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

