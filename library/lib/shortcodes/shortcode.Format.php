<?php
/**
 * Shortcode Text Format
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
 

function separator_line( $atts, $content = null ) {
   return '<div class="separator_line"></div>';
}
add_shortcode('separator_line', 'separator_line');


function separator_dotted( $atts, $content = null ) {
   return '<div class="separator_dotted"></div>';
}
add_shortcode('separator_dotted', 'separator_dotted');

function separator_dashed( $atts, $content = null ) {
   return '<div class="separator_dashed"></div>';
}
add_shortcode('separator_dashed', 'separator_dashed');


?>