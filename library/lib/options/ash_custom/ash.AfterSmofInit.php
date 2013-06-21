<?php
/**
 * Functions and actions to customize SMOF (https://github.com/sy4mil/Options-Framework) without changing is core.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */



//======================================================================================
//	We want to have the Options Page in is own self menu tab, not in a sub-menu on the Appearance Tab.

// We remove the original function
	remove_action('admin_menu', 'optionsframework_add_admin');


//	And then we add our function to put SMOF in is own Menu Tab.
	add_action('admin_menu', 'ash_optionsframework_add_admin');
	
	function ash_optionsframework_add_admin() {
		
		$of_page = add_menu_page( THEMENAME, THEMENAME . ' Options', 'edit_theme_options', 'options-framework', 'optionsframework_options_page', ADMIN_DIR . 'ash_custom/images/options_ico.png', 100 );
		
		// Add framework functionaily to the head individually
		add_action("admin_print_scripts-$of_page", 'of_load_only');
		add_action("admin_print_styles-$of_page",'of_style_only');
		
	}
	
//======================================================================================
//	We want to have the Options Page activate message to link to options own self menu tab.

// We remove the original function	
remove_action('admin_head', 'optionsframework_admin_message');
	
	
//	And then we add our function to put SMOF in is own Menu Tab.
	add_action('admin_head', 'optionsframework_admin_message_new');
	
	
function optionsframework_admin_message_new() { 
	
	//Tweaked the message on theme activate
	?>
    <script type="text/javascript">
    jQuery(function(){
    	
        var message = '<p>This theme comes with an <a href="<?php echo admin_url('admin.php?page=options-framework'); ?>">options panel</a> to configure settings. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';
    	jQuery('.themes-php #message2').html(message);
    
    });
    </script>
    <?php
	
}