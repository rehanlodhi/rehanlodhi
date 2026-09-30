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

// Load the same compiled CSS into the block editor iframe. Without this,
// hand-rolled classes (.hard-tag, .is-style-hard-card, etc.) only ever
// render on the front end — theme.json tokens reach the editor automatically,
// but a plain wp_enqueue_scripts hook does not.
add_action( 'after_setup_theme', 'wml_add_editor_style_support' );
function wml_add_editor_style_support(): void {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/theme.css' );
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
