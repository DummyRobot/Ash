<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);

		//Carousel type
		$of_options_carousel 	= array("normal" => "Normal","wide" => "Wide");
		
		
		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}

		
		//Template Images Folder
		$images_url = get_template_directory_uri(). '/library/images/';
		
		//Background Images Reader
		$bg_images_path = get_template_directory(). '/library/images/backgrounds/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/library/images/backgrounds/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$of_options[] = array( 	"name" 		=> "Global Options",
						"type" 		=> "heading"
				);
					
$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "introduction",
					"std" => "<h3 style=\"margin: 0 0 10px;\">Welcome to the X-Lab Options Framework demo.</h3>
					This is a slightly modified version of the original options framework by Devin Price with a couple of aesthetical improvements on the interface and some cool additional features. If you want to learn how to setup these options or just need general help on using it feel free to visit my blog at <a href=\"http://aquagraphite.com/2011/09/29/slightly-modded-options-framework/\">AquaGraphite.com</a>",
					"icon" => true,
					"type" => "info"
				);
							
							
$of_options[] = array( 	"name" 		=> "Custom Favicons",
						"desc" 		=> "Upload/Change your site's Favicons.",
						"id" 		=> "ash_favicons",
						"std" 		=> 0,
						"folds"		=> 1,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
				);	
							
							
$of_options[] = array( "name" => "Site's Favicon",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "favicon_default",
					"std" => $images_url . 'dummy/favicons/favicon.ico',
					//"std" => "",
					"mod" => "min",
					"fold" => "ash_favicons", /* the checkbox fold hook */
					"type" => "media"
				);	
					
$of_options[] = array( "name" => "Apple Touch Favicon",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "favicon_apple_touch",
					"std" => "",
					"mod" => "min",
					"fold" => "ash_favicons", /* the checkbox fold hook */
					"type" => "media"
				);	
					
$of_options[] = array( "name" => "Apple Touch 72x72 Favicon",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "favicon_apple_touch_72",
					"std" => "",
					"mod" => "min",
					"fold" => "ash_favicons", /* the checkbox fold hook */
					"type" => "media"
				);
					
$of_options[] = array( "name" => "Apple Touch 114x114 Favicon (Retina)",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "favicon_apple_touch_114",
					"std" => "",
					"mod" => "min",
					"fold" => "ash_favicons", /* the checkbox fold hook */
					"type" => "media"
				);					
					
					
$of_options[] = array( "name" => "Logo",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "ash_logo",
					"std" => "",
					"mod" => "min",
					"type" => "media"
				);	

$of_options[] = array( "name" => "Inverted Nav Bar",
					"desc" => "Use the bootstrap inverse nav-bar.",
					"id" => "navbar_inverse",
					"std" => 0,
					"type" => "checkbox"
				);	

$of_options[] = array( 	"name" 		=> "Check to show the site name in the navbar",
						"desc" 		=> "Check to show the site name in the navbar",
						"id" 		=> "navtop_title",
						"std" 		=> 1,
						"type" 		=> "checkbox"
						); 
					                   
$of_options[] = array( 	"name" 		=> "Show search bar in top nav",
						"desc" 		=> "Show search bar in top nav",
						"id" 		=> "navtop_search",
						"std" 		=> 0,
						"type" 		=> "checkbox"
						); 

/* Home Page */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> "Home Page",
						"type" 		=> "heading"
						);
					
$of_options[] = array( 	"name" 		=> "Carousel in Home Page",
						"desc" 		=> "Add a carousel to the home page",
						"id" 		=> "homepage_carousel",
						"std" 		=> 0,
						"folds"		=> 1,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
						);	
							
$of_options[] = array( 	"name" 		=> "Number of Posts to Show",
						"desc" 		=> "Choose the number of Posts to Show",
						"id" 		=> "carousel_slides_number",
						"std" 		=> "3",
						"fold" 		=> "homepage_carousel", /* the checkbox fold hook */
						"min" 		=> "1",
						"step"		=> "1",
						"max" 		=> "20",
						"type" 		=> "sliderui" 
						);

