<?php
/**
 * Title: Footer
 * Slug: rehan-lodhi/footer
 * Categories: rehan-lodhi
 * Block Types: core/template-part/footer
 * Description: Dark footer band — copyright left, link list right.
 *
 * @package wml
 */
?>
<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|space-7","bottom":"var:preset|spacing|space-7"}}},"backgroundColor":"surface-darkest","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-footer has-surface-darkest-background-color has-background" style="padding-top:var(--wp--preset--spacing--space-7);padding-bottom:var(--wp--preset--spacing--space-7)">
	<!-- wp:group {"className":"footer-row","style":{"spacing":{"padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group footer-row" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:paragraph {"className":"footer-copyright","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|label-sm"}},"textColor":"on-dark-faint"} -->
		<p class="footer-copyright has-on-dark-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-sm)">&#169; <?php echo esc_html( gmdate( 'Y' ) ); ?> Rehan Lodhi. Built with intent.</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"ref":74,"textColor":"on-dark-body","overlayMenu":"never","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
