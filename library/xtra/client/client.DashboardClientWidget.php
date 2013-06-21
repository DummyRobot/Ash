<?php
/**
 * Function for adding custom Dashboard Widgets
 *
 * Based on: http://www.wpbeginner.com/wp-themes/how-to-add-custom-dashboard-widgets-in-wordpress/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */



add_action('wp_dashboard_setup', 'ash_dashboard_widgets');
 
	function ash_dashboard_widgets() {
	global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', ''.get_bloginfo('name').'', 'ash_dashboard_help');
}

function ash_dashboard_help() {
	echo '<h4>Welcome to '.get_bloginfo('name').'</h4>
	<img style="max-width: 100%;height: auto !important;" src="'.get_template_directory_uri().'/screenshot.png">
	<p><b>For any extra information please use:</b></p>
	<p><a href="http://dummyrobot/support/" target="_blank">Support Page.</a></p>';
}
?>