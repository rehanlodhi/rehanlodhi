<?php
/**
 * Title: Section: Hero
 * Slug: rehan-lodhi/section-hero
 * Categories: rehan-lodhi
 * Description: Homepage hero — intro line, large display headline, bio, CTA.
 *
 * @package wml
 */
?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|block-padding-y-hero","bottom":"var:preset|spacing|block-padding-y-hero"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--block-padding-y-hero);padding-bottom:var(--wp--preset--spacing--block-padding-y-hero)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|space-6","padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"constrained","contentSize":"1080px","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:paragraph {"fontSize":"body-md","textColor":"body"} -->
		<p class="has-body-color has-text-color has-body-md-font-size">Hi, my name is Rehan.</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"display-hero","style":{"typography":{"lineHeight":"0.92"},"spacing":{"margin":{"top":"var:preset|spacing|space-3"}}}} -->
		<h1 class="wp-block-heading has-display-hero-font-size" style="margin-top:var(--wp--preset--spacing--space-3);line-height:0.92">I build for AI<br>Backends &amp; <span style="color:var(--wp--preset--color--faint)">WordPress.</span></h1>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--space-6)">
			<!-- wp:paragraph {"fontSize":"body-lg","textColor":"body"} -->
			<p class="has-body-color has-text-color has-body-lg-font-size">I&#8217;m a Software engineer based in Islamabad, specialising in backend systems, Growth Design Mentor and Design Studio Founder.</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-7"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--space-7)">
			<!-- wp:button {"className":"is-style-hard-outline"} -->
			<div class="wp-block-button is-style-hard-outline"><a class="wp-block-button__link wp-element-button" href="/about/">Read Full Bio &#8594;</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
