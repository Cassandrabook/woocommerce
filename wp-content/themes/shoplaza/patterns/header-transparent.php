<?php
 /**
  * Title: Header Transparent
  * Slug: shoplaza/header-transparent
  * Categories: shoplaza, header
  */
?>

<!-- wp:group {"align":"full","className":"header-transparent","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull header-transparent">
	<!-- wp:group {"align":"full","className":"wp-block-main-header","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-main-header">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)","top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--tiny);padding-bottom:var(--wp--custom--spacing--tiny)">
			<!-- wp:group {"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":64} /-->
				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:site-title /-->
					<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"4px"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"background","className":"wp-block-fse-pro-icons is-style-outline"} -->
					<div class="wp-block-button wp-block-fse-pro-icons is-style-outline">
						<a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#" title="Click here"><?php esc_html_e ( 'My Account', 'shoplaza' ) ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
				 <!-- wp:search {"label":"' . esc_html__( 'Search', 'shoplaza' ) . '","showLabel":false,"placeholder":"Search Here...","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->