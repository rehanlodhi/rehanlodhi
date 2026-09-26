<?php
/**
 * Title: Page: About
 * Slug: rehan-lodhi/page-about
 * Categories: rehan-lodhi
 * Description: About page body: hard-frame headshot sidebar plus bio, skills, and experience timeline.
 *
 * @package wml
 */
?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|block-padding-y","bottom":"var:preset|spacing|block-padding-y"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--block-padding-y);padding-bottom:var(--wp--preset--spacing--block-padding-y)">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|block-padding-x","right":"var:preset|spacing|block-padding-x"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--block-padding-x);padding-left:var(--wp--preset--spacing--block-padding-x)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"5rem"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"280px"} -->
			<div class="wp-block-column" style="flex-basis:280px">
				<!-- wp:image {"className":"hard-frame","aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium hard-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rehan_lodhi.jpeg' ) ); ?>" alt="Rehan Lodhi" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":2,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|space-6","bottom":"var:preset|spacing|space-3"}}}} -->
				<h2 class="wp-block-heading has-display-xs-font-size" style="margin-top:var(--wp--preset--spacing--space-6);margin-bottom:var(--wp--preset--spacing--space-3);line-height:1">Rehan Lodhi</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"var(--wp--custom--tracking--label)","fontSize":"var:preset|font-size|label-xs"}},"textColor":"faint"} -->
				<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:var(--wp--custom--tracking--label);text-transform:uppercase">Backend Engineer &#183; Python</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300"}}} -->
				<p class="has-muted-color has-text-color has-body-xs-font-size" style="font-weight:300">Islamabad, Pakistan &#183; GMT+5</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|space-6"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--space-6)">
					<!-- wp:paragraph {"className":"icon-row"} -->
					<p class="icon-row"><a href="https://github.com/rehanlodhi" target="_blank" rel="noreferrer noopener">github.com/rehanlodhi</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"icon-row"} -->
					<p class="icon-row"><a href="https://www.linkedin.com/in/rehanlodhi" target="_blank" rel="noreferrer noopener">linkedin.com/in/rehanlodhi</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"icon-row"} -->
					<p class="icon-row"><a href="mailto:contact@rehanlodhi.com">contact@rehanlodhi.com</a></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-6"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--space-6)">
					<!-- wp:button {"className":"is-style-hard-outline"} -->
					<div class="wp-block-button is-style-hard-outline"><a class="wp-block-button__link wp-element-button" href="#">Download CV &#8594;</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":1,"fontSize":"display-md","style":{"typography":{"lineHeight":"1.05"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
				<h1 class="wp-block-heading has-display-md-font-size" style="margin-bottom:1.25rem;line-height:1.05">Rehan Lodhi: Python Backend Engineer</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body-lg","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
				<p class="has-body-color has-text-color has-body-lg-font-size" style="margin-bottom:3rem;font-weight:300;line-height:var(--wp--custom--line-height--loose)">I build the hidden engines that power modern applications: the APIs, data pipelines, and business logic that users never see but always rely on.</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"display-sm","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
				<h2 class="wp-block-heading has-display-sm-font-size" style="margin-bottom:1.25rem;line-height:1">What I Do</h2>
				<!-- /wp:heading -->

				<!-- wp:list {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"},"spacing":{"margin":{"bottom":"3rem"},"padding":{"left":"1.25rem"}}}} -->
				<ul class="wp-block-list has-body-color has-text-color has-body-md-font-size" style="margin-bottom:3rem;padding-left:1.25rem;font-weight:300;line-height:var(--wp--custom--line-height--loose)">
				<!-- wp:list-item -->
				<li><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Backend Architecture &amp; APIs:</strong> Designing robust, scalable server-side logic and REST APIs using Python and FastAPI.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Data Engineering &amp; ETL Pipelines:</strong> Building automated Python scrapers, data extraction tools, and seamless data transformation pipelines for large datasets.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">AI Integration &amp; Automation:</strong> Developing AI agents, RAG pipelines, and Model Context Protocol (MCP) integrations to securely connect LLMs (like Claude) to internal business systems.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Infrastructure &amp; CI/CD:</strong> Architecting robust deployment pipelines using Docker, Linux server environments, Nginx, and GitHub Actions for automated, error-free delivery.</li>
				<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:heading {"level":2,"fontSize":"display-sm","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
				<h2 class="wp-block-heading has-display-sm-font-size" style="margin-bottom:1.25rem;line-height:1">How I Got Here</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
				<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)">My journey into software engineering started in 2016 during my university days. While exploring different areas of computer science, building web applications with plain PHP and JavaScript was the one thing that truly clicked. It provided a clear sense of motivation and satisfaction. Before I even graduated, I began freelancing, building custom WordPress themes and plugins from scratch, and optimizing performance for real business clients.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
				<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)">Three years of building and solving client requests led me to an Associate Software Engineer role. I was tasked with maintaining and upgrading high-traffic informational websites for US national highways. This role pushed me beyond standard web development. I began diving deep into server-side operations: handling Linux server configurations, writing custom deployment scripts, managing cron jobs, and executing complex data migrations. I realized that while building websites was enjoyable, designing the underlying infrastructure and data pipelines was where my real passion lived.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
				<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)">That focus on structural problem-solving landed me a senior contract with Colibri, a US-based firm. Here, I experienced enterprise-level architecture, scaling educational platforms for the real estate and healthcare sectors. My work centered heavily on building REST APIs, custom block development, and bridging frontend transformations with robust backend logic.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
				<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)">Having mastered PHP and enterprise architecture, I wanted to expand my toolset to solve a different class of data problems. I began transitioning to Python to apply the architectural concepts I had refined over the years. This shift allowed me to lead a complete digital transformation for a logistics dispatching company. I replaced their manual spreadsheet workflows with a fully automated backend system that handled load logging, driver tracking, fleet management, and automated paycheck generation.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
				<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)">Today, my work is deeply focused on data engineering, backend architecture, and AI integration. I spend my time building fast and scalable systems with Python and FastAPI, designing resilient ETL pipelines, and engineering the hidden infrastructure that keeps modern applications running smoothly. Recently, I developed an AI-powered invoice triage agent for the logistics industry, which automatically extracts and processes load data directly from rate confirmations. I also built a Model Context Protocol (MCP) integration, allowing Claude to interact securely and directly with internal backend systems. To keep pushing the boundaries of what is possible, I am actively expanding my expertise in AI tooling, leveraging advanced coding agents to eliminate human error, streamline development cycles, and write highly resilient code. Taking the scenic route from full-stack web development to specialized backend and AI architecture gave me a comprehensive understanding of how software operates, allowing me to build intelligent systems that scale reliably from the database to the end user.</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"display-sm","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"3rem","bottom":"1.25rem"}}}} -->
				<h2 class="wp-block-heading has-display-sm-font-size" style="margin-top:3rem;margin-bottom:1.25rem;line-height:1">Experience</h2>
				<!-- /wp:heading -->

				<!-- wp:group {"className":"timeline-rail","style":{"spacing":{"blockGap":"var:preset|spacing|space-7"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group timeline-rail">
					<!-- wp:group {"className":"timeline-item","style":{"spacing":{"blockGap":"var:preset|spacing|space-2"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group timeline-item">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|label-xs","letterSpacing":"0.08em"}},"textColor":"faint"} -->
						<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:0.08em">Feb 2026 &#8211; Present</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-md","textColor":"heading","style":{"typography":{"fontWeight":"500"}}} -->
						<p class="has-heading-color has-text-color has-body-md-font-size" style="font-weight:500">Senior Backend Engineer &amp; AI Integrator</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted"} -->
						<p class="has-muted-color has-text-color has-body-xs-font-size">Yield Trucking Services &#183; Individual Contractor</p>
						<!-- /wp:paragraph -->

						<!-- wp:list {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"},"spacing":{"padding":{"left":"1.1rem"}}}} -->
						<ul class="wp-block-list has-muted-color has-text-color has-body-xs-font-size" style="padding-left:1.1rem;font-weight:300;line-height:1.6">
						<!-- wp:list-item -->
						<li>Architected a complete digital transformation, replacing manual spreadsheets with a fully automated Python/FastAPI backend system for load logging and fleet management.</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Engineered an AI-powered invoice triage agent to automatically extract load data from rate confirmations.</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Developed a Model Context Protocol (MCP) integration, enabling secure interaction between Claude AI and internal backend databases.</li>
						<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list --></div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"timeline-item","style":{"spacing":{"blockGap":"var:preset|spacing|space-2"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group timeline-item">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|label-xs","letterSpacing":"0.08em"}},"textColor":"faint"} -->
						<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:0.08em">Oct 2022 &#8211; Jan 2026</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-md","textColor":"heading","style":{"typography":{"fontWeight":"500"}}} -->
						<p class="has-heading-color has-text-color has-body-md-font-size" style="font-weight:500">Senior WordPress/PHP Developer</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted"} -->
						<p class="has-muted-color has-text-color has-body-xs-font-size">Colibri &#183; Remote</p>
						<!-- /wp:paragraph -->

						<!-- wp:list {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"},"spacing":{"padding":{"left":"1.1rem"}}}} -->
						<ul class="wp-block-list has-muted-color has-text-color has-body-xs-font-size" style="padding-left:1.1rem;font-weight:300;line-height:1.6">
						<!-- wp:list-item -->
						<li>Managed enterprise-level architecture for high-traffic educational platforms in healthcare and real estate.</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Developed REST APIs, custom blocks, and bridged frontend components with scalable backend logic using advanced PHP.</li>
						<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list --></div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"timeline-item","style":{"spacing":{"blockGap":"var:preset|spacing|space-2"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group timeline-item">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|label-xs","letterSpacing":"0.08em"}},"textColor":"faint"} -->
						<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:0.08em">Oct 2021 &#8211; Apr 2022</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-md","textColor":"heading","style":{"typography":{"fontWeight":"500"}}} -->
						<p class="has-heading-color has-text-color has-body-md-font-size" style="font-weight:500">Associate Software Engineer</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted"} -->
						<p class="has-muted-color has-text-color has-body-xs-font-size">US National Highways Project &#183; Islamabad</p>
						<!-- /wp:paragraph -->

						<!-- wp:list {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"},"spacing":{"padding":{"left":"1.1rem"}}}} -->
						<ul class="wp-block-list has-muted-color has-text-color has-body-xs-font-size" style="padding-left:1.1rem;font-weight:300;line-height:1.6">
						<!-- wp:list-item -->
						<li>Maintained and upgraded high-traffic informational websites, focusing on performance optimization.</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Managed Linux server configurations, wrote deployment scripts, and executed complex data migrations and cron jobs.</li>
						<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list --></div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"timeline-item","style":{"spacing":{"blockGap":"var:preset|spacing|space-2"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group timeline-item">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|label-xs","letterSpacing":"0.08em"}},"textColor":"faint"} -->
						<p class="has-faint-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--label-xs);letter-spacing:0.08em">2016 &#8211; Oct 2021</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-md","textColor":"heading","style":{"typography":{"fontWeight":"500"}}} -->
						<p class="has-heading-color has-text-color has-body-md-font-size" style="font-weight:500">Freelance Web Developer</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"body-xs","textColor":"muted"} -->
						<p class="has-muted-color has-text-color has-body-xs-font-size">Independent &#183; Remote</p>
						<!-- /wp:paragraph -->

						<!-- wp:list {"fontSize":"body-xs","textColor":"muted","style":{"typography":{"fontWeight":"300","lineHeight":"1.6"},"spacing":{"padding":{"left":"1.1rem"}}}} -->
						<ul class="wp-block-list has-muted-color has-text-color has-body-xs-font-size" style="padding-left:1.1rem;font-weight:300;line-height:1.6">
						<!-- wp:list-item -->
						<li>Delivered custom PHP, JavaScript, and WordPress solutions (themes and plugins) from scratch for diverse business clients.</li>
						<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":2,"fontSize":"display-sm","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"3rem","bottom":"1.25rem"}}}} -->
				<h2 class="wp-block-heading has-display-sm-font-size" style="margin-top:3rem;margin-bottom:1.25rem;line-height:1">Tech Stack</h2>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
					<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)"><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Languages:</strong> Python, PHP (8.x), JavaScript, SQL</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
					<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)"><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Frameworks &amp; Libraries:</strong> FastAPI, Symfony, Laravel, WordPress</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
					<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)"><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Data &amp; AI:</strong> ETL Pipelines, Web Scraping, RAG, MCP (Model Context Protocol), Local LLMs</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"}}} -->
					<p class="has-body-color has-text-color has-body-md-font-size" style="font-weight:300;line-height:var(--wp--custom--line-height--loose)"><strong style="font-weight:500;color:var(--wp--preset--color--body-strong)">Infrastructure &amp; DevOps:</strong> Linux, Docker, Nginx, GitHub Actions (CI/CD), rsync, MySQL, MongoDB</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-default","width":"1px"}},"spacing":{"padding":{"top":"3rem"},"margin":{"top":"3rem"}}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-default);border-top-width:1px;margin-top:3rem;padding-top:3rem">
					<!-- wp:heading {"level":3,"fontSize":"display-xs","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
					<h3 class="wp-block-heading has-display-xs-font-size" style="margin-bottom:1rem;line-height:1">Let&#8217;s Build Something</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"body-md","textColor":"body","style":{"typography":{"fontWeight":"300","lineHeight":"var(--wp--custom--line-height--loose)"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
					<p class="has-body-color has-text-color has-body-md-font-size" style="margin-bottom:1.5rem;font-weight:300;line-height:var(--wp--custom--line-height--loose)">Looking for a backend engineer to architect your next data pipeline, integrate AI into your workflow, or scale your infrastructure?</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-hard-outline"} -->
						<div class="wp-block-button is-style-hard-outline"><a class="wp-block-button__link wp-element-button" href="/#projects">View My Work</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"is-style-hard-fill"} -->
						<div class="wp-block-button is-style-hard-fill"><a class="wp-block-button__link wp-element-button" href="mailto:contact@rehanlodhi.com">Get in Touch</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
