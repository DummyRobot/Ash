<?php
/**
 * Template Name: Links
 * Description: A Page Template for displayng the links of the Blogroll.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; get_header(); ?>


<div class="container">	

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
			<div class="container">
				<?php ash_breadcrumbs(); ?>
			</div><!--/.container -->
		<?php } ?>
		
		<header>
			<div class="page-header"><h1><?php the_title(); ?></h1></div>
		</header> <!-- /article header -->	
	
	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span12 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix prettybox'); ?> role="article">

				<section class="post_content">
					<?php the_content(); ?>
				</section> <!-- /article section -->

				<ul>
					<!--List Links Without category title (Blogroll)-->
					<?php //wp_list_bookmarks('categorize=0&title_li='); ?>
					<?php wp_list_bookmarks('show_description=1'); ?>
				</ul>

			</article> <!-- /article -->

			<?php endwhile; endif; ?>

		</div> <!-- /#main -->

		<?php //get_sidebar(); // sidebar 1 ?>

	</div> <!-- /#content -->

</div> <!-- /.container -->

<?php get_footer(); ?>