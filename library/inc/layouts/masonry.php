<?php
/**
 * The template used to display the Masonry Layout.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data ?>
			
		<?php // Blog post query
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>$smof_data['masonry_posts']) );	
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		
		<?php if ($smof_data['masonry_columns'] == 2) {?>
		<div <?php post_class( 'span6 brick prettybox');?>>
									
		 <?php } elseif ($smof_data['masonry_columns'] == 3) {?>
		<div <?php post_class( 'span4 brick prettybox');?>>
									
		 <?php } elseif ($smof_data['masonry_columns'] == 4) {?>
		<div <?php post_class( 'span3 brick prettybox');?>>
									
		 <?php } elseif ($smof_data['masonry_columns'] == 5) {?>
		<div <?php post_class( 'span2 brick prettybox');?>>
									
		<?php } elseif ($smof_data['masonry_columns'] == 6) {?>
		<div <?php post_class( 'span2 brick prettybox');?>>
				
		<?php }?>	 
			

			<?php ash_featured_image('masonry');?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php ash_title(60);?></h3></a>

			<?php ash_excerpt(100);?>

		</div><!-- /.post_class -->

		<?php endwhile; endif; ?>