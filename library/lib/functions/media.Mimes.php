<?php
/**
 * Function to extend allowed files types in Media upload
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_upload_mimes ( $existing_mimes=array() ) {

	// Add *.EPS files to Media upload
	//$existing_mimes['eps'] = 'application/postscript';

	// Add *.AI files to Media upload
	//$existing_mimes['ai'] = 'application/postscript';
	
	// Add *.srt files to Media upload
	//$existing_mimes['srt'] = 'application/x-subrip';
	
	// Add *.ico files to Media upload
	$existing_mimes['ico'] = 'image/x-icon';

return $existing_mimes;
}
add_filter('upload_mimes', 'ash_upload_mimes');

?>