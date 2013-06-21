<?php
/**
 * Function to move the Featured Image Meta-Box to the top of the edit post page.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_move_featured_image_metabox() {
	
	remove_meta_box( 'postimagediv', 'post', 'side' );		//CPT Works
	remove_meta_box( 'postimagediv', 'page', 'side' );		//CPT Works
	remove_meta_box( 'postimagediv', 'gurus', 'side' );		//CPT Gurus
	remove_meta_box( 'postimagediv', 'books', 'side' );		//CPT Books
	remove_meta_box( 'postimagediv', 'videos', 'side' );	//CPT Videos

	add_meta_box('postimagediv', __('Custom Image','ash'), 'post_thumbnail_meta_box', 'post', 'side', 'high');
	add_meta_box('postimagediv', __('Custom Image','ash'), 'post_thumbnail_meta_box', 'page', 'side', 'high');
	add_meta_box('postimagediv', __('Custom Image','ash'), 'post_thumbnail_meta_box', 'gurus', 'side', 'high');
	add_meta_box('postimagediv', __('Custom Image','ash'), 'post_thumbnail_meta_box', 'books', 'side', 'high');
	add_meta_box('postimagediv', __('Custom Image','ash'), 'post_thumbnail_meta_box', 'videos', 'side', 'high');

}

add_action('do_meta_boxes', 'ash_move_featured_image_metabox');
?>