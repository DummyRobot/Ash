<?php
/**
 * Shortcode Columns
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */




// Shortcode Column Style
function one_sixth( $atts, $content = null ) {
    return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'one_sixth');

function one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'one_fourth');

function one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth_last', 'one_fourth_last');

function one_fifth( $atts, $content = null ) {
    return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'one_fifth');

function one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth_last', 'one_fifth_last');

function one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'one_third');

function one_third_last( $atts, $content = null ) {
   return '<div class="one_third_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third_last', 'one_third_last');

function one_half( $atts, $content = null ) {
    
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'one_half');

function one_half_last( $atts, $content = null ) {
   return '<div class="one_half_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half_last', 'one_half_last');

function two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third');

function two_third_last( $atts, $content = null ) {
   return '<div class="two_third_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third_last', 'two_third_last');

function three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth');

function three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth_last', 'three_fourth_last');




function space_separator( $atts, $content = null ) {
   return '<div class="space20"></div>';
}
add_shortcode('space_separator', 'space_separator');

?>