<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
get_header(); ?>

<div class="container">

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
		<nav class="container">
			<?php ash_breadcrumbs(); ?>
		</nav><!--/.container -->
		<?php } ?>

		<div class="page-header">
			<?php if (is_category()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Category:", "ash"); ?></span> <?php single_cat_title(); ?>
				</h1>
			<?php } elseif (is_tag()) { ?> 
				<h1 class="archive_title h2">
					<span><?php _e("Tag:", "ash"); ?></span> <?php single_tag_title(); ?>
				</h1>
			<?php } elseif (is_author()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Posts By:", "ash"); ?></span> <?php get_the_author_meta('display_name'); ?>
				</h1>
			<?php } elseif (is_day()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Daily Archives:", "ash"); ?></span> <?php the_time('l, F j, Y'); ?>
				</h1>
			<?php } elseif (is_month()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Monthly Archives:", "ash"); ?>:</span> <?php the_time('F Y'); ?>
				</h1>
			<?php } elseif (is_year()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Yearly Archives:", "ash"); ?>:</span> <?php the_time('Y'); ?>
				</h1>
			<?php } ?>
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