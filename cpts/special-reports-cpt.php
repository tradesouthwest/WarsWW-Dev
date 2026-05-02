<?php
/**
 * You must do docblocks for every method/function
 *
 * @since 1.1.0
 *
 * @param integer $int With descriptions.
 *
 * @return The return must be included.
 */  

namespace WarsWW\Editorial;

class SpecialReports {
    public static function register() {
        register_post_type( 'ww_editorial', [
            'labels' => [
                'name'          => 'Special Reports',
                'singular_name' => 'Special Report',
                'add_new_item'  => 'Archive a New Intelligence Report',
            ],
            'public'       => true,
            'has_archive'  => 'special-reports', // Slug: warsww.net/special-reports/
            'show_in_rest' => true, // Enables Gutenberg
            'menu_icon'    => 'dashicons-media-document',
            'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
            'rewrite'      => [ 'slug' => 'intel-report' ],
        ]);
    }
}
add_action( 'init', [ __NAMESPACE__ . '\SpecialReports', 'register' ] );
