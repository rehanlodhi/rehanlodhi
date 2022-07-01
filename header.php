<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rehan_Lodhi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rehanlodhi' ); ?></a>

    <header class="header">
        <div class="container header__inner">
            <div class="brand">
                <a href="https://rehanlodhi.dev/">
                    <h1>Rehan Lodhi</h1>
                </a>
            </div>

            <nav>
                <ul class="menu">
                    <li class="menu__item">
                        <a href="https://rehanlodhi.dev/">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/articles.png' ?>" alt="">
                            <span>Articles</span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="https://rehanlodhi.dev/projects/">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/projects.png' ?>" alt="">
                            <span>Projects</span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="https://rehanlodhi.dev/about-me">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/about.png' ?>" alt="">
                            <span>About me</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div>
                <ul class="icons">
                    <li class="icons__item"><a href="https://github.com/rehanlodhi"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/github.svg' ?> " alt=""></a>
                    </li>
                    <li class="icons__item"><a href="https://www.linkedin.com/in/rehanlodhi/"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.svg' ?>"
                                    alt=""></a></li>
                    <li class="icons__item"><a href="https://www.instagram.com/rehan.27/"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/instagram.svg' ?>"
                                    alt=""></a></li>
                </ul>
            </div>
        </div>
    </header>
