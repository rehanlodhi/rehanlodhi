<?php
/**
 * Title: Section: Writing
 * Slug: rehan-lodhi/section-writing
 * Categories: rehan-lodhi
 * Description: Recent posts — hard-post row list via core/query.
 *
 * @package wml
 */
?>
<!-- wp:group {"id":"writing","style":{"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|block-padding-y","bottom":"var:preset|spacing|block-padding-y"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="writing" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--block-padding-y);padding-bottom:var(--wp--preset--spacing--block-padding-y)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|space-7","padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"eyebrow","style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
			<p class="eyebrow" style="margin-bottom:3rem">Writing</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"display-md"} -->
			<h2 class="wp-block-heading has-display-md-font-size">Recent Posts</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"1.25rem"}}} -->
			<!-- wp:group {"className":"is-style-hard-post","backgroundColor":"surface-card"} -->
			<div class="wp-block-group is-style-hard-post has-surface-card-background-color has-background">
				<!-- wp:post-date {"isLink":false,"fontSize":"label-xs","textColor":"faint","style":{"typography":{"fontFamily":"var:preset|font-family|mono","letterSpacing":"0.08em"},"spacing":{"padding":{"top":"3px"}}}} /-->

				<!-- wp:group {"className":"post-row-body","style":{"spacing":{"blockGap":"4px"}}} -->
				<div class="wp-block-group post-row-body">
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"body-md","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontWeight":"500","textTransform":"none","letterSpacing":"0"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":20,"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.5"}}} /--></div>
				<!-- /wp:group -->

				<!-- wp:post-terms {"term":"category","className":"hard-tag"} /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-sm"}}} -->
		<p class="has-text-align-right" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-sm);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="/category/writing/">All posts &#8594;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
