<?php
/**
 * Theme Functions File
 *
 * This file sets up theme defaults and registers support for various WordPress features.
 * It also enqueues scripts and styles and includes additional PHP modules as needed.
 *
 * @package SPTheme
 * @since 0.1.0
 */

define( 'SP_THEME_VERSION', '0.1.0' );

function sp_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'sp_theme_setup');

//Perfomance Enhancements
require_once get_template_directory() . '/includes/sp-performance.php';

 ?>
