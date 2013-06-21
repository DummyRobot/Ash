<?php 
global $smof_data ?>

<style>
	body {
		background-color: <?php echo $smof_data['custom_bg_color'];?>;
		<?php if ($smof_data['custom_bg_img'] == 1 ){ ?>
		background: url('<?php echo $smof_data['custom_bg_image'];?>') repeat fixed;
		<?php } ?>
		
		<?php if ($smof_data['custom_bg_uploaded']){ ?>
		background: url('<?php echo $smof_data['custom_bg_uploaded'];?>') repeat center center fixed;
		background-size: cover;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-background-size:cover;
		<?php } ?>
		
		<?php if(is_home() && $smof_data['ash_layout'] == 'fullscreen') { ?>
		padding-top: 0px;
		<?php } ?>	
	}

	<?php if ($smof_data['carousel_bg_img'] == '1') { ?>
	#myCarousel {
		background: url(<?php echo $smof_data['carousel_bg_image'];?>) repeat;
	}
	<?php }	?>

	<?php // Let's hide the carousel arrows if only 1 slide is chosen ?>
	<?php if ($smof_data['wide_carousel_slides_number'] == '1') { ?>
	#myCarousel .carousel-control {
		display: none;
	}
	<?php }	?>


	<?php //Custom Css from SMOF panel ?>
	<?php echo $smof_data['custom_css'];?>
</style>