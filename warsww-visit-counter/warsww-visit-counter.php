<?php
/**
 * Plugin Name: WarsWW Visit Counter
 * Description: Tracks post views and displays them in the admin post list.
 * Version: 1.0.0
 * Author: WarsWW
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class WarsWW_Visit_Counter {

    public function __construct() {
        // Register the tracking function
        add_action( 'wp_head', [ $this, 'track_post_views' ] );
        
        // Load Admin Class
        if ( is_admin() ) {
            require_once plugin_dir_path( __FILE__ ) . 'inc/class-admin-columns.php';
            new WarsWW_Admin_Columns();
        }
    }

    /**
     * Increments the view count for single post types.
     */
    public function track_post_views() {
        if ( is_single() ) {
            global $post;
            $count = get_post_meta( $post->ID, '_warsww_post_views', true );
            $count = ( $count == '' ) ? 0 : $count;
            $count++;
            update_post_meta( $post->ID, '_warsww_post_views', $count );
        }
    }
}

new WarsWW_Visit_Counter();