$of_options[] = array( 	"name" 		=> "Carousel Type Home Page",
						"desc" 		=> "Choose between normal and wide",
						"id" 		=> "homepage_carousel_type",
						"std" 		=> "normal",
						"type" 		=> "radio",
						"fold" 		=> "homepage_carousel", /* the checkbox fold hook */
						"options" 	=> $of_options_carousel
						);				
/* Layout */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> "Layout",
						"type" 		=> "heading"
						);

$ash_url =  ADMIN_DIR . 'ash_custom/images/';
$of_options[] = array( 	"name" 		=> "Home Page Layout",
					   	"desc" 		=> "Choose the Home Page Layout",
					    "id" 		=> "ash_layout",
					    "std" 		=> "grid",
					   	"type" 		=> "images",
					   	"options" 	=> array(
							'blog'    	=> $ash_url . 'list.png',
							'grid' 	  	=> $ash_url . 'grid.png',
							'masonry' 	=> $ash_url . 'masonry.png',
							'fullscreen'=> $ash_url . 'masonry.png')
						);
										
$of_options[] = array( 	"name" 		=> "Grid Columns",
						"desc" 		=> "Number of columns for the Grid layout",
						"id" 		=> "grid_columns",
						"std" 		=> "3",
						"min" 		=> "1",
						"step"		=> "1",
						"max" 		=> "6",
						"type" 		=> "sliderui" 
						);
				
$of_options[] = array( 	"name" 		=> "Masonry Columns",
						"desc" 		=> "Number of columns for the Masonry layout",
						"id" 		=> "masonry_columns",
						"std" 		=> "3",
						"min" 		=> "2",
						"step"		=> "1",
						"max" 		=> "6",
						"type" 		=> "sliderui" 
						);
						
$of_options[] = array( 	"name" 		=> "Full Width Masonry?",
						"desc" 		=> "Full Width Masonry?",
						"id" 		=> "masonry_wide",
						"std" 		=> "0",
						"type" 		=> "checkbox" 
						);
						
$of_options[] = array( 	"name" 		=> "Number of post in Masonry",
						"desc" 		=> "Number of post in Masonry",
						"id" 		=> "masonry_posts",
						"std" 		=> "10",
						"type" 		=> "text" 
						);

$of_options[] = array( 	"name" 		=> "Enable Infinite Scroll?",
						"desc" 		=> "Enable Infinite Scroll",
						"id" 		=> "masonry_infinite_scroll",
						"std" 		=> "0",
						"type" 		=> "checkbox" 
						);
										
$ash_url =  ADMIN_DIR . 'ash_custom/images/';
$of_options[] = array( 	"name" 		=> "Archives Pages Layout",
					   	"desc" 		=> "Choose Archives Pages Layout",
					    "id" 		=> "ash_archives_layout",
					    "std" 		=> "grid",
					   	"type" 		=> "images",
					   	"options" 	=> array(
							'list'    => $ash_url . 'list.png',
							'grid' 	  => $ash_url . 'grid.png')
						);
				
/* Style Options */
/*-----------------------------------------------------------------------------------*/				
$of_options[] = array( "name" 		=> "Style",
					   "type" 		=> "heading"
				       );

$of_options[] = array( 	"name" 		=> "Background Image Pattern",
						"desc" 		=> "Select a background pattern or color",
						"id" 		=> "custom_bg_img",
						"std" 		=> 1,
						"folds"		=> 1,
						"on" 		=> "On",
						"off" 		=> "Off",
						"type" 		=> "switch"
						);
				
$of_options[] = array(  "name" 		=> "Background Images",
					    "desc" 		=> "Select a background pattern.",
					    "id" 		=> "custom_bg_image",
					    "std" 		=> $bg_images_url."bg4.png",
					    "type" 		=> "tiles",
					    "fold"		=> "custom_bg_img", /* the checkbox fold hook */
					    "options"   => $bg_images,
					    );

