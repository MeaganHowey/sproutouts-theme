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

define( 'SP_THEME_VERSION', '0.1.11' );

//theme setup, performance, and customizer settings.
require_once get_template_directory() . '/includes/setup/loader.php';

//theme customizer setup
require_once get_template_directory() . '/includes/customizer/loader.php';

 ?>
