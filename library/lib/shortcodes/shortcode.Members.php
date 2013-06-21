<?php
/**
 * Shortcode Members - Display content to registered users only
 *
 * Based on: http://www.wprecipes.com/wordpress-shortcode-display-content-to-registered-users-only
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_member_check_shortcode( $atts, $content = null ) {
	 if ( is_user_logged_in() && !is_null( $content ) && !is_feed() )
		return $content;
	return '';
}
 
add_shortcode( 'member', 'ash_member_check_shortcode' );

//Once done, you can add the following to your posts to create a portion or text (or any other content) that will be only displayed to registered users:
//[member] This text will be only displayed to registered users. [/member]
?>