$of_options[] = array( 	"name" 		=> "Upload Image",
						"desc" 		=> "Upload images using native media uploader.",
						"id" 		=> "custom_bg_uploaded",
						"std" 		=> "",
						"mod" 		=> "min",
						"type"		=> "media"
						);	
									
$of_options[] = array( 	"name" 		=> "Body Background Color",
					   	"desc" 		=> "Pick a background color for the theme (default: #f1f1f1).",
					   	"id" 		=> "custom_bg_color",
					   	"std" 		=> "#929292",
					   	"type" 		=> "color"
					   	);
					
$of_options[] = array( 	"name" 		=> "Custom CSS",
					   	"desc" 		=> "Quickly add some CSS to your theme by adding it to this block.",
					   	"id" 		=> "custom_css",
					   	"std" 		=> "",
					   	"type" 		=> "textarea"
				       	);

$of_options[] = array( 	"name" 		=> "Style Carousel Background?",
						"desc" 		=> "Select a background pattern or color",
						"id" 		=> "carousel_bg_img",
						"std" 		=> 0,
						"folds"		=> 1,
						"on" 		=> "Yes",
						"off" 		=> "No",
						"type" 		=> "switch"
						);
				
$of_options[] = array(  "name" 		=> "Background Images",
					    "desc" 		=> "Select a background pattern.",
					    "id" 		=> "carousel_bg_image",
					    "std" 		=> $bg_images_url."bg4.png",
					    "type" 		=> "tiles",
					    "fold"		=> "carousel_bg_img", /* the checkbox fold hook */
					    "options"   => $bg_images,
					    );				
/* Posts & Pages */
/*-----------------------------------------------------------------------------------*/				
$of_options[] = array( 	"name" 		=> "Posts and Pages",
						"type" 		=> "heading"
						);

$of_options[] = array( 	"name" 		=> "Breadcrumbs",
						"desc" 		=> "Enable/Disable breadcrumbs in posts and pages",
						"id" 		=> "ash_breadcrumbs",
						"std" 		=> 1,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
						);
				
$of_options[] = array( 	"name" 		=> "Enable Author Box on Posts",
						"desc"		=> "Enable Author Box (usefull for multi-authors sites).",
						"id" 		=> "author_box_enable",
						"std" 		=> 0,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
						);

$of_options[] = array( 	"name" 		=> "Related Posts",
						"desc" 		=> "Upload/Change your site's Favicons.",
						"id" 		=> "related_posts_enable",
						"std" 		=> 0,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
						);
				
$of_options[] = array( 	"name" 		=> "Show Number of Posts Views",
						"desc" 		=> "Show Number of Posts Views",
						"id" 		=> "post_views",
						"std" 		=> 0,
						"folds"		=> 1,
						"on" 		=> "Show",
						"off" 		=> "Don't Show",
						"type" 		=> "switch"
						);
				
$of_options[] = array( 	"name" 		=> "Comments Message",
						"desc" 		=> "Disable Comments are closed Message",
						"id" 		=> "ash_suppress_comments_message",
						"std" 		=> 1,
						"type" 		=> "checkbox"
						);
													
/* Social */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> "Social and Contact",
						"type" 		=> "heading"
						);
				
$of_options[] = array( 	"name" 		=> "Hello there!",
						"desc" 		=> "",
						"id" 		=> "quick-contact-intro",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Quick Contact Options.</h3>
					 The Email to receive messages from your contact template. If none provided the admin Email will be used.",
						"icon" 		=> true,
						"type" 		=> "info");

$of_options[] = array( 	"name" 		=> "Your Email",
						"desc" 		=> "Paste the Email to receive messages from your contact template.",
						"id" 		=> "ash_quick_email",
						"std" 		=> "",
						"type" 		=> "text");
					
					
$of_options[] = array( 	"name" 		=> "Rss",
						"desc" 		=> "Your FeedBurner ID.",
						"id"		=> "ash_feedburner",
						"std" 		=> "",
						"type" 		=> "text"); 
					
