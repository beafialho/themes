<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Hidden No Results Content
 * Slug: cookbook/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'cookbook' ); ?></p>
<!-- /wp:paragraph -->
