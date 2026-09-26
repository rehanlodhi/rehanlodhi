<?php
/**
 * Title: Section: Projects
 * Slug: rehan-lodhi/section-projects
 * Categories: rehan-lodhi
 * Description: Selected work — hard-card project grid, pulled live from posts in the "Projects" category.
 *
 * @package wml
 */
?>
<!-- wp:group {"id":"projects","style":{"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|block-padding-y","bottom":"var:preset|spacing|block-padding-y"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="projects" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--block-padding-y);padding-bottom:var(--wp--preset--spacing--block-padding-y)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|space-7","padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"eyebrow","style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
			<p class="eyebrow" style="margin-bottom:3rem">Selected Work</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"display-md"} -->
			<h2 class="wp-block-heading has-display-md-font-size">Projects</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"format":[]},"className":"project-grid"} -->
		<div class="wp-block-query project-grid">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} /-->

					<!-- wp:post-excerpt {"excerptLength":20,"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} /-->

					<!-- wp:read-more {"content":"View Project &#8594;","style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} /-->

					<!-- wp:post-terms {"term":"post_tag","className":"hard-tag","style":{"spacing":{"margin":{"top":"var:preset|spacing|space-6"}}}} /--></div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-sm"}}} -->
		<p class="has-text-align-right" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-sm);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="https://github.com/rehanlodhi">All repositories on GitHub &#8594;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