$of_options[] = array( 	"name" 		=> "Social Intro",
						"desc" 		=> "",
						"id" 		=> "intro_social",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Social Networks.</h3>
					You can group a bunch of options under a single heading by removing the 'name' value from the options array except for the first option in the group.",
						"icon" 		=> true,
						"type" 		=> "info"
						);					
					
$of_options[] = array( 	"name" 		=> "Enable Social Icons",
						"desc" 		=> "<b>Enable Facebook icon link</b>",
						"id" 		=> "icon_facebook_enable",
						"std"	 	=> 0,
          				"folds" 	=> 1,
						"type" 		=> "checkbox"
						);    
					
$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Your Facebook Page url eg: http://www.facebook.com/my_page/",
						"id" 		=> "ash_facebook_id",
						"std"	 	=> "",
          				"fold" 		=> "icon_facebook_enable", /* the checkbox hook */
						"type" 		=> "text"
						);
		
$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Enable Twitter icon link",
						"id" 		=> "icon_twitter_enable",
						"std"		=> 0,
          				"folds" 	=> 1,
						"type" 		=> "checkbox"
						);    
					
$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Your Twitter Name eg: JohnDoe",
						"id" 		=> "ash_twitter_id",
						"std" 		=> "",
          				"fold" 		=> "icon_twitter_enable", /* the checkbox hook */
						"type" 		=> "text"
						);

$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Enable Tumblr icon link",
						"id" 		=> "icon_tumblr_enable",
						"std" 		=> 0,
          				"folds" 	=> 1,
						"type" 		=> "checkbox"
						);    
					
$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Your Tumblr Page eg: http://johndoe.tumblr.com/",
						"id" 		=> "ash_tumblr_id",
						"std" 		=> "",
          				"fold" 		=> "icon_tumblr_enable", /* the checkbox hook */
						"type" 		=> "text"
						);					
			
			
$of_options[] = array( 	"name" 		=> "",
						"desc"	 	=> "Enable Google Plus icon link",
						"id" 		=> "icon_gplus_enable",
						"std" 		=> 0,
          				"folds" 	=> 1,
						"type" 		=> "checkbox"
						);    
					
$of_options[] = array( 	"name" 		=> "",
						"desc" 		=> "Your Google+ Page url eg: http://plus.google.com/my_page/",
						"id"		=> "ash_gplus_id",
						"std" 		=> "",
          				"fold" 		=> "icon_gplus_enable", /* the checkbox hook */
						"type" 		=> "text"
						);			

$of_options[] = array( 	"name"		=> "",
						"desc" 		=> "Enable Flickr icon link",
						"id" 		=> "icon_flickr_enable",
						"std" 		=> 0,
          				"folds" 	=> 1,
						"type" 		=> "checkbox"
						);    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Flickr Page url eg: http://www.flickr.com/my_page/",
					"id" => "ash_flickr_id",
					"std" => "",
          			"fold" => "icon_flickr_enable", /* the checkbox hook */
					"type" => "text");


$of_options[] = array( "name" => "",
					"desc" => "Enable DeviantArt icon link",
					"id" => "icon_deviantart_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "",
					"desc" => "Your DeviantArt Page url eg: http://www.deviantart.com/my_page/",
					"id" => "ash_deviantart_id",
					"std" => "",
          			"fold" => "icon_deviantart_enable", /* the checkbox hook */
					"type" => "text");
					
					
					
$of_options[] = array( "name" => "",
					"desc" => "Enable LinkedIn icon link",
					"id" => "icon_linkedin_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "",
					"desc" => "Your LinkedIn Profile url eg: http://www.linkedin.com/my_name/",
					"id" => "ash_linkedin_id",
					"std" => "",
          			"fold" => "icon_linkedin_enable", /* the checkbox hook */
					"type" => "text");
					
					

