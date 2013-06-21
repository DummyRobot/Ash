<?php

/*/*====================================================================================
 * Function for Truncate Post Title 
 *
 * Based on: http://wp-snippets.com/truncate-post-title/
 *
 * Whenever you're in need of truncating a title, call: <?php ash_Title(50);?>... - Where (50) is the number of Characters it allows before truncating!
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function ash_title($limit) {

	global $post;//WordPress-specific global variable

	$title = get_the_title($post->ID);
	//$title = substr($title, 0, $limit) . '...'; //Adds [...] to every title :(
	$title = strlen($title) < $limit ? $title : substr($title, 0, $limit) . '...'; //Doesn't add [...] to every title :)
	echo $title;
} ?>