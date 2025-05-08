<?php
/**
 * Main template file.
 *
 * @package SPTheme
 * @since 0.1.1
 */
?>

<?php
// Start the WordPress loop to display content
if (have_posts()) :
    while (have_posts()) :
        the_post();
        // Display the content of the current post
        the_content();
    endwhile;
else :
    echo '<p>No content available.</p>';
endif;
?>
