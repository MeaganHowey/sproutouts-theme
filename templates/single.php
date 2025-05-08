<?php
/**
 * The template for displaying single blog posts.
 *
 * @package SPTheme
 * @since 0.1.0
 */
?>

<?php
// Start the loop to display the single post
while ( have_posts() ) :
    the_post();

    // Output the post content
    the_content();

endwhile;
?>
