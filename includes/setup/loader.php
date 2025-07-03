<?php
/**
 * Loads Folder Files
 *
 * @package SPTheme
 * @since 0.1.11
 */

 foreach ( glob( get_template_directory() . '/includes/setup/*.php' ) as $file ) {
     require_once $file;
 }
