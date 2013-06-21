<?php

global $smof_data;

get_header(); ?>

<?php if ($smof_data['ash_layout'] == 'fullscreen') { //IF user chooses fullscreen homa layout THEN disable all other layouts.

		include(ASH_LAYOUTS .'fullscreen.php');

	} else { //Choose other layout except fullscreen?>


	<?php // Call a Carousel in chosen in admin.
		if ($smof_data['homepage_carousel'] == '1')
		{ 
			if(is_home() && !is_paged()) 
				{
					include(ASH_LAYOUTS .'carousel.php');
				}
		} ?>


	<?php // Call the homepage sidebat widget.
		if(is_home() && !is_paged()){ ?>
	<div class="container clearfix">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?>
		<?php endif; ?>
	</div>
	<?php } ?>


		<?php // Call the Home Page Layout.
			if ($smof_data['ash_layout'] == 'grid') { ?>

			<div class="container">
				<div id="content" class="row grid">
					<?php get_template_part('library/inc/layouts/grid','home'); ?>
				</div>
			</div>
				<?php ash_page_nav();?>

		<?php } elseif ($smof_data['ash_layout'] == 'masonry') {

				if ($smof_data['masonry_wide'] == '1') { ?>

					<div class="container-fluid">
						<div id="masonry" class="row-fluid clearfix">
							<?php get_template_part('library/inc/layouts/masonry','home'); ?>
						</div>
					</div>
						<?php ash_page_nav();?>

				<?php } else { ?>

					<div class="container">
						<div id="masonry" class="row-fluid
						 clearfix">
							<?php get_template_part('library/inc/layouts/masonry','home'); ?>
						</div>
					</div>
						<?php ash_page_nav();?>

				<?php } // End IF Masonry Wide?>

		<?php } else { ?>
		
		<div class="container">	
			<div id="content" class="row clearfix">
				<div id="main" class="span8 clearfix" role="main">
					<?php get_template_part('library/inc/layouts/list','home');?>
				</div> <!-- /#main -->
				
				<?php get_sidebar(); // sidebar 1 ?>
			
			</div> <!-- /#content -->
		</div> <!-- /.container -->
		<?php } ?>


<?php get_footer(); ?>

<?php }  //End IF fullscreen ?>