<?php
/**
 * Blocks Initializer
 * 
 * @package Meta slider and carousel with lightbox
 * @since 2.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function wp_igsp_register_guten_block() {

	// Block Editor Script
	wp_register_script( 'wp-igsp-block-js', WP_IGSP_URL.'assets/js/blocks.build.js', array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-components' ), WP_IGSP_VERSION, true );
	wp_localize_script( 'wp-igsp-block-js', 'Wp_Igspf_Block', array(
																'pro_demo_link'		=> 'https://demo.wponlinesupport.com/prodemo/meta-slider-and-carousel-with-lightbox/',
																'free_demo_link'	=> 'https://demo.wponlinesupport.com/meta-slider-and-carousel-with-lightbox-demo/',
																'pro_link'			=> WP_IGSP_PLUGIN_LINK,
															));

	// Register block and explicit attributes for grid
	register_block_type( 'wp-igsp/meta-gallery-slider', array(
		'attributes' => array(
			'id' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'show_title' => array(
							'type'		=> 'boolean',
							'default'	=> true,
						),
			'show_caption'  => array(
							'type'		=> 'boolean',
							'default'	=> true,
						),
			'slider_height' => array(
							'type'		=> 'number',
							'default'	=> '',
						),
			'dots' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'arrows' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay_speed' => array(
							'type'		=> 'number',
							'default'	=> 3000,
						),
			'speed' => array(
							'type'		=> 'number',
							'default'	=> 300,
						),
			'lazyload' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'align' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'className' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
		),
		'render_callback' => 'msacwl_gallery_slider',
	));

	//Register block, and explicitly define the attributes for slider
	register_block_type( 'wp-igsp/meta-gallery-carousel', array(
		'attributes' => array(
			'id' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'show_title' => array(
							'type'		=> 'boolean',
							'default'	=> true,
						),
			'show_caption' => array(
							'type'		=> 'boolean',
							'default'	=> true,
						),
			'slider_height' => array(
							'type'		=> 'number',
							'default'	=> '',
						),
			'slide_to_show' => array(
							'type'		=> 'number',
							'default'	=> 2,
						),
			'slide_to_scroll' => array(
							'type'		=> 'number',
							'default'	=> 1,
						),
			'dots' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'arrows' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay_speed' => array(
							'type'		=> 'number',
							'default'	=> 3000,
						),
			'speed' => array(
							'type'		=> 'number',
							'default'	=> 300,
						),
			'lazyload' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'align' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'className' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
		),
		'render_callback' => 'msacwl_gallery_carousel',
	));

	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations( 'wp-igsp-block-js', 'meta-slider-and-carousel-with-lightbox', WP_IGSP_DIR . '/languages' );
	}

}
add_action( 'init', 'wp_igsp_register_guten_block' );

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * @package Meta slider and carousel with lightbox
 * @since 2.3
 */
function wp_igsp_block_assets() {	
}
add_action( 'enqueue_block_assets', 'wp_igsp_block_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * 
 * @package Meta slider and carousel with lightbox
 * @since 2.3
 */
function wp_igsp_editor_assets() {

	// Block Editor CSS
	if( ! wp_style_is( 'wpos-free-guten-block-css', 'registered' ) ) {
		wp_register_style( 'wpos-free-guten-block-css', WP_IGSP_URL.'assets/css/blocks.editor.build.css', array( 'wp-edit-blocks' ), WP_IGSP_VERSION );
	}

	// Block Editor Script
	wp_enqueue_style( 'wpos-free-guten-block-css' );
	wp_enqueue_script( 'wp-igsp-block-js' );

}
add_action( 'enqueue_block_editor_assets', 'wp_igsp_editor_assets' );

/**
 * Adds an extra category to the block inserter
 *
 * @package Meta slider and carousel with lightbox
 * @since 2.3
 */
function wp_igsp_add_block_category( $categories ) {

	$guten_cats = wp_list_pluck( $categories, 'slug' );

	if( ! in_array( 'wpos_guten_block', $guten_cats ) ) {
		$categories[] = array(
							'slug'	=> 'wpos_guten_block',
							'title'	=> __('WPOS Blocks', 'meta-slider-and-carousel-with-lightbox'),
							'icon'	=> null,
						);
	}

	return $categories;
}
add_filter( 'block_categories', 'wp_igsp_add_block_category' );