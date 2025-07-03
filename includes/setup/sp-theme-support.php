<?php
/**
 * Theme Setup
 *
 * @package SPTheme
 * @since 0.1.9
 */

function sp_theme_setup() {

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  remove_theme_support( 'core-block-patterns' );

}
add_action('after_setup_theme', 'sp_theme_setup');

 ?>
