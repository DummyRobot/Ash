<?php

// Remove the menus from parent theme
function remove_ash_cpts_menus () {
global $menu;
	$restricted = array( 
			//__('Videos'), 
			//__('Books'),
			//--('Landing Pages'),
			//__('Gurus')
		);
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_ash_cpts_menus');


//Include the post-types

// Videos
require_once ( get_template_directory() . '/library/xtra/post-types/videos/videos.php');

// Gurus
require_once ( get_template_directory() . '/library/xtra/post-types/gurus/gurus.php');

// Books
require_once ( get_template_directory() . '/library/xtra/post-types/books/books.php');

// Tutorials
require_once ( get_template_directory() . '/library/xtra/post-types/tutorials/tutorials.php');

?>