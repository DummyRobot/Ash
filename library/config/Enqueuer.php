<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//										REGISTER & ENQUEUE JAVASCRIPT
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function ash_add_scripts()  {
	//SMOF code to get values inside a function - 
	$themedata = wp_get_theme();
    $themename = str_replace( ' ','',strtolower($themedata['Name']) );
    $smof_data = get_option($themename.'_options');

	global $options;
	
	
	wp_register_script('custom', get_template_directory_uri() . '/library/js/custom.js',array('jquery'), '1.0', false);
	wp_register_script('wpbs-scripts', get_template_directory_uri() . '/library/js/scripts.js', array('jquery'), '1.2');
	
	//Bootstrap
	wp_register_script('bootstrap', get_template_directory_uri() . '/library/js/bootstrap.min.js', array('jquery'), '1.2');
  	
  	//Modernizr
    wp_register_script('modernizr', get_template_directory_uri() . '/library/js/modernizr.full.min.js', array('jquery'), '1.2');
  
	//Wookmark
    //imagesLoaded MUST BE loaded before wookmark to work.
    wp_register_script('imagesloaded', get_template_directory_uri() . '/library/js/jquery.imagesloaded.js', array('jquery'), '1.2');
    wp_enqueue_script('imagesloaded');
    
    wp_register_script('wookmark', get_template_directory_uri() . '/library/js/jquery.wookmark.min.js', array('jquery'), '1.2');
  	wp_enqueue_script('wookmark');


	//prettyPhoto
	wp_register_script('prettyPhoto', get_template_directory_uri() . '/library/js/jquery.prettyPhoto.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('prettyPhoto');
	
	
	//gMaps
	if ( is_page_template('page-templates/page-contact.php') ) { // Only enqueue escript if in page-contact.php page template
	//map clusters
	wp_enqueue_script('gmaps-cluster', 'http://maps.google.com/maps/api/js?sensor=true', array('jquery'),'1.0', true);
	//gmapsjs
	wp_enqueue_script('gmapsjs', get_template_directory_uri() . '/library/js/gmaps.min.js', array('jquery'),'1.0', true);
	//Quick Contact Form
	wp_enqueue_script('jquery-form');
	wp_register_script('quick-contact', get_template_directory_uri() . '/library/js/contact.min.js', array('jquery','jquery-form'), '1.0', true);
	wp_enqueue_script('quick-contact');
	} //End if is page template page-contact.php
	
	//SuperSlides
	wp_register_script('animate', get_template_directory_uri() . '/library/js/superslides/jquery.jquery.animate-enhanced.min.js', array('jquery'), '1.0', true);
	wp_register_script('easing', get_template_directory_uri() . '/library/js/superslides/jquery.easing.1.3.js', array('jquery'), '1.0', true);
	wp_register_script('ss', get_template_directory_uri() . '/library/js/superslides/jquery.superslides.min.js', array('jquery'), '1.0', true);
	wp_register_script('ss-application', get_template_directory_uri() . '/library/js/superslides/application.js', array('jquery'), '1.0', true);
	
	//if ( is_page_template('page-templates/page-superslides.php') ) { // Only enqueue escript if in page-contact.php page template
		wp_enqueue_script('animate');
		wp_enqueue_script('easing');
		wp_enqueue_script('ss');
		wp_enqueue_script('ss-application');
	//} //End if is page template page-superslides.php
	
	
	
	
	//Comment Reply
	if (!is_admin()){ if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) 
		wp_enqueue_script('comment-reply'); 
	}//End comment-reply conditional
	
	
			//wp_enqueue_script('custom'); 
			wp_enqueue_script('bootstrap');
		    wp_enqueue_script('wpbs-scripts');
		    wp_enqueue_script('modernizr');
		    wp_enqueue_script('masonry');
		    wp_enqueue_script('masonry-custom');
	

}
add_action('wp_enqueue_scripts', 'ash_add_scripts');



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//										REGISTER & ENQUEUE CSS
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// enqueue styles
function ash_add_styles() { 
	
	//======================================================
	//Bootstrap CSS from Official Boostrap
		//wp_register_style( 'bootstrap', get_template_directory_uri() . '/library/css/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
		//wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/library/css/bootstrap/css/bootstrap-responsive.min.css', array(), '1.0', 'all' );
			
			//wp_enqueue_style( 'bootstrap' );
			//wp_enqueue_style( 'bootstrap-responsive' );
	
	//======================================================
	//Bootstrap with no icons CSS from Font Awesome
		wp_register_style( 'bootstrap-awesome', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css', '1.0', 'all');
		wp_register_style( 'awesome-font', 'http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css', '1.0', 'all');
			
			wp_enqueue_style('bootstrap-awesome');
	        wp_enqueue_style('awesome-font');
	
	//======================================================        
	//prettyPhoto css plus the Juno Skin css        
		wp_register_style('prettyPhoto', get_template_directory_uri() . '/library/css/prettyPhoto.min.css', array(), '1.0', 'all');
		wp_register_style('prettyPhoto-JunoSkin', get_template_directory_uri() . '/library/css/prettyPhoto_JunoSkin.css', array(), '1.0', 'all');
	 		
	 		wp_enqueue_style('prettyPhoto');
	        wp_enqueue_style('prettyPhoto-JunoSkin');
    	
    	
   	//superslides Css        
		wp_register_style('ss', get_template_directory_uri() . '/library/css/superslides.css');
    	wp_enqueue_style('ss');
	//======================================================        
	//Our main style.css file
		wp_register_style('wp-bootstrap', get_stylesheet_uri(), array(), '1.0', 'all');
    	
    		wp_enqueue_style('wp-bootstrap');
    	

}
add_action( 'wp_enqueue_scripts', 'ash_add_styles' );