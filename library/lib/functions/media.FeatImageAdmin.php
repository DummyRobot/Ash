<?php
/**
 * Add featured image thumbnail to WordPress admin columns.
 *
 * Based on: http://www.tcbarrett.com/2011/10/add-featured-image-thumbnail-to-wordpress-admin-columns/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


// Dummy up theme support.
//add_theme_support( 'post-thumbnails' );

// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'ash_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'ash_add_post_thumbnail_column', 5);

// Add the column
function ash_add_post_thumbnail_column( $cols ){
  $ashcolsstart = array_slice( $cols, 0, 1, true );
  $ashcolsend   = array_slice( $cols, 1, null, true );

  $mycolls = array_merge(
    $ashcolsstart,
    array( 'ash_post_thumb' => __('Image','ash') ),
    $ashcolsend
  );
  return $mycolls;
}

// Hook into the posts an pages column managing. Sharing function callback again.
add_action('manage_posts_custom_column', 'ash_display_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'ash_display_post_thumbnail_column', 5, 2);

// Grab featured-thumbnail size post thumbnail and display it.
function ash_display_post_thumbnail_column($col, $id){
  switch($col){
    case 'ash_post_thumb':
      if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( '64x64' );
      else
        echo 'Not supported in theme';
      break;
  }
}
?>