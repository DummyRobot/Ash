<?php
/*
 *	This is the file that loads all our custom files & functions.
 *
 *
 *
 *	Please note that changing this file WILL BREAK your theme! - (unless you know what you're doing.)
 *
 *
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

//Enqueues Css & Javascript
	require_once ( ASH_CONFIG . 'Enqueuer.php');							// Enqueue our Javacripts and CSS

//SMOF - Options
	require_once ( ASH_OPTIONS . 'ash_custom/ash.BeforeSmofInit.php');		//Loads custom actions for Options (SMOF) - MUST BE CALLED BEFORE options/index.php

	require_once ( ASH_OPTIONS . 'index.php');								//Loads the Options Panel (SMOF)
	require_once ( ASH_OPTIONS . 'ash_custom/ash.AfterSmofInit.php');		//Loads custom actions for Options (SMOF) - MUST BE CALLED AFTER options/index.php
	require_once ( ASH_OPTIONS . 'ash_custom/ash.gfonts.php');				//Loads lots of Google Fonts to the Options Panel (SMOF)

//Plugins
	require_once ( ASH_CONFIG . 'Plugins.php'); 							// Enable Recommended Plugins - Config file
	require_once ( ASH_PLUGINS . 'class-tgm-plugin-activation.php');		// The Class to Enable Recommended Plugins

//Widgets
	require_once ( ASH_WIDGETS . 'widget.Flickr.php');						//Flickr Stream Widget
	require_once ( ASH_WIDGETS . 'widget.GravatarComments.php');			//Latest Comments Widget with Gravatar
	require_once ( ASH_WIDGETS . 'widget.LatestPostsThumbs.php');			//Latest Posts Widget with Thumbnail
	require_once ( ASH_WIDGETS . 'widget.Settings.php'); 					//Custom Functions for widgets

//Shortcodes	
	require_once ( ASH_SHORTCODES . 'shortcodesLoader.php');				//Shortcodes - Juno

//MetaBoxes
	require_once ( ASH_CONFIG . 'MetaBoxes.php');							//Metaboxes

//Format
	require_once ( ASH_FUNCTIONS . 'format.DynamicExcerpt.php');			//Custom Excerpt/Title lenght
	require_once ( ASH_FUNCTIONS . 'format.TruncateTitle.php');				//Custom Excerpt/Title lenght
	require_once ( ASH_FUNCTIONS . 'format.FirstParagraphLead.php');		//Custom Excerpt/Title lenght
	require_once ( ASH_FUNCTIONS . 'format.ExcerptMore.php');

//Media	
	require_once ( ASH_FUNCTIONS . 'media.AutoFeaturedImage.php'); 			//First Image in post as featured Image
	require_once ( ASH_FUNCTIONS . 'media.FeaturedImageTop.php');			//Move Featured Image MetaBox to the Top
	require_once ( ASH_FUNCTIONS . 'media.Mimes.php');						//Adds other files extensions to media upload
	require_once ( ASH_FUNCTIONS . 'media.Favicons.php');					//Manages site favicons
	require_once ( ASH_FUNCTIONS . 'media.FeatImageAdmin.php');				//Adds images to admin columns
	require_once ( ASH_FUNCTIONS . 'media.RemoveP-TagsImages.php');			//Rmove p tags from images

//Navigation	
	require_once ( ASH_FUNCTIONS . 'nav.Breadcrumbs.php');					//Breadcrumbs for Bootstrap
	require_once ( ASH_FUNCTIONS . 'nav.PageNavBootstrap.php');				//Page Navigation (page_nav) for Bootstrap

//Admin
	require_once ( ASH_FUNCTIONS . 'admin.CustomLogin.php');				//Custom Login Styles & functions
	require_once ( ASH_FUNCTIONS . 'admin.CustomRssDashboardWidget.php'); 	//Custom RSS Dashboard Widget
	require_once ( ASH_FUNCTIONS . 'admin.ColumnStatus.php'); 				//Change Bg Color of Draft, Pending, etc


//Clean Stuff	
	require_once ( ASH_FUNCTIONS . 'clean.DashboardWidgets.php'); 			//Disable Dashboard Widgets
	require_once ( ASH_FUNCTIONS . 'clean.WordpressHead.php');				//Disable stuff Wordpress sends to the <head>

//Frontend stuff
	require_once ( ASH_FUNCTIONS . 'frontend.PostViews.php');				//Adds number of post views
	require_once ( ASH_FUNCTIONS . 'frontend.RelatedPosts.php');			//Adds related posts functionality
	
//Client stuff
	require_once ( ASH_XTRA . 'client/client.CustomFoooter.php');			//Adds custom admin footer text
	require_once ( ASH_XTRA . 'client/client.DashboardClientWidget.php'); 	//Custom Dashboard Widget for client support
	
//Users
	require_once ( ASH_FUNCTIONS . 'user.ProfileFields.php');				//Adds + fields in profile page like facebook, pinterest, etc
	require_once ( ASH_FUNCTIONS . 'user.HideOtherPostsAdmin.php');			//Only show posts and media of the logged-in Author
	
//Updates
	require_once ( ASH_UPDATER . 'updt.php');								// Updater, for themes updates.





//Includes	
	require_once ( ASH_INC . 'featured-image.php');							//Featured image in a function
	require_once ( ASH_INC . 'social-icons.php'); 							// Our Social icons for the footer
	require_once ( ASH_INC . 'menus.php'); 	
	
	
//Xtra Stuff
	require_once ( ASH_XTRA . 'post-types/post-types-loader.php');			// Add some post types
?>