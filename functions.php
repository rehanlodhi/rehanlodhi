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

// Hard-border block styles + pattern category
add_action( 'init', 'wml_register_block_styles' );
function wml_register_block_styles(): void {
    register_block_style( 'core/button', [
        'name'  => 'hard-fill',
        'label' => __( 'Hard (Fill)', 'wml' ),
    ] );
    register_block_style( 'core/button', [
        'name'  => 'hard-outline',
        'label' => __( 'Hard (Outline)', 'wml' ),
    ] );
    register_block_style( 'core/group', [
        'name'  => 'hard-card',
        'label' => __( 'Hard Card', 'wml' ),
    ] );
    register_block_style( 'core/group', [
        'name'  => 'hard-post',
        'label' => __( 'Hard Post Row', 'wml' ),
    ] );

    register_block_pattern_category( 'rehan-lodhi', [
        'label' => __( 'Rehan Lodhi', 'wml' ),
    ] );
}
