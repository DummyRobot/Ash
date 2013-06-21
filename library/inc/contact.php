<?php
/**
 * The template-part for displaying a Quick Contact Form.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; ?>
	
	
	<!--Messages-->
	<p id="success" class="successmsg span12" style="display:none;"><?php _e('Your message has been sent. Thanks!','ash');?></p>
	<p id="bademail" class="errormsg span12" style="display:none;"><?php _e('Please enter your name, a valid email address and message.','ash');?></p>
	<p id="badserver" class="errormsg span12" style="display:none;"><?php _e('Sending the message failed. Please try again later.','ash');?></p>

	
	<form id="quick-contact" action="<?php echo get_template_directory_uri(); ?>/library/lib/functions/mailer.SendMail.php" method="post">

		<div class="controls controls-row">
			<input id="nameinput" name="name" type="text" class="span6" placeholder="<?php _e('Your name:','ash'); ?>">
			<input id="emailinput" name="email" type="email" class="span6" placeholder="<?php _e('Your email:','ash'); ?>">
		</div>

	<div class="controls">
		<textarea id="commentinput message" name="comment" class="span12" placeholder="<?php _e('Your message:','ash'); ?>" rows="5"></textarea>
	</div>

	<div class="controls">
		<button id="submitinput contact-submit" type="submit" class="submit btn btn-info input-medium pull-left"><?php _e('Send Message','ash'); ?></button>
	</div>

		<input type="hidden" id="receiver" name="receiver" value="<?php if ($smof_data['ash_quick_email']) { echo antispambot($smof_data['ash_quick_email']) ;} else { echo antispambot(get_bloginfo('admin_email'));} ?>"/>
	
	</form>