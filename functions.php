<?php
function my_theme_enqueue_styles(): void
{
    wp_enqueue_style( 'wml-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
