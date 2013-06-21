<?php
/**
 * Function that will change the background colors of the post / page within the admin based on the current status. Draft, Pending, Published, Future, Private.
 *
 * Based on: http://wpsnipp.com/index.php/functions-php/change-admin-postpage-color-by-status-draft-pending-published-future-private/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function posts_status_color(){
	?>
		<style>
		.status-draft{background: #FCE3F2 !important;}
		.status-pending{background: #87C5D6 !important;}
		.status-publish{/* no background keep wp alternating colors */}
		.status-future{background: #C6EBF5 !important;}
		.status-private{background:#F2D46F;}
		</style>
	<?php

}
add_action('admin_footer','posts_status_color');

?>