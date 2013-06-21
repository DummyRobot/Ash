<?php
/**
 * Shortcode Contact
 *
 * Usage: [contact email="email@address.com"]
 *
 * Only enqueues jquery-form & our contact.js IF shortcode [contact email="email@address.com"] is present in the page.
 * Based on: http://scribu.net/wordpress/optimal-script-loading.html 
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


/* contact Form shortcode*/
// [contact email="email@address.com"]

function ContactForm($atts, $content = null)
{
//http://scribu.net/wordpress/optimal-script-loading.html
	global $contact_shortcode;

	$contact_shortcode = true;
//========================================================
  
  extract(shortcode_atts(array(
		'email' => false
    ), $atts));

   $email = ($email) ? $email  : '';
   
	$output = "";
	$output =
		 '<p id="success" class="successmsg" style="display:none;">' . __('Your message has been sent. Thanks!','ash').'</p>
		<p id="bademail" class="errormsg" style="display:none;">'. __('Please enter your name, a valid email address and message.','ash').'</p>
		<p id="badserver" class="errormsg" style="display:none;">'. __('Sending the message failed. Please try again later.','ash').'</p>
		
		<form id="quick-contact" action="'. get_template_directory_uri().'/library/lib/functions/mailer.SendMail.php" method="post">

		<div class="controls controls-row">
			<input id="nameinput" name="name" type="text" class="span6" placeholder="'.__('Your name:','ash').'">
			<input id="emailinput" name="email" type="email" class="span6" placeholder="'.__('Your email:','ash').'">
		</div>

	<div class="controls">
		<textarea id="commentinput message" name="comment" class="span12" placeholder="'.__('Your message:','ash').'" rows="5"></textarea>
	</div>

	<div class="controls">
		<button id="submitinput contact-submit" type="submit" class="submit btn btn-info input-medium pull-left">'.__('Send Message','ash').'</button>
	</div>

		<input type="hidden" id="receiver" name="receiver" value="'. antispambot(''.$email.'').'"/>
	
	</form>';

	return $output;
}

add_shortcode('contact', 'ContactForm');


//==============================================================================================================================
// Only enqueues jquery-form & our contact.js IF shortcode [contact email="email@address.com"] is present in the page.
//
// Based on: http://scribu.net/wordpress/optimal-script-loading.html
 
 
add_action('init', 'register_my_script');
add_action('wp_footer', 'print_my_script');

function register_my_script() {

	wp_register_script('quick-contact', get_template_directory_uri() . '/library/js/contact.min.js', array('jquery','jquery-form'), '1.0', true);
}

function print_my_script() {
	global $contact_shortcode;

	if ( ! $contact_shortcode )
		return;

	wp_print_scripts('jquery-form'); 	// Packed WordPress Version - needed for our quick-contact script to work
	wp_print_scripts('quick-contact'); 	// Our quick-contact script
}
?>