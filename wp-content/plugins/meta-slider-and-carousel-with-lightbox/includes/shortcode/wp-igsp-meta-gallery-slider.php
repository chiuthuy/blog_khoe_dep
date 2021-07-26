<?php
/**
 * 'meta_gallery_slider' Shortcode
 * 
 * @package Meta slider and carousel with lightbox
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function msacwl_gallery_slider($atts, $content) {
	
	// SiteOrigin Page Builder Gutenberg Block Tweak - Do not Display Preview
	if( isset( $_POST['action'] ) && ( $_POST['action'] == 'so_panels_layout_block_preview' || $_POST['action'] == 'so_panels_builder_content_json' ) ) {
		return '[meta_gallery_slider]';
	}

	// Divi Frontend Builder - Do not Display Preview
	if( function_exists( 'et_core_is_fb_enabled' ) && isset( $_POST['is_fb_preview'] ) && isset( $_POST['shortcode'] ) ) {
		return '<div class="wp-igsp-builder-shrt-prev">
					<div class="wp-igsp-builder-shrt-title"><span>'.esc_html__('Gallery Slider - Shortcode', 'meta-slider-and-carousel-with-lightbox').'</span></div>
					meta_gallery_slider
				</div>';
	}

	// Fusion Builder Live Editor - Do not Display Preview
	if( class_exists( 'FusionBuilder' ) && (( isset( $_GET['builder'] ) && $_GET['builder'] == 'true' ) || ( isset( $_POST['action'] ) && $_POST['action'] == 'get_shortcode_render' )) ) {
		return '<div class="wp-igsp-builder-shrt-prev">
					<div class="wp-igsp-builder-shrt-title"><span>'.esc_html__('Gallery Slider - Shortcode', 'meta-slider-and-carousel-with-lightbox').'</span></div>
					meta_gallery_slider
				</div>';
	}

	extract(shortcode_atts(array(
		'id'				=> '',
		'autoplay' 			=> 'true',
		'autoplay_speed' 	=> 3000,
		'speed' 			=> 300,
		'arrows' 			=> 'true',
		'dots' 				=> 'true',
		'show_title' 		=> 'true',
		'show_caption' 		=> 'true',
		'slider_height'		=> '',
		'lazyload'			=> '',
		'extra_class'		=> '',
		'className'			=> '',
		'align'				=> '',
	), $atts, 'meta_gallery_slider'));

	// Taking some globals
	global $post;

	// Taking some variables
	$unique 		= wp_igsp_get_unique();
	$autoplay_speed	= wp_igsp_clean_number( $autoplay_speed, 3000 );
	$speed			= wp_igsp_clean_number( $speed, 300 );
	$slider_height	= wp_igsp_clean_number( $slider_height, '' );
	$slider_height 	= ( !empty( $slider_height ) )	? "style='height:{$slider_height}px;'" : '';
	$arrows 		= ( $arrows == 'false' ) 		? 'false' 			: 'true';
	$dots 			= ( $dots == 'false' ) 			? 'false' 			: 'true';
	$gallery_id 	= !empty( $id ) 				? $id 				: $post->ID;
	$show_caption 	= ( $show_caption == 'true' ) 	? true 				: false;
	$show_title 	= ( $show_title == 'true' ) 	? true 				: false;
	$autoplay 		= ( $autoplay == 'false' ) 		? 'false'   		: 'true';
	$lazyload 		= ( $lazyload == 'ondemand' || $lazyload == 'progressive' ) ? $lazyload 	: ''; // ondemand or progressive
	$align			= ! empty( $align )				? 'align'.$align	: '';
	$extra_class	= $extra_class .' '. $align .' '. $className;
	$extra_class	= wp_igsp_get_sanitize_html_classes( $extra_class );

	// Enqueue required script
	wp_enqueue_script( 'wpos-magnific-script' );
	wp_enqueue_script( 'wpos-slick-jquery' );
	wp_enqueue_script( 'wp-igsp-public-js' );

	// Slider configuration
	$slider_conf = compact('autoplay', 'autoplay_speed', 'speed', 'arrows', 'dots', 'lazyload');

	// Getting gallery images
	$images = get_post_meta($gallery_id, '_vdw_gallery_id', true);
	$count	= 1;
	ob_start();

	if( $images ): ?>

	<div style="width: 400px; height: 300px;" class="msacwl-slider-wrap msacwl-row-clearfix <?php echo $extra_class; ?>" data-conf="<?php echo htmlspecialchars(json_encode($slider_conf)); ?>">
		<div id="msacwl-slider-<?php echo $unique; ?>" class="msacwl-slider msacwl-common-slider msacwl-slider-popup">
			<?php foreach( $images as $image ): 
				$post_meta_data 	= get_post($image);
				$gallery_img_src 	= wp_igsp_get_image_src( $image, 'full' );
				$image_alt_text 	= get_post_meta( $image,'_wp_attachment_image_alt',true );
				$image_title_attr	= wp_igsp_esc_attr( strip_tags( $post_meta_data->post_title ) );

			?>
			<div class="msacwl-slide" data-item-index="<?php echo $count; ?>" <?php echo $slider_height; ?>>
				<a class="msacwl-img-link" href="javascript:void(0);" data-mfp-src="<?php echo $gallery_img_src; ?>">
					<img class="msacwl-img" <?php if($lazyload) { ?>data-lazy="<?php echo esc_url($gallery_img_src); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($gallery_img_src); } ?>" data-title="<?php echo $image_title_attr; ?>" alt="<?php echo wp_igsp_esc_attr($image_alt_text); ?>" />
				</a>
				<?php //echo wp_get_attachment_link($image, 'full');	
				if($show_title || $show_caption) { ?>
					<div class="msacwl-gallery-caption">
						<?php if($show_title) { ?>
							<!-- <span class="image_title"><?php echo $post_meta_data->post_title; ?></span> -->
						<?php }
						 if($show_caption) { ?>
							<!-- <span><?php echo $post_meta_data->post_excerpt; ?></span> -->
						 <?php } ?>
					</div>
				<?php } ?>
			</div>
			<?php $count++; // Increment loop count	?>
			<?php endforeach; ?>
		</div>
	</div>

	<?php endif;

	$content .= ob_get_clean();
	return $content;
}

// 'meta_gallery_slider' Shortcode
add_shortcode( 'meta_gallery_slider', 'msacwl_gallery_slider' );