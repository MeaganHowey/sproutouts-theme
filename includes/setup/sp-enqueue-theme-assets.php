<?php
/**
 * Loads Folder Files
 *
 * @package SPTheme
 * @since 0.1.12
 */

 function sp_enqueue_theme_assets() {

   //enqueue dynamic copyright year
   wp_enqueue_script('sp-dynamic-copyright-year', get_stylesheet_directory_uri() . '/assets/js/sp_dynamic_copyright_year.js', array('jquery'), null, true);

 }

 add_action('wp_enqueue_scripts', 'sp_enqueue_theme_assets')

 ?> 
