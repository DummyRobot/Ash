<?php
/**
 * Function for showing the number of Post/Page Views.
 *
 * Usage: in single.php inside the loop - <?php setPostViews(get_the_ID()); ?>
 *
 * 		To display views: <?php echo getPostViews(get_the_ID()); ?>
 *
 * based on: http://wpsnipp.com/index.php/functions-php/track-post-views-without-a-plugin-using-post-meta/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


//A few people have pointed out issues with this snippet also adding views to other posts. This issue appears to be with prefetching. The following code added to your functions.php should resolve this issue.

	//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	
?>