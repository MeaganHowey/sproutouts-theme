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

   //Add "Admin Settings" section to front-end customizer settings
   $wp_customize->add_section( 'sp_admin_settings', array(
     'title'    => __( 'Admin Settings', 'sp' ),
     'priority' => 30,
   ));

   // ----------------------------
   // Custom Background Color
   // ----------------------------

   //Add setting value to store background color chosen by user
   $wp_customize->add_setting( 'sp_site_background_color', array(
     'default'  => '#ffffff',
     'transport' => 'refresh',
   ));

   //Add setting to front-end customizer
   $wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'sp_site_background_color',
     array(
       'label'    => __( 'Site Background Color ', 'sp'),
       'section'  => 'sp_admin_settings',
       'settings' => 'sp_site_background_color',
     )
   ));

   // ----------------------------
   // Toggle Right-Click On Images
   // ------

   //Add setting value to toggle whether images are right-clickable (can block certain features)
   $wp_customize->add_setting( 'sp_disable_right_click_on_images', array(
     'default'  => false,
     'sanitize_callback' => 'wp_validate_boolean',
   ));

   //Add setting to front-end customizer
   $wp_customize->add_control('sp_disable_right_click_on_images', array(
     'label'    => __('Disable Right Click On Images', 'sp-theme'),
     'section'  => 'sp_admin_settings',
     'type'     => 'checkbox',
   ));

 }

 add_action( 'customize_register', 'sp_customize_register');
