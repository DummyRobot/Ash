<?php
/**
 * Shortcodes for Bootstrap Buttons
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


//========================================================================
//
// 							Default Button
//
//========================================================================





//=================================================
// Shortcode Default Button Large
//=================================================
function BtnDefaultLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDefaultLarge', 'BtnDefaultLarge');

//=================================================
// Shortcode Default Button
//=================================================
function BtnDefault( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDefault', 'BtnDefault');

//=================================================
// Shortcode Default Button Small
//=================================================
function BtnDefaultSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDefaultSmall', 'BtnDefaultSmall');

//=================================================
// Shortcode Default Button Mini
//=================================================
function BtnDefaultMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDefaultMini', 'BtnDefaultMini');





//========================================================================
//
// 							Primary Button
//
//========================================================================





//=================================================
// Shortcode Primary Button Large
//=================================================
function BtnPrimaryLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-primary btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnPrimaryLarge', 'BtnPrimaryLarge');

//=================================================
// Shortcode Primary Button
//=================================================
function BtnPrimary( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-primary" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnPrimary', 'BtnPrimary');

//=================================================
// Shortcode Primary Button Small
//=================================================
function BtnPrimarySmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-primary btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnPrimarySmall', 'BtnPrimarySmall');

//=================================================
// Shortcode Primary Button Mini
//=================================================
function BtnPrimaryMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-primary btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnPrimaryMini', 'BtnPrimaryMini');




//========================================================================
//
// 							Info Button
//
//========================================================================





//=================================================
// Shortcode Info Button Large
//=================================================
function BtnInfoLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-info btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInfoLarge', 'BtnInfoLarge');

//=================================================
// Shortcode Info Button
//=================================================
function BtnInfo( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-info" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInfo', 'BtnInfo');

//=================================================
// Shortcode Info Button Small
//=================================================
function BtnInfoSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-info btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInfoSmall', 'BtnInfoSmall');

//=================================================
// Shortcode Info Button Mini
//=================================================
function BtnInfoMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-info btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInfoMini', 'BtnInfoMini');







//========================================================================
//
// 							Success Button
//
//========================================================================





//=================================================
// Shortcode Success Button Large
//=================================================
function BtnSuccessLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-success btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnSuccessLarge', 'BtnSuccessLarge');

//=================================================
// Shortcode Success Button
//=================================================
function BtnSuccess( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-success" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnSuccess', 'BtnSuccess');

//=================================================
// Shortcode Success Button Small
//=================================================
function BtnSuccessSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-success btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnSuccessSmall', 'BtnSuccessSmall');

//=================================================
// Shortcode Success Button Mini
//=================================================
function BtnSuccessMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-success btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnSuccessMini', 'BtnSuccessMini');







//========================================================================
//
// 							Warning Button
//
//========================================================================





//=================================================
// Shortcode Warning Button Large
//=================================================
function BtnWarningLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-warning btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnWarningLarge', 'BtnWarningLarge');

//=================================================
// Shortcode Warning Button
//=================================================
function BtnWarning( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-warning" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnWarning', 'BtnWarning');

//=================================================
// Shortcode Warning Button Small
//=================================================
function BtnWarningSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-warning btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnWarningSmall', 'BtnWarningSmall');

//=================================================
// Shortcode Warning Button Mini
//=================================================
function BtnWarningMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-warning btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnWarningMini', 'BtnWarningMini');







//========================================================================
//
// 							Danger Button
//
//========================================================================





//=================================================
// Shortcode Danger Button Large
//=================================================
function BtnDangerLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-danger btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDangerLarge', 'BtnDangerLarge');

//=================================================
// Shortcode Danger Button
//=================================================
function BtnDanger( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-danger" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDanger', 'BtnDanger');

//=================================================
// Shortcode Danger Button Small
//=================================================
function BtnDangerSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-danger btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDangerSmall', 'BtnDangerSmall');

//=================================================
// Shortcode Danger Button Mini
//=================================================
function BtnDangerMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-danger btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnDangerMini', 'BtnDangerMini');







//========================================================================
//
// 							Inverse Button
//
//========================================================================





//=================================================
// Shortcode Inverse Button Large
//=================================================
function BtnInverseLarge( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-inverse btn-large" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInverseLarge', 'BtnInverseLarge');

//=================================================
// Shortcode Inverse Button
//=================================================
function BtnInverse( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-inverse" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInverse', 'BtnInverse');

//=================================================
// Shortcode Inverse Button Small
//=================================================
function BtnInverseSmall( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => '_self'
            
        ), $atts);
        
   return'<a class="btn btn-inverse btn-small" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInverseSmall', 'BtnInverseSmall');

//=================================================
// Shortcode Inverse Button Mini
//=================================================
function BtnInverseMini( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'target' => ''
            
        ), $atts);
        
   return'<a class="btn btn-inverse btn-mini" href="'. $atts['url'] .'" target="'. $atts['target'] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('BtnInverseMini', 'BtnInverseMini');

?>