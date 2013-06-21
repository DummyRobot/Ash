<?php
/**
 * Shortcode Tips
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 

//	Bubble Tip - Default on top
function tip( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => ''
            
        ), $atts);
        
   return'<span class="tip" title="'. $atts['title'] .'">' . do_shortcode($content) . '</span>';
}
add_shortcode('tip', 'tip');


//	Bubble Tip - on the bottom
function tip_bottom( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => ''
            
        ), $atts);
        
   return'<span class="tip-s" title="'. $atts['title'] .'">' . do_shortcode($content) . '</span>';
}
add_shortcode('tip_bottom', 'tip_botom');

?>