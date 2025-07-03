<?php
/**
 * Theme Customizer Output
 *
 * Outputs styles chosen in the Theme Customizer settings on the WP dashboard
 *
 * @package SPTheme
 * @since 0.1.11
 */

function sp_output_customizer_css() {
  $sp_site_background = get_theme_mod( 'sp_site_background_color', '#ffffff' );

  echo "<style> body { background-color: " . esc_attr($sp_site_background) . "; } </style>";
}
add_action( 'wp_head', 'sp_output_customizer_css' );
