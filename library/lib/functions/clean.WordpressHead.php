<?php
/**
 * Function to clean the Wordpress Head
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_head_cleanup() {
	
	remove_action( 'wp_head', 'feed_links_extra', 3 );                    // Category Feeds
	remove_action( 'wp_head', 'feed_links', 2 );                          // Post and Comment Feeds
	remove_action( 'wp_head', 'rsd_link' );                               // EditURI link
	remove_action( 'wp_head', 'wlwmanifest_link' );                       // Windows Live Writer
	remove_action( 'wp_head', 'index_rel_link' );                         // index link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            // previous link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             // start link
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for Adjacent Posts
	remove_action( 'wp_head', 'wp_generator' );                           // WP version
}
	
add_action('init', 'ash_head_cleanup');



// remove WP version from RSS
function ash_rss_wp_version() { return ''; }

add_filter('the_generator', 'ash_rss_wp_version');

?>