<?php
/**
 * The Books Custom Post Type & Taxonomies.
 *
 * More on: http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
add_action('init', 'books_register');

function books_register() {
 
	$labels = array(
		'name' => 			__('Books', 'ash'),
		'singular_name' => __('Books', 'ash'),
		'add_new' => __('Add New Book', 'ash'),
		'add_new_item' => __('Add New Book','ash'),
		'edit_item' => __('Edit Book','ash'),
		'new_item' => __('New Book','ash'),
		'view_item' => __('View Book','ash'),
		'search_items' => __('Search Book','ash'),
		'not_found' =>  __('Nothing found','ash'),
		'not_found_in_trash' => __('Nothing found in Trash','ash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'has_archive' => true, // Can also be >true< but archive returns 404
		'menu_position' => 5,  //Admin Menu Position
		'menu_icon' => get_template_directory_uri() . '/library/xtra/post-types/books/books18.png',
		'rewrite' => true,
		'capability_type' => 'post',//post or page
		'hierarchical' => true,
		'can_export' => true,
		'supports' => array('title','thumbnail','categories','comments','custom-fields'),
		'taxonomies' => array('post_tag') // this is IMPORTANT
	  ); 
 
	register_post_type( 'books' , $args );








/*-----------------------------------------------------------------------------------*/
//		TAXONOMIES
/*-----------------------------------------------------------------------------------*/


	// Gallery Type Custom Taxonomy - Materials
	//register_taxonomy( 'style', 'books',
	//			  	array(	"hierarchical" => true,
	//						"label" => __('Style','ash'),
	//						"rewrite" => true,
	//						"query_var"=>true
	//					  )
	//				);
}






/*-----------------------------------------------------------------------------------*/
//	Add filter to ensure the CPT, is displayed when user updates a CPT
/*-----------------------------------------------------------------------------------*/


function books_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['books'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Book updated. <a href="%s">View Book</a>', 'ash'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.', 'ash'),
    3 => __('Custom field deleted.', 'ash'),
    4 => __('Guru updated.', 'ash'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Book restored to revision from %s', 'ash'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Guru published. <a href="%s">View Book</a>', 'ash'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Book saved.', 'ash'),
    8 => sprintf( __('Book submitted. <a target="_blank" href="%s">Preview Book</a>', 'ash'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Book scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Book</a>', 'ash'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n('M j, Y @ G:i', strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Book draft updated. <a target="_blank" href="%s">Preview Book</a>', 'ash'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'books_updated_messages' );









/*-----------------------------------------------------------------------------------*/
//	Display contextual help for CPT
/*-----------------------------------------------------------------------------------*/


function books_add_help_text( $contextual_help, $screen_id, $screen ) { 
  //$contextual_help .= var_dump( $screen ); // use this to help determine $screen->id
  if ( 'books' == $screen->id ) {
    $contextual_help =
      '<p>' . __('Things to remember when adding or editing a Book:', 'ash') . '</p>' .
      '<ul>' .
      '<li>' . __('Specify the correct Categories such as Dimensions, Year and Materials.', 'ash') . '</li>' .
      '<li>' . __('Specify the correct author of the Art.', 'ash') . '</li>' .
      '</ul>' .
      '<p>' . __('If you want to schedule the Art review to be published in the future:', 'ash') . '</p>' .
      '<ul>' .
      '<li>' . __('Under the Publish module, click on the Edit link next to Publish.', 'ash') . '</li>' .
      '<li>' . __('Change the date to the date to actual publish this article, then click on Ok.', 'ash') . '</li>' .
      '</ul>' .
      '<p><strong>' . __('For more information:', 'ash') . '</strong></p>' .
      '<p>' . __('<a href="http://codex.wordpress.org/Posts_Edit_SubPanel" target="_blank">Edit Posts Documentation</a>', 'ash') . '</p>' .
      '<p>' . __('<a href="http://wordpress.org/support/" target="_blank">Support Forums</a>', 'ash') . '</p>' ;
  } elseif ( 'edit-book' == $screen->id ) {
    $contextual_help = 
      '<p>' . __('This is the help screen displaying the table of Book.', 'ash') . '</p>' ;
  }
  return $contextual_help;
}
add_action( 'contextual_help', 'books_add_help_text', 10, 3 );






/*-----------------------------------------------------------------------------------*/
// Change �Enter Title Here� Text For Custom Post Type
/*-----------------------------------------------------------------------------------*/


function change_books_cpt_default_title( $title ){
     $screen = get_current_screen();
 
     if  ( 'books' == $screen->post_type ) {
          $title = 'The Name of this Book';
     }
 
     return $title;
}
add_filter( 'enter_title_here', 'change_books_cpt_default_title' );







/*-----------------------------------------------------------------------------------*/
// Styling for the custom post type icon
/*-----------------------------------------------------------------------------------*/

add_action( 'admin_head', 'ash_books_icons' );
function ash_books_icons() {
    ?>
    <style type="text/css" media="screen">
		#icon-edit.icon32-posts-books {background: url(<?php get_template_directory_uri(); ?>/library/xtra/post-types/books/books32.png) no-repeat;}
    </style>
<?php }

?>