<?php
/**
 * Shortcode Boxes
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 
 
function alert_box($atts, $content=null, $code="") {
	$return = '<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>';
	$return .= $content;
	$return .= '</div>';
	
		return $return;
}
add_shortcode('alert_box' , 'alert_box' );



function success_box($atts, $content=null, $code="") {
	$return = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>';
	$return .= $content;
	$return .= '</div>';
	
		return $return;
}
add_shortcode('success_box' , 'success_box' );


function info_box($atts, $content=null, $code="") {
	$return = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button>';
	$return .= $content;
	$return .= '</div>';
	
		return $return;
}
add_shortcode('info_box' , 'info_box' );





?>