$of_options[] = array( "name" => "",
					"desc" => "Enable Pinterest icon link",
					"id" => "icon_pinterest_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "",
					"desc" => "Your Pinterest Page url eg: http://www.pinterest.com/my_page/",
					"id" => "ash_pinterest_id",
					"std" => "",
          			"fold" => "icon_pinterest_enable", /* the checkbox hook */
					"type" => "text"); 

$of_options[] = array( "name" => "",
					"desc" => "Enable Behance icon link",
					"id" => "icon_behance_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Behance Page url eg: http://www.behance.com/my_page/",
					"id" => "ash_behance_id",
					"std" => "",
          			"fold" => "icon_behance_enable", /* the checkbox hook */
					"type" => "text");


$of_options[] = array( "name" => "",
					"desc" => "Enable 500px icon link",
					"id" => "icon_500px_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your 500px Page url eg: http://www.500px.com/my_page/",
					"id" => "ash_500px_id",
					"std" => "",
          			"fold" => "icon_500px_enable", /* the checkbox hook */
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "Enable Youtube icon link",
					"id" => "icon_youtube_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Youtube Page url eg: http://www.youtube.com/my_page/",
					"id" => "ash_youtube_id",
					"std" => "",
          			"fold" => "icon_youtube_enable", /* the checkbox hook */
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "Enable Vimeo icon link",
					"id" => "icon_vimeo_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Vimeo Page url eg: http://www.vimeo.com/my_page/",
					"id" => "ash_vimeo_id",
					"std" => "",
          			"fold" => "icon_vimeo_enable", /* the checkbox hook */
					"type" => "text");	
				
$of_options[] = array( "name" => "",
					"desc" => "Enable Last FM icon link",
					"id" => "icon_lastfm_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Last FM Page url eg: http://www.lastfm.com/my_page/",
					"id" => "ash_lastfm_id",
					"std" => "",
          			"fold" => "icon_lastfm_enable", /* the checkbox hook */
					"type" => "text");	
					
$of_options[] = array( "name" => "",
					"desc" => "Enable MySpace icon link",
					"id" => "icon_myspace_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your MySpace Page url eg: http://www.myspace.com/my_page/",
					"id" => "ash_myspace_id",
					"std" => "",
          			"fold" => "icon_myspace_enable", /* the checkbox hook */
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "Enable Skype icon link",
					"id" => "icon_skype_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your Skype Name:",
					"id" => "ash_skype_id",
					"std" => "",
          			"fold" => "icon_skype_enable", /* the checkbox hook */
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "Enable SoudCloud icon link",
					"id" => "icon_soundcloud_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your SoundCloud Page url eg: http://www.soundcloud.com/my_page/",
					"id" => "ash_soundcloud_id",
					"std" => "",
          			"fold" => "icon_soundcloud_enable", /* the checkbox hook */
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "Enable GitHub icon link",
					"id" => "icon_github_enable",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");    
					
$of_options[] = array( "name" => "",
					"desc" => "Your GitHub Page url eg: http://www.github.com/my_page/",
					"id" => "ash_github_id",
					"std" => "",
          			"fold" => "icon_github_enable", /* the checkbox hook */
					"type" => "text");	
					
					
/* Codes */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> "Codes",
						"type" 		=> "heading"
				);
				
								
$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "tracking_code",
						"std" 		=> "",
						"type" 		=> "textarea"
				);


									
/* Examples */
/*-----------------------------------------------------------------------------------*/	
$of_options[] = array( 	"name" 		=> "SMOF Examples",
						"type" 		=> "heading"
				);									
$of_options[] = array( 	"name" 		=> "Typography",
						"desc" 		=> "This is a typographic specific option.",
						"id" 		=> "typography",
						"std" 		=> array(
											'size'  => '12px',
											'face'  => 'verdana',
											'style' => 'bold italic',
											'color' => '#123456'
										),
						"type" 		=> "typography"
				);  
				
$of_options[] = array( 	"name" 		=> "Border",
						"desc" 		=> "This is a border specific option.",
						"id" 		=> "border",
						"std" 		=> array(
											'width' => '2',
											'style' => 'dotted',
											'color' => '#444444'
										),
						"type" 		=> "border"
				);
				
