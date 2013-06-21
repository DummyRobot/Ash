<?php

/*/*====================================================================================
 * Function for adding lead class to first paragraph
 *
 * Based on: http://wp-snippets.com/truncate-post-title/
 *
 * Whenever you're in need of truncating a title, call: <?php ash_Title(50);?>... - Where (50) is the number of Characters it allows before truncating!
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

function first_paragraph( $content ){
    global $post;

    // if we're on the homepage, don't add the lead class to the first paragraph of text
    if( is_page_template( 'page-homepage.php' ) )
        return $content;
    else
        return preg_replace('/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1);
}
add_filter( 'the_content', 'first_paragraph' );

?>