<?php
/* 
 * Plugin Name: Materialis - Disable Gutenberg Integration
 * Author: ExtendThemes
 * Description: Materialis - Disable Gutenberg Integration
 *
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Version: 1.0
 */

add_action( 'init', function() {
	remove_filter( 'the_content', 'materialis_gutenberg_keep_comment_before', 5 );
	remove_filter( 'the_content', 'materialis_gutenberg_keep_comment_after', is_customize_preview() ? 20 : 6 );
} );