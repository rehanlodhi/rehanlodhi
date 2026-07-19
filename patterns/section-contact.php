<?php
/**
 * Title: Section: Contact
 * Slug: rehan-lodhi/section-contact
 * Categories: rehan-lodhi
 * Description: Dark contact band — eyebrow, heading, blurb, seamed contact rows.
 *
 * @package wml
 */
?>
<!-- wp:group {"id":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|block-padding-y","bottom":"var:preset|spacing|block-padding-y"}}},"backgroundColor":"surface-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-dark-background-color has-background" id="contact" style="padding-top:var(--wp--preset--spacing--block-padding-y);padding-bottom:var(--wp--preset--spacing--block-padding-y)">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|space-8"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"className":"eyebrow eyebrow--on-dark"} -->
				<p class="eyebrow eyebrow--on-dark">Get In Touch</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"display-lg","textColor":"on-dark-heading","style":{"typography":{"lineHeight":"0.95"}}} -->
				<h2 class="wp-block-heading has-on-dark-heading-color has-text-color has-display-lg-font-size" style="line-height:0.95">Let&#8217;s<br>Work<br>Together.</h2>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-4"}}},"layout":{"type":"constrained","contentSize":"440px","justifyContent":"left"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--space-4)">
					<!-- wp:paragraph {"fontSize":"body-lg","textColor":"on-dark-body"} -->
					<p class="has-on-dark-body-color has-text-color has-body-lg-font-size">Open to consulting engagements, technical advisory roles, and interesting open-source collaborations. Response time is typically under 48 hours.</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"className":"contact-rows","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
				<div class="wp-block-group contact-rows">
					<!-- wp:paragraph {"fontSize":"body-sm"} -->
					<p class="has-body-sm-font-size"><a href="mailto:rehanlodhi@live.com">Email &#8212; rehanlodhi@live.com</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"body-sm"} -->
					<p class="has-body-sm-font-size"><a href="https://www.linkedin.com/in/rehanlodhi" target="_blank" rel="noreferrer noopener">LinkedIn &#8212; linkedin.com/in/rehanlodhi</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"body-sm"} -->
					<p class="has-body-sm-font-size"><a href="https://github.com/rehanlodhi" target="_blank" rel="noreferrer noopener">GitHub &#8212; github.com/rehanlodhi</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
