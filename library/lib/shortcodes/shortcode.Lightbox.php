<?php
/**
 * Shortcode LightBox Effects
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 


// Shortcode Lightbox Iframe
function lightbox_iframe( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'width' => '',
            'height' => '',
            'title' => ''
            
        ), $atts);
        
   return'<a href="'. $atts['url'] .'?iframe=true&width='. $atts['width'] .'&height='. $atts['height'] .'" rel="prettyPhoto[iframes]" title="'. $atts['title'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('lightbox_iframe', 'lightbox_iframe');
 
 
 
 
 
// Shortcode Lightbox Youtube Video
function lightbox_youtube( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'id' => '',
            'width' => '',
            'height' => '',
            'title' => ''
            
        ), $atts);
        
   return'<a href="http://www.youtube.com/watch?v='. $atts['id'] .'" rel="prettyPhoto" title="'. $atts['title'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('lightbox_youtube', 'lightbox_youtube');
 
 
// Shortcode Lightbox QuickTime
function lightbox_qt( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'width' => '',
            'height' => '',
            'title' => ''
            
        ), $atts);
        
   return'<a href="'. $atts['url'] .'?iframe=true&width='. $atts['width'] .'&height='. $atts['height'] .'" rel="prettyPhoto[movies]" title="'. $atts['title'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('lightbox_qt', 'lightbox_qt');

 
 
// Shortcode Lightbox Flash
function lightbox_flash( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'width' => '',
            'height' => '',
            'title' => ''
            
        ), $atts);
        
   return'<a href="'. $atts['url'] .'?iframe=true&width='. $atts['width'] .'&height='. $atts['height'] .'" rel="prettyPhoto[flash]" title="'. $atts['title'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('lightbox_flash', 'lightbox_flash');


?>