$of_options[] = array( 	"name" 		=> "Colorpicker",
						"desc" 		=> "No color selected.",
						"id" 		=> "example_colorpicker",
						"std" 		=> "",
						"type" 		=> "color"
					); 
					
$of_options[] = array( 	"name" 		=> "Colorpicker (default #2098a8)",
						"desc" 		=> "Color selected.",
						"id" 		=> "example_colorpicker_2",
						"std" 		=> "#2098a8",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Input Text",
						"desc" 		=> "A text input field.",
						"id" 		=> "test_text",
						"std" 		=> "Default Value",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Input Checkbox (false)",
						"desc" 		=> "Example checkbox with false selected.",
						"id" 		=> "example_checkbox_false",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Input Checkbox (true)",
						"desc" 		=> "Example checkbox with true selected.",
						"id" 		=> "example_checkbox_true",
						"std" 		=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Normal Select",
						"desc" 		=> "Normal Select Box.",
						"id" 		=> "example_select",
						"std" 		=> "three",
						"type" 		=> "select",
						"options" 	=> $of_options_select
				);
				
$of_options[] = array( 	"name" 		=> "Mini Select",
						"desc" 		=> "A mini select box.",
						"id" 		=> "example_select_2",
						"std" 		=> "two",
						"type" 		=> "select",
						"mod" 		=> "mini",
						"options" 	=> $of_options_radio
				); 
				
$of_options[] = array( 	"name" 		=> "Google Font Select",
						"desc" 		=> "Some description. Note that this is a custom text added added from options file.",
						"id" 		=> "g_select",
						"std" 		=> "Select a font",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "This is my preview text!", //this is the text from preview box
										"size" => "30px" //this is the text size from preview box
						),
						"options" 	=> array(
										"none" => "Select a font",//please, always use this key: "none"
										"Lato" => "Lato",
										"Loved by the King" => "Loved By the King",
										"Tangerine" => "Tangerine",
										"Terminal Dosis" => "Terminal Dosis"
						)
				);
				
$of_options[] = array( 	"name" 		=> "Google Font Select2",
						"desc" 		=> "Some description.",
						"id" 		=> "g_select2",
						"std" 		=> "Select a font",
						"type" 		=> "select_google_font",
						"options" 	=> array(
										"none" => "Select a font",//please, always use this key: "none"
										"Lato" => "Lato",
										"Loved by the King" => "Loved By the King",
										"Tangerine" => "Tangerine",
										"Terminal Dosis" => "Terminal Dosis"
									)
				);

$of_options[] = array( "name" => "Select custom font",
					   "desc" => "Default: Open Sans.",
					   "id" => "_font",
					   "std" => "Open Sans",
					   "type" => "select_google_font",
					   "preview" 	=> array(
										"text" => "This is my preview text!", //this is the text from preview box
										"size" => "30px"), //this is the text size from preview box
					   "options" =>  listgooglefontoptions() );
									
$of_options[] = array( 	"name" 		=> "Input Radio (one)",
						"desc" 		=> "Radio select with default of 'one'.",
						"id" 		=> "example_radio",
						"std" 		=> "one",
						"type" 		=> "radio",
						"options" 	=> $of_options_radio
				);
				
$url =  ADMIN_DIR . 'assets/images/';
$of_options[] = array( 	"name" 		=> "Image Select",
						"desc" 		=> "Use radio buttons as images.",
						"id" 		=> "images",
						"std" 		=> "warning.css",
						"type" 		=> "images",
						"options" 	=> array(
											'warning.css' 	=> $url . 'warning.png',
											'accept.css' 	=> $url . 'accept.png',
											'wrench.css' 	=> $url . 'wrench.png'
										)
				);
				
$of_options[] = array( 	"name" 		=> "Textarea",
						"desc" 		=> "Textarea description.",
						"id" 		=> "example_textarea",
						"std" 		=> "Default Text",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Multicheck",
						"desc" 		=> "Multicheck description.",
						"id" 		=> "example_multicheck",
						"std" 		=> array("three","two"),
						"type" 		=> "multicheck",
						"options" 	=> $of_options_radio
				);
				
