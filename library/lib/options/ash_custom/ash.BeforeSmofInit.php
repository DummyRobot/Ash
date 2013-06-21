<?php
/**
 * Functions and actions to customize SMOF (https://github.com/sy4mil/Options-Framework) without changing is core.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

//======================================================================================
// Here we re-define the SMOF ADMIN_PATH so that we can put SMOF in a sub-folder.
	if( !defined('ADMIN_PATH') )
		define( 'ADMIN_PATH', get_template_directory() . '/library/lib/options/' );
	if( !defined('ADMIN_DIR') )
		define( 'ADMIN_DIR', get_template_directory_uri() . '/library/lib/options/' );



//======================================================================================
// Here we call our custom options stored in library/config/Options.php
	require_once( ASH_CONFIG . 'Options.php' );


//======================================================================================
// Here we put our options page in the admin-bar menu
function add_ash_options_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->add_menu( array( 'id' => 'optionsframework', 'parent' => 'appearance', 'title' => 'Theme Options', 'href' => admin_url('themes.php?page=options-framework') ) );
			
}
add_action('admin_bar_menu', 'add_ash_options_admin_bar', 1000);