<?php
/**
 * Theme Customizer Settings
 *
 * Enables front-end customizer settings on the WP dashboard
 *
 * @package SPTheme
 * @since 0.1.10
 */

 function sp_customize_register( $wp_customize ) {

   //Add "Theme Colors" section to front-end customizer settings
   $wp_customize->add_section( 'sp_colors', array(
     'title'    => __( 'Theme Colors', 'sp' ),
     'priority' => 30,
   ));

   //Add setting value to store background color chosen by user
   $wp_customize->add_setting( 'sp_site_background_color', array(
     'default'  => '#ffffff',
     'transport' => 'refresh',
   ));

   //Add setting to front-end customizer for changing site background color
   $wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'sp_site_background_color',
     array(
       'label'    => __( 'Site Background Color ', 'sp'),
       'section'  => 'sp_colors',
       'settings' => 'sp_site_background_color',
     )
   ));
 }

 add_action( 'customize_register', 'sp_customize_register');
