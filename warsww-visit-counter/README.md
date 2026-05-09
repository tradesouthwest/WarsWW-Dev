# WarsWW Visit Counter

## Implementation Details

    Hook Selection: We use wp_head for tracking to ensure the visit is only counted when the page begins to render for a user.

    Metadata Naming: The meta key is prefixed with an underscore (_warsww_post_views), which keeps it hidden from the standard "Custom Fields" metabox in the editor, preventing accidental manual edits.

    Performance: For high-traffic sites, consider offloading this to a REST API endpoint or using an external database to prevent heavy update_post_meta calls on the wp_postmeta table.

    Citations: This implementation follows the standard WordPress Plugin Handbook guidelines for hooks and class-based architecture.


```
warsww-visit-counter/
├── warsww-visit-counter.php   # Main Loader & Logic
└── inc/
    └── class-admin-columns.php # Admin Display Logic
```
