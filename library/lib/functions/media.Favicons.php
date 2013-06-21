<?php
/**
 * The function to add favicons to the site.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function ash_favicons() { 
	global $smof_data ?>

	<?php if ($smof_data['favicon_default']) { ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $smof_data['favicon_default'];?>">
	<?php } else { ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/library/images/dummy/favicons/favicon.ico">
	<?php } ?>

	<?php if ($smof_data['favicon_apple_touch']) { ?>
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $smof_data['favicon_apple_touch'];?>">
	<?php } else { ?>
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/library/images/dummy/favicons/apple-touch-icon.png">
	<?php } ?>

	<?php if ($smof_data['favicon_apple_touch_72']) { ?>
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $smof_data['favicon_apple_touch_72'];?>">
	<?php } else { ?>
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/library/images/dummy/favicons/apple-touch-icon-72x72.png">
	<?php } ?>

	<?php if ($smof_data['favicon_apple_touch_114']) { ?>
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $smof_data['favicon_apple_touch_114'];?>">
	<?php } else { ?>
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/library/images/dummy/favicons/apple-touch-icon-114x114.png">
	<?php } ?>

<?php }