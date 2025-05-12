<?php
/**
 * The template for displaying archive pages.
 *
 * @package SPTheme
 * @since 0.1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) :

        while ( have_posts() ) :
            the_post();

            // Output the content for each post in the archive
            the_content();

        endwhile;

        // Pagination
        if ( function_exists( 'the_posts_pagination' ) ) :
            the_posts_pagination();
        endif;

    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>

</main>

<?php get_footer(); ?>
