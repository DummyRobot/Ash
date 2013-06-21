<?php
/**
 * Shortcodes Related Functions
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 
 
	//	Exec Shortcodes in text Widgets
	add_filter('widget_text', 'do_shortcode');
	
	// Enable oEmbed in Text Widgets
	add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
	add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );

?>