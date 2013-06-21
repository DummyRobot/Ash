<?php

	// DEFINE ASH PATHS
	define('ASH_BASE',		get_template_directory().'/library/lib/');			// Ash Base Dir
	
	define('ASH_CONFIG',	get_template_directory().'/library/config/');		// Ash Theme Configuration
	define('ASH_INC',		get_template_directory().'/library/inc/');			// Ash Includes Folder
	define('ASH_LAYOUTS',	get_template_directory().'/library/inc/layouts/');	// Ash Layouts Folder
	
	define('ASH_DOC',						ASH_BASE.'doc/');					// Ash Help Files
	define('ASH_FUNCTIONS',					ASH_BASE.'functions/');				// Ash Custom Functions
	define('ASH_OPTIONS',	get_template_directory().'/library/lib/options/');	// Ash Options Dir	
	define('ASH_PLUGINS',					ASH_BASE.'plugins/');				// Ash packed plugins
	define('ASH_SHORTCODES',				ASH_BASE.'shortcodes/');			// Ash Shortcodes
	define('ASH_UPDATER', 					ASH_BASE.'updater/');				// Ash Updates
	define('ASH_WIDGETS',					ASH_BASE.'widgets/');				// Ash Widgets
	
	define('ASH_XTRA',		get_template_directory().'/library/xtra/');			// Ash Extra Stuff (post types, etc)


// We load all custom functions/files/actions/hooks from this next file:
	require_once(ASH_CONFIG . 'Loader.php');

/**
 * Ash Framework functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 
function ash_setup() {
	/*
	*	Based on twentytwelve
	*
	*
	======================================================================================================================
	 Makes Ash available for translation
	======================================================================================================================
	* Translations can be added to the /languages/ directory.
	* If you're building a theme based on Ash, use a find and replace
	* to change 'Ash' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'ash', get_template_directory() . '/library/languages' );

	/*======================================================================================================================
	// This theme styles the visual editor with editor-style.css to match the theme style.
	========================================================================================================================
	*/
	add_editor_style('library/css/editor-style.css');

	/*======================================================================================================================
	// Adds RSS feed links to <head> for posts and comments.
	========================================================================================================================
	*/
	add_theme_support( 'automatic-feed-links' );
	
	/*======================================================================================================================
	// This theme supports a variety of post formats.
	========================================================================================================================
	*/
	add_theme_support( 'post-formats', array( 'aside', 'link', 'image', 'gallery', 'video', 'audio', 'status', 'quote', 'chat' ) );

	
	/*======================================================================================================================
	// This theme uses wp_nav_menu() in one location.
	========================================================================================================================
	*/
	// This theme uses wp_nav_menu() in two locations.
	//register_nav_menu( 'primary', __( 'Primary Menu', 'magazine-basic' ) );
	//register_nav_menu( 'secondary', __( 'Secondary Menu', 'magazine-basic' ) );

	add_theme_support( 'menus' );            // wp menus
	
	register_nav_menus(                      // wp3+ menus
		array( 
			'main_nav' => 'The Main Menu',   // main nav in header
			'footer_links' => 'Footer Links' // secondary nav in footer
		)
	);
	
	/*=====================================================================================================================
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	//add_theme_support( 'custom-background', array(
	//	'default-color' => 'e6e6e6',
	//) );

	
	/*=====================================================================================================================
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	========================================================================================================================
	*/
	 add_theme_support('post-thumbnails');

    set_post_thumbnail_size( 400, 300, true ); 	 // default Post Thumbnail dimensions (cropped) for Grid Layout
        
    
    // Add more images sizes
	add_image_size( '64x64', 64, 64, true );		//For Widget Thumbs (cropped)
	add_image_size( '200x200', 200, 200, true );	//Generic (cropped)
	add_image_size( '300x200', 300, 200, true );	//Generic Wide (cropped)
	add_image_size( '500x400', 500, 400, true );	//Generic Wide (cropped)
	add_image_size( 'carousel', 970, 400, true);	//For Carousel (cropped)
	add_image_size( 'masonry', 400, 9999);			//Masonry
	
	
	/*=====================================================================================================================
	// Register Sidebars
	========================================================================================================================
	*/
	// Sidebars & Widgetizes Areas
    register_sidebar(array(
    	'id' 			=> 'sidebar1',
    	'name' 			=> 'Main Sidebar',
    	'description' 	=> 'Used on every page BUT the homepage page template.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));
    
    register_sidebar(array(
    	'id' 			=> 'sidebar2',
    	'name' 			=> 'Homepage Sidebar',
    	'description' 	=> 'Used only on the homepage page.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

    register_sidebar(array(
      'id' 				=> 'sidebar-footer1',
      'description' 	=> 'This is a description',
      'name' 			=> 'Footer',
      'before_widget' 	=> '<div id="%1$s" class="widget span4 %2$s">',
      'after_widget' 	=> '</div>',
      'before_title' 	=> '<h4 class="widgettitle">',
      'after_title' 	=> '</h4>',
    ));

    
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
}

add_action( 'after_setup_theme', 'ash_setup' );








// Set content width
if ( ! isset( $content_width ) ) $content_width = 580;


/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 *
 * @return string Filtered title.
 *
 * @note may be called from http://example.com/wp-activate.php?key=xxx where the plugins are not loaded.
 */
function ash_filter_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'ash' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'ash_filter_title', 10, 2 );





/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<div class="comment-author vcard row-fluid clearfix">
				<div class="avatar span3">
					<?php echo get_avatar( $comment, $size='75' ); ?>
				</div>
				<div class="span9 comment-text">
					<?php printf('<h4>%s</h4>', get_comment_author_link()) ?>
					<?php edit_comment_link(__('Edit','ash'),'<span class="edit-comment btn btn-small btn-info"><i class="icon-white icon-pencil"></i>','</span>') ?>
                    
                    <?php if ($comment->comment_approved == '0') : ?>
       					<div class="alert-message success">
          				<p><?php _e('Your comment is awaiting moderation.','ash') ?></p>
          				</div>
					<?php endif; ?>
                    
                    <?php comment_text() ?>
                    
                    <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
                    
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
			</div>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

// Display trackbacks/pings callback function
function list_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
?>
        <li id="comment-<?php comment_ID(); ?>"><i class="icon icon-share-alt"></i>&nbsp;<?php comment_author_link(); ?>
<?php 

}

// Only display comments in comment count (which isn't currently displayed in wp-bootstrap, but i'm putting this in now so i don't forget to later)
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
	    $comments_by_type = separate_comments(get_comments('status=approve&post_id=' . $id));
	    return count($comments_by_type['comment']);
	} else {
	    return $count;
	}
}

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch( $form ) {
  $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
  <label class="screen-reader-text" for="s">' . __('Search for:', 'ash') . '</label>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the Site..." />
  <input type="submit" id="searchsubmit" value="'. esc_attr__('Search','ash') .'" />
  </form>';
  return $form;
} // don't remove this bracket!

