<?php
/**
 * Function for add/remove contact info fields from user profile
 *
 * The Contact Info fields in the edit profile page in WP-Admin is missing some important fields, like Twitter and Facebook.
 * Let's add more fields with this function!
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function ash_contactmethods( $contactmethods ) {
    	
    	//Add new entries
    	$contactmethods['facebook'] = 'Facebook'; // Add Facebook
    	$contactmethods['twitter'] = 'Twitter'; // Add Twitter
    	$contactmethods['behance'] = 'Behance'; // Add Behance
    	$contactmethods['deviantart'] = 'DeviantART'; // Add DeviantART
    	$contactmethods['flickr'] = 'Flickr'; // Add Flickr
    	$contactmethods['fivehundredpixels'] = '500px'; // Add 500px
    	$contactmethods['instagram'] = 'Instagram'; // Add Instagram
    	$contactmethods['lastfm'] = 'LastFM'; // Add LastFm
    	$contactmethods['soundcloud'] = 'SoundCloud'; // Add SoundCloud
    	
    	//Disable entries
    	unset($contactmethods['yim']); // Remove YIM
    	unset($contactmethods['aim']); // Remove AIM
    	unset($contactmethods['jabber']); // Remove Jabber

    return $contactmethods;
	}
	
add_filter('user_contactmethods','ash_contactmethods',10,1);


?>