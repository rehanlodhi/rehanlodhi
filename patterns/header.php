<?php
/**
 * Title: Header
 * Slug: rehan-lodhi/header
 * Categories: rehan-lodhi
 * Block Types: core/template-part/header
 * Description: Sticky nav bar — RL_ wordmark left, centered nav, social pills right.
 *
 * @package wml
 */
?>
<!-- wp:group {"className":"site-header","style":{"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}}},"backgroundColor":"surface-page","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-header has-surface-page-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x","top":"var:preset|spacing|space-4","bottom":"var:preset|spacing|space-4"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--space-4);padding-right:var(--wp--preset--spacing--block-padding-x);padding-bottom:var(--wp--preset--spacing--space-4);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:paragraph {"className":"site-wordmark","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontWeight":"500","fontSize":"var:preset|font-size|label-md","letterSpacing":"var(--wp--custom--tracking--label-tight)"}}} -->
		<p class="site-wordmark" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-md);font-weight:500;letter-spacing:var(--wp--custom--tracking--label-tight)"><a href="/">RL_</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"ref":4,"overlayMenu":"never","fontSize":"label-sm","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|space-7"}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
