<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package Meta slider and carousel with lightbox
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap igsp-wrap">
<h2><?php _e( 'How It Works', 'meta-slider-and-carousel-with-lightbox' ); ?></h2>
	<style type="text/css">
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.igsp-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.igsp-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.wpos-new-feature{ font-size: 10px; color: #fff; font-weight: bold; background-color: #03aa29; padding:1px 4px; font-style: normal; }
	</style>

	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">

			<!--How it workd HTML -->
			<div id="post-body-content">
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'How It Works - Display and shortcode', 'meta-slider-and-carousel-with-lightbox' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('Getting Started with Meta Slider', 'meta-slider-and-carousel-with-lightbox'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1: This plugin create a Gallery mata box under your POST, PAGE as well as a Meta Gallery tab in WordPress menu section', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-2: You can you to any POST and PAGE and check a "Meta slider and carousel with lightbox - Settings" meta box in the end.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-3: Under "Choose Gallery Images" click on "Gallery Images" button and select multiple images from WordPress media and click on "Add to Gallery" button. Once images added you can add the shortcode in the the same POST OR PAGE', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-4: If you want a sapreate section, then you can see "Meta Galley" tab in the Wordpress menu.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-5: Use this tab to manage you image galleries and use the shortcode from the list.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('How Shortcode Works', 'meta-slider-and-carousel-with-lightbox'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1: If you are adding Gallery in POST or PAGE, kinldy use the bellow shortcode in the same page. Just add the shortcode in WordPress editor.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-2: If you are using "Meta Gallery tab", then click on "Meta Gallery--> Meta Gallery" and find out the shortcode.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('All Shortcodes', 'meta-slider-and-carousel-with-lightbox'); ?>:</label>
										</th>
										<td>
											<span class="wpos-copy-clipboard igsp-shortcode-preview">[meta_gallery_carousel]</span> – <?php _e('Gallery Carousel Slider', 'meta-slider-and-carousel-with-lightbox'); ?> <br />
											<span class="wpos-copy-clipboard igsp-shortcode-preview">[meta_gallery_slider]</span> – <?php _e('Gallery Slider', 'meta-slider-and-carousel-with-lightbox'); ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- .postbox -->

					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Gutenberg Support', 'meta-slider-and-carousel-with-lightbox' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('How it Work', 'meta-slider-and-carousel-with-lightbox'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to the Gutenberg editor of your page.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-2. Search "Meta Gallery" keyword in the gutenberg block list.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
												<li><?php _e('Step-3. Add any block of Meta Gallery and you will find its relative options on the right end side.', 'meta-slider-and-carousel-with-lightbox'); ?></li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- .postbox -->

					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Need Support?', 'meta-slider-and-carousel-with-lightbox' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<td>
											<p><?php _e('Check plugin document for shortcode parameters and demo for designs.', 'meta-slider-and-carousel-with-lightbox'); ?></p> <br/>
											<a class="button button-primary" href="https://docs.wponlinesupport.com/meta-slider-and-carousel-with-lightbox/" target="_blank"><?php _e('Documentation', 'meta-slider-and-carousel-with-lightbox'); ?></a>
											<a class="button button-primary" href="https://demo.wponlinesupport.com/meta-slider-and-carousel-with-lightbox-demo/" target="_blank"><?php _e('Demo for Designs', 'meta-slider-and-carousel-with-lightbox'); ?></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!-- .postbox -->

					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Help to improve this plugin!', 'meta-slider-and-carousel-with-lightbox' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<p><?php _e('Enjoyed this plugin? You can help by rate this plugin', 'meta-slider-and-carousel-with-lightbox'); ?> <a href="https://wordpress.org/support/plugin/meta-slider-and-carousel-with-lightbox/reviews/#new-post" target="_blank"><?php _e('5 stars!', 'meta-slider-and-carousel-with-lightbox'); ?></a></p>
						</div><!-- .inside -->
					</div><!-- .postbox -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-body-content -->

			<!--Upgrad to Pro HTML -->
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox wpos-pro-box">

						<h3 class="hndle">
							<span><?php _e( 'Upgrate to Pro', 'meta-slider-and-carousel-with-lightbox' ); ?></span>
						</h3>
						<div class="inside">
							<ul class="wpos-list">
								<li>15+ image gallery designs</li>
								<li>Gallery Slider with Lightbox</li>
								<li>Gallery Carousel with Lightbox</li>
								<li>Gallery slider with variable width with Lightbox</li>
								<li>WP Templating Features</li>
								<li>Gutenberg Block Supports</li>
								<li>Elementor, Beaver and SiteOrigin Page Builder Support. <span class="wpos-new-feature">New</span></li>
								<li>Divi Page Builder Native Support. <span class="wpos-new-feature">New</span></li>
								<li>Fusion Page Builder (Avada) Native Support. <span class="wpos-new-feature">New</span></li>
								<li>Custom css</li>
								<li>Slider RTL support</li>
								<li>Fully responsive</li>
								<li>100% Multi language</li>
							</ul>
							<div class="upgrade-to-pro"><?php echo sprintf( __( 'Gain access to <strong>Meta slider and carousel with lightbox</strong> included in <br /><strong>Essential Plugin Bundle', 'meta-slider-and-carousel-with-lightbox' ) ); ?></div>
							<a class="button button-primary wpos-button-full" href="https://www.wponlinesupport.com/wp-plugin/meta-slider-carousel-lightbox/?ref=WposPratik&utm_source=WP&utm_medium=Meta-Slider&utm_campaign=Upgrade-PRO" target="_blank"><?php _e('Go Premium ', 'meta-slider-and-carousel-with-lightbox'); ?></a>
							<p><a class="button button-primary wpos-button-full" href="https://demo.wponlinesupport.com/prodemo/meta-slider-and-carousel-with-lightbox/" target="_blank"><?php _e('View PRO Demo ', 'meta-slider-and-carousel-with-lightbox'); ?></a></p>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-container-1 -->

		</div><!-- #post-body -->
	</div><!-- #poststuff -->
</div>