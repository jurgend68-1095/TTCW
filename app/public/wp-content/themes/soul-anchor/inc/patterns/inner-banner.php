<?php 
/**
 * Header Inner Banner
 */
return array(
	'title'      => esc_html__( 'Inner Banner', 'soul-anchor' ),
	'categories' => array( 'soul-anchor', 'Inner Banner' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/banner.png' ) ) . '","id":7,"dimRatio":30,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.53,"y":0.98},"minHeight":450,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/banner.png' ) ) . '" style="object-position:53% 98%" data-object-fit="cover" data-object-position="53% 98%"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"60px"}}} /--></div></div>
<!-- /wp:cover -->',
);