/****************** password protected post form *****/

add_filter( 'the_password_form', 'custom_password_form' );

function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<div class="clearfix"><form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
	' . '<p>' . __( "This post is password protected. To view it please enter your password below:" ,'ash') . '</p>' . '
	<label for="' . $label . '">' . __( "Password:" ,'ash') . ' </label><div class="input-append"><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" class="btn btn-primary" value="' . esc_attr__( "Submit",'ash' ) . '" /></div>
	</form></div>
	';
	return $o;
}

/*********** update standard wp tag cloud widget so it looks better ************/

add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );

function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
}

// filter tag cloud output so that it can be styled by CSS
function add_tag_class( $taglinks ) {
    $tags = explode('</a>', $taglinks);
    $regex = "#(.*tag-link[-])(.*)(' title.*)#e";
    $term_slug = "(get_tag($2) ? get_tag($2)->slug : get_category($2)->slug)";

        foreach( $tags as $tag ) {
        	$tagn[] = preg_replace($regex, "('$1$2 label tag-'.$term_slug.'$3')", $tag );
        }

    $taglinks = implode('</a>', $tagn);

    return $taglinks;
}

add_action( 'wp_tag_cloud', 'add_tag_class' );

add_filter( 'wp_tag_cloud','wp_tag_cloud_filter', 10, 2) ;

function wp_tag_cloud_filter( $return, $args )
{
  return '<div id="tag-cloud">' . $return . '</div>';
}




// Remove height/width attributes on images so they can be responsive
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


// Add thumbnail class to thumbnail links
function add_class_attachment_link( $html ) {
    $postid = get_the_ID();
    $html = str_replace( '<a','<a class="thumbnail"',$html );
    return $html;
}
add_filter( 'wp_get_attachment_link', 'add_class_attachment_link', 10, 1 );





//Add rel prettyphoto to gallery shortcode
//based on: http://www.sant-media.co.uk/2010/07/how-to-use-prettyphoto-in-wordpress-galleries/




add_filter( 'wp_get_attachment_link', 'ash_prettyadd');
 
function ash_prettyadd ($content) {
	$content = preg_replace("/<a/","<a rel=\"prettyPhoto[pp_gal]\"",$content,1);
	return $content;
}

?>