<?php
/**
 * Default Page Template
 *
 * @package SPTheme
 * @since 0.1.0
 */

get_header();
?>

<div id="page-container">
    <div id="et-main-area">
        <div id="main-content">
            <div class="container clearfix">
                <div id="left-area">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