$of_options[] = array( 	"name" 		=> "Select a Category",
						"desc" 		=> "A list of all the categories being used on the site.",
						"id" 		=> "example_category",
						"std" 		=> "Select a category:",
						"type" 		=> "select",
						"options" 	=> $of_categories
				);

$of_options[] = array( 	"name" 		=> "JQuery UI Spinner",
						"desc" 		=> "JQuery UI spinner description.<br /> Min: 0, max: 300, step: 5, default value: 75",
						"id" 		=> "spinner_example_2",
						"std" 		=> "75",
						"min" 		=> "0",
						"step"		=> "5",
						"max" 		=> "300",
						"type" 		=> "spinner" 
				);
				
$of_options[] = array( 	"name" 		=> "Switch 1",
						"desc" 		=> "Switch OFF",
						"id" 		=> "switch_ex1",
						"std" 		=> 0,
						"type" 		=> "switch"
				);   
				
$of_options[] = array( 	"name" 		=> "Switch 2",
						"desc" 		=> "Switch ON",
						"id" 		=> "switch_ex2",
						"std" 		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Switch 3",
						"desc" 		=> "Switch with custom labels",
						"id" 		=> "switch_ex3",
						"std" 		=> 0,
						"on" 		=> "Enable",
						"off" 		=> "Disable",
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Switch 4",
						"desc" 		=> "Switch OFF with hidden options. ;)",
						"id" 		=> "switch_ex4",
						"std" 		=> 0,
						"folds"		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Hidden option 1",
						"desc" 		=> "This is a sample hidden option controlled by a <strong>switch</strong> button",
						"id" 		=> "hidden_switch_ex1",
						"std" 		=> "Hi, I\'m just a text input - nr 1",
						"fold" 		=> "switch_ex4", /* the switch hook */
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Hidden option 2",
						"desc" 		=> "This is a sample hidden option controlled by a <strong>switch</strong> button",
						"id" 		=> "hidden_switch_ex2",
						"std" 		=> "Hi, I\'m just a text input - nr 2",
						"fold" 		=> "switch_ex4", /* the switch hook */
						"type" 		=> "text"
				);
				
				
$of_options[] = array( 	"name" 		=> "Homepage Layout Manager",
						"desc" 		=> "Organize how you want the layout to appear on the homepage",
						"id" 		=> "homepage_blocks",
						"std" 		=> $of_options_homepage_blocks,
						"type" 		=> "sorter"
				);
					
$of_options[] = array( 	"name" 		=> "Slider Options",
						"desc" 		=> "Unlimited slider with drag and drop sortings.",
						"id" 		=> "pingu_slider",
						"std" 		=> "",
						"type" 		=> "slider"
				);
					

					
$of_options[] = array( 	"name" 		=> "Typography",
						"desc" 		=> "Typography option with each property can be called individually.",
						"id" 		=> "custom_type",
						"std" 		=> array('size' => '12px','style' => 'bold italic'),
						"type" 		=> "typography"
				);

$of_options[] = array( 	"name" 		=> "Theme Stylesheet",
						"desc" 		=> "Select your themes alternative color scheme.",
						"id" 		=> "alt_stylesheet",
						"std" 		=> "default.css",
						"type" 		=> "select",
						"options" 	=> $alt_stylesheets
				);
				
$of_options[] = array( 	"name" 		=> "Body Background Color",
						"desc" 		=> "Pick a background color for the theme (default: #fff).",
						"id" 		=> "body_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Header Background Color",
						"desc" 		=> "Pick a background color for the header (default: #fff).",
						"id" 		=> "header_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"desc" 		=> "Pick a background color for the footer (default: #fff).",
						"id" 		=> "footer_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Body Font",
						"desc" 		=> "Specify the body font properties",
						"id" 		=> "body_font",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);  
				

							
// Backup Options */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
