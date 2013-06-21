<?php
/**
 * Shortcode Text Highlight
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function highlight_green( $atts, $content = null ) {
    return '<span class="highlight-green">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_green', 'highlight_green');


function highlight_yellow( $atts, $content = null ) {
    return '<span class="highlight-yellow">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_yellow', 'highlight_yellow');


function highlight_red( $atts, $content = null ) {
    return '<span class="highlight-red">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_red', 'highlight_red');

?>