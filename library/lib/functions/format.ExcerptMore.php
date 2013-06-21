<?php

// Fixing the Read More in the Excerpts
// This removes the annoying [É] to a Read More link
function ash_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a href="'. get_permalink($post->ID) . '" class="more-link" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'ash_excerpt_more');

?>