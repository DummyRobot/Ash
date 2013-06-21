<?php
/**
 * The template used to display the Search page results.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
get_header();
global $smof_data ?>

<div class="container">

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
		<nav class="container">
			<?php ash_breadcrumbs(); ?>
		</nav><!--/.container -->
		<?php } ?>

	<div class="page-header">
		<h1><span><?php _e("Search Results for","ash"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1>
	</div>

		
	<div id="content" class="row clearfix">

		<?php //Show Sidebar in Search Results page IF List layout is enabled in Admin Options, ELSE show grid layout.
			if ($smof_data['ash_archives_layout'] == 'list') { ?>
			<div id="main" class="span8 clearfix" role="main">
			
			<?php get_template_part('library/inc/layouts/list','search');?>	
			
			</div> <!-- /#main -->
			
		<?php } else { ?>
			
			<?php get_template_part('library/inc/layouts/grid','search');?>	
		
		<?php } ?>

			
			
				
		<?php //Show Sidebar in Search Results page IF is enabled in Admin Options, ELSE hide it.
			if ($smof_data['ash_archives_layout'] == 'list') { ?>
			<?php get_sidebar(); // sidebar 1 ?>
		<?php } ?>
				
	</div> <!-- /#content -->
	
	<?php ash_page_nav();?>
	
</div> <!-- /#container -->

<?php get_footer(); ?>