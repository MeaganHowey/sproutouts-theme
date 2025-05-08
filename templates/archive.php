<?php
/**
 * The template for displaying archive pages.
 *
 * @package SPTheme
 * @since 0.1.0
 */
?>

<?php
// Check if pagination function exists before starting the loop
if (function_exists('the_posts_pagination')) :
    // Pagination for archives
    the_posts_pagination();
endif;

// Start the loop to display posts in the archive
if ( have_posts() ) :

    while ( have_posts() ) :
        the_post();

        // Output the content for each post in the archive
        the_content();

    endwhile;

else :
    echo '<p>No posts found.</p>';
endif;
?>
