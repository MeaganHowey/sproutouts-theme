<?php
/**
 * Performance Optimization
 *
 * Disables unnecessary WordPress features like emojis,
 * removes default image sizes, and cleans up <head>.
 *
 * @package SPTheme
 * @since 0.1.0
 */

// ----------------------------
// Disable Emoji Support
// ----------------------------
function sp_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'sp_disable_emojis' );

// ----------------------------
// Remove Unused Default Image Sizes
// ----------------------------
function sp_remove_default_image_sizes( $sizes ) {
    unset( $sizes['medium'] );
    unset( $sizes['large'] );
    unset( $sizes['medium_large'] );
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'sp_remove_default_image_sizes' );

// ----------------------------
// Clean Up <head> Output
// ----------------------------
function sp_cleanup_head() {
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
}
add_action( 'init', 'sp_cleanup_head' );

// ----------------------------
// Disable XML-RPC
// ----------------------------
add_filter( 'xmlrpc_enabled', '__return_false' );

// ----------------------------
// Disable WP Block Patterns UI (added WP 6.5+)
// ----------------------------

function sp_disable_wp_block_patterns_ui() {
  remove_action( 'admin_menu', 'wp_add_admin_pattern_menu' );
  remove_action( 'admin_init', 'wp_initialize_theme_patterns' );
}
add_action( 'init', 'sp_disable_wp_block_patterns_ui' );
