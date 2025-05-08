<?php
/**
 * Default Page Template
 *
 * This file is intentionally left minimal to allow full control by Divi Theme Builder.
 *
 * @package SPTheme
 * @since 0.1.0
 */
?>

<?php
// Start the loop
while ( have_posts() ) :
    the_post();

    // Content output is handled by Divi Theme Builder
    the_content();

endwhile;
?>
