<?php
/**
 * template name: Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rehan_Lodhi
 */

get_header();
?>

    <main class="container large">
        <section class="page_header">
            <h1 class="page_header__heading">Projects</h1>
            <p class="page_header__description">
                A few highlights of my open-source projects. View them all on GitHub.
            </p>
        </section>

        <section class="projects">

            <div class="project-card">
                <h3 class="project-card__heading">TakeNote</h3>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/tn-6687f6783a581048c7d7077ce4329888.png' ?>" alt="" class="project-card__image">
                <ul class="project-card__links">
                    <li>Write-up</li>
                    <li>Source</li>
                    <li>Demo</li>
                </ul>
                <p class="project-card__description">
                    A free, open source notes app for the web.
                </p>
            </div>

        </section>
    </main>

<?php
get_footer();
