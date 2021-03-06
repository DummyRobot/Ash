<?php
/**================================================================================================================
 * Function for automatically set the first image in post as featured image.
 *
 * Based on:http://wpforce.com/automatically-set-the-featured-image-in-wordpress/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function autoset_featured() {
	global $post;
		$already_has_thumb = has_post_thumbnail($post->ID);
			if (!$already_has_thumb)  {
				$attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
					if ($attached_image) {
						foreach ($attached_image as $attachment_id => $attachment) {
							set_post_thumbnail($post->ID, $attachment_id);
							}
						}
					}
}//end function

add_action('the_post', 'autoset_featured');
add_action('save_post', 'autoset_featured');
add_action('draft_to_publish', 'autoset_featured');
add_action('new_to_publish', 'autoset_featured');
add_action('pending_to_publish', 'autoset_featured');
add_action('future_to_publish', 'autoset_featured');

?>