<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'blog-over-color-variables' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','blog-over-style','blog-over-dark-mode','blog-over-menu-style','blog-over-google-fonts','font-awesome','blog-over-ticker-style','blog-over-hero-style','blog-over-feature-story-style','blog-over-missed-style','blog-over-blog-modern-style','blog-over-alignment' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Check if meta tags are set from parent theme and remove action.
 * @since 1.0.1
 */
function blog_over_child_remove_seo_tags() {
    // We target a priority of 11 to ensure it runs AFTER the parent theme registers its hooks
    remove_action( 'wp_head', 'blog_over_seo_meta_tags', 5 );
}
add_action( 'after_setup_theme', 'blog_over_child_remove_seo_tags', 11 ); 