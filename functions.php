<?php
// Load front-end assets
add_action( 'wp_enqueue_scripts', 'wml_theme_assets' );
function wml_theme_assets(): void {
    $assets = include get_theme_file_path( 'assets/css/theme.asset.php' );

    wp_enqueue_style(
        'wml-style',
        get_theme_file_uri( '/assets/css/theme.css' ),
        $assets['dependencies'],
        $assets['version']
    );
}
