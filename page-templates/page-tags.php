<?php
/**
 * Template Name: Tag Cloud
 * Description: A Page Template for displaying a Tag Cloud
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

			</article> <!-- /article -->

			<?php endwhile; endif; ?>

			<section>
				<?php wp_tag_cloud(array(
				  	'smallest' => 14,      // size of least used tag
				  	'largest' => 35,       // size of most used tag
				  	'unit' => 'px',        // unit for sizing
				  	'orderby' => 'name',   // alphabetical
				  	'order' => 'ASC'       // starting at A
				  	//'exclude' => 6         // ID of tag to exclude from list
					));
				?>
			</section>

		</div> <!-- /#main -->

	</div> <!-- /#content -->

</div> <!-- /.container -->

<?php get_footer(); ?>