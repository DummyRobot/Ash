<?php
/**
 * The Header
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data ?>
<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	<title><?php wp_title( '|', true, 'right' ); ?></title>
				
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
	<!-- Favicons -->
	<?php ash_favicons();?>
		
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
		
	<!-- Custom Css -->  	
	<?php include (TEMPLATEPATH . '/library/css/options-css.php'); ?>
		
	<?php //Typeahead plugin - if top nav search bar enabled
		if ($smof_data['navtop_search'] == '1') {
		require_once('library/lib/functions/search.Typeahead.php');
	} ?>
				
</head>
	
<body <?php body_class(); ?>>
				
	<header role="banner">
		
		<div id="inner-header" class="clearfix">
				
		<?php if ($smof_data['navbar_inverse'] == '1') { ?>
			<div class="navbar navbar-inverse navbar-fixed-top">
		<?php } else { ?>
			<div class="navbar navbar-fixed-top">
		<?php } ?>
				
				<div class="navbar-inner">
					<div class="container-fluid nav-container">
						<nav role="navigation">
							<a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
								<?php if ($smof_data['ash_logo']) { ?>
									<img src="<?php echo $smof_data['ash_logo'];?>" alt="<?php bloginfo('name'); ?>" >
									<?php }
									if ($smof_data['navtop_title'] == '1') bloginfo('name'); ?></a>

							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
							</a>
								
							<div class="nav-collapse">
								<?php ash_main_nav(); // Adjust using Menus in Wordpress Admin ?>
							</div>
								
						</nav>
							
						<?php if ($smof_data['navtop_search'] == '1') {?>
						<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','ash'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
						</form>
						<?php } ?>
							
					</div> <!-- end .nav-container -->
				</div> <!-- end .navbar-inner -->
			</div> <!-- end .navbar -->
			
		</div> <!-- end #inner-header -->
		
	</header> <!-- end header -->