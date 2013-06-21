<?php

/*==============================================================================================================================
/* Function for dynamic custom length excerpt
 *
 * based on: http://wp-snippets.com/dynamic-custom-length-excpert/
 *
 * The function will return the excerpt with a maximum length of predetermined length and removes everything after the last sentence within the excerpt. So that the excerpt will NOT cut off mid-sentence.
 * Example how to use the function in the theme templates. <?php ash_excerpt(50); ?>
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


// Variable & intelligent excerpt length.
function ash_excerpt($length) { // Max excerpt length. Length is set in characters
	global $post;
	$text = $post->post_excerpt;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
	}
	$text = strip_shortcodes($text); // optional, recommended
	$text = strip_tags($text); // use ' $text = strip_tags($text,'&lt;p&gt;&lt;a&gt;'); ' if you want to keep some tags

	$text = substr($text,0,$length);
	$excerpt = reverse_strrchr($text, '.', 1);
	if( $excerpt ) {
		echo apply_filters('the_excerpt',$excerpt);
	} else {
		echo apply_filters('the_excerpt',$text);
	}
}

// Returns the portion of haystack which goes until the last occurrence of needle
function reverse_strrchr($haystack, $needle, $trail) {
	return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

?>