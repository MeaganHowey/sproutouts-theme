<?php
/**
 * The template for displaying single blog posts.
 *
 * @package SPTheme
 * @since 0.1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
