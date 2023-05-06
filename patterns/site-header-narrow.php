<?php
/**
 * Title: Narrow site header
 * Slug: jace/site-header-narrow
 * Categories: jace-site-header
 * Keywords: site header
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
		<!-- wp:site-logo {"width":40,"className":"is-style-rounded"} /-->
		<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"extra-small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-jace-no-bg","fontSize":"extra-small"} /-->
	<!-- wp:pattern {"slug":"jace/search-modal"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
