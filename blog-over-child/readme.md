# Blog Over Child Theme

## Instructions

If you theme already prints SEO tags in the head, you will need to remove them to avoid conflicts in og:image tag.

Example 

```
/**
 * Check if meta tags are set from parent theme and remove action.
 * @since 1.0.1
 */
function blog_over_child_remove_seo_tags() {
    // We target a priority of 11 to ensure it runs AFTER the parent theme registers its hooks
    remove_action( 'wp_head', 'blog_over_seo_meta_tags', 5 );
}
add_action( 'after_setup_theme', 'blog_over_child_remove_seo_tags', 11 ); 

```
## Support
Contact larry@tradesouthwest.com for help.