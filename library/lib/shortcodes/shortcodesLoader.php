<?php
/*===========================================================================================
 * Function will add the Juno Shortcodes Button to tinyMCE
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function add_button() {  
	if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	{
	add_filter('mce_external_plugins', 'add_plugin');  
	add_filter('mce_buttons', 'register_button');  
	}
}
add_action('init', 'add_button'); 


function register_button($buttons) {  
	array_push($buttons, "Ash_Sc");  
	return $buttons;  
}


function add_plugin($plugin_array) {  
	$plugin_array['Ash_Sc'] = get_template_directory_uri().'/library/lib/shortcodes/shortcodes.js';  //Set the path here
	return $plugin_array;  
}
/*=====================================================================================
 * Shortcodes Loader File.
 *
 * Loads all shortcodes available from the Juno Shorcodes Framework by Media Tri.be
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */ 

	// Juno Shortcodes Path
	$j_shortcode_path = get_template_directory() . '/library/lib/shortcodes/';

	// Loads all Juno Shortcodes
	require_once ($j_shortcode_path . '/shortcode.Boxes.php');
	require_once ($j_shortcode_path . '/shortcode.Buttons.php');
	require_once ($j_shortcode_path . '/shortcode.Columns.php');
	require_once ($j_shortcode_path . '/shortcode.Lightbox.php');
	require_once ($j_shortcode_path . '/shortcode.Tips.php');
	require_once ($j_shortcode_path . '/shortcode.Video.php');
	require_once ($j_shortcode_path . '/shortcode.Members.php');
	require_once ($j_shortcode_path . '/shortcode.Highlight.php');
	require_once ($j_shortcode_path . '/shortcode.Format.php');
	require_once ($j_shortcode_path . '/shortcode.Contact.php');
?>