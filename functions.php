<?php
// Load front-end assets. theme.css is small (~9 KB), so it's inlined in <head>
// instead of linked — a linked stylesheet is render-blocking and delays the
// request for everything it unlocks. The editor still loads the file (below).
add_action( 'wp_enqueue_scripts', 'wml_theme_assets' );
function wml_theme_assets(): void {
    wp_register_style( 'wml-style', false );
    wp_enqueue_style( 'wml-style' );
    wp_add_inline_style(
        'wml-style',
        (string) file_get_contents( get_theme_file_path( 'assets/css/theme.css' ) )
    );
}

// Preload the web fonts so they're requested with the HTML instead of being
// discovered only after the CSS is parsed (breaks the HTML -> CSS -> font
// request chain). crossorigin is required for font preloads.
add_action( 'wp_head', 'wml_preload_fonts', 1 );
function wml_preload_fonts(): void {
    $fonts = [
        'assets/fonts/ibm-plex-sans/IBMPlexSans-VariableFont_wght.woff2',
        'assets/fonts/bebas-neue/webfonts/BebasNeue-Regular.woff2',
        'assets/fonts/ibm-plex-mono/webfonts/IBMPlexMono-Regular.woff2',
        'assets/fonts/ibm-plex-mono/webfonts/IBMPlexMono-Medium.woff2',
    ];

    foreach ( $fonts as $font ) {
        printf(
            '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
            esc_url( get_theme_file_uri( $font ) )
        );
    }
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
