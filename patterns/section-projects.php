<?php
/**
 * Title: Section: Projects
 * Slug: rehan-lodhi/section-projects
 * Categories: rehan-lodhi
 * Description: Selected work — hard-card project grid (static, edit in the editor).
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

		<!-- wp:columns {"className":"project-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|space-6","left":"var:preset|spacing|space-6"}}}} -->
		<div class="wp-block-columns project-grid">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">001 — Open Source</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">Krate CLI</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">A minimal dependency graph visualiser for monorepos. Parses lockfiles across npm, pnpm, and cargo workspaces into a unified diff-able format.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Rust</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">WASM</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">CLI</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">View on GitHub &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">002 — Product</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">Briefstack</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">Async briefing tool for remote design teams. Structured brief templates, version diffs, and approval workflows.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Next.js</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Supabase</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Vercel</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">Case Study &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">003 — Infrastructure</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">PgProxy</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">Connection pooling proxy for Postgres that adds row-level audit logs, query rate limiting, and per-tenant isolation.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Go</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Postgres</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Docker</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">View Docs &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- wp:columns {"className":"project-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|space-6","left":"var:preset|spacing|space-6"}}}} -->
		<div class="wp-block-columns project-grid">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">004 — Design</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">Baseform</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">Headless form primitives for React. Accessible by default, zero runtime dependencies, fully typed with Zod integration.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">TypeScript</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">React</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Zod</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">NPM Package &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">005 — API</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">Skimmer</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">Lightweight RSS-to-webhook pipeline with content deduplication, full-text extraction, and structured output.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Python</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Fly.io</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">SQLite</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">Self-Host Guide &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-hard-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|card-padding","bottom":"var:preset|spacing|card-padding","left":"var:preset|spacing|card-padding","right":"var:preset|spacing|card-padding"},"blockGap":"var:preset|spacing|space-4"}},"backgroundColor":"surface-card"} -->
				<div class="wp-block-group is-style-hard-card has-surface-card-background-color has-background" style="padding-top:var(--wp--preset--spacing--card-padding);padding-right:var(--wp--preset--spacing--card-padding);padding-bottom:var(--wp--preset--spacing--card-padding);padding-left:var(--wp--preset--spacing--card-padding)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.16em","fontSize":"var:preset|font-size|label-xxs"}},"textColor":"faint"} -->
					<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xxs);letter-spacing:0.16em;text-transform:uppercase">006 — Research</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="line-height:1">Coldframe</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"}}} -->
					<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300;line-height:1.6">Evaluation harness for cold-start recommendation systems. Reproducible benchmarks across baselines.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"card-tags","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group card-tags" style="margin-top:var(--wp--preset--spacing--space-6)">
						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">Python</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">PyTorch</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"hard-tag"} -->
						<p class="hard-tag">DVC</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"},"spacing":{"margin":{"top":"var:preset|spacing|space-6"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--space-6);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="#">Read Paper &#8594;</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-sm"}}} -->
		<p class="has-text-align-right" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-sm);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase"><a href="https://github.com/rehanlodhi">All repositories on GitHub &#8594;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
