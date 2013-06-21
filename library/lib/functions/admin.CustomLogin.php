<?php
/**
 * Function for enable a custom login style.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

// Custom CSS for login page
function ash_custom_login() { 

	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/library/css/custom-login.css" />'; 

}
add_action('login_head', 'ash_custom_login');


// Changing the logo link from wordpress.org to your site 
function ash_login_url() { echo home_url(); }

add_filter('login_headerurl', 'ash_login_url');


// Changing the alt text on the logo to show your site name 
function ash_login_title() { echo get_option('blogname'); }

add_filter('login_headertitle', 'ash_login_title');

?>