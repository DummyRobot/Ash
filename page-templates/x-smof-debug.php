<?php
/*
 * Template Name: XSmof Debug
 * Description: Template for displaying SMOF Debug Options
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
get_header();?>

		<pre>
		<?php 
		$smof_data_r = print_r($smof_data, true); 
		$smof_data_r_sans = htmlspecialchars($smof_data_r, ENT_QUOTES); 
		echo $smof_data_r_sans; ?>
		</pre>
	
<?php get_footer(); ?>
