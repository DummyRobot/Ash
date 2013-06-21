<?php
/**
 * Function to add custom admin footer text
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="http://dummyrobot.com" target="_blank">DummyRobot</a></span>. Built using <a href="http://dummyrobot.com/ash" target="_blank">Ash</a>.';
}


add_filter('admin_footer_text', 'ash_custom_admin_footer